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

Route::get('/', 'groupController@index');

Route::get('/group/show/{id}', 'groupController@show');

Route::get('/group/create', 'groupController@create');

Route::post('/group/store', 'groupController@store');

Route::get('/group/delete/{id}', 'groupController@destroy');

Route::get('/group/edit/{id}', 'groupController@edit');

Route::put('/group/update/{id}', 'groupController@update');


Route::post('/tasks/store/', 'tasksController@store');

Route::get('/tasks/edit/{id}', 'tasksController@edit');

Route::put('/tasks/update/{id}', 'tasksController@update');

Route::get('/tasks/delete/{id}', 'tasksController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
