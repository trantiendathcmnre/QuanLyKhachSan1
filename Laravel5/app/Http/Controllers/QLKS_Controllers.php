<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QLKS_Controllers extends Controller
{
    public function dieuhuong($id){
    	if($id == "index")
    	{
    		return view('layout.index');
    	}
    }
}
