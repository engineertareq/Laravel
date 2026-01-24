<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GithubController;
  
Route::get('/', function () {
    return view('welcome');
});
  
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  
Route::controller(GithubController::class)->group(function(){
    Route::get('auth/github', 'redirectToGithub')->name('auth.github');
    Route::get('auth/github/callback', 'handleGithubCallback');
});