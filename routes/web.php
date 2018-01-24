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

Route::get('/login', function () {
    return view('login');
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::get('/create-user', function () {
    return view('create-user');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard-new-user', function () {
    return view('dashboard-new-user');
});

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/projects/{projectId}', function ($projectId) {
  return view('projects/individual-project');
});

Route::get('/tasks', function () {
    return view('tasks');
});

Route::get('/tasks/{taskId}', function ($taskId) {
    return view('tasks/individual-task');
});

Route::get('/messages/{messageId}', function ($messageId) {
    return view('messages');
});

Route::get('/media', function () {
    return view('media');
});

Route::get('/media/{mediaId}', function ($mediaId) {
    return view('media/individual-media-item');
});

Route::get('/team', function () {
    return view('team');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
