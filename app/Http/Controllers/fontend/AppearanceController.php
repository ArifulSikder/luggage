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
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://router.hereapi.com/v8/',
        ]);
    }

    public function index()
    {
        return view('frontend.pages.home');
    }
    public function hub_details(Request $request, $data_url)
    {
        $apiKey = env('GOOGLE_MAPS_API_KEY');
        $encrypted_data = $request->get('data') ?? $data_url;

        if ($encrypted_data) {
            $decrypted_data = base64_decode($encrypted_data);

            if ($decrypted_data) {
                $urldata = json_decode($decrypted_data, true);

                if ($urldata) {
                    $destinations = $this->getDestinationsFromDatabase(); 
                    $shortestDistance = null;
                    $shortestDestination = null;
            
                    foreach ($destinations as $destination) {
                        $url = "https://maps.googleapis.com/maps/api/distancematrix/json";
                        $response = Http::get($url, [
                            'origins' => $urldata['pick_up_location_name'],
                            'destinations' => $destination,
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
                            $distanceInMiles = $distance / 1609.34;
            
                            if ($shortestDistance === null || $distanceInMiles < $shortestDistance) {
                                $shortestDistance = $distanceInMiles;
                                $shortestDestination = $destination;
                            }
                        }
                    }
               
            
                    $data['hub_details'] = MyHub::whereAddress($shortestDestination)->first();
                    if ($data['hub_details'] == null) {
                        $message = [
                            'error' => 'Sorry No Hub matching your requirement can be found now.'
                        ];

                        return redirect()->back()->with($message);
                    }
                    // $data['hub_details'] = MyHub::with('user', 'hub_pricing')->findOrFail(1);

                    $data['option_details'] = Option::where('option_identity', 'Tax')->first();
                    $data['urldata'] = $urldata;
                    $data['shortestDistance'] = $shortestDistance;
                    $data['shortestDestination'] = $shortestDestination;

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

    private function getDestinationsFromDatabase()
    {
        $hubAddress = MyHub::pluck('address')->toArray();
        return $hubAddress;
    }
}
