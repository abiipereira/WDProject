-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 05:04 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amp update`
--

-- --------------------------------------------------------

--
-- Table structure for table `decor`
--

CREATE TABLE `decor` (
  `id` int(4) NOT NULL,
  `product_code` varchar(4) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_description` varchar(2000) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` int(5) NOT NULL,
  `decor_type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decor`
--

INSERT INTO `decor` (`id`, `product_code`, `product_name`, `product_description`, `qty`, `price`, `decor_type`) VALUES
(1, 'DEC1', 'Candle Stand', 'Enhance the look of your living room with AMP Decor\r\nDesigned skillfully from quality materials to combine functionality with aesthetics,This product makes the right pick for any home.', 37, 5000, 'Candle Stand'),
(2, 'DEC2', 'Minimimalistic', 'Enhance the look of your living room with AMP Decor\r\n\r\nDesigned skillfully from quality materials to combine functionality with aesthetics,This product makes the right pick for any home.', 37, 4000, 'Plant'),
(3, 'DEC3', 'Ceramic Cactus', 'Enhance the look of your living room with AMP Decor\r\n\r\nDesigned skillfully from quality materials to combine functionality with aesthetics,This product makes the right pick for any home.', 37, 2000, 'Plant'),
(4, 'DEC4', 'Plant Pot', 'Enhance the look of your living room with AMP Decor\r\nDesigned skillfully from quality materials to combine functionality with aesthetics,This product makes the right pick for any home.', 37, 4500, 'Plant'),
(5, 'DEC5', 'Mini Tree', 'Enhance the look of your living room with AMP Decor\r\nDesigned skillfully from quality materials to combine functionality with aesthetics,This product makes the right pick for any home.', 37, 4300, 'Plant'),
(6, 'DEC6', 'Plant Potter', 'Enhance the look of your living room with AMP Decor\r\nDesigned skillfully from quality materials to combine functionality with aesthetics,This product makes the right pick for any home.', 37, 3300, 'Plant'),
(7, 'DEC7', 'Wall Hanging', 'Enhance the look of your living room with AMP Decor\r\nDesigned skillfully from quality materials to combine functionality with aesthetics,This product makes the right pick for any home.', 37, 3500, 'Plant'),
(8, 'DEC8', 'Home Deco', 'Enhance the look of your living room with AMP Decor\r\nDesigned skillfully from quality materials to combine functionality with aesthetics,This product makes the right pick for any home.', 37, 5600, 'Wall Decor'),
(9, 'DEC9', 'Tall Lamp', 'Enhance the look of your living room with AMP Decor\r\nDesigned skillfully from quality materials to combine functionality with aesthetics,This product makes the right pick for any home.', 37, 6000, 'Lamp');

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `id` int(4) NOT NULL,
  `product_code` varchar(4) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_description` varchar(2000) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` int(5) NOT NULL,
  `material` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`id`, `product_code`, `product_name`, `product_description`, `qty`, `price`, `material`) VALUES
(1, 'FUR1', 'Modern Chair', 'Add oodles of style to your home with an exciting range of designer furniture. AMP promise to delive', 37, 5600, 'Wood'),
(2, 'FUR2', 'Poang Chair', 'Add oodles of style to your home with an exciting range of designer furniture. AMP promise to deliver best quality products at best prices.', 37, 5600, 'Fiber'),
(3, 'FUR3', 'White Chair', 'Add oodles of style to your home with an exciting range of designer furniture. AMP promise to deliver best quality products at best prices.', 37, 5000, 'Wood'),
(4, 'FUR4', 'Coffee Table', 'Add oodles of style to your home with an exciting range of designer furniture. AMP promise to deliver best quality products at best prices.', 37, 7000, 'Wood'),
(5, 'FUR5', 'Small Table', 'Add oodles of style to your home with an exciting range of designer furniture. AMP promise to deliver best quality products at best prices.', 37, 5500, 'Wood'),
(6, 'FUR6', 'Night Stand', 'Add oodles of style to your home with an exciting range of designer furniture. AMP promise to deliver best quality products at best prices.', 37, 5600, 'Fiber'),
(7, 'FUR7', 'Rocking Chair', 'Add oodles of style to your home with an exciting range of designer furniture. AMP promise to deliver best quality products at best prices.', 37, 3600, 'Wood'),
(8, 'FUR8', 'Side Table', 'Add oodles of style to your home with an exciting range of designer furniture. AMP promise to deliver best quality products at best prices.', 37, 5200, 'Fiber'),
(9, 'FUR9', 'Metallic Chair', 'Add oodles of style to your home with an exciting range of designer furniture. AMP promise to deliver best quality products at best prices.', 37, 8600, 'Fiber');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(15) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_code`, `product_name`, `product_desc`, `price`, `units`, `total`, `date`, `email`) VALUES
(13, 'AMP1', 'Modern Chair', 'Takatak chalega ekdum mast', 5000, 1, 5000, '2018-09-23 19:36:31', 'pratikm1910@gmail.com'),
(14, 'AMP2', 'Minimalistic Plant Pot', 'Sab green hai', 500, 1, 500, '2018-09-23 19:36:31', 'pratikm1910@gmail.com'),
(15, 'AMP1', 'Modern Chair', 'Takatak chalega ekdum mast', 5000, 1, 5000, '2018-09-23 19:40:01', 'pratikm1910@gmail.com'),
(16, 'AMP1', 'Modern Chair', 'Takatak chalega ekdum mast', 5000, 1, 5000, '2018-09-23 19:58:17', 'pratikm1910@gmail.com'),
(17, 'AMP3', 'Modern Chair', 'Takatak chalega ekdum mast', 5000, 37, 185000, '2018-09-27 07:44:44', 'mugda@nadra.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `qty`, `price`) VALUES
(1, 'AMP1', 'Modern Chair', 'Takatak chalega ekdum mast', 34, '5000.00'),
(2, 'AMP2', 'Minimalistic Plant Pot', 'Sab green hai', 99, '500.00'),
(3, 'AMP3', 'Modern Chair', 'Takatak chalega ekdum mast', 0, '5000.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `email`, `password`, `type`) VALUES
(7, 'mugda', 'nadra', 'xy', 'xyz', 45563, 'mugda@nadra.com', 'mugda', 'user'),
(8, 'pratikm1910@gmail.com', 'Mulchandani', '61, Ocean View', 'Mumbai', 400005, 'imachu@heheh.com', 'imachu', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
