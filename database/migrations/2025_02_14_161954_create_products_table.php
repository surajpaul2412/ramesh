<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('sku')->unique(); // Unique SKU for the product
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->decimal('sale_price', 10, 2)->nullable(); // Sale price
            $table->unsignedTinyInteger('rating')->default(0); // Product rating out of 5
            $table->string('primary_image')->nullable(); // Main product image
            $table->string('hover_image')->nullable(); // Hover product image
            $table->string('label')->nullable(); // Labels like "Hot" or "-33%"
            $table->boolean('is_featured')->default(false); // To mark product as featured
            $table->unsignedBigInteger('stock')->default(0); // Stock quantity
            $table->unsignedBigInteger('type_id'); // Foreign key to types
            $table->unsignedBigInteger('category_id'); // Foreign key to categories
            $table->unsignedBigInteger('sub_category_id'); // Foreign key to categories
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
