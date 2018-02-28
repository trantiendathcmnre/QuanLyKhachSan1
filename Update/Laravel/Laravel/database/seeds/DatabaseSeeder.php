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
/**
* 
*/
class QuanLyKhachSan extends Seeder
{
	/*9/2/2018*/
	public function run()
    {
        DB::table('taikhoan')->insert([
            ['tenTK'=>'admin','matkhauTK'=>bcrypt('123'),'ngaytaoTK'=>date("Y-m-d"),'anhdaidienTK'=>'mặc định'],
            ['tenTK'=>'nhanvien','matkhauTK'=>bcrypt('123'),'ngaytaoTK'=>date("Y-m-d"),'anhdaidienTK'=>'mặc định']
        ]);
        DB::table('tang')->insert([
        	['maT'=>'DWS','tenT'=>'Tầng trệt'],
        	['maT'=>'FL1','tenT'=>'Tầng 1'],
        	['maT'=>'FL2','tenT'=>'Tầng 2'],
        	['maT'=>'FL3','tenT'=>'Tầng 3']

        ]);
        DB::table('bophan')->insert([
        	['maBP'=>'SAL','tenBP'=>'Sale'],
        	['maBP'=>'MNG','tenBP'=>'Quản lý'],
        	['maBP'=>'RCP','tenBP'=>'Lễ tân'],
        	['maBP'=>'ACT','tenBP'=>'Kế toán']

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
        	['maDV'=>'GU','tenDV'=>'Giặt ủi','donviDV'=>'Bộ','soluongDV'=>1,'dongiaDV'=>15000],
        	['maDV'=>'NS','tenDV'=>'Nước suối','donviDV'=>'Chai','soluongDV'=>1,'dongiaDV'=>10000],
        	['maDV'=>'HNK','tenDV'=>'Bia Heineken','donviDV'=>'Lon','soluongDV'=>1,'dongiaDV'=>25000],
        	['maDV'=>'TG','tenDV'=>'Bia Tiger','donviDV'=>'Lon','soluongDV'=>1,'dongiaDV'=>20000],
        	['maDV'=>'RB','tenDV'=>'Bò cụng','donviDV'=>'Lon','soluongDV'=>1,'dongiaDV'=>15000],
        	['maDV'=>'TWT','tenDV'=>'Cam ép Twister','donviDV'=>'Lon','soluongDV'=>1,'dongiaDV'=>15000],
        	['maDV'=>'COCA','tenDV'=>'Cocacola','donviDV'=>'Lon','soluongDV'=>1,'dongiaDV'=>15000],
        	['maDV'=>'DRT','tenDV'=>'Trà Dr Thanh','donviDV'=>'Chai','soluongDV'=>1,'dongiaDV'=>15000],
        	['maDV'=>'NUY','tenDV'=>'Nước yến','donviDV'=>'Lon','soluongDV'=>1,'dongiaDV'=>15000],
        	['maDV'=>'SC','tenDV'=>'Sữa chua','donviDV'=>'Hộp','soluongDV'=>1,'dongiaDV'=>10000],
        	['maDV'=>'ST','tenDV'=>'Sữa tươi','donviDV'=>'Lon','soluongDV'=>1,'dongiaDV'=>15000],
        	['maDV'=>'BL','tenDV'=>'Bật lửa','donviDV'=>'Cái','soluongDV'=>1,'dongiaDV'=>4000],
        	['maDV'=>'CRV','tenDV'=>'Thuốc Caraven','donviDV'=>'Gói','soluongDV'=>1,'dongiaDV'=>18000],

        ]);
        DB::table('phong')->insert([
        	['maPHG'=>'P101','tenPHG'=>'101','tiennghiPHG'=>'Tiện nghi phổ thông','songuoiPHG'=>4,'sogiuongPHG'=>2,'idTPHG'=>1,'idLPPHG'=>1],
            ['maPHG'=>'P102','tenPHG'=>'101','tiennghiPHG'=>'Tivi, tủ lạnh, máy lạnh, máy giặt sấy,bồn tắm, phòng xông hơi','songuoiPHG'=>4,'sogiuongPHG'=>2,'idTPHG'=>1,'idLPPHG'=>3],
            ['maPHG'=>'P103','tenPHG'=>'101','tiennghiPHG'=>'Tivi, tủ lạnh','songuoiPHG'=>4,'sogiuongPHG'=>2,'idTPHG'=>1,'idLPPHG'=>2],
            ['maPHG'=>'P104','tenPHG'=>'101','tiennghiPHG'=>'Tivi, tủ lạnh, máy lạnh, máy giặt sấy,bồn tắm, phòng xông hơi','songuoiPHG'=>4,'sogiuongPHG'=>2,'idTPHG'=>1,'idLPPHG'=>3],
            ['maPHG'=>'P105','tenPHG'=>'101','tiennghiPHG'=>'Tivi, tủ lạnh, máy lạnh, máy giặt sấy,bồn tắm, phòng xông hơi','songuoiPHG'=>4,'sogiuongPHG'=>2,'idTPHG'=>1,'idLPPHG'=>3]

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
        DB::table('nhanvien')->insert([
            ['maNV'=>'SAL001','hotenNV'=>'Hồ Thanh Sơn','gioitinhNV'=>'Nam','ngaysinhNV'=>'1950-5-2','sdtNV'=>'01667526884','emailNV'=>'sonth@gmail.com','ngayvaoNV'=>'2004-4-11','trangthaiNV'=>'Đang làm việc','idBPNV'=>1],
            ['maNV'=>'RCP001','hotenNV'=>'Trần Tâm Thanh','gioitinhNV'=>'Nam','ngaysinhNV'=>'1965-7-2','sdtNV'=>'01623467778','emailNV'=>'thanhtt@gmail.com','ngayvaoNV'=>'2004-4-21','trangthaiNV'=>'Đang làm việc','idBPNV'=>3],
            ['maNV'=>'MNG001','hotenNV'=>'Đỗ Nghiêm Phụng','gioitinhNV'=>'Nam','ngaysinhNV'=>'1950-8-1','sdtNV'=>'0909797075','emailNV'=>'sonth@gmail.com','ngayvaoNV'=>'2005-1-21','trangthaiNV'=>'Đang làm việc','idBPNV'=>2],
            ['maNV'=>'ACT001','hotenNV'=>'Nguyễn Tô Lan','gioitinhNV'=>'Nữ','ngaysinhNV'=>'1972-7-17','sdtNV'=>'0909794556','emailNV'=>'lannt@gmail.com','ngayvaoNV'=>'2005-3-1','trangthaiNV'=>'Nghỉ việc','idBPNV'=>4],
            ['maNV'=>'ACT002','hotenNV'=>'Lê Ngọc Thanh','gioitinhNV'=>'Nữ','ngaysinhNV'=>'1978-5-5','sdtNV'=>'0903189033','emailNV'=>'thanhln@gmail.com','ngayvaoNV'=>'2005-5-15','trangthaiNV'=>'Đang làm việc','idBPNV'=>4]
        ]);
        DB::table('khachhang')->insert([
            ['hotenKH'=>'Trần Văn Anh','gioitinhKH'=>'Nam','cmndKH'=>'025561576','sdtKH'=>'0903189234'],
            ['hotenKH'=>'Lê Trinh','gioitinhKH'=>'Nữ','cmndKH'=>'022789054','sdtKH'=>'01671232131'],
            ['hotenKH'=>'Hồ Thanh Tùng','gioitinhKH'=>'Nam','cmndKH'=>'022234578','sdtKH'=>'01623467334'],
            ['hotenKH'=>'Nguyễn Anh Trinh','gioitinhKH'=>'Nữ','cmndKH'=>'027890009','sdtKH'=>'01661238908'],
            ['hotenKH'=>'Trần Văn Anh','gioitinhKH'=>'Nam','cmndKH'=>'021112345','sdtKH'=>'0903567890']
        ]);
        DB::table('mucluong')->insert([
            ['maML'=>'ML0001','luongcbML'=>5300000,'phucapML'=>1500000,'idNVML'=>1],
            ['maML'=>'ML0002','luongcbML'=>5700000,'phucapML'=>500000,'idNVML'=>2],
            ['maML'=>'ML0003','luongcbML'=>4500000,'phucapML'=>400000,'idNVML'=>3],
            ['maML'=>'ML0004','luongcbML'=>3900000,'phucapML'=>500000,'idNVML'=>4],
            ['maML'=>'ML0005','luongcbML'=>5100000,'phucapML'=>500000,'idNVML'=>5]
        ]);

    }
	
}