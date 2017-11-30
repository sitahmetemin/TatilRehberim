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
//----------------------------------------------------------------Theme
Route::get('/', 'ThemeHomeController@view');
Route::get('/oteller', 'ThemeOtellerController@view');
Route::get('/tatil-yeri', 'ThemeMekanController@view');



//----------------------------------------------------------------Admin
//------------------------------------------------admin view list
Route::get('/admin', 'AdminHomeController@view');
Route::get('/admin/oteller', 'AdminOtellerController@listView');
Route::get('/admin/mekanlar', 'AdminMekanlarController@listView');
Route::get('/admin/yemekler', 'AdminYemeklerController@listView');
Route::get('/admin/ayarlar', 'AdminAyarlarController@listView');

//-----------------------------------------------admin view create
Route::get('/admin/oteller/ekle', 'AdminOtellerController@createView');
Route::get('/admin/mekanlar/ekle', 'AdminMekanlarController@createView');
Route::get('/admin/yemekler/ekle', 'AdminYemeklerController@createView');
Route::get('/admin/ayarlar/ekle', 'AdminAyarlarController@createView');

//----------------------------------------------admin view update
Route::get('/admin/oteller/guncelle/{id}', 'AdminOtellerController@updateView');
Route::get('/admin/mekanlar/guncelle/{id}', 'AdminMekanlarController@updateView');
Route::get('/admin/yemekler/guncelle/{id}', 'AdminYemeklerController@updateView');
Route::get('/admin/ayarlar/guncelle/{id}', 'AdminAyarlarController@updateView');

//-----------------------------------------------admin create
Route::post('/admin/oteller/ekle', 'AdminOtellerController@create');
Route::post('/admin/mekanlar/ekle', 'AdminMekanlarController@create');
Route::post('/admin/yemekler/ekle', 'AdminYemeklerController@create');
Route::post('/admin/ayarlar/ekle', 'AdminAyarlarController@create');

//----------------------------------------------admin update
Route::post('/admin/oteller/guncelle/{id}', 'AdminOtellerController@update');
Route::post('/admin/mekanlar/guncelle/{id}', 'AdminMekanlarController@update');
Route::post('/admin/yemekler/guncelle/{id}', 'AdminYemeklerController@update');
Route::post('/admin/ayarlar/guncelle/{id}', 'AdminAyarlarController@update');

//----------------------------------------------admin delete
Route::get('/admin/oteller/sil/{id}', 'AdminOtellerController@delete');
Route::get('/admin/mekanlar/sil/{id}', 'AdminMekanlarController@delete');
Route::get('/admin/yemekler/sil/{id}', 'AdminYemeklerController@delete');
Route::get('/admin/ayarlar/sil/{id}', 'AdminAyarlarController@delete');