<?php

use App\Livewire\StudentsComponent;
use App\Livewire\Teachers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('students', StudentsComponent::class);
Route::get('/teachers', Teachers::class)->name('teachers');
