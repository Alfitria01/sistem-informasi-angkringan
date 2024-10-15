<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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

