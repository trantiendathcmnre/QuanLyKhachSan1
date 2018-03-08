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
        $nhanvien = NhanVien::paginate(10);
        //lay danh sach muc luong nhan vien
        $luong = MucLuong::all();
        return view('admin.employee.staff',[
                        'bophan'=>$bophan,
                        'nhanvien'=>$nhanvien,
                        'luong'=>$luong

                    ]);//quan ly nhan vien
    }
    public function getPaginate()
    {
        //lay danh sach bo phan
        $bophan = BoPhan::all();
        //lay danh sach nhan vien
        $nhanvien = NhanVien::paginate(10);
        //lay danh sach muc luong nhan vien
        $luong = MucLuong::all();
        return view('admin.employee.staff',[
                        'bophan'=>$bophan,
                        'nhanvien'=>$nhanvien,
                        'luong'=>$luong

                    ])->render();//quan ly nhan vien
    }

    public function addDepartment(Request $request)
    {
        $mabophan = $request->mabophan;
        // dd($mabophan);
        $checkgroup = BoPhan::where('maBP',$mabophan)->count();
        if($checkgroup > 0 )
        {
            return response('ERROR'); 
        }
        else
        {
            $addgroup = new BoPhan;
            $addgroup->maBP = $mabophan;
            $addgroup->tenBP = $request->tenbophan;
            $addgroup->dienthoaiBP = $request->sdtbophan;
            $addgroup->save();
            return response('OK');
        }
    }

    public function getDepartment($id)
    {
        $suabophan = BoPhan::find($id);
        return view('admin.employee.editdepartment',[
            'suabophan'=>$suabophan
        ]);
    }

    public function postDepartment(Request $request, $id)
    {
        $sua = BoPhan::find($id);
        $this->validate($request,[
            'tenbophan'=> 'required|min:3|unique:bophan,tenBP'
        ],[
            'tenbophan.required'=> 'Bạn chưa nhập tên bộ phận',
            'tenbophan.min' => 'Tên bộ phận phải có ít nhất 3 kí tự',
            'tenbophan.unique' => 'Tên bộ phận phải là duy nhất'
        ]);

            $sua->maBP = $request->mabophan;
            $sua->tenBP = $request->tenbophan;
            $sua->dienthoaiBP = $request->sdt;
            $sua->save();
            return redirect('admin/employee/editdepartment/'.$id)->with('thongbao','Sửa thành công !');
    }

    public function deleteDepartment($id)
    {
        $bophan = BoPhan::all();

        $nhanvien = NhanVien::paginate(10);
       
        $luong = MucLuong::all();

        $ktbophan = NhanVien::where('idBPNV',$id)->count();
        if($ktbophan > 0)
        {
            return redirect()->back()->with(['thongbao'=>'Còn nhân viên thuộc bộ phận này ! Vui lòng kiểm tra lại!']); 
        }
        else
        { 
            $deletedepartment = BoPhan::find($id);
            $deletedepartment->delete();
            return redirect('admin/employee/staff');
        }
    }


    public function addStaff(Request $request)
    {
        $manhanvien = $request->manhanvien;
        // dd($mabophan);
        $checkstaff = NhanVien::where('maNV',$manhanvien)->count();
        if($checkstaff > 0 )
        {
            return response('ERROR'); 
        }
        else
        {
            $addstaff = new NhanVien;
            $addstaff->maNV = $manhanvien;
            $addstaff->hotenNV = $request->tennhanvien;
            $addstaff->gioitinhNV = $request->gioitinh;
            $addstaff->ngaysinhNV = $request->ngaysinh;
            $addstaff->sdtNV = $request->sdt;
            $addstaff->emailNV = $request->email;
            $addstaff->idBPNV = $request->bophan;
            $addstaff->save();
            return response('OK');
        }
    }

    public function deleteStaff($id)
    {
        $nhanvien = NhanVien::find($id);
        $nhanvien->delete();
        return redirect()->back();
    }

    public function editStaff($id)
    {
        $bophan = BoPhan::all();
        $suanhanvien = NhanVien::find($id);
        return view('admin.employee.editstaff',[
            'suanhanvien'=>$suanhanvien,
            'bophan'=> $bophan
        ]);
    }

    public function editpostStaff(Request $request, $id)
    {
        $editstaff = NhanVien::find($id);
        $this->validate($request,[
            'tennhanvien'=> 'required',
            'ngaysinh'=>'required',
            'sdt'=>'required',
            'bophan'=>'required'
        ],[
            'tennhanvien.required' => 'Tên nhân viên là bắt buộc',
            'ngaysinh.required' => 'Ngày sinh là bắt buộc',
            'sdt.required'=>'Số điện thoại là bắt buộc',
            'bophan.required' => 'Vui lòng chọn bộ phận'
        ]);

            $editstaff->maNV = $request->manhanvien;
            $editstaff->hotenNV = $request->tennhanvien;
            $editstaff->gioitinhNV = $request->gioitinh;
            $editstaff->ngaysinhNV = $request->ngaysinh;
            $editstaff->sdtNV = $request->sdt;
            $editstaff->emailNV = $request->email;
            $editstaff->idBPNV = $request->bophan;
            $editstaff->save();
            
            return redirect('admin/employee/editstaff/'.$id)->with('thongbao','Sửa thành công !');
    }

}
