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


// start
Route::get('/', 'IndexController@index');

// project
Route::get('/projects', 'ProjectController@index');
Route::post('/projects', 'ProjectController@index');
Route::get('/projects/{slug}', 'ProjectController@single');
