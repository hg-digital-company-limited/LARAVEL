<?php

use App\Livewire\Function\Cn1;
use App\Livewire\Home;
use App\Livewire\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/cn1', action: Cn1::class);
Route::get('/login', action: Login::class);
