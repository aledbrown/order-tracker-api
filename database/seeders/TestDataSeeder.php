<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // CUSTOMER 1
        $customer = Customer::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
        ]);

        $order1 = $customer->orders()->create([
            'order_date' => '2025-10-08',
        ]);

        $order1->items()->createMany([
            ['product_name' => 'Keyboard', 'quantity' => 2, 'price' => 25.00],
            ['product_name' => 'Mouse',    'quantity' => 1, 'price' => 15.00],
        ]);

        $order2 = $customer->orders()->create([
            'order_date' => '2025-10-09',
        ]);

        $order2->items()->createMany([
            ['product_name' => 'Monitor', 'quantity' => 1, 'price' => 150.00],
            ['product_name' => 'HDMI',    'quantity' => 2, 'price' => 10.00],
        ]);
    }
}
