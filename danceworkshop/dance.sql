-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2019 at 09:16 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `psw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `psw`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `cid` int(11) NOT NULL,
  `wid` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dstyle` varchar(30) NOT NULL,
  `psw` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cselect` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`cid`, `wid`, `cname`, `uname`, `gender`, `dstyle`, `psw`, `email`, `cselect`) VALUES
(1, 0, 'Rajesh', 'rajesh', 'Male', 'Free Style', 'rajesh', 'raj@gmail.com', 'Not Action'),
(2, 0, 'Rajeev', 'rajeev', 'Male', 'Bharatanatyam', 'rajeev', 'rajeev@gmail.com', 'Not Action'),
(3, 0, 'Nayana', 'nayana', 'Female', 'Ballet', 'nayana', 'n@gmail.com', 'Not Action'),
(4, 0, 'anusha', 'anu', 'Female', 'Bharatanatyam', 'anu', 'anu@gmail.com', 'Not Action'),
(5, 3, 'NIKITA', 'NIKITA', 'Female', 'Bharatanatyam', '1234', 'abcd@gmail.com', 'Selected');

-- --------------------------------------------------------

--
-- Table structure for table `performer`
--

CREATE TABLE `performer` (
  `pid` int(11) NOT NULL,
  `wid` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `age` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `psw` varchar(20) NOT NULL,
  `dance_style` varchar(20) NOT NULL,
  `dtime` varchar(20) NOT NULL,
  `ddate` date NOT NULL,
  `bookingdate` date NOT NULL,
  `payment` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performer`
--

INSERT INTO `performer` (`pid`, `wid`, `pname`, `uname`, `age`, `email`, `psw`, `dance_style`, `dtime`, `ddate`, `bookingdate`, `payment`) VALUES
(3, 0, 'Nimisha', 'nimisha', '20', 'ni@gmail.com', 'nimisha', 'Bharatanatyam', '9 am', '2019-11-29', '2019-11-23', 'not'),
(5, 0, 'chaitra', 'chai', '20', 'chai@gmail.com', 'chai', 'Kathakali', '9 am', '2019-11-24', '2019-11-23', 'not'),
(6, 0, 'preethi', 'pre', '20', 'preethi@gmail.com', 'pree', 'Free Style', '9 am', '2019-11-24', '2019-11-23', 'not');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `wid` int(11) NOT NULL,
  `wname` varchar(40) NOT NULL,
  `wdate` date NOT NULL,
  `venue` varchar(50) NOT NULL,
  `fees` varchar(10) NOT NULL,
  `wshow` int(11) NOT NULL,
  `wdesc` varchar(150) NOT NULL,
  `wtime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`wid`, `wname`, `wdate`, `venue`, `fees`, `wshow`, `wdesc`, `wtime`) VALUES
(1, 'Hook Crook', '2019-11-24', 'Bangalore', '1000', 0, 'Dreams Becomes Reality Overhere', '9 am'),
(2, 'summer workshop', '2019-11-30', 'mangalore', '500', 0, 'beach side workshop for one week', '9am '),
(3, 'KALAKRUTHI', '2019-11-30', 'MANGALORE', '500', 1, 'dance your own style', '10 AM');

--
-- Triggers `workshop`
--
DELIMITER $$
CREATE TRIGGER `func` AFTER UPDATE ON `workshop` FOR EACH ROW UPDATE performer SET wid='0',payment='not'
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `func1` BEFORE UPDATE ON `workshop` FOR EACH ROW UPDATE coach SET wid='0',cselect='Not Action'
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `performer`
--
ALTER TABLE `performer`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`wid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `performer`
--
ALTER TABLE `performer`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
