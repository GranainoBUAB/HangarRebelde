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
        'editorial',
        'isAvailable',
        'canReserve',
        'isbn',
        'categoryMain',
        'categorySecondary',
        'description',
        'rating',
        'image1',
        'image2',
        'image3',
        'dateSale',
        'format',
        'pages',
        'tag',
        ];
}

