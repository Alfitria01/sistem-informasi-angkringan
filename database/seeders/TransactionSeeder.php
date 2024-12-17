<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transactions')->insert([
            [
                'id' => '1',
                'order_id' => '001',
                'amount' => 100000,
                'payment_method' => 'Cash',
                'transaction_date' => '2024-11-21',
                'status' => 'Completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2',
                'order_id' => '002',
                'amount' => 200000,
                'payment_method' => 'Cash',
                'transaction_date' => '2024-11-21',
                'status' => 'Completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '3',
                'order_id' => '003',
                'amount' => 150000,
                'payment_method' => 'Cash',
                'transaction_date' => '2024-11-22',
                'status' => 'Completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
