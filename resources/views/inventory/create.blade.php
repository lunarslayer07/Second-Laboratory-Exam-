@extends('layouts.app')

@section('title', 'Add Inventory Item')

@section('content')
    <div class="page-header">
        <div>
            <h1>Add Inventory Item</h1>
            <p>Create a new stock item.</p>
        </div>
    </div>

    <form action="{{ route('inventory.store') }}" method="POST">
        @csrf

        <div class="form-grid">
            <div>
                <label for="name">Item Name</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" required>
                @error('name')<small class="muted">{{ $message }}</small>@enderror
            </div>

            <div>
                <label for="category">Category</label>
                <input id="category" name="category" type="text" value="{{ old('category') }}" required>
                @error('category')<small class="muted">{{ $message }}</small>@enderror
            </div>

            <div>
                <label for="quantity">Quantity</label>
                <input id="quantity" name="quantity" type="number" min="0" value="{{ old('quantity', 0) }}" required>
                @error('quantity')<small class="muted">{{ $message }}</small>@enderror
            </div>

            <div>
                <label for="price">Price</label>
                <input id="price" name="price" type="number" step="0.01" min="0" value="{{ old('price', 0) }}" required>
                @error('price')<small class="muted">{{ $message }}</small>@enderror
            </div>

            <div style="grid-column: 1 / -1;">
                <label for="description">Description</label>
                <textarea id="description" name="description">{{ old('description') }}</textarea>
                @error('description')<small class="muted">{{ $message }}</small>@enderror
            </div>
        </div>

        <div class="form-actions">
            <button class="button" type="submit">Save Item</button>
            <a class="button secondary" href="{{ route('inventory.index') }}">Cancel</a>
        </div>
    </form>
@endsection
