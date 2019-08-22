-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2019 at 03:46 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_merk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `kode_barang`, `nama_barang`, `stok`, `id_satuan`, `id_merk`) VALUES
(1, 'BRG0001', 'Pulpen', 12, 1, 2),
(2, 'BRG0002', 'Spidol', 8, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `barang_aset`
--

CREATE TABLE `barang_aset` (
  `id_aset` int(11) NOT NULL,
  `kode_aset` varchar(50) NOT NULL,
  `nama_aset` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_aset`
--

INSERT INTO `barang_aset` (`id_aset`, `kode_aset`, `nama_aset`) VALUES
(1, '3.02.01.01.002', 'Jeep'),
(2, '3.02.01.01.003', 'Station Wagon'),
(3, '3.02.01.04.001', 'Sepeda Motor');

-- --------------------------------------------------------

--
-- Table structure for table `barang_aset_pinjam`
--

CREATE TABLE `barang_aset_pinjam` (
  `id_aset_pinjam` int(11) NOT NULL,
  `kode_pinjam` varchar(10) NOT NULL,
  `kode_aset` varchar(255) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `id_satuan_aset` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_aset_pinjam`
--

INSERT INTO `barang_aset_pinjam` (`id_aset_pinjam`, `kode_pinjam`, `kode_aset`, `nama_pegawai`, `keterangan`, `jabatan`, `id_satuan_aset`, `tanggal_pinjam`) VALUES
(2, 'PJM0001', '3.02.01.04.001', 'Ari', '+Helm', 'Staf Keum', 0, '0000-00-00'),
(3, 'PJM0003', '3.02.01.01.003', 'Dany', '-', 'Staf Keum', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `barang_aset_sub`
--

CREATE TABLE `barang_aset_sub` (
  `id_aset_sub` int(11) NOT NULL,
  `tanggal_input` date NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `seri` varchar(10) NOT NULL,
  `nama_aset` varchar(20) NOT NULL,
  `detail_aset` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_aset_sub`
--

INSERT INTO `barang_aset_sub` (`id_aset_sub`, `tanggal_input`, `tahun`, `seri`, `nama_aset`, `detail_aset`) VALUES
(5, '2019-05-29', '2015', '001', 'Sepeda Motor', ''),
(6, '2019-05-29', '2015', '001', 'Station Wagon', ''),
(7, '2019-05-29', '2015', '002', 'Sepeda Motor', '');

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id_barang_keluar` int(11) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pegawai` varchar(50) NOT NULL,
  `bidang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`id_barang_keluar`, `kode_barang`, `jumlah`, `tanggal`, `pegawai`, `bidang`) VALUES
(0, 'BRG0002', 3, '2019-04-25', 'sony', 'Keum');

--
-- Triggers `barang_keluar`
--
DELIMITER $$
CREATE TRIGGER `keluar` AFTER INSERT ON `barang_keluar` FOR EACH ROW BEGIN
	UPDATE barang SET stok = stok-NEW.jumlah
    WHERE kode_barang = NEW.kode_barang;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `kembali_keluar` AFTER DELETE ON `barang_keluar` FOR EACH ROW BEGIN
	UPDATE barang SET stok = stok+OLD.jumlah
    WHERE kode_barang = OLD.kode_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_barang_masuk` int(11) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_barang_masuk`, `kode_barang`, `jumlah`, `harga`, `supplier`, `tanggal`) VALUES
(5, 'BRG0001', 5, 250000, 'apridona', '2019-03-08'),
(8, 'BRG0002', 7, 10000, 'kopkarhut', '2019-03-28'),
(9, 'BRG0001', 3, 250000, 'kopkarhut', '2019-05-06'),
(10, 'BRG0002', 1, 250000, 'apridona', '2019-05-07');

--
-- Triggers `barang_masuk`
--
DELIMITER $$
CREATE TRIGGER `kembali_masuk` AFTER DELETE ON `barang_masuk` FOR EACH ROW BEGIN
	UPDATE barang SET stok = stok-OLD.jumlah
    WHERE kode_barang = OLD.kode_barang;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `masuk` AFTER INSERT ON `barang_masuk` FOR EACH ROW BEGIN
	UPDATE barang SET stok = stok+NEW.jumlah
    WHERE kode_barang = NEW.kode_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `merk_barang`
--

CREATE TABLE `merk_barang` (
  `id_merk` int(11) NOT NULL,
  `merk_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merk_barang`
--

INSERT INTO `merk_barang` (`id_merk`, `merk_barang`) VALUES
(1, 'Standard'),
(2, 'Snowman');

-- --------------------------------------------------------

--
-- Table structure for table `satuan_aset`
--

CREATE TABLE `satuan_aset` (
  `id_satuan_aset` int(11) NOT NULL,
  `satuan_aset` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan_aset`
--

INSERT INTO `satuan_aset` (`id_satuan_aset`, `satuan_aset`) VALUES
(0, 'Buah');

-- --------------------------------------------------------

--
-- Table structure for table `satuan_barang`
--

CREATE TABLE `satuan_barang` (
  `id_satuan` int(11) NOT NULL,
  `satuan_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan_barang`
--

INSERT INTO `satuan_barang` (`id_satuan`, `satuan_barang`) VALUES
(1, 'PAK');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `nama_lengkap`, `profile`) VALUES
(1, 'manajemen', 'manajemen', 'manajemen', 'manajemen', ''),
(2, 'sonnyr', '123123', 'staff', 'sonny regia', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `barang_aset`
--
ALTER TABLE `barang_aset`
  ADD PRIMARY KEY (`id_aset`);

--
-- Indexes for table `barang_aset_pinjam`
--
ALTER TABLE `barang_aset_pinjam`
  ADD PRIMARY KEY (`id_aset_pinjam`);

--
-- Indexes for table `barang_aset_sub`
--
ALTER TABLE `barang_aset_sub`
  ADD PRIMARY KEY (`id_aset_sub`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_barang_masuk`);

--
-- Indexes for table `merk_barang`
--
ALTER TABLE `merk_barang`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indexes for table `satuan_barang`
--
ALTER TABLE `satuan_barang`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `barang_aset`
--
ALTER TABLE `barang_aset`
  MODIFY `id_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `barang_aset_pinjam`
--
ALTER TABLE `barang_aset_pinjam`
  MODIFY `id_aset_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `barang_aset_sub`
--
ALTER TABLE `barang_aset_sub`
  MODIFY `id_aset_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id_barang_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `merk_barang`
--
ALTER TABLE `merk_barang`
  MODIFY `id_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `satuan_barang`
--
ALTER TABLE `satuan_barang`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
