<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QLKS_Controllers extends Controller
{
    public function dieuhuong($id){
    	// if($id == "index")
    	// {
    	// 	return view('layout.index');
    	// }
    	switch ($id) {
    		case 'room':
    			return view('layout.room');
    			break;
    		case 'staff':
    			return view('layout.staff');
    			break;
    		case 'statistical':
    			return view('layout.statistical');
    			break;
    		default:
    			return view('layout.index');
    			break;
    	}
    }
}
