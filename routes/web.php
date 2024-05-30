<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth', 'middleware' => [RedirectIfAuthenticated::class]], function (){
    Auth::routes(['verify' => true, 'logout' => false]);
});
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/', [HomeController::class, 'home'])->middleware('auth')->name('app');
