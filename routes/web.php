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

Route::get('/', 'HomepageController@index')->name('home');

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/profiles/', 'ProfilesController@index');

Route::get('/dashboard/profiles/create', 'ProfilesController@create');

Route::post('/dashboard/profiles', 'ProfilesController@store');

Route::get('/dashboard/profiles/api', 'ProfilesController@api');


Route::get('/dashboard/regions', 'RegionsController@index');

Route::get('/dashboard/regions/create', 'RegionsController@create');

Route::post('/dashboard/regions', 'RegionsController@store');