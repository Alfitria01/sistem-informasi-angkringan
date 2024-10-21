<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Make sure to import the Product model

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Filling example product data
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

        // Add more products as needed
    }
}
