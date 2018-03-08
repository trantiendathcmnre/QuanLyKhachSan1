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

    public function getPaginate()
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
        return view('admin.floor.room-info',[
                        'tang'=>$tang,
                        'loaiphong'=>$loaiphong,
                        'phong'=>$phong,
                        'giaphong'=>$giaphong,
                        'phanphong'=>$phanphong
                    ])->render();//quan ly phong
    }

    public function addFloor(Request $request)
    {
        $checkfloor = Tang::where('tenT',$request->tentang)->count();
        if($checkfloor > 0)
        {
           return response()->json(['msg'=>'ERROR']); 
        }
        else
        {
            $newfloor = new Tang;
            $newfloor->tenT = $request->tentang;
            $newfloor->save();
            return response()->json(['msg'=>'OK']);
        }
        
    }

    public function deleteFloor($id)
    {
        $ktphong = Phong::where('idTPHG',$id)->count();
        if($ktphong > 0)
        {
            return redirect('admin/floor/room',['thongbao'=>'Còn phòng trên tầng này ! Vui lòng kiểm tra lại!']); 
        }
        else
        {
            
            $deletefloor = Tang::find($id);
            $deletefloor->delete();
            return redirect('admin/floor/room');

        }
    }

    public function addFloorStyle(Request $request)
    {
        $checkfloorstyle = LoaiPhong::where('tenLP',$request->loaiphong)->count();
        if($checkfloorstyle > 0)
        {
            return response()->json(['msg'=>'ERROR']);
        }
        else
        {
            $newfloorstyle = new LoaiPhong;
            $newfloorstyle->tenLP = $request->loaiphong;
            $newfloorstyle->save();
            return response()->json(['msg'=>'OK']);
        }
    }

     public function deleteFloorStyle($id)
    {
        $ktphong = Phong::where('idLPPHG',$id)->count();
        if($ktphong > 0)
        {
            return redirect('admin/floor/room',['thongbao'=>'Còn phòng trên tầng này ! Vui lòng kiểm tra lại!']); 
        }
        else
        {
            
            $deletefloorstyle = LoaiPhong::find($id);
            $deletefloorstyle->delete();
            return redirect('admin/floor/room');

        }
    }

    public function editgetFloor($id)
    {
        $suatang = Tang::find($id);
        return view('admin.floor.editfloor',[
            'suatang'=>$suatang
        ]);
    }

    public function editpostFloor(Request $request, $id)
    {
        $sua = Tang::find($id);
        $this->validate($request,[
            'tentang'=> 'required|min:3|unique:tang,tenT'
        ],[
            'tentang.required'=> 'Bạn chưa nhập tên tầng',
            'tentang.min' => 'Tên tầng phải có ít nhất 3 kí tự',
            'tentang.unique' => 'Tên tầng phải là duy nhất'
        ]);

            $sua->tenT = $request->tentang;
            $sua->save();
            return redirect('admin/floor/editfloor/'.$id)->with('thongbao','Sửa thành công !');
    }

    public function getFloorStyle($id)
    {
        $sualoaiphong = LoaiPhong::find($id);
        return view('admin.floor.editfloorstyle',[
            'sualoaiphong'=>$sualoaiphong
        ]);
    }

    public function postFloorStyle(Request $request, $id)
    {
        $sua = LoaiPhong::find($id);
        $this->validate($request,[
            'tenloai'=> 'required|min:3|unique:loaiphong,tenLP'
        ],[
            'tenloai.required'=> 'Bạn chưa nhập tên loại phòng',
            'tenloai.min' => 'Tên loại phòng phải có ít nhất 3 kí tự',
            'tenloai.unique' => 'Tên loại phòng phải là duy nhất'
        ]);

            $sua->tenLP = $request->tenloai;
            $sua->save();
            return redirect('admin/floor/editfloorstyle/'.$id)->with('thongbao','Sửa loại phòng thành công !');
    }

    public function addRoom(Request $request)
    {
        $checkroom = Phong::where('maPHG',$request->maphong)->count();
        if($checkroom > 0)
        {
           return response()->json(['msg'=>'ERROR']);
        }
        else
        {
            $newroom = new Phong;
            $newroom->maPHG = $request->maphong;
            $newroom->tiennghiPHG = $request->tiennghi;
            $newroom->tiennghiPHG = $request->tiennghi;
            $newroom->songuoiPHG = $request->songuoi;
            $newroom->sogiuongPHG = $request->sogiuong;
            $newroom->idTPHG = $request->tang;
            $newroom->idLPPHG = $request->loaiphong;
            $newroom->save();
            return response()->json([
                 'msg'=>'OK'
                // 'maphong'=>$request->maphong,
                // 'tenphong'=>
            ]);
        }
        
    }

    public function getSua($id)
    {
        $loaiphong = LoaiPhong::all();
        $tang = Tang::all();
        $suaphong = Phong::find($id);
        return view('admin.floor.editroom',[
            'suaphong'=>$suaphong,
            'tang'=>$tang,
            'loaiphong'=>$loaiphong           
        ]);
    }

    public function postSua(Request $request,$id)
    {
        $sua = Phong::find($id);
        $sua->maPHG = $request->maphong;
        $sua->tiennghiPHG = $request->tiennghi;
        $sua->idLPPHG = $request->loaiphong;
        $sua->idTPHG = $request->tang;
        $sua->songuoiPHG = $request->songuoi;
        $sua->sogiuongPHG = $request->sogiuong;
        $sua->save();
            return redirect('admin/floor/editroom/'.$id)->with('thongbao','Sửa phòng thành công');
    }

    public function deleteRoom(Request $request)
    {
       
        $deleteroom = Phong::find($request->id);
        $deleteroom->delete();
        return response('OK');
    }

}
