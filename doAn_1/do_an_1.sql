-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 25, 2021 lúc 05:52 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.11

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
-- Cấu trúc bảng cho bảng `anh_chi_tiet`
--

CREATE TABLE `anh_chi_tiet` (
  `ma` int(11) NOT NULL,
  `ma_tai_khoan` int(11) NOT NULL,
  `anh` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `anh_chi_tiet`
--

INSERT INTO `anh_chi_tiet` (`ma`, `ma_tai_khoan`, `anh`) VALUES
(53, 1, '1611540308.jpg'),
(54, 37, '1611541095.jpg'),
(55, 37, '1611541101.jpg'),
(56, 37, '1611541108.jpg'),
(57, 38, '1611541361.jpg'),
(58, 38, '1611541365.jpg'),
(59, 38, '1611541369.jpg'),
(60, 39, '1611541660.jpg'),
(61, 39, '1611541665.jpg'),
(62, 39, '1611541668.jpg'),
(63, 40, '1611541804.jpg'),
(64, 40, '1611541807.jpg'),
(65, 40, '1611541811.jpg'),
(66, 41, '1611542414.jpg'),
(67, 41, '1611542418.jpg'),
(68, 41, '1611542421.jpg'),
(69, 42, '1611542693.jpg'),
(70, 42, '1611542697.jpg'),
(71, 42, '1611542701.jpg'),
(72, 43, '1611542827.jpg'),
(73, 43, '1611542830.jpg'),
(74, 43, '1611542834.jpg'),
(75, 44, '1611542994.jpg'),
(76, 44, '1611542998.jpg'),
(77, 44, '1611543002.jpg'),
(78, 45, '1611543143.jpg'),
(79, 45, '1611543146.jpg'),
(80, 45, '1611543149.jpg'),
(81, 46, '1611543286.jpg'),
(82, 46, '1611543289.jpg'),
(83, 46, '1611543292.jpg'),
(84, 47, '1611543646.jpg'),
(85, 47, '1611543649.jpg'),
(86, 47, '1611543652.jpg'),
(87, 48, '1611543777.jpg'),
(88, 48, '1611543780.jpg'),
(89, 48, '1611543784.jpg'),
(90, 49, '1611543946.jpg'),
(91, 49, '1611543949.jpg'),
(92, 49, '1611543953.jpg'),
(93, 50, '1611544091.jpg'),
(94, 50, '1611544094.jpg'),
(95, 50, '1611544097.jpg'),
(96, 51, '1611544279.jpg'),
(97, 51, '1611544282.jpg'),
(98, 51, '1611544284.jpg'),
(99, 52, '1611544433.jpg'),
(100, 52, '1611544436.jpg'),
(101, 52, '1611544438.jpg'),
(102, 53, '1611544561.jpg'),
(103, 53, '1611544565.jpg'),
(104, 53, '1611544567.jpg'),
(105, 55, '1611544924.jpg'),
(106, 55, '1611544928.jpg'),
(107, 55, '1611544931.jpg'),
(108, 54, '1611544979.jpg'),
(109, 54, '1611544984.jpg'),
(110, 54, '1611544990.jpg'),
(111, 56, '1611545211.jpg'),
(112, 56, '1611545214.jpg'),
(113, 56, '1611545218.jpg'),
(114, 57, '1611545424.jpg'),
(115, 57, '1611545428.jpg'),
(116, 57, '1611545430.jpg'),
(117, 58, '1611545559.jpg'),
(118, 58, '1611545564.jpg'),
(119, 58, '1611545566.jpg'),
(120, 59, '1611545681.jpg'),
(121, 59, '1611545684.jpg'),
(122, 59, '1611545687.jpg'),
(123, 60, '1611545810.jpg'),
(124, 60, '1611545813.jpg'),
(125, 60, '1611545816.jpg'),
(126, 61, '1611545938.jpg'),
(127, 61, '1611545943.jpg'),
(128, 61, '1611545946.jpg'),
(129, 62, '1611546070.jpg'),
(130, 62, '1611546073.jpg'),
(131, 62, '1611546075.jpg'),
(132, 63, '1611546189.jpg'),
(133, 63, '1611546191.jpg'),
(134, 63, '1611546194.jpg'),
(135, 64, '1611546288.jpg'),
(136, 64, '1611546291.jpg'),
(137, 64, '1611546293.jpg'),
(138, 65, '1611546408.jpg'),
(139, 65, '1611546412.jpg'),
(140, 65, '1611546414.jpg'),
(141, 66, '1611546513.jpg'),
(142, 66, '1611546516.jpg'),
(143, 66, '1611546518.jpg'),
(144, 67, '1611546810.jpg'),
(145, 67, '1611546813.jpg'),
(146, 67, '1611546816.jpg'),
(147, 68, '1611546926.jpg'),
(148, 68, '1611546929.jpg'),
(149, 68, '1611546931.jpg'),
(150, 69, '1611547043.jpg'),
(151, 69, '1611547046.jpg'),
(152, 69, '1611547048.jpg'),
(153, 70, '1611547149.jpg'),
(154, 70, '1611547152.jpg'),
(155, 70, '1611547155.jpg'),
(156, 71, '1611547275.jpg'),
(157, 71, '1611547278.jpg'),
(158, 71, '1611547281.jpg'),
(159, 72, '1611547412.jpg'),
(160, 72, '1611547415.jpg'),
(161, 72, '1611547418.jpg'),
(162, 73, '1611547576.jpg'),
(163, 74, '1611547714.jpg'),
(164, 74, '1611547717.jpg'),
(165, 74, '1611547719.jpg'),
(166, 75, '1611547817.jpg'),
(167, 75, '1611547820.jpg'),
(168, 75, '1611547823.jpg'),
(169, 76, '1611547944.jpg'),
(170, 76, '1611547946.jpg'),
(171, 76, '1611547949.jpg'),
(172, 77, '1611548122.jpg'),
(173, 77, '1611548125.jpg'),
(174, 77, '1611548127.jpg'),
(175, 78, '1611548295.jpg'),
(176, 78, '1611548299.jpg'),
(177, 79, '1611548430.jpg'),
(178, 79, '1611548433.jpg'),
(179, 79, '1611548436.jpg'),
(180, 80, '1611548576.jpg'),
(181, 80, '1611548578.jpg'),
(182, 80, '1611548581.jpg'),
(183, 81, '1611548700.jpg'),
(184, 81, '1611548703.jpg'),
(185, 81, '1611548706.jpg'),
(187, 82, '1611548878.jpg'),
(188, 82, '1611548882.jpg'),
(189, 83, '1611549000.jpg'),
(190, 83, '1611549002.jpg'),
(191, 83, '1611549005.jpg'),
(192, 84, '1611549168.jpg'),
(193, 84, '1611549171.jpg'),
(194, 85, '1611549278.jpg'),
(195, 85, '1611549281.jpg'),
(196, 85, '1611549284.jpg'),
(197, 86, '1611549429.jpg'),
(198, 86, '1611549432.jpg'),
(199, 86, '1611549435.jpg');

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
-- Cấu trúc bảng cho bảng `gia_tri_thuoc_tinh`
--

CREATE TABLE `gia_tri_thuoc_tinh` (
  `ma_nick` int(11) NOT NULL,
  `ma_thuoc_tinh` int(11) NOT NULL,
  `gia_tri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `gia_tri_thuoc_tinh`
--

INSERT INTO `gia_tri_thuoc_tinh` (`ma_nick`, `ma_thuoc_tinh`, `gia_tri`) VALUES
(1, 34, 30),
(1, 35, 5042),
(1, 36, 5),
(1, 37, 50),
(2, 34, 50),
(2, 35, 5021),
(2, 36, 5),
(2, 37, 54),
(3, 34, 221),
(3, 35, 1234),
(3, 36, 132),
(3, 37, 12),
(4, 34, 50),
(4, 35, 3243),
(4, 36, 1),
(4, 37, 21),
(5, 34, 23),
(5, 35, 3142),
(5, 36, 2),
(5, 37, 32),
(7, 34, 50),
(7, 35, 1234),
(7, 36, 1),
(7, 37, 23),
(8, 34, 32),
(8, 35, 231),
(8, 36, 2),
(8, 37, 23),
(9, 34, 34),
(9, 35, 1213),
(9, 36, 2),
(9, 37, 32),
(10, 34, 50),
(10, 35, 5352),
(10, 36, 3),
(10, 37, 43),
(11, 34, 54),
(11, 35, 3453),
(11, 36, 1),
(11, 37, 34),
(37, 34, 50),
(37, 35, 2740),
(37, 36, 4),
(37, 37, 22),
(38, 34, 51),
(38, 35, 1758),
(38, 36, 2),
(38, 37, 22),
(39, 34, 45),
(39, 35, 5045),
(39, 36, 1),
(39, 37, 19),
(40, 34, 50),
(40, 35, 2545),
(40, 36, 3),
(40, 37, 24),
(41, 34, 48),
(41, 35, 5412),
(41, 36, 3),
(41, 37, 24),
(42, 34, 34),
(42, 35, 1452),
(42, 36, 1),
(42, 37, 20),
(43, 34, 52),
(43, 35, 3521),
(43, 36, 1),
(43, 37, 23),
(44, 34, 52),
(44, 35, 3893),
(44, 36, 1),
(44, 37, 21),
(45, 34, 42),
(45, 35, 1630),
(45, 36, 3),
(45, 37, 26),
(46, 34, 35),
(46, 35, 2110),
(46, 36, 5),
(46, 37, 21),
(47, 34, 62),
(47, 35, 3631),
(47, 36, 5),
(47, 37, 20),
(48, 34, 67),
(48, 35, 79),
(48, 36, 5),
(48, 37, 18),
(49, 34, 71),
(49, 35, 3047),
(49, 36, 3),
(49, 37, 18),
(50, 34, 76),
(50, 35, 3764),
(50, 36, 3),
(50, 37, 26),
(51, 34, 57),
(51, 35, 2827),
(51, 36, 2),
(51, 37, 18),
(52, 34, 62),
(52, 35, 2521),
(52, 36, 3),
(52, 37, 27),
(53, 34, 62),
(53, 35, 4583),
(53, 36, 6),
(53, 37, 25),
(54, 34, 61),
(54, 35, 4383),
(54, 36, 7),
(54, 37, 29),
(55, 34, 64),
(55, 35, 2335),
(55, 36, 3),
(55, 37, 38),
(56, 34, 71),
(56, 35, 3610),
(56, 36, 6),
(56, 37, 35),
(57, 34, 69),
(57, 35, 2712),
(57, 36, 4),
(57, 37, 27),
(58, 34, 45),
(58, 35, 771),
(58, 36, 7),
(58, 37, 31),
(59, 34, 112),
(59, 35, 883),
(59, 36, 3),
(59, 37, 50),
(60, 34, 104),
(60, 35, 481),
(60, 36, 2),
(60, 37, 62),
(61, 34, 128),
(61, 35, 3908),
(61, 36, 3),
(61, 37, 77),
(62, 34, 102),
(62, 35, 8013),
(62, 36, 6),
(62, 37, 53),
(63, 34, 83),
(63, 35, 505),
(63, 36, 3),
(63, 37, 67),
(64, 34, 89),
(64, 35, 71),
(64, 36, 2),
(64, 37, 55),
(65, 34, 88),
(65, 35, 3828),
(65, 36, 1),
(65, 37, 33),
(66, 34, 83),
(66, 35, 4871),
(66, 36, 3),
(66, 37, 48),
(67, 34, 149),
(67, 35, 5298),
(67, 36, 5),
(67, 37, 97),
(68, 34, 149),
(68, 35, 44139),
(68, 36, 6),
(68, 37, 97),
(69, 34, 150),
(69, 35, 5238),
(69, 36, 4),
(69, 37, 108),
(70, 34, 149),
(70, 35, 49578),
(70, 36, 14),
(70, 37, 87),
(71, 34, 148),
(71, 35, 138135),
(71, 36, 8),
(71, 37, 75),
(72, 34, 145),
(72, 35, 860),
(72, 36, 1),
(72, 37, 85),
(73, 34, 131),
(73, 35, 2709),
(73, 36, 3),
(73, 37, 52),
(74, 34, 150),
(74, 35, 67017),
(74, 36, 4),
(74, 37, 102),
(75, 34, 110),
(75, 35, 2342),
(75, 36, 11),
(75, 37, 81),
(76, 34, 149),
(76, 35, 1790),
(76, 36, 21),
(76, 37, 106),
(77, 34, 151),
(77, 35, 1973),
(77, 36, 0),
(77, 37, 576),
(78, 34, 150),
(78, 35, 4421),
(78, 36, 0),
(78, 37, 951),
(79, 34, 152),
(79, 35, 234000),
(79, 36, 0),
(79, 37, 655),
(80, 34, 152),
(80, 35, 44299),
(80, 36, 0),
(80, 37, 721),
(81, 34, 152),
(81, 35, 2442),
(81, 36, 0),
(81, 37, 1022),
(82, 34, 153),
(82, 35, 615),
(82, 36, 0),
(82, 37, 1030),
(83, 34, 150),
(83, 35, 496000),
(83, 36, 0),
(83, 37, 717),
(84, 34, 152),
(84, 35, 695),
(84, 36, 0),
(84, 37, 362),
(85, 34, 130),
(85, 35, 5171),
(85, 36, 7),
(85, 37, 113),
(86, 34, 145),
(86, 35, 332928),
(86, 36, 0),
(86, 37, 346);

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

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`ma_hoa_don`, `ma_khach_hang`, `ma_nick`, `tinh_trang`, `ten_nguoi_mua`, `email`, `thoi_gian_mua`) VALUES
(199, 101, 2, 2, 'Aasd ', '123@gmail.com', '2021-01-21 22:50:48'),
(205, 101, 4, 1, 'Aasd ', '123@gmail.com', '2021-01-24 23:05:26');

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
(97, 'Nguyễn Đạt2', '2021-01-01', 'Nam', 'love261dat@gmail.com', 'dat2', '213'),
(101, 'Aasd', '2019-08-24', 'Nam', '123@gmail.com', 'asd', '123');

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
(5, 'Datnguyen', 'nguyendat@gmail.com', 'male', 'NguyendaT', '123', '2020-01-01', 'admin'),
(12, 'Nguyen dat 1', 'nguendat@gmail.com', 'male', 'NguyendatAdmin123', '123', '2021-01-01', 'superadmin'),
(13, 'admin', 'admin@gmail.com', 'male', 'admin', '123', '2020-12-24', 'admin'),
(14, 'superadmin', 'admin@super.com', 'female', 'superadmin', '456', '2020-10-31', 'superadmin');

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
(10, 'No rank'),
(11, 'Sắt'),
(12, 'Đồng'),
(13, 'Bạc'),
(14, 'Vàng'),
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
  `anh` varchar(300) NOT NULL,
  `ma_rank` int(20) NOT NULL,
  `ma_danh_muc` int(30) NOT NULL,
  `tai_khoan` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thong_tin_nick`
--

INSERT INTO `thong_tin_nick` (`ma`, `gia`, `anh`, `ma_rank`, `ma_danh_muc`, `tai_khoan`, `mat_khau`) VALUES
(1, 70000, '1607690150.webp', 10, 1, 'we', 'w'),
(2, 70000, '1607690246.webp', 11, 1, 'ewd', 'ds'),
(3, 50000, '1607690615.webp', 10, 1, 'cas', 'dsa'),
(4, 70000, '1607690845.webp', 11, 1, 'sc', 'cx'),
(5, 70000, '1607690878.webp', 12, 1, 'sad', 'cs'),
(7, 70000, '1607691038.webp', 12, 1, 'vfd', 'sad'),
(8, 50000, '1607691120.webp', 11, 1, 'SADf', 'cs'),
(9, 70000, '1607691180.webp', 11, 1, 'sac', 'vs'),
(10, 70000, '1607691249.webp', 12, 1, 'sadv', 'vasvb'),
(11, 70000, '1607691297.webp', 11, 1, 'fsav', 'fsad'),
(37, 80000, '1611540883.webp', 10, 2, 'asd201', '001'),
(38, 65000, '1611541272.webp', 11, 2, 'asd202', '002'),
(39, 70000, '1611541585.webp', 11, 2, 'asd203', '003'),
(40, 55000, '1611541726.webp', 12, 2, 'asd204', '004'),
(41, 70000, '1611541885.webp', 11, 2, 'asd205', '005'),
(42, 60000, '1611542511.webp', 12, 2, 'asd206', '006'),
(43, 65000, '1611542760.webp', 11, 2, 'asd207', '007'),
(44, 75000, '1611542922.webp', 11, 2, 'asd208', '008'),
(45, 70000, '1611543068.webp', 12, 2, 'asd209', '009'),
(46, 65000, '1611543211.webp', 12, 2, 'asd210', '010'),
(47, 170000, '1611543506.webp', 14, 3, 'asd301', '301'),
(48, 150000, '1611543711.webp', 14, 3, 'asd302', '302'),
(49, 200000, '1611543830.webp', 14, 3, 'asd303', '303'),
(50, 200000, '1611543999.webp', 14, 3, 'asd304', '304'),
(51, 200000, '1611544190.webp', 14, 3, 'asd305', '305'),
(52, 150000, '1611544333.webp', 14, 3, 'asd306', '306'),
(53, 150000, '1611544494.webp', 14, 3, 'asd307', '307'),
(54, 120000, '1611544736.webp', 13, 3, 'asd308', '308'),
(55, 150000, '1611544827.webp', 12, 3, 'asd309', '309'),
(56, 150000, '1611545084.webp', 11, 3, 'asd310', '310'),
(57, 350000, '1611545351.webp', 15, 4, 'asd401', '401'),
(58, 400000, '1611545474.webp', 15, 4, 'asd402', '402'),
(59, 350000, '1611545615.webp', 14, 4, 'asd403', '403'),
(60, 400000, '1611545731.webp', 14, 4, 'asd404', '404'),
(61, 500000, '1611545870.webp', 14, 4, 'asd405', '405'),
(62, 350000, '1611546002.webp', 14, 4, 'asd406', '406'),
(63, 400000, '1611546129.webp', 14, 4, 'asd407', '407'),
(64, 400000, '1611546234.webp', 14, 4, 'asd408', '408'),
(65, 400000, '1611546352.webp', 14, 4, 'asd409', '409'),
(66, 500000, '1611546448.webp', 14, 4, 'asd410', '410'),
(67, 1000000, '1611546683.webp', 13, 5, 'asd501', '501'),
(68, 800000, '1611546847.webp', 14, 5, 'asd502', '502'),
(69, 800000, '1611546978.webp', 15, 5, 'asd503', '503'),
(70, 1000000, '1611547087.webp', 14, 5, 'asd504', '504'),
(71, 800000, '1611547206.webp', 14, 5, 'asd505', '505'),
(72, 800000, '1611547328.webp', 10, 5, 'asd506', '506'),
(73, 1000000, '1611547481.webp', 10, 5, 'asd507', '507'),
(74, 800000, '1611547652.webp', 13, 5, 'asd508', '508'),
(75, 900000, '1611547760.webp', 14, 5, 'asd509', '509'),
(76, 1000000, '1611547860.webp', 14, 5, 'asd510', '510'),
(77, 3500000, '1611548056.webp', 14, 6, 'asd601', '601'),
(78, 70000000, '1611548204.webp', 15, 6, 'asd602', '602'),
(79, 4000000, '1611548354.webp', 15, 6, 'asd603', '603'),
(80, 5000000, '1611548486.webp', 16, 6, 'asd604', '604'),
(81, 8000000, '1611548627.webp', 15, 6, 'asd605', '605'),
(82, 8000000, '1611548758.webp', 15, 6, 'asd606', '606'),
(83, 5000000, '1611548928.webp', 14, 6, 'asd607', '607'),
(84, 2000000, '1611549088.webp', 13, 6, 'asd608', '608'),
(85, 1200000, '1611549218.webp', 16, 6, 'asd609', '609'),
(86, 2500000, '1611549349.webp', 10, 6, 'asd610', '610');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuoc_tinh`
--

CREATE TABLE `thuoc_tinh` (
  `ma` int(11) NOT NULL,
  `ten_thuoc_tinh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thuoc_tinh`
--

INSERT INTO `thuoc_tinh` (`ma`, `ten_thuoc_tinh`) VALUES
(34, 'Tướng'),
(35, 'Tinh Hoa Lam'),
(36, 'Linh Thú'),
(37, 'Trang phục');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anh_chi_tiet`
--
ALTER TABLE `anh_chi_tiet`
  ADD PRIMARY KEY (`ma`),
  ADD KEY `ma_tai_khoan` (`ma_tai_khoan`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`ma`);

--
-- Chỉ mục cho bảng `gia_tri_thuoc_tinh`
--
ALTER TABLE `gia_tri_thuoc_tinh`
  ADD PRIMARY KEY (`ma_nick`,`ma_thuoc_tinh`),
  ADD KEY `ma_thuoc_tinh` (`ma_thuoc_tinh`);

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
  ADD UNIQUE KEY `tai_khoan` (`tai_khoan`),
  ADD KEY `san_pham_ibfk_1` (`ma_rank`),
  ADD KEY `ma_danh_muc` (`ma_danh_muc`);

--
-- Chỉ mục cho bảng `thuoc_tinh`
--
ALTER TABLE `thuoc_tinh`
  ADD PRIMARY KEY (`ma`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `anh_chi_tiet`
--
ALTER TABLE `anh_chi_tiet`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hoa_don` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `rank`
--
ALTER TABLE `rank`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `thong_tin_nick`
--
ALTER TABLE `thong_tin_nick`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `thuoc_tinh`
--
ALTER TABLE `thuoc_tinh`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `anh_chi_tiet`
--
ALTER TABLE `anh_chi_tiet`
  ADD CONSTRAINT `anh_chi_tiet_ibfk_1` FOREIGN KEY (`ma_tai_khoan`) REFERENCES `thong_tin_nick` (`ma`);

--
-- Các ràng buộc cho bảng `gia_tri_thuoc_tinh`
--
ALTER TABLE `gia_tri_thuoc_tinh`
  ADD CONSTRAINT `gia_tri_thuoc_tinh_ibfk_1` FOREIGN KEY (`ma_nick`) REFERENCES `thong_tin_nick` (`ma`),
  ADD CONSTRAINT `gia_tri_thuoc_tinh_ibfk_2` FOREIGN KEY (`ma_thuoc_tinh`) REFERENCES `thuoc_tinh` (`ma`);

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
