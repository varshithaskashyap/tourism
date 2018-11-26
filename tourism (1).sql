-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 02:56 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminusername` varchar(50) NOT NULL,
  `adminpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminusername`, `adminpassword`) VALUES
('varshitha', 'varshu'),
('aishwarya', 'aishu');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(50) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `food` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `food`) VALUES
(1, 'Banglore', 'MTR'),
(2, 'Mysore', 'Mysore park'),
(3, 'Manglore', 'Fish');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `message`) VALUES
('varshitha', 'varshithakashyap@gmail.com', 'hi i like this very much and helpful'),
('varshi', 'varshithakashyap@gmail.com', 'hi i like this very much and helpful'),
('varshi', 'varshithakashyap@gmail.com', 'hi i like this very much and helpful'),
('varshi', 'varshithakashyap@gmail.com', 'hi i like this very much and helpful'),
('varshi', 'varshithakashyap@gmail.com', 'hi i like this very much and helpful'),
('varshi', 'varshithakashyap@gmail.com', 'hi i like this very much and helpful'),
('srinidhi', 'shreenidhi.kashyap26@gmail.com', 'its beautiful..... !');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `city_id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`city_id`, `name`) VALUES
(2, 'Vinayaka Mylari'),
(2, 'Oyster Bay'),
(2, 'Hotel RRR'),
(2, 'Tiger Trail'),
(2, 'Anima Madhva Bhavan'),
(2, 'Spring'),
(2, 'Mahesh Prasad'),
(1, 'The Black Pearl'),
(1, 'Byg Brewski Brewing Company'),
(1, 'Biergarten'),
(1, 'Brew and Barbeque - A Microbrewery Pub'),
(1, 'AB\'s - Absolute Barbecues'),
(3, 'Pallkhi'),
(3, 'Hotel Narayana'),
(3, 'Giri Manja’s'),
(3, 'Maharaja'),
(3, 'Gajalee'),
(3, 'Madhuvans Village'),
(3, 'vars');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `city_id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`city_id`, `name`) VALUES
(2, 'Devaraja Market'),
(2, 'Guru Sweets Mart'),
(2, 'The Heritage'),
(2, ' Mall of Mysore'),
(2, 'Garuda Mall'),
(2, 'Badsha Stores'),
(1, 'Commercial Street'),
(1, 'Jayanagar 4th Block'),
(1, 'Brigade Road'),
(1, 'Majestic Market and National Market'),
(1, 'Malleswaram'),
(1, 'MG Road'),
(3, 'Central Market\r\n'),
(3, 'City Center Mall'),
(3, 'Empire Mall'),
(3, 'Old Charm Shopping: Hampankatta');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `city_id` int(11) NOT NULL,
  `spot` text NOT NULL,
  `time` text NOT NULL,
  `bus_dist` text NOT NULL,
  `hospital` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`city_id`, `spot`, `time`, `bus_dist`, `hospital`) VALUES
(1, 'banglore palace', '10:00 AM', '163.9 kms', 'govt dispensary hospital'),
(1, 'lalbagh ', '6:00 am ', '6.1kms ', 'south city '),
(1, 'cubbon park ', ' 6:00 am', '4kms ', 'fortis hospital'),
(3, 'pikula nisargadama ', '9:30 AM ', '12kms ', 'primary heath centre  bondel'),
(3, 'tannirbhavi beach ', '6:00 AM ', '12kms ', 'primary heath centre bondel'),
(3, 'gokarnatheswara temple', ' 6:00 AM ', '5kms ', 'KMC hospital'),
(2, 'mysore zoo ', '8:30 am ', '3kms ', 'Gopala gowda'),
(2, 'chamundeswari temple ', '7:30am ', '11.5kms ', 'SGS AYURVEDIC'),
(1, 'varshu', '', '', '');

--
-- Triggers `tour`
--
DELIMITER $$
CREATE TRIGGER `tour` BEFORE DELETE ON `tour` FOR EACH ROW BEGIN
INSERT INTO `tour_copy`
SET `city_id`=OLD.`city_id`,
`spot`=OLD.`spot`,
`time`=OLD.`time`,
`bus_dist`=OLD.`bus_dist`,
`hospital`=OLD.`hospital`;

    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tour_copy`
--

CREATE TABLE `tour_copy` (
  `city_id` int(11) DEFAULT NULL,
  `spot` text,
  `time` text,
  `bus_dist` text,
  `hospital` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_copy`
--

INSERT INTO `tour_copy` (`city_id`, `spot`, `time`, `bus_dist`, `hospital`) VALUES
(2, 'mysore palace', '10:30 A.M.', '3kms', 'k r ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
