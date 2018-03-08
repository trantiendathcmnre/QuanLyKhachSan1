<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Session;
use App\Phong;
use App\KhachHang;
use App\KhungGio;
use App\NhanVien;
use App\GiaPhong;
use App\ThuePhong;

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
        $khachhang = KhachHang::paginate(5);
        //dem so luong phong trong
        $trong = Phong::where('trangthaiPHG',0)->count();
        //dem so luong phong da dat
        $dadat = Phong::where('trangthaiPHG',1)->count();
        //dem so luong phong co khach dang o
        $dango = Phong::where('trangthaiPHG',2)->count();
        //khunggio
        $khunggio = KhungGio::all();
        //tiep nhan khách hàng
        $rep = NhanVien::where('idBPNV',3)->get();
        return view('admin.home.index',[
                        'phong'=>$phong,
                        'trong'=>$trong,
                        'dadat'=>$dadat,
                        'dango'=>$dango,
                        'khachhang'=>$khachhang,
                        'khunggio'=>$khunggio,
                        'rep'=>$rep

                    ]);
    }

    public function getPaginate()
    {
        //lay danh sach phong
        $phong = Phong::all();
        //lay danh sach khach hang
        $khachhang = KhachHang::paginate(5);
        //dem so luong phong trong
        $trong = Phong::where('trangthaiPHG',0)->count();
        //dem so luong phong da dat
        $dadat = Phong::where('trangthaiPHG',1)->count();
        //dem so luong phong co khach dang o
        $dango = Phong::where('trangthaiPHG',2)->count();
        //khunggio
        $khunggio = KhungGio::all();
        //tiep nhan khách hàng
        $rep = NhanVien::where('idBPNV',3)->get();
        return view('admin.home.customer',[
                        'phong'=>$phong,
                        'trong'=>$trong,
                        'dadat'=>$dadat,
                        'dango'=>$dango,
                        'khachhang'=>$khachhang,
                        'khunggio'=>$khunggio,
                        'rep'=>$rep

                    ])->render();
    }

    public function getSearch($tukhoa)
    {
        $search = KhachHang::where('hotenKH','like',"%$tukhoa%")->orWhere('cmndKH','like',"%$tukhoa%")->orWhere('dienthoaiKH','like',"%$tukhoa%")->paginate(5);
        return response()->json($search);
    }

    public function getCustomer()
    {
        return view('admin.home.addcustomer');
    }

    public function addCustomer(Request $request)
    {
        $this->validate($request,[
            'hoten'=> 'required|min:3',
            'cmnd'=>'required|numeric',
            'sdt'=> 'required|min:10|max:11',
        ],[
            'hoten.required'=> 'Bạn chưa nhập tên khách hàng',
            'hoten.min' => 'Tên khách hàng phải có ít nhất 3 kí tự',
            'cmnd.required'=> 'Bạn chưa nhập số CMND',
            'cmnd.numeric'=>'CMND phải là số',
            'sdt.required'=> 'Bạn chưa nhập số điện thoại',
            'sdt.min' => 'Số điện thoại phải có ít nhất 10 số',
            'sdt.max' => 'Số điện thoại chỉ có tối đa 11 số',
        ]);


            $newcustomer = new KhachHang;
            $newcustomer->hotenKH = $request->hoten;
            $newcustomer->gioitinhKH = $request->gioitinh;
            $newcustomer->ngaysinhKH = $request->ngaysinh;
            $newcustomer->cmndKH = $request->cmnd;
            $newcustomer->diachiKH = $request->dc;
            $newcustomer->sdtKH = $request->sdt;
            $newcustomer->save();
            return redirect('admin/home/addcustomer')->with('thongbao','Thêm thành công khách hàng');
        
    }

    public function getSua($id)
    {

        $suakhachhang = KhachHang::find($id);
        return view('admin.home.editcustomer',[
            'suakhachhang'=>$suakhachhang
        ]);
    }

    public function postSua(Request $request, $id)
    {   
        $sua = KhachHang::find($id);
        $this->validate($request,[
            'hoten'=> 'required|min:3',
            'cmnd'=>'required|unique:khachhang,cmndKH',
            'sdt'=> 'required|min:10|max:11',
        ],[
            'hoten.required'=> 'Bạn chưa nhập tên khách hàng',
            'hoten.min' => 'Tên khách hàng phải có ít nhất 3 kí tự',
            'cmnd.required'=> 'Bạn chưa nhập số CMND',
            'cmnd.unique'=>'CMND phải là duy nhất',
            'sdt.required'=> 'Bạn chưa nhập số điện thoại',
            'sdt.min' => 'Số điện thoại phải có ít nhất 10 số',
            'sdt.max' => 'Số điện thoại chỉ có tối đa 11 số',
        ]);

            $sua->hotenKH = $request->hoten;
            $sua->gioitinhKH = $request->gioitinh;
            $sua->ngaysinhKH = $request->ngaysinh;
            $sua->cmndKH = $request->cmnd;
            $sua->diachiKH = $request->dc;
            $sua->sdtKH = $request->sdt;
            $sua->save();
            return redirect('admin/home/editcustomer/'.$id)->with('thongbao','Sửa thành công khách hàng');
        

    }

    public function deleteCustomer(Request $request)
    {
       $xoa = KhachHang::find($request->id);
       $xoa->delete();
       return response()->json(['msg'=>'OK']);

        
    }

    public function getBook($id)
    {
        //lay danh sach phong
        $phong = Phong::all();
        //lay danh sach khach hang
        $khachhang = KhachHang::paginate(5);
        //dem so luong phong trong
        $trong = Phong::where('trangthaiPHG',0)->count();
        //dem so luong phong da dat
        $dadat = Phong::where('trangthaiPHG',1)->count();
        //dem so luong phong co khach dang o
        $dango = Phong::where('trangthaiPHG',2)->count();
        //khunggio
        $khunggio = KhungGio::all();

        $thuephong = ThuePhong::where('idPHGTP',$id)->get();

        $hienphong = Phong::where('id',$id)->get();

        $rep = NhanVien::where('idBPNV',3)->get();
        return view('admin.home.book',[
            'hienphong'=>$hienphong,
            'phong'=>$phong,
            'trong'=>$trong,
            'dadat'=>$dadat,
            'dango'=>$dango,
            'khachhang'=>$khachhang,
            'khunggio'=>$khunggio,
            'rep'=>$rep,
            'thuephong'=>$thuephong
        ]);
    }

    public function postBook(Request $request,$id)
    {
        $s= 0;
        $this->validate($request,[
            'khunggio' =>'required',
            'ngayden'=>'required',
            'ngaydi'=>'required'
        ],[
            'khunggio.required'=> 'Bạn chưa chọn khung giờ',
            'ngayden.required'=> 'Bạn chưa chọn ngày đến',
            'ngaydi.required'=> 'Bạn chưa chọn ngày đi',
        ]);
            
            $thuephong = new ThuePhong;
            $thuephong->ngaythueTP = $request->ngayden;
            $thuephong->ngaytraTP = $request->ngaydi;
            $thuephong->tratruocTP = $request->tratruoc;
            $thuephong->idKHTP = $request->idkhach;
            $thuephong->idNVTP = $request->nhanvien;
            $thuephong->idPHGTP = $id;
            $thuephong->idGPTP = $request->idgia;
            $thuephong->trangthai = 1;
            $thuephong->save();
            return redirect()->back();
    }

    public function giaBook($idloaiphong, $khunggio)
    {
        
        $giaphong = GiaPhong::where('idKGGP',$idloaiphong)->where('idLPGP',$khunggio)->get();
        foreach($giaphong as $gia)
        {
            echo '
                    <input class="form-control" type="text" value="'.number_format($gia->giaGP)." đ".'" readonly>
                    <input class="form-control" type="hidden" name="idgia" value="'.$gia->id.'" >
                ';
        }
        
    }

    public function khachhangBook($cmnd)
    {
        
        $khachhang = KhachHang::where('cmndKH',$cmnd)->get();
        foreach($khachhang as $khach)
        {
            echo '
                    <input class="form-control" type="text" value="'.$khach->hotenKH.'" readonly>
                    <input class="form-control" name="idkhach" type="hidden" value="'.$khach->id.'" >
                ';
        }
        
    }


    
}
