<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MyHub;
use App\Models\Option;
use Illuminate\Support\Facades\DB;

class AppearanceController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home');
    }
public function hub_details(Request $request, $data_url)
{
    $encrypted_data = $request->get('data') ?? $data_url;

    if ($encrypted_data) {
        // Decrypt the data
        $decrypted_data = base64_decode($encrypted_data);
        
        if ($decrypted_data) {
            // Decode the JSON data
            $urldata = json_decode($decrypted_data, true);
            
            if ($urldata) {
       
                    // Fetch hub details
                    $data['hub_details'] = MyHub::with('user', 'hub_pricing')->findOrFail(1);
                    $data['option_details'] = Option::where('option_identity', 'Tax')->first();
                    $data['urldata'] = $urldata;

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

    // public function hub_details(Request $request, $data){
    // 	$encrypted_data = $request->get('data') ?? $data;
    // 	if ($encrypted_data) {
    // 		$decrypted_data = base64_decode($encrypted_data);
    // 		if ($decrypted_data) {
    // 			$data = json_decode($decrypted_data, true);
    //             $latitude = $request->input('latitude');
    //             $longitude = $request->input('longitude');
    //             $distance = $request->input('distance') ?? 500; // Distance in kilometers

    //             $results = DB::table('my_hubs as hub')
    //                 ->selectRaw('hub.*, hub_price.*, (
    //                     6371 * acos(
    //                         cos(radians(?)) * cos(radians(hub.lat_value)) * cos(radians(hub.lon_value) - radians(?)) +
    //                         sin(radians(?)) * sin(radians(hub.lat_value))
    //                     )
    //                 ) AS distance', [$latitude, $longitude, $latitude])
    //                 ->leftJoin('hub_pricings as hub_price', 'hub_price.hub_id', '=', 'hub.id')
    //                 ->having('distance', '<=', $distance)
    //                 ->orderBy('distance')
    //                 ->get();

    //             $results['data'] =  $results;
    // 			// $this->load->model('MyhubModel');

    // 			// // Find locations within a 5 km radius
    // 			// $results = $this->MyhubModel->find_locations_within_radius($data['latvalue'], $data['lonvalue'], 500);
    // 			// $results['data'] = $data;
    // 			// // echo "<pre>". print_r(json_encode($results)); die;
    // 			// // Pass results to the view
    // 			// $this->load->view('Listing/listing_view', ['results' => $results,'data' => $encrypted_data]);

    //             return view('frontend.pages.hub', ['results' => $results,'data' => $encrypted_data]);
    // 		} else {
    // 			// Handle decryption error
    // 			abort('Invalid or corrupt data.', 400);
    // 		}
    // 	} else {
    // 		// Handle missing data parameter
    // 		abort('No data parameter provided.', 400);
    // 	}
    // }


    public function customerProfile()
    {
        return view('frontend.pages.customer-profile');
    }
}
