<form method="POST" action="{{ route('transactions.store') }}">
    @csrf
    
    <select name="product_id" id="product_id" class="form-control @error('product_id') is-invalid @enderror" required>
    <option value="">-- Pilih Produk --</option>
    @foreach($products as $product)
        <option value="{{ $product->id }}"
            data-stock="{{ $product->stock }}"
            data-price="{{ $product->price }}"
            {{ $product->stock == 0 ? 'disabled' : '' }}
            {{ old('product_id') == $product->id ? 'selected' : '' }}>
            {{ $product->name }} - Rp {{ number_format($product->price, 0, ',', '.') }}
            (Stok: {{ $product->stock }})
        </option>
    @endforeach
</select>
...
<input type="number" name="quantity" id="quantity"
    class="form-control @error('quantity') is-invalid @enderror"
    value="{{ old('quantity', 1) }}" min="1" required placeholder="Jumlah">

<button type="submit" class="btn btn-primary mt-3">
    Add Transaction
</button>
...
<script>
document.addEventListener('DOMContentLoaded', function() {
    const productSelect = document.getElementById('product_id');
    const quantityInput = document.getElementById('quantity');

    function updateMaxQuantity() {
        const selected = productSelect.options[productSelect.selectedIndex];
        const stock = selected.getAttribute('data-stock');
        if (stock) {
            quantityInput.max = stock;
        } else {
            quantityInput.removeAttribute('max');
        }
    }

    productSelect.addEventListener('change', updateMaxQuantity);
    updateMaxQuantity();
});
</script>