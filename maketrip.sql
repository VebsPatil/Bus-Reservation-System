-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 03:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maketrip`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbus`
--

CREATE TABLE `addbus` (
  `bus_no` int(10) NOT NULL,
  `bus_name` varchar(20) NOT NULL,
  `bus_from` varchar(20) NOT NULL,
  `bus_to` varchar(20) NOT NULL,
  `total_seats` int(60) NOT NULL,
  `bus_price` varchar(10) NOT NULL,
  `bus_date` date NOT NULL,
  `arrival_time` time NOT NULL,
  `reach_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addbus`
--

INSERT INTO `addbus` (`bus_no`, `bus_name`, `bus_from`, `bus_to`, `total_seats`, `bus_price`, `bus_date`, `arrival_time`, `reach_time`) VALUES
(1902, 'Pune Nagari', 'Pune', 'Nashik', 0, '900', '2022-04-20', '10:30:00', '02:00:00'),
(1903, 'Pune Nagari', 'Nashik', 'Pune', 32, '850', '2022-10-20', '10:00:00', '01:30:00'),
(1904, 'SuperBus', 'Mumbai', 'Pune', 37, '850', '2022-10-20', '07:00:00', '11:00:00'),
(1905, 'Shivshahi', 'Nashik', 'Satara', 50, '500', '2022-10-20', '10:30:00', '21:00:00'),
(1906, 'Chalo Mumbai', 'Nashik', 'Mumbai', 28, '130', '2003-02-12', '16:32:00', '22:00:00'),
(1907, 'ChaloBanglore', 'Mumbai', 'Banglore', 60, '500', '2022-10-20', '14:30:00', '12:00:00'),
(1908, 'Supar fast', 'Pune', 'Nashik', 50, '200', '2022-06-01', '20:33:37', '01:10:29'),
(1909, 'Joshi Travels', 'Pune', 'Nashik', 40, '220', '2022-06-01', '18:14:29', '24:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `admin_password`) VALUES
('admin12@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_no` int(10) NOT NULL,
  `city_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_no`, `city_name`) VALUES
(1, 'Nashik'),
(2, 'Pune'),
(3, 'Mumbai'),
(4, 'Satara'),
(5, 'Banglore');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `c_id` int(10) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_email` varchar(25) NOT NULL,
  `c_message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`c_id`, `c_name`, `c_email`, `c_message`) VALUES
(1, 'Ritesh', 'rityadav27@gmail.com', 'Can we Start a Bus from Nashik to Pune at Regular Half Hours Interval'),
(2, 'Gaurav', 'gaurav@gmail.com', 'Very Good Experience, Thank You!'),
(3, 'Shraddha', 'shraddha20@gmail.com', 'Buses are always on time, 4.5 rating out of 5');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `bus_no` int(10) NOT NULL,
  `bookedseats` varchar(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `ticketstatus` varchar(20) NOT NULL,
  `month` int(10) NOT NULL,
  `year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`bus_no`, `bookedseats`, `user_id`, `status`, `ticketstatus`, `month`, `year`) VALUES
(1904, '2', 9, '0', 'Not Booked', 5, 2022),
(1908, '2', 2, '1', 'Booked', 6, 2022),
(1908, '1', 1, '1', 'Booked', 6, 2022);

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_birth` date NOT NULL,
  `user_gender` varchar(6) NOT NULL,
  `user_email` varchar(25) NOT NULL,
  `user_phone` bigint(10) NOT NULL,
  `user_city` varchar(20) NOT NULL,
  `user_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`user_id`, `user_name`, `user_birth`, `user_gender`, `user_email`, `user_phone`, `user_city`, `user_password`) VALUES
(1, 'Ritesh Yadav', '2001-03-27', 'Male', 'rityadav27@gmail.com', 8551060642, 'Nashik', 'Ritesh@2027'),
(2, 'Neha Suryawansi', '2001-06-12', 'female', 'neha12@gmail.com', 9182745932, 'Nashik', 'Neha@12'),
(3, 'Shruti Sonawane', '2000-06-05', 'female', 'shruti92@gmail.com', 8732134853, 'Mumbai', 'Shruti@123'),
(4, 'Aanad Yadav', '2022-06-09', 'Male', 'aanadyadav12@gmail.com', 9823453229, 'Nashik', '123'),
(5, 'Shraddha Chavan', '2000-06-01', 'female', 'shraddha12@gmail.com', 7214346584, 'Mumbai', 'shraddha@1979'),
(6, 'Pravin Yadav', '2000-06-27', 'male', 'pravin007@gmail.com', 9541275438, 'Pune', 'Pravin@123'),
(7, 'Akash Ugale', '2000-03-07', 'male', 'akash254@gmail.com', 9878432741, 'Banglore', 'akash@123'),
(8, 'Jayesh Tatar', '2000-02-21', 'male', 'jayesh01@gmail.com', 9784732159, 'Pune', 'jayesh@123'),
(9, 'Gaurav Sanap', '2001-01-26', 'male', 'gaurav26@gmail.com', 7447865313, 'Mumbai', 'gaurav@26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbus`
--
ALTER TABLE `addbus`
  ADD PRIMARY KEY (`bus_no`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_no`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_phone` (`user_phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbus`
--
ALTER TABLE `addbus`
  MODIFY `bus_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1910;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
