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
        Schema::table('inventory_histories', function (Blueprint $table) {
            $table->dropConstrainedForeignId('flavour_id');
            $table->dropColumn('quantity');
            $table->dropColumn('inventory_registration_type');
            $table->dropConstrainedForeignId('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('inventory_histories', function (Blueprint $table) {
            $table->foreignId('flavour_id')->constrained();
            $table->integer('quantity');
            $table->integer('inventory_registration_type');
            $table->foreignId('user_id')->constrained();
        });
    }
};
