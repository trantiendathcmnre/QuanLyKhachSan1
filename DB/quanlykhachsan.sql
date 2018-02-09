-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 09, 2018 at 10:47 AM
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
(1, 'SALE', 'Sale'),
(2, 'MANAGER', 'Quản lý'),
(3, 'RECEPTION', 'Lễ tân'),
(4, 'ACCOUNTANT', 'Kế toán');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

DROP TABLE IF EXISTS `chitiethoadon`;
CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `idHD` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maHD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaylapHD` datetime NOT NULL,
  `phuthuHD` double(8,2) NOT NULL,
  `tongtienHD` double(8,2) NOT NULL,
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
  `dongiaDV` double(8,2) NOT NULL,
  PRIMARY KEY (`idDV`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`idDV`, `maDV`, `tenDV`, `donviDV`, `soluongDV`, `dongiaDV`) VALUES
(1, 'GIATUI', 'Giặt ủi', 'Bộ', 1, 15000.00),
(2, 'NUOCSUOI', 'Nước suối', 'Chai', 1, 10000.00),
(3, 'HEINEKEN', 'Bia Heineken', 'Lon', 1, 25000.00),
(4, 'TIGER', 'Bia Tiger', 'Lon', 1, 20000.00),
(5, 'REDBULL', 'Bò cụng', 'Lon', 1, 15000.00),
(6, 'TWISTER', 'Cam ép Twister', 'Lon', 1, 15000.00),
(7, 'COCA', 'Cocacola', 'Lon', 1, 15000.00),
(8, 'DRTHANH', 'Trà Dr Thanh', 'Chai', 1, 15000.00),
(9, 'NUOCYEN', 'Nước yến', 'Lon', 1, 15000.00),
(10, 'SUACHUA', 'Sữa chua', 'Hộp', 1, 10000.00),
(11, 'SUATUOI', 'Sữa tươi', 'Lon', 1, 15000.00),
(12, 'BATLUA', 'Bật lửa', 'Cái', 1, 4000.00),
(13, 'CARAVEN', 'Thuốc Caraven', 'Gói', 1, 18000.00);

-- --------------------------------------------------------

--
-- Table structure for table `giaphong`
--

DROP TABLE IF EXISTS `giaphong`;
CREATE TABLE IF NOT EXISTS `giaphong` (
  `idGP` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maGP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giaGP` double(8,2) NOT NULL,
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
  `maKH` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotenKH` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinhKH` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinhKH` datetime DEFAULT NULL,
  `cmndKH` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachiKH` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdtKH` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idKH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `luongcbML` double(8,2) NOT NULL,
  `phucapML` double(8,2) NOT NULL DEFAULT '300000.00',
  `tamungML` double(8,2) NOT NULL DEFAULT '0.00',
  `khautruML` double(8,2) NOT NULL DEFAULT '0.00',
  `nghiphepML` double(8,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`idML`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE IF NOT EXISTS `nhanvien` (
  `idNV` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `maNV` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotenNV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdtNV` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailNV` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngayvaoNV` datetime NOT NULL,
  `trangthaiNV` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idBPNV` int(10) UNSIGNED NOT NULL,
  `idMLNV` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`idNV`),
  UNIQUE KEY `nhanvien_manv_unique` (`maNV`),
  KEY `nhanvien_idbpnv_foreign` (`idBPNV`),
  KEY `nhanvien_idmlnv_foreign` (`idMLNV`)
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`idPHG`, `maPHG`, `tenPHG`, `tiennghiPHG`, `ghichuPHG`, `songuoiPHG`, `sogiuongPHG`, `trangthaiPHG`, `idTPHG`, `idLPPHG`) VALUES
(1, 'P101', '101', 'Tivi, tủ lạnh, máy lạnh, máy giặt sấy,bồn tắm, phòng xông hơi', NULL, 4, 2, 'trống', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

DROP TABLE IF EXISTS `taikhoan`;
CREATE TABLE IF NOT EXISTS `taikhoan` (
  `idTK` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tenTK` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhauTK` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idTK`),
  UNIQUE KEY `taikhoan_tentk_unique` (`tenTK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'DOWNSTAIRS', 'Tầng trệt'),
(2, 'FLOOR1', 'Tầng 1'),
(3, 'FLOOR2', 'Tầng 2'),
(4, 'FLOOR3', 'Tầng 3');

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
  `tratruocTP` double(8,2) NOT NULL,
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
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_idbpnv_foreign` FOREIGN KEY (`idBPNV`) REFERENCES `bophan` (`idBP`),
  ADD CONSTRAINT `nhanvien_idmlnv_foreign` FOREIGN KEY (`idMLNV`) REFERENCES `mucluong` (`idML`);

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
