-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 04:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms1`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`) VALUES
(1, 'Donos de Portugal'),
(2, 'Duck Soup'),
(3, 'Dreams of  a Life'),
(4, 'Canterville Ghost, The'),
(5, 'Striking Range'),
(6, 'Sidewalls (Medianeras)'),
(7, 'Zatoichi on the Road (Zatôichi kenka-tabi) (Zatôichi 5)'),
(8, 'Scandal Sheet'),
(9, 'Safe'),
(10, 'Métastases'),
(11, 'Ace Attorney (Gyakuten saiban)'),
(12, 'Black Sun (Kuroi taiyô)'),
(13, 'Soldier\'s Daughter Never Cries, A'),
(14, 'Celebration, The (Festen)'),
(15, 'Sweet November'),
(16, 'Two Mrs. Carrolls, The'),
(17, 'Shipping News, The'),
(18, 'Feds'),
(19, 'David and Bathsheba'),
(20, 'Champagne for Caesar'),
(21, 'Leopard Son, The'),
(22, 'Lightning in a Bottle'),
(23, 'Blade'),
(24, 'Rush: Beyond the Lighted Stage'),
(25, 'That\'s Entertainment, Part II'),
(26, 'Two Evil Eyes'),
(27, 'Caveman'),
(28, 'Prefab People, The (Panelkapcsolat)'),
(29, 'Fast & Furious (Fast and the Furious 4, The)'),
(30, 'Highwaymen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
