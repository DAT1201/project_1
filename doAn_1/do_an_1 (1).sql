-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 04, 2021 lúc 03:43 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `do_an_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `ma` int(11) NOT NULL,
  `tieu_de_danh_muc` varchar(50) NOT NULL,
  `anh_danh_muc` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`ma`, `tieu_de_danh_muc`, `anh_danh_muc`) VALUES
(1, '10k - 50k', 'LM10kden50K.jpg'),
(2, '50k - 100k', 'LM100K.jpg'),
(3, '100k - 200k', 'LM200K.jpg'),
(4, '300k - 500k', 'LM500K.jpg'),
(5, '700k - 1000k', 'LM1000K.jpg'),
(6, 'Trên 1000k', 'accip0K.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hoa_don` int(11) NOT NULL,
  `ma_khach_hang` int(11) NOT NULL,
  `ma_nick` int(50) NOT NULL,
  `tinh_trang` int(20) NOT NULL,
  `ten_nguoi_mua` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `thoi_gian_mua` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma` int(20) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `gioi_tinh` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `tai_khoan` varchar(40) NOT NULL,
  `mat_khau` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma`, `ten`, `ngay_sinh`, `gioi_tinh`, `email`, `tai_khoan`, `mat_khau`) VALUES
(52, 'Nguyễn Đạt', '2020-01-01', 'Nam', 'love261dat@gmail.com', 'dat', '21'),
(97, 'Nguyễn Đạt2', '2020-01-01', 'Nam', 'love261dat@gmail.com', 'dat24141', '213');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `ma` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `email_nv` varchar(50) NOT NULL,
  `gioi_tinh` varchar(50) NOT NULL,
  `tai_khoan_nhan_vien` varchar(40) NOT NULL,
  `mat_khau` varchar(40) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `cap_do` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhan_vien`
--

INSERT INTO `nhan_vien` (`ma`, `ten`, `email_nv`, `gioi_tinh`, `tai_khoan_nhan_vien`, `mat_khau`, `ngay_sinh`, `cap_do`) VALUES
(4, 'Dat', 'nguyendat@gmail.com', 'male', 'NguyendatAdmin1', '123', '2020-01-01', 'superadmin'),
(5, 'Datnguyen', 'nguyendat@gmail.com', 'male', 'NguyendaT', '123', '2020-01-01', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rank`
--

CREATE TABLE `rank` (
  `ma` int(11) NOT NULL,
  `rank` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `rank`
--

INSERT INTO `rank` (`ma`, `rank`) VALUES
(10, 'no rank'),
(11, 'Sắt'),
(12, 'Đồng'),
(13, 'Bạc'),
(14, 'vàng'),
(15, 'Bạch Kim'),
(16, 'Kim Cương'),
(17, 'Cao Thủ'),
(18, 'Đại Cao Thủ'),
(19, 'Thách Đấu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin_nick`
--

CREATE TABLE `thong_tin_nick` (
  `ma` int(11) NOT NULL,
  `gia` double NOT NULL,
  `tuong` int(50) NOT NULL,
  `tinh_hoa_lam` int(50) NOT NULL,
  `trang_phuc` int(50) NOT NULL,
  `rank_dccl` varchar(50) NOT NULL,
  `linh_thu` int(40) NOT NULL,
  `anh` varchar(300) NOT NULL,
  `ma_rank` int(20) NOT NULL,
  `ma_danh_muc` int(30) NOT NULL,
  `tai_khoan` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thong_tin_nick`
--

INSERT INTO `thong_tin_nick` (`ma`, `gia`, `tuong`, `tinh_hoa_lam`, `trang_phuc`, `rank_dccl`, `linh_thu`, `anh`, `ma_rank`, `ma_danh_muc`, `tai_khoan`, `mat_khau`) VALUES
(1, 70000, 113, 4123, 77, 'NO RANK', 1, '1607690150.webp', 10, 1, 'we', 'wea'),
(2, 70000, 45, 1232, 46, 'NO RANK', 2, '1607690246.webp', 11, 1, 'ewd', 'ds'),
(3, 50000, 12, 5236, 51, 'Sắt II', 1, '1607690615.webp', 10, 1, 'cas', 'dsa'),
(4, 70000, 42, 3637, 54, 'NO RANK', 2, '1607690845.webp', 11, 1, 'sc', 'cx'),
(5, 70000, 42, 3643, 45, 'NO RANK', 1, '1607690878.webp', 12, 1, 'sad', 'cs'),
(7, 70000, 23, 3637, 124, 'NO RANK', 2, '1607691038.webp', 12, 1, 'vfd', 'sad'),
(8, 50000, 42, 1234, 55, 'Đồng', 2, '1607691120.webp', 11, 1, 'SAD', 'cs'),
(9, 70000, 45, 4364, 23, 'NO RANK', 1, '1607691180.webp', 11, 1, 'sac', 'vs'),
(10, 70000, 56, 4356, 67, 'NO RANK', 2, '1607691249.webp', 12, 1, 'sad', 'vasvb'),
(11, 70000, 43, 6573, 34, 'Sắt', 0, '1607691297.webp', 11, 1, 'fsav', 'fsad'),
(12, 70, 214, 213, 142, '2133', 312, '1607750394.jpg', 10, 2, 'sad', 'frewr');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`ma`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hoa_don`),
  ADD KEY `ma_khach_hang` (`ma_khach_hang`),
  ADD KEY `ma_nick` (`ma_nick`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma`),
  ADD UNIQUE KEY `access_name` (`tai_khoan`);

--
-- Chỉ mục cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`ma`),
  ADD UNIQUE KEY `tk_nv` (`tai_khoan_nhan_vien`);

--
-- Chỉ mục cho bảng `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`ma`);

--
-- Chỉ mục cho bảng `thong_tin_nick`
--
ALTER TABLE `thong_tin_nick`
  ADD PRIMARY KEY (`ma`),
  ADD KEY `san_pham_ibfk_1` (`ma_rank`),
  ADD KEY `ma_danh_muc` (`ma_danh_muc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hoa_don` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `rank`
--
ALTER TABLE `rank`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `thong_tin_nick`
--
ALTER TABLE `thong_tin_nick`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khach_hang` (`ma`),
  ADD CONSTRAINT `hoa_don_ibfk_2` FOREIGN KEY (`ma_nick`) REFERENCES `thong_tin_nick` (`ma`);

--
-- Các ràng buộc cho bảng `thong_tin_nick`
--
ALTER TABLE `thong_tin_nick`
  ADD CONSTRAINT `thong_tin_nick_ibfk_1` FOREIGN KEY (`ma_rank`) REFERENCES `rank` (`ma`),
  ADD CONSTRAINT `thong_tin_nick_ibfk_2` FOREIGN KEY (`ma_danh_muc`) REFERENCES `danh_muc` (`ma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
