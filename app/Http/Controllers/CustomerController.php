<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\HubPricing;
use App\Models\Option;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index()
    {
        $data['orders'] = Booking::whereUserId(Auth::id())->where('status', "Booked")->get();
        return view('frontend.pages.customer-profile', $data);
    }

    public function reserve(Request $request)
    {
        // Retrieve form data
        $checkInDate = $request->input('checkin_date');
        $checkOutDate = $request->input('checkout_date');
        $smallBags = $request->input('counter1');
        $mediumBags = $request->input('counter2');
        $largeBags = $request->input('counter3');
        $extraLargeBags = $request->input('counter4');
        $premiumServices = $request->input('premiumServices');
        $hub_id = $request->input('hub_id');

        // Calculate total cost
        $totalCost = $this->calculateTotalCost($hub_id, $checkInDate, $checkOutDate, $smallBags, $mediumBags, $largeBags, $extraLargeBags, $premiumServices);

        // Create booking entry in the database
        $booking = Booking::create([
            'user_id' => Auth::id(),
            'hub_id' => $hub_id,
            'booking_date' => Carbon::now(),
            'check_in_date' => $checkInDate,
            'check_out_date' => $checkOutDate,
            'small_bags' => $smallBags,
            'medium_bags' => $mediumBags,
            'large_bags' => $largeBags,
            'extra_large_bags' => $extraLargeBags,
            'total_cost' => $totalCost,
            'status' => "Booked"
        ]);

        return redirect('/')->with('success', 'Booking was successful!');
    }

    public function calculateTotalCost($hub_id, $checkInDate, $checkOutDate, $smallBags, $mediumBags, $largeBags, $extraLargeBags, $premiumServices)
    {
        $taxOption = Option::where('option_identity', 'Tax')->first();
        $tax = $taxOption ? $taxOption->option_value : 0;

        $days = (strtotime($checkOutDate) - strtotime($checkInDate)) / (60 * 60 * 24);

        $smallPrice = $this->getDailyPrice($hub_id, 'small') * $smallBags * $days;
        $mediumPrice = $this->getDailyPrice($hub_id, 'medium') * $mediumBags * $days;
        $largePrice = $this->getDailyPrice($hub_id, 'large') * $largeBags * $days;
        $extraLargePrice = $this->getDailyPrice($hub_id, 'extra_large') * $extraLargeBags * $days;

        $premiumServiceCost = 0;
        // if ($premiumServices) {
        //     foreach ($premiumServices as $service) {
        //         $premiumServiceCost += $service; // Replace with actual logic to get premium service price
        //     }
        // }

        $subTotal = $smallPrice + $mediumPrice + $largePrice + $extraLargePrice + $premiumServiceCost;

        $totalAmount = $subTotal + ($subTotal * ($tax / 100));

        return $totalAmount;
    }
   

    public function getDailyPrice($hub_id, $size)
    {
        // Fetch the hub pricing data
        $hubPricing = HubPricing::where('hub_id', $hub_id)->first();

        // Check if any results are returned
        if (!$hubPricing) {
            throw new \Exception("No data found for hub_id: $hub_id");
        }

        // Determine the daily price based on size
        switch ($size) {
            case 'small':
                return $hubPricing->daily_price_1;
            case 'medium':
                return $hubPricing->daily_price_2;
            case 'large':
                return $hubPricing->daily_price_3;
            case 'extra_large':
                return $hubPricing->daily_price_4;
            default:
                throw new \Exception("Invalid size: $size");
        }
    }
}
