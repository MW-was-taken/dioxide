<?php

use Illuminate\Support\Facades\Route;

// Guest Routes
Route::group(['middleware' => ['guest']], function() {
    Route::get('/', 'LandingController@index');

    // Login & Register
    Route::get('/login', 'AuthenticationController@loginIndex')->name('login');
    Route::post('/login', 'AuthenticationController@validateLogin')->name('login.post');
    Route::get('/register', 'AuthenticationController@registerIndex')->name('register');
    Route::post('/register', 'AuthenticationController@validateRegister')->name('register.post');
});

// Authentication Routes
Route::group(['middleware' => ['auth']], function() {

});