@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="page-header">
        <div>
            <h1>Dashboard</h1>
            <p>Quick overview of the business operations.</p>
        </div>
    </div>

    <div class="grid">
        <div class="card">
            <div class="stat-label">Employees</div>
            <p class="stat-value">{{ $employeeCount }}</p>
        </div>
        <div class="card">
            <div class="stat-label">Inventory Items</div>
            <p class="stat-value">{{ $inventoryCount }}</p>
        </div>
        <div class="card">
            <div class="stat-label">Orders</div>
            <p class="stat-value">{{ $orderCount }}</p>
        </div>
        <div class="card">
            <div class="stat-label">Total Revenue</div>
            <p class="stat-value">${{ number_format($totalRevenue, 2) }}</p>
        </div>
        <div class="card">
            <div class="stat-label">Low Stock Items</div>
            <p class="stat-value">{{ $lowStockItems }}</p>
        </div>
    </div>

    <div class="card">
        <h2>Operations summary</h2>
        <p class="muted">This dashboard connects employee records, product inventory, and order management into a single operational view for the business.</p>
    </div>
@endsection
