-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 01:52 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sukimebel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bahan`
--

CREATE TABLE `tb_bahan` (
  `id` int(2) NOT NULL,
  `bahan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bahan`
--

INSERT INTO `tb_bahan` (`id`, `bahan`) VALUES
(1, 'Kayu'),
(2, 'Besi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_custom`
--

CREATE TABLE `tb_custom` (
  `id` int(2) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` int(2) NOT NULL,
  `bahan` int(2) NOT NULL,
  `detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_custom`
--

INSERT INTO `tb_custom` (`id`, `foto`, `nama`, `kategori`, `bahan`, `detail`) VALUES
(9, 'icon_register.png', 'Kursi ngab', 1, 1, 'anjas'),
(10, 'anony.jpeg', 'kasur Pengantinn', 1, 1, 'ppp'),
(11, 'foto3.jfif', 'Lemari dosen', 1, 1, 'ahaah'),
(12, 'RARS_18+.svg.png', 'ahah', 1, 1, 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id` int(2) NOT NULL,
  `nama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id`, `nama`) VALUES
(1, 'Kursi'),
(2, 'Meja'),
(3, 'Lemari'),
(4, 'Kasur');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id` int(2) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(12) NOT NULL,
  `qty` int(3) NOT NULL,
  `kategori` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id`, `foto`, `nama`, `harga`, `qty`, `kategori`) VALUES
(38, 'anony.jpeg', 'Meja Belajarr', 25000, 20, 4),
(39, 'icon_login.png', 'Kursi Belajarr', 50000, 50, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `id` int(2) NOT NULL,
  `nama` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`id`, `nama`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(2) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `foto`, `nama`, `nohp`, `email`, `username`, `password`, `level`) VALUES
(57, 'bjorka.jpg', 'Ilham Ibnu Ahmad', '085607743539', 'ilham@gmail.com', 'ilham123', 'ilham123', 1),
(58, 'icon_login.png', 'Fidinova Ika Putri SangAdji', '081231897839', 'fidin@gmail.com', 'fidin123', 'fidin123', 1),
(59, 'RARS_18+.svg.png', 'Sugeng Budisaputra', '085678345123', 'sugeng@gmail.com', 'sugeng123', 'sugeng123', 1),
(61, 'anony.jpeg', 'anony', '085607743539', 'bjirkangab@gmail.com', '123', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bahan`
--
ALTER TABLE `tb_bahan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tb_custom`
--
ALTER TABLE `tb_custom`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bahan` (`bahan`) USING BTREE,
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori` (`kategori`) USING BTREE;

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level` (`level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bahan`
--
ALTER TABLE `tb_bahan`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_custom`
--
ALTER TABLE `tb_custom`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_custom`
--
ALTER TABLE `tb_custom`
  ADD CONSTRAINT `tb_custom_ibfk_1` FOREIGN KEY (`bahan`) REFERENCES `tb_bahan` (`id`),
  ADD CONSTRAINT `tb_custom_ibfk_2` FOREIGN KEY (`kategori`) REFERENCES `tb_kategori` (`id`);

--
-- Constraints for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD CONSTRAINT `tb_product_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `tb_kategori` (`id`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`level`) REFERENCES `tb_role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
