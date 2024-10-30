<?php

use App\Http\Controllers\line_controller;
use App\Http\Controllers\test_controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [test_controller::class, 'index']);
Route::get('/hook', [line_controller::class, 'hook']);
Route::get('/send-message', [line_controller::class, 'send_message']);
