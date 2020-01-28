-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 28, 2020 at 05:37 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pword`) VALUES
(1, 'rishan', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(50) NOT NULL,
  `image1` varchar(200) NOT NULL,
  `mname1` varchar(50) NOT NULL,
  `mtime1` varchar(50) NOT NULL,
  `image2` varchar(200) NOT NULL,
  `mname2` varchar(50) NOT NULL,
  `mtime2` varchar(50) NOT NULL,
  `image3` varchar(200) NOT NULL,
  `mname3` varchar(50) NOT NULL,
  `mtime3` varchar(50) NOT NULL,
  `slide1` varchar(200) NOT NULL,
  `slide2` varchar(200) NOT NULL,
  `slide3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `image1`, `mname1`, `mtime1`, `image2`, `mname2`, `mtime2`, `image3`, `mname3`, `mtime3`, `slide1`, `slide2`, `slide3`) VALUES
(1, 'f3.JPG', 'Jumangi 2', '10.A.M', 'f2.JPG', 'Frozen 2', '1.30 P.M', 'f7.JPG', 'Dolittle', '4.30 P.M', 'jumangi.jpg', 'frozen.jpg', 'dolittle.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movie1`
--

CREATE TABLE `movie1` (
  `id` int(50) NOT NULL,
  `month1` varchar(100) NOT NULL,
  `day1` varchar(100) NOT NULL,
  `ticket1` int(200) NOT NULL,
  `total1` int(200) NOT NULL,
  `seat1` varchar(50) NOT NULL,
  `name1` varchar(200) NOT NULL,
  `mobile1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie1`
--

INSERT INTO `movie1` (`id`, `month1`, `day1`, `ticket1`, `total1`, `seat1`, `name1`, `mobile1`) VALUES
(43, 'September', '13', 3, 1500, 'C6, C7, C8', 'ridmi', '0711456123'),
(44, 'September', '13', 3, 1500, 'C6, C7, C8', 'ridmi', '0711456123'),
(45, 'September', '13', 3, 1500, 'C6, C7, C8', 'ridmi', '0711456123'),
(52, 'February', '5', 2, 900, 'C6, C7', 'rishan', '0711456123'),
(53, 'January', '1', 1, 450, 'A3, A4', 'rishan', '071111111111'),
(57, 'January', '1', 1, 450, 'D3', 'umayanga', '0711456123'),
(58, 'January', '1', 1, 450, 'E3', 'rishan', '0711456123'),
(59, 'January', '1', 1, 450, 'D6', 'ridmi', '0711456123'),
(60, 'January', '1', 1, 450, 'A4', 'umayanga', '0711456123');

-- --------------------------------------------------------

--
-- Table structure for table `movie2`
--

CREATE TABLE `movie2` (
  `id` int(50) NOT NULL,
  `month2` varchar(100) NOT NULL,
  `day2` varchar(100) NOT NULL,
  `ticket2` int(200) NOT NULL,
  `total2` int(200) NOT NULL,
  `seat2` varchar(50) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `mobile2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie2`
--

INSERT INTO `movie2` (`id`, `month2`, `day2`, `ticket2`, `total2`, `seat2`, `name2`, `mobile2`) VALUES
(9, 'September', '1', 3, 1500, 'A8, C9, E6', 'q', '071111111111'),
(10, 'September', '1', 2, 900, 'E2, E3', 'dksjbdsj', '071111111111'),
(11, 'September', '1', 3, 1350, 'D6, D7, D8', 'shfgks', '0711456123'),
(12, 'March', '5', 3, 1350, 'B6, B7, B8', 'umayanga', '0711456123'),
(13, 'March', '5', 1, 450, 'B6', 'rishan', '071111111111'),
(14, 'March', '5', 1, 450, 'B6', 'rishan', '071111111111'),
(15, 'January', '1', 3, 1350, 'A3, A4, A5', 'rishan', '071111111111'),
(16, 'January', '25', 3, 1350, 'C3, C4, C5', 'rishan', '0711456123'),
(17, 'January', '25', 2, 900, 'D6, D7', 'umayanga', '071111111111'),
(18, 'January', '25', 1, 450, 'E6', 'ridmi', '0711456123'),
(19, 'January', '25', 3, 1350, 'A3, A8, A11', 'rishan', '071111111111'),
(20, 'January', '25', 3, 1350, 'E3, E4, E5', 'rishan', '0711456123');

-- --------------------------------------------------------

--
-- Table structure for table `movie3`
--

CREATE TABLE `movie3` (
  `id` int(50) NOT NULL,
  `month3` varchar(100) NOT NULL,
  `day3` varchar(100) NOT NULL,
  `ticket3` int(200) NOT NULL,
  `total3` int(200) NOT NULL,
  `seat3` varchar(50) NOT NULL,
  `name3` varchar(50) NOT NULL,
  `mobile3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie3`
--

INSERT INTO `movie3` (`id`, `month3`, `day3`, `ticket3`, `total3`, `seat3`, `name3`, `mobile3`) VALUES
(12, 'August', '5', 5, 2250, 'C7, C8, C9, C10, C11', 'umayanga', '0711456123'),
(13, 'February', '8', 4, 1800, 'D2, D3, D4, D5', 'umayanga', '071111111111');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(50) NOT NULL,
  `mticket` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `mticket`) VALUES
(1, 450);

-- --------------------------------------------------------

--
-- Table structure for table `upmovie`
--

CREATE TABLE `upmovie` (
  `id` int(50) NOT NULL,
  `upimage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upmovie`
--

INSERT INTO `upmovie` (`id`, `upimage`) VALUES
(1, 'f5.JPG'),
(2, 'f6.JPG'),
(5, 'f8.JPG'),
(21, 'f0.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `movie1`
--
ALTER TABLE `movie1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie2`
--
ALTER TABLE `movie2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie3`
--
ALTER TABLE `movie3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upmovie`
--
ALTER TABLE `upmovie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `movie1`
--
ALTER TABLE `movie1`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `movie2`
--
ALTER TABLE `movie2`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `movie3`
--
ALTER TABLE `movie3`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `upmovie`
--
ALTER TABLE `upmovie`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
