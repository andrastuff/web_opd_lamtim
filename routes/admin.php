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
Route::get('admin', 'Admin\Dashboard@index'); 

/* Route Admin */
Route::prefix('admin/artikel')->group(function(){
	Route::get('/', 'Admin\Artikel@index'); /* */
	Route::get('/add/', 'Admin\Artikel@add');
	Route::get('/view/{id}', 'Admin\Artikel@view');
	Route::get('/update/{id}', 'Admin\Artikel@update');
});
/* end route Admin */

/* Route Kategori */
Route::prefix('admin/kategori')->group(function(){
	Route::get('/', 'Admin\Kategori@index');
	Route::get('/add/', 'Admin\Kategori@add');
	Route::get('/view/{id}', 'Admin\Kategori@view');
	Route::get('/update/{id}', 'Admin\Kategori@update'); 
});
//akses method update pada controller kategori

/* end route kategori */

/* Route Tags */
Route::prefix('admin/tags')->group(function(){
	Route::get('/', 'Admin\Tags@index');
	Route::get('/add/', 'Admin\Tags@add');
	Route::get('/view/{id}', 'Admin\Tags@view');
	Route::get('/update/{id}', 'Admin\Tags@update'); 
});
/* End route tag */

/* Route Pages*/
Route::prefix('admin/pages')->group(function(){
	Route::get('/', 'Admin\Pages@index');
	Route::get('/add/', 'Admin\Pages@add');
	Route::get('/update/{id}', 'Admin\Pages@update'); 
});
/* End route pages */

/* Route Bannerads */
Route::prefix('admin/bannerAds')->group(function(){
	Route::get('/', 'Admin\Banner@index');
	Route::get('/add/', 'Admin\Banner@add');
	Route::get('/view/{id}', 'Admin\Banner@view');
	Route::get('/update/{id}', 'Admin\Banner@update');
});
/* End route bannerAds */

/* Route Headlines */
Route::prefix('/admin/headline')->group(function(){
	Route::get('/', 'Admin\Headline@index');
});
/* End Route Headlines */

/* Route Headermenu */
Route::prefix('/admin/headerMenu')->group(function(){
	Route::get('/', 'Admin\HeaderMenu@index');
	Route::get('/add', 'Admin\HeaderMenu@add');
	Route::get('/update/{id}', 'Admin\HeaderMenu@update');
});
/* End Route Headermenu */

Route::prefix('/admin/upload')->group(function(){
	Route::get('/', 'Admin\Upload@index');
	Route::get('/add', 'Admin\Upload@add');
	Route::get('/update/{id}', 'Admin\Upload@update');
});


Route::get('/admin/setting', 'Admin\Setting@index');

Route::get('/admin/styling', 'Admin\Styling@index');

Route::prefix('/admin/user')->group(function(){
	Route::get('/', 'Admin\Users@index');
	Route::get('/add', 'Admin\Users@add');
	Route::get('/view/{id}', 'Admin\Users@view');
	Route::get('/profile/', 'Admin\Users@profile');
});

Route::get('/admin/media', 'Admin\Media@index');
