<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        // Create 10 dummy customers
        foreach (range(1, 10) as $index) {
            Customer::create([
                'name' => 'Customer ' . $index,
                'table_number' => 'Table ' . rand(1, 20),
                'qr_code' => 'QR' . uniqid() // Unique QR code
            ]);
        }
    }
}
