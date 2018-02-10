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
    			return view('pages.room');//quan ly phong
    			break;
    		case 'staff':
    			return view('pages.staff');//quan ly nhan vien
    			break;
    		case 'statistical':
    			return view('pages.statistical');//thong ke 
    			break;
    		default:
    			return view('layout.main');//trang chu
    			break;
    	}
    }

}
