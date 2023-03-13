-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 01:39 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `receptionalist`
--

-- --------------------------------------------------------

--
-- Table structure for table `check_in`
--

CREATE TABLE `check_in` (
  `id` int(255) NOT NULL,
  `f_name` varchar(25) DEFAULT NULL,
  `l_name` varchar(25) DEFAULT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `p_visit` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `check_in`
--

INSERT INTO `check_in` (`id`, `f_name`, `l_name`, `email`, `mobile`, `c_name`, `p_visit`, `created_at`) VALUES
(2, 'nasrath', 'fathima', 'iqhired@gmail', '898-909-9099', 'gfdjr', 'dada', '0000-00-00 00:00:00'),
(3, 'nasrath', 'fathima', 'aarun@gamil.com', '898-909-9099', 'gfdjr', 'dfwef', '0000-00-00 00:00:00'),
(8, 'sfasf', 'sdasd', 'fathima@gmail.com', '898-909-9099', 'sdsafdaf', 'sdasffdf', '2023-03-08 15:41:04'),
(9, 'nasrath', 'fathima', 'nasrath.f@iqhired.com', '898-909-9099', 'gfdjr', 'safdfd', '2023-03-09 09:36:36'),
(10, 'nasrath', 'fathima', 'iqhired@gmail', '898-909-9099', 'gfdjrsdfdsafd', 'sdbvsc', '2023-03-09 09:37:10'),
(11, 'nasrath', 'fathima', 'iqhired@gmail', '898-909-9099', 'gfdjrsdfdsafd', 'sdbvsc', '2023-03-09 09:38:01'),
(12, 'nasrath', 'fathima', 'nasrath.f@iqhired.com', '898-909-9099', 'gfdjr', 'rgfv', '2023-03-09 10:50:49'),
(13, 'faaa', 'ree', 'nasrath.f@iqhired.com', '898-909-9099', 'gfdjrsdfdsafd', ' dfewfew', '2023-03-09 17:02:09'),
(14, '', '', '', '', '', ' ', '2023-03-09 17:40:02'),
(15, 'nasrath', 'dsdsa', 'fathima@gmail.com', '898-909-9099', 'gfdjr', ' sada', '2023-03-09 17:42:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `check_in`
--
ALTER TABLE `check_in`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `check_in`
--
ALTER TABLE `check_in`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
