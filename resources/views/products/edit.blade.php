@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Edit Product</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="barcode" class="form-label">Barcode</label>
                    <input type="text" class="form-control" id="barcode" name="barcode" value="{{ $product->barcode }}" required>
                </div>
                <div class="col-md-6">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
                </div>
                <div class="col-md-6">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" id="category" name="category" required>
                        <option value="Food" {{ $product->category == 'Food' ? 'selected' : '' }}>Food</option>
                        <option value="Beverage" {{ $product->category == 'Beverage' ? 'selected' : '' }}>Beverage</option>
                        <option value="Snack" {{ $product->category == 'Snack' ? 'selected' : '' }}>Snack</option>
                        <option value="Household" {{ $product->category == 'Household' ? 'selected' : '' }}>Household</option>
                        <option value="Personal Care" {{ $product->category == 'Personal Care' ? 'selected' : '' }}>Personal Care</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="supplier" class="form-label">Supplier (Optional)</label>
                    <input type="text" class="form-control" id="supplier" name="supplier" value="{{ $product->supplier }}">
                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description (Optional)</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $product->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Product</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection