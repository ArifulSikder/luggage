<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommonResource;
use App\Models\Booking;
use App\Models\HubPricing;
use App\Models\MyHub;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\BaseController as BaseController;
use App\Models\User;

class CustomerController extends BaseController
{
    public function index()
    {
        $data['orders'] = Booking::whereUserId(Auth::id())->where('status', 'Booked')->orderBy('id', 'desc')->get(); // all orders
        return view('frontend.pages.customer-profile', $data);
    }

    public function calculateTotalCost(Request $request)
    {
        $hubPricing = HubPricing::find($request->input('hub_id'));
        $requestData = $request->all();
        $result = calculateBagTotals($requestData, $hubPricing);

        return response()->json([
            'totalPrice' => $result['totalPrice'],
            'totalBag' => $result['totalBag'],
        ]);
    }

    public function reserve(Request $request)
    {
        try {
            $myHub = MyHub::with('hubPricing')->find($request->input('hub_id'));
            $hubPricing = $myHub->hubPricing;
            $requestData = $request->all();
            $result = calculateBagTotals($requestData, $hubPricing);

            // Create booking entry in the database
            $invoiceNumber = '#' . str_pad(rand(0, 99999999), 8, '0', STR_PAD_LEFT); //generate invoice number

            $booking = Booking::create([
                'invoice' => $invoiceNumber,
                'user_id' => Auth::id(),
                'hub_id' => $request->hub_id,
                'pick_up_location' => $myHub->address,
                'drop_off_location' => $myHub->address,
                'booking_date' => Carbon::now(),
                'check_in_date' => Carbon::parse($request->check_in_date_time),
                'check_out_date' => Carbon::parse($request->check_out_date_time),
                'small_bags' => $result['totals']['Small'],
                'medium_bags' => $result['totals']['Medium'],
                'large_bags' => $result['totals']['Large'],
                'extra_large_bags' => $result['totals']['Extra Large'],
                'driving_price' => distancePrice($hubPricing),
                'total_cost' => $result['totalPrice'],
                'status' => 'Booked',
            ]);

            $delivary_agents = User::whereUserType(3)->where('')->first();

            return $this->sendResponse(new CommonResource($booking), 'Booking successful!');
        } catch (\Throwable $th) {
            Log::error('Error creating booking: ' . $th->getMessage(), ['stack' => $th->getTraceAsString()]);

            return $this->sendError('Failed to fetch Booking', $th->getMessage());
        }
    }
}
