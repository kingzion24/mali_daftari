<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id(); // BIGINT Primary Key
            $table->foreignId('business_id')->constrained()->onDelete('cascade'); // FK for businesses table with cascade delete
            $table->string('inventory_name'); // VARCHAR for inventory name
            $table->date('arrival_date'); // DATE for inventory creation date
            $table->string('supplier_name'); // VARCHAR for supplier name
            $table->string('description_about_new_inventory'); // VARCHAR for inventory name
            $table->decimal('total_cost', 10, 2); // DECIMAL for total cost of inventory
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}
