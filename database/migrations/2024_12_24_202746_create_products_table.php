<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('name'); // Product Name
            $table->decimal('price', 10, 2); // Product Price
            $table->text('description')->nullable(); // Product Description
            $table->string('image')->nullable(); // Image Path
            $table->string('category')->nullable(); // Product Category
            $table->string('genre')->nullable(); // Product Genre
            $table->timestamps(); // Created at and Updated at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the table entirely, which removes all columns, including `category`.
        Schema::dropIfExists('products');
    }
}
