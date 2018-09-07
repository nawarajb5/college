-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2018 at 04:15 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `software`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `sno` int(11) NOT NULL,
  `faculty` varchar(20) DEFAULT NULL,
  `topic` varchar(20009) DEFAULT NULL,
  `notice` varchar(767) DEFAULT NULL,
  `date` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`sno`, `faculty`, `topic`, `notice`, `date`) VALUES
(1, 'bba', 'CMAT', 'CMAT exam will be held om August 30', 'August 23 2018 '),
(3, 'bba', 'Mock test postponed', 'CMAT mock test that was going to held this saturday is postponed due to technical issues', 'August 23 2018 '),
(4, 'bim', 'Class start', 'Class starts from tomorrow', 'August 23 2018 '),
(5, 'bba', 'CMAT preperation class', 'Please come tommorrow for CMAt preperation class', 'August 23 2018 '),
(7, 'bba', 'College remains Closed', 'Due to BIMSTEC summit the college remains closed in 15th and 16th Bhadra', 'August 24 2018 ');

-- --------------------------------------------------------

--
-- Table structure for table `bbaentrydata`
--

CREATE TABLE `bbaentrydata` (
  `sno` int(11) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `schooling` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bbaentrydata`
--

INSERT INTO `bbaentrydata` (`sno`, `fname`, `lname`, `schooling`, `email`, `phone`) VALUES
(29, 'Nawaraj', 'Basnet', 'government', 'bnfnrj1@gmail.com', '9860103278'),
(30, 'Aarati', 'Basnet', 'private', 'aaru@gmail.com', '9860920883'),
(31, 'Susan', 'Khatri', 'government', 'susan@gmail.com', '9860103276');

-- --------------------------------------------------------

--
-- Table structure for table `bimentrydata`
--

CREATE TABLE `bimentrydata` (
  `sno` int(11) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `schooling` varchar(20) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bimentrydata`
--

INSERT INTO `bimentrydata` (`sno`, `fname`, `lname`, `schooling`, `email`, `phone`) VALUES
(4, 'Nawaraj', 'Basnet', 'private', 'bnfnrj1@gmail.com', '9860103279');

-- --------------------------------------------------------

--
-- Table structure for table `feeadmin`
--

CREATE TABLE `feeadmin` (
  `faculty` varchar(3) DEFAULT NULL,
  `Admission` varchar(20) DEFAULT NULL,
  `second` varchar(20) DEFAULT NULL,
  `third` varchar(20) DEFAULT NULL,
  `per` varchar(20) DEFAULT NULL,
  `total` varchar(20) DEFAULT NULL,
  `rule1` varchar(600) DEFAULT NULL,
  `rule2` varchar(600) DEFAULT NULL,
  `rule3` varchar(600) DEFAULT NULL,
  `rule4` varchar(600) DEFAULT NULL,
  `rule5` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feeadmin`
--

INSERT INTO `feeadmin` (`faculty`, `Admission`, `second`, `third`, `per`, `total`, `rule1`, `rule2`, `rule3`, `rule4`, `rule5`) VALUES
('BIM', '50000', '20000', '30000', '48000', '436000', '1.Payment should be made on time														\r\n													', '2.Please pay via bank														\r\n													', '3.Scholarship is allowed only to tution fee of 35000													', '4. Discount are only provided to admission cost														\r\n													', '5.Discount schemes provided to government school are only after test.											'),
('BBA', '80000', '50000', '30000', '60000', '580000', '1.Payment should be made on time														\r\n													', '2.Please pay via bank														\r\n													', '3.Scholarship is allowed only to tution fee of 35000													', '4. Discount are only provided to admission cost														\r\n																										', '5.Discount schemes provided to government school are only after test.											');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `test_no` int(11) NOT NULL,
  `q_no` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `opta` varchar(500) NOT NULL,
  `optb` varchar(500) NOT NULL,
  `optc` varchar(500) NOT NULL,
  `optd` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`test_no`, `q_no`, `question`, `opta`, `optb`, `optc`, `optd`, `answer`) VALUES
(1, 1, 'dasdasd', 'hello', 'dasda', 'dsada', 'dasda', 'hello'),
(1, 2, 'What is your name?', 'NAwaraj', 'nattu', 'nabin', 'navaraj', 'navaraj'),
(1, 3, 'What is the name of Prime minister of India?What is the name of Prime minister of India?', 'KP oli', 'Modi', 'musarraf', 'tsering', 'Modi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `notice` (`notice`);

--
-- Indexes for table `bbaentrydata`
--
ALTER TABLE `bbaentrydata`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `bimentrydata`
--
ALTER TABLE `bimentrydata`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `feeadmin`
--
ALTER TABLE `feeadmin`
  ADD UNIQUE KEY `faculty` (`faculty`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `bbaentrydata`
--
ALTER TABLE `bbaentrydata`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `bimentrydata`
--
ALTER TABLE `bimentrydata`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
