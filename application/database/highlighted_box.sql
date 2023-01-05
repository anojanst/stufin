-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2019 at 10:46 AM
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
-- Table structure for table `highlighted_box`
--

CREATE TABLE `highlighted_box` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `color` varchar(20) NOT NULL,
  `pageId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `highlighted_box`
--

INSERT INTO `highlighted_box` (`id`, `title`, `content`, `image`, `color`, `pageId`) VALUES
(11, 'Title 1', '<p>This is the content of title 1.</p>', 'e66c4fc3c6abbb1ab6d4ffdf83705833.jpg', 'Purple', 1),
(15, 'Title 2 Updated', '<p>This is the content of title 2.<br></p>', '8aa07137f385f7ebcb75f52965a26c10.jpg', 'Orange', 3),
(16, 'Title 3', '<p>This is the content of title 3.<br></p>', 'db21c5b9d52ded012485aad9b527f021.jpg', 'Purple', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `highlighted_box`
--
ALTER TABLE `highlighted_box`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `highlighted_box`
--
ALTER TABLE `highlighted_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
