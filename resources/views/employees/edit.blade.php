@extends('layouts.app')

@section('title', 'Edit Employee')

@section('content')
    <div class="page-header">
        <div>
            <h1>Edit Employee</h1>
            <p>Update the employee information.</p>
        </div>
    </div>

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-grid">
            <div>
                <label for="name">Name</label>
                <input id="name" name="name" type="text" value="{{ old('name', $employee->name) }}" required>
                @error('name')<small class="muted">{{ $message }}</small>@enderror
            </div>

            <div>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email', $employee->email) }}" required>
                @error('email')<small class="muted">{{ $message }}</small>@enderror
            </div>

            <div>
                <label for="phone">Phone</label>
                <input id="phone" name="phone" type="text" value="{{ old('phone', $employee->phone) }}" required>
                @error('phone')<small class="muted">{{ $message }}</small>@enderror
            </div>

            <div>
                <label for="position">Position</label>
                <input id="position" name="position" type="text" value="{{ old('position', $employee->position) }}" required>
                @error('position')<small class="muted">{{ $message }}</small>@enderror
            </div>

            <div>
                <label for="department">Department</label>
                <input id="department" name="department" type="text" value="{{ old('department', $employee->department) }}" required>
                @error('department')<small class="muted">{{ $message }}</small>@enderror
            </div>
        </div>

        <div class="form-actions">
            <button class="button" type="submit">Update Employee</button>
            <a class="button secondary" href="{{ route('employees.index') }}">Back</a>
        </div>
    </form>
@endsection
