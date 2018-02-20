<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Phong;
use App\Tang;
use App\LoaiPhong;
use App\GiaPhong;

class FloorController extends Controller
{
    public function getRoom()
    {
        //lay danh sach phong
        $phong = Phong::all();
        //phan trang danh sach phong
        $phanphong = Phong::paginate(10);
        //lay danh sach loai phong
        $loaiphong = LoaiPhong::all();
        //lay danh sach tang lau 
        $tang = Tang::all();
        //lay danh sach gia phong
        $giaphong = GiaPhong::all();
        return view('admin.floor.room',[
                        'tang'=>$tang,
                        'loaiphong'=>$loaiphong,
                        'phong'=>$phong,
                        'giaphong'=>$giaphong,
                        'phanphong'=>$phanphong
                    ]);//quan ly phong
    }

    public function addFloor(Request $request)
    {
        
    }
}
