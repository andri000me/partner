-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 26 Mar 2020 pada 12.49
-- Versi server: 10.2.30-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u5487321_ticketsystem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_my_faedah_qurban`
--

CREATE TABLE `tb_my_faedah_qurban` (
  `id_qurban` int(11) NOT NULL,
  `nama_konsumen` varchar(255) NOT NULL DEFAULT '',
  `jenis_konsumen` varchar(255) NOT NULL DEFAULT '',
  `nama_penyedia` varchar(255) NOT NULL DEFAULT '',
  `jenis_penyedia` varchar(255) NOT NULL DEFAULT '',
  `lama_usaha` varchar(255) NOT NULL DEFAULT '',
  `tujuan_pembelian` varchar(255) NOT NULL DEFAULT '',
  `jenis_hewan` varchar(255) NOT NULL DEFAULT '',
  `jumlah_hewan` int(11) NOT NULL DEFAULT 0,
  `nilai_pembiayaan` bigint(20) NOT NULL DEFAULT 0,
  `informasi_tambahan` text DEFAULT NULL,
  `upload_file1` varchar(255) NOT NULL DEFAULT '',
  `upload_file2` varchar(255) DEFAULT NULL,
  `upload_file3` varchar(255) DEFAULT NULL,
  `upload_file4` varchar(255) DEFAULT NULL,
  `upload_file5` varchar(255) DEFAULT NULL,
  `upload_file6` varchar(255) DEFAULT NULL,
  `upload_file7` varchar(255) DEFAULT NULL,
  `upload_file8` varchar(255) DEFAULT NULL,
  `upload_file9` varchar(255) DEFAULT NULL,
  `upload_file10` varchar(255) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT current_timestamp(),
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_approval` int(11) NOT NULL DEFAULT 0,
  `id_cabang` int(11) NOT NULL DEFAULT 0,
  `id_user` int(11) NOT NULL,
  `id_vendor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_my_faedah_qurban`
--

INSERT INTO `tb_my_faedah_qurban` (`id_qurban`, `nama_konsumen`, `jenis_konsumen`, `nama_penyedia`, `jenis_penyedia`, `lama_usaha`, `tujuan_pembelian`, `jenis_hewan`, `jumlah_hewan`, `nilai_pembiayaan`, `informasi_tambahan`, `upload_file1`, `upload_file2`, `upload_file3`, `upload_file4`, `upload_file5`, `upload_file6`, `upload_file7`, `upload_file8`, `upload_file9`, `upload_file10`, `date_created`, `date_modified`, `id_approval`, `id_cabang`, `id_user`, `id_vendor`) VALUES
(1, 'NURHAYANI', 'Eksternal', 'NURHAYATI', 'Penjual Perorangan', '5 tahun', 'Produktif', 'KAMBING', 6, 10000000, 'tujuan pembelian kambing untuk pengembangbiakan ternak kambing\r\nHewan Ternak (KAMBING)\r\n1 ekor kambing jantan umur 3 tahun, total harga 3.000.000\r\n1 ekor kambing betina umur 2,5 tahun, total harga 2.500.000\r\n2 ekor kambing umur 1 tahun, total harga 3.000.000\r\n2 ekor kambing umur 6 bulan, total harga 1.500.000\r\njumlah harga keseluruhan Rp. 10.000.000', 'FORM_PENGAJUAN_PEMBIAYAAN2.pdf', 'FORM_VERIFIKASI3.pdf', 'PENAWARAN_HARGA.pdf', 'KTP_penyedia_barang.jpg', 'KK_penyedia_barang.jpg', 'rek._tabungan_penyedia_barang.jpg', 'foto_CMS_dengan_penyedia_kambing.jpg', 'KTP_KONSUMEN.jpg', 'kandang_penyedia_jasa.jpg', 'kambing_yang_akan_di_beli_1.jpg', '2019-09-06 05:18:37', '2019-09-06 09:01:57', 3, 8, 169, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_my_faedah_qurban`
--
ALTER TABLE `tb_my_faedah_qurban`
  ADD PRIMARY KEY (`id_qurban`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_my_faedah_qurban`
--
ALTER TABLE `tb_my_faedah_qurban`
  MODIFY `id_qurban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
