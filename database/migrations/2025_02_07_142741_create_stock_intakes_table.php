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
            // Reference to products table
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->integer('quantity')->unsigned();
            // Reference to racks table
            $table->foreignId('rack_id')->constrained()->cascadeOnDelete();
            // Reference to shelves table
            $table->foreignId('shelf_id')->constrained()->cascadeOnDelete();
            $table->string('supplier')->nullable();
            // Intake date stored as a timestamp (nullable in case you want to set it programmatically)
            $table->timestamp('intake_date')->nullable();
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
