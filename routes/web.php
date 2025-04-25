<?php

use Illuminate\Support\Facades\Route ;
use App\Http\Controllers\firstController ;
use App\Http\Controllers\libreController ;
use App\Http\Controllers\flashcardController; 
Route::get('/', function () {
    return view('page.welcome');
});

Route::get('/about', [firstController::class , "index"]);

Route::get('/livre', [libreController::class , "index"]);

Route::get('/flashcards', [flashcardController::class , "index"]);