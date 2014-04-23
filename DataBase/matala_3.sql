-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2014 at 08:25 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `matala_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `approvedtable`
--

CREATE TABLE IF NOT EXISTS `approvedtable` (
  `RequestID` int(11) NOT NULL,
  `userID` int(9) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `task` text NOT NULL,
  `carNumber` varchar(9) NOT NULL,
  `model` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApprovedBy` text NOT NULL,
  `phoneNumber` text NOT NULL,
  `status` text NOT NULL,
  `approved number` int(11) NOT NULL,
  PRIMARY KEY (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approvedtable`
--

INSERT INTO `approvedtable` (`RequestID`, `userID`, `firstName`, `lastName`, `task`, `carNumber`, `model`, `date`, `ApprovedBy`, `phoneNumber`, `status`, `approved number`) VALUES
(0, 111222333, 'Moti', 'Geva', 'Lector', '222444', 'BMW', '2014-04-23 20:02:01', 'Chief Officer', '0523334554', 'Approved', 0),
(2, 900999444, 'Alexander', 'Domoshnicky', 'Lector', '203034', 'Mercedes', '2014-04-23 20:03:43', 'Chief Officer', '0543589888', 'Approved', 0),
(3, 999998812, 'Sivan', 'Koen', 'Student', '443344', 'Suzuki', '2014-04-23 20:05:09', 'Chief Officer', '0502332433', 'Approved', 0),
(5, 321768695, 'Alexey', 'Gukov', 'Student', '333999', 'porshe', '2014-04-23 20:07:19', 'Chief Officer', '0523438977', 'Approved', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blacklist`
--

CREATE TABLE IF NOT EXISTS `blacklist` (
  `userID` varchar(9) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blacklist`
--

INSERT INTO `blacklist` (`userID`, `firstName`, `lastName`, `reason`) VALUES
('666777888', 'Vladimir', 'Putin', '');

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE IF NOT EXISTS `journal` (
  `userID` text NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `carNumber` text NOT NULL,
  `model` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `approvedBy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`userID`, `firstName`, `lastName`, `carNumber`, `model`, `date`, `approvedBy`) VALUES
('111222333', 'Moti', 'Geva', '222444', 'BMW', '2014-04-23 20:17:35', ''),
('303333333', 'Silvan', 'Lansberg', '122112', 'Subaru', '2014-04-23 20:18:40', 'Chief'),
('111222333', 'Moti', 'Geva', '222444', 'BMW', '2014-04-23 20:23:11', 'Chief');

-- --------------------------------------------------------

--
-- Table structure for table `requesttable`
--

CREATE TABLE IF NOT EXISTS `requesttable` (
  `requestID` int(11) NOT NULL,
  `userID` int(9) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `task` text NOT NULL,
  `carNumber` text NOT NULL,
  `model` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `approvedBy` text NOT NULL,
  `phoneNumber` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`date`),
  UNIQUE KEY `requestID` (`requestID`),
  UNIQUE KEY `requestID_2` (`requestID`),
  KEY `requestID_3` (`requestID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requesttable`
--

INSERT INTO `requesttable` (`requestID`, `userID`, `firstName`, `lastName`, `task`, `carNumber`, `model`, `date`, `approvedBy`, `phoneNumber`, `status`) VALUES
(0, 111222333, 'Moti', 'Geva', 'Lector', '222444', 'BMW', '2014-04-23 20:02:01', 'Chief Officer', '0523334554', 'Approved'),
(1, 999888777, 'Avi', 'Arad', 'Student', '102020', 'Toyota', '2014-04-23 20:02:57', 'Chief Officer', '0523333999', 'Rejected'),
(2, 900999444, 'Alexander', 'Domoshnicky', 'Lector', '203034', 'Mercedes', '2014-04-23 20:03:43', 'Chief Officer', '0543589888', 'Approved'),
(3, 999998812, 'Sivan', 'Koen', 'Student', '443344', 'Suzuki', '2014-04-23 20:05:09', 'Chief Officer', '0502332433', 'Approved'),
(4, 666777888, 'Vladimir', 'Putin', 'Student', '111111', 'Lada', '2014-04-23 20:05:59', 'Chief Officer', '0509988331', 'Blocked'),
(5, 321768695, 'Alexey', 'Gukov', 'Student', '333999', 'porshe', '2014-04-23 20:07:19', 'Chief Officer', '0523438977', 'Approved'),
(6, 589457689, 'David', 'Aron', 'Student', '999888', 'Shkoda', '2014-04-23 20:08:11', '', '0529898777', 'wait'),
(7, 499499499, 'Maor', 'Grev', 'Student', '393399', 'Fiat', '2014-04-23 20:12:07', '', '0524782882', 'wait'),
(8, 898989899, 'Ami', 'Magen', 'Student', '233223', 'Subaru', '2014-04-23 20:13:01', '', '0577887781', 'wait');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `type` text NOT NULL,
  `salt` text NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Users table';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `type`, `salt`) VALUES
('admin', 'a16a1d765a140fead88c25e2cf5565bf58c8e013e6fe4e5fa568e212d98a8d02', 'admin', '178'),
('chief', '75339f814e2aed24e99d9ba8ec91b7467842090b8d4adfe2cd0a33d5caca731e', 'chief', '5f2'),
('gate', '038abcca167f2aa49f420e2a99dce5741a8393e45bf5275db4bffbc081510ae3', 'gate', 'e2c'),
('secretary', 'e85b6b5fdc5005bc4e48551eac254931ef7de316019c71d34022162bc1bafa93', 'secretary', '52d');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
