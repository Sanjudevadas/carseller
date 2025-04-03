<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::controller(HomeController::class)->group(function(){

    Route::get('/','index');
});

Route::controller(SignupController::class)->group(function(){

     Route::get('/signup', 'create');
});


Route::controller(LoginController::class)->group(function(){
    Route::get('/login','login');

});