-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 18, 2021 at 03:08 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_1531`
--
CREATE DATABASE IF NOT EXISTS `final_1531` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `final_1531`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `products_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT,
  `prod_image` varchar(200) NOT NULL,
  `prod_code` varchar(50) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_price` decimal(5,2) NOT NULL,
  PRIMARY KEY (`products_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `prod_image`, `prod_code`, `prod_name`, `prod_price`) VALUES
(1, './img/Shoes/shoe-1.jpg', 'shoe', 'Brown Funky Heels', '60.00'),
(2, './img/Shoes/shoe-2.jpg', 'shoe', 'Flat Goldie Shoes', '65.00'),
(3, './img/Shoes/shoe-3.jpg', 'shoe', 'Red Indies', '75.50'),
(4, './img/Shoes/shoe-4.jpg', 'shoe', 'Youthful Brown', '65.50'),
(5, './img/Shoes/shoe-5.jpg', 'shoe', 'Youthful Dark Brown', '55.50'),
(6, './img/Shoes/shoe-6.jpg', 'shoe', 'Maroon Shoe', '100.00'),
(7, './img/Belts/belt-1.jpg', 'blt', 'Adidas Belt', '10.00'),
(8, './img/Belts/belt-2.jpg', 'blt', 'Annie Belt', '15.00'),
(9, './img/Belts/belt-3.jpg', 'blt', 'Hunter Belt', '8.50'),
(10, './img/Belts/belt-4.jpg', 'blt', 'Ordinary Belt', '9.00'),
(11, './img/Belts/belt-5.jpg', 'blt', 'Ordinary Belt', '11.00'),
(12, './img/Belts/belt-6.jpg', 'blt', 'Stylish Belt', '20.00'),
(13, './img/Bracelets/bracelet-1.jpg', 'brc', 'Orange Stone Bracelet', '50.00'),
(14, './img/Bracelets/bracelet-2.jpg', 'brc', 'Sapphie Bracelet', '60.00'),
(15, './img/Bracelets/bracelet-3.jpg', 'brc', 'Moonstone Bracelet', '50.00'),
(16, './img/Bracelets/bracelet-4.jpg', 'brc', 'Precious Bracelet', '45.00'),
(17, './img/Bracelets/bracelet-5.jpg', 'brc', 'Silver Bracelet', '25.00'),
(18, './img/Bracelets/bracelet-6.jpg', 'brc', 'Antique Bracelet', '70.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
