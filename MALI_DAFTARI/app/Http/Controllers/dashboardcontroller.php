<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch any necessary data for the dashboard view
        return view('sales'); // Assuming you have a view for the dashboard
    }

    public function sales()
    {
        return view('sales'); // Returns sales.php
    }

    public function inventory()
    {
        return view('inventory '); // Returns inventory.php
    }

    public function expenses()
    {
        return view('expenses'); // Returns expenses.php
    }
}

