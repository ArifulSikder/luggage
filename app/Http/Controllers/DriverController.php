<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Option;
use Illuminate\Support\Facades\Auth;


class DriverController extends Controller
{
    public function index()
    {
        $data['orders'] = Booking::whereUserId(Auth::id())->where('status', "Booked")->get();
        return view('frontend.pages.driver-profile', $data);
    }
}
