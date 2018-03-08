<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThuePhong extends Model
{
    //
    protected $table = 'thuephong';         
    public $timestamps = false;

    public function chitiethd()
    {
    	return $this->hasOne('App\ChiTietHoaDon', 'idTPHD' , 'id');
    }

    public function khach()
    {
    	return $this->hasOne('App\KhachHang', 'idKHTP', 'id');
    }
}
