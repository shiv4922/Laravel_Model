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

Route::get('in2','ExController@in2');

Route::get('in','teacherController@in');
Route::get('in1','teacherController@in1');

Route::get('out','teacherController@out');
Route::get('update','teacherController@update');

Route::get('delete','teacherController@delete');

Route::get('input','runController@input');
Route::get('output','runController@output');

Route::get('form','ValidationController@myform');
Route::post('submitform','ValidationController@submit');

Route::get('post/create','PostController@create');
Route::post('/posts', 'PostController@save');


Route::get('/index','PostController@index');

Route::get('/posts/{id}/edit','PostController@edit');

Route::post('/posts/update/', 'PostController@update');

Route::get('/posts/{id}/delete', 'PostController@delete');

Route::get('insert','PhoneController@insert');
Route::post('/phone','PhoneController@save');

Route::get('/index','PhoneController@index');
Route::get('/phone/{id}/edit','PhoneController@edit');
Route::post('/phone/update', 'PhoneController@update');
Route::get('/phone/{id}/delete', 'PhoneController@delete');


