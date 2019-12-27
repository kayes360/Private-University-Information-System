-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 09:24 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

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
-- Table structure for table `google_users`
--

CREATE TABLE `google_users` (
  `google_id` int(255) NOT NULL,
  `clint_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `google_email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `picture_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `google_users`
--

INSERT INTO `google_users` (`google_id`, `clint_id`, `name`, `last_name`, `google_email`, `gender`, `picture_link`) VALUES
(1, '103275574370206942493', 'Imrul', 'Kayes', 'chaosandkayes00@gmail.com', '', 'https://lh6.googleusercontent.com/-vVG5cLIrLrc/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3renNk9UQnDkD-NdfBaJEXzdNdaXwA/photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment_report`
--

CREATE TABLE `payment_report` (
  `report_no` int(11) NOT NULL,
  `studentName` varchar(255) NOT NULL,
  `studentEmail` varchar(255) NOT NULL,
  `studentPhone` varchar(255) NOT NULL,
  `paymentStatus` varchar(255) NOT NULL,
  `transcDate` varchar(255) NOT NULL,
  `transcStatus` varchar(255) NOT NULL,
  `cardType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_report`
--

INSERT INTO `payment_report` (`report_no`, `studentName`, `studentEmail`, `studentPhone`, `paymentStatus`, `transcDate`, `transcStatus`, `cardType`) VALUES
(6, 'Imrul Kayes', 'imrulkayes560@gmail.com', '0123456789', 'VALIDATED', '2019-12-28 01:39:59', 'SSLCZ_TEST_5e06628215ac3', 'BKASH-BKash');

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
(31, 'Imrul Kayes', 'imrulkayes560@gmail.com', 'male', 22, '0123456789', '123', 'ee2ff3c37a81a0da834269298dfcbb89', 'Yes', '2019-12-10 17:05:59', 'Dhaka');

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
-- Indexes for table `google_users`
--
ALTER TABLE `google_users`
  ADD PRIMARY KEY (`google_id`);

--
-- Indexes for table `payment_report`
--
ALTER TABLE `payment_report`
  ADD PRIMARY KEY (`report_no`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `google_users`
--
ALTER TABLE `google_users`
  MODIFY `google_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_report`
--
ALTER TABLE `payment_report`
  MODIFY `report_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
