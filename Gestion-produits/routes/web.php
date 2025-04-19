<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProduitController;

Route::resource('categories', CategorieController::class)->parameters([
    'categories' => 'categorie'
]);
Route::resource('produits', ProduitController::class);

Route::get('/', function () {
    return view('welcome');
});
