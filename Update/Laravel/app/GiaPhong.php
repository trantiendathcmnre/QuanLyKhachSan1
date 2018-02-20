<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiaPhong extends Model
{
    //
    protected $table = 'giaphong';         
    public $timestamps = false;

    public function gialoai()
    {
    	return $this->belongsTo('App\LoaiPhong','idLPGP','id');
    }

    public function giakhunggio()
    {
    	return $this->belongsTo('App\KhungGio', 'idKGGP' , 'id');
    }
}
