<?php
use app\Post;
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

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/post','PostController@store');
Route::post('/toggle-like','PostController@like');
Route::post('/toggle-dislike','PostController@dislike');

Route::get('/dash',function(){
	$post=Post::orderBy('likes','desc')->get();
    return view('dashboard')->with('likes',$post);
});
