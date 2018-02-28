<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    public function getLoginAdmin()
    {
    	return view('admin.login.dangnhap');
    }

    public function postLoginAdmin(Request $request)
    {
    	$user = $request['email'];
        $pass = $request['pass'];
        if(Auth::attempt(['email'=>$user,'password'=>$pass]))
        {
            return redirect('admin/home/index');
        }
        else
        {
            return view('admin.login.dangnhap',[
                'error'=>
                '<div class="alert alert-danger" role="alert">
                    Login failed! Please ensure the username and password are valid.
                </div>'
            ]);
        }
    }

    public function getLogoutAdmin()
    {
    	Auth::logout();
    	return redirect('admin/login');
    }
}
