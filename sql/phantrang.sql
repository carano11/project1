-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 04:06 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phantrang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `title`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit'),
(2, 'Ut wisi enim ad minim veniam, quis nostrud exerci tation'),
(3, 'Duis autem vel eum iriure dolor in hendrerit in vulputate'),
(4, 'Nam liber tempor cum soluta nobis eleifend'),
(5, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit'),
(6, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit'),
(7, 'Typi non habent claritatem insitam'),
(8, 'Nam liber ipsum consectetuer adipiscing elit'),
(9, 'Eodem modo typi, qui nunc nobis videntur parum clari'),
(10, 'Claritas est etiam processus dynamicus, qui sequitur mutationem'),
(11, 'Imperdiet doming id quod mazim'),
(12, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit'),
(13, 'Ut wisi enim ad minim veniam, quis nostrud exerci tation'),
(14, 'Duis autem vel eum iriure dolor in hendrerit in vulputate'),
(15, 'Nam liber tempor cum soluta nobis eleifend'),
(16, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit'),
(17, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit'),
(18, 'Typi non habent claritatem insitam'),
(19, 'Nam liber ipsum consectetuer adipiscing elit'),
(20, 'Eodem modo typi, qui nunc nobis videntur parum clari'),
(21, 'Claritas est etiam processus dynamicus, qui sequitur mutationem'),
(22, 'Imperdiet doming id quod mazim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
