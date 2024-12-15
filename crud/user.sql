-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2024 at 11:42 AM
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
-- Database: `triptreasure2`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'Tamanna Parmar', 'tamanna123@gmail.com', '$2y$10$xJaLMiK1j8fv02Wx/4N6PO0iFgad6hoRv.jL.LbaghyJkl7FEudZW', '2024-08-23 11:55:52'),
(2, 'Tista Patel', 'tista99@gmail.com', '$2y$10$0T46jDvojA2DXSd5fF6A3Ox3MrIQNSTUbDSySO7uPYWrvupPwGbA.', '2024-08-23 11:59:00'),
(3, 'Anahita Thakor', 'anahita90@gmail.com', '$2y$10$7gQCCPqUL.csRuZXwlBrIefk7uB55dudOBbI/RY.SuqNTohkAV5gC', '2024-08-23 12:03:53'),
(4, 'Anmol parmar', 'anmol11@gmail.com', '$2y$10$Hb8r2SADQXfPqiebUZsQAe/b4FYRF1LGe1PUfphiSXKSSJ5/A381W', '2024-08-26 06:37:41'),
(5, 'Mansavi Mehta', 'Manasvi07@gmail.com', '$2y$10$Oq6NBthUloa/cxRn4E2KnuaH8ObkX0nAcJqZhQG27RDKWfctvFFJi', '2024-08-26 07:35:19'),
(6, 'Hasti Gadhiya', 'hasti00@gmail.com', '$2y$10$DqXUdtA/bvfOdfGroKKIJ.CF1zm/jlti7KtIUzW6PbzbTBF94i/Gu', '2024-08-26 07:59:52'),
(7, 'Arti Tailor', 'Arti12@gmail.com', '$2y$10$szMvfj0veU3UkXFopYTlCe3PaZGuXZAFCnUwTZcoBcHKEd2OflhfW', '2024-08-26 08:38:37'),
(8, 'Bharti Pramar', 'Bharti1103@gmail.com', '$2y$10$Ryub3O9iAnXXd85OnzQw1O3rGYqzWhQK1IiEQ9Nav/Dh6bc3gTE1O', '2024-08-26 16:38:36'),
(9, 'Roy sharmaa', 'roy77@gmail.com', '$2y$10$0v/EVean.8mFgDsq4lsVzu8lyMs7hHyYDUz5YOdK2nTEQoKGMX7/2', '2024-08-27 12:48:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
