-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 06:14 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loket`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `nama` varchar(360) DEFAULT NULL,
  `keterangan` varchar(360) DEFAULT NULL,
  `file` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `nama`, `keterangan`, `file`) VALUES
(1, '.', '.', '180721162813');

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id` int(11) NOT NULL,
  `no_antrian` int(100) DEFAULT NULL,
  `id_loket` int(10) DEFAULT NULL,
  `id_users` int(10) DEFAULT NULL,
  `tanggal` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id`, `no_antrian`, `id_loket`, `id_users`, `tanggal`) VALUES
(41, 1, 5, 11, '20210717'),
(42, 2, 5, 11, '20210717'),
(43, 3, 5, 11, '20210717'),
(44, 4, 7, 13, '20210717'),
(45, 5, 5, 11, '20210717'),
(46, 6, 7, 13, '20210717'),
(47, 7, 5, 11, '20210717'),
(48, 8, 8, 14, '20210717'),
(49, 9, NULL, NULL, '20210717'),
(50, 10, NULL, NULL, '20210717'),
(51, 11, NULL, NULL, '20210717'),
(52, 12, NULL, NULL, '20210717'),
(53, 13, NULL, NULL, '20210717'),
(54, 14, NULL, NULL, '20210717'),
(55, 15, NULL, NULL, '20210717'),
(56, 16, NULL, NULL, '20210717'),
(57, 17, NULL, NULL, '20210717'),
(58, 18, NULL, NULL, '20210717'),
(59, 19, NULL, NULL, '20210717'),
(60, 20, NULL, NULL, '20210717'),
(61, 21, NULL, NULL, '20210717'),
(62, 22, NULL, NULL, '20210717'),
(63, 23, NULL, NULL, '20210717'),
(64, 24, NULL, NULL, '20210717'),
(65, 25, NULL, NULL, '20210717'),
(66, 26, NULL, NULL, '20210717'),
(67, 27, NULL, NULL, '20210717'),
(68, 28, NULL, NULL, '20210717'),
(69, 29, NULL, NULL, '20210717'),
(70, 30, NULL, NULL, '20210717'),
(71, 31, NULL, NULL, '20210717'),
(72, 32, NULL, NULL, '20210717'),
(73, 33, NULL, NULL, '20210717'),
(74, 34, NULL, NULL, '20210717'),
(75, 35, NULL, NULL, '20210717'),
(76, 1, 7, 13, '20210718'),
(77, 2, 8, 14, '20210718'),
(78, 3, 5, 11, '20210718'),
(79, 4, 5, 11, '20210718'),
(80, 5, 5, 11, '20210718'),
(81, 6, 7, 13, '20210718'),
(82, 7, 5, 11, '20210718'),
(83, 8, 7, 13, '20210718'),
(84, 9, NULL, NULL, '20210718'),
(85, 10, NULL, NULL, '20210718'),
(86, 11, NULL, NULL, '20210718'),
(87, 12, NULL, NULL, '20210718'),
(88, 13, NULL, NULL, '20210718'),
(89, 14, NULL, NULL, '20210718'),
(90, 1, 5, 11, '20210719'),
(91, 2, 7, 13, '20210719'),
(92, 3, 8, 14, '20210719'),
(93, 4, 6, 12, '20210719'),
(94, 5, NULL, NULL, '20210719'),
(95, 6, NULL, NULL, '20210719'),
(96, 7, NULL, NULL, '20210719'),
(97, 8, NULL, NULL, '20210719'),
(98, 9, NULL, NULL, '20210719'),
(99, 10, NULL, NULL, '20210719');

-- --------------------------------------------------------

--
-- Table structure for table `loket`
--

CREATE TABLE `loket` (
  `id` int(11) NOT NULL,
  `loket` int(100) NOT NULL,
  `id_users` int(11) NOT NULL,
  `status` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loket`
--

INSERT INTO `loket` (`id`, `loket`, `id_users`, `status`) VALUES
(5, 1, 11, 0),
(6, 2, 12, 0),
(7, 3, 13, 0),
(8, 4, 14, 0),
(10, 5, 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `telepon` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `username`, `password`, `role`, `telepon`, `alamat`) VALUES
(2, 'Fahmi Prayoga', 'admin@gmail.com', 'admin27', '$2y$10$9ugVrCeRpZusnInGpHxopOSkpLmp2lgAheeJ1c2g881ncdWlfrg6K', 0, '081219085227', 'Jarakosta'),
(11, 'Dr.Umum', 'umum@gmail.com', 'umum', '$2y$10$/gI7kp/BbyTI/ircuF/XYuYrYPNz3zg3h0JzLbl3nSXbcO4xiec/G', 1, '081219085227', 'Indonesia'),
(12, 'Dr.Gigi', 'gigi@gmail.com', 'gigi', '$2y$10$VqjL7pmwqWLxt9YfhsGbR.P1rkMveFQCFD1pKrMX04SrRk4j3RoWm', 1, '081219085227', 'Indonesia'),
(13, 'Dr.Anak', 'anak@gmail.com', 'anak', '$2y$10$fFZxhFfJxqvhcnBXeiDSjOVj1SF5z8.p.nJGG/KFfqUCX7wSuz1fG', 1, '081219085227', 'Indonesia'),
(14, 'Dr.Kandungan', 'kandungan@gmail.com', 'kandungan', '$2y$10$bzewop76xrhDWmD2eiDdHeZ4ReSpBo4UipfFTfbGdGc36D.EPVey.', 1, '081219085227', 'Indonesia'),
(15, 'Dr.Kulit', 'kulit@gmail.com', 'kulit', '$2y$10$8toYgL8k1IlIoZGKEcBWDO8fEC/LRYkZUYWHrBiS/Der7/8OKdKpe', 1, '081219085227', 'Indonesia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `n` (`id_loket`),
  ADD KEY `l` (`id_users`);

--
-- Indexes for table `loket`
--
ALTER TABLE `loket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `o` (`id_users`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `loket`
--
ALTER TABLE `loket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `antrian`
--
ALTER TABLE `antrian`
  ADD CONSTRAINT `l` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `n` FOREIGN KEY (`id_loket`) REFERENCES `loket` (`id`);

--
-- Constraints for table `loket`
--
ALTER TABLE `loket`
  ADD CONSTRAINT `o` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
