<?php

use App\Livewire\Function\Cn1;
use App\Livewire\Function\Cn1Doc;
use App\Livewire\Home;
use App\Livewire\Login;
use Illuminate\Support\Facades\Route;

// Trang chỉ truy cập khi đã đăng nhập
Route::middleware('auth')->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/cn1', Cn1::class)->name('cn1');
    Route::get('/doc/cn1', Cn1Doc::class)->name('doc.cn1');
});

// Trang đăng nhập, chặn truy cập nếu đã đăng nhập
Route::get('/login', Login::class)->name('login')->middleware('guest');
