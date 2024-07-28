<?php

use App\Http\Controllers\Auth\SocialController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Livewire\StudentsComponent;
use App\Livewire\Teachers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('students', StudentsComponent::class);
Route::get('/teachers', Teachers::class)->name('teachers');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/auth/google', [SocialiteController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [SocialiteController::class, 'handleGoogleCallback']);

Route::get('login/facebook', [SocialController::class, 'redirectToFacebook']);
Route::get('login/facebook/callback', [SocialController::class, 'handleFacebookCallback']);
