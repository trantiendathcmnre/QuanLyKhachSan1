<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    protected $table = 'phong';         
    public $timestamps = false; 

    public function phongloai()
    {
    	return $this->belongsTo('App\LoaiPhong','idLPPHG', 'id');
    }

    public function phongtang()
    {
    	return $this->belongsTo('App\Tang' , 'idTPHG', 'id');
    }
}
