<?php

// BEGIN: DASHBOARD


// BEGIN: DashboardController

// dashboard
Route::get('/app/v1/dashboard','DashboardController@index')->name('dashboard'); //index

// END: DashboardController


// BEGIN: StatusController

// activation
Route::get('/app/v1/dashboard/activation','StatusController@activation')->name('activation'); //activation

// activation_create
Route::post('/app/v1/dashboard/activation/create','StatusController@activation_create')->name('activation_create'); //activation

// END: StatusController


// END: DASHBOARD







// default


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
