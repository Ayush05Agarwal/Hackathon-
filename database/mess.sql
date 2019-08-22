-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2018 at 12:40 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mess`
--

-- --------------------------------------------------------

--
-- Table structure for table `contains`
--

CREATE TABLE `contains` (
  `meal_id` int(10) NOT NULL,
  `menu_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contains`
--

INSERT INTO `contains` (`meal_id`, `menu_id`) VALUES
(0, 2),
(0, 1),
(0, 2),
(0, 2),
(0, 2),
(0, 1),
(0, 1),
(0, 2),
(9, 1),
(11, 2),
(13, 1),
(13, 2),
(13, 3),
(13, 1),
(13, 2),
(13, 3),
(13, 1),
(14, 1),
(15, 2),
(16, 3),
(16, 1),
(16, 2),
(16, 3),
(16, 1),
(16, 2),
(16, 3),
(16, 1),
(16, 2),
(16, 3),
(16, 1),
(16, 2),
(16, 3),
(16, 1),
(16, 1),
(16, 2);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(50) NOT NULL,
  `response` varchar(11) NOT NULL,
  `date0` date NOT NULL,
  `time0` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `response`, `date0`, `time0`) VALUES
('ayushaga0512@gmail.com', 'yes', '2018-09-29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE `meal` (
  `meal_id` int(10) NOT NULL,
  `date0` date NOT NULL,
  `time0` int(11) NOT NULL,
  `max_orders` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`meal_id`, `date0`, `time0`, `max_orders`, `status`) VALUES
(0, '2018-09-29', 0, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 0, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 0, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 1, 0, 1),
(0, '2018-09-29', 0, 0, 1),
(0, '2018-09-29', 0, 0, 1),
(0, '2018-09-29', 0, 0, 1),
(0, '2018-09-29', 0, 0, 1),
(0, '0000-00-00', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `mem_id` int(20) NOT NULL,
  `validity` int(11) NOT NULL,
  `no_of_meals` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`mem_id`, `validity`, `no_of_meals`, `amount`) VALUES
(2, 3, 190, 6000),
(3, 6, 390, 12000),
(4, 12, 820, 12000);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `price` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `name`, `price`, `status`, `category`) VALUES
(1, 'masoor_daal', 40, 0, 'daal'),
(2, 'black', 60, 0, 'daal'),
(3, 'yellow', 70, 0, 'daal'),
(4, 'green', 30, 0, 'daal'),
(5, 'potato', 20, 0, 'sabji'),
(6, 'tomato', 20, 0, 'sabji'),
(7, 'onion', 30, 0, 'sabji'),
(8, 'tawa', 5, 0, 'roti'),
(9, 'missi', 5, 0, 'roti'),
(10, 'rasgulla', 20, 0, 'sweets'),
(11, 'gulabjamun', 10, 0, 'sweets'),
(12, 'salad/papad', 10, 0, 'extras'),
(13, 'rice', 30, 0, 'extras'),
(14, '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `mess_login`
--

CREATE TABLE `mess_login` (
  `id` int(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mess_login`
--

INSERT INTO `mess_login` (`id`, `name`, `email`, `address`, `contact`, `password`) VALUES
(1, 'Ayush Agarwal', 'ayushaga0512@gmail.com', 'sanskshdiew', '8942134587', 'asdf'),
(2, 'JITESH', 'parvpavitrajain28@gmail.com', 'NDJKJDIHJUFJECFN', '8748958372', 'asdf'),
(3, 'd', 'A@FGX.COM', 'HJVKFRGVJKR', '4335837464', 'FRKNFRG'),
(4, 'ab', 'a@f', 'NDJKJDIHJUFJECFN', '4335837464', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `mess_login.php`
--

CREATE TABLE `mess_login.php` (
  `id` int(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `address` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `date0` date NOT NULL,
  `status` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `date0` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`date0`, `name`, `order_id`, `status`) VALUES
('2018-09-29', 'ayushaga0512@gmail.com', 1, 0),
('2018-09-29', 'ayushaga0512@gmail.com', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `email` varchar(40) NOT NULL,
  `order_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `take`
--

CREATE TABLE `take` (
  `date0` date NOT NULL,
  `mem_id` int(11) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `payment_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `take`
--

INSERT INTO `take` (`date0`, `mem_id`, `email_id`, `payment_status`) VALUES
('2028-09-18', 2, 'ayushaga0512@gmail.com', 0),
('2028-09-18', 1, 'ayushaga0512@gmail.com', 0),
('2028-09-18', 1, 'ayushaga0512@gmail.com', 0),
('2018-09-28', 3, 'ayushaga0512@gmail.com', 0),
('2018-09-28', 1, 'ayushaga0512@gmail.com', 0),
('2018-09-28', 2, 'ayushaga0512@gmail.com', 0),
('2018-09-28', 2, 'ayushaga0512@gmail.com', 0),
('2018-09-28', 2, 'ayushaga0512@gmail.com', 0),
('2018-09-28', 2, 'ayushaga0512@gmail.com', 0),
('2018-09-28', 2, 'ayushaga0512@gmail.com', 0),
('2018-09-28', 2, 'ayushaga0512@gmail.com', 0),
('2018-09-28', 2, 'ayushaga0512@gmail.com', 0),
('2018-09-28', 2, 'ayushaga0512@gmail.com', 0),
('2018-09-28', 2, 'ayushaga0512@gmail.com', 0),
('2018-09-29', 2, 'ayushaga0512@gmail.com', 0),
('2018-09-29', 1, 'ayushaga0512@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `mess_login`
--
ALTER TABLE `mess_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`(30));

--
-- Indexes for table `mess_login.php`
--
ALTER TABLE `mess_login.php`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `mem_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mess_login`
--
ALTER TABLE `mess_login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mess_login.php`
--
ALTER TABLE `mess_login.php`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
