<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // BIGINT Primary Key
            $table->foreignId('inventory_id')->constrained()->onDelete('cascade'); // FK for inventories table with cascade delete
            $table->string('product_name'); // VARCHAR for product name
            $table->decimal('product_price', 10); // DECIMAL for product price
            $table->integer('stock_quantity'); // INTEGER for product stock quantity
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
