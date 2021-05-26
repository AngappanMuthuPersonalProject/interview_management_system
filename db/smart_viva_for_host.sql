-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 17, 2020 at 03:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alupdduc_smart_viva`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `APPLIN_ID` int(11) NOT NULL,
  `APP_NAME` text DEFAULT NULL,
  `APP_DOB` text DEFAULT NULL,
  `APP_MOBILE` int(11) DEFAULT NULL,
  `APP_EMAIL` text DEFAULT NULL,
  `APP_ADDRESS` text DEFAULT NULL,
  `INT_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`APPLIN_ID`, `APP_NAME`, `APP_DOB`, `APP_MOBILE`, `APP_EMAIL`, `APP_ADDRESS`, `INT_ID`) VALUES
(2018302001, 'AASHA S', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302002, 'ABIMANYU K', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302003, 'DEEPIKA S', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302004, 'DHANALAKSHMI V', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302005, 'DINESH KUMAR S', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302006, 'DIVYA JESSI CH', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302007, 'ELANGOVAN R', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302008, 'GANESH A', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302009, 'GEETHA.R', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302010, 'GURUSHESAN R', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302011, 'ISMAIL N', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302012, 'JAYA SHRI J', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302013, 'JEYA SURIYA K', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302014, 'KABILA A', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302015, 'KARANKUMAR N', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302016, 'KARTHICK S', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302017, 'KASTHURI M', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302018, 'KOUSALYA K', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302019, 'LAKSHMI SP', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302020, 'LAVANYA R', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302021, 'MANI PRASATH M', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302022, 'MANIMEGALAI S', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302023, 'MANIMEKALAI V', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302024, 'MANOKARAN R', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302025, 'MARIMUTHU N', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302026, 'MEENAKSHI SUNDARAM K', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302027, 'MEENAL K', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302028, 'MOHAMED ABDULLA S', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302029, 'MUTHU CHIDAMPARAM R', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302030, 'MUTHU SELVAN N', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302031, 'MUTHUJAYASHREE M', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302032, 'MUTHUMANI B', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302033, 'MUTHUVINAYAGAM I', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302034, 'NANTHAKUMAR M', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302035, 'PANDISELVI S', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302036, 'PRAVIN KUMAR E', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302037, 'PRIYA R', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302038, 'RAJA SURYA S', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302039, 'RAJESH K', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302040, 'SALMANKHAN B', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302041, 'SAMUVEL S', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302042, 'SARANYA D', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302043, 'SATHISH KUMAR M', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302044, 'SATHIYASEELAN R', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302045, 'SELVA GANAPATHI G', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302046, 'SELVA GANAPATHY N', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302047, 'SIVASAKTHIVEL A', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302048, 'SNEKA S', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302049, 'SOUNDHARYA P', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302050, 'SRIRAM M', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302051, 'SUJATHA P D', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302052, 'THARANI M', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302053, 'UMAIYAL M', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302054, 'VANATHI P', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302055, 'VEERAPPAN A', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302056, 'VENKADESH M', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302057, 'VENNILA R', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302058, 'VIGNESH KUMAR G', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302059, 'VIMALAN ILA', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302060, 'VINOTHINI P', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101),
(2018302061, 'VISWA A', '17.09.2020', 1234567890, 'abc@gmail.com', 'kkdi', 101);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_interview`
--

CREATE TABLE `candidate_interview` (
  `APPLIN_ID` int(11) NOT NULL,
  `APP_NAME` varchar(200) NOT NULL,
  `APP_MOBILE` varchar(15) NOT NULL,
  `APP_EMAIL` varchar(200) NOT NULL,
  `APP_ADDRESS` varchar(200) NOT NULL,
  `INT_ID` int(11) NOT NULL,
  `ATTENDANCE_TIME` time NOT NULL,
  `ATTENDANCE_DATE` date NOT NULL,
  `INT_START_TIME` time NOT NULL,
  `INT_END_TIME` time NOT NULL,
  `CANDIDATE_INT_STATUS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate_interview`
--

INSERT INTO `candidate_interview` (`APPLIN_ID`, `APP_NAME`, `APP_MOBILE`, `APP_EMAIL`, `APP_ADDRESS`, `INT_ID`, `ATTENDANCE_TIME`, `ATTENDANCE_DATE`, `INT_START_TIME`, `INT_END_TIME`, `CANDIDATE_INT_STATUS`) VALUES
(2018302007, 'ELANGOVAN R', '1234567890', 'abc@gmail.com', 'kkdi', 101, '05:19:00', '2020-09-17', '05:51:00', '05:52:00', 'Completed'),
(2018302009, 'GEETHA.R', '1234567890', 'abc@gmail.com', 'kkdi', 101, '05:45:00', '2020-09-17', '05:45:00', '05:47:00', 'Completed'),
(2018302020, 'LAVANYA R', '1234567890', 'abc@gmail.com', 'kkdi', 101, '05:32:00', '2020-09-17', '00:00:00', '00:00:00', 'Not Started');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_status`
--

CREATE TABLE `candidate_status` (
  `INT_ID` int(11) NOT NULL,
  `APPLIN_ID` int(11) NOT NULL,
  `STATUS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE `interview` (
  `INT_ID` int(11) NOT NULL,
  `POST` varchar(100) NOT NULL,
  `DEPT` varchar(250) NOT NULL,
  `DATE` date NOT NULL,
  `TIME` time NOT NULL,
  `MEET_ID` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`INT_ID`, `POST`, `DEPT`, `DATE`, `TIME`, `MEET_ID`) VALUES
(101, 'Android Developer', 'MIS (Alagappa University)', '2020-09-30', '11:36:21', 'https://meet.google.com/edk-stqe-are\r\n'),
(102, 'Data Scientist', 'Computer Science (ALU)', '2020-09-30', '12:00:20', 'https://meet.google.com/edk-stqe-are\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `interview_status`
--

CREATE TABLE `interview_status` (
  `INT_ID` int(11) NOT NULL,
  `STATUS` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `panel_member`
--

CREATE TABLE `panel_member` (
  `MEM_ID` int(11) NOT NULL,
  `MEM_NAME` varchar(250) NOT NULL,
  `MEM_DESIGNATION` varchar(250) NOT NULL,
  `MEM_MOBILE` varchar(15) NOT NULL,
  `MEM_EMAIL` varchar(200) NOT NULL,
  `MEM_ADDRESS` varchar(500) NOT NULL,
  `INT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`APPLIN_ID`),
  ADD KEY `INT_ID` (`INT_ID`);

--
-- Indexes for table `candidate_interview`
--
ALTER TABLE `candidate_interview`
  ADD PRIMARY KEY (`APPLIN_ID`),
  ADD KEY `INT_ID` (`INT_ID`);

--
-- Indexes for table `candidate_status`
--
ALTER TABLE `candidate_status`
  ADD PRIMARY KEY (`APPLIN_ID`),
  ADD KEY `INT_ID` (`INT_ID`);

--
-- Indexes for table `interview`
--
ALTER TABLE `interview`
  ADD PRIMARY KEY (`INT_ID`);

--
-- Indexes for table `interview_status`
--
ALTER TABLE `interview_status`
  ADD KEY `INT_ID` (`INT_ID`);

--
-- Indexes for table `panel_member`
--
ALTER TABLE `panel_member`
  ADD PRIMARY KEY (`MEM_ID`),
  ADD KEY `INT_ID` (`INT_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `panel_member`
--
ALTER TABLE `panel_member`
  MODIFY `MEM_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicants`
--
ALTER TABLE `applicants`
  ADD CONSTRAINT `applicants_ibfk_1` FOREIGN KEY (`INT_ID`) REFERENCES `interview` (`INT_ID`);

--
-- Constraints for table `candidate_interview`
--
ALTER TABLE `candidate_interview`
  ADD CONSTRAINT `candidate_interview_ibfk_2` FOREIGN KEY (`INT_ID`) REFERENCES `interview` (`INT_ID`);

--
-- Constraints for table `candidate_status`
--
ALTER TABLE `candidate_status`
  ADD CONSTRAINT `candidate_status_ibfk_1` FOREIGN KEY (`INT_ID`) REFERENCES `interview` (`INT_ID`);

--
-- Constraints for table `interview_status`
--
ALTER TABLE `interview_status`
  ADD CONSTRAINT `interview_status_ibfk_1` FOREIGN KEY (`INT_ID`) REFERENCES `interview` (`INT_ID`);

--
-- Constraints for table `panel_member`
--
ALTER TABLE `panel_member`
  ADD CONSTRAINT `panel_member_ibfk_1` FOREIGN KEY (`INT_ID`) REFERENCES `interview` (`INT_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
