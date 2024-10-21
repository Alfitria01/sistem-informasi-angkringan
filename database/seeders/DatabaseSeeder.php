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
<<<<<<< HEAD
            CustomersTableSeeder::class,
            OrdersTableSeeder::class,
=======
>>>>>>> bde3e209e51b67f4be84ac8811de3145ce88bef6
        ]);
        
    }
}
