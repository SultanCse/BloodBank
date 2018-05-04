-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2016 at 07:27 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `bgroup` varchar(40) NOT NULL,
  `age` int(11) NOT NULL,
  `cnumber` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `bgroup`, `age`, `cnumber`, `password`) VALUES
('sultan Ahmed', 'sultancse12@gmail.com', 'b+', 24, '1783366577', '81dc9bdb52d04dc20036dbd8313ed055'),
('sumon', 'sumon@gmail.com', 'b+', 14, '1913829824', '81dc9bdb52d04dc20036dbd8313ed055'),
('rafi', 'rafi@gmai.com', 'o+', 22, '1923586413', '81dc9bdb52d04dc20036dbd8313ed055'),
('kausar', 'kaw@gmail.com', 'o+', 22, '1733998855', '827ccb0eea8a706c4c34a16891f84e7b'),
('mohon', 'lal@gmai.com', 'ab-', 25, '01913829824', '202cb962ac59075b964b07152d234b70');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
