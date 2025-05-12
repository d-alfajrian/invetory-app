@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Product Details</h5>
        <div>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <p><strong>Barcode:</strong> {{ $product->barcode }}</p>
                <p><strong>Name:</strong> {{ $product->name }}</p>
                <p><strong>Price:</strong> Rp {{ number_format($product->price, 2) }}</p>
                <p><strong>Stock:</strong> {{ $product->stock }}</p>
            </div>
            <div class="col-md-6">
                <p><strong>Category:</strong> {{ $product->category }}</p>
                <p><strong>Supplier:</strong> {{ $product->supplier ?? 'N/A' }}</p>
                <p><strong>Created At:</strong> {{ $product->created_at->format('d M Y H:i') }}</p>
                <p><strong>Updated At:</strong> {{ $product->updated_at->format('d M Y H:i') }}</p>
            </div>
        </div>
        <div class="mt-3">
            <h6>Description:</h6>
            <p>{{ $product->description ?? 'No description available.' }}</p>
        </div>
        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>
</div>
@endsection