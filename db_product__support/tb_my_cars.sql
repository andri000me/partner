-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 26 Mar 2020 pada 12.48
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
-- Struktur dari tabel `tb_my_cars`
--

CREATE TABLE `tb_my_cars` (
  `id_mycars` int(11) NOT NULL,
  `nama_konsumen` varchar(255) NOT NULL DEFAULT '',
  `jenis_konsumen` varchar(255) NOT NULL DEFAULT '',
  `nama_penyedia` varchar(255) NOT NULL DEFAULT '',
  `jenis_penyedia` varchar(255) NOT NULL DEFAULT '',
  `jenis_penyedia_detail` varchar(255) NOT NULL DEFAULT '',
  `kategori_aset` varchar(255) NOT NULL DEFAULT '',
  `lama_usaha` varchar(255) NOT NULL DEFAULT '',
  `kepemilikan_tempat` varchar(255) NOT NULL DEFAULT '',
  `jumlah_stok` int(11) NOT NULL DEFAULT 0,
  `tipe_kendaraan` varchar(255) NOT NULL DEFAULT '',
  `jenis_kendaraan` varchar(255) NOT NULL DEFAULT '',
  `tahun` varchar(255) NOT NULL DEFAULT '',
  `warna_kendaraan` varchar(255) NOT NULL DEFAULT '',
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
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_my_cars`
--

INSERT INTO `tb_my_cars` (`id_mycars`, `nama_konsumen`, `jenis_konsumen`, `nama_penyedia`, `jenis_penyedia`, `jenis_penyedia_detail`, `kategori_aset`, `lama_usaha`, `kepemilikan_tempat`, `jumlah_stok`, `tipe_kendaraan`, `jenis_kendaraan`, `tahun`, `warna_kendaraan`, `nilai_pembiayaan`, `informasi_tambahan`, `upload_file1`, `upload_file2`, `upload_file3`, `upload_file4`, `upload_file5`, `upload_file6`, `upload_file7`, `upload_file8`, `upload_file9`, `upload_file10`, `date_created`, `date_modified`, `id_approval`, `id_cabang`, `id_user`) VALUES
(34, 'HJ HASNAH', 'Eksternal', 'M ADNAN HANAFI', 'Non-Authorized', 'Pemilik Langsung', 'Used Car', '1', 'Milik Sendiri', 1, 'SUZUKI AV1414F SDX (4x2) M/T', 'Mobil', '2015', 'PUTIH METALIK', 136000000, 'Penjual bukan showroom tapi perorangan.unit milik sendiri.foto unit,saat di depan samsat dan di depan rumah', 'Form_Pengajuan.pdf', 'Data_pemohon.pdf', 'Data_Pemilik.pdf', 'Data_Kendaraan.pdf', 'BKR.jpg', 'KTP.jpg', 'NPWP.jpg', 'Foto_mobil.jpg', 'Selvi_Mobil.jpg', 'Selvi_owner.jpg', '2019-09-03 08:17:36', '2019-09-04 08:44:25', 3, 44, 33),
(35, 'Ahmad Lahaming', 'Eksternal', 'Muhammad Algafiqi', 'Non-Authorized', 'Pemilik Langsung', 'Used Car', '-', 'Milik Sendiri', 1, 'TM2FX 4X2 M/T', 'SUZUKI IGNIS ', '2017', 'Abu Abu', 120000000, '', 'WhatsApp_Image_2019-11-14_at_09.57.32(2).jpeg', 'WhatsApp_Image_2019-11-14_at_09.57.33.jpeg', 'WhatsApp_Image_2019-11-14_at_09.57.08(1).jpeg', 'GESEKAN_IGNIS.pdf', 'WhatsApp_Image_2019-11-14_at_09.57.32.jpeg', 'WhatsApp_Image_2019-11-14_at_09.57.08.jpeg', 'WhatsApp_Image_2019-11-14_at_09.57.34(2).jpeg', 'WhatsApp_Image_2019-11-14_at_09.57.33(2).jpeg', 'KK.jpeg', 'KTP.jpeg', '2019-11-14 02:17:34', '2019-11-14 02:17:34', 0, 22, 165),
(36, 'PUTRA TES TRAINING', 'Eksternal', 'SHOWROOM IKHLAS BERAMAL', 'Non-Authorized', 'Showroom dengan izin usaha', 'Used Car', '2 TAHUN', 'Milik Sendiri', 10, 'AVANZA', 'MINIBUS', '2009', 'PINK', 250000000, 'SUDAH PINDAH KEPEMILIKAN 2 KALI', 'download.jpg', 'download_(1).jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-12 03:49:47', '2019-12-12 03:49:47', 0, 38, 36),
(37, 'HATOGUAN SIBARANI', 'Eksternal', 'WAWAN SETIAWAN', 'Non-Authorized', 'Penjual Perorangan', 'Used Car', '5 TAHUN', 'Milik Sendiri', 2, 'TOYOTA AVANZA VELOZ', 'TOYOTA AVANZA VELOZ', '2009', 'PUTIH', 124000000, 'DATA LAIN AKAN DISIMPAN DI FTP\r\nkurang kuitansi jual beli', 'FORM_PENGAJUAN.pdf', 'SLIP_GAJI.pdf', 'KK_PIHAK_KE_3.pdf', 'REK_LISTRIK.pdf', 'ktp_pemohon.jpg', 'ktp_istri.jpg', 'bpkb_1.jpg', 'bpkb_2.jpg', 'bpkb_3.jpg', 'faktur.jpg', '2020-02-05 10:46:48', '2020-02-06 02:56:04', 0, 32, 151);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_my_cars`
--
ALTER TABLE `tb_my_cars`
  ADD PRIMARY KEY (`id_mycars`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_my_cars`
--
ALTER TABLE `tb_my_cars`
  MODIFY `id_mycars` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
