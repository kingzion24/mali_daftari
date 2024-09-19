<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id(); // BIGINT Primary Key
            $table->foreignId('business_id')->constrained()->onDelete('cascade'); // FK for businesses table with cascade delete
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // FK for products table with cascade delete
            $table->integer('quantity'); // INTEGER for quantity sold
            $table->decimal('total_price', 10, 2); // DECIMAL for total price of the sale
            $table->timestamp('sale_date')->default(DB::raw('CURRENT_TIMESTAMP')); // TIMESTAMP for sale date
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
