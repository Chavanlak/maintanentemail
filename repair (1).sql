-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2025 at 06:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repair`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `equipmentId` int(11) NOT NULL,
  `equipmentName` text NOT NULL,
  `TypeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`equipmentId`, `equipmentName`, `TypeId`) VALUES
(3, 'คอม', 2),
(4, 'เครื่องทำน้ำร้อน', 1);

-- --------------------------------------------------------

--
-- Table structure for table `equipmenttype`
--

CREATE TABLE `equipmenttype` (
  `TypeId` int(11) NOT NULL,
  `TypeName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `equipmenttype`
--

INSERT INTO `equipmenttype` (`TypeId`, `TypeName`) VALUES
(1, 'อุปกรณ์เครื่องครัว'),
(2, 'อุปกรณ์ไอที'),
(3, 'อุปกรณ์ทั่วไป');

-- --------------------------------------------------------

--
-- Table structure for table `fileupload`
--

CREATE TABLE `fileupload` (
  `FileUploadId` int(11) NOT NULL,
  `filename` text NOT NULL,
  `filepath` text NOT NULL,
  `NotirepairId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `fileupload`
--

INSERT INTO `fileupload` (`FileUploadId`, `filename`, `filepath`, `NotirepairId`) VALUES
(1, '2_upload_2025-08-06.jpg', 'public//2_upload_2025-08-06.jpg', 8),
(2, 'SampleVideo_1280x720_1mbupload2025-08-14.mp4', 'public//SampleVideo_1280x720_1mbupload2025-08-14.mp4', 9),
(3, 'ลาป่วย2_5upload2025-08-14.jpg', 'public//ลาป่วย2_5upload2025-08-14.jpg', 9),
(4, 'ลาป่วย06_06upload2025-08-14.jpg', 'public//ลาป่วย06_06upload2025-08-14.jpg', 9),
(5, 'ลาป่วยท้องเสียupload2025-08-14.jpg', 'public//ลาป่วยท้องเสียupload2025-08-14.jpg', 9),
(6, 'นักตีปิงปองระดับโลกupload2025-08-14.jpg', 'public//นักตีปิงปองระดับโลกupload2025-08-14.jpg', 10),
(7, 'ยิ้มมมมสมัยยังไม่จัดฟันupload2025-08-14.jpg', 'public//ยิ้มมมมสมัยยังไม่จัดฟันupload2025-08-14.jpg', 10),
(8, 'รูปนิสิตupload2025-08-14.jpg', 'public//รูปนิสิตupload2025-08-14.jpg', 10),
(9, 'catlogo2upload2025-08-14.jpg', 'public//catlogo2upload2025-08-14.jpg', 11),
(10, 'catlogo2upload2025-08-14.jpg', 'public//catlogo2upload2025-08-14.jpg', 12),
(11, 'catlogo3upload2025-08-14.jpg', 'public//catlogo3upload2025-08-14.jpg', 13),
(12, 'catlogoupload2025-08-14.png', 'public//catlogoupload2025-08-14.png', 14),
(13, 'catlogo2upload2025-08-14.jpg', 'public//catlogo2upload2025-08-14.jpg', 14),
(14, 'catlogoupload2025-08-14.png', 'public//catlogoupload2025-08-14.png', 15),
(15, 'catlogo2upload2025-08-14.jpg', 'public//catlogo2upload2025-08-14.jpg', 15),
(16, 'cat4upload2025-08-14.png', 'public//cat4upload2025-08-14.png', 16),
(17, 'catlogo2 - Copyupload2025-08-14.jpg', 'public//catlogo2 - Copyupload2025-08-14.jpg', 16),
(18, 'catlogoupload2025-08-14.png', 'public//catlogoupload2025-08-14.png', 17),
(19, 'catlogo2 - Copyupload2025-08-14.jpg', 'public//catlogo2 - Copyupload2025-08-14.jpg', 17),
(20, 'catlogo2 - Copyupload2025-08-14.jpg', 'public//catlogo2 - Copyupload2025-08-14.jpg', 18),
(21, 'catlogo2upload2025-08-14.jpg', 'public//catlogo2upload2025-08-14.jpg', 18);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `HistoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `maneger` varchar(80) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`maneger`, `email`) VALUES
('araimairu', 'arai@gmail.com'),
('kinkin', 'kin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `notirepair`
--

CREATE TABLE `notirepair` (
  `NotirepairId` int(11) NOT NULL,
  `equipmentId` int(11) NOT NULL DEFAULT 4,
  `DateNotirepair` timestamp NOT NULL DEFAULT current_timestamp(),
  `DeatailNotirepair` text DEFAULT NULL,
  `zone` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `notirepair`
--

INSERT INTO `notirepair` (`NotirepairId`, `equipmentId`, `DateNotirepair`, `DeatailNotirepair`, `zone`) VALUES
(1, 4, '2025-08-06 15:08:24', '44444444444444444444', NULL),
(2, 4, '2025-08-06 15:26:32', 'dddd', NULL),
(3, 4, '2025-08-06 15:28:59', 'dddd', NULL),
(4, 4, '2025-08-06 15:31:33', 'dddd', NULL),
(5, 4, '2025-08-06 15:31:47', '5555', NULL),
(6, 4, '2025-08-06 15:45:05', 'ssss', NULL),
(7, 4, '2025-08-06 15:45:14', 'dddd', NULL),
(8, 4, '2025-08-06 15:45:39', 'dddd', NULL),
(9, 3, '2025-08-14 03:32:38', 'Hiiii', NULL),
(10, 4, '2025-08-14 14:39:30', 'ป', 'apichad.s@tgi.co.th'),
(11, 4, '2025-08-14 15:05:01', '222', 'apichad.s@tgi.co.th'),
(12, 4, '2025-08-14 15:06:18', '222', 'apichad.s@tgi.co.th'),
(13, 4, '2025-08-14 15:17:10', '888', 'apichad.s@tgi.co.th'),
(14, 4, '2025-08-14 15:19:26', '888', 'apichad.s@tgi.co.th'),
(15, 4, '2025-08-14 15:28:15', 'fff', 'apichad.s@tgi.co.th'),
(16, 3, '2025-08-14 15:48:44', '5555', 'apichad.s@tgi.co.th'),
(17, 4, '2025-08-14 15:50:31', 'sss', 'arnutladlosri@gmail.com'),
(18, 4, '2025-08-14 15:57:47', 'z', 'apichad.s@tgi.co.th');

-- --------------------------------------------------------

--
-- Table structure for table `testuploadfile`
--

CREATE TABLE `testuploadfile` (
  `testuploadfileId` int(11) NOT NULL,
  `fileName` text DEFAULT NULL,
  `fileOGName` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `testuploadfile`
--

INSERT INTO `testuploadfile` (`testuploadfileId`, `fileName`, `fileOGName`) VALUES
(1, '175447339015.png', '01.wheel-01.png'),
(2, '175447339055.png', '01.wheel-02.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `staffname` varchar(80) NOT NULL,
  `staffpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`staffname`, `staffpassword`) VALUES
('สุธาทิพย์', '0000288'),
('บังอร', '0000321');

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE `zone` (
  `zoneId` int(11) NOT NULL,
  `StaffName` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `Zone` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`zoneId`, `StaffName`, `email`, `Zone`) VALUES
(3, 'APICHAD', 'apichad.s@tgi.co.th\r\n', ''),
(4, 'ARNAT', 'arnutladlosri@gmail.com\r\n', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`equipmentId`),
  ADD KEY `TypeId` (`TypeId`);

--
-- Indexes for table `equipmenttype`
--
ALTER TABLE `equipmenttype`
  ADD PRIMARY KEY (`TypeId`);

--
-- Indexes for table `fileupload`
--
ALTER TABLE `fileupload`
  ADD PRIMARY KEY (`FileUploadId`),
  ADD KEY `NotirepairId` (`NotirepairId`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`HistoryId`);

--
-- Indexes for table `notirepair`
--
ALTER TABLE `notirepair`
  ADD PRIMARY KEY (`NotirepairId`),
  ADD KEY `equipmentId` (`equipmentId`);

--
-- Indexes for table `testuploadfile`
--
ALTER TABLE `testuploadfile`
  ADD PRIMARY KEY (`testuploadfileId`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`zoneId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `equipmentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `equipmenttype`
--
ALTER TABLE `equipmenttype`
  MODIFY `TypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fileupload`
--
ALTER TABLE `fileupload`
  MODIFY `FileUploadId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `HistoryId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notirepair`
--
ALTER TABLE `notirepair`
  MODIFY `NotirepairId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `testuploadfile`
--
ALTER TABLE `testuploadfile`
  MODIFY `testuploadfileId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `zoneId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `equipment`
--
ALTER TABLE `equipment`
  ADD CONSTRAINT `equipment_ibfk_1` FOREIGN KEY (`TypeId`) REFERENCES `equipmenttype` (`TypeId`);

--
-- Constraints for table `fileupload`
--
ALTER TABLE `fileupload`
  ADD CONSTRAINT `fileupload_ibfk_1` FOREIGN KEY (`NotirepairId`) REFERENCES `notirepair` (`NotirepairId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notirepair`
--
ALTER TABLE `notirepair`
  ADD CONSTRAINT `notirepair_ibfk_1` FOREIGN KEY (`equipmentId`) REFERENCES `equipment` (`equipmentId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
