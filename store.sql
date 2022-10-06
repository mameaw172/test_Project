-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 04:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `aid` int(11) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `alastname` varchar(20) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `movie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`aid`, `aname`, `alastname`, `DateOfBirth`, `movie`) VALUES
(1001, 'หมาก', 'ปริ', '2022-09-19', 'เอ'),
(1002, 'น้า', 'เดด', '2022-09-06', 'บี'),
(1003, 'ยา', 'ย่า', '2022-09-14', 'ซี'),
(1004, 'บอย', 'อุปกรณ์', '2022-09-10', 'ดี'),
(1005, 'คิม', 'เบอเร่อ', '2022-09-09', 'อี');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(10) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `clastname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `cname`, `clastname`, `address`, `telephone`) VALUES
(2001, 'ป่าน', 'สุภัสสรา', 'pathumtani', '0911111111'),
(2002, 'พลอยใส', 'ปรีณาพรรณ', 'pathumtani', '0922222222'),
(2003, 'เอิน', 'กนกธร', 'pathumtani', '0933333333'),
(2004, 'บีม', 'จิรนันท์', 'bangkok', '0944444444'),
(2005, 'เหมี่ยว', 'นภัสสร', 'Bangkok', '088888888');

-- --------------------------------------------------------

--
-- Table structure for table `dvd`
--

CREATE TABLE `dvd` (
  `did` int(10) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `cdate` date NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dvd`
--

INSERT INTO `dvd` (`did`, `dname`, `cdate`, `price`, `amount`) VALUES
(1, 'เอ', '2022-09-14', 20, 5),
(2, 'บี', '2022-09-08', 50, 2),
(3, 'ซี', '2022-09-10', 60, 3),
(4, 'ดี', '2022-09-09', 30, 4),
(5, 'อี', '2022-09-10', 15, 6);

-- --------------------------------------------------------

--
-- Table structure for table `productactor`
--

CREATE TABLE `productactor` (
  `amount` int(11) NOT NULL,
  `aid` int(10) NOT NULL,
  `did` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productactor`
--

INSERT INTO `productactor` (`amount`, `aid`, `did`) VALUES
(3, 1001, 1),
(2, 1002, 2),
(3, 1003, 3),
(4, 1004, 4),
(2, 1005, 5);

-- --------------------------------------------------------

--
-- Table structure for table `sellingproduct`
--

CREATE TABLE `sellingproduct` (
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellingproduct`
--

INSERT INTO `sellingproduct` (`sid`, `cid`, `did`, `date`, `amount`) VALUES
(4001, 1001, 1, '2022-09-09', 4),
(4002, 1002, 2, '2022-09-14', 2),
(4003, 1003, 3, '2022-09-09', 3),
(4004, 1004, 4, '2022-09-14', 4),
(4005, 1005, 5, '2022-09-09', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `productactor`
--
ALTER TABLE `productactor`
  ADD PRIMARY KEY (`aid`,`did`);

--
-- Indexes for table `sellingproduct`
--
ALTER TABLE `sellingproduct`
  ADD PRIMARY KEY (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
