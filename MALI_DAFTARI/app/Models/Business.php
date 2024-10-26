<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = [
        'user_id', 'business_name', 'business_type', 'business_location',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}