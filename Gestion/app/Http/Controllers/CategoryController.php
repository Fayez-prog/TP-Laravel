<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {
    public function products($id) {
        $categories = Category::all();
        $current_category = Category::findOrFail($id);
        $products = $current_category->products()->paginate(12);
        
        return view('index', compact('current_category', 'categories', 'products'));
    }

    public function new() {
        return view('new.category');
    }

    public function add(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|unique:categories|max:255'
        ]);

        Category::create($validated);

        return redirect()->route('index')
            ->with('status', 'success')
            ->with('message', 'Category created successfully!');
    }
}