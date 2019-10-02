-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 03:21 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `type` varchar(20) NOT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `address`, `type`, `lat`, `lng`) VALUES
(1, 'Mokshaayurveda', 'Patan,Kathmandu', 'Therapy', 27.682964, 85.314537),
(2, 'Greenheart Therapy Center', 'Thamel,Kathmandu', 'Therapy', 27.716484, 85.311874),
(3, 'Manual Therapy and Painrelief Center', 'Patan,Kathmandu', 'college', 27.675091, 85.301216),
(4, 'Nepal Hypnosis', 'Dhalku,Kathmandu', 'Therapy', 27.717630, 85.334122),
(5, 'Ananda Therapy center', 'Kalanki,Kathmandu', 'Therapy', 27.694536, 85.281021),
(6, 'Beachway Therapy Center', '	\r\nHattiban,Lalitpur', 'Therapy', 27.650370, 85.334419),
(7, 'Children''s Therapy Centre', 'Sundhara,Kathmandu', 'Therapy', 27.699335, 85.312386),
(8, 'Happyending Therapy Cente', 'Kalimati,Kathmandu', 'school', 27.699150, 85.297142);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
