<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MyHub;
use App\Models\Option;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class AppearanceController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home');
    }
    public function hub_details(Request $request, $dataUrl)
    {
        $encryptedData = $request->get('data') ?? $dataUrl; // encrypted data from request

        if ($encryptedData) {
            $decryptedData = base64_decode($encryptedData); // decoded data

            if ($decryptedData) {
                $urldata = json_decode($decryptedData, true); 

                if ($urldata) {
                    $shortestDistanceAndHub = $this->shortestDistanceAndHub($urldata); // get all destination from the database
                     
                    $data['option_details'] = Option::where('option_identity', 'Tax')->first();
                    $data['urldata'] = $urldata;
                    $data['shortestDistance'] = $shortestDistanceAndHub['shortestDistance'];
                    $data['hub_details'] = $shortestDistanceAndHub['selectedHub'];

                    return view('frontend.pages.hub', $data);
                } else {
                    // Handle JSON decoding error
                    abort(400, 'Failed to decode data.');
                }
            } else {
                // Handle base64 decoding error
                abort(400, 'Failed to decrypt data.');
            }
        } else {
            // Handle missing data parameter
            abort(400, 'No data parameter provided.');
        }
    }

    private function shortestDistanceAndHub($urldata)
    {
        $apiKey = env('GOOGLE_MAPS_API_KEY'); // google api key
        $hubAddress = MyHub::get(); // get all addresses from database
        $uniqueAddresses = $hubAddress->pluck('address')->unique()->toArray(); 

        $shortestDistance = null;
        $shortestDestination = null;

        foreach ($uniqueAddresses as $destination) {
            $url = "https://maps.googleapis.com/maps/api/distancematrix/json";
            $response = Http::get($url, [
                'origins' => $urldata['pick_up_location_name'], //pickup location
                'destinations' => $destination, // hub location
                'key' => $apiKey,
                'mode' => 'driving',  // Travel mode
                'units' => 'imperial', // Units
                'avoid' => 'highways,tolls' // Avoid highways and tolls
            ])->json();

            if ($response['status'] === 'OK') {
                $element = $response['rows'][0]['elements'][0];

                if ($element['status'] === 'ZERO_RESULTS') {
                    continue; // No route for driving
                }

                $distance = $element['distance']['value']; // Distance in meters
                $distanceInKm = $distance / 1000; // distance in km

                if ($shortestDistance === null || $distanceInKm < $shortestDistance) {
                    $shortestDistance = $distanceInKm;
                    $shortestDestination = $destination;
                }
            }
        }
     
        if ($shortestDistance === null) {
            return ['message' => 'No available route found for driving'];
        }

        $selectedHub = $hubAddress->where('address', $shortestDestination)->first();

        return [
            'shortestDistance' => $shortestDistance, 
            'selectedHub' => $selectedHub
        ];
    }
}
