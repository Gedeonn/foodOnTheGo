-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql212.epizy.com
-- Generation Time: Apr 15, 2018 at 12:37 PM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT=0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_21921306_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `ip_addr` text,
  `foodId` int(10) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ip_addr`, `foodId`, `quantity`) VALUES
('41.79.99.187', 5, 10),
('4179', 5, 1),
('4179', 5, 1),
('4179', 5, 1),
('4179', 5, 1),
('4179', 5, 1),
('41.79.97.5', 5, 1),
('41.79.99.187', 13, 1),
('41.79.99.187', 7, 1),
('41.79.99.191', 14, 1),
('41.79.99.191', 7, 1),
('41.79.99.191', 11, 1),
('41.79.99.191', 8, 1),
('41.79.99.191', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `f_name` varchar(60) DEFAULT NULL,
  `l_name` varchar(60) DEFAULT NULL,
  `phone_number` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `phone_number` (`phone_number`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `email`, `password`, `f_name`, `l_name`, `phone_number`) VALUES
(1, 'lindadelishoi99@gmail.com', 'Linda1', 'Linda', 'Delishoi', '0503896033');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ordernumber` int(10) DEFAULT NULL,
  `food_name` varchar(50) DEFAULT NULL,
  `cust_name` varchar(50) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `tel` varchar(12) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `food_name` varchar(100) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `duration` text,
  `ingredients` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `food_name`, `price`, `image`, `duration`, `ingredients`, `description`) VALUES
(6, 'Breakfast Boiled Eggs', 25, 'images/breakfast boiled eggs.jpg', '10 minutes', 'eggs, salt, vegetables', 'Boiled eggs made specially for breakfast'),
(7, 'Cucumber and Egg Salad', 30, 'images/cucumber.jpg', '15 minutes', 'cucumber, vegetable oil, eggs, salt', 'SautÃ©ed cucumber salad with fried sunny side up eggs'),
(8, 'Lean Chicken', 32, 'images/lean chicken.jpg', '30 minutes', 'chicken, oil, salt, vegetables', 'Lean fried chicken in vegetable dressing'),
(9, 'Rosh Hashanah', 45, 'images/rosh hashanah.jpeg', '45 minutes', 'chicken, beef, carrots, potatoes, spices', 'Rosh hashanah beef chicken sautee'),
(10, 'Salad Noodles', 20, 'images/noodles.jpg', '12 minutes', 'noodles, oil, salt, cucumber, carrots, eggs', 'Deep stir fried noodles with vegetable side'),
(11, 'Cheese -Tuna - Tomato Sandwich', 15, 'images/sandwich.jpg', '10 minutes', 'bread, tomato, oil, salt, lettuce, cheese', 'Sandwich made with cheese, tomato, lettuce fillings. Panini pressed.'),
(12, 'Vegetable Shawarma', 25, 'images/veggie shawarma.jpg', '20 minutes', 'corn flour, salt, eggs, lettuce, carrots, chicken, cabbage', 'Shawarma made with corn flour and vegetable filling'),
(13, 'Mixed Vegetable Salad', 18, 'images/salad.png', '10 minutes', 'beet, leeks, onions, cabbage, lettuce', 'Salad made with many different vegetables dry fried together'),
(14, 'Bran Waffles with Strawberries', 20, 'images/bran waffles.jpg', '10 minutes', 'bread, flour, sugar, milk, honey, eggs, strawberries', 'Waffles made from bran leftovers with honey drizzle and strawberries');

-- --------------------------------------------------------

--
-- Table structure for table `oncheckout`
--

CREATE TABLE IF NOT EXISTS `oncheckout` (
  `ordernumber` int(10) NOT NULL,
  `physical_addr` varchar(100) DEFAULT NULL,
  `card_number` int(10) DEFAULT NULL,
  `cvv` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`ordernumber`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oncheckout`
--

INSERT INTO `oncheckout` (`ordernumber`, `physical_addr`, `card_number`, `cvv`) VALUES
(1, 'kaneshie', NULL, NULL),
(2, 'dansoman', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `food_name` varchar(50) DEFAULT NULL,
  `order_number` int(10) NOT NULL AUTO_INCREMENT,
  `quantity` int(10) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `customer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`order_number`),
  KEY `cus` (`customer`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`food_name`, `order_number`, `quantity`, `status`, `customer`) VALUES
('test', 1, 1, 'ready', '1'),
('Mixed Vegetable Salad', 13, 1, 'processing', ''),
('test', 3, 4, 'processing', '1'),
('Cucumber and Egg Salad', 7, 1, 'processing', ''),
('Bran Waffles with Strawberries', 14, 1, 'processing', ''),
('Cheese -Tuna - Tomato Sandwich', 11, 1, 'processing', ''),
('Lean Chicken', 8, 1, 'processing', ''),
('Salad Noodles', 10, 1, 'processing', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
