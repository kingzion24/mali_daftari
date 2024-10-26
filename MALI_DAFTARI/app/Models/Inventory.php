<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_id', 
        'inventory_name', 
        'arrival_date', 
        'supplier_name', 
        'description_about_new_inventory', 
        'total_cost'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
