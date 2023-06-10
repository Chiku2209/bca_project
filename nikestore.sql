-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 07:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nikestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(5) NOT NULL,
  `pro_name` varchar(191) NOT NULL,
  `price` int(7) NOT NULL,
  `color` varchar(191) NOT NULL,
  `description1` text NOT NULL,
  `description2` text NOT NULL,
  `sku` varchar(50) NOT NULL,
  `country` varchar(191) NOT NULL,
  `heritage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `price`, `color`, `description1`, `description2`, `sku`, `country`, `heritage`) VALUES
(3, 'Air Max 97', 16995, 'Be True', 'Express yourself with the Air Max 97. The icon gets a game-changing new look with shimmering, delicate lace. Inspired by fluidity of expression, the remixed classic dons ruffle patterns to enhance the original ripple design. Nostalgic hues pull inspiration from Pride flags while incorporating a vintage flair as a nod to LGBTQIA+ history and the trailblazers that paved the way for generations to come. Removable charms and a customisable tongue let you own your look, showing what \"Be True\" means to you with every step.', 'Be True started in 2012 as a grassroots effort led by Nike employees in the PRIDE Network seeking to build a company culture diverse in orientation, identity and expression. Since then, Nike has taken action to support the LGBTQIA+ community, recognising that inclusive spaces in sport create a better world for all. This year, Nike, in association with CAFAmerica, recognised 12 organisations advancing the LGBTQIA+ community and provided them with more than $715k in donations.', 'FD8637-600', 'Vietnam ', 'Remember the revolution. 1987 saw the birth of the Air Max lineage, showcasing visible Air for the first time. What began as an experiment in cushioning soon evolved into an icon on the track and the streets. Over the years, it is been reimagined and retooled, but the heritage always remains.'),
(4, 'Air Max 97', 16995, 'Be True', 'Express yourself with the Air Max 97. The icon gets a game-changing new look with shimmering, delicate lace. Inspired by fluidity of expression, the remixed classic dons ruffle patterns to enhance the original ripple design. Nostalgic hues pull inspiration from Pride flags while incorporating a vintage flair as a nod to LGBTQIA+ history and the trailblazers that paved the way for generations to come. Removable charms and a customisable tongue let you own your look, showing what \"Be True\" means to you with every step.', 'Be True started in 2012 as a grassroots effort led by Nike employees in the PRIDE Network seeking to build a company culture diverse in orientation, identity and expression. Since then, Nike has taken action to support the LGBTQIA+ community, recognising that inclusive spaces in sport create a better world for all. This year, Nike, in association with CAFAmerica, recognised 12 organisations advancing the LGBTQIA+ community and provided them with more than $715k in donations.', 'FD8637-600', 'Vietnam ', 'Remember the revolution. 1987 saw the birth of the Air Max lineage, showcasing visible Air for the first time. What began as an experiment in cushioning soon evolved into an icon on the track and the streets. Over the years, it is been reimagined and retooled, but the heritage always remains.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `firstname` varchar(191) NOT NULL,
  `lastname` varchar(191) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `mobile` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `mobile`) VALUES
(1, 'Naman', 'Vadhiya', 'namanvadhiya', '1c478b0ddd6252be2c6d6345c08064d1', 'namanvadhiya1647@gmail.com', '7046527115');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
