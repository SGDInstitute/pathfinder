<?php

use App\Livewire\Main;
use App\Livewire\OneOff;
use Illuminate\Support\Facades\Route;

Route::get('/', Main::class)->name('main');
Route::get('/one-off', OneOff::class)->name('one-off');
