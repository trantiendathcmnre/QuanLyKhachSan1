<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Excel;
use App\Http\Requests;
use Session;
use App\Phong;
use App\KhachHang;
use App\Tang;
use App\LoaiPhong;
use App\GiaPhong;
use App\BoPhan;
use App\NhanVien;
use App\MucLuong;
use App\ChiTietHoaDon;
use App\ThuePhong;
use App\DichVu;
use App\ThongTinKhachSan;
class QLKS_Controllers extends Controller
{
    public function contactExport()
    {
        $contact = NhanVien::select('hotenNV','emailNV')->get();
        return Excel::create('doanhthu', function($excel) use ($contact){
            $excel->sheet('mysheet', function($sheet) use ($contact){
                $sheet->fromArray($contact);
            });
        })->download('xls');
    }

    public function contactImport(Request $request)
    {
        if($request->hasFile('file'))
        {
            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path, function($reader){})->get();
            if(!empty($data) && $data->count())
            {
                foreach ($data as $key => $value)
                {
                    $tang = new Tang();
                    $tang->maT = $value->ma;
                    $tang->tenT = $value->ten;
                    $contact->save();
                }
            }
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

    public function getStatistical()
    {
        //danh sach hoa don
        $hoadon = ChiTietHoaDon::all();
        return view('admin.order.statistical',[
                        'hoadon'=>$hoadon
                    ]);//thong ke
    }

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




	// //quan ly khach san
 //    public function dieuhuong($id)
 //    {
 //        if(Auth::check())
 //        {
 //            //lay danh sach phong
 //            $phong = Phong::all();
 //            //phan trang danh sach phong
 //            $phanphong = Phong::paginate(10);
 //            //lay danh sach khach hang
 //            $khachhang = KhachHang::paginate(10);
 //            //dem so luong phong trong
 //            $trong = Phong::where('trangthaiPHG','trống')->count();
 //            //dem so luong phong da dat
 //            $dadat = Phong::where('trangthaiPHG','đã đặt')->count();
 //            //dem so luong phong co khach dang o
 //            $dango = Phong::where('trangthaiPHG','đang ở')->count();
 //            //lay danh sach loai phong
 //            $loaiphong = LoaiPhong::all();
 //            //lay danh sach tang lau 
 //            $tang = Tang::all();
 //            //lay danh sach gia phong
 //            $giaphong = GiaPhong::all();
 //            //lay danh sach bo phan
 //            $bophan = BoPhan::all();
 //            //lay danh sach nhan vien
 //            $nhanvien = NhanVien::all();
 //            //lay danh sach muc luong nhan vien
 //            $luong = MucLuong::all();
 //            //danh sach hoa don
 //            $hoadon = ChiTietHoaDon::all();
 //            //danh sach dich vu
 //            $dichvu = DichVu::all();
 //            //thong tin khach san 
 //            $thongtinkhachsan = ThongTinKhachSan::all();
 //            switch ($id) 
 //            {
 //                case 'room':
 //                    return view('pages.room',[
 //                        'tang'=>$tang,
 //                        'loaiphong'=>$loaiphong,
 //                        'phong'=>$phong,
 //                        'giaphong'=>$giaphong,
 //                        'phanphong'=>$phanphong


 //                    ]);//quan ly phong
 //                    break;
 //                case 'staff':
 //                    return view('pages.staff',[
 //                        'bophan'=>$bophan,
 //                        'nhanvien'=>$nhanvien,
 //                        'luong'=>$luong

 //                    ]);//quan ly nhan vien
 //                    break;
 //                case 'statistical':
 //                    return view('pages.statistical',[
 //                        'hoadon'=>$hoadon


 //                    ]);//thong ke 
 //                    break;
 //                case 'index':
 //                    return view('pages.index',[
 //                        'phong'=>$phong,
 //                        'trong'=>$trong,
 //                        'dadat'=>$dadat,
 //                        'dango'=>$dango,
 //                        'khachhang'=>$khachhang

 //                    ]);
 //                    break;
 //                case 'infor':
 //                    return view('pages.infor',[
 //                        'dichvu'=>$dichvu,
 //                        'thongtinkhachsan'=>$thongtinkhachsan
 //                    ]);
 //                    break;
 //                default:
 //                    return view('pages.404');//trang chu
 //                    break;
 //            }
 //        }
 //        else 
 //            return view('pages.dangnhap');

    	
 //    }
    
 //    public function getLogin()
 //    {
 //        return view('pages.dangnhap');
 //    }

 //    public function postLogin(Request $request)
 //    {
 //        $user = $request['email'];
 //        $pass = $request['pass'];
 //        //lay danh sach phong
 //        $phong = Phong::all();
 //        //lay danh sach khach hang
 //        $khachhang = KhachHang::paginate(10);
 //        //dem so luong phong trong
 //        $trong = Phong::where('trangthaiPHG','trống')->count();
 //        //dem so luong phong da dat
 //        $dadat = Phong::where('trangthaiPHG','đã đặt')->count();
 //        //dem so luong phong co khach dang o
 //        $dango = Phong::where('trangthaiPHG','đang ở')->count();
 //        if(Auth::attempt(['email'=>$user,'password'=>$pass]))
 //        {
 //            Session::put('login',true);
 //            Session::put('email',$user);
 //            return view('pages.index',[
 //                'phong'=>$phong,
 //                'trong'=>$trong,
 //                'dadat'=>$dadat,
 //                'dango'=>$dango,
 //                'khachhang'=>$khachhang
 //            ]);
 //        }
 //        else
 //        {
 //            return view('pages.dangnhap',[
 //                'error'=>
 //                '<div class="alert alert-danger" role="alert">
 //                    Login failed! Please ensure the username and password are valid.
 //                </div>'
 //            ]);
 //        }
 //    }

 //    public function getLogout()
 //    {
 //        Auth::logout();
 //        Session::flush();
 //        return view('pages.dangnhap');
 //    }


    
}
