-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2018 at 08:35 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

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
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(20) NOT NULL,
  `ID_card` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `type_Account` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `firstname`, `surname`, `birthday`, `gender`, `email`, `phone`, `ID_card`, `address`, `type_Account`, `status`) VALUES
('sun_vsp', '1234', 'Vasupol', 'Chongsathidkiet', '1997-08-30', 'male', 'vasupol.ch@ku.th', 852224434, '1234567891111', 'bangkok', 'user', 'activate'),
('toon', '1234', 'kanokpon', 'tonabut', '1997-04-21', 'male', 'kanokpon.th@ku.th', 878102159, '1145211789654', 'bangkok', 'user', 'activate');

-- --------------------------------------------------------

--
-- Table structure for table `attendents`
--

CREATE TABLE `attendents` (
  `ID_Event` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `amount` int(5) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `ID_Event` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `nameEvent` varchar(30) NOT NULL,
  `detail` text NOT NULL,
  `image` text NOT NULL,
  `teaserVDO` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` text NOT NULL,
  `capacity` int(5) NOT NULL,
  `precondition` varchar(50) DEFAULT NULL,
  `postcondition` varchar(50) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `type` varchar(15) NOT NULL,
  `categories` varchar(30) NOT NULL,
  `company` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ID_Event`, `username`, `nameEvent`, `detail`, `image`, `teaserVDO`, `date`, `time`, `location`, `capacity`, `precondition`, `postcondition`, `price`, `type`, `categories`, `company`) VALUES
(11548, 'toon', 'Tao Kae Noi Presents BNK48', 'Tao Kae Noi Presents BNK48 1st Concert “STARTO”\r\n\r\nพบกับคอนเสิร์ตเต็มรูปแบบครั้งแรกของ BNK48 ในวันเสาร์ที่ 31 มีนาคม พ.ศ. 2561 \r\nณ BITEC BANGNA Hall 106\r\nคอนเสิร์ตเริ่มเวลา 18:00น. (ประตูเปิด 16:00น.)\r\n\r\nบัตรยืน ราคา 2000 บาท (มีการแบ่งพื้นที่ Lady Zone ทั้งสองฝั่ง)\r\nและบัตรนั่ง ราคา 1500/1000/800 บาท\r\n\r\nเริ่มจำหน่ายบัตร วันพฤหัสบดีที่ 1 มีนาคม พ.ศ. 2561 เวลา 13:48น. \r\nทาง www.eventpop.me\r\n\r\nเงื่อนไขการซื้อบัตร และ การเข้าชมในวันงาน\r\n- การซื้อบัตร สามารถซื้อได้ไม่เกิน 4 ที่นั่ง\r\n- ทุกที่นั่ง ต้องลงทะเบียนชื่อและนามสกุลของผู้ที่จะเข้าชมบนในระบบขณะสั่งซื้อ และชื่อของท่านจะถูกพิมพ์ลงบนบัตรทุกใบ ไม่สามารถมอบสิทธิ์ให้ผู้อื่นเข้าชมแทนได้ รวมถึงในกรณีที่ท่านไม่สามารถมารับชมได้ จะไม่สามารถคืนบัตร หรือแลกเปลี่ยนใด ๆ ได้ทั้งสิ้น\r\n- ในกรณีที่พิมพ์ชื่อ หรือนามสกุลผิดพลาดขณะสั่งซื้อ ท่านสามารถแก้ไขชื่อ หรือนามสกุลของท่านได้ไม่เกิน 3 ตัวอักษรเท่านั้น เพื่อป้องกันการมอบสิทธิ์ให้ผู้อื่น โดยสามารถแจ้งความจำนงขอแก้ไขได้ที่ Call Center ของ eventpop ภายใน 24 ชั่วโมงหลังการสั่งซื้อ\r\n- ในวันงาน กรุณานำบัตรประชาชนตัวจริง หรือเอกสารที่ออกโดยราชการ ที่มีรูปของท่านอยู่ เพื่อยืนยันตัวตนกับทางเจ้าหน้าที่บริเวณทางเข้าสู่คอนเสิร์ต\r\n- บัตร Lady Zone จะมีการขายแยกประเภทจากบัตรยืนปกติ และในวันงาน จะอนุญาตให้เฉพาะสุภาพสตรีเท่านั้น ที่สามารถเข้าชมในพื้นที่นี้ได้ (ในกรณีที่ผู้ซื้อเป็นสุภาพสตรี แต่ผู้ติดตามที่ซื้อบัตรด้วยกันเป็นสุภาพบุรุษ ก็จะอนุญาตให้เฉพาะสุภาพสตรีเข้าชมเท่านั้น บัตรของท่านสุภาพบุรุษ จะถือว่าเป็นโมฆะทันที)\r\n- บัตรยืน จะมีหมายเลขลำดับการเข้าชม ตามลำดับการซื้อ เมื่อถึงวันงาน จะมีการเรียกให้เข้าแถวในช่วงเวลา 13:00-15:30น. ตามหมายเลขลำดับการเข้าชม หากท่านไม่มาเข้าแถวในช่วงเวลาดังกล่าว จะต้องรอเข้าสู่ภายในคอนเสิร์ตหลังจากผู้ที่มาเข้าแถวตามเวลา เข้าสู่ภายในเป็นที่เรียบร้อย\r\n- ไม่อนุญาตให้นำกล้องถ่ายภาพ กล้องถ่ายวีดีโอ และเครื่องบันทึกเสียงเข้าสู่ภายในคอนเสิร์ต และภายใน ไม่อนุญาตให้บันทึกภาพ วีดีโอ หรือเสียงตลอดการแสดง\r\n- ขนาดของสัมภาระที่จะนำเข้าสู่ภายใน ต้องมีขนาด กว้าง+ยาว+สูง ไม่เกิน 90 เซนติเมตร \r\n- ไม่อนุญาตให้นำอาหาร เข้าสู่ภายในฮอลล์คอนเสิร์ต สำหรับเครื่องดื่มที่นำเข้าได้ จะต้องเป็นเครื่องดื่มที่มีฝาปิดได้เท่านั้น\r\n- ในวันงาน ไม่มีจุดรับฝากจดหมาย หรือของขวัญให้แก่สมาชิก BNK48\r\n- สินค้า จำหน่ายที่หน้างาน ไม่จำเป็นต้องมีบัตรคอนเสิร์ตในการซื้อ\r\n- มีความเป็นไปได้ ที่จะมีผู้ซื้อสินค้าเป็นจำนวนมาก กรุณาบริการเวลาระหว่างการต่อแถว และเวลาในการเข้าชมคอนเสิร์ตด้วยตัวท่านเอง ทางเราจะไม่รับผิดชอบในกรณีที่ท่านไม่สามารถเข้าชมคอนเสิร์ตได้ทันเวลา (เวลาเริ่มจำหน่ายสินค้า จะทำการประกาศในภายหลัง)', 'https://p-u.popcdn.net/events/covers/000/003/049/cover/B5579D8E-1FBA-43DC-B682-39991AE2080E.png?1519835103', '', '2018-03-15', '11:00:00', 'Bangna Trad Road Bang Na, Bangna BANGKOK Thailand ', 500, NULL, NULL, NULL, 'free', 'music', 'bnk'),
(12378, 'toon', 'Trick to Translate ', 'Artery workshop ร่วมกับ คุณปุ๋ย มณฑารัตน์ ทรงเผ่า ผู้คร่ำหวอดในวงการงานแปล ออกผลงานคุณภาพมากกว่า 100 เล่ม\r\n\r\nมีผลงานแปลสร้างชื่ออย่าง ชุด ‘The Princess Diaries Series’  ที่ต้นฉบับติดชาร์ต New York Time Bestseller หรือในชื่อภาษาไทยว่า ‘บันทึกของเจ้าหญิง’\r\n\r\nและ ชุดผลงานของ ‘ฮาร์เลน โคเบน’ กว่าหลาย 10 เรื่อง ที่ติดอันดับขายดี ทั้งใน The New York Time และในประเทศไทย!  \r\n\r\n\r\n\r\nนักแปลมืออาชีพ… ใครว่ายาก! คุณเองก็เป็นได้\r\n\r\n\r\nหลากเคล็ดลับที่คุณอาจไม่เคยรู้ ผสมผสานทั้งเนื้อหาที่เข้มข้น และ สอดแทรกเทคนิคการแปลอย่างไรให้ตัวละครมีชีวิต รับรองว่ากลมกล่อม เก็บทุกเม็ด ทุกรายละเอียด ไม่มีหลุดแน่นอนตลอด 2 วันนี้!\r\n\r\n\r\n\r\nใน ‘Trick to Translate เคล็ด (ไม่) ลับ ฉบับนักแปล โดย ปุ๋ย มณฑารัตน์ ทรงเผ่า’ คุณจะได้พบกับ..\r\n\r\n- เทคนิดการแปลแบบเข้าใจง่าย ฉบับนักแปลมืออาชีพ\r\n\r\n- เคล็ดลับการเลือกใช้คำให้ออกมาเป็นธรรมชาติ อ่านแล้วอินเหมือนคำในภาษาไทย\r\n\r\n- ทริคการแปลให้สามารถเก็บอารมณ์และความรู้สึกของต้นฉบับไว้ทุกเม็ด เพื่อให้งานแปลของเราออกมาเหมือนต้นฉบับมากที่สุด\r\n\r\n\r\n- อาหารกลางวัน และของว่างตลอดการ  Workshop ทั้ง 2 วัน\r\n\r\n\r\n\r\nกำหนดการภายในงาน\r\n\r\nวันแรก (10 มีนาคม 2561)\r\n\r\n9:00 – 10.00 น.            ทำความรู้จักเกี่ยวกับภาพรวมของงานแปลกันก่อน (Overview)\r\n\r\n                                    o ต้นฉบับ จริงๆแล้วมีกี่ประเภทกันแน่\r\n\r\n                                    o จะแปลอย่างไรให้เหมาะสมกับต้นฉบับแต่ละประเภทดี\r\n\r\n\r\n10:00 – 11.00 น.          เครื่องมือทางภาษาที่สำคัญที่จำเป็นต้องรู้ หากจะก้าวเข้าสู่วงการนักแปล\r\n\r\n11:00 – 12.00 น.          เริ่มลงมือปฏิบัติเพื่อทดสอบความรู้เกี่ยวกับการแปลเบื้องต้นกันเลย\r\n\r\n                                    พักกลางวัน\r\n\r\n13:00 – 14.00 น.          เจาะลึกเนื้อหากันแบบเน้นๆ เกี่ยวกับการแปลวรรณกรรม\r\n\r\n                                    o ก่อนลงมือแปล มีองค์ประกอบอะไรบ้างที่ต้องคำนึงถึง\r\n\r\n\r\n14:00 – 15.00 น.          ทำความรู้จักต้นฉบับก่อนเริ่มแปล ตามหลักทฤษฎีของ Peter Newmark\r\n\r\n15.00 – 15.15 น.          พักเบรค\r\n\r\n15:15 – 16.00 น.          Workshop แปลตัวบทวรรณกรรมหลากหลายรูปแบบ\r\n\r\n                                    o ให้การบ้าน ลองเอาต้นฉบับวรรณกรรมกลับไปแปล ก่อนช่วยกันตรวจวันรุ่งขึ้น\r\n\r\n\r\n \r\n\r\nวันที่สอง (11 มีนาคม 2561)\r\n\r\n9:00 – 10.30 น.            เคล็คลับฉบับเต็มกับการตรวจแก้งานแปลเพื่อให้สมบูรณ์มากที่สุด\r\n\r\n10:30 – 12.00 น.          Workshop: ตรวจแบบฝึกหัดงานแปลต้นฉบับวรรณกรรม\r\n\r\n12.00 – 13.00 น.          พักกลางวัน\r\n\r\n13:00 – 15.00 น.          อภิปรายการตรวจต้นฉบับแปลร่วมกันในชั้น\r\n\r\n15.00 – 15.15 น.          พักเบรค\r\n\r\n15:15 – 16.15 น.          อยากเสนองานแปลให้กับสำนักพิมพ์ มีขั้นตอนอะไรบ้าง ยุ่งยากขนาดไหนนะ\r\n\r\n                                    o ทริคไม่ลับที่จะทำให้ทำงานร่วมกับกองบรรณาธิการและสำนักพิมพ์ได้ราบรื่น\r\n\r\n\r\n                                    o ค่าตอบแทนที่นักแปลจะได้รับ\r\n\r\n16:15 – 17.00 น.          ถาม-ตอบกันแบบไม่มีกั๊ก พร้อมไขข้อข้องใจทุกปัญหาเกี่ยวกับงานแปลและอื่นๆ\r\n\r\n\r\n \r\n\r\nสอบถามเพิ่มเติมโทร 02-258-0486-87 ต่อ 114\r\n\r\nรับจำนวนจำกัด 25 ที่เท่านั้น!!\r\n\r\nซื้อบัตรได้เเล้ววันนี้ พิเศษ! บัตร Early Bird 4,900 บาท (วันนี้ – 2 มีนาคม 2561) และราคาปกติ 5,500 บาท (วันที่ 3 มีนาคม - 9 มีนาคม 2561)\r\n\r\nโอกาสดีๆ แบบนี้ห้ามพลาดเด็ดขาดเลยนะคะ!!', 'https://p-u.popcdn.net/events/covers/000/002/930/cover/TRICK-TO-TRANSLATE--EDIT-EVENT-POP.png?1517223482', '', '2018-03-24', '09:00:00', ' The Rabbit Hub', 100, NULL, NULL, NULL, 'free', 'Education', NULL),
(14537, 'sun_vsp', 'AUTOMACH 2018', '\'AUTOMACH 2018\'\r\nงานสัมมนาและจัดแสดงเทคโนโลยีระบบอัตโนมัติ\r\nพุธที่ 28 – ศุกร์ที่ 30 มี.ค.’61 เวลา 10:00 – 18:00 น. \r\nณ Hall C ศูนย์ประชุม PEACH เมืองพัทยา\r\n(รอยัล คลิฟ โฮเต็ล กรุ๊ป)\r\n\r\nพบกับซัพพลายด้านระบบอัตโนมัติสำหรับ Smart Factory ทั้งโรบอต แขนกล\r\nระบบลำเลียงอัจฉริยะ เซ็นเซอร์ โลจิสติกส์ IT for manufacturing ฯลฯ\r\nรวมถึงโซน Smart Supplies ที่จัดเตรียมโปรโมชั่นสำหรับผู้บริหารและฝ่ายจัดซื้อโรงงานอุตสาหกรรม\r\n\r\n\r\nสัมมนาความรู้กว่า 30 หัวข้อ ทั้งด้านระบบอัตโนมัติ, การเพิ่มผลผลิต, Preventive Maintenance,\r\nมาตรการสนับสนุนการลงทุนใน EEC และระบบอัตโนมัติ, ความก้าวหน้าเทคโนโลยีหุ่นยนต์ ฯลฯ\r\nดูรายละเอียดเพิ่มเติมได้ที่ Conference Program\r\n\r\n\r\nงานนี้เหมาะสำหรับ: นักลงทุน, เจ้าของกิจการ, ผู้บริหาร, ผู้จัดการโรงงาน, วิศวกร ซ่อมบำรุง ฝ่ายผลิต และฝ่ายจัดซื้อโรงงาน\r\n\r\n# ไม่มีค่าใช้จ่ายในการสัมมนา\r\n# ที่นั่งมีจำนวนจำกัด\r\n# สำรองที่นั่ง ด่วน!!! \r\nหรือติดต่อฝ่ายบริการลูกค้า seminar@thaiautomach.com\r\nTel. 0-2731-1191-4 ต่อ 309\r\nMobile 083-584-6677\r\n', 'https://p-u.popcdn.net/events/covers/000/002/971/cover/1517927587235.png?1517933570', '', '2018-03-15', '10:00:00', 'Pattaya Exhibition And Convention Hall (PEACH) Pattaya City, Bang Lamung District, Chon Buri, Thailand ', 500, NULL, NULL, NULL, 'free', 'Technology', NULL),
(14796, 'sun_vsp', 'Thailand Coffee Fest 2018', 'เตรียมพบกับมหกรรมของคนรักกาแฟที่ยิ่งใหญ่ที่สุดใน Southeast Asia\r\n\r\nเทศกาลที่รวบรวมคนกาแฟ ทั้งกระบวนการตั้งแต่เกษตรกร โรงคั่วกาแฟ วัตถุดิบ ผู้ส่งออก บาริสต้า\r\n\r\nร้านกาแฟ อุปกรณ์เครื่องมือ องค์ความรู้จากทุกภาคส่วนไว้มากที่สุด\r\n\r\n\r\n\r\nตลอดการเดินทางของกาแฟ A JOURNEY OF COFFEE “จากต้นจนจิบ”\r\n\r\nจะพาทุกท่านไปพบกับแนวคิด “Make it Sustainable” ที่แฝงอยู่ วันนี้เราพร้อมแล้วที่จะผลักดันวงการกาแฟไทย\r\n\r\nให้ขับเคลื่อนไปข้างหน้าอย่างยั่งยืนและก้าวสู่ตลาดสากล', 'https://p-u.popcdn.net/events/covers/000/002/850/cover/Banner-Poster-TCF.jpg?1515477332', '', '2018-03-10', '12:00:00', 'Queen Sirikit National Convention Center Ratchadaphisek Road Bangkok ', 200, NULL, NULL, NULL, 'free', 'Food', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image_event`
--

CREATE TABLE `image_event` (
  `ID_Event` int(15) NOT NULL,
  `Image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `username` varchar(15) NOT NULL,
  `ID_Event` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
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
-- Indexes for table `attendents`
--
ALTER TABLE `attendents`
  ADD PRIMARY KEY (`username`),
  ADD KEY `ID_Event` (`ID_Event`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`ID_Event`),
  ADD UNIQUE KEY `ID_Event` (`ID_Event`);

--
-- Indexes for table `image_event`
--
ALTER TABLE `image_event`
  ADD PRIMARY KEY (`ID_Event`,`Image`),
  ADD UNIQUE KEY `Image` (`Image`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`username`,`date`,`time`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendents`
--
ALTER TABLE `attendents`
  ADD CONSTRAINT `attendents_ibfk_1` FOREIGN KEY (`username`) REFERENCES `account` (`username`),
  ADD CONSTRAINT `attendents_ibfk_2` FOREIGN KEY (`ID_Event`) REFERENCES `event` (`ID_Event`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
