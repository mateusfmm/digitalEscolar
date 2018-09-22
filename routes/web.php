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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('user/{id}', 'UserContrllero@show');


Route::get('students', 'StudentController@getAllStudents');


Route::get('students/create', 'StudentController@create');
Route::post('students/create', 'StudentController@create');
Route::get('students/edit/{id}', 'StudentController@edit');
Route::post('students/edit/{id}', 'StudentController@edit');



Route::delete('students/delete/{id}', 'StudentController@delete');

Route::get('notifications', 'NotificationController@getAllNotifications');


Route::get('notifications/create', 'NotificationController@create');
Route::post('notifications/create', 'NotificationController@create');

Route::put('notifications/{id}', 'NotificationController@edit');
Route::delete('students/{id}', 'NotificationController@delete');


Route::get('schools', 'SchoolController@getAllSchools');
Route::get('schools/create', 'SchoolController@create');
Route::post('schools/create', 'SchoolController@create');