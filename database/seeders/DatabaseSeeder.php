<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Call individual seeders
        $this->call([
            ProductSeeder::class,
            SalesTableSeeder::class,
            CustomersTableSeeder::class, // Pastikan ini ada jika diperlukan
            OrdersTableSeeder::class,    // Pastikan ini ada jika diperlukan
        ]);
    }
}
