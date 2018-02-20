<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\BoPhan;
use App\NhanVien;
use App\MucLuong;

class EmployeeController extends Controller
{
   
	public function getStaff()
    {
        //lay danh sach bo phan
        $bophan = BoPhan::all();
        //lay danh sach nhan vien
        $nhanvien = NhanVien::all();
        //lay danh sach muc luong nhan vien
        $luong = MucLuong::all();
        return view('admin.employee.staff',[
                        'bophan'=>$bophan,
                        'nhanvien'=>$nhanvien,
                        'luong'=>$luong

                    ]);//quan ly nhan vien
    }
}
