<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'barcode' => '899999951234',
                'name' => 'Indomie Goreng',
                'description' => 'Mie instan rasa ayam goreng',
                'price' => 3500,
                'stock' => 150,
                'category' => 'Makanan Instan',
                'supplier' => 'Indofood'
            ],
            [
                'barcode' => '899999952345',
                'name' => 'Aqua Gelas 240ml',
                'description' => 'Air mineral kemasan gelas',
                'price' => 2500,
                'stock' => 200,
                'category' => 'Minuman',
                'supplier' => 'Danone'
            ],
            [
                'barcode' => '899999953456',
                'name' => 'Pocari Sweat 500ml',
                'description' => 'Minuman ion isotonik',
                'price' => 8500,
                'stock' => 80,
                'category' => 'Minuman',
                'supplier' => 'Otsuka'
            ],
            [
                'barcode' => '899999954567',
                'name' => 'Lays Rumput Laut',
                'description' => 'Keripik kentang rasa rumput laut',
                'price' => 12000,
                'stock' => 60,
                'category' => 'Makanan Ringan',
                'supplier' => 'PepsiCo'
            ],
            [
                'barcode' => '899999955678',
                'name' => 'Djarum Super',
                'description' => 'Rokok kretek filter',
                'price' => 25000,
                'stock' => 120,
                'category' => 'Rokok',
                'supplier' => 'Djarum'
            ],
            [
                'barcode' => '899999956789',
                'name' => 'Sunlight 180ml',
                'description' => 'Sabun pencuci piring',
                'price' => 8000,
                'stock' => 90,
                'category' => 'Kebutuhan Rumah Tangga',
                'supplier' => 'Unilever'
            ],
            [
                'barcode' => '899999957890',
                'name' => 'Rinso 1kg',
                'description' => 'Detergen bubuk',
                'price' => 15000,
                'stock' => 70,
                'category' => 'Kebutuhan Rumah Tangga',
                'supplier' => 'Unilever'
            ],
            [
                'barcode' => '899999958901',
                'name' => 'Lifebuoy 100gr',
                'description' => 'Sabun batang anti bakteri',
                'price' => 5000,
                'stock' => 110,
                'category' => 'Perawatan Diri',
                'supplier' => 'Unilever'
            ],
            [
                'barcode' => '899999959012',
                'name' => 'Ultra Milk Coklat 250ml',
                'description' => 'Susu UHT rasa coklat',
                'price' => 6500,
                'stock' => 85,
                'category' => 'Produk Susu',
                'supplier' => 'Ultrajaya'
            ],
            [
                'barcode' => '899999950123',
                'name' => 'Chitato Sapi Panggang',
                'description' => 'Keripik kentang rasa sapi panggang',
                'price' => 11000,
                'stock' => 65,
                'category' => 'Makanan Ringan',
                'supplier' => 'Indofood'
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}