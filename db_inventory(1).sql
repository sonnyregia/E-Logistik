-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2019 at 05:38 AM
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
  `satuan_barang` varchar(20) NOT NULL,
  `merk_barang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `kode_barang`, `nama_barang`, `stok`, `satuan_barang`, `merk_barang`) VALUES
(1, 'BRG0001', 'Pensil', 4, 'PAK', 'Standard'),
(2, 'BRG0002', 'Boxfile', 6, 'RIM', 'Standard');

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
(4, '3.02.01.04.001', 'Sepeda Motor'),
(5, '3.02.01.01.003', 'Station Wagon');

-- --------------------------------------------------------

--
-- Table structure for table `barang_aset_kembali`
--

CREATE TABLE `barang_aset_kembali` (
  `id_aset_kembali` int(11) NOT NULL,
  `kode_kembali` varchar(20) NOT NULL,
  `tanggal_balik` date NOT NULL,
  `id_aset_pinjam` int(11) NOT NULL,
  `id_aset` int(11) NOT NULL,
  `id_aset_sub` int(11) NOT NULL,
  `terlambat` text NOT NULL,
  `kartu_b` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_aset_kembali`
--

INSERT INTO `barang_aset_kembali` (`id_aset_kembali`, `kode_kembali`, `tanggal_balik`, `id_aset_pinjam`, `id_aset`, `id_aset_sub`, `terlambat`, `kartu_b`) VALUES
(3, '', '2019-08-29', 13, 4, 6, '0', ''),
(4, '', '2019-08-29', 14, 5, 7, '0', ''),
(5, '', '2019-08-29', 15, 4, 6, '0', ''),
(6, '', '0000-00-00', 14, 5, 7, '0', ''),
(7, '', '2019-08-29', 14, 5, 7, '0', ''),
(8, '', '2019-08-29', 13, 4, 6, '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `barang_aset_pinjam`
--

CREATE TABLE `barang_aset_pinjam` (
  `kode_pinjam` varchar(10) NOT NULL,
  `id_aset_pinjam` int(11) NOT NULL,
  `id_aset` int(11) NOT NULL,
  `id_aset_sub` int(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tgl_balik` date NOT NULL,
  `kartu_p` varchar(20) NOT NULL,
  `seri` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_aset_pinjam`
--

INSERT INTO `barang_aset_pinjam` (`kode_pinjam`, `id_aset_pinjam`, `id_aset`, `id_aset_sub`, `nama_pegawai`, `keterangan`, `jabatan`, `tanggal_pinjam`, `tgl_balik`, `kartu_p`, `seri`, `status`) VALUES
('', 13, 4, 6, 'sonny', '-', 'staf keum', '2019-08-27', '2019-08-28', '1', '', '0'),
('', 14, 5, 7, 'dany', '-', 'staf keum', '2019-08-28', '2019-08-29', '2', '', '0'),
('', 15, 4, 6, 'dany', '-', 'staf keum', '2019-08-29', '2019-08-30', '4', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `barang_aset_pinjam_detail`
--

CREATE TABLE `barang_aset_pinjam_detail` (
  `id_aset_pinjam_detail` int(11) NOT NULL,
  `kode_pinjam` varchar(20) NOT NULL,
  `kode_aset` varchar(20) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `jabatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang_aset_sub`
--

CREATE TABLE `barang_aset_sub` (
  `id_aset_sub` int(11) NOT NULL,
  `tanggal_input` varchar(20) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `seri` varchar(10) NOT NULL,
  `id_aset` int(11) NOT NULL,
  `detail_aset` varchar(50) NOT NULL,
  `id_merk_aset` int(11) NOT NULL,
  `penguasaan` text NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_satuan_aset` int(11) NOT NULL,
  `grup` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_aset_sub`
--

INSERT INTO `barang_aset_sub` (`id_aset_sub`, `tanggal_input`, `tahun`, `seri`, `id_aset`, `detail_aset`, `id_merk_aset`, `penguasaan`, `keterangan`, `gambar`, `id_satuan_aset`, `grup`) VALUES
(6, '20 August 2019', '2015', '001', 4, '', 3, 'milik sendiri', '-', '', 2, '2'),
(7, '20 August 2019', '2016', '001', 5, '', 4, 'milik sendiri', '-', '', 2, '1');

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id_barang_keluar` int(11) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `pegawai` varchar(50) NOT NULL,
  `bidang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `tanggal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_barang_masuk`, `kode_barang`, `jumlah`, `harga`, `supplier`, `tanggal`) VALUES
(26, 'BRG0002', 2, 500000, 'asd', '24 July 2019');

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
-- Table structure for table `detail_kembali`
--

CREATE TABLE `detail_kembali` (
  `kode_kembali` varchar(20) NOT NULL,
  `kode_aset` varchar(20) NOT NULL,
  `kode_pinjam` varchar(20) NOT NULL,
  `id_aset_detatil_kembali` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_kembali`
--

INSERT INTO `detail_kembali` (`kode_kembali`, `kode_aset`, `kode_pinjam`, `id_aset_detatil_kembali`) VALUES
('KMB0001', '3.02.01.01.002', 'PJM0002', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kodeurut`
--

CREATE TABLE `kodeurut` (
  `kodeurut` varchar(10) NOT NULL,
  `seri` varchar(10) NOT NULL,
  `nama_aset` varchar(200) NOT NULL,
  `tanggal_input` varchar(20) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `id_urut` int(11) NOT NULL,
  `merk_aset` varchar(50) NOT NULL,
  `penguasaan` text NOT NULL,
  `keterangan` text NOT NULL,
  `satuan_aset` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kodeurut`
--

INSERT INTO `kodeurut` (`kodeurut`, `seri`, `nama_aset`, `tanggal_input`, `tahun`, `id_urut`, `merk_aset`, `penguasaan`, `keterangan`, `satuan_aset`) VALUES
('BMN0001', '001', 'Sepeda Motor', '13 August 2019', '2015', 1, 'Suzuki', 'milik sendiri', 'basemen', 'Unit'),
('BMN0002', '003', 'Sepeda Motor', '13 August 2019', '2015', 2, 'Honda', 'milik sendiri', 'basemen', 'Unit');

-- --------------------------------------------------------

--
-- Table structure for table `merk_aset`
--

CREATE TABLE `merk_aset` (
  `id_merk_aset` int(11) NOT NULL,
  `merk_aset` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merk_aset`
--

INSERT INTO `merk_aset` (`id_merk_aset`, `merk_aset`) VALUES
(3, 'Suzuki'),
(4, 'Honda');

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
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(11) NOT NULL,
  `nama_ruang` varchar(50) NOT NULL,
  `kode_ruang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`, `kode_ruang`) VALUES
(1, 'Ruang IT', 'A.1'),
(2, 'Ruang Arsip', 'A.3'),
(3, 'Ruang Mushola Wing A', 'A.7');

-- --------------------------------------------------------

--
-- Table structure for table `ruang_detail`
--

CREATE TABLE `ruang_detail` (
  `id_ruang_detail` int(11) NOT NULL,
  `id_aset` int(11) NOT NULL,
  `id_aset_sub` int(11) NOT NULL,
  `pemegang` varchar(100) NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `id_merk_aset` int(11) NOT NULL,
  `id_satuan_aset` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang_detail`
--

INSERT INTO `ruang_detail` (`id_ruang_detail`, `id_aset`, `id_aset_sub`, `pemegang`, `id_ruang`, `id_merk_aset`, `id_satuan_aset`) VALUES
(1, 4, 6, 'Abadi', 2, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `satuan_aset`
--

CREATE TABLE `satuan_aset` (
  `satuan_aset` varchar(20) NOT NULL,
  `id_satuan_aset` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan_aset`
--

INSERT INTO `satuan_aset` (`satuan_aset`, `id_satuan_aset`) VALUES
('Buah', 1),
('Unit', 2);

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
(1, 'PAK'),
(2, 'RIM');

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
(2, 'sonnyr', '123123', 'staff', 'sonny regia', ''),
(3, 'logistik', 'logistik', 'staff', 'herna ari', ''),
(4, 'admin', 'admin', 'manajemen', 'admin', ''),
(5, 'herna.ari', '12345678', 'staff', 'Herna Ari', ''),
(6, 'Diah.NurAmalia', '123456', 'staff', 'Diah Nur Amalia', ''),
(7, 'Muhammad.zaky', '123456', 'staff', 'Muhammad Zaky', '');

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
-- Indexes for table `barang_aset_kembali`
--
ALTER TABLE `barang_aset_kembali`
  ADD PRIMARY KEY (`id_aset_kembali`);

--
-- Indexes for table `barang_aset_pinjam`
--
ALTER TABLE `barang_aset_pinjam`
  ADD PRIMARY KEY (`id_aset_pinjam`);

--
-- Indexes for table `barang_aset_pinjam_detail`
--
ALTER TABLE `barang_aset_pinjam_detail`
  ADD PRIMARY KEY (`id_aset_pinjam_detail`);

--
-- Indexes for table `barang_aset_sub`
--
ALTER TABLE `barang_aset_sub`
  ADD PRIMARY KEY (`id_aset_sub`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id_barang_keluar`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_barang_masuk`);

--
-- Indexes for table `detail_kembali`
--
ALTER TABLE `detail_kembali`
  ADD PRIMARY KEY (`id_aset_detatil_kembali`);

--
-- Indexes for table `kodeurut`
--
ALTER TABLE `kodeurut`
  ADD PRIMARY KEY (`id_urut`);

--
-- Indexes for table `merk_aset`
--
ALTER TABLE `merk_aset`
  ADD PRIMARY KEY (`id_merk_aset`);

--
-- Indexes for table `merk_barang`
--
ALTER TABLE `merk_barang`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `ruang_detail`
--
ALTER TABLE `ruang_detail`
  ADD PRIMARY KEY (`id_ruang_detail`);

--
-- Indexes for table `satuan_aset`
--
ALTER TABLE `satuan_aset`
  ADD PRIMARY KEY (`id_satuan_aset`);

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
  MODIFY `id_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `barang_aset_kembali`
--
ALTER TABLE `barang_aset_kembali`
  MODIFY `id_aset_kembali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `barang_aset_pinjam`
--
ALTER TABLE `barang_aset_pinjam`
  MODIFY `id_aset_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `barang_aset_pinjam_detail`
--
ALTER TABLE `barang_aset_pinjam_detail`
  MODIFY `id_aset_pinjam_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang_aset_sub`
--
ALTER TABLE `barang_aset_sub`
  MODIFY `id_aset_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id_barang_keluar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id_barang_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `detail_kembali`
--
ALTER TABLE `detail_kembali`
  MODIFY `id_aset_detatil_kembali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kodeurut`
--
ALTER TABLE `kodeurut`
  MODIFY `id_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `merk_aset`
--
ALTER TABLE `merk_aset`
  MODIFY `id_merk_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `merk_barang`
--
ALTER TABLE `merk_barang`
  MODIFY `id_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ruang_detail`
--
ALTER TABLE `ruang_detail`
  MODIFY `id_ruang_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `satuan_aset`
--
ALTER TABLE `satuan_aset`
  MODIFY `id_satuan_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `satuan_barang`
--
ALTER TABLE `satuan_barang`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
