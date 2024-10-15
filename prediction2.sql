-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2024 at 07:23 AM
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
-- Database: `prediction2`
--

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` int(1) NOT NULL,
  `disease_name` varchar(200) NOT NULL,
  `disease_advice` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `disease_name`, `disease_advice`) VALUES
(1, 'tachycardia', 'Maintain a healthy lifestyle by managing stress, avoiding stimulants like caffeine, and seeking regular medical advice to monitor your heart\'s health.'),
(2, 'Bradycardia', 'Stay Active: Regular exercise can help maintain heart health, but consult your doctor for personalized advice'),
(3, 'Normal', 'Adopt a heart-healthy lifestyle by eating a balanced diet, exercising regularly, managing stress, and avoiding smoking and excessive alcohol to prevent cardiovascular issues.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `heart_beat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `heart_beat`) VALUES
(9, 'saad', 'saadharera@gmail.com', '$2y$10$sOx8feahmUt37uLvDvjbO.ca0goG.6kQasOnGyHz/xseHZv0R/LBu', '80'),
(10, 'walaa', 'walaa@gmail.com', '$2y$10$iNgv1CwwjaFeidZK7FdeIeKOaOf4BymG1iM1cG1qOpFmGmc8LFHfm', '200'),
(11, 'saad harera', 'saadharera903@gmail.com', '$2y$10$C7vDdY.JZYGoPhGBgD/oAudX1y6h12jT3FgHY/ItDswA./mgy6Vvm', '40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
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
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
