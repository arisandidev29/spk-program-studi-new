<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::view('/about','about')->name('about');

Route::view('/login','login')->name('login');

Route::view('/register','singup')->name('register');  