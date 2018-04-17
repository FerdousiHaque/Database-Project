-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 02:14 PM
-- Server version: 5.1.33-community
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `garden`
--

-- --------------------------------------------------------

--
-- Table structure for table `pick`
--

CREATE TABLE `pick` (
  `Date` date NOT NULL,
  `Amount` int(11) NOT NULL,
  `Weight` double DEFAULT NULL,
  `PlantID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pick`
--

INSERT INTO `pick` (`Date`, `Amount`, `Weight`, `PlantID`) VALUES
('2005-08-16', 12, 2.32, 0),
('2005-08-18', 28, 1.02, 0),
('2005-08-28', 18, 4.58, 2),
('2005-08-22', 52, 12.96, 2),
('2005-08-22', 15, 3.84, 3),
('2005-07-16', 23, 0.52, 4);

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `PlantID` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`PlantID`, `Name`) VALUES
(0, 'Carrot'),
(1, 'Beet'),
(2, 'Corn'),
(3, 'Tomoto'),
(4, 'Radish'),
(5, 'Potato');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pick`
--
ALTER TABLE `pick`
  ADD PRIMARY KEY (`PlantID`,`Amount`),
  ADD KEY `fk_Pick_Plant_idx` (`PlantID`);

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`PlantID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pick`
--
ALTER TABLE `pick`
  ADD CONSTRAINT `fk_Pick_Plant` FOREIGN KEY (`PlantID`) REFERENCES `plant` (`PlantID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
