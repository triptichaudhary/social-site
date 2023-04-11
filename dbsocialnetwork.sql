-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2019 at 02:39 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbsocialnetwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_contacts`
--

CREATE TABLE IF NOT EXISTS `add_contacts` (
  `id` bigint(20) NOT NULL DEFAULT '0',
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_contacts`
--

INSERT INTO `add_contacts` (`id`, `user_id`, `name`, `email`, `phone`) VALUES
(0, 17, 'Ashutosh Kumar', 'ashu@gmail.com', '9089878987'),
(0, 25, 'Rajeev Kumar', 'rajeev@gmail.com', '9099988787');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`, `name`) VALUES
(3, 'aditya', 'kumar', 'admin'),
(4, ' raj', 'kumar', 'admin'),
(5, 'prabhash', 'kumar', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `comment` varchar(200) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `status` smallint(6) DEFAULT '1',
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `user_id`, `date`, `status`) VALUES
(18, 'hi', 16, '2016-03-15 22:27:57', 1),
(19, 'whts up?', 16, '2016-03-21 13:34:55', 1),
(21, 'Zindagi Kuch Bhi Nahi Bus Bewafai Hai.\r\n', 18, '2016-03-28 15:04:41', 1),
(22, 'I LOVE YOU MAA', 19, '2016-03-28 15:48:53', 1),
(23, 'I Love You Papa.', 17, '2016-03-28 15:52:19', 1),
(24, 'Hi', 17, '2016-04-17 16:16:30', 1),
(25, 'hi', 20, '2016-04-26 16:23:42', 1),
(26, 'hi', 25, '2019-05-03 11:56:14', 1),
(27, 'hello', 25, '2019-05-03 11:56:19', 1),
(28, 'hi\r\n', 24, '2019-05-05 16:15:45', 1),
(29, 'hello', 24, '2019-05-05 16:15:50', 1),
(30, 'hi', 26, '2019-05-05 17:05:56', 1),
(31, 'hello', 26, '2019-05-05 17:06:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `freinds_list`
--

CREATE TABLE IF NOT EXISTS `freinds_list` (
  `friend_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `date` datetime DEFAULT NULL,
  `status` smallint(6) DEFAULT '0',
  PRIMARY KEY (`friend_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freinds_list`
--

INSERT INTO `freinds_list` (`friend_id`, `user_id`, `date`, `status`) VALUES
(16, 17, '2015-09-02 16:10:26', 0),
(17, 18, '2016-03-26 11:41:24', 0),
(18, 17, '2015-09-02 16:10:05', 0),
(19, 17, '2016-04-17 16:16:53', 0),
(19, 18, '2016-03-28 15:17:54', 0),
(19, 20, '2016-04-26 16:24:03', 0),
(23, 21, '2016-04-28 13:24:25', 0),
(24, 25, '2019-05-03 11:56:47', 0),
(24, 26, '2019-05-05 17:07:17', 0),
(25, 24, '2019-05-05 16:17:51', 0),
(25, 26, '2019-05-05 17:07:13', 0),
(26, 24, '2019-05-05 16:17:45', 0),
(26, 25, '2019-05-03 11:51:40', 0);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `img_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `img_path` varchar(200) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `status` smallint(6) DEFAULT '1',
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`img_id`, `img_path`, `comment`, `user_id`, `date`, `status`) VALUES
(27, 'img_f2016092508.jpg', '', 18, '2016-03-28 14:55:08', 1),
(28, 'img_f2016064104.jpg', '', 17, '2016-04-26 12:11:04', 1),
(29, 'img_f2019062437.jpg', '', 25, '2019-05-03 11:54:37', 1),
(30, 'img_f2019104505.jpg', '', 24, '2019-05-05 16:15:05', 1),
(33, 'img_f2019114001.jpg', '', 26, '2019-05-05 17:10:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `msg_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `sender_id` bigint(20) DEFAULT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `receiver_id` bigint(20) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `sender_id`, `sname`, `receiver_id`, `message`, `date`) VALUES
(61, 15, 'Hari Nath Gupta', 0, 'Miss You Papa', '2016-03-12'),
(62, 16, 'sandeep raj', 0, 'hi', '2016-03-26'),
(63, 18, 'Sandy', 0, 'Friendship Never Dies and Love Never Ends ', '2016-03-28'),
(64, 17, 'Sonu', 0, 'Yes...!!!', '2016-03-28'),
(65, 17, 'batan', 18, 'hi', '2016-04-17'),
(66, 17, 'batan', 0, 'hi', '2016-04-23'),
(67, 20, 'Shubham kumar', 0, 'hi', '2016-04-26'),
(68, 25, 'Aditya Kumar', 0, 'hi', '2019-05-03'),
(69, 25, 'Aditya Kumar', 0, 'hello', '2019-05-03'),
(70, 24, 'Raj Roushan Kumar', 0, 'hi', '2019-05-05'),
(71, 24, 'Raj Roushan Kumar', 0, 'hello', '2019-05-05'),
(72, 26, 'Prabhash Kumar Yadav', 0, 'hi', '2019-05-05'),
(73, 26, 'Prabhash Kumar Yadav', 0, 'hello', '2019-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `postcomments`
--

CREATE TABLE IF NOT EXISTS `postcomments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `comment_id` bigint(200) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `uname` varchar(200) DEFAULT NULL,
  `userid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `postcomments`
--

INSERT INTO `postcomments` (`id`, `comment_id`, `comment`, `date`, `uname`, `userid`) VALUES
(21, 15, 'All The Best', '2016-09-02 16:10:40', 'Hari Nath Gupta', 15);

-- --------------------------------------------------------

--
-- Table structure for table `regestration`
--

CREATE TABLE IF NOT EXISTS `regestration` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `contact_as` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `img_path` varchar(255) DEFAULT 'default.png',
  `status` smallint(6) DEFAULT '3',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `regestration`
--

INSERT INTO `regestration` (`id`, `name`, `dob`, `gender`, `phone`, `address`, `contact_as`, `email`, `password`, `img_path`, `status`) VALUES
(24, 'Raj Roushan Kumar', '11-07-1996', 'Male', '9090988776', 'Chapra', 'Chapra', 'raj@gmail.com', '12345', 'profile_f2019104411.jpg', 3),
(25, 'Aditya Kumar', '08-05-1996', 'Male', '9989787656', 'Chapra', 'Chapra', 'aditya@gmail.com', '123456', 'profile_f2019062458.jpg', 4),
(26, 'Prabhash Kumar Yadav', '10-05-1996', 'Male', '7717789876', 'Chapra', 'Chapra', 'prabhash@gmail.com', '1234567', 'profile_f2019113424.jpg', 3);
