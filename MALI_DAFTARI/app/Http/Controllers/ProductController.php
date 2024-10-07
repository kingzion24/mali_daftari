<?php 

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Inventory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request, Inventory $inventory)
    {
        $validatedData = $request->validate([
            'product_name.*' => 'required|string|max:255',
            'product_quantity.*' => 'required|integer|min:1',
            'product_price.*' => 'required|numeric',
        ]);

        // Create products for the specific inventory
        foreach ($validatedData['product_name'] as $index => $productName) {
            Product::create([
                'inventory_id' => $inventory->id,
                'name' => $productName,
                'price' => $validatedData['product_price'][$index],
                'quantity' => $validatedData['product_quantity'][$index],
            ]);
        }

        return redirect()->route('inventories.index')->with('success', 'Products added successfully!');
    }
}
