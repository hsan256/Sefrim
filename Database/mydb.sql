-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 12:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ordrs`
--

CREATE TABLE `ordrs` (
  `myid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `ordr` varchar(200) NOT NULL,
  `pr` varchar(20) NOT NULL,
  `sts` varchar(20) NOT NULL,
  `cdate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordrs`
--

INSERT INTO `ordrs` (`myid`, `uid`, `img`, `name`, `mobile`, `email`, `addr`, `ordr`, `pr`, `sts`, `cdate`) VALUES
(28, 3, 'img/.jpg', 'dddd', '+4354354', 'dd@gmail.com', 'sdsdefd', 'Photoshop', '$100', 'Pending', '2017-10-16'),
(27, 3, 'img/11.jpg', 'dd done', '+64143434', 'dd@gmail.com', 'dd new order Taxes America', 'CSS ', '$200', 'Dispatched', '2017-10-16'),
(26, 2, 'img/11.jpg', 'David ', '+374341', 'david@gmail.com', 'My new NY Address David America', 'CSS ', '$200', 'Dispatched', '2017-10-16'),
(29, 3, 'img/.jpg', 'dsdasd', '+54645', 'dd', 'sdasdsd', 'Photoshop', '$100', 'Pending', '2017-10-16'),
(25, 2, 'img/.jpg', 'David', '+75435434', 'david@gmail.com', 'dfsdde David NY', 'Photoshop', '$100', 'Dispatched', '2017-10-16'),
(30, 2, 'img/.jpg', 'rrrr', '+14314543', 'jj@gmail.com', 'jj Ny City ', 'Photoshop', '$100', 'Pending', '2017-10-19'),
(31, 2, 'img/11.jpg', 'rr', 'rr', 'rr', 'rrr', 'CSS ', '$200', 'Pending', '2017-10-19'),
(32, 2, 'img/.jpg', 'jj', '+5435413', 'jj@example.com', 'fddsfsdf', 'Photoshop', '$100', 'Pending', '2017-10-19'),
(33, 2, 'img/.jpg', 'jj', '+41354134', 'jj@example.com', 'sdahksahd', 'Photoshop', '$100', 'Pending', '2017-10-19'),
(34, 2, 'img/16.jpg', 'jj', '+54135441', 'jj@example.com', 'fdfdsffs', 'Blogger', '$200', 'Pending', '2017-10-19'),
(35, 1, 'img/15.jpg', 'admin', '+34414', 'admin@example.com', 'customerbehalf link access ', 'PHP ', '$400', 'Pending', '2017-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `des` varchar(150) NOT NULL,
  `pr` varchar(20) NOT NULL,
  `cdate` varchar(20) NOT NULL,
  `tauxpromo` int(10) NOT NULL,
  `pub` int(10) NOT NULL,
  `img_pub` varchar(25) NOT NULL,
  `oldpr` int(10) NOT NULL,
  `quantite` int(10) NOT NULL,
  `quantite_promo` int(10) NOT NULL,
  `view_pub` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `img`, `name`, `des`, `pr`, `cdate`, `tauxpromo`, `pub`, `img_pub`, `oldpr`, `quantite`, `quantite_promo`, `view_pub`) VALUES
(5, 'img/5.jpg', 'Ananas', 'Fruit\r\n', '5.6', '2020-4-16', 20, 1, 'img_pub/5.jpg', 7, 5, 5, 6),
(15, 'img/15.jpg', 'Figue', 'Fruit', '2', '2020-4-16', 50, 1, 'img_pub/15.jpg', 4, 7, 5, 17),
(10, 'img/10.jpg', 'Onion', 'Légume', '0.8', '2020-4-16', 20, 1, 'img_pub/10.jpg', 1, 5, 4, 18),
(18, 'img/18.png', 'Fraise', 'Fruit', '1.8', '2020-4-16', 10, 1, 'img_pub/18.png', 2, 5, 5, 0),
(12, 'img/12.jpg', 'Pastèque', 'Fruit', '0.450', '2020-4-16', 0, 0, 'img_pub/12.jpg', 0, 0, 0, 0),
(11, 'img/11.jpg', 'Citron', 'Fruit', '3.500', '2020-4-16', 0, 0, 'img_pub/11.jpg', 0, 5, 0, 0),
(25, 'img/25.jpg', 'Banane', 'Fruit', '3.900', '2020-4-16', 0, 0, 'img_pub/25.jpg', 0, 0, 0, 0),
(26, 'img/26.jpg', 'Tomate', 'Fruit', '1.000', '2020-4-16', 0, 0, 'img_pub/26.jpg', 0, 0, 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `joining_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `joining_date`) VALUES
(1, 'admin', 'admin@example.com', '123', '2017-10-15 11:33:28'),
(2, 'Hsan', 'jj@example.com', 'Hsan123', '2017-10-15 11:33:48'),
(3, 'dd', 'dd@gmail.com', '$2y$10$KR3HabnOr3dgusF4XWJnQ.jnVcNfl8adjN4onmTr66/y045MCCyam', '2017-10-16 07:19:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ordrs`
--
ALTER TABLE `ordrs`
  ADD PRIMARY KEY (`myid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ordrs`
--
ALTER TABLE `ordrs`
  MODIFY `myid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
