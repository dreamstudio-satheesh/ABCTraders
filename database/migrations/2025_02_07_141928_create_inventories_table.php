<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->foreignId('rack_id')->constrained()->cascadeOnDelete();
            $table->foreignId('shelf_id')->constrained()->cascadeOnDelete();
            $table->integer('quantity')->notNull();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('inventory');
    }
};
