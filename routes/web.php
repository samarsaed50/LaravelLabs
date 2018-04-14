<?php
use Illuminate\Http\Request;
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
Route::get('posts','Postscontroller@index')->name('posts.index');
Route::get('posts/show/{id}', 'Postscontroller@show')->name('posts.show');
Route::get('posts/create','Postscontroller@create')->name('posts.create');
Route::post('posts','Postscontroller@store')->name('posts.store');
Route::get('/posts/edit/{id}', 'Postscontroller@edit')->name('posts.edit');
Route::post('/posts/update/{id}', 'Postscontroller@update')->name('posts.update');
Route::get('/posts/delete/{id}', 'Postscontroller@destroy')->name('posts.delete');