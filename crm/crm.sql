-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 01:49 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` int(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `assigned_to` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `leads_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `assigned_to` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`leads_id`, `fname`, `lname`, `address`, `contact`, `email`, `assigned_to`) VALUES
(1, 'sd', '', 'sd', 1, 'eric_linsangan@yahoo.com', '0'),
(2, 'sd', '', 'sd', 1, 'eric_linsangan@yahoo.com', '0'),
(3, 'asd', '', 'asd', 1, 'eric_linsangan@yahoo.com', 'B'),
(4, 'as', '', '', 0, '', 'A'),
(5, 'sa', '', 'as', 0, '', 'A'),
(6, 'as', '', 'a', 0, 'eric_linsangan@yahoo.com', 'B'),
(7, 'dare', 'Lozano', 'asd', 0, 'eric_linsangan@yahoo.com', 'A'),
(8, 'dare', 'Lozano', 'asd', 93219321, 'eric_linsangan@yahoo.com', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `vat` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL,
  `model` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `manufacturer`, `quantity`, `start_date`, `end_date`, `vat`, `image`, `image_text`, `model`) VALUES
(45, 'z', 'z', 1, '2017-12-14', '2017-12-14', 1, 'ScreenShot00003.png', 'z', ''),
(46, 'test', 'test', 1, '2017-12-01', '2017-12-01', 1, 'ScreenShot00000.png', 'test', ''),
(47, 'test', 'test', 1, '2017-12-01', '2017-12-01', 1, 'ScreenShot00000.png', 'test', ''),
(48, 'test', 'x', 1, '2017-12-13', '2017-11-29', 1, 'ScreenShot00001.png', 'x', ''),
(49, 'cp', 'gass', 1, '2017-12-08', '2017-12-15', 1, 'Untitled-1.png', 'ytty', '');

-- --------------------------------------------------------

--
-- Table structure for table `prospects`
--

CREATE TABLE `prospects` (
  `prospects_id` int(11) NOT NULL,
  `prospects_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` int(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `assigned_to` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `quote_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `name_client` varchar(255) NOT NULL,
  `client_address` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `discount` int(255) NOT NULL,
  `po` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticket_no` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `assigned_to` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `contact_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `firstname`, `lastname`, `contact_no`) VALUES
(1, 'admin', 'admin', '', '', 0),
(2, 'test', 'test', 'test', 'test', 90902131),
(3, 'test', 'test', 'test', 'test', 9),
(4, 'test', 'test', 'test', 'test', 9),
(5, 'test', 'test', 'test', 'test', 9),
(6, 'test1', 'test1', 'test1', 'test1', 9),
(7, 'sdas', 'sda', 'sd', 'sda', 123),
(8, 'sdas', 'dasdas', 'sd', 'sda', 123),
(9, 'sdas', 'dasdas', 'sd', 'sda', 123),
(10, 'sdas', 'dasdas', 'sd', 'sda', 123),
(11, 'SAd', 'asdas', 'dsad', 'sad', 1212312),
(12, 'SAd', 'asdas', 'dsad', 'sad', 1212312);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`leads_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `prospects`
--
ALTER TABLE `prospects`
  ADD PRIMARY KEY (`prospects_id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`quote_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `leads_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `prospects`
--
ALTER TABLE `prospects`
  MODIFY `prospects_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `quote_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
