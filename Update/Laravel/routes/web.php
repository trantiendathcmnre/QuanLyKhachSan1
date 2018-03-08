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

        Route::get('search/{tukhoa}', 'HomeController@getSearch');

        Route::get('addcustomer','HomeController@getCustomer');

        Route::post('addcustomer','HomeController@addCustomer');

        Route::get('editcustomer/{id}','HomeController@getSua');

        Route::post('editcustomer/{id}','HomeController@postSua');

        Route::get('pagination', 'HomeController@getPaginate');

        Route::any('deletecustomer','HomeController@deleteCustomer');

        Route::get('book/{id}','HomeController@getBook');

        Route::post('book/{id}','HomeController@postBook');

        Route::get('gia/{idloaiphong}/{khunggio}','HomeController@giaBook');

        Route::get('khachhang/{cmnd}','HomeController@khachhangBook');

    });

    Route::group(['prefix' => 'floor'], function() {

        Route::get('room','FloorController@getRoom');

        Route::post('addfloor','FloorController@addFloor');

        Route::get('editfloor/{id}','FloorController@editgetFloor');

        Route::post('editfloor/{id}','FloorController@editpostFloor');

        Route::any('deletefloor/{id}','FloorController@deleteFloor');

        Route::post('addfloorstyle', 'FloorController@addFloorStyle');

        Route::get('editfloorstyle/{id}','FloorController@getFloorStyle');

        Route::post('editfloorstyle/{id}','FloorController@postFloorStyle');

        Route::any('deletefloorstyle/{id}','FloorController@deleteFloorStyle');

        Route::get('pagination', 'FloorController@getPaginate');

        Route::post('addroom','FloorController@addRoom');

        Route::get('editroom/{id}','FloorController@getSua');

        Route::post('editroom/{id}','FloorController@postSua');

        Route::any('deleteroom','FloorController@deleteRoom');


    });

    Route::group(['prefix' => 'employee'], function() {

        Route::get('staff','EmployeeController@getStaff');

        Route::post('addgroup', 'EmployeeController@addGroup')->name('addgroup');

        Route::get('pagination', 'EmployeeController@getPaginate');

        Route::any('adddepartment','EmployeeController@addDepartment');

        Route::any('deletedepartment/{id}','EmployeeController@deleteDepartment');

        Route::get('editdepartment/{id}','EmployeeController@getDepartment');

        Route::post('editdepartment/{id}','EmployeeController@postDepartment');
        
        Route::any('addstaff','EmployeeController@addStaff');

        Route::any('deletestaff/{id}','EmployeeController@deleteStaff');

        Route::get('editstaff/{id}','EmployeeController@editStaff');

        Route::post('editstaff/{id}','EmployeeController@editpostStaff');

        

        

    });

    Route::group(['prefix' => 'order'], function() {

        Route::get('statistical', 'OrderController@getStatistical');

        Route::get('export', 'OrderController@getExport');

        Route::post('import', 'OrderController@postImport')->name('import');

        
    });

    Route::group(['prefix' => 'information'], function() {

        Route::get('infor', 'InformationController@getInfor');

        Route::get('pagination', 'InformationController@getPaginate');

        Route::get('addservice','InformationController@addgetService');

        Route::post('addservice','InformationController@addpostService');

        Route::any('deleteservice/{id}','InformationController@deleteService');

        Route::get('editservice/{id}','InformationController@getService');

        Route::post('editservice/{id}','InformationController@postService');
    });

    Route::group(['prefix' => 'error'], function() {

        Route::get('404', 'ErrorController@getError');
    });
});