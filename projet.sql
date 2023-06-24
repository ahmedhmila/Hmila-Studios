-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 23, 2023 at 09:36 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `inq`
--

DROP TABLE IF EXISTS `inq`;
CREATE TABLE IF NOT EXISTS `inq` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8mb3_bin NOT NULL,
  `phone` varchar(8) COLLATE utf8mb3_bin NOT NULL,
  `category` varchar(20) COLLATE utf8mb3_bin NOT NULL,
  `reqq` text COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Dumping data for table `inq`
--

INSERT INTO `inq` (`id`, `email`, `phone`, `category`, `reqq`) VALUES
(3, 'ahmedhmila19@gmail.com', '', 'Movie buffering', 'FCGHJKLM'),
(4, 'ahmedhmila19@gmail.com', '', 'Movie buffering', 'ezfregthy(j'),
(5, 'yessine@gmail.com', '', 'Movie buffering', 'WALLLAHU YA KHOUAVC VA   A GVFEZHOHO \r\nFZKEHKZFB\r\nFZLIEHOIEZHFIO\r\nVZLHFKEZBJCZE '),
(6, 'basma@gmail.com', '', 'Bug', 'igui\"r\'o'),
(7, 'firas@gmail.com', '', 'Movie buffering', 'SDRTGYUJIKL'),
(8, 'ahmedhmila19@gmail.com', '29883407', 'Account login issue', 'IU2IGR JBHD WALLAHAHI MARTI TAL\"et mmezyenna '),
(9, 'ahmedhmila19@gmail.com', '', 'Account login issue', 'AFEIZYUVG');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb3_bin NOT NULL,
  `link` varchar(200) COLLATE utf8mb3_bin NOT NULL,
  `genre` varchar(200) COLLATE utf8mb3_bin NOT NULL,
  `genre2` varchar(200) COLLATE utf8mb3_bin NOT NULL,
  `rating` varchar(10) COLLATE utf8mb3_bin NOT NULL,
  `image` varchar(200) COLLATE utf8mb3_bin NOT NULL,
  `uploader` varchar(200) COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `link`, `genre`, `genre2`, `rating`, `image`, `uploader`) VALUES
(27, 'westh', 'Scarface', 'Horror', '0', '6.4', 'memoriesP.jpg', 'Ahmed Hmila'),
(28, 'nef', 'Scarface', 'Horror', '0', '6.4', 'Before-SunriseP.jpg', 'Ahmed Hmila'),
(29, 'Bing chilling', 'rgeeg', 'Drama', '0', '6.4', 'lifePIP.jpg', 'Ahmed Hmila');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8mb3_bin NOT NULL,
  `email` varchar(50) COLLATE utf8mb3_bin NOT NULL,
  `phone` varchar(50) COLLATE utf8mb3_bin NOT NULL,
  `password` varchar(50) COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `username`, `email`, `phone`, `password`) VALUES
(1, 'general asse', 'nvchbvbci@kjj.com', '29883407', 'hvbjnk,lm'),
(2, 'Ahmed Hmila', 'ahmedhmila19@gmail.com', '29883407', '123456'),
(3, 'Amira', 'amira@amira.amira', '12345678', 'amiraam'),
(7, 'Yessine Hmila', 'yessine@gmail.com', '29711815', '123456'),
(8, 'meriam', 'gahbicho2.@gmail.com', '55357238', 'azertyuio'),
(9, 'Achour', 'achour@gmail.com', '12345678', '123456'),
(10, 'Farah', 'farah@gmail.com', '12345678', '123456'),
(11, 'Toutou', 'toutou@gmail.com', '12345678', '123456'),
(12, 'Rania', 'raniadb@gmail.com', '12345678', '123456'),
(13, 'bOUBA', 'bouba@gmail.com', '12345678', '123456'),
(14, 'Bassouma', 'basma@gmail.com', '97388828', '123456'),
(15, 'Riadh', 'riadh@gmail.com', '12345678', '123456'),
(17, 'Firas', 'firas@gmail.com', '12345678', '123456'),
(18, 'Rania', 'raniasiala@gmail.com', '12345678', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
