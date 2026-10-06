@extends('layouts.app')

@section('title', 'Orders')

@section('content')
    <div class="page-header">
        <div>
            <h1>Orders</h1>
            <p>Review customer orders and order status.</p>
        </div>
        <a href="{{ route('orders.create') }}" class="button">Add Order</a>
    </div>

    @if (session('success'))
        <div class="alert success">{{ session('success') }}</div>
    @endif

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Customer</th>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order)
                    <tr>
                        <td>{{ $order->customer_name }}</td>
                        <td>{{ $order->item_name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>${{ number_format($order->total_price, 2) }}</td>
                        <td>
                            @if ($order->status === 'Completed')
                                <span class="badge success">{{ $order->status }}</span>
                            @elseif ($order->status === 'Pending')
                                <span class="badge warning">{{ $order->status }}</span>
                            @else
                                <span class="badge">{{ $order->status }}</span>
                            @endif
                        </td>
                        <td>
                            <div class="actions">
                                <a class="button secondary" href="{{ route('orders.edit', $order->id) }}">Edit</a>
                                <form action="{{ route('orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Delete this order?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="muted">No orders found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
