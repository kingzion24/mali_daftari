<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) 
        {
            $table->id(); //  Primary Key
            $table->string('first_name',20); //  for user name
            $table->string('last_name',20); //  for user name
            $table->string('email')->unique(); // VARCHAR for unique email
            $table->string('phone_number', 12)->unique(); //for unique phone number (limited to 15 digits)
            $table->string('password'); // Hashed password
            $table->boolean('terms_accepted')->default(false); // Track terms acceptance
            $table->rememberToken(); // For "remember me" functionality
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}

