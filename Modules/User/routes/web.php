<?php

use Illuminate\Support\Facades\Route;
use Modules\User\App\Livewire\Login;
use Modules\User\Http\Controllers\UserController;

Route::get('/login', Login::class)->name('login');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('users', UserController::class)->names('user');
});
