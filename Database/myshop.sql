-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 09, 2026 at 03:15 PM
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
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `phone`, `address`, `create_at`) VALUES
(10, 'Buckminster Walsh', 'medygyxuna@mailinator.com', '+1 (788) 758-3502', 'Qui quia nihil reici', '2026-02-09 15:25:26'),
(11, 'Charissa Brennan', 'xicesonu@mailinator.com', '+1 (857) 417-2016', 'Corporis impedit au', '2026-02-09 15:25:31'),
(12, 'Rachel Reeves', 'vyqinamo@mailinator.com', '+1 (673) 903-6203', 'Et placeat quisquam', '2026-02-09 15:25:40'),
(13, 'Paki Barrera', 'xafitura@mailinator.com', '+1 (982) 778-1118', 'Temporibus odit sapi', '2026-02-09 15:25:55'),
(14, 'Hu Carey', 'xujoqos@mailinator.com', '+1 (695) 976-3315', 'Cum et proident sed', '2026-02-09 15:26:01'),
(15, 'Adara Wiggins', 'heja@mailinator.com', '+1 (276) 457-4094', 'Aliquid voluptatem ', '2026-02-09 15:26:24'),
(16, 'Zoe Sellers', 'zefopesil@mailinator.com', '+1 (202) 891-6448', 'Exercitation sit qu', '2026-02-09 15:26:28'),
(17, 'Eden Guerra', 'qylyzupomu@mailinator.com', '+1 (815) 185-3296', 'Unde est quas volup', '2026-02-09 15:26:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
