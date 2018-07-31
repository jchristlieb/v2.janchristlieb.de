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
Route::get('/projects/create', 'ProjectController@create')->name('admin.projects.create');
Route::post('/projects', 'ProjectController@store')->name('admin.projects.store');
Route::get('/projects', 'ProjectController@index')->name('admin.projects.index');
Route::get('/projects/{slug}/edit', 'ProjectController@edit')->name('admin.projects.edit');
Route::patch('/projects/{id}', 'ProjectController@update')->name('admin.projects.update');
Route::delete('/projects/{id}', 'ProjectController@destroy')->name('admin.projects.destroy');
Route::delete('/projects/{projectId}/tags/{tagId}', 'ProjectController@deletetag')->name('admin.projects.tags.destroy');

// Media
Route::post('/media/{slug}/create', 'ProjectMediaController@create')->name('admin.projects.media.create');
Route::delete('/projects/{projectId}/media/{mediaId}', 'ProjectMediaController@destroy')->name('admin.projects.media.destroy');


// Tags
Route::get('/tags', 'TagController@index')->name('admin.tags.index');
Route::get('/tags/create', 'TagController@create')->name('admin.tags.create');
Route::post('/tags', 'TagController@store')->name('admin.tags.store');
Route::get('/tags/{id}/edit', 'TagController@edit')->name('admin.tags.edit');
Route::patch('/tags/{id}', 'TagController@update')->name('admin.tags.update');
Route::delete('/tags/{id}', 'TagController@destroy')->name('admin.tags.destroy');