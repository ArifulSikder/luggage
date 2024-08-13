<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});


Broadcast::channel('my-channel-{id}', function ($user, $id) {
    return (int) $user->id === (int) $id; // Example: authenticate if the ID matches
});