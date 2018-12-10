-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 10:46 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_first` varchar(256) NOT NULL,
  `doctor_last` varchar(256) NOT NULL,
  `doctor_email` varchar(256) NOT NULL,
  `doctor_uid` varchar(256) NOT NULL,
  `doctor_pwd` varchar(256) NOT NULL,
  `doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_first`, `doctor_last`, `doctor_email`, `doctor_uid`, `doctor_pwd`, `doctor_id`) VALUES
('Andreea', 'doe', 'janedoe@gmail.com', 'janedoe', '$2y$10$YJTB9el4YOeUIyuqcdk7nOwJ/eqDEY6ddnHLTJB18NNR74yPROotO', 1),
('jane', 'doe', 'janedoe@gmail.com', 'janedoe1', '$2y$10$0Rpd65FABdSKN/YJCkyDx.jE/quHXbHINihK6MtOVuapsGVnakz6C', 2);

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `donor_id` int(11) NOT NULL,
  `donor_gender` varchar(10) NOT NULL,
  `donor_first` varchar(256) NOT NULL,
  `donor_last` varchar(256) NOT NULL,
  `donor_email` varchar(256) NOT NULL,
  `donor_phone` int(15) NOT NULL,
  `donor_ocupation` varchar(256) DEFAULT NULL,
  `donor_bgr` varchar(10) NOT NULL,
  `donor_uid` varchar(256) NOT NULL,
  `donor_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`donor_id`, `donor_gender`, `donor_first`, `donor_last`, `donor_email`, `donor_phone`, `donor_ocupation`, `donor_bgr`, `donor_uid`, `donor_pwd`) VALUES
(4, 'Female', 'Andreea', 'Preda', 'andreea.preda@gmail.com', 729505080, 'Student', 'AB+', 'andreeapreda', '$2y$10$1aswgLQhilKHSFO1dZsxaOkiRGEHdHLoSKWc8BWE/02100VArRsW2'),
(5, 'Female', 'Jane', 'Doe', 'jane.doe@gmail.com', 729505080, 'student', 'AB+', 'janedoe', '$2y$10$7b6FSlPgcli8EuH42HC6UeiGPh9JJne.g0MKUZvqCet1P.RPvAc2K'),
(6, 'Female', 'andreea', 'preda', 'andreea.preda@gmail.com', 729505080, 'Student', 'AB-', 'andre.pr', '$2y$10$876e2Obw.fJgFm.gVNvjp.TmAOVtoBtrupwRVY0Q8L6SuxO0GdsLa');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_first` varchar(256) NOT NULL,
  `staff_last` varchar(256) NOT NULL,
  `staff_email` varchar(256) NOT NULL,
  `staff_uid` varchar(256) NOT NULL,
  `staff_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_first`, `staff_last`, `staff_email`, `staff_uid`, `staff_pwd`) VALUES
(1, 'Andreea', 'doe', 'janedoe@gmail.com', 'janedoe', '$2y$10$TTXlVru8okGzWFl721jHQerjaIh6Aw5BayGCJoX7whOXO/txCWHOC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
