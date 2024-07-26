-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2024 at 05:38 PM
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
-- Database: `cbar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `price` int(50) NOT NULL,
  `qty` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `price`, `qty`) VALUES
('vqUfUpAko04BsyS61WB6', 'BDrVA7p9Kl2GFrco1ufL', '0', 750, '1');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` varchar(20) DEFAULT NULL,
  `user_id` varchar(20) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `seller_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `address_type` varchar(10) NOT NULL,
  `method` varchar(50) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `qty` int(2) NOT NULL,
  `dates` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `payment_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `seller_id`, `name`, `number`, `email`, `address`, `address_type`, `method`, `product_id`, `price`, `qty`, `dates`, `status`, `payment_status`) VALUES
('66a11ace92d01', 'MRCOWdiKz7hSdUaY58W5', 'FE8H9AeFfrTdGfHIJib2', 'Neha Singh', '8090093288', 'nehasinghvns826@gmail.com', 'SA.6/186-1-KHA HARI NAGAR COLONY AKTHA SARNATH , SA.6/186-1-KHA HARI NAGAR COLONY AKTHA SARNATH , VARANASI , India , 221007', 'home', 'cash on delivery', '0', 750, 1, '0000-00-00', '', ''),
('66a11ace93ad3', 'MRCOWdiKz7hSdUaY58W5', 'FE8H9AeFfrTdGfHIJib2', 'Neha Singh', '8090093288', 'nehasinghvns826@gmail.com', 'SA.6/186-1-KHA HARI NAGAR COLONY AKTHA SARNATH , SA.6/186-1-KHA HARI NAGAR COLONY AKTHA SARNATH , VARANASI , India , 221007', 'home', 'cash on delivery', '9', 690, 1, '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(20) NOT NULL,
  `seller_id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `stock` int(100) NOT NULL,
  `product_detail` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `seller_id`, `name`, `price`, `image`, `stock`, `product_detail`, `status`) VALUES
(9, 'FE8H9AeFfrTdGfHIJib2', 'Reserve', 690, 'categories.jpg', 70, 'Alcohol, sometimes referred to by the chemical name ethanol, is one of the most widely consumed psychoactive drugs in the world and falls under the depressant category. The term &#34;Alcohol and Other Drugs&#34; (AOD) emphasizes this inclusion by grouping alcohol with other substances that alter mood and behavior. It is classified by the World Health Organization (WHO) as a toxic, psychoactive, dependence-producing, and carcinogenic substance.', 'active'),
(0, 'G8DdHAHgU2lJxdEhohN5', 'Whisky', 850, 'body-bg.jpg', 55, 'Champagne is a sparkling wine originated and produced in the Champagne wine region of France under the rules of the appellation, which demand specific vineyard practices, sourcing of grapes exclusively from designated places within it, specific grape-pressing methods and secondary fermentation of the wine in the bottle to cause carbonation.', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `name`, `email`, `password`, `image`) VALUES
('LUKk3kdzM69v1NKi2Zva', 'Miss Neha', 'Neha09@gmail.com', '14581', 'dBcGeSdsvDRbbqlPWQX2.jpg'),
('G8DdHAHgU2lJxdEhohN5', 'Neha Singh', 'Neha14@gmail.com', '14581', 'txKFCRCP5DZEcWkcRED8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`) VALUES
('BDrVA7p9Kl2GFrco1ufL', 'Neha Singh', 'Neha09@gmail.com', '14581', '2lzGzAOK4V5ZpRKHhPHF.jpg'),
('MRCOWdiKz7hSdUaY58W5', 'Neha Singh', 'Neha14@gmail.com', '14581', 'hGACgpKTBjFgwo2ZnK4n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`, `price`) VALUES
('uxeyI9xQ1ae7x1XCskIq', 'BDrVA7p9Kl2GFrco1ufL', '9', 690),
('BJSIXbTUYtjY64DBMiSI', 'MRCOWdiKz7hSdUaY58W5', '9', 690),
('K0ljU9zNowvrDCd5TQ7f', 'MRCOWdiKz7hSdUaY58W5', '0', 750);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
