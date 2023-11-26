-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 02:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedlock_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `services_category`
--

CREATE TABLE `services_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `wedtype` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `preview_image` varchar(255) NOT NULL,
  `description` varchar(200) NOT NULL,
  `detail_1` varchar(250) NOT NULL,
  `detail_2` varchar(250) NOT NULL,
  `detail_3` varchar(250) NOT NULL,
  `detail_4` varchar(250) NOT NULL,
  `detail_5` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services_category`
--

INSERT INTO `services_category` (`id`, `wedtype`, `price`, `preview_image`, `description`, `detail_1`, `detail_2`, `detail_3`, `detail_4`, `detail_5`) VALUES
(1, 'Engaged for Eternity', '100000.00', 'https://www.fashionshala.com/wp-content/uploads/2018/07/creative-engagement-ring-photography-ideas-4.jpg\" alt=\"\">\r\n', '\"My... PRECIOUUSSS Engagement Day!!!\"', 'Providing S-tier Decorators\r\n \r\n\r\n ', ' Expert photographers for capturing the best moments\r\n             ', ' \r\n Premium quality catering service (Including all the sweets)', '', ''),
(2, 'Paint it Yellow', '100000.00', 'https://i.pinimg.com/originals/55/59/b4/5559b49b73b4e0cef265a1f093d01a80.jpg\" alt=\"\">\r\n', ' \"Holud or turmeric ceremony, DJ, Nacha Nachi.. Oh yeaah...\"', ' Providing S-tier Decorators\r\n  \r\n', ' Phenomenal music artist for an upbeat environment\r\n             ', ' \r\nExpert photographers for capturing the best moments ', ' \r\n Premium quality catering service (Including all the sweets)', ''),
(3, 'Grand Wedding', '400000.00', 'https://i.pinimg.com/originals/48/5c/9c/485c9cbcee7fb6ae1cd6a503a4ef3766.jpg\" alt=\"\">\r\n', '  \"Cheeky Wedding day stuff blah blah blah... Yes Wedding very good\r\n              Entire Wedding package like akth, biye, and what\r\n              not.\"', ' Includes all the services (i.e. Aakth, Holud, Wedding & Reception)\r\n', 'Finest venue selection for each occasion\r\n            ', ' Invitation card selection service for all the occasions\r\n           ', ' S-tier Photographer and Decorator\r\n            ', ' Premium quality catering service'),
(4, 'The Awaited Moment', '100000.00', 'https://cdn0.weddingwire.in/vendor/5381/3_2/960/jpg/wedding-planners-fairy-lights-enterprises-wedding-decor-8_15_355381-160318817659743.jpeg\" alt=\"\">\r\n', '   \"The Reception day_WELL WELL WELL.. Finally\"', ' Providing S-tier Decorators\r\n  ', ' Invitation card selection service for all the occasions ', ' Expert photographers for capturing the best moments \r\n', ' Premium quality catering service (Including all the sweets)\r\n', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services_category`
--
ALTER TABLE `services_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services_category`
--
ALTER TABLE `services_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
