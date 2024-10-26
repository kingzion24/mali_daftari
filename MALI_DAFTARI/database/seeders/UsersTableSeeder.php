<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'first_name' => 'Tevin',
                'last_name' => 'Mdendu',
                'email' => 'tevin@example.com',
                'phone_number' => '0712345678',
                'password' => bcrypt('yourpassword'), // Use bcrypt for password hashing
            ],
            // Add more users as needed
        ]);
    }
}
// stop using got another seeder 