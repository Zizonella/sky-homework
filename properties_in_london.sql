-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 05, 2020 at 06:38 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `properties_in_london`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `email`, `number`, `first_name`, `last_name`) VALUES
(1, 'johnsmith@gmail.com', '07653299321', 'John', 'Smith'),
(2, 'annedavies@gmail.com', '06542198743', 'Anne', 'Davies'),
(3, 'jackpeters@gmail.com', '05431077103', 'Jack', 'Peters'),
(4, 'gemmajones@gmail.com', '09855416547', 'Gemma', 'Jones'),
(5, 'tombrown@gmail.com', '02876743672', 'Tom', 'Brown');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `number`, `email`) VALUES
(1, 'Kareena', 'Kapoor', '05744189412', 'kareenakapoor@gmail.com'),
(2, 'Kajol', 'Devani', '06744186437', 'kajoldevani@gmail.com'),
(3, 'Rajah', 'Patel', '03456367848', 'rajahpatel@gmail.com'),
(4, 'Umeet', 'Shah', '02348658026', 'umeetshah@gmail.com'),
(5, 'Chandni', 'Bassi', '09897876583', 'chandnibassi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `region_id` tinyint(4) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `bedrooms` tinyint(4) NOT NULL,
  `bathrooms` tinyint(4) NOT NULL,
  `type_id` tinyint(4) NOT NULL,
  `has_garden` varchar(10) NOT NULL,
  `has_parking` varchar(10) NOT NULL,
  `sold` varchar(10) NOT NULL,
  `asking_price` int(10) NOT NULL,
  `region_foreign_key` tinyint(4) NOT NULL,
  `type_foreign_key` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `region_id`, `postcode`, `bedrooms`, `bathrooms`, `type_id`, `has_garden`, `has_parking`, `sold`, `asking_price`, `region_foreign_key`, `type_foreign_key`) VALUES
(1, 1, 'TN75QP', 1, 1, 1, 'No', 'Yes', 'No', 125000, 1, 1),
(2, 2, 'BE63AB', 3, 2, 2, 'Yes', 'Yes', 'Yes', 529000, 2, 2),
(3, 3, 'PS81YR', 2, 1, 3, 'Yes', 'No', 'No', 312000, 3, 3),
(4, 4, 'KW59RS', 2, 2, 4, 'No', 'Yes', 'No', 410000, 4, 4),
(5, 5, 'LC62XN', 1, 1, 5, 'No', 'No', 'Yes', 217000, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id`, `name`) VALUES
(1, 'North'),
(2, 'East'),
(3, 'South'),
(4, 'West'),
(5, 'Central');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `agent_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `agent_foreign_key` int(11) NOT NULL,
  `customer_foreign_key` int(11) NOT NULL,
  `property_foreign_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id`, `date`, `agent_id`, `customer_id`, `property_id`, `price`, `agent_foreign_key`, `customer_foreign_key`, `property_foreign_key`) VALUES
(1, '2015-11-14 16:38:01', 1, 1, 1, 125000, 1, 1, 1),
(2, '2016-09-08 13:14:09', 2, 2, 2, 529000, 2, 2, 2),
(3, '2017-05-27 16:38:01', 3, 3, 3, 312000, 3, 3, 3),
(4, '2018-08-13 16:38:01', 4, 4, 4, 410000, 4, 4, 4),
(5, '2019-02-13 09:50:04', 5, 5, 5, 217000, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` tinyint(4) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `type`) VALUES
(1, 'Flat'),
(2, 'House'),
(3, 'Cottage'),
(4, 'Bungalow'),
(5, 'Terrace');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region_foreign_key` (`region_foreign_key`),
  ADD KEY `type_foreign_key` (`type_foreign_key`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agent_foreign_key` (`agent_foreign_key`),
  ADD KEY `customer_foreign_key` (`customer_foreign_key`),
  ADD KEY `property_foreign_key` (`property_foreign_key`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`type_foreign_key`) REFERENCES `type` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `sale_ibfk_1` FOREIGN KEY (`agent_foreign_key`) REFERENCES `agent` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sale_ibfk_2` FOREIGN KEY (`customer_foreign_key`) REFERENCES `agent` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sale_ibfk_3` FOREIGN KEY (`property_foreign_key`) REFERENCES `property` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
