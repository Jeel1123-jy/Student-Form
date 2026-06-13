<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/home','home');

Route::post('/submit', [DetailController::class, 'store']);