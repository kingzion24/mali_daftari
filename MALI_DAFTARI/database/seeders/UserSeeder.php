<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
       /* User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'phone_number' => '1234567890',
            'password' => Hash::make('password123'),
            'terms_accepted' => true,
        ]);

        User::create([
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'jane.doe@example.com',
            'phone_number' => '0987654321',
            'password' => Hash::make('password456'),
            'terms_accepted' => true,
        ]);
        
        User::create([
            'first_name' => 'susan',
            'last_name' => 'zion',
            'email' => 'susan.zion@example.com',
            'phone_number' => '0115088011',
            'password' => Hash::make('micoure'),
            'terms_accepted' => true,
        ]);*/
        
        User::create([
            'first_name' => 'Njaule Mdendu',
            'last_name' => 'zion',
            'email' => 'njaule@example.com',
            'phone_number' => '0754313096',
            'password' => Hash::make('janetkashenu'),
            'terms_accepted' => true,
        ]);
        User::create([
            'first_name' => 'Janet Njaule',
            'last_name' => 'zion',
            'email' => 'Janet@example.com',
            'phone_number' => '0755313096',
            'password' => Hash::make('janetkashenu'),
            'terms_accepted' => true,
        ]);
        
    }
}
