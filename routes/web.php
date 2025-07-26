<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('splash');
});

Route::middleware(['web'])->group(function () {
    Route::view('splash', 'splash', ['page_title' => 'Splash Screen'])->name('splash');
    Route::view('boarding', 'boarding',  ['page_title' => 'Boarding Page'])->name('boarding');
    Route::view('login', 'login', ['page_title' => 'Login'])->name('login');
    Route::view('register', 'register', ['page_title' => 'Register'])->name('register');
    Route::view('verification', 'verification', ['page_title' => 'Verification'])->name('verification');
    Route::view('home', 'home', ['page_title' => 'Home'])->name('home');
    Route::view('detail-recipe', 'detail-recipe', ['page_title' => 'Detail Resep'])->name('detail-recipe');
    Route::view('cooking-step', 'cooking-step', ['page_title' => 'Step Memasak'])->name('cooking-step');
    Route::view('discussion', 'discussion', ['page_title' => 'Diskusi Resep'])->name('discussion');

    Route::view('post', 'post', ['page_title' => 'Postingan Resep'])->name('post');
    Route::view('create-recipe', 'create-recipe', ['page_title' => 'Buat Resep'])->name('create-recipe');
    Route::view('saved-recipe', 'saved-recipe', ['page_title' => 'Resep Tersimpan'])->name('saved-recipe');
    Route::view('chef-profile', 'chef-profile', ['page_title' => 'Profile Chef'])->name('chef-profile');
    Route::view('chef-message', 'chef-message', ['page_title' => 'Pesan'])->name('chef-message');

    Route::view('profile', 'profile', ['page_title' => 'Profile'])->name('profile');
});


