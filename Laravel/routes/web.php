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
//query builder
Route::get('qb', function() {
    $data = DB::table('giaphong')->avg('giaGP');
    echo $data;
    //var_dump($data);
    // foreach ($data as $row) {
    // 	foreach ($row as $key => $value) {
    // 		echo $key.":".$value."<br>";
    // 	}
    // 	echo "<hr>";
    // }
});

