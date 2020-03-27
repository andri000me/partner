-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 26 Mar 2020 pada 12.55
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
-- Struktur dari tabel `tb_my_safar`
--

CREATE TABLE `tb_my_safar` (
  `id_mysafar` int(11) NOT NULL,
  `nama_konsumen` varchar(40) NOT NULL DEFAULT '',
  `jenis_konsumen` varchar(40) NOT NULL DEFAULT '',
  `nama_travel` varchar(255) NOT NULL DEFAULT '',
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
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_modified` timestamp NULL DEFAULT NULL,
  `id_approval` int(2) NOT NULL DEFAULT 0 COMMENT '0 = belum direview, 1 = ditolak, 2 = disetujui admin 1, 3 = disetujui admin 2',
  `id_cabang` int(11) NOT NULL DEFAULT 0,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_my_safar`
--

INSERT INTO `tb_my_safar` (`id_mysafar`, `nama_konsumen`, `jenis_konsumen`, `nama_travel`, `upload_file1`, `upload_file2`, `upload_file3`, `upload_file4`, `upload_file5`, `upload_file6`, `upload_file7`, `upload_file8`, `upload_file9`, `upload_file10`, `date_created`, `date_modified`, `id_approval`, `id_cabang`, `id_user`) VALUES
(12, 'CUCU NURMAYANTI', 'Eksternal', 'PT. DIVA PRATAMA KARYA', 'ALL_DATA_TOUR_2.pdf', 'ALL_DATA_TOUR.pdf', 'pln_alamat_bkr.jpg', 'KK.jpeg', 'KTP_ISTRI.jpeg', 'Lombok_Paket_Baru.docx', 'permohonan_cucu.pdf', 'slip_gaji.jpeg', 'verifikasi.pdf', 'BKR.jpeg', '2019-08-27 08:45:12', '2019-08-27 07:27:24', 3, 39, 106),
(13, 'HAMBA ALLAH', 'Eksternal', 'PT. ALIF BERKAH AMANAH WISATA TOUR & TRAVEL', 'ABA_Wisata_-_Itinerary_Umroh_9_Hari_22_OKT_2019.pdf', 'ABA_Wisata_-_Itineray_Umroh_9_Hari_01_OKT_2019.pdf', 'ABA_Wisata_-_Itineray_Umroh_9_Hari_05_OKT_2019.pdf', 'ABA_Wisata_-_Itineray_Umroh_9_Hari_07_OKT_2019.pdf', 'ABA_Wisata_-_Itineray_Umroh_10_Hari_09_OKT_2019.pdf', 'ABA_Wisata_-_Itineray_Umroh_9_Hari_02_NOV_2019.pdf', 'ABA_Wisata_-_Itineray_Umroh_9_Hari_09_NOV_2019.pdf', 'ABA_Wisata_-_Itineray_Umroh_10_Hari_20_NOV_2019.pdf', 'ABA_Wisata_-_Itinerary_Umroh_Plus_Turkey_12_Hari_24_NOV_2019.pdf', 'ABA_Wisata_-_Itinerary_Umroh_9_Hari_16_DES_2019.pdf', '2019-09-03 09:19:08', '2019-09-03 03:26:38', 3, 39, 106),
(14, 'DEWI DAMAYANTI PRIBUDI', 'Eksternal', 'RIKOLA', 'IMG_20180419_155053.jpg', 'IMG_20180419_155105.jpg', 'IMG_20180419_155140.jpg', 'IMG-20180419-WA0030.jpg', 'IMG-20190418-WA0013.jpg', 'IMG-20190418-WA0014.jpg', '6d7364d1-7a72-4e5a-b556-6b272c2a8eb9.jpg', '3a95aa68-5530-47a5-ad5a-5985931af4ab.jpg', 'AH05SBKKPATTBI02_-_05D_SUPER_SALE_BKK_PTY_BY_BI_DEP_JUL_ONWARDS_(1)1.pdf', NULL, '2019-09-09 03:56:23', '2019-09-06 06:21:25', 1, 35, 115),
(15, 'ALMA PODITA ', 'Eksternal', 'RIKOLA', '0acc73ae-8162-4aee-b412-3ef447cc454d.jpg', 'd68eb2d9-00e6-4f71-b8e2-a92bf316a456.jpg', 'WhatsApp_Image_2018-05-08_at_12.21.19.jpeg', 'WhatsApp_Image_2018-05-08_at_12.21.181.jpeg', 'fd31b4cd-5672-45cf-a313-834395f64c3d.jpg', '3a95aa68-5530-47a5-ad5a-5985931af4ab1.jpg', 'AH05SBKKPATTBI02_-_05D_SUPER_SALE_BKK_PTY_BY_BI_DEP_JUL_ONWARDS_(1).pdf', NULL, NULL, NULL, '2019-09-09 03:56:41', '2019-09-06 06:20:58', 1, 35, 115),
(16, 'Yuliatna Fananniyun', 'Eksternal', 'BUDI WISATA', 'KTP.Budi.pdf', 'KTP.Feby.pdf', 'Scan.NPWP.DepKeu.pdf', 'Scan.TDUP.pdf', 'Scan.TDP.pdf', '2019_09_07_10_53_AM_Office_Lens.pdf', '4H3M_KL-GEN_EX_SBY._(Novi).doc', NULL, NULL, NULL, '2019-09-09 08:21:26', '2019-09-07 03:55:21', 1, 41, 139),
(17, 'Nilla martania', 'Eksternal', 'el 88 travel', 'invoice.jpeg', 'itinerary_el88tour.ods', 'ktp_pemohon.jpeg', 'ktp_suami.jpeg', 'kk_pemohon.jpeg', 'ktp_penyedia_jasa.jpeg', 'kk_penyedia_jasa.jpeg', 'pic_dengan_penyedia_jasa.jpeg', 'WhatsApp_Image_2019-08-22_at_16.03.27.jpeg', NULL, '2019-09-11 04:30:00', '2019-09-11 02:19:33', 1, 10, 113),
(18, 'ARYATI HERAWATI', 'Eksternal', 'PT. DIVA PRATAMA KARYA', 'Jogjakarta_Aryati_Family1.docx', 'ALL_DATA_TOUR_21.pdf', 'ALL_DATA_TOUR1.pdf', 'data_travel.jpg', 'TABUNGAN.jpeg', NULL, NULL, NULL, NULL, NULL, '2019-09-17 07:44:12', '2019-09-16 07:19:59', 3, 39, 106),
(19, 'RANI SETIANI', 'Eksternal', 'PT. DIVA PRATAMA KARYA', 'ALL_DATA_TOUR_22.pdf', 'ALL_DATA_TOUR2.pdf', 'TABUNGAN1.jpeg', 'data_travel1.jpg', 'Jogjakarta_Family.docx', NULL, NULL, NULL, NULL, NULL, '2019-09-26 04:08:49', '2019-09-26 01:40:33', 3, 39, 106),
(20, 'Update paket ke WEB ', 'Eksternal', 'PT DARMAWAN', '3_DAYS_BALI_MOSLEM_TRIP.pdf', 'WhatsApp_Image_2019-09-28_at_11.07.05.jpeg', 'WhatsApp_Image_2019-09-28_at_11.07.06.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-01 03:33:34', '2019-09-30 03:27:41', 3, 19, 103),
(21, 'Eka Sumintarsih', 'Eksternal', 'Royal Tours Bandung', 'brosur.jpg', 'Rundown_Royal_Tours.odt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-02 02:00:06', '2019-10-01 09:44:41', 1, 2, 156),
(22, 'Yunia Sari', 'Eksternal', 'Dream Tours and Travel', 'dokumen_yunia_sari.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-07 02:38:44', '2019-10-04 10:22:15', 1, 7, 61),
(23, 'RANI SETIANI', 'Eksternal', 'PT. DIVA PRATAMA KARYA', 'BKR_2.jpeg', 'BKR1.jpeg', 'Jogjakarta_Family1.docx', 'KK1.jpeg', 'KTP.jpeg', 'SLIP_GAJI.jpeg', 'ALL_DATA_TOUR_23.pdf', 'ALL_DATA_TOUR3.pdf', 'data_travel2.jpg', NULL, '2019-10-08 10:54:01', '2019-10-08 10:54:01', 3, 39, 106),
(24, 'Andiwi Meifilina', 'Eksternal', 'Massa makmor', 'data_bu_andiwi.pdf', 'BANGKOK_PATTAYA_4_DAYS_3_NIGHTS1.docx', 'brosur_pataya.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-17 10:04:48', '2019-10-18 05:07:33', 3, 41, 139),
(25, 'Andi Eva', 'Eksternal', 'Dulang Wisata (hrg 15 Jta, berangkat 25 Desember 2018)', 'Turky.docx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-24 08:49:14', '2019-10-24 08:49:14', 3, 22, 165),
(26, 'Evi SUSANTI', 'Eksternal', 'BOS TRAVEL ', 'Intenery_PT._BOS_Tour_Travel_wisata_rohani.odt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-13 07:36:36', '2019-11-13 07:36:36', 0, 30, 135),
(27, 'EvI Susanti', 'Eksternal', 'BOS TRAVEL', 'Intenery_PT._BOS_Tour_Travel_wisata_rohani1.odt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-14 03:07:31', '2019-11-14 03:07:31', 0, 30, 135),
(28, 'Suziana', 'Eksternal', 'BOS Travel (PT.Bonni Oktafian Syahputra)', 'Intenery_PT._BOS_Tour_Travel_wisata_rohani2.odt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-09 04:09:24', '2019-12-09 04:09:24', 0, 30, 135),
(29, 'Julinawati', 'Eksternal', 'Indowisata Holiday Tour & Travel', 'Pengajuan_Lina.zip', 'Untitled_1(1).pdf', 'INDOWISATA.zip', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-11 09:45:56', '2019-12-20 02:08:58', 0, 14, 183),
(30, 'Riska Septiana', 'Eksternal', 'PT.Bonni Oktafian Syaputra (BOS TRAVEL)', 'FPP,FORM_Verifikasi_Survey_dan_Form_Checlist_RISKA_SEPTIANA.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-12 08:55:42', '2019-12-12 08:55:42', 0, 30, 135),
(31, 'KHAZZANAH TOUR & TRAVEL', 'Eksternal', 'KHAZZANAH TOUR & TRAVEL', 'ITINERARY_9_HARI_SAUDIA_13_FEBRUARI_2019.docx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-19 06:46:25', '2019-12-19 06:46:25', 0, 9, 54),
(32, 'ridwanullah fauzi, s.ag', 'Eksternal', 'afi tour travel', 'Screenshot_2019-12-20-10-23-52-45.png', '2019-mar-01_UMROH_9_HARI_by_etihad.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-20 03:24:27', '2019-12-20 06:25:52', 0, 14, 80),
(33, 'Arini Septia Rahayu', 'Eksternal', 'PT Kawan Visi Indonesia', 'Paket_London_Private_Tour_Update.pdf', 'KTP_Arin.jpg', 'kk.jpg', 'Form_Pengajuan_kerjasama.pdf', 'LEGALITAS_KVI_(1).zip', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:22:36', '2020-01-16 01:57:28', 0, 5, 158),
(34, 'Nama', 'Eksternal', 'PT WISATA ANUGERAH ABADI', '10D_BEAUTIFUL_TURKEY_+_DUBAI_ABU_DHABI.pdf', 'REV_10D_–_BEST_OF_TURKEY_MT._ULUDAG_CAPPADOCIA_(_FEB_-_MAR_2020_).pdf', '10HARI_–_BEAUTIFUL_MOROCCO.pdf', 'REV_6HARI_JAPAN_SAKURA_+_GOTEMBA_PREMIUM_OUTLET.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-16 01:03:36', '2020-01-16 01:03:36', 0, 26, 40),
(35, 'Rahmanto', 'Eksternal', 'PT SHABILLA ERALDO UTAMA', 'EROPA_BARAT.odt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-22 03:25:01', '2020-01-22 03:25:01', 0, 15, 28),
(36, 'nama', 'Eksternal', 'PT WISATA HATI TOUR & TRAVEL', 'WHT_-_Detail_Program_Yaman_12D.pdf', 'WHT_-_Itinerary_Oman_New_new.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-27 09:01:32', '2020-01-28 11:14:13', 0, 26, 161),
(37, 'Nama', 'Eksternal', 'PT ATINA RAHMATAKA WISATA', 'IMG-20200205-WA0021.jpg', 'IMG-20200205-WA0019.jpg', 'IMG-20200205-WA0020.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-05 06:30:26', '2020-02-05 06:30:26', 0, 26, 40),
(38, 'NAMA', 'Eksternal', 'PT TRIPURI', 'BEST_OF_TURKEY_05_APRIL.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-06 03:18:04', '2020-02-06 03:18:04', 0, 26, 40),
(39, 'Nama', 'Eksternal', 'PT ATINA RAHMATAKA WISATA', 'Safar_madina.jpg', 'Itten_3_Negara_(1).pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-13 10:58:59', '2020-02-13 10:58:59', 0, 26, 40),
(40, 'Vienna Diva Agnetha', 'Eksternal', 'PT Kawan Visi Indonesia', 'Data_Konsumen.pdf', 'KK.pdf', 'Slip_gaji.pdf', 'Surat_ket_krja.pdf', 'Untitled_4.odt', 'Paket_London_Private_Tour1.pdf', NULL, NULL, NULL, NULL, '2020-03-12 01:41:44', '2020-03-12 01:41:44', 0, 5, 158);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_my_safar`
--
ALTER TABLE `tb_my_safar`
  ADD PRIMARY KEY (`id_mysafar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_my_safar`
--
ALTER TABLE `tb_my_safar`
  MODIFY `id_mysafar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
