<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend');
});

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::post('/authenticate', 'Auth\LoginController@login')->name('authenticate');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/backend', function () {
        return view('backend');
    });
    Route::get('/patients', 'PatientController@index');
    Route::post('/patients', 'PatientController@index')->name('patients');
    Route::get('/patients/create','PatientController@create');
    Route::post('/patients/create','PatientController@store')->name('newPatient');
    Route::get('/patients/{id}','PatientController@show')->name('patientDoc');
    Route::patch('/patients/{id}','PatientController@update')->name('update');
    Route::get('/patients/{id}/documentation','DocumentationController@show');
    Route::post('/patients/{id}/documentation','DocumentationController@create')->name('newDocumentation');
    Route::get('/documentations','DocumentationController@index');
    Route::get('/patient/delete/{id}', 'PatientController@delete');
});
