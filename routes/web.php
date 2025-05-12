<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

// Arahkan halaman utama ke halaman index produk
Route::get('/', function () {
    $products = Product::latest()->paginate(5); 
    return view('products.index', compact('products'))->with(request()->input('page')); 
});

Route::resource('products', ProductController::class);