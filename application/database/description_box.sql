-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 10:55 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ktd`
--

-- --------------------------------------------------------

--
-- Table structure for table `description_box`
--

CREATE TABLE `description_box` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `button_text` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `pageId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `description_box`
--

INSERT INTO `description_box` (`id`, `title`, `content`, `image`, `button_text`, `link`, `pageId`) VALUES
(1, 'Title 1', 'sdcsdc', '', 'sdcsdc', 'sdcsdc', 3),
(2, 'Title 1', 'sdcsdc', '', 'sdcsdc', 'sdcsdc', 3),
(6, 'sadas', 'dasds', '', 'asda', 'asd', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `description_box`
--
ALTER TABLE `description_box`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `description_box`
--
ALTER TABLE `description_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
