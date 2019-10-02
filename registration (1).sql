-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 08:30 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `password`, `gender`) VALUES
(1, 'swarina', 'shakya', 'swarinasak43@gmail.com', '55555', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(10) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(250) NOT NULL,
  `centername` varchar(250) NOT NULL,
  `tname` varchar(250) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(5) NOT NULL,
  `transport` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `firstname`, `lastname`, `email`, `age`, `gender`, `address`, `centername`, `tname`, `date`, `time`, `transport`) VALUES
(2, 'rima', 'gupta', 'rima@gmail.com', 20, 'female', 'kalimati,kathmandu,nepal', 'HopeTherapyCenter', 'SpeechTherapy', '2018-09-08', '12', 'yes'),
(8, 'rita', 'shakya', 'swarinasak43@gmail.com', 45, 'female', 'kalimati,kathmandu,nepal', 'HopeTherapyCenter', 'NeuronTherapy', '2018-09-08', '2', 'yes'),
(9, 'swarina', 'shakya', 'swarinasak43@gmail.com', 20, 'female', 'kalimati,kathmandu,nepal', 'HopeTherapyCenter', 'Physiotherapy', '2018-12-05', '3', 'yes'),
(12, 'swarina', 'shakya', 'swarinasak43@gmail.com', 20, 'female', 'kalimati,kathmandu,nepal', 'HopeTherapyCenter', 'NeuronTherapy', '2018-02-02', '3', 'yes'),
(13, 'swarina', 'shakya', 'swarinasak43@gmail.com', 20, 'female', 'kalimati,kathmandu,nepal', 'HopeTherapyCenter', 'SpeechTherapy', '22/02/2019', '2', 'yes'),
(15, 'swarina', 'shakya', 'swarinasak43@gmail.com', 20, 'female', 'kalimati,kathmandu,nepal', 'HopeTherapyCenter', 'NeuronTherapy', '09/11/2018', '10', 'no'),
(16, 'swarina', 'shakya', 'swarinasak43@gmail.com', 20, 'female', 'kalimati,kathmandu,nepal', 'HopeTherapyCenter', 'SpeechTherapy', '08/12/2018', '6', 'yes'),
(17, 'swarina', 'shakya', 'swarinasak43@gmail.com', 20, 'female', 'kalimati,kathmandu,nepal', 'hopetherapycenter', 'SpeechTherapy', '08/16/2018', '10', 'yes'),
(19, 'rima', 'gupta', 'rima@gmail.com', 20, 'female', 'kalimati,kathmandu,nepal', 'hopetherapycenter', 'SpeechTherapy', '08/13/2018', '4', 'no'),
(20, 'swarina', 'shakya', 'swarinasak43@gmail.com', 20, 'female', 'kalimati,kathmandu,nepal', 'hopetherapycenter', 'SpeechTherapy', '08/13/2018', '4', 'yes'),
(21, 'swarina', 'shakya', 'swarinasak43@gmail.com', 20, 'female', 'kalimati,kathmandu,nepal', 'hopetherapycenter', 'SpeechTherapy', '08/15/2018', '6', 'yes'),
(22, 'swarina', 'shakya', 'swarinasak43@gmail.com', 45, 'female', 'kalimati,kathmandu,nepal', 'hopetherapycenter', 'SpeechTherapy', '08/14/2018', '4', 'yes'),
(23, 'swarina', 'shakya', 'swarinasak43@gmail.com', 20, 'female', 'kalimati,kathmandu,nepal', 'hopetherapycenter', 'SpeechTherapy', '08/13/2018', '5', 'yes'),
(24, 'swarina', 'shakya', 'swarinasak43@gmail.com', 20, 'female', 'kalimati,kathmandu,nepal', 'HopeTherapyCenter', 'Physiotherapy', '08/16/2018', '1', 'yes'),
(25, 'swarina', 'shakya', 'swarinasak43@gmail.com', 20, 'female', 'kalimati,kathmandu,nepal', 'HopeTherapyCenter', 'Speech Therapy', '08/16/2018', '3', 'no'),
(26, 'rima', 'gupta', 'rima@gmail.com', 20, 'female', 'kalimati,kathmandu,nepal', 'HopeTherapyCenter', 'Speech Therapy', '08/17/2018', '1', 'yes'),
(27, 'ram', 'gupta', 'rima@gmail.com', 40, 'male', 'kalimati,kathmandu,nepal', 'HopeTherapyCenter', 'Speech Therapy', '08/17/2018', '1', 'yes'),
(28, 'swarina', 'shakya', 'swarinasak43@gmail.com', 20, 'female', 'kalimati,kathmandu,nepal', 'HopeTherapyCenter', 'Speech Therapy', '08/16/2018', '3', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `surname` varchar(250) NOT NULL,
  `password` varchar(10) NOT NULL,
  `pass2` varchar(10) NOT NULL,
  `email` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `surname`, `password`, `pass2`, `email`, `dob`, `gender`) VALUES
(4, 'Ram', 'Sharma', '12345', '12345', 'ramsharma@gmail.com', '1991-01-01', 'male'),
(5, 'sita', 'kumari', '123', '123', 'sitakumari@gmail.com', '1990-08-09', 'female'),
(6, 'Rima', 'Gupta', '12345', '12345', 'rima@gmail.com', '1997-05-05', 'female'),
(7, 'sanjiv', 'shrestha', '4444', '4444', 'sanjiv@gmail.com', '1980-06-06', 'male'),
(8, 'Swarina', 'Shakya', '12345', '12345', 'swarinasak43@gmail.com', '1997-01-01', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `vname` varchar(50) NOT NULL,
  `vemail` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `msg` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `vname`, `vemail`, `sub`, `msg`) VALUES
(1, 'sanjiv', 'sanjiv@gmail.com', 'transportation late', 'transportation service is late.Driver should be provided with tracking system.');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `centername` varchar(100) NOT NULL,
  `centerlink` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `centername`, `centerlink`) VALUES
(1, 'HopeTherapyCenter', 'hopeweb.php'),
(2, 'NepalPhysioCare', 'nepalweb.php'),
(3, 'AnandaTherapyCenter', 'ananda.php'),
(4, 'BeachwayTherapyCenter', 'beachway.php'),
(5, 'ChildrenTherapyCenter', 'childrenweb.php'),
(6, 'GreenHeartTherapyCenter', 'greenhearttherapycenter.php'),
(7, 'HappyEndingTherapyCenter', 'happyending.php'),
(8, 'ManualTherapyCenter', 'manualtherapyandpainreliefcenter.php'),
(9, 'MokshyaAyurveda', 'mokshaayurveda.php'),
(10, 'NepalHypnosisTherapyCenter', 'nepalhypnosis.php');

-- --------------------------------------------------------

--
-- Table structure for table `therapycenter`
--

CREATE TABLE `therapycenter` (
  `name` varchar(200) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `therapycenter`
--

INSERT INTO `therapycenter` (`name`, `Address`, `longitude`, `latitude`, `link`) VALUES
('Ananda Therapy center', 'Kalanki,Kathmandu', 85.281, 27.6945, 'ananda.php'),
('Beachway Therapy Center', 'Hattiban,Lalitpur', 85.3344, 27.6504, 'beachway.php'),
('Children\'s Therapy Centre', 'Sundhara,Kathmandu', 85.3124, 27.6993, 'childrenweb.php'),
('Green Hearts Therapy', 'Thamel,Kathmandu', 85.3119, 27.7165, 'greenhearttherapycenter.php'),
('Happyending Therapy Center', 'Kalimati,Kathmandu', 85.2971, 27.6992, 'happyending.php'),
('Hope Therapy Center', 'Baneshwor,Kathmandu', 85.342, 27.6915, 'hopeweb.php'),
('Manual Therapy and Painrelief Center', 'Patan,Kathmandu', 85.3012, 27.6751, 'manualtherapyandpainreliefcenter.php'),
('Mokshaayurveda', 'Patan,Kathmandu', 85.3145, 27.683, 'mokshaayurveda.php'),
('Nepal Hypnosis', 'Dhalku,Kathmandu', 85.3341, 27.7176, 'nepalhypnosis.php'),
('Nepal Physio Care', 'Kalimati Kathmandu', 85.3024, 27.7004, 'nepalweb.php');

-- --------------------------------------------------------

--
-- Table structure for table `therapylist`
--

CREATE TABLE `therapylist` (
  `tid` int(11) NOT NULL,
  `centerlink` varchar(40) NOT NULL,
  `therapyname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `therapylist`
--

INSERT INTO `therapylist` (`tid`, `centerlink`, `therapyname`) VALUES
(1, 'hopeweb.php', 'Speech Therapy'),
(2, 'hopeweb.php', 'Neutron Therapy'),
(3, 'hopeweb.php', 'Physiotherapy'),
(4, 'hopeweb.php', 'Anger Management'),
(5, 'nepalweb.php', 'Hydro-Therapy'),
(6, 'nepalweb.php', 'Reiki Healing'),
(7, 'nepalweb.php', 'Physiotherapy'),
(8, 'nepalweb.php', 'Anger Management'),
(9, 'nepalweb.php', 'Sound Healing'),
(10, 'nepalhypnosis.php', 'Hypnotherapy'),
(11, 'nepalhypnosis.php', 'Physiotherapy'),
(12, 'nepalhypnosis.php', 'Past Life Regression'),
(13, 'ananda.php', 'Speech Therapy'),
(14, 'ananda.php', 'Neutron Therapy'),
(15, 'ananda.php', 'Physiotherapy'),
(16, 'ananda.php', 'Anger Management'),
(17, 'childrenweb.php', 'Speech Therapy'),
(18, 'childrenweb.php', 'Neutron Therapy'),
(19, 'childrenweb.php', 'Physiotherapy'),
(20, 'childrenweb.php', 'Anger Management'),
(21, 'mokshaayurveda.php', 'Ayurveda Prana Package'),
(22, 'mokshaayurveda.php', 'Snehana'),
(23, 'mokshaayurveda.php', 'Mind and Mood'),
(24, 'mokshaayurveda.php', 'Weekend Health Program'),
(25, 'manualtherapyandpainreliefcenter.php', 'Spine Treatment'),
(26, 'manualtherapyandpainreliefcenter.php', 'Posture Reconstructing'),
(27, 'manualtherapyandpainreliefcenter.php', 'Arthritis Treatment'),
(28, 'happyending.php', 'Anger Management'),
(29, 'happyending.php', 'Physiotherapy'),
(30, 'happyending.php', 'Speech Therapy'),
(31, 'happyending.php', 'Neutron Therapy'),
(32, 'greenhearttherapycenter.php', 'Physiotherapy'),
(33, 'greenhearttherapycenter.php', 'Traditional Thai Body Massage'),
(34, 'greenhearttherapycenter.php', 'Shirodhara Healing'),
(35, 'beachway.php', 'Physiotherapy'),
(36, 'beachway.php', 'Neutron Therapy'),
(37, 'beachway.php', 'Speech Therapy'),
(38, 'beachway.php', 'Anger Management');

-- --------------------------------------------------------

--
-- Table structure for table `therapylocations`
--

CREATE TABLE `therapylocations` (
  `thid` int(200) NOT NULL,
  `centername` varchar(250) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `therapylocations`
--

INSERT INTO `therapylocations` (`thid`, `centername`, `latitude`, `longitude`) VALUES
(1, 'mylocation', 25.88, 80.85);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `therapycenter`
--
ALTER TABLE `therapycenter`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `therapylist`
--
ALTER TABLE `therapylist`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `therapylocations`
--
ALTER TABLE `therapylocations`
  ADD PRIMARY KEY (`thid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `therapylist`
--
ALTER TABLE `therapylist`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `therapylocations`
--
ALTER TABLE `therapylocations`
  MODIFY `thid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
