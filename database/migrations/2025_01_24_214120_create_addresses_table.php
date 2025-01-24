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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign key to users
            $table->string('first_name')->nullable(); // Add first name
            $table->string('last_name')->nullable(); // Add last name
            $table->string('phone')->nullable(); // Add phone number
            $table->string('email')->nullable(); // Add email
            $table->boolean('default')->default(false); // Add default address flag
            $table->string('street'); // Street address
            $table->string('city'); // City
            $table->string('state')->nullable(); // State
            $table->string('postal_code'); // Postal Code
            $table->string('country')->default('India'); // Country (default to 'India')
            $table->string('type')->comment('Home, Office'); // Address type
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
