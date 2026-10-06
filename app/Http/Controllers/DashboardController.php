<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Inventory;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $employeeCount = Employee::count();
        $inventoryCount = Inventory::count();
        $orderCount = Order::count();
        $totalRevenue = Order::sum('total_price');
        $lowStockItems = Inventory::where('quantity', '<=', 5)->count();

        return view('dashboard.index', compact(
            'employeeCount',
            'inventoryCount',
            'orderCount',
            'totalRevenue',
            'lowStockItems'
        ));
    }
}
