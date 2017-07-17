-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 05:21 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `mark-entry`
--

CREATE TABLE IF NOT EXISTS `mark-entry` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark-entry`
--

INSERT INTO `mark-entry` (`username`, `password`) VALUES
('admin', 'VVHSS123');

-- --------------------------------------------------------

--
-- Table structure for table `personal-details`
--

CREATE TABLE IF NOT EXISTS `personal-details` (
  `name` varchar(20) NOT NULL,
  `admn-no` varchar(10) NOT NULL,
  `fathers-name` varchar(20) NOT NULL,
  `fathers-occupation` varchar(30) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phone-number` varchar(15) NOT NULL,
  `photo` varchar(10) NOT NULL,
  PRIMARY KEY (`admn-no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal-details`
--

INSERT INTO `personal-details` (`name`, `admn-no`, `fathers-name`, `fathers-occupation`, `address`, `phone-number`, `photo`) VALUES
('Kandhavelu.M', '1008', 'MuthuVelan.M', 'Farmer', '259.A Ammaleri Road Dadagapatty gate Salem-6', '9994265607', 'image2'),
('Gnanavel.S', '121', 'Shankar.S', 'Buissness', '259.A Ammaleri Road Dadagapatty gate Salem-6', '9994265607', 'image3'),
('Vinith.V', '123', 'Vasudevan.M', 'Buissness', '259.A Ammaleri Road Dadagapatty gate Salem-6', '9994265607', 'image4'),
('Deepan.G', '1234', 'K.Gopal', 'Driver', '259.A Ammaleri Road Dadagapatty gate Salem-6', '9994265607', 'image1'),
('Aarthi.V', '567', 'Vasudevan.M', 'Buissness', '259.A Ammaleri Road Dadagapatty gate Salem-6', '9994265607', 'image5'),
('Santhosh.G', '707', 'K.Gopal', 'Driver', '259.A Ammaleri Road Dadagapatty gate Salem-6', '9994265607', 'image0');

-- --------------------------------------------------------

--
-- Table structure for table `school-officials`
--

CREATE TABLE IF NOT EXISTS `school-officials` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school-officials`
--

INSERT INTO `school-officials` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tenth-std`
--

CREATE TABLE IF NOT EXISTS `tenth-std` (
  `name` varchar(15) NOT NULL,
  `admn-no` varchar(15) NOT NULL,
  `class` varchar(10) NOT NULL,
  `section` varchar(5) NOT NULL,
  `type-of-test` varchar(20) NOT NULL,
  `tamil` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `maths` int(11) NOT NULL,
  `science` int(11) NOT NULL,
  `social` int(11) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenth-std`
--

INSERT INTO `tenth-std` (`name`, `admn-no`, `class`, `section`, `type-of-test`, `tamil`, `english`, `maths`, `science`, `social`, `total`) VALUES
('Santhosh.G', '707', 'VIII', 'C', 'UNIT-TEST-1', 90, 90, 100, 100, 100, 480),
('Deepan.G', '1234', 'VI', 'A', 'UNIT-TEST-1', 90, 90, 100, 100, 100, 470),
('Santhosh.G', '707', 'VIII', 'C', 'UNIT-TEST-2', 80, 80, 80, 100, 100, 440),
('Deepan.G', '1234', 'VI', 'A', 'UNIT-TEST-2', 90, 90, 90, 90, 90, 450),
('Santhosh.G', '707', 'VIII', 'C', 'WEEKLY-TEST-1', 100, 100, 100, 98, 98, 498),
('Deepan.G', '1234', 'VIII', 'C', 'WEEKLY-TEST-1', 100, 100, 100, 100, 100, 500),
('Gnanavel.S', '121', 'VIII', 'C', 'WEEKLY-TEST-1', 100, 100, 100, 100, 70, 470),
('Gnanavel.S', '121', 'VIII', 'C', 'UNIT-TEST-1', 100, 100, 100, 100, 100, 500),
('Gnanavel.S', '121', 'VIII', 'C', 'UNIT-TEST-2', 100, 100, 100, 100, 100, 500),
('Kandhavelu.M', '1008', 'VIII', 'A', 'UNIT-TEST-1', 100, 100, 100, 100, 100, 500),
('Kandhavelu.M', '1008', 'VIII', 'A', 'UNIT-TEST-2', 100, 100, 100, 100, 100, 500),
('Kandhavelu.M', '121', 'VIII', 'A', 'WEEKLY-TEST-1', 100, 100, 100, 100, 100, 500);

-- --------------------------------------------------------

--
-- Table structure for table `twelve-std`
--

CREATE TABLE IF NOT EXISTS `twelve-std` (
  `name` varchar(20) NOT NULL,
  `admn-no` varchar(15) NOT NULL,
  `class` varchar(10) NOT NULL,
  `section` varchar(5) NOT NULL,
  `type-of-test` varchar(20) NOT NULL,
  `tamil` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `maths` int(11) NOT NULL,
  `physics` int(11) NOT NULL,
  `chemistry` int(11) NOT NULL,
  `bio/cse` int(11) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `twelve-std`
--

INSERT INTO `twelve-std` (`name`, `admn-no`, `class`, `section`, `type-of-test`, `tamil`, `english`, `maths`, `physics`, `chemistry`, `bio/cse`, `total`) VALUES
('Vinith.V', '123', 'XII', 'B1', 'WEEKLY-TEST-1', 198, 198, 198, 198, 198, 198, 1190),
('Aarthi.V', '567', 'XII', 'C1', 'WEEKLY-TEST-1', 198, 198, 198, 198, 198, 198, 1190),
('Vinith.V', '123', 'XII', 'B1', 'WEEKLY-TEST-2', 198, 198, 198, 198, 198, 198, 1190),
('Aarthi.V', '567', 'XII', 'C1', 'WEEKLY-TEST-1', 198, 198, 196, 196, 196, 198, 1184);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
