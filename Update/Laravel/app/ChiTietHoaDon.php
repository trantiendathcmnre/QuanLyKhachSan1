<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    //
    protected $table = 'chitiethoadon';         
    public $timestamps = false;

    public function thuoctp()
    {
    	return $this->belongsTo('App\ThuePhong', 'idTPHD', 'id');
    }
}
