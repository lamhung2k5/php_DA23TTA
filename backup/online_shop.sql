-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2026 at 02:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `maloai` varchar(5) NOT NULL,
  `tenloai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`) VALUES
('ML001', 'Công nghệ thông tin'),
('ML002', 'Kinh tế'),
('ML003', 'Du lịch'),
('ML004', 'Văn học'),
('ML005', 'Phát triển bản thân');

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `idsach` int(11) NOT NULL,
  `tensach` varchar(100) NOT NULL,
  `hinhsach` text NOT NULL,
  `mota` text NOT NULL,
  `gia` int(11) NOT NULL DEFAULT 0,
  `soluong` int(11) NOT NULL DEFAULT 0,
  `maloai` varchar(5) NOT NULL,
  `nxb` varchar(100) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`idsach`, `tensach`, `hinhsach`, `mota`, `gia`, `soluong`, `maloai`, `nxb`, `active`) VALUES
(1, 'Nhập môn lập trình PHP', 'hinhanh/sach1.jpg', 'Học PHP từ cơ bản đến xử lý biểu mẫu và cơ sở dữ liệu.', 99000, 15, 'ML001', 'NXB Công nghệ', 1),
(2, 'Cơ sở dữ liệu MySQL', 'hinhanh/sach2.jpg', 'Các kỹ thuật thiết kế cơ sở dữ liệu và câu lệnh SQL.', 115000, 19, 'ML001', 'NXB Công nghệ', 1),
(3, 'Tư duy kinh tế hiện đại', 'hinhanh/sach3.jpg', 'Kiến thức nền tảng về kinh tế và quản lý tài chính.', 85000, 16, 'ML002', 'NXB Kinh tế', 1),
(4, 'Kỹ năng quản lý tài chính', 'hinhanh/sach4.jpg', 'Những thói quen tài chính hữu ích cho người mới bắt đầu.', 79000, 15, 'ML002', 'NXB Tổng hợp', 1),
(5, 'Khám phá Việt Nam', 'hinhanh/sach5.jpg', 'Hành trình du lịch và khám phá vẻ đẹp Việt Nam.', 109000, 18, 'ML003', 'NXB Du lịch', 1),
(6, 'Cẩm nang du lịch châu Á', 'hinhanh/sach6.jpg', 'Những điểm đến và kinh nghiệm du lịch châu Á.', 125000, 10, 'ML003', 'NXB Du lịch', 1),
(7, 'Những trang văn tuổi trẻ', 'hinhanh/sach7.jpg', 'Tập hợp các câu chuyện nhẹ nhàng về tuổi trẻ.', 89000, 22, 'ML004', 'NXB Văn học', 1),
(8, 'Mùa hoa và ký ức', 'hinhanh/sach8.jpg', 'Những tản văn về gia đình và ký ức.', 92000, 23, 'ML004', 'NXB Văn học', 1),
(9, 'Mỗi ngày một bước tiến', 'hinhanh/sach9.jpg', 'Phát triển bản thân bằng những thay đổi nhỏ.', 99000, 19, 'ML005', 'NXB Trẻ', 1),
(10, 'Sống tích cực mỗi ngày', 'hinhanh/sach10.jpg', 'Tư duy, mục tiêu và các kỹ năng sống tích cực.', 78000, 24, 'ML005', 'NXB Tổng hợp', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`idsach`),
  ADD KEY `fk_sach_loai` (`maloai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sach`
--
ALTER TABLE `sach`
  MODIFY `idsach` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `fk_sach_loai` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
