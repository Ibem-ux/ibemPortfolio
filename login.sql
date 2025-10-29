-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2025 at 08:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES
(1, 'junard', 'bayot', '12312@gmail.com', '4297f44b13955235245b2497399d7a93'),
(2, 'ibem', 'hatdogu', 'ibem.hatdogu@gmail.com', '4297f44b13955235245b2497399d7a93'),
(3, 'ibem', 'hatdogu', '122hatdogu@gmail.com', '4297f44b13955235245b2497399d7a93'),
(4, 'Nhovem', 'Cabahug', 'ncabahug223@gmail.com', 'f7a69e0a0d929b2ffab3f5b9236102eb'),
(5, 'nica', 'cute', 'nica.cute@gmail.com', '63c9b974c338e35d2f0def875a3cc782'),
(6, 'sam', 'ananias', 'sam123123@gmail.com', '4297f44b13955235245b2497399d7a93'),
(7, 'gwen', 'putot', 'gwen.putot@gmail.com', '4297f44b13955235245b2497399d7a93'),
(8, 'kyle john', 'hatdog', 'hatdog1to9@gmail.com', '52059d00dc42fb8972f17b778ba9dd27');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
