<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sale;
use App\Models\Product;

class SalesTableSeeder extends Seeder
{
    public function run()
    {
        // Assuming you already have products in the database
        $products = Product::all();

        // Create sales entries with valid product_ids
        foreach ($products as $product) {
            Sale::create([
                'product_id' => $product->id,
                'quantity' => rand(1, 5), // Random quantity
                'amount' => $product->price * rand(1, 5), // Calculate amount based on quantity and product price
            ]);
        }
    }
}
