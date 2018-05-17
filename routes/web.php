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

// about
Route::get('/about', function () {
    return view('about');
});

// legal
Route::get('/legal', function() {
   return view ('legal');
});

// project
Route::get('/projects', 'PortfolioController@index');
Route::post('/projects', 'PortfolioController@index');
Route::get('/projects/{slug}', 'PortfolioController@single');

// tags
Route::get('/tags/{slug}', 'TagController@single')->name('tags.single');

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');

