-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 06:27 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline_reservatory`
--

-- --------------------------------------------------------

--
-- Table structure for table `airline`
--

CREATE TABLE `airline` (
  `airline_id` int(11) NOT NULL,
  `airline_name` varchar(20) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `flight_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `passenger_name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `passport_number` int(11) NOT NULL,
  `country` varchar(20) DEFAULT NULL,
  `fly_from` varchar(20) DEFAULT NULL,
  `fly_to` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `seat` int(11) DEFAULT NULL,
  `class` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`passenger_name`, `email`, `passport_number`, `country`, `fly_from`, `fly_to`, `date`, `seat`, `class`) VALUES
('ar', 'arifjawad@gmail.com', 25, 'bd', 'Dhaka', 'Dubai', '2019-06-27', 1, 'economy class'),
('alex', 'arifjawad@gmail.com', 121, 'bd', 'Dhaka', 'Delhi', '2019-07-27', 1, 'economy class'),
('ar', 'arifjawad@gmail.com', 1111, 'bd', 'Dhaka', 'Delhi', '2019-06-27', 1, 'business class'),
('arif jawad', 'arifjawad@gmail.com', 1212, 'bd', 'Dhaka', 'Dubai', '2019-04-27', 1, 'business class'),
('', 'arifjawad@gmail.com', 2526, 'bd', 'Dhaka', 'Delhi', '2019-06-27', 5, 'business class'),
('tahera', 'feef', 3434, 'zdfdaf', 'Dhaka', 'singapure', '2019-06-06', 1, 'economy class'),
('name', 'arifjawad@gmail.com', 5555, 'bd', 'name', '', '2019-05-27', 2, ''),
('arif', 'arif@gmail.com', 14578, 'bd', 'name', 'flyto', '2019-06-27', 12, 'name'),
('', '', 14579, '', 'name', 'flyto', '0000-00-00', 1, 'name'),
('', '', 14580, '', '', '', '0000-00-00', 0, ''),
('', '', 14581, '', 'Dhaka', 'singapure', '0000-00-00', 1, 'economy class'),
('', '', 14582, '', 'Dhaka', 'singapure', '0000-00-00', 1, 'economy class'),
('', '', 14583, '', 'Dhaka', 'singapure', '0000-00-00', 1, 'economy class'),
('', '', 14584, '', '', '', '0000-00-00', 0, ''),
('jaawd', 'arifjawad@gmail.com', 19550, 'bd', 'Dhaka', 'Delhi', '2019-05-27', 1, 'business class'),
('', '', 19551, '', 'Dhaka', 'singapure', '0000-00-00', 1, 'economy class'),
('', '', 19552, '', 'Dhaka', 'singapure', '0000-00-00', 1, 'economy class');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `c_id` int(11) NOT NULL,
  `country_name` varchar(20) DEFAULT NULL,
  `population` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `flight_id` int(11) NOT NULL,
  `departure_from` varchar(20) DEFAULT NULL,
  `arrival_to` varchar(10) DEFAULT NULL,
  `departure_time` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`flight_id`, `departure_from`, `arrival_to`, `departure_time`, `date`) VALUES
(1, 'Dhaka', 'singapure', '9.30am', '21-04-19'),
(2, 'Dhaka', 'Delhi', '10.30am', '21-04-19'),
(3, 'Dhaka', 'Dubai', '11.30am', '21-04-19'),
(4, 'Dhaka', 'canada', '1.30am', '22-04-19'),
(5, 'Dhaka', 'China', '3.30am', '22-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `passenger_name` varchar(10) NOT NULL,
  `passport_number` varchar(10) DEFAULT NULL,
  `country` varchar(10) DEFAULT NULL,
  `date_of_expiry` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`passenger_name`, `passport_number`, `country`, `date_of_expiry`) VALUES
('', '', '', NULL),
('arif', '1100', 'Bangladesh', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `seat_class_type` varchar(10) DEFAULT NULL,
  `ticket_remain` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `price`, `seat_class_type`, `ticket_remain`) VALUES
(101, 50000, 'business c', 26),
(102, 70000, 'economy cl', 26);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airline`
--
ALTER TABLE `airline`
  ADD PRIMARY KEY (`airline_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`passport_number`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`flight_id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`passenger_name`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airline`
--
ALTER TABLE `airline`
  MODIFY `airline_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `passport_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19553;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `flight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
