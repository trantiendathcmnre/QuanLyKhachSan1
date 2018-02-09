<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(QuanLyKhachSan::class);
    }
}
/**
* 
*/
class QuanLyKhachSan extends Seeder
{
	public function run()
    {
        DB::table('tang')->insert([
        	['maT'=>'DOWNSTAIRS','tenT'=>'Tầng trệt'],
        	['maT'=>'FLOOR1','tenT'=>'Tầng 1'],
        	['maT'=>'FLOOR2','tenT'=>'Tầng 2'],
        	['maT'=>'FLOOR3','tenT'=>'Tầng 3']

        ]);
        DB::table('bophan')->insert([
        	['maBP'=>'SALE','tenBP'=>'Sale'],
        	['maBP'=>'MANAGER','tenBP'=>'Quản lý'],
        	['maBP'=>'RECEPTION','tenBP'=>'Lễ tân'],
        	['maBP'=>'ACCOUNTANT','tenBP'=>'Kế toán']

        ]);
        DB::table('loaiphong')->insert([
        	['maLP'=>'STD','tenLP'=>'Standard'],
        	['maLP'=>'SUP','tenLP'=>'Superior'],  	
        	['maLP'=>'DLX','tenLP'=>'Deluxe']
        ]);
        DB::table('khunggio')->insert([
        	['maKG'=>'KG1','tenKG'=>'Theo Giờ','dieukienKG'=>'1 giờ - 11 giờ'],
        	['maKG'=>'KG2','tenKG'=>'Qua đêm','dieukienKG'=>'12 giờ - 23 giờ'],
        	['maKG'=>'KG3','tenKG'=>'Theo Ngày','dieukienKG'=>'24 giờ trở đi']
        ]);
        DB::table('dichvu')->insert([
        	['maDV'=>'GIATUI','tenDV'=>'Giặt ủi','donviDV'=>'Bộ','soluongDV'=>1,'dongiaDV'=>15000],
        	['maDV'=>'NUOCSUOI','tenDV'=>'Nước suối','donviDV'=>'Chai','soluongDV'=>1,'dongiaDV'=>10000],
        	['maDV'=>'HEINEKEN','tenDV'=>'Bia Heineken','donviDV'=>'Lon','soluongDV'=>1,'dongiaDV'=>25000],
        	['maDV'=>'TIGER','tenDV'=>'Bia Tiger','donviDV'=>'Lon','soluongDV'=>1,'dongiaDV'=>20000],
        	['maDV'=>'REDBULL','tenDV'=>'Bò cụng','donviDV'=>'Lon','soluongDV'=>1,'dongiaDV'=>15000],
        	['maDV'=>'TWISTER','tenDV'=>'Cam ép Twister','donviDV'=>'Lon','soluongDV'=>1,'dongiaDV'=>15000],
        	['maDV'=>'COCA','tenDV'=>'Cocacola','donviDV'=>'Lon','soluongDV'=>1,'dongiaDV'=>15000],
        	['maDV'=>'DRTHANH','tenDV'=>'Trà Dr Thanh','donviDV'=>'Chai','soluongDV'=>1,'dongiaDV'=>15000],
        	['maDV'=>'NUOCYEN','tenDV'=>'Nước yến','donviDV'=>'Lon','soluongDV'=>1,'dongiaDV'=>15000],
        	['maDV'=>'SUACHUA','tenDV'=>'Sữa chua','donviDV'=>'Hộp','soluongDV'=>1,'dongiaDV'=>10000],
        	['maDV'=>'SUATUOI','tenDV'=>'Sữa tươi','donviDV'=>'Lon','soluongDV'=>1,'dongiaDV'=>15000],
        	['maDV'=>'BATLUA','tenDV'=>'Bật lửa','donviDV'=>'Cái','soluongDV'=>1,'dongiaDV'=>4000],
        	['maDV'=>'CARAVEN','tenDV'=>'Thuốc Caraven','donviDV'=>'Gói','soluongDV'=>1,'dongiaDV'=>18000],

        ]);
        DB::table('phong')->insert([
        	['maPHG'=>'P101','tenPHG'=>'101','tiennghiPHG'=>'Tivi, tủ lạnh, máy lạnh, máy giặt sấy,bồn tắm, phòng xông hơi','songuoiPHG'=>4,'sogiuongPHG'=>2,'idTPHG'=>1,'idLPPHG'=>1],

        ]);
        DB::table('giaphong')->insert([
        	['maGP'=>'STDKG1','giaGP'=>50000,'idKGGP'=>1,'idLPGP'=>1],
        	['maGP'=>'SUPKG1','giaGP'=>70000,'idKGGP'=>1,'idLPGP'=>2],
        	['maGP'=>'DLXKG1','giaGP'=>90000,'idKGGP'=>1,'idLPGP'=>3],
        	['maGP'=>'STDKG2','giaGP'=>150000,'idKGGP'=>2,'idLPGP'=>1],
        	['maGP'=>'SUPKG2','giaGP'=>300000,'idKGGP'=>2,'idLPGP'=>2],
        	['maGP'=>'DLXKG2','giaGP'=>450000,'idKGGP'=>2,'idLPGP'=>3],
        	['maGP'=>'STDKG3','giaGP'=>250000,'idKGGP'=>3,'idLPGP'=>1],
        	['maGP'=>'SUPKG3','giaGP'=>350000,'idKGGP'=>3,'idLPGP'=>2],
        	['maGP'=>'DLXKG3','giaGP'=>500000,'idKGGP'=>3,'idLPGP'=>3]


        ]);


    }
	
}