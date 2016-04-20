-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2015 at 02:45 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
CREATE TABLE IF NOT EXISTS profile 
(uderid int(10),
 fname varchar(20),
 lname varchar(20),
 dob varchar(20),
 address varchar(20),
 phone int (12)
 )

CREATE TABLE IF NOT EXISTS `users` (

  `user_id` int(5) NOT NULL AUTO_INCREMENT,
`userid` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'shampa', 'shampa.paul.1117@gmail.com', '202cb962ac59075b964b07152d234b70');