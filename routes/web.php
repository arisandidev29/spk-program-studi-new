<?php

use App\Http\Controllers\UserController;
use App\Livewire\EditKriteria;
use App\Livewire\Question;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::view('/about', 'about')->name('about');

Route::view('/login', 'login')->name('login')->middleware(['guestAuth']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::view('/register', 'singup')->name('register')->middleware('guestAuth');


// user


Route::view('/dashboard', 'user.dashboard')->name('dashboard')->middleware(['userAuth']);
Route::view('/profile','user.profile')->middleware(['auth','userAuth'])->name('user.profile');
Route::get('/question', Question::class)->name('question');

Route::get('/tes', [UserController::class, 'token']);


// admin

Route::prefix('admin')->middleware(['adminAuth'])->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('admin.dashboard');
    Route::view('/users', 'admin.users')->name('admin.users');
    Route::view('/kriteria', 'admin.kriteria')->name('admin.kriteria');
    Route::view('/kriteria/create', 'admin.buat_kriteria')->name('admin.kriteria.create');
    Route::get('/kriteria/{id}/edit', EditKriteria::class)->name('admin.kriteria.edit');
    Route::view("/bobot", 'admin.bobot')->name('admin.bobot');
    Route::view('/alternative', 'admin.alternative')->name('admin.alternative');
});


