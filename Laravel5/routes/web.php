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

Route::get('KhoaHoc',function (){
	return "Chào các bạn";
});

Route::get('KhoaHoc/Laravel', function() {
    return "<h1>Khoa học Laravel</h1>";
});

//Truyền tham số
Route::get('HoTen/{ten}', function($ten) {
    echo "Ho va ten la: ".$ten;
});

Route::get('Laravel/{ngay}', function($ngay) {
    echo "Khoa pham".$ngay;
})->where(['ngay'=>'[a-zA-Z]+']);
//Định danh
Route::get('Route1',['as'=>'MyRoute', function() {
    echo "XIn chao cac ban";
}]);

Route::get('Route2', function() {
   	return redirect()->route('MyRoute');
});

//goi controller
Route::get('GoiCtrl','MyController@Xinchao');

Route::get('Test', function() {
    return redirect()->route('MyRoute');
});

Route::get('Thamso/{ten}','MyController@KhoaHoc');

Route::group(['prefix'=>'MyGroup'],function(){
	Route::get('User1', function() {
	    return "User1";
	});
	Route::get('User2', function() {
	    return "User2";
	});
	Route::get('User3', function() {
	    return "User3";
	});
});

Route::get('MyRequest','MyController@GetURL');

Route::get('Form', function() {
    return view('postForm');
});

Route::get('index',function(){
	return view('index');
});
/*Route::post('dat',['as' => 'dat','uses' => 'MyController@Form']);*/
Route::get('getfile',function(){
	return view('getfile');
});
Route::post('postfile',['as'=> 'postfile','uses'=>'MyController@post']);

Route::get('QL',function(){
	return view('qlks');
});
Route::get('setCookie','MyController@setCookie');
Route::get('getCookie','MyController@getCookie');
Route::get('upFile', function() {
    return view('postForm');
});

Route::get('blade',function(){
	return view('pages.laravel');
});

Route::get('test/{ten}','MyController@dk');

Route::get('QLKS/{id}','QLKS_Controllers@dieuhuong');
