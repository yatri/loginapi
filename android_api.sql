-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 11, 2015 at 11:06 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `android_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL auto_increment,
  `full_name` varchar(50) NOT NULL,
  `district` int(11) NOT NULL,
  `vdc` int(11) NOT NULL,
  `ward_no` int(11) NOT NULL,
  `tole` varchar(100) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY  (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `comment`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `use_id` int(11) NOT NULL auto_increment,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`use_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`use_id`, `user_name`, `password`, `first_name`, `last_name`, `email`, `created_date`) VALUES
(1, 'ram', '4641999a7679fcaef2df0e26d11e3c72', 'Ram Chandra', 'Devkota', 'ram_chandra@gmail.com', '2015-09-21 14:11:54'),
(2, 'yatri', 'ravindra', 'Ravindra', 'Dhakal', 'dhakalravindra@yahoo.com', '2015-09-22 15:15:35'),
(3, 'Sunil', 'b0b86080c976aa7651bffe0801644d74', 'Sunil', 'Kunwar', 'Sunil', '2015-09-22 15:44:22'),
(4, 'Ravindra', 'c10a2e063952a0f12dd3b900960ba7a2', 'Ravindra', 'Ddd', 'Ravindra', '2015-09-22 15:47:35'),
(5, 'Aa', '4124bc0a9335c27f086f24ba207a4912', 'As', 'Aa', 'As', '2015-09-22 15:51:37'),
(6, 'Ff', '21ad0bd836b90d08f4cf640b4c298e7c', 'Gg', 'Gg', 'Gg', '2015-09-22 15:55:06'),
(7, 'As', '4124bc0a9335c27f086f24ba207a4912', 'Aa', 'Aa', 'Aa', '2015-09-22 15:58:58'),
(8, 'Maaaa', 'e6787d8c17c5f1a9504d1efaf8c155b8', 'Maaa', 'Maa', 'Maaa', '2015-09-22 17:28:32'),
(9, 'Mbbb', 'e6787d8c17c5f1a9504d1efaf8c155b8', 'Mccc', 'Maa', 'Mccc', '2015-09-22 17:33:22'),
(10, 'dhoti', 'c24fd507cd40a3f97e115817148a5538', 'Dhoti', 'Dhoti', 'Dhoti', '2015-09-22 17:37:36'),
(11, 'sujzn', '93e05a041435c083504c986de85caba1', 'Sujan', 'Sujan', 'Sujan', '2015-09-22 17:39:39'),
(12, 'bishal123', '827ccb0eea8a706c4c34a16891f84e7b', 'Bishal', 'Pradhan', 'Bishal', '2015-09-29 13:10:36'),
(13, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Admin', 'Admin', '2015-10-01 17:41:10');
