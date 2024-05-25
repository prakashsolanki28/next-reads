@extends('layouts.public')
@section('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
@endsection
@section('content')
    <main class="container">

        <!-- Left Column / Headphones Image -->
        <div class="left-column">
            <img src="{{ $book->image }}" alt="" width="100px" style="opacity: 1;">
        </div>


        <!-- Right Column -->
        <div class="right-column">

            <!-- Product Description -->
            <div class="product-description">
                <span>Books</span>
                <h1>
                    {{ $book->title }}
                </h1>
                <br />
                <h2>~By {{ $book->editorial }}</h2>
                <h3>~isbn - {{ $book->isbn }}</h3>
                <h4>~Pages - {{ $book->num_pages }}</h4>
                <br />
                <p>
                    {{ Str::limit($book->description, 200, '...') }}
                </p>
            </div>

            <!-- Product Configuration -->
            <div class="product-configuration">
            </div>

            <!-- Product Pricing -->
            <div class="product-price">
                <span>
                    {{ $book->price }} ₹
                </span>
                <form action="{{ route('cart.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $book->id }}">
                    <button type="submit" class="cart-btn">Add to cart</button>
                </form>
            </div>
            <br />
            {{-- show success message --}}
            @if (session()->has('success'))
                <div class="alert alert-success" style="color: green;">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>
    </main>
@endsection
