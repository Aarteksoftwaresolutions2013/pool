-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2016 at 02:59 PM
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
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `create_pool`
--

CREATE TABLE IF NOT EXISTS `create_pool` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `image` varchar(100) NOT NULL,
  `pool_close_date` varchar(55) NOT NULL,
  `pool_amount` varchar(55) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `min_pool_amount` varchar(55) NOT NULL,
  `option_services` varchar(55) NOT NULL,
  `method_of_contact` varchar(55) NOT NULL,
  `pool_funds` varchar(55) NOT NULL,
  ` project_identifier` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `create_pool`
--

INSERT INTO `create_pool` (`id`, `login_id`, `title`, `image`, `pool_close_date`, `pool_amount`, `bank_name`, `min_pool_amount`, `option_services`, `method_of_contact`, `pool_funds`, ` project_identifier`, `created`) VALUES
(1, 1, 'harshita', '620_12.png', '2016-06-17', 'asdf', 'harshita', 'sdf', 'Both', '2', 'option1', 'YAFWT2', '2016-06-22 10:42:11'),
(2, 1, 'asdf', '331_11.png', '2016-06-15', 'sdf', 'harshita', 'sdf', 'Option 2', '3', 'option1', 'AT9ZBR', '2016-06-22 11:01:06'),
(3, 1, 'asdf', '342_11.png', '2016-06-15', 'sdf', 'harshita', 'sdf', 'Option 2', '3', 'option1', '6E7W83', '2016-06-22 11:12:35'),
(4, 1, 'asdf', '145_11.png', '2016-06-15', 'sdf', 'harshita', 'sdf', 'Option 2', '3', 'option1', 'SJ.DV_', '2016-06-22 11:29:47'),
(5, 1, 'zxcv', '188_capgemini.png', 'zxcv', 'xzcv', 'harshita', 'cv', 'Option 2', '3', 'option1', 'LTP1YI', '2016-06-22 11:37:02'),
(6, 1, 'qwer', '256_12.png', '2016-06-03', 'wqer', 'asda', 'wer', 'Option 2', '2', 'option1', 'PC4TEK', '2016-06-22 11:40:08'),
(7, 1, 'sdf', '813_12.png', '2016-06-16', 'asdf', 'harshita', 'sdf', 'None', '2', 'option1', 'TV8RE/', '2016-06-22 11:46:52'),
(8, 1, 'wer', '739_14.png', '2016-06-17', 'wer', 'harshita', 'wer', 'None', '3', 'option1', 'UHDWME', '2016-06-22 12:05:40'),
(9, 1, 'dfg', '544_13.png', '2016-06-17', 'dfg', 'harshita', 'dfg', 'Option 2', '2', 'option1', '2TRSME', '2016-06-22 12:10:33'),
(10, 1, 'dfg', '715_11.png', '2016-06-15', 'sdf', 'harshita', 'sdf', 'None', '2', 'option1', 'A6439D', '2016-06-23 06:18:42'),
(11, 3, 'asd', '133_10.png', '2016-06-15', 'sd', 'sdf', 'fsdf', 'Option 2', '2', 'option1', '1786M^', '2016-06-24 09:43:57'),
(12, 1, 'dsg', '135_15.png', '2016-06-15', 'sd', 'zcxv', 'sd', 'Option 2', '2', 'option1', '6J0VN7', '2016-06-30 07:29:15'),
(13, 1, 'gfh', '501_avalancheinfotech.png', '2016-06-16', 'df', 'sdf', 'ghfgh', 'Option 2', '3', 'option1', 'V2BLB0', '2016-06-30 07:36:43'),
(14, 1, 'geet', '208_20.png', '2016-07-10', '3', 'harshita', '3', 'Both', '3', 'option1', 'LZ^LQ.', '2016-07-02 08:04:53'),
(15, 1, 'suri', '428_15.png', '2016-07-01', '12', 'harshita', '123', 'Option 2', '3', 'option1', 'CM2D_F', '2016-07-02 08:06:00'),
(16, 1, 'aaa', '525_15.png', '2016-07-05', '3', 'zcxv', '3', 'Option 2', '2', 'option1', '3OHD5V', '2016-07-02 09:56:32'),
(17, 1, 'bbbb', '331_16.png', '2016-06-30', 's', 'asda', 's', 'Option 2', '3', 'option1', '6WTA^4', '2016-07-02 09:57:06'),
(18, 1, 'hii', '163_sir1.jpg', '2016-07-28', '100', 'sdf', '70', 'Option 2', '3', 'option1', '.YOT^W', '2016-07-22 10:21:53'),
(19, 1, 'qwe', '651_sprite.png', '2016-07-30', '44', 'asda', '22', 'Option 1', '3', 'option1', 'DRLM8B', '2016-07-22 10:27:50'),
(20, 4, 'sf', '159_sprite_x.png', '2016-08-31', '20', 'sdf', '10', 'Option 1', '3', 'option1', 'Y.QJ82', '2016-07-22 12:26:06'),
(21, 4, 'wer', '567_sprite_y.png', '2016-07-29', '10', 'sdf', '10', 'Option 1', '3', 'option1', 'VJHF^X', '2016-07-22 12:28:35');

-- --------------------------------------------------------

--
-- Table structure for table `create_pool_popup`
--

CREATE TABLE IF NOT EXISTS `create_pool_popup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) NOT NULL,
  `account_nickname` varchar(255) NOT NULL,
  `name_of_bank` varchar(55) NOT NULL,
  `routing_number` varchar(100) NOT NULL,
  `account_number` varchar(100) NOT NULL,
  `account_type` varchar(100) NOT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `create_pool_popup`
--

INSERT INTO `create_pool_popup` (`id`, `login_id`, `account_nickname`, `name_of_bank`, `routing_number`, `account_number`, `account_type`, `created`) VALUES
(1, 1, 'harshita', 'harshita', 'harshita', 'harshita', 'harshita', '2016-06-22 10:41:51'),
(2, 1, 'asda', 'sdf', 's', 's', 's', '2016-06-22 10:42:06'),
(3, 1, 'sdf', 'sdf', 'sdf', 'sdf', 'Checking', '2016-06-24 09:34:32'),
(4, 1, 'zcxv', 'fsdf', 'x', 'x', 'Savings', '2016-06-24 09:34:50'),
(5, 3, 'sdf', 'sdf', 'sdf', 'sdf', 'Checking', '2016-06-24 09:43:55'),
(6, 4, 'sdf', 'sdf', 'd', 'd', 'Checking', '2016-07-22 12:25:57');

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
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` varchar(55) NOT NULL,
  `pool_amount` varchar(250) NOT NULL,
  `card` varchar(200) NOT NULL,
  `card_number` varchar(200) NOT NULL,
  `csc` varchar(200) NOT NULL,
  `expiration_date` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip` varchar(200) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `project_id`, `pool_amount`, `card`, `card_number`, `csc`, `expiration_date`, `first_name`, `last_name`, `address`, `city`, `state`, `zip`, `created`) VALUES
(4, 'CM2D_F', '50', 'Select Card', '', '', '01', '', '', ' Address', '', '', '', '2016-07-19 13:33:50'),
(5, 'CM2D_F', '20', 'Select Card', '', '', '01', '', '', ' Address', '', '', '', '2016-07-20 05:27:34'),
(6, 'CM2D_F', '10', 'Select Card', '', '', '01', '', '', ' Address', '', '', '', '2016-07-20 05:31:16'),
(7, 'CM2D_F', '20', 'Select Card', '', '', '01', '', '', ' Address', '', '', '', '2016-07-20 05:32:18'),
(8, 'CM2D_F', '50', 'Select Card', '', '', '01', '', '', ' Address', '', '', '', '2016-07-20 05:42:12'),
(9, 'CM2D_F', '10', 'Select Card', '', '', '01', '', '', ' Address', '', '', '', '2016-07-20 05:43:31'),
(10, 'CM2D_F', '10', 'Select Card', '', '', '01', '', '', ' Address', '', '', '', '2016-07-20 05:45:14'),
(11, 'LTP1YI', '10', 'Select Card', '', '', '01', '', '', ' Address', '', '', '', '2016-07-20 07:31:00'),
(12, 'LTP1YI', '5', 'Select Card', '', '', '01', '', '', ' Address', '', '', '', '2016-07-22 10:14:10'),
(13, 'LTP1YI', '5', 'Select Card', '', '', '01', '', '', ' Address', '', '', '', '2016-07-22 10:15:54'),
(14, '.YOT^W', '5', 'Select Card', '', '', '01', '', '', ' Address', '', '', '', '2016-07-22 10:22:26'),
(15, 'DRLM8B', '5', 'Select Card', '', '', '01', '', '', ' Address', '', '', '', '2016-07-22 10:54:07'),
(16, 'DRLM8B', '5', 'Select Card', '', '', '01', '', '', ' Address', '', '', '', '2016-07-22 11:02:28'),
(17, 'Y.QJ82', '10', 'Select Card', '', '', '01', '', '', ' Address', '', '', '', '2016-07-22 12:27:02'),
(18, 'DRLM8B', '10', 'Select Card', '', '', '01', '', '', ' Address', '', '', '', '2016-07-25 07:08:34'),
(19, 'LTP1YI', '10', 'Select Card', '', '', '01', '', '', ' Address', '', '', '', '2016-07-25 07:08:45'),
(20, 'LTP1YI', '5', 'Select Card', '', '', '01', '', '', ' Address', '', '', '', '2016-07-25 07:47:01'),
(21, 'VJHF^X', '5', 'Select Card', '', '', '01', '', '', ' Address', '', '', '', '2016-07-25 07:51:28'),
(22, 'DRLM8B', '10', 'Select Card', '', '', '01', '', '', ' Address', '', '', '', '2016-07-25 08:00:46'),
(23, 'VJHF^X', '5', 'Select Card', '', '', '01', '', '', ' Address', '', '', '', '2016-07-25 08:10:52'),
(24, 'VJHF^X', '10', 'Select Card', '', '', '01', '', '', ' Address', '', '', '', '2016-07-25 09:09:55'),
(25, 'DRLM8B', '10', 'Select Card', '', '', '01', '', '', ' Address', '', '', '', '2016-07-25 09:10:34');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE IF NOT EXISTS `personal_info` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(55) NOT NULL,
  `state` varchar(55) NOT NULL,
  `zip` varchar(55) NOT NULL,
  `phone_no` int(12) NOT NULL,
  `method_contact` varchar(55) NOT NULL,
  `time_contact` varchar(55) NOT NULL,
  `first_time_login` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `email`, `password`, `first_name`, `last_name`, `address`, `city`, `state`, `zip`, `phone_no`, `method_contact`, `time_contact`, `first_time_login`, `created`) VALUES
(1, 'harshita@gmail.com', '123', 'harshita', 'harshitaaaaa', 'harshita', 'harshita', 'harshita', 'harshita', 1241241244, '3', '3', 1, '2016-06-23 10:22:07'),
(2, 'ankita@gmail.com', '123', 'ankita', 'ankita', 'ankita', 'ankita', 'ankita', 'ankita', 1241241248, '4', '2', 1, '2016-06-23 10:19:08'),
(3, 'geet@gmail.com', '111', 'geet', 'geet', 'gggg', 'ggggg', 'ggg', 'ggg', 2147483647, '2', '3', 1, '2016-06-23 10:16:59'),
(4, 'nidhi@gmail.com', '111', '', '', '', '', '', '', 0, '', '', 0, '2016-06-24 09:28:05');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
