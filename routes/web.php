<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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


Route::view('/login', 'login')->name('login');

Route::controller(AuthController::class)->group(function () {
	Route::post('/login', 'login')->name('auth.login');
	Route::get('/logout', 'logout')->name('auth.logout');
});

Route::group(['middleware' => 'auth'], function () {

	Route::view('/user/create', 'join')->name('users.create');
	Route::controller(UserController::class)->group(function () {
		Route::get('/', 'index')->name('users.home');
		Route::post('/user', 'store')->name('users.store');
		Route::delete('/user/{id}', 'destroy')->name('users.destroy');
	});

	Route::view('/project/create', 'project-form')->name('projects.create');
	Route::controller(ProjectController::class)->group(function () {
		Route::get('/projects', 'index')->name('projects.index');
		Route::post('/project', 'store')->name('projects.store');
		Route::delete('/project/{id}', 'destroy')->name('projects.destroy');
		Route::get('/board/{id}', 'board')->name('projects.board');
		Route::post('/board/{id}/reorder', 'saveTasksOrder');
	});

	Route::view('/task/create', 'project-form')->name('tasks.create');
	Route::controller(TaskController::class)->group(function () {
		Route::get('/tasks', 'index')->name('tasks.index');
		Route::post('/task', 'store')->name('tasks.store');
		Route::get('/task/{id}', 'show')->name('tasks.show');
		Route::get('/task/{id}/edit', 'edit')->name('tasks.edit');
		Route::patch('/task/{id}', 'update')->name('tasks.update');
		Route::delete('/board/{id}', 'destroy')->name('tasks.destroy');
	});
});

Route::get('/{any}', function () {
	return redirect()->route('users.home');
})->where('any', '.*');
