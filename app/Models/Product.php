<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'author',
        'collection',
        'stock',
        'sku',
        'categoryMain',
        'categorySecondary',
        'description',
        'rating',
        'image1',
        'image2',
        'image3',
        ];
}

