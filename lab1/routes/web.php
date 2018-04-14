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
   return 'hello posts';
});
Route::get('posts','PostsController@index')->name('posts.index');
Route::get('posts','PostsController@index'); 
Route::get('posts/create','PostsController@create');
Route::post('posts','PostsController@store');
Route::get('posts/{id}/edit','PostsController@edit');
Route::patch('posts/{id}','PostsController@update');
Route::get('posts/{id}','PostsController@show');
Route::get('posts/{id}/delete','PostsController@delete');