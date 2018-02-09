<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QLKS_Controllers extends Controller
{
	//quan ly khach san
    public function dieuhuong($id)
    {
    	switch ($id) {
    		case 'room':
    			return view('layout.room');//quan ly phong
    			break;
    		case 'staff':
    			return view('layout.staff');//quan ly nhan vien
    			break;
    		case 'statistical':
    			return view('layout.statistical');//thong ke 
    			break;
    		default:
    			return view('layout.index');//trang chu
    			break;
    	}
    }
    public function test()
    {
    	return view('layout.main');
    }
}
