-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2015 at 06:03 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bazabratmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `fact_table`
--

CREATE TABLE IF NOT EXISTS `fact_table` (
`id` int(32) NOT NULL,
  `date` date NOT NULL,
  `information` text NOT NULL,
  `picture` text CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fact_table`
--

INSERT INTO `fact_table` (`id`, `date`, `information`, `picture`) VALUES
(1, '2015-07-13', 'Айфеловата кула е метална решетъчна кула с височина 324 m (заедно с антените, приблизително колкото 81-етажна сграда), издигната в северозападния край на парка „Марсово поле“ в Париж, край река Сена, в 7-ми арондисман.', 'Pictures/2015-07-13.jpg'),
(2, '2015-07-14', 'Testx', 'dasdasda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fact_table`
--
ALTER TABLE `fact_table`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD UNIQUE KEY `date` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fact_table`
--
ALTER TABLE `fact_table`
MODIFY `id` int(32) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
