<?php

use App\Http\Controllers\MyChirpController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MyChirpController::class, 'index']);

// Route::get('/', function () {
//     return view('home');
// });
