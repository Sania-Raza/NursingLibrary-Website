-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2025 at 06:20 AM
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
-- Database: `nursing_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `author` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `cover_image` varchar(225) NOT NULL,
  `category` varchar(100) NOT NULL,
  `preview_link` varchar(100) NOT NULL,
  `download_link` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `description`, `cover_image`, `category`, `preview_link`, `download_link`, `created_at`) VALUES
(6, 'Textbook of Anatomy by Ross& Wilson', 'Ross& Wilson', '1st semester book related to Anatomy . Indeed, a fantastic book!', 'anatomy.jpg', 'Anatomy', 'http://googleDrive/Anatomy', 'http://googleDrive/Anatomy', '2025-04-27 14:03:19'),
(7, 'Behavioural Science', 'Sheeraz Ahmad', 'This book includes introduction to Biological and Psychological basis of Behaviour ', 'bscience.png', 'Behavioural Science', 'http://googleDrive/Bscience', 'http://googleDrive/Bscience', '2025-04-27 14:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`) VALUES
(1, 'sania raza', '1234567899', 'sania@gmail.com', '$2y$10$4XjcAzAokbqS7PB7w15eHe.vmypO8YEXRXxvQhg/ObQXfYqzpH0oG'),
(2, 'admin', '09987654', 'admin@gmail.com', 'admin123'),
(3, 'Rida khan', '1234567', 'rida@gmail.com', '2211'),
(4, 'Rida', '09876543212', 'rida23@gmail.com', '2233'),
(5, 'sania raza', '1234567899', 'sania234@gmail.com', '$2y$10$qWmCUkyAPt3plwiaELAsM.h1cby7CJ0kKtq4iu5ZXReTQGz5RPQVG'),
(6, 'yasmeen kanwal', '09876543212', 'yasmeen@gmail.com', '$2y$10$KgcGIROdRSgIdSr6KgQQRurfW0WuW87hxjgV5ui7kPRbov3cU2/QG'),
(7, 'maria khan', '01234567893', 'maria@gmail.com', '$2y$10$ZRZD9ER./Kzff13/Vdu92.neRobKBjTCWMDiUeg89V52ZbRA7Ve1i'),
(8, 'qudsia@gmail.com', '09876543214', 'qudsia@gmail.com', '$2y$10$vyToa42.ehF3Kg7xLMpBMOtNKMFtO1u.XSifsZH8k.mr1iDY6B.sS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
