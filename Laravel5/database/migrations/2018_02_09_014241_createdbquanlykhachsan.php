<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createdbquanlykhachsan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   //table tang lau
        Schema::create('tang', function ($table) {
            $table->increments('idT');
            $table->string('maT',10)->unique();
            $table->string('tenT',50);
        });
        //table loai phong
        Schema::create('loaiphong', function ($table) {
            $table->increments('idLP');
            $table->string('maLP',10)->unique();
            $table->string('tenLP',50);
        });
        //table bo phan
        Schema::create('bophan', function ($table) {
            $table->increments('idBP');
            $table->string('maBP',10)->unique();
            $table->string('tenBP',50);
        });
        //table muc luong
        Schema::create('mucluong', function ($table) {
            $table->increments('idML');
            $table->string('maML',10);
            $table->float('luongcbML',10,2);
            $table->float('phucapML',10,2)->default(300000);
            $table->float('tamungML',10,2)->default(0);
            $table->float('khautruML',10,2)->default(0);
            $table->integer('nghiphepML')->default(0);
        });
        //table dich vu
        Schema::create('dichvu', function ($table) {
            $table->increments('idDV');
            $table->string('maDV',10);
            $table->string('tenDV');
            $table->string('donviDV',20);
            $table->integer('soluongDV');
            $table->float('dongiaDV',10,2);
        });
        //table tai khoan
        Schema::create('taikhoan', function ($table) {
            $table->increments('idTK');
            $table->string('tenTK',200)->unique();
            $table->string('matkhauTK');
            $table->dateTime('ngaytaoTK');
            $table->string('anhdaidienTK');
        });
        //table khach hang
        Schema::create('khachhang', function ($table) {
            $table->increments('idKH');
            $table->string('hotenKH');
            $table->string('gioitinhKH',4);
            $table->dateTime('ngaysinhKH')->nullable();
            $table->string('cmndKH',12);
            $table->string('diachiKH')->nullable();
            $table->string('sdtKH',11);
        });
        //table khung gio
        Schema::create('khunggio', function ($table) {
            $table->increments('idKG');
            $table->string('maKG',10);
            $table->string('tenKG',50);
            $table->string('dieukienKG');
        });
        //table gia phong
        Schema::create('giaphong', function ($table) {
            $table->increments('idGP');
            $table->string('maGP');
            $table->float('giaGP',10,2);
        });
        //table chi tiet hoa don
        Schema::create('chitiethoadon', function ($table) {
            $table->increments('idHD');
            $table->string('maHD');
            $table->dateTime('ngaylapHD');
            $table->float('phuthuHD',10,2);
            $table->float('tongtienHD',10,2);
        });
        //table nhan vien
        Schema::create('nhanvien', function ($table) {
            $table->increments('idNV');
            $table->string('maNV',10)->unique();
            $table->string('hotenNV');
            $table->string('gioitinhNV',3);
            $table->dateTime('ngaysinhNV');
            $table->string('sdtNV',11);
            $table->string('emailNV')->nullable();
            $table->dateTime('ngayvaoNV');
            $table->string('trangthaiNV',20);
        });
        //table thue phong
        Schema::create('thuephong', function ($table) {
            $table->increments('idTP');
            $table->string('maTP',10);
            $table->dateTime('ngaythueTP');
            $table->dateTime('ngaytraTP');
            $table->float('tratruocTP',10,2);
            $table->integer('tgluutruTP');
        });
        //table phong
        Schema::create('phong', function ($table) {
            $table->increments('idPHG');
            $table->string('maPHG',10)->unique();
            $table->string('tenPHG',50);
            $table->longText('tiennghiPHG');
            $table->longText('ghichuPHG')->nullable();
            $table->integer('songuoiPHG');
            $table->integer('sogiuongPHG');
            $table->string('trangthaiPHG')->default('trống');
        });
        //lien ket table gia
        Schema::table('giaphong', function($table) {
            $table->integer('idKGGP')->unsigned();
            $table->foreign('idKGGP')->references('idKG')->on('khunggio');
            $table->integer('idLPGP')->unsigned();
            $table->foreign('idLPGP')->references('idLP')->on('loaiphong');
        });
        //lien ket table chi tiet hoa don
        Schema::table('chitiethoadon', function($table) {
            $table->integer('idDVHD')->unsigned();
            $table->foreign('idDVHD')->references('idDV')->on('dichvu');
            $table->integer('idTPHD')->unsigned();
            $table->foreign('idTPHD')->references('idTP')->on('thuephong');
        });
        //lien ket table nhan vien
        Schema::table('nhanvien', function($table) {
            $table->integer('idBPNV')->unsigned();
            $table->foreign('idBPNV')->references('idBP')->on('bophan');
        });
        //lien ket table thue phong
        Schema::table('thuephong', function($table) {
            $table->integer('idNVTP')->unsigned();
            $table->foreign('idNVTP')->references('idNV')->on('nhanvien');
            $table->integer('idKHTP')->unsigned();
            $table->foreign('idKHTP')->references('idKH')->on('khachhang');
            $table->integer('idPHGTP')->unsigned();
            $table->foreign('idPHGTP')->references('idPHG')->on('phong');
            $table->integer('idGPTP')->unsigned();
            $table->foreign('idGPTP')->references('idGP')->on('giaphong');

        });
        //lien ket table phong
        Schema::table('phong', function($table) {
            $table->integer('idTPHG')->unsigned();
            $table->foreign('idTPHG')->references('idT')->on('tang');
            $table->integer('idLPPHG')->unsigned();
            $table->foreign('idLPPHG')->references('idLP')->on('loaiphong');
        });
        //lien ket table muc luong
        Schema::table('mucluong', function($table) {
            $table->integer('idNVML')->unsigned();
            $table->foreign('idNVML')->references('idNV')->on('nhanvien');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('chitiethoadon');
        Schema::drop('thuephong');
        Schema::drop('dichvu');
        Schema::drop('taikhoan');
        Schema::drop('khachhang');
        Schema::drop('nhanvien');
        Schema::drop('mucluong');
        Schema::drop('bophan');
        Schema::drop('khunggio');
        Schema::drop('giaphong');
        Schema::drop('phong');
        Schema::drop('tang');
        Schema::drop('loaiphong');
    }
}
