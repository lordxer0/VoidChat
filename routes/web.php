<?php

use Illuminate\Support\Facades\Route;
use App\Models\Room;

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/', function () {
    $room = Room::with('messages')->first();

    return view('chat', compact('room'));
});

Route::post('/message', function () {

    return 'Pendiente de autenticación';

    $room = Room::first();

    $room->messages()->create([
        'username' => request('username'),
        'message' => request('message'),
    ]);


    return redirect('/');
});

Route::get('/messages', function () {
    return Room::with(['messages' => function ($q) {
        $q->orderBy('id');
    }])->first()->messages;
});