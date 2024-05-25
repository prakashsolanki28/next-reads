@extends('layouts.public')
@section('content')
    <!-- partial:index.partial.html -->
    <div class="wrap cf">
        <div class="heading cf">
            <h1>My Cart</h1>
            <a href="#" class="continue">Continue Shopping</a>
        </div>
        <div class="cart">
            <ul class="cartWrap">

                @foreach (session('cart.books') ?? [] as $item)
                    <li class="items odd">
                        <div class="infoWrap">
                            <div class="cartSection">
                                <img src="{{ $item['image'] }}" alt="" class="itemImg" />
                                <p class="itemNumber #QUE-007544-002">{{ $item['isbn'] }}</p>
                                <h3>{{ $item['title'] }}</h3>
                                <p> <input type="text" class="qty" placeholder="3" /> x ₹{{ $item['price'] }}</p>
                                <p class="stockStatus"> In Stock</p>
                            </div>
                            <div class="prodTotal cartSection">
                                <p>₹{{ $item['price'] }}</p>
                            </div>
                            <div class="cartSection removeWrap">
                                <form action="{{ route('cart.destroy', $item['id']) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="remove" style="padding: 10px;">x</button>
                                </form>
                            </div>
                        </div>
                @endforeach


                <li class="items even">
                    <div class="special">
                        <div class="specialContent">Free gift with purchase!, gift wrap, etc!!</div>
                    </div>
                </li>


                <!--<li class="items even">Item 2</li>-->

            </ul>
        </div>

        <div class="promoCode"><label for="promo">Have A Promo Code?</label><input type="text" name="promo"
                placholder="Enter Code" />
            <a href="#" class="btn"></a>
        </div>

        <div class="subtotal cf">
            <ul>
                <li class="totalRow"><span class="label">Subtotal</span><span
                        class="value">₹{{ session('cart.total_amount') ?? '0' }}.00</span></li>

                <li class="totalRow final"><span class="label">Total</span><span
                        class="value">₹{{ session('cart.total_amount') ?? '0' }}.00</span></li>
                <li class="totalRow">
                    @if (auth()->check())
                        <a href="{{ route('checkout') }}" class="btn continue">Checkout</a>
                    @else
                        <a href="{{ route('login') }}" class="btn continue">Login to checkout</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>

    <!-- bottom navbar  -->
    <nav class="bottom-navbar">
        <a href="./index.html">home</a>
    </nav>
@endsection
