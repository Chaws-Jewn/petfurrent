<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Adopt;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function adminHome()
    {
        // Assuming you want to get all orders, not just completed ones
        $orders = Adopt::all();

        return view('admin.admin-home', compact('orders'));
    }

    public function completedOrders()
    {
        // Retrieve completed orders with the 'dog' relationship
        $completedOrders = Adopt::with('dog')->where('adopt_status', 'Completed')->get();

        return view('admin.completed-orders', compact('completedOrders'));
    }
}
