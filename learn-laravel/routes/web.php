<?php

use Illuminate\Support\Facades\Route;
//get mrthod
Route::get('/', function () {
    return view('welcome');
});


Route::get('/team', function (){
    return view('my-team');
});

//Sub-route
Route::get('/team/tareq', function (){
    return view('mrtareq');
});


Route::get('/html', function(){
    return "<h1>Return Raw HTML</h1>";
});

//view method

Route::view('/post', 'post');

Route::get('/test', function(){
    return view('ami');
});

Route::get('/post/{id?}', function(string $id = null){
    if($id){
     return "<h1>Given Value is $id</h1>";
    }
   else{
    return 'not found';
   }
});

//Numberic
Route::get('/blog/{id}', function(string $id){
    if($id){
        return "<h1>Post ID : ". $id ." </h1>";
    }
    else{
        return "Id Not found";
    }
})->whereNumber('id');
// Alphabetic
Route::get('/packages/{id}', function(string $id){
    if($id){
        return "<h1>Post ID : ". $id ." </h1>";
    }
    else{
        return "Id Not found";
    }
})->whereAlpha('id');

//Alpha Numeric
Route::get('/pricetag/{id}', function(string $id){
    if($id){
        return "<h1>Post ID : ". $id ." </h1>";
    }
    else{
        return "Id Not found";
    }
})->whereAlphaNumeric('id');


//Self Define
Route::get('/movie/{id}', function(string $id){
    if($id){
        return "<h1>Post ID : ". $id ." </h1>";
    }
    else{
        return "Id Not found";
    }
})->whereIn('id', ['movie', 'song']);


//Regular Expression
Route::get('/expressio/{id}', function(string $id){
    if($id){
        return "<h1>Post ID : ". $id ." </h1>";
    }
    else{
        return "Id Not found";
    }
})->where('id', '[0-9]+');



Route::get('page/about', function(){
    return view('About-Page');
});


Route::get('/list-of-doctorsssss', function(){
    return view('our-doctor');
})->name('doctors');


Route::redirect('/about', '/post');


//Group Route
Route::prefix('user')->group(function(){
     Route::get('/home', function(){
        return "User Home";
     })->name('user-home');
     Route::get('/blog', function(){
        return "User Blog";
     })->name('user-blog');
     Route::get('/news', function(){
        return "User News";
     })->name('user-news');
});




//fallback
Route::fallback(function(){
    return "fasgaya guru";
});