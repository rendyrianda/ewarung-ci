-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2021 at 03:43 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbase_ewarung`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`) VALUES
(2, 'Nazirman', 'admin@gmail.com', '$2y$10$l5ZBhNg3RoaIXhLNHpApiuvVZeIJJkeHqYBSq56Bx56YiPOdkGWb6');

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `no_penjualan` varchar(100) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`no_penjualan`, `id_pelanggan`, `id_produk`, `jumlah`, `total`) VALUES
('PJ1626773277', 4, 51, 2, 12000),
('PJ1626800103', 4, 52, 2, 10000),
('PJ1626827052', 4, 51, 2, 12000),
('PJ1626831705', 19, 54, 3, 18000);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_hp` int(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `jenis_kelamin`, `email`, `password`, `no_hp`, `alamat`) VALUES
(4, 'Nazirman', 'Laki-laki', 'nazirxz444@gmail.com', '$2y$10$yRRsiyP/JZzbKPBBDnvr5uLolSqj3JzdTi/RyzAuktrsGj/CaWvxK', 2147483647, 'Jl. Taman Sari, perumahan permata sari'),
(5, 'Nazirman', 'Laki-laki', 'nazirxz444@gmail.com', '$2y$10$eGudU.pzIcqbgnIur6JDtOQeL5LTRsgt4iotsWpkICSKHAvRJRCCu', 2147483647, 'Jl. Taman Sari, perumahan permata sari'),
(17, 'Nazirman', 'Laki-laki', 'nazirxz404@gmail.com', '$2y$10$kU3onvuSyXRxHkbQNhpPweHOZOyUT1SchElKIVZuxksmHcEugmjEK', 2147483647, 'Jl. Taman Sari, perumahan permata sari'),
(18, 'Nazirman', 'Laki-laki', 'nazir@gmail.com', '$2y$10$j2hvdRpHneotED6quCAeaOaDto/OxaGB9qrujQmww4JbUcJ93dZe2', 2147483647, 'Jl. Taman Sari, perumahan permata sari'),
(19, 'M Fikri', 'Laki-laki', 'fikri@gmail.com', '$2y$10$VxYym9pbjB5x4MatIpThw.MlmCg601OEpeFBvHXm1cp5j2TVU2vha', 2147483647, 'Rumbai');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `no_penjualan` varchar(100) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `total_bayar` int(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Belum Dikirim'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `no_penjualan`, `id_pelanggan`, `total_bayar`, `tanggal`, `alamat`, `pembayaran`, `gambar`, `keterangan`, `status`) VALUES
(7, 'PJ1626800103', 4, 10000, '20/07/2021', 'Jln.Umban Sari, PCR', 'BRI', 'photo_2021-06-27_15-36-36.jpg', '2222', 'Belum Dikirim'),
(8, 'PJ1626827052', 4, 12000, '21/07/2021', 'Jln.Soebrantas', 'MANDIRI', 'e5ac0e101681325_5f243716dc3e7.jpg', '1231', 'Belum Dikirim'),
(9, 'PJ1626831705', 19, 18000, '21/07/2021', 'Rumbai Atas', 'BRI', '', 'Cepat ya', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_product` varchar(60) NOT NULL,
  `harga_product` double(10,0) NOT NULL,
  `ktgr_product` varchar(50) NOT NULL,
  `stok` int(100) NOT NULL,
  `img_product` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_product`, `harga_product`, `ktgr_product`, `stok`, `img_product`) VALUES
(50, 'Nu Oceana', 8000, 'Minuman', 5, '15072020104936niioceana.jpg'),
(51, 'Mie Sedap Cup', 6000, 'Makanan', 1, '15072020105042miesedaap.jpg'),
(52, 'Milo ', 5000, 'Minuman', 4, '15072020105028milo.jpg'),
(53, 'Indomie Mie Goreng', 3000, 'Makanan', 5, '15072020104913indomie.jpg'),
(54, 'Tango wafer', 6000, 'Makanan', 7, '15072020104858tango.jpg'),
(55, 'Teh Pucuk Harum', 6000, 'Minuman', 6, '15072020104837tehpucuk.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD KEY `id_plg` (`id_pelanggan`),
  ADD KEY `fk_produk` (`id_produk`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD KEY `plg` (`id_pelanggan`),
  ADD KEY `produk` (`id_produk`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkplg2` (`id_pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD CONSTRAINT `fk_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`),
  ADD CONSTRAINT `id_plg` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `plg` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id`),
  ADD CONSTRAINT `produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `fkplg2` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
