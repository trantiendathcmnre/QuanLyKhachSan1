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
    return view('welcome');
});

Route::get('test/{ten}','MyController@dk');
//trang chu quan ly khach san 307
Route::get('QLKS/{id}','QLKS_Controllers@dieuhuong');
//dang nhap
Route::get('QLKS/login','QLKS_Controllers@getLogin');

Route::post('QLKS/index', [ 'as' => 'postLogin', 'uses' => 'QLKS_Controllers@postLogin']);