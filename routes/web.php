<?php

use App\Http\Controllers\EditAlternative;
use App\Http\Controllers\EditBobot as ControllersEditBobot;
use App\Http\Controllers\EditKriteria as ControllersEditKriteria;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDashboardController;
use App\Livewire\AdaminUserResult;
use App\Livewire\AdminDashboard;
use App\Livewire\AdminUserResult;
use App\Livewire\BobotEdit;
use App\Livewire\EditBobot;
use App\Livewire\EditKriteria;
use App\Livewire\Question;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelPdf\Facades\Pdf;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::view('/pdf' ,'pdf.UserRekomendation');
Route::view('/about', 'about')->name('about');

Route::view('/login', 'login')->name('login')->middleware(['guestAuth']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::view('/register', 'singup')->name('register')->middleware('guestAuth');


// user


Route::view('/dashboard', 'user.dashboard')->name('dashboard')->middleware(['userAuth']);
Route::view('/profile','user.profile')->middleware(['auth','userAuth'])->name('user.profile');
Route::get('/question/{id}/kriteria', Question::class)->name('question');
route::view('/result','user.result')->name('user.result');


// admin

Route::prefix('admin')->middleware(['adminAuth'])->group(function () {
    Route::get('/dashboard', AdminDashboard::class)->name('admin.dashboard');
    Route::view('/users', 'admin.users')->name('admin.users');
    Route::get('/user/{id}/result', AdminUserResult::class )->name('admin.user.result');
    Route::view('/kriteria', 'admin.kriteria')->name('admin.kriteria');
    Route::view('/kriteria/create', 'admin.buat_kriteria')->name('admin.kriteria.create');
    Route::get('/kriteria/{id}/edit', [ControllersEditKriteria::class,'view'])->name('admin.kriteria.edit');
    Route::view("/bobot", 'admin.bobot')->name('admin.bobot');
    Route::get('/bobot/{id}/edit',[ControllersEditBobot::class,'view'])->name('admin.bobot.edit');
    Route::view('/alternative', 'admin.alternative')->name('admin.alternative');
    Route::get('/altervative/{id}/edit', [EditAlternative::class,'view'])->name('admin.alternative.edit');
});


