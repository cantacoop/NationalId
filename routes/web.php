<?php

use App\Task;

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

Route::get('/map', function () {
    return view('map');
});

Route::get('/people', 'PeopleController@index');
Route::get('/people/create', 'PeopleController@create');
Route::post('/people', 'PeopleController@store');
Route::get('/people/{number}', 'PeopleController@show');
