-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 08, 2022 at 05:40 PM
-- Server version: 5.7.31
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `event_id` bigint(20) NOT NULL COMMENT 'primary key of event_master table',
  `event_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `events_master`
--

DROP TABLE IF EXISTS `events_master`;
CREATE TABLE IF NOT EXISTS `events_master` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `recurrence` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0-not recurring, 1- recurring',
  `recurrence_type` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1' COMMENT '0-inactive,1-active,-1-delete',
  `created_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events_master`
--

INSERT INTO `events_master` (`id`, `title`, `start_date`, `end_date`, `recurrence`, `recurrence_type`, `status`, `created_time`, `modified_time`) VALUES
(1, 'Event1', '0000-00-00', '0000-00-00', 1, 'Every Week', 0, '2022-02-08 17:24:50', '2022-02-08 22:57:50'),
(2, 'Event2', '2022-02-08', '2022-02-12', 1, 'Every First Monday of the Month', 1, '2022-02-08 17:27:09', '2022-02-08 17:27:09'),
(3, 'Event3', '2022-02-09', '2022-03-24', 1, 'Every Third Sunday of the Month', 1, '2022-02-08 17:28:09', '2022-02-08 17:28:09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
