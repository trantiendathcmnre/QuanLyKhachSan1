-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 13, 2018 at 08:31 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlykhachsan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bophan`
--

DROP TABLE IF EXISTS `bophan`;
CREATE TABLE IF NOT EXISTS `bophan` (
  `idBP` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maBP` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenBP` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idBP`),
  UNIQUE KEY `bophan_mabp_unique` (`maBP`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bophan`
--

INSERT INTO `bophan` (`idBP`, `maBP`, `tenBP`) VALUES
(1, 'SAL', 'Sale'),
(2, 'MNG', 'Quản lý'),
(3, 'RCP', 'Lễ tân'),
(4, 'ACT', 'Kế toán');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

DROP TABLE IF EXISTS `chitiethoadon`;
CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `idHD` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maHD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaylapHD` datetime NOT NULL,
  `phuthuHD` double(10,2) NOT NULL,
  `tongtienHD` double(10,2) NOT NULL,
  `idDVHD` int(10) UNSIGNED NOT NULL,
  `idTPHD` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`idHD`),
  KEY `chitiethoadon_iddvhd_foreign` (`idDVHD`),
  KEY `chitiethoadon_idtphd_foreign` (`idTPHD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

DROP TABLE IF EXISTS `dichvu`;
CREATE TABLE IF NOT EXISTS `dichvu` (
  `idDV` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maDV` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenDV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donviDV` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluongDV` int(11) NOT NULL,
  `dongiaDV` double(10,2) NOT NULL,
  PRIMARY KEY (`idDV`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`idDV`, `maDV`, `tenDV`, `donviDV`, `soluongDV`, `dongiaDV`) VALUES
(1, 'GU', 'Giặt ủi', 'Bộ', 1, 15000.00),
(2, 'NS', 'Nước suối', 'Chai', 1, 10000.00),
(3, 'HNK', 'Bia Heineken', 'Lon', 1, 25000.00),
(4, 'TG', 'Bia Tiger', 'Lon', 1, 20000.00),
(5, 'RB', 'Bò cụng', 'Lon', 1, 15000.00),
(6, 'TWT', 'Cam ép Twister', 'Lon', 1, 15000.00),
(7, 'COCA', 'Cocacola', 'Lon', 1, 15000.00),
(8, 'DRT', 'Trà Dr Thanh', 'Chai', 1, 15000.00),
(9, 'NUY', 'Nước yến', 'Lon', 1, 15000.00),
(10, 'SC', 'Sữa chua', 'Hộp', 1, 10000.00),
(11, 'ST', 'Sữa tươi', 'Lon', 1, 15000.00),
(12, 'BL', 'Bật lửa', 'Cái', 1, 4000.00),
(13, 'CRV', 'Thuốc Caraven', 'Gói', 1, 18000.00);

-- --------------------------------------------------------

--
-- Table structure for table `giaphong`
--

DROP TABLE IF EXISTS `giaphong`;
CREATE TABLE IF NOT EXISTS `giaphong` (
  `idGP` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maGP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giaGP` double(10,2) NOT NULL,
  `idKGGP` int(10) UNSIGNED NOT NULL,
  `idLPGP` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`idGP`),
  KEY `giaphong_idkggp_foreign` (`idKGGP`),
  KEY `giaphong_idlpgp_foreign` (`idLPGP`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giaphong`
--

INSERT INTO `giaphong` (`idGP`, `maGP`, `giaGP`, `idKGGP`, `idLPGP`) VALUES
(1, 'STDKG1', 50000.00, 1, 1),
(2, 'SUPKG1', 70000.00, 1, 2),
(3, 'DLXKG1', 90000.00, 1, 3),
(4, 'STDKG2', 150000.00, 2, 1),
(5, 'SUPKG2', 300000.00, 2, 2),
(6, 'DLXKG2', 450000.00, 2, 3),
(7, 'STDKG3', 250000.00, 3, 1),
(8, 'SUPKG3', 350000.00, 3, 2),
(9, 'DLXKG3', 500000.00, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `idKH` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `hotenKH` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinhKH` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinhKH` datetime DEFAULT NULL,
  `cmndKH` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachiKH` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdtKH` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idKH`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`idKH`, `hotenKH`, `gioitinhKH`, `ngaysinhKH`, `cmndKH`, `diachiKH`, `sdtKH`) VALUES
(1, 'Trần Văn Anh', 'Nam', NULL, '025561576', NULL, '0903189234'),
(2, 'Lê Trinh', 'Nữ', NULL, '022789054', NULL, '01671232131'),
(3, 'Hồ Thanh Tùng', 'Nam', NULL, '022234578', NULL, '01623467334'),
(4, 'Nguyễn Anh Trinh', 'Nữ', NULL, '027890009', NULL, '01661238908'),
(5, 'Trần Văn Anh', 'Nam', NULL, '021112345', NULL, '0903567890');

-- --------------------------------------------------------

--
-- Table structure for table `khunggio`
--

DROP TABLE IF EXISTS `khunggio`;
CREATE TABLE IF NOT EXISTS `khunggio` (
  `idKG` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maKG` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenKG` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dieukienKG` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idKG`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khunggio`
--

INSERT INTO `khunggio` (`idKG`, `maKG`, `tenKG`, `dieukienKG`) VALUES
(1, 'KG1', 'Theo Giờ', '1 giờ - 11 giờ'),
(2, 'KG2', 'Qua đêm', '12 giờ - 23 giờ'),
(3, 'KG3', 'Theo Ngày', '24 giờ trở đi');

-- --------------------------------------------------------

--
-- Table structure for table `loaiphong`
--

DROP TABLE IF EXISTS `loaiphong`;
CREATE TABLE IF NOT EXISTS `loaiphong` (
  `idLP` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maLP` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenLP` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idLP`),
  UNIQUE KEY `loaiphong_malp_unique` (`maLP`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaiphong`
--

INSERT INTO `loaiphong` (`idLP`, `maLP`, `tenLP`) VALUES
(1, 'STD', 'Standard'),
(2, 'SUP', 'Superior'),
(3, 'DLX', 'Deluxe');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_02_09_014241_createdbquanlykhachsan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mucluong`
--

DROP TABLE IF EXISTS `mucluong`;
CREATE TABLE IF NOT EXISTS `mucluong` (
  `idML` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maML` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luongcbML` double(10,2) NOT NULL,
  `phucapML` double(10,2) NOT NULL DEFAULT '300000.00',
  `tamungML` double(10,2) NOT NULL DEFAULT '0.00',
  `khautruML` double(10,2) NOT NULL DEFAULT '0.00',
  `nghiphepML` int(11) NOT NULL DEFAULT '0',
  `idNVML` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`idML`),
  KEY `mucluong_idnvml_foreign` (`idNVML`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mucluong`
--

INSERT INTO `mucluong` (`idML`, `maML`, `luongcbML`, `phucapML`, `tamungML`, `khautruML`, `nghiphepML`, `idNVML`) VALUES
(1, 'ML0001', 5300000.00, 1500000.00, 0.00, 0.00, 0, 1),
(2, 'ML0002', 5700000.00, 500000.00, 0.00, 0.00, 0, 2),
(3, 'ML0003', 4500000.00, 400000.00, 0.00, 0.00, 0, 3),
(4, 'ML0004', 3900000.00, 500000.00, 0.00, 0.00, 0, 4),
(5, 'ML0005', 5100000.00, 500000.00, 0.00, 0.00, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE IF NOT EXISTS `nhanvien` (
  `idNV` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maNV` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotenNV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinhNV` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinhNV` datetime NOT NULL,
  `sdtNV` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailNV` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngayvaoNV` datetime NOT NULL,
  `trangthaiNV` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idBPNV` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`idNV`),
  UNIQUE KEY `nhanvien_manv_unique` (`maNV`),
  KEY `nhanvien_idbpnv_foreign` (`idBPNV`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`idNV`, `maNV`, `hotenNV`, `gioitinhNV`, `ngaysinhNV`, `sdtNV`, `emailNV`, `ngayvaoNV`, `trangthaiNV`, `idBPNV`) VALUES
(1, 'SAL001', 'Hồ Thanh Sơn', 'Nam', '1950-05-02 00:00:00', '01667526884', 'sonth@gmail.com', '2004-04-11 00:00:00', 'Đang làm việc', 1),
(2, 'RCP001', 'Trần Tâm Thanh', 'Nam', '1965-07-02 00:00:00', '01623467778', 'thanhtt@gmail.com', '2004-04-21 00:00:00', 'Đang làm việc', 3),
(3, 'MNG001', 'Đỗ Nghiêm Phụng', 'Nam', '1950-08-01 00:00:00', '0909797075', 'sonth@gmail.com', '2005-01-21 00:00:00', 'Đang làm việc', 2),
(4, 'ACT001', 'Nguyễn Tô Lan', 'Nữ', '1972-07-17 00:00:00', '0909794556', 'lannt@gmail.com', '2005-03-01 00:00:00', 'Nghỉ việc', 4),
(5, 'ACT002', 'Lê Ngọc Thanh', 'Nữ', '1978-05-05 00:00:00', '0903189033', 'thanhln@gmail.com', '2005-05-15 00:00:00', 'Đang làm việc', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

DROP TABLE IF EXISTS `phong`;
CREATE TABLE IF NOT EXISTS `phong` (
  `idPHG` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maPHG` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenPHG` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiennghiPHG` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichuPHG` longtext COLLATE utf8mb4_unicode_ci,
  `songuoiPHG` int(11) NOT NULL,
  `sogiuongPHG` int(11) NOT NULL,
  `trangthaiPHG` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'trống',
  `idTPHG` int(10) UNSIGNED NOT NULL,
  `idLPPHG` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`idPHG`),
  UNIQUE KEY `phong_maphg_unique` (`maPHG`),
  KEY `phong_idtphg_foreign` (`idTPHG`),
  KEY `phong_idlpphg_foreign` (`idLPPHG`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`idPHG`, `maPHG`, `tenPHG`, `tiennghiPHG`, `ghichuPHG`, `songuoiPHG`, `sogiuongPHG`, `trangthaiPHG`, `idTPHG`, `idLPPHG`) VALUES
(1, 'P101', '101', 'Tiện nghi phổ thông', NULL, 4, 2, 'trống', 1, 1),
(2, 'P102', '101', 'Tivi, tủ lạnh, máy lạnh, máy giặt sấy,bồn tắm, phòng xông hơi', NULL, 4, 2, 'trống', 1, 3),
(3, 'P103', '101', 'Tivi, tủ lạnh', NULL, 4, 2, 'trống', 1, 2),
(4, 'P104', '101', 'Tivi, tủ lạnh, máy lạnh, máy giặt sấy,bồn tắm, phòng xông hơi', NULL, 4, 2, 'trống', 1, 3),
(5, 'P105', '101', 'Tivi, tủ lạnh, máy lạnh, máy giặt sấy,bồn tắm, phòng xông hơi', NULL, 4, 2, 'trống', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tang`
--

DROP TABLE IF EXISTS `tang`;
CREATE TABLE IF NOT EXISTS `tang` (
  `idT` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maT` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenT` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idT`),
  UNIQUE KEY `tang_mat_unique` (`maT`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tang`
--

INSERT INTO `tang` (`idT`, `maT`, `tenT`) VALUES
(1, 'DWS', 'Tầng trệt'),
(2, 'FL1', 'Tầng 1'),
(3, 'FL2', 'Tầng 2'),
(4, 'FL3', 'Tầng 3');

-- --------------------------------------------------------

--
-- Table structure for table `thuephong`
--

DROP TABLE IF EXISTS `thuephong`;
CREATE TABLE IF NOT EXISTS `thuephong` (
  `idTP` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maTP` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaythueTP` datetime NOT NULL,
  `ngaytraTP` datetime NOT NULL,
  `tratruocTP` double(10,2) NOT NULL,
  `tgluutruTP` int(11) NOT NULL,
  `idNVTP` int(10) UNSIGNED NOT NULL,
  `idKHTP` int(10) UNSIGNED NOT NULL,
  `idPHGTP` int(10) UNSIGNED NOT NULL,
  `idGPTP` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`idTP`),
  KEY `thuephong_idnvtp_foreign` (`idNVTP`),
  KEY `thuephong_idkhtp_foreign` (`idKHTP`),
  KEY `thuephong_idphgtp_foreign` (`idPHGTP`),
  KEY `thuephong_idgptp_foreign` (`idGPTP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `address`, `avatar`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$HUpQ4an1lNDm/baOdLR3YO0W/Oy7wq5415qr/dDg0FYyhDgxvqJ8C', 'YgBG2z98dq3URBl5KbCd6CrNSvJjgIfUeN1zaEzU0ugZKfXS0ZqIUnJxNdRn', NULL, NULL, '', 'images/av.jpg'),
(2, 'nhan vien', 'nhanvien@gmai.com', '$2y$10$y7ehO./f5bB7eHCAU6KXmOJxT4ODsrUHfI5NPh409lE5KglmhjeqK', NULL, NULL, NULL, '', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_iddvhd_foreign` FOREIGN KEY (`idDVHD`) REFERENCES `dichvu` (`idDV`),
  ADD CONSTRAINT `chitiethoadon_idtphd_foreign` FOREIGN KEY (`idTPHD`) REFERENCES `thuephong` (`idTP`);

--
-- Constraints for table `giaphong`
--
ALTER TABLE `giaphong`
  ADD CONSTRAINT `giaphong_idkggp_foreign` FOREIGN KEY (`idKGGP`) REFERENCES `khunggio` (`idKG`),
  ADD CONSTRAINT `giaphong_idlpgp_foreign` FOREIGN KEY (`idLPGP`) REFERENCES `loaiphong` (`idLP`);

--
-- Constraints for table `mucluong`
--
ALTER TABLE `mucluong`
  ADD CONSTRAINT `mucluong_idnvml_foreign` FOREIGN KEY (`idNVML`) REFERENCES `nhanvien` (`idNV`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_idbpnv_foreign` FOREIGN KEY (`idBPNV`) REFERENCES `bophan` (`idBP`);

--
-- Constraints for table `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `phong_idlpphg_foreign` FOREIGN KEY (`idLPPHG`) REFERENCES `loaiphong` (`idLP`),
  ADD CONSTRAINT `phong_idtphg_foreign` FOREIGN KEY (`idTPHG`) REFERENCES `tang` (`idT`);

--
-- Constraints for table `thuephong`
--
ALTER TABLE `thuephong`
  ADD CONSTRAINT `thuephong_idgptp_foreign` FOREIGN KEY (`idGPTP`) REFERENCES `giaphong` (`idGP`),
  ADD CONSTRAINT `thuephong_idkhtp_foreign` FOREIGN KEY (`idKHTP`) REFERENCES `khachhang` (`idKH`),
  ADD CONSTRAINT `thuephong_idnvtp_foreign` FOREIGN KEY (`idNVTP`) REFERENCES `nhanvien` (`idNV`),
  ADD CONSTRAINT `thuephong_idphgtp_foreign` FOREIGN KEY (`idPHGTP`) REFERENCES `phong` (`idPHG`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
