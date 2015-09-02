-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2015 at 12:00 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `acoserver_acoserver`
--

-- --------------------------------------------------------

--
-- Table structure for table `cplive_games`
--

CREATE TABLE IF NOT EXISTS `cplive_games` (
`id` int(255) NOT NULL COMMENT 'ID of installed game',
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL COMMENT 'Name of thr Game',
  `Path` text CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL COMMENT 'Link to Game'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cplive_games`
--
ALTER TABLE `cplive_games`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cplive_games`
--
ALTER TABLE `cplive_games`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT COMMENT 'ID of installed game';
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
