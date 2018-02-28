<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoPhan extends Model
{
    //
    protected $table = 'bophan';
    public $timestamps = false;
    public function conv()
    {
    	return $this->hasMany('App\NhanVien', 'idBPNV', 'id');
    }
}
