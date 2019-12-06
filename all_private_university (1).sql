-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 08:48 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `all_private_university`
--

-- --------------------------------------------------------

--
-- Table structure for table `degrees`
--

CREATE TABLE `degrees` (
  `University_Initial` varchar(100) DEFAULT NULL,
  `Degree` varchar(100) DEFAULT NULL,
  `Semestar_Time` varchar(100) DEFAULT NULL,
  `Admission_Test` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degrees`
--

INSERT INTO `degrees` (`University_Initial`, `Degree`, `Semestar_Time`, `Admission_Test`) VALUES
('NSU', 'Bsc', 'Jan May Sept', 'Yse'),
('AUST', 'Bsc', 'Jan July', 'Yes'),
('AIUB', 'Bsc', 'Jan May Sept', 'Yes'),
('BRAC', 'Bsc', 'Jan May Sept', 'Yes'),
('BU', 'Bsc', 'Jan May Sept', 'No'),
('DIU', 'Bsc', 'Jan May Sept', 'Yes'),
('SMUCT', 'Bsc', 'Jan May Sept', 'Yes'),
('BUBT', 'Bsc', 'Jan May Sept', 'No'),
('CUST', 'Bsc', 'Jan May Sept', 'No'),
('NUBT', 'Bsc', 'Jan May Sept', 'No'),
('PU', 'Bsc', 'Jan May Sept', 'Yes'),
('EWU', 'Bsc', 'Jan May Sept', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Gender` enum('male','female') NOT NULL,
  `Age` int(255) NOT NULL,
  `Phone_Number` text NOT NULL,
  `Password` varchar(255) NOT NULL,
  `vkey` varchar(255) NOT NULL,
  `verified` enum('Yes','No') NOT NULL DEFAULT 'No',
  `Create_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `Name`, `Email`, `Gender`, `Age`, `Phone_Number`, `Password`, `vkey`, `verified`, `Create_Date`, `Address`) VALUES
(2, 'kahsem', 'kashem@gmail.com', 'male', 22, '123', '123', '78c1b1491dbbd73f4f4ba4494d96ee32', 'Yes', '2019-11-28 18:25:34', 'malibag'),
(8, 'kayes', 'imrul@gmail.com', 'male', 123, '123', '123', 'bb2e507e4b9b977e0611c07a5f18e61e', 'No', '2019-11-08 14:53:13', 'asd'),
(10, 'kayes', 'asdasds560@gmail.com', 'male', 123, '123', '123', '4660c67f6088f0937fab3f1c6900b9d2', 'No', '2019-11-08 14:57:16', 'asd'),
(11, 'kayes', 'asdasdasdasdasds560@gmail.com', 'male', 123, '123', '123', '03715d346e75da176e8a0ed3ae123a47', 'No', '2019-11-08 14:58:36', 'asd'),
(12, 'kayes', 'kah60@gmail.com', 'male', 123, '123', 'asd', '7fb597d748e9c7e43b858b5fb57ea4fe', 'No', '2019-11-08 14:59:39', 'asd'),
(13, 'kayes', '1@gmail.com', 'male', 12, '123', 'asd', '4d5904b6c0cd026ebf8689fd541788f2', 'No', '2019-11-08 15:00:05', 'asd'),
(14, 'kayes', '2@gmail.com', 'male', 12, '123', '123', '893bb7199b5fb90d214dc62ab1d0df41', 'No', '2019-11-08 15:05:34', 'asd'),
(17, 'kayes', 'xa@gmail.com', 'male', 12, '123', '123', '8a2d7b15e4e8afb8b870117819d865aa', 'Yes', '2019-11-12 17:17:02', '123'),
(18, 'kayes', 'imrulkayes560@gmail.com', 'male', 22, '123', '123', 'd7266d29f6fc9d3e2b0975c5e39c3039', 'Yes', '2019-11-10 16:16:19', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `students_info`
--

CREATE TABLE `students_info` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact_NO` varchar(50) NOT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Gender` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_info`
--

INSERT INTO `students_info` (`Name`, `Email`, `Contact_NO`, `Address`, `Gender`, `Password`) VALUES
('anik ', 'anikul@gmail.com', '0003', 'anik house', 'Male', 'anikul'),
('asd', 'as@gmaol.cpm', '132', 'asd', '', 'ads'),
('diana', 'asd2@gmail.com', '654165', 'asdas', 'Female', 'asd1as631d6as16d'),
('asd', 'asd@asd.com', '1364165', 'asdas', 'on', '1235'),
('mark', 'asdasd@gfmail.com', '12314', 'asdasd', 'Male', 'sadf0913j2'),
('Kayes', 'imrulkayes560@gmail.com', '01521330289', 'Dhaka', 'Male', '1234'),
('kashem', 'kashem@fmao.com', '1243', 'safdasdfsad', 'on', 'afebabfe'),
('mac', 'mac@gmail', '000', 'mac house', 'Male', 'mac'),
('asd', 'safda@gmail.com', '42556', 'erf', '', 'asda'),
('Shibly', 'shibly560@gmail.com', '01845742671', 'Dhaka', 'Male', 'shibly123');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `University_Initial` varchar(100) DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `Total_Time` varchar(100) DEFAULT NULL,
  `Total_Cost` varchar(100) DEFAULT NULL,
  `IEB_accredation` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`University_Initial`, `Subject`, `Total_Time`, `Total_Cost`, `IEB_accredation`) VALUES
('NSU', 'Architecture', '4 years', '103100', 'Yes'),
('NSU', 'BBA', '4 years', '73600', 'Yes'),
('NSU', 'CSE', '4 years', '78000', 'Yes'),
('NSU', 'EEE', '4 years', '752500', 'Yes'),
('NSU', 'Pharmacy', '5 years', '1180750', 'Yes'),
('NSU', 'LLB', '4 years', '801500', 'Yes'),
('AUST', 'Architecture', '4 years', '828400', 'Yes'),
('AUST', 'BBA', '4 years', '532980', 'Yes'),
('AUST', 'Civil', '4 years', '667600', 'Yes'),
('AUST', 'CSE', '4 years', '667600', 'Yes'),
('AUST', 'EEE', '4 years', '667600', 'Yes'),
('AIUB', 'Architecture', '4 years', '602500', 'Yes'),
('AIUB', 'BBA', '4 years', '671800', 'Yes'),
('AIUB', 'BBA', '4 years', '649000', 'Yes'),
('AIUB', 'BBA', '4 years', '653000', 'Yes'),
('AIUB', 'BBA', '4 years', '571800', 'Yes'),
('BRAC', 'Architecture', '5 years', '137900', 'Yes'),
('BRAC', 'BBA', '4 years', '850000', 'Yes'),
('BRAC', 'CSE', '4 years', '888500', 'Yes'),
('BRAC', 'Economics', '4 years', '790000', 'Yes'),
('BRAC', 'EEE', '	4 years', '886000', 'Yes'),
('BRAC', 'English', '4 years', '790000', 'Yes'),
('BRAC', 'Pharmacy', '4 years', '1057000', 'Yes'),
('BRAC', 'Microbiology', '4 years', '886000', 'Yes'),
('BRAC', 'LLB', '4 years', '880000', 'Yes'),
('BU', '	Architecture', '5 years', '517800', 'No'),
('BU', '	BBA', '4 years', '388000', 'No'),
('BU', '	CSE', '4 years', '459500', 'No'),
('BU', '	Economics', '4 years', '189000', 'No'),
('BU', '	EEE', '4 years', '405300', 'No'),
('BU', 'English', '4 year', '240000', 'No'),
('BU', '	Pharmacy', '	4 years', '476700', 'No'),
('BU', '	LLB', '	4 years', '315000', 'No'),
('DIU', 'Architecture', '5 years', '745500', 'Yes'),
('DIU', 'Civil Engineering', '4 years', '593500', 'Yes'),
('DIU', 'CSE', '4 years', '738800', 'Yes'),
('DIU', 'EEE', '	4 years', '673400', 'Yes'),
('DIU', 'English', '	4 years', '388500', 'Yes'),
('DIU', 'Pharmacy', '	4 years', '726000', 'Yes'),
('DIU', 'LLB', '4 years', '431000', 'Yes'),
('SMUCT', 'Architecture', '5 years', '560000', 'Yes'),
('SMUCT', 'BBA', '4 years', '236000', 'Yes'),
('SMUCT', 'CSE', '4 years', '260000', 'Yes'),
('SMUCT', 'English', '4 years', '188000', 'Yes'),
('SMUCT', 'LLB', '4 years', '212000', 'Yes'),
('BUBT', 'Architecture', '4 years', '650400', '	No'),
('BUBT', 'BBA', '	4 years', '401520', 'No'),
('BUBT', 'Economics', '	4 years', '221820', 'No'),
('BUBT', 'EEE', '4 years', '364865', 'No'),
('BUBT', 'English', '4 years', '234220', 'No'),
('BUBT', '	LLB', '4 years', '232340', 'No'),
('CUST', 'Architecture', '4 years', '770000', 'No'),
('CUST', 'BBA	', '4 years', '560000', 'No'),
('CUST', 'Civil Engineering', '	4 years', '620000', '	No'),
('CUST', 'CSE', '	4 years', '620000', 'No'),
('CUST', 'Economics', '4 years', '500000', 'No'),
('CUST', 'EEE', '	4 years', '620000', 'No'),
('CUST', 'English', '	4 years', '420000', 'No'),
('CUST', 'Pharmacy', '4 years', '680000', 'No'),
('CUST', 'LLB', '	4 years', '500000', 'No'),
('FIU', 'Architecture', '	5 years', '442500', 'No'),
('FIU', 'BBA	', '4 years', '314500', 'No'),
('FIU', 'Civil Engineering', '4 years', '380500', 'No'),
('FIU', 'CSE', '	4 years', '372500', 'No'),
('FIU', 'EEE	', '4 years', '355500', 'No'),
('FIU', 'English	', '4 years', '180500', 'No'),
('DIU', 'BBA	', '4 years', '605750', 'Yes'),
('NUBT', 'Architecture', '5 years', '448000', 'No'),
('NUBT', 'BBA', '	4 years', '361012', 'No'),
('NUBT', 'Civil Engineering', '	4 years', '342500', 'No'),
('NUBT', 'CSE', '	4 years', '357060', 'No'),
('NUBT', 'EEE', '	4 years', '406500', 'No'),
('NUBT', 'LLB', '	4 years', '296500', 'No'),
('PU', '	Architecture', '	5 years', '598000', 'Yes'),
('PU', '	BBA', '	4 years', '252600', 'Yes	'),
('PU', '	CSE', '	4 years', '276600', 'Yes'),
('PU', '	Economics', '4 years', '231000', 'Yes'),
('PU', '	EEE', '4 years', '35100', 'Yes'),
('PU', '	LLB', '4 years', '531000', 'Yes'),
('BUBT', 'CSE', '	4 years', '372890', 'No'),
('EWU', 'CSE', '4 years', '649000', 'Yes'),
('EWU', 'EEE', '4 years', '75000', 'Yes'),
('EWU', 'Economics', '4 years', '505620', 'Yes'),
('EWU', 'BBA', '4 years', '614820', 'Yes'),
('EWU', 'LLB', '4 years', '465420', 'Yes'),
('EWU', 'pharmacy', '4 years', '816920', 'Yes'),
('EWU', 'English', '4 years', '497220', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `University_Initial` varchar(100) NOT NULL,
  `University_Name` varchar(100) DEFAULT NULL,
  `Location` varchar(100) DEFAULT NULL,
  `Campus_Type` varchar(100) DEFAULT NULL,
  `Contact_No` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`University_Initial`, `University_Name`, `Location`, `Campus_Type`, `Contact_No`) VALUES
('AIUB', 'American International University of Bangladesh', 'Dhaka', 'Own', '01674565634'),
('AUST', 'Ahsanullah University of Science and Technology ', 'Dhaka', 'Own', '027440669'),
('BRACU', 'BRAC University', 'Dhaka', 'Own', '01710877221'),
('BU', 'Bangladesh University', 'Dhaka', 'Own', '01983035790'),
('BUBT', 'Bangladesh University of Business and Technology', 'Dhaka', 'Own', '01674565610'),
('CUST', 'Central University of Science and Technology', 'Dhaka', 'Own', '01674565635'),
('DIU', 'Daffodil International University', 'Dhaka', 'Own', '01515688613'),
('EWU', 'East West University', 'Dhaka', 'Own', '01674565630'),
('FIU', 'Fareast International University', 'Dhaka', 'Own', '01674565636'),
('NSU', 'North South University', 'Dhaka', 'Own', '0255668200'),
('NUBT', 'Northern University of Business and Technology Khulna', 'Khulna', 'Own', '01674565638'),
('PU', 'Premier University', 'Chittagong', 'Own', '01674565639'),
('SMUCT', 'Shanto Mariam University of Creative Technology', 'Dhaka', 'Own', '01627915721');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students_info`
--
ALTER TABLE `students_info`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
