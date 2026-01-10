<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sku',
        'stock',
        'price',
        'image',
        'details', 
        'categories_id'
    ];

    // Naming convention: Use Singular for belongsTo
    public function category(){
        // We must add 'categories_id' as the second argument because 
        // it does not follow the standard convention of 'category_id'
        return $this->belongsTo(Category::class, 'categories_id');
    }
}