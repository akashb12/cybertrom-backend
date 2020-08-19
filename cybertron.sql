-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 12:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cybertron`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `firstName`, `lastName`, `age`, `description`, `image`, `date`) VALUES
(2, ' Akash', ' Banaulikar', 23, 'i am studying in gec', 'akash.jpg', '2020-08-16'),
(4, ' Nidhi', ' Bhat', 22, 'i am studying in gec', 'nidhi.png', '2020-08-16'),
(5, ' Arun', ' Banaulikar', 57, 'i am working in gec', 'arun.jpg', '2020-08-16'),
(6, ' Nikita', ' Banaulikar', 28, 'i am studying in school', 'nikita.jpg', '2020-08-16'),
(7, ' Shreya', ' Bhat', 24, 'i am studying in gec', 'shreya.png', '2020-08-16'),
(8, ' Shravani', ' Banaulikar', 26, 'i am working in chromton', 'shravani.png', '2020-08-16'),
(9, ' Surendra', ' Bhat', 60, 'i am working in sesa', 'surendra.jpg', '2020-08-16'),
(10, ' Aniket', ' Banaulikar', 32, 'working in diakin', 'aniket.jpg', '2020-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `date`) VALUES
(1, 'akashbanaulikar05@gmail.com', 'akash123', '2020-08-13'),
(2, ' akash@gmail.com', 'akash', '2020-08-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
