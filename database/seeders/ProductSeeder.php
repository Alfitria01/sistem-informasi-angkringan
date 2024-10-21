<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
<<<<<<< HEAD
use App\Models\Product; // Make sure to import the Product model
=======
use App\Models\Product; // Pastikan untuk mengimpor model Product
>>>>>>> bde3e209e51b67f4be84ac8811de3145ce88bef6

class ProductSeeder extends Seeder
{
    public function run()
    {
<<<<<<< HEAD
        // Filling example product data
=======
        // Mengisi data produk contoh
>>>>>>> bde3e209e51b67f4be84ac8811de3145ce88bef6
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

<<<<<<< HEAD
        // Add more products as needed
=======
        // Tambahkan lebih banyak produk sesuai kebutuhan
>>>>>>> bde3e209e51b67f4be84ac8811de3145ce88bef6
    }
}
