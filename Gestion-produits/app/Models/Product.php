<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model {
    use HasFactory;

    protected $fillable = [
        'name', 'category_id', 'image', 
        'description', 'price', 'stock'
    ];

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }
}