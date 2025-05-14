<form method="POST" action="{{ route('transactions.store') }}">
    @csrf
    
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="product_id">Pilih Produk</label>
                <select name="product_id" id="product_id" class="form-control @error('product_id') is-invalid @enderror" required>
                    <option value="">-- Pilih Produk --</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" 
                            {{ old('product_id') == $product->id ? 'selected' : '' }}>
                            {{ $product->name }} - Rp {{ number_format($product->price, 0, ',', '.') }}
                            (Stok: {{ $product->stock }})
                        </option>
                    @endforeach
                </select>
                @error('product_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-group">
                <label for="quantity">Jumlah</label>
                <input type="number" name="quantity" id="quantity" 
                       class="form-control @error('quantity') is-invalid @enderror" 
                       value="{{ old('quantity', 1) }}" min="1" required>
                @error('quantity')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <div class="col-md-2 d-flex align-items-end">
            <button type="submit" class="btn btn-primary w-100">
                <i class="fas fa-save"></i> Simpan
            </button>
        </div>
    </div>
</form>