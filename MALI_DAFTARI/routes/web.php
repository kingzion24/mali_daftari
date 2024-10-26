<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;

// Welcome page route
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Authenticated and verified routes group
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard'); // Add name for the dashboard route

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit'); // Calls ProfileController@edit
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update'); // Calls ProfileController@update
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); // Calls ProfileController@destroy

    // Sales, Inventory, and Expenses routes
    Route::get('/sales', [SalesController::class, 'salesshow'])->name('sales'); // Calls SalesController@sales

    Route::get('/inventories', [InventoryController::class, 'inventoryshow'])->name('inventories.index');
    Route::post('/inventories', [InventoryController::class, 'inventorystore'])->name('inventories.store');

    Route::get('/expenses', function () {
        return view('expenses');
    })->name('expenses'); // No controller method, returns 'expenses' view
});

require __DIR__.'/auth.php';
