<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Models\User;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(10);
        return view("admin.books.index", compact("books"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }


    public function import(Request $request)
    {
        // Validate the request json file

        $request->validate([
            'file' => 'required|mimes:json'
        ]);

        // get json file data

        // Get the uploaded file
        $file = $request->file('file');

        // Read the file content
        $jsonContent = file_get_contents($file->getPathname());

        // Decode the JSON data to a PHP array
        $data = json_decode($jsonContent, true);

        // Check if JSON decoding was successful
        if (json_last_error() !== JSON_ERROR_NONE) {
            return response()->json(['error' => 'Invalid JSON data'], 400);
        }

        return $data;

    }


    public function users()
    {
        $users = User::whereNot('role', 'admin')->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function orders()
    {
        $orders = Order::paginate(5);
        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::findOrFail($id);
        return view('product', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function search(Request $request)
    {
        $books = Book::where('title', 'LIKE', '%' . $request->value . '%')->paginate(10);
        return response()->json($books);
    }

    public function cartStore(Request $request)
    {
        $book = Book::findOrFail($request->id);

        $cart_books = session()->get('cart.books') ?? [];

        $total_amount = session('cart.total_amount') ?? 0; // Initialize to 0
        $total_amount += $book->price; // Add the price of the new book

        $total_books = session('cart.total_books') ?? 0; // Initialize to 0
        $total_books += 1; // Increment the total number of books by 1

        session()->put('cart.total_amount', $total_amount);
        session()->put('cart.total_books', $total_books);

        $cart_books[$book->id] = $book;

        session()->put('cart.books', $cart_books);

        return back()->with('success', 'Book added to cart successfully');
    }

    public function cartDestroy(string $id)
    {
        $cart_books = session()->get('cart.books') ?? [];

        // Check if the book exists in the cart
        if (array_key_exists($id, $cart_books)) {
            // Remove the book from the cart

            $book = $cart_books[$id];

            $total_amount = session('cart.total_amount') - $book->price;

            // Ensure total amount doesn't go negative
            if ($total_amount < 0) {
                $total_amount = 0;
            }

            session()->put('cart.total_amount', $total_amount);

            $total_books = session('cart.total_books') - 1;

            session()->put('cart.total_books', $total_books);

            unset($cart_books[$id]);
            session()->put('cart.books', $cart_books);
            return back()->with('success', 'Book removed from cart successfully');
        } else {
            // Book not found in cart
            return back()->with('error', 'Book not found in cart');
        }
    }


    public function checkout()
    {
        // check cart is empty
        $cart_books = session()->get('cart.books') ?? [];

        if (count($cart_books) <= 0) {
            return back()->with('error', 'Cart is empty');
        }

        $order = Order::create([
            'user_id' => auth()->id(),
            'total_price' => session('cart.total_amount'),
            'total_qty' => session('cart.total_books')
        ]);


        foreach ($cart_books as $key => $order_item) {
            OrderItem::create([
                'order_id' => $order->id,
                'book_id' => $order_item->id
            ]);
        }

        session()->forget('cart.books');
        session()->forget('cart.total_amount');
        session()->forget('cart.total_books');


        return redirect('home')->with('success', 'Order placed successfully');

    }


}
