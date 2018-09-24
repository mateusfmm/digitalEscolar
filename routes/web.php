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

Route::get('test', function () {
    event(new App\Events\StatusLiked('Someone'));
    return "Event has been sent!";
});
//Students
Route::prefix('students')->group(function () {
    Route::get('/', 'StudentController@getAllStudents');
    Route::get('/create', 'StudentController@create');
    Route::post('/create', 'StudentController@create');
    Route::get('/edit/{id}', ['as'=> 'students.edit', 'uses' => 'StudentController@edit']);
    Route::post('/edit/{id}', 'StudentController@edit');
    Route::get('/delete/{id}', ['as'=> 'students.delete', 'uses' => 'StudentController@delete']);
});

//Schools
Route::prefix('schools')->group(function () {
    Route::get('/', 'SchoolController@getAllSchools');
    Route::get('/create', 'SchoolController@create');
    Route::post('/create', 'SchoolController@create');
    Route::get('/edit/{id}', ['as'=> 'schools.edit', 'uses' => 'SchoolController@edit']);
    Route::post('/edit/{id}', 'SchoolController@edit');
    Route::get('/delete/{id}', ['as'=> 'schools.delete', 'uses' => 'SchoolController@delete']);
});

//Notifications
//Schools
Route::prefix('notifications')->group(function () {
    Route::get('/', 'NotificationController@getAllNotifications');
    Route::get('/create', 'NotificationController@create');
    Route::post('/create', 'NotificationController@create');
    Route::get('/delete/{id}', ['as'=> 'notifications.delete', 'uses' => 'NotificationController@delete']);
});
