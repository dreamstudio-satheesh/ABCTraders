<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('attributes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->notNull();
            $table->string('type')->notNull(); // e.g., color, size, material
            $table->timestamps();
        });

    }

    public function down(): void {
        Schema::dropIfExists('attributes');
    }
};
