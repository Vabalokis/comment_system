-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2018 at 01:38 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comment_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `date` text NOT NULL,
  `email` text NOT NULL,
  `name` text NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `parent_id`, `date`, `email`, `name`, `message`) VALUES
(46, 0, '04-07-2018', 'testing@test.com', 'Lorem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sollicitudin velit sed nisl elementum aliquam. Donec placerat, metus eu aliquet commodo, elit lectus cursus erat, in accumsan nibh ex vitae lacus. Maecenas vel condimentum erat, egestas porta urna. Donec sagittis id magna sed dictum. Proin vel erat nec augue mattis fermentum ut quis orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed ornare ullamcorper commodo. Donec vehicula ante id dapibus malesuada. Aenean et massa dictum, eleifend lacus in, dictum tortor.'),
(47, 46, '04-07-2018', 'test@testing.lt', 'Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sollicitudin velit sed nisl elementum aliquam. Donec placerat, metus eu aliquet commodo, elit lectus cursus erat, in accumsan nibh ex vitae lacus. Maecenas vel condimentum erat, egestas porta urna. Donec sagittis id magna sed dictum. Proin vel erat nec augue mattis fermentum ut quis orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. '),
(48, 0, '04-07-2018', 'test@not.test', 'Class', 'Proin vel erat nec augue mattis fermentum ut quis orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed ornare ullamcorper commodo. Donec vehicula ante id dapibus malesuada. Aenean et massa dictum, eleifend lacus in, dictum tortor.'),
(49, 48, '04-07-2018', 'test@not.test', 'Method', 'Sed ornare ullamcorper commodo. Donec vehicula ante id dapibus malesuada. Aenean et massa dictum, eleifend lacus in, dictum tortor.'),
(50, 48, '04-07-2018', 'not@test.test', 'Function', 'Donec vehicula ante id dapibus malesuada. Aenean et massa dictum, eleifend lacus in, dictum tortor.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
