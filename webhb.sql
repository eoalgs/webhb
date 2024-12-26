-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 26, 2024 lúc 03:01 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webhb`
--
CREATE DATABASE IF NOT EXISTS `webhb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `webhb`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangnhap`
--

CREATE TABLE `dangnhap` (
  `id` int(100) NOT NULL,
  `tendn` varchar(100) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dangnhap`
--

INSERT INTO `dangnhap` (`id`, `tendn`, `matkhau`, `email`) VALUES
(1, '98200', '123', 'nam98200@st.vimaru.edu.vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaovien`
--

CREATE TABLE `giaovien` (
  `magv` int(100) NOT NULL,
  `tengv` varchar(100) NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `sodienthoai` varchar(10) NOT NULL,
  `gioitinh` varchar(3) NOT NULL,
  `tenlop` varchar(10) NOT NULL,
  `moncn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giaovien`
--

INSERT INTO `giaovien` (`magv`, `tengv`, `ngaysinh`, `diachi`, `sodienthoai`, `gioitinh`, `tenlop`, `moncn`) VALUES
(2, 'Nguyễn Bảo Khánh', '1997-06-12', 'Sóc Trăng', '0102030405', 'Nam', '12J97', 'Nhạc Lý'),
(32, 'Ngô Như Ý', '1975-07-09', 'Hà Nội', '0372948298', 'Nữ', '10C987', 'Toán'),
(69, 'Mai Lĩnh Lương', '1990-03-01', 'Hải Phòng', '0129999999', 'Nam', '11B52', 'GDQP'),
(98200, 'Đinh Văn Nam', '1004-06-23', 'Hải Phòng', '0399999999', 'Nam', '12A345', 'Pickleball');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocsinh`
--

CREATE TABLE `hocsinh` (
  `mahocsinh` int(100) NOT NULL,
  `tenhocsinh` varchar(100) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(3) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `sodienthoai` varchar(10) NOT NULL,
  `tenlop` varchar(10) NOT NULL,
  `tengv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hocsinh`
--

INSERT INTO `hocsinh` (`mahocsinh`, `tenhocsinh`, `ngaysinh`, `gioitinh`, `diachi`, `sodienthoai`, `tenlop`, `tengv`) VALUES
(1, 'Trịnh Trần Phương Tuấn', '1997-04-12', 'Nam', 'Bến Tre', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(2, 'Định Hình Phương Hướng', '1997-02-14', 'Nam', 'Bình Định', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(3, 'Nguyễn Y Vân', '2006-02-22', 'Nữ', 'Hà Nội', '0345678910', '10C345', 'Ngô Như Ý'),
(4, 'Lương Cao Thế', '1997-04-12', 'Nam', 'Bé Trên', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(5, 'Nguyễn Nhật Anh', '1981-07-09', 'Nam', 'Bình Định', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(6, 'Đinh Thị Ngọc', '2015-03-04', 'Nữ', 'Hà Nội', '0345678910', '10C345', 'Ngô Như Ý'),
(7, 'Bùi Minh Hoàng', '1111-01-01', 'Nam', 'Bình Định', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(8, 'Nguyễn Trúc Linh', '1234-02-02', 'Nữ', 'Hà Nội', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(9, 'Phạm Duy Khang', '1235-02-02', 'Nam', 'Bình Định', '0345678910', '10C345', 'Ngô Như Ý'),
(10, 'Trần Hải Yến', '1236-02-02', 'Nữ', 'Hà Nội', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(11, 'Nguyễn Xuân Hiếu', '1237-02-02', 'Nam', 'Bình Định', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(12, 'Lê Ngọc Ánh', '1238-02-02', 'Nữ', 'Hà Nội', '0345678910', '10C345', 'Ngô Như Ý'),
(13, 'Vũ Thế Anh', '1239-02-02', 'Nam', 'Bình Định', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(14, 'Nguyễn Thành Đạt', '1998-04-12', 'Nam', 'Bé Trên', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(15, 'Lê Quang Huy', '1982-07-09', 'Nam', 'Bình Định', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(16, 'Đặng Thùy Trang', '2016-03-04', 'Nữ', 'Hà Nội', '0345678910', '10C345', 'Ngô Như Ý'),
(17, 'Phạm Hữu Nghĩa', '1112-01-01', 'Nam', 'Bình Định', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(18, 'Đinh Ngọc Hoa', '1240-02-02', 'Nữ', 'Hà Nội', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(19, 'Đặng Nhật Minh', '1241-02-02', 'Nam', 'Bình Định', '0345678910', '10C345', 'Ngô Như Ý'),
(20, 'Bùi Ngọc Hà', '1242-02-02', 'Nữ', 'Hà Nội', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(21, 'Nguyễn Hải Nam', '1243-02-02', 'Nam', 'Bình Định', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(22, 'Đinh Thị Hương', '1244-02-02', 'Nữ', 'Hà Nội', '0345678910', '11B52', 'Mai Lĩnh Lương'),
(23, 'Phan Văn Long', '1245-02-02', 'Nam', 'Bình Định', '0305000000', '11B52', 'Mai Lĩnh Lương'),
(24, 'Hoàng Anh Tuấn', '1999-04-12', 'Nam', 'Bé Trên', '0305000000', '11B52', 'Mai Lĩnh Lương'),
(25, 'Đặng Quốc Bảo', '1983-07-09', 'Nam', 'Bình Định', '0987654321', '11B52', 'Mai Lĩnh Lương'),
(26, 'Bùi Thị Lan', '2017-03-04', 'Nữ', 'Hà Nội', '0345678910', '11B52', 'Mai Lĩnh Lương'),
(27, 'Nguyễn Văn Hưng', '1113-01-01', 'Nam', 'Bình Định', '0305000000', '11B52', 'Mai Lĩnh Lương'),
(28, 'Trần Thị Thanh', '1246-02-02', 'Nữ', 'Hà Nội', '0987654321', '11B52', 'Mai Lĩnh Lương'),
(29, 'Lê Minh Tuấn', '1247-02-02', 'Nam', 'Bình Định', '0345678910', '11B52', 'Mai Lĩnh Lương'),
(30, 'Phạm Thu Hà', '1248-02-02', 'Nữ', 'Hà Nội', '0305000000', '11B52', 'Mai Lĩnh Lương'),
(31, 'Nguyễn Văn Bình', '1249-02-02', 'Nam', 'Bình Định', '0987654321', '11B52', 'Mai Lĩnh Lương'),
(32, 'Trần Thị Mỹ Duyên', '1250-02-02', 'Nữ', 'Hà Nội', '0345678910', '11B52', 'Mai Lĩnh Lương'),
(33, 'Lê Hoàng Phúc', '1251-02-02', 'Nam', 'Bình Định', '0305000000', '11B52', 'Mai Lĩnh Lương'),
(34, 'Phạm Minh Khôi', '2000-04-12', 'Nam', 'Bé Trên', '0305000000', '11B52', 'Mai Lĩnh Lương'),
(35, 'Hoàng Văn Dũng', '1984-07-09', 'Nam', 'Bình Định', '0987654321', '11B52', 'Mai Lĩnh Lương'),
(36, 'Đặng Thị Thu Thảo', '2018-03-04', 'Nữ', 'Hà Nội', '0345678910', '11B52', 'Mai Lĩnh Lương'),
(37, 'Bùi Hữu Tài', '1114-01-01', 'Nam', 'Bình Định', '0305000000', '11B52', 'Mai Lĩnh Lương'),
(38, 'Vũ Thị Kim Chi', '1252-02-02', 'Nữ', 'Hà Nội', '0987654321', '11B52', 'Mai Lĩnh Lương'),
(39, 'Nguyễn Đức Tâm', '1253-02-02', 'Nam', 'Bình Định', '0345678910', '11B52', 'Mai Lĩnh Lương'),
(40, 'Trần Thị Hồng Nhung', '1254-02-02', 'Nữ', 'Hà Nội', '0305000000', '11B52', 'Mai Lĩnh Lương'),
(41, 'Lê Anh Khoa', '1255-02-02', 'Nam', 'Bình Định', '0987654321', '11B52', 'Mai Lĩnh Lương'),
(42, 'Phạm Thanh Hằng', '1256-02-02', 'Nữ', 'Hà Nội', '0345678910', '11B52', 'Mai Lĩnh Lương'),
(43, 'Đinh Văn Sơn', '1257-02-02', 'Nam', 'Bình Định', '0305000000', '11B52', 'Mai Lĩnh Lương'),
(44, 'Nguyễn Huy Hoàng', '2001-04-12', 'Nam', 'Bé Trên', '0305000000', '11B52', 'Mai Lĩnh Lương'),
(45, 'Hoàng Ngọc Minh', '1985-07-09', 'Nam', 'Bình Định', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(46, 'Đỗ Thị Phương Anh', '2019-03-04', 'Nữ', 'Hà Nội', '0345678910', '10C345', 'Ngô Như Ý'),
(47, 'Trần Quốc Bảo', '1115-01-01', 'Nam', 'Bình Định', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(48, 'Lê Thị Ngọc Mai', '1258-02-02', 'Nữ', 'Hà Nội', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(49, 'Nguyễn Thanh Bình', '1259-02-02', 'Nam', 'Bình Định', '0345678910', '10C345', 'Ngô Như Ý'),
(50, 'Phạm Thị Yến Nhi', '1260-02-02', 'Nữ', 'Hà Nội', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(51, 'Vũ Quốc Huy', '1261-02-02', 'Nam', 'Bình Định', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(52, 'Đặng Thị Bảo Trâm', '1262-02-02', 'Nữ', 'Hà Nội', '0345678910', '10C345', 'Ngô Như Ý'),
(53, 'Hoàng Văn Tài', '1263-02-02', 'Nam', 'Bình Định', '0305000000', '12J101', 'Nguyễn Bảo Khánh'),
(54, 'Bùi Tiến Đạt', '2002-04-12', 'Nam', 'Bé Trên', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(55, 'Lê Minh Huy', '1986-07-09', 'Nam', 'Bình Định', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(56, 'Phạm Thị Mỹ Linh', '2020-03-04', 'Nữ', 'Hà Nội', '0345678910', '10C350', 'Ngô Như Ý'),
(57, 'Nguyễn Văn Khải', '1116-01-01', 'Nam', 'Bình Định', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(58, 'Trần Thị Bích Phượng', '1264-02-02', 'Nữ', 'Hà Nội', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(59, 'Hoàng Anh Khoa', '1265-02-02', 'Nam', 'Bình Định', '0345678910', '10C345', 'Ngô Như Ý'),
(60, 'Lê Minh Quân', '1998-04-12', 'Nam', 'Bé Trên', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(61, 'Phạm Thanh Dũng', '1982-07-09', 'Nam', 'Bình Định', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(62, 'Đỗ Thị Kim Ngân', '2016-03-04', 'Nữ', 'Hà Nội', '0345678910', '10C345', 'Ngô Như Ý'),
(63, 'Nguyễn Văn Lợi', '1112-01-01', 'Nam', 'Bình Định', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(64, 'Trần Thị Hải Yến', '1240-02-02', 'Nữ', 'Hà Nội', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(65, 'Phạm Đức Toàn', '1241-02-02', 'Nam', 'Bình Định', '0345678910', '10C345', 'Ngô Như Ý'),
(66, 'Bùi Thị Thanh Hương', '1242-02-02', 'Nữ', 'Hà Nội', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(67, 'Lê Quốc Trung', '1243-02-02', 'Nam', 'Bình Định', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(68, 'Nguyễn Thị Thu Hà', '1244-02-02', 'Nữ', 'Hà Nội', '0345678910', '10C345', 'Ngô Như Ý'),
(69, 'Hoàng Nhật Minh', '1245-02-02', 'Nam', 'Bình Định', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(70, 'Đặng Thị Thu Hà', '1999-04-12', 'Nam', 'Bé Trên', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(71, 'Lê Ngọc Hưng', '1983-07-09', 'Nam', 'Bình Định', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(72, 'Vũ Thị Thanh Trúc', '2017-03-04', 'Nữ', 'Hà Nội', '0345678910', '10C345', 'Ngô Như Ý'),
(73, 'Nguyễn Minh Hiếu', '1113-01-01', 'Nam', 'Bình Định', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(74, 'Phạm Thị Cẩm Tú', '1246-02-02', 'Nữ', 'Hà Nội', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(75, 'Hoàng Quang Thịnh', '1247-02-02', 'Nam', 'Bình Định', '0345678910', '10C345', 'Ngô Như Ý'),
(76, 'Trần Thị Bảo Ngọc', '1248-02-02', 'Nữ', 'Hà Nội', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(77, 'Lê Huy Hoàng', '1998-04-12', 'Nam', 'Bé Trên', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(78, 'Phạm Thị Minh Anh', '1982-07-09', 'Nam', 'Bình Định', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(79, 'Đỗ Thị Lan Hương', '2016-03-04', 'Nữ', 'Hà Nội', '0345678910', '10C345', 'Ngô Như Ý'),
(80, 'Nguyễn Văn Thành', '1112-01-01', 'Nam', 'Bình Định', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(81, 'Trần Thị Diệu Linh', '1240-02-02', 'Nữ', 'Hà Nội', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(82, 'Nguyễn Văn Thắng', '1241-02-02', 'Nam', 'Bình Định', '0345678910', '10C345', 'Ngô Như Ý'),
(83, 'Phạm Thị Hồng Nhung', '1242-02-02', 'Nữ', 'Hà Nội', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(84, 'Lê Minh Tâm', '1243-02-02', 'Nam', 'Bình Định', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(85, 'Vũ Thị Thanh Mai', '1244-02-02', 'Nữ', 'Hà Nội', '0345678910', '10C345', 'Ngô Như Ý'),
(86, 'Hoàng Văn Hòa', '1245-02-02', 'Nam', 'Bình Định', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(87, 'Đặng Văn Đức', '1999-04-12', 'Nam', 'Bé Trên', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(88, 'Bùi Hữu Phát', '1983-07-09', 'Nam', 'Bình Định', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(89, 'Nguyễn Thị Bích Ngọc', '2017-03-04', 'Nữ', 'Hà Nội', '0345678910', '10C345', 'Ngô Như Ý'),
(90, 'Trần Anh Tuấn', '1113-01-01', 'Nam', 'Bình Định', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(91, 'Lê Thị Thu Trang', '1246-02-02', 'Nữ', 'Hà Nội', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(92, 'Phạm Hữu Đạt', '1247-02-02', 'Nam', 'Bình Định', '0345678910', '10C345', 'Ngô Như Ý'),
(93, 'Vũ Thị Thảo Vy', '1248-02-02', 'Nữ', 'Hà Nội', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(94, 'Nguyễn Văn Hiệp', '1249-02-02', 'Nam', 'Bình Định', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(95, 'Đỗ Thị Mỹ Lệ', '1250-02-02', 'Nữ', 'Hà Nội', '0345678910', '10C345', 'Ngô Như Ý'),
(96, 'Lê Quốc Khánh', '1998-04-12', 'Nam', 'Bé Trên', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(97, 'Trần Hữu Thành', '1982-07-09', 'Nam', 'Bình Định', '0987654321', '12J97', 'Nguyễn Bảo Khánh'),
(98, 'Lê Kim Ngân', '2016-03-04', 'Nữ', 'Hà Nội', '0345678910', '10C345', 'Ngô Như Ý'),
(99, 'Vũ Thị Thùy Trâm', '2006-11-29', 'Nữ', 'Hải Phòng', '0305000000', '12J97', 'Nguyễn Bảo Khánh'),
(100, 'Phạm Gia Bảo', '1998-04-12', 'Nam', 'Bé Trên', '0305000000', '12J97', 'Nguyễn Bảo Khánh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophoc`
--

CREATE TABLE `lophoc` (
  `malop` int(100) NOT NULL,
  `tenlop` varchar(100) NOT NULL,
  `sohocsinh` varchar(100) NOT NULL DEFAULT '0',
  `tengv` varchar(100) NOT NULL,
  `namhoc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lophoc`
--

INSERT INTO `lophoc` (`malop`, `tenlop`, `sohocsinh`, `tengv`, `namhoc`) VALUES
(123, '12A345', '2', 'Đinh Văn Nam', '2014-2017'),
(456, '12J97', '2', 'Nguyễn Bảo Khánh', '2013-2016'),
(987, '10C987', '1', 'Ngô Như Ý', '2021-2024');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qlhocba`
--

CREATE TABLE `qlhocba` (
  `mahocsinh` int(100) NOT NULL,
  `namhoc` varchar(10) NOT NULL,
  `toan` int(2) NOT NULL,
  `vatly` int(2) NOT NULL,
  `hoahoc` int(2) NOT NULL,
  `sinhhoc` int(2) NOT NULL,
  `tinhoc` int(2) NOT NULL,
  `nguvan` int(2) NOT NULL,
  `lichsu` int(2) NOT NULL,
  `dialy` int(2) NOT NULL,
  `tienganh` int(2) NOT NULL,
  `congnghe` int(2) NOT NULL,
  `gdqp` int(2) NOT NULL,
  `theduc` int(2) NOT NULL,
  `gdcd` int(2) NOT NULL,
  `diemtrungbinh` int(2) DEFAULT NULL,
  `hanhkiem` varchar(10) NOT NULL,
  `hocluc` varchar(10) NOT NULL,
  `xephang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `qlhocba`
--

INSERT INTO `qlhocba` (`mahocsinh`, `namhoc`, `toan`, `vatly`, `hoahoc`, `sinhhoc`, `tinhoc`, `nguvan`, `lichsu`, `dialy`, `tienganh`, `congnghe`, `gdqp`, `theduc`, `gdcd`, `diemtrungbinh`, `hanhkiem`, `hocluc`, `xephang`) VALUES
(1, '2013-2014', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Yếu', 'Yếu', 5000000),
(2, '1997-1998', 8, 9, 10, 7, 9, 8, 10, 9, 5, 7, 9, 8, 7, NULL, 'Khá', 'Giỏi', 1),
(4, '9', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, '1', '1', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qlhocba3`
--

CREATE TABLE `qlhocba3` (
  `mahocsinh` int(100) NOT NULL,
  `namhoc` varchar(10) NOT NULL,
  `toan3` int(2) DEFAULT NULL,
  `vatly3` int(2) DEFAULT NULL,
  `hoahoc3` int(2) DEFAULT NULL,
  `sinhhoc3` int(2) DEFAULT NULL,
  `tinhoc3` int(2) DEFAULT NULL,
  `nguvan3` int(2) DEFAULT NULL,
  `lichsu3` int(2) DEFAULT NULL,
  `dialy3` int(2) DEFAULT NULL,
  `tienganh3` int(2) DEFAULT NULL,
  `congnghe3` int(2) DEFAULT NULL,
  `gdqp3` int(2) DEFAULT NULL,
  `theduc3` int(2) DEFAULT NULL,
  `gdcd3` int(2) DEFAULT NULL,
  `diemtrungbinh3` int(3) DEFAULT NULL,
  `hanhkiem3` varchar(10) DEFAULT NULL,
  `hocluc3` varchar(10) DEFAULT NULL,
  `xephang3` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `qlhocba3`
--

INSERT INTO `qlhocba3` (`mahocsinh`, `namhoc`, `toan3`, `vatly3`, `hoahoc3`, `sinhhoc3`, `tinhoc3`, `nguvan3`, `lichsu3`, `dialy3`, `tienganh3`, `congnghe3`, `gdqp3`, `theduc3`, `gdcd3`, `diemtrungbinh3`, `hanhkiem3`, `hocluc3`, `xephang3`) VALUES
(1, '2013-2014', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 'Khá', 'Khá', 2),
(4, '9', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 'Xuất Sắc', 'Xuất Sắc', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qlhocba4`
--

CREATE TABLE `qlhocba4` (
  `mahocsinh` int(100) NOT NULL,
  `namhoc` varchar(10) NOT NULL,
  `toan4` int(2) DEFAULT NULL,
  `vatly4` int(2) DEFAULT NULL,
  `hoahoc4` int(2) DEFAULT NULL,
  `sinhhoc4` int(2) DEFAULT NULL,
  `tinhoc4` int(2) DEFAULT NULL,
  `nguvan4` int(2) DEFAULT NULL,
  `lichsu4` int(2) DEFAULT NULL,
  `dialy4` int(2) DEFAULT NULL,
  `tienganh4` int(2) DEFAULT NULL,
  `congnghe4` int(2) DEFAULT NULL,
  `gdqp4` int(2) DEFAULT NULL,
  `theduc4` int(2) DEFAULT NULL,
  `gdcd4` int(2) DEFAULT NULL,
  `diemtrungbinh4` int(2) DEFAULT NULL,
  `hanhkiem4` varchar(10) DEFAULT NULL,
  `hocluc4` varchar(10) DEFAULT NULL,
  `xephang4` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `qlhocba4`
--

INSERT INTO `qlhocba4` (`mahocsinh`, `namhoc`, `toan4`, `vatly4`, `hoahoc4`, `sinhhoc4`, `tinhoc4`, `nguvan4`, `lichsu4`, `dialy4`, `tienganh4`, `congnghe4`, `gdqp4`, `theduc4`, `gdcd4`, `diemtrungbinh4`, `hanhkiem4`, `hocluc4`, `xephang4`) VALUES
(1, '2013-2014', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 'Khá', 'Khá', 4),
(4, '9', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 'Xuất Sắc', 'Xuất Sắc', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qlhocba5`
--

CREATE TABLE `qlhocba5` (
  `mahocsinh` int(100) NOT NULL,
  `namhoc` varchar(10) NOT NULL,
  `toan5` int(2) DEFAULT NULL,
  `vatly5` int(2) DEFAULT NULL,
  `hoahoc5` int(2) DEFAULT NULL,
  `sinhhoc5` int(2) DEFAULT NULL,
  `tinhoc5` int(2) DEFAULT NULL,
  `nguvan5` int(2) DEFAULT NULL,
  `lichsu5` int(2) DEFAULT NULL,
  `dialy5` int(2) DEFAULT NULL,
  `tienganh5` int(2) DEFAULT NULL,
  `congnghe5` int(2) DEFAULT NULL,
  `gdqp5` int(2) DEFAULT NULL,
  `theduc5` int(2) DEFAULT NULL,
  `gdcd5` int(2) DEFAULT NULL,
  `diemtrungbinh5` int(2) DEFAULT NULL,
  `hanhkiem5` varchar(10) DEFAULT NULL,
  `hocluc5` varchar(10) DEFAULT NULL,
  `xephang5` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `qlhocba5`
--

INSERT INTO `qlhocba5` (`mahocsinh`, `namhoc`, `toan5`, `vatly5`, `hoahoc5`, `sinhhoc5`, `tinhoc5`, `nguvan5`, `lichsu5`, `dialy5`, `tienganh5`, `congnghe5`, `gdqp5`, `theduc5`, `gdcd5`, `diemtrungbinh5`, `hanhkiem5`, `hocluc5`, `xephang5`) VALUES
(4, '9', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 'Xuất Sắc', 'Xuất Sắc', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qlhocba6`
--

CREATE TABLE `qlhocba6` (
  `mahocsinh` int(100) NOT NULL,
  `namhoc` varchar(10) NOT NULL,
  `toan6` int(2) DEFAULT NULL,
  `vatly6` int(2) DEFAULT NULL,
  `hoahoc6` int(2) DEFAULT NULL,
  `sinhhoc6` int(2) DEFAULT NULL,
  `tinhoc6` int(2) DEFAULT NULL,
  `nguvan6` int(2) DEFAULT NULL,
  `lichsu6` int(2) DEFAULT NULL,
  `dialy6` int(2) DEFAULT NULL,
  `tienganh6` int(2) DEFAULT NULL,
  `congnghe6` int(2) DEFAULT NULL,
  `gdqp6` int(2) DEFAULT NULL,
  `theduc6` int(2) DEFAULT NULL,
  `gdcd6` int(2) DEFAULT NULL,
  `diemtrungbinh6` int(2) DEFAULT NULL,
  `hanhkiem6` varchar(10) DEFAULT NULL,
  `hocluc6` varchar(10) DEFAULT NULL,
  `xephang6` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `qlhocba6`
--

INSERT INTO `qlhocba6` (`mahocsinh`, `namhoc`, `toan6`, `vatly6`, `hoahoc6`, `sinhhoc6`, `tinhoc6`, `nguvan6`, `lichsu6`, `dialy6`, `tienganh6`, `congnghe6`, `gdqp6`, `theduc6`, `gdcd6`, `diemtrungbinh6`, `hanhkiem6`, `hocluc6`, `xephang6`) VALUES
(4, '9', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 'Xuất Sắc', 'Xuất Sắc', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qlhocbak2`
--

CREATE TABLE `qlhocbak2` (
  `mahocsinh` int(100) NOT NULL,
  `namhoc` varchar(10) NOT NULL,
  `toank2` int(2) DEFAULT NULL,
  `vatlyk2` int(2) DEFAULT NULL,
  `hoahock2` int(2) DEFAULT NULL,
  `sinhhock2` int(2) DEFAULT NULL,
  `tinhock2` int(2) DEFAULT NULL,
  `nguvank2` int(2) DEFAULT NULL,
  `lichsuk2` int(2) DEFAULT NULL,
  `dialyk2` int(2) DEFAULT NULL,
  `tienganhk2` int(2) DEFAULT NULL,
  `congnghek2` int(2) DEFAULT NULL,
  `gdqpk2` int(2) DEFAULT NULL,
  `theduck2` int(2) DEFAULT NULL,
  `gdcdk2` int(2) DEFAULT NULL,
  `diemtrungbinhk2` int(2) DEFAULT NULL,
  `hanhkiemk2` varchar(10) DEFAULT NULL,
  `hocluck2` varchar(10) DEFAULT NULL,
  `xephangk2` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `qlhocbak2`
--

INSERT INTO `qlhocbak2` (`mahocsinh`, `namhoc`, `toank2`, `vatlyk2`, `hoahock2`, `sinhhock2`, `tinhock2`, `nguvank2`, `lichsuk2`, `dialyk2`, `tienganhk2`, `congnghek2`, `gdqpk2`, `theduck2`, `gdcdk2`, `diemtrungbinhk2`, `hanhkiemk2`, `hocluck2`, `xephangk2`) VALUES
(1, '0', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Yếu', 'Yếu', 5000000),
(2, '0', 9, 8, 7, 10, 7, 9, 7, 8, 6, 5, 9, 9, 5, NULL, 'Tốt', 'Khá', 1),
(4, '9', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, '1', '1', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qlnamhoc`
--

CREATE TABLE `qlnamhoc` (
  `manamhoc` int(100) NOT NULL,
  `namhoc` varchar(10) NOT NULL,
  `nambatdau` varchar(10) NOT NULL,
  `namketthuc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `qlnamhoc`
--

INSERT INTO `qlnamhoc` (`manamhoc`, `namhoc`, `nambatdau`, `namketthuc`) VALUES
(1, '2013-2016', '2013', '2016'),
(2, '2014-2017', '2014', '2017'),
(3, '2015-2018', '2015', '2018'),
(4, '2016-2019', '2016', '2019'),
(5, '2017-2020', '2017', '2020'),
(6, '2018-2021', '2018', '2021'),
(7, '2019-2022', '2019', '2022'),
(8, '2020-2023', '2020', '2023'),
(9, '2021-2024', '2021', '2024');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`magv`);

--
-- Chỉ mục cho bảng `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD PRIMARY KEY (`mahocsinh`);

--
-- Chỉ mục cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`malop`);

--
-- Chỉ mục cho bảng `qlhocba`
--
ALTER TABLE `qlhocba`
  ADD PRIMARY KEY (`mahocsinh`);

--
-- Chỉ mục cho bảng `qlhocba3`
--
ALTER TABLE `qlhocba3`
  ADD PRIMARY KEY (`mahocsinh`);

--
-- Chỉ mục cho bảng `qlhocba4`
--
ALTER TABLE `qlhocba4`
  ADD PRIMARY KEY (`mahocsinh`);

--
-- Chỉ mục cho bảng `qlhocba5`
--
ALTER TABLE `qlhocba5`
  ADD PRIMARY KEY (`mahocsinh`);

--
-- Chỉ mục cho bảng `qlhocba6`
--
ALTER TABLE `qlhocba6`
  ADD PRIMARY KEY (`mahocsinh`);

--
-- Chỉ mục cho bảng `qlhocbak2`
--
ALTER TABLE `qlhocbak2`
  ADD PRIMARY KEY (`mahocsinh`);

--
-- Chỉ mục cho bảng `qlnamhoc`
--
ALTER TABLE `qlnamhoc`
  ADD PRIMARY KEY (`manamhoc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  MODIFY `magv` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98202;

--
-- AUTO_INCREMENT cho bảng `hocsinh`
--
ALTER TABLE `hocsinh`
  MODIFY `mahocsinh` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  MODIFY `malop` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=988;

--
-- AUTO_INCREMENT cho bảng `qlhocba`
--
ALTER TABLE `qlhocba`
  MODIFY `mahocsinh` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `qlhocba3`
--
ALTER TABLE `qlhocba3`
  MODIFY `mahocsinh` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `qlhocba4`
--
ALTER TABLE `qlhocba4`
  MODIFY `mahocsinh` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `qlhocba5`
--
ALTER TABLE `qlhocba5`
  MODIFY `mahocsinh` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `qlhocba6`
--
ALTER TABLE `qlhocba6`
  MODIFY `mahocsinh` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `qlhocbak2`
--
ALTER TABLE `qlhocbak2`
  MODIFY `mahocsinh` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `qlnamhoc`
--
ALTER TABLE `qlnamhoc`
  MODIFY `manamhoc` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
