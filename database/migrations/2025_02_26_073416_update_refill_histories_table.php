<?php

use App\Models\RefillHistory;
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
        Schema::table('refill_histories',function (Blueprint $table) {
            $table->foreignId('shop_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('refill_histories',function (Blueprint $table) {
            $table->dropConstrainedForeignId('shop_id');
        });
    }
};
