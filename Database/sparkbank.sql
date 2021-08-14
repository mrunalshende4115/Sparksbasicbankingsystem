-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 04:06 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparkbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactiondetails`
--

CREATE TABLE `transactiondetails` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(10) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactiondetails`
--

INSERT INTO `transactiondetails` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Mrunal Shende', 'Mangal Shende', 100, '2021-08-12 21:49:01'),
(2, 'Mrunal Shende', 'Sai Shende', 1000, '2021-08-12 21:52:21'),
(4, 'Tanaya Solat', 'Snehal Tambe', 1000, '2021-08-14 15:31:23'),
(5, 'Sakshi Kale', 'Sai Shende', 2000, '2021-08-14 15:31:51'),
(6, 'Tanaya Solat', 'Jyoti Kale', 300, '2021-08-14 19:33:04'),
(7, 'Pushkar Shaikh', 'Sai Shende', 600, '2021-08-14 19:33:53'),
(8, 'Mrunal Shende', 'Pushkar Shaikh', 2000, '2021-08-14 19:34:15'),
(9, 'Prakash Pawar', 'Sakshi Kale', 5000, '2021-08-14 19:34:44'),
(10, 'Amita Shanahe', 'Snehal Tambe', 7000, '2021-08-14 19:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Mrunal Shende', 'mrunalshende@gmail.com', 72000),
(2, 'Mangal Shende', 'mangalshende@gmail.com', 50000),
(3, 'Snehal Tambe', 'snehaltambe@gmail.com', 38000),
(4, 'Sai Shende', 'saishende@gmail.com', 43600),
(5, 'Sakshi Kale', 'sakshikale@gmal.com', 38000),
(6, 'Tanaya Solat', 'tanayasolat@gmail.com', 53700),
(7, 'Prakash Pawar', 'prakashpawar@gmail.com', 20000),
(8, 'Prashant Shinde', 'prashantshinde@gmail.com', 15000),
(9, 'Jyoti Kale', 'jyotikale@gmail.com', 2600),
(10, 'Amita Shanahe', 'amitashanahe@gmail.com', 33000),
(11, 'Pushkar Shaikh', 'pushkarshaikh@gmail.com', 13400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactiondetails`
--
ALTER TABLE `transactiondetails`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactiondetails`
--
ALTER TABLE `transactiondetails`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
