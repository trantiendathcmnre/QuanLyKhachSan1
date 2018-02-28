<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Session;
use App\Phong;
use App\KhachHang;

class HomeController extends Controller
{
    function __construct()
    {
        if(Auth::check())
        {
            view()->share('admin_login',Auth::user());
        }
    }
    public function getIndex()
    {
        //lay danh sach phong
        $phong = Phong::all();
        //lay danh sach khach hang
        $khachhang = KhachHang::paginate(10);
        //dem so luong phong trong
        $trong = Phong::where('trangthaiPHG','trống')->count();
        //dem so luong phong da dat
        $dadat = Phong::where('trangthaiPHG','đã đặt')->count();
        //dem so luong phong co khach dang o
        $dango = Phong::where('trangthaiPHG','đang ở')->count();
        return view('admin.home.index',[
                        'phong'=>$phong,
                        'trong'=>$trong,
                        'dadat'=>$dadat,
                        'dango'=>$dango,
                        'khachhang'=>$khachhang

                    ]);
    }
}
