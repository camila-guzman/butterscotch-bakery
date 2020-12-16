-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 01:36 AM
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
-- Database: `butterscotch-bakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `ID` int(4) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Price` decimal(4,2) NOT NULL,
  `URL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`ID`, `Name`, `Type`, `Price`, `URL`) VALUES
(1, 'Brownie', 'Sweet', '3.50', 'images/sweet-images/toa-heftiba-brownie-square.jpg'),
(2, 'Peanut Butter Chocolate Chip Cookie', 'Sweet', '3.50', 'images/sweet-images/mae-mu-cookies-square.jpg'),
(3, 'Chocolate Raspberry Cake Slice', 'Sweet', '4.50', 'images/sweet-images/taylor-kiser-raspberry-chocolate-cake-square.jpg'),
(4, 'Strawberry Waffles', 'Sweet', '5.50', 'images/sweet-images/mae-mu-waffles-square.jpg'),
(5, 'Pumpkin Pie Pancakes', 'Sweet', '5.50', 'images/sweet-images/mae-mu-pancakes-square.jpg'),
(6, 'Za\'atar Croissant', 'Savory', '3.50', 'images/savory-images/mae-mu-croissant-square.jpg'),
(7, 'Sunny-Side Sandwich', 'Savory', '5.50', 'images/savory-images/mae-mu-egg-sandwich-square.jpg'),
(8, 'Lemon Rosemary Focaccia', 'Savory', '4.50', 'images/savory-images/amber-engle-lemon-rosemary-focaccia-square.jpg'),
(9, 'Coffee', 'Drink', '2.50', 'images/savory-images/amber-engle-lemon-rosemary-focaccia-square.jpg'),
(10, 'Iced Coffee', 'Drink', '2.50', 'images/drinks-images/hannah-denson-coffee-square.jpg'),
(11, 'Tea', 'Drink', '2.50', 'images/drinks-images/mae-mu-iced-coffee-square.jpg'),
(12, 'Iced Tea', 'Drink', '2.50', 'images/drinks-images/mae-mu-iced-tea-square.jpg'),
(13, 'Iced Matcha Green Tea', 'Drink', '3.00', 'images/drinks-images/mae-mu-matcha-square.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
