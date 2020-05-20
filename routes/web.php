<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts/create', 'PostsController@create')->name('posts.create');
Route::post('posts', 'PostsController@store')->name('posts.store');
Route::get('posts/{post}', 'PostsController@show')->name('posts.show');

Route::get('publish/{post}', 'PublishPostController@show')->name('posts.publish.show');
Route::post('publish/{post}', 'PublishPostController@store')->name('posts.publish.store');

