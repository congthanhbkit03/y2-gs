-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 17, 2018 lúc 08:02 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `yii2-giasu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `caphoc`
--

CREATE TABLE `caphoc` (
  `id` int(11) NOT NULL,
  `caphoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `caphoc`
--

INSERT INTO `caphoc` (`id`, `caphoc`) VALUES
(1, 'Cấp 1'),
(2, 'Cấp 2'),
(3, 'Cấp 3'),
(4, 'Khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giasu`
--

CREATE TABLE `giasu` (
  `id` int(11) NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinh` int(11) NOT NULL,
  `cmnd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anhcmnd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `svtruong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gvtruong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nganhhoc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `luongyeucau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giasu`
--

INSERT INTO `giasu` (`id`, `hoten`, `ngaysinh`, `gioitinh`, `cmnd`, `anh`, `anhcmnd`, `email`, `sdt`, `matkhau`, `svtruong`, `gvtruong`, `nganhhoc`, `diachi`, `luongyeucau`, `trangthai`) VALUES
(1, '111', '111', 0, '', '', '', '11', '00000000000', '0000000', '', '', '', '', '', NULL),
(2, '1111111', '111111', 1, '111111', '1111111', '', '111111', '11111111111', '11111111111', '', '1111', '', '111111', '11111111', NULL),
(3, '1111111', '11', 1, '', '', '', '11111111', '111111111', '11', '', '', '', '1', '', NULL),
(4, '22', '22', 222, '', '', '', '222', '2', '2222', '', '', '', '22222', '', NULL),
(5, '33', '33', 3, '', '', '', '333', '333', '333', '', '', '', '', '', NULL),
(6, '88', '88', 8, '', '', '', '8888', '88', '8888', '', '', '', '', '', NULL),
(7, '666', '66666', 6, '', '', '', '6', '66', '666', '', '', '', '', '', NULL),
(8, '666', '66666', 6, '', '', '', '6', '66', '666', '', '', '', '', '', NULL),
(9, '666', '66666', 6, '', '', '', '6', '66', '666', '', '', '', '', '', NULL),
(10, 'Bui Cong Thanh', '18/02/1985', 0, '212228033', '', '', 'congthanh@gmail.com', '09090909090', '09090909', '', '', '', 'Nghia Hiep - Tu Nghia - Quang Ngai', '100000', NULL),
(11, '33333333', '333', 3, '', '', '', '333333333', '333', '33333333333', '', '', '', '', '3000000', NULL),
(12, '44444444', '4444444', 44444, '44444', 'D:\\xampp\\htdocs\\yii2\\giasu/uploads/31841474_825447384292190_5029537764543037440_n.jpg', 'D:\\xampp\\htdocs\\yii2\\giasu/uploads/31841473_825447377625524_626850399541788672_n.jpg', '444444444', '4444444', '44444444', '', '', '', '4444', '', NULL),
(13, '6767', '6767', 6767, '', 'D:\\xampp\\htdocs\\yii2\\giasu/uploads/giasu/31841474_825447384292190_5029537764543037440_n.jpg', 'D:\\xampp\\htdocs\\yii2\\giasu/uploads/giasu/31841489_825448234292105_4594733112495177728_n.jpg', '6767', '676', '6767', '', '', '', '6767', '', NULL),
(14, '00', '0', 0, '00', 'D:\\xampp\\htdocs\\yii2\\giasu/uploads/giasu/31791624_825447954292133_79227509362655232_n.jpg', 'D:\\xampp\\htdocs\\yii2\\giasu/uploads/giasu/31841473_825447377625524_626850399541788672_n.jpg', '00', '00', '00', '', '', '', '00', '', NULL),
(15, '5555', '5555', 55555, '', '/uploads/giasu/31841474_825447384292190_5029537764543037440_n.jpg', '/uploads/giasu/31841473_825447377625524_626850399541788672_n.jpg', '555555', '5555555', '555555', '', '', '', '5555555', '55', NULL),
(16, '3232', '3323', 23232, '', 'http://giasu.com/uploads/giasu/31841473_825447377625524_626850399541788672_n.jpg', 'http://giasu.com/uploads/giasu/31784230_825448030958792_2001641552358670336_n.jpg', '22323', '323232', '23232', '', '', '', '', '', NULL),
(17, 'Le Thi B', '19/02/1992', 1, '21222222', 'http://giasu.com/uploads/giasu/31919437_825448230958772_7182128386356019200_n.jpg', 'http://giasu.com/uploads/giasu/31589989_825447960958799_5004199858383355904_n.jpg', 'lethib@gail.com', '0022244', '2222', 'PDU', 'PDU', '', '', '12000000', NULL),
(18, '45454', '5454', 4, '', 'http://giasu.com/uploads/giasu/31791624_825447954292133_79227509362655232_n.jpg', 'http://giasu.com/uploads/giasu/31784230_825448030958792_2001641552358670336_n.jpg', '54545', '45454', '4545', '', '', '', '54', '', NULL),
(19, '34', '4343', 4324, '', 'http://giasu.com/uploads/giasu/31790935_825448217625440_2466543020229525504_n.jpg', 'http://giasu.com/uploads/giasu/31791624_825447954292133_79227509362655232_n.jpg', '342', '343', '43244', '', '', '', '434', '', NULL),
(20, '76575', '67567', 67567, '', 'http://giasu.com/uploads/giasu/31791624_825447954292133_79227509362655232_n.jpg', 'http://giasu.com/uploads/giasu/31790935_825448217625440_2466543020229525504_n.jpg', '757', '6756', 'ểwr', '', '', '', '', '', NULL),
(21, '76575', '67567', 67567, '', 'http://giasu.com/uploads/giasu/31791624_825447954292133_79227509362655232_n.jpg', 'http://giasu.com/uploads/giasu/31790935_825448217625440_2466543020229525504_n.jpg', '757', '6756', 'ểwr', '', '', '', '', '', NULL),
(22, '34', '53', 533, '', 'http://giasu.com/uploads/giasu/31841473_825447377625524_626850399541788672_n.jpg', 'http://giasu.com/uploads/giasu/31791624_825447954292133_79227509362655232_n.jpg', '4534', '453', '34534', '', '', '', '', '', NULL),
(23, '4234', '3432', 3, '444', 'http://giasu.com/uploads/giasu/31791624_825447954292133_79227509362655232_n.jpg', 'http://giasu.com/uploads/giasu/31841489_825448234292105_4594733112495177728_n.jpg', '44', '444', '4444', '', '', '', '4444', '', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giasucaphoc`
--

CREATE TABLE `giasucaphoc` (
  `id` int(11) NOT NULL,
  `giasu_id` int(11) NOT NULL,
  `caphoc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giasucaphoc`
--

INSERT INTO `giasucaphoc` (`id`, `giasu_id`, `caphoc_id`) VALUES
(1, 8, 2),
(2, 9, 2),
(3, 9, 4),
(4, 10, 1),
(5, 10, 2),
(6, 11, 2),
(7, 11, 3),
(8, 12, 1),
(9, 12, 2),
(10, 12, 3),
(11, 12, 4),
(12, 13, 1),
(13, 13, 2),
(14, 13, 3),
(15, 13, 4),
(16, 16, 1),
(17, 16, 2),
(18, 16, 3),
(19, 16, 4),
(20, 17, 1),
(21, 17, 2),
(22, 17, 3),
(23, 17, 4),
(24, 18, 1),
(25, 18, 2),
(26, 18, 3),
(27, 18, 4),
(28, 19, 1),
(29, 19, 2),
(30, 19, 3),
(31, 19, 4),
(32, 20, 2),
(33, 21, 2),
(34, 23, 1),
(35, 23, 2),
(36, 23, 3),
(37, 23, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giasukhuvuc`
--

CREATE TABLE `giasukhuvuc` (
  `id` int(11) NOT NULL,
  `giasu_id` int(11) NOT NULL,
  `khuvuc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giasukhuvuc`
--

INSERT INTO `giasukhuvuc` (`id`, `giasu_id`, `khuvuc_id`) VALUES
(1, 10, 3),
(2, 10, 1),
(3, 11, 1),
(4, 12, 3),
(5, 12, 1),
(6, 12, 2),
(7, 13, 3),
(8, 13, 1),
(9, 13, 2),
(10, 15, 3),
(11, 15, 1),
(12, 15, 2),
(13, 16, 3),
(14, 17, 3),
(15, 17, 1),
(16, 17, 2),
(17, 18, 3),
(18, 18, 1),
(19, 18, 2),
(20, 19, 3),
(21, 19, 1),
(22, 19, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giasumonhoc`
--

CREATE TABLE `giasumonhoc` (
  `id` int(11) NOT NULL,
  `giasu_id` int(11) NOT NULL,
  `monhoc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giasumonhoc`
--

INSERT INTO `giasumonhoc` (`id`, `giasu_id`, `monhoc_id`) VALUES
(1, 10, 3),
(2, 10, 2),
(3, 10, 6),
(4, 10, 5),
(5, 10, 1),
(6, 11, 3),
(7, 11, 2),
(8, 12, 4),
(9, 12, 3),
(10, 12, 2),
(11, 12, 6),
(12, 12, 5),
(13, 12, 1),
(14, 13, 4),
(15, 13, 3),
(16, 13, 2),
(17, 13, 6),
(18, 13, 5),
(19, 13, 1),
(20, 16, 4),
(21, 16, 3),
(22, 16, 2),
(23, 16, 6),
(24, 16, 5),
(25, 16, 1),
(26, 17, 4),
(27, 17, 3),
(28, 17, 2),
(29, 17, 6),
(30, 17, 5),
(31, 17, 1),
(32, 18, 4),
(33, 18, 3),
(34, 18, 2),
(35, 18, 6),
(36, 18, 5),
(37, 18, 1),
(38, 19, 4),
(39, 19, 3),
(40, 19, 2),
(41, 19, 6),
(42, 19, 5),
(43, 19, 1),
(44, 21, 4),
(45, 21, 3),
(46, 21, 2),
(47, 21, 6),
(48, 21, 5),
(49, 21, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuvuc`
--

CREATE TABLE `khuvuc` (
  `id` int(11) NOT NULL,
  `khuvuc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuvuc`
--

INSERT INTO `khuvuc` (`id`, `khuvuc`) VALUES
(3, 'Sơn Tịnh'),
(1, 'Tp. Quảng Ngãi'),
(2, 'Tư Nghĩa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lopday`
--

CREATE TABLE `lopday` (
  `id` int(11) NOT NULL,
  `monhoc_id` int(11) NOT NULL,
  `caphoc_id` int(11) NOT NULL,
  `khuvuc_id` int(11) NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sobuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thoigian` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mucluong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `yeucau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tennguoidk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdtnguoidk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lopday`
--

INSERT INTO `lopday` (`id`, `monhoc_id`, `caphoc_id`, `khuvuc_id`, `diachi`, `sobuoi`, `thoigian`, `mucluong`, `yeucau`, `tennguoidk`, `sdtnguoidk`, `trangthai`) VALUES
(1, 4, 2, 3, 'Vong xoay Son Tinh', '3', 'Tu sap xep', '1000000', 'Sinh vien ', 'Nguuyen THi A', '0909090909', 1),
(2, 4, 1, 1, '203 Le Lai', '3', 'Sang 3, 5, 7', '1400', 'Sao cung dc', 'Tran Thi B', '090909090909', 0),
(3, 4, 2, 3, 'VSIP Quang Ngai', '3', '3', '12000000', 'Khong', 'Le Thanh C', '0912388333', 0),
(4, 5, 2, 2, 'Nghia Hiep', '3', '2', '1200000', 'Tien si', 'Dinh Van U', '09874223232', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1539164543),
('m130524_201442_init', 1539164545),
('m181009_144212_create_khuvuc', 1539164545),
('m181009_144731_create_monhoc', 1539164546),
('m181009_144803_create_caphoc', 1539164546),
('m181009_148888_create_lopday', 1539164548),
('m181009_149999_create_giasu', 1539164549),
('m181009_155716_create_giasucaphoc', 1539164550),
('m181009_155725_create_giasukhuvuc', 1539164552),
('m181009_155812_create_giasumonhoc', 1539164554),
('m181009_160000_create_phanlop', 1539164556);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `id` int(11) NOT NULL,
  `monhoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`id`, `monhoc`) VALUES
(4, 'Anh'),
(3, 'Hóa'),
(2, 'Lý'),
(6, 'Tiếng Việt'),
(5, 'Tin'),
(1, 'Toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanlop`
--

CREATE TABLE `phanlop` (
  `id` int(11) NOT NULL,
  `lopday_id` int(11) NOT NULL,
  `giasu_id` int(11) DEFAULT NULL,
  `hotengs` int(11) NOT NULL,
  `dienthoaigs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` int(1) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `phone`, `firstname`, `lastname`, `gender`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'ndboS40mL26i-PLoRzvvD3e5wFa-VXpT', '$2y$13$7dlkMiBAL7UnkOMoQXzIleLo4mTeQz6.qIzy1zRODxtDGhztFVpoy', NULL, 'admin@localhost.com', NULL, 'Bui', 'Cong Thanh', NULL, 20, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '11111', 'AkQ-V67FXOKXHykp6C5DON08GQp0OnWC', '$2y$13$7QBmSF/LxwEmZSvBqQXc1OBvk/tbgNAhXUwhAONqNMmpQ.Rs1ZG9y', NULL, 'fsd11@fsdfsdfd.edu77', NULL, 'dsfsd', 'sdfsdf', NULL, 10, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'dfsdf', 'HVv5fXWFKPK3-iW4foObXQqTt_S7lSMs', '$2y$13$ofFWu6pUxcls82knTtObe.HCe/jCcE1C3Xx15iT0N.eru8PBKVome', NULL, 'dfsfd@dfsd.evn', NULL, 'dfsfs', 'dsfsdf', NULL, 10, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'buithanh', 'MbAqGOM0oOkIzUpUaaCdNZXADqQ-Agly', '$2y$13$tJkkvIHhf2vs3UTG0hoBPOk5rV6TbMqH.QWAHqDZMgXHq2n1hSM/S', NULL, 'buithanh@gmail.com', NULL, 'bui', 'thanh', NULL, 20, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'buicongthanh', '21PmTsM_ccH3PdjfkLC6mBcj3QJ0wRYn', '$2y$13$7iT7UT3iYiJ5ROwK4uK33OTCnA4ITguKkz.mDDnXxBKqTi.NX/7VC', NULL, 'thanhcongbui@gmail.com', NULL, 'cong', 'bui', NULL, 20, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'phhuynh1', 'pVUEc6kp_LwDyqSgbjjtxCe6Z2_MXmq3', '$2y$13$6vbxCq10.ZANrOokikKf1.SUxmVyE.rmUHvl.parfl.Xn21kW3QTu', NULL, 'phuynhinh@gmail.com', NULL, 'phu huynh 1', 'phu', NULL, 10, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `caphoc`
--
ALTER TABLE `caphoc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `caphoc` (`caphoc`);

--
-- Chỉ mục cho bảng `giasu`
--
ALTER TABLE `giasu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giasucaphoc`
--
ALTER TABLE `giasucaphoc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_giasucaphoc_giasu` (`giasu_id`),
  ADD KEY `fk_giasucaphoc_caphoc` (`caphoc_id`);

--
-- Chỉ mục cho bảng `giasukhuvuc`
--
ALTER TABLE `giasukhuvuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_giasukhuvuc_giasu` (`giasu_id`),
  ADD KEY `fk_giasukhuvuc_khuvuc` (`khuvuc_id`);

--
-- Chỉ mục cho bảng `giasumonhoc`
--
ALTER TABLE `giasumonhoc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_giasumonhoc_giasu` (`giasu_id`),
  ADD KEY `fk_giasumonhoc_monhoc` (`monhoc_id`);

--
-- Chỉ mục cho bảng `khuvuc`
--
ALTER TABLE `khuvuc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `khuvuc` (`khuvuc`);

--
-- Chỉ mục cho bảng `lopday`
--
ALTER TABLE `lopday`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_lopday_monhoc` (`monhoc_id`),
  ADD KEY `fk_lopday_caphoc` (`caphoc_id`),
  ADD KEY `fk_lopday_khuvuc` (`khuvuc_id`);

--
-- Chỉ mục cho bảng `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `monhoc` (`monhoc`);

--
-- Chỉ mục cho bảng `phanlop`
--
ALTER TABLE `phanlop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_phanlop_lopday` (`lopday_id`),
  ADD KEY `fk_phanlop_giasu` (`giasu_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `caphoc`
--
ALTER TABLE `caphoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `giasu`
--
ALTER TABLE `giasu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT cho bảng `giasucaphoc`
--
ALTER TABLE `giasucaphoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT cho bảng `giasukhuvuc`
--
ALTER TABLE `giasukhuvuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT cho bảng `giasumonhoc`
--
ALTER TABLE `giasumonhoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT cho bảng `khuvuc`
--
ALTER TABLE `khuvuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `lopday`
--
ALTER TABLE `lopday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `phanlop`
--
ALTER TABLE `phanlop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `giasucaphoc`
--
ALTER TABLE `giasucaphoc`
  ADD CONSTRAINT `fk_giasucaphoc_caphoc` FOREIGN KEY (`caphoc_id`) REFERENCES `caphoc` (`id`),
  ADD CONSTRAINT `fk_giasucaphoc_giasu` FOREIGN KEY (`giasu_id`) REFERENCES `giasu` (`id`);

--
-- Các ràng buộc cho bảng `giasukhuvuc`
--
ALTER TABLE `giasukhuvuc`
  ADD CONSTRAINT `fk_giasukhuvuc_giasu` FOREIGN KEY (`giasu_id`) REFERENCES `giasu` (`id`),
  ADD CONSTRAINT `fk_giasukhuvuc_khuvuc` FOREIGN KEY (`khuvuc_id`) REFERENCES `khuvuc` (`id`);

--
-- Các ràng buộc cho bảng `giasumonhoc`
--
ALTER TABLE `giasumonhoc`
  ADD CONSTRAINT `fk_giasumonhoc_giasu` FOREIGN KEY (`giasu_id`) REFERENCES `giasu` (`id`),
  ADD CONSTRAINT `fk_giasumonhoc_monhoc` FOREIGN KEY (`monhoc_id`) REFERENCES `monhoc` (`id`);

--
-- Các ràng buộc cho bảng `lopday`
--
ALTER TABLE `lopday`
  ADD CONSTRAINT `fk_lopday_caphoc` FOREIGN KEY (`caphoc_id`) REFERENCES `caphoc` (`id`),
  ADD CONSTRAINT `fk_lopday_khuvuc` FOREIGN KEY (`khuvuc_id`) REFERENCES `khuvuc` (`id`),
  ADD CONSTRAINT `fk_lopday_monhoc` FOREIGN KEY (`monhoc_id`) REFERENCES `monhoc` (`id`);

--
-- Các ràng buộc cho bảng `phanlop`
--
ALTER TABLE `phanlop`
  ADD CONSTRAINT `fk_phanlop_giasu` FOREIGN KEY (`giasu_id`) REFERENCES `giasu` (`id`),
  ADD CONSTRAINT `fk_phanlop_lopday` FOREIGN KEY (`lopday_id`) REFERENCES `lopday` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;