@extends('layouts.app')

@section('content')
<h2>Tambah Transaksi</h2>

<form action="{{ route('transactions.store') }}" method="POST">
    @csrf
    <div>
        <label for="product_id">Pilih Produk:</label>
        <select name="product_id" required>
            @foreach($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }} - Rp {{ number_format($product->price, 0, ',', '.') }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="quantity">Jumlah:</label>
        <input type="number" name="quantity" min="1" required>
    </div>

    <button type="submit">Simpan Transaksi</button>
</form>
@endsection
