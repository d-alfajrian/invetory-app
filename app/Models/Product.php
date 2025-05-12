<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // pastikan ini ada
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory; // pastikan trait ini ada

    protected $fillable = ['barcode', 'name', 'price', 'stock', 'category'];
}
