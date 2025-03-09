<?php

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PasswordController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {



    Route::group(['middleware' => 'admin.access:guest'], function () {

        Route::get('/', fn() => redirect()->route('admin.login'));

        Route::get('login', [AuthController::class, 'create'])->name('login');
        Route::post('login', [AuthController::class, 'store']);
    });


    Route::group(['middleware' => 'admin.access:auth'], function () {

        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::group(['prefix' => 'account', 'as' => 'account.'], function () {
            Route::get('/profile-update', [AccountController::class, 'edit'])->name('profile');
            Route::post('/profile-update', [AccountController::class, 'update']);

            Route::get('/change-password', [PasswordController::class, 'edit'])->name('password');
            Route::post('/change-password', [PasswordController::class, 'update']);
        });

        Route::post('logout', [AuthController::class, 'destroy'])->name('logout');
    });



});