<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    protected $table = 'nhanvien';         
    public $timestamps = false;

    public function thuocbp()
    {
    	return $this->belongsTo('App\BoPhan','idBPNV', 'id');
    }
}
