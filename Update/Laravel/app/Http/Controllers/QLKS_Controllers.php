<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Session;

class QLKS_Controllers extends Controller
{
	//quan ly khach san
    public function dieuhuong($id)
    {
        if(Auth::check())
        {
            switch ($id) 
            {
                case 'room':
                    return view('pages.room');//quan ly phong
                    break;
                case 'staff':
                    return view('pages.staff');//quan ly nhan vien
                    break;
                case 'statistical':
                    return view('pages.statistical');//thong ke 
                    break;
                case 'index':
                    return view('pages.index');
                    break;
                default:
                    return view('pages.404');//trang chu
                    break;
            }
        }
        else 
            return view('pages.dangnhap');

    	
    }
    
    public function getLogin()
    {
        return view('pages.dangnhap');
    }

    public function postLogin(Request $request)
    {
        $user = $request['email'];
        $pass = $request['pass'];
        if(Auth::attempt(['email'=>$user,'password'=>$pass]))
        {
            return view('pages.index');
        }
        else
        {
            return view('pages.dangnhap',[
                'error'=>
                '<div class="alert alert-danger" role="alert">
                    Login failed! Please ensure the username and password are valid.
                </div>'
            ]);
        }
    }

}
