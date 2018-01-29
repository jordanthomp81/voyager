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

Route::get('/dashboard', ['as' => 'dashboard', function () {
    return view('dashboard/');
}])->middleware('auth');

Route::get('/dashboard-image', ['as' => 'dashboard-image', function () {
    return view('dashboard/dashboard-image');
}])->middleware('auth');

Route::get('/settings', ['as' => 'settings', function () {
    return view('settings/settings');
}])->middleware('auth');

Route::get('/projects', ['as' => 'projects', 'uses' => 'ProjectsController@index'])->middleware('auth');

// Route::get('/projects', ['as' => 'projects', function () {
//     return view('projects/projects');
// }])->middleware('auth');

Route::get('/projects/{projectId}', function ($projectId) {
  return view('projects/individual-project');
})->middleware('auth');

Route::get('/tasks', ['as' => 'tasks', function () {
    return view('tasks/tasks');
}])->middleware('auth');

Route::get('/tasks/{taskId}', function ($taskId) {
    return view('tasks/individual-task');
})->middleware('auth');

Route::get('/messages', ['as' => 'messages', function () {
    return view('messages/messages');
}])->middleware('auth');

Route::get('/messages/{messageId}', function ($messageId) {
    return view('messages/messages');
})->middleware('auth');

Route::get('/media', ['as' => 'media', function () {
    return view('media/media');
}])->middleware('auth');

Route::get('/media/{mediaId}', function ($mediaId) {
    return view('media/individual-media-item');
})->middleware('auth');

Route::get('/team', ['as' => 'team', function () {
    return view('team/team');
}])->middleware('auth');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
