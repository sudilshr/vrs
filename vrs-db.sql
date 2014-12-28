-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2014 at 04:11 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cihbs-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('d77d3239606dae30efe1d04ecd0e095e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:29.0) Gecko/20100101 Firefox/29.0', 1402934643, 'a:1:{s:7:"user_id";s:1:"1";}');

-- --------------------------------------------------------

--
-- Table structure for table `vrs_location`
--

CREATE TABLE IF NOT EXISTS `vrs_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `zone` varchar(50) NOT NULL,
  `start_location_id` int(11) NOT NULL,
  `total_km_from_start` int(11) NOT NULL,
  `road_type_id` int(11) NOT NULL,
  `default_rate` int(11) NOT NULL,
  `disabled` varchar(10) NOT NULL DEFAULT 'FALSE',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `vrs_location`
--

INSERT INTO `vrs_location` (`id`, `name`, `street`, `city`, `district`, `zone`, `start_location_id`, `total_km_from_start`, `road_type_id`, `default_rate`, `disabled`) VALUES
(1, 'Kathmandu', '', '', 'Kathmandu', 'Bagmati', 1, 1, 0, 1, 'FALSE'),
(2, 'Pokhara', '', '', 'Pokhara', 'Gandaki', 1, 200, 0, 0, 'FALSE'),
(3, 'Chitwan', '', '', 'Chitwan', 'Narayanghat', 1, 175, 0, 0, 'FALSE'),
(4, 'Biratnagar', '', '', 'Biratnagar', '', 1, 541, 0, 0, 'FALSE'),
(5, 'Janakput', '', '', 'Janakpur', 'Janakpur', 1, 375, 0, 0, 'FALSE'),
(6, 'Lumbini', '', '', 'Lumbini', 'Lumbini', 1, 315, 0, 0, 'FALSE');

-- --------------------------------------------------------

--
-- Table structure for table `vrs_payment_gateway`
--

CREATE TABLE IF NOT EXISTS `vrs_payment_gateway` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gateway` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL,
  `information` text NOT NULL,
  `disabled` varchar(10) NOT NULL DEFAULT 'FALSE',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `vrs_payment_gateway`
--


-- --------------------------------------------------------

--
-- Table structure for table `vrs_personal_details`
--

CREATE TABLE IF NOT EXISTS `vrs_personal_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `linked_user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `disabled` varchar(10) NOT NULL DEFAULT 'FALSE',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vrs_personal_details`
--

INSERT INTO `vrs_personal_details` (`id`, `linked_user_id`, `name`, `phone`, `email`, `disabled`) VALUES
(1, 0, 'Nitesh Rijal', '9841012040', 'nitesh.rijal@gmail.com', 'FALSE');

-- --------------------------------------------------------

--
-- Table structure for table `vrs_reservation`
--

CREATE TABLE IF NOT EXISTS `vrs_reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_date` varchar(30) NOT NULL,
  `to_date` varchar(30) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `pickup_location_id` int(11) NOT NULL,
  `destination_location_id` int(11) NOT NULL,
  `payment_mode_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `advance` int(11) NOT NULL,
  `booking_status` varchar(20) NOT NULL,
  `personal_details_id` int(11) NOT NULL,
  `disabled` varchar(10) NOT NULL DEFAULT 'FALSE',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vrs_reservation`
--

INSERT INTO `vrs_reservation` (`id`, `from_date`, `to_date`, `vehicle_id`, `pickup_location_id`, `destination_location_id`, `payment_mode_id`, `total`, `tax`, `advance`, `booking_status`, `personal_details_id`, `disabled`) VALUES
(1, '09 June 2014 - 9:25 AM', '10 June 2014 - 11:25 AM', 3, 1, 2, 1, 30750, 13, 0, 'PENDING', 1, 'FALSE');

-- --------------------------------------------------------

--
-- Table structure for table `vrs_settings`
--

CREATE TABLE IF NOT EXISTS `vrs_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `vrs_settings`
--

INSERT INTO `vrs_settings` (`id`, `title`, `value`) VALUES
(1, 'DEFAULT_LOCATION_ID', '1'),
(2, 'PER_KM_CHARGE_NPR', '25'),
(3, 'OFF_ROAD_EXTRA_PERCENT', '2.5');

-- --------------------------------------------------------

--
-- Table structure for table `vrs_user`
--

CREATE TABLE IF NOT EXISTS `vrs_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `disabled` varchar(10) NOT NULL DEFAULT 'FALSE',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `vrs_user`
--

INSERT INTO `vrs_user` (`id`, `role`, `username`, `email`, `password`, `disabled`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'FALSE'),
(2, 'admin', 'demo', 'demo', '89e495e7941cf9e40e6980d14a16bf023ccd4c91', 'FALSE');

-- --------------------------------------------------------

--
-- Table structure for table `vrs_vehicle`
--

CREATE TABLE IF NOT EXISTS `vrs_vehicle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `veh_type_id` int(20) NOT NULL,
  `veh_vendor_id` int(20) NOT NULL,
  `veh_model` varchar(50) NOT NULL,
  `veh_reg_no` varchar(50) NOT NULL,
  `veh_fuel_type` varchar(20) NOT NULL,
  `veh_mileage` varchar(10) NOT NULL,
  `veh_img_url` varchar(100) NOT NULL,
  `disabled` varchar(10) NOT NULL DEFAULT 'FALSE',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `vrs_vehicle`
--

INSERT INTO `vrs_vehicle` (`id`, `veh_type_id`, `veh_vendor_id`, `veh_model`, `veh_reg_no`, `veh_fuel_type`, `veh_mileage`, `veh_img_url`, `disabled`) VALUES
(1, 1, 2, 'Fiesta', 'BA 2 CHA 1234', 'Diesel', '15KM/L', '1-1-2-ford-fiesta-sedan.jpg', 'FALSE'),
(2, 1, 6, 'Sonata', 'BA 8 CHA 3645', 'petrol', '', '2-1-6-hyundai-sonata-2013.jpg', 'FALSE'),
(3, 3, 6, 'Tucson', 'BA 7 CHA 9874', 'diesel', '', '3-3-6-hyundai-tucson-2011.jpg', 'FALSE'),
(4, 4, 1, 'Coaster', 'BA 2 PA 112', 'diesel', '', '4-4-1-toyota-coaster-deluxe.jpg', 'FALSE'),
(5, 3, 4, 'X-trail', 'BA 8 CHA 432', 'diesel', '', '5-3-4-nissan-xtrail.jpg', 'FALSE'),
(6, 1, 4, 'Sunny', 'BA 8 CHA 1432', 'diesel', '', '6-1-4-nissan-sunny.jpg', 'FALSE'),
(7, 3, 7, 'Pajero Sport', 'BA 7 CHA 989', 'diesel', '', '7-3-7-mitsubishi-pajero-sport.jpg', 'FALSE');

-- --------------------------------------------------------

--
-- Table structure for table `vrs_vehicle_type`
--

CREATE TABLE IF NOT EXISTS `vrs_vehicle_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_title` varchar(25) NOT NULL,
  `type_desc` text NOT NULL,
  `seats_count` int(11) NOT NULL,
  `price_rate_ratio` int(11) NOT NULL,
  `disabled` varchar(10) NOT NULL DEFAULT 'FALSE',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `vrs_vehicle_type`
--

INSERT INTO `vrs_vehicle_type` (`id`, `type_title`, `type_desc`, `seats_count`, `price_rate_ratio`, `disabled`) VALUES
(1, 'Car', 'Car', 4, 1, 'FALSE'),
(2, 'Van', 'Van', 6, 2, 'FALSE'),
(3, 'Jeep', 'SUV', 5, 3, 'FALSE'),
(4, 'Bus', 'Bus', 30, 3, 'FALSE');

-- --------------------------------------------------------

--
-- Table structure for table `vrs_vehicle_vendor`
--

CREATE TABLE IF NOT EXISTS `vrs_vehicle_vendor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_title` varchar(20) NOT NULL,
  `vendor_desc` text NOT NULL,
  `disabled` varchar(10) NOT NULL DEFAULT 'FALSE',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `vrs_vehicle_vendor`
--

INSERT INTO `vrs_vehicle_vendor` (`id`, `vendor_title`, `vendor_desc`, `disabled`) VALUES
(1, 'Toyota', 'Toyota Motor Corporation', 'FALSE'),
(2, 'Ford', 'Ford', 'FALSE'),
(3, 'Kia', 'Kia Motors Corporation', 'FALSE'),
(4, 'Nissan', 'Nissan', 'FALSE'),
(5, 'Tata', 'Tata', 'FALSE'),
(6, 'Hyundai', 'Hyundai', 'FALSE'),
(7, 'Mitsubishi', 'Mitsubishi', 'FALSE');
