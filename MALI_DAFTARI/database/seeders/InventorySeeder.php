<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    public function run()
    {
        // Create inventories linked to business Doe Retailers (business_id = 1)
        Inventory::create([
            'business_id' => 1, // Doe Retailers has business_id = 1
            'inventory_name' => 'Electronics Stock',
            'arrival_date' => '2024-09-01',
            'supplier_name' => 'ABC Electronics',
            'description_about_new_inventory' => 'First batch of electronics stock.',
            'total_cost' => 50000.00,
        ]);

        Inventory::create([
            'business_id' => 1,
            'inventory_name' => 'Groceries Stock',
            'arrival_date' => '2024-09-15',
            'supplier_name' => 'XYZ Groceries',
            'description_about_new_inventory' => 'Fresh groceries stock.',
            'total_cost' => 30000.00,
        ]);
    }
}
