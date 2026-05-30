<?php

use Illuminate\Support\Facades\Route;
use App\Models\Room;

Route::get('/', function () {
    $room = Room::first();

    return view('chat', compact('room'));
});