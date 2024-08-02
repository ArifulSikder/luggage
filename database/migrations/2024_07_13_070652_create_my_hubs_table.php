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
        Schema::create('my_hubs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('hub_name');
            $table->string('address');
            $table->decimal('lat_value', 10,8);
            $table->decimal('lon_value', 11.8);
            $table->string('mobilenumber', 15);
            $table->string('hub_area');
            $table->integer('small_bags_capacity')->default(0);
            $table->integer('medium_bags_capacity')->default(0);
            $table->integer('large_bags_capacity')->default(0);
            $table->integer('extra_large_bags_capacity')->default(0);
            $table->longText('description');
            $table->longText('help_guide');
            $table->longText('hub_image');
            $table->integer('del_status');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_hubs');
    }
};
