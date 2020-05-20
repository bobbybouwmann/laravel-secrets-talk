<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('exception', function () {
    // Fill in exception here
});

Route::get('payment', function () {
    return view('payment');
})->name('payment');
