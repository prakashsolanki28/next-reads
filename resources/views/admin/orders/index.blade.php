@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">{{ __('Users') }}
                <a href="{{ route('home') }}" class="btn btn-primary float-end">Dashboard</a>
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
                        @foreach ($orders as $order)
                            @foreach ($order->orderItems as $orderItem)
                                <tr>
                                    <td>
                                        <img src="{{ asset($orderItem->book->image) }}" alt="{{ $orderItem->book->title }}"
                                            style="width: 50px; height: 50px;">
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
                <div>
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
