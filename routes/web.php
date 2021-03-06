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

// ブログ一覧画面を表示
Route::get('/',
'BlogController@showList')->name
('blogs');

Route::get('blog/create',
'BlogController@showCreate')->name
('create');

Route::get('/blog/edit/{id}',
'BlogController@showEdit')->name
('edit');

Route::get('blog/{id}',
'BlogController@showDetail')->name
('show');

Route::post('blog/store',
'BlogController@exeStore')->name
('store');

Route::post('/blog/delete/{id}',
'BlogController@exeDelete')->name
('delete');

Route::post('/blog/update',
'BlogController@exeUpdate')->name
('update');

