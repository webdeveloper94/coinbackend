<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\CoinController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/savecoin', [CoinController::class, 'savecoin'])->name('savecoin');

Route::get('/show/{user_id}', [AppController::class, 'show'])->name('show_user');



