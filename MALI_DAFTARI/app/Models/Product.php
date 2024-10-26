<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'inventory_id', 
        'product_name', 
        'product_price', 
        'stock_quantity'
    ];

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }
}
