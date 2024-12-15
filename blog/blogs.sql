-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2024 at 01:45 PM
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
-- Database: `triptreasure`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `author`, `content`, `date`, `image`) VALUES
(5, 'Trip To  Singapore', 'Binal Dhariyaparmar', 'My trip to Singapore was nothing short of spectacular! The city\'s seamless blend of lush green spaces and futuristic architecture left me in awe. From strolling through the breathtaking Gardens by the Bay to exploring the vibrant streets of Chinatown, every corner of Singapore offered something unique.', '2024-08-27', 'blog-2.jpg'),
(11, 'Goa-India ', 'Khushi Patel', 'Goa\'s vibrant beaches, lively nightlife, and laid-back vibe made for an unforgettable getaway! The laid-back atmosphere, combined with a mix of cultures, delicious seafood, and stunning sunsets, makes it a perfect destination for both relaxation and adventure.', '2024-07-31', 'blog-7.jpg'),
(12, 'Seoul', 'Nico Robbin', 'Seoul\'s vibrant energy and rich culture made our visit truly unforgettable! Seoul is a captivating city where ancient traditions meet modern innovation. The bustling streets are filled with a blend of historic palaces, cutting-edge skyscrapers, and vibrant markets.', '2024-09-02', 'blog-8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
