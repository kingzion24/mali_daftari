<?php
namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function inventoryshow()
    {
        // Retrieve all inventories with their related products
        $inventories = Inventory::with('products')->get();

        return view('inventory.index', compact('inventories'));
    }

    public function inventorystore(Request $request)
    {
        $validated = $request->validate([
            'inventory_name' => 'required|string|max:255',
            'arrival_date' => 'required|date',
            'supplier_name' => 'required|string|max:255',
            'description_about_new_inventory' => 'required|string|max:1000',
            'total_cost' => 'required|numeric',
            'product_name.*' => 'required|string|max:255',
            'product_quantity.*' => 'required|integer',
            'product_price.*' => 'required|numeric',
        ]);

        // Store the new inventory
        $inventory = Inventory::create([
            'business_id' => auth()->user()->business_id, // Assuming each user has a business
            'inventory_name' => $request->inventory_name,
            'arrival_date' => $request->arrival_date,
            'supplier_name' => $request->supplier_name,
            'description_about_new_inventory' => $request->description_about_new_inventory,
            'total_cost' => $request->total_cost,
        ]);

        // Store the related products
        foreach ($request->product_name as $index => $productName) 
        {
            Product::create([
                'inventory_id' => $inventory->id,
                'product_name' => $productName,
                'product_price' => $request->product_price[$index],
                'stock_quantity' => $request->product_quantity[$index],
            ]);
        }

        return redirect()->route('inventories.index')->with('success', 'Inventory added successfully!');
    }
}
