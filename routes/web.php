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

Route::view('/', 'home');
Route::view('/home', 'home');
Route::view('/about',  'about');
Route::view('/registration',  'registration');
Route::view('/login',  'login', ['message'=>''])->name('login');
Route::view('/books',  'books');
Route::view('/project',  'project');

Route::prefix('user')->group(function(){
	Route::post('create', 'UserController@store');
	Route::post('login', 'UserController@login');
	Route::get('logout', 'UserController@logout');
});

Route::prefix('forum')->group(function(){
//	Route::view('/', 'project')->middleware('islog');
	Route::get('/','TopicController@index')->middleware('islog');
	Route::post('/create', 'TopicController@store');
	Route::view('/activity', 'activity');
});