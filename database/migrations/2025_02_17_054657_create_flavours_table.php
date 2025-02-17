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
        Schema::create('flavours', function (Blueprint $table) {
            $table->id();
            $table->integer('is_fixed');
            $table->foreignId('shop_id');
            $table->foreignId('manufacturer_id');
            $table->string('name');
            $table->foreignId('category_id');
            $table->integer('minimum_quantity');
            $table->integer('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flavours');
    }
};
