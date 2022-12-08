-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2022 at 11:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `23aug_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `amount_table`
--

CREATE TABLE `amount_table` (
  `ONM` int(11) DEFAULT NULL,
  `AMT` varchar(50) DEFAULT NULL,
  `ODE` date DEFAULT NULL,
  `CNM` int(11) DEFAULT NULL,
  `SNO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amount_table`
--

INSERT INTO `amount_table` (`ONM`, `AMT`, `ODE`, `CNM`, `SNO`) VALUES
(3001, '18.69', '1994-10-03', 201, 1007),
(3002, '1900.1', '1994-10-03', 207, 1004),
(3003, '767.19', '1994-10-03', 201, 1001),
(3005, '3005', '1994-10-03', 203, 1002),
(3006, '3006', '1994-10-04', 201, 1007),
(3007, '3007', '1994-10-05', 204, 1002),
(3008, '3008', '1994-10-05', 206, 1001),
(3009, '3009', '1994-10-04', 202, 1003),
(3010, '3010', '1994-10-06', 204, 1002),
(3011, '3011', '1994-10-06', 206, 1001);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
