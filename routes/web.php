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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/blog', 'BlogController@index');
Route::get('create_blog', 'BlogController@create');

Route::post('add_blog', 'BlogController@add');
Route::get('delete_blog/{id}', 'BlogController@delete');
Route::get('update_blog/{id}', 'BlogController@getUpdate');
Route::post('update_blog', 'BlogController@update');

Route::post('add_intern', 'InternController@add');
Route::get('delete_intern/{id}', 'InternController@delete');
Route::get('update_intern/{id}', 'InternController@getUpdate');
Route::post('update_intern', 'InternController@update');

Route::get('/intern', 'InternController@index');
Route::get('create_intern', 'InternController@create');