-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th5 11, 2020 lúc 08:18 AM
-- Phiên bản máy phục vụ: 5.7.26
-- Phiên bản PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dienthoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `MaBanner` int(11) NOT NULL AUTO_INCREMENT,
  `TenBanner` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `Ngay` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Hidden` int(11) NOT NULL,
  PRIMARY KEY (`MaBanner`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`MaBanner`, `TenBanner`, `Ngay`, `Hidden`) VALUES
(1, 'banner1.jpg', '2019-06-01 09:17:13', 0),
(2, 'banner1.jpg\r\n', '2019-06-01 09:17:33', 0),
(3, 'banner1.jpg\r\n', '2019-06-01 09:18:29', 0),
(4, 'banner1.jpg', '2019-06-01 09:19:04', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

DROP TABLE IF EXISTS `chitiethoadon`;
CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `id_hoadon` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `MaDienThoai` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `ngaytaohoadon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id_hoadon`, `MaDienThoai`, `soluong`, `price`, `ngaytaohoadon`) VALUES
('15', '22', 1, 30000000, '2019-06-15 09:39:00'),
('15', '21', 1, 30000000, '2019-06-15 09:39:00'),
('16', '22', 1, 30000000, '2019-06-15 09:40:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dienthoai`
--

DROP TABLE IF EXISTS `dienthoai`;
CREATE TABLE IF NOT EXISTS `dienthoai` (
  `MaDienThoai` int(11) NOT NULL AUTO_INCREMENT,
  `MaLoaiDienThoai` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `TenDienThoai` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `Hidden` int(1) NOT NULL,
  `GhiChu` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `Gia` int(11) NOT NULL,
  `Ngay` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`MaDienThoai`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dienthoai`
--

INSERT INTO `dienthoai` (`MaDienThoai`, `MaLoaiDienThoai`, `TenDienThoai`, `HinhAnh`, `Hidden`, `GhiChu`, `Gia`, `Ngay`) VALUES
(1, '1', 'Iphone X', '1.jpg', 0, '123213', 90000000, '2019-06-15 08:35:21'),
(2, '1', 'Iphone 9', '1.jpg', 0, '123213', 40000000, '2019-06-01 10:14:16'),
(3, '1', 'Iphone X', '1.jpg', 0, '123213', 95000000, '2019-06-15 08:35:34'),
(4, '1', 'Iphone X', '1.jpg', 0, '123213', 40000000, '2019-06-01 10:14:16'),
(5, '1', 'Iphone X', '1.jpg', 0, '123213', 40000000, '2019-06-01 10:14:16'),
(6, '1', 'Iphone X', '1.jpg', 0, '123213', 40000000, '2019-06-01 10:14:16'),
(7, '1', 'Iphone X', '1.jpg', 0, '123213', 40000000, '2019-06-01 10:14:16'),
(8, '1', 'Iphone X', '1.jpg', 0, '123213', 40000000, '2019-06-01 10:14:16'),
(9, '1', 'Iphone X', '1.jpg', 0, '123213', 40000000, '2019-06-01 10:14:16'),
(10, '1', 'Iphone X', '1.jpg', 0, '123213', 40000000, '2019-06-01 10:14:16'),
(11, '1', 'Iphone X', '1.jpg', 0, '123213', 40000000, '2019-06-01 10:14:16'),
(12, '1', 'Iphone X', '1.jpg', 0, '123213', 40000000, '2019-06-01 10:14:16'),
(13, '1', 'Iphone X', '1.jpg', 0, '123213', 40000000, '2019-06-01 10:14:16'),
(14, '1', 'Iphone X', '1.jpg', 0, '123213', 40000000, '2019-06-01 10:14:16'),
(15, '1', 'Iphone X', '1.jpg', 0, '123213', 40000000, '2019-06-01 10:14:16'),
(16, '1', 'Iphone X', '1.jpg', 0, '123213', 40000000, '2019-06-01 10:14:16'),
(17, '3', 'Oppo', '3.jpg', 0, '123213', 40000000, '2019-06-11 12:36:41'),
(18, '2', 'SAMSUNG', '2.jpg', 0, '', 80000000, '2019-06-11 12:04:33'),
(19, '2', 'SAMSUNG', '2.jpg', 0, '', 80000000, '2019-06-11 12:04:33'),
(20, '4', 'Nokia 730', '4.jpg', 0, '', 30000000, '2019-06-15 09:29:49'),
(21, '4', 'Nokia 720', '4.jpg', 0, '', 30000000, '2019-06-15 09:29:51'),
(23, '4', 'Nokia c2', 'c2.png', 0, '<p>132465465645</p>\r\n', 4000000, '2019-06-27 16:41:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `name` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gioitinh` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`name`, `diachi`, `sdt`, `id`, `gioitinh`) VALUES
('Trịnh Quang Trường', '159 Trần Văn Quang', 934085293, 18, 'Nam'),
('Trịnh Quang Trường', '159 Trần Văn Quang', 934085293, 2, 'Nam'),
('Trịnh Quang Trường', '159 Trần Văn Quang', 934085293, 3, 'Nam'),
('Trịnh Quang Trường', '159 Trần Văn Quang', 934085293, 4, 'Nam'),
('Trịnh Quang Trường', '159 Trần Văn Quang', 934085293, 5, 'Nam'),
('Trịnh Quang Trường', '159 Trần Văn Quang', 934085293, 6, 'Nam'),
('Trịnh Quang Trường', '159 Trần Văn Quang', 934085293, 7, 'Nam'),
('Trịnh Quang Trường', '159 Trần Văn Quang', 934085293, 8, 'Nam'),
('Trịnh Quang Trường', '159 Trần Văn Quang', 934085293, 9, 'Nam'),
('Trịnh Quang Trường', '159 Trần Văn Quang', 934085293, 11, 'Nam'),
('Trịnh Quang Trường', '159 Trần Văn Quang', 934085293, 12, 'Nam'),
('Trịnh Quang Trường', '159 Trần Văn Quang', 934085293, 13, 'Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaidienthoai`
--

DROP TABLE IF EXISTS `loaidienthoai`;
CREATE TABLE IF NOT EXISTS `loaidienthoai` (
  `MaLoaiDienThoai` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TenLoaiDienThoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaLoaiDienThoai`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaidienthoai`
--

INSERT INTO `loaidienthoai` (`MaLoaiDienThoai`, `logo`, `TenLoaiDienThoai`) VALUES
(1, '', 'Apple'),
(2, '', 'Samsung\r\n'),
(3, '', 'Oppo\r\n'),
(4, '', 'Nokia'),
(5, '', 'ASUS\r\n'),
(6, 'huawei.jpg', 'Huawei');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE IF NOT EXISTS `nhanvien` (
  `MaNhanVien` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `TenNhanVien` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`MaNhanVien`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MaNhanVien`, `username`, `password`, `TenNhanVien`) VALUES
(1, 'truong', 'e10adc3949ba59abbe56e057f20f883e', 'Trịnh Quang Trường'),
(2, 'truong2', '827ccb0eea8a706c4c34a16891f84e7b', 'Trịnh Quang Trường'),
(3, 'truong3', 'b8dd2f2b08570986184121417a148b28', 'Trịnh Quang Trường'),
(4, 'truong12345', '202cb962ac59075b964b07152d234b70', 'Trịnh Quang Trường');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
