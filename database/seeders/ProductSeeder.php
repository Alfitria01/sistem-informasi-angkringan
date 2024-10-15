<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Pastikan untuk mengimpor model Product

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Mengisi data produk contoh
        Product::create([
            'title' => 'Product 1',
            'price' => 2000.00,
            'stock' => 50,
            'image' => 'path/to/image1.jpg',
            'description' => 'Description for Product 1',
        ]);

        Product::create([
            'title' => 'Product 2',
            'price' => 3000.00,
            'stock' => 30,
            'image' => 'path/to/image2.jpg',
            'description' => 'Description for Product 2',
        ]);

        Product::create([
            'title' => 'Product 3',
            'price' => 1500.00,
            'stock' => 20,
            'image' => 'path/to/image3.jpg',
            'description' => 'Description for Product 3',
        ]);

        // Tambahkan lebih banyak produk sesuai kebutuhan
    }
}
