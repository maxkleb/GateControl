-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2014 at 10:48 PM
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
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `salt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`username`, `password`, `email`, `salt`) VALUES
('mama', '27d357b304e146729eba03064b0dba88e7db77966d4b9285771b7251c2d04d7b', 'dckncs@kdc.cf', 'd50'),
('pituh', '38905fbc3f98a0a0255f4ddb322ebc3c45f918aebd5bbb68b199be700a5d42c5', 'dckncs@kdc.cf', 'ef5');

-- --------------------------------------------------------

--
-- Table structure for table `requesttable`
--

CREATE TABLE IF NOT EXISTS `requesttable` (
  `requestID` int(11) NOT NULL,
  `userID` text NOT NULL,
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
(0, 'q', 'q', 'q', 'q', '', '', '2014-03-30 21:03:32', '', '', 'wait'),
(1, 'w', 'w', 'w', 'w', '', '', '2014-03-30 21:03:48', '', '', 'wait'),
(2, 'wq', 'wq', 'qw', 'qw', 'qw', '', '2014-03-30 21:03:55', '', '', 'wait'),
(3, '', 'w', 'qw', 'qw', 'qw', 'qw', '2014-03-30 21:04:15', '', 'qw', 'wait');

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
('max', 'c601a219f66fbc4e3ea9d938cb9141497549bce609329dcaa95632eba1a2a043', 'admin', '998'),
('q', '719eceed0bd171972ae475334c03902cec7314237f90b8f2d79f332ed8b651a9', 'admin', 'c27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
