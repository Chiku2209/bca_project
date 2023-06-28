-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2023 at 02:41 PM
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
(8, 'Air Jordan 1 Retro High OG', 16995, 'Light Smoke Grey', 'desc1', 'desc2', 'DZ5485-051', 'China', 'heritage'),
(11, 'Womens Air Jordan 5 Low', 16995, 'Indigo Haze', 'Add some flash to your summer, from BBQs to festivals. The AJ5 Indigo Haze lets you go from day to night with seasonal colours, plus a little surprise for when the lights go out. Flooded with soft purple and balanced with hits of soothing Alabaster, new colours bring chill vibes to the iconic silhouette. And when the party goes late, an all-over reflective design lets every step shine.', '', 'FJ4563-500', 'China', 'Since his game-winning shot that brought championship glory to North Carolina, Michael Jordan has been at the forefront of basketball consciousness. He took to the court in 1985 wearing the original Air Jordan I, simultaneously breaking league rules and his opponents will, while capturing the imaginations of fans worldwide.'),
(12, 'Older Kids Air Jordan 3', 10995, 'Animal Icon', 'Clean and supreme, the AJ3 returns in all of its classic style and grace. Quality leather in the upper—with that luxurious elephant print texture—is combined with visible Nike Air cushioning in the sole to make an everyday icon. And we will got a feeling you are gonna love the removable elephant patch, too.', '', 'DX6665-100', 'Indonesia', 'Since his game-winning shot that brought championship glory to North Carolina, Michael Jordan has been at the forefront of basketball consciousness. He took to the court in 1985 wearing the original Air Jordan I, simultaneously breaking league rules and his opponents will, while capturing the imaginations of fans worldwide.');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `num` int(3) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
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
