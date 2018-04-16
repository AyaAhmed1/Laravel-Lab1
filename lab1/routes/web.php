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
Route::get('posts','PostsController@index')->name('posts.index')->middleware('auth'); 
//Route::get('posts','PostsController@index')->middleware('auth'); 
Route::get('posts/create','PostsController@create')->middleware('auth');
Route::post('posts','PostsController@store')->middleware('auth');
Route::get('posts/{id}/edit','PostsController@edit')->middleware('auth');
Route::patch('posts/{id}','PostsController@update')->middleware('auth');
Route::get('posts/{id}','PostsController@show')->middleware('auth');
Route::delete('posts/{id}','PostsController@destroy')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
