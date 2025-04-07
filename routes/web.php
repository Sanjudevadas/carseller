<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function(){

    Route::get('/','index')->name('home');
});

Route::controller(SignupController::class)->group(function(){

     Route::get('/signup', 'create')->name('signup');
});


Route::controller(LoginController::class)->group(function(){
    Route::get('/login','login')->name('login');

});

Route::get('/car/search',[CarController::class,'search'])->name('car.search');
Route::resource('car',CarController::class);