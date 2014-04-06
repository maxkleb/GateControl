-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2014 at 12:36 AM
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
  `approved number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approvedtable`
--

INSERT INTO `approvedtable` (`RequestID`, `userID`, `firstName`, `lastName`, `task`, `carNumber`, `model`, `date`, `ApprovedBy`, `phoneNumber`, `status`, `approved number`) VALUES
(2, 0, 'wq', 'qw', 'qw', 'qw', '', '2014-03-30 21:00:00', 'Chief Officer', '', 'Approved', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blacklist`
--

CREATE TABLE IF NOT EXISTS `blacklist` (
  `userID` text NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blacklist`
--

INSERT INTO `blacklist` (`userID`, `firstName`, `lastName`, `reason`) VALUES
('wq', 'wq', 'qw', ''),
('', 'w', 'qw', ''),
('111', 'max', 'kakas', ''),
('1', '', '', ''),
('0', 'q', 'q', ''),
('111', '', '', ''),
('111', '111', '111', '');

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
('0', 'wq', 'qw', 'qw', '', '2014-04-05 01:33:54', 'Chief');

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
(0, 0, 'q', 'q', 'q', '', '', '2014-03-30 21:03:32', 'Chief Officer', '', 'Blocked'),
(1, 0, 'w', 'w', 'w', '', '', '2014-03-30 21:03:48', 'Chief Officer', '', 'Approved'),
(2, 0, 'wq', 'qw', 'qw', 'qw', '', '2014-03-30 21:03:55', 'Chief Officer', '', 'Approved'),
(3, 0, 'w', 'qw', 'qw', 'qw', 'qw', '2014-03-30 21:04:15', 'Chief Officer', 'qw', 'Blocked'),
(4, 111, 'max', 'kakas', '', '', '', '2014-03-31 20:27:03', 'Chief Officer', '', 'Blocked'),
(5, 0, '', '', '', '', '', '2014-03-31 21:08:39', 'Chief Officer', '', 'Rejected'),
(6, 0, '', '', '', '', '', '2014-03-31 21:08:47', '', '', 'wait'),
(7, 111, 'kakas', '', '', '', '', '2014-03-31 21:09:34', 'Chief Officer', '', 'Approved'),
(8, 111, '', '', '', '', '', '2014-03-31 21:11:29', 'Chief Officer', '', 'Approved'),
(9, 111, '', '', '', '', '', '2014-03-31 21:14:26', 'Chief Officer', '', 'Blocked'),
(10, 111, '', '', '', '', '', '2014-03-31 21:14:56', '', '', 'wait'),
(11, 1, '', '', '', '', '', '2014-03-31 21:15:09', '', '', 'wait'),
(12, 111, '111', '111', '', '', '', '2014-03-31 21:15:17', 'Chief Officer', '', 'Approved'),
(13, 1, '', '', '', '', '', '2014-03-31 21:17:26', 'Chief Officer', '', 'Blocked'),
(14, 1, '', '', '', '', '', '2014-03-31 21:18:05', '', '', 'wait'),
(15, 1, '', '', '', '', '', '2014-03-31 21:19:31', '', '', 'wait');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `type` text NOT NULL,
  `salt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Users table';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `type`, `salt`) VALUES
('w', 'ffc66ece8a1abf12b601c8d4e1d7340bd2c5b1f1237b9dc69afe7ce2783e26e6', 'r', 'bb7'),
('q', '719eceed0bd171972ae475334c03902cec7314237f90b8f2d79f332ed8b651a9', 'admin', 'c27'),
('www', '095d23ee9041277180a878b6687822eed2d5449cb275e62eb57d4700789bde97', 'secretary', '0e8'),
('', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
