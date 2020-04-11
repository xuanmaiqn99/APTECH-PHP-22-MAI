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
    return redirect()->route('posts.index');
});
Route::resource('/posts', 'PostController');
// Route::resource('posts', 'PostController', ['except' => [
//     'show', 'edit'
// ]]);
// Route::get('/posts/{slug}', 'PostController@show')->name('posts.show');
// Route::get('/posts/{slug}/edit','PostController@edit')->name('posts.edit');
