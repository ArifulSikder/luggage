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
        $pick_up_location = $request->input('pick_up_location');
        $drop_off_location = $request->input('drop_off_location');
        $checkInDate = $request->input('checkin_datetime');
        $checkOutDate = $request->input('checkout_datetime');
        $smallBags = $request->input('counter1');
        $mediumBags = $request->input('counter2');
        $largeBags = $request->input('counter3');
        $extraLargeBags = $request->input('counter4');
        $premiumServices = $request->input('premiumServices');
        $hub_id = $request->input('hub_id');
        $driving_price = $request->input('driving_price');

        // Calculate total cost
        $totalCost = $request->input('total_cost');

        // Create booking entry in the database
        $invoiceNumber = '#' . str_pad(rand(0, 99999999), 8, '0', STR_PAD_LEFT);

        Booking::create([
            'invoice' => $invoiceNumber,
            'user_id' => Auth::id(),
            'hub_id' => $hub_id,
            'pick_up_location' => $pick_up_location,
            'drop_off_location' => $drop_off_location,
            'booking_date' => Carbon::now(),
            'check_in_date' => Carbon::parse($checkInDate),
            'check_out_date' => Carbon::parse($checkOutDate),
            'small_bags' => $smallBags,
            'medium_bags' => $mediumBags,
            'large_bags' => $largeBags,
            'extra_large_bags' => $extraLargeBags,
            'driving_price' => $driving_price,
            'total_cost' => $totalCost,
            'status' => "Booked"
        ]);
        
        return redirect('/customer-dashboard')->with('success', 'Booking was successful!');
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
