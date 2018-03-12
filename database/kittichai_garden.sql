-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2018 at 01:26 PM
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
  `password` varchar(20) NOT NULL,
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
('adminSun', '1234', 'ww', 'ww', 'ww', 'w', '2018-03-07', 'male', 'w', '', 'admin', '', 'activate'),
('bankky_Handsome', '1234', 'kittichai.te@ku.th', 'Kittichai', '123', '1', '2018-03-08', 'male', '123', '151', 'user', '', 'unActivate'),
('sun', '1234', 'vasupol.ch@ku.th', 'Sunny', '123', '1111', '2018-03-22', 'male', '1', '1', 'user', '', 'unActivate'),
('Sunny', '1234', '-', '-', '-', '-', '2018-03-09', 'male', '-', '0', 'user', 'upload-files/files/profile/SunnyCats-1-630x671.jpg', 'unActivate'),
('toon', '1234', '1', '1', '1', '1', '2018-03-10', '1', '1', '1', 'user', '1', 'activate');

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
('adminSun', '2018-03-08', '03:09:01', 1, 'Create event'),
('adminSun', '2018-03-12', '06:27:39', 0, 'Sign out'),
('adminSun', '2018-03-12', '06:34:52', 0, 'Sign out'),
('adminSun', '2018-03-12', '07:04:34', 0, 'Sign in'),
('Sunny', '2018-03-12', '06:49:43', 0, 'Sign in'),
('Sunny', '2018-03-12', '06:54:28', 0, 'Sign out');

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
(1, 'adminSun', 'Auto Sewing เรียนรู้ Application PES', ' PINN Creative Space พระราม 9 เขต ห้วยขวาง กรุงเทพมหานคร ประเทศไทย ', '2018-04-07', '13:00:00', '17:00:00', 150, 'Hobbies', 'free', 0, 'Autos Sewing จักรปักเล็ก (ขนาดสะดึง 10 x 10 cm.) สิ่งที่ลูกค้าจะได้รับ : 1. ได้รู้จักและทดลองใช้งาน Application PES  2. ทำความเข้าใจการทำงานของโปรแกรม Auto Sewing  3. ได้ลงมือทำชิ้นงาน 3 ชิ้น และสามารถนำกลับบ้านได้   เหมาะสำหรับ :   ลูกค้าที่ยังไม่มีจักร หรือไม่มีโปรแกรม PES แล้วต้องการซื้อจักรหรือโปรแกรม ลูกค้าที่มีจักร หรือโปรแกรมอยู่แล้ว แต่ยังไม่เคยใช้งานหรือใช้งานไม่คล่อง จะได้มีความมั่นใจและนำกลับไปใช้งานได้อย่างถูกวิธี ลูกค้าต้องการทำชิ้นงาน Auto Sewing เพื่องานอดิเรก จำหน่ายเพื่อสร้างรายได้หรืออาชีพเสริม', 'https://www.youtube.com/watch?v=esa8ZOBIiFg', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', 'ชูศักดิ์  เกียรติเฉลิมคุณ', 'ชูศักดิ์  เกียรติเฉลิมคุณ', 'pcs.rama9@pinncreative.com', '021681160', '13.75985861580884', '100.5687057907453', 'upload-files/files/upload/Auto Sewing เรียนรู้ Application PES27399472_10155217207718085_297855032_n.jpg', 1, 'upload-files/files/upload/Auto Sewing เรียนรู้ Application PES27399646_10155217200428085_1102103205_n.jpg', 0, ''),
(2, 'adminSun', 'Basic Scan N Cut', 'PINN Creative Space พระราม 9 เขต ห้วยขวาง กรุงเทพมหานคร ประเทศไทย ', '2018-05-04', '13:00:00', '17:00:00', 150, 'Hobbies', 'free', 0, 'Basic Scan N Cut เรียนรู้การใช้งานเครื่อง Scan n cut พื้นฐาน ช่วงที่ 1 (ภาคทฤษฎี)  13.00 - 15.00 น. อธิบายเบื้องต้นเกี่ยวกับตัวเครื่อง Scan n cut คืออะไร ใช้ทำงานประเภทไหนได้บ้าง สามารถตัดวัสดุอะไรได้บ้าง ภาพตัวอย่างชิ้นงาน แนะนำอุปกรณ์ต่างๆ จากเครื่อง Scan n cut ช่วงที่ 2 (ภาคปฏิบัติ)  15.00 - 17.00 น. เรียนการใช้งานเครื่องและแบบฝึกหัด การใช้งานเครื่องเบื้องต้น สอนการทำชิ้นงานจากเครื่อง Scan n cut แนะนำการดูแลรักษาเครื่องและอุปกรณ์ต่างๆ หมายเหตุ :  ไม่จำเป็นต้องมีเครื่อง ก็สามารถเรียนได้ ทางทีมงานเป็นผู้จัดเตรียมอุปกรณ์ให้ทั้งหมด  สำหรับผู้ที่มีเครื่องอยู่แล้ว สามารถนำเครื่องมาเรียนได้', 'https://www.youtube.com/watch?v=eL1SddOvM7s', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', 'สุมาลี  ดลสุขวงศาวัฒน์', 'สุมาลี  ดลสุขวงศาวัฒน์', 'pcs.rama9@pinncreative.com', '021681160', '13.759975802826222', '100.56885454625308', 'upload-files/files/upload/Basic Scan N Cut2.png', 1, 'upload-files/files/upload/Basic Scan N Cut27849533_10155250719898085_1791201139_n.jpg', 0, ''),
(3, 'adminSun', 'Trick to Translate เคล็ด (ไม่) ลับ ฉบับนักแปล โดย ปุ๋ย มณฑารัตน์ ทรงเผ่า', 'The Rabbit Hub ', '2018-05-04', '09:00:00', '17:00:00', 100, 'Hobbies', 'free', 0, 'Trick to Translate เคล็ด (ไม่) ลับ ฉบับนักแปล โดย ปุ๋ย มณฑารัตน์ ทรงเผ่า   l เวลา 09.00 - 17.00 น.  สถานที่ The Rabbit Hub @BTS พญาไท  Artery workshop ร่วมกับ คุณปุ๋ย มณฑารัตน์ ทรงเผ่า ผู้คร่ำหวอดในวงการงานแปล ออกผลงานคุณภาพมากกว่า 100 เล่ม  มีผลงานแปลสร้างชื่ออย่าง ชุด ‘The Princess Diaries Series’  ที่ต้นฉบับติดชาร์ต New York Time Bestseller หรือในชื่อภาษาไทยว่า ‘บันทึกของเจ้าหญิง’  และ ชุดผลงานของ ‘ฮาร์เลน โคเบน’ กว่าหลาย 10 เรื่อง ที่ติดอันดับขายดี ทั้งใน The New York Time และในประเทศไทย!      นักแปลมืออาชีพ… ใครว่ายาก! คุณเองก็เป็นได้   หลากเคล็ดลับที่คุณอาจไม่เคยรู้ ผสมผสานทั้งเนื้อหาที่เข้มข้น และ สอดแทรกเทคนิคการแปลอย่างไรให้ตัวละครมีชีวิต รับรองว่ากลมกล่อม เก็บทุกเม็ด ทุกรายละเอียด ไม่มีหลุดแน่นอนตลอด 2 วันนี้!    ใน ‘Trick to Translate เคล็ด (ไม่) ลับ ฉบับนักแปล โดย ปุ๋ย มณฑารัตน์ ทรงเผ่า’ คุณจะได้พบกับ..  - เทคนิดการแปลแบบเข้าใจง่าย ฉบับนักแปลมืออาชีพ  - เคล็ดลับการเลือกใช้คำให้ออกมาเป็นธรรมชาติ อ่านแล้วอินเหมือนคำในภาษาไทย  - ทริคการแปลให้สามารถเก็บอารมณ์และความรู้สึกของต้นฉบับไว้ทุกเม็ด เพื่อให้งานแปลของเราออกมาเหมือนต้นฉบับมากที่สุด   - อาหารกลางวัน และของว่างตลอดการ  Workshop ทั้ง 2 วัน', 'https://www.youtube.com/watch?v=8HP72fOQ8Ls', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', 'ปุ๋ย มณฑารัตน์ ทรงเผ่า', 'ปุ๋ย มณฑารัตน์ ทรงเผ่า', '-', '022580486', '13.755096829878248', '100.53322002335165', 'upload-files/files/upload/Trick to Translate เคล็ด (ไม่) ลับ ฉบับนักแปล โดย ปุ๋ย มณฑารัตน์ ทรงเผ่าTRICK-TO-TRANSLATE--EDIT-EVENT-POP.png', 0, 'upload-files/files/upload/Trick to Translate เคล็ด (ไม่) ลับ ฉบับนักแปล โดย ปุ๋ย มณฑารัตน์ ทรงเผ่าjec66bbkh57he9ehjab5b.jpg', 0, ''),
(4, 'adminSun', 'Basic Laser cut : คลาสเรียนการใช้งานเลเซอร์คัทพื้นฐาน', 'PINN Creative Space พระราม 9 เขต ห้วยขวาง กรุงเทพมหานคร ประเทศไทย ', '2018-05-03', '10:00:00', '17:00:00', 150, 'Hobbies', 'free', 0, 'Basic 101 : Laser Cut  อบรมการใช้งานเครื่องเลเซอร์พื้นฐาน  ผู้ร่วมเข้าอบรมจะได้เรียนรู้ทฤษฎีเบื้องต้นในการผลิตงานเลเซอร์  ทำความเข้าใจเกี่ยวกับวัสดุอุปกรณ์ กระบวนการทำเตรียมไฟล์ชิ้นงานเบื้องต้น เป็นไอเดียและต่อยอด เเรงบันดาลใจสำหรับผู้ที่ต้องการมีงานอดิเรก ธุรกิจขนาดเล็กหรืองานดีไซน์เป็นของตัวเอง  สิ่งที่ลูกค้าจะได้รับ : 1. ได้เรียนรู้การทำไฟล์สำหรับตัดเลเซอร์ 2. เรียนรู้วัสดุที่ใช้ในงานตัดเลเซอร์ต่อยอดเป็นผลิตภัณฑ์ 3. ผู้เข้าอบรมได้ลงมือทำ และรับชิ้นงานเลเซอร์กลับบ้าน', 'https://www.youtube.com/watch?v=HcKmpIj6n1s', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', '-', ' 021681160', '13.759895851186151', '100.5690256765107', 'upload-files/files/upload/45.png', 3, 'upload-files/files/upload/424989601_10155092817183085_1281850306_n.jpg', 0, ''),
(5, 'adminSun', 'Basic Sewing : คลาสเรียนตัดเย็บพื้นฐาน', ' PINN Creative Space พระราม 9 เขต ห้วยขวาง กรุงเทพมหานคร ประเทศไทย ', '2018-05-10', '10:00:00', '17:00:00', 150, 'Hobbies', 'free', 0, 'Basic 101 Sewing : TOTE BAG เรียนรู้ และทำความเข้าใจการใช้จักรเย็บผ้าเบื้องต้น ฟังก์ชันการใช้งานต่างๆ เช่น การร้อยด้ายบน การสนเข็ม กรอกระสวย เปลี่ยนตีนผี เป็นต้น  เรียนรู้ทฤษฎีเกี่ยวกับจักรเย็บผ้า  ประเภทของจักรเย็บผ้า ฟังก์ชั่นของจักรเย็บผ้าระบบคอมพิวเตอร์ ปัญหาที่อาจเกิดขึ้นขณะเย็บ', 'https://www.youtube.com/watch?v=yuazVzpHksc', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', '-', '021681160', '13.759960195865151', '100.56930036410859', 'upload-files/files/upload/54.png', 0, 'upload-files/files/upload/526914257_1408577255921308_2094004458_n.jpg', 0, ''),
(6, 'adminSun', 'YOGA WORKSHOP by AMIT from INDIA', ' Sundance Yoga Studio, Samakkhi Road, Tha Sai, Mueang Nonthaburi District, Nonthaburi, Thailand ', '2018-03-24', '09:00:00', '18:00:00', 200, 'Health', 'free', 0, 'YOGA WORKSHOP Motivated yoga instructor with advance training by AMIT on DAY: 24-28 March 2018 / TIME: 09.00-18.00  EveryDay What is special about this workshop?  The workshop is personally constructed by the head teacher of the world peach yoga school, Amit payal, who has many years’ experience in teaching at yoga teacher training courses and various yoga programs in India. The present course is ideal choice for all yoga practitioners who requires basement for their yoga practice.    What we will learn? In this workshop you’ll extend your essential knowledge of yoga both in theory and practice. Moreover, you will learn how to understand your body’s needs through the different asana, how to build your own practice and how to make it safe and more beneficial. At the end of the workshop each student will have clear knowledge and deep understanding about his own body, its abilities and how to work with it to achieve results in yoga.', 'https://www.youtube.com/watch?v=8a4vrzF5t-I', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', '-', '0960570007', '13.885147729051106', '100.52284738376488', 'upload-files/files/upload/6images.jfif', 3, 'upload-files/files/upload/6download (1).jfif', 0, ''),
(7, 'adminSun', 'KILORUN 2018', 'Lan Khon Muang , Sao Chingcha, Phra Nakhon, Bangkok, Thailand ', '2018-03-24', '09:00:00', '17:00:00', 500, 'Health', 'free', 0, 'KILORUN (กิโลรัน) คืออะไร?                     KILORUN (กิโลรัน) เทศกาลงานวิ่งรูปแบบใหม่ไม่ซ้ำใคร ที่การวิ่ง กิน เที่ยว คือเรื่องเดียวกัน และไม่ได้วัดผลเพียงแค่กิโลเมตร (ระยะทาง) แต่วัดผลด้วยกิโลกรัม (น้ำหนัก) นอกจากสุขภาพที่ดีแล้วผู้เข้าร่วมจะได้รับทั้งความสนุกสนาน สัมผัสกับวัฒนธรรม และเต็มอิ่มไปกับอาหารอร่อยของแต่ละเมืองบนสุดยอดเส้นทางวิ่งในเมืองแห่งเอกลักษณ์ทางวัฒนธรรม (The Iconic City) อีกด้วย โดยทุกเพศทุกวัยสามารถมาวิ่งและแชร์ประสบการณ์พิเศษร่วมกัน ไม่ว่าจะมาเดี่ยว มากับเพื่อน หรือมากับครอบครัว จะเป็นนักวิ่งมืออาชีพ มือสมัครเล่น  คนไทย หรือชาวต่างชาติก็ตาม KILORUN แบ่งออกเป็น 2 ประเภทการแข่งขัน  1. KG   (กิโลกรัม) หรือ Aroi Run (อร่อยรัน)         สำหรับ KG   (กิโลกรัม) หรือ Aroi Run (อร่อยรัน) จะเป็นเส้นทางการเดิน-วิ่งที่วัดผลด้วยกิโลกรัม โดยผู้เข้าแข่งขันจะได้ชิมอาหารจานเด่นของแต่ละเมือง พร้อมชมบรรยากาศสวยๆ ตามเส้นทางเดิน โดยเราได้เลือกเส้นทางที่ผ่านสถานที่ท่องเที่ยว  (Iconic attractions) ที่น่าสนใจ พร้อมคัดเลือกอาหารจานเด่นที่เป็น Signature รสเลิศของแต่ละเมือง  หลังจากทานอาหารแล้ว หากใครทำน้ำหนักขึ้นตามเกณฑ์ที่สมัคร โดยแบ่งเป็น 2 ระดับ คือ 0.5 KG และ 1 KG ก็จะได้รับเหรียญรางวัลที่ไม่เหมือนใคร จึงเป็นที่มาของคำว่า KG :   Aroi Run  2. KM   (กิโลเมตร) หรือ Breakfast Run (เบรคฟาสต์ รัน)         “เมื่อประสบการณ์ระหว่างทางสำคัญไม่แพ้จุดหมาย” เส้นทางของ KM   (กิโลเมตร) หรือ Breakfast Run (เบรคฟาสต์ รัน) จึงถูกคัดเลือกจากเส้นทางที่มีเอกลักษณ์ ซึ่งผู้เข้าร่วมจะได้สัมผัสบรรยากาศของเมือง และสนุกกับการวิ่งไปพร้อมกันการวิ่งที่วัดผลด้วยกิโลเมตร บนระยะทางที่กำหนด โดยแบ่งออกเป็น 3 ระยะ คือ KIDS RUN 2.5 กิโลเมตร, FUN RUN 5.5 กิโลเมตร และ MINI MARATHON 11 กิโลเมตร ผ่านเส้นทางที่กำหนดไว้ โดยตลอดทางผู้เข้าแข่งขันจะสามารถสัมผัสได้ถึงวัฒนธรรม สถาปัตยกรรม และวิถีชีวิตของคนในพื้นที่', 'https://www.youtube.com/watch?v=GNgSJ5lg-gc', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', 'kilorun2018@gmail.com', '0839896775', '13.752764812311945', '100.50177509870764', 'upload-files/files/upload/7Eventpop_KILORUN.ai__Cover_-_1702_x_800_pixel.jpg', 10, 'upload-files/files/upload/7Race_Map_mockup.jpg', 0, ''),
(8, 'adminSun', 'Detox workshop by Kru Bud [ENGLISH]', 'Maiden Massage & Spa (เมย์เดน) Naradhiwas Rajanagarindra Road, Silom, Bang Rak, Bangkok, Thailand ', '2018-03-25', '00:00:09', '00:00:11', 50, 'Health', 'free', 0, 'Two-hour Detox Workshop by Kru Bud [ENGLISH] Date: Sunday March 25, 2018 Time: 9.30 AM - 11.30 AM Location: see map for address (900 meters from Silom MRT, and just 500 meters from Chong Nonsi BTS) Language: English  Part 1: Making Your Own Kombucha  Kombucha is produced by fermenting tea using a \"symbiotic culture of bacteria and yeast\" (SCOBY).  Well-known benefits of drinking Kombucha on a regular basis include:  Detoxification Improved digestion Immune system stimulation Increased energy Weight loss Guests will get to take home ingredients to create your own Kombucha at home!  Part 2: Developing a Proper Stomach Massage Routine Learning to properly massage your stomach for a few minutes each day can improve digestion, stimulate stomach muscle growth, and help to balance your overall nervous system allowing you to feel healthier and more energized.  You will also learn to make a simple, healthy, and delicious smoothie and can enjoy the smoothie following the workshop to replenish essential nutrients and begin your newly-discovered path of proper and enjoyable digestion.  Workshop takeaways  Learn how to free yourself from constipation and bloating Rid yourself of dependence on antibiotics Balance your nervous system to improve digestion Replace stomach fat with muscle Develop a proper eating routine for ideal digestion Enjoy a regular pooping schedule!  Included for free Breakfast with a smoothie Kombucha-starting kit Requirements Guests should come to the class on an EMPTY STOMACH; a light snack and water early in the morning is okay.  Wear flexible clothing, such as gym clothes or casual street-wear. Women should wear a sports bra.', 'https://www.youtube.com/watch?v=zIDSCDc8iGs', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', 'Kru Bud ', 'Kru Bud ', '-', '027415498', '13.728036159117865', '100.5280478526821', 'upload-files/files/upload/82 (1).png', 0, 'upload-files/files/upload/8images (1).jfif', 0, ''),
(9, 'adminSun', 'สูงได้...ไม่ธรรมดา', 'Bangkok Cha-Da Hotel Huai Khwang Bangkok Thailand ', '2018-03-31', '00:00:13', '00:00:17', 200, 'Health', 'free', 0, 'ใครที่กำลังเครียด  กับ ปัญหา  ไม่อยาก เตี้ย!! บ้างคะ?? **กระดูกแก่ก่อนวัย **กระดูกอ่อนกว่าวัย **กระดูกใกล้ปิดแล้ว **กระดูกปิดแล้ว **มีประจำเดือนแล้ว **เสียงแตกแล้ว  เราช่วยได้ค่ะ^^ การเพิ่มความสูงเนี่ยจริงๆแล้วเนี่ยมันไม่ใช่เรื่องง่าย และจากประสบการณ์ของตัวเองด้วย.... ตัวเองเคยเตี้ยมากตอนเด็กๆ และก็ทำให้ตัวเองสูงขึ้นได้ แต่พอมีลูกชายเตี้ย มันรู้สึกว่า ยาก ..กลุ้มใจโทษตัวเอง คิดว่าผิดที่แม่เตี้ยเอง ถึงกับขนาดกลับไปเรียนต่อถึงปริญญาเอก เพื่อหาวิธีการเพิ่มความสูงให้ลูกรัก ใช้ทั้งวิชาการ หลักการ วิธีคิด ไปหลายประเทศมาก.. ด้วยความที่\"กลัวลูกเตี้ย!!', 'https://www.youtube.com/watch?v=WL1xY6E8G18', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', 'ดร.บัณลักข ถิรมงคล', 'ดร.บัณลักข ถิรมงคล', 'tallcando@hotmail.com', '024587415', '13.77411329939009', '100.57371318340302', 'upload-files/files/upload/990239.jpg', 0, 'upload-files/files/upload/988940.jpg', 0, ''),
(10, 'adminSun', 'Ma:D Laughter Club #11 มา(หัวเราะดี๊)ดีกัน ครั้งที่ 11', 'Ma:D Laughter Club #11 มา(หัวเราะดี๊)ดีกัน ครั้งที่ 11', '2018-03-15', '19:00:00', '21:00:00', 100, 'Health', 'free', 0, 'Ma:D Laughter Club #11 มา(หัวเราะดี๊)ดีกัน ครั้งที่ 11  เราชวนมาขำก๊ากดังๆกับ Ma:D Laughter club คลับหัวเราะจัดประจำเดือนที่จะมาช่วยคนเมืองมีคุณภาพชีวิตที่ดีขึ้นด้วยการระเบิดเสียงหัวเราะและกิจกรรมลับอย่าบอกใครเพื่อคลายความเครียด ความหดหู่ซึมเศร้า ความโกรธ ความกลัว ความกังวล พลังงานลบจากการใช้ชีวิตประจำวันทั้งหลาย   แล้วคุณจะได้พบประสบการณ์ใหม่ในการหัวเราะที่คุณไม่เคยสัมผัสมาก่อนด้วยตัวเอง  มาผ่อนคลายและหัวเราะเสียงดังๆ ด้วยกันนะค้าาา ', 'https://www.youtube.com/watch?v=LomxgmoX1sk', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', 'มนัสวี ศุระศรางค์ (มะไหม)', 'มนัสวี ศุระศรางค์ (มะไหม)', 'info@madeehub.com', '0878412147', '13.724721095882275', '100.58733344078064', 'upload-files/files/upload/10Ma-D_Laughter_Club11-square-01.png', 1, 'upload-files/files/upload/10images (2).jfif', 0, ''),
(11, 'adminSun', 'ชุมชนแห่งการเขียน รุ่นที่ 13', 'Learning Hub Space ซอย งามดูพลี แขวง ทุ่งมหาเมฆ เขต สาทร กรุงเทพมหานคร ประเทศไทย ', '2018-03-17', '09:00:00', '17:00:00', 200, 'Education', 'free', 0, 'อยากเขียนให้เก่งได้ ทักษะอะไรที่สำคัญ ?  เริ่มง่ายๆ ด้วยการ “เล่าเรื่องให้เป็น”  การเล่าเรื่องให้สนุก น่าสนใจ และน่าประทับใจ ก็ต้องมีเทคนิค  ทักษะการเล่าเรื่อง ใช้ในการแบ่งปันเรื่องราวต่างๆได้ทุกที่ ไม่ว่าจะเขียนเป็นโพสต์ บทความ เรื่องสั้น อีบุ๊ค หนังสือ กระทั่งนิยาย ประโยชน์ที่คุณจะได้รับ จากกิจกรรม - เผยเทคนิคการเล่าเรื่องให้มีเสน่ห์ สนุกสนาน และน่าประทับใจ - วิธีสร้างคอนเท้น์โดนใจ ให้ถูกแชร์ต่อๆกัน  - ฝึกเขียนคอนเท้นท์ ด้วยโครงสร้างการเล่าเรื่องสไตล์ภาพยนตร์ - เมื่องานเขียนติดขัดไม่ลื่นไหล จะแก้ปัญหาได้อย่างไร', 'https://www.youtube.com/watch?v=T5JcoDSW3-k', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', 'jinnat@learninghubthailand.com', '0939254962', '13.71266069679523', '100.54334979436692', 'upload-files/files/upload/11download (6).jfif', 3, 'upload-files/files/upload/11Writing02-01.jpg', 0, ''),
(12, 'adminSun', 'Graphic Design เริ่มต้นง่าย สร้างได้ด้วยตัวเอง', 'Paintcil studio ลาดพร้าว ถนน ลาดพร้าว แขวง จอมพล เขต จตุจักร กรุงเทพมหานคร ประเทศไทย ', '2018-03-17', '09:00:00', '15:00:00', 150, 'Education', 'free', 0, 'Photoshop สำหรับการออกแบบ การตกแต่งภาพ และสร้างภาพกราฟฟิก  illustrator สำหรับสร้างผลงาน Graphic ที่ต้องการความละเอียดของชิ้นงาน วาดการ์ตูน งานป้ายโฆษณาต่างๆ  Graphic Design ผสมผสานชิ้นงานเรียนรู้กระบวนการเป็น Graphic Design มืออาชีพ การออกแบบ วิธีคิดเชิงสร้างสรรค์ (Creative Thinking) ทั้งศาสตร์และศิลป์ผ่านโปรแกรมคอมพิวเตอร์ Photoshop และ illustrator เพื่อตอบสนองการทำงาน ด้านกราฟฟิก ทุกรูปแบบ   สิ่งที่ผู้เรียนจะได้รับ+++  สร้างการเรียนรู้ ความเข้าใจหลักการพื้นฐานของการออกแบบในโปรแกรมพื้นฐานสามารถนำไปประยุกต์ใช้ให้เกิดประโยชน์ในการทำงานและธุรกิจ เมื่อจบคอร์สนี้ คุณจะออกแบบ ถ่ายทอดความสวยงามของชิ้นงานให้ตรงความต้องการ อย่างสวยงาม ', 'https://www.youtube.com/watch?v=YqQx75OPRa0', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', 'paintcilstudio@gmail.com', '0874596321', '13.784751601298014', '100.6114887357976', 'upload-files/files/upload/12download.png', 1, 'upload-files/files/upload/12851x400_pixel.jpg', 0, ''),
(13, 'adminSun', 'Young LEAN Entrepreneur', ' อาคารเฉลิมราชกุมารี 60 พรรษา (อาคารจามจุรี 10) ถนน พญาไท  เขต ปทุมวัน กทม', '2018-03-30', '15:00:00', '17:00:00', 150, 'Education', 'free', 0, 'คุณจะได้ทดสอบไอเดีย ผ่านการฝึกฝนการลงตลาด และฝึกแนวคิดการสร้างธุรกิจ โดยใน 3 วันนี้ คุณจะได้พบกับวิทยากรผู้เชี่ยวชาญด้านการทำธุรกิจมาให้คำแนะนำ คุณจะได้ทำงานกันเป็นทีมกับนักศึกษาจากหลากหลายสาขาและหลากหลายสถาบัน ร่วมกันระดมความคิด ออกไอเดียและลงมือทำด้วยตัวคุณเอง ตั้งแต่ตั้งสมมุติฐาน ทดลองขายไอเดียจริง ทดสอบสินค้า/ตลาดจริง จนถึง pitching จริงๆ!! ทุกทีมจะมีเวลาในแต่ละ session เพียงไม่กี่ชั่วโมง ที่คุณจะต้องพิสูจน์สมมุติฐานต่างๆในธุรกิจ จะได้รู้ว่าว่าไอเดียนั้นทำเป็นธุรกิจได้หรือไม่ และในวันสุดท้าย เราจะเฟ้นหาผู้ชนะ โดยเลือกจากทีมที่ทำตามแนวคิด Lean Startup ได้ดีที่สุด ไม่ใช่ทีมที่ไอเดียดีที่สุด!!', 'https://www.youtube.com/watch?v=atkySv5QAG8', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', 'เฟิร์ส', 'เฟิร์ส', 'tepchaipanjaroen@gmail.com', '0987845128', '13.742673154443455', '100.5279815196991', 'upload-files/files/upload/13download (1).png', 0, 'upload-files/files/upload/13epop_lean01.jpg', 0, ''),
(14, 'adminSun', 'โยคะกับเจ้ #1', 'Ma:D Club For Better Society, Phra Kanong Neua, Wattana, Bangkok, Thailand', '2018-03-24', '00:00:14', '00:00:15', 50, 'Education', 'free', 0, '\"โยคะ\" ที่เรารู้จักเป็นอย่างไร?  โยคะเล่นเพื่อลดน้ำหนัก เล่นเพื่อฝึกสมาธิ หรือเล่นเพื่อตามเทรนด์สุขภาพดี?  หรือใครที่ยังไม่เคยลอง แล้วอยากลองเล่นโยคะดูบ้าง    เพียงแค่หลงรัก \"โยคะ\" อยากรู้อยากเห็นหรือตั้งคำถาม หรืออยากทุ่มสุดตัวให้กับ \"โยคะ\"   ไม่ว่าจะเป็นผู้ฝึกมือใหม่ขั้นมาตรฐาน หรือมือโปรท่ายากขั้นแอดวานส์ Ma:D อยากชวนมา \"โยคะกับเจ้\"    วันเสาร์ที่ 24 มีนาคม เวลา 2pm-3.30pm  @Ma:D Club for Better Society เอกมัย 4  การเตรียมตัว  - สวมเสื้อผ้ายืดหยุ่นได้ดี ทรงเข้ารูปเล็กน้อย เสื้อ/กางเกงจะได้ไม่เปิดเวลาก้ม/กลิ้ง/เถือกต่างๆนานา  - ท้องว่างมาเรียน หยุดทานอาหาร/ขนมเป็นเวลา 2 ชม.ก่อนเริ่มคลาส  - เตรียมผ้าเช็ดเหงื่อมาด้วย', 'https://www.youtube.com/watch?v=HzwdKBYG0xA', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', 'info@madeehub.com', '0896543584', '13.724715884635247', '100.58733880519867', 'upload-files/files/upload/14Yoga-eventpop-001-01.png', 1, 'upload-files/files/upload/14Yoga-poster-01.png', 0, ''),
(15, 'adminSun', 'Workshop การออกแบบและปรับแก้ไขเพื่อการขออนุญาตสร้างโรงงานขนาดเล็ก เพื่อการขอมาตรฐานกระบวนการผลิต Primary GMP', 'Pattaya Exhibition And Convention Hall (PEACH) Pattaya City, Bang Lamung District, Chon Buri, Thailand ', '2018-03-29', '09:00:00', '16:00:00', 100, 'Education', 'free', 0, 'Primary GMP คือมาตรฐานการผลิตขั้นต้นในการผลิตอาหารแปรรูปที่บรรจุในภาชนะพร้อมจำหน่าย เพื่อลดและขจัดความเสี่ยงจากอันตรายที่อาจเกิดจากกระบวนการผลิต 3 ประการได้แก่ 1. ป้องกันการปนเปื้อนเบื้องต้น  2. ลดยับยั้งทำลายจุลินทรีย์ก่อโรค 3. ป้องกันการปนเปื้อนซ้ำหลังการแปรรูป  ประโยชน์ที่คาดวาจะได้รับ ผู้เรียนมาสามารถออกแบบพื้นที่โรงงานผลิตอาหารได้ตามมารตฐานที่สำนักงานคณะกรรมการอาหารและยากำหนดไว้ได้อย่างถูกต้อง เพื่อนำมาสู่มาตรฐานกระบวนการผลิตอาหารที่มีคุณภาพ เพื่อการขยายตลาดสู่ Modern Trade และส่งออก', 'https://www.youtube.com/watch?v=MuDfUkf2ZpU', '-', '-', '-', '-', 'info@greenworldmedia.co.th', '0875487829', '13.312175185225861', '100.90404072739398', 'upload-files/files/upload/15IF_PriGMP2_851x400px.jpg', 1, 'upload-files/files/upload/15Cover2.jpg', 0, ''),
(16, 'adminSun', 'สร้างยอดขายเพิ่ม เติมฐานลูกค้าด้วย LINE@', 'TARAD Dot Com (ตลาด ดอท คอม) Huay Kwang, Bangkok, ประเทศไทย ', '2018-03-23', '10:30:00', '17:30:00', 200, 'Business', 'free', 0, 'สร้างยอดขายเพิ่ม เติมฐานลูกค้าด้วย LINE@  พ่อค้า แม่ค้ายุคนี้ไม่มีไม่ได้แล้ว กับ \" Line@ \" ที่จะสามารถช่วยเพิ่มฐานลูกค้า ปิดการขายได้ง่ายๆ พร้อมการสร้างกิจกรรม หรือจะแจกคูปองก็แสนจะง่ายดาย   สิ่งที่จะได้รับจากคอร์สนี้ เข้าใจหลักการและความสำคัญของ Line@ ข้อดีและหลักการใช้งานให้มีประสิทธิภาพ วิธีการใช้งานฟีเจอร์สำคัญ เคล็ดลับและเทคนิคการใช้งานแบบมืออาชีพ แนะนำวิธีหาคนติดตาม แบบทำเองได้ ไม่ต้องใช้งบ  คอร์สนี้เหมาะสำหรับ ผู้ประกอบการร้านค้าออนไลน์ เจ้าของกิจการร้านค้าทั่วไป นักการตลาดออนไลน์ บุคคลทั่วไปที่ต้องการสร้างเครือข่าย (ชุมชน, สมาคม, องค์กรรัฐบาลและเอกชน)', 'https://www.youtube.com/watch?v=yQ-SAXedEEk', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', '-', '0965411475', '13.799433245468293', '100.57610034942627', 'upload-files/files/upload/16line@.png', 0, 'upload-files/files/upload/16LINEat_-_Zip_Event_FB_Cover_Page__851_x_400_px.jpg', 0, ''),
(17, 'adminSun', 'Digital Transformation 2018 - Intensive Course', 'Victor Club FYI Center ถนน พระรามที่ 4 Bangkok Thailand ', '2018-03-28', '00:00:09', '17:00:00', 200, 'Business', 'free', 0, ' DIGITAL TRANSFORMATION คือ การเปลี่ยนวิธีคิดอย่างมีกลยุทธ์ อย่างถึงแก่นจากรากฐานของธุรกิจของคุณ ”    ๐ แท้จริงแล้วไม่ใช่เรื่องเกี่ยวกับเทคโนโลยี ไม่ใช่เพียงแค่วางโครงสร้างพื้นฐานด้านไอที หรือแค่การนำเทคโนโลยีมาใช้ในองค์กร เท่านั้น แต่เป็นเรื่องเกี่ยวกับกลยุทธ์และวิธีคิดใหม่ในการทำธุรกิจ   ๐ Digital Transformation คือ การ Transform ธุรกิจของคุณเป็น Digital Business ในยุคดิจิตอล ไม่ใช่เพียงแค่มี website หรือทำ Digital Marketingในช่องทาง online และ social media ต่างๆ เท่านั้น   ๐ Digital Transformation คือ การเปลี่ยนธุรกิจจากรากฐาน วิธีคิด และ วิธีทำธุรกิจของคุณ ด้วยการ Transform ธุรกิจของคุณเป็น Digital Business ในยุคดิจิตอล  ๐ Digital Transformation คือ การคิดใหม่ทุกมิติ และการมีส่วนร่วมของทุกคนในองค์กร ไม่ใช่แค่ตั้งแผนก Digital หรือ มอบหมายให้คนใดคนหนึ่งทำ', 'https://www.youtube.com/watch?v=508CR1fd8ws', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', 'ธนพงศ์พรรณ ธัญญรัตตกุล ', 'ธนพงศ์พรรณ ธัญญรัตตกุล ', 'contact@u23.in.th', '0982699004', '13.720176140018062', '100.56011795684196', 'upload-files/files/upload/17PHOTO-DigitalTransCompass-e1501868501432.jpg', 0, 'upload-files/files/upload/17eventpop-cover-851x400.png', 0, ''),
(18, 'adminSun', 'Tesco Lotus Hackathon 2018 : Revolutionising Retail Towards Thailand 4.0', 'Chulalongkorn University (Chamchuri 10 BLDG) ', '2018-03-16', '09:59:00', '18:00:00', 200, 'Business', 'free', 0, 'No matter you are an ambitious entrepreneur, visionary designer or passionate developer, this Hackathon is for you!  Tesco Lotus together with Chulalongkorn University, Digital Economy Promotion Agency, and National Innovation Agency hold a Hackathon to revolutionise Thailand’s retail industry for future neighborhood.  Hackathon Objective  - To have thinkers and innovators brainstorm their ideas in an attempt to improve the service quality of small retail stores. - To develop a good understanding of small retail business and to make attendees aware of related current innovations such as electronic payment, e-commerce, and logistics, ultimately to advance the retail industry itself. - To provide thinkers and innovators, as well as entrepreneurs, with a knowledge-sharing space in order to help “innovate” for the future prospect of their operations in international environments. -To help enforce compliance with the government’s economic policy and to ensure the country’s economic growth growing with stability, prosperity, and sustainability.', 'https://www.youtube.com/watch?v=Ht1Ljw2A9Oo', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', 'jaruporn@hubbathailand.com', '0845788891', '13.742621639921552', '100.52818985964882', 'upload-files/files/upload/18image_profile.jpg', 0, 'upload-files/files/upload/18head.jpg', 0, ''),
(19, 'adminSun', 'SCB EASY WTF (What The Food)', 'Makkasan Station - Airport Rail Link Bangkok Thailand ', '2018-03-14', '15:00:00', '00:00:00', 500, 'Business', 'free', 0, 'SCB EASY WTF (What The Food) Organized by ARTBOX  \"เทศกาลอาหารโคตรคูล...ทุกเมนู 30 บาท\"  14 มีนาคม 2561 [16.00น.] - 18 มีนาคม 2561 [24:00น.] ลานแอร์พอร์ตลิ้งค์มักกะสัน - กรุงเทพฯ สอบถามเพิ่มเติมได้เรื่องการซื้อบัตรได้ที่ LINE ID: @whatthefood', 'https://www.youtube.com/watch?v=GdeoIF0eYg4', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', 'artboxbangkok@gmail.com', '027319480', '13.756077849217165', '100.5624841518611', 'upload-files/files/upload/19images (1).jfif', 0, 'upload-files/files/upload/19NN-03.jpg', 0, ''),
(20, 'adminSun', 'Design Your Life (ชีวิตออกแบบได้)', 'Bang Na Residence, Sanphawut Road, Bang Na, Bangkok, Thailand ', '2018-03-19', '09:00:00', '18:00:00', 150, 'Family', 'free', 0, 'รายละเอียดคอร์ส   สัมมนา Design Your Life (ชีวิตออกแบบได้)  2 วันเต็มอิ่ม 19 – 20 มีนาคม 2561   กำหนดการ   จันทร์ที่ 19 มีนาคม เวลา 8.00 น. – 22.00 น.  อังคารที่ 20 มีนาคม เวลา 8.00 น. – 18.00 น.     สถานที่ ชั้น1 บางนา เรสซิเดนซ์ ทาวเวอร์บี ถ.สรรพาวุธ  ใกล้ไปรษณีย์บางนา ห่างจาก BTS บางนา 500 เมตร จังหวัดกรุงเทพมหานคร \" DESIGN YOUR LIFE \"  1.ก้าวแรกสู่หลักแสนต่อเดือนกับ 30 วิธีคิดของเศรษฐีทั่วโลก  2.Power Full You Power Full Team (พลังไร้ขีดจำกัด)  3. Negotiation (สุดยอดการเจรจาต่อรอง)  4. Blue Ocean (การตลาดน่านน้ำสีคราม)  5.เคล็ดลับการเดินทางสู่ฝันในทุกด้านทุกมิติของชีวิต  6.Design Your Life ( การออกแบบชีวิต )', 'https://www.youtube.com/watch?v=g3M2bf9FfSg', '-', '-', 'ชาญ  ตระการศิลป์', 'ชาญ  ตระการศิลป์', 'sattayadlh@gmail.com', '0845159765', '13.674924138200947', '100.59841235311944', 'upload-files/files/upload/20maxresdefault.jpg', 0, 'upload-files/files/upload/20Cover_DYL_eventpop.jpg', 0, ''),
(21, 'adminSun', 'SME FAMILY CHARITY RALLY : way to the oscar 2018', 'โรงแรมอิมพีเรียล พัทยา', '2018-07-23', '10:00:00', '16:00:00', 200, 'Family', 'free', 0, '- กำลังมองหา เพื่อนคู่คิด  - พาร์ทเนอร์ที่ไม่ใช่แค่พาร์ทเนอร์  - หากคุณกำลังมองหา Event แจ่มๆ  - เวลาเพื่อเติมเต็มชีวิต  คุณมีนัดกับ SME Family Charity Rally สมาพันธ์SMEไทย ที่กลับมาปีนี้ ไม่ใช่แค่สนุกขึ้นหลายเท่า ทั้งยังมีการเต็มเต็มมิตรภาพและรอยยิ้ม เสียงหัวเราะ ของเพื่อนๆ พี่ๆ น้องๆ อย่าพลาดด้วยประการทั้งปวง!', 'https://www.youtube.com/watch?v=9V_6joY0I3U', '-', '-', '-', '-', 'thaismenetwork@gmail.com', '0988755487', '12.906286661479037', '100.89439496936336', 'upload-files/files/upload/21POSTER_2048_x_2048_pixel-01.jpg', 1, 'upload-files/files/upload/21AW_COVER_1702_x_800_pixel-01.jpg', 0, ''),
(22, 'adminSun', 'Amarin Baby & Kids Fair  ', 'ไบเทคบางนา Hall 102-104 , กรุงเทพมหานคร ', '2018-04-05', '09:00:00', '17:00:00', 1000, 'Family', 'free', 0, 'ขอเชิญคุณชวนครอบครัวไปเที่ยว งาน  Amarin Baby & Kids Fair  จัดขึ้นที่ ไบเทค บางนา ในงานมีสินค้าหลากหลาย ไม่ว่าจะเป็นเสื้อผ้าคุณหนูๆ หรือจะเป็นของเล่นเสรืมทักษะก็มีจำหน่ายในงานนี้ ไม่ได้มีแต่สินค้าคุณหนูๆเท่านั้น ยังมีสินค้าสำหรับคุณแม่มาจำหน่ายด้วย และที่สำคัญ ในงานยังลดราคาสูงสุดถึง 70 % เลยทีเดียว     ในงานยังมีกิจกรรมบนเวทีมากมาย ที่คอยให้คุณหนูๆร่วมเล่นกิจกรรมเพื่อรับของรางวัลกันอีกด้วย ไม่เพียงแต่เท่านี้ก็ยังมีมุมสนามเด็กเล่นให้ คุณหนูๆได้เล่นกันอย่างเลิดเพลิน ส่วนคุณแม่ท่านไหนที่นำลูกน้อยมา ภายในงานเขาก็จัดห้องสำหรับให้นมบุตร และห้องเปลี่ยนผ้าอ้อมให้ด้วย เรียกว่าเอาใจคุณแม่คุณลูกโดยเฉพาะ งานนี้ขอบอกว่า ช้อปเพลินๆทั้งแม่และลูกไปเลย...', 'https://www.youtube.com/watch?v=wF4WkuJgFKc', '-', '-', '-', '-', '-', '024578490', '13.670350378842445', '100.61032583219207', 'upload-files/files/upload/22blog2_20150727210242.jpg', 0, 'upload-files/files/upload/2202-4.jpg', 0, ''),
(23, 'adminSun', 'งานเทศกาลหนังสือครอบครัวนักอ่าน', 'ศูนย์การประชุมแห่งชาติสิริกิติ์', '2018-04-10', '09:00:00', '18:00:00', 1000, 'Family', 'free', 0, 'สมาคมผู้จัดพิมพ์และผู้จำหน่ายหนังสือแห่งประเทศไทยในนามของภาคเอกชนที่เล็งเห็นถึงความสำคัญของการอ่านหนังสือและการเรียนรู้ของเด็กเยาวชน และผู้ปกครอง จึงได้กำหนดจัดงานเทศกาลหนังสือครอบครัวนักอ่าน  เพื่อกระตุ้นให้เด็กเยาวชน ตลอดจนผู้ใหญ่ทุกอาชีพตระหนักถึงความสำคัญของการอ่านหนังสือ และการเรียนรู้ ตลอดจนเป็นการสร้างความรู้ ความเข้าใจให้แก่ครูและผู้ปกครองในการส่งเสริมการอ่าน ตลอดจนสร้างสภาพแวดล้อมให้เด็กและเยาวชนมีความสุขกับการอ่านหนังสือและการเรียนรู้ อันจะนำไปสู่นิสัยใฝ่เรียนรู้รักการอ่าน ซึ่งจะเป็นพื้นฐานสำคัญของการพัฒนาคนในชาติต่อไปในอนาคต', 'https://www.youtube.com/watch?v=LlQA6Jx7k_Q', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', '-', '0857853216', '13.723668421635486', '100.56000709533691', 'upload-files/files/upload/23EX_news6849.jpg', 0, 'upload-files/files/upload/231379669461.jpg', 0, ''),
(24, 'adminSun', 'Thailand Baby & Kids Best Buy 2018', 'ศูนย์การประชุมแห่งชาติสิริกิติ์', '2018-04-20', '09:00:00', '18:00:00', 1000, 'Family', 'free', 0, 'งานจำหน่ายสินค้าสำหรับแม่และเด็กกว่า 1 ล้านรายการ จากผู้จำหน่ายกว่า 400 รายที่พร้อมใจกันกระหน่ำโปรโมชั่นแบบสุดคุ้ม ภายในงานยังมีกิจกรรมแข่งคลาน แข่งรถขาไถและรถหัดเดิน พร้อมการถ่ายภาพ และCHECK IN เพื่อร่วมลุ้นรับรางวัลมากมาย', 'https://www.youtube.com/watch?v=0t7lb5Qx2-Y', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', '-', '0878402150', '13.723668421635486', '100.56000709533691', 'upload-files/files/upload/2420160308_3_1457421507_361355.jpg', 0, 'upload-files/files/upload/24e8.jpg', 0, ''),
(25, 'adminSun', 'Thailand Mobile Expo 2018', 'ศูนย์การประชุมแห่งชาติสิริกิติ์', '2018-05-24', '09:00:00', '20:00:00', 5000, 'Technology', 'free', 0, 'งานมหกรรมมือถือที่ใหญ่ที่สุดของประเทศ พบแบรนด์มือถือชั้นนำ รวมทั้งผู้ให้บริการเครือข่ายโทรศัพท์มือถือครบทุกค่าย พร้อมอัพเดต Gadget & Wearable Device Zone สุดล้ำจากทั่วทุกมุมโลก ภายในงานมีบริการสินเชื่อเงินสดสำหรับผู้สนใจซื้อสินค้าอีกด้วย  Date : 24 May - 27 May 2018 Time : 10.00-20.00 Location : Plenary Hall 1-3, Zone C1-2, Atrium, Plaza, Ballroom, Hall A', 'https://www.youtube.com/watch?v=-maGaLR3eus', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', 'บริษัท เอ็ม วิชั่น จำกัด', 'ชูศักดิ์  เกียรติเฉลิมคุณ', '-', '0878451250', '13.723668421635486', '100.56000709533691', 'upload-files/files/upload/2521338.jpg', 0, 'upload-files/files/upload/251.jpg', 0, ''),
(26, 'adminSun', 'COMMART WORK 2018 ', 'ศูนย์การประชุมแห่งชาติสิริกิติ์', '2018-11-01', '00:00:10', '00:00:20', 5000, 'Technology', 'free', 0, 'งานใหญ่ปลายปีที่คนรักเทคโนโลยีห้าม พลาด! พบนวัตกรรมสุดล้ำและช้อปสินค้า บริการไอซีทีที่ใช่…ตอบโจทย์ทั้งการทำงานและใช้ ชีวิตในยุคดิจิทัล      Date : 01 November - 04 November 2018 Time : 10.00-20.00 Location : Plenary Hall 1-3, Ballroom, Hall A, Zone C-Grd, C-2, Plaza', 'https://www.youtube.com/watch?v=wn4v_l9IlHE', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', 'ARIP PUBLIC COMPANY LIMITED', '-', '-', '0968744519', '13.723184400910755', '100.55990991051635', 'upload-files/files/upload/2620171106_3_1509934856_272594.jpg', 1, 'upload-files/files/upload/268933_161103174621v2.jpg', 0, ''),
(27, 'adminSun', 'Sustainable Energy Technology Asia 2018', 'ศูนย์นิทรรศการและการประชุมไบเทค (BITEC) บางนา, กรุงเทพฯ ', '2018-03-21', '10:00:00', '20:00:00', 3000, 'Technology', 'free', 0, 'ขอเชิญร่วมงาน seta 2018 มหกรรมเทคโนโลยีพลังงานที่ยั่งยืนแห่งเอเชีย  - งานประชุมระดับผู้นำด้านพลังงานทั้งด้านนโยบายและการถ่ายทอดความรู้ทางเทคโนโลยี \"CEO Energy Forum\" ในหัวข้อ Energy Future Outlook และ Hydrogen Society และพบสัมมนาคู่ขนาน โดยองค์กรชั้นนำมากมาย อาทิ USAID สภาวิศวกร วิศวกรรมสถานฯ สภาสถาปนิกไทย องค์การก๊าซเรือนกระจก กรมโรงงานอุตสาหกรรม ฯลฯ - เทรดโชว์ด้านเทคโนโลยีพลังงาน DIGI-ENERGY EXPO สัมผัส loT ด้านพลังงาน และพร้อมทดลองขับ ยานยนตร์ไฟฟ้า และเรียนรู้จริงกับ \"เมืองอัจฉริยะจำลอง\" (Smart Urbarnization Simulation) ในงานนี้ที่เดียว', 'https://www.youtube.com/watch?v=U1PGoZgeRaU', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', '-', '026598741', '13.669923654905155', '100.61000347137451', 'upload-files/files/upload/274b0fd564af5301139d592e321b1a180e.png', 1, 'upload-files/files/upload/27kee-02.jpg', 0, ''),
(28, 'adminSun', 'Commart Connect 2018 ', 'ศูนย์การประชุมแห่งชาติสิริกิติ์', '2018-03-22', '10:00:00', '20:00:00', 5000, 'Technology', 'free', 0, 'งาน Commart Connect 2018 จัดขึ้นด้วยแนวคิด “Living Smarter ชีวิตคอนเนค ฉลาดล้ำ…ด้วยนวัตกรรม” ก้าวสู่ปีที่ 18 เออาร์ไอพีผนึกพลังกับแบรนด์ไอซีทีชั้นนำของไทย นำทัพสินค้าและนวัตกรรมเพื่อตอบโจทย์ชีวิตยุคดิจิทัลมาให้ได้ชมและช้อปอย่างจัดเต็ม อาทิ โน้ตบุ๊ก สมาร์ทโฟน เกมมิ่งเกียร์ จัดขึ้นระหว่างวันที่ 22-25 มีนาคม 2561 ณ ศูนย์การประชุมแห่งชาติสิริกิต์ ตั้งแต่เวลา 10.00 น. - 20.00 น.  สำหรับงานคอมมาร์ต คอนเนค 2018 ครั้งนี้มีไฮไลท์ที่น่าสนใจ อาทิ  Top Tech 2018 พบสุดยอดนวัตกรรม เทคโนโลยีล่าสุด จาก CES 2018 ที่นำมาให้คนไทยได้สัมผัสและเป็นเจ้าของก่อนใคร อาทิ โน้ตบุ๊กเล็กที่สุดในโลก, VR Camera, อุปกรณ์อัจฉริยะภายในบ้านและโดรนรุ่นใหม่ Gaming Market ตลาดใหญ่สำหรับเกมเมอร์ตัวจริง ทั้งโน้ตบุ๊ก คอมพิวเตอร์และอุปกรณ์ที่เกี่ยวข้องกับเกมครบวงจร ซึ่งแบรนด์ชั้นนำต่างสรรหามาเพื่อเอาใจคอเกมทุกระดับ พร้อมกับเตรียมโปรโมชันมาแข่งขันกันอย่างจุใจ', 'https://www.youtube.com/watch?v=5s20948qywI', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', 'บริษัท เออาร์ไอพี จำกัด (มหาชน', '-', '-', '0865555236', '13.7237101117945', '100.56000709533691', 'upload-files/files/upload/28images.jfif', 1, 'upload-files/files/upload/28event_15042_type50_p2_20180125094759.jpg', 0, ''),
(29, 'adminSun', 'Thailand Autopart & Accessories 2018 (TAPA)', 'ไบเทค บางนา', '2018-04-05', '00:00:10', '00:00:20', 3000, 'Technology', 'free', 0, 'Thailand Autopart & Accessories (TAPA) คือ งานแสดงสินค้าด้านยานยนต์ระดับนานาชาติที่รวบรวมผู้ผลิตชิ้นส่วน, ผู้ส่งออก, ผู้จัดจำหน่าย, ผู้รับจ้างช่วงการผลิต และผู้ผลิตชิ้นส่วน OEM/REM จากประเทศไทย ไต้หวัน อินเดีย จีน สิงคโปร์ เวียดนาม มาเลเซีย และฟิลิปปินส์ ฮ่องกง และเกาหลีใต้ มาพบกับผู้แทนการค้า ซึ่งในการจัดงานครั้งก่อน มีผู้เข้าร่วมงาน 9,419 คน จาก 64 ประเทศทั่วโลก  สำหรับ TAPA 2018 จะจัดขึ้นระหว่างวันที่ 5-8 เมษายนนี้ ที่ไบเทค บางนา โดยมีแนวคิดงานในครั้งนี้ว่า “World Auto Parts Sourcing Hub Innovation Clean For The Future”', 'https://www.youtube.com/watch?v=yxC51DR_Jgs', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', '-', '0855632628', '13.669923654905155', '100.61000347137451', 'upload-files/files/upload/2920171227213158879.png', 1, 'upload-files/files/upload/29TAPA-2018-pic-bf.jpg', 0, ''),
(30, 'adminSun', 'งานท่องไทย ท่องโลกครั้งที่ 19 ', 'อิมแพค เมืองทองธานี', '2018-03-15', '10:00:00', '20:00:00', 5000, 'Travel', 'free', 0, 'งาน “ท่องไทย ท่องโลก” ครั้งที่ 19 จะมีขึ้นระหว่างวันที่ 15-18 มีนาคม 2561 ณ ศูนย์แสดงสินค้าและการประชุมอิมแพค เมืองทองธานี ถือเป็นโอกาสดีสำหรับผู้ประกอบการธุรกิจท่องเที่ยว ธุรกิจสินค้าและบริการที่เกี่ยวเนื่องกับการท่องเที่ยวที่จะมาร่วมงานนี้  งาน “ท่องไทย ท่องโลก” ถือเป็นเวทีสำคัญที่จะช่วยให้ผู้แสดงสามารถขยายฐานลูกค้า เพิ่มยอดขายและรับเงินจองล่วงหน้าตั้งแต่ต้นปีจากนักท่องเที่ยว/ ผู้รักการเดินทาง สำหรับช่วงซัมเมอร์ และเพื่อต้องการสร้างความพอใจให้ผู้แสดง อาทิ โรงแรม, รีสอร์ท, รถเช่า, อุปกรณ์เดินทาง และอื่นๆ โดยเฉพาะอย่างยิ่งในการพบกลุ่มลูกค้าหลักและขยายฐานลูกค้าใหม่ๆ  “จุดเด่นงานท่องไทย ท่องโลก ผู้แสดงสามารถขาย Mice package (ประชุมผู้บริหาร/พาพนักงานเที่ยวประจำปี) ให้ผู้แสดงงานข้างเคียง งานแสดงกาแฟ เบเกอรี่ ไอศกรีม  งานแฟรนไชส์และ SME  คาดว่าจะสามารถดึงกลุ่มเป้าหมายกว่า 200,000 คน” นายกวิน กล่าว  งานท่องไทย ท่องโลก ได้รับการสนับสนุนจากสมาคมส่งเสริมธุรกิจท่องเที่ยวไทย สมาคมธุรกิจท่องเที่ยวภายในประเทศ สมาคมผู้ประกอบการนำเที่ยวไทย เพื่อเป็นการสนับสนุนนโยบายส่งเสริมธุรกิจท่องเที่ยวอีกด้วย', 'https://www.youtube.com/watch?v=5K561gd0Ahw', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', 'บริษัท กวิน อินเตอร์เทรด จำกัด', '-', '-', '0878451205', '13.912906746236015', '100.54644584655762', 'upload-files/files/upload/3024771.jpg', 1, 'upload-files/files/upload/30750x422_35926_1516780766.jpg', 0, ''),
(31, 'adminSun', 'วันธรรมดา น่าเที่ยว 2560 ', 'ศูนย์การประชุมแห่งชาติสิริกิติ์', '2018-05-10', '10:00:00', '20:00:00', 5000, 'Travel', 'free', 0, 'ภายในงานท่านจะได้พบกับผู้ประกอบการท่องเที่ยวเสนอขายสินค้าและบริการรวมกว่า 500 แห่ง พร้อมโปรโมชั่นสุดพิเศษลดราคาวันธรรมดากว่า 50% พร้อมทั้งยังมีแพคเกจท่องเที่ยววันธรรมดา พิเศษสำหรับผู้ที่ซื้อแพคเกจท่องเที่ยวภายในงาน ช้อปครบทุก 2,000 บาท ภายในวันเดียวกันสามารถนำใบเสร็จแลกคูปอง 1 ใบ ลุ้นรับรถยนต์ TOYOTA YARIS มูลค่ากว่า 469,000 บาท และของรางวัลอื่นๆ อีกมากมายกว่า 500 รางวัล มูลค่ารวมกว่า 1 ล้านบาท', 'https://www.youtube.com/watch?v=iEZICkoEVjI', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', 'N.C.C. Exhibition Organizer Co', '-', '-', '0989855874', '13.723668421635486', '100.56000709533691', 'upload-files/files/upload/3121661.jpg', 0, 'upload-files/files/upload/3120170502_3_1493689530_89031.jpg', 0, ''),
(32, 'adminSun', 'งานไทยเที่ยวไทย ครั้งที่ 46', 'ไบเทคบางนา', '2018-03-01', '00:00:10', '20:00:00', 5000, 'Travel', 'free', 0, 'งานมหกรรมส่งเสริมการขายสินค้าและบริการด้านการท่องเที่ยว ที่มีผู้ประกอบการทั้งในและต่างประเทศเข้าร่วมแสดงจำนวนมากที่สุดในประเทศไทย พิเศษกับโปรโมชั่นแพ็คเกจลดราคา จากผู้ประกอบการท่องเที่ยวทุกประเภท เช่น โรงแรม รีสอร์ท สายการบินในประเทศ รถเช่า เรือท่องเที่ยว ทัวร์ สปา อุปกรณ์เดินทางและการท่องเที่ยว ฯลฯ กว่า 700 บูธ พร้อมชมกิจกรรมการแสดงมากมายให้ชมตลอดงาน', 'https://www.youtube.com/watch?v=evGFaS6epT8', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', 'บริษัท พี.เค. เอ็กซิบิชั่น แมน', '-', '-', '0878744751', '13.669923654905155', '100.61000347137451', 'upload-files/files/upload/32title_ttmnews_8597-20180227151839.jpg', 0, 'upload-files/files/upload/32download.jfif', 0, ''),
(33, 'adminSun', 'งานเที่ยวทั่วไทย ไปทั่วโลก (TITF) ครั้งที่ 22', 'ศูนย์การประชุมแห่งชาติสิริกิติ์', '2018-08-09', '10:00:00', '20:00:00', 5000, 'Travel', 'free', 0, 'งานเที่ยวทั่วไทย ไปทั่วโลก ครั้งที่ 22 เพื่อส่งเสริมอุตสาหกรรมท่องเที่ยวไทย และเปิดโอกาสทางการตลาดให้มากยิ่งขึ้น  Date : 09 August -12 August 2018 Time : 10.00-20.00 Location : Plenary Hall 1-3, Plaza, Meeting Room 1-4, Zone C-Grd, C-2, Plaza', 'https://www.youtube.com/watch?v=0G1Q-Kq6cfA', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', 'สมาคมไทยบริการท่องเที่ยว', '-', '-', '0987844871', '13.72317530527784', '100.56000944029017', 'upload-files/files/upload/3320170815_3_1502761741_878015.jpg', 1, 'upload-files/files/upload/33mobile_slide_TITF_cover.jpg', 0, ''),
(34, 'adminSun', 'มหกรรมพาลูกเที่ยวดะ ครั้งที่ 2', 'รอยัลพารากอนฮอลล์', '2018-07-13', '09:00:00', '18:00:00', 5000, 'Travel', 'free', 0, 'กลับมาอีกครั้งกับมหกรรมเดียวที่ครบทุกเรื่องเที่ยว สำหรับครอบครัว กับ “มหกรรมพาลูกเที่ยวดะ ปี 2 (The Family Trip Expo 2018) ตอน โลกนี้คือห้องเรียน”   เพจ พาลูกเที่ยวดะ ชุมชนของครอบครัวที่รักการพาลูกเที่ยวและเรียนรู้ พาเปิดประสบการณ์ใหม่ เพื่อการท่องเที่ยวสไตล์ครอบครัว วันที่ 13-15 กรกฏาคม 2561 ที่ Royal Paragon Hall ชั้น 5 @Siam Paragon   เพราะเราเชื่อว่าการท่องเที่ยว คือการเรียนรู้โดยไม่ต้องเรียน ที่นอกจากจะกระชับความสัมพันธ์ในครอบครัวแล้ว ยังเสริมสร้างพัฒนาการของลูกรัก เพราะการท่องเที่ยวทำให้เด็กได้เห็น สัมผัส และลงมือทำเกิดเป็นการเรียนรู้ประสบการณ์อันมีค่าของครอบครัว   \"เพราะลูกเป็นเด็กได้ครั้งเดียว...และยังมีสิ่งต่างๆ อีกมากมายให้เรียนรู้ ในทุกก้าวของลูก เพราะโลกนี้คือห้องเรียน\"  เราจึงขนขบวนความสนุกมาให้เด็กๆได้ทดลอง เล่น เรียน รู้ กันถึงในงาน“มหกรรมพาลูกเที่ยวดะ ปี 2 (The Family Trip Expo 2018) ตอน โลกนี้คือห้องเรียน” พบกับกิจกรรมสำหรับเด็กๆ และครอบครัวมากมาย ที่หาได้ ที่นี่ที่เดียว   พบกับผู้ประกอบการท่องเที่ยวที่เหมาะสำหรับครอบครัวและเจ้าตัวน้อย ทั้งโรงแรม รีสอร์ต สวนน้ำ สวนสนุก สวนสัตว์ และแหล่งเรียนรู้นอกห้องเรียน ช็อป ชิม เที่ยว เล่นกันให้เพลิดเพลินใจกับสินค้าเด็กและครอบครัวมากมาย ที่ขนมาให้คุณแม่ช็อปกระจายด้วยดีลสุดพิเศษ ', 'https://www.youtube.com/watch?v=dGyJAK9GH_M', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', '-', '0899878451', '13.746815741910215', '100.53506791591644', 'upload-files/files/upload/34icon5.png', 1, 'upload-files/files/upload/34banner_file.jpg', 0, ''),
(35, 'adminSun', 'มหกรรม สวรรค์แห่งการท่องเที่ยว 2561 ครั้งที่ 4 (Travel Paradise Expo 2018) ', 'ไบเทคบางนา', '2018-04-26', '10:00:00', '20:00:00', 5000, 'Travel', 'free', 0, 'งานมหกรรมที่ครอบคลุมทุกมิติของงานแสดงสินค้าและบริการในธุรกิจท่องเที่ยวครั้งยิ่งใหญ่ ที่มีผู้ใช้บริการมากที่สุด เพื่อส่งเสริมอุตสาหกรรมท่องเที่ยวไทย ขยายโอกาสทางธุรกิจ ทำการตลาด ประชาสัมพันธ์องค์กร เสริมสร้างชื่อเสียง ภาพลักษณ์ และกระชับความสัมพันธ์ที่ดีต่อกลุ่มเป้าหมาย ท่านจะมีโอกาสรับรู้ถึงกระแสตอบรับอันมีค่าโดยตรง และนำมาใช้ปรับปรุงเพื่อพัฒนาธุรกิจของท่าน โดยภายในงานจะได้พบกับกิจกรรมและโปรโมชั่นสุดพิเศษจากผู้ประกอบการโรงแรม รีสอร์ท บริษัทนำเที่ยว รถเช่า บริการโทรคมนาคมทั้งในและต่างประเทศ รวมทั้งสินค้าเพื่อ การท่องเที่ยว อาหารหลากหลายประเทศในราคาและโปรโมชั่นสุดคุ้มอีกมากมาย', 'https://www.youtube.com/watch?v=vcTVJxnm3LQ', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', '-', '0989855878', '13.669923654905155', '100.61000347137451', 'upload-files/files/upload/3520171219_3_1513674626_138681.jpg', 1, 'upload-files/files/upload/35M2DCDE73636D232704.jpg', 0, ''),
(36, 'adminSun', 'HONDA GET GLOW RUN #2', 'สะพานพระราม 8 และทางคู่ขนานลอบฟ้าบรมราชชนนี', '2018-10-05', '21:00:00', '01:00:00', 500, 'Sports', 'free', 0, 'HONDA GET GLOW RUN   กลับมาอีกครั้งกับการรวมพลังชาวกรุงเทพฯ กิจกรรมวิ่งการกุศลเพื่อมอบรายได้ส่วนหนึ่งหลังหักค่าใช้จ่ายสมทบทุนให้กับการกุศล  มหกรรมวิ่งเรืองแสง  สนุกไปกับการวิ่งกลางคืน พร้อมกิจกรรมต่าง ๆ ที่ให้นักวิ่งทุกคน ได้ร่วมสนุก เช่น - Boost up ร่างกายไปกับบีทดนตรีก่อนออกวิ่งโดยดีเจชื่อดังจาก Trasher Bangkok - Booth Activity จากผู้สนับสนุนการวิ่งที่นำรางวัลมาแจกในวันงาน - Selfie  Awards กิจกรรมถ่ายภาพสำหรับผู้ซื้อบัตร ลุ้นรางวัลมูลค่ารวมกว่า 1 แสนบาท', 'https://www.youtube.com/watch?v=e9smvFLwLtE', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', 'honda', '-', '-', '0899878487', '13.768918724276425', '100.49720048904419', 'upload-files/files/upload/36download (1).jfif', 1, 'upload-files/files/upload/36Aw_GGR_Event_pop Page__edited-02.jpg', 0, ''),
(37, 'adminSun', 'งานโยคะสากลครั้งที่ 3', 'จุฬาลงกรณ์มหาวิทยาลัย', '2018-06-18', '06:30:00', '08:00:00', 150, 'Sports', 'free', 0, 'วันโยคะสากล ครั้งที่ ๓  วันอาทิตย์ที่ ๑๘ มิถุนายน ๒๕๖๐ เวลา ๖.๓๐ น. ถึง ๘.๐๐ น.  สนามหน้าพระบรมราชานุสาวรีย์สมเด็จพระปิยมหาราชและสมเด็จพระมหาธีรราชเจ้า  จุฬาลงกรณ์มหาวิทยาลัย  ผู้ร่วมงานทุกท่านจะได้รับเสื้อยืด อาหารว่างและน้ำดื่ม  (ทางเราจะจัดเตรียมเสื่อโยคะไว้ให้ท่านที่งาน)  เข้าร่วมงานฟรี', 'https://www.youtube.com/watch?v=SnRvci1vyJI&t=1s', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', '-', '0985488745', '13.741353462353244', '100.53567466297272', 'upload-files/files/upload/39images (1).jfif', 0, 'upload-files/files/upload/39c65bhekaadadfff7di5bk.jpg', 0, ''),
(38, 'adminSun', 'รวมใจรัก ปั่นเพื่อพ่อ Chonburi Cycling ', 'เขาชีจรรย์และโครงการป่าสิริเจริญวรรษ', '2018-09-24', '09:00:00', '12:00:00', 500, 'Sports', 'free', 0, 'เปิดเส้นทางปั่นจักรยานแห่งใหม่ โครงการป่าสิริเจริญวรรษ เป็นโครงการอันเนื่องมาจากพระราชดำริพระบาทสมเด็จพระปรมินทรมหาภูมิพลอดุลยเดช ซึ่งมีเรื่องราวที่ทรงคุณค่ามากมาย นอกจากจะเป็นป่าต้นน้ำให้กับคนในพื้นที่แล้วยังเป็นสถานที่แทนความรักของพระบาทสมเด็จพระปรมินทรมหาภูมิพลอดุลยเดช ที่ทรงมอบเป็นของขวัญให้กับพระบรมราชินีนาถในรัชกาลที่ 9 จึงทำให้โครงการป่าแห่งนี้มีอีกชื่อหนึ่งว่า “ป่าแห่งความรัก”', 'https://www.youtube.com/watch?v=0_uxmwjFvaY', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', '-', '0878784512', '12.73086639382091', '100.95648415257972', 'upload-files/files/upload/38IMG_7956.jpg', 1, 'upload-files/files/upload/3820663639_257122118134276_9164086977380892083_n.jpg', 0, ''),
(39, 'adminSun', 'กิจกรรมปั่นจักรยาน NAKHON BIKE NIGHT', 'สวนศรีธรรมโศก ถ.ราชดำเนิน ตำบลในเมือง จังหวัดนครศรีธรรมราช', '2018-06-25', '09:00:00', '15:00:00', 500, 'Sports', 'free', 0, 'กิจกรรมปั่นจักรยาน NAKHON BIKE NIGHT  1.หลักการและเหตุผล    การปั่นจักรยานเป็นกิจกรรมที่ได้รับความนิยมมากขึ้นในปัจจุบัน และเป็นกิจกรรมที่เหมาะสมกับการท่องเที่ยวในยามเย็น ซึ่งกิจกรรมนี้นอกจากเป็นการท่องเที่ยวและส่งเสริมสุขภาพแล้วยังมีส่วนในการสร้างความรัก ความสามัคคีในกลุ่มประชาชนคนไทย และนักท่องเที่ยวในภูมิภาคต่างๆ รวมถึงชาวต่างชาติด้วย     2.วัตถุประสงค์  ส่งเสริมและประชาสัมพันธ์การท่องเที่ยวของจังหวัดนครศรีธรรมราช รณรงค์ให้ประชาชน และนักท่องเที่ยวหันมาปั่นจักรยาเพื่อการท่องเที่ยว เพื่อลดมลภาวะ และรักษาสิ่งแวดล้อม เพื่อเป็นส่งเสริมการออกกาลังกายเพื่อสุขภาพ โดยการปั่นจักรยาน', 'https://www.youtube.com/watch?v=xm9MV9Tq8G0', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', '-', '087878451', '8.395678637820671', '99.91653887108555', 'upload-files/files/upload/391057a2a82373fb3.jpg', 0, 'upload-files/files/upload/39picture-20160516134438.jpg', 0, ''),
(40, 'adminSun', 'RUN FOR LIFE 2', ' สวนลุมพินี เขต ปทุมวัน กรุงเทพมหานคร ประเทศไทย ', '2018-08-30', '07:00:00', '12:00:00', 500, 'Sports', 'free', 0, 'บางคน วิ่งเพื่อ ตัวเอง  บางคน วิ่งเพื่อ สุขภาพ บางคนวิ่งเพื่อ ชัยชนะ แต่งานนี้เราวิ่งเรื่อ หัว ใจ ของใครสักคน วิ่งแทนคนที่อยากวิ่งแต่ไม่มีโอกาศได้วิ่งส่งต่อหัวใจที่แข็งแรงไปสู๋ผูุ้อื่น มาร่วมกันวิ่งกันเถอะ', 'https://www.youtube.com/watch?v=7vLuLWgFURY', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', '-', '0855636985', '13.730276219356352', '100.53910732269287', 'upload-files/files/upload/40images.png', 1, 'upload-files/files/upload/40ca8b2659d6924fd059617510c4c4ebca.jfif', 0, ''),
(41, 'adminSun', 'THAILAND FOODIES FESTIVAL', 'Hard Rock Cafe Bangkok, Rama I Road, Pathum Wan, Bangkok, Thailand ', '2018-03-16', '11:00:00', '21:00:00', 5000, 'Food', 'free', 0, 'อย่าพลาด! งานเดียวที่เหล่า FOODIES จะได้ร่วมกระทบไหล่กับไอดอลสายกิน YANG SOO BIN แขกพิเศษของงาน ผู้มีชื่อเสียงโด่งดังในโลกโซเซียล เธอพร้อมแล้วที่จะบินตรงจากเกาหลีเพื่อมาร่วมชิมเมนูเด็ดๆ ภายในเทศกาล ในฐานะ FOODIE IDOL ประกบไหล่ไปกับ ดีเจเต้ย ธโนทัย และ คุณเชอรีน ณัฐจารี ไอดอลไทยขวัญใจวัยรุ่นชาวสยาม ที่ครั้งนี้จะมาเข้าร่วมเทศกาลในฐานะ FOODIES MC พร้อมกับออกสื่อกันแบบสดๆ ผ่าน WOODY LIVE สื่อที่ทรงอิทธิพลระดับประเทศ และ เพจดังแห่งวงการอาหาร STARVINGTIME และ MUUMMAAM อีกด้วย ', 'https://www.youtube.com/watch?v=BvwGdaoZ9cs', '-', '-', '-', '-', '-', '0985454848', '13.744334145212523', '100.53227009254772', 'upload-files/files/upload/41images (2).jfif', 0, 'upload-files/files/upload/41thfdf2018.jpg', 0, ''),
(42, 'adminSun', 'DND WATER CIRCUS', 'DND คลองตันเหนือ, วัฒนา, Bangkok, Thailand ', '2018-04-14', '17:00:00', '00:00:00', 2000, 'Hobbies', 'free', 0, 'ชวนคุณมาสนุกกับเทศกาลสงกรานต์ที่จะพาคุณหลุดเข้าไปในโลก ของคณะละครสัตว์และสวนสนุกน้ำ “DND WATER CIRCUS” 4 วัน 4 คืน ร่วมกับทีมดีเจ #TEAMDND พร้อมกับเหล่าศิลปินที่จะมาร่วมสร้างความสนุก และสาดน้ำไปด้วยกัน', 'https://www.youtube.com/watch?v=Ok4fY4_dNVw', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', '-', '0946652656', '13.731568574430952', '100.58647513389587', 'upload-files/files/upload/42dnd_poster.jpg', 5, 'upload-files/files/upload/42dnd_cover.jpg', 0, ''),
(43, 'adminSun', 'Retrospect Heart of the Panther หัวใจเสือดำ', 'Live Park (Rama 9), Bang Kapi, Huai Khwang, Bangkok, Thailand ', '2018-04-21', '16:00:00', '23:00:00', 3000, 'Travel', 'free', 0, '“ร็อคไม่มีวันตาย แต่เสือดำตายใครรับผิดชอบ?”  Retrospect Heart of the Panther หัวใจเสือดำ', 'https://www.youtube.com/watch?v=e-X3R-sVXVE', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', ' -', '0878748754', '13.749514897842351', '100.60088396072388', 'upload-files/files/upload/43RTP_EP_POSTER_2048x2048px.jpg', 6, 'upload-files/files/upload/43RTP_EP_COVER_1702x800px.jpg', 0, ''),
(44, 'adminSun', 'Tao Kae Noi Presents BNK48 1st Concert \"STARTO\"', 'BITEC BANGNA Hall 106', '2018-03-31', '18:00:00', '21:00:00', 1000, 'Travel', 'free', 0, 'Tao Kae Noi Presents BNK48 1st Concert \"STARTO\"  พบกับคอนเสิร์ตเต็มรูปแบบครั้งแรกของ BNK48 ในวันเสาร์ที่ 31 มีนาคม พ.ศ. 2561 ณ BITEC BANGNA Hall 106 คอนเสิร์ตเริ่มเวลา 18:00น. (ประตูเปิด 16:00น.)', 'https://www.youtube.com/watch?v=mfqJyKm20Z4', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', '-', '024587849', '13.669923654905155', '100.61002492904663', 'upload-files/files/upload/44Starto!-Poster-SQ01.jpg', 8, 'upload-files/files/upload/44bnk48-2-cover-6d02e52d.jpg', 0, ''),
(45, 'adminSun', 'WisePass Bangkok Official Launch', 'Le Fenix Sukhumvit, Soi Sukhumvit 11, Khlong Toei Nuea, Watthana, Bangkok, Thailand ', '2018-03-15', '19:00:00', '23:00:00', 500, 'Travel', 'free', 0, 'What is WisePass? WisePass is a lifestyle app which allows members to redeem one complimentary option everyday (a meal/ a bottle of liquor/ VIP access to special events) at 100+ selected venues in Bangkok, Ho Chi Minh City, Hanoi and soon in Manila.  Why choose us? Save money: WisePass is less expensive Easy to use: Cashless/ Convenient Best venues: Bars/ Clubs/ Restaurants Best events: Networking/ Concerts/ Etc.  One year after first launching in Vietnam, we set our eyes on a second location. We chose Bangkok to be our second home, and it has been amazing. We are hosting this launch event to commemorate the milestone we achieved, when we made the venture into this wonderful city. ', 'https://www.youtube.com/watch?v=iRrL2G64Fzw', 'ไม่มีเงือนไข', 'ไม่มีเงือนไข', '-', '-', 'operations@wisepass.co', '0878451549', '13.744981548698606', '100.55624127388', 'upload-files/files/upload/45Event_Poster.jpg', 8, 'upload-files/files/upload/45Event_Cover_EventPop.png', 0, ''),
(46, 'adminSun', 'WisePass Bangkok Official Launch', '  Le Fenix Sukhumvit, Soi Sukhumvit 11, Khlong Toei Nuea, Watthana, Bangkok, Thailand ', '2561-03-15', '19:00:00', '22:00:00', 50, 'Food', 'free', 0, 'WisePass คืออะไร? WisePassเป็นแอพพลิเคชั่นบนมือถือ เพื่อไลฟ์สไตล์ คุณสามารถใช้แอพเลือกรับสิทธิ์ได้ในทุกๆวัน ไม่ว่าจะเป็นมื้ออาหาร, แอลกอฮอล์, สิทธิ์ในการเข้างานอีเว้นท์แบบVIP ตามร้านที่เราได้เลือกสรรไว้ให้มากกว่า 100 ร้าน ทั้งในกรุงเทพ โฮจิมินท์ ฮานอย และที่มะนิลาเร็วๆนี้ WisePass Bangkok กำลังจะจัดอีเว้นท์เปิดตัวขึ้นที่กรุงเทพเพื่อเป็นการวางเป้าหมาย และยืนยันความสำเร็จที่ผ่านมาของเรา ขอเชิญทุกท่านมาร่วมเฉลิมฉลองและเป็นส่วนหนึ่งของการเปิดตัวในกรุงเทพอย่างเป็นทางการของ WisePass รับรองคุณจะไม่ผิดหวัง เราจะมีทั้งเกมส์ เครื่องดื่ม และของรางวัลพิเศษสำหรับแขกในงานทุกท่าน สถานที่จัดงานครั้งนี้คือ Nest Rooftop Lounge - Le Fenix Hotel เพียงแค่แจ้งสต๊าฟว่ามาร่วมงานของ WisePass ', 'https://www.youtube.com/watch?v=krmILNiJ-wA', 'ไม่มีค่าเข้างาน สามารถดื่มได้จนถึงเวลา 20:00 น.', '-', 'WisePass', 'WisePass', 'operations@wisepass.com', '027461635', '13.744978943300294', '100.55624932050705', 'upload-files/files/upload/WisePass Bangkok Official LaunchEvent_Cover_EventPop.png', 6, 'upload-files/files/upload/WisePass Bangkok Official LaunchEvent_Poster.jpg', 0, '');
INSERT INTO `event` (`idEvent`, `username`, `eventName`, `location`, `date`, `startTime`, `endTime`, `size`, `category`, `type`, `price`, `details`, `teaserVDO`, `precondition`, `postcondition`, `organizerName`, `contactName`, `email`, `phone`, `latitude`, `longitude`, `imageCover`, `attendView`, `imageSlide`, `limitSeat`, `googleForm`) VALUES
(47, 'adminSun', 'Workshop การออกแบบและการปรับแก้ไขพื้นที่เพื่อการขออนุญาตสร้างโรงงานขนาดเล็ก เพื่อการขอมาตรฐานกระบวนการผลิต Primary GMP', '  Pattaya Exhibition And Convention Hall (PEACH) Pattaya City, Bang Lamung District, Chon Buri, Thailand ', '2561-03-29', '09:00:00', '16:00:00', 50, 'Food', 'paid', 4600, 'Primary GMP คือมาตรฐานการผลิตขั้นต้นในการผลิตอาหารแปรรูปที่บรรจุในภาชนะพร้อมจำหน่าย เพื่อลดและขจัดความเสี่ยงจากอันตรายที่อาจเกิดจากกระบวนการผลิต 3 ประการได้แก่                         1. ป้องกันการปนเปื้อนเบื้องต้น                             2. ลดยับยั้งทำลายจุลินทรีย์ก่อโรค             3. ป้องกันการปนเปื้อนซ้ำหลังการแปรรูป             Primary GMP ครอบคลุมตั้งแต่สถานที่ผลิต อุปกรณ์ เครื่องมือเครื่องใช้ การคัดวัตถุดิบ กระบวนการผลิต บุคลากร การจัดเก็บ จนกระทั่งการขนส่งผลิตภัณฑ์จนถึงมือผู้บริโภค                 SMEs มากมายที่ตกม้าตายเพราะไม่เตรียมการเรื่องมาตรฐานตั้งแต่เนิ่น ๆ แต่ก็มี SMEs อีกจำนวนไม่น้อยที่สามารถขยายตลาดหลายร้อยเท่าผ่านช่องทาง Modern Trade และการส่งออก ด้วยอาศัยมาตรฐาน GMP WORKSHOP การออกแบบและการปรับแก้ไขพื้นที่เพื่อการขออนุญาตสร้างโรงงานขนาดเล็ก ตลอดจนเตรียมความพร้อมเพื่อการขอมาตรฐานกระบวนการผลิต Primary GMP  เพื่อนำมาสู่มาตรฐานกระบวนการผลิตอาหารที่มีคุณภาพ  วันที่อบรม พฤหัสบดี ที่ 29 มีนาคม 2561  เวลา 9:00 – 16:00 น. ณ ศูนย์ประชุม PEACH เมืองพัทยา (รอยัล คลิฟ โฮเต็ล กรุ๊ป)  สอบถามข้อมูลเพิ่มเติมด้านข้อมูลทางวิชาการติดต่อ ฝ่ายจัดอบรม โทร 02 731 1191 ต่อ 301 มือถือ 084-7000-164 อีเมล :  info@greenworldmedia.co.th ค่าใช้จ่ายตลอดหลักสูตร 4,900 บาท/ท่าน รีบจองที่นั่งด่วน รับจำนวนจำกัด  หลักสูตรนี้เหมาะสำหรับ 1. ผู้ประกอบการธุรกิจ SME ทั้งที่มีโรงงานแล้วและยังไม่มีโรงงาน 2. อาจารย์ นักวิชาการ นักศึกษา 3. ผู้ที่มีหน้าที่ให้คำปรึกษาผู้ประกอบการขนาดย่อย เพื่อพัฒนามาตรฐานการผลิต  4. ฝ่ายผลิต ฝ่ายควบคุมคุณภาพ   ประโยชน์ที่คาดวาจะได้รับ ผู้เรียนมาสามารถออกแบบพื้นที่โรงงานผลิตอาหารได้ตามมารตฐานที่สำนักงานคณะกรรมการอาหารและยากำหนดไว้ได้อย่างถูกต้อง เพื่อนำมาสู่มาตรฐานกระบวนการผลิตอาหารที่มีคุณภาพ เพื่อการขยายตลาดสู่ Modern Trade และส่งออก', 'https://www.youtube.com/watch?v=EBl4GP_YLsc', '-', '-', 'InnoFusion Academy', 'InnoFusion Academy', 'info@greenworldmedia.co.th', '0847000164', '12.925090296777848', '100.86211421871417', 'upload-files/files/upload/2IF_PriGMP2_300x300_px.jpg', 2, 'upload-files/files/upload/2Cover2.jpg', 0, ''),
(48, 'adminSun', 'THAILAND FOODIES FESTIVAL', '  Hard Rock Cafe Bangkok, Rama I Road, Pathum Wan, Bangkok, Thailand ', '2561-03-16', '11:00:00', '21:00:00', 100, 'Food', 'free', 0, 'อย่าพลาด! งานเดียวที่เหล่า FOODIES จะได้ร่วมกระทบไหล่กับไอดอลสายกิน YANG SOO BIN แขกพิเศษของงาน ผู้มีชื่อเสียงโด่งดังในโลกโซเซียล เธอพร้อมแล้วที่จะบินตรงจากเกาหลีเพื่อมาร่วมชิมเมนูเด็ดๆ ภายในเทศกาล ในฐานะ FOODIE IDOL ประกบไหล่ไปกับ ดีเจเต้ย ธโนทัย และ คุณเชอรีน ณัฐจารี ไอดอลไทยขวัญใจวัยรุ่นชาวสยาม ที่ครั้งนี้จะมาเข้าร่วมเทศกาลในฐานะ FOODIES MC พร้อมกับออกสื่อกันแบบสดๆ ผ่าน WOODY LIVE สื่อที่ทรงอิทธิพลระดับประเทศ และ เพจดังแห่งวงการอาหาร STARVINGTIME และ MUUMMAAM อีกด้วย                THAILAND FOODIES FESTIVAL ยังได้รับเกียรติจากแขกกิตติมศักดิ์ที่พร้อมเข้าร่วมงานเพื่อชิมเมนูเด็ดต่างๆ อีกหลายท่าน เช่น ม.ล. อิ๊งค์ ภาสันต์ สวัสดิวัตน์ ในฐานะ FOODIE GURU แห่งประเทศไทย ที่จะลงพื้นที่ชิมอาหารของร้านค้าต่างๆ ภายในเทศกาล พร้อมกับคุณส้ม ณัฐวรา ในฐานะ FOODIE MC อีกทั้งยังมี คุณโบว์ลิ่ง ชลทิพย์ ระยามาศ จากเพจดัง EAT AND SHOUT ผู้คว้ารางวัลบนเวทีระดับเอเชียในฐานะ FOODIE INFLUENCER               นอกจากนั้น ยังได้รับเกียรติจาก เชฟแมน สราวุธ เนียรวิทูรย์ เชฟชื่อดังจากรายการ เชฟกระทะเหล็ก ในฐานะ CHEF GURU และ เชฟเต็งหนึ่ง คณ', '', '-', '-', 'บริษัท วรรณมินทร์ เซอร์วิสเซส ', '-', 'thailandfoodiesfestival@gmail.', '0971233286', '13.744423992801856', '100.53189218044281', 'upload-files/files/upload/3TFF2018-FB-SQ-3-Stroke-Final-No-Frame-Edit7-1.jpg', 1, 'upload-files/files/upload/3thfdf2018.jpg', 0, ''),
(49, 'adminSun', 'The Bangkok International Taste Experience (BITE)', '  Mandarin Oriental, Bangkok, Thailand ', '2561-03-13', '14:00:00', '22:00:00', 50, 'Food', 'paid', 11, 'BITE:  เปิดประสบการณ์ใหม่กับงาน Bangkok International Taste Experience (BITE) งานอาหารที่ยิ่งใหญ่ที่สุดแห่งปี งานที่รวบรวมเชฟระดับโลกและผู้ที่ชื่นชอบอาหารจากทั่วทุกมุมโลกมาร่วมกันสร้างสรรค์เมนูอาหารสุดพิเศษในงานนี้     งาน Bangkok International Taste Experience (BITE) งานอาหารที่ยิ่งใหญ่ที่สุดแห่งปี งานที่รวบรวมเชฟระดับโลกและผู้ที่ชื่นชอบอาหารจากทั่วทุกมุมโลกมาร่วมกันสร้างสรรค์เมนูอาหารสุดพิเศษในงานนี้ ซึ่งในช่วงบ่ายเราจะมีการเสวนาของพ่อครัวระดับโลก มุมมอง อนาคต ของการทำอาหารทั่วโลก เราเปิดให้ทุกท่านที่สนใจเข้าร่วมฟังฟรี!! และห้ามพลาดกับโอกาสสุดพิเศษนี้ที่ท่านจะได้มีโอกาสลิ้มลองอาหารค่ำสุดหรูจากฝีมือเชฟระดับโลกถึง 15 จาน พร้อมทั้งเครื่องดื่มและไวน์ชั้นดี และพิเศษสุดในช่วงอาหารค่ำ เชฟชื่อดังระดับโลกจะขึ้นโชว์บนเวทีพร้อมทั้งนำเสนอผลงานอาหารและแรงบันดาลใจในการปรุงอาหารจานนั้นๆ ให้ทุกท่านทราบอีกด้วย', 'https://www.youtube.com/watch?v=SAt-y-9txZY', '-', '-', 'Talisman Media Group', 'Talisman Media Group', 'info@gastronauts.asia', '022867821', '13.724001942700102', '100.51421642303467', 'upload-files/files/upload/4BITE_Logo_1.jpg', 0, 'upload-files/files/upload/4BITE_EP_cover.jpg', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `imageevent`
--

CREATE TABLE `imageevent` (
  `idEvent` int(30) NOT NULL,
  `imagePath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`username`, `idEvent`, `date`, `time`) VALUES
('adminSun', 1, '2018-03-08', '03:09:01');

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
  ADD KEY `imageevent_ibfk_1` (`idEvent`);

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
  ADD KEY `webboard_ibfk_1` (`idEvent`),
  ADD KEY `webboard_ibfk_2` (`username`);

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
  ADD CONSTRAINT `attendents_ibfk_3` FOREIGN KEY (`idEvent`) REFERENCES `event` (`idEvent`);

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
  ADD CONSTRAINT `webboard_ibfk_1` FOREIGN KEY (`idEvent`) REFERENCES `event` (`idEvent`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `webboard_ibfk_2` FOREIGN KEY (`username`) REFERENCES `account` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
