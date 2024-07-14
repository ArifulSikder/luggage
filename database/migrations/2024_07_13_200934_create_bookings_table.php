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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('hub_id');
            $table->timestamp('booking_date');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->integer('small_bags');
            $table->integer('medium_bags');
            $table->integer('large_bags');
            $table->integer('extra_large_bags');
            $table->text('premium_services')->nullable();
            $table->decimal('total_cost', 10,2);
            $table->string('status', 20);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
