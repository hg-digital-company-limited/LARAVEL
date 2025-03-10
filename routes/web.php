<?php

use App\Livewire\Function\Cn1;
use App\Livewire\Function\Cn1Doc;
use App\Livewire\Function\Cn2;
use App\Livewire\Function\Cn2Doc;
use App\Livewire\Function\Cn3;
use App\Livewire\Function\Cn3Doc;
use App\Livewire\Function\Cn4;
use App\Livewire\Function\Cn4Doc;
use App\Livewire\Function\Cn5;
use App\Livewire\Home;
use App\Livewire\Login;
use Illuminate\Support\Facades\Route;

// Trang chỉ truy cập khi đã đăng nhập
Route::middleware('auth')->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/cn1', Cn1::class)->name('cn1');
    Route::get('/cn2', Cn2::class)->name('cn2');
    Route::get('/cn3', action: Cn3::class)->name('cn3');
    Route::get('/cn4', action: Cn4::class)->name('cn4');
    Route::get('/cn5', Cn5::class)->name('cn5');



    Route::get('/doc/cn1', Cn1Doc::class)->name('doc.cn1');
    Route::get('/doc/cn2', Cn2Doc::class)->name('doc.cn2');
    Route::get('/doc/cn3', Cn3Doc::class)->name('doc.cn3');
    Route::get('/doc/cn4', Cn4Doc::class)->name('doc.cn4');
});
Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/cn1/pusher', function() {
        event(new App\Events\CN1_MyEvent('Hello World'));
    });
});

