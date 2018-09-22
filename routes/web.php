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
Route::get('students', 'StudentController@getAllStudents');
Route::get('students/create', 'StudentController@create');
Route::post('students/create', 'StudentController@create');

