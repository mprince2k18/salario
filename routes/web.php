<?php

// BEGIN: DASHBOARD


// BEGIN: DashboardController

// dashboard
Route::get('/app/v1/dashboard','DashboardController@index')->name('dashboard'); //index

// END: DashboardController

// ------------------------------------------------------------------------------------------------------------------


// BEGIN: StatusController

// register_employee
Route::get('/app/v1/dashboard/register/employee','EmployeeController@index')->name('register_employee'); //register_employee

// create_employee
Route::post('/app/v1/dashboard/register/employee/create','EmployeeController@create_employee')->name('create_employee'); //create_employee





// END: StatusController


// ------------------------------------------------------------------------------------------------------------------

// BEGIN: StatusController

// BEGIN: Activation

// activation
Route::get('/app/v1/dashboard/activation','StatusController@activation')->name('activation'); //activation

// activation_create
Route::post('/app/v1/dashboard/activation/create','StatusController@activation_create')->name('activation_create'); //activation_create

// activation_delete
Route::get('/app/v1/dashboard/activation/delete/{activation_id}/{slug}','StatusController@activation_delete')->name('activation_delete'); //activation_delete

// activation_edit
Route::get('/app/v1/dashboard/activation/edit/{activation_id}/{slug}','StatusController@activation_edit')->name('activation_edit'); //activation_edit

// activation_update
Route::post('/app/v1/dashboard/activation/update/{activation_id}','StatusController@activation_update')->name('activation_update'); //activation_update

// activation_multi_delete
Route::get('/app/v1/dashboard/activation/multi/delete','StatusController@activation_multi_delete')->name('activation_multi_delete'); //activation_update

// END: Activation


// BEGIN: Designation

// designation
Route::get('/app/v1/dashboard/designation','StatusController@designation')->name('designation'); //designation
//
// // designation_create
Route::post('/app/v1/dashboard/designation/create','StatusController@designation_create')->name('designation_create'); //designation_create
//
// activation_delete
Route::get('/app/v1/dashboard/designation/delete/{designation_id}/{slug}','StatusController@designation_delete')->name('designation_delete'); //designation_delete
//
// designation_edit
Route::get('/app/v1/dashboard/designation/edit/{designation_id}/{slug}','StatusController@designation_edit')->name('designation_edit'); //designation_edit
//
// designation_update
Route::post('/app/v1/dashboard/designation/update/{designation_id}','StatusController@designation_update')->name('designation_update'); //activation_update
//
// // designation_multi_delete
Route::get('/app/v1/dashboard/designation/multi/delete','StatusController@designation_multi_delete')->name('designation_multi_delete'); //designation_multi_delete

// END: Designation


// BEGIN: Department

// department
Route::get('/app/v1/dashboard/department','StatusController@department')->name('department'); //department
//
// department_create
Route::post('/app/v1/dashboard/department/create','StatusController@department_create')->name('department_create'); //department_create
//
// department_delete
Route::get('/app/v1/dashboard/department/delete/{department_id}/{slug}','StatusController@department_delete')->name('department_delete'); //department_delete
//
// department_edit
Route::get('/app/v1/dashboard/department/edit/{department_id}/{slug}','StatusController@department_edit')->name('department_edit'); //department_edit
//
// department_update
Route::post('/app/v1/dashboard/department/update/{department_id}','StatusController@department_update')->name('department_update'); //department_update
//
// department_id_multi_delete
Route::get('/app/v1/dashboard/department/multi/delete','StatusController@department_id_multi_delete')->name('department_id_multi_delete'); //department_id_multi_delete

// END: Department


// BEGIN: Gender


// gender
Route::get('/app/v1/dashboard/gender','StatusController@gender')->name('gender'); //gender
//
// gender_create
Route::post('/app/v1/dashboard/gender/create','StatusController@gender_create')->name('gender_create'); //gender_create
//
// gender_delete
Route::get('/app/v1/dashboard/gender/delete/{gender_id}/{slug}','StatusController@gender_delete')->name('gender_delete'); //gender_delete
//
// gender_edit
Route::get('/app/v1/dashboard/gender/edit/{gender_id}/{slug}','StatusController@gender_edit')->name('gender_edit'); //gender_edit
//
// gender_update
Route::post('/app/v1/dashboard/gender/update/{gender_id}','StatusController@gender_update')->name('gender_update'); //gender_update
//
// gender_id_multi_delete
Route::get('/app/v1/dashboard/gender/multi/delete','StatusController@gender_id_multi_delete')->name('gender_id_multi_delete'); //gender_id_multi_delete


// END: Gender



// END: StatusController


// END: DASHBOARD







// default


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
