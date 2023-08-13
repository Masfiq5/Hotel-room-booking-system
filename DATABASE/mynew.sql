-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2020 at 03:20 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mynew`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`) VALUES
(2, 'MD. MASFIQUR RAHMAN', 'admin', 'admin'),
(5, 'Md. Jahangir Alam', 'Jahangir', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `feadback`
--

CREATE TABLE `feadback` (
  `f_id` int(100) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `C_number` int(100) NOT NULL,
  `message` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feadback`
--

INSERT INTO `feadback` (`f_id`, `name`, `email`, `C_number`, `message`) VALUES
(1, 'Md. Abu Bakkar', 'abu@gmail.com', 1792953379, 'Very good'),
(2, 'MD. MASFIQUR RAHMAN', '16303034@iubat.edu', 2155, 'masfiq sabit'),
(3, 'Abu Pious', '16303034@iubat.edu', 1798256, 'Very user friendly .'),
(4, 'sofiq', 'sofiq@gmail.com', 48943, 'very good'),
(5, 'Md. Abdul Mazid', 'mazid@gmail.com', 1300862386, 'My name is mazid pagla.'),
(6, 'Bodunnaher sumi ', 'gu@gmail.com', 125, 'very good'),
(7, 'Md. Habib Adnan', 'anasuddin7396@gmail.com', 1850394657, 'Nice'),
(26, 'Md. Sadik Hasan', 'sadik@gmail.com', 1815894179, 'Wonderful'),
(27, 'Sumi', '16303031@iubat.edu', 1785686282, 'Nice');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactno` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `firstname`, `lastname`, `email`, `gender`, `city`, `country`, `address`, `contactno`) VALUES
(1, 'Md. Masfiq', 'Rahmann', '12567@gmail.com', 'male', 'Bogura', 'Bd', 'bogura', '01792953379'),
(2, 'md', 'abdul Aziz', 'aziz@gmail.com', 'Male', 'Bogura', 'Bangladesh', 'Bogura', '01571786087'),
(3, 'Md.', 'Abdul Kuddus', 'sa@gmail.com', 'Male', 'Bogura', 'Bangladesh', 'Bogura', '01719615942'),
(4, 'Md.', 'zahangir Alam', 'z@gmail.xom', 'Male', 'Bogura', 'Bangladesh', 'Bogura', '01254'),
(5, 'Md.', 'Alomgir hossain', 'admin@gmail.com', 'Male', 'kustia', 'Bangladesh', 'kustia', '01254'),
(6, 'Bodrunnaher', 'sumi', 'sa@gmail.com', 'female', 'kishoregonj', 'Bangladesh', 'dhaka', '01254'),
(7, 'mazid', 'abdul', 'mazid@gmail.com', 'Male', 'Bogura', 'Bangladesh', 'Bogura', '01571786087'),
(8, 'Md.', 'Sabbir Hossain', 'sabbir@gmail.com', 'Male', 'Bogura', 'Bangladesh', 'Bogura', '012457832'),
(9, 'mst', 'Laboni', 'laboni@gmail.com', 'Female', 'Bogura', 'Bangladesh', 'Bogura', '0178458945'),
(10, 'md.', 'Habib', 'h@gmail.com', 'Male', 'Bogura', 'Bangladesh', 'Bogura', '77852'),
(11, 'Md. ', 'Sabbir Hossain', 'sabbir79@gmail.com', 'Male', 'Bogura', 'Bangladesh', 'Bogura', '0178598658'),
(12, 'Md.', 'Al Amin', 'alamin@gmail.com', 'Male', 'Bogura', 'Bangladesh', 'Bogura', '01780609878'),
(13, 'Md.', 'Moon Miah', 'moon@gmail.com', 'Male', 'Bogura', 'Bangladesh', 'Bogura', '0178458945'),
(37, 'Md.', 'Sadik', 'sadik@gmail.com', 'Male', 'Bogura', 'Bangladesh', 'Shibgonj', '01815894179'),
(39, 'Md.', 'Abdul Momin', 'momin@gmail.com', 'Male', 'Bogura', 'Bangladesh', 'Bogura', '012458751'),
(40, 'Md. ', 'Abdus Sattar', 'sa@gmail.com', 'Male', 'Bogura', 'Bangladesh', 'Bogura', '014789532'),
(41, 'Md. ', 'Abdus Sattar', 'sa@gmail.com', 'Male', 'Bogura', 'Bangladesh', 'Bogura', '014789532'),
(42, 'md.', 'Abdul Momin', 'momin@gmail.com', 'Male', 'b', 'Bangladesh', 'Bogura', '0125'),
(43, 'md.', 'Abdul Momin', 'momin@gmail.com', 'Male', 'b', 'Bangladesh', 'Bogura', '0125'),
(44, 'Md.', 'Abdul Momin', 'moon@gmail.com', 'Male', 'Bogura', 'Bangladesh', 'Bogura', '5444444'),
(45, 'Md.', 'Abdul Momin', 'moon@gmail.com', 'Male', 'Bogura', 'Bangladesh', 'Bogura', '5444444'),
(49, 'Md.', 'Moon Miah', 'mmasfiqurrahman5779@gmail.com', 'Male', 'Bogura', 'Bangladesh', 'Bogura', '12345678'),
(50, 'Md.', 'Moon Miah', 'mmasfiqurrahman5779@gmail.com', 'Male', 'Bogura', 'Bangladesh', 'Bogura', '12345678'),
(54, 'sumi', 'sumi', 's@gmail.com', 'Female', 'kishoregonj', 'Bangladesh', 'kishoregonj', '0595956'),
(57, 'Md', 'Titu', 'titu@gmail.com', 'Male', 'Bogura', 'Bangladesh', 'Bogura', '01245785'),
(58, 'Md.', 'Tanmoy', 'tanmoy@gmail.com', 'Male', 'Bogura', 'Bangladesh', 'Bogura', '2056485'),
(59, 'Md', 'Tanmoy', 'tanmoy@gmail.com', 'male', 'Bogura', 'Bangladesh', 'Bogura', '845612385'),
(60, 'htgf', 'fdv', 'w@gmail.com', 'male', 'n', 'n', 'n', '52'),
(61, 'Md.', 'Al amin', 'admin@gmail.com', 'Male', 'Bogura', 'Bangladesh', 'Bogura', '6354210');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `price` varchar(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `details` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_type`, `price`, `photo`, `details`) VALUES
(1, 'Predential suite', '4500', 'predential suite.jpg', 'Facilities:\r\n-> Air-Conditioning.\r\n-> En-Suite Bathroom.\r\n-> IDD Telephone.\r\n-> Satellite Television.\r\n-> Hot/Cold Water.\r\n-> Luxury Toiletries.\r\n-> Slippers.\r\n****\r\nOther services :\r\n•	24 Hours Room Service.\r\n•	Wi-Fi Internet Connection.\r\n•	Airport Pick-Up Services.\r\n•	Wheel-Chair Access.\r\n•	Laundry Service.\r\n•	Bell Desk Service.\r\n•	In-House Telephone Service.'),
(2, 'Deluxe Suite ', '3800', 'deluxe suite.jpg', 'Facilities:\r\n-> Air-Conditioning.\r\n-> En-Suite Bathroom.\r\n-> IDD Telephone.\r\n-> Satellite Television.\r\n-> Hot/Cold Water.\r\n-> Semi Luxury Toiletries.\r\n-> Slippers.\r\n****\r\nOther services:\r\n•	24 Hours Room Service.\r\n•	Wi-Fi Internet Connection.\r\n•	Airport Pick-Up Services.\r\n•	Wheel-Chair Access.\r\n•	Laundry Service.\r\n•	Bell Desk Service.\r\n•	In-House Telephone Service.\r\n'),
(3, 'Super Deluxe', '3000', 'super deluxe.jpg', 'Facilities:\r\n-> Air-Conditioning.\r\n-> En-Suite Bathroom.\r\n-> IDD Telephone.\r\n-> Satellite Television.\r\n-> Hot/Cold Water.\r\n-> Deluxe Toiletries.\r\n-> Slippers.\r\n****\r\nOther services: \r\n•	24 Hours Room Service.\r\n•	Wi-Fi Internet Connection.\r\n•	Airport Pick-Up Services.\r\n•	Wheel-Chair Access.\r\n•	Laundry Service.\r\n•	Bell Desk Service.\r\n•	In-House Telephone Service.\r\n'),
(4, 'Deluxe', '2600', 'deluxe.jpg', '					  					  					  					  					  					  					  Facility:  \r\n-> Air-Conditioning.\r\n-> En-Suite Bathroom.\r\n-> IDD Telephone.\r\n-> Satellite Television.\r\n-> Hot/Cold Water.\r\n-> Deluxe Toiletries.\r\n-> Slippers.             .\r\n****\r\nOther services: \r\n•	24 Hours Room Service.\r\n•	Wi-Fi Internet Connection.\r\n•	Airport Pick-Up Services.\r\n•	Wheel-Chair Access.\r\n•	Laundry Service.\r\n•	Bell Desk Service.\r\n•	In-House Telephone Service.\r\n					\r\n					\r\n					  '),
(5, 'Standard', '1500', 'standard.jpg', 'Facilities :\r\n-> Air-Conditioning.\r\n-> En-Suite Bathroom.\r\n-> IDD Telephone.\r\n-> Satellite Television.\r\n-> Hot/Cold Water.\r\n-> Deluxe Toiletries.\r\n-> Slippers.\r\n****\r\nOther services :\r\n•	24 Hours Room Service.\r\n•	Wi-Fi Internet Connection.\r\n•	Airport Pick-Up Services.\r\n•	Wheel-Chair Access.\r\n•	Laundry Service.\r\n•	Bell Desk Service.\r\n•	In-House Telephone Service.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_payment`
--

CREATE TABLE `tb_payment` (
  `p_id` int(11) NOT NULL,
  `getway` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `t_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_payment`
--

INSERT INTO `tb_payment` (`p_id`, `getway`, `amount`, `a_name`, `t_id`) VALUES
(1, 'Bkash', 1200, 'Aziz', 'gu6dgu2'),
(2, 'Rocket', 1000, 'sultana razia', 'csdcc'),
(3, 'Bkash', 2000, 'Aziz', 'hbh'),
(4, 'Rocket', 1000, 'sumi', 'scvd'),
(5, 'bkash', 2000, 'habib', 'gdfchnc'),
(6, 'Bkash', 2000, 'Sabbir', 'cvdvdv'),
(7, 'Bkash', 4646, 'kkkkghmnfvb', 'fwe'),
(8, 'Bkash', 785, 'Moon', 'vdsc'),
(19, 'Rocket', 1000, 'Sadik', 'df5trhf'),
(20, 'Rocket', 10, 'Momin', 'dsc3dxs'),
(21, 'Rocket', 1000, 'Alamin', 'fv5rggf');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_no` int(5) NOT NULL,
  `extra_bed` int(11) NOT NULL,
  `breakfast` int(101) NOT NULL,
  `lunch` int(100) NOT NULL,
  `dinner` int(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `days` int(2) NOT NULL,
  `checkin` date NOT NULL,
  `checkin_time` time NOT NULL DEFAULT current_timestamp(),
  `checkout` date NOT NULL,
  `checkout_time` time NOT NULL,
  `bill` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `guest_id`, `room_id`, `room_no`, `extra_bed`, `breakfast`, `lunch`, `dinner`, `status`, `days`, `checkin`, `checkin_time`, `checkout`, `checkout_time`, `bill`) VALUES
(1, 2, 1, 1, 1, 0, 0, 0, 'Check Out', 2, '2020-07-30', '13:54:55', '2020-08-01', '14:41:48', '4800'),
(2, 3, 4, 2, 0, 0, 0, 0, 'Check Out', 1, '2020-07-31', '14:41:12', '2020-07-31', '19:33:56', '3800'),
(3, 4, 1, 2, 0, 0, 0, 0, 'Check Out', 2, '2020-08-03', '19:34:23', '2020-08-04', '19:34:36', '4000'),
(4, 5, 1, 210, 0, 0, 0, 0, 'Check Out', 1, '2020-08-15', '13:48:34', '2020-08-15', '13:49:01', '2000'),
(5, 6, 1, 250, 0, 0, 0, 0, 'Check Out', 2, '2020-08-25', '22:12:23', '2020-08-25', '22:15:01', '4000'),
(9, 10, 1, 1, 1, 0, 0, 0, 'Check Out', 2, '2020-08-25', '23:59:58', '2020-08-25', '00:00:09', '5200'),
(10, 11, 1, 12, 0, 0, 0, 0, 'Check Out', 1, '2020-08-27', '14:13:51', '2020-08-25', '14:14:33', '2200'),
(11, 12, 1, 101, 1, 0, 0, 0, 'Check Out', 1, '2020-09-24', '08:58:59', '2020-10-01', '12:59:08', '5300'),
(13, 14, 1, 202, 0, 0, 0, 0, 'Check Out', 2, '2020-09-21', '01:04:48', '2020-09-22', '01:05:31', '4400'),
(15, 16, 3, 1, 0, 0, 0, 0, 'Check Out', 1, '2020-09-24', '15:44:51', '2020-09-27', '16:08:32', '2800'),
(16, 17, 1, 102, 0, 0, 0, 0, 'Check Out', 2, '2020-09-27', '14:55:59', '2020-09-28', '14:56:11', '4400'),
(17, 18, 1, 103, 0, 0, 0, 0, 'Check Out', 2, '2020-09-27', '15:20:40', '2020-09-28', '15:21:33', '4400'),
(18, 19, 1, 758, 1, 1, 1, 1, 'Check Out', 1, '2020-09-28', '16:31:23', '2020-09-27', '16:33:15', '3700'),
(19, 20, 5, 103, 0, 0, 0, 0, 'Check Out', 1, '2020-10-03', '00:00:00', '2020-09-27', '00:58:55', '4000'),
(20, 21, 2, 450, 1, 1, 1, 1, 'Check Out', 1, '2020-10-01', '16:36:48', '2020-09-27', '16:37:52', '3900'),
(21, 23, 2, 920, 0, 1, 0, 0, 'Check Out', 1, '2020-10-02', '18:51:10', '2020-09-27', '18:51:29', '2550'),
(22, 24, 1, 101, 0, 0, 0, 0, 'Check Out', 1, '2020-10-08', '18:59:53', '2020-09-27', '19:07:13', '2200'),
(23, 25, 1, 104, 0, 0, 0, 1, 'Check Out', 1, '2020-10-02', '00:56:09', '2020-09-27', '00:56:37', '2450'),
(24, 26, 2, 506, 0, 2, 2, 2, 'Check Out', 2, '2020-09-30', '00:41:29', '2020-09-29', '00:41:59', '6400'),
(25, 27, 5, 101, 0, 0, 1, 1, 'Check Out', 2, '2020-10-01', '20:59:19', '2020-10-01', '21:09:53', '3550'),
(26, 28, 4, 102, 1, 1, 1, 1, 'Check Out', 1, '2020-10-09', '21:02:47', '2020-09-30', '21:09:39', '4000'),
(27, 29, 3, 145, 1, 1, 1, 1, 'Check Out', 1, '2020-10-01', '21:11:52', '2020-09-30', '21:23:08', '4500'),
(28, 30, 5, 123, 1, 1, 1, 1, 'Check Out', 1, '2020-09-30', '21:15:43', '2020-09-30', '21:23:17', '3000'),
(29, 31, 3, 105, 0, 1, 1, 1, 'Check Out', 1, '2020-10-03', '21:17:45', '2020-09-30', '21:23:32', '3700'),
(30, 33, 5, 103, 2, 1, 1, 1, 'Check Out', 1, '2020-10-10', '21:20:02', '2020-09-30', '21:23:28', '3800'),
(31, 34, 1, 345, 1, 1, 1, 1, 'Check Out', 1, '2020-10-09', '21:22:51', '2020-09-30', '21:23:22', '6000'),
(32, 35, 2, 562, 1, 1, 1, 1, 'Check Out', 1, '2020-10-01', '21:27:23', '2020-09-30', '21:27:28', '5300'),
(33, 36, 5, 103, 1, 1, 1, 1, 'Check Out', 1, '2020-10-01', '17:32:23', '2020-09-30', '21:32:39', '3000'),
(34, 37, 4, 105, 1, 1, 1, 1, 'Check Out', 1, '2020-10-10', '08:52:29', '2020-10-01', '12:52:54', '4000'),
(35, 37, 4, 203, 0, 0, 0, 0, 'Check Out', 1, '2020-10-05', '18:18:57', '2020-10-06', '22:19:08', '2500'),
(38, 49, 2, 523, 0, 0, 0, 0, 'Check Out', 1, '2020-10-30', '18:26:36', '2020-10-06', '01:00:00', '3800'),
(39, 51, 2, 204, 0, 0, 0, 0, 'Check Out', 1, '2020-10-05', '18:21:13', '2020-10-06', '18:21:19', '3800'),
(40, 55, 5, 222, 1, 1, 1, 1, 'Check Out', 1, '2020-10-06', '18:28:00', '2020-10-06', '14:28:08', '3000'),
(41, 56, 4, 222, 1, 1, 1, 1, 'Check Out', 1, '2020-10-16', '18:29:05', '2020-10-06', '18:29:15', '4000'),
(42, 57, 5, 102, 0, 2, 2, 2, 'Check Out', 2, '2020-10-15', '21:26:40', '2020-10-07', '21:27:08', '4400'),
(43, 59, 4, 0, 0, 0, 0, 0, 'Pending', 0, '2020-10-13', '21:31:46', '0000-00-00', '00:00:00', ''),
(44, 61, 5, 0, 0, 0, 0, 0, 'Pending', 0, '2020-10-21', '21:36:18', '0000-00-00', '00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'masfiq', '$2y$10$rq/DE41YlObfFA3HeajPaOe1elc7qLYSg3yNY2OipVJBMGTWvxIey', '2020-08-12 14:42:29'),
(2, 'Jahangir', '$2y$10$E1L861kFHNSuYMa.dm30seeNJy5cTy2EoH2VfuM2uONlCYG35r9cS', '2020-08-15 19:39:01'),
(3, 'masfis', '$2y$10$XuvEXFm3P7YlMGJ03Z.Qius3fZqQS3Nsv0Gy1A28/7XxjA6gT2iZC', '2020-08-16 13:41:24'),
(4, 'admin', '$2y$10$kX6o7F4w4LJgrv4E3vLPbutMY7kwOyb8f86Yqbh9PorUp6fXzmuVm', '2020-08-23 19:38:35'),
(5, 'karim', '$2y$10$tVADVEEi4fv3Xqiom9uMyObhzV75m7L3rbbWM6t1WykTmIrJ8WqvG', '2020-09-15 15:10:17'),
(6, 'karim@gmail.com', '$2y$10$2iePy.jPflYIy5UTODCsXey4KAHo7kGT9SVh6rToezxr2zJSrCGOS', '2020-09-15 19:01:44'),
(7, 'habib@gmail.com', '$2y$10$lNgnPu7aZg0zLxO8rfl.ke2WMOvDG5dCcK7d//patL/G.G2eMVAPu', '2020-09-15 19:02:21'),
(8, 'sultana', '$2y$10$sQW7/sKrvNNENsQx7PX/OuUC/COLbUOsh7kujowblWU3oTmEq/h4C', '2020-09-20 21:01:38'),
(9, 'alomgir', '$2y$10$hTO30.u3TnPvXb8ljtoc6eZ2qDbW7svcNQ3KLAe1EDZIoMV5qAspm', '2020-09-26 10:50:20'),
(10, 'adnan', '$2y$10$BfDO93uIVdCDk.USUq3ERuVOzfp3QNUNOEyfsojhcBsgVgsGcYAES', '2020-09-27 20:38:12'),
(16, 'alamin@gmail.com', '$2y$10$xpQDk/X3Vz/4IqaFh.GJRuR3YyihMkZUu9Sgja9dBbMUUpL11uGAu', '2020-10-05 21:38:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `feadback`
--
ALTER TABLE `feadback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `tb_payment`
--
ALTER TABLE `tb_payment`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `t_id` (`t_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feadback`
--
ALTER TABLE `feadback`
  MODIFY `f_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_payment`
--
ALTER TABLE `tb_payment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
