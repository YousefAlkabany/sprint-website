<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisterdUserController;

Route::view('/','home');
Route::view('home', 'home');

Route::get('/jobs',[JobController::class,'index']);
Route::get('jobs/create',[JobController::class,'create']);
Route::get('jobs/{job}', [JobController::class,'show']);
Route::post('/jobs',[JobController::class,'store']);

Route::get('/jobs/{job}/edit',[JobController::class,'edit']);
Route::patch('/jobs/{job}',[JobController::class,'update']);
Route::delete('/jobs/{job}',[JobController::class,'destroy']);

Route::get('/register',[RegisterdUserController::class, 'create'] );
Route::post('/register',[RegisterdUserController::class,'store']);

Route::get('/login',[LoginUserController::class, 'create'] );
Route::post('/login',[LoginUserController::class,'store']);
Route::post('/logout', [LoginUserController::class, 'destroy']);


