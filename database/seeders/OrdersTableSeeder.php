<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        // First, ensure we have some customers and products to reference
        $customers = Customer::all(); // Assuming customers already exist
        $products = Product::all();   // Assuming products already exist

        // If you don't have customers or products, you can create some
        if ($customers->isEmpty() || $products->isEmpty()) {
            $this->command->info('Please seed customers and products first!');
            return;
        }

        // Create a few dummy orders
        foreach (range(1, 10) as $index) {
            Order::create([
                'customer_id' => $customers->random()->id,
                'product_id' => $products->random()->id,
                'quantity' => rand(1, 5),
                'total_price' => rand(100, 500),
                'order_date' => now()->subDays(rand(1, 30)),
                'status' => ['pending', 'completed', 'canceled'][rand(0, 2)],
            ]);
        }
    }
}
