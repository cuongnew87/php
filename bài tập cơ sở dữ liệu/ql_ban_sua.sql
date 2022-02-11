-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 11, 2022 lúc 05:45 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_ban_sua`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_sua`
--

CREATE TABLE `hang_sua` (
  `id` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_sua`
--

INSERT INTO `hang_sua` (`id`, `name`, `address`, `phone`, `email`) VALUES
('AB', 'Abbott', 'Công ty nhập khẩu Việt Nam', '8741258', 'abbott@ab.com'),
('DL', 'Dutch Lady', 'Khu công nghiệp Biên Hòa - Đồng Nai', '7826451', 'dutchlady@dl.com'),
('DM', 'Dumex', 'Khu công nghiệp Sóng Thần Bình Dương', '6258943', 'dumex@dm.com'),
('DS', 'Daisy', 'Khu công nghiệp Biên Hòa - Đồng Nai', '5789321', 'daisy@gmail.com'),
('MJ', 'Mead Johnson', 'Công ty nhập khẩu Việt Nam', '8741258', 'meadjohnson@mj.com'),
('NTF', 'Nutifood', 'Khu công nghiệp Sóng Thần Bình Dương', '7895632', 'nutifood@ntf.com'),
('VNM', 'Vinamilk', '123 Nguyễn Du - Quận 1 - TP.HCM', '8794561', 'vinamilk@vnm.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gender` int(255) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `name`, `gender`, `address`, `phone`, `email`) VALUES
('kh001', 'Khuất Thùy Phương', 1, 'A21 Nguyễn Oanh quận Gò Vấp', '9874125', 'ktphuong@hcmuns.edu.vn'),
('kh002', 'Đỗ Lâm Thiên', 1, '357 Lê Hồng Phong Q.11', '8351056', 'ktphuong@hcmuns.edu.vn'),
('kh003', 'Phạm Thị Nhung', 1, '56 Đinh Tiên Hoàng quận 1', '9745698', 'ktphuong@hcmuns.edu.vn'),
('kh004', 'Nguyễn Khắc Thiện', 0, '12bis Đường 3-2 quận 10', '8769128', 'hup@gmail.com'),
('kh005', 'Tô Trần Hồ Giảng', 0, '75 Nguyễn Kiệm quận Gò Vấp', '5792564', ''),
('kh006', 'Nguyễn Kiến Thi', 1, '357 Lê Hồng Phong Q.10', '9874125', ''),
('kh007', 'Nguyễn Anh Tuấn', 0, '1/2bis Nơ Trang Long Q.BT TP.HCM', '9874125', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sua`
--

CREATE TABLE `sua` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `weight` int(255) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `nutrition` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `positive` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sua`
--

INSERT INTO `sua` (`id`, `name`, `company`, `type`, `weight`, `price`, `image`, `nutrition`, `positive`) VALUES
(1, 'Jane Hunt', 'Vel Nisl Institute', 'Rudyard Cohen', 877, 26.76, 'image/sua-01.jpg', '', ''),
(2, 'Rina Gray', 'Ac Risus Limited', 'Connor Mueller', 943, 19.52, 'image/sua-02.jpg', '', ''),
(3, 'Maggie Silva', 'Nibh Lacinia LLP', 'Alma Pope', 343, 3.6, 'image/sua-03.jpg', '', ''),
(4, 'Keely Drake', 'Donec Nibh Institute', 'Meghan Weber', 618, 53.12, 'image/sua-04.jpg', '', ''),
(5, 'Signe Stewart', 'Vulputate Nisi Industries', 'Jakeem Higgins', 400, 22.91, 'image/sua-05.jpg', '', ''),
(6, 'TaShya Chambers', 'Metus Aliquam LLC', 'Sopoline Holmes', 211, 2.07, 'image/sua-01.jpg', '', ''),
(7, 'Cara Stone', 'Iaculis Aliquet Foundation', 'Selma Sykes', 398, 83.62, 'image/sua-02.jpg', '', ''),
(8, 'Keith Martinez', 'Sem Egestas Industries', 'Cherokee Bryant', 106, 94.02, 'image/sua-03.jpg', '', ''),
(9, 'Ava Summers', 'Molestie In Tempus Ltd', 'Arden Cash', 180, 31.84, 'image/sua-04.jpg', '', ''),
(10, 'Dahlia Thompson', 'Eget Ipsum PC', 'Quyn Schneider', 613, 97.66, 'image/sua-05.jpg', '', ''),
(11, 'Carl Houston', 'Magna A Neque Associates', 'Catherine Ochoa', 88, 24.83, '', '', ''),
(12, 'Shafira Robinson', 'Metus In LLP', 'Clare Bridges', 468, 80.71, '', '', ''),
(13, 'Aidan Foster', 'Montes Nascetur PC', 'Jamalia Watts', 343, 4.35, '', '', ''),
(14, 'Indira Howe', 'Dui In LLC', 'Tate Pierce', 121, 21.06, '', '', ''),
(15, 'Dale Murphy', 'Sed Nunc LLC', 'Jerry Richardson', 123, 28.58, '', '', ''),
(16, 'Kathleen Wilkins', 'Nam Porttitor Associates', 'Marsden Pate', 767, 53.4, '', '', ''),
(17, 'Odysseus Banks', 'Eu Odio Industries', 'Odysseus Erickson', 333, 91.64, '', '', ''),
(18, 'Igor Small', 'Lorem Sit Limited', 'Lewis Keith', 426, 77.66, '', '', ''),
(19, 'Noelani Todd', 'Nulla LLP', 'Winifred Barton', 677, 88.8, '', '', ''),
(20, 'Mara Strong', 'Sollicitudin Orci Limited', 'Jael Colon', 819, 17.06, '', '', ''),
(21, 'Sữa ông thọ', 'Abbott', 'Sữa đặc', 123, 13000, 'image/144565.jpg', 'Ông nội', 'ông nội'),
(22, 'Sữa ông thọ', 'Abbott', 'Sữa đặc', 123, 13000, 'image/144565.jpg', 'Ông nội', 'ông nội'),
(23, 'Sữa ông già', 'Abbott', 'Sữa chua', 56, 15000, 'image/1186318.jpg', 'Ông', 'bà'),
(24, 'Sữa ông già', 'Abbott', 'Sữa chua', 56, 15000, 'image/1186318.jpg', 'Ông', 'bà'),
(25, 'con bò khóc', 'Mead Johnson', 'Sữa bột', 345, 123000, 'image/294213.jpg', 'Nước mắt', 'exo'),
(26, 'sữa', 'Abbott', 'Sữa tươi', 1, 1, 'image/Cô bé mùa đông_ (1).jpg', '1', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hang_sua`
--
ALTER TABLE `hang_sua`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sua`
--
ALTER TABLE `sua`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sua`
--
ALTER TABLE `sua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
