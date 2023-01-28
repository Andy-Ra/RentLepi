<?php

use App\Http\Controllers\Guest\DashboardController;
use App\Http\Controllers\Admin\AddBarangController;
use App\Http\Controllers\Admin\ShowBarangController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::group(['middleware' => ['guest']], function () {
        Route::get('/login', [LoginController::class, 'index'])->name('login.index');
        Route::post('/login', [LoginController::class, 'process'])->name('login.process');

        Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
        Route::post('/register', [RegisterController::class, 'process'])->name('register.process');
    });

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/logout', [LogoutController::class, 'process'])->name('signout.process');
        Route::get('/dashboard', [ShowBarangController::class, 'index'])->name('dashboard.index');
        Route::get('/add-barang', [AddBarangController::class, 'index'])->name('add-barang.index');
        Route::post('/add-barang', [AddBarangController::class, 'add'])->name('add-barang.add');
    });

    Auth::routes();
    
});
