<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeliveryAgentController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\fontend\AppearanceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Events\NotificationEvent;
use App\Models\User;
use App\Notifications\MyNotification;


// ************************************************ Customer route ************************************************

Route::get('/test', function(){
    $user = User::findOrfail(1);
    // $pusher = new Pusher\Pusher(
    //     '72369215017d64bf635d',
    //     'de52ba767a9142c0dd38',
    //     '1849185',
    //     ['cluster' => 'ap2']
    // );
    
    // $pusher->trigger('my-channel', 'my-event', ['message' => 'Test message']);
    // Notify the delivery agent user if found
    if ($user) {
        $notificationData = (object) [
            'message' => 'This is a test notification',
            'url' => 'http://example.com',
            'id'=> $user->id
        ];
        $user->notify(new MyNotification($notificationData));
    }
    return 'Event fired';
});
Route::get('/test2', function(){

    event(new NotificationEvent('Hello Ariful'));
    return 'Event fired';
});

Route::get('/', [AppearanceController::class, "index"]);
Route::get('/details/data/{data}', [AppearanceController::class, "hub_details"]);
Route::get('/customer-dashboard', [CustomerController::class, "index"])->name('customer-dashboard');
Route::post('/calculate-total-cost', [CustomerController::class, "calculateTotalCost"])->name('calculate-total-cost');


// ************************************************ Delivery Agent route ************************************************
Route::middleware('auth')->group(function () {
    Route::get('/delivery-agent', [DeliveryAgentController::class, "index"])->name('delivery-agent');
});




Route::get('/check-login', function () {
    return response()->json(['logged_in' => Auth::check()]);
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::post('/reserve', [CustomerController::class, 'reserve'])->name('reserve');
    Route::get('/customer-dashboard', [CustomerController::class, "index"])->name('customer-dashboard');
    Route::get('/driver-dashboard', [DriverController::class, "index"])->name('driver-dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
