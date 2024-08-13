<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class DeliveryAgentController extends Controller
{
    public function index()
    {
        $data['orders'] = Booking::where('status', 'Booked')->whereHas('deliveryAgentHistories', function($query){
            $query->where('delivery_agent_id', Auth::id());
        })->orderBy('id', 'desc')->get(); // all orders
        
        return view('deliveryAgent.pages.deliveryAgentProfile', $data);
    }
}
