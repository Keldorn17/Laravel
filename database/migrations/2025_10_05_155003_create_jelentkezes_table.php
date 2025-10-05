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
        Schema::create('jelentkezes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jelentkezoid')->constrained('jelentkezo')->cascadeOnDelete();
            $table->foreignId('kepzesid')->constrained('kepzes')->cascadeOnDelete();
            $table->integer('sorrend')->nullable();
            $table->integer('szerzett')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jelentkezes');
    }
};
