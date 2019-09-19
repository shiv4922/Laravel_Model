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
Route::get('insert','EmployController@inserts');
Route::get('show','EmployController@shows');
Route::get('update','EmployController@updates');
Route::get('delete','EmployController@deletes');

Route::get('filldata','ProductController@filldata');

Route::get('in','PractiseController@in');
Route::get('up','PractiseController@up');
Route::get('up2','PractiseController@up2');
Route::get('del','PractiseController@del');

