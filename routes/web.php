<?php

use Illuminate\Support\Facades\Route ;
use App\Http\Controllers\firstController ;
use App\Http\Controllers\libreController ;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [firstController::class , "index"]);

Route::get('/livre', [libreController::class , "index"]);