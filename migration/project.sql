-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 08:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest_id` varchar(128) NOT NULL,
  `guest_name` varchar(128) NOT NULL,
  `seat_type` varchar(128) NOT NULL,
  `seat_number` varchar(128) NOT NULL,
  `reg_date` varchar(128) NOT NULL,
  `payment_method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `guest_name`, `seat_type`, `seat_number`, `reg_date`, `payment_method`) VALUES
('ANO-05552-15052024', 'ANONUEVO, NINA  ANDREI', 'upper-box', '212', 'May 15, 2024', 'paymaya'),
('GAR-21781-16052024', 'Garcia, Florian ', 'vip-seated', '207', 'May 16, 2024', 'g-cash'),
('PAT-91062-16052024', 'Patootiee, Hannie ', 'vip-seated', '215', 'May 16, 2024', 'paymaya'),
('REY-29118-15052024', 'REY, HANNIE ', 'royalty', '210', 'May 15, 2024', 'paymaya'),
('SAG-51998-16052024', 'Sagmit, Andrei ', 'upper-box', '212', 'May 16, 2024', 'g-cash');

-- --------------------------------------------------------

--
-- Table structure for table `p_login`
--

CREATE TABLE `p_login` (
  `Username` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_login`
--

INSERT INTO `p_login` (`Username`, `Pass`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `p_login`
--
ALTER TABLE `p_login`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
