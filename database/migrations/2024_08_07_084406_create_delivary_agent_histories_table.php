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
        Schema::create('delivary_agent_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id');
            $table->foreignId('delivery_agent_id');
            $table->integer('order_status')->default(0)->comment('0=did not accept; 1=accepted');
            $table->timestamp('date_time');
            $table->string('reason');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivary_agent_histories');
    }
};
