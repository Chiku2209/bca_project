-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2023 at 04:46 PM
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
(11, 'Womens Air Jordan 5 Low', 16995, 'Indigo Haze', 'Add some flash to your summer, from BBQs to festivals. The AJ5 Indigo Haze lets you go from day to night with seasonal colours, plus a little surprise for when the lights go out. Flooded with soft purple and balanced with hits of soothing Alabaster, new colours bring chill vibes to the iconic silhouette. And when the party goes late, an all-over reflective design lets every step shine.', 'Yes\r\n', 'FJ4563-500', 'China', 'Since his game-winning shot that brought championship glory to North Carolina, Michael Jordan has been at the forefront of basketball consciousness. He took to the court in 1985 wearing the original Air Jordan I, simultaneously breaking league rules and his opponents will, while capturing the imaginations of fans worldwide.'),
(12, 'Older Kids Air Jordan 3', 10995, 'Animal Icon', 'Clean and supreme, the AJ3 returns in all of its classic style and grace. Quality leather in the upper—with that luxurious elephant print texture—is combined with visible Nike Air cushioning in the sole to make an everyday icon. And we will got a feeling you are gonna love the removable elephant patch, too.', 'No', 'DX6665-100', 'Indonesia', 'Since his game-winning shot that brought championship glory to North Carolina, Michael Jordan has been at the forefront of basketball consciousness. He took to the court in 1985 wearing the original Air Jordan I, simultaneously breaking league rules and his opponents will, while capturing the imaginations of fans worldwide.'),
(15, 'Air Jordan 13', 16595, 'Black Flint', 'Out-manoeuvre the proverbial competition with the Air Jordan 13 Black Flint. Inspired by the original Flint colourway from 98, it delivers a timeless look. Dimpled black side panels in premium leather bring all the high-fashion feels, while the green cats-eye emblem and panther paw-inspired outsole honour MJs Black Cat alter ego. Lace up and become a legend.', 'Yes', 'DJ5982-060', 'China', 'Since his game-winning shot that brought championship glory to North Carolina, Michael Jordan has been at the forefront of basketball consciousness. He took to the court in 1985 wearing the original Air Jordan I, simultaneously breaking league rules and his opponents will, while capturing the imaginations of fans worldwide.'),
(16, ' Air Jordan 13', 19295, 'Wolf Grey', 'Celebrate 25 years of the AJ13 with a sleek new colourway. Dimpled full-grain leather gets the Wolf Grey and University Red treatment, while the panther paw-inspired outsole and back heel hologram keep you rooted to the original.', 'No', '414571-160', 'China', 'Since his game-winning shot that brought championship glory to North Carolina, Michael Jordan has been at the forefront of basketball consciousness. He took to the court in 1985 wearing the original Air Jordan I, simultaneously breaking league rules and his opponents will, while capturing the imaginations of fans worldwide.'),
(17, 'Shox MR4 x Martine Rose', 18395, 'Safety Orange', 'Rose eponymous brand is famed for its manipulation of proportions, and the MR4 is no exception. Originally inspired by the style and status of elite female footballers, the design embodies the fusion of opposites, pairing elements of a quintessential dress shoe with the sporty sensibility of Nike Shox. The silhouette is stretched and pulled into a new mule shape, the columns are lifted into a heel and the toe is squared off in a formalwear flourish.', 'Yes', 'DQ2401-800', 'China', ''),
(18, 'Air Flight Huarache', 12295, 'Light Smoke Grey and Noble Red', 'Nobody does basketball like us, and that means no one brings  em back like we do. Straight from the vault, the Air Flight Huarache is back, returning you to one of the most memorable eras of the hoops-to-street revolution. The Light Smoke Grey and Noble Red colourway is just the beginning of your trip down memory lane—from the collar cutouts to the Air logo on the heel, this 92 classic scratches your itch for nostalgia. But not everything new is old: Nike Air cushioning in the heel and forefoot bring an iconic design into the future. Ready to give your foot a hug today?', 'No', 'FD0189-001', 'China', ''),
(19, 'Air Foamposite One', 20945, 'Metallic Red', 'Step into the history books with the Air Foamposite One. Rare, classic and ahead of its time, its a testament to Penny Hardaways unforgettable game—and one of the boldest looks to move off court. The striking colourway brings the heat, while the uppers iconic liquid design boosts the cool factor. The finishing touch? Pennys signature 1 Cent logo delivers the slick assist. Perfect!', 'No', 'DZ2545-600', 'India', ''),
(20, 'Air Jordan 4', 18995, 'Thunder', 'Dont get faked—the AJ4 Thunder is here for real. Straight out the vault, the coveted colourway returns true to form. It has the same materials and flashy Tour Yellow accents that hooked sneakerheads back in 06, plus original trimmings like a bold Jumpman on the tongue and the famous wings that let you customise your lace setup. This aint no knock-off. Get em while you can.', 'Yes', 'DH6927-017', 'Indonesia', 'Since his game-winning shot that brought championship glory to North Carolina, Michael Jordan has been at the forefront of basketball consciousness. He took to the court in 1985 wearing the original Air Jordan I, simultaneously breaking league rules and his opponents will, while capturing the imaginations of fans worldwide.');

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
(15, 11, 1, '1687967166-1.webp'),
(16, 11, 2, '1687967184-2.webp'),
(17, 11, 3, '1687967198-3.webp'),
(18, 11, 4, '1687967209-4.webp'),
(19, 11, 5, '1687967226-5.webp'),
(20, 11, 6, '1687967238-6.webp'),
(34, 15, 1, '1692372593-10.jpg'),
(35, 15, 2, '1692373211-2.jpg'),
(36, 15, 3, '1692373231-3.jpg'),
(37, 15, 4, '1692373241-4.jpg'),
(38, 15, 5, '1692539868-5.jpg'),
(39, 15, 6, '1692539892-6.jpg'),
(40, 16, 1, '1692375642-1.jpg'),
(41, 16, 2, '1692375665-2.jpg'),
(42, 16, 3, '1692375676-3.jpg'),
(43, 16, 4, '1692375685-4.jpg'),
(44, 16, 5, '1692375694-5.jpg'),
(45, 16, 6, '1692375703-6.jpg'),
(48, 17, 1, '1692376421-1.jpg'),
(49, 17, 2, '1692376477-2.jpg'),
(50, 17, 3, '1692376504-3.jpg'),
(51, 17, 4, '1692376518-4.jpg'),
(52, 17, 5, '1692376717-5.jpg'),
(53, 17, 6, '1692376729-6.jpg'),
(56, 18, 1, '1692452868-1.jpg'),
(57, 18, 2, '1692452888-2.jpg'),
(58, 18, 3, '1692452902-3.jpg'),
(59, 18, 4, '1692452936-4.jpg'),
(60, 18, 5, '1692452948-5.jpg'),
(61, 18, 6, '1692452962-6.jpg'),
(64, 19, 1, '1692453622-1.jpg'),
(65, 19, 2, '1692453661-2.jpg'),
(66, 19, 3, '1692453670-3.jpg'),
(67, 19, 4, '1692453693-4.jpg'),
(68, 19, 5, '1692453703-5.jpg'),
(69, 19, 6, '1692453712-6.jpg'),
(73, 20, 1, '1692454695-1.jpg'),
(74, 20, 2, '1692454709-2.jpg'),
(75, 20, 3, '1692454721-3.jpg'),
(76, 20, 4, '1692454732-4.jpg'),
(77, 20, 5, '1692454743-5.jpg'),
(78, 20, 6, '1692454759-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` longtext NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `description`) VALUES
(3, '1691780794-PngItem_1902650.png', 'Slider 1'),
(4, '1691781031-PngItem_847131.png', 'Slider 2'),
(5, '1691781195-PngItem_2436868.png', 'Slider 3');

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
(1, 'Nams', 'Playz', 'namsplayz', '7c29ee17580d6885540e1bcb9164c5ed', 'namsplayz@gmail.com', '9924342711');

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
-- Indexes for table `slider`
--
ALTER TABLE `slider`
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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
