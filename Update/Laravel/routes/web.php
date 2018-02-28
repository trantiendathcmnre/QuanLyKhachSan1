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

//xuất excel
Route::get('QLKS/statistical/doanhthu/export', 'QLKS_Controllers@contactExport')->name('contact.export');

Route::post('QLKS/statistical/doanhthu/import', 'QLKS_Controllers@contactImport')->name('contact.import');

Route::get('admin/login','UserController@getLoginAdmin');

Route::post('admin/login','UserController@postLoginAdmin');

Route::get('admin/logout','UserController@getLogoutAdmin');

Route::group(['prefix' => 'admin','middleware' => 'adminLogin'], function() {
    Route::group(['prefix' => 'home'], function() {
        Route::get('index','HomeController@getIndex');
        Route::post('search', 'HomeController@getSearch');
    });

    Route::group(['prefix' => 'floor'], function() {
        Route::get('room','FloorController@getRoom');
        Route::post('addfloor','FloorController@addFloor')->name('addfloor');
        Route::get('updatefloor/{matang}','FloorController@updateFloor');
        Route::get('deletefloor/{matang}','FloorController@deleteFloor');
        Route::post('addfloorstyle', 'FloorController@addFloorStyle')->name('addfloorstyle');
    });

    Route::group(['prefix' => 'employee'], function() {
        Route::get('staff','EmployeeController@getStaff');
        Route::post('addgroup', 'EmployeeController@addGroup')->name('addgroup');
    });

    Route::group(['prefix' => 'order'], function() {
        Route::get('statistical', 'OrderController@getStatistical');
        Route::get('export', 'OrderController@getExport');
        Route::post('import', 'OrderController@postImport')->name('import');
    });

    Route::group(['prefix' => 'information'], function() {
        Route::get('infor', 'InformationController@getInfor');
    });

    Route::group(['prefix' => 'error'], function() {
        Route::get('404', 'ErrorController@getError');
    });
});