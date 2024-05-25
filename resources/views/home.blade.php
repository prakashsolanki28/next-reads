@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">{{ __('Dashboard') }}</div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ __('You are logged in!') }}
            </div>
            @if (auth()->user()->role == 'admin')
                <div class="card-footer">
                    <a href="{{ route('admin.books.index') }}" class="btn btn-primary mx-1">Books</a>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-primary mx-1">Users</a>
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-primary mx-1">Orders</a>
                </div>
            @else
                <div class="card-footer">
                    <a href="{{ url('/') }}" class="btn btn-primary mx-1">Home</a>
                </div>
            @endif
        </div>
    </div>
    @if (auth()->user()->role == 'user')
        <div class="container mt-3">
            <div class="card">
                <div class="card-header">
                    Orders
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Order ID</th>
                                <th>Book</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (auth()->user()->orders as $order)
                                @foreach ($order->orderItems as $orderItem)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($orderItem->book->image) }}"
                                                alt="{{ $orderItem->book->title }}" style="width: 50px; height: 50px;">
                                        </td>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $orderItem->book->title }}</td>
                                        <td>{{ $orderItem->book->price }}</td>
                                    </tr>
                                @endforeach
                                <tr class="border-danger">
                                    <td colspan="3" class="text-end">Qty</td>
                                    <td>{{ $order->total_qty }}</td>
                                </tr>
                                <tr class="border-danger">
                                    <td colspan="3" class="text-end">Total</td>
                                    <td>{{ $order->total_price }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
@endsection
