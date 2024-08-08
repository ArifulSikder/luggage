<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HubPricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hub_pricings')->insert([
            [
                'hub_id' => 2,
                'small_per_bag_hourly_price' => 5,
                'small_per_bag_daily_price' => 12,
                'small_per_bag_weekly_price' => 40,
                'small_per_bag_monthly_price' => 120,

                'medium_per_bag_hourly_price' => 7,
                'medium_per_bag_daily_price' => 15,
                'medium_per_bag_weekly_price' => 50,
                'medium_per_bag_monthly_price' => 150,

                'large_per_bag_hourly_price' => 10,
                'large_per_bag_daily_price' => 18,
                'large_per_bag_weekly_price' => 60,
                'large_per_bag_monthly_price' => 180,

                'extra_large_per_bag_hourly_price' => 12,
                'extra_large_per_bag_daily_price' => 22,
                'extra_large_per_bag_weekly_price' => 70,
                'extra_large_per_bag_monthly_price' => 210,

                'per_km_price' => 0.75,
                'created_by' => 1,
                'updated_by' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // You can add more entries here if needed
        ]);
    }
}
