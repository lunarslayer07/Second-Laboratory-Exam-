@extends('layouts.app')

@section('title', 'Add Employee')

@section('content')
    <div class="page-header">
        <div>
            <h1>Add Employee</h1>
            <p>Create a new employee record.</p>
        </div>
    </div>

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf

        <div class="form-grid">
            <div>
                <label for="name">Name</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" required>
                @error('name')<small class="muted">{{ $message }}</small>@enderror
            </div>

            <div>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required>
                @error('email')<small class="muted">{{ $message }}</small>@enderror
            </div>

            <div>
                <label for="phone">Phone</label>
                <input id="phone" name="phone" type="text" value="{{ old('phone') }}" required>
                @error('phone')<small class="muted">{{ $message }}</small>@enderror
            </div>

            <div>
                <label for="position">Position</label>
                <input id="position" name="position" type="text" value="{{ old('position') }}" required>
                @error('position')<small class="muted">{{ $message }}</small>@enderror
            </div>

            <div>
                <label for="department">Department</label>
                <input id="department" name="department" type="text" value="{{ old('department') }}" required>
                @error('department')<small class="muted">{{ $message }}</small>@enderror
            </div>
        </div>

        <div class="form-actions">
            <button class="button" type="submit">Save Employee</button>
            <a class="button secondary" href="{{ route('employees.index') }}">Cancel</a>
        </div>
    </form>
@endsection
