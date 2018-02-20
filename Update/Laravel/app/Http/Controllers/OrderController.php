<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ChiTietHoaDon;
use App\NhanVien;
use Excel;

class OrderController extends Controller
{
    
	public function getStatistical()
    {
        //danh sach hoa don
        $hoadon = ChiTietHoaDon::all();
        return view('admin.order.statistical',[
                        'hoadon'=>$hoadon
                    ]);//thong ke
    }

    public function getExport()
    {
        $contact = NhanVien::select('hotenNV','emailNV')->get();
        

        return Excel::create('DoanhThu', function($excel) use ($contact){
            $excel->sheet('DoanhThu', function($sheet) use ($contact){
            	$sheet->setStyle(array(
				    'font' => array(
				        'name'      =>  'Cambria',
				        'size'      =>  12,
				        'bold'      =>  false
				    )
				));
                $sheet->fromArray($contact);
            });
        })->download('xls');
    }

    public function postImport(Request $request)
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
}
