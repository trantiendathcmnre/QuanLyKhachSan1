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
        $checkfloor = Tang::where('tenT',$request->tentang)->count();
        if($checkfloor > 0)
        {
           return redirect('admin/floor/room')->with('thongbao','Tầng này đã tồn tại!'); 
        }
        else
        {
            $newfloor = new Tang;
            $newfloor->tenT = $request->tentang;
            $newfloor->save();
            return redirect('admin/floor/room')->with('thongbao','Thêm tầng thành công!');
        }
        
    }

    public function deleteFloor($matang)
    {
        $ktphong = Phong::where('idTPHG',$matang)->count();
        if($ktphong > 0)
        {
            return redirect('admin/floor/room')->with('thongbao','
                Tầng này đang có phòng tồn tại!'); 
        }
        else

        {
            $kttang = Tang::where('id',$matang)->count();
            if($kttang = 0 )
            {
                return redirect('admin/floor/room')->with('thongbao','Tầng này không tồn tại!'); 
            }else
            {
                $deletefloor = Tang::find($matang);
                $deletefloor->delete();
                return redirect('admin/floor/room')->with('thongbao','Xóa thành công!'); 
            }
        }
    }

    public function addFloorStyle(Request $request)
    {
        $checkfloorstyle = LoaiPhong::where('tenLP',$request->loaiphong)->count();
        if($checkfloorstyle > 0)
        {
            return redirect('admin/floor/room')->with('thongbao', 'Loại phòng này đã tồn tại!');
        }
        else
        {
            $newfloorstyle = new LoaiPhong;
            $newfloorstyle->tenLP = $request->loaiphong;
            $newfloorstyle->save();
            return redirect('admin/floor/room')->with('thongbao','Thêm loại phòng thành công!');
        }
    }

    public function updateFloor(Request $request, $matang)
    {
        return view('');
    }
}
