<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id(); // BIGINT Primary Key
            $table->foreignId('business_id')->constrained()->onDelete('cascade'); // FK for businesses table with cascade delete
            $table->string('category'); // VARCHAR for expense category (e.g., rent, utilities)
            $table->decimal('amount', 10, 2); // DECIMAL for expense amount
            $table->timestamp('expense_date')->default(DB::raw('CURRENT_TIMESTAMP')); // TIMESTAMP for the expense date
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}
