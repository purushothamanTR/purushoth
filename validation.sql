-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2018 at 08:10 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `validation`
--

CREATE TABLE IF NOT EXISTS `validation` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `phonenumber` int(30) NOT NULL,
  `language` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `validation`
--

INSERT INTO `validation` (`id`, `username`, `firstname`, `lastname`, `password`, `email`, `gender`, `phonenumber`, `language`, `state`, `district`, `city`) VALUES
(53, 'werwerwer', 'werwer', 'werwerwer', 'werwer', 'werwer@dsdf', 'Female', 2147483647, 'English,Tamil,Malayalam,', 'andhrapradesh', 'Aluva', 'Hyderbad central'),
(57, 'dfsdfsdfs', 'fsdfsdfs', 'fsdfsdf', 'sdfsdfsdf', 'sdfsdfsdf@sfsdf', 'Male', 2147483647, 'English,Tamil,', 'tamilnadu', 'Chennai', 'Aluva central'),
(58, 'werwerwer', 'werwer', 'werwerwer', 'werwer', 'werwer@dsdf', 'Female', 2147483647, 'English,Tamil,Malayalam,', 'andhrapradesh', 'Chennai', 'Chennai central'),
(61, 'gdfgdfg', 'dfgdfg', 'fgdfgdf', 'dfg', 'dfgdfgdfg@asdasd', 'Male', 2147483647, 'Tamil,', 'tamilnadu', 'Chennai', 'Chennai central'),
(62, '', '', '', '', '', '', 0, '', '', '', ''),
(63, '', '', '', '', '', '', 0, '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
