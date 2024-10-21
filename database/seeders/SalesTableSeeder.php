<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
<<<<<<< HEAD
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
=======
use Illuminate\Support\Facades\DB; 

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            ['product_id' => 1, 'amount' => 200.00, 'quantity' => 2],
            ['product_id' => 2, 'amount' => 300.00, 'quantity' => 1],
            // Tambahkan lebih banyak data jika perlu
        ]);
    }
}

>>>>>>> bde3e209e51b67f4be84ac8811de3145ce88bef6
