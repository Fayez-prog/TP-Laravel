<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ScategorieController;
use App\Http\Controllers\ArticleController;

Route::middleware('api')->group(function () {
    // Routes pour les catégories
    Route::resource('categories', CategorieController::class);
    
    // Routes pour les sous-catégories
    Route::resource('scategories', ScategorieController::class);
    Route::get('/scat/{idcat}', [ScategorieController::class, 'showScategorieByCAT']);
    
    // Routes pour les articles
    Route::resource('articles', ArticleController::class);
    Route::get('/listarticles/{idscat}', [ArticleController::class, 'showArticlesBySCAT']);
    Route::get('/articles/art/paginationPaginate', [ArticleController::class, 'paginationPaginate']);
});