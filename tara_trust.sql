-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2015 at 11:08 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tara_trust`
--
CREATE DATABASE IF NOT EXISTS `tara_trust` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tara_trust`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
-- Creation: Apr 11, 2015 at 05:37 PM
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `admin`
--

TRUNCATE TABLE `admin`;
-- --------------------------------------------------------

--
-- Table structure for table `assigned`
--
-- Creation: Apr 11, 2015 at 09:16 AM
--

DROP TABLE IF EXISTS `assigned`;
CREATE TABLE IF NOT EXISTS `assigned` (
  `child_id` int(11) NOT NULL,
  `volunteer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `assigned`
--

TRUNCATE TABLE `assigned`;
-- --------------------------------------------------------

--
-- Table structure for table `children`
--
-- Creation: Apr 11, 2015 at 08:53 AM
--

DROP TABLE IF EXISTS `children`;
CREATE TABLE IF NOT EXISTS `children` (
`child_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `place` int(11) NOT NULL,
  `work` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Street children' AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `children`
--

TRUNCATE TABLE `children`;
-- --------------------------------------------------------

--
-- Table structure for table `places`
--
-- Creation: Apr 11, 2015 at 07:23 AM
--

DROP TABLE IF EXISTS `places`;
CREATE TABLE IF NOT EXISTS `places` (
`place_id` int(11) NOT NULL,
  `place` varchar(20) NOT NULL,
  `taluka` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Information about places' AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `places`
--

TRUNCATE TABLE `places`;
-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--
-- Creation: Apr 11, 2015 at 08:41 PM
-- Last update: Apr 11, 2015 at 08:41 PM
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id` varchar(24) NOT NULL,
  `last_active` int(10) unsigned NOT NULL,
  `contents` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `sessions`
--

TRUNCATE TABLE `sessions`;
-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--
-- Creation: Apr 11, 2015 at 09:09 AM
--

DROP TABLE IF EXISTS `volunteer`;
CREATE TABLE IF NOT EXISTS `volunteer` (
`volunteer_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `place` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `volunteer`
--

TRUNCATE TABLE `volunteer`;
--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `assigned`
--
ALTER TABLE `assigned`
 ADD PRIMARY KEY (`child_id`,`volunteer_id`);

--
-- Indexes for table `children`
--
ALTER TABLE `children`
 ADD PRIMARY KEY (`child_id`), ADD KEY `name` (`name`,`place`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
 ADD PRIMARY KEY (`place_id`), ADD KEY `taluka` (`taluka`,`district`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_active` (`last_active`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
 ADD PRIMARY KEY (`volunteer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
MODIFY `child_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
MODIFY `volunteer_id` int(11) NOT NULL AUTO_INCREMENT;SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
