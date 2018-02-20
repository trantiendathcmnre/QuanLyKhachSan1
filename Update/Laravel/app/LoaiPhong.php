<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiPhong extends Model
{
    protected $table = 'loaiphong';         
    public $timestamps = false;

    public function cophong()
    {
    	return $this->hasMany('App\Phong','idLPPHG', 'id');
    }
}
