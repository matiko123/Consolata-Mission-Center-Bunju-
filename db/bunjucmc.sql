-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 12:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bunjucmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'cmc@gmail.com', 'admin'),
(2, 'dozzer@gmail.com', 'dozzer');

-- --------------------------------------------------------

--
-- Table structure for table `gazeti`
--

CREATE TABLE `gazeti` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(100) NOT NULL,
  `posted_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gazeti`
--

INSERT INTO `gazeti` (`id`, `title`, `description`, `image`, `posted_time`) VALUES
(11, 'Mapadre', 'Mapadre wakisherekea christmass Bunju', 'uploads/7226150.jpg', '2024-05-12 16:33:40'),
(13, 'abcd', 'abc image', 'uploads/Untitled-1.png', '2024-05-12 16:42:02'),
(14, 'ASSIGNMENT 2 DATA SET', 'ASSIGNMENT 2 DATA SETASSIGNMENT 2 DATA SETASSIGNMENT 2 DATA SETASSIGNMENT 2 DATA SET', 'uploads/ac.jpeg', '2024-05-17 05:51:43'),
(15, 'data setex', 'assignment data set test test', 'uploads/dinner.jpeg', '2024-05-17 06:30:40'),
(16, 'data', 'data trial again', 'uploads/cmc3.jpg', '2024-05-17 06:35:39'),
(17, 'data setex data', 'data data data', 'uploads/breakfast.jpeg', '2024-05-17 06:41:42'),
(18, 'data setex data', 'set', 'uploads/img2.png', '2024-05-17 06:43:41');

-- --------------------------------------------------------

--
-- Table structure for table `gazetiadmin`
--

CREATE TABLE `gazetiadmin` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gazetiadmin`
--

INSERT INTO `gazetiadmin` (`id`, `email`, `password`) VALUES
(1, 'gazeti@gmail.com', 'admin'),
(2, 'dozzer@gmail.com', 'dozzer');

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

CREATE TABLE `halls` (
  `id` int(11) NOT NULL,
  `buyer` varchar(60) NOT NULL,
  `phone_email` varchar(60) NOT NULL,
  `service` varchar(60) NOT NULL,
  `price` int(15) NOT NULL,
  `booking_date` datetime NOT NULL DEFAULT current_timestamp(),
  `arrival_date` varchar(20) NOT NULL,
  `departure_date` varchar(20) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `image` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`id`, `buyer`, `phone_email`, `service`, `price`, `booking_date`, `arrival_date`, `departure_date`, `status`, `image`) VALUES
(1, 'christian stephen', '0787739490', 'Chengula Hall', 50000, '2024-05-07 04:16:19', '2024-05-24', '2024-05-31', 0, '../cmc-admin/uploads/shop.png'),
(2, 'christian stephen', '0787739490', 'Chengula Hall', 80000, '2024-05-07 04:24:05', '2024-05-24', '2024-05-31', 1, '../cmc-admin/uploads/home.png'),
(3, 'christian stephen', 'christianstephen025@gmail.com', 'Bakhita Hall', 100000, '2024-05-07 09:30:56', '2024-05-22', '2024-05-31', 0, '../cmc-admin/uploads/cmc3.jpg'),
(4, 'christian stephen', '0787739490', 'Pengo Hall', 75000, '2024-05-18 05:00:29', '2024-05-18', '2024-05-19', 0, '0'),
(5, 'Lorem Ipsum', '0700000000', 'Chengula Hall', 50000, '2024-06-02 23:25:58', '2024-06-05', '2024-06-13', 1, '../cmc-admin/uploads/img1.jfif'),
(6, 'dozzer', 'chriss@gmail.com', 'Chengula Hall', 50000, '2024-06-06 02:29:16', '2024-06-07', '2024-06-08', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `mailings`
--

CREATE TABLE `mailings` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mailings`
--

INSERT INTO `mailings` (`id`, `name`, `email`, `message`) VALUES
(2, 'Lorem Ipsum', 'dozzer@gmail.com', 'hello hello'),
(3, 'entrepreneur', 'christianstephen025@gmail.com', 'hello hello i am christian');

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` int(11) NOT NULL,
  `buyer` varchar(60) NOT NULL,
  `phone_email` varchar(60) NOT NULL,
  `service` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(15) NOT NULL,
  `booking_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(2) NOT NULL DEFAULT 0,
  `image` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `buyer`, `phone_email`, `service`, `quantity`, `price`, `booking_date`, `status`, `image`) VALUES
(1, 'juma juma', 'christianstephen025@gmail.com', 'Breakfast', 12, 6000, '2024-05-07 06:14:46', 0, '../cmc-admin/uploads/cmc3.jpg'),
(2, 'christian stephen', '0787739490', 'DInner', 12, 25000, '2024-05-07 07:50:13', 1, '../cmc-admin/uploads/img1.png'),
(3, 'christian stephen', 'christianstephen025@gmail.com', 'Lunch-simple buffet ', 2, 15000, '2024-05-07 09:29:23', 0, '../cmc-admin/uploads/cmc1.jpg'),
(4, 'christian stephen', 'christianstephen025@gmail.com', 'DInner', 5, 25000, '2024-05-08 13:09:15', 1, '../cmc-admin/uploads/dinner.jpeg'),
(5, 'christian stephen', 'christianstephen025@gmail.com', 'Morning Tea', 6, 3000, '2024-05-08 13:10:15', 0, '../cmc-admin/uploads/family.jpg'),
(6, 'christian stephen', '0787739490', 'Breakfast', 2, 6000, '2024-05-18 04:48:31', 0, '0'),
(7, 'entrepreneurship', '0700000000', 'Lunch-simple buffet ', 3, 15000, '2024-06-02 23:30:35', 0, '../cmc-admin/uploads/pexels-ifreestock-585752.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `buyer` varchar(60) NOT NULL,
  `phone_email` varchar(60) NOT NULL,
  `service` varchar(30) NOT NULL,
  `price` int(15) NOT NULL,
  `booking_date` datetime NOT NULL DEFAULT current_timestamp(),
  `arrival_date` varchar(20) NOT NULL,
  `departure_date` varchar(20) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `image` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `buyer`, `phone_email`, `service`, `price`, `booking_date`, `arrival_date`, `departure_date`, `status`, `image`) VALUES
(1, 'christian stephen', 'christianstephen025@gmail.com', 'Falda 25 ', 75000, '2024-05-08 12:52:35', '2024-05-09', '2024-05-10', 1, '../cmc-admin/uploads/breakfast.jpeg'),
(2, 'christian stephen', '', 'Single Room For Couple', 60000, '2024-05-09 19:38:12', '2024-05-09', '2024-05-10', 0, '0'),
(3, 'christian stephen', 'christianstephen025@gmail.com', 'Single Person', 35000, '2024-05-09 19:41:23', '2024-05-09', '2024-05-10', 0, '../cmc-admin/uploads/20240510_175545.jpg'),
(4, 'christian stephen', 'christianstephen025@gmail.com', 'Falda 25 ', 75000, '2024-05-17 07:18:35', '2024-05-17', '2024-05-18', 0, '../cmc-admin/uploads/mapa_400x400.jpg'),
(5, 'christian stephen', '0787739490', 'Full Board Double', 110000, '2024-05-18 05:00:54', '2024-05-18', '2024-05-20', 0, '0'),
(6, 'Lorem Ipsum', '0700000000', 'Single Room For Couple', 60000, '2024-06-02 23:31:18', '2024-06-05', '2024-06-08', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`) VALUES
(1, 'meals'),
(2, 'halls'),
(3, 'rooms');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gazeti`
--
ALTER TABLE `gazeti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gazetiadmin`
--
ALTER TABLE `gazetiadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halls`
--
ALTER TABLE `halls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mailings`
--
ALTER TABLE `mailings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gazeti`
--
ALTER TABLE `gazeti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `gazetiadmin`
--
ALTER TABLE `gazetiadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `halls`
--
ALTER TABLE `halls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mailings`
--
ALTER TABLE `mailings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
