-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 08:57 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(12, 1, 'Ajaaj Ahmad', 'imajaaj@gmail.com', '$2y$10$x32EKgZ6o0nPPxkOyfzX0ufmofNJYtYjfGTUtlLtBUG2cCfRgg3eO', '2019-12-08 12:18:30'),
(13, 1, 'Admin', 'admin@site.com', '$2y$10$XSctMPMQJ6Ke.9zAU3Wmyel1xd/GD4ddMDorDtDXrMOumKngMjyTK', '2019-12-08 16:23:43'),
(14, 0, 'Saahil', 'saahil@gmail.com', '$2y$10$XNoNAME3VM8PZ8ytcZ.t9.kWm4Numid90KdPl8zQZ0.cKz155RQGC', '2019-12-08 19:03:55'),
(15, 0, 'Neelam', 'neelam@123.com', '$2y$10$hyOGkUjNQp3dLoCI4XRtUehZ0FfGp2VQ68Rukq.CZNk8IFiPUtiTi', '2020-02-02 10:46:34'),
(16, 1, 'Ram', 'ram@test.com', '$2y$10$jb8Z6X90MEovi1tx2zzDXuiLa9DesvByWyOVdxnJ/47c5nM9idEFS', '2020-05-12 05:53:12'),
(17, 1, 'Ram', 'ram@gmail.com', '$2y$10$8QAIjwXFGN84Cen/5k607OxLG2dPH0..44uudX9ZXmt1ToGC6VOmi', '2020-05-12 05:59:04'),
(18, 0, 'Ajaaj Ahmad', 'test@test.com', '$2y$10$Jkeq3HofMaOP1nfJfn8D/e0PK87FGaU5CCUaRUMj1bk9clexC6Kq.', '2020-05-12 06:03:37');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
