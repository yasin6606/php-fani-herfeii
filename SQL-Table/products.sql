-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 13, 2020 at 12:58 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faniherfeiiphpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `title` text COLLATE utf8_persian_ci NOT NULL,
  `author` text COLLATE utf8_persian_ci NOT NULL,
  `price` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `category` text COLLATE utf8_persian_ci NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`title`, `author`, `price`, `age`, `category`, `id`) VALUES
('Ø³ÛŒ Ø´Ø§Ø±Ù¾ Ù…Ù‚Ø¯Ù…Ø§ØªÛŒ', 'Ù„ÛŒÙ„Ø§ Ù…Ø±Ø§Ø¯ÛŒ Ù¾ÙˆØ±', 54000, 1384, 'Ø±Ø§ÛŒØ§Ù†Ù‡', 1),
('Ø§Ù…ÙˆØ²Ø´ Ù¾ÛŒØ´Ø±ÙØªÙ‡ Ø·Ø±Ø§Ø­ÛŒ Ø³Ø§ÛŒØª', 'ÛŒØ§Ø³ÛŒÙ† Ú¯ÙˆØ±Ú©Ø§Ù†ÛŒ', 100000, 1390, 'Ø±Ø§ÛŒØ§Ù†Ù‡', 2),
('ØªÙ…ÙˆØ²Ø´ Ù¾Ø²Ø´Ú©ÛŒ', 'Ù…ÛŒÙ„Ø§Ø¯ ÛŒÙˆØ³ÙÛŒ', 365000, 1399, 'Ù¾Ø²Ø´Ú©ÛŒ', 3),
('Ø§Ø¯Ø¨ÛŒØ§Øª ÙØ§Ø±Ø³ÛŒ', 'Ø§Ù„Ù‡Ø§Ù… Ù…Ù†ØµÙˆØ±ÛŒ', 985000, 1384, 'Ø§Ø¯Ø¨ÛŒ', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
