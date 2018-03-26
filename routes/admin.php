<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" and "auth" middleware groups. The Controller namespace
| is App\Http\Controllers\Admin
|
*/

// Dashboard
Route::get('/', 'DashboardController')->name('admin.dashboard');

// Projects
Route::get('/projects/create', 'ProjectController@create');
Route::post('/projects', 'ProjectController@store');
Route::get('/projects', 'ProjectController@index');
Route::get('/projects/{slug}/edit', 'ProjectController@edit');
Route::patch('/projects/{id}', 'ProjectController@update');
Route::delete('/projects/{id}', 'ProjectController@destroy');