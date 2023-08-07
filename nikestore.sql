-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 08:47 AM
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
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `firstname` varchar(191) NOT NULL,
  `lastname` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `mobile` int(10) NOT NULL,
  `username` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(11, 'Womens Air Jordan 5 Low', 16995, 'Indigo Haze', 'Add some flash to your summer, from BBQs to festivals. The AJ5 Indigo Haze lets you go from day to night with seasonal colours, plus a little surprise for when the lights go out. Flooded with soft purple and balanced with hits of soothing Alabaster, new colours bring chill vibes to the iconic silhouette. And when the party goes late, an all-over reflective design lets every step shine.', '', 'FJ4563-500', 'China', 'Since his game-winning shot that brought championship glory to North Carolina, Michael Jordan has been at the forefront of basketball consciousness. He took to the court in 1985 wearing the original Air Jordan I, simultaneously breaking league rules and his opponents will, while capturing the imaginations of fans worldwide.'),
(12, 'Older Kids Air Jordan 3', 10995, 'Animal Icon', 'Clean and supreme, the AJ3 returns in all of its classic style and grace. Quality leather in the upper—with that luxurious elephant print texture—is combined with visible Nike Air cushioning in the sole to make an everyday icon. And we will got a feeling you are gonna love the removable elephant patch, too.', '', 'DX6665-100', 'Indonesia', 'Since his game-winning shot that brought championship glory to North Carolina, Michael Jordan has been at the forefront of basketball consciousness. He took to the court in 1985 wearing the original Air Jordan I, simultaneously breaking league rules and his opponents will, while capturing the imaginations of fans worldwide.'),
(13, 'J Force 1', 15995, 'Black', 'Meet the J Force 1. Inspired by its namesake sneaker, Nike and modern-day surrealist Jacquemus teamed up to create a shoe with sophistication and playful wit. By hand-weaving a modified AF-1 upper to the sole, a shoe was created that lets you stand out wherever you go. And it wont be hard: the JF1 features inverted logos on the outsole so they imprint correctly when you lift your foot, and luxury touches like an understated metal Swoosh and \"JF1\" dubrae.', '', 'DR0424-001', 'China', 'Introduced in 1982, the Air Force 1 redefined basketball footwear from the hardwood to the tarmac. It was the first basketball sneaker to house Nike Air but its innovative nature has since taken a back seat to its status as a street icon.');

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

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `product_id`, `num`, `image`) VALUES
(6, 12, 1, '1687962335-1.webp'),
(7, 12, 2, '1687962371-2.webp'),
(8, 12, 3, '1687962401-3.webp'),
(9, 12, 4, '1687962415-4.webp'),
(10, 12, 5, '1687962443-5.webp'),
(11, 12, 6, '1687962466-6.webp'),
(12, 12, 7, '1687962484-7.webp'),
(13, 12, 8, '1687962511-8.webp'),
(14, 12, 9, '1687962522-9.jpg'),
(15, 11, 1, '1687967166-1.webp'),
(16, 11, 2, '1687967184-2.webp'),
(17, 11, 3, '1687967198-3.webp'),
(18, 11, 4, '1687967209-4.webp'),
(19, 11, 5, '1687967226-5.webp'),
(20, 11, 6, '1687967238-6.webp'),
(21, 11, 7, '1687967252-7.jpg'),
(22, 11, 8, '1687967269-8.jpg'),
(23, 11, 9, '1687967281-9.jpg'),
(24, 13, 1, '1688221151-1.webp'),
(25, 13, 2, '1688221168-2.webp'),
(26, 13, 3, '1688221183-3.webp'),
(27, 13, 4, '1688221195-4.webp'),
(28, 13, 5, '1688221205-5.webp'),
(29, 13, 6, '1688221216-6.webp'),
(30, 13, 7, '1688221227-7.jpg'),
(31, 13, 8, '1688221241-8.jpg'),
(32, 13, 9, '1688221256-9.jpg');

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
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
