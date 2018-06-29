-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2018 at 05:48 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petshop1`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `fungsi` varchar(200) NOT NULL,
  `harga` int(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `stok` int(255) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `kategori`, `fungsi`, `harga`, `deskripsi`, `stok`, `gambar`, `id_user`) VALUES
(2, 'Whiskas', 'Kucing', 'Makanan', 50000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 70, 'whiskas.jpg', 1),
(3, 'Alpo', 'Anjing', 'Makanan', 150000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 111, 'alpo.jpg', 1),
(4, 'African', 'Burung', 'Makanan', 140000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 100, 'african.jpg', 1),
(5, 'Vitakraft', 'Hamster', 'Makanan', 131000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 100, 'Jual Vitakraft.jpg', 1),
(6, 'Royal Canin', 'Anjing', 'Makanan', 200000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 100, 'royal_anjing.jpg', 1),
(7, 'Whiskas Kaleng', 'Kucing', 'Makanan', 50000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 100, 'whiskas_kaleng.jpg', 1),
(8, 'Vitakraft', 'Kelinci', 'Makanan', 100000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 100, 'kelinci.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id` int(255) NOT NULL,
  `id_barang` int(255) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id` int(255) NOT NULL,
  `id_barang` int(255) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` int(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_provinsi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `nama`, `id_provinsi`) VALUES
(1, 'Banda Aceh', 1),
(2, 'Medan', 2),
(3, 'Padang', 3),
(4, 'Pekanbaru', 4),
(5, 'Jambi', 5),
(6, 'Palembang', 6),
(7, 'Bengkulu', 7),
(8, 'Bandar Lampung', 8),
(9, 'Pangkal Pinang', 9),
(10, 'Tanjung Pinang', 10),
(11, 'Jakarta', 11),
(12, 'Bandung', 12),
(13, 'Semarang', 13),
(14, 'Yogyakarta', 14),
(15, 'Surabaya', 15),
(16, 'Serang', 16),
(17, 'Denpasar', 17),
(18, 'Mataram', 18),
(19, 'Kupang', 19),
(20, 'Pontianak', 20),
(21, 'Palangka Raya', 21),
(22, 'Banjarmasin', 22),
(23, 'Samarinda', 23),
(24, 'Tanjung Selor', 24),
(25, 'Manado', 25),
(26, 'Palu', 26),
(27, 'Makassar', 27),
(28, 'Kendari', 28),
(29, 'Gorontalo', 29),
(30, 'Mamuju', 30),
(31, 'Ambon', 31),
(32, 'Sofifi', 32),
(33, 'Jayapura', 33),
(34, 'Manokwari', 34);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(255) NOT NULL,
  `id_barang` int(255) NOT NULL,
  `order_id` int(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `stok` int(255) NOT NULL,
  `idpenjual` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `id_barang`, `order_id`, `harga`, `stok`, `idpenjual`) VALUES
(1, 7, 1, '50000', 2, 1),
(2, 2, 1, '50000', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `id_pembeli` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `nama`, `tanggal_pembelian`, `status`, `id_pembeli`) VALUES
(1, 'Rizky', '2018-06-29', 'MENUNGGU VERIFIKASI', 2);

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` int(255) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama`) VALUES
(1, 'Aceh'),
(2, 'Sumatera Utara'),
(3, 'Sumatera Barat'),
(4, 'Riau'),
(5, 'Jambi'),
(6, 'Sumatera Selatan'),
(7, 'Bengkulu'),
(8, 'Lampung'),
(9, 'Kepulauan Bangka Belitung'),
(10, 'Kepulauan Riau'),
(11, 'Daerah Khusus Ibukota Jakarta'),
(12, 'Jawa Barat'),
(13, 'Jawa Tengah'),
(14, 'Daerah Istimewa Yogyakarta'),
(15, 'Jawa Timur'),
(16, 'Banten'),
(17, 'Bali'),
(18, 'Nusa Tenggara Barat'),
(19, 'Nusa Tenggara Timur'),
(20, 'Kalimantan Barat'),
(21, 'Kalimantan Tengah'),
(22, 'Kalimantan Selatan'),
(23, 'Kalimantan Timur'),
(24, 'Kalimantan Utara'),
(25, 'Sulawesi Utara'),
(26, 'Sulawesi Tengah'),
(27, 'Sulawesi Selatan'),
(28, 'Sulawesi Tenggara'),
(29, 'Gorontalo'),
(30, 'Sulawesi Barat'),
(31, 'Maluku'),
(32, 'Maluku Utara'),
(33, 'Papua'),
(34, 'Papua Barat');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id` int(255) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `postal_code` int(20) NOT NULL,
  `id_provinsi` int(255) NOT NULL,
  `id_kota` int(255) NOT NULL,
  `id_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id`, `nama`, `alamat`, `no_telp`, `postal_code`, `id_provinsi`, `id_kota`, `id_user`) VALUES
(1, 'Canin Shop', 'Jalan Palagan', '085218203031', 78121, 14, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(80) NOT NULL,
  `postal_code` int(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_provinsi` int(255) NOT NULL,
  `id_kota` int(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_depan`, `nama_belakang`, `alamat`, `email`, `postal_code`, `tanggal_lahir`, `password`, `gambar`, `id_provinsi`, `id_kota`, `level`) VALUES
(1, 'Muhammad', 'Hakaman Athhar', 'Kaliurang', 'hakaman93@gmail.com', 78121, '1997-11-30', 'a9515c512e243f134c8b0d471040179b', 'default.png', 14, 14, 1),
(2, 'Rizky', 'Ari Pratama', 'Jalan Kaliurang', 'rizkyari@gmail.com', 78121, '1997-11-22', '5d41402abc4b2a76b9719d911017c592', 'default.png', 14, 14, 0),
(3, 'Nugroho', 'Agung', 'Jalan Godean', 'Nugroho@gmail.com', 78121, '1997-11-22', '5d41402abc4b2a76b9719d911017c592', 'default.png', 14, 14, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpenjual` (`idpenjual`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_provinsi` (`id_provinsi`),
  ADD KEY `id_kota` (`id_kota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD CONSTRAINT `barang_keluar_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`);

--
-- Constraints for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD CONSTRAINT `barang_masuk_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`);

--
-- Constraints for table `kota`
--
ALTER TABLE `kota`
  ADD CONSTRAINT `kota_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id`);

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
