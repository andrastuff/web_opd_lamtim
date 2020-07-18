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



Route::get('/', 'Frontend\Home@index');
Route::get('/contact', 'Frontend\Contact@index');
Route::get('/news', 'Frontend\News@index');
Route::get('/news/read/{id}/{slug}', 'Frontend\News@read');
Route::get('/news/kategori/{id}', 'Frontend\News@kategori');
Route::get('/news/tag/{id}', 'Frontend\News@tag');
Route::get('/informasi/{id}', 'Frontend\Informasi@page');
Route::get('/mod/{slug}', 'Frontend\Informasi@mod');
Route::get('/informasi/publikasi/{id}', 'Frontend\Informasi@ViewPublikasi');
Route::get('/gallery/', 'Frontend\Gallery@index');

Route::get('/root', 'Frontend\Root@index');

Route::get('/logout', function () {
	//$request->cookie('access_tokenku', null);
	 
	 setcookie("access_tokenku", null);
	 
	 return redirect(url('/'));
});
