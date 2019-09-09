-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2019 at 02:39 AM
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
(1, '3.02.01.01.002', 'Jeep'),
(2, '3.02.01.01.003', 'Station Wagon'),
(3, '3.02.01.02.003', 'Mini Bus ( Penumpang 14 Orang Kebawah )'),
(4, '3.02.01.04.001', 'Sepeda Motor'),
(5, '3.03.03.08.019', 'Planimeter (Mat Ukur/pembanding)'),
(6, '3.04.01.05.005', 'Alat Pengukur P.H. Tanah (Soil Tester)'),
(7, '3.05.01.01.008', 'Mesin Ketik Elektronik/Selelctrik'),
(8, '3.05.01.04.001', 'Lemari Besi/Metal'),
(9, '3.05.01.04.002', 'Lemari Kayu'),
(10, '3.05.01.04.007', 'Brandkas'),
(11, '3.05.01.04.009', 'Kardex Besi'),
(12, '3.05.01.05.007', 'CCTV - Camera Control Television System'),
(13, '3.05.01.05.010', 'White Board'),
(14, '3.05.01.05.015', 'Alat Penghancur Kertas'),
(15, '3.05.01.05.017', 'Mesin Absensi'),
(16, '3.05.01.05.037', 'White Board Electronic'),
(17, '3.05.01.05.048', 'LCD Projector/Infocus'),
(18, '3.05.01.05.052', 'Alat Perekam Suara (Voice Pen)'),
(19, '3.05.01.05.058', 'Focusing Screen/Layar LCD Projector'),
(20, '3.05.02.01.002', 'Meja Kerja Kayu'),
(21, '3.05.02.01.003', 'Kursi Besi/Metal'),
(22, '3.05.02.01.004', 'Kursi Kayu'),
(23, '3.05.02.01.005', 'Sice'),
(24, '3.05.02.01.008', 'Meja Rapat'),
(25, '3.05.02.01.009', 'Meja Komputer'),
(26, '3.05.02.01.014', 'Meja Resepsionis'),
(27, '3.05.02.01.018', 'Meja Makan Besi'),
(28, '3.05.02.01.999', 'Meubelair Lainnya'),
(29, '3.05.02.02.003', 'Jam Elektronik'),
(30, '3.05.02.04.002', 'A.C. Sentral'),
(31, '3.05.02.04.004', 'A.C. Split'),
(32, '3.05.02.06.002', 'Televisi'),
(33, '3.05.02.06.006', 'Equalizer'),
(34, '3.05.02.06.007', 'Loudspeaker'),
(35, '3.05.02.06.011', 'Karaoke'),
(36, '3.05.02.06.012', 'Wireless'),
(37, '3.05.02.06.014', 'Microphone'),
(38, '3.05.02.06.026', 'Lambang Garuda Pancasila'),
(39, '3.05.02.06.027', 'Gambar Presiden/Wakil Presiden'),
(40, '3.05.02.06.036', 'Dispenser'),
(41, '3.05.02.06.046', 'Handy Cam'),
(42, '3.05.02.99.999', 'Alat Rumah Tangga Lainnya'),
(43, '3.06.01.01.001', 'Audio Mixing Console'),
(44, '3.06.01.01.036', 'Microphone/Wireless MIC'),
(45, '3.06.01.01.040', 'Power Supply Microphone'),
(46, '3.06.01.01.048', 'Uninterruptible Power Supply (UPS)'),
(47, '3.06.01.01.060', 'Power Amplifier'),
(48, '3.06.01.01.999', 'Peralatan Studio Audio Lainnya'),
(49, '3.06.01.02.128', 'Camera Digital'),
(50, '3.06.01.02.135', 'LCD Monitor'),
(51, '3.06.01.04.014', 'Mesin Jilid'),
(52, '3.06.01.05.035', 'Kompas (Peralatan Studio / Peralatan Ukur Tanah)'),
(53, '3.06.01.05.038', 'GPS Receiver'),
(54, '3.06.02.01.001', 'Telephone (PABX)'),
(55, '3.06.02.01.003', 'Pesawat Telephone'),
(56, '3.06.02.01.010', 'Facsimile'),
(57, '3.06.02.06.002', 'Wireless Amplifier'),
(58, '3.06.02.07.005', 'Finger Printer Time and Attandance Acces Control System'),
(59, '3.06.02.09.006', 'Switching Matrix and Server'),
(60, '3.10.01.02.001', 'P C Unit'),
(61, '3.10.01.02.002', 'Lap Top'),
(62, '3.10.02.03.003', 'Printer (Peralatan Personal Komputer)'),
(63, '3.10.02.03.004', 'Scanner (Peralatan Personal Komputer)'),
(64, '3.10.02.04.001', 'Server'),
(65, '3.10.02.04.014', 'Rak Server'),
(66, '6.01.01.01.001', 'Monografi'),
(67, '6.07.03.01.001', 'Gedung dan Bangunan Dalam Renovasi'),
(68, '8.01.01.01.001', 'Software Komputer');

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
(1, '20 August 2019', '2008', '1', 1, 'Suzuki Grand Vitara', 1, 'Kasubbag Umum', '', '', 2, '1'),
(2, '20 August 2019', '2008', '1', 2, 'Suzuki APV', 1, 'Kasubbid Bagi Hasil dan Syariah', '', '', 2, '1'),
(3, '20 August 2019', '2009', '1', 3, 'Daihatsu Terios TX', 2, 'Kasubbid Pinjaman', '', '', 2, '1'),
(4, '20 August 2019', '2009', '2', 3, 'Daihatsu Terios TX', 2, 'Kasubbid Monitoring dan Evaluasi', '', '', 2, '1'),
(5, '20 August 2019', '2009', '3', 3, 'Daihatsu Terios TX', 2, 'Kasubbid Hukum dan Perikatan', '', '', 2, '1'),
(6, '20 August 2019', '2010', '4', 3, 'Suzuki APV Arena', 1, 'Bagian Keuangan dan Umum', '', '', 2, '1'),
(7, '20 August 2019', '2012', '5', 3, 'Pajero Sport Exceed', 3, 'Kepala Pusat ', '', '', 2, '1'),
(8, '20 August 2019', '2012', '6', 3, 'Outlander Sport ', 3, 'Kepala Bagian Keuangan dan Umum', '', '', 2, '1'),
(9, '20 August 2019', '2012', '7', 3, 'Outlander Sport ', 3, 'Kepala Bidang Analisis Pembiayaan Kehutanan', '', '', 2, '1'),
(10, '20 August 2019', '2012', '8', 3, 'Outlander Sport ', 3, 'Kepala Bidang Operasional', '', '', 2, '1'),
(11, '20 August 2019', '2008', '1', 4, 'Honda Tiger ', 4, 'Petugas Lapangan (Topan Sambas)', '', '', 2, '1'),
(12, '20 August 2019', '2011', '2', 4, 'Honda Vario ', 4, 'Bagian Keuangan dan Umum (Rian Ali)', '', '', 2, '1'),
(13, '20 August 2019', '2011', '3', 4, 'Yamaha Mio Soul', 5, 'Bagian Keuangan dan Umum (Sendi Alfa)', '', '', 2, '1'),
(14, '20 August 2019', '2008', '1', 5, 'Placom KP-90N', 6, 'R. AUDIT / SPI', '', '', 1, '1'),
(15, '20 August 2019', '2015', '1', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI', '', '', 1, '1'),
(16, '20 August 2019', '2015', '2', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI', '', '', 1, '1'),
(17, '20 August 2019', '2015', '3', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI', '', '', 1, '1'),
(18, '20 August 2019', '2015', '4', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI', '', '', 1, '1'),
(19, '20 August 2019', '2015', '5', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI', '', '', 1, '1'),
(20, '20 August 2019', '2015', '6', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI', '', '', 1, '1'),
(21, '20 August 2019', '2015', '7', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI', '', '', 1, '1'),
(22, '20 August 2019', '2015', '8', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI', '', '', 1, '1'),
(23, '20 August 2019', '2015', '9', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI', '', '', 1, '1'),
(24, '20 August 2019', '2015', '10', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI', '', '', 1, '1'),
(25, '20 August 2019', '2015', '11', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI', '', '', 1, '1'),
(26, '20 August 2019', '2015', '12', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI', '', '', 1, '1'),
(27, '20 August 2019', '2015', '13', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI', '', '', 1, '1'),
(28, '20 August 2019', '2015', '14', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI', '', '', 1, '1'),
(29, '20 August 2019', '2015', '15', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI', '', '', 1, '1'),
(30, '20 August 2019', '2015', '16', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI', '', '', 1, '1'),
(31, '20 August 2019', '2015', '17', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI', '', '', 1, '1'),
(32, '20 August 2019', '2015', '18', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(33, '20 August 2019', '2015', '19', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(34, '20 August 2019', '2015', '20', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(35, '20 August 2019', '2015', '21', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(36, '20 August 2019', '2015', '22', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(37, '20 August 2019', '2015', '23', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(38, '20 August 2019', '2015', '24', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(39, '20 August 2019', '2015', '25', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(40, '20 August 2019', '2015', '26', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(41, '20 August 2019', '2015', '27', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(42, '20 August 2019', '2015', '28', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(43, '20 August 2019', '2015', '29', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(44, '20 August 2019', '2015', '30', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(45, '20 August 2019', '2015', '31', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(46, '20 August 2019', '2015', '32', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(47, '20 August 2019', '2015', '33', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(48, '20 August 2019', '2015', '34', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(49, '20 August 2019', '2015', '35', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(50, '20 August 2019', '2015', '36', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(51, '20 August 2019', '2015', '37', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(52, '20 August 2019', '2015', '38', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(53, '20 August 2019', '2015', '39', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(54, '20 August 2019', '2015', '40', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(55, '20 August 2019', '2015', '41', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(56, '20 August 2019', '2015', '42', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(57, '20 August 2019', '2015', '43', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(58, '20 August 2019', '2015', '44', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(59, '20 August 2019', '2015', '45', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(60, '20 August 2019', '2015', '46', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(61, '20 August 2019', '2015', '47', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(62, '20 August 2019', '2015', '48', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(63, '20 August 2019', '2015', '49', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(64, '20 August 2019', '2015', '50', 6, 'Takemura DM 5', 7, 'R. AUDIT / SPI (TDK TERIDENTIFIKASI)', '', '', 1, '1'),
(65, '20 August 2019', '2009', '1', 7, 'Nakajima AX-160', 8, 'R. GUDANG 2', '', '', 1, '1'),
(66, '20 August 2019', '2012', '2', 8, 'Isometri Mobile File Manual', 9, 'BLU PUSAT P211', '', '', 1, '1'),
(67, '20 August 2019', '2013', '13', 9, 'Lokal', 10, '', '', '', 1, '1'),
(68, '20 August 2019', '2013', '14', 9, 'Lokal', 10, 'BLU PUSAT P211', '', '', 1, '1'),
(69, '20 August 2019', '2013', '15', 9, 'Lokal', 10, 'BLU PUSAT P2H', '', '', 1, '1'),
(70, '20 August 2019', '2015', '24', 9, 'Lokal', 10, 'R. KEPALA PUSAT', '', '', 1, '1'),
(71, '20 August 2019', '2015', '25', 9, 'Lokal', 10, 'R. KEPALA PUSAT', '', '', 1, '1'),
(72, '20 August 2019', '2015', '26', 9, 'Lokal', 10, 'R. LOBBY WING B', '', '', 1, '1'),
(73, '20 August 2019', '2015', '27', 9, 'Lokal', 10, 'R. KASUBAG UMUM', '', '', 1, '1'),
(74, '20 August 2019', '2015', '28', 9, 'Lokal', 10, 'R. KABID APK', '', '', 1, '1'),
(75, '20 August 2019', '2015', '29', 9, 'Lokal', 10, 'R. KABID APIL', '', '', 1, '1'),
(76, '20 August 2019', '2015', '30', 9, 'Lokal', 10, 'R. KABID OPS', '', '', 1, '1'),
(77, '20 August 2019', '2015', '31', 9, 'Lokal', 10, 'R. ARSIP 2', '', '', 1, '1'),
(78, '20 August 2019', '2015', '32', 9, 'Lokal', 10, 'R. ARSIP 2', '', '', 1, '1'),
(79, '20 August 2019', '2015', '33', 9, 'Lokal', 10, 'R. BAG OPS 1', '', '', 1, '1'),
(80, '20 August 2019', '2015', '34', 9, 'Lokal', 10, 'R. ARSIP 2', '', '', 1, '1'),
(81, '20 August 2019', '2015', '35', 9, 'Lokal', 10, 'R. ARSIP 2', '', '', 1, '1'),
(82, '20 August 2019', '2015', '36', 9, 'Lokal', 10, 'R. ARSIP 2', '', '', 1, '1'),
(83, '20 August 2019', '2015', '37', 9, 'Lokal', 10, 'R. ARSIP 2', '', '', 1, '1'),
(84, '20 August 2019', '2015', '38', 9, 'Lokal', 10, 'R. ARSIP 2', '', '', 1, '1'),
(85, '20 August 2019', '2015', '39', 9, 'Lokal', 10, 'R. ARSIP 2', '', '', 1, '1'),
(86, '20 August 2019', '2015', '40', 9, 'Lokal', 10, 'R. ARSIP 2', '', '', 1, '1'),
(87, '20 August 2019', '2015', '41', 9, 'Lokal', 10, 'R. KEPALA PUSAT', '', '', 1, '1'),
(88, '20 August 2019', '2015', '42', 9, 'Lokal', 10, 'R. LOBBY WING B', '', '', 1, '1'),
(89, '20 August 2019', '2015', '43', 9, 'Lokal', 10, 'R. ARSIP 2', '', '', 1, '1'),
(90, '20 August 2019', '2015', '44', 9, 'Lokal', 10, 'R. ARSIP 2', '', '', 1, '1'),
(91, '20 August 2019', '2015', '45', 9, 'Lokal', 10, 'R. ARSIP 2', '', '', 1, '1'),
(92, '20 August 2019', '2015', '46', 9, 'Lokal', 10, 'R. ARSIP 2', '', '', 1, '1'),
(93, '20 August 2019', '2015', '47', 9, 'Lokal', 10, 'R. ARSIP 2', '', '', 1, '1'),
(94, '20 August 2019', '2015', '48', 9, 'Lokal', 10, 'R. ARSIP 2', '', '', 1, '1'),
(95, '20 August 2019', '2015', '49', 9, 'Lokal', 10, 'R. ARSIP 2', '', '', 1, '1'),
(96, '20 August 2019', '2015', '50', 9, 'Lokal', 10, 'R. ARSIP 2', '', '', 1, '1'),
(97, '20 August 2019', '2017', '51', 9, 'Lokal', 10, 'R. KASUBAG UMUM', '', '', 1, '1'),
(98, '20 August 2019', '2017', '52', 9, 'Lokal', 10, 'R. PANTRY', '', '', 1, '1'),
(99, '20 August 2019', '2017', '53', 9, 'Lokal', 10, 'R. PANTRY', '', '', 1, '1'),
(100, '20 August 2019', '2017', '54', 9, 'Lokal', 10, '', '', '', 1, '1'),
(101, '20 August 2019', '2017', '55', 9, 'Lokal', 10, '', '', '', 1, '1'),
(102, '20 August 2019', '2017', '56', 9, 'Lokal', 10, '', '', '', 1, '1'),
(103, '20 August 2019', '2017', '57', 9, 'Lokal', 10, 'R. KAPUS', '', '', 1, '1'),
(104, '20 August 2019', '2017', '58', 9, 'Lokal', 10, 'R. MUSHOLAH', '', '', 1, '1'),
(105, '20 August 2019', '2017', '59', 9, 'Lokal', 10, '', '', '', 1, '1'),
(106, '20 August 2019', '2018', '60', 9, 'Lokal', 10, '', '', '', 1, '1'),
(107, '20 August 2019', '2018', '61', 9, 'Lokal', 10, '', '', '', 1, '1'),
(108, '20 August 2019', '2018', '62', 9, 'Lokal', 10, '', '', '', 1, '1'),
(109, '20 August 2019', '2018', '63', 9, 'Lokal', 10, '', '', '', 1, '1'),
(110, '20 August 2019', '2018', '64', 9, 'Lokal', 10, '', '', '', 1, '1'),
(111, '20 August 2019', '2018', '65', 9, 'Lokal', 10, '', '', '', 1, '1'),
(112, '20 August 2019', '2018', '66', 9, 'Lokal', 10, '', '', '', 1, '1'),
(113, '20 August 2019', '2018', '67', 9, 'Lokal', 10, '', '', '', 1, '1'),
(114, '20 August 2019', '2018', '68', 9, 'Lokal', 10, '', '', '', 1, '1'),
(115, '20 August 2019', '2018', '69', 9, 'Lokal', 10, '', '', '', 1, '1'),
(116, '20 August 2019', '2018', '71', 9, 'Lokal', 10, '', '', '', 1, '1'),
(117, '20 August 2019', '2018', '72', 9, 'Lokal', 10, '', '', '', 1, '1'),
(118, '20 August 2019', '2018', '73', 9, 'Lokal', 10, '', '', '', 1, '1'),
(119, '20 August 2019', '2018', '74', 9, 'Lokal', 10, '', '', '', 1, '1'),
(120, '20 August 2019', '2018', '75', 9, 'Lokal', 10, '', '', '', 1, '1'),
(121, '20 August 2019', '2018', '76', 9, 'Lokal', 10, '', '', '', 1, '1'),
(122, '20 August 2019', '2008', '1', 10, 'Daiciban DS-80 A', 11, 'R. AUDIT', '', '', 1, '1'),
(123, '20 August 2019', '2008', '2', 10, 'Daiciban DS-805 A', 11, 'R. AUDIT', '', '', 1, '1'),
(124, '20 August 2019', '2009', '3', 10, 'Ichiban ', 12, 'R. AUDIT', '', '', 1, '1'),
(125, '20 August 2019', '2008', '1', 11, 'Elite B.444C', 13, 'R. BAG OPS 1', '', '', 1, '1'),
(126, '20 August 2019', '2008', '2', 11, 'Elite B.444C', 13, 'R. AUDIT / GUDANG SAMPING ARSIP 2', '', '', 1, '1'),
(127, '20 August 2019', '2008', '3', 11, 'Elite B.444C', 13, 'GUDANG', '', '', 1, '1'),
(128, '20 August 2019', '2008', '4', 11, 'Elite B.444C', 13, 'R. BAG OPS 1', '', '', 1, '1'),
(129, '20 August 2019', '2008', '5', 11, 'Elite B.444C', 13, 'R. BAG APK 2', '', '', 1, '1'),
(130, '20 August 2019', '2008', '6', 11, 'Elite B.444C', 13, 'GUDANG', '', '', 1, '1'),
(131, '20 August 2019', '2008', '7', 11, 'Elite B.444C', 13, 'GUDANG', '', '', 1, '1'),
(132, '20 August 2019', '2008', '8', 11, 'Elite B.444C', 13, 'R. BAG OPS 1', '', '', 1, '1'),
(133, '20 August 2019', '2013', '1', 12, 'Hikvision MV-41011-IR-WP', 14, 'R. KABAG KEUANGAN & UMUM', '', '', 1, '1'),
(134, '20 August 2019', '2017', '2', 12, 'Hikvision', 14, 'R. STAF SUB BAGIAN UMUM ', '', '', 1, '1'),
(135, '20 August 2019', '2017', '3', 12, 'Hikvision', 14, '', '', '', 1, '1'),
(136, '20 August 2019', '2017', '4', 12, 'Hikvision', 14, '', '', '', 1, '1'),
(137, '20 August 2019', '2017', '5', 12, 'Hikvision', 14, '', '', '', 1, '1'),
(138, '20 August 2019', '2015', '6', 13, 'Lokal (Papan Tulis Kaca)', 10, '', '', '', 1, '1'),
(139, '20 August 2019', '2015', '7', 13, 'Lokal (Papan Tulis Kaca)', 10, 'R. RAPAT KECIL', '', '', 1, '1'),
(140, '20 August 2019', '2015', '8', 13, 'Lokal (Papan Tulis Kaca)', 10, 'R. RAPAT UTAMA', '', '', 1, '1'),
(141, '20 August 2019', '2017', '9', 13, 'Lokal (Papan Tulis Kaca)', 10, '', '', '', 1, '1'),
(142, '20 August 2019', '2008', '1', 14, 'Gemet 1000S', 15, 'R. KEPALA PUSAT', '', '', 1, '1'),
(143, '20 August 2019', '2008', '2', 14, 'Gemet 1000S', 15, 'R. KEPALA PUSAT', '', '', 1, '1'),
(144, '20 August 2019', '2009', '3', 14, 'Rider 1822S', 16, 'PUSAT P2H', '', '', 1, '1'),
(145, '20 August 2019', '2009', '4', 14, 'Rider 1822S', 16, 'PUSAT P2H', '', '', 1, '1'),
(146, '20 August 2019', '2009', '5', 14, 'Rider 1822S', 16, 'PUSAT P2H', '', '', 1, '1'),
(147, '20 August 2019', '2008', '1', 15, 'Amano EX 3500', 17, 'Gudang Sebelah Pantry R. Arsip', '', '', 1, '1'),
(148, '20 August 2019', '2013', '2', 15, 'Magic MP 5800', 18, 'R. ARSIP SURAT', '', '', 1, '1'),
(149, '20 August 2019', '2008', '1', 16, 'Panasonic UB5320', 19, 'R. IMPALA PUSAT', '', '', 1, '1'),
(150, '20 August 2019', '2008', '1', 17, 'Toshiba', 20, '', '', '', 1, '1'),
(151, '20 August 2019', '2008', '2', 17, 'Toshiba', 20, '', '', '', 1, '1'),
(152, '20 August 2019', '2012', '3', 17, 'Sony VPL-MX20', 21, '', '', '', 1, '1'),
(153, '20 August 2019', '2016', '4', 17, 'Infocus', 22, '', '', '', 1, '1'),
(154, '20 August 2019', '2016', '5', 17, 'Infocus', 22, '', '', '', 1, '1'),
(155, '20 August 2019', '2017', '6', 17, 'Infocus', 22, '', '', '', 1, '1'),
(156, '20 August 2019', '2017', '7', 17, 'Infocus', 22, '', '', '', 1, '1'),
(157, '20 August 2019', '2017', '8', 17, 'Infocus', 22, '', '', '', 1, '1'),
(158, '20 August 2019', '2017', '9', 17, 'Infocus', 22, '', '', '', 1, '1'),
(159, '20 August 2019', '2017', '10', 17, 'Epson', 23, '', '', '', 1, '1'),
(160, '20 August 2019', '2009', '1', 18, 'Sony ICD-UX80/B', 21, '', '', '', 1, '1'),
(161, '20 August 2019', '2009', '2', 18, 'Sony ICD-UX80/B', 21, '', '', '', 1, '1'),
(162, '20 August 2019', '2012', '3', 18, 'Sony ICD-PX312M', 21, '', '', '', 1, '1'),
(163, '20 August 2019', '2017', '1', 19, 'Screen Motorized 70', 24, '', '', '', 1, '1'),
(164, '20 August 2019', '2013', '31', 20, 'Lokal', 10, '', '', '', 1, '1'),
(165, '20 August 2019', '2013', '32', 20, 'Lokal', 10, '', '', '', 1, '1'),
(166, '20 August 2019', '2015', '33', 20, 'Lokal', 10, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(167, '20 August 2019', '2015', '34', 20, 'Lokal', 10, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(168, '20 August 2019', '2015', '35', 20, 'Lokal', 10, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(169, '20 August 2019', '2015', '36', 20, 'Lokal', 10, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(170, '20 August 2019', '2015', '37', 20, 'Lokal', 10, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(171, '20 August 2019', '2015', '38', 20, 'Lokal', 10, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(172, '20 August 2019', '2015', '39', 20, 'Lokal', 10, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(173, '20 August 2019', '2015', '40', 20, 'Lokal', 10, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(174, '20 August 2019', '2015', '41', 20, 'Lokal', 10, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(175, '20 August 2019', '2015', '42', 20, 'Lokal', 10, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(176, '20 August 2019', '2015', '43', 20, 'Lokal', 10, 'R. STAF BIDANG APK', '', '', 1, '1'),
(177, '20 August 2019', '2015', '44', 20, 'Lokal', 10, 'R. STAF BIDANG APK', '', '', 1, '1'),
(178, '20 August 2019', '2015', '45', 20, 'Lokal', 10, 'R. STAF BIDANG APK', '', '', 1, '1'),
(179, '20 August 2019', '2015', '46', 20, 'Lokal', 10, 'R. STAF BIDANG APK', '', '', 1, '1'),
(180, '20 August 2019', '2015', '47', 20, 'Lokal', 10, 'R. STAF BIDANG APK', '', '', 1, '1'),
(181, '20 August 2019', '2015', '48', 20, 'Lokal', 10, 'R. STAF BIDANG APK', '', '', 1, '1'),
(182, '20 August 2019', '2015', '49', 20, 'Lokal', 10, 'R. STAF BIDANG APK', '', '', 1, '1'),
(183, '20 August 2019', '2015', '50', 20, 'Lokal', 10, 'R. STAF BIDANG APK', '', '', 1, '1'),
(184, '20 August 2019', '2015', '51', 20, 'Lokal', 10, 'R. STAF BIDANG APK', '', '', 1, '1'),
(185, '20 August 2019', '2015', '52', 20, 'Lokal', 10, 'R. STAF BIDANG APK', '', '', 1, '1'),
(186, '20 August 2019', '2015', '53', 20, 'Lokal', 10, 'R. STAF BIDANG APK', '', '', 1, '1'),
(187, '20 August 2019', '2015', '54', 20, 'Lokal', 10, 'R. STAF BIDANG APK', '', '', 1, '1'),
(188, '20 August 2019', '2015', '55', 20, 'Lokal', 10, 'R. STAF BIDANG APK', '', '', 1, '1'),
(189, '20 August 2019', '2015', '56', 20, 'Lokal', 10, 'R. STAF BIDANG APK', '', '', 1, '1'),
(190, '20 August 2019', '2015', '57', 20, 'Lokal', 10, 'R. STAF BIDANG APK', '', '', 1, '1'),
(191, '20 August 2019', '2015', '58', 20, 'Lokal', 10, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(192, '20 August 2019', '2015', '59', 20, 'Lokal', 10, 'R. KAPUS', '', '', 1, '1'),
(193, '20 August 2019', '2015', '60', 20, 'Lokal', 10, 'R. STAF BIDANG APK', '', '', 1, '1'),
(194, '20 August 2019', '2015', '61', 20, 'Lokal', 10, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(195, '20 August 2019', '2015', '62', 20, 'Lokal', 10, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(196, '20 August 2019', '2015', '63', 20, 'Lokal', 10, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(197, '20 August 2019', '2015', '64', 20, 'Lokal', 10, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(198, '20 August 2019', '2015', '65', 20, 'Lokal', 10, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(199, '20 August 2019', '2015', '66', 20, 'Lokal', 10, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(200, '20 August 2019', '2015', '67', 20, 'Lokal', 10, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(201, '20 August 2019', '2015', '68', 20, 'Lokal', 10, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(202, '20 August 2019', '2015', '69', 20, 'Lokal', 10, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(203, '20 August 2019', '2015', '70', 20, 'Lokal', 10, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(204, '20 August 2019', '2015', '71', 20, 'Lokal', 10, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(205, '20 August 2019', '2015', '72', 20, 'Lokal', 10, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(206, '20 August 2019', '2015', '73', 20, 'Lokal', 10, 'R. KAPUS', '', '', 1, '1'),
(207, '20 August 2019', '2015', '74', 20, 'Lokal', 10, 'R. KAPUS', '', '', 1, '1'),
(208, '20 August 2019', '2015', '75', 20, 'Lokal', 10, 'R. KASUBBAG UMUM', '', '', 1, '1'),
(209, '20 August 2019', '2015', '76', 20, 'Lokal', 10, 'R. ICASUBBAG PERENCANAAN & KEUANGAN', '', '', 1, '1'),
(210, '20 August 2019', '2015', '77', 20, 'Lokal', 10, 'R. KASUBBID ANALISIS BAGI BASIL & SYARIAH', '', '', 1, '1'),
(211, '20 August 2019', '2015', '78', 20, 'Lokal', 10, 'R. KASUBBID ANALISIS PINJAMAN', '', '', 1, '1'),
(212, '20 August 2019', '2015', '79', 20, 'Lokal', 10, 'R. KASUBBID ANALSIS FINANSIAL', '', '', 1, '1'),
(213, '20 August 2019', '2015', '80', 20, 'Lokal', 10, 'R. KASUBBID ANALISIS TEKNIS', '', '', 1, '1'),
(214, '20 August 2019', '2015', '81', 20, 'Lokal', 10, 'R. KASUBBID MONEV', '', '', 1, '1'),
(215, '20 August 2019', '2015', '82', 20, 'Lokal', 10, 'R. KASUBBID HUKUM & PERIKATAN', '', '', 1, '1'),
(216, '20 August 2019', '2015', '83', 20, 'Lokal', 10, 'R. KABAG KEUM', '', '', 1, '1'),
(217, '20 August 2019', '2015', '84', 20, 'Lokal', 10, 'R. KABID APK', '', '', 1, '1'),
(218, '20 August 2019', '2015', '85', 20, 'Lokal', 10, 'R. KABID APIL', '', '', 1, '1'),
(219, '20 August 2019', '2015', '86', 20, 'Lokal', 10, 'R. KABID OPS', '', '', 1, '1'),
(220, '20 August 2019', '2015', '87', 20, 'Lokal', 10, 'R. FINANCIAL (BENDAHARA)', '', '', 1, '1'),
(221, '20 August 2019', '2015', '88', 20, 'Lokal', 10, 'R. FINANCIAL (BENDAHARA)', '', '', 1, '1'),
(222, '20 August 2019', '2015', '89', 20, 'Lokal', 10, 'R. FINANCIAL (BENDAHARA)', '', '', 1, '1'),
(223, '20 August 2019', '2015', '90', 20, 'Lokal', 10, 'R. IT', '', '', 1, '1'),
(224, '20 August 2019', '2015', '91', 20, 'Lokal', 10, 'R. IT', '', '', 1, '1'),
(225, '20 August 2019', '2015', '92', 20, 'Lokal', 10, 'R. IT', '', '', 1, '1'),
(226, '20 August 2019', '2015', '93', 20, 'Lokal', 10, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(227, '20 August 2019', '2015', '94', 20, 'Lokal', 10, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(228, '20 August 2019', '2015', '95', 20, 'Lokal', 10, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(229, '20 August 2019', '2015', '96', 20, 'Lokal', 10, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(230, '20 August 2019', '2015', '97', 20, 'Lokal', 10, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(231, '20 August 2019', '2015', '98', 20, 'Lokal', 10, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(232, '20 August 2019', '2015', '99', 20, 'Lokal', 10, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(233, '20 August 2019', '2015', '100', 20, 'Lokal', 10, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(234, '20 August 2019', '2015', '101', 20, 'Lokal', 10, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(235, '20 August 2019', '2015', '102', 20, 'Lokal', 10, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(236, '20 August 2019', '2015', '103', 20, 'Lokal', 10, 'R. SEKRETARIS KEPALA PUSAT', '', '', 1, '1'),
(237, '20 August 2019', '2015', '104', 20, 'Lokal', 10, 'R. SEKRETARIS KEPALA PUSAT', '', '', 1, '1'),
(238, '20 August 2019', '2015', '105', 20, 'Lokal', 10, 'R. ARSIP SURAT', '', '', 1, '1'),
(239, '20 August 2019', '2016', '106', 20, 'Lokal', 10, 'R. IT', '', '', 1, '1'),
(240, '20 August 2019', '2016', '107', 20, 'Lokal', 10, 'R. IT', '', '', 1, '1'),
(241, '20 August 2019', '2016', '108', 20, 'Lokal', 10, 'R. IT', '', '', 1, '1'),
(242, '20 August 2019', '2016', '109', 20, 'Lokal', 10, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(243, '20 August 2019', '2016', '110', 20, 'Lokal', 10, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(244, '20 August 2019', '2017', '111', 20, 'Lokal', 10, '', '', '', 1, '1'),
(245, '20 August 2019', '2017', '112', 20, 'Lokal', 10, '', '', '', 1, '1'),
(246, '20 August 2019', '2017', '113', 20, 'Lokal', 10, '', '', '', 1, '1'),
(247, '20 August 2019', '2017', '114', 20, 'Lokal', 10, '', '', '', 1, '1'),
(248, '20 August 2019', '2017', '115', 20, 'Lokal', 10, '', '', '', 1, '1'),
(249, '20 August 2019', '2017', '116', 20, 'Lokal', 10, '', '', '', 1, '1'),
(250, '20 August 2019', '2017', '117', 20, 'Lokal', 10, '', '', '', 1, '1'),
(251, '20 August 2019', '2017', '118', 20, 'Lokal', 10, '', '', '', 1, '1'),
(252, '20 August 2019', '2017', '119', 20, 'Lokal', 10, '', '', '', 1, '1'),
(253, '20 August 2019', '2017', '121', 20, 'Lokal', 10, '', '', '', 1, '1'),
(254, '20 August 2019', '2017', '122', 20, 'Lokal', 10, '', '', '', 1, '1'),
(255, '20 August 2019', '2017', '123', 20, 'Lokal', 10, '', '', '', 1, '1'),
(256, '20 August 2019', '2017', '124', 20, 'Lokal', 10, '', '', '', 1, '1'),
(257, '20 August 2019', '2017', '125', 20, 'Lokal', 10, '', '', '', 1, '1'),
(258, '20 August 2019', '2017', '126', 20, 'Lokal', 10, '', '', '', 1, '1'),
(259, '20 August 2019', '2017', '127', 20, 'Lokal', 10, '', '', '', 1, '1'),
(260, '20 August 2019', '2017', '128', 20, 'Lokal', 10, '', '', '', 1, '1'),
(261, '20 August 2019', '2017', '129', 20, 'Lokal', 10, '', '', '', 1, '1'),
(262, '20 August 2019', '2017', '130', 20, 'Lokal', 10, '', '', '', 1, '1'),
(263, '20 August 2019', '2017', '131', 20, 'Lokal', 10, '', '', '', 1, '1'),
(264, '20 August 2019', '2017', '132', 20, 'Lokal', 10, '', '', '', 1, '1'),
(265, '20 August 2019', '2017', '133', 20, 'Lokal', 10, '', '', '', 1, '1'),
(266, '20 August 2019', '2017', '134', 20, 'Lokal', 10, '', '', '', 1, '1'),
(267, '20 August 2019', '2017', '135', 20, 'Lokal', 10, '', '', '', 1, '1'),
(268, '20 August 2019', '2017', '136', 20, 'Lokal', 10, '', '', '', 1, '1'),
(269, '20 August 2019', '2017', '137', 20, 'Lokal', 10, '', '', '', 1, '1'),
(270, '20 August 2019', '2017', '138', 20, 'Lokal', 10, '', '', '', 1, '1'),
(271, '20 August 2019', '2017', '139', 20, 'Lokal', 10, '', '', '', 1, '1'),
(272, '20 August 2019', '2017', '140', 20, 'Lokal', 10, '', '', '', 1, '1'),
(273, '20 August 2019', '2017', '141', 20, 'Lokal', 10, '', '', '', 1, '1'),
(274, '20 August 2019', '2017', '142', 20, 'Lokal', 10, '', '', '', 1, '1'),
(275, '20 August 2019', '2017', '144', 20, 'Lokal', 10, '', '', '', 1, '1'),
(276, '20 August 2019', '2018', '145', 20, 'Lokal', 10, '', '', '', 1, '1'),
(277, '20 August 2019', '2018', '146', 20, 'Lokal', 10, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(278, '20 August 2019', '2018', '147', 20, 'Lokal', 10, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(279, '20 August 2019', '2018', '148', 20, 'Lokal', 10, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(280, '20 August 2019', '2018', '149', 20, 'Lokal', 10, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(281, '20 August 2019', '2018', '150', 20, 'Lokal', 10, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(282, '20 August 2019', '2018', '151', 20, 'Lokal', 10, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(283, '20 August 2019', '2018', '152', 20, 'Lokal', 10, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(284, '20 August 2019', '2018', '153', 20, 'Lokal', 10, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(285, '20 August 2019', '2018', '154', 20, 'Lokal', 10, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(286, '20 August 2019', '2018', '155', 20, 'Lokal', 10, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(287, '20 August 2019', '2018', '156', 20, 'Lokal', 10, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(288, '20 August 2019', '2008', '41', 21, 'Chairman VC.755', 25, 'R. KEPALA PUSAT', '', '', 1, '1'),
(289, '20 August 2019', '2008', '42', 21, 'Chairman VC.755', 25, 'R. KEPALA PUSAT', '', '', 1, '1'),
(290, '20 August 2019', '2008', '43', 21, 'Chairman DC.703', 25, 'R. KEPALA PUSAT', '', '', 1, '1'),
(291, '20 August 2019', '2008', '44', 21, 'Chairman DC.703', 25, 'R. KEPALA PUSAT', '', '', 1, '1'),
(292, '20 August 2019', '2008', '45', 21, 'Chairman DC.703', 25, 'R. IMPALA PUSAT', '', '', 1, '1'),
(293, '20 August 2019', '2008', '46', 21, 'Chairman DC.703', 25, 'R. IMPALA PUSAT', '', '', 1, '1'),
(294, '20 August 2019', '2008', '47', 21, 'Chairman DC.703', 25, 'R. KEPALA PUSAT', '', '', 1, '1'),
(295, '20 August 2019', '2008', '48', 21, 'Chairman DC.703', 25, 'R. IMPALA PUSAT', '', '', 1, '1'),
(296, '20 August 2019', '2013', '59', 21, 'Chairman', 25, '', '', '', 1, '1'),
(297, '20 August 2019', '2013', '60', 21, 'Chairman', 25, '', '', '', 1, '1'),
(298, '20 August 2019', '2013', '61', 21, 'Chairman', 25, '', '', '', 1, '1'),
(299, '20 August 2019', '2013', '62', 21, 'Chairman', 25, '', '', '', 1, '1'),
(300, '20 August 2019', '2013', '63', 21, 'Chairman', 25, '', '', '', 1, '1'),
(301, '20 August 2019', '2013', '64', 21, 'Chairman', 25, '', '', '', 1, '1'),
(302, '20 August 2019', '2013', '65', 21, 'Chairman', 25, '', '', '', 1, '1'),
(303, '20 August 2019', '2013', '66', 21, 'Chairman', 25, '', '', '', 1, '1'),
(304, '20 August 2019', '2013', '67', 21, 'Chairman', 25, '', '', '', 1, '1'),
(305, '20 August 2019', '2013', '68', 21, 'Chairman', 25, '', '', '', 1, '1'),
(306, '20 August 2019', '2015', '69', 21, 'Subaru', 26, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(307, '20 August 2019', '2015', '70', 21, 'Subaru', 26, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(308, '20 August 2019', '2015', '71', 21, 'Subaru', 26, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(309, '20 August 2019', '2015', '72', 21, 'Subaru', 26, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(310, '20 August 2019', '2015', '73', 21, 'Subaru', 26, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(311, '20 August 2019', '2015', '74', 21, 'Subaru', 26, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(312, '20 August 2019', '2015', '75', 21, 'Subaru', 26, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(313, '20 August 2019', '2015', '76', 21, 'Subaru', 26, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(314, '20 August 2019', '2015', '77', 21, 'Subaru', 26, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(315, '20 August 2019', '2015', '78', 21, 'Subaru', 26, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(316, '20 August 2019', '2015', '79', 21, 'Subaru', 26, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(317, '20 August 2019', '2015', '80', 21, 'Subaru', 26, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(318, '20 August 2019', '2015', '81', 21, 'Subaru', 26, 'R. STAF BIDANG APK', '', '', 1, '1'),
(319, '20 August 2019', '2015', '82', 21, 'Subaru', 26, 'R. STAF BIDANG APK', '', '', 1, '1'),
(320, '20 August 2019', '2015', '83', 21, 'Subaru', 26, 'R. STAF BIDANG APK', '', '', 1, '1'),
(321, '20 August 2019', '2015', '84', 21, 'Subaru', 26, 'R. STAF BIDANG APK', '', '', 1, '1'),
(322, '20 August 2019', '2015', '85', 21, 'Subaru', 26, 'R. STAF BIDANG APK', '', '', 1, '1'),
(323, '20 August 2019', '2015', '86', 21, 'Subaru', 26, 'R. STAF BIDANG APK', '', '', 1, '1'),
(324, '20 August 2019', '2015', '87', 21, 'Subaru', 26, 'R. STAF BIDANG APK', '', '', 1, '1'),
(325, '20 August 2019', '2015', '88', 21, 'Subaru', 26, 'R. STAF BIDANG APK', '', '', 1, '1'),
(326, '20 August 2019', '2015', '89', 21, 'Subaru', 26, 'R. STAF BIDANG APK', '', '', 1, '1'),
(327, '20 August 2019', '2015', '90', 21, 'Subaru', 26, 'R. STAF BIDANG APK', '', '', 1, '1'),
(328, '20 August 2019', '2015', '91', 21, 'Subaru', 26, 'R. STAF BIDANG APK', '', '', 1, '1'),
(329, '20 August 2019', '2015', '92', 21, 'Subaru', 26, 'R. STAF BIDANG APK', '', '', 1, '1'),
(330, '20 August 2019', '2015', '93', 21, 'Subaru', 26, 'R. STAF BIDANG APK', '', '', 1, '1'),
(331, '20 August 2019', '2015', '94', 21, 'Subaru', 26, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(332, '20 August 2019', '2015', '95', 21, 'Subaru', 26, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(333, '20 August 2019', '2015', '96', 21, 'Subaru', 26, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(334, '20 August 2019', '2015', '97', 21, 'Subaru', 26, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(335, '20 August 2019', '2015', '98', 21, 'Subaru', 26, 'R. STAF BIDANG ANL', '', '', 1, '1'),
(336, '20 August 2019', '2015', '99', 21, 'Subaru', 26, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(337, '20 August 2019', '2015', '100', 21, 'Subaru', 26, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(338, '20 August 2019', '2015', '101', 21, 'Subaru', 26, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(339, '20 August 2019', '2015', '102', 21, 'Subaru', 26, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(340, '20 August 2019', '2015', '103', 21, 'Subaru', 26, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(341, '20 August 2019', '2015', '104', 21, 'Subaru', 26, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(342, '20 August 2019', '2015', '105', 21, 'Subaru', 26, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(343, '20 August 2019', '2015', '106', 21, 'Subaru', 26, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(344, '20 August 2019', '2015', '107', 21, 'Subaru', 26, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(345, '20 August 2019', '2015', '108', 21, 'Subaru', 26, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(346, '20 August 2019', '2015', '109', 21, 'Subaru', 26, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(347, '20 August 2019', '2015', '110', 21, 'Subaru', 26, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(348, '20 August 2019', '2015', '111', 21, 'Subaru', 26, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(349, '20 August 2019', '2015', '112', 21, 'Subaru', 26, 'R. IT', '', '', 1, '1'),
(350, '20 August 2019', '2015', '113', 21, 'Subaru', 26, 'R. IT', '', '', 1, '1'),
(351, '20 August 2019', '2015', '114', 21, 'Subaru', 26, 'R. IT', '', '', 1, '1'),
(352, '20 August 2019', '2015', '115', 21, 'Subaru', 26, 'R. ARSIP SURAT', '', '', 1, '1'),
(353, '20 August 2019', '2015', '116', 21, 'Subaru', 26, 'R. ARSIP SURAT', '', '', 1, '1'),
(354, '20 August 2019', '2015', '117', 21, 'Subaru', 26, 'R. KAPUS', '', '', 1, '1'),
(355, '20 August 2019', '2015', '118', 21, 'Subaru', 26, 'R. KAPUS', '', '', 1, '1'),
(356, '20 August 2019', '2015', '119', 21, 'Subaru', 26, 'R. KAPUS', '', '', 1, '1'),
(357, '20 August 2019', '2015', '120', 21, 'Subaru', 26, '', '', '', 1, '1'),
(358, '20 August 2019', '2015', '121', 21, 'Subaru', 26, '', '', '', 1, '1'),
(359, '20 August 2019', '2015', '122', 21, 'Subaru', 26, '', '', '', 1, '1'),
(360, '20 August 2019', '2015', '123', 21, 'Subaru', 26, '', '', '', 1, '1'),
(361, '20 August 2019', '2015', '124', 21, 'Subaru', 26, '', '', '', 1, '1'),
(362, '20 August 2019', '2015', '125', 21, 'Subaru', 26, '', '', '', 1, '1'),
(363, '20 August 2019', '2015', '126', 21, 'Subaru', 26, 'R. KAPUS', '', '', 1, '1'),
(364, '20 August 2019', '2015', '127', 21, 'Subaru', 26, 'R. KAPUS', '', '', 1, '1'),
(365, '20 August 2019', '2015', '128', 21, 'Subaru', 26, 'R. SEKRETARIS KEPALA PUSAT', '', '', 1, '1'),
(366, '20 August 2019', '2015', '129', 21, 'Subaru', 26, 'R. SEKRETARIS IMPALA PUSAT', '', '', 1, '1'),
(367, '20 August 2019', '2015', '130', 21, 'Subaru', 26, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(368, '20 August 2019', '2015', '131', 21, 'Subaru', 26, 'R. KASUBBAG UMUM', '', '', 1, '1'),
(369, '20 August 2019', '2015', '132', 21, 'Subaru', 26, 'R. KASUBBAG PERENCANAAN & KEUANGAN', '', '', 1, '1'),
(370, '20 August 2019', '2015', '133', 21, 'Subaru', 26, 'R. KASUBBID ANALISIS BAGI HASIL & SYARIAH', '', '', 1, '1'),
(371, '20 August 2019', '2015', '134', 21, 'Subaru', 26, 'R. KASUBBID ANALISIS PINJAMAN', '', '', 1, '1'),
(372, '20 August 2019', '2015', '135', 21, 'Subaru', 26, 'R. KASUBBID ANALISIS TEICNIS', '', '', 1, '1'),
(373, '20 August 2019', '2015', '136', 21, 'Subaru', 26, 'R. KASUBBID ANALSIS FINANSIAL', '', '', 1, '1'),
(374, '20 August 2019', '2015', '137', 21, 'Subaru', 26, 'R. KASUBBID MONEV', '', '', 1, '1'),
(375, '20 August 2019', '2015', '138', 21, 'Subaru', 26, 'R. KASUBBID HUKUM & PERIKATAN', '', '', 1, '1'),
(376, '20 August 2019', '2015', '139', 21, 'Subaru', 26, 'R. KASUBBAG UMUM', '', '', 1, '1'),
(377, '20 August 2019', '2015', '140', 21, 'Subaru', 26, 'R. KASUBBAG PERENCANAAN & KEUANGAN', '', '', 1, '1'),
(378, '20 August 2019', '2015', '141', 21, 'Subaru', 26, 'R. KASUBBID ANALISIS BAGI HASIL & SYARIAH', '', '', 1, '1'),
(379, '20 August 2019', '2015', '142', 21, 'Subaru', 26, 'R. KASUBBID ANALISIS PINJAMAN', '', '', 1, '1'),
(380, '20 August 2019', '2015', '143', 21, 'Subaru', 26, 'R. KASUBBID ANALISIS TEKNIS', '', '', 1, '1'),
(381, '20 August 2019', '2015', '144', 21, 'Subaru', 26, 'R. KASUBBID ANALSIS FINANS1AL', '', '', 1, '1'),
(382, '20 August 2019', '2015', '145', 21, 'Subaru', 26, 'R. KASUBBID MONEV', '', '', 1, '1'),
(383, '20 August 2019', '2015', '146', 21, 'Subaru', 26, 'R. KASUBBID HUKUM & PERIKATAN', '', '', 1, '1'),
(384, '20 August 2019', '2015', '147', 21, 'Subaru', 26, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(385, '20 August 2019', '2015', '148', 21, 'Subaru', 26, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(386, '20 August 2019', '2015', '149', 21, 'Subaru', 26, 'R. KAPUS', '', '', 1, '1'),
(387, '20 August 2019', '2015', '150', 21, 'Subaru', 26, 'R. KAPUS', '', '', 1, '1'),
(388, '20 August 2019', '2015', '151', 21, 'Subaru', 26, 'R. KEPALA PUSAT', '', '', 1, '1'),
(389, '20 August 2019', '2015', '152', 21, 'Subaru', 26, 'R. KEPALA PUSAT', '', '', 1, '1'),
(390, '20 August 2019', '2015', '153', 21, 'Subaru', 26, 'R. KEPALA PUSAT', '', '', 1, '1'),
(391, '20 August 2019', '2015', '154', 21, 'Subaru', 26, 'R. KEPALA PUSAT', '', '', 1, '1'),
(392, '20 August 2019', '2015', '155', 21, 'Subaru', 26, 'R. SEICRETARIS KEPALA PUSAT', '', '', 1, '1'),
(393, '20 August 2019', '2015', '156', 21, 'Subaru', 26, 'R. SEKRETARIS KEPALA PUSAT', '', '', 1, '1'),
(394, '20 August 2019', '2015', '157', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(395, '20 August 2019', '2015', '158', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(396, '20 August 2019', '2015', '159', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(397, '20 August 2019', '2015', '160', 21, 'Subaru', 26, 'R. KAPUS', '', '', 1, '1'),
(398, '20 August 2019', '2015', '161', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(399, '20 August 2019', '2015', '162', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(400, '20 August 2019', '2015', '163', 21, 'Subaru', 26, 'R. KAPUS', '', '', 1, '1'),
(401, '20 August 2019', '2015', '164', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(402, '20 August 2019', '2015', '165', 21, 'Subaru', 26, 'R. KAPUS', '', '', 1, '1'),
(403, '20 August 2019', '2015', '166', 21, 'Subaru', 26, 'R. KAPUS', '', '', 1, '1'),
(404, '20 August 2019', '2015', '167', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(405, '20 August 2019', '2015', '168', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(406, '20 August 2019', '2015', '169', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(407, '20 August 2019', '2015', '170', 21, 'Subaru', 26, 'R. KAPUS', '', '', 1, '1'),
(408, '20 August 2019', '2015', '171', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(409, '20 August 2019', '2015', '172', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(410, '20 August 2019', '2015', '173', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(411, '20 August 2019', '2015', '174', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(412, '20 August 2019', '2015', '175', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(413, '20 August 2019', '2015', '176', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(414, '20 August 2019', '2015', '177', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(415, '20 August 2019', '2015', '178', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(416, '20 August 2019', '2015', '179', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(417, '20 August 2019', '2015', '180', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(418, '20 August 2019', '2015', '181', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(419, '20 August 2019', '2015', '182', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(420, '20 August 2019', '2015', '183', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(421, '20 August 2019', '2015', '184', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(422, '20 August 2019', '2015', '185', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(423, '20 August 2019', '2015', '186', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(424, '20 August 2019', '2015', '187', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(425, '20 August 2019', '2015', '188', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(426, '20 August 2019', '2015', '189', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(427, '20 August 2019', '2015', '190', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(428, '20 August 2019', '2015', '191', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(429, '20 August 2019', '2015', '192', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(430, '20 August 2019', '2015', '193', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(431, '20 August 2019', '2015', '194', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(432, '20 August 2019', '2015', '195', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(433, '20 August 2019', '2015', '196', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(434, '20 August 2019', '2015', '197', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(435, '20 August 2019', '2015', '198', 21, 'Subaru', 26, 'R. RAPAT UTAMA', '', '', 1, '1'),
(436, '20 August 2019', '2015', '199', 21, 'Subaru', 26, 'R. RAPAT KECIL', '', '', 1, '1'),
(437, '20 August 2019', '2015', '200', 21, 'Subaru', 26, 'R. RAPAT KECIL', '', '', 1, '1'),
(438, '20 August 2019', '2015', '201', 21, 'Subaru', 26, 'R. RAPAT KECIL', '', '', 1, '1'),
(439, '20 August 2019', '2015', '202', 21, 'Subaru', 26, 'R. RAPAT KECIL', '', '', 1, '1'),
(440, '20 August 2019', '2015', '203', 21, 'Subaru', 26, 'R. RAPAT KECIL', '', '', 1, '1'),
(441, '20 August 2019', '2015', '204', 21, 'Subaru', 26, 'R. RAPAT KECIL', '', '', 1, '1'),
(442, '20 August 2019', '2015', '205', 21, 'Subaru', 26, 'R. RAPAT KECIL', '', '', 1, '1'),
(443, '20 August 2019', '2015', '206', 21, 'Subaru', 26, 'R. RAPAT KECIL', '', '', 1, '1'),
(444, '20 August 2019', '2015', '207', 21, 'Subaru', 26, 'R. RAPAT KECIL', '', '', 1, '1'),
(445, '20 August 2019', '2015', '208', 21, 'Subaru', 26, 'R. RAPAT KECIL', '', '', 1, '1'),
(446, '20 August 2019', '2015', '209', 21, 'Subaru', 26, 'R. RAPAT KECIL', '', '', 1, '1'),
(447, '20 August 2019', '2015', '210', 21, 'Subaru', 26, 'R. RAPAT KECIL', '', '', 1, '1'),
(448, '20 August 2019', '2015', '211', 21, 'Subaru', 26, 'R. RAPAT KECIL', '', '', 1, '1'),
(449, '20 August 2019', '2015', '212', 21, 'Subaru', 26, 'R. RAPAT KECIL', '', '', 1, '1'),
(450, '20 August 2019', '2015', '213', 21, 'Subaru', 26, 'R. IT', '', '', 1, '1'),
(451, '20 August 2019', '2015', '214', 21, 'Subaru', 26, 'R. IT', '', '', 1, '1'),
(452, '20 August 2019', '2015', '215', 21, 'Subaru', 26, 'R. IT', '', '', 1, '1'),
(453, '20 August 2019', '2015', '216', 21, 'Subaru', 26, 'R. FINANCIAL (BENDAHARA)', '', '', 1, '1'),
(454, '20 August 2019', '2015', '217', 21, 'Subaru', 26, 'R. FINANCIAL (BENDAHARA)', '', '', 1, '1'),
(455, '20 August 2019', '2015', '218', 21, 'Subaru', 26, 'R. FINANCIAL (BENDAHARA)', '', '', 1, '1'),
(456, '20 August 2019', '2015', '219', 21, 'Subaru', 26, 'R. RESEPTIONIS', '', '', 1, '1'),
(457, '20 August 2019', '2015', '220', 21, 'Victory', 27, 'R. KABAG KEUM', '', '', 1, '1'),
(458, '20 August 2019', '2015', '221', 21, 'Victory', 27, 'R. KABID APK', '', '', 1, '1'),
(459, '20 August 2019', '2015', '222', 21, 'Victory', 27, 'R. KABID APIL', '', '', 1, '1'),
(460, '20 August 2019', '2015', '223', 21, 'Victory', 27, 'R. KABID OPS', '', '', 1, '1'),
(461, '20 August 2019', '2015', '224', 21, 'Victory', 27, 'R. KABAG KEUM', '', '', 1, '1'),
(462, '20 August 2019', '2015', '225', 21, 'Victory', 27, 'R. KABAG KEUM', '', '', 1, '1'),
(463, '20 August 2019', '2015', '226', 21, 'Victory', 27, 'R. KABID APK', '', '', 1, '1'),
(464, '20 August 2019', '2015', '227', 21, 'Victory', 27, 'R. KABID APK', '', '', 1, '1'),
(465, '20 August 2019', '2015', '228', 21, 'Victory', 27, 'R. KABID APIL', '', '', 1, '1'),
(466, '20 August 2019', '2015', '229', 21, 'Victory', 27, 'R. KABID APIL', '', '', 1, '1'),
(467, '20 August 2019', '2015', '230', 21, 'Victory', 27, 'R. KABID OPS', '', '', 1, '1'),
(468, '20 August 2019', '2015', '231', 21, 'Victory', 27, 'R. KABID OPS', '', '', 1, '1'),
(469, '20 August 2019', '2015', '232', 21, 'Victory', 27, 'R. 10EPALA PUSAT', '', '', 1, '1'),
(470, '20 August 2019', '2015', '233', 21, 'Victory', 27, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(471, '20 August 2019', '2017', '234', 21, 'Lokal', 10, '', '', '', 1, '1'),
(472, '20 August 2019', '2017', '235', 21, 'Lokal', 10, '', '', '', 1, '1'),
(473, '20 August 2019', '2017', '236', 21, 'Lokal', 10, '', '', '', 1, '1'),
(474, '20 August 2019', '2017', '237', 21, 'Lokal', 10, '', '', '', 1, '1'),
(475, '20 August 2019', '2017', '238', 21, 'Lokal', 10, '', '', '', 1, '1'),
(476, '20 August 2019', '2017', '239', 21, 'Lokal', 10, '', '', '', 1, '1'),
(477, '20 August 2019', '2017', '240', 21, 'Lokal', 10, '', '', '', 1, '1'),
(478, '20 August 2019', '2017', '241', 21, 'Lokal', 10, '', '', '', 1, '1'),
(479, '20 August 2019', '2017', '242', 21, 'Lokal', 10, '', '', '', 1, '1'),
(480, '20 August 2019', '2017', '243', 21, 'Lokal', 10, '', '', '', 1, '1'),
(481, '20 August 2019', '2017', '244', 21, 'Lokal', 10, '', '', '', 1, '1'),
(482, '20 August 2019', '2017', '245', 21, 'Lokal', 10, '', '', '', 1, '1'),
(483, '20 August 2019', '2017', '246', 21, 'Lokal', 10, '', '', '', 1, '1'),
(484, '20 August 2019', '2017', '247', 21, 'Lokal', 10, '', '', '', 1, '1'),
(485, '20 August 2019', '2017', '248', 21, 'Lokal', 10, '', '', '', 1, '1'),
(486, '20 August 2019', '2017', '249', 21, 'Lokal', 10, '', '', '', 1, '1'),
(487, '20 August 2019', '2017', '250', 21, 'Lokal', 10, '', '', '', 1, '1'),
(488, '20 August 2019', '2017', '251', 21, 'Lokal', 10, '', '', '', 1, '1'),
(489, '20 August 2019', '2017', '252', 21, 'Lokal', 10, '', '', '', 1, '1'),
(490, '20 August 2019', '2017', '253', 21, 'Lokal', 10, '', '', '', 1, '1'),
(491, '20 August 2019', '2017', '254', 21, 'Lokal', 10, '', '', '', 1, '1'),
(492, '20 August 2019', '2017', '255', 21, 'Lokal', 10, '', '', '', 1, '1'),
(493, '20 August 2019', '2017', '256', 21, 'Lokal', 10, '', '', '', 1, '1'),
(494, '20 August 2019', '2017', '257', 21, 'Lokal', 10, '', '', '', 1, '1'),
(495, '20 August 2019', '2017', '258', 21, 'Lokal', 10, '', '', '', 1, '1'),
(496, '20 August 2019', '2017', '259', 21, 'Lokal', 10, '', '', '', 1, '1'),
(497, '20 August 2019', '2017', '260', 21, 'Lokal', 10, '', '', '', 1, '1'),
(498, '20 August 2019', '2017', '261', 21, 'Lokal', 10, '', '', '', 1, '1'),
(499, '20 August 2019', '2017', '262', 21, 'Lokal', 10, '', '', '', 1, '1'),
(500, '20 August 2019', '2017', '263', 21, 'Lokal', 10, '', '', '', 1, '1'),
(501, '20 August 2019', '2017', '264', 21, 'Lokal', 10, '', '', '', 1, '1'),
(502, '20 August 2019', '2017', '265', 21, 'Lokal', 10, '', '', '', 1, '1'),
(503, '20 August 2019', '2017', '266', 21, 'Lokal', 10, '', '', '', 1, '1'),
(504, '20 August 2019', '2017', '267', 21, 'Lokal', 10, '', '', '', 1, '1'),
(505, '20 August 2019', '2017', '268', 21, 'Lokal', 10, '', '', '', 1, '1'),
(506, '20 August 2019', '2017', '269', 21, 'Lokal', 10, '', '', '', 1, '1'),
(507, '20 August 2019', '2017', '270', 21, 'Lokal', 10, '', '', '', 1, '1'),
(508, '20 August 2019', '2017', '271', 21, 'Lokal', 10, '', '', '', 1, '1'),
(509, '20 August 2019', '2017', '272', 21, 'Lokal', 10, '', '', '', 1, '1'),
(510, '20 August 2019', '2017', '273', 21, 'Lokal', 10, '', '', '', 1, '1'),
(511, '20 August 2019', '2017', '274', 21, 'Lokal', 10, '', '', '', 1, '1'),
(512, '20 August 2019', '2017', '275', 21, 'Lokal', 10, '', '', '', 1, '1'),
(513, '20 August 2019', '2017', '276', 21, 'Lokal', 10, '', '', '', 1, '1'),
(514, '20 August 2019', '2017', '277', 21, 'Lokal', 10, '', '', '', 1, '1'),
(515, '20 August 2019', '2017', '278', 21, 'Lokal', 10, '', '', '', 1, '1'),
(516, '20 August 2019', '2017', '279', 21, 'Lokal', 10, '', '', '', 1, '1'),
(517, '20 August 2019', '2017', '280', 21, 'Lokal', 10, '', '', '', 1, '1'),
(518, '20 August 2019', '2017', '281', 21, 'Lokal', 10, '', '', '', 1, '1'),
(519, '20 August 2019', '2017', '282', 21, 'Lokal', 10, '', '', '', 1, '1'),
(520, '20 August 2019', '2017', '283', 21, 'Lokal', 10, '', '', '', 1, '1'),
(521, '20 August 2019', '2017', '284', 21, 'Lokal', 10, '', '', '', 1, '1'),
(522, '20 August 2019', '2017', '285', 21, 'Lokal', 10, '', '', '', 1, '1'),
(523, '20 August 2019', '2018', '286', 21, 'Lokal', 10, 'Uraian Ruang Tidak Ada', '', '', 1, '1'),
(524, '20 August 2019', '2018', '287', 21, 'Lokal', 10, 'Uraian Ruang Tidak Ada', '', '', 1, '1'),
(525, '20 August 2019', '2018', '288', 21, 'Lokal', 10, 'Uraian Ruang Tidak Ada', '', '', 1, '1'),
(526, '20 August 2019', '2018', '289', 21, 'Lokal', 10, 'Uraian Ruang Tidak Ada', '', '', 1, '1'),
(527, '20 August 2019', '2018', '290', 21, 'Lokal', 10, 'Uraian Ruang Tidak Ada', '', '', 1, '1'),
(528, '20 August 2019', '2018', '291', 21, 'Lokal', 10, 'Uraian Ruang Tidak Ada', '', '', 1, '1'),
(529, '20 August 2019', '2018', '292', 21, 'Lokal', 10, 'Uraian Ruang Tidak Ada', '', '', 1, '1'),
(530, '20 August 2019', '2018', '293', 21, 'Lokal', 10, 'Uraian Ruang Tidak Ada', '', '', 1, '1'),
(531, '20 August 2019', '2018', '294', 21, 'Lokal', 10, 'Uraian Ruang Tidak Ada', '', '', 1, '1'),
(532, '20 August 2019', '2018', '295', 21, 'Lokal', 10, 'Uraian Ruang Tidak Ada', '', '', 1, '1'),
(533, '20 August 2019', '2011', '1', 22, 'Lokal (Sofa Set)', 10, 'PUSAT PEMBIAYAAN PEMBANGUNAN HUTAN', '', '', 1, '1'),
(534, '20 August 2019', '2011', '2', 22, 'Lokal (Sofa Set)', 10, 'PUSAT PEMBIAYAAN PEMBANGUNAN HUTAN', '', '', 1, '1'),
(535, '20 August 2019', '2017', '3', 22, 'Lokal (Sofa Set)', 10, '', '', '', 1, '1'),
(536, '20 August 2019', '2018', '1', 23, 'Sofa set', 10, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(537, '20 August 2019', '2018', '2', 23, 'Sofa set', 10, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(538, '20 August 2019', '2015', '2', 24, 'Lokal', 10, 'R. KEPALA PUSAT', '', '', 1, '1'),
(539, '20 August 2019', '2015', '3', 24, 'Lokal', 10, 'R. RAPAT UTAMA', '', '', 1, '1'),
(540, '20 August 2019', '2015', '4', 24, 'Lokal', 10, 'R. RAPAT KECIL', '', '', 1, '1'),
(541, '20 August 2019', '2015', '5', 24, 'Lokal', 10, 'R. RAPAT UTAMA', '', '', 1, '1'),
(542, '20 August 2019', '2015', '6', 24, 'Lokal', 10, 'R. RAPAT UTAMA', '', '', 1, '1'),
(543, '20 August 2019', '2015', '7', 24, 'Lokal', 10, 'R. RAPAT UTAMA', '', '', 1, '1'),
(544, '20 August 2019', '2015', '8', 24, 'Lokal', 10, 'R. RAPAT UTAMA', '', '', 1, '1'),
(545, '20 August 2019', '2008', '4', 25, 'Lokal', 10, 'R. KEPALA PUSAT', '', '', 1, '1'),
(546, '20 August 2019', '2015', '2', 26, 'Lokal', 10, 'R. RESEPTIONIS', '', '', 1, '1'),
(547, '20 August 2019', '2017', '3', 26, 'Lokal', 10, '', '', '', 1, '1'),
(548, '20 August 2019', '2017', '1', 27, 'Lokal (Meja Bundar Kaca & 4 Kursi Hitam)', 10, '', '', '', 1, '1'),
(549, '20 August 2019', '2015', '3', 28, 'Lokal', 10, 'R. KEPALA PUSAT', '', '', 1, '1'),
(550, '20 August 2019', '2015', '4', 28, 'Lokal', 10, 'R. RESEPTIONIS', '', '', 1, '1'),
(551, '20 August 2019', '2008', '1', 29, 'Seiko Jam Dinding', 28, 'R. KEPALA PUSAT', '', '', 1, '1'),
(552, '20 August 2019', '2008', '2', 29, 'Seiko Jam Dinding', 28, 'PUSAT P2H', '', '', 1, '1'),
(553, '20 August 2019', '2008', '3', 29, 'Seiko Jam Dinding', 28, 'PUSAT P2H', '', '', 1, '1'),
(554, '20 August 2019', '2017', '1', 30, 'Panasonic', 19, 'R. Server', '', '', 1, '1'),
(555, '20 August 2019', '2009', '1', 31, 'Sharp ', 29, 'R. KEPALA PUSAT', '', '', 1, '1'),
(556, '20 August 2019', '2009', '2', 31, 'Sharp ', 29, 'R. SEKRETARIS KEPALA PUSAT', '', '', 1, '1');
INSERT INTO `barang_aset_sub` (`id_aset_sub`, `tanggal_input`, `tahun`, `seri`, `id_aset`, `detail_aset`, `id_merk_aset`, `penguasaan`, `keterangan`, `gambar`, `id_satuan_aset`, `grup`) VALUES
(557, '20 August 2019', '2009', '3', 31, 'Sharp ', 29, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(558, '20 August 2019', '2009', '4', 31, 'Sharp ', 29, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(559, '20 August 2019', '2016', '5', 31, 'Polytron', 30, 'R. RAPAT KECIL', '', '', 1, '1'),
(560, '20 August 2019', '2016', '6', 31, 'Polytron', 30, 'R. RAPAT UTAMA', '', '', 1, '1'),
(561, '20 August 2019', '2017', '7', 31, 'Panasonic', 19, '', '', '', 1, '1'),
(562, '20 August 2019', '2017', '8', 31, 'Panasonic', 19, '', '', '', 1, '1'),
(563, '20 August 2019', '2017', '9', 31, 'Panasonic', 19, '', '', '', 1, '1'),
(564, '20 August 2019', '2017', '10', 31, 'Panasonic', 19, '', '', '', 1, '1'),
(565, '20 August 2019', '2017', '11', 31, 'Panasonic', 19, '', '', '', 1, '1'),
(566, '20 August 2019', '2017', '12', 31, 'Panasonic', 19, '', '', '', 1, '1'),
(567, '20 August 2019', '2017', '13', 31, 'Panasonic', 19, '', '', '', 1, '1'),
(568, '20 August 2019', '2017', '14', 31, 'Panasonic', 19, '', '', '', 1, '1'),
(569, '20 August 2019', '2017', '15', 31, 'Panasonic', 19, '', '', '', 1, '1'),
(570, '20 August 2019', '2017', '16', 31, 'Panasonic', 19, '', '', '', 1, '1'),
(571, '20 August 2019', '2017', '17', 31, 'Panasonic', 19, '', '', '', 1, '1'),
(572, '20 August 2019', '2017', '18', 31, 'Daikin', 31, '', '', '', 1, '1'),
(573, '20 August 2019', '2017', '19', 31, 'Daikin', 31, '', '', '', 1, '1'),
(574, '20 August 2019', '2018', '20', 31, 'Panasonic', 19, '', '', '', 1, '1'),
(575, '20 August 2019', '2008', '1', 32, 'LG 21 F3RL', 32, 'R. KEPALA PUSAT', '', '', 1, '1'),
(576, '20 August 2019', '2008', '2', 32, 'LG 29 TU3RL', 32, 'R. KEPALA PUSAT', '', '', 1, '1'),
(577, '20 August 2019', '2013', '3', 32, 'LG LED 32', 32, 'R. KEPALA PUSAT', '', '', 1, '1'),
(578, '20 August 2019', '2013', '4', 32, 'LG LED 32', 32, 'BLU P3H', '', '', 1, '1'),
(579, '20 August 2019', '2017', '5', 32, 'Samsung UHD LED TV 82', 33, '', '', '', 1, '1'),
(580, '20 August 2019', '2017', '6', 32, 'Samsung UHD LED TV 65', 33, '', '', '', 1, '1'),
(581, '20 August 2019', '2017', '7', 32, 'Samsung UHD LED TV 65', 33, '', '', '', 1, '1'),
(582, '20 August 2019', '2015', '1', 33, 'DBX EQ 1231', 34, 'R. RAPAT UTAMA', '', '', 1, '1'),
(583, '20 August 2019', '2015', '1', 34, 'BMB 10', 35, 'R. RAPAT UTAMA', '', '', 1, '1'),
(584, '20 August 2019', '2015', '2', 34, 'BMB 10', 35, 'R. RAPAT UTAMA', '', '', 1, '1'),
(585, '20 August 2019', '2015', '3', 34, 'BMB 10', 35, 'R. FINANCIAL (BENDAHARA)', '', '', 1, '1'),
(586, '20 August 2019', '2015', '4', 34, 'BMB 10', 35, 'R. FINANCIAL (BENDAHARA)', '', '', 1, '1'),
(587, '20 August 2019', '2015', '5', 34, 'BMB SW 12', 35, 'R. RAPAT UTAMA', '', '', 1, '1'),
(588, '20 August 2019', '2015', '6', 34, 'Proel', 36, 'R. RAPAT UTAMA', '', '', 1, '1'),
(589, '20 August 2019', '2015', '7', 34, 'Proel', 36, 'R. RAPAT UTAMA', '', '', 1, '1'),
(590, '20 August 2019', '2015', '1', 35, 'Geisler OK 7500', 37, 'R. RAPAT UTAMA', '', '', 1, '1'),
(591, '20 August 2019', '2009', '1', 36, 'Sierra Wireless 881U', 38, 'BRANKAS UMUM', '', '', 1, '1'),
(592, '20 August 2019', '2015', '1', 37, 'Shure PG-48', 39, 'R. RAPAT UTAMA', '', '', 1, '1'),
(593, '20 August 2019', '2015', '2', 37, 'Shure PG-48', 39, 'R. RAPAT UTAMA', '', '', 1, '1'),
(594, '20 August 2019', '2015', '1', 37, 'Any Song', 40, 'R. RAPAT UTAMA', '', '', 1, '1'),
(595, '20 August 2019', '2015', '2', 37, 'Any Song', 40, 'R. RAPAT UTAMA', '', '', 1, '1'),
(596, '20 August 2019', '2015', '3', 37, 'Any Song', 40, 'R. RAPAT UTAMA', '', '', 1, '1'),
(597, '20 August 2019', '2015', '4', 37, 'Any Song', 40, 'R. RAPAT UTAMA', '', '', 1, '1'),
(598, '20 August 2019', '2015', '5', 37, 'Any Song', 40, 'R. RAPAT UTAMA', '', '', 1, '1'),
(599, '20 August 2019', '2015', '6', 37, 'Any Song', 40, 'R. RAPAT UTAMA', '', '', 1, '1'),
(600, '20 August 2019', '2015', '7', 37, 'Any Song', 40, 'R. RAPAT UTAMA', '', '', 1, '1'),
(601, '20 August 2019', '2015', '8', 37, 'Any Song', 40, 'R. RAPAT UTAMA', '', '', 1, '1'),
(602, '20 August 2019', '2015', '9', 37, 'Any Song', 40, 'R. RAPAT UTAMA', '', '', 1, '1'),
(603, '20 August 2019', '2008', '1', 38, 'Lokal ', 10, 'R. KAPUS', '', '', 1, '1'),
(604, '20 August 2019', '2008', '1', 39, 'Lokal (Bingkai Kayu)', 10, 'R. 1CAPUS', '', '', 1, '1'),
(605, '20 August 2019', '2008', '2', 39, 'Lokal (Bingkai Kayu)', 10, 'R. KAPUS', '', '', 1, '1'),
(606, '20 August 2019', '2008', '1', 40, 'Miyako', 41, 'R. KEPALA PUSAT', '', '', 1, '1'),
(607, '20 August 2019', '2008', '2', 40, 'Miyako', 41, 'R. KEPALA PUSAT', '', '', 1, '1'),
(608, '20 August 2019', '2008', '3', 40, 'Miyako', 41, 'R. KEPALA PUSAT', '', '', 1, '1'),
(609, '20 August 2019', '2009', '1', 41, 'Sony DCR-SR45', 21, 'BRANKAS UMUM', '', '', 1, '1'),
(610, '20 August 2019', '2017', '1', 42, 'Tempat Sampah Kayu', 42, '', '', '', 1, '1'),
(611, '20 August 2019', '2017', '2', 42, 'Tempat Sampah Kayu', 42, '', '', '', 1, '1'),
(612, '20 August 2019', '2017', '3', 42, 'Tempat Sampah Kayu', 42, '', '', '', 1, '1'),
(613, '20 August 2019', '2017', '4', 42, 'Tempat Sampah Kayu', 42, '', '', '', 1, '1'),
(614, '20 August 2019', '2017', '5', 42, 'Tempat Sampah Kayu', 42, '', '', '', 1, '1'),
(615, '20 August 2019', '2015', '1', 43, 'Yamaha Mixer Sound', 5, 'R. RAPAT UTAMA', '', '', 1, '1'),
(616, '20 August 2019', '2015', '1', 44, 'Shure 288/PG-58', 39, 'R. RAPAT UTAMA', '', '', 1, '1'),
(617, '20 August 2019', '2015', '1', 45, 'Any Song', 40, 'R. RAPAT UTAMA', '', '', 1, '1'),
(618, '20 August 2019', '2008', '1', 46, 'ICA 1022B', 43, 'R. KAPUS', '', '', 1, '1'),
(619, '20 August 2019', '2008', '2', 46, 'ICA 1022B', 43, 'PUSAT P2H', '', '', 1, '1'),
(620, '20 August 2019', '2008', '3', 46, 'ICA 1022B', 43, 'PUSAT P2H', '', '', 1, '1'),
(621, '20 August 2019', '2008', '4', 46, 'ICA 1022B', 43, 'PUSAT P2H', '', '', 1, '1'),
(622, '20 August 2019', '2017', '5', 46, 'Prolink', 44, '', '', '', 1, '1'),
(623, '20 August 2019', '2015', '1', 47, 'Wisdom LA 1000', 45, 'R. RAPAT UTAMA', '', '', 1, '1'),
(624, '20 August 2019', '2015', '1', 48, 'Hardcase (Rack Mixer Sound)', 46, 'R. RAPAT UTAMA', '', '', 1, '1'),
(625, '20 August 2019', '2008', '1', 49, 'Canon A590 IS', 47, 'BRANGKAS UMUM', '', '', 1, '1'),
(626, '20 August 2019', '2008', '2', 49, 'Canon A590 IS', 47, 'BRANGKAS UMUM', '', '', 1, '1'),
(627, '20 August 2019', '2011', '3', 49, 'Fuji Finepix 1800', 48, 'PUSAT PEMBIAYAAN PEMBANGUAN HUTAN', '', '', 1, '1'),
(628, '20 August 2019', '2012', '4', 49, 'Olympus SZ-10', 49, '', '', '', 1, '1'),
(629, '20 August 2019', '2012', '5', 49, 'Olympus SZ-10', 49, '', '', '', 1, '1'),
(630, '20 August 2019', '2012', '6', 49, 'Olympus SZ-10', 49, '', '', '', 1, '1'),
(631, '20 August 2019', '2012', '7', 49, 'Olympus SZ-10', 49, '', '', '', 1, '1'),
(632, '20 August 2019', '2013', '8', 49, 'Nikon L28', 50, 'BLU P3H', '', '', 1, '1'),
(633, '20 August 2019', '2013', '9', 49, 'Nikon L29', 50, 'BLU P3H', '', '', 1, '1'),
(634, '20 August 2019', '2013', '10', 49, 'Nikon L30', 50, 'BLU P3H', '', '', 1, '1'),
(635, '20 August 2019', '2013', '11', 49, 'Nikon L31', 50, 'BLU P3H', '', '', 1, '1'),
(636, '20 August 2019', '2013', '12', 49, 'Nikon L32', 50, 'BLU P3H', '', '', 1, '1'),
(637, '20 August 2019', '2013', '13', 49, 'Nikon L33', 50, 'BLU P3H', '', '', 1, '1'),
(638, '20 August 2019', '2013', '14', 49, 'Nikon L34', 50, 'BLU P3H', '', '', 1, '1'),
(639, '20 August 2019', '2015', '15', 49, 'Sony Mirrorless A5100', 21, '', '', '', 1, '1'),
(640, '20 August 2019', '2015', '16', 49, 'Sony Mirrorless A5101', 21, '', '', '', 1, '1'),
(641, '20 August 2019', '2015', '17', 49, 'Sony Mirrorless A5102', 21, '', '', '', 1, '1'),
(642, '20 August 2019', '2015', '1', 50, 'Geisler (Karaoke)', 37, 'R. RAPAT UTAMA', '', '', 1, '1'),
(643, '20 August 2019', '2017', '2', 50, 'APC', 51, '', '', '', 1, '1'),
(644, '20 August 2019', '2012', '1', 51, 'Delta', 52, 'BLU P3H', '', '', 1, '1'),
(645, '20 August 2019', '2008', '1', 52, 'Suunto KB 14', 53, 'Brankas Barang', '', '', 1, '1'),
(646, '20 August 2019', '2008', '2', 52, 'Suunto KB 14', 53, 'Brankas Barang', '', '', 1, '1'),
(647, '20 August 2019', '2008', '3', 52, 'Suunto KB 14', 53, 'Brankas Barang', '', '', 1, '1'),
(648, '20 August 2019', '2008', '4', 52, 'Suunto KB 14', 53, 'Brankas Barang', '', '', 1, '1'),
(649, '20 August 2019', '2008', '5', 52, 'Suunto KB 14', 53, 'Brankas Barang', '', '', 1, '1'),
(650, '20 August 2019', '2008', '6', 52, 'Suunto KB 14', 53, 'Barang tidak ditemukan', '', '', 1, '1'),
(651, '20 August 2019', '2008', '1', 53, 'Garmin Colorado 300i', 54, 'Brankas Barang', '', '', 1, '1'),
(652, '20 August 2019', '2008', '2', 53, 'Garmin Colorado 300i', 54, 'Brankas Barang', '', '', 1, '1'),
(653, '20 August 2019', '2008', '3', 53, 'Garmin Colorado 300i', 54, 'Brankas Barang', '', '', 1, '1'),
(654, '20 August 2019', '2012', '4', 53, 'Garmin GPS Map 78s', 54, 'Brankas Barang', '', '', 1, '1'),
(655, '20 August 2019', '2012', '5', 53, 'Garmin GPS Map 78s', 54, 'Brankas Barang', '', '', 1, '1'),
(656, '20 August 2019', '2012', '6', 53, 'Garmin GPS Map 78s', 54, 'Ida Pari Purnawan', '', '', 1, '1'),
(657, '20 August 2019', '2012', '7', 53, 'Garmin GPS Map 62s', 54, 'Brankas Barang', '', '', 1, '1'),
(658, '20 August 2019', '2012', '8', 53, 'Garmin GPS Map 62s', 54, 'Brankas Barang', '', '', 1, '1'),
(659, '20 August 2019', '2012', '9', 53, 'Garmin GPS Map 62s', 54, '', '', '', 1, '1'),
(660, '20 August 2019', '2013', '10', 53, 'Garmin Oregon 550', 54, 'Danang Hari Mulyanto, A.Md', '', '', 1, '1'),
(661, '20 August 2019', '2013', '11', 53, 'Garmin Oregon 550', 54, 'Imam Mudin, SP.', '', '', 1, '1'),
(662, '20 August 2019', '2013', '12', 53, 'Garmin Oregon 550', 54, 'Aim Halim Mutaqin, S.Hut.', '', '', 1, '1'),
(663, '20 August 2019', '2013', '13', 53, 'Garmin Oregon 550', 54, 'Brankas Barang', '', '', 1, '1'),
(664, '20 August 2019', '2013', '14', 53, 'Garmin Oregon 550', 54, 'Brankas Barang', '', '', 1, '1'),
(665, '20 August 2019', '2013', '15', 53, 'Garmin Oregon 550', 54, 'Brankas Barang', '', '', 1, '1'),
(666, '20 August 2019', '2013', '16', 53, 'Garmin Oregon 550', 54, 'Brankas Barang', '', '', 1, '1'),
(667, '20 August 2019', '2013', '17', 53, 'Garmin Oregon 550', 54, 'Brankas Barang', '', '', 1, '1'),
(668, '20 August 2019', '2013', '18', 53, 'Garmin Oregon 550', 54, 'Brankas Barang', '', '', 1, '1'),
(669, '20 August 2019', '2013', '19', 53, 'Garmin Oregon 550', 54, 'Brankas Barang', '', '', 1, '1'),
(670, '20 August 2019', '2013', '20', 53, 'Garmin Oregon 550', 54, 'Brankas Barang', '', '', 1, '1'),
(671, '20 August 2019', '2013', '21', 53, 'Garmin Oregon 550', 54, 'Brankas Barang', '', '', 1, '1'),
(672, '20 August 2019', '2013', '22', 53, 'Garmin Oregon 550', 54, 'Brankas Barang', '', '', 1, '1'),
(673, '20 August 2019', '2013', '23', 53, 'Garmin Oregon 550', 54, 'Brankas Barang', '', '', 1, '1'),
(674, '20 August 2019', '2013', '24', 53, 'Garmin Oregon 550', 54, 'Brankas Barang', '', '', 1, '1'),
(675, '20 August 2019', '2013', '25', 53, 'Garmin Oregon 550', 54, 'Fadri Fahrul (Delvira)', '', '', 1, '1'),
(676, '20 August 2019', '2013', '26', 53, 'Garmin Oregon 550', 54, 'Dede Permadi', '', '', 1, '1'),
(677, '20 August 2019', '2013', '27', 53, 'Garmin Oregon 550', 54, 'Arifunatiq', '', '', 1, '1'),
(678, '20 August 2019', '2013', '28', 53, 'Garmin Oregon 550', 54, 'Philip Febria Rahman, S.Hut.', '', '', 1, '1'),
(679, '20 August 2019', '2013', '29', 53, 'Garmin Oregon 550', 54, '', '', '', 1, '1'),
(680, '20 August 2019', '2013', '30', 53, 'Garmin Oregon 550', 54, 'Brankas Barang', '', '', 1, '1'),
(681, '20 August 2019', '2013', '31', 53, 'Garmin Oregon 550', 54, '', '', '', 1, '1'),
(682, '20 August 2019', '2013', '32', 53, 'Garmin Oregon 550', 54, 'Daryoto, S.Hut', '', '', 1, '1'),
(683, '20 August 2019', '2013', '33', 53, 'Garmin Oregon 550', 54, 'Puspito, A.Md.', '', '', 1, '1'),
(684, '20 August 2019', '2013', '34', 53, 'Garmin Oregon 550', 54, 'Brangkas Barang', '', '', 1, '1'),
(685, '20 August 2019', '2013', '35', 53, 'Garmin Oregon 550', 54, 'Wartaka, S.Hut.', '', '', 1, '1'),
(686, '20 August 2019', '2013', '36', 53, 'Garmin Oregon 550', 54, 'Didik Setiawan, SE.', '', '', 1, '1'),
(687, '20 August 2019', '2013', '37', 53, 'Garmin Oregon 550', 54, 'Brangkas Barang', '', '', 1, '1'),
(688, '20 August 2019', '2013', '38', 53, 'Garmin Oregon 550', 54, 'Brangkas Barang', '', '', 1, '1'),
(689, '20 August 2019', '2013', '39', 53, 'Garmin Oregon 550', 54, 'Ferry Faryanto, S.Hut', '', '', 1, '1'),
(690, '20 August 2019', '2013', '40', 53, 'Garmin Oregon 550', 54, 'Brangkas Barang', '', '', 1, '1'),
(691, '20 August 2019', '2013', '41', 53, 'Garmin Oregon 550', 54, '', '', '', 1, '1'),
(692, '20 August 2019', '2013', '42', 53, 'Garmin Oregon 550', 54, '', '', '', 1, '1'),
(693, '20 August 2019', '2013', '43', 53, 'Garmin Oregon 550', 54, '', '', '', 1, '1'),
(694, '20 August 2019', '2013', '44', 53, 'Garmin Oregon 550', 54, '', '', '', 1, '1'),
(695, '20 August 2019', '2013', '45', 53, 'Garmin Oregon 550', 54, 'Aisyah Muthmainnah', '', '', 1, '1'),
(696, '20 August 2019', '2013', '46', 53, 'Garmin Oregon 550', 54, 'Nurhidayata Bin Syaiful, S.Si', '', '', 1, '1'),
(697, '20 August 2019', '2013', '47', 53, 'Garmin Oregon 550', 54, '', '', '', 1, '1'),
(698, '20 August 2019', '2013', '48', 53, 'Garmin Oregon 550', 54, 'Anis Wijayanti, S.Hut', '', '', 1, '1'),
(699, '20 August 2019', '2013', '49', 53, 'Garmin Oregon 550', 54, 'Dodik Gunawan, SE.', '', '', 1, '1'),
(700, '20 August 2019', '2013', '50', 53, 'Garmin Oregon 550', 54, 'Nova Sahar Zaenudin, S.Hut', '', '', 1, '1'),
(701, '20 August 2019', '2013', '51', 53, 'Garmin Oregon 550', 54, 'Aniffah Nur Azizah, S.Hut', '', '', 1, '1'),
(702, '20 August 2019', '2013', '52', 53, 'Garmin Oregon 550', 54, 'Farid Setiawan, A.Md', '', '', 1, '1'),
(703, '20 August 2019', '2013', '53', 53, 'Garmin Oregon 550', 54, 'Anis Wijayanti, S.Hut', '', '', 1, '1'),
(704, '20 August 2019', '2013', '54', 53, 'Garmin Oregon 550', 54, 'Tito Yasin, S.TP', '', '', 1, '1'),
(705, '20 August 2019', '2013', '55', 53, 'Garmin Oregon 550', 54, 'John Hardiyanto, SP.', '', '', 1, '1'),
(706, '20 August 2019', '2013', '56', 53, 'Garmin Oregon 550', 54, '', '', '', 1, '1'),
(707, '20 August 2019', '2013', '57', 53, 'Garmin Oregon 550', 54, 'Fahrizal Lutfi, S.Hut', '', '', 1, '1'),
(708, '20 August 2019', '2013', '58', 53, 'Garmin Oregon 550', 54, '', '', '', 1, '1'),
(709, '20 August 2019', '2013', '59', 53, 'Garmin Oregon 550', 54, '', '', '', 1, '1'),
(710, '20 August 2019', '2013', '60', 53, 'Garmin Oregon 550', 54, 'Abdul Fatah, S.E.Sy', '', '', 1, '1'),
(711, '20 August 2019', '2013', '61', 53, 'Garmin Oregon 550', 54, 'Pono, S.Hut', '', '', 1, '1'),
(712, '20 August 2019', '2013', '62', 53, 'Garmin Oregon 550', 54, 'Mandara Pahlawa, S.Hut.', '', '', 1, '1'),
(713, '20 August 2019', '2013', '63', 53, 'Garmin Oregon 550', 54, 'Dewanti Prabowo, S.Hut.', '', '', 1, '1'),
(714, '20 August 2019', '2013', '64', 53, 'Garmin Oregon 550', 54, 'Adi Nugroho Budi Utomo, S.E.', '', '', 1, '1'),
(715, '20 August 2019', '2013', '65', 53, 'Garmin Oregon 550', 54, 'Topik Hidayat', '', '', 1, '1'),
(716, '20 August 2019', '2013', '66', 53, 'Garmin Oregon 550', 54, 'Taufik Mardiana, S.Hut.', '', '', 1, '1'),
(717, '20 August 2019', '2013', '67', 53, 'Garmin Oregon 550', 54, 'Rian Febriawan', '', '', 1, '1'),
(718, '20 August 2019', '2015', '68', 53, 'Garmin Oregon 650', 54, 'Brankas Barang', '', '', 1, '1'),
(719, '20 August 2019', '2015', '69', 53, 'Garmin Oregon 650', 54, 'Brankas Barang', '', '', 1, '1'),
(720, '20 August 2019', '2015', '70', 53, 'Garmin Oregon 650', 54, 'Brankas Barang', '', '', 1, '1'),
(721, '20 August 2019', '2015', '71', 53, 'Garmin Oregon 650', 54, 'Brankas Barang', '', '', 1, '1'),
(722, '20 August 2019', '2015', '72', 53, 'Garmin Oregon 650', 54, 'Brankas Barang', '', '', 1, '1'),
(723, '20 August 2019', '2015', '73', 53, 'Garmin Oregon 650', 54, 'Brankas Barang', '', '', 1, '1'),
(724, '20 August 2019', '2015', '74', 53, 'Garmin Oregon 650', 54, 'Erna Susilowati Ningsih', '', '', 1, '1'),
(725, '20 August 2019', '2015', '75', 53, 'Garmin Oregon 650', 54, 'Emka Lukman', '', '', 1, '1'),
(726, '20 August 2019', '2015', '76', 53, 'Garmin Oregon 650', 54, 'Dawud Lutama, S.P.', '', '', 1, '1'),
(727, '20 August 2019', '2015', '77', 53, 'Garmin Oregon 650', 54, 'Brankas Barang', '', '', 1, '1'),
(728, '20 August 2019', '2015', '78', 53, 'Garmin Oregon 650', 54, 'Habib Khoirul Wafa, S.P.', '', '', 1, '1'),
(729, '20 August 2019', '2015', '79', 53, 'Garmin Oregon 650', 54, '', '', '', 1, '1'),
(730, '20 August 2019', '2015', '80', 53, 'Garmin Oregon 650', 54, '', '', '', 1, '1'),
(731, '20 August 2019', '2015', '81', 53, 'Garmin Oregon 650', 54, '', '', '', 1, '1'),
(732, '20 August 2019', '2015', '82', 53, 'Garmin Oregon 650', 54, '', '', '', 1, '1'),
(733, '20 August 2019', '2015', '83', 53, 'Garmin Oregon 650', 54, '', '', '', 1, '1'),
(734, '20 August 2019', '2015', '84', 53, 'Garmin Oregon 650', 54, 'Alexander Sanjaya', '', '', 1, '1'),
(735, '20 August 2019', '2015', '85', 53, 'Garmin Oregon 650', 54, 'Amriadi', '', '', 1, '1'),
(736, '20 August 2019', '2015', '86', 53, 'Garmin Oregon 650', 54, 'Andi Nugroho Budi Utomo', '', '', 1, '1'),
(737, '20 August 2019', '2015', '87', 53, 'Garmin Oregon 650', 54, 'Galih Rukmono', '', '', 1, '1'),
(738, '20 August 2019', '2015', '88', 53, 'Garmin Oregon 650', 54, 'Delvira', '', '', 1, '1'),
(739, '20 August 2019', '2015', '89', 53, 'Garmin Oregon 650', 54, 'Dwi Ariyanto, SP', '', '', 1, '1'),
(740, '20 August 2019', '2015', '90', 53, 'Garmin Oregon 650', 54, 'Erwin Agusta', '', '', 1, '1'),
(741, '20 August 2019', '2015', '91', 53, 'Garmin Oregon 650', 54, 'Fiqh Khairunisa (Daryoto)', '', '', 1, '1'),
(742, '20 August 2019', '2015', '92', 53, 'Garmin Oregon 650', 54, 'Dialektika Ginting', '', '', 1, '1'),
(743, '20 August 2019', '2015', '93', 53, 'Garmin Oregon 650', 54, 'Kasan Yanuar, A.Md', '', '', 1, '1'),
(744, '20 August 2019', '2015', '94', 53, 'Garmin Oregon 650', 54, 'La Ode Muh. Fitrah Ritubu', '', '', 1, '1'),
(745, '20 August 2019', '2015', '95', 53, 'Garmin Oregon 650', 54, 'Rahmadi Pamungkas', '', '', 1, '1'),
(746, '20 August 2019', '2015', '96', 53, 'Garmin Oregon 650', 54, 'Ria Setiawati', '', '', 1, '1'),
(747, '20 August 2019', '2015', '97', 53, 'Garmin Oregon 650', 54, 'Septian Hadinata', '', '', 1, '1'),
(748, '20 August 2019', '2015', '98', 53, 'Garmin Oregon 650', 54, 'Duwi Nopianti', '', '', 1, '1'),
(749, '20 August 2019', '2015', '99', 53, 'Garmin Oregon 650', 54, 'Bid OPS', '', '', 1, '1'),
(750, '20 August 2019', '2015', '100', 53, 'Garmin Oregon 650', 54, 'Ahadi', '', '', 1, '1'),
(751, '20 August 2019', '2015', '101', 53, 'Garmin Oregon 650', 54, '', '', '', 1, '1'),
(752, '20 August 2019', '2015', '102', 53, 'Garmin Oregon 650', 54, '', '', '', 1, '1'),
(753, '20 August 2019', '2015', '103', 53, 'Garmin Oregon 650', 54, '', '', '', 1, '1'),
(754, '20 August 2019', '2015', '104', 53, 'Garmin Oregon 650', 54, '', '', '', 1, '1'),
(755, '20 August 2019', '2015', '105', 53, 'Garmin Oregon 650', 54, '', '', '', 1, '1'),
(756, '20 August 2019', '2015', '106', 53, 'Garmin Oregon 650', 54, '', '', '', 1, '1'),
(757, '20 August 2019', '2015', '107', 53, 'Garmin Oregon 650', 54, '', '', '', 1, '1'),
(758, '20 August 2019', '2015', '108', 53, 'Garmin Oregon 650', 54, '', '', '', 1, '1'),
(759, '20 August 2019', '2015', '109', 53, 'Garmin Oregon 650', 54, '', '', '', 1, '1'),
(760, '20 August 2019', '2015', '110', 53, 'Garmin Oregon 650', 54, '', '', '', 1, '1'),
(761, '20 August 2019', '2015', '111', 53, 'Garmin Oregon 650', 54, '', '', '', 1, '1'),
(762, '20 August 2019', '2015', '112', 53, 'Garmin Oregon 650', 54, '', '', '', 1, '1'),
(763, '20 August 2019', '2015', '113', 53, 'Garmin Oregon 650', 54, '', '', '', 1, '1'),
(764, '20 August 2019', '2015', '114', 53, 'Garmin Oregon 650', 54, 'Brankas Barang', '', '', 1, '1'),
(765, '20 August 2019', '2015', '115', 53, 'Garmin Oregon 650', 54, 'Brankas Barang', '', '', 1, '1'),
(766, '20 August 2019', '2015', '116', 53, 'Garmin Oregon 650', 54, 'Brankas Barang', '', '', 1, '1'),
(767, '20 August 2019', '2015', '117', 53, 'Garmin Oregon 650', 54, 'Bayu Reksa Kusumah', '', '', 1, '1'),
(768, '20 August 2019', '2016', '118', 53, 'Garmin Oregon 650', 54, 'Novrizal Amri, S.Hut.', '', '', 1, '1'),
(769, '20 August 2019', '2016', '119', 53, 'Garmin Oregon 650', 54, 'Benny Pratama, S.Hut.', '', '', 1, '1'),
(770, '20 August 2019', '2016', '120', 53, 'Garmin Oregon 650', 54, 'Sarno, S.P.', '', '', 1, '1'),
(771, '20 August 2019', '2016', '121', 53, 'Garmin Oregon 650', 54, 'Didi Kuntara, S.Hut', '', '', 1, '1'),
(772, '20 August 2019', '2016', '122', 53, 'Garmin Oregon 650', 54, 'Adrian Donellius Simbolon, S.Hut.', '', '', 1, '1'),
(773, '20 August 2019', '2016', '123', 53, 'Garmin Oregon 650', 54, 'Bagus Pratama Liriyan Putra, S.Hut', '', '', 1, '1'),
(774, '20 August 2019', '2016', '124', 53, 'Garmin Oregon 650', 54, 'Hendri', '', '', 1, '1'),
(775, '20 August 2019', '2016', '125', 53, 'Garmin Oregon 650', 54, 'Eko Yulianto', '', '', 1, '1'),
(776, '20 August 2019', '2017', '126', 53, 'Garmin Oregon 750', 54, 'Brankas Kantor', '', '', 1, '1'),
(777, '20 August 2019', '2017', '127', 53, 'Garmin Oregon 750', 54, 'Rodi Irawan, SP.', '', '', 1, '1'),
(778, '20 August 2019', '2017', '128', 53, 'Garmin Oregon 750', 54, 'Lukmanul Hakim, SP.', '', '', 1, '1'),
(779, '20 August 2019', '2017', '129', 53, 'Garmin Oregon 750', 54, 'Dian Ady Wardana, S.Hut.', '', '', 1, '1'),
(780, '20 August 2019', '2017', '130', 53, 'Garmin Oregon 750', 54, 'Apriansyah, K., S.Hut.', '', '', 1, '1'),
(781, '20 August 2019', '2017', '131', 53, 'Garmin Oregon 750', 54, 'Aloysius Candra Se\'a Agu, S.Hut.', '', '', 1, '1'),
(782, '20 August 2019', '2017', '132', 53, 'Garmin Oregon 750', 54, 'Gerits Harno Suparman, S.Hut.', '', '', 1, '1'),
(783, '20 August 2019', '2017', '133', 53, 'Garmin Oregon 750', 54, 'I Nyoman Putra', '', '', 1, '1'),
(784, '20 August 2019', '2017', '134', 53, 'Garmin Oregon 750', 54, 'Benny Pratama', '', '', 1, '1'),
(785, '20 August 2019', '2017', '135', 53, 'Garmin Oregon 750', 54, 'John Sambas, S.Hut.', '', '', 1, '1'),
(786, '20 August 2019', '2017', '136', 53, 'Garmin Oregon 750', 54, 'Topan Sambas', '', '', 1, '1'),
(787, '20 August 2019', '2017', '137', 53, 'Garmin Oregon 750', 54, 'Topan Sambas', '', '', 1, '1'),
(788, '20 August 2019', '2017', '138', 53, 'Garmin Oregon 750', 54, 'Yugo Septo Ameido', '', '', 1, '1'),
(789, '20 August 2019', '2017', '139', 53, 'Garmin Oregon 750', 54, 'Dudi Hermansyah', '', '', 1, '1'),
(790, '20 August 2019', '2017', '140', 53, 'Garmin Oregon 750', 54, 'Asep', '', '', 1, '1'),
(791, '20 August 2019', '2017', '141', 53, 'Garmin Oregon 750', 54, 'Asep', '', '', 1, '1'),
(792, '20 August 2019', '2017', '142', 53, 'Garmin Oregon 750', 54, 'Brankas Kantor ( Indra APK)', '', '', 1, '1'),
(793, '20 August 2019', '2017', '143', 53, 'Garmin Oregon 750', 54, 'Brankas Kantor', '', '', 1, '1'),
(794, '20 August 2019', '2017', '144', 53, 'Garmin Oregon 750', 54, 'Brankas Kantor', '', '', 1, '1'),
(795, '20 August 2019', '2017', '145', 53, 'Garmin Oregon 750', 54, 'Brankas Kantor', '', '', 1, '1'),
(796, '20 August 2019', '2017', '146', 53, 'Garmin Oregon 750', 54, 'Brankas Kantor', '', '', 1, '1'),
(797, '20 August 2019', '2017', '147', 53, 'Garmin Oregon 750', 54, 'Brankas Kantor', '', '', 1, '1'),
(798, '20 August 2019', '2017', '148', 53, 'Garmin Oregon 750', 54, 'Brankas Kantor', '', '', 1, '1'),
(799, '20 August 2019', '2018', '149', 53, 'Garmin Oregon 750', 54, 'Syukran, S.P', '', '', 1, '1'),
(800, '20 August 2019', '2018', '150', 53, 'Garmin Oregon 750', 54, 'Rio Romanus Hendrick Buaton, S.P.', '', '', 1, '1'),
(801, '20 August 2019', '2018', '151', 53, 'Garmin Oregon 750', 54, 'Melva Sari, S.Si', '', '', 1, '1'),
(802, '20 August 2019', '2018', '152', 53, 'Garmin Oregon 750', 54, 'Rahmad Junaidi', '', '', 1, '1'),
(803, '20 August 2019', '2018', '153', 53, 'Garmin Oregon 750', 54, 'Sefniwati, S.P', '', '', 1, '1'),
(804, '20 August 2019', '2018', '154', 53, 'Garmin Oregon 750', 54, 'Decky Sangkuno, S.E', '', '', 1, '1'),
(805, '20 August 2019', '2018', '155', 53, 'Garmin Oregon 750', 54, 'Agustina Rida Simarmata, S.Hut', '', '', 1, '1'),
(806, '20 August 2019', '2018', '156', 53, 'Garmin Oregon 750', 54, 'Rahman Gilang Pratama, S.Hut', '', '', 1, '1'),
(807, '20 August 2019', '2018', '157', 53, 'Garmin Oregon 750', 54, 'Sigit Subagio', '', '', 1, '1'),
(808, '20 August 2019', '2018', '158', 53, 'Garmin Oregon 750', 54, 'Bayu Krishna, S.Pt', '', '', 1, '1'),
(809, '20 August 2019', '2018', '159', 53, 'Garmin Oregon 750', 54, 'Muhamad Yusril Abidin, S.Hut', '', '', 1, '1'),
(810, '20 August 2019', '2018', '160', 53, 'Garmin Oregon 750', 54, 'Rionaldo Damanik, S.Hut', '', '', 1, '1'),
(811, '20 August 2019', '2018', '161', 53, 'Garmin Oregon 750', 54, 'Riezky Rakamuliawan Sutanto, S.Hut', '', '', 1, '1'),
(812, '20 August 2019', '2018', '162', 53, 'Garmin Oregon 750', 54, 'Merlin Renny Sitanala, S.Hut', '', '', 1, '1'),
(813, '20 August 2019', '2018', '163', 53, 'Garmin Oregon 750', 54, 'Pendi Gusnadi, S.P', '', '', 1, '1'),
(814, '20 August 2019', '2018', '164', 53, 'Garmin Oregon 750', 54, 'Paskah Rulisto Leosae, S.Hut', '', '', 1, '1'),
(815, '20 August 2019', '2018', '165', 53, 'Garmin Oregon 750', 54, 'Tomi Septiandra, S.E', '', '', 1, '1'),
(816, '20 August 2019', '2018', '166', 53, 'Garmin Oregon 750', 54, 'Ardi Yudha Pratama, S.P', '', '', 1, '1'),
(817, '20 August 2019', '2018', '167', 53, 'Garmin Oregon 750', 54, 'Donas Dito Nugroho, S.T', '', '', 1, '1'),
(818, '20 August 2019', '2018', '168', 53, 'Garmin Oregon 750', 54, 'Arif Rahmawan Kurniawan, S.Pi', '', '', 1, '1'),
(819, '20 August 2019', '2018', '169', 53, 'Garmin Oregon 750', 54, 'Hafidz Akbar Afandi, S.Pt', '', '', 1, '1'),
(820, '20 August 2019', '2018', '170', 53, 'Garmin Oregon 750', 54, 'Frans Sirait,S.Hut', '', '', 1, '1'),
(821, '20 August 2019', '2018', '171', 53, 'Garmin Oregon 750', 54, 'Tri Purwaningsih, SP', '', '', 1, '1'),
(822, '20 August 2019', '2018', '172', 53, 'Garmin Oregon 750', 54, 'Rima Sari Arisnawati, S.T.', '', '', 1, '1'),
(823, '20 August 2019', '2018', '173', 53, 'Garmin Oregon 750', 54, 'Rivan Arif Wisudana, A.Md', '', '', 1, '1'),
(824, '20 August 2019', '2018', '174', 53, 'Garmin Oregon 750', 54, 'Galeh Primadani, A.Md', '', '', 1, '1'),
(825, '20 August 2019', '2018', '175', 53, 'Garmin Oregon 750', 54, 'Muhammad Asrul. A, S.Sos', '', '', 1, '1'),
(826, '20 August 2019', '2018', '176', 53, 'Garmin Oregon 750', 54, 'Dedy, S.Hut', '', '', 1, '1'),
(827, '20 August 2019', '2018', '177', 53, 'Garmin Oregon 750', 54, 'Muhammad Sahid, S.Hut', '', '', 1, '1'),
(828, '20 August 2019', '2018', '178', 53, 'Garmin Oregon 750', 54, 'Rusdi, SP', '', '', 1, '1'),
(829, '20 August 2019', '2018', '179', 53, 'Garmin Oregon 750', 54, 'Maulid Rahmawan', '', '', 1, '1'),
(830, '20 August 2019', '2018', '180', 53, 'Garmin Oregon 750', 54, 'Hanggara Putra Yadoreftho, S.Hut', '', '', 1, '1'),
(831, '20 August 2019', '2018', '181', 53, 'Garmin Oregon 750', 54, 'Ahmad Surya Ady Tama, S.P', '', '', 1, '1'),
(832, '20 August 2019', '2018', '182', 53, 'Garmin Oregon 750', 54, 'Ramly Azwar R. Moito, S.Pd', '', '', 1, '1'),
(833, '20 August 2019', '2018', '183', 53, 'Garmin Oregon 750', 54, 'M. Sukran, S.Hut', '', '', 1, '1'),
(834, '20 August 2019', '2018', '184', 53, 'Garmin Oregon 750', 54, 'Rachmat Alamsyah, S.Hut.', '', '', 1, '1'),
(835, '20 August 2019', '2018', '185', 53, 'Garmin Oregon 750', 54, 'A. Haruna, S.Hut', '', '', 1, '1'),
(836, '20 August 2019', '2018', '186', 53, 'Garmin Oregon 750', 54, 'Muhammad Irfan', '', '', 1, '1'),
(837, '20 August 2019', '2018', '187', 53, 'Garmin Oregon 750', 54, 'Samuel Fransiskus Silaban, S.Hut', '', '', 1, '1'),
(838, '20 August 2019', '2018', '188', 53, 'Garmin Oregon 750', 54, 'Fadilla Annisa Harahap, S.Hut', '', '', 1, '1'),
(839, '20 August 2019', '2018', '189', 53, 'Garmin Oregon 750', 54, 'Kiagus Achmad Try Anggarakusumah, S.Pt', '', '', 1, '1'),
(840, '20 August 2019', '2018', '190', 53, 'Garmin Oregon 750', 54, 'Agung Dwi Saputro, S.Si', '', '', 1, '1'),
(841, '20 August 2019', '2018', '191', 53, 'Garmin Oregon 750', 54, 'Febri Setiawan, S.P', '', '', 1, '1'),
(842, '20 August 2019', '2018', '192', 53, 'Garmin Oregon 750', 54, 'Suprananda Bagaskara, S.T', '', '', 1, '1'),
(843, '20 August 2019', '2018', '193', 53, 'Garmin Oregon 750', 54, 'Arif Nugroho, S.P', '', '', 1, '1'),
(844, '20 August 2019', '2018', '194', 53, 'Garmin Oregon 750', 54, 'Theofilus Perdana Gamaliel, A.Md', '', '', 1, '1'),
(845, '20 August 2019', '2018', '195', 53, 'Garmin Oregon 750', 54, 'Septiansyah, S.Hut', '', '', 1, '1'),
(846, '20 August 2019', '2018', '196', 53, 'Garmin Oregon 750', 54, 'Fajar Hidayanto, S. Hut.', '', '', 1, '1'),
(847, '20 August 2019', '2018', '197', 53, 'Garmin Oregon 750', 54, 'Nedha Estyarelitha, S.TP', '', '', 1, '1'),
(848, '20 August 2019', '2018', '198', 53, 'Garmin Oregon 750', 54, 'Erlina Nofita Dewi, S.Hut', '', '', 1, '1'),
(849, '20 August 2019', '2018', '199', 53, 'Garmin Oregon 750', 54, 'Aldi Sepriandra, S.P', '', '', 1, '1'),
(850, '20 August 2019', '2018', '200', 53, 'Garmin Oregon 750', 54, 'Inggrit Gianita Br Tarigan', '', '', 1, '1'),
(851, '20 August 2019', '2018', '201', 53, 'Garmin Oregon 750', 54, 'Nurlaili, S.Pt.', '', '', 1, '1'),
(852, '20 August 2019', '2018', '202', 53, 'Garmin Oregon 750', 54, 'Silaturahmi, S.Hut', '', '', 1, '1'),
(853, '20 August 2019', '2018', '203', 53, 'Garmin Oregon 750', 54, 'Marlinang Magdalena Sihite, S.Hut', '', '', 1, '1'),
(854, '20 August 2019', '2018', '204', 53, 'Garmin Oregon 750', 54, 'Niken Kemala, S.P', '', '', 1, '1'),
(855, '20 August 2019', '2018', '205', 53, 'Garmin Oregon 750', 54, 'Resti Novitasari, S.P', '', '', 1, '1'),
(856, '20 August 2019', '2018', '206', 53, 'Garmin Oregon 750', 54, 'Hafidh Siswono, S.Hut.', '', '', 1, '1'),
(857, '20 August 2019', '2018', '207', 53, 'Garmin Oregon 750', 54, 'Victor Halomoan Sijabat, S.T', '', '', 1, '1'),
(858, '20 August 2019', '2018', '208', 53, 'Garmin Oregon 750', 54, 'Siska Sentia, S.P.', '', '', 1, '1'),
(859, '20 August 2019', '2018', '209', 53, 'Garmin Oregon 750', 54, 'Hefri Oktoyoki, S.Hut', '', '', 1, '1'),
(860, '20 August 2019', '2018', '210', 53, 'Garmin Oregon 750', 54, 'James Byekher Douni, S.Hut', '', '', 1, '1'),
(861, '20 August 2019', '2018', '211', 53, 'Garmin Oregon 750', 54, 'Herman Sodik, S.Sos', '', '', 1, '1'),
(862, '20 August 2019', '2018', '212', 53, 'Garmin Oregon 750', 54, 'Berliana Nainggolan, S.Hut.', '', '', 1, '1'),
(863, '20 August 2019', '2018', '213', 53, 'Garmin Oregon 750', 54, 'Putry Jayantry Mustiani, S.Agr', '', '', 1, '1'),
(864, '20 August 2019', '2018', '214', 53, 'Garmin Oregon 750', 54, 'Shinta, S.Hut', '', '', 1, '1'),
(865, '20 August 2019', '2018', '215', 53, 'Garmin Oregon 750', 54, 'Reva Reditia, S.T.', '', '', 1, '1'),
(866, '20 August 2019', '2018', '216', 53, 'Garmin Oregon 750', 54, 'Dinda Nirmala Dewastuti, S.TP', '', '', 1, '1'),
(867, '20 August 2019', '2018', '217', 53, 'Garmin Oregon 750', 54, 'Dina Feronika, S.Hut.', '', '', 1, '1'),
(868, '20 August 2019', '2018', '218', 53, 'Garmin Oregon 750', 54, 'Rika Rahma Puspitasari, S.T', '', '', 1, '1'),
(869, '20 August 2019', '2018', '219', 53, 'Garmin Oregon 750', 54, 'Vidhiasih Aulia Rahma, S.P', '', '', 1, '1'),
(870, '20 August 2019', '2018', '220', 53, 'Garmin Oregon 750', 54, 'Rezki Ayu Dian Herowati, S.P.', '', '', 1, '1'),
(871, '20 August 2019', '2018', '221', 53, 'Garmin Oregon 750', 54, 'Mitaqul Zaitun Nisah, S.Pt', '', '', 1, '1'),
(872, '20 August 2019', '2018', '222', 53, 'Garmin Oregon 750', 54, 'Dian Puspitasari, SP.', '', '', 1, '1'),
(873, '20 August 2019', '2018', '223', 53, 'Garmin Oregon 750', 54, 'Elvy Novayanthi P, S.Hut', '', '', 1, '1'),
(874, '20 August 2019', '2018', '224', 53, 'Garmin Oregon 750', 54, 'Robbie Manggara, S.Hut', '', '', 1, '1'),
(875, '20 August 2019', '2018', '225', 53, 'Garmin Oregon 750', 54, 'Fajar Pramono, SP.', '', '', 1, '1'),
(876, '20 August 2019', '2018', '226', 53, 'Garmin Oregon 750', 54, 'Afnelasari Eka Lestari, S.Hut', '', '', 1, '1'),
(877, '20 August 2019', '2018', '227', 53, 'Garmin Oregon 750', 54, 'Muhammad Ichwan, S.P.', '', '', 1, '1'),
(878, '20 August 2019', '2018', '228', 53, 'Garmin Oregon 750', 54, 'Muhammad Fiqhi Rahman, S.Hut', '', '', 1, '1'),
(879, '20 August 2019', '2018', '229', 53, 'Garmin Oregon 750', 54, 'Nurul Izza, SE', '', '', 1, '1'),
(880, '20 August 2019', '2018', '230', 53, 'Garmin Oregon 750', 54, 'Derry Kurniawan, S.P', '', '', 1, '1'),
(881, '20 August 2019', '2018', '231', 53, 'Garmin Oregon 750', 54, 'Ferdison Suprimart Mantende, S.Agr', '', '', 1, '1'),
(882, '20 August 2019', '2018', '232', 53, 'Garmin Oregon 750', 54, 'Rahmatul Akbar, S.Hut', '', '', 1, '1'),
(883, '20 August 2019', '2018', '233', 53, 'Garmin Oregon 750', 54, 'Jaka Alimudin, S.Hut', '', '', 1, '1'),
(884, '20 August 2019', '2018', '234', 53, 'Garmin Oregon 750', 54, 'Zulkifli Nurdin, S.Hut', '', '', 1, '1'),
(885, '20 August 2019', '2018', '235', 53, 'Garmin Oregon 750', 54, 'Teuku Fazil Muttaqin, S.E', '', '', 1, '1'),
(886, '20 August 2019', '2018', '236', 53, 'Garmin Oregon 750', 54, 'Septo Ismeldo, S.Hut', '', '', 1, '1'),
(887, '20 August 2019', '2018', '237', 53, 'Garmin Oregon 750', 54, 'Dwinta Ayusartifani, S.P.', '', '', 1, '1'),
(888, '20 August 2019', '2018', '238', 53, 'Garmin Oregon 750', 54, 'Lucy Amena Sembiring, S.T.', '', '', 1, '1'),
(889, '20 August 2019', '2018', '239', 53, 'Garmin Oregon 750', 54, 'Rully Ahmad Awalludin, S.Hut', '', '', 1, '1'),
(890, '20 August 2019', '2018', '240', 53, 'Garmin Oregon 750', 54, 'Astri Restu Pangestika, S.Hut.', '', '', 1, '1'),
(891, '20 August 2019', '2018', '241', 53, 'Garmin Oregon 750', 54, 'Meli Mandasari Harahap, S.P.', '', '', 1, '1'),
(892, '20 August 2019', '2018', '242', 53, 'Garmin Oregon 750', 54, 'Sri Sutriyani, S.T.', '', '', 1, '1'),
(893, '20 August 2019', '2018', '243', 53, 'Garmin Oregon 750', 54, 'Siti Nurdianti Astuti, S.Si.', '', '', 1, '1'),
(894, '20 August 2019', '2018', '244', 53, 'Garmin Oregon 750', 54, 'Junita Yohanna Nurcahaya Siahaan, S.Si.', '', '', 1, '1'),
(895, '20 August 2019', '2018', '245', 53, 'Garmin Oregon 750', 54, 'Dinny Aisyah Alba, S.Hut', '', '', 1, '1'),
(896, '20 August 2019', '2018', '246', 53, 'Garmin Oregon 750', 54, 'Siti Aminah, S.Hut', '', '', 1, '1'),
(897, '20 August 2019', '2018', '247', 53, 'Garmin Oregon 750', 54, 'Risanti Naintiwan, S.Si.', '', '', 1, '1'),
(898, '20 August 2019', '2018', '248', 53, 'Garmin Oregon 750', 54, 'Kantor', '', '', 1, '1'),
(899, '20 August 2019', '2008', '1', 54, 'Verophone', 55, 'R. KEPALA PUSAT', '', '', 1, '1'),
(900, '20 August 2019', '2015', '2', 54, 'Panasonic', 19, 'R. IT', '', '', 1, '1'),
(901, '20 August 2019', '2017', '3', 54, 'Panasonic', 19, '', '', '', 1, '1'),
(902, '20 August 2019', '2017', '13', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(903, '20 August 2019', '2017', '14', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(904, '20 August 2019', '2017', '15', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(905, '20 August 2019', '2017', '16', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(906, '20 August 2019', '2017', '17', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(907, '20 August 2019', '2017', '18', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(908, '20 August 2019', '2017', '19', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(909, '20 August 2019', '2017', '20', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(910, '20 August 2019', '2017', '21', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(911, '20 August 2019', '2017', '22', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(912, '20 August 2019', '2017', '23', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(913, '20 August 2019', '2017', '24', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(914, '20 August 2019', '2017', '25', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(915, '20 August 2019', '2017', '26', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(916, '20 August 2019', '2017', '27', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(917, '20 August 2019', '2017', '28', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(918, '20 August 2019', '2017', '29', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(919, '20 August 2019', '2017', '30', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(920, '20 August 2019', '2017', '31', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(921, '20 August 2019', '2017', '32', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(922, '20 August 2019', '2017', '33', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(923, '20 August 2019', '2017', '34', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(924, '20 August 2019', '2017', '35', 55, 'Panasonic', 19, '', '', '', 1, '1'),
(925, '20 August 2019', '2008', '1', 56, 'Panasonic KX.FT 933', 19, 'R. ARSIP SURAT', '', '', 1, '1'),
(926, '20 August 2019', '2008', '1', 57, 'Meeting Krezt 03A', 56, 'Gudang Sebalah Ruang Rapat 2 Dalam', '', '', 1, '1'),
(927, '20 August 2019', '2015', '2', 57, 'Toa ZW-G810CU', 57, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(928, '20 August 2019', '2013', '1', 58, 'Icon R7', 58, 'BLU P3H', '', '', 1, '1'),
(929, '20 August 2019', '2017', '1', 59, 'Dell ', 59, '', '', '', 1, '1'),
(930, '20 August 2019', '2008', '1', 60, 'Acer Aspire One', 60, 'R. KEPALA PUSAT', '', '', 1, '1'),
(931, '20 August 2019', '2008', '2', 60, 'Acer Aspire One', 60, 'R. KEPALA PUSAT', '', '', 1, '1'),
(932, '20 August 2019', '2008', '3', 60, 'Acer Aspire One', 60, 'R. KEPALA PUSAT', '', '', 1, '1'),
(933, '20 August 2019', '2008', '4', 60, 'Acer Aspire One', 60, 'R. KEPALA PUSAT', '', '', 1, '1'),
(934, '20 August 2019', '2008', '5', 60, 'Acer Aspire One', 60, 'R. KEPALA PUSAT', '', '', 1, '1'),
(935, '20 August 2019', '2008', '6', 60, 'Acer Aspire One', 60, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(936, '20 August 2019', '2008', '7', 60, 'Acer Aspire One', 60, 'R. STAF SUB BAG KEUANGAN I', '', '', 1, '1'),
(937, '20 August 2019', '2008', '8', 60, 'Acer Aspire One', 60, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(938, '20 August 2019', '2008', '9', 60, 'Acer Aspire One', 60, 'Gudang Samping Ruang Rapat 2', '', '', 1, '1'),
(939, '20 August 2019', '2008', '10', 60, 'Acer Aspire One', 60, 'R. STAF BIDANG APK', '', '', 1, '1'),
(940, '20 August 2019', '2008', '11', 60, 'Acer Aspire One', 60, 'Gudang Samping Ruang Rapat 2', '', '', 1, '1'),
(941, '20 August 2019', '2008', '12', 60, 'Acer Aspire One', 60, 'Gudang Samping Ruang Rapat 2', '', '', 1, '1'),
(942, '20 August 2019', '2008', '13', 60, 'Acer Aspire One', 60, 'R. STAF BIDANG APK', '', '', 1, '1'),
(943, '20 August 2019', '2008', '14', 60, 'Acer Aspire One', 60, 'Gudang Samping Ruang Rapat 2', '', '', 1, '1'),
(944, '20 August 2019', '2008', '15', 60, 'Acer Aspire One', 60, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(945, '20 August 2019', '2008', '16', 60, 'Acer Aspire One', 60, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(946, '20 August 2019', '2008', '17', 60, 'Acer Aspire One', 60, 'R. KAPUS', '', '', 1, '1'),
(947, '20 August 2019', '2009', '18', 60, 'HP Pavilion G3435d', 61, 'R. KEPALA PUSAT', '', '', 1, '1'),
(948, '20 August 2019', '2009', '19', 60, 'HP Pavilion G3435d', 61, 'R. KEPALA PUSAT', '', '', 1, '1'),
(949, '20 August 2019', '2009', '20', 60, 'HP Pavilion G3435d', 61, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(950, '20 August 2019', '2009', '21', 60, 'HP Pavilion G3435d', 61, 'Gudang Samping Ruang Rapat 2', '', '', 1, '1'),
(951, '20 August 2019', '2009', '22', 60, 'HP Pavilion G3435d', 61, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(952, '20 August 2019', '2012', '23', 60, 'HP Pavilion S5-1120 D', 61, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(953, '20 August 2019', '2012', '24', 60, 'HP Pavilion S5-1120 D', 61, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(954, '20 August 2019', '2012', '25', 60, 'Dell XPS 8300', 59, 'R. STAF BIDANG APK', '', '', 1, '1'),
(955, '20 August 2019', '2012', '26', 60, 'HP Pavilion Slimelines 5', 61, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(956, '20 August 2019', '2015', '27', 60, 'HP Pavilion 23 AIO', 61, 'R. KAPUS', '', '', 1, '1'),
(957, '20 August 2019', '2015', '28', 60, 'HP Pavilion 23 AIO', 61, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(958, '20 August 2019', '2015', '29', 60, 'HP Pavilion 23 AIO', 61, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(959, '20 August 2019', '2015', '30', 60, 'HP Pavilion 23 AIO', 61, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(960, '20 August 2019', '2015', '31', 60, 'HP Pavilion 23 AIO', 61, 'R. STAF SUB BAG KEUANGAN 1', '', '', 1, '1'),
(961, '20 August 2019', '2015', '32', 60, 'HP Pavilion 23 AIO', 61, 'R. STAF BIDANG APK', '', '', 1, '1'),
(962, '20 August 2019', '2015', '33', 60, 'HP Pavilion 23 AIO', 61, 'R. STAF BIDANG APK', '', '', 1, '1'),
(963, '20 August 2019', '2015', '34', 60, 'HP Pavilion 23 AIO', 61, 'R. STAF BIDANG APK', '', '', 1, '1'),
(964, '20 August 2019', '2015', '35', 60, 'HP Pavilion 23 AIO', 61, 'R. STAF BIDANG APK', '', '', 1, '1'),
(965, '20 August 2019', '2015', '36', 60, 'HP Pavilion 23 AIO', 61, 'R. STAF BIDANG APK', '', '', 1, '1'),
(966, '20 August 2019', '2015', '37', 60, 'HP Pavilion 23 AIO', 61, 'R. STAF BIDANG APK', '', '', 1, '1'),
(967, '20 August 2019', '2015', '38', 60, 'HP Pavilion 23 AIO', 61, 'R. ICAB1D', '', '', 1, '1'),
(968, '20 August 2019', '2015', '39', 60, 'HP Pavilion 23 AIO', 61, 'R. KABID OPS', '', '', 1, '1'),
(969, '20 August 2019', '2015', '40', 60, 'HP Pavilion 23 AIO', 61, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(970, '20 August 2019', '2015', '41', 60, 'HP Pavilion 23 AIO', 61, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(971, '20 August 2019', '2015', '42', 60, 'HP Pavilion 23 AIO', 61, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(972, '20 August 2019', '2015', '43', 60, 'HP Pavilion 23 AIO', 61, 'R. KASUBBID ANALSIS FINANSIAL', '', '', 1, '1'),
(973, '20 August 2019', '2015', '44', 60, 'HP Pavilion 23 AIO', 61, 'R. KASUBBID ANALISIS TEKNIS', '', '', 1, '1'),
(974, '20 August 2019', '2015', '45', 60, 'HP Pavilion 23 AIO', 61, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(975, '20 August 2019', '2015', '46', 60, 'HP Pavilion 23 AIO', 61, 'R. KASUBBID MONEV', '', '', 1, '1'),
(976, '20 August 2019', '2015', '47', 60, 'HP Pavilion 23 AIO', 61, 'R. KASUBBID HUKUM & PERIICATAN', '', '', 1, '1'),
(977, '20 August 2019', '2015', '48', 60, 'HP Pavilion 23 AIO', 61, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(978, '20 August 2019', '2015', '49', 60, 'HP Pavilion 23 AIO', 61, 'R. FINANCIAL (BENDAHARA)', '', '', 1, '1'),
(979, '20 August 2019', '2016', '50', 60, 'HP Elitebook', 61, 'R. SEKRETARIS KEPALA PUSAT', '', '', 1, '1'),
(980, '20 August 2019', '2016', '51', 60, 'HP Elitebook', 61, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(981, '20 August 2019', '2016', '52', 60, 'HP Elitebook', 61, 'R. STAF SUB BAG KEUANGAN 1', '', '', 1, '1'),
(982, '20 August 2019', '2016', '53', 60, 'HP Elitebook', 61, 'R. STAF SUB BAG KEUANGAN 1', '', '', 1, '1'),
(983, '20 August 2019', '2016', '54', 60, 'HP Elitebook', 61, 'R. KASUBBAG PERENCANAAN & KEUANGAN', '', '', 1, '1'),
(984, '20 August 2019', '2016', '55', 60, 'HP Elitebook', 61, 'R. STAF BIDANG APK', '', '', 1, '1'),
(985, '20 August 2019', '2016', '56', 60, 'HP Elitebook', 61, 'R. KABAG KEUM', '', '', 1, '1'),
(986, '20 August 2019', '2016', '57', 60, 'HP Elitebook', 61, 'R. STAF BIDANG APK', '', '', 1, '1'),
(987, '20 August 2019', '2016', '58', 60, 'HP Elitebook', 61, 'R. STAF BIDANG APK', '', '', 1, '1'),
(988, '20 August 2019', '2016', '59', 60, 'HP Elitebook', 61, 'R. STAF BIDANG APK', '', '', 1, '1'),
(989, '20 August 2019', '2016', '60', 60, 'HP Elitebook', 61, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(990, '20 August 2019', '2016', '61', 60, 'HP Elitebook', 61, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(991, '20 August 2019', '2016', '62', 60, 'HP Elitebook', 61, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(992, '20 August 2019', '2016', '63', 60, 'HP Elitebook', 61, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(993, '20 August 2019', '2016', '64', 60, 'HP Elitebook', 61, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(994, '20 August 2019', '2016', '65', 60, 'HP Elitebook', 61, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(995, '20 August 2019', '2016', '66', 60, 'HP Elitebook', 61, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(996, '20 August 2019', '2016', '67', 60, 'HP Elitebook', 61, 'R. FINANCIAL (BENDAHARA)', '', '', 1, '1'),
(997, '20 August 2019', '2016', '68', 60, 'HP Elitebook', 61, 'R. FINANCIAL (BENDAHARA)', '', '', 1, '1'),
(998, '20 August 2019', '2016', '69', 60, 'HP Elitebook', 61, 'R. IT', '', '', 1, '1'),
(999, '20 August 2019', '2016', '70', 60, 'HP Elitebook', 61, 'R. STAF SUB BAG KEUANGAN I', '', '', 1, '1'),
(1000, '20 August 2019', '2016', '71', 60, 'HP Elitebook', 61, 'R. IT', '', '', 1, '1'),
(1001, '20 August 2019', '2016', '72', 60, 'HP Elitebook', 61, 'R. IT', '', '', 1, '1'),
(1002, '20 August 2019', '2016', '73', 60, 'HP Elitebook', 61, 'R. IT', '', '', 1, '1'),
(1003, '20 August 2019', '2016', '74', 60, 'HP Elitebook', 61, 'R. IT', '', '', 1, '1'),
(1004, '20 August 2019', '2017', '75', 60, 'HP Pavilion AIO 23 Tuchscreen', 61, 'R. STAF SUB BAG KEUANGAN I', '', '', 1, '1'),
(1005, '20 August 2019', '2017', '76', 60, 'HP Pavilion AIO 23 Tuchscreen', 61, 'R. STAF SUB BAG KEUANGAN', '', '', 1, '1'),
(1006, '20 August 2019', '2017', '77', 60, 'HP Pavilion AIO 23 Tuchscreen', 61, 'R. STAF SUB BAG KEUANGAN 1', '', '', 1, '1'),
(1007, '20 August 2019', '2017', '78', 60, 'HP Pavilion AIO 23 Tuchscreen', 61, 'R. STAF SUB BAG KEUANGAN I', '', '', 1, '1'),
(1008, '20 August 2019', '2017', '79', 60, 'HP Pavilion AIO 23 Tuchscreen', 61, '', '', '', 1, '1'),
(1009, '20 August 2019', '2018', '80', 60, 'Dell Inspirion', 59, '', '', '', 1, '1'),
(1010, '20 August 2019', '2018', '81', 60, 'Dell Inspirion', 59, '', '', '', 1, '1'),
(1011, '20 August 2019', '2018', '82', 60, 'Dell Inspirion', 59, '', '', '', 1, '1'),
(1012, '20 August 2019', '2018', '83', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1013, '20 August 2019', '2018', '84', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1014, '20 August 2019', '2018', '85', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1015, '20 August 2019', '2018', '86', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1016, '20 August 2019', '2018', '87', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1017, '20 August 2019', '2018', '88', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1018, '20 August 2019', '2018', '89', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1019, '20 August 2019', '2018', '90', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1020, '20 August 2019', '2018', '91', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1021, '20 August 2019', '2018', '92', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1022, '20 August 2019', '2018', '93', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1023, '20 August 2019', '2018', '94', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1024, '20 August 2019', '2018', '95', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1025, '20 August 2019', '2018', '96', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1026, '20 August 2019', '2018', '97', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1027, '20 August 2019', '2018', '98', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1028, '20 August 2019', '2018', '99', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1029, '20 August 2019', '2018', '100', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1030, '20 August 2019', '2018', '101', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1031, '20 August 2019', '2018', '102', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1032, '20 August 2019', '2018', '103', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1033, '20 August 2019', '2018', '104', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1034, '20 August 2019', '2018', '105', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1035, '20 August 2019', '2018', '106', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1036, '20 August 2019', '2018', '107', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1037, '20 August 2019', '2018', '108', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1038, '20 August 2019', '2018', '109', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1039, '20 August 2019', '2018', '110', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1040, '20 August 2019', '2018', '111', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1041, '20 August 2019', '2018', '112', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1042, '20 August 2019', '2018', '113', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1043, '20 August 2019', '2018', '114', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1044, '20 August 2019', '2018', '115', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1045, '20 August 2019', '2018', '116', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1046, '20 August 2019', '2018', '117', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1047, '20 August 2019', '2018', '118', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1048, '20 August 2019', '2018', '119', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1049, '20 August 2019', '2018', '120', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1050, '20 August 2019', '2018', '121', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1051, '20 August 2019', '2018', '122', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1052, '20 August 2019', '2018', '123', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1053, '20 August 2019', '2018', '124', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1054, '20 August 2019', '2018', '125', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1055, '20 August 2019', '2018', '126', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1056, '20 August 2019', '2018', '127', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1057, '20 August 2019', '2018', '128', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1058, '20 August 2019', '2018', '129', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1059, '20 August 2019', '2018', '130', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1060, '20 August 2019', '2018', '131', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1061, '20 August 2019', '2018', '132', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1062, '20 August 2019', '2018', '133', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1');
INSERT INTO `barang_aset_sub` (`id_aset_sub`, `tanggal_input`, `tahun`, `seri`, `id_aset`, `detail_aset`, `id_merk_aset`, `penguasaan`, `keterangan`, `gambar`, `id_satuan_aset`, `grup`) VALUES
(1063, '20 August 2019', '2018', '134', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1064, '20 August 2019', '2018', '135', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1065, '20 August 2019', '2018', '136', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1066, '20 August 2019', '2018', '137', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1067, '20 August 2019', '2018', '138', 60, 'Lenovo AIO Ideacentre', 62, '', '', '', 1, '1'),
(1068, '20 August 2019', '2008', '1', 61, 'Sony Vaio', 21, 'RUANG KAPUS P2H', '', '', 1, '1'),
(1069, '20 August 2019', '2008', '2', 61, 'Sony Vaio', 21, 'RUANG KABID PKU', '', '', 1, '1'),
(1070, '20 August 2019', '2008', '3', 61, 'Toshiba Satelite L300', 20, 'Brankas Barang', '', '', 1, '1'),
(1071, '20 August 2019', '2008', '4', 61, 'Toshiba Satelite L300', 20, 'Brankas Barang', '', '', 1, '1'),
(1072, '20 August 2019', '2008', '5', 61, 'Toshiba Satelite L300', 20, 'Brankas Barang', '', '', 1, '1'),
(1073, '20 August 2019', '2008', '6', 61, 'Toshiba Satelite L300', 20, 'Brankas Barang', '', '', 1, '1'),
(1074, '20 August 2019', '2009', '7', 61, 'Acer Travel Mate 6293', 60, 'KABAG TATA USAHA', '', '', 1, '1'),
(1075, '20 August 2019', '2009', '8', 61, 'Acer Travel Mate 6293', 60, 'KASI PENYALURAN PENGEMBAL1AN PINJAMAN (P3)', '', '', 1, '1'),
(1076, '20 August 2019', '2011', '9', 61, 'Lenovo Think Pad', 62, 'PUSAT PEMBIAYAAN PEMBANGUNAN HUTAN', '', '', 1, '1'),
(1077, '20 August 2019', '2011', '10', 61, 'Lenovo Think Pad', 62, 'PUSAT PEMBIAYAAN PEMBANGUNAN HUTAN', '', '', 1, '1'),
(1078, '20 August 2019', '2011', '11', 61, 'Lenovo Think Pad', 62, 'PUSAT PEMBIAYAAN PEMBANGUNAN HUTAN', '', '', 1, '1'),
(1079, '20 August 2019', '2012', '12', 61, 'Acer Travel Mate 6293', 60, '', '', '', 1, '1'),
(1080, '20 August 2019', '2012', '13', 61, 'Acer Travel Mate 8372', 60, '', '', '', 1, '1'),
(1081, '20 August 2019', '2012', '14', 61, 'Fujitsu Lifebook PH701', 63, '', '', '', 1, '1'),
(1082, '20 August 2019', '2012', '15', 61, 'Fujitsu Lifebook PH701', 63, '', '', '', 1, '1'),
(1083, '20 August 2019', '2012', '16', 61, 'Fujitsu Lifebook PH701', 63, '', '', '', 1, '1'),
(1084, '20 August 2019', '2012', '17', 61, 'Fujitsu Lifebook PH701', 63, '', '', '', 1, '1'),
(1085, '20 August 2019', '2012', '18', 61, 'Lenovo Think Pad X220 4AA', 62, '', '', '', 1, '1'),
(1086, '20 August 2019', '2012', '19', 61, 'Lenovo Z480', 62, 'APLIKASI AKUNTANSI', '', '', 1, '1'),
(1087, '20 August 2019', '2015', '20', 61, 'Lenovo Think Pad X1 XID', 62, 'R. KEPALA PUSAT', '', '', 1, '1'),
(1088, '20 August 2019', '2015', '21', 61, 'Lenovo Think Pad X1 XID', 62, 'R. KEPALA PUSAT', '', '', 1, '1'),
(1089, '20 August 2019', '2015', '22', 61, 'Lenovo Think Pad X1 XID', 62, 'R. KEPALA PUSAT', '', '', 1, '1'),
(1090, '20 August 2019', '2015', '23', 61, 'Lenovo Think Pad X1 XID', 62, 'R. KEPALA PUSAT', '', '', 1, '1'),
(1091, '20 August 2019', '2015', '24', 61, 'Lenovo Think Pad X1 XID', 62, 'R. KEPALA PUSAT', '', '', 1, '1'),
(1092, '20 August 2019', '2015', '25', 61, 'Lenovo Think Pad X1 XID', 62, 'R. KEPALA PUSAT', '', '', 1, '1'),
(1093, '20 August 2019', '2015', '26', 61, 'Lenovo Think Pad X1 XID', 62, 'R. KEPALA PUSAT', '', '', 1, '1'),
(1094, '20 August 2019', '2015', '27', 61, 'Lenovo Think Pad X1 XID', 62, 'R. KEPALA PUSAT', '', '', 1, '1'),
(1095, '20 August 2019', '2016', '28', 61, 'HP Elitebook Silver', 61, '', '', '', 1, '1'),
(1096, '20 August 2019', '2016', '29', 61, 'HP Elitebook Silver', 61, '', '', '', 1, '1'),
(1097, '20 August 2019', '2016', '30', 61, 'HP Elitebook Silver', 61, '', '', '', 1, '1'),
(1098, '20 August 2019', '2016', '31', 61, 'HP Elitebook Silver', 61, '', '', '', 1, '1'),
(1099, '20 August 2019', '2017', '32', 61, 'HP NB 240', 61, '', '', '', 1, '1'),
(1100, '20 August 2019', '2017', '33', 61, 'HP NB 240', 61, '', '', '', 1, '1'),
(1101, '20 August 2019', '2017', '34', 61, 'HP NB 240', 61, '', '', '', 1, '1'),
(1102, '20 August 2019', '2017', '35', 61, 'HP NB 240', 61, '', '', '', 1, '1'),
(1103, '20 August 2019', '2017', '36', 61, 'HP NB 240', 61, '', '', '', 1, '1'),
(1104, '20 August 2019', '2017', '37', 61, 'HP NB 240', 61, '', '', '', 1, '1'),
(1105, '20 August 2019', '2018', '38', 61, 'Acer Spin 5', 60, '', '', '', 1, '1'),
(1106, '20 August 2019', '2018', '39', 61, 'Acer Spin 5', 60, '', '', '', 1, '1'),
(1107, '20 August 2019', '2018', '40', 61, 'Acer Spin 5', 60, '', '', '', 1, '1'),
(1108, '20 August 2019', '2018', '41', 61, 'Acer Spin 5', 60, '', '', '', 1, '1'),
(1109, '20 August 2019', '2018', '42', 61, 'Acer Spin 5', 60, '', '', '', 1, '1'),
(1110, '20 August 2019', '2008', '1', 62, 'Cannon Inkjet Potable', 64, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(1111, '20 August 2019', '2008', '2', 62, 'Cannon Inkjet Potable', 64, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(1112, '20 August 2019', '2008', '3', 62, 'HP Laserjet CP 1505', 65, 'Gudang Samping Ruang Rapat 2', '', '', 1, '1'),
(1113, '20 August 2019', '2008', '4', 62, 'HP Laserjet CP 1505', 65, 'R. ICAPUS', '', '', 1, '1'),
(1114, '20 August 2019', '2008', '5', 62, 'HP Laserjet CP 1505', 65, 'R. FINANCIAL (BENDAHARA)', '', '', 1, '1'),
(1115, '20 August 2019', '2008', '6', 62, 'HP Laserjet CP 1505', 65, 'R. STAF SUB BAG KEUANGAN I', '', '', 1, '1'),
(1116, '20 August 2019', '2008', '7', 62, 'HP Laserjet CP 1505', 65, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(1117, '20 August 2019', '2008', '8', 62, 'HP Laserjet CP 1505', 65, 'R. FINANCIAL (BENDAHARA)', '', '', 1, '1'),
(1118, '20 August 2019', '2009', '9', 62, 'HP Laserjet P 2015d', 65, 'R. KEPALA PUSAT', '', '', 1, '1'),
(1119, '20 August 2019', '2011', '11', 62, 'HP 470 B Portable', 61, 'PUSAT PEMBIAYAAN PEMBANGUNAN HUTAN', '', '', 1, '1'),
(1120, '20 August 2019', '2011', '12', 62, 'HP 470 B Portable', 61, 'PUSAT PEMBIAYAAN PEMBANGUNAN HUTAN', '', '', 1, '1'),
(1121, '20 August 2019', '2011', '13', 62, 'HP Officejet 4500N', 66, 'PUSAT PEMBIAYAAN PEMBANGUNAN HUTAN', '', '', 1, '1'),
(1122, '20 August 2019', '2011', '14', 62, 'HP Officejet 4500N', 66, 'PUSAT PEMBIAYAAN PEMBANGUNAN HUTAN', '', '', 1, '1'),
(1123, '20 August 2019', '2012', '15', 62, 'Canon Pixma MP287', 47, '', '', '', 1, '1'),
(1124, '20 August 2019', '2012', '16', 62, 'Canon Pixma MP287', 47, '', '', '', 1, '1'),
(1125, '20 August 2019', '2012', '17', 62, 'Canon Pixma iP2770', 47, '', '', '', 1, '1'),
(1126, '20 August 2019', '2012', '18', 62, 'Cannon Pixma iP2770', 47, 'R. STAF BIDANG APK', '', '', 1, '1'),
(1127, '20 August 2019', '2015', '19', 62, 'HP Laserjet P1102w', 65, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(1128, '20 August 2019', '2015', '20', 62, 'HP Laserjet P1102w', 65, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(1129, '20 August 2019', '2015', '21', 62, 'HP Laserjet P1102w', 65, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(1130, '20 August 2019', '2015', '22', 62, 'HP Laserjet P1102w', 65, 'R. KASUBBAG PERENCANAAN & KEUANGAN', '', '', 1, '1'),
(1131, '20 August 2019', '2015', '23', 62, 'HP Laserjet P1102w', 65, 'R. STAF BIDANG APK', '', '', 1, '1'),
(1132, '20 August 2019', '2015', '24', 62, 'HP Laserjet P1102w', 65, 'R. KABAG KEUM', '', '', 1, '1'),
(1133, '20 August 2019', '2015', '25', 62, 'HP Laserjet P1102w', 65, 'R. KABID APK', '', '', 1, '1'),
(1134, '20 August 2019', '2015', '26', 62, 'HP Laserjet P1102w', 65, 'R. STAF BIDANG APK', '', '', 1, '1'),
(1135, '20 August 2019', '2015', '27', 62, 'HP Laserjet P1102w', 65, 'R. STAF BIDANG APK', '', '', 1, '1'),
(1136, '20 August 2019', '2015', '28', 62, 'HP Laserjet P1102w', 65, 'R. STAF BIDANG APIL', '', '', 1, '1'),
(1137, '20 August 2019', '2015', '29', 62, 'HP Laserjet P1102w', 65, 'R. KAKI) OPS', '', '', 1, '1'),
(1138, '20 August 2019', '2015', '30', 62, 'HP Laserjet P1102w', 65, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(1139, '20 August 2019', '2015', '31', 62, 'HP Laserjet P1102w', 65, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(1140, '20 August 2019', '2015', '32', 62, 'HP Laserjet P1102w', 65, 'R. KASUBBID HUKUM & PERIKATAN', '', '', 1, '1'),
(1141, '20 August 2019', '2015', '33', 62, 'HP Laserjet P1102w', 65, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(1142, '20 August 2019', '2015', '34', 62, 'HP Laserjet P1102w', 65, 'R. FINANCIAL (BENDAHARA)', '', '', 1, '1'),
(1143, '20 August 2019', '2015', '35', 62, 'HP Laserjet P1102w', 65, 'R. IT', '', '', 1, '1'),
(1144, '20 August 2019', '2015', '36', 62, 'HP Laserjet CP 1025 color', 65, 'R. KASUBBID MONEV', '', '', 1, '1'),
(1145, '20 August 2019', '2015', '37', 62, 'HP Laserjet CP 1025 color', 65, 'R. STAF BIDANG APK', '', '', 1, '1'),
(1146, '20 August 2019', '2015', '38', 62, 'HP Laserjet CP 1025 color', 65, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(1147, '20 August 2019', '2015', '39', 62, 'HP Laserjet CP 1025 color', 65, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(1148, '20 August 2019', '2015', '40', 62, 'HP Officejet 150 Mobile', 66, 'R. KASUBBID ANALISIS PENJAMAN', '', '', 1, '1'),
(1149, '20 August 2019', '2015', '41', 62, 'HP Officejet 150 Mobile', 66, 'R. KASUBBID ANALISIS BAGI HASIL & SYARIAH', '', '', 1, '1'),
(1150, '20 August 2019', '2015', '42', 62, 'HP Officejet 150 Mobile', 66, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(1151, '20 August 2019', '2015', '43', 62, 'HP Officejet 150 Mobile', 66, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(1152, '20 August 2019', '2015', '44', 62, 'HP Officejet 150 Mobile', 66, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(1153, '20 August 2019', '2015', '45', 62, 'HP Officejet 150 Mobile', 66, 'URAIAN RUANG TIDAK ADA', '', '', 1, '1'),
(1154, '20 August 2019', '2016', '46', 62, 'HP Laserjet P1102', 65, 'R. SEKRETARIS KEPALA PUSAT', '', '', 1, '1'),
(1155, '20 August 2019', '2016', '47', 62, 'HP Laserjet P1102', 65, 'R. STAF SUB BAG KEUANGAN 1', '', '', 1, '1'),
(1156, '20 August 2019', '2016', '48', 62, 'HP Laserjet P1102', 65, 'R. KASUBBAG UMUM', '', '', 1, '1'),
(1157, '20 August 2019', '2016', '49', 62, 'HP Laserjet P1102', 65, 'Gudang Samping Ruang Rapat 2', '', '', 1, '1'),
(1158, '20 August 2019', '2016', '50', 62, 'HP Laserjet P1102', 65, 'R. STAF BIDANG APK', '', '', 1, '1'),
(1159, '20 August 2019', '2016', '51', 62, 'HP Laserjet P1102', 65, 'R. KASUBBID ANALISIS TEKNIS', '', '', 1, '1'),
(1160, '20 August 2019', '2016', '52', 62, 'HP Laserjet P1102', 65, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(1161, '20 August 2019', '2016', '53', 62, 'HP Laserjet P1102', 65, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(1162, '20 August 2019', '2016', '54', 62, 'HP Laserjet P1102', 65, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(1163, '20 August 2019', '2016', '55', 62, 'HP Laserjet P1102', 65, 'R. STAF SUB BAG KEUANGAN 1', '', '', 1, '1'),
(1164, '20 August 2019', '2017', '56', 62, 'Fujitsu Dot Matrix', 63, '', '', '', 1, '1'),
(1165, '20 August 2019', '2017', '57', 62, 'Fujitsu Dot Matrix', 63, '', '', '', 1, '1'),
(1166, '20 August 2019', '2017', '58', 62, 'Fujitsu Dot Matrix', 63, '', '', '', 1, '1'),
(1167, '20 August 2019', '2017', '59', 62, 'Fujitsu Dot Matrix', 63, '', '', '', 1, '1'),
(1168, '20 August 2019', '2017', '60', 62, 'Fujitsu Dot Matrix', 63, '', '', '', 1, '1'),
(1169, '20 August 2019', '2017', '61', 62, 'Fujitsu Dot Matrix', 63, '', '', '', 1, '1'),
(1170, '20 August 2019', '2018', '66', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1171, '20 August 2019', '2018', '67', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1172, '20 August 2019', '2018', '68', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1173, '20 August 2019', '2018', '69', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1174, '20 August 2019', '2018', '70', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1175, '20 August 2019', '2018', '71', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1176, '20 August 2019', '2018', '72', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1177, '20 August 2019', '2018', '73', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1178, '20 August 2019', '2018', '74', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1179, '20 August 2019', '2018', '75', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1180, '20 August 2019', '2018', '76', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1181, '20 August 2019', '2018', '77', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1182, '20 August 2019', '2018', '78', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1183, '20 August 2019', '2018', '79', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1184, '20 August 2019', '2018', '80', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1185, '20 August 2019', '2018', '81', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1186, '20 August 2019', '2018', '82', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1187, '20 August 2019', '2018', '83', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1188, '20 August 2019', '2018', '84', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1189, '20 August 2019', '2018', '85', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1190, '20 August 2019', '2018', '86', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1191, '20 August 2019', '2018', '87', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1192, '20 August 2019', '2018', '88', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1193, '20 August 2019', '2018', '89', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1194, '20 August 2019', '2018', '90', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1195, '20 August 2019', '2018', '91', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1196, '20 August 2019', '2018', '92', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1197, '20 August 2019', '2018', '93', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1198, '20 August 2019', '2018', '94', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1199, '20 August 2019', '2018', '95', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1200, '20 August 2019', '2018', '96', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1201, '20 August 2019', '2018', '97', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1202, '20 August 2019', '2018', '98', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1203, '20 August 2019', '2018', '99', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1204, '20 August 2019', '2018', '100', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1205, '20 August 2019', '2018', '101', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1206, '20 August 2019', '2018', '102', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1207, '20 August 2019', '2018', '103', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1208, '20 August 2019', '2018', '104', 62, 'HP Laserjet M12w', 65, '', '', '', 1, '1'),
(1209, '20 August 2019', '2018', '105', 62, 'Epson A3', 23, '', '', '', 1, '1'),
(1210, '20 August 2019', '2018', '106', 62, 'Epson A3', 23, '', '', '', 1, '1'),
(1211, '20 August 2019', '2018', '107', 62, 'Epson A3', 23, '', '', '', 1, '1'),
(1212, '20 August 2019', '2018', '108', 62, 'Epson A3', 23, '', '', '', 1, '1'),
(1213, '20 August 2019', '2018', '109', 62, 'Epson A3', 23, '', '', '', 1, '1'),
(1214, '20 August 2019', '2018', '110', 62, 'Epson A3', 23, '', '', '', 1, '1'),
(1215, '20 August 2019', '2018', '111', 62, 'Epson A3', 23, '', '', '', 1, '1'),
(1216, '20 August 2019', '2018', '112', 62, 'Epson A3', 23, '', '', '', 1, '1'),
(1217, '20 August 2019', '2012', '1', 63, 'Pulstek Opticard 821', 67, '', '', '', 1, '1'),
(1218, '20 August 2019', '2012', '2', 63, 'Pulstek Opticard 821', 67, '', '', '', 1, '1'),
(1219, '20 August 2019', '2013', '3', 63, 'HP Officejet', 66, 'R. STAF SUBBAG KEUANGAN', '', '', 1, '1'),
(1220, '20 August 2019', '2015', '4', 63, 'Fujitsu Scan Snap', 68, 'R. STAF BIDANG OPS', '', '', 1, '1'),
(1221, '20 August 2019', '2015', '5', 63, 'Fujitsu Scan Snap', 68, 'R. STAF BIDANG APK', '', '', 1, '1'),
(1222, '20 August 2019', '2015', '6', 63, 'Fujitsu Scan Snap', 68, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(1223, '20 August 2019', '2016', '7', 63, 'Fujitsu', 63, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(1224, '20 August 2019', '2016', '8', 63, 'Fujitsu', 63, 'R. STAF BAGIAN KEUM', '', '', 1, '1'),
(1225, '20 August 2019', '2018', '9', 63, 'Kodak', 69, '', '', '', 1, '1'),
(1226, '20 August 2019', '2018', '10', 63, 'Kodak', 69, '', '', '', 1, '1'),
(1227, '20 August 2019', '2018', '11', 63, 'Kodak', 69, '', '', '', 1, '1'),
(1228, '20 August 2019', '2018', '12', 63, 'Kodak', 69, '', '', '', 1, '1'),
(1229, '20 August 2019', '2018', '13', 63, 'Fujitsu Scan Snap', 68, '', '', '', 1, '1'),
(1230, '20 August 2019', '2018', '14', 63, 'Fujitsu Scan Snap', 68, '', '', '', 1, '1'),
(1231, '20 August 2019', '2012', '1', 64, 'IBM System X3400 M3-Q6A', 70, 'R. IT', '', '', 1, '1'),
(1232, '20 August 2019', '2017', '2', 64, 'Dell', 59, '', '', '', 1, '1'),
(1233, '20 August 2019', '2017', '3', 64, 'Dell', 59, '', '', '', 1, '1'),
(1234, '20 August 2019', '2017', '1', 65, 'APC', 51, '', '', '', 1, '1'),
(1235, '20 August 2019', '2009', '1', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1236, '20 August 2019', '2009', '2', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1237, '20 August 2019', '2009', '3', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1238, '20 August 2019', '2009', '4', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1239, '20 August 2019', '2009', '5', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1240, '20 August 2019', '2009', '6', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1241, '20 August 2019', '2009', '7', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1242, '20 August 2019', '2009', '8', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1243, '20 August 2019', '2009', '9', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1244, '20 August 2019', '2009', '10', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1245, '20 August 2019', '2009', '11', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1246, '20 August 2019', '2009', '12', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1247, '20 August 2019', '2009', '13', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1248, '20 August 2019', '2009', '14', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1249, '20 August 2019', '2009', '15', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1250, '20 August 2019', '2009', '16', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1251, '20 August 2019', '2009', '17', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1252, '20 August 2019', '2009', '18', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1253, '20 August 2019', '2009', '19', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1254, '20 August 2019', '2009', '20', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1255, '20 August 2019', '2009', '21', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1256, '20 August 2019', '2009', '22', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1257, '20 August 2019', '2009', '23', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1258, '20 August 2019', '2009', '24', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1259, '20 August 2019', '2009', '25', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1260, '20 August 2019', '2009', '26', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1261, '20 August 2019', '2009', '27', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1262, '20 August 2019', '2009', '28', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1263, '20 August 2019', '2009', '29', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1264, '20 August 2019', '2009', '30', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1265, '20 August 2019', '2009', '31', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1266, '20 August 2019', '2009', '32', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1267, '20 August 2019', '2009', '33', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1268, '20 August 2019', '2009', '34', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1269, '20 August 2019', '2009', '35', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1270, '20 August 2019', '2009', '36', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1271, '20 August 2019', '2009', '37', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1272, '20 August 2019', '2009', '38', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1273, '20 August 2019', '2009', '39', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1274, '20 August 2019', '2009', '40', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1275, '20 August 2019', '2009', '41', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1276, '20 August 2019', '2009', '42', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1277, '20 August 2019', '2009', '43', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1278, '20 August 2019', '2009', '44', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1279, '20 August 2019', '2009', '45', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1280, '20 August 2019', '2009', '46', 66, 'Buku Perpustakaan', 10, 'Lemari Barang UMUM', '', '', 1, '1'),
(1281, '20 August 2019', '2014', '1', 67, 'Gedung dan Bangunan Dalam Renovasi', 10, 'BLU PUSAT P2H', '', '', 3, '1'),
(1282, '20 August 2019', '2012', '1', 68, 'Sistem Aplikasi Akuntansi', 75, 'Laptop Aplikasi Sistem Akuntansi', '', '', 1, '1'),
(1283, '20 August 2019', '2012', '2', 68, 'Windows 7', 71, 'Laptop Aplikasi Sistem Akuntansi', '', '', 1, '1'),
(1284, '20 August 2019', '2012', '3', 68, 'Windows Office Home Business', 72, 'Laptop Aplikasi Sistem Akuntansi', '', '', 1, '1'),
(1285, '20 August 2019', '2013', '4', 68, 'Aplikasi Penilaian Proposal FDB', 76, 'Laptop SIMAK BMN', '', '', 1, '1'),
(1286, '20 August 2019', '2013', '5', 68, 'Aplikasi Perjanjian Pinjaman HR', 77, 'Laptop SIMAK BMN', '', '', 1, '1'),
(1287, '20 August 2019', '2017', '6', 68, 'Windows Server', 73, 'Ruang Server', '', '', 1, '1'),
(1288, '20 August 2019', '2017', '7', 68, 'Aplikasi SIMPEL FDB', 78, 'Ruang Server', '', '', 1, '1'),
(1289, '20 August 2019', '2017', '8', 68, 'Windows Server', 73, 'Ruang Server', '', '', 1, '1'),
(1290, '20 August 2019', '2017', '9', 68, 'Windoqws Office Home & Business 2016', 72, 'Brankas Barang Umum', '', '', 1, '1'),
(1291, '20 August 2019', '2017', '10', 68, 'Windoqws Office Home & Business 2016', 72, 'Brankas Barang Umum', '', '', 1, '1'),
(1292, '20 August 2019', '2017', '11', 68, 'Windoqws Office Home & Business 2016', 72, 'Brankas Barang Umum', '', '', 1, '1'),
(1293, '20 August 2019', '2017', '12', 68, 'Windoqws Office Home & Business 2016', 72, 'Brankas Barang Umum', '', '', 1, '1'),
(1294, '20 August 2019', '2017', '13', 68, 'Windoqws Office Home & Business 2016', 72, 'Brankas Barang Umum', '', '', 1, '1'),
(1295, '20 August 2019', '2017', '14', 68, 'Windoqws Office Home & Business 2016', 72, 'Brankas Barang Umum', '', '', 1, '1'),
(1296, '20 August 2019', '2017', '15', 68, 'Windoqws Office Home & Business 2016', 72, 'Brankas Barang Umum', '', '', 1, '1'),
(1297, '20 August 2019', '2017', '16', 68, 'Windoqws Office Home & Business 2016', 72, 'Brankas Barang Umum', '', '', 1, '1'),
(1298, '20 August 2019', '2017', '17', 68, 'SQL Server', 74, 'Ruang Server', '', '', 1, '1');

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
(1, 'Suzuki'),
(2, 'Daihatsu'),
(3, 'Mitsubishi'),
(4, 'Honda'),
(5, 'Yamaha'),
(6, 'Placom'),
(7, 'Takemura'),
(8, 'Nakajima'),
(9, 'Isometri'),
(10, 'Lokal'),
(11, 'Daiciban'),
(12, 'Ichiban'),
(13, 'Elite'),
(14, 'Hikvision'),
(15, 'Gemet'),
(16, 'Rider'),
(17, 'Amano EX'),
(18, 'Magic MP'),
(19, 'Panasonic'),
(20, 'Toshiba'),
(21, 'Sony'),
(22, 'Infocus'),
(23, 'Epson'),
(24, 'Screen Motorized 70'),
(25, 'Chairman'),
(26, 'Subaru'),
(27, 'Victory'),
(28, 'Seiko'),
(29, 'Sharp'),
(30, 'Polytron'),
(31, 'Daikin'),
(32, 'LG'),
(33, 'Samsung'),
(34, 'DBX EQ'),
(35, 'BMB'),
(36, 'Proel'),
(37, 'Geisler'),
(38, 'Sierra Wireless'),
(39, 'Shure'),
(40, 'Any Song'),
(41, 'Miyako'),
(42, 'Tempat Sampah Kayu'),
(43, 'ICA'),
(44, 'Prolink'),
(45, 'Wisdom'),
(46, 'Hardcase'),
(47, 'Canon'),
(48, 'Fuji Finepix'),
(49, 'Olympus'),
(50, 'Nikon'),
(51, 'APC'),
(52, 'Delta'),
(53, 'Suunto'),
(54, 'Garmin'),
(55, 'Verophone'),
(56, 'Meeting Krezt'),
(57, 'Toa ZW'),
(58, 'Icon'),
(59, 'Dell'),
(60, 'Acer'),
(61, 'HP'),
(62, 'Lenovo'),
(63, 'Fujitsu'),
(64, 'Cannon Inkjet'),
(65, 'HP Laserjet'),
(66, 'HP Officejet'),
(67, 'Pulstek Opticard'),
(68, 'Fujitsu Scan Snap'),
(69, 'Kodak'),
(70, 'IBM'),
(71, 'Windows'),
(72, 'Windows Office'),
(73, 'Windows Server'),
(74, 'SQL Server'),
(75, 'Sistem Aplikasi Akuntasi'),
(76, 'Aplikasi Penilain Proposal FDB'),
(77, 'Aplikasi Perjanjian Pinjaman HR'),
(78, 'Aplikasi SIMPEL FDB');

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
(2, 'Ruang Arsip', 'A.2'),
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
('Unit', 2),
('Gedung', 3);

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
  MODIFY `id_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

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
  MODIFY `id_aset_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1299;

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
  MODIFY `id_merk_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

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
  MODIFY `id_ruang_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `satuan_aset`
--
ALTER TABLE `satuan_aset`
  MODIFY `id_satuan_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
