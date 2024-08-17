<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;

Route::get('/',[JobController::class,'index']);

Route::middleware('guest')->group(function(){
    Route::get('/register',[RegisterUserController::class,'create']);
    Route::post('/register',[RegisterUserController::class,'store']);
    Route::get('/login',[SessionController::class,'create']);
    Route::post('/login',[SessionController::class,'store']);
});





Route::delete('/login',[SessionController::class,'destroy']);