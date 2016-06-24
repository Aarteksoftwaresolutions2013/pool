-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2016 at 07:39 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pool`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `confirm_password` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `confirm_password`) VALUES
(1, '$email', '$pass', '$c_pass'),
(2, 'dfs', 'gdfg', 'dfg'),
(3, 'sadf', 'sfd', 'fsdfsdf'),
(4, 'sdfa', 'sdf', 'sdf'),
(5, 'fgh', 'fgh', 'gfh'),
(6, 'sdfa', 'sadf', 'sdf'),
(7, 'sdfa', 'sdf', 'sdf'),
(8, 'sdfsd', 'fsdfsd', 'fsdf'),
(9, 'sdf', 'sdf', 'sdf'),
(10, 'dsfg', 'dfg', 'dfg'),
(11, 'harshita', 'harshita', 'harshita');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE IF NOT EXISTS `personal_info` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) NOT NULL,
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(55) NOT NULL,
  `state` varchar(55) NOT NULL,
  `zip` varchar(55) NOT NULL,
  `phone_no` int(12) NOT NULL,
  `method_contact` varchar(55) NOT NULL,
  `time_contact` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `login_id`, `first_name`, `last_name`, `address`, `city`, `state`, `zip`, `phone_no`, `method_contact`, `time_contact`) VALUES
(1, 0, 'dfsg', 'dfg', 'dfg', 'dsfg', 'dfg', 'dsfg', 134235, '4', '3'),
(2, 0, 'qwer', 'qwer', 'wqer', 'qwer', 'qwer', 'wqr', 0, '3', '4'),
(3, 0, 'sdgf', 'dfgsdg', 'dfgsdfg', 'sdfg', 'dfgdfg', 'dfgdsfg', 0, '3', '3'),
(4, 0, 'sdfg', 'dsfg', 'sdfg', 'sdfg', 'sdfgs', 'dfg', 1231435, '2', '3'),
(5, 0, 'sdfg', 'dfg', 'dfg', 'sdfg', 'sdfg', 'sdfg', 0, '2', '3'),
(6, 0, 'sdfh', 'dsg', 'sdfg', 'sdfg', 'dfg', 'sdfg', 0, '4', '4'),
(7, 0, 'hdf', 'hdfhg', 'fdgh', 'dfghdfgh', 'fgh', 'dfgh', 0, '4', '3'),
(8, 0, 'asd', 'sdf', 'asdf', 'asdf', 'sdf', 'asdf', 0, '2', '3'),
(9, 0, 'sdfg', 'dfg', 'sdfg', 'sdfg', 'dfg', 'sdfg', 0, 'Preferred Method of Contact', 'Preferred Time of Contact'),
(10, 0, 'ewrt', 'ewrt', 'ewrt', 'ert', 'ert', '', 0, 'Preferred Method of Contact', 'Preferred Time of Contact'),
(11, 11, 'dsf', 'gasd', 'fsdf', '', '', '', 0, 'Preferred Method of Contact', 'Preferred Time of Contact'),
(12, 0, 'harshita', 'harshita', '', '', '', '', 0, 'Preferred Method of Contact', 'Preferred Time of Contact');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
