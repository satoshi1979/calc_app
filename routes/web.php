<?php

use App\Http\Controllers\CalcController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/calcs/{num01}/{ope}/{num02}', [CalcController::class, 'calcs']);


