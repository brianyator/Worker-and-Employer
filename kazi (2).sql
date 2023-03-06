-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 07:43 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kazi`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`name`, `pass`, `email`, `location`) VALUES
('Njula', '202cb962ac59075b964b07152d234b70', 'abc@gmail.com', 'Embakasi'),
('Mbeyu', 'c20ad4d76fe97759aa27a0c99bff6710', 'fg@yahoo.com', 'Dagoretti'),
('Muhwa', 'a87ff679a2f3e71d9181a67b7542122c', 'nchhgy@gmail.com', 'Dagoretti'),
('Mum', 'c20ad4d76fe97759aa27a0c99bff6710', 'mum@gmail.com', 'Westlands'),
('Paula Atim', '622c260d32449d217968d14921e84118', 'atimpaula012@gmail.com', 'Langata'),
('Papa', '0ac6cd34e2fac333bf0ee3cd06bdcf96', 'papa@gmail.com', 'Langata'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729', 'yatoriz24@gmail.com', 'Langata'),
('Yator', 'f2522ec31f650a55f2853d60332e5729', 'yatoriz24@gmail.com', 'Langata'),
('Ronald', 'e1199786c0c9a23d76d7780d77f09d91', 'yatoriz24@gmail.com', 'Starehe'),
('Mercy Atieno', 'affde01bd63a1d04581245e13e142506', 'mercy@gmail.com', 'Westlands'),
('Vivant Muli', '9af766874b6d22912f8aae01eff86690', 'muli@gmail.com', 'Kamukunji');

-- --------------------------------------------------------

--
-- Table structure for table `laundry`
--

CREATE TABLE `laundry` (
  `laundry_id` int(50) NOT NULL,
  `id` int(11) NOT NULL,
  `location` text NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laundry`
--

INSERT INTO `laundry` (`laundry_id`, `id`, `location`, `time`) VALUES
(35, 290, 'Embakasi', 14),
(36, 100, 'Starehe', 11);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `name` text NOT NULL,
  `location` text NOT NULL,
  `time` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`name`, `location`, `time`) VALUES
('', 'Westlands', 123000),
('', 'Embakasi', 123000),
('', 'Makadara', 140000),
('', 'Makadara', 130000),
('', 'Makadara', 10100),
('', 'Kamukunji', 0),
('', 'Makadara', 0),
('', 'Makadara', 0),
('', 'Makadara', 0),
('youiads', 'Makadara', 8),
('Victor', 'Starehe', 10),
('', 'Makadara', 8),
('', '', 0),
('', '', 0),
('', '', 0),
('', '', 0),
('', '', 0),
('', '', 0),
('', '', 0),
('', '', 0),
('', '', 0),
('', '', 0),
('', '', 0),
('', '', 0),
('', '', 0),
('10', 'Starehe', 11),
('Brian Yator', 'Westlands', 13),
('Yator', 'Makadara', 12),
('Yator', 'Dagoretti', 10),
('Brian Yator', 'Makadara', 17),
('Brian Yator', 'Makadara', 13),
('Brian Yator', 'Makadara', 13),
('Brian Yator', 'Makadara', 13),
('Brian Yator', 'Makadara', 13),
('Brian Yator', 'Makadara', 13),
('Brian Yator', 'Makadara', 13),
('Brian Yator', 'Langata', 8),
('Brian Yator', 'Langata', 8),
('Yator', 'Embakasi', 16),
('Yator', 'Embakasi', 16),
('Yator', 'Starehe', 11),
('Yator', 'Starehe', 11),
('Yator', 'Makadara', 15),
('Ronald', 'Langata', 14),
('Ronald', 'Makadara', 13),
('', 'Makadara', 13),
('', 'Makadara', 13),
('', 'Makadara', 13),
('Yator', 'Makadara', 13),
('Yator', 'Makadara', 13),
('Yator', 'Makadara', 14),
('Yator', 'Makadara', 8),
('Yator', 'Makadara', 8),
('Yator', 'Makadara', 8),
('Yator', 'Makadara', 13),
('Yator', 'Makadara', 13),
('Yator', 'Makadara', 13),
('Yator', 'Makadara', 13),
('Yator', 'Makadara', 13),
('Yator', 'Makadara', 13),
('Yator', 'Makadara', 13),
('Yator', 'Makadara', 13),
('Yator', 'Makadara', 13),
('Yator', 'Makadara', 13),
('Yator', 'Makadara', 13),
('Yator', 'Makadara', 13),
('Yator', 'Makadara', 13),
('Yator', 'Makadara', 13),
('Brian Yator', 'Makadara', 8),
('Brian Yator', 'Westlands', 13),
('Brian Yator', 'Westlands', 13),
('Brian Yator', 'Westlands', 13),
('Brian Yator', 'Westlands', 13),
('Brian Yator', 'Westlands', 13),
('Brian Yator', 'Westlands', 13),
('Brian Yator', 'Westlands', 13),
('Brian Yator', 'Westlands', 13),
('Brian Yator', 'Makadara', 11),
('Brian Yator', 'Makadara', 16),
('Brian Yator', 'Westlands', 8),
('Brian Yator', 'Langata', 15),
('Brian Yator', 'Starehe', 8),
('Brian Yator', 'Langata', 16),
('Brian Yator', 'Makadara', 10),
('', '', 0),
('Brian Yator', 'Kasarani', 15),
('', '', 0),
('', '', 0),
('Yator', 'Westlands', 12),
('Yator', 'Westlands', 13),
('Yator', 'Kamukunji', 10),
('Brian Yator', 'Kamukunji', 11),
('Brian Yator', 'Kamukunji', 11),
('Brian Yator', 'Kasarani', 12),
('Brian Yator', 'Langata', 13),
('Brian Yator', 'Kasarani', 13),
('Brian Yator', 'Starehe', 15),
('Brian Yator', 'Langata', 13),
('Brian Yator', 'Westlands', 14),
('Brian Yator', 'Kamukunji', 9),
('Brian Yator', 'Langata', 17),
('Brian Yator', 'Makadara', 8),
('Brian Yator', 'Starehe', 12),
('Brian Yator', 'Starehe', 12),
('Brian Yator', 'Makadara', 8),
('Brian Yator', 'Embakasi', 17),
('Brian Yator', 'Makadara', 8),
('Brian Yator', 'Makadara', 8),
('Brian Yator', 'Makadara', 8),
('Brian Yator', 'Makadara', 8),
('Brian Yator', 'Langata', 12),
('Brian Yator', 'Makadara', 8),
('Brian Yator', 'Makadara', 9),
('Brian Yator', 'Makadara', 8),
('Brian Yator', 'Makadara', 17),
('Brian Yator', 'Makadara', 8),
('Brian Yator', 'Makadara', 8),
('Brian Yator', 'Kamukunji', 13),
('Brian Yator', 'Dagoretti', 15),
('Brian Yator', 'Kasarani', 8),
('Brian Yator', 'Langata', 10);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `pass`) VALUES
('Njula', '202cb962ac59075b964b07152d234b70'),
('Mum', 'c20ad4d76fe97759aa27a0c99bff6710'),
('Njula', '202cb962ac59075b964b07152d234b70'),
('Njula', '202cb962ac59075b964b07152d234b70'),
('Paula Atim', '622c260d32449d217968d14921e84118'),
('Paula Atim', '622c260d32449d217968d14921e84118'),
('papa', '0ac6cd34e2fac333bf0ee3cd06bdcf96'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Yator', 'f2522ec31f650a55f2853d60332e5729'),
('ro', 'd41d8cd98f00b204e9800998ecf8427e'),
('Ronald', 'e1199786c0c9a23d76d7780d77f09d91'),
('Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Ronald', 'f2522ec31f650a55f2853d60332e5729'),
('Ronald', 'f2522ec31f650a55f2853d60332e5729'),
('Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Yator', '8c8233e9172debaf475bdeb70c56d6b0'),
('Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Brian Yator', 'f2522ec31f650a55f2853d60332e5729'),
('Mercy Atieno', 'affde01bd63a1d04581245e13e142506'),
('m', 'd41d8cd98f00b204e9800998ecf8427e'),
('', '86c561094c398ae32ba840528359ff2a');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `location` text NOT NULL,
  `worker_first_name` text NOT NULL,
  `employer_first_name` text NOT NULL,
  `worker_phone_number` int(11) NOT NULL,
  `rate_per_bucket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Name` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`Name`, `Message`) VALUES
('Brian Yator', 'Great work guys! keep it up'),
('Yator', 'I like it!'),
('Yator', 'I like it!'),
('Yator', 'Good things are here'),
('Yator', 'The service is a bit slow and could use improvement. Thank you'),
('Brian Yator', 'good stuff');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `id` int(55) NOT NULL,
  `last_name` text NOT NULL,
  `first_name` text NOT NULL,
  `rate_per_bucket` int(55) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`id`, `last_name`, `first_name`, `rate_per_bucket`, `phone_number`, `password`) VALUES
(79, 'Nkatha', 'George', 1202, 711234323, '2ca63cddd54f9490efad22421891a9d1'),
(100, 'Kimani', 'Terry', 1430, 798675642, 'c892ba238c98835d4d53a3faed43ee52'),
(290, 'Wanjiku', 'Judy', 1840, 785949302, '6b42d00c4ca6ddc33a604c54b8ce4adc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laundry`
--
ALTER TABLE `laundry`
  ADD PRIMARY KEY (`laundry_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laundry`
--
ALTER TABLE `laundry`
  MODIFY `laundry_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laundry`
--
ALTER TABLE `laundry`
  ADD CONSTRAINT `laundry_ibfk_1` FOREIGN KEY (`id`) REFERENCES `worker` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
