<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Assuming inventory IDs are 1 and 2 for the seeded inventories

        // Products for Electronics Stock (inventory_id = 1)
        Product::create([
            'inventory_id' => 1, // Electronics Stock inventory
            'product_name' => 'Smartphone',
            'product_price' => 20000.00,
            'stock_quantity' => 10,
        ]);

        Product::create([
            'inventory_id' => 1, 
            'product_name' => 'Laptop',
            'product_price' => 30000.00,
            'stock_quantity' => 5,
        ]);

        // Products for Groceries Stock (inventory_id = 2)
        Product::create([
            'inventory_id' => 2, // Groceries Stock inventory
            'product_name' => 'Apples',
            'product_price' => 100.00,
            'stock_quantity' => 100,
        ]);

        Product::create([
            'inventory_id' => 2, 
            'product_name' => 'Bananas',
            'product_price' => 50.00,
            'stock_quantity' => 150,
        ]);
    }
}
