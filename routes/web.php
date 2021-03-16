<?php

use App\Http\Controllers\PenulisController;
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


Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

// Route::get('/book', 'BookController@index');
// Route::get('/book/create', 'BookController@create');
// Route::get('/book/{p}', 'BookController@show');
// Route::post('/book', 'BookController@store');
// Route::delete('/book/{p}', 'BookController@destroy');
// Route::get('/book/{p}/edit', 'BookController@edit');
// Route::patch('/book/{p}', 'BookController@update');
Route::resource('book', 'BookController');



// Route::get('/penulis', 'PenulisController@index');
// Route::get('/penulis/create', 'PenulisController@create');
// Route::get('/penulis/{p}', 'PenulisController@show');
// Route::post('/penulis', 'PenulisController@store');
// Route::delete('/penulis/{p}', 'PenulisController@destroy');
// Route::get('/penulis/{p}/edit', 'PenulisController@edit');
// Route::patch('/penulis/{p}', 'PenulisController@update');
Route::resource('penulis', 'PenulisController');

Route::get('register', 'Auth\RegisterController@register')->name('register');
Route::post('register', 'Auth\RegisterController@store');

Route::get('login', 'Auth\LoginController@login')->name('login');
Route::post('login', 'Auth\LoginController@auth');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

//Route::middleware('auth');
Route::get('home', 'Auth\LoginController@home')->name('home');

//Route::post(); mengirim data
//Route::put(); meng-edit data
//Route::patch(); meng-edit data sifat sebagian
//Route::delete(); menghapus data;


