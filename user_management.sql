-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 14, 2023 at 07:38 AM
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
-- Database: `user_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(40) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `create_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fname`, `lname`, `email`, `create_at`, `updated_at`) VALUES
(38, 'shubhamd', '5559e198d7a24841cae9cf5bf1f1d89e', 'Shubham', 'Date', 'shubhamdate351@gmail.com', '2023-06-27 11:18:27', '2023-06-27 11:18:27'),
(39, 'test11', '25f9e794323b453885f5181f1b624d0b', 'test11', 'test11', 'test11@gmail.com', '2023-06-27 11:20:16', '2023-06-27 05:56:48'),
(40, 'test50', 'e4abf54583b16ef4d4ba714617038d54', 'test50', 'test50', 'test50@gmail.com', '2023-06-27 13:39:33', '2023-06-27 07:10:26'),
(41, 'surya', '25f9e794323b453885f5181f1b624d0b', 'Suryakumar', 'Yadav', 'surya@gmail.com', '2023-06-28 04:21:00', '2023-06-28 10:36:24'),
(75, 'test99', '79132fc7ae8fb4c81d5e69fa2207dd1a', 'test', 'test', 'test99@gmail.com', '2023-07-14 07:34:42', '2023-07-14 07:34:42');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

DROP TABLE IF EXISTS `user_profile`;
CREATE TABLE IF NOT EXISTS `user_profile` (
  `profile_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `address` varchar(40) NOT NULL,
  `profile_photo` varchar(40) NOT NULL,
  `create_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`profile_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`profile_id`, `user_id`, `address`, `profile_photo`, `create_at`, `updated_at`) VALUES
(1, 38, 'NA', 'userProfile.jpg', '2023-06-27 11:18:27', '2023-06-27 11:18:27'),
(2, 39, 'Mumbai', '39_sachin.jpg', '2023-06-27 11:20:16', '2023-06-27 05:56:48'),
(3, 40, 'Pune', '40_rohit sharma.jpg', '2023-06-27 13:39:33', '2023-06-27 07:10:26'),
(4, 41, 'Mumbai', '41_Surya.jpg', '2023-06-28 04:21:00', '2023-06-28 10:36:24'),
(8, 75, 'NA', 'userProfile.jpg', '2023-07-14 07:34:42', '2023-07-14 07:34:42');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user_profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
