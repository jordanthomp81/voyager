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
  return view('auth/login');
});

// Settingsode does the error occur on? What is on that line o
Route::get('/settings', ['as' => 'settings', function () {
    return view('settings/settings');
}])->middleware('auth');

// Projects
Route::resource('/projects', 'ProjectsController');

// Tasks
Route::resource('/tasks', 'TasksController');

// Messages
Route::get('/messages', ['as' => 'messages', function () {
    return view('messages/messages');
}])->middleware('auth');

Route::get('/messages/{messageId}', function ($messageId) {
    return view('messages/messages');
})->middleware('auth');

// Media
Route::get('/media', ['as' => 'media', function () {
    return view('media/media');
}])->middleware('auth');

Route::get('/media/{mediaId}', function ($mediaId) {
    return view('media/individual-media-item');
})->middleware('auth');

// Team
Route::get('/team', ['as' => 'team', function () {
    return view('team/team');
}])->middleware('auth');

// Auth
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
