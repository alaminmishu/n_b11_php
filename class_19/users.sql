-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 12, 2022 at 02:20 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomdb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstname` varchar(1000) NOT NULL,
  `lastname` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `city` varchar(1000) NOT NULL,
  `country` varchar(1000) NOT NULL,
  `role` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `firstname`, `lastname`, `password`, `address`, `city`, `country`, `role`) VALUES
(5, 'kapsjacob@gmail.com', 'Jacob', 'John', '25d55ad283aa400af464c76d713c07ad', 'VIT', 'Vellore', 'India', 'admin'),
(6, 'ismail16smakosh23@gmail.com', 'ahmed', 'ali', '9193ce3b31332b03f7d8af056c692b84', 'N 26 Lot El Waha Errachidia', 'Errachidia', 'Morocco', 'client'),
(7, 'ismail@hotmail.com', 'omar', 'ahmed', 'd4466cce49457cfea18222f5a7cd3573', 'N 22 Lot El Waha Errachidia', 'Errachidia', 'Morocco', 'client'),
(8, 'venkat@gmail.com', 'Venkat', 'A', 'e10adc3949ba59abbe56e057f20f883e', 'Place in Bangalore', 'Bangalore', 'India', 'client'),
(9, 'badris@hotmail.com', 'abdo', 'badris', '267c88a9c130619b5e8fe370c0ae7730', 'N 48 Lot El Waha Errachidia', 'Errachidia', 'Morocco', 'client'),
(10, 'mus@hotmail.com', 'mus', 'ghallou', 'd62ec24d065e424dd816ce7828f62584', 'N 102 Cairo', 'Cairo', 'Egypt', 'client'),
(11, 'ali@ali.com', 'ali', 'ghallou', '86318e52f5ed4801abe1d13d509443de', 'N 23 Lot El Waha Errachidia', 'Errachidia', 'Morocco', 'client'),
(12, 'aaamishucse@gmail.com', 'Al Amin', 'Mishu', '25d55ad283aa400af464c76d713c07ad', 'Bashundhara', 'Dhaka', 'Egypt', 'client'),
(13, 'das', 'a', 'b', 'c4ca4238a0b923820dcc509a6f75849b', 'a', 'a', '', 'client'),
(14, 'b@b.com', 'b', 'b', '92eb5ffee6ae2fec3ad71c777531578f', 'b', 'b', '', 'client'),
(15, 'b@b.com', 'b', 'b', '92eb5ffee6ae2fec3ad71c777531578f', 'b', 'b', '', 'client'),
(16, 'b@b.com', 'b', 'b', '92eb5ffee6ae2fec3ad71c777531578f', 'b', 'b', '', 'client'),
(17, 'b@b.com', 'b', 'b', '92eb5ffee6ae2fec3ad71c777531578f', 'b', 'b', '', 'client'),
(18, 'abc@gmail.com', 'Al Amin', 'Mishu', 'e10adc3949ba59abbe56e057f20f883e', 'ABC', 'Dhaka', 'Egypt', 'client'),
(19, 'xyz@gmail.com', 'A', 'B', 'e10adc3949ba59abbe56e057f20f883e', 'C', 'D', '', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
