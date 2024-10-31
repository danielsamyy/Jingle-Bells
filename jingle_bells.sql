-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2024 at 01:11 PM
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
-- Database: `jingle_bells`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `description`, `price`, `image`) VALUES
(1, 'pajamas', 'Snuggs Blanket Onesie \"Green Christmas', 950, 'nn.webp'),
(3, 'Decoration', 'BB Sport Artificial Christmas Tree 180cm Dark Green Natural Christmas Tree', 550, 'dec77.jpg'),
(4, 'Mugs', 'The best way to spread Christmas cheer is by giving the gift of two festive mugs', 300, 'mug12.jpg'),
(5, 'Mugs', 'Wrap your hands around our cozy Christmas mug and enjoy the warmth of the holidays with every sip', 300, 'mug4.webp'),
(6, 'Decoration', 'FACRUY 10Pcs Artificial Holly Berry Stems Christmas                   Red Holly Berries Twig Stem Artificial Flowers with                    Vase Winter Berries Bunch <br> Faux Cranberries Bunch                   for Christmas Tree', 600, 'dec11.jpg'),
(7, 'Decoration', '18 Pcs Christmas Natural Pine Cones,Christmas                 Tree Festival Hanging Decoration, Pine Cones (Snow)', 500, 'dec22.webp'),
(8, 'pajamas', 'Snuggs Blanket Onesie \"Green Christmas\"', 400, 'pg2.webp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `DOB` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`, `mobile`, `DOB`) VALUES
(1, 'Maria', 'mariaatef40@gmail.com', 'marmar@2002', '01229002007', '2024-10-26'),
(2, 'mariam', 'mariam@gmail.com', 'm12345678', '01223200000', '2024-10-26'),
(3, 'sherine', 'sh@gmail.com', 'sh12345678', '01229002006', '2024-10-29'),
(5, 'nada', 'nada@gmail.com', 'nada1234', '010351313', '2024-10-30'),
(6, 'nancy', 'nancy@gmail.com', 'n12345678', '012330223255', '2024-10-30'),
(7, 'nancy', 'nancy2@gmail.com', '12345678k', '012355', '2024-10-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
