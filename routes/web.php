<?php

use Illuminate\Support\Facades\Route;

// Guest Routes
Route::group(['middleware' => ['guest']], function() {
    Route::get('/', 'LandingController@index');

    // Login & Register
    Route::get('/login', 'AuthenticationController@loginIndex');
    Route::post('/login', 'AuthenticationController@validateLogin');
    Route::get('/register', 'AuthenticationController@registerIndex');
    Route::post('/register', 'AuthenticationController@validateRegister');
});

// Authentication Routes
Route::group(['middleware' => ['auth']], function() {

});