<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $order = Transaction::count();
        $product = Product::count();
        $user = User::where('role', 'user')->count();
        return view('admin.dashboard', compact('order', 'product', 'user'));
    }
}
