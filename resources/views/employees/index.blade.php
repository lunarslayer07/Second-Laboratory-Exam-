@extends('layouts.app')

@section('title', 'Employees')

@section('content')
    <div class="page-header">
        <div>
            <h1>Employees</h1>
            <p>Manage staff details and department assignments.</p>
        </div>
        <a href="{{ route('employees.create') }}" class="button">Add Employee</a>
    </div>

    @if (session('success'))
        <div class="alert success">{{ session('success') }}</div>
    @endif

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Position</th>
                    <th>Department</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($employees as $employee)
                    <tr>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>{{ $employee->department }}</td>
                        <td>
                            <div class="actions">
                                <a class="button secondary" href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" onsubmit="return confirm('Delete this employee?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="muted">No employees found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
