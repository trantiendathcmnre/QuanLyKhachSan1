-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 20, 2018 at 10:40 AM
-- Server version: 5.7.19
-- PHP Version: 7.0.23

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
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maBP` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenBP` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienthoaiBP` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `bophan_mabp_unique` (`maBP`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bophan`
--

INSERT INTO `bophan` (`id`, `maBP`, `tenBP`, `dienthoaiBP`) VALUES
(1, 'SAL', 'Sale', '0837974551'),
(2, 'MNG', 'Quản lý', '0832345789'),
(3, 'RCP', 'Lễ tân', '0831222445'),
(4, 'ACT', 'Kế toán', '0839988654');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

DROP TABLE IF EXISTS `chitiethoadon`;
CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maHD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaylapHD` datetime NOT NULL,
  `phuthuHD` double(10,2) NOT NULL,
  `tongtienHD` double(10,2) NOT NULL,
  `idDVHD` int(10) UNSIGNED NOT NULL,
  `idTPHD` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `chitiethoadon_iddvhd_foreign` (`idDVHD`),
  KEY `chitiethoadon_idtphd_foreign` (`idTPHD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

DROP TABLE IF EXISTS `dichvu`;
CREATE TABLE IF NOT EXISTS `dichvu` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maDV` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenDV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donviDV` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluongDV` int(11) NOT NULL,
  `dongiaDV` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`id`, `maDV`, `tenDV`, `donviDV`, `soluongDV`, `dongiaDV`) VALUES
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
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maGP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giaGP` double(10,2) NOT NULL,
  `idKGGP` int(10) UNSIGNED NOT NULL,
  `idLPGP` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `giaphong_idkggp_foreign` (`idKGGP`),
  KEY `giaphong_idlpgp_foreign` (`idLPGP`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giaphong`
--

INSERT INTO `giaphong` (`id`, `maGP`, `giaGP`, `idKGGP`, `idLPGP`) VALUES
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
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `hotenKH` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinhKH` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinhKH` datetime DEFAULT NULL,
  `cmndKH` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachiKH` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdtKH` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luotthueKH` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id`, `hotenKH`, `gioitinhKH`, `ngaysinhKH`, `cmndKH`, `diachiKH`, `sdtKH`, `luotthueKH`) VALUES
(1, 'Trần Văn Anh', 'Nam', NULL, '025561576', NULL, '0903189234', 1),
(2, 'Lê Trinh', 'Nữ', NULL, '022789054', NULL, '01671232131', 1),
(3, 'Hồ Thanh Tùng', 'Nam', NULL, '022234578', NULL, '01623467334', 1),
(4, 'Nguyễn Anh Trinh', 'Nữ', NULL, '027890009', NULL, '01661238908', 1),
(5, 'Cao Thanh Duy', 'Nam', NULL, '021112345', NULL, '0903567890', 1);

-- --------------------------------------------------------

--
-- Table structure for table `khunggio`
--

DROP TABLE IF EXISTS `khunggio`;
CREATE TABLE IF NOT EXISTS `khunggio` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maKG` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenKG` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dieukienKG` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khunggio`
--

INSERT INTO `khunggio` (`id`, `maKG`, `tenKG`, `dieukienKG`) VALUES
(1, 'KG1', 'Theo Giờ', '1 giờ - 11 giờ'),
(2, 'KG2', 'Qua đêm', '12 giờ - 23 giờ'),
(3, 'KG3', 'Theo Ngày', '24 giờ trở đi');

-- --------------------------------------------------------

--
-- Table structure for table `loaiphong`
--

DROP TABLE IF EXISTS `loaiphong`;
CREATE TABLE IF NOT EXISTS `loaiphong` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tenLP` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaiphong`
--

INSERT INTO `loaiphong` (`id`, `tenLP`) VALUES
(1, 'Standard'),
(2, 'Superior'),
(3, 'Deluxe');

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
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maML` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luongcbML` double(10,2) NOT NULL,
  `phucapML` double(10,2) NOT NULL DEFAULT '300000.00',
  `tamungML` double(10,2) NOT NULL DEFAULT '0.00',
  `khautruML` double(10,2) NOT NULL DEFAULT '0.00',
  `nghiphepML` int(11) NOT NULL DEFAULT '0',
  `idNVML` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mucluong_idnvml_foreign` (`idNVML`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mucluong`
--

INSERT INTO `mucluong` (`id`, `maML`, `luongcbML`, `phucapML`, `tamungML`, `khautruML`, `nghiphepML`, `idNVML`) VALUES
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
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maNV` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotenNV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinhNV` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinhNV` datetime NOT NULL,
  `sdtNV` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailNV` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngayvaoNV` datetime NOT NULL,
  `trangthaiNV` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idBPNV` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nhanvien_manv_unique` (`maNV`),
  KEY `nhanvien_idbpnv_foreign` (`idBPNV`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `maNV`, `hotenNV`, `gioitinhNV`, `ngaysinhNV`, `sdtNV`, `emailNV`, `ngayvaoNV`, `trangthaiNV`, `idBPNV`) VALUES
(1, 'SAL001', 'Hồ Thanh Sơn', 'Nam', '1950-05-02 00:00:00', '01667526884', 'sonth@gmail.com', '2004-04-11 00:00:00', 'Đang làm việc', 1),
(2, 'RCP001', 'Trần Tâm Thanh', 'Nam', '1965-07-02 00:00:00', '01623467778', 'thanhtt@gmail.com', '2004-04-21 00:00:00', 'Đang làm việc', 3),
(3, 'MNG001', 'Đỗ Nghiêm Phụng', 'Nam', '1950-08-01 00:00:00', '0909797075', 'phungdn@gmail.com', '2005-01-21 00:00:00', 'Đang làm việc', 2),
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
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maPHG` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenPHG` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiennghiPHG` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichuPHG` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `songuoiPHG` int(11) NOT NULL,
  `sogiuongPHG` int(11) NOT NULL,
  `trangthaiPHG` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'trống',
  `idTPHG` int(10) UNSIGNED NOT NULL,
  `idLPPHG` int(10) UNSIGNED NOT NULL,
  `luotthuePHG` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `phong_idtphg_foreign` (`idTPHG`),
  KEY `phong_idlpphg_foreign` (`idLPPHG`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`id`, `maPHG`, `tenPHG`, `tiennghiPHG`, `ghichuPHG`, `songuoiPHG`, `sogiuongPHG`, `trangthaiPHG`, `idTPHG`, `idLPPHG`, `luotthuePHG`) VALUES
(1, 'P101', 'Phòng 101', 'Tiện nghi phổ thông', 'chưa dọn', 4, 2, 'trống', 1, 1, 0),
(2, 'D102', 'VIP 102', 'Tivi, tủ lạnh, máy lạnh, máy giặt sấy,bồn tắm, phòng xông hơi', 'chưa dọn', 4, 2, 'trống', 1, 3, 0),
(3, 'S103', 'Phòng 103', 'Tivi, tủ lạnh', NULL, 4, 2, 'trống', 1, 2, 0),
(4, 'D104', 'VIP 104', 'Tivi, tủ lạnh, máy lạnh, máy giặt sấy,bồn tắm, phòng xông hơi', NULL, 4, 2, 'trống', 1, 3, 0),
(5, 'D105', 'VIP 105', 'Tivi, tủ lạnh, máy lạnh, máy giặt sấy,bồn tắm, phòng xông hơi', NULL, 4, 2, 'trống', 1, 3, 0),
(6, 'P106', 'Phòng 106', 'Tiện nghi phổ thông', 'chưa dọn', 4, 2, 'trống', 1, 1, 0),
(7, 'D107', 'VIP 107', 'Tivi, tủ lạnh, máy lạnh, máy giặt sấy,bồn tắm, phòng xông hơi', 'chưa dọn', 4, 2, 'trống', 1, 3, 0),
(8, 'S108', 'Phòng 108', 'Tivi, tủ lạnh', NULL, 4, 2, 'trống', 1, 2, 0),
(9, 'D109', 'VIP 109', 'Tivi, tủ lạnh, máy lạnh, máy giặt sấy,bồn tắm, phòng xông hơi', 'chưa dọn', 4, 2, 'trống', 1, 3, 0),
(10, 'S110', 'Phòng 110', 'Tivi, tủ lạnh', NULL, 4, 2, 'trống', 1, 2, 0),
(11, 'D201', 'VIP 201', 'Tivi, tủ lạnh, máy lạnh, máy giặt sấy,bồn tắm, phòng xông hơi', 'cần sửa', 2, 1, 'đã đặt', 2, 3, 0),
(12, 'P202', 'Phòng 202', 'Tiện nghi phổ thông', NULL, 4, 2, 'trống', 2, 1, 0),
(13, 'D203', 'Vip 203', 'Tivi, tủ lạnh, máy lạnh, máy giặt sấy,bồn tắm, phòng xông hơi', NULL, 2, 1, 'đang ở', 2, 3, 0),
(14, 'P204', 'Phòng 203', 'Tiện nghi phổ thông', '', 2, 1, 'đang ở', 2, 1, 1),
(15, 'S205', 'Phòng 205', 'Tivi, tủ lạnh, máy lạnh', NULL, 2, 1, 'đã đặt', 2, 2, 2),
(16, 'S206', 'Phòng 206', 'Tivi, tủ lạnh, máy lạnh', 'chưa dọn', 4, 2, 'trống', 2, 2, 0),
(17, 'S207', 'Phòng 207', 'Tivi, tủ lạnh, máy lạnh', 'chưa dọn', 2, 1, 'đã đặt', 2, 2, 0),
(18, 'P208', 'Phòng 208', 'Tiện nghi phổ thông', NULL, 2, 1, 'trống', 2, 1, 8),
(19, 'P209', 'Phòng 209', 'Tiện nghi phổ thông', NULL, 4, 2, 'trống', 2, 1, 0),
(20, 'P210', 'Phòng 210', 'Tiện nghi phổ thông', 'chưa dọn', 2, 1, 'trống', 2, 1, 0),
(21, 'P301', 'Phòng 301', 'Tiện nghi phổ thông', 'chưa dọn', 2, 1, 'trống', 3, 1, 11),
(22, 'P302', 'Phòng 302', 'Tiện nghi phổ thông', NULL, 2, 1, 'trống', 3, 1, 0),
(23, 'S303', 'Phòng 303', 'Tivi, tủ lạnh, máy lạnh', NULL, 2, 1, 'trống', 3, 2, 0),
(24, 'S304', 'Phòng 304', 'Tivi, tủ lạnh, máy lạnh', 'chưa dọn', 2, 1, 'đã đặt', 3, 2, 0),
(25, 'S305', 'Phòng 305', 'Tivi, tủ lạnh, máy lạnh', NULL, 2, 1, 'trống', 3, 2, 0),
(26, 'S306', 'Phòng 306', 'Tivi, tủ lạnh, máy lạnh', 'cần sửa', 2, 1, 'trống', 3, 2, 0),
(27, 'S307', 'Phòng 307', 'Tivi, tủ lạnh, máy lạnh', NULL, 2, 1, 'đã đặt', 3, 2, 0),
(28, 'D308', 'VIP 308', 'Tivi, tủ lạnh, máy lạnh, máy giặt sấy,bồn tắm, phòng xông hơi', NULL, 2, 1, 'trống', 3, 3, 0),
(29, 'S309', 'Phòng 309', 'Tivi, tủ lạnh, máy lạnh', NULL, 2, 1, 'trống', 3, 2, 0),
(30, 'S310', 'Phòng 310', 'Tivi, tủ lạnh, máy lạnh', NULL, 2, 1, 'trống', 3, 2, 0),
(31, 'P401', 'Phòng 401', 'Tiện nghi phổ thông', NULL, 2, 1, 'trống', 4, 1, 0),
(32, 'D402', 'VIP 402', 'Tivi, tủ lạnh, máy lạnh, máy giặt sấy,bồn tắm, phòng xông hơi', NULL, 2, 1, 'đã đặt', 4, 3, 0),
(33, 'S403', 'Phòng 403', 'Tivi, tủ lạnh, máy lạnh', 'cần sửa', 4, 2, 'trống', 4, 2, 0),
(34, 'P404', 'Phòng 404', 'Tiện nghi phổ thông', NULL, 2, 1, 'đang ở', 4, 1, 0),
(35, 'P405', 'Phòng 405', 'Tiện nghi phổ thông', NULL, 2, 1, 'đang ở', 4, 1, 0),
(36, 'S406', 'Phòng 406', 'Tivi, tủ lạnh, máy lạnh', NULL, 2, 1, 'đang ở', 4, 2, 0),
(37, 'S407', 'Phòng 407', 'Tivi, tủ lạnh, máy lạnh', NULL, 2, 1, 'đang ở', 4, 2, 0),
(38, 'P408', 'Phòng 408', 'Tiện nghi phổ thông', NULL, 4, 2, 'đang ở', 4, 1, 0),
(39, 'P409', 'Phòng 409', 'Tiện nghi phổ thông', NULL, 2, 1, 'đang ở', 4, 1, 0),
(40, 'P410', 'Phòng 410', 'Tiện nghi phổ thông', NULL, 2, 1, 'đang ở', 4, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tang`
--

DROP TABLE IF EXISTS `tang`;
CREATE TABLE IF NOT EXISTS `tang` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tenT` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tang`
--

INSERT INTO `tang` (`id`, `tenT`) VALUES
(1, 'Tầng trệt'),
(2, 'Tầng 1'),
(3, 'Tầng 2'),
(4, 'Tầng 3'),
(5, 'Tầng 4'),
(6, 'Tầng 4');

-- --------------------------------------------------------

--
-- Table structure for table `thongtinkhachsan`
--

DROP TABLE IF EXISTS `thongtinkhachsan`;
CREATE TABLE IF NOT EXISTS `thongtinkhachsan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `viettat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioithieu` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thongtinkhachsan`
--

INSERT INTO `thongtinkhachsan` (`id`, `ten`, `viettat`, `diachi`, `dienthoai`, `fax`, `email`, `website`, `gioithieu`) VALUES
(1, 'Khách sạn 307', '307HOTEL', 'TP HCM', '01677939640', '02803848484', '307hotel@gmail.com', '307hotel.com.vn', 'Khách sạn 307 tọa lạc gần sân bay quốc tế và quốc nội Tân Sơn Nhất của thành phố Hồ Chí Minh và khu vực phía Nam. Là cánh cửa đầu tiên của TP. HCM mở ra đón bạn bè quốc tế đến với các di sản thiên nhiên - văn hóa nổi tiếng thế giới và các trung tâm thương mại lớn của Việt Nam, Lào và Campuchia.');

-- --------------------------------------------------------

--
-- Table structure for table `thuephong`
--

DROP TABLE IF EXISTS `thuephong`;
CREATE TABLE IF NOT EXISTS `thuephong` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maTP` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaythueTP` date NOT NULL,
  `giothueTP` time NOT NULL,
  `ngaytraTP` date NOT NULL,
  `giotraTP` time NOT NULL,
  `tratruocTP` double(10,2) NOT NULL,
  `tgluutruTP` int(11) NOT NULL,
  `idNVTP` int(10) UNSIGNED NOT NULL,
  `idKHTP` int(10) UNSIGNED NOT NULL,
  `idPHGTP` int(10) UNSIGNED NOT NULL,
  `idGPTP` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `thuephong_idnvtp_foreign` (`idNVTP`),
  KEY `thuephong_idkhtp_foreign` (`idKHTP`),
  KEY `thuephong_idphgtp_foreign` (`idPHGTP`),
  KEY `thuephong_idgptp_foreign` (`idGPTP`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thuephong`
--

INSERT INTO `thuephong` (`id`, `maTP`, `ngaythueTP`, `giothueTP`, `ngaytraTP`, `giotraTP`, `tratruocTP`, `tgluutruTP`, `idNVTP`, `idKHTP`, `idPHGTP`, `idGPTP`) VALUES
(1, 'TP0001', '2018-02-17', '08:00:00', '2018-02-17', '10:00:00', 0.00, 2, 2, 2, 28, 3);

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
  `pemiss` bit(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `address`, `avatar`, `pemiss`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$HUpQ4an1lNDm/baOdLR3YO0W/Oy7wq5415qr/dDg0FYyhDgxvqJ8C', 'pgDS7iVW9V5M5URULJFh6gsybNYejBzoYc014RRkVwRx20fPPV6u10hMcAcB', NULL, NULL, '', 'images/av.jpg', b'1'),
(2, 'nhan vien', 'nhanvien@gmai.com', '$2y$10$y7ehO./f5bB7eHCAU6KXmOJxT4ODsrUHfI5NPh409lE5KglmhjeqK', NULL, NULL, NULL, '', '', b'0');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_iddvhd_foreign` FOREIGN KEY (`idDVHD`) REFERENCES `dichvu` (`id`),
  ADD CONSTRAINT `chitiethoadon_idtphd_foreign` FOREIGN KEY (`idTPHD`) REFERENCES `thuephong` (`id`);

--
-- Constraints for table `giaphong`
--
ALTER TABLE `giaphong`
  ADD CONSTRAINT `giaphong_idkggp_foreign` FOREIGN KEY (`idKGGP`) REFERENCES `khunggio` (`id`),
  ADD CONSTRAINT `giaphong_idlpgp_foreign` FOREIGN KEY (`idLPGP`) REFERENCES `loaiphong` (`id`);

--
-- Constraints for table `mucluong`
--
ALTER TABLE `mucluong`
  ADD CONSTRAINT `mucluong_idnvml_foreign` FOREIGN KEY (`idNVML`) REFERENCES `nhanvien` (`id`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_idbpnv_foreign` FOREIGN KEY (`idBPNV`) REFERENCES `bophan` (`id`);

--
-- Constraints for table `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `phong_idlpphg_foreign` FOREIGN KEY (`idLPPHG`) REFERENCES `loaiphong` (`id`),
  ADD CONSTRAINT `phong_idtphg_foreign` FOREIGN KEY (`idTPHG`) REFERENCES `tang` (`id`);

--
-- Constraints for table `thuephong`
--
ALTER TABLE `thuephong`
  ADD CONSTRAINT `thuephong_idgptp_foreign` FOREIGN KEY (`idGPTP`) REFERENCES `giaphong` (`id`),
  ADD CONSTRAINT `thuephong_idkhtp_foreign` FOREIGN KEY (`idKHTP`) REFERENCES `khachhang` (`id`),
  ADD CONSTRAINT `thuephong_idnvtp_foreign` FOREIGN KEY (`idNVTP`) REFERENCES `nhanvien` (`id`),
  ADD CONSTRAINT `thuephong_idphgtp_foreign` FOREIGN KEY (`idPHGTP`) REFERENCES `phong` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
