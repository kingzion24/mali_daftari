<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone_number', 'password', 'terms_accepted',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function business()
    {
        return $this->hasOne(Business::class);
    }
}