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
            $table->decimal('small_per_bag_hourly_price', 10,2)->nullable();
            $table->decimal('small_per_bag_daily_price', 10,2)->nullable();
            $table->decimal('small_per_bag_weekly_price', 10,2)->nullable();
            $table->decimal('small_per_bag_monthly_price', 10,2)->nullable();
            
            $table->decimal('medium_per_bag_hourly_price', 10,2)->nullable();
            $table->decimal('medium_per_bag_daily_price', 10,2)->nullable();
            $table->decimal('medium_per_bag_weekly_price', 10,2)->nullable();
            $table->decimal('medium_per_bag_monthly_price', 10,2)->nullable();
            
            $table->decimal('large_per_bag_hourly_price', 10,2)->nullable();
            $table->decimal('large_per_bag_daily_price', 10,2)->nullable();
            $table->decimal('large_per_bag_weekly_price', 10,2)->nullable();
            $table->decimal('large_per_bag_monthly_price', 10,2)->nullable();
            
            $table->decimal('extra_large_per_bag_hourly_price', 10,2)->nullable();
            $table->decimal('extra_large_per_bag_daily_price', 10,2)->nullable();
            $table->decimal('extra_large_per_bag_weekly_price', 10,2)->nullable();
            $table->decimal('extra_large_per_bag_monthly_price', 10,2)->nullable();

            $table->decimal('per_km_price', 10,2)->nullable();
            $table->foreignId('created_by');
            $table->foreignId('updated_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hub_pricings');
    }
};
