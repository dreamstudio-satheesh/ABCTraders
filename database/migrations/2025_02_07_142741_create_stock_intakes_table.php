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
        Schema::create('stock_intakes', function (Blueprint $table) {
            $table->id();
            
            // Foreign key to the products table.
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            
            // Quantity of the product received (unsigned integer).
            $table->unsignedInteger('quantity');
            
            // Foreign key to the racks table.
            $table->foreignId('rack_id')->constrained()->cascadeOnDelete();
            
            // Foreign key to the shelves table.
            $table->foreignId('shelf_id')->constrained()->cascadeOnDelete();
            
            // Optional supplier information for this intake.
            $table->string('supplier')->nullable();
            
            // The date and time when the stock intake occurred.
            $table->timestamp('intake_date')->nullable();
            
            // Timestamps for created_at and updated_at.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_intakes');
    }
};
