-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 05, 2021 lúc 08:15 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hotel-booking`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_admin`
--

CREATE TABLE `db_admin` (
  `id_user` int(11) NOT NULL,
  `fullname_user` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name_user` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_user` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email_user` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` char(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_admin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address_user` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_admin`
--

INSERT INTO `db_admin` (`id_user`, `fullname_user`, `name_user`, `password_user`, `email_user`, `phone`, `img_admin`, `address_user`) VALUES
(1, 'alo', 'ducanh', '$2y$10$jYDzd34LhKh8fSebrqg9muf79IpomAq1lt.1eucZDsC0MIY.Uji7G', 'tranducanh2404@gmail.com', '123456', 'admin-image1616.jpg', 'alo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_bookingtable`
--

CREATE TABLE `db_bookingtable` (
  `id_bt` int(11) NOT NULL,
  `id_guest` int(11) NOT NULL,
  `name_bt` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email_bt` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone_bt` int(20) NOT NULL,
  `type_bt` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `person_bt` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_bt` date NOT NULL,
  `time_bt` time NOT NULL,
  `status_bt` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_bookingtable`
--

INSERT INTO `db_bookingtable` (`id_bt`, `id_guest`, `name_bt`, `email_bt`, `phone_bt`, `type_bt`, `person_bt`, `date_bt`, `time_bt`, `status_bt`) VALUES
(1, 1, 'đức anh', 'tranducanh@gamil.com', 123456, 'Bàn Giản Dị', '2', '2021-11-07', '10:59:00', 'Oke duk'),
(2, 1, 'đức anh', 'tranducanh@gamil.com', 123456, 'Bàn Cao Cấp', '2', '2021-11-07', '10:59:00', 'Đang xử lý'),
(3, 1, 'đức anh', 'tranducanh@gamil.com', 123456, 'Bàn Siêu Cấp', '3', '2021-11-13', '11:07:00', 'Đang xử lý'),
(5, 1, 'đức anh', 'tranducanh@gmail.com', 123456, 'Bàn Vip Pro', '2', '2021-11-27', '03:15:00', 'Đang xử lý'),
(6, 2, 'đức anh', 'tranducanh@gmail.com', 123456, 'Bàn Cao Cấp', '3', '2021-12-05', '04:22:00', 'Đang xử lý'),
(7, 2, 'đức anh', 'tranducanh@gmail.com', 123456, 'Bàn Cao Cấp', '3', '2021-12-05', '04:22:00', 'Đang xử lý'),
(8, 2, 'đức anh', 'tranducanh@gmail.com', 123456, 'Bàn Vip Pro', '4', '2021-11-21', '11:22:00', 'Đang xử lý'),
(9, 3, 'cc', '123@gmail.com', 1234563231, 'Bàn Cao Cấp', '4', '2021-11-14', '02:25:00', 'Đang xử lý'),
(10, 3, 'đức anh', 'tranducanh@gamil.com', 123456, 'Bàn Siêu Cấp', '4', '2021-11-17', '04:03:00', 'Đang xử lý'),
(11, 3, 'đức anh', 'tranducanh@gmail.com', 1234563231, 'Bàn Vip Pro', '3', '2021-11-27', '05:29:00', 'Đang xử lý'),
(12, 3, 'đức anh 12345', 'tranducanh@gamil.com', 1234563231, 'Bàn Siêu Cấp', '3', '2021-11-14', '14:28:00', 'Đang xử lý'),
(13, 1, 'đức anh 123456767567', '123@gmail.com', 2147483647, 'Bàn Giản Dị', '3', '2021-12-10', '17:34:00', 'Đang xử lý'),
(14, 3, 'Đỗ Quang Tuấn', 'tuan@gmail.com', 1, 'Bàn Giản Dị', '2', '2021-11-18', '02:03:00', 'Đang xử lý');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_check_room`
--

CREATE TABLE `db_check_room` (
  `id_cr` int(11) NOT NULL,
  `id_guest` int(11) NOT NULL,
  `id_rm` int(11) NOT NULL,
  `type_cr` varchar(255) NOT NULL,
  `price_cr` int(255) NOT NULL,
  `name_cr` varchar(255) NOT NULL,
  `phone_cr` char(15) NOT NULL,
  `email_cr` char(255) NOT NULL,
  `checkin_cr` date NOT NULL,
  `checkout_cr` date NOT NULL,
  `day_cr` int(255) NOT NULL,
  `total_price` int(255) NOT NULL,
  `status_cr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_check_room`
--

INSERT INTO `db_check_room` (`id_cr`, `id_guest`, `id_rm`, `type_cr`, `price_cr`, `name_cr`, `phone_cr`, `email_cr`, `checkin_cr`, `checkout_cr`, `day_cr`, `total_price`, `status_cr`) VALUES
(20, 3, 1, 'Luxude', 900000, 'tuấn 123', '12345678', 'tranducanh@gmail.com', '2021-11-13', '2021-11-14', 1, 900000, 'Oke duk'),
(21, 3, 1, 'Luxude', 900000, 'tuất', '12345678', 'tranducanh@gmail.com', '2021-11-06', '2021-11-14', 8, 7200000, 'Đang xử lí'),
(22, 3, 1, 'Luxude', 900000, 'Kaito rác', '12345679', 'Rac@gmail.com', '2021-11-26', '2021-11-28', 2, 1800000, 'Đang xử lí'),
(23, 3, 1, 'Luxude', 900000, 'Kaito rác', '12345679', 'Rac@gmail.com', '2021-11-26', '2021-11-28', 2, 1800000, 'Đang xử lí'),
(24, 3, 1, 'Luxude', 900000, 'Kaito rác vl', '12345678789', 'Rac123@gmail.com', '2021-11-13', '2021-11-21', 8, 7200000, 'Đang xử lí'),
(25, 3, 1, 'Luxude', 900000, 'Kaito rác vl', '12345678789', 'Rac123@gmail.com', '2021-11-13', '2021-11-21', 8, 7200000, 'Đang xử lí'),
(27, 1, 1, 'Luxude', 900000, 'alo', '12345678', 'tranducanh@gmail.com', '2021-11-07', '2021-11-10', 3, 2700000, 'Đang xử lí'),
(28, 3, 1, 'Luxude', 900000, 'Vướng Quang Ninh', '1', '1@gmail.com', '2021-11-17', '2021-11-17', 0, 0, 'Đang xử lí');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_rooms`
--

CREATE TABLE `db_rooms` (
  `id_rm` int(11) NOT NULL,
  `name_rm` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `area_rm` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `capacity_rm` int(11) NOT NULL,
  `des_rm` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image_rm` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `available_rm` int(11) NOT NULL,
  `price_rm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_rooms`
--

INSERT INTO `db_rooms` (`id_rm`, `name_rm`, `area_rm`, `capacity_rm`, `des_rm`, `image_rm`, `available_rm`, `price_rm`) VALUES
(1, 'Luxude', '45 m2', 2, 'Phòng có 1 giường, có tủ lạnh, bàn ghế và nhà vệ sinh có bồn tắm', 'Room-image3081.jpg', 7, 900000),
(3, 'Luxude đôi', '50m2', 2, 'Phòng gồm hai giường, tủ lạnh và có bồn tắm', 'Room-image3739.jpg', 5, 1000000),
(4, 'Executive Suite', '70m2', 2, 'Phòng có nhiều tiện ích như: Tivi, tủ lạnh, loa\r\nPhòng bao gồm một giường và có bồn tắm', 'Room-image6707.jpg', 12, 1500000),
(6, 'Hội trường', '500m2', 200, 'Hội trường to rộng', 'Room-image8862.jpg', 1, 15000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_service`
--

CREATE TABLE `db_service` (
  `id_service` int(11) NOT NULL,
  `name_ser` varchar(150) NOT NULL,
  `des_ser` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_service`
--

INSERT INTO `db_service` (`id_service`, `name_ser`, `des_ser`) VALUES
(1, 'đám cưới', 'hello'),
(2, 'Họp cc', 'xin chào'),
(3, 'Họp', 'xin chào'),
(4, 'ăn cứt\r\n', 'xin chào'),
(5, 'chiến xiên', 'xin chào'),
(6, 'chiến', 'xin chào');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_users`
--

CREATE TABLE `db_users` (
  `id_guest` int(11) NOT NULL,
  `username_guest` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fullname_guest` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_guest` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email_guest` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone_guest` char(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_guest` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address_guest` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_users`
--

INSERT INTO `db_users` (`id_guest`, `username_guest`, `fullname_guest`, `password_guest`, `email_guest`, `phone_guest`, `img_guest`, `address_guest`) VALUES
(1, 'ducanh123', 'alo anh bình gâu ', '$2y$10$0CsNaSCi60.rueWjEEW7meV3escRTLSOrpgPPVPNKAuxMz/.sIEJK', 'tranducanh@gamil.com', '123456', 'profile-image3624.png', '22'),
(2, 'ducanh1234', 'alo', '$2y$10$6BaGy0JL7o7NNtKnUT2Bm.f27WaN.Gjop8IUa82addTIIooQd9xjS', 'tranducanh@gmail.com', '123456', 'hoanglong.png', '22'),
(3, 'ninh', 'alo', '$2y$10$cmJbUvs9F0btAaUP/JlDoOnaWcWJ2JVeoy5.DT2L0ycb7iaDLTznK', '123@gmail.com', '123456', 'profile-image1736.png', 'há'),
(4, 'hiep', 'Hiệp Trần', '$2y$10$Mq1e.KVHo29Ug6yvFiboTuZTFarPs010k/izc3p27ASfHkFZNBiQC', 'hiep@gmail.com', '1', 'hoanglong.png', 'Hưng Yên');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_admin`
--
ALTER TABLE `db_admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `db_bookingtable`
--
ALTER TABLE `db_bookingtable`
  ADD PRIMARY KEY (`id_bt`),
  ADD KEY `id_guest` (`id_guest`);

--
-- Chỉ mục cho bảng `db_check_room`
--
ALTER TABLE `db_check_room`
  ADD PRIMARY KEY (`id_cr`),
  ADD KEY `id_guest` (`id_guest`),
  ADD KEY `id_rm` (`id_rm`);

--
-- Chỉ mục cho bảng `db_rooms`
--
ALTER TABLE `db_rooms`
  ADD PRIMARY KEY (`id_rm`);

--
-- Chỉ mục cho bảng `db_service`
--
ALTER TABLE `db_service`
  ADD PRIMARY KEY (`id_service`);

--
-- Chỉ mục cho bảng `db_users`
--
ALTER TABLE `db_users`
  ADD PRIMARY KEY (`id_guest`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `db_admin`
--
ALTER TABLE `db_admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `db_bookingtable`
--
ALTER TABLE `db_bookingtable`
  MODIFY `id_bt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `db_check_room`
--
ALTER TABLE `db_check_room`
  MODIFY `id_cr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `db_rooms`
--
ALTER TABLE `db_rooms`
  MODIFY `id_rm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `db_service`
--
ALTER TABLE `db_service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `db_users`
--
ALTER TABLE `db_users`
  MODIFY `id_guest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `db_bookingtable`
--
ALTER TABLE `db_bookingtable`
  ADD CONSTRAINT `db_bookingtable_ibfk_1` FOREIGN KEY (`id_guest`) REFERENCES `db_users` (`id_guest`);

--
-- Các ràng buộc cho bảng `db_check_room`
--
ALTER TABLE `db_check_room`
  ADD CONSTRAINT `db_check_room_ibfk_1` FOREIGN KEY (`id_guest`) REFERENCES `db_users` (`id_guest`),
  ADD CONSTRAINT `db_check_room_ibfk_2` FOREIGN KEY (`id_rm`) REFERENCES `db_rooms` (`id_rm`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
