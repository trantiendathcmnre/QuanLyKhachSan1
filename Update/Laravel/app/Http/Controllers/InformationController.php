<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\DichVu;
use App\ThongTinKhachSan;

class InformationController extends Controller
{
   
	public function getInfor()
    {
        //danh sach dich vu
        $dichvu = DichVu::all();
        //thong tin khach san 
        $thongtinkhachsan = ThongTinKhachSan::all();
        return view('admin.information.infor',[
                        'dichvu'=>$dichvu,
                        'thongtinkhachsan'=>$thongtinkhachsan
                    ]);
    }

}
