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
Route::get('/create', function () {
    return view('create');
});
Route::get('/music', function () {
    return view('music');
});
Route::get('/it', function () {
    return view('it');
});
Route::get('/mentee', function () {
    return view('mentee');
});
Route::get('/nina', function () {
    return view('nina');
});
Route::get('/class', function () {
    return view('class');
});

Auth::routes();
route::resource('employees','EmployeeController');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('video','VideoController');
Route::resource('notes', 'NotesController');

Route::resource('mentee','MenteeController');
Route::get('/chats',function()
{
	return view('chats');
});