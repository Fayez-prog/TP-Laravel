<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $productCount = Product::count();
        $categoryCount = Category::count();
        $recentUsers = User::latest()->paginate(5); // Utilisation de paginate() au lieu de get()

        return view('admin.dashboard', compact(
            'userCount',
            'productCount',
            'categoryCount',
            'recentUsers'
        ));
    }
}