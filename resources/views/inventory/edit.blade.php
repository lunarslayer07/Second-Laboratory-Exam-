@extends('layouts.app')

@section('title', 'Edit Inventory Item')

@section('content')
    <div class="page-header">
        <div>
            <h1>Edit Inventory Item</h1>
            <p>Update the stock details.</p>
        </div>
    </div>

    <form action="{{ route('inventory.update', $inventory->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-grid">
            <div>
                <label for="name">Item Name</label>
                <input id="name" name="name" type="text" value="{{ old('name', $inventory->name) }}" required>
                @error('name')<small class="muted">{{ $message }}</small>@enderror
            </div>

            <div>
                <label for="category">Category</label>
                <input id="category" name="category" type="text" value="{{ old('category', $inventory->category) }}" required>
                @error('category')<small class="muted">{{ $message }}</small>@enderror
            </div>

            <div>
                <label for="quantity">Quantity</label>
                <input id="quantity" name="quantity" type="number" min="0" value="{{ old('quantity', $inventory->quantity) }}" required>
                @error('quantity')<small class="muted">{{ $message }}</small>@enderror
            </div>

            <div>
                <label for="price">Price</label>
                <input id="price" name="price" type="number" step="0.01" min="0" value="{{ old('price', $inventory->price) }}" required>
                @error('price')<small class="muted">{{ $message }}</small>@enderror
            </div>

            <div style="grid-column: 1 / -1;">
                <label for="description">Description</label>
                <textarea id="description" name="description">{{ old('description', $inventory->description) }}</textarea>
                @error('description')<small class="muted">{{ $message }}</small>@enderror
            </div>
        </div>

        <div class="form-actions">
            <button class="button" type="submit">Update Item</button>
            <a class="button secondary" href="{{ route('inventory.index') }}">Back</a>
        </div>
    </form>
@endsection
