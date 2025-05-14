<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function create()
{
    $products = Product::all();
    return view('transactions.create', compact('products'));
}

public function index()
{
    $transactions = Transaction::with('product')
                    ->orderBy('created_at', 'desc')
                    ->paginate(10); // Gunakan pagination
    
    $products = Product::where('stock', '>', 0)->get(); // Produk dengan stok tersedia
    
    return view('transactions.index', compact('transactions', 'products'));
}

public function store(Request $request)
{
    $request->validate([
        'product_id' => 'required|exists:products,id',
        'quantity' => 'required|integer|min:1'
    ]);

    $product = Product::findOrFail($request->product_id);
    
    if ($product->stock < $request->quantity) {
        return back()->with('error', 'Stok tidak mencukupi')->withInput();
    }

    // Buat transaksi
    $transaction = Transaction::create([
        'product_id' => $request->product_id,
        'quantity' => $request->quantity,
        'total_price' => $product->price * $request->quantity
    ]);

    // Update stok
    $product->decrement('stock', $request->quantity);

    // Redirect ke index dengan data terbaru
    return redirect()->route('transactions.index')
        ->with('success', 'Transaksi berhasil disimpan');
}
}
