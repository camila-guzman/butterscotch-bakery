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
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `ID` int(4) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`ID`, `FirstName`, `LastName`, `Email`, `Username`, `Password`) VALUES
(9347, 'Andrew', 'Castillo', 'andrew@gmail.com', 'andrew', '$2y$10$hVXxt9UsXX0MrnN0XV39SOIXFUAOf9OnTyacER2AE5R55658wa2hC'),
(5472, 'Dig', 'Test', 'digtest@ucf.edu', 'dig3134user', '$2y$10$8b6Bg6ZxwjJC4LVhO9.3Me1NpsR8817R.VCV5Upxu9KtltmkASg.u'),
(1324, 'Fabiola', 'Pena', 'fabi@gmail.com', 'fabi', '$2y$10$ZHWR8DX8B3e2dQW1SuXL4.pg1nOrEzUbEUkE8LXIQs4B8wTyv7y/S');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
