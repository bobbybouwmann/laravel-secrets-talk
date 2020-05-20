<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/{user}', 'UsersController@show')->name('users.show');
