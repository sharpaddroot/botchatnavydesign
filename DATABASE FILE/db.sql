-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 26, 2020 at 04:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `botchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `bot_answer`
--

CREATE TABLE `bot_answer` (
  `answer_id` int(4) NOT NULL,
  `b_question` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `q_type` varchar(10) NOT NULL DEFAULT 'text',
  `bot_type` varchar(10) NOT NULL DEFAULT 'bot',
  `warp_tb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bot_answer`
--

INSERT INTO `bot_answer` (`answer_id`, `b_question`, `answer`, `q_type`, `bot_type`, `warp_tb`) VALUES
(4, 'สวัสดี', 'สวัสดีค่ะ ^^', 'text', 'bot', ''),
(5, 'การตอบกลับแบบยาวๆ', 'ทดสอบการตอบกลับแบบยาวๆทดสอบการตอบกลับแบบยาวๆทดสอบการตอบกลับแบบยาวๆทดสอบการตอบกลับแบบยาวๆทดสอบการตอบกลับแบบยาวๆทดสอบการตอบกลับแบบยาวๆ', 'text', 'bot', ''),
(8, '1อาทิตย์มีกี่วัน', 'อาทิตย์มี 7 วัน ได้แก่</p>วันจันทร์</p>วันอังคาร</p>วันพุธ</p>วันพฤหัสบดี</p>วันศุกร์</p>วันเสาร์</p>วันอาทิตย์', 'text', 'bot', ''),
(9, 'ตอบกลับแบบรูปภาพที่1', 'ทดสอบการตอบกลับแบบรูปภาพ', 'image', 'bot', '3'),
(10, 'ตอบกลับแบบรูปภาพที่2', 'ทดสอบการตอบกลับแบบรูปภาพ', 'image', 'bot', '4'),
(11, 'ตอบกลับแบบปุ่มที่1', 'ทดสอบการตอบกลับแบบปุ่ม', 'button', 'bot', '5');

-- --------------------------------------------------------

--
-- Table structure for table `button_type`
--

CREATE TABLE `button_type` (
  `answer_id` int(3) NOT NULL,
  `bt_question` varchar(1000) NOT NULL,
  `btn_answer` varchar(1000) NOT NULL,
  `btn_txt` varchar(100) NOT NULL,
  `btn_url` varchar(1000) NOT NULL,
  `btn_icon` varchar(50) NOT NULL,
  `btn_color` varchar(10) NOT NULL,
  `btn_tb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `button_type`
--

INSERT INTO `button_type` (`answer_id`, `bt_question`, `btn_answer`, `btn_txt`, `btn_url`, `btn_icon`, `btn_color`, `btn_tb`) VALUES
(1, 'การตอบกลับแบบปุ่มที่1', 'ทดสอบการตอบกลับแบบปุ่ม', 'Facebook', 'https://fb.com/', 'fab fa-facebook-f', '#428BCA', '5');

-- --------------------------------------------------------

--
-- Table structure for table `cloud_chat`
--

CREATE TABLE `cloud_chat` (
  `send_id` int(7) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `chat_id` varchar(1000) NOT NULL,
  `time_re` int(7) NOT NULL DEFAULT 15
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `image_type`
--

CREATE TABLE `image_type` (
  `answer_id` int(4) NOT NULL,
  `i_question` varchar(1000) NOT NULL,
  `i_answer` varchar(1000) NOT NULL,
  `q_image` varchar(1000) NOT NULL,
  `bot_type` varchar(10) NOT NULL DEFAULT 'bot',
  `i_tb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image_type`
--

INSERT INTO `image_type` (`answer_id`, `i_question`, `i_answer`, `q_image`, `bot_type`, `i_tb`) VALUES
(1, 'การตอบกลับแบบรูปภาพที่1', 'ทดสอบการตอบกลับแบบรูปภาพ', 'test.jpg', 'bot', '3'),
(2, 'การตอบกลับแบบรูปภาพที่2', 'ทดสอบการตอบกลับแบบรูปภาพ', '1.jpg', 'bot', '4');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(5) NOT NULL,
  `text_log` varchar(1000) NOT NULL,
  `date_log` varchar(100) NOT NULL,
  `user` varchar(1000) NOT NULL,
  `tag` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `text_log`, `date_log`, `user`, `tag`) VALUES
(0, 'รับรองระบบจาก NAVy DESIGn', '<font class=\"text-danger\">เพิ่มโดยผู้ดูแลระบบ!</font>', 'unknow', '0000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bot_answer`
--
ALTER TABLE `bot_answer`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `button_type`
--
ALTER TABLE `button_type`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `cloud_chat`
--
ALTER TABLE `cloud_chat`
  ADD PRIMARY KEY (`send_id`);

--
-- Indexes for table `image_type`
--
ALTER TABLE `image_type`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bot_answer`
--
ALTER TABLE `bot_answer`
  MODIFY `answer_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `button_type`
--
ALTER TABLE `button_type`
  MODIFY `answer_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cloud_chat`
--
ALTER TABLE `cloud_chat`
  MODIFY `send_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;

--
-- AUTO_INCREMENT for table `image_type`
--
ALTER TABLE `image_type`
  MODIFY `answer_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
