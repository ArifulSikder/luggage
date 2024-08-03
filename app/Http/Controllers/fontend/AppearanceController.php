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
                    if (!$shortestDistanceAndHub['shortestDistance'] && !$shortestDistanceAndHub['selectedHub']) {
                        $message = [
                            'error' => 'Sorry No Hub matching your requirement can be found now.'
                        ];
                        return redirect()->back()->with($message)->withInput($urldata); 
                    }

                    session()->put('shortestDistance', $shortestDistanceAndHub['shortestDistance']);
                    $data['option_details'] = Option::where('option_identity', 'Tax')->first();
                    $data['urldata'] = $urldata;
                    $data['hubDetails'] = $shortestDistanceAndHub['selectedHub']; 
                    $data['hubInfo'] = calculateBagTotals($urldata, $shortestDistanceAndHub['selectedHub']->hubPricing);
                    
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
        $shortestDistance = null;
        $shortestDestination = null;
        $selectedHub = null;
        // Get the no space hub destinations from the session
        $noSpaceHubDestinations = session()->get('no_space_hub_destinations', []);

        $hubAddress = MyHub::with('hubPricing')->get(); // get all addresses from database
        $uniqueAddresses = $hubAddress->pluck('address')->unique()->toArray();

        // Exclude all no space hub destinations from unique addresses
        if (!empty($noSpaceHubDestinations)) {
            $uniqueAddresses = array_diff($uniqueAddresses, $noSpaceHubDestinations);
        }

        foreach ($uniqueAddresses as $destination) {
            $url = 'https://maps.googleapis.com/maps/api/distancematrix/json';
            $response = Http::get($url, [
                'origins' => $urldata['pick_up_location_name'], // pickup location
                'destinations' => $destination, // hub location
                'key' => $apiKey,
                'mode' => 'driving', // Travel mode
                'units' => 'imperial', // Units
                'avoid' => 'highways,tolls', // Avoid highways and tolls
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
        if (count($uniqueAddresses) > 0) {
            $bagNumber = $urldata['bagNumber'];
            $requestBags = requestBag($bagNumber);
           
            if ($requestBags) {
                foreach ($requestBags as $requestBag) {
                    $capacityField = strtolower($requestBag['size']) . '_bags_capacity';
                    $selectedHub = $hubAddress
                        ->where('address', $shortestDestination)
                        ->where($capacityField, '>=', $requestBag['quantity'])
                        ->first();
        
                    if ($selectedHub == null) {
                        // Add the shortest destination to the session array
                        $noSpaceHubDestinations[] = $shortestDestination;
                        session()->put('no_space_hub_destinations', $noSpaceHubDestinations);
        
                        // Call the method recursively
                        return $this->shortestDistanceAndHub($urldata);
                    }
                }
        
                // Clear the session data if a suitable hub is found
                session()->forget('no_space_hub_destinations');
            }
        }


        // Return the shortest distance and selected hub
        return [
            'shortestDistance' => $shortestDistance,
            'selectedHub' => $selectedHub,
        ];
    }
}
