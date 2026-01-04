<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/routing', function(){
    return view('routing-in-laravel');
});

Route::get('/redirect', function(){
    return view('redirect-in-laravel');
});