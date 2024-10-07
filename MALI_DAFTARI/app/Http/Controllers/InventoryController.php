<?php
namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    // Ensure the user is authenticated
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Display the logged-in user's inventories
    public function index()
    {
        $businessId = Auth::user()->business_id; // Assuming the user has a business_id column
        $inventories = Inventory::where('business_id', $businessId)->with('products')->get();

        return view('inventory', compact('inventories'));
    }

    // Store a new inventory for the logged-in user
    public function store(Request $request)
    {
        $businessId = Auth::user()->business_id; // Get the business id of the logged-in user

        // Validate incoming data
        $request->validate([
            'inventory_name' => 'required|string|max:255',
            'arrival_date' => 'required|date',
            'supplier_name' => 'required|string|max:255',
            'description_about_new_inventory' => 'required|string|max:255',
            'total_cost' => 'required|numeric',
            'product_name.*' => 'required|string|max:255',
            'product_quantity.*' => 'required|integer',
            'product_price.*' => 'required|numeric',
        ]);

        // Create the inventory
        $inventory = Inventory::create([
            'business_id' => $businessId,
            'inventory_name' => $request->inventory_name,
            'arrival_date' => $request->arrival_date,
            'supplier_name' => $request->supplier_name,
            'description_about_new_inventory' => $request->description_about_new_inventory,
            'total_cost' => $request->total_cost,
        ]);

        // Check if the inventory was created successfully
        if ($inventory) {
            // Add the products to the inventory
            foreach ($request->product_name as $index => $productName) {
                $inventory->products()->create([
                    'product_name' => $productName,
                    'product_price' => $request->product_price[$index],
                    'stock_quantity' => $request->product_quantity[$index],
                ]);
            }

            // Redirect back with success message
            return redirect()->route('inventories.index')->with('success', 'Inventory added successfully!');
        } else {
            // Redirect back with error message if inventory creation failed
            return redirect()->back()->with('error', 'Failed to add inventory.');
        }
    }
}
