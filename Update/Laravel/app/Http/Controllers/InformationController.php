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
        $dichvu = DichVu::paginate(10);
        //thong tin khach san 
        $thongtinkhachsan = ThongTinKhachSan::all();
        return view('admin.information.infor',[
                        'dichvu'=>$dichvu,
                        'thongtinkhachsan'=>$thongtinkhachsan
                    ]);
    }

    public function getPaginate()
    {
        //danh sach dich vu
        $dichvu = DichVu::paginate(10);
        //thong tin khach san 
        $thongtinkhachsan = ThongTinKhachSan::all();
        return view('admin.information.servicetb',[
                        'dichvu'=>$dichvu,
                        'thongtinkhachsan'=>$thongtinkhachsan
                    ])->render();
    }

    public function addgetService()
    {
        return view('admin/information/addservice');
    }

    public function addpostService(Request $request)
    {
        $this->validate($request,[
            'tendv'=> 'required|min:3',
            'donvi'=> 'required',
            'soluong'=> 'required|numeric',
            'dongia'=>'required|numeric'
        ],[
            'tendv.required'=> 'Bạn chưa nhập tên dịch vụ',
            'tendv.min' => 'Tên dịch vụ phải có ít nhất 3 kí tự',
            'donvi.required' => 'Bạn chưa nhập đơn vị',
            'soluong.required' => 'Bạn chưa nhập số lượng',
            'dongia.required' => 'Bạn chưa nhập đơn giá',
            'dongia.numeric' => 'Vui lòng nhập số tiền'
        ]);


            $newservice = new DichVu;
            $newservice->tenDV = $request->tendv;
            $newservice->donviDV = $request->donvi;
            $newservice->soluongDV = $request->soluong;
            $newservice->dongiaDV = $request->dongia;
            $newservice->save();
            return redirect('admin/information/addservice')->with('thongbao','Thêm dịch vụ thành công');
        
    }

    public function getService($id)
    {
        $suadichvu = DichVu::find($id);
        return view('admin.information.editservice',[
            'suadichvu'=>$suadichvu
        ]);
    }

    public function postService(Request $request, $id)
    {
        $sua = DichVu::find($id);
        $this->validate($request,[
            'tendv'=> 'required|min:3|unique:dichvu,tenDV',
            'donvi'=> 'required',
            'soluong'=> 'required|numeric',
            'dongia'=>'required|numeric'
        ],[
            'tendv.unique'=> 'Tên dịch vụ là duy nhất',
            'tendv.required'=> 'Bạn chưa nhập tên dịch vụ',
            'tendv.min' => 'Tên dịch vụ phải có ít nhất 3 kí tự',
            'donvi.required' => 'Bạn chưa nhập đơn vị',
            'soluong.required' => 'Bạn chưa nhập số lượng',
            'dongia.required' => 'Bạn chưa nhập đơn giá',
            'dongia.numeric' => 'Vui lòng nhập số tiền'
        ]);

            $sua->tenDV = $request->tendv;
            $sua->donviDV = $request->donvi;
            $sua->soluongDV = $request->soluong;
            $sua->dongiaDV = $request->dongia;
            $sua->save();
            return redirect('admin/information/editservice/'.$id)->with('thongbao','Sửa thành công !');
    }

    public function deleteService($id)
    {
        $dichvu = DichVu::find($id);
        $dichvu->delete();
        return redirect()->back();
    }

}
