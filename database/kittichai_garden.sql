-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2018 at 04:47 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kittichai_garden`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `idNo` varchar(15) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `typeAccount` varchar(15) NOT NULL,
  `image` text NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `email`, `firstName`, `lastName`, `idNo`, `birthday`, `gender`, `address`, `phone`, `typeAccount`, `image`, `status`) VALUES
('adminSun', '$2y$10$i5I78fNXjimF.aUMZh3xyuWX5NxpAegNHJAKp5QwP568h2u8iXmH6', '-', '-', '-', '-', '2018-03-14', 'male', '-', '-', 'admin', 'upload-files/files/profile/default-avatar.png', 'Activate'),
('bankkies', '$2y$10$hBJ1kPPVHmB2ZBO2Rgeaw.TWgitt8Z.x2MvAoxsj8Ju6XwYRTAroe', 'kittichai.te@ku.th', 'kittichai', 'terakul', '1100400849931', '2539-12-08', 'male', '980/77', '0854491469', 'user', 'upload-files/files/profile/bankkies6IMG_1027.jfif', 'Activate'),
('cher', '$2y$10$.QAUqr/fqrc97D3aqw.oJe1Vo2LV5qUDXIOaA8ONNaf22b2UWskGm', 'cherpang@gmail.com', 'Cherpang', 'BNK', '01548267894748', '2002-10-14', 'male', 'ม.เกษตร', '081248888', 'admin', 'upload-files/files/profile/cherIMG_2122.jpg', 'Activate'),
('mew', '$2y$10$Dao4Zsc6/k4s/LakCUDZbuT8sTZQppBfSNpsJG8IHQY.qgFAmWD9K', 'mew@gmail.com', 'นิษฐา', 'จิรยั่งยืน', '4571245678456', '1995-08-12', 'male', 'Bangkok', '0815224434', 'admin', 'upload-files/files/profile/mew1377853039_1380685977.jpg', 'Activate'),
('sun_vsp', '$2y$10$EZTixvsYw2MTA9n.G7lr.unt.3rad2/9dM8ddYITpZPaMuVNXri8q', 'vasupol.ch@ku.th', 'Vasupol', 'Chongsathidkiet', '1103300189338', '2018-03-17', 'male', 'Bangkok', '0852224434', 'user', 'upload-files/files/profile/sun_vsptheToys.jpg', 'Activate'),
('wongpiwat', '$2y$10$N/HS44SP0LRAdMAlrgj4kuIbPpm5EucCu7ezS4csLBgp5bJpyEbRe', 'wongpiwat.s@ku.th', 'Wongpiwat', 'Sangiam', '1309901371070', '2017-01-01', 'male', 'Bangkok, Thailand', '0878697008', 'user', 'upload-files/files/profile/wongpiwatpoomLINE_P20180228_16322680.jpg', 'Activate');

-- --------------------------------------------------------

--
-- Table structure for table `activitylogs`
--

CREATE TABLE `activitylogs` (
  `username` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `idEvent` int(30) NOT NULL,
  `event` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activitylogs`
--

INSERT INTO `activitylogs` (`username`, `date`, `time`, `idEvent`, `event`) VALUES
('adminSun', '2018-03-13', '01:05:38', 0, 'Sign out'),
('adminSun', '2018-03-13', '01:20:38', 0, 'Sign in'),
('adminSun', '2018-03-13', '01:20:52', 0, 'Edit account cher'),
('adminSun', '2018-03-13', '01:21:00', 0, 'Sign out'),
('adminSun', '2018-03-13', '01:21:49', 0, 'Sign in'),
('adminSun', '2018-03-13', '01:22:03', 0, 'Sign out'),
('adminSun', '2018-03-13', '01:27:13', 0, 'Sign in'),
('adminSun', '2018-03-13', '01:27:23', 0, 'Sign out'),
('adminSun', '2018-03-13', '01:30:23', 0, 'Sign in'),
('adminSun', '2018-03-13', '01:35:51', 0, 'Edit account cher'),
('adminSun', '2018-03-13', '01:35:58', 0, 'Edit account sunny'),
('adminSun', '2018-03-13', '01:36:02', 0, 'Sign out'),
('adminSun', '2018-03-13', '01:36:11', 0, 'Sign in'),
('adminSun', '2018-03-13', '01:38:11', 0, 'Sign up'),
('adminSun', '2018-03-13', '01:38:33', 0, 'Sign out'),
('adminSun', '2018-03-13', '02:44:49', 0, 'Sign in'),
('adminSun', '2018-03-13', '02:46:54', 0, 'Sign up'),
('adminSun', '2018-03-13', '02:47:16', 0, 'Edit account poom'),
('adminSun', '2018-03-13', '02:47:17', 0, 'Edit account poom'),
('adminSun', '2018-03-13', '02:47:28', 0, 'Edit account poom'),
('adminSun', '2018-03-13', '02:47:29', 0, 'Edit account poom'),
('adminSun', '2018-03-13', '02:47:42', 0, 'Edit account poom'),
('adminSun', '2018-03-13', '02:48:18', 0, 'Edit account poom'),
('adminSun', '2018-03-13', '02:48:31', 0, 'Sign out'),
('adminSun', '2018-03-13', '02:56:21', 0, 'Sign in'),
('adminSun', '2018-03-13', '02:58:57', 0, 'Sign up'),
('adminSun', '2018-03-13', '02:59:44', 0, 'Edit account boylnwza007'),
('adminSun', '2018-03-13', '02:59:52', 0, 'Sign out'),
('adminSun', '2018-03-13', '03:25:49', 0, 'Sign in'),
('adminSun', '2018-03-13', '03:31:08', 0, 'Edit account boylnwza007'),
('adminSun', '2018-03-13', '03:36:33', 0, 'Sign out'),
('adminSun', '2018-03-13', '03:37:00', 0, 'Sign in'),
('adminSun', '2018-03-13', '03:37:54', 0, 'Edit account sunny'),
('adminSun', '2018-03-13', '03:44:36', 0, 'Sign out'),
('adminSun', '2018-03-13', '04:30:54', 0, 'Sign in'),
('adminSun', '2018-03-13', '04:42:20', 0, 'Sign in'),
('adminSun', '2018-03-13', '04:42:45', 0, 'Sign out'),
('adminSun', '2018-03-13', '04:43:05', 0, 'Create webboard 1'),
('adminSun', '2018-03-13', '04:43:32', 0, 'Create webboard 1'),
('adminSun', '2018-03-13', '04:43:46', 0, 'Create webboard 1'),
('adminSun', '2018-03-13', '04:50:14', 0, 'Create event Sunny'),
('adminSun', '2018-03-13', '04:50:20', 0, 'Sign out'),
('adminSun', '2018-03-13', '04:52:55', 0, 'Sign in'),
('adminSun', '2018-03-13', '04:53:24', 0, 'Sign out'),
('adminSun', '2018-03-13', '04:54:59', 0, 'Sign in'),
('adminSun', '2018-03-13', '04:56:01', 0, 'Sign out'),
('adminSun', '2018-03-13', '04:58:02', 0, 'Sign in'),
('adminSun', '2018-03-13', '04:58:58', 0, 'Sign out'),
('adminSun', '2018-03-13', '07:17:26', 0, 'Sign in'),
('adminSun', '2018-03-13', '07:53:45', 0, 'Sign in'),
('adminSun', '2018-03-13', '07:57:20', 0, 'Delete eventadminSun'),
('adminSun', '2018-03-13', '07:57:35', 0, 'Delete eventadminSun'),
('adminSun', '2018-03-13', '07:57:39', 0, 'Delete eventadminSun'),
('adminSun', '2018-03-13', '07:58:08', 0, 'Delete eventadminSun'),
('adminSun', '2018-03-13', '07:59:31', 0, 'Delete eventadminSun'),
('adminSun', '2018-03-13', '08:01:49', 0, 'Sign out'),
('adminSun', '2018-03-13', '08:02:24', 0, 'Sign in'),
('adminSun', '2018-03-13', '08:05:02', 0, 'Sign out'),
('adminSun', '2018-03-13', '08:05:48', 0, 'Sign in'),
('adminSun', '2018-03-13', '08:11:59', 0, 'Sign out'),
('adminSun', '2018-03-13', '08:16:18', 0, 'Sign in'),
('adminSun', '2018-03-13', '08:23:11', 0, 'Sign out'),
('adminSun', '2018-03-13', '08:28:41', 0, 'Sign up'),
('adminSun', '2018-03-13', '08:29:08', 0, 'Sign up'),
('adminSun', '2018-03-13', '08:37:53', 0, 'Sign out'),
('adminSun', '2018-03-13', '08:39:57', 0, 'Sign in'),
('adminSun', '2018-03-13', '08:40:09', 0, 'Sign out'),
('adminSun', '2018-03-13', '08:40:37', 0, 'Sign in'),
('adminSun', '2018-03-13', '08:41:31', 0, 'Edit account wongpiwat'),
('adminSun', '2018-03-13', '08:41:37', 0, 'Sign out'),
('adminSun', '2018-03-13', '08:42:10', 0, 'Sign in'),
('adminSun', '2018-03-13', '08:43:16', 0, 'Sign out'),
('adminSun', '2018-03-13', '09:24:55', 0, 'Sign in'),
('adminSun', '2018-03-13', '09:25:25', 0, 'Sign out'),
('adminSun', '2018-03-13', '09:28:12', 0, 'Sign in'),
('adminSun', '2018-03-13', '09:28:18', 0, 'Sign out'),
('adminSun', '2018-03-13', '10:14:27', 0, 'Sign in'),
('adminSun', '2018-03-13', '10:24:13', 0, 'Sign out'),
('adminSun', '2018-03-13', '10:37:30', 0, 'Sign in'),
('adminSun', '2018-03-13', '10:37:32', 0, 'Sign out'),
('adminSun', '2018-03-13', '11:08:58', 0, 'Sign in'),
('adminSun', '2018-03-13', '11:09:07', 0, 'Edit account toon'),
('adminSun', '2018-03-13', '11:09:09', 0, 'Sign out'),
('adminSun', '2018-03-13', '11:16:04', 0, 'Sign in'),
('adminSun', '2018-03-13', '11:21:41', 0, 'Sign out'),
('adminSun', '2018-03-13', '11:22:27', 0, 'Sign in'),
('adminSun', '2018-03-13', '11:27:08', 0, 'Sign out'),
('adminSun', '2018-03-13', '11:29:24', 0, 'Sign in'),
('adminSun', '2018-03-13', '11:30:07', 0, 'Sign out'),
('adminSun', '2018-03-13', '12:20:53', 0, 'Sign in'),
('adminSun', '2018-03-13', '12:21:13', 0, 'Edit account sunny'),
('adminSun', '2018-03-13', '12:21:21', 0, 'Edit account sunny'),
('adminSun', '2018-03-13', '12:28:08', 0, 'Create event Tao Kae Noi Presents BNK48'),
('adminSun', '2018-03-13', '12:32:13', 0, 'Create event s'),
('adminSun', '2018-03-13', '12:36:46', 0, 'Create event Tao Kae Noi Presents BNK48 1st Concert \"STARTO\"'),
('bankkies', '2018-03-13', '02:25:41', 0, 'Sign in'),
('bankkies', '2018-03-13', '02:26:40', 0, 'Create webboard อยากจับมือเฌอปรางค์ต้องทำยังไงครับ >////<'),
('bankkies', '2018-03-13', '02:26:47', 0, 'Sign out'),
('bankkies', '2018-03-13', '02:57:34', 0, 'Sign in'),
('bankkies', '2018-03-13', '02:58:58', 0, 'Create webboard สวัสดี'),
('bankkies', '2018-03-13', '03:50:49', 0, 'Sign out'),
('bankkies', '2018-03-13', '07:53:04', 0, 'Sign in'),
('bankkies', '2018-03-13', '07:53:40', 0, 'Sign out'),
('bankkies', '2018-03-13', '08:02:00', 0, 'Sign in'),
('bankkies', '2018-03-13', '08:02:17', 0, 'Sign out'),
('bankkies', '2018-03-13', '08:05:12', 0, 'Sign in'),
('bankkies', '2018-03-13', '08:05:42', 0, 'Sign out'),
('cher', '2018-03-13', '01:05:08', 0, 'Sign out'),
('cher', '2018-03-13', '01:21:07', 0, 'Sign in'),
('cher', '2018-03-13', '01:21:27', 0, 'Sign out'),
('cher', '2018-03-13', '01:26:55', 0, 'Sign in'),
('cher', '2018-03-13', '01:30:19', 0, 'Sign out'),
('cher', '2018-03-13', '02:16:39', 0, 'Sign in'),
('cher', '2018-03-13', '02:18:16', 0, 'Create event สร้างยอดขายเพิ่ม เติมฐานลูกค้าด้วย LINE@'),
('cher', '2018-03-13', '02:19:54', 0, 'Sign in'),
('cher', '2018-03-13', '02:20:00', 0, 'Sign out'),
('cher', '2018-03-13', '02:20:56', 0, 'Create event Tesco Lotus Hackathon 2018 : Revolutionising Retail Towards Thailand 4.0'),
('cher', '2018-03-13', '02:23:33', 0, 'Create event Tesco Lotus Hackathon 2018 : Revolutionising Retail Towards Thailand 4.0'),
('cher', '2018-03-13', '02:24:55', 0, 'Create event SCB EASY WTF (What The Food)'),
('cher', '2018-03-13', '02:27:24', 0, 'Create event Design Your Life (ชีวิตออกแบบได้)'),
('cher', '2018-03-13', '02:28:50', 0, 'Create event SME FAMILY CHARITY RALLY : way to the oscar 2018'),
('cher', '2018-03-13', '02:29:24', 0, 'Sign in'),
('cher', '2018-03-13', '02:30:15', 0, 'Create event SME FAMILY CHARITY RALLY : way to the oscar 2018'),
('cher', '2018-03-13', '02:30:22', 0, 'Sign out'),
('cher', '2018-03-13', '02:31:45', 0, 'Create event งานเทศกาลหนังสือครอบครัวนักอ่าน'),
('cher', '2018-03-13', '02:31:55', 0, 'Sign out'),
('cher', '2018-03-13', '02:37:38', 0, 'Sign in'),
('cher', '2018-03-13', '02:39:04', 0, 'Edit account cher'),
('cher', '2018-03-13', '02:48:19', 0, 'Sign out'),
('cher', '2018-03-13', '02:53:17', 0, 'Sign in'),
('cher', '2018-03-13', '02:54:35', 0, 'Create event Sunny'),
('cher', '2018-03-13', '02:57:25', 0, 'Sign out'),
('cher', '2018-03-13', '04:04:42', 0, 'Sign in'),
('cher', '2018-03-13', '04:29:59', 0, 'Sign out'),
('cher', '2018-03-13', '08:38:28', 0, 'Sign in'),
('cher', '2018-03-13', '08:43:20', 0, 'Sign in'),
('cher', '2018-03-13', '08:44:42', 0, 'Sign out'),
('cher', '2018-03-13', '08:50:03', 0, 'Sign out'),
('cher', '2018-03-13', '08:50:58', 0, 'Sign in'),
('cher', '2018-03-13', '08:55:16', 0, 'Sign out'),
('cher', '2018-03-13', '08:57:39', 0, 'Sign in'),
('cher', '2018-03-13', '08:57:48', 0, 'Sign out'),
('cher', '2018-03-13', '08:59:43', 0, 'Sign in'),
('cher', '2018-03-13', '09:01:09', 0, 'Sign out'),
('cher', '2018-03-13', '09:02:31', 0, 'Sign in'),
('cher', '2018-03-13', '09:03:25', 0, 'Sign out'),
('cher', '2018-03-13', '09:28:22', 0, 'Sign in'),
('cher', '2018-03-13', '09:28:32', 0, 'Sign out'),
('cher', '2018-03-13', '09:32:28', 0, 'Sign in'),
('cher', '2018-03-13', '09:54:19', 0, 'Sign out'),
('cher', '2018-03-13', '09:55:23', 0, 'Sign in'),
('cher', '2018-03-13', '10:54:58', 0, 'Sign out'),
('cher', '2018-03-13', '11:30:38', 0, 'Sign in'),
('cher', '2018-03-13', '11:31:26', 0, 'Create webboard รถสวยครับ'),
('cher', '2018-03-13', '11:33:56', 0, 'Sign out'),
('cher', '2018-03-13', '12:46:41', 0, 'Sign in'),
('mew', '2018-03-13', '01:05:15', 0, 'Sign in'),
('mew', '2018-03-13', '01:08:04', 0, 'Sign out'),
('mew', '2018-03-13', '02:07:11', 0, 'Sign in'),
('mew', '2018-03-13', '02:13:02', 0, 'Create event ชุมชนแห่งการเขียน รุ่นที่ 13'),
('mew', '2018-03-13', '02:14:52', 0, 'Create event Graphic Design เริ่มต้นง่าย สร้างได้ด้วยตัวเอง'),
('mew', '2018-03-13', '02:16:16', 0, 'Create event Young LEAN Entrepreneur'),
('mew', '2018-03-13', '02:16:32', 0, 'Sign out'),
('mew', '2018-03-13', '02:20:11', 0, 'Sign in'),
('mew', '2018-03-13', '02:24:54', 0, 'Create webboard อยากจับมือ เฌอปรางค์ต้องทำยังไงครับ'),
('mew', '2018-03-13', '02:25:11', 0, 'Sign out'),
('mew', '2018-03-13', '02:26:53', 0, 'Sign in'),
('mew', '2018-03-13', '02:27:17', 0, 'Sign out'),
('mew', '2018-03-13', '02:30:28', 0, 'Sign in'),
('mew', '2018-03-13', '02:32:23', 0, 'Create webboard เบื่อ BNK 48 ต้องทำยังไงคะ เต็มบ้านเต็มเมืองไปหมด -*- รำคาณ!!!!'),
('mew', '2018-03-13', '02:32:37', 0, 'Sign out'),
('mew', '2018-03-13', '09:01:37', 0, 'Sign in'),
('mew', '2018-03-13', '09:02:27', 0, 'Sign out'),
('sun_vsp', '2018-03-13', '04:30:11', 0, 'Sign in'),
('sun_vsp', '2018-03-13', '04:30:42', 0, 'Sign out'),
('sun_vsp', '2018-03-13', '04:42:51', 0, 'Sign in'),
('sun_vsp', '2018-03-13', '04:43:24', 0, 'Create event 1'),
('sun_vsp', '2018-03-13', '04:43:35', 0, 'Delete eventsun_vsp'),
('sun_vsp', '2018-03-13', '04:43:39', 0, 'Delete eventsun_vsp'),
('sun_vsp', '2018-03-13', '04:46:09', 0, 'Sign out'),
('sun_vsp', '2018-03-13', '04:46:16', 0, 'Sign in'),
('sun_vsp', '2018-03-13', '04:46:24', 0, 'Delete eventsun_vsp'),
('sun_vsp', '2018-03-13', '04:46:53', 0, 'Sign out'),
('sun_vsp', '2018-03-13', '04:47:08', 0, 'Sign in'),
('sun_vsp', '2018-03-13', '04:48:03', 0, 'Sign out'),
('sun_vsp', '2018-03-13', '04:48:09', 0, 'Sign in'),
('sun_vsp', '2018-03-13', '04:49:10', 0, 'Sign out'),
('sun_vsp', '2018-03-13', '04:49:15', 0, 'Sign in'),
('sun_vsp', '2018-03-13', '04:49:37', 0, 'Delete eventsun_vsp'),
('sun_vsp', '2018-03-13', '04:52:51', 0, 'Sign out'),
('sun_vsp', '2018-03-13', '04:53:33', 0, 'Sign in'),
('sun_vsp', '2018-03-13', '04:53:49', 0, 'Sign out'),
('sun_vsp', '2018-03-13', '04:57:45', 0, 'Sign in'),
('sun_vsp', '2018-03-13', '04:57:55', 0, 'Sign out'),
('sun_vsp', '2018-03-13', '08:44:56', 0, 'Sign in'),
('sun_vsp', '2018-03-13', '08:54:57', 0, 'Sign out'),
('wongpiwat', '2018-03-13', '02:27:43', 0, 'Sign in'),
('wongpiwat', '2018-03-13', '02:29:20', 0, 'Sign out'),
('wongpiwat', '2018-03-13', '02:50:39', 0, 'Sign in'),
('wongpiwat', '2018-03-13', '02:52:28', 0, 'Create event Character Design for Business ครั้งที่3'),
('wongpiwat', '2018-03-13', '02:53:10', 0, 'Sign out'),
('wongpiwat', '2018-03-13', '08:38:06', 0, 'Sign in'),
('wongpiwat', '2018-03-13', '08:39:52', 0, 'Sign out'),
('wongpiwat', '2018-03-13', '08:40:16', 0, 'Sign in'),
('wongpiwat', '2018-03-13', '08:40:28', 0, 'Sign out'),
('wongpiwat', '2018-03-13', '08:41:55', 0, 'Sign in'),
('wongpiwat', '2018-03-13', '08:42:05', 0, 'Sign out'),
('wongpiwat', '2018-03-13', '08:55:01', 0, 'Sign in'),
('wongpiwat', '2018-03-13', '08:55:27', 0, 'Create event 1'),
('wongpiwat', '2018-03-13', '08:55:33', 0, 'Delete eventwongpiwat'),
('wongpiwat', '2018-03-13', '08:55:57', 0, 'Sign out'),
('wongpiwat', '2018-03-13', '10:55:30', 0, 'Sign in'),
('wongpiwat', '2018-03-13', '10:57:58', 0, 'Edit account wongpiwat'),
('wongpiwat', '2018-03-13', '10:58:00', 0, 'Sign out'),
('wongpiwat', '2018-03-13', '11:27:16', 0, 'Sign in'),
('wongpiwat', '2018-03-13', '11:29:17', 0, 'Sign out');

-- --------------------------------------------------------

--
-- Table structure for table `attendents`
--

CREATE TABLE `attendents` (
  `idEvent` int(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `amount` int(5) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendents`
--

INSERT INTO `attendents` (`idEvent`, `username`, `amount`, `date`, `time`, `status`) VALUES
(2, 'adminSun', 2, '2018-03-13', '08:04:18', 'Uncomfirm'),
(1, 'bankkies', 3, '2018-03-13', '08:02:11', 'Comfirm'),
(2, 'bankkies', 1, '2018-03-13', '08:05:24', 'Uncomfirm'),
(32, 'bankkies', 2, '2018-03-13', '03:00:10', 'Uncomfirm'),
(1, 'cher', 1, '2018-03-13', '08:43:54', 'Uncomfirm'),
(32, 'cher', 16, '2018-03-13', '08:48:46', 'Uncomfirm'),
(1, 'sun_vsp', 1, '2018-03-13', '04:57:50', 'Uncomfirm'),
(1, 'wongpiwat', 3, '2018-03-13', '08:38:09', 'Uncomfirm'),
(32, 'wongpiwat', 2, '2018-03-13', '11:27:24', 'Uncomfirm');

-- --------------------------------------------------------

--
-- Table structure for table `comwebboard`
--

CREATE TABLE `comwebboard` (
  `idWebboard` int(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comwebboard`
--

INSERT INTO `comwebboard` (`idWebboard`, `username`, `comment`, `date`, `time`) VALUES
(1, 'mew', 'จับมือฉันก่อนมั่ยคะ ? <3', '2018-03-13', '14:27:12'),
(1, 'wongpiwat', 'ซื้อบัตรจับมือสิครับ ผมมีอยู่หลายใบสนใจก็ติดต่อมา 087-8697-008 ราคาเป็นกันเอง เดียวจะพาไปจับถึงที่เลยครับ >//////<', '2018-03-13', '14:28:47'),
(1, 'cher', ' เฌอ รักทุกคนนะคะ <3  <3  <3', '2018-03-13', '14:30:19'),
(1, 'mew', 'อย่ามาโลกสวย !!! -*-', '2018-03-13', '14:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `idEvent` int(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `eventName` text NOT NULL,
  `location` text NOT NULL,
  `date` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `size` int(5) NOT NULL,
  `category` varchar(30) NOT NULL,
  `type` varchar(15) NOT NULL,
  `price` int(10) DEFAULT NULL,
  `details` text NOT NULL,
  `teaserVDO` text NOT NULL,
  `precondition` text,
  `postcondition` text,
  `organizerName` varchar(30) DEFAULT NULL,
  `contactName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL,
  `imageCover` text NOT NULL,
  `attendView` int(15) NOT NULL,
  `imageSlide` text NOT NULL,
  `limitSeat` int(11) NOT NULL,
  `googleForm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`idEvent`, `username`, `eventName`, `location`, `date`, `startTime`, `endTime`, `size`, `category`, `type`, `price`, `details`, `teaserVDO`, `precondition`, `postcondition`, `organizerName`, `contactName`, `email`, `phone`, `latitude`, `longitude`, `imageCover`, `attendView`, `imageSlide`, `limitSeat`, `googleForm`) VALUES
(1, 'adminSun', 'Tao Kae Noi Presents BNK48 1st Concert STARTO', 'BITEC BANGNA Hall 106', '2018-03-13', '18:00:00', '21:00:00', 1000, 'Travel', 'free', 0, 'Tao Kae Noi Presents BNK48 1st Concert \"STARTO\"  พบกับคอนเสิร์ตเต็มรูปแบบครั้งแรกของ BNK48 ในวันเสาร์ที่ 31 มีนาคม พ.ศ. 2561 ณ BITEC BANGNA Hall 106 คอนเสิร์ตเริ่มเวลา 18:00น. (ประตูเปิด 16:00น.)', 'https://www.youtube.com/watch?v=mfqJyKm20Z4', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', 'BNK48', '-', 'operations@wisepass.co', '0878451549', '13.737451405144306', '100.52753252929688', 'upload-files/files/upload/144Starto!-Poster-SQ01.jpg', 60, 'upload-files/files/upload/144bnk48-2-cover-6d02e52d.jpg', 0, 'https://goo.gl/forms/j2z7qFejbh7Cz0iH3'),
(2, 'sunny', 'Basic Scan N Cut', 'PINN Creative Space พระราม 9 เขต ห้วยขวาง กรุงเทพมหานคร ประเทศไทย ', '2018-05-04', '13:02:00', '17:59:00', 10, 'Hobbies', 'paid', 200, 'Basic Scan N Cut เรียนรู้การใช้งานเครื่อง Scan n cut พื้นฐาน ช่วงที่ 1 (ภาคทฤษฎี)  13.00 - 15.00 น. อธิบายเบื้องต้นเกี่ยวกับตัวเครื่อง Scan n cut คืออะไร ใช้ทำงานประเภทไหนได้บ้าง สามารถตัดวัสดุอะไรได้บ้าง ภาพตัวอย่างชิ้นงาน แนะนำอุปกรณ์ต่างๆ จากเครื่อง Scan n cut ช่วงที่ 2 (ภาคปฏิบัติ)  15.00 - 17.00 น. เรียนการใช้งานเครื่องและแบบฝึกหัด การใช้งานเครื่องเบื้องต้น สอนการทำชิ้นงานจากเครื่อง Scan n cut แนะนำการดูแลรักษาเครื่องและอุปกรณ์ต่างๆ หมายเหตุ :  ไม่จำเป็นต้องมีเครื่อง ก็สามารถเรียนได้ ทางทีมงานเป็นผู้จัดเตรียมอุปกรณ์ให้ทั้งหมด  สำหรับผู้ที่มีเครื่องอยู่แล้ว สามารถนำเครื่องมาเรียนได้', 'https://www.youtube.com/watch?v=eL1SddOvM7s', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', 'สุมาลี  ดลสุขวงศาวัฒน์', 'สุมาลี  ดลสุขวงศาวัฒน์', 'pcs.rama9@pinncreative.com', '021681160', '13.74918620229554', '100.47466082519531', 'upload-files/files/upload/22Cover2.jpg', 4, 'upload-files/files/upload/22Cover3.jpg', 0, 'www.google.com'),
(3, 'sunny', 'Trick to Translate เคล็ด (ไม่) ลับ ฉบับนักแปล โดย ปุ๋ย มณฑารัตน์ ทรงเผ่า', 'The Rabbit Hub ', '2018-03-24', '00:00:00', '13:05:00', 30, 'Hobbies', 'free', 0, 'Trick to Translate เคล็ด (ไม่) ลับ ฉบับนักแปล โดย ปุ๋ย มณฑารัตน์ ทรงเผ่า   l เวลา 09.00 - 17.00 น.  สถานที่ The Rabbit Hub @BTS พญาไท  Artery workshop ร่วมกับ คุณปุ๋ย มณฑารัตน์ ทรงเผ่า ผู้คร่ำหวอดในวงการงานแปล ออกผลงานคุณภาพมากกว่า 100 เล่ม  มีผลงานแปลสร้างชื่ออย่าง ชุด ‘The Princess Diaries Series’  ที่ต้นฉบับติดชาร์ต New York Time Bestseller หรือในชื่อภาษาไทยว่า ‘บันทึกของเจ้าหญิง’  และ ชุดผลงานของ ‘ฮาร์เลน โคเบน’ กว่าหลาย 10 เรื่อง ที่ติดอันดับขายดี ทั้งใน The New York Time และในประเทศไทย!      นักแปลมืออาชีพ… ใครว่ายาก! คุณเองก็เป็นได้   หลากเคล็ดลับที่คุณอาจไม่เคยรู้ ผสมผสานทั้งเนื้อหาที่เข้มข้น และ สอดแทรกเทคนิคการแปลอย่างไรให้ตัวละครมีชีวิต รับรองว่ากลมกล่อม เก็บทุกเม็ด ทุกรายละเอียด ไม่มีหลุดแน่นอนตลอด 2 วันนี้!    ใน ‘Trick to Translate เคล็ด (ไม่) ลับ ฉบับนักแปล โดย ปุ๋ย มณฑารัตน์ ทรงเผ่า’ คุณจะได้พบกับ..  - เทคนิดการแปลแบบเข้าใจง่าย ฉบับนักแปลมืออาชีพ  - เคล็ดลับการเลือกใช้คำให้ออกมาเป็นธรรมชาติ อ่านแล้วอินเหมือนคำในภาษาไทย  - ทริคการแปลให้สามารถเก็บอารมณ์และความรู้สึกของต้นฉบับไว้ทุกเม็ด เพื่อให้งานแปลของเราออกมาเหมือนต้นฉบับมากที่สุด   - อาหารกลางวัน และของว่างตลอดการ  Workshop ทั้ง 2 วัน', 'https://www.youtube.com/watch?v=8HP72fOQ8Ls', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', 'ปุ๋ย มณฑารัตน์ ทรงเผ่า', 'ปุ๋ย มณฑารัตน์ ทรงเผ่า', '-', 'ปุ๋ย มณฑาร', '13.890541013688958', '100.52409930175781', 'upload-files/files/upload/33TFF2018-FB-SQ-3-Stroke-Final-No-Frame-Edit7-1.jpg', 0, 'upload-files/files/upload/33thfdf2018.jpg', 0, ''),
(4, 'sunny', 'YOGA WORKSHOP by AMIT from INDIA', ' Sundance Yoga Studio, Samakkhi Road, Tha Sai, Mueang Nonthaburi District, Nonthaburi, Thailand ', '2018-03-16', '13:03:00', '03:16:00', 200, 'Health', 'free', 0, 'YOGA WORKSHOP Motivated yoga instructor with advance training by AMIT on DAY: 24-28 March 2018 / TIME: 09.00-18.00  EveryDay What is special about this workshop?  The workshop is personally constructed by the head teacher of the world peach yoga school, Amit payal, who has many years’ experience in teaching at yoga teacher training courses and various yoga programs in India. The present course is ideal choice for all yoga practitioners who requires basement for their yoga practice.    What we will learn? In this workshop you’ll extend your essential knowledge of yoga both in theory and practice. Moreover, you will learn how to understand your body’s needs through the different asana, how to build your own practice and how to make it safe and more beneficial. At the end of the workshop each student will have clear knowledge and deep understanding about his own body, its abilities and how to work with it to achieve results in yoga.', 'https://www.youtube.com/watch?v=8a4vrzF5t-I', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', '-', '0960570007', '13.804744148988314', '100.49009540598036', 'upload-files/files/upload/46ws2.png', 0, 'upload-files/files/upload/45Early_Bird_Cover.jpg', 0, ''),
(5, 'sunny', 'Basic Laser cut : คลาสเรียนการใช้งานเลเซอร์คัทพื้นฐาน', 'PINN Creative Space พระราม 9 เขต ห้วยขวาง กรุงเทพมหานคร ประเทศไทย ', '2018-03-16', '13:05:00', '16:21:00', 20, 'Hobbies', 'free', 0, 'Basic 101 : Laser Cut  อบรมการใช้งานเครื่องเลเซอร์พื้นฐาน  ผู้ร่วมเข้าอบรมจะได้เรียนรู้ทฤษฎีเบื้องต้นในการผลิตงานเลเซอร์  ทำความเข้าใจเกี่ยวกับวัสดุอุปกรณ์ กระบวนการทำเตรียมไฟล์ชิ้นงานเบื้องต้น เป็นไอเดียและต่อยอด เเรงบันดาลใจสำหรับผู้ที่ต้องการมีงานอดิเรก ธุรกิจขนาดเล็กหรืองานดีไซน์เป็นของตัวเอง  สิ่งที่ลูกค้าจะได้รับ : 1. ได้เรียนรู้การทำไฟล์สำหรับตัดเลเซอร์ 2. เรียนรู้วัสดุที่ใช้ในงานตัดเลเซอร์ต่อยอดเป็นผลิตภัณฑ์ 3. ผู้เข้าอบรมได้ลงมือทำ และรับชิ้นงานเลเซอร์กลับบ้าน', 'https://www.youtube.com/watch?v=HcKmpIj6n1s', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', '-', ' 021681160', '13.807225561906458', '100.45225107160661', 'upload-files/files/upload/54BITE_Logo_1.jpg', 0, 'upload-files/files/upload/54Top-Banner-BGF-2017-after-event.jpg', 0, ''),
(6, 'sunny', 'KILORUN 2018', 'Lan Khon Muang , Sao Chingcha, Phra Nakhon, Bangkok, Thailand ', '2018-03-17', '13:05:00', '16:25:00', 200, 'Health', 'free', 0, 'KILORUN (กิโลรัน) คืออะไร?                     KILORUN (กิโลรัน) เทศกาลงานวิ่งรูปแบบใหม่ไม่ซ้ำใคร ที่การวิ่ง กิน เที่ยว คือเรื่องเดียวกัน และไม่ได้วัดผลเพียงแค่กิโลเมตร (ระยะทาง) แต่วัดผลด้วยกิโลกรัม (น้ำหนัก) นอกจากสุขภาพที่ดีแล้วผู้เข้าร่วมจะได้รับทั้งความสนุกสนาน สัมผัสกับวัฒนธรรม และเต็มอิ่มไปกับอาหารอร่อยของแต่ละเมืองบนสุดยอดเส้นทางวิ่งในเมืองแห่งเอกลักษณ์ทางวัฒนธรรม (The Iconic City) อีกด้วย โดยทุกเพศทุกวัยสามารถมาวิ่งและแชร์ประสบการณ์พิเศษร่วมกัน ไม่ว่าจะมาเดี่ยว มากับเพื่อน หรือมากับครอบครัว จะเป็นนักวิ่งมืออาชีพ มือสมัครเล่น  คนไทย หรือชาวต่างชาติก็ตาม KILORUN แบ่งออกเป็น 2 ประเภทการแข่งขัน  1. KG   (กิโลกรัม) หรือ Aroi Run (อร่อยรัน)         สำหรับ KG   (กิโลกรัม) หรือ Aroi Run (อร่อยรัน) จะเป็นเส้นทางการเดิน-วิ่งที่วัดผลด้วยกิโลกรัม โดยผู้เข้าแข่งขันจะได้ชิมอาหารจานเด่นของแต่ละเมือง พร้อมชมบรรยากาศสวยๆ ตามเส้นทางเดิน โดยเราได้เลือกเส้นทางที่ผ่านสถานที่ท่องเที่ยว  (Iconic attractions) ที่น่าสนใจ พร้อมคัดเลือกอาหารจานเด่นที่เป็น Signature รสเลิศของแต่ละเมือง  หลังจากทานอาหารแล้ว หากใครทำน้ำหนักขึ้นตามเกณฑ์ที่สมัคร โดยแบ่งเป็น 2 ระดับ คือ 0.5 KG และ 1 KG ก็จะได้รับเหรียญรางวัลที่ไม่เหมือนใคร จึงเป็นที่มาของคำว่า KG :   Aroi Run  2. KM   (กิโลเมตร) หรือ Breakfast Run (เบรคฟาสต์ รัน)         “เมื่อประสบการณ์ระหว่างทางสำคัญไม่แพ้จุดหมาย” เส้นทางของ KM   (กิโลเมตร) หรือ Breakfast Run (เบรคฟาสต์ รัน) จึงถูกคัดเลือกจากเส้นทางที่มีเอกลักษณ์ ซึ่งผู้เข้าร่วมจะได้สัมผัสบรรยากาศของเมือง และสนุกกับการวิ่งไปพร้อมกันการวิ่งที่วัดผลด้วยกิโลเมตร บนระยะทางที่กำหนด โดยแบ่งออกเป็น 3 ระยะ คือ KIDS RUN 2.5 กิโลเมตร, FUN RUN 5.5 กิโลเมตร และ MINI MARATHON 11 กิโลเมตร ผ่านเส้นทางที่กำหนดไว้ โดยตลอดทางผู้เข้าแข่งขันจะสามารถสัมผัสได้ถึงวัฒนธรรม สถาปัตยกรรม และวิถีชีวิตของคนในพื้นที่', 'https://www.youtube.com/watch?v=GNgSJ5lg-gc', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', 'kilorun2018@gmail.com', '0839896775', '13.715626872185553', '100.5179194921875', 'upload-files/files/upload/67Routing_Bangkok_rev03_Fun_Run_5.5_km_Thai.jpg', 7, 'upload-files/files/upload/67Eventpop_KILORUN.ai__Cover_-_1702_x_800_pixel.jpg', 0, ''),
(7, 'sunny', 'Detox workshop by Kru Bud [ENGLISH]', 'Maiden Massage & Spa (เมย์เดน) Naradhiwas Rajanagarindra Road, Silom, Bang Rak, Bangkok, Thailand ', '2018-03-23', '13:05:00', '17:30:00', 30, 'Health', 'free', 0, 'Two-hour Detox Workshop by Kru Bud [ENGLISH] Date: Sunday March 25, 2018 Time: 9.30 AM - 11.30 AM Location: see map for address (900 meters from Silom MRT, and just 500 meters from Chong Nonsi BTS) Language: English  Part 1: Making Your Own Kombucha  Kombucha is produced by fermenting tea using a \"symbiotic culture of bacteria and yeast\" (SCOBY).  Well-known benefits of drinking Kombucha on a regular basis include:  Detoxification Improved digestion Immune system stimulation Increased energy Weight loss Guests will get to take home ingredients to create your own Kombucha at home!  Part 2: Developing a Proper Stomach Massage Routine Learning to properly massage your stomach for a few minutes each day can improve digestion, stimulate stomach muscle growth, and help to balance your overall nervous system allowing you to feel healthier and more energized.  You will also learn to make a simple, healthy, and delicious smoothie and can enjoy the smoothie following the workshop to replenish essential nutrients and begin your newly-discovered path of proper and enjoyable digestion.  Workshop takeaways  Learn how to free yourself from constipation and bloating Rid yourself of dependence on antibiotics Balance your nervous system to improve digestion Replace stomach fat with muscle Develop a proper eating routine for ideal digestion Enjoy a regular pooping schedule!  Included for free Breakfast with a smoothie Kombucha-starting kit Requirements Guests should come to the class on an EMPTY STOMACH; a light snack and water early in the morning is okay.  Wear flexible clothing, such as gym clothes or casual street-wear. Women should wear a sports bra.', 'https://www.youtube.com/watch?v=zIDSCDc8iGs', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', 'Kru Bud ', 'Kru Bud ', '-', '027415498', '13.686690511914275', '100.551280215421', 'upload-files/files/upload/710Ma-D_Laughter_Club11-square-01.png', 0, 'upload-files/files/upload/78images (1).jfif', 0, ''),
(8, 'mew', 'ชุมชนแห่งการเขียน รุ่นที่ 13', 'Learning Hub Space ซอย งามดูพลี แขวง ทุ่งมหาเมฆ เขต สาทร กรุงเทพมหานคร ประเทศไทย ', '2018-03-15', '13:00:00', '13:00:00', 200, 'Education', 'free', 0, 'อยากเขียนให้เก่งได้ ทักษะอะไรที่สำคัญ ?  เริ่มง่ายๆ ด้วยการ “เล่าเรื่องให้เป็น”  การเล่าเรื่องให้สนุก น่าสนใจ และน่าประทับใจ ก็ต้องมีเทคนิค  ทักษะการเล่าเรื่อง ใช้ในการแบ่งปันเรื่องราวต่างๆได้ทุกที่ ไม่ว่าจะเขียนเป็นโพสต์ บทความ เรื่องสั้น อีบุ๊ค หนังสือ กระทั่งนิยาย ประโยชน์ที่คุณจะได้รับ จากกิจกรรม - เผยเทคนิคการเล่าเรื่องให้มีเสน่ห์ สนุกสนาน และน่าประทับใจ - วิธีสร้างคอนเท้น์โดนใจ ให้ถูกแชร์ต่อๆกัน  - ฝึกเขียนคอนเท้นท์ ด้วยโครงสร้างการเล่าเรื่องสไตล์ภาพยนตร์ - เมื่องานเขียนติดขัดไม่ลื่นไหล จะแก้ปัญหาได้อย่างไร', 'https://www.youtube.com/watch?v=T5JcoDSW3-k', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', '-', '0939254962', '13.74256132048672', '100.54204787956087', 'upload-files/files/upload/811download (5).jfif', 0, 'upload-files/files/upload/811Writing02-01.jpg', 0, ''),
(9, 'mew', 'Graphic Design เริ่มต้นง่าย สร้างได้ด้วยตัวเอง', 'Paintcil studio ลาดพร้าว ถนน ลาดพร้าว แขวง จอมพล เขต จตุจักร กรุงเทพมหานคร ประเทศไทย ', '2018-03-23', '13:05:00', '16:15:00', 30, 'Education', 'free', 0, 'Photoshop สำหรับการออกแบบ การตกแต่งภาพ และสร้างภาพกราฟฟิก  illustrator สำหรับสร้างผลงาน Graphic ที่ต้องการความละเอียดของชิ้นงาน วาดการ์ตูน งานป้ายโฆษณาต่างๆ  Graphic Design ผสมผสานชิ้นงานเรียนรู้กระบวนการเป็น Graphic Design มืออาชีพ การออกแบบ วิธีคิดเชิงสร้างสรรค์ (Creative Thinking) ทั้งศาสตร์และศิลป์ผ่านโปรแกรมคอมพิวเตอร์ Photoshop และ illustrator เพื่อตอบสนองการทำงาน ด้านกราฟฟิก ทุกรูปแบบ   สิ่งที่ผู้เรียนจะได้รับ+++  สร้างการเรียนรู้ ความเข้าใจหลักการพื้นฐานของการออกแบบในโปรแกรมพื้นฐานสามารถนำไปประยุกต์ใช้ให้เกิดประโยชน์ในการทำงานและธุรกิจ เมื่อจบคอร์สนี้ คุณจะออกแบบ ถ่ายทอดความสวยงามของชิ้นงานให้ตรงความต้องการ อย่างสวยงาม ', 'https://www.youtube.com/watch?v=YqQx75OPRa0', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', 'paintcilstudio@gmail.com', '0874596321', '13.706287770029412', '100.51379961914063', 'upload-files/files/upload/912download.png', 0, 'upload-files/files/upload/912Adobe-Photoshop-CC-2018--h.png', 0, ''),
(10, 'mew', 'Young LEAN Entrepreneur', ' อาคารเฉลิมราชกุมารี 60 พรรษา (อาคารจามจุรี 10) ถนน พญาไท  เขต ปทุมวัน กทม', '2018-04-20', '13:07:00', '19:00:00', 5, 'Education', 'free', 0, 'คุณจะได้ทดสอบไอเดีย ผ่านการฝึกฝนการลงตลาด และฝึกแนวคิดการสร้างธุรกิจ โดยใน 3 วันนี้ คุณจะได้พบกับวิทยากรผู้เชี่ยวชาญด้านการทำธุรกิจมาให้คำแนะนำ คุณจะได้ทำงานกันเป็นทีมกับนักศึกษาจากหลากหลายสาขาและหลากหลายสถาบัน ร่วมกันระดมความคิด ออกไอเดียและลงมือทำด้วยตัวคุณเอง ตั้งแต่ตั้งสมมุติฐาน ทดลองขายไอเดียจริง ทดสอบสินค้า/ตลาดจริง จนถึง pitching จริงๆ!! ทุกทีมจะมีเวลาในแต่ละ session เพียงไม่กี่ชั่วโมง ที่คุณจะต้องพิสูจน์สมมุติฐานต่างๆในธุรกิจ จะได้รู้ว่าว่าไอเดียนั้นทำเป็นธุรกิจได้หรือไม่ และในวันสุดท้าย เราจะเฟ้นหาผู้ชนะ โดยเลือกจากทีมที่ทำตามแนวคิด Lean Startup ได้ดีที่สุด ไม่ใช่ทีมที่ไอเดียดีที่สุด!!', 'https://www.youtube.com/watch?v=atkySv5QAG8', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', 'เฟิร์ส', 'เฟิร์ส', 'tepchaipanjaroen@gmail.com', '0987845128', '13.734303961731396', '100.48084063476563', 'upload-files/files/upload/1013download (1).png', 0, 'upload-files/files/upload/1013epop_lean01.jpg', 0, ''),
(11, 'cher', 'สร้างยอดขายเพิ่ม เติมฐานลูกค้าด้วย LINE@', 'TARAD Dot Com (ตลาด ดอท คอม) Huay Kwang, Bangkok, ประเทศไทย ', '2018-03-31', '10:00:00', '23:00:00', 50, 'Business', 'paid', 1000, 'สร้างยอดขายเพิ่ม เติมฐานลูกค้าด้วย LINE@  พ่อค้า แม่ค้ายุคนี้ไม่มีไม่ได้แล้ว กับ \" Line@ \" ที่จะสามารถช่วยเพิ่มฐานลูกค้า ปิดการขายได้ง่ายๆ พร้อมการสร้างกิจกรรม หรือจะแจกคูปองก็แสนจะง่ายดาย   สิ่งที่จะได้รับจากคอร์สนี้ เข้าใจหลักการและความสำคัญของ Line@ ข้อดีและหลักการใช้งานให้มีประสิทธิภาพ วิธีการใช้งานฟีเจอร์สำคัญ เคล็ดลับและเทคนิคการใช้งานแบบมืออาชีพ แนะนำวิธีหาคนติดตาม แบบทำเองได้ ไม่ต้องใช้งบ  คอร์สนี้เหมาะสำหรับ ผู้ประกอบการร้านค้าออนไลน์ เจ้าของกิจการร้านค้าทั่วไป นักการตลาดออนไลน์ บุคคลทั่วไปที่ต้องการสร้างเครือข่าย (ชุมชน, สมาคม, องค์กรรัฐบาลและเอกชน)', 'https://www.youtube.com/watch?v=yQ-SAXedEEk', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', '-', '0965411475', '13.52145759616', '100.19154004132656', 'upload-files/files/upload/1116line@.png', 0, 'upload-files/files/upload/1116LINEat_-_Zip_Event_FB_Cover_Page__851_x_400_px.jpg', 0, ''),
(12, 'cher', 'Tesco Lotus Hackathon 2018 : Revolutionising Retail Towards Thailand 4.0', 'Chulalongkorn University (Chamchuri 10 BLDG) ', '2018-03-24', '13:05:00', '23:00:00', 10, 'Business', 'free', 0, 'No matter you are an ambitious entrepreneur, visionary designer or passionate developer, this Hackathon is for you!  Tesco Lotus together with Chulalongkorn University, Digital Economy Promotion Agency, and National Innovation Agency hold a Hackathon to revolutionise Thailand’s retail industry for future neighborhood.  Hackathon Objective  - To have thinkers and innovators brainstorm their ideas in an attempt to improve the service quality of small retail stores. - To develop a good understanding of small retail business and to make attendees aware of related current innovations such as electronic payment, e-commerce, and logistics, ultimately to advance the retail industry itself. - To provide thinkers and innovators, as well as entrepreneurs, with a knowledge-sharing space in order to help “innovate” for the future prospect of their operations in international environments. -To help enforce compliance with the government’s economic policy and to ensure the country’s economic growth growing with stability, prosperity, and sustainability.', 'https://www.youtube.com/watch?v=Ht1Ljw2A9Oo', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', 'jaruporn@hubbathailand.com', '0845788891', '13.68227123162846', '100.43964190429688', 'upload-files/files/upload/1218image_profile.jpg', 1, 'upload-files/files/upload/1218head.jpg', 0, ''),
(13, 'cher', 'SCB EASY WTF (What The Food)', 'Makkasan Station - Airport Rail Link Bangkok Thailand ', '2018-08-09', '13:03:00', '12:55:00', 10, 'Business', 'free', 0, 'SCB EASY WTF (What The Food) Organized by ARTBOX  \"เทศกาลอาหารโคตรคูล...ทุกเมนู 30 บาท\"  14 มีนาคม 2561 [16.00น.] - 18 มีนาคม 2561 [24:00น.] ลานแอร์พอร์ตลิ้งค์มักกะสัน - กรุงเทพฯ สอบถามเพิ่มเติมได้เรื่องการซื้อบัตรได้ที่ LINE ID: @whatthefood', 'https://www.youtube.com/watch?v=GdeoIF0eYg4', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', 'artboxbangkok@gmail.com', '027319480', '13.77031985953911', '100.53851885742188', 'upload-files/files/upload/1319images (1).jfif', 0, 'upload-files/files/upload/1319NN-03.jpg', 0, ''),
(14, 'cher', 'Design Your Life (ชีวิตออกแบบได้)', 'Bang Na Residence, Sanphawut Road, Bang Na, Bangkok, Thailand ', '2018-09-05', '14:03:00', '22:00:00', 50, 'Family', 'free', 0, 'รายละเอียดคอร์ส   สัมมนา Design Your Life (ชีวิตออกแบบได้)  2 วันเต็มอิ่ม 19 – 20 มีนาคม 2561   กำหนดการ   จันทร์ที่ 19 มีนาคม เวลา 8.00 น. – 22.00 น.  อังคารที่ 20 มีนาคม เวลา 8.00 น. – 18.00 น.     สถานที่ ชั้น1 บางนา เรสซิเดนซ์ ทาวเวอร์บี ถ.สรรพาวุธ  ใกล้ไปรษณีย์บางนา ห่างจาก BTS บางนา 500 เมตร จังหวัดกรุงเทพมหานคร \" DESIGN YOUR LIFE \"  1.ก้าวแรกสู่หลักแสนต่อเดือนกับ 30 วิธีคิดของเศรษฐีทั่วโลก  2.Power Full You Power Full Team (พลังไร้ขีดจำกัด)  3. Negotiation (สุดยอดการเจรจาต่อรอง)  4. Blue Ocean (การตลาดน่านน้ำสีคราม)  5.เคล็ดลับการเดินทางสู่ฝันในทุกด้านทุกมิติของชีวิต  6.Design Your Life ( การออกแบบชีวิต )', 'https://www.youtube.com/watch?v=g3M2bf9FfSg', '-', '-', 'ชาญ  ตระการศิลป์', 'ชาญ  ตระการศิลป์', 'sattayadlh@gmail.com', '0845159765', '13.76231680563513', '100.50144', 'upload-files/files/upload/1420Master_Charn.jpg', 1, 'upload-files/files/upload/1420maxresdefault.jpg', 0, ''),
(15, 'cher', 'SME FAMILY CHARITY RALLY : way to the oscar 2018', 'โรงแรมอิมพีเรียล พัทยา', '2018-03-23', '13:00:00', '16:45:00', 30, 'Family', 'paid', 300, '- กำลังมองหา เพื่อนคู่คิด  - พาร์ทเนอร์ที่ไม่ใช่แค่พาร์ทเนอร์  - หากคุณกำลังมองหา Event แจ่มๆ  - เวลาเพื่อเติมเต็มชีวิต  คุณมีนัดกับ SME Family Charity Rally สมาพันธ์SMEไทย ที่กลับมาปีนี้ ไม่ใช่แค่สนุกขึ้นหลายเท่า ทั้งยังมีการเต็มเต็มมิตรภาพและรอยยิ้ม เสียงหัวเราะ ของเพื่อนๆ พี่ๆ น้องๆ อย่าพลาดด้วยประการทั้งปวง!', 'https://www.youtube.com/watch?v=9V_6joY0I3U', '-', '-', '-', '-', 'thaismenetwork@gmail.com', '0988755487', '13.802329334184245', '100.51654620117188', 'upload-files/files/upload/1521POSTER_2048_x_2048_pixel-01.jpg', 0, 'upload-files/files/upload/1521AW_COVER_1702_x_800_pixel-01.jpg', 0, ''),
(16, 'cher', 'งานเทศกาลหนังสือครอบครัวนักอ่าน', 'ศูนย์การประชุมแห่งชาติสิริกิติ์', '2018-07-11', '14:01:00', '23:00:00', 500, 'Family', 'paid', 60, 'สมาคมผู้จัดพิมพ์และผู้จำหน่ายหนังสือแห่งประเทศไทยในนามของภาคเอกชนที่เล็งเห็นถึงความสำคัญของการอ่านหนังสือและการเรียนรู้ของเด็กเยาวชน และผู้ปกครอง จึงได้กำหนดจัดงานเทศกาลหนังสือครอบครัวนักอ่าน  เพื่อกระตุ้นให้เด็กเยาวชน ตลอดจนผู้ใหญ่ทุกอาชีพตระหนักถึงความสำคัญของการอ่านหนังสือ และการเรียนรู้ ตลอดจนเป็นการสร้างความรู้ ความเข้าใจให้แก่ครูและผู้ปกครองในการส่งเสริมการอ่าน ตลอดจนสร้างสภาพแวดล้อมให้เด็กและเยาวชนมีความสุขกับการอ่านหนังสือและการเรียนรู้ อันจะนำไปสู่นิสัยใฝ่เรียนรู้รักการอ่าน ซึ่งจะเป็นพื้นฐานสำคัญของการพัฒนาคนในชาติต่อไปในอนาคต', 'https://www.youtube.com/watch?v=LlQA6Jx7k_Q', '-', '-', '-', '-', '-', '0857853216', '14.245215314667137', '100.73281183587005', 'upload-files/files/upload/1623EX_news6849.jpg', 0, 'upload-files/files/upload/1623_MG_6020.jpg', 0, ''),
(17, 'sunny', 'Thailand Mobile Expo 2018', 'ศูนย์การประชุมแห่งชาติสิริกิติ์', '2018-03-23', '15:00:00', '23:00:00', 50, 'Business', 'free', 0, 'งานมหกรรมมือถือที่ใหญ่ที่สุดของประเทศ พบแบรนด์มือถือชั้นนำ รวมทั้งผู้ให้บริการเครือข่ายโทรศัพท์มือถือครบทุกค่าย พร้อมอัพเดต Gadget & Wearable Device Zone สุดล้ำจากทั่วทุกมุมโลก ภายในงานมีบริการสินเชื่อเงินสดสำหรับผู้สนใจซื้อสินค้าอีกด้วย  Date : 24 May - 27 May 2018 Time : 10.00-20.00 Location : Plenary Hall 1-3, Zone C1-2, Atrium, Plaza, Ballroom, Hall A', 'https://www.youtube.com/watch?v=-maGaLR3eus', '-', '-', '-', '-', '-', '0878451250', '13.75564738488673', '100.5728511328125', 'upload-files/files/upload/1724M563C2E1636D461504 (1).jpg', 0, 'upload-files/files/upload/1725booth_109-1249978879.jpg', 0, ''),
(18, 'sunny', 'Sustainable Energy Technology Asia 2018', 'ศูนย์นิทรรศการและการประชุมไบเทค (BITEC) บางนา, กรุงเทพฯ ', '2018-03-31', '13:02:00', '23:00:00', 10, 'Technology', 'paid', 200, 'ขอเชิญร่วมงาน seta 2018 มหกรรมเทคโนโลยีพลังงานที่ยั่งยืนแห่งเอเชีย  - งานประชุมระดับผู้นำด้านพลังงานทั้งด้านนโยบายและการถ่ายทอดความรู้ทางเทคโนโลยี \"CEO Energy Forum\" ในหัวข้อ Energy Future Outlook และ Hydrogen Society และพบสัมมนาคู่ขนาน โดยองค์กรชั้นนำมากมาย อาทิ USAID สภาวิศวกร วิศวกรรมสถานฯ สภาสถาปนิกไทย องค์การก๊าซเรือนกระจก กรมโรงงานอุตสาหกรรม ฯลฯ - เทรดโชว์ด้านเทคโนโลยีพลังงาน DIGI-ENERGY EXPO สัมผัส loT ด้านพลังงาน และพร้อมทดลองขับ ยานยนตร์ไฟฟ้า และเรียนรู้จริงกับ \"เมืองอัจฉริยะจำลอง\" (Smart Urbarnization Simulation) ในงานนี้ที่เดียว', 'https://www.youtube.com/watch?v=U1PGoZgeRaU', '-', '-', '-', '-', '-', '0812345678', '13.851763528126515', '100.55230245389612', 'upload-files/files/upload/1827kee-02.jpg', 1, 'upload-files/files/upload/1827Banner_1000x350_news_featured.png', 0, ''),
(19, 'sunny', 'Commart Connect 2018 ', 'ศูนย์การประชุมแห่งชาติสิริกิติ์', '2018-03-29', '13:59:00', '23:00:00', 10, 'Technology', 'paid', 70, 'งาน Commart Connect 2018 จัดขึ้นด้วยแนวคิด “Living Smarter ชีวิตคอนเนค ฉลาดล้ำ…ด้วยนวัตกรรม” ก้าวสู่ปีที่ 18 เออาร์ไอพีผนึกพลังกับแบรนด์ไอซีทีชั้นนำของไทย นำทัพสินค้าและนวัตกรรมเพื่อตอบโจทย์ชีวิตยุคดิจิทัลมาให้ได้ชมและช้อปอย่างจัดเต็ม อาทิ โน้ตบุ๊ก สมาร์ทโฟน เกมมิ่งเกียร์ จัดขึ้นระหว่างวันที่ 22-25 มีนาคม 2561 ณ ศูนย์การประชุมแห่งชาติสิริกิต์ ตั้งแต่เวลา 10.00 น. - 20.00 น.  สำหรับงานคอมมาร์ต คอนเนค 2018 ครั้งนี้มีไฮไลท์ที่น่าสนใจ อาทิ  Top Tech 2018 พบสุดยอดนวัตกรรม เทคโนโลยีล่าสุด จาก CES 2018 ที่นำมาให้คนไทยได้สัมผัสและเป็นเจ้าของก่อนใคร อาทิ โน้ตบุ๊กเล็กที่สุดในโลก, VR Camera, อุปกรณ์อัจฉริยะภายในบ้านและโดรนรุ่นใหม่ Gaming Market ตลาดใหญ่สำหรับเกมเมอร์ตัวจริง ทั้งโน้ตบุ๊ก คอมพิวเตอร์และอุปกรณ์ที่เกี่ยวข้องกับเกมครบวงจร ซึ่งแบรนด์ชั้นนำต่างสรรหามาเพื่อเอาใจคอเกมทุกระดับ พร้อมกับเตรียมโปรโมชันมาแข่งขันกันอย่างจุใจ', 'https://www.youtube.com/watch?v=5s20948qywI', '-', '-', '-', '-', '-', '0812345678', '13.882333782675694', '100.56461138671875', 'upload-files/files/upload/1928event_15042_type50_p2_20180125094759.jpg', 0, 'upload-files/files/upload/1928Commart-connect-2017-14.jpg', 0, ''),
(20, 'sunny', 'Thailand Autopart & Accessories 2018 (TAPA)', 'ไบเทค บางนา', '2018-03-15', '09:00:00', '23:01:00', 20, 'Technology', 'free', 0, 'Thailand Autopart & Accessories (TAPA) คือ งานแสดงสินค้าด้านยานยนต์ระดับนานาชาติที่รวบรวมผู้ผลิตชิ้นส่วน, ผู้ส่งออก, ผู้จัดจำหน่าย, ผู้รับจ้างช่วงการผลิต และผู้ผลิตชิ้นส่วน OEM/REM จากประเทศไทย ไต้หวัน อินเดีย จีน สิงคโปร์ เวียดนาม มาเลเซีย และฟิลิปปินส์ ฮ่องกง และเกาหลีใต้ มาพบกับผู้แทนการค้า ซึ่งในการจัดงานครั้งก่อน มีผู้เข้าร่วมงาน 9,419 คน จาก 64 ประเทศทั่วโลก  สำหรับ TAPA 2018 จะจัดขึ้นระหว่างวันที่ 5-8 เมษายนนี้ ที่ไบเทค บางนา โดยมีแนวคิดงานในครั้งนี้ว่า “World Auto Parts Sourcing Hub Innovation Clean For The Future”', 'https://www.youtube.com/watch?v=yxC51DR_Jgs', '-', '-', '-', '-', '-', '0812345678', '13.823666544196874', '100.54401202148438', 'upload-files/files/upload/2029TAPA-2018-pic-bf.jpg', 2, 'upload-files/files/upload/2029TAPA-thailand-fair.jpg', 0, ''),
(21, 'sunny', 'งานท่องไทย ท่องโลกครั้งที่ 19 ', 'อิมแพค เมืองทองธานี', '2018-11-07', '13:00:00', '23:00:00', 10, 'Travel', 'paid', 200, 'งาน “ท่องไทย ท่องโลก” ครั้งที่ 19 จะมีขึ้นระหว่างวันที่ 15-18 มีนาคม 2561 ณ ศูนย์แสดงสินค้าและการประชุมอิมแพค เมืองทองธานี ถือเป็นโอกาสดีสำหรับผู้ประกอบการธุรกิจท่องเที่ยว ธุรกิจสินค้าและบริการที่เกี่ยวเนื่องกับการท่องเที่ยวที่จะมาร่วมงานนี้  งาน “ท่องไทย ท่องโลก” ถือเป็นเวทีสำคัญที่จะช่วยให้ผู้แสดงสามารถขยายฐานลูกค้า เพิ่มยอดขายและรับเงินจองล่วงหน้าตั้งแต่ต้นปีจากนักท่องเที่ยว/ ผู้รักการเดินทาง สำหรับช่วงซัมเมอร์ และเพื่อต้องการสร้างความพอใจให้ผู้แสดง อาทิ โรงแรม, รีสอร์ท, รถเช่า, อุปกรณ์เดินทาง และอื่นๆ โดยเฉพาะอย่างยิ่งในการพบกลุ่มลูกค้าหลักและขยายฐานลูกค้าใหม่ๆ  “จุดเด่นงานท่องไทย ท่องโลก ผู้แสดงสามารถขาย Mice package (ประชุมผู้บริหาร/พาพนักงานเที่ยวประจำปี) ให้ผู้แสดงงานข้างเคียง งานแสดงกาแฟ เบเกอรี่ ไอศกรีม  งานแฟรนไชส์และ SME  คาดว่าจะสามารถดึงกลุ่มเป้าหมายกว่า 200,000 คน” นายกวิน กล่าว  งานท่องไทย ท่องโลก ได้รับการสนับสนุนจากสมาคมส่งเสริมธุรกิจท่องเที่ยวไทย สมาคมธุรกิจท่องเที่ยวภายในประเทศ สมาคมผู้ประกอบการนำเที่ยวไทย เพื่อเป็นการสนับสนุนนโยบายส่งเสริมธุรกิจท่องเที่ยวอีกด้วย', 'https://www.youtube.com/watch?v=5K561gd0Ahw', '-', '-', '-', '-', '-', '0812345678', '13.854335357733683', '100.50006670898438', 'upload-files/files/upload/2130titf-20-01.jpg', 0, 'upload-files/files/upload/2130icon9.gif', 0, ''),
(22, 'sunny', 'งานไทยเที่ยวไทย ครั้งที่ 46', 'ไบเทคบางนา', '2018-12-14', '13:59:00', '23:03:00', 10, 'Travel', 'free', 0, 'งานมหกรรมส่งเสริมการขายสินค้าและบริการด้านการท่องเที่ยว ที่มีผู้ประกอบการทั้งในและต่างประเทศเข้าร่วมแสดงจำนวนมากที่สุดในประเทศไทย พิเศษกับโปรโมชั่นแพ็คเกจลดราคา จากผู้ประกอบการท่องเที่ยวทุกประเภท เช่น โรงแรม รีสอร์ท สายการบินในประเทศ รถเช่า เรือท่องเที่ยว ทัวร์ สปา อุปกรณ์เดินทางและการท่องเที่ยว ฯลฯ กว่า 700 บูธ พร้อมชมกิจกรรมการแสดงมากมายให้ชมตลอดงาน', 'https://www.youtube.com/watch?v=evGFaS6epT8', '-', '-', '-', '-', '-', '0812345678', '13.766349797901809', '100.67599681803767', 'upload-files/files/upload/2232DSC04444.jpg', 0, 'upload-files/files/upload/2232title_ttmnews_8597-20180227151839.jpg', 0, ''),
(23, 'poom', 'https://www.youtube.com/watch?v=evGFaS6epT8', 'สะพานพระราม 8 และทางคู่ขนานลอบฟ้าบรมราชชนนี', '2018-03-22', '01:00:00', '04:00:00', 1000, 'Sports', 'free', 0, 'HONDA GET GLOW RUN   กลับมาอีกครั้งกับการรวมพลังชาวกรุงเทพฯ กิจกรรมวิ่งการกุศลเพื่อมอบรายได้ส่วนหนึ่งหลังหักค่าใช้จ่ายสมทบทุนให้กับการกุศล  มหกรรมวิ่งเรืองแสง  สนุกไปกับการวิ่งกลางคืน พร้อมกิจกรรมต่าง ๆ ที่ให้นักวิ่งทุกคน ได้ร่วมสนุก เช่น - Boost up ร่างกายไปกับบีทดนตรีก่อนออกวิ่งโดยดีเจชื่อดังจาก Trasher Bangkok - Booth Activity จากผู้สนับสนุนการวิ่งที่นำรางวัลมาแจกในวันงาน - Selfie  Awards กิจกรรมถ่ายภาพสำหรับผู้ซื้อบัตร ลุ้นรางวัลมูลค่ารวมกว่า 1 แสนบาท', 'HONDA GET GLOW RUN   กลับมาอีกครั้งกับการรวมพลังชาวกรุงเทพฯ กิจกรรมวิ่งการกุศลเพื่อมอบรายได้ส่วนหนึ่งหลังหักค่าใช้จ่ายสมทบทุนให้กับการกุศล  มหกรรมวิ่งเรืองแสง  สนุกไปกับการวิ่งกลางคืน พร้อมกิจกรรมต่าง ๆ ที่ให้นักวิ่งทุกคน ได้ร่วมสนุก เช่น - Boost up ร่างกายไปกับบีทดนตรีก่อนออกวิ่งโดยดีเจชื่อดังจาก Trasher Bangkok - Booth Activity จากผู้สนับสนุนการวิ่งที่นำรางวัลมาแจกในวันงาน - Selfie  Awards กิจกรรมถ่ายภาพสำหรับผู้ซื้อบัตร ลุ้นรางวัลมูลค่ารวมกว่า 1 แสนบาท', '-', '-', '-', '-', '-', '0812345678', '13.820916154175368', '100.3606883997345', 'upload-files/files/upload/2336download (1).jfif', 0, 'upload-files/files/upload/2336Aw_GGR_Event_pop Page__edited-02.jpg', 0, ''),
(25, 'poom', 'RUN FOR LIFE 2', ' สวนลุมพินี เขต ปทุมวัน กรุงเทพมหานคร ประเทศไทย ', '2019-05-08', '14:09:00', '01:00:00', 5000, 'Sports', 'free', 0, 'บางคน วิ่งเพื่อ ตัวเอง  บางคน วิ่งเพื่อ สุขภาพ บางคนวิ่งเพื่อ ชัยชนะ แต่งานนี้เราวิ่งเรื่อ หัว ใจ ของใครสักคน วิ่งแทนคนที่อยากวิ่งแต่ไม่มีโอกาศได้วิ่งส่งต่อหัวใจที่แข็งแรงไปสู๋ผูุ้อื่น มาร่วมกันวิ่งกันเถอะ', 'https://www.youtube.com/watch?v=7vLuLWgFURY', '-', '-', '-', '-', '-', '0812345678', '15.005520278514318', '101.07093011751203', 'upload-files/files/upload/2540images.png', 0, 'upload-files/files/upload/2540ca8b2659d6924fd059617510c4c4ebca.jfif', 0, ''),
(26, 'boylnwza007', 'กิจกรรมปั่นจักรยาน NAKHON BIKE NIGHT', 'สวนศรีธรรมโศก ถ.ราชดำเนิน ตำบลในเมือง จังหวัดนครศรีธรรมราช', '2018-03-22', '13:00:00', '12:00:00', 300, 'Travel', 'free', 0, 'กิจกรรมปั่นจักรยาน NAKHON BIKE NIGHT  1.หลักการและเหตุผล    การปั่นจักรยานเป็นกิจกรรมที่ได้รับความนิยมมากขึ้นในปัจจุบัน และเป็นกิจกรรมที่เหมาะสมกับการท่องเที่ยวในยามเย็น ซึ่งกิจกรรมนี้นอกจากเป็นการท่องเที่ยวและส่งเสริมสุขภาพแล้วยังมีส่วนในการสร้างความรัก ความสามัคคีในกลุ่มประชาชนคนไทย และนักท่องเที่ยวในภูมิภาคต่างๆ รวมถึงชาวต่างชาติด้วย     2.วัตถุประสงค์  ส่งเสริมและประชาสัมพันธ์การท่องเที่ยวของจังหวัดนครศรีธรรมราช รณรงค์ให้ประชาชน และนักท่องเที่ยวหันมาปั่นจักรยาเพื่อการท่องเที่ยว เพื่อลดมลภาวะ และรักษาสิ่งแวดล้อม เพื่อเป็นส่งเสริมการออกกาลังกายเพื่อสุขภาพ โดยการปั่นจักรยาน', 'https://www.youtube.com/watch?v=xm9MV9Tq8G0', '-', '-', '-', '-', '-', '0812345678', '14.806283409949675', '99.74967107693305', 'upload-files/files/upload/2639picture-20160516134438.jpg', 0, 'upload-files/files/upload/2638IMG_7956.jpg', 0, ''),
(27, 'boylnwza007', 'ROV Valor Tournament', 'workpoint studio', '2018-03-17', '19:00:00', '22:00:00', 200, 'Sports', 'free', 0, 'แข่งขันเกม ROV', 'https://www.youtube.com/watch?v=pYU9jPyxvEg', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', 'Garena', '-', '-', '0812345678', '13.801079046461478', '100.4849605078125', 'upload-files/files/upload/27otbfvdlqhvXDChOby09-o.jpg', 4, 'upload-files/files/upload/27logo_en.png', 0, ''),
(28, 'boylnwza007', 'WisePass Bangkok Official Launch', '  Le Fenix Sukhumvit, Soi Sukhumvit 11, Khlong Toei Nuea, Watthana, Bangkok, Thailand ', '2018-03-23', '13:00:00', '11:55:00', 300, 'Food', 'free', 0, 'WisePass คืออะไร? WisePassเป็นแอพพลิเคชั่นบนมือถือ เพื่อไลฟ์สไตล์ คุณสามารถใช้แอพเลือกรับสิทธิ์ได้ในทุกๆวัน ไม่ว่าจะเป็นมื้ออาหาร, แอลกอฮอล์, สิทธิ์ในการเข้างานอีเว้นท์แบบVIP ตามร้านที่เราได้เลือกสรรไว้ให้มากกว่า 100 ร้าน ทั้งในกรุงเทพ โฮจิมินท์ ฮานอย และที่มะนิลาเร็วๆนี้ WisePass Bangkok กำลังจะจัดอีเว้นท์เปิดตัวขึ้นที่กรุงเทพเพื่อเป็นการวางเป้าหมาย และยืนยันความสำเร็จที่ผ่านมาของเรา ขอเชิญทุกท่านมาร่วมเฉลิมฉลองและเป็นส่วนหนึ่งของการเปิดตัวในกรุงเทพอย่างเป็นทางการของ WisePass รับรองคุณจะไม่ผิดหวัง เราจะมีทั้งเกมส์ เครื่องดื่ม และของรางวัลพิเศษสำหรับแขกในงานทุกท่าน สถานที่จัดงานครั้งนี้คือ Nest Rooftop Lounge - Le Fenix Hotel เพียงแค่แจ้งสต๊าฟว่ามาร่วมงานของ WisePass ', 'https://www.youtube.com/watch?v=krmILNiJ-wA', '-', '-', '-', '-', '-', '0812345678', '13.885604211591676', '100.53783221191406', 'upload-files/files/upload/2845Event_Poster.jpg', 11, 'upload-files/files/upload/2845Event_Cover_EventPop.png', 0, ''),
(29, 'boylnwza007', 'THAILAND FOODIES FESTIVAL', '  Hard Rock Cafe Bangkok, Rama I Road, Pathum Wan, Bangkok, Thailand ', '2018-03-23', '13:05:00', '23:00:00', 200, 'Food', 'paid', 30, 'อย่าพลาด! งานเดียวที่เหล่า FOODIES จะได้ร่วมกระทบไหล่กับไอดอลสายกิน YANG SOO BIN แขกพิเศษของงาน ผู้มีชื่อเสียงโด่งดังในโลกโซเซียล เธอพร้อมแล้วที่จะบินตรงจากเกาหลีเพื่อมาร่วมชิมเมนูเด็ดๆ ภายในเทศกาล ในฐานะ FOODIE IDOL ประกบไหล่ไปกับ ดีเจเต้ย ธโนทัย และ คุณเชอรีน ณัฐจารี ไอดอลไทยขวัญใจวัยรุ่นชาวสยาม ที่ครั้งนี้จะมาเข้าร่วมเทศกาลในฐานะ FOODIES MC พร้อมกับออกสื่อกันแบบสดๆ ผ่าน WOODY LIVE สื่อที่ทรงอิทธิพลระดับประเทศ และ เพจดังแห่งวงการอาหาร STARVINGTIME และ MUUMMAAM อีกด้วย                THAILAND FOODIES FESTIVAL ยังได้รับเกียรติจากแขกกิตติมศักดิ์ที่พร้อมเข้าร่วมงานเพื่อชิมเมนูเด็ดต่างๆ อีกหลายท่าน เช่น ม.ล. อิ๊งค์ ภาสันต์ สวัสดิวัตน์ ในฐานะ FOODIE GURU แห่งประเทศไทย ที่จะลงพื้นที่ชิมอาหารของร้านค้าต่างๆ ภายในเทศกาล พร้อมกับคุณส้ม ณัฐวรา ในฐานะ FOODIE MC อีกทั้งยังมี คุณโบว์ลิ่ง ชลทิพย์ ระยามาศ จากเพจดัง EAT AND SHOUT ผู้คว้ารางวัลบนเวทีระดับเอเชียในฐานะ FOODIE INFLUENCER               นอกจากนั้น ยังได้รับเกียรติจาก เชฟแมน สราวุธ เนียรวิทูรย์ เชฟชื่อดังจากรายการ เชฟกระทะเหล็ก ในฐานะ CHEF GURU และ เชฟเต็งหนึ่ง คณ', 'https://www.youtube.com/watch?v=EBl4GP_YLsc', '-', '-', '-', '-', '-', '0812345678', '13.934925842454033', '100.44719500488281', 'upload-files/files/upload/2941images (2).jfif', 0, 'upload-files/files/upload/2941thai_festival_singapore.jpg', 0, ''),
(30, 'boylnwza007', 'The Bangkok International Taste Experience (BITE)', '  Mandarin Oriental, Bangkok, Thailand ', '2018-03-24', '13:05:00', '00:05:00', 500, 'Food', 'free', 0, 'BITE:  เปิดประสบการณ์ใหม่กับงาน Bangkok International Taste Experience (BITE) งานอาหารที่ยิ่งใหญ่ที่สุดแห่งปี งานที่รวบรวมเชฟระดับโลกและผู้ที่ชื่นชอบอาหารจากทั่วทุกมุมโลกมาร่วมกันสร้างสรรค์เมนูอาหารสุดพิเศษในงานนี้     งาน Bangkok International Taste Experience (BITE) งานอาหารที่ยิ่งใหญ่ที่สุดแห่งปี งานที่รวบรวมเชฟระดับโลกและผู้ที่ชื่นชอบอาหารจากทั่วทุกมุมโลกมาร่วมกันสร้างสรรค์เมนูอาหารสุดพิเศษในงานนี้ ซึ่งในช่วงบ่ายเราจะมีการเสวนาของพ่อครัวระดับโลก มุมมอง อนาคต ของการทำอาหารทั่วโลก เราเปิดให้ทุกท่านที่สนใจเข้าร่วมฟังฟรี!! และห้ามพลาดกับโอกาสสุดพิเศษนี้ที่ท่านจะได้มีโอกาสลิ้มลองอาหารค่ำสุดหรูจากฝีมือเชฟระดับโลกถึง 15 จาน พร้อมทั้งเครื่องดื่มและไวน์ชั้นดี และพิเศษสุดในช่วงอาหารค่ำ เชฟชื่อดังระดับโลกจะขึ้นโชว์บนเวทีพร้อมทั้งนำเสนอผลงานอาหารและแรงบันดาลใจในการปรุงอาหารจานนั้นๆ ให้ทุกท่านทราบอีกด้วย', 'https://www.youtube.com/watch?v=SAt-y-9txZY', '-', '-', '-', '-', '-', '0812345678', '13.838938952086249', '100.47328753417969', 'upload-files/files/upload/304BITE_Logo_1.jpg', 0, 'upload-files/files/upload/3041thai_festival_singapore.jpg', 0, ''),
(31, 'boylnwza007', 'DND WATER CIRCUS', 'DND คลองตันเหนือ, วัฒนา, Bangkok, Thailand ', '2018-03-24', '13:59:00', '23:55:00', 500, 'Hobbies', 'free', 0, 'ชวนคุณมาสนุกกับเทศกาลสงกรานต์ที่จะพาคุณหลุดเข้าไปในโลก ของคณะละครสัตว์และสวนสนุกน้ำ “DND WATER CIRCUS” 4 วัน 4 คืน ร่วมกับทีมดีเจ #TEAMDND พร้อมกับเหล่าศิลปินที่จะมาร่วมสร้างความสนุก และสาดน้ำไปด้วยกัน', 'https://www.youtube.com/watch?v=Ok4fY4_dNVw', '-', '-', '--', '-', '-', '0812345678', '13.920388718430962', '100.49114031738281', 'upload-files/files/upload/3142dnd_poster.jpg', 7, 'upload-files/files/upload/3142dnd_cover.jpg', 0, ''),
(32, 'boylnwza007', 'Retrospect Heart of the Panther หัวใจเสือดำ', 'Live Park (Rama 9), Bang Kapi, Huai Khwang, Bangkok, Thailand ', '2018-03-23', '23:57:00', '02:02:00', 3000, 'Hobbies', 'paid', 10000, '“ร็อคไม่มีวันตาย แต่เสือดำตายใครรับผิดชอบ?”  Retrospect Heart of the Panther หัวใจเสือดำ', 'https://www.youtube.com/watch?v=e-X3R-sVXVE', '-', '-', '-', '-', '-', '0812345678', '13.997687375509665', '100.43208880371094', 'upload-files/files/upload/3243RTP_EP_POSTER_2048x2048px.jpg', 38, 'upload-files/files/upload/3243RTP_EP_COVER_1702x800px.jpg', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `imageevent`
--

CREATE TABLE `imageevent` (
  `idEvent` int(30) NOT NULL,
  `imagePath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imageevent`
--

INSERT INTO `imageevent` (`idEvent`, `imagePath`) VALUES
(10, 'upload-files/files/upload/1013download (1).png'),
(10, 'upload-files/files/upload/1013epop_lean01.jpg'),
(11, 'upload-files/files/upload/1116line@.png'),
(11, 'upload-files/files/upload/1116LINEat_-_Zip_Event_FB_Cover_Page__851_x_400_px.jpg'),
(12, 'upload-files/files/upload/1218head.jpg'),
(12, 'upload-files/files/upload/1218images.jfif'),
(12, 'upload-files/files/upload/1218image_profile.jpg'),
(12, 'upload-files/files/upload/1218IMG_1260-e1515397443666.jpg'),
(13, 'upload-files/files/upload/1319images (1).jfif'),
(13, 'upload-files/files/upload/1319NN-03.jpg'),
(14, 'upload-files/files/upload/1420Coach_Ow.jpg'),
(14, 'upload-files/files/upload/1420Coach_Ton.jpg'),
(14, 'upload-files/files/upload/1420Master_Charn.jpg'),
(14, 'upload-files/files/upload/1420maxresdefault.jpg'),
(1, 'upload-files/files/upload/144bnk48-2-cover-6d02e52d.jpg'),
(1, 'upload-files/files/upload/144Starto!-Poster-SQ01.jpg'),
(1, 'upload-files/files/upload/144thumb-bnk48.jpg'),
(15, 'upload-files/files/upload/1521AW_COVER_1702_x_800_pixel-01.jpg'),
(15, 'upload-files/files/upload/1521POSTER_2048_x_2048_pixel-01.jpg'),
(16, 'upload-files/files/upload/1622Report_799.jpg'),
(16, 'upload-files/files/upload/1623EX_news6849.jpg'),
(16, 'upload-files/files/upload/1623photo004.JPG'),
(16, 'upload-files/files/upload/1623photo015.JPG'),
(16, 'upload-files/files/upload/1623_MG_6020.jpg'),
(17, 'upload-files/files/upload/1724M563C2E1636D461504 (1).jpg'),
(17, 'upload-files/files/upload/1725booth_109-1249978879.jpg'),
(18, 'upload-files/files/upload/1827Banner_1000x350_news_featured.png'),
(18, 'upload-files/files/upload/1827kee-02.jpg'),
(18, 'upload-files/files/upload/1827seta_161.jpg'),
(19, 'upload-files/files/upload/1928commart Joy025.JPG'),
(19, 'upload-files/files/upload/1928Commart-connect-2017-14.jpg'),
(19, 'upload-files/files/upload/1928Commart-connect-2017.jpg'),
(19, 'upload-files/files/upload/1928event_15042_type50_p2_20180125094759.jpg'),
(20, 'upload-files/files/upload/2029TAPA-2018-pic-bf.jpg'),
(20, 'upload-files/files/upload/2029TAPA-thailand-fair.jpg'),
(21, 'upload-files/files/upload/2130icon9.gif'),
(21, 'upload-files/files/upload/2130titf-20-01.jpg'),
(22, 'upload-files/files/upload/2232DSC04444.jpg'),
(22, 'upload-files/files/upload/2232title_ttmnews_8597-20180227151839.jpg'),
(22, 'upload-files/files/upload/2233iq72b684cb290f12d38222d890e1beae20.jpg'),
(2, 'upload-files/files/upload/22Cover2.jpg'),
(2, 'upload-files/files/upload/22Cover3.jpg'),
(2, 'upload-files/files/upload/22IF_PriGMP2_300x300_px.jpg'),
(23, 'upload-files/files/upload/2336Aw_GGR_Event_pop Page__edited-02.jpg'),
(23, 'upload-files/files/upload/2336download (1).jfif'),
(23, 'upload-files/files/upload/2336ถ่ายภาพร่วมกัน-1.jpg'),
(23, 'upload-files/files/upload/2336บรรยากาศ-warm-up.jpg'),
(25, 'upload-files/files/upload/2540ca8b2659d6924fd059617510c4c4ebca.jfif'),
(25, 'upload-files/files/upload/2540images.png'),
(25, 'upload-files/files/upload/2540ถ่ายภาพร่วมกัน-1.jpg'),
(25, 'upload-files/files/upload/2540บรรยากาศ-warm-up.jpg'),
(26, 'upload-files/files/upload/2638IMG_7956.jpg'),
(26, 'upload-files/files/upload/2638maxresdefault (1).jpg'),
(26, 'upload-files/files/upload/2639picture-20160516134438.jpg'),
(27, 'upload-files/files/upload/27logo_en.png'),
(27, 'upload-files/files/upload/27maxresdefault.jpg'),
(27, 'upload-files/files/upload/27otbfvdlqhvXDChOby09-o.jpg'),
(27, 'upload-files/files/upload/27ปก-1.jpg'),
(28, 'upload-files/files/upload/2845Event_Cover_EventPop.png'),
(28, 'upload-files/files/upload/2845Event_Poster.jpg'),
(28, 'upload-files/files/upload/2845IMG_0152.jpg'),
(28, 'upload-files/files/upload/2845IMG_2484ok.jpg'),
(29, 'upload-files/files/upload/2941images (2).jfif'),
(29, 'upload-files/files/upload/2941thai.jpg'),
(29, 'upload-files/files/upload/2941thai_festival_singapore.jpg'),
(29, 'upload-files/files/upload/2941thfdf2018.jpg'),
(30, 'upload-files/files/upload/3041thai.jpg'),
(30, 'upload-files/files/upload/3041thai_festival_singapore.jpg'),
(30, 'upload-files/files/upload/304BITE_Logo_1.jpg'),
(31, 'upload-files/files/upload/3142dnd_cover.jpg'),
(31, 'upload-files/files/upload/3142dnd_poster.jpg'),
(31, 'upload-files/files/upload/3142NDDN.jpg'),
(31, 'upload-files/files/upload/3142obj6u9lk9E6sZjqHa9i-o.jpg'),
(31, 'upload-files/files/upload/3142safe.jpg'),
(32, 'upload-files/files/upload/3243aHR0cDovL3AxLmlzYW5vb2suY29tL2pvLzAvdWQvNDc5LzIzOTU0NTcvcGFnZS5qcGc=.jpg'),
(32, 'upload-files/files/upload/3243hqdefault.jpg'),
(32, 'upload-files/files/upload/3243RTP_EP_COVER_1702x800px.jpg'),
(32, 'upload-files/files/upload/3243RTP_EP_POSTER_2048x2048px.jpg'),
(32, 'upload-files/files/upload/32logo_en.png'),
(3, 'upload-files/files/upload/33TFF2018-FB-SQ-3-Stroke-Final-No-Frame-Edit7-1.jpg'),
(3, 'upload-files/files/upload/33thfdf2018.jpg'),
(3, 'upload-files/files/upload/33รูปเกสต์.jpg'),
(4, 'upload-files/files/upload/45Early_Bird_Cover.jpg'),
(4, 'upload-files/files/upload/46images.jfif'),
(4, 'upload-files/files/upload/46IMG_0485.jfif'),
(4, 'upload-files/files/upload/46ws2.png'),
(5, 'upload-files/files/upload/54BITE_EP_cover.jpg'),
(5, 'upload-files/files/upload/54BITE_Logo_1.jpg'),
(5, 'upload-files/files/upload/54Top-Banner-BGF-2017-after-event.jpg'),
(6, 'upload-files/files/upload/67Eventpop_KILORUN.ai__Cover_-_1702_x_800_pixel.jpg'),
(6, 'upload-files/files/upload/67Race_Map_mockup.jpg'),
(6, 'upload-files/files/upload/67Routing_Bangkok_rev03_Fun_Run_5.5_km_Thai.jpg'),
(6, 'upload-files/files/upload/67Routing_Bangkok_rev03_Kids_Run_2.5_km_Thai.jpg'),
(6, 'upload-files/files/upload/67Routing_Bangkok_rev03_Mini_Marathon_11km_Thai.jpg'),
(7, 'upload-files/files/upload/710Ma-D_Laughter_Club11-square-01.png'),
(7, 'upload-files/files/upload/78download (2).jfif'),
(7, 'upload-files/files/upload/78images (1).jfif'),
(7, 'upload-files/files/upload/78workshop-integrateddetox.jpg'),
(8, 'upload-files/files/upload/811download (5).jfif'),
(8, 'upload-files/files/upload/811Writing02-01.jpg'),
(9, 'upload-files/files/upload/912Adobe-Photoshop-CC-2018--h.png'),
(9, 'upload-files/files/upload/912download.png');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `username` varchar(15) NOT NULL,
  `idEvent` int(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `systemlogs`
--

CREATE TABLE `systemlogs` (
  `username` varchar(15) CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `event` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `systemlogs`
--

INSERT INTO `systemlogs` (`username`, `date`, `time`, `event`, `file`) VALUES
('adminSun', '2018-03-10', '01:00:00', 'd', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `webboard`
--

CREATE TABLE `webboard` (
  `idWebboard` int(10) NOT NULL,
  `idEvent` int(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `question` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `view` int(10) NOT NULL,
  `reply` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webboard`
--

INSERT INTO `webboard` (`idWebboard`, `idEvent`, `username`, `question`, `detail`, `date`, `time`, `view`, `reply`) VALUES
(1, 1, 'bankkies', 'อยากจับมือเฌอปรางค์ต้องทำยังไงครับ >////<', ' เกิดมาไม่เคยเจอคนน่ารักขนาดนี้มาก่อนเลยครับ ต้องไปทำยังไงถึงจะได้เจอเค้าครับ :3', '2018-03-13', '02:26:40', 7, 4),
(2, 1, 'mew', 'เบื่อ BNK 48 ต้องทำยังไงคะ เต็มบ้านเต็มเมืองไปหมด -*- รำคาณ!!!!', ' คือสามีดิฉัน ติ่ง BNK 48 มากคะ วันๆไม่ทำอะไรเลยทำยังไงดีคะ', '2018-03-13', '02:32:23', 0, 0),
(3, 1, 'bankkies', 'สวัสดี', 'มาร่วมสนุกกัน', '2018-03-13', '02:58:57', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `activitylogs`
--
ALTER TABLE `activitylogs`
  ADD PRIMARY KEY (`username`,`date`,`time`);

--
-- Indexes for table `attendents`
--
ALTER TABLE `attendents`
  ADD PRIMARY KEY (`username`,`idEvent`,`date`,`time`) USING BTREE,
  ADD KEY `ID_Event` (`idEvent`);

--
-- Indexes for table `comwebboard`
--
ALTER TABLE `comwebboard`
  ADD KEY `comwebboard_ibfk_1` (`username`),
  ADD KEY `idWebboard` (`idWebboard`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`idEvent`),
  ADD UNIQUE KEY `ID_Event` (`idEvent`);

--
-- Indexes for table `imageevent`
--
ALTER TABLE `imageevent`
  ADD PRIMARY KEY (`imagePath`,`idEvent`) USING BTREE,
  ADD KEY `idEvent` (`idEvent`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`username`,`date`,`time`),
  ADD KEY `idEvent` (`idEvent`);

--
-- Indexes for table `systemlogs`
--
ALTER TABLE `systemlogs`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `date` (`date`),
  ADD UNIQUE KEY `time` (`time`);

--
-- Indexes for table `webboard`
--
ALTER TABLE `webboard`
  ADD PRIMARY KEY (`idWebboard`) USING BTREE,
  ADD KEY `webboard_ibfk_2` (`username`),
  ADD KEY `idEvent` (`idEvent`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activitylogs`
--
ALTER TABLE `activitylogs`
  ADD CONSTRAINT `activitylogs_ibfk_1` FOREIGN KEY (`username`) REFERENCES `account` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attendents`
--
ALTER TABLE `attendents`
  ADD CONSTRAINT `attendents_ibfk_2` FOREIGN KEY (`username`) REFERENCES `account` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attendents_ibfk_3` FOREIGN KEY (`idEvent`) REFERENCES `event` (`idEvent`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comwebboard`
--
ALTER TABLE `comwebboard`
  ADD CONSTRAINT `comwebboard_ibfk_1` FOREIGN KEY (`username`) REFERENCES `account` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comwebboard_ibfk_2` FOREIGN KEY (`idWebboard`) REFERENCES `webboard` (`idWebboard`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `imageevent`
--
ALTER TABLE `imageevent`
  ADD CONSTRAINT `imageevent_ibfk_1` FOREIGN KEY (`idEvent`) REFERENCES `event` (`idEvent`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_ibfk_1` FOREIGN KEY (`username`) REFERENCES `account` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `log_ibfk_2` FOREIGN KEY (`idEvent`) REFERENCES `event` (`idEvent`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `systemlogs`
--
ALTER TABLE `systemlogs`
  ADD CONSTRAINT `systemlogs_ibfk_1` FOREIGN KEY (`username`) REFERENCES `account` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `webboard`
--
ALTER TABLE `webboard`
  ADD CONSTRAINT `webboard_ibfk_2` FOREIGN KEY (`username`) REFERENCES `account` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `webboard_ibfk_3` FOREIGN KEY (`idEvent`) REFERENCES `event` (`idEvent`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
