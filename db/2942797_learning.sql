-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2019 at 05:26 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning02`
--

-- --------------------------------------------------------

--
-- Table structure for table `choice`
--

CREATE TABLE `choice` (
  `choice_id` int(11) NOT NULL,
  `choice_name` varchar(100) NOT NULL,
  `video` varchar(300) NOT NULL,
  `choice_detail` varchar(100) NOT NULL,
  `choice_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `choice`
--

INSERT INTO `choice` (`choice_id`, `choice_name`, `video`, `choice_detail`, `choice_status`) VALUES
(1, 'แขนกล คนนอนดึก', 'https://www.youtube.com/watch?v=HnPOLQvMm0E', 'ทดสอบ รายละเอียด', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `id` int(3) NOT NULL,
  `choice_id` int(10) NOT NULL,
  `question` varchar(100) NOT NULL DEFAULT '',
  `c1` varchar(100) NOT NULL DEFAULT '',
  `c2` varchar(100) NOT NULL DEFAULT '',
  `c3` varchar(100) NOT NULL DEFAULT '',
  `c4` varchar(100) NOT NULL DEFAULT '',
  `answer` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`id`, `choice_id`, `question`, `c1`, `c2`, `c3`, `c4`, `answer`) VALUES
(1, 1, 'กรดชนิดใดที่อยู่ในน้ำมันถั่วเหลืองและน้ำมันดอกทานตะวัน', 'ออกซิเดซัน', 'ไลโนเลอิก', 'ไฮโดรลิซิส', 'ไอโซโพพิล', 2),
(2, 1, 'คาร์โบไฮเดรตคืออาหารจำพวกใด', 'ข้าวจ้าว ข้าวโพด ข้าวเหนียว', 'ขนมกบเคี้ยว น้ำอัดลม', 'เนื้อหมู เนื้อไก่', 'กุ้ง ปลาหมึก หอย', 1),
(3, 1, 'ผู้สูงอายุควรดื่มน้ำสะอดอย่างน้อยวันละกี่แก้ว', '2 - 4 แก้ว', '3 - 5 แก้ว', '6 - 8 แก้ว', '9 - 10 แก้ว', 3),
(4, 1, 'ผู้สูงอายุที่เป็นโรคเบาหวานห้ามรับประทานผลไม้จำพวกใด', 'ทุเรียน ลำไย น้อยหน่า และขนุน', 'มะม่วง มะละกอ ส้ม และแก้วมังกร', 'ส้ม แตงโม องุ่น และสับปะรด', 'กล้วย แอปเปิ้ล ฝรั่ง และองุ่นเขียว', 1),
(5, 1, 'การกายบริหาร คือการออกกำลังกายแบบใด', 'รำมวยจีน', 'เต้นแอโรบิก', 'คาร์ดิโอ', 'เต้น T25', 1),
(6, 1, 'ผู้สูงอายุควรออกกำลังกายอย่างน้อยครั้งละกี่นาที', '10 – 50 นาที', '20 – 60 นาที', '30 – 60 นาที', '40 – 60 นาที', 2),
(7, 1, 'ผู้สูงอายุมักมีปัญหาอาการท้องผูกซึ่งเกิดจากสาเหตุอะไร', 'กระเพราะอาหารและลำไส้ลดการบีบตัวตามอายุ', 'กระเพราะลำไส้อักเสบ', 'อาหารไม่ย่อย', 'ไม่ทานวิตามินอาหารเสริม', 1),
(8, 1, 'บันไดที่ดีเหมะกับผู้สูงอายุไม่ควรเป็นลักษณะแบบใด', 'มีแสงสว่างพียงพอ', 'มีราวจับที่แข็งแรงทั้ง2ข้าง', 'มีสวิตช์ไฟ ทั้งด้านบนและด้านล่างของบันได', 'มีข้าวของระเกะระกะตั้งไว้ขวางทางบันได', 4),
(9, 1, 'ห้องครัวสำหรับผู้สูงอายุไม่ควรเป็นลักษณะแบบใด', 'พื้นครัวไม่ควรลื่นและไม่สะท้อนแสง', 'บนโต๊ะไม่ควรมีของวางเกะกะ', 'ไม่ควรเก็บของในตู้สูงเกินไปสามารถหยิบจับของได้ง่ายๆ', 'หากหยิบจับของที่สูงไม่ถึง ผู้สูงอายุสามารถใช้บันไดปีนขึ้นไปได้', 4),
(10, 1, 'ยาที่รับประทานก่อนอาหารควรรับประทานก่อนอย่างน้อยที่นาที', '10 นาที', '20 นาที', '30 นาที', '40 นาที', 3),
(11, 1, 'ข้อใดคือเรื่องทั่วไปที่ผู้สูงอายุไม่ควรปฏิบัติ', 'เปิดไฟตรงทางเดินไปห้องน้ำ ตอนกลางคืน', 'หลีกเลี่ยงการสวมรองเท้าหลวมๆหรือรองเท้าส้นสูง', 'หากมีอาการเวียนศรีษะหลังจากกินยาเข้าไป ควรบอกแพทย์เพื่อนเปลี่ยนชนิดของยา', 'รับประทานยาตามใจชอบ ไม่ตามเวลาที่แพทย์สั่ง', 4),
(12, 1, 'ข้อใดไม่ใช่วิธีที่ถูกต้องในการเตือนให้ผู้สูงอายุไม่ลืมรับประทานยา', 'นำกล่องใส่ยามาแยกชนิดของยาเพื่อจำชนิดของยาให้ง่ายขึ้น', 'ตั้งนาฬิกาปลุกเพื่อเตือนเวลาในการรับประทานยา', 'ใช้แอพพลิเคชั่นสำหรับเตือนให้รับประทานยาในสมาร์ทโฟน', 'ตะโกนเสียงดังๆเพื่อเตือนให้ผู้สูงอายุได้ยิน', 4),
(13, 1, 'ยากลุ่ม ยานอนหลับ ยาคลายเครียด ยาแก้แพ้ และยาแก้ปวด ทำให้มีอาการข้างเคียงยกเว้นอาการใด', 'เวียนศรีษะ', 'ง่วงซึม', 'สับสน', 'เป็นลม', 4),
(14, 1, 'ยากลุ่มต้านการอักเสบอาจทำให้ผู้สูงอายุเสี่ยงต่ออาการใด', 'โรคหัวใจ', 'ความดันต่ำ', 'เบาหวาน', 'ความดันโลหิตสูงหรือไตวาย', 4),
(15, 1, 'ข้อใดคืองานอดิเรกที่เหมะสมกับผู้สูงอายุมากที่สุด', 'ดูแลสวนหรือต้นไม้', 'ขับมอเตอร์ไซค์ชมวิว', 'วิ่งออกกำลังกาย 10 กิโลเมตรในช่วงเที่ยง', 'ดื่มสุราสังสรรค์กับเพื่อน', 1),
(16, 1, 'ข้อใด ไม่ใช่ การสร้างความรู้สึกมีคุณค่าให้กับผู้สูงอายุ', 'การขอคำปรึกษาในเรื่องการเลี้ยงลูก', 'การขอคำปรึกษาในเรื่องการดูแลบ้าน', 'การขอคำปรึกษาในเรื่องการกู้เงิน', 'การขอคำปรึกษาในเรื่องการทำอาหาร', 3),
(17, 1, 'กิจกรรมการสวดมนต์ ไหว้พระ นั่งสมาธิ ฟังธรรม ส่งผลทำให้ผู้สูงอายุเกิดความรู้สึกในด้านใด', 'ความจำดีขึ้น ', 'มีจิตใจที่สงบและ สบายใจขึ้น', 'ร่างกายแข็งแรงขึ้น', 'อาการป่วยหายไวขึ้น', 2),
(18, 1, 'ทางเข้าออกของผู้สูงอายุ ไม่ควร เป็นลักษณะใด', 'มีบันไดเพื่อเป็นทางลง', 'ทิศทางต่างๆไม่ซับซ้อน', 'ประตูของทุกห้องควรมีลักษณะดันเปิดออกจากภายในได้', 'หากผู้สูงอายุนั่งรถเข็น พื้น ควรเป็นแนวราบเรียบ', 1),
(19, 1, 'เนื้อปลาที่มีโอเมก้า 3 สามารถป้องกันโรคใดได้', 'โรคตับอักเสบ', 'โรคหลอดเลือดแข็งกับโรงหัวใจ', 'โรคความดันต่ำ', 'โรคมะเร็งตับ', 2),
(20, 1, 'แร่ธาตุที่ผู้สูงอายุต้องการ และมักจะขาดคือข้อใด', 'ฟอสฟอรัส', 'โปแตสเซียม', 'ธาตุแคลเซียมและธาตุสังกะสี', 'แมกนีเซียม', 3),
(21, 1, 'ธาตุสังกะสี มักจะพบในจำพวกใด', 'กุ้ง หอย ปู ปลา ปลาหมึก', 'ผักและผลไม้', 'ข้าวและแป้ง', 'หมู เนื้อ ไก่', 1),
(22, 1, 'ผู้สูงอายุควรได้รับแคลเซียมและฟอสฟอรัสประมาณ เท่าไหร่ต่อวัน', '500 – 1000 	มิลลิกรัม/วัน', '1000 – 1500	มิลลิกรัม/วัน', '1500 – 2000	มิลลิกรัม/วัน', '2500 – 3000	มิลลิกรัม/วัน', 2),
(23, 1, 'ผู้สูงอายุควรออกกำลังกายสัปดาห์ละกี่วัน', '1 – 2 วัน', '2 – 4 วัน', '3 – 5 วัน', '6 – 7 วัน', 3),
(24, 1, 'ข้อใด ไม่ใช่ ประโยชน์ของการออกกำลังกายในวัยผู้สูงอายุ', 'ช่วยผ่อนคลายความเครียด ไม่ซึมเศร้า', 'ช่วยให้กล้ามเนื้อแข็งแรง', 'ช่วยให้ระบบขับถ่ายดีขึ้น', 'ช่วยให้ผิวพรรณบนใบหน้าหาย หย่นคล้อย ', 4),
(25, 1, '. ผู้สูงอายุ ควรรับประทาน ไข่ และนม  อย่างน้อยวันละเท่าไหร่', 'ไข่ 2 ฟอง  นม 2 แก้ว', 'ไข่ 3 ฟอง  นม 2 แก้ว', 'ไข่ 2 ฟอง  นม 1 แก้ว', 'ไข่ 1 ฟอง  นม 1 แก้ว', 4),
(41, 1, 'แคลเซียม มักพบในอาหาร จำพวกใด', 'นม ก้อนเต้าหู้  ', 'ข้าว ก๋วยเตี๋ยว ', 'ขนมปัง แป้ง', 'น้ำผลไม้  น้ำขิง', 1),
(42, 1, 'อาหารเช้า ในข้อใดที่เหมาะสมกับผู้สูงอายุมากที่สุด', 'ส้มตำปูปลาร้า  แตงโม 3 ชิ้น', 'ปลานึ่งราดซีอิ๋ว แก้วมังกร 6 ชิ้น', 'ต้มยำกุ้ง ส้ม 1 ผล', 'ขนมจีนน้ำเงี้ยว แอปเปิ้ล 1 ผล', 2),
(43, 1, 'ก่อนออกกำลังกายทุกครั้ง ควรอบอุ่นร่างกายและผ่อนคลายร่างกายอย่างน้อยครั้งละ กี่นาที', '2-5   นาที', '10-15 นาที', '5-10  นาที', '15-20 นาที', 3),
(44, 1, 'ข้อใด ไม่ใช่ ลักษณะห้องน้ำของผู้สูงอายุที่ถูกต้อง', 'ห้องน้ำไม่ควรลื่นแม้จะเปียก', 'ห้องอาบน้ำควรมีแผ่นยางหรือวัสดุกันลื่น', 'ควรมีราวจับขณะที่เข้าหรือออกจากอ่างอาบน้ำ', 'ควรมีเก้าอี้นั่งอาบน้ำสำหรับผู้สูงอายุ', 4),
(45, 1, 'ข้อใด ไม่ใช่ ลักษณะห้องนอนของผู้สูงอายุที่ถูกต้อง', 'เว้นที่รอบๆเตียงนอน เพื่อจะเดินได้อย่างปลอดภัย', 'ควรมีเก้าอี้หนึ่งตัว เพื่อไว้แต่งตัว', 'วางตะเกียงหรือไฟฉายไว้ใกล้ที่นอนพอที่จะเอื้อมถึงได้', 'มีราวจับหลายๆอันไว้ใน ห้องนอน', 4),
(46, 1, 'ข้อใดคือ สิ่งสำคัญในการใช้ยาอย่างถูกต้องควรทำอย่างไร เพื่อให้สามารถ ใช้ยาได้อย่างถูกคน ถูกโรค ถูกขนา', 'อ่านฉลากยาให้ถี่ถ้วน ', 'รับประทานยาตาม ที่เวลาตัวเราเองสะดวก โดยไม่ได้ดูฉลากยา', 'รับประทานยาทันทีเมื่อเกิดอาการไข้ โดยไม่ได้ดูฉลากยา', 'ใช้ยาเกินขนาด ไม่รับประทานตามที่หมอบอก', 1),
(47, 1, 'ข้อใด ไม่ใช่ ความสะอาดสะอ้าน ในด้านสิ่งแวดล้อม', 'ทุกห้องควรได้รับการดูแล ไม่ควรมี เศษฝุ่น', 'ทุกห้อง อาจจะมีเศษขยะได้บ้างเล็กน้อย', 'ทุกห้องควรปลอดกลิ่นเหม็นจากสิ่งปฏิกูล', 'ทุกห้องไม่ควรมีกลิ่น ควันบุหรี่ ทินเนอร์', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(5) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` text NOT NULL,
  `Userlevel` varchar(1) NOT NULL,
  `user_date` date NOT NULL,
  `session_id` varchar(50) NOT NULL,
  `Status` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`, `Firstname`, `Lastname`, `email`, `phone`, `Userlevel`, `user_date`, `session_id`, `Status`) VALUES
(30, 'admin', 'Aa123456', 'admin1', 'admin1', '23.noop@gmail.com', '5165165165', 'A', '0000-00-00', '1476514e0f154b00cdfc68033cac8b01', 'Y'),
(44, 'User', 'Aa123456', 'GGGGMM', 'GGGGGMM', '23.noop@gmail.com', '8888888888', 'M', '0000-00-00', 'fdc1e278676cd8877f58ab2b0c3dc5c6', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `user_learning`
--

CREATE TABLE `user_learning` (
  `user_learning_id` int(10) NOT NULL,
  `choice_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_learning_bf` int(20) NOT NULL,
  `user_learning_af` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_learning`
--

INSERT INTO `user_learning` (`user_learning_id`, `choice_id`, `user_id`, `user_learning_bf`, `user_learning_af`) VALUES
(40, 1, 44, 5, '7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choice`
--
ALTER TABLE `choice`
  ADD PRIMARY KEY (`choice_id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_learning`
--
ALTER TABLE `user_learning`
  ADD PRIMARY KEY (`user_learning_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choice`
--
ALTER TABLE `choice`
  MODIFY `choice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user_learning`
--
ALTER TABLE `user_learning`
  MODIFY `user_learning_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
