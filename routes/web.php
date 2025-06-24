<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('splash', 'splash')->name('splash');
Route::view('boarding', 'boarding')->name('boarding');
Route::view('login', 'login')->name('login');
Route::view('register', 'register')->name('register');
Route::view('verification', 'verification')->name('verification');
Route::view('home', 'home')->name('home');
Route::view('detail-recipe', 'detail-recipe')->name('detail-recipe');
Route::view('cooking-step', 'cooking-step')->name('cooking-step');
Route::view('discussion', 'discussion')->name('discussion');

Route::view('my-recipe', 'my-recipe')->name('my-recipe');
Route::view('create-recipe', 'create-recipe')->name('create-recipe');
Route::view('saved-recipe', 'saved-recipe')->name('saved-recipe');
Route::view('chef-profile', 'chef-profile')->name('chef-profile');
Route::view('chef-message', 'chef-message')->name('chef-message');

Route::view('profile', 'profile')->name('profile');

