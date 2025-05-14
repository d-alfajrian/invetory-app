@extends('layouts.app')

@section('content')
<div class="container">
    {{-- Form Transaksi --}}
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h3>Tambah Transaksi</h3>
        </div>
        <div class="card-body">
            @include('partials.transaction_form')
        </div>
    </div>

    {{-- Riwayat Transaksi --}}
    <div class="card">
        <div class="card-header bg-info text-white">
            <h3>Riwayat Transaksi</h3>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($transactions->isEmpty())
                <div class="alert alert-warning">
                    Belum ada transaksi
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Produk</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transactions as $transaction)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $transaction->created_at->format('d/m/Y H:i') }}</td>
                                <td>{{ $transaction->product->name }}</td>
                                <td>Rp {{ number_format($transaction->product->price, 0, ',', '.') }}</td>
                                <td>{{ $transaction->quantity }}</td>
                                <td>Rp {{ number_format($transaction->total_price, 0, ',', '.') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                {{-- Pagination --}}
                <div class="mt-3">
                    {{ $transactions->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection