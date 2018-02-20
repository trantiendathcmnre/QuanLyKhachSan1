<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\KhachHang;
use App\Tang;

class AjaxController extends Controller
{
    // public function themKhachHang(Request $request)
    // {
    //     $rules = array(
    //         'hoten' -> 'required',
    //         'gioitinh' -> 'required',
    //         'cmnd' -> 'required',
    //         'sdt' -> 'required'

    //     );
    //     $validator = Validator::make (Input::all(), $rules);
    //     if($validator ->fails())
    //         return Response::json (array (
    //             'error' -> $validator->getMessageBag()->toArray()
    //         ));
    //     else {
    //         $khachhang = new KhachHang();
    //         $khachhang -> hotenKH = $request -> hoten;
    //         $khachhang -> gioitinhKH = $request -> gioitinh;
    //         $khachhang -> cmndKH = $request -> cmnd;
    //         $khachhang -> sdtKH = $request -> sdt;
    //         $khachhang -> save();
    //         return reponse ()->json ($khachhang);

    //     }
    // }

    public function themTang()
    {
        $rules = array(
            'matang' -> 'required',
            'tentang' -> 'required',
        );
        $validator = Validator::make (Input::all(), $rules);
        if($validator ->fails())
            return "dat truyen";
            // return Response::json (array (
            //     'errors' -> $validator->getMessageBag()->toArray()
            // ));
        // else {
        //     $tang = new Tang();
        //     $tang -> maT = $request -> matang;
        //     $tang -> tenT = $request -> tentang;
        //     $tang -> save();
        //     return reponse ()->json ($tang);

        // }
    }
}
