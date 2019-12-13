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
    return view('home');
});

Route::get('/blog', function () {
    return view('blog');
});
/*
Route::get('/hire', function () {
    return view('hire');
});
*/

Route::get('/about', function () {
    return view('about');
});

Route::get('/profile', function () {
    return view('account.profile');
});
/*
Route::get('/register', function () {
    return view('account.register');
});

Route::get('/log', function () {
    return view('account.log');
});
*/
Route::get('approve', [
    'uses' => 'hiresController@approve'
  ]);
/*
  Route::get('delete', [
    'uses' => 'hiresController@delete'
  ]);
*/
  Route::post('delete', [
    'uses' => 'hiresController@delete'
  ]);
/*
  Route::delete('delete', [
    'uses' => 'hiresController@delete'
  ]);
  */

Route::delete('/delete{?id}', 'hiresController@delete');

Route::get('/hire', 'hiresController@order');
Route::post('/hire', 'hiresController@post');
Route::get('/jobs', 'hiresController@jobs');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/log', 'SessionsController@create');
Route::post('/log', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');


Route::view('/bulksms', 'mikael.bulksms');
Route::post('/bulksms', 'BulkSmsController@sendSms');