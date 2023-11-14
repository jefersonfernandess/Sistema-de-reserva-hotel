<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(SiteController::class)->group(function () {

    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('home.index');
    });
    
    Route::controller(RoomController::class)->group(function () {
        Route::get('/view-room', 'index')->middleware('admin')->name('room.index');
        Route::get('/create-new-room', 'createRoom')->middleware('admin')->name('room.create');
        Route::post('/room/creating', 'storeRoom')->middleware('admin')->name('room.store');
    });

});

Route::controller(UserController::class)->group(function () {
    Route::get('/profile', 'userProfile')->middleware('auth')->name('user.profile');

    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'index')->name('login.index');
        Route::post('/login/loading', 'loginStore')->name('login.store');
        Route::post('/logout', 'logout')->name('login.logout');
    });

    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register', 'index')->name('register.index');
        Route::post('/register/loading', 'registerStore')->name('register.store');
    });
});



