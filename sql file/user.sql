-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 13, 2022 at 11:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `details`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `phone`, `country`, `state`, `username`, `password`) VALUES
(2, 'Jagru', 'Mahato', 'jagrumahato95@gmail.com', '8944936301', 'India', 'West Bengal', 'jagru', '1234'),
(3, 'Bhaskar', 'Sarkar', 'bhaskarsarkar733124@gmail.com', '8906622602', 'India', 'West Bengal', 'bhaskar', 'admin'),
(4, 'Subhankar', 'Barman', 'subhankar@gmail.com', '8918095764', 'India', 'West Bengal', 'subhankar', '1234'),
(5, 'rahul', 'mahato', 'rahulmahato123@gmail.com', '6295260031', 'india', 'west bengal', 'rahul', '3214'),
(6, 'Dipayan', 'Rana', 'dipayanrana@gmail.com', '7319349340', 'India', 'WEST BENGAL', 'dipayanrana', 'Dipayan143@'),
(7, 'RAHUL', 'MAHATO', 'rahulmhato123@gmail.com', '07364157852', 'India', 'West Bengal', 'RAGHUK', '12345'),
(8, 'Sourav', 'mahato', 'souravmahato123@gmail.com', '8918806536', 'india', 'West Bengal', 'SOURAV', '1230'),
(9, 'NURTAJ', 'HOSSAIN', 'nurtaj123@gmail.com', '7679617847', 'india', 'West Bengal', 'nurtaj', '12345'),
(10, 'samsul', 'islam', 'samsul123@gmail.com', '7076611367', 'india', 'West Bengal', 'Samsul', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
