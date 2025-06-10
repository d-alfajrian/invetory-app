# Aplikasi Manajemen Inventory 
#### Video Demo: (https://www.youtube.com/watch?v=Vontz6PqP58)
#### Description:
Aplikasi manajemen inventori sederhana untuk toko "MUA Mart". Memungkinkan manajemen produk dan transaksi penjualan.

## Fitur Utama

### 1. Manajemen Produk (CRUD)
- **Tambah Produk Baru**: 
  - Barcode unik
  - Nama produk
  - Harga jual
  - Stok awal
  - Kategori produk
  - Supplier (opsional)
  - Deskripsi (opsional)
- **Lihat Daftar Produk**: 
  - Tabel dengan informasi lengkap
  - Status stok (termasuk stok habis)
- **Edit & Hapus Produk**: 
  - Aksi langsung dari tabel produk

### 2. Sistem Transaksi
- **Tambah Transaksi Baru**:
  - Pilih produk dari dropdown
  - Sistem otomatis menampilkan harga
  - Input jumlah barang
- **Riwayat Transaksi**:
  - Tabel semua transaksi
  - Detail tanggal, produk, harga, jumlah, dan total
  - Tampilan kronologis

### 3. Laporan Otomatis
- Monitoring stok produk 
- Riwayat transaksi harian
- Total nilai transaksi

## Struktur Database
Tabel utama yang digunakan:
1. **Products**:
   - list inventory

2. **Add Products**:
   - barcode (PK)
   - product_name
   - price
   - stock
   - category
   - supplier
   - description

3. **Transactions**:
   - id (PK)
   - transaction_date
   - product_barcode (FK)
   - price
   - quantity
   - total
  
### Step by step Clone Repositorynya

Cara Clone dari Github
Type in Terminal Visual Studio :

git clone https://github.com/d-alfajrian/invetory-app.git
cp .env.example .env
composer install
npm install
php artisan key:generate

Cara Upload or Download :

untuk upload "git push"
untuk download "git pull"

### software yang harus terinstall
- Laragon 
- PHP 7.4+
- MySQL 5.7+




