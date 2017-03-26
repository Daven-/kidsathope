<?php

/**
 * Global Routes
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', 'LanguageController@swap');

// Route::get('students', function() {
//     return view('students');
// });

// Route::get('staff', function() {
//     return view('staff');
// });

// Route::get('admin', function() {
//     return view('admin');
// });

/* ----------------------------------------------------------------------- */

/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    includeRouteFiles(__DIR__.'/Frontend/');
});

/* ----------------------------------------------------------------------- */

/*
 * Backend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    /*
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     */
    includeRouteFiles(__DIR__.'/Backend/');
});


Route::get('/staff', 'StaffController@index');
Route::get('/seed', 'StaffController@seedDB');
Route::get('/staff23', function(){ return view('staff');});
Route::get('/admin', function(){ return view('admin');});
Route::get('/edit', function(){ return view('edit');});
Route::get('/homepage', function(){ return view('homepage');});
Route::get('/help', function(){ return view('help');});
Route::get('/criteria', function(){ return view('criteria');});
Route::get('/students', function(){ return view('students');});
Route::get('/teacher', function(){ return view('teacher');});
Route::get('/index', function(){ return view('index');});
Route::get('/main', function(){ return view('main');});
Route::get('/list', function(){ return view('list');});

// Route::get('/students', 'StudentController@index');

Route::post('upload/csv', 'Backend\CSVController@uploadCSV'); // NOTE:

