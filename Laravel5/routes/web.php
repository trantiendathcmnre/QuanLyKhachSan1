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
//test blade template
Route::get('test', 'QLKS_Controllers@test');

Route::get('database', function() {
	Schema::create('loaisanpham', function ($table) {
	    $table->increments('id');
	    $table->string('ten',200);
	});

	// Schema::create('theloai', function ($table) {
	//     $table->increments('id');
	//     $table->string('ten',200)->nullable();
	//     $table->string('nsx')->default('Nha san xuat');
	// });
});

Route::get('lienket', function() {
    Schema::create('sanpham', function ($table) {
        $table->increments('id');
        $table->string('ten');
        $table->float('gia');
        $table->integer('soluong')->default(0);
        $table->integer('id_loaisp')->unsigned();
        $table->foreign('id_loaisp')->references('id')->on('loaisanpham');
    });
});