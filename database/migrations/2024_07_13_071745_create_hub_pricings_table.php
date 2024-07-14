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
        Schema::create('hub_pricings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hub_id');
            $table->decimal('hourly_price_1', 10,2)->nullable();
            $table->decimal('daily_price_1', 10,2)->nullable();
            $table->decimal('hourly_price_2', 10,2)->nullable();
            $table->decimal('daily_price_2', 10,2)->nullable();
            $table->decimal('hourly_price_3', 10,2)->nullable();
            $table->decimal('daily_price_3', 10,2)->nullable();
            $table->decimal('hourly_price_4', 10,2)->nullable();
            $table->decimal('daily_price_4', 10,2)->nullable();
            $table->decimal('premium_service_1', 10,2)->nullable();
            $table->decimal('premium_service_2', 10,2)->nullable();
            $table->decimal('premium_service_3', 10,2)->nullable();
            $table->foreignId('created_by');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): vodecimal
    {
        Schema::dropIfExists('hub_pricings');
    }
};
