<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MucLuong extends Model
{
    //
    protected $table = 'mucluong';         
    public $timestamps = false;
    public function luongnv()
    {
    	return $this->belongsTo('App\NhanVien', 'idNVML', 'id');
    }
}
