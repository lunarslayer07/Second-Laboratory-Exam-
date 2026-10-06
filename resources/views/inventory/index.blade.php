@extends('layouts.app')

@section('title', 'Inventory')

@section('content')
    <div class="page-header">
        <div>
            <h1>Inventory</h1>
            <p>Track stock quantities and product pricing.</p>
        </div>
        <a href="{{ route('inventory.create') }}" class="button">Add Item</a>
    </div>

    @if (session('success'))
        <div class="alert success">{{ session('success') }}</div>
    @endif

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($inventory as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->category }}</td>
                        <td>
                            @if ($item->quantity <= 5)
                                <span class="badge warning">{{ $item->quantity }} Low</span>
                            @else
                                <span class="badge success">{{ $item->quantity }}</span>
                            @endif
                        </td>
                        <td>${{ number_format($item->price, 2) }}</td>
                        <td>{{ $item->description ?: '—' }}</td>
                        <td>
                            <div class="actions">
                                <a class="button secondary" href="{{ route('inventory.edit', $item->id) }}">Edit</a>
                                <form action="{{ route('inventory.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Delete this inventory item?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="muted">No inventory items found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
