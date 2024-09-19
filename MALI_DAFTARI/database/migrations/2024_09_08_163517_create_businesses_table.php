<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id(); // BIGINT Primary Key
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // FK for users table with cascade delete
            $table->string('business name'); // VARCHAR for business name
            $table->string('business type'); // VARCHAR for business type (e.g., retail)
            $table->string('business location'); // VARCHAR for physical location
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('businesses');
    }
}

