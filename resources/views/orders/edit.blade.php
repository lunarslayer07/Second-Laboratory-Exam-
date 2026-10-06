@extends('layouts.app')

@section('title', 'Edit Order')

@section('content')
    <div class="page-header">
        <div>
            <h1>Edit Order</h1>
            <p>Update order details and status.</p>
        </div>
    </div>

    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-grid">
            <div>
                <label for="customer_name">Customer Name</label>
                <input id="customer_name" name="customer_name" type="text" value="{{ old('customer_name', $order->customer_name) }}" required>
                @error('customer_name')<small class="muted">{{ $message }}</small>@enderror
            </div>

            <div>
                <label for="item_name">Item Name</label>
                <input id="item_name" name="item_name" type="text" value="{{ old('item_name', $order->item_name) }}" required>
                @error('item_name')<small class="muted">{{ $message }}</small>@enderror
            </div>

            <div>
                <label for="quantity">Quantity</label>
                <input id="quantity" name="quantity" type="number" min="1" value="{{ old('quantity', $order->quantity) }}" required>
                @error('quantity')<small class="muted">{{ $message }}</small>@enderror
            </div>

            <div>
                <label for="total_price">Total Price</label>
                <input id="total_price" name="total_price" type="number" step="0.01" min="0" value="{{ old('total_price', $order->total_price) }}" required>
                @error('total_price')<small class="muted">{{ $message }}</small>@enderror
            </div>

            <div>
                <label for="status">Status</label>
                <select id="status" name="status" required>
                    <option value="Pending" {{ old('status', $order->status) === 'Pending' ? 'selected' : '' }}>Pending</option>
                    <option value="Processing" {{ old('status', $order->status) === 'Processing' ? 'selected' : '' }}>Processing</option>
                    <option value="Completed" {{ old('status', $order->status) === 'Completed' ? 'selected' : '' }}>Completed</option>
                    <option value="Cancelled" {{ old('status', $order->status) === 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
                @error('status')<small class="muted">{{ $message }}</small>@enderror
            </div>
        </div>

        <div class="form-actions">
            <button class="button" type="submit">Update Order</button>
            <a class="button secondary" href="{{ route('orders.index') }}">Back</a>
        </div>
    </form>
@endsection
