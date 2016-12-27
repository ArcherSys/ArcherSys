-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2016 at 06:45 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acoserver_acoserver`
--

-- --------------------------------------------------------

--
-- Table structure for table `currentdesktopapplications`
--

CREATE TABLE `currentdesktopapplications` (
  `ID` int(11) NOT NULL,
  `window_name` text NOT NULL,
  `windowclass` text NOT NULL,
  `window_contents` text NOT NULL,
  `icon` text NOT NULL,
  `title` text NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currentdesktopapplications`
--

INSERT INTO `currentdesktopapplications` (`ID`, `window_name`, `windowclass`, `window_contents`, `icon`, `title`, `username`) VALUES
(1, 'explorer', 'explorer', '', 'folder', 'Files', 'weldon.henson');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `currentdesktopapplications`
--
ALTER TABLE `currentdesktopapplications`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `currentdesktopapplications`
--
ALTER TABLE `currentdesktopapplications`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
