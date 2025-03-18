<?php

use App\Livewire\Question;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::view('/about','about')->name('about');

Route::view('/login','login')->name('login');

Route::view('/register','singup')->name('register');  


// user


Route::view('/dashboard','user.dashboard')->name('dashboard');
Route::get('/question',Question::class)->name('question');

// admin

Route::view('/admin/dashboard','admin.dashboard')->name('admin.dashboard');
Route::view('/admin/users','admin.users')->name('admin.users');
Route::view('/admin/kriteria','admin.kriteria')->name('admin.kriteria');
Route::view('/admin/kriteria/create','admin.buat_kriteria')->name('admin.kriteria.create');
Route::view("/admin/bobot",'admin.bobot')->name('admin.bobot');