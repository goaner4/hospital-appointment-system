-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2015 at 12:48 
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `slau_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
`id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(13) NOT NULL,
  `problem` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `fname`, `email`, `phone`, `problem`) VALUES
(1, 'ahmed said alix', '$ahmed@gmail.com', 0, ''),
(2, 'bacri', '$sex@gmail.com', 2145222, ''),
(3, 'mohamed bacri', '$louknamse21@gmail.com', 22222, 'bcjbej ');

-- --------------------------------------------------------

--
-- Table structure for table `apointment`
--

CREATE TABLE IF NOT EXISTS `apointment` (
`id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `age` int(10) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `contact` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(14) NOT NULL,
  `humain` varchar(50) NOT NULL,
  `nature` mediumtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apointment`
--

INSERT INTO `apointment` (`id`, `fname`, `lname`, `age`, `adress`, `contact`, `email`, `date`, `humain`, `nature`) VALUES
(1, '', '', 0, '', 0, '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_dt`
--

CREATE TABLE IF NOT EXISTS `contact_dt` (
`id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `phone` int(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_dt`
--

INSERT INTO `contact_dt` (`id`, `fname`, `phone`, `email`, `message`) VALUES
(1, '', 0, '', ''),
(2, 'ahmed said alix', 2145222, 'wani@gmail.com', 'nbj'),
(3, 'ahmed said alix', 0, '', ''),
(4, 'issfi', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'wani', 'wani@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `apointment`
--
ALTER TABLE `apointment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_dt`
--
ALTER TABLE `contact_dt`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `apointment`
--
ALTER TABLE `apointment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_dt`
--
ALTER TABLE `contact_dt`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
