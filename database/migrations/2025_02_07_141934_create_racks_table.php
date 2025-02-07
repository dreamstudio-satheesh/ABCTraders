<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('racks', function (Blueprint $table) {
            $table->id();
            $table->string('rack_name')->unique();
            $table->string('location')->notNull();
            $table->integer('total_shelves')->notNull();
            $table->timestamps();
        });

        Schema::create('shelves', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rack_id')->constrained()->cascadeOnDelete();
            $table->integer('shelf_level')->notNull();
            $table->integer('capacity')->notNull();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('shelves');
        Schema::dropIfExists('racks');
    }
};

