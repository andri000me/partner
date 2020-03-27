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
-- Struktur dari tabel `tb_my_hajat_franchise`
--

CREATE TABLE `tb_my_hajat_franchise` (
  `id_franchise` int(11) NOT NULL,
  `nama_konsumen` varchar(255) NOT NULL DEFAULT '',
  `jenis_konsumen` varchar(255) NOT NULL DEFAULT '',
  `nama_franchise` varchar(50) NOT NULL DEFAULT '' COMMENT 'Nama Franchise',
  `jumlah_cabang` int(11) NOT NULL DEFAULT 0 COMMENT 'Jumlah Cabang Yang Dimiliki',
  `jenis_franchise` varchar(50) NOT NULL DEFAULT '' COMMENT 'Jenis Franchise',
  `tahun_berdiri_franchise` varchar(255) NOT NULL DEFAULT '' COMMENT 'Tahun Berdiri Franchise',
  `harga_franchise` bigint(20) NOT NULL DEFAULT 0 COMMENT 'Harga Franchise',
  `jangka_waktu_franchise` varchar(255) NOT NULL DEFAULT '' COMMENT 'Jangka Waktu Franchise',
  `akun_sosmed_website` varchar(255) NOT NULL DEFAULT '' COMMENT 'Akun Media Sosial / Website Franchise',
  `informasi_tambahan` text DEFAULT NULL,
  `upload_file1` varchar(255) DEFAULT NULL,
  `upload_file2` varchar(255) DEFAULT NULL,
  `upload_file3` varchar(255) DEFAULT NULL,
  `upload_file4` varchar(255) DEFAULT NULL,
  `upload_file5` varchar(255) DEFAULT NULL,
  `upload_file6` varchar(255) DEFAULT NULL,
  `upload_file7` varchar(255) DEFAULT NULL,
  `upload_file8` varchar(255) DEFAULT NULL,
  `upload_file9` varchar(255) DEFAULT NULL,
  `upload_file10` varchar(255) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT NULL,
  `id_approval` int(2) DEFAULT NULL,
  `id_cabang` int(11) NOT NULL DEFAULT 0,
  `id_user` int(11) NOT NULL,
  `id_vendor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_my_hajat_franchise`
--

INSERT INTO `tb_my_hajat_franchise` (`id_franchise`, `nama_konsumen`, `jenis_konsumen`, `nama_franchise`, `jumlah_cabang`, `jenis_franchise`, `tahun_berdiri_franchise`, `harga_franchise`, `jangka_waktu_franchise`, `akun_sosmed_website`, `informasi_tambahan`, `upload_file1`, `upload_file2`, `upload_file3`, `upload_file4`, `upload_file5`, `upload_file6`, `upload_file7`, `upload_file8`, `upload_file9`, `upload_file10`, `date_created`, `date_modified`, `id_approval`, `id_cabang`, `id_user`, `id_vendor`) VALUES
(11, 'MOCH ASMUNASIR', 'Eksternal', 'PT BERLIAN INTERNASIONAL TEKNOLOGI', 20, 'Makanan dan Minuman', '2013', 36000000, 'Selamanya', 'braderhud.com', 'PT BERLIAN INTERNASIONAL TEKNOLOGI merupakan perusahaan Waralaba (Franchise) yang bergerak di dalam bidang Kuliner (Minuman Kesehatan) sejak tahun 2014', 'DATA_KONSUMEN.pdf', 'Data_Legalitas_dan_MOU_Penyedia_Jasa.pdf', 'Form_Verifikasi_Penawaran_RAB_dan_Permohonan_Biaya_Franchise.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-19 05:36:20', '2019-08-19 05:36:20', 3, 6, 50, NULL),
(12, 'Rama Sahab', 'Eksternal', 'Eposs Laundry', 5, 'Lainnya', '2009', 21500000, 'Selamanya', 'Instagram : @laundry_digital', ' Franchise laundry perorangan ', 'form_rama.pdf', 'persyaratan_rama.pdf', 'Persyaratan_eposs_laundry.pdf', 'MUTASI_REKENING_EPOSS_JUNI_JULI_AN_AMIRUDDIN.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-19 08:28:39', '2019-08-19 10:15:50', 3, 26, 40, NULL),
(14, 'Shakina ', 'Eksternal', 'Eposs Laundry', 5, 'Lainnya', '2008', 23500000, 'Selamanya', 'Instagram : @laundry_digital', '   Sudah MOU, dan mohon dilihat ada surat keterangan usaha Eposs.', 'persyaratan_shakina2.pdf', 'form_shakina.pdf', 'eposs_laundry2.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-30 12:11:49', '2019-09-03 08:05:03', 3, 26, 40, NULL),
(15, 'TRIYANTO', 'Eksternal', 'JOKER CORPORATION', 50, 'Makanan dan Minuman', '2017', 6800000, 'Selamanya', 'www.jogjaleker.co.id', '  TAMBAHAN SURAT PENAWARAN HARGA DARI FRANCHISE JOKER CORPORATION', 'DATA_KONSUMEN.odt', 'DATA_JOKER_penyedia_jasa.odt', 'SERTIFIKASI_HALAL.pdf', 'Form_pengajuan_franchise_Triyanto.pdf', 'Form_penawaran_JOKER.pdf', 'Form_verifikasi_Triyanto_Joker.pdf', 'PENAWARAN_HARGA_JOKER.pdf', NULL, NULL, NULL, '2019-09-05 05:55:34', '2019-09-07 02:04:06', 3, 45, 93, NULL),
(16, 'Subiarto', 'Eksternal', 'Eposs Laundry', 5, 'Lainnya', '2009', 23500000, 'Jangka Tertentu', 'Instagram : @laundry_digital', '', 'form_Subiarto.pdf', 'persyaratan_subiarto.pdf', 'eposs_laundry21.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-19 01:52:24', '2019-09-19 01:52:24', 3, 26, 40, 111),
(17, 'Abdul Rahman', 'Eksternal', 'Yessi Toys', 1, 'Retail', '2009', 10000000, 'Selamanya', 'Toko Pedia YESSICA (YESSI TOYS)', '   Konsumen mengajukan pembiayaan my hajat (untuk pembelian mainan anak2 berupa motor mini) dengan penyedia jasa Yessi Toys dengan jumlah biaya Rp. 10.000.000 ', 'Abdul_Rahman_data_konsumen.pdf', 'yessi_toys.pdf', 'form_permohonan_Abdul_Rahman(1)1.pdf', 'from_penawaran_harga_supplier.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-18 07:44:18', '2019-10-22 09:11:58', 3, 5, 188, 311),
(18, 'ENDANG WITARYA', 'Eksternal', 'JOKER CORPORATION', 2, 'Makanan dan Minuman', '2010', 5400000, 'Selamanya', 'friedchickenbites.com', 'PEMBELIAN FRANCHISE PAKET SILVER CHICKEN BITE', 'DATA_KONSUMEN11.odt', 'DATA_JOKER_penyedia_jasa1.odt', 'brosue_cb.jpg', 'SERTIFIKASI_HALAL1.pdf', 'Form_pengajuan_Endang.pdf', 'Form_penawaran_joker_endang.pdf', 'FORM_VERIFIKASI_ENDANG_WITARYA.pdf', NULL, NULL, NULL, '2019-10-21 05:15:44', '2019-10-21 05:15:44', 3, 45, 93, 324),
(19, 'ENDANG WITARYA', 'Eksternal', 'JOKER CORPORATION', 2, 'Makanan dan Minuman', '2010', 5400000, 'Selamanya', 'friedchickenbites.com', 'PEMBELIAN FRANCHISE PAKET SILVER CHICKEN BITE', 'DATA_KONSUMEN12.odt', 'DATA_JOKER_penyedia_jasa2.odt', 'brosue_cb1.jpg', 'SERTIFIKASI_HALAL2.pdf', 'Form_pengajuan_Endang1.pdf', 'Form_penawaran_joker_endang1.pdf', 'FORM_VERIFIKASI_ENDANG_WITARYA1.pdf', NULL, NULL, NULL, '2019-10-23 03:39:40', '2019-10-23 03:39:40', 3, 45, 93, 337),
(20, 'ERNES DARIANSYAH', 'Eksternal', 'JOKER CORPORATION', 2, 'Makanan dan Minuman', '2010', 5800000, 'Selamanya', 'magumaguchicken.com', 'paket silver magu-magu chicken', 'DATA_KONSUMEN13.odt', 'Mutasi_rekening_Mei.pdf', 'Mutasi_rekening_juni.pdf', 'Mutasi_rekening_juli.pdf', 'DATA_JOKER_penyedia_jasa3.odt', 'SERTIFIKASI_HALAL3.pdf', 'PROPOSAL_PENAWARAN_HARGA_JOKER.pdf', 'FORM_PERMOHONAN_ERNES.pdf', 'FORM_PENAWARAN_ERNES.pdf', 'FORM_VERIFIKASI_ERNES.pdf', '2019-11-01 09:33:45', '2019-11-01 09:33:45', 0, 45, 94, 394),
(21, 'Octariana Yundasari', 'Eksternal', 'Chocomotion', 16, 'Otomotif', '2014', 38800000, 'Selamanya', 'chocomotion', '', 'KTP2.jpeg', 'KK1.jpeg', 'Rek_Kor_1.jpeg', 'Rek_Kor_2.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-07 09:02:49', '2019-11-07 09:02:49', 0, 1, 192, 431),
(22, 'Octariana Yundasari', 'Eksternal', 'Chocomotion', 16, 'Makanan dan Minuman', '2014', 38800000, 'Selamanya', 'chocomotion', '', 'KTP3.jpeg', 'KK2.jpeg', 'Rek_Kor_11.jpeg', 'Rek_Kor_21.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-07 23:33:08', '2019-11-07 23:33:08', 0, 1, 192, 434),
(23, 'Desy Cinthia', 'Eksternal', 'Mitra Usaha Warallaba', 12, 'Makanan dan Minuman', '2017', 17000000, 'Selamanya', 'instagram : Franchise_viral', 'data berkas dokumen ada di FTP, mohon bantuannya untuk penginputan produk', 'ktp9.jpg', 'kk14.jpg', 'slip_gaji9.jpg', 'form_permohonan_pembiayaan4.pdf', 'Penawaran_biaya_franchise.pdf', 'form_verifikasi6.pdf', 'penawaran_harga.odt', NULL, NULL, NULL, '2020-01-02 05:10:02', '2020-01-02 05:10:02', 0, 30, 144, 678);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_my_hajat_franchise`
--
ALTER TABLE `tb_my_hajat_franchise`
  ADD PRIMARY KEY (`id_franchise`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_my_hajat_franchise`
--
ALTER TABLE `tb_my_hajat_franchise`
  MODIFY `id_franchise` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
