<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller {
    public function index(Request $request) {
        $categories = Category::all();
        $products = Product::with('category')->latest()->paginate(12);
        
        return view('index', compact('categories', 'products'));
    }

    public function new() {
        $categories = Category::all();
        return view('new.product', compact('categories'));
    }

    public function add(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|exists:categories,id',
            'picture' => 'required|image|max:2048',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'required|string'
        ]);

        $imagePath = $request->file('picture')->store('uploads', 'public');

        Product::create([
            'name' => $validated['name'],
            'category_id' => $validated['category'],
            'image' => basename($imagePath),
            'price' => $validated['price'],
            'stock' => $validated['stock'],
            'description' => $validated['description']
        ]);

        return redirect()->route('index')
            ->with('status', 'success')
            ->with('message', 'Product created successfully!');
    }
}