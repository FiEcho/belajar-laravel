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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::resource('blog','BlogController')->only('index');

//Named Routes
Route::get('profile','ProfileController@index')->name('profile');
 
// ROUT ID
// Route::get('/belajar/{id}','BelajarController@coba');
// Route::get('/blog/{id}','BlogController@show');
// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return $postId.' , '.$commentId;
// });
Auth::routes();

Route::get('/home','BelajarController@index')->name('home');