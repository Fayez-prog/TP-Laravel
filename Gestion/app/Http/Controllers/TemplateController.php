<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class TemplateController extends Controller
{
public function index()
{
    $categories = Category::all();
    $products = Product::all();
    return view('template.index', compact('categories', 'products',));
}
public function login()
{
return view('template.login');
}
public function mail()
{
return view('template.mail');
}
public function products()
{
return view('template.products');
}
public function furniture()
{
return view('template.furniture');
}
public function checkout()
{
return view('template.checkout');
}
public function register()
{
return view('template.register');
}
public function short()
{
return view('template.short-codes');
}
public function single()
{
return view('template.single');
}
}