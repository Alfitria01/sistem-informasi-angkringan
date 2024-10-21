<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sale;    // Pastikan model Sale diimpor
use App\Models\Product; // Pastikan model Product diimpor
use Illuminate\Support\Facades\DB;

class SalesTableSeeder extends Seeder
{
    public function run()
    {
        // Memeriksa apakah ada data produk yang tersedia
        $products = Product::all();

        if ($products->isEmpty()) {
            // Jika tidak ada produk, masukkan data dummy secara manual
            DB::table('sales')->insert([
                ['product_id' => 1, 'amount' => 200.00, 'quantity' => 2],
                ['product_id' => 2, 'amount' => 300.00, 'quantity' => 1],
                // Tambahkan lebih banyak data jika perlu
            ]);
        } else {
            // Jika ada produk, buat entri penjualan berdasarkan produk yang ada
            foreach ($products as $product) {
                Sale::create([
                    'product_id' => $product->id,
                    'quantity'   => rand(1, 5), // Kuantitas acak
                    'amount'     => $product->price * rand(1, 5), // Jumlah dihitung
                ]);
            }
        }
    }
}
