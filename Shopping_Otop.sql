-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2020 at 06:08 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `Shopping_Otop`
--

CREATE TABLE `Shopping_Otop` (
  `ID` int(11) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `content` varchar(200) NOT NULL,
  `pice` varchar(100) NOT NULL,
  `pic` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Shopping_Otop`
--

INSERT INTO `Shopping_Otop` (`ID`, `topic`, `content`, `pice`, `pic`) VALUES
(1, 'DEHYDRATED MANGO', '<p>YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK\r\nYAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK</p>', 'ADD Price 100', 'image/mangoreal.jpg'),
(2, 'DEHYDRATED GUAVA', '<p>YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK\r\nYAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK</p>', 'ADD price 50', 'image/Guava.jpg'),
(3, 'DEHYDRATED STRAWBERRY', '<p>YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK\r\nYAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK</p>', 'ADD price 50', 'image/straw.jpg'),
(4, 'DEHYDRATED Cherry Tomato', '<p>YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK\r\nYAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK</p>', 'ADD price', 'image/cherry tomoto.jpg'),
(5, 'DEHYDRATED Pink Guava', '<p>YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK\r\nYAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK</p>', 'ADD price 50', 'image/pinlGUAva.jpg'),
(6, 'DEHYDRATED Peach', '<p>YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK\r\nYAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK</p>', 'ADD price 50', 'image/peach.jpg'),
(7, 'DEHYDRATED Santol', '<p>YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK\r\nYAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK</p>', 'ADD price 50', 'image/Santol.jpg'),
(8, 'DEHYDRATED Passion Fruit', '<p>YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK\r\nYAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK</p>', 'ADD price 50', 'image/Passion Fruit.jpg'),
(9, 'DEHYDRATED Dragon Fruit', '<p>YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK\r\nYAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK</p>', 'ADD price 50', 'image/Dragon Fruit.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Shopping_Otop`
--
ALTER TABLE `Shopping_Otop`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Shopping_Otop`
--
ALTER TABLE `Shopping_Otop`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
