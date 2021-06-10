-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 08:54 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullstack_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `idchat` int(11) NOT NULL,
  `sender` int(11) DEFAULT NULL,
  `receiver` int(11) DEFAULT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`idchat`, `sender`, `receiver`, `time`, `message`) VALUES
(1, 1, 2, '2021-06-10 12:11:20', 'Halo Namaku Billy'),
(2, 2, 1, '2021-06-10 12:12:20', 'Halo juga, namaku Mario'),
(3, 1, 2, '2021-06-10 12:13:20', 'salken'),
(4, 2, 1, '2021-06-10 12:14:20', 'salken juga'),
(5, 1, 2, '2021-06-10 12:14:20', 'hehehe'),
(6, 1, 3, '2021-06-10 12:14:20', 'Halom bim'),
(7, 3, 1, '2021-06-10 12:15:20', 'halo2'),
(8, 1, 3, '2021-06-10 12:15:20', 'gmn kabarmu?'),
(9, 1, 3, '2021-06-10 22:51:20', NULL),
(10, 1, 3, '2021-06-10 22:51:20', 'oy'),
(11, 1, 3, '2021-06-10 22:51:20', 'p'),
(12, 1, 3, '2021-06-10 22:51:20', 'p'),
(13, 1, 3, '2021-06-10 22:51:20', 'p'),
(14, 1, 3, '2021-06-10 22:51:20', 'p'),
(15, 1, 3, '2021-06-10 22:51:20', 'p'),
(16, 1, 3, '2021-06-10 22:51:20', 'p'),
(17, 1, 3, '2021-06-10 22:51:20', 'p'),
(18, 1, 3, '2021-06-10 22:51:20', 'p'),
(19, 1, 3, '2021-06-10 22:51:20', 'test'),
(20, 1, 3, '2021-06-10 22:51:20', 'oyy'),
(21, 1, 2, '2021-06-10 22:51:20', 'uhuhuhuh'),
(22, 1, 2, '2021-06-10 22:51:20', 'huhuhuhu'),
(23, 1, 2, '2021-06-10 22:51:20', 'heheheh'),
(24, 1, 2, '2021-06-10 22:51:20', 'hahahhaa'),
(25, 1, 3, '2021-06-10 22:51:20', 'HAHAHAHAHAHAHAHHAAHAHAHAHAHAHAHAHAHHAHAHAHA'),
(26, 1, 3, '2021-06-10 22:51:20', ''),
(27, 1, 3, '2021-06-10 22:51:20', 'HAHAHHA'),
(28, 1, 2, '2021-06-10 22:51:20', 'test'),
(29, 1, 2, '2021-06-10 22:51:20', ''),
(30, 1, 2, '2021-06-10 22:51:20', 'test'),
(31, 1, 3, '2021-06-10 22:52:05', 'p'),
(32, 1, 2, '2021-06-10 22:56:18', 'p'),
(33, 1, 3, '2021-06-10 22:58:29', 'test'),
(34, 1, 2, '2021-06-10 23:03:19', 'test'),
(35, 1, 3, '2021-06-10 23:05:03', 'test'),
(36, 1, 2, '2021-06-10 23:05:07', 'test'),
(37, 1, 2, '2021-06-10 23:26:03', 'mario'),
(38, 1, 3, '2021-06-10 23:26:07', 'bima'),
(39, 1, 3, '2021-06-10 23:27:16', 'tes'),
(40, 4, 1, '2021-06-11 01:37:20', 'TES'),
(41, 4, 2, '2021-06-11 01:37:27', 'HOY'),
(42, 4, 3, '2021-06-11 01:37:33', 'Hey'),
(43, 4, 1, '2021-06-11 01:38:43', 'aku power ranger'),
(44, 1, 4, '2021-06-11 01:38:46', 'aku billy');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `extention` varchar(45) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `extention`, `iduser`) VALUES
(1, 'jpg', 1),
(2, 'jpg', 2),
(3, 'jpg', 3),
(4, 'jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `name` varchar(45) NOT NULL,
  `status` enum('Online','Offline') DEFAULT 'Offline'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `username`, `password`, `name`, `status`) VALUES
(1, 'brenatasiva', '123', 'Billy', 'Online'),
(2, 'venmario', '123', 'Mario', 'Offline'),
(3, 'bima', '123', 'Bima', 'Offline'),
(4, 'ranger', '123', 'Power Ranger', 'Offline');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`idchat`),
  ADD KEY `fromUser` (`sender`),
  ADD KEY `toUser` (`receiver`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `idchat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`sender`) REFERENCES `users` (`iduser`),
  ADD CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`receiver`) REFERENCES `users` (`iduser`);

--
-- Constraints for table `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `gambar_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
