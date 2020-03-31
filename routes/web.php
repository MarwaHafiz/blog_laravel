<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/posts', 'postController@index')->name('posts.index');

Route::get('/posts/create', 'postController@create')->name('posts.create');

Route::post('/posts', 'postController@store')->name('posts.store');

Route::get('/posts/{post}', 'postController@show')->name('posts.show');

Route::get('/posts/{post}/edit', 'postController@edit')->name('posts.edit');

Route::patch('/posts/{post}', 'postController@update')->name('posts.update');

Route::delete('/posts/{post}', 'postController@destroy')->name('posts.destroy');