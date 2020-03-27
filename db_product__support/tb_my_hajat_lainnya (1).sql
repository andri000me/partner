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
-- Struktur dari tabel `tb_my_hajat_lainnya`
--

CREATE TABLE `tb_my_hajat_lainnya` (
  `id_myhajat_lainnya` int(11) NOT NULL,
  `nama_konsumen` varchar(255) NOT NULL DEFAULT '',
  `jenis_konsumen` varchar(255) NOT NULL DEFAULT '',
  `nama_penyedia_jasa` varchar(255) NOT NULL DEFAULT '',
  `jenis_penyedia_jasa` varchar(255) NOT NULL DEFAULT '',
  `nilai_pembiayaan` bigint(20) NOT NULL DEFAULT 0,
  `informasi_tambahan` text NOT NULL,
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
  `date_created` timestamp NULL DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT NULL,
  `id_approval` int(11) NOT NULL DEFAULT 0,
  `id_cabang` int(11) NOT NULL DEFAULT 0,
  `id_user` int(11) NOT NULL,
  `id_vendor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_my_hajat_lainnya`
--

INSERT INTO `tb_my_hajat_lainnya` (`id_myhajat_lainnya`, `nama_konsumen`, `jenis_konsumen`, `nama_penyedia_jasa`, `jenis_penyedia_jasa`, `nilai_pembiayaan`, `informasi_tambahan`, `upload_file1`, `upload_file2`, `upload_file3`, `upload_file4`, `upload_file5`, `upload_file6`, `upload_file7`, `upload_file8`, `upload_file9`, `upload_file10`, `date_created`, `date_modified`, `id_approval`, `id_cabang`, `id_user`, `id_vendor`) VALUES
(12, 'Santi Kusuma Dewi', 'Eksternal', 'PT Trikarya Mandiri Bangkit', 'Badan Usaha', 35694000, 'Untuk Instalasi Listrik', 'DATA_KONSUMEN3.pdf', 'MEMO_PENYIMPANGAN3.pdf', 'DATA_SUPPLIER5.pdf', 'FORM_PENGAJUAN,_VERIFIKASI_DAN_RAB4.pdf', 'WhatsApp_Image_2019-08-21_at_16.54.141.jpeg', 'WhatsApp_Image_2019-08-21_at_16.54.15_(1)1.jpeg', 'WhatsApp_Image_2019-08-21_at_16.54.15_(2)1.jpeg', 'WhatsApp_Image_2019-08-21_at_16.54.151.jpeg', 'WhatsApp_Image_2019-08-21_at_16.54.161.jpeg', NULL, '2019-08-21 10:59:37', '2019-08-21 11:15:48', 3, 43, 68, NULL),
(14, 'ISTI CHUNAINI', 'Eksternal', 'CATERING HJ MANAF', 'Perorangan', 15000000, 'PENGAJUAN PEMBIAYAAN CATERING UNTUK TASYAKURAN PERNIKAHAN ANAK', 'DATA_KONS_ISTI_CHUNAINI.pdf', 'DATA_PENYEDIA_JASA_MANAF_CATERING.pdf', 'FORM_PENGAJUAN_VERIFIKASI,_RAB.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-26 03:42:07', '2019-08-26 09:27:43', 3, 18, 92, NULL),
(15, 'SUKIRAH', 'Eksternal', 'SIRUN', 'Perorangan', 10000000, 'SEWA TENDA UK. 8 X 10 BESERTA KURSI DAN PERALATAN CATERING', 'BERKAS_SUKIRAH12.pdf', 'Sukirah3.pdf', 'Penawaran_Harga_dari_penyedia_jasa_1.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-27 03:26:34', '2019-08-30 02:08:34', 3, 33, 110, NULL),
(16, 'SUKIRAH', 'Eksternal', 'SIRUN', 'Perorangan', 10000000, 'SEWA TENDA UK. 8 X 10 BESERTA MEJA KURSI DAN PERALATAN CATERING', 'Sukirah1.pdf', 'BERKAS_SUKIRAH1.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-29 06:47:56', '2019-08-29 06:47:56', 1, 33, 110, NULL),
(17, 'KARMILA MUCHSIN', 'Eksternal', 'CV KIEBESY PUTRA MANDIRI', 'Badan Usaha', 15000000, 'Pengajuan Termin Ke 2 Renovasi lt 2 an Karmila Muchsin', 'Data_Ibu_Mila-Reduced1.pdf', 'Data_Peny_Jas-Reduced1.pdf', 'Form_pengajuan-Reduced1.pdf', 'IMG-20190815-WA00211.jpg', 'IMG_20190829_163641.jpg', 'IMG_20190829_163728.jpg', 'IMG_20190829_172632315.jpg', NULL, NULL, NULL, '2019-08-29 09:40:36', '2019-08-29 09:40:36', 3, 44, 33, NULL),
(18, 'MUHAMMAD AQIL TAMIMI RANGKUTI', 'Eksternal', 'ERNI ', 'Perorangan', 30000000, 'konsumen mengajukan pembiayaan jasa Chatering untuk acara resepsi pernikahannya', 'FPP.pdf', 'FPP_Kerja_Sama.pdf', 'DATA_PENYEDIA_JASA.zip', 'DATA_KONSUMEN.zip', 'KTP_PENJAMIN3.jpg', 'REK_TABUNGAN_PENYEDIA_JASA.pdf', 'KTP_CALON_PASANGAN.jpeg', 'KTP3.jpg', NULL, NULL, '2019-08-30 08:53:55', '2019-09-02 02:44:47', 3, 25, 141, NULL),
(19, 'ADI CANDERA A.MK', 'Eksternal', 'PT. TIGA WANGI SEJAHTERA', 'Badan Usaha', 3000000, 'PENGAJUAN KITCHEN SET 2 AKAD :\r\n\r\nUPAH SEBESAR Rp. 3.000.000 MENGGUNANKAN MYHAJAT\r\nBAHAN SEBESAR Rp. 17.000.000 MENGGUNAKAN MYFAEDAH', 'Data_kons_Adi_Candera.pdf', 'Form_Myhajat_Adi_Candera.pdf', 'DATA_PHK3.pdf', 'Legalitas_PT._TWS.pdf', 'PIC_+_PHK31.jpeg', 'RAB_UPAH.pdf', 'RAB_PT_TWS.jpeg', 'NPWP1.jpeg', NULL, NULL, '2019-09-05 08:16:50', '2019-09-06 08:43:55', 3, 3, 35, NULL),
(20, 'Ratih Hardiningsih', 'Eksternal', 'El Biyya Decoration', 'Perorangan', 26700000, 'Konsumen mengajukan pembiayaan My Hajat untuk kategori Khitanan menggunakan jasa El Biyya Decoration senilai Rp. 26.700.000', 'Data_Konsumen_Ratih_Hardiningsih.pdf', 'Data_Pengajuan_Konsumen_Ratih_Hardiningsih.pdf', 'Data_Penyedia_Jasa_Ratih_Hardiningsih.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-12 03:32:18', '2019-09-12 03:32:18', 3, 5, 163, 55),
(21, 'CITRA DAMAYANTI', 'Eksternal', 'CHANAZ CATERING', '', 10000000, '', 'DATA_KONSUMEN15.pdf', 'FORM_VERIFIKASI6.pdf', 'DATA_PIHAK_KE_31.pdf', 'PAKET.jpg', 'form_pks.pdf', 'RK_HAMNAH.pdf', 'form_PKS.pdf', 'FORM_CEKLIST.pdf', NULL, NULL, '2019-09-16 08:22:07', '2019-09-18 07:09:45', 3, 40, 58, 84),
(22, 'PUGUH SUSANTO', 'Eksternal', 'BENGKEL P. HADI ISMANTO', '', 10000000, '', 'DATA_KONSUMEN_PUGUH.pdf', 'DATA_PENYEDIA_JASA3.pdf', 'FORM_PENGAJUAN_VERIFIKASI.pdf', 'RAB14.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-17 04:53:05', '2019-09-18 02:01:13', 3, 18, 92, 90),
(23, 'ALEXANDER BURNAMA', 'Eksternal', 'Rumah Interior', 'Badan Usaha', 26000000, '', 'Dok_baru_2019-09-18_09.30.17.pdf', 'pdf_konsumen.pdf', 'MutasiBCA_100919-160919.pdf', 'MutasiBCA_210819-270819.pdf', 'MutasiBCA_270819-030919(1).pdf', 'pdf_pihak_jasa.pdf', 'pihak_jasa_2.pdf', NULL, NULL, NULL, '2019-09-18 02:50:06', '2019-09-20 04:16:52', 3, 31, 96, 123),
(24, 'Lili yusro', 'Eksternal', 'Rodiah', '', 30000000, 'Jasa aqiqah anak ibu lili yusro', 'form_permohonan,_verifikasi_lili1.pdf', 'data_lili_yusro1.pdf', 'data_rodiah.pdf', 'price_list,_form_partnership_dan_foto_dengan_penyedia_jasa.pdf', 'npwp_pasrah.pdf', 'IMG_20190919_121632.jpg', NULL, NULL, NULL, NULL, '2019-09-19 04:26:10', '2019-09-19 05:17:28', 3, 16, 176, 113),
(25, 'Ferdy Yusuf Martinus Item', 'Eksternal', 'Annisa Aqiqah', 'Perorangan', 8000000, '', 'KTP_Ferdy.jpeg', 'KK_Ferdy.jpeg', 'Invoice_Aqiqah.jpeg', 'KTP_Santi_Ningrum.jpeg', 'Cover_buku_Tab_Aqiqah.jpeg', 'Form_Ver,_Form_Pemb,_Penawaran_Biaya.pdf', 'PIC_dengan_Penyedia_Jasa1.jpeg', 'Lokasi_Usaha.jpeg', 'KK_Santi_Ningrum.jpeg', 'Brosure_annisa_Aqiqah.jpeg', '2019-09-19 08:27:17', '2019-09-19 08:27:17', 1, 1, 174, 116),
(26, 'INDAH WIDI PURWANTI', 'Eksternal', 'RAHMAT WAHYUDI', '', 20000000, '', 'DATA_KONSUMEN_DAN_PENYEDIA_JASA.pdf', 'penawaran_Biaya.pdf', 'Dok_baru_2019-09-21_08.53.43.pdf', 'penyedia_jasa_3.pdf', 'Permohonan_Konsumen_Indah_Fix.pdf', 'WhatsApp_Image_2019-09-21_at_07.24.08.jpeg', 'WhatsApp_Image_2019-09-23_at_19.40.54.jpeg', 'WhatsApp_Image_2019-09-21_at_06.51.42.jpeg', 'WhatsApp_Image_2019-09-21_at_06.52.32.jpeg', NULL, '2019-09-20 02:58:45', '2019-09-24 02:13:29', 3, 33, 111, 120),
(27, 'Ferdy Yusuf Martinus Item', 'Eksternal', 'Annisa Aqiqah', '', 8000000, '', 'Form_Ver,_Perm_pemb,_Penawaran_biaya.pdf', 'Brosure_dan_Pesanan.odt', 'Cover_Tab_Afiat.jpeg', 'KK_Afiat.jpeg', 'KK_Ferdy1.jpeg', 'KTP_Afiat.jpeg', 'ktp_rahayu.jpg', 'KTP_dan_BKR_Ferdy,_Foto_Lokasi_Usaha,_PIC_Dan_penyedia_Jasa.pdf', 'Mutasi_Afiat.pdf', 'Slip_Gaji.jpeg', '2019-09-20 07:03:25', '2019-09-23 02:32:06', 3, 1, 174, 125),
(28, 'Bagus Rachmat Adanto', 'Eksternal', 'El Biyya Decoration', '', 26700000, 'Konsumen mengajukan pembiayaan My Hajat (Khitanan) dengan menggunakan EO El Biyya Decoration sebagai penyedia jasanya senilai Rp. 26.700.000', 'Data_Pengajuan_Bagus_Rachmat_Adanto.pdf', 'Data_Konsumen_Bagus_Rachmat_Adanto2.pdf', 'Data_Penyedia_Jasa_Bagus_Rachmat_Adanto.pdf', 'PBB1.jpeg', 'WhatsApp_Image_2019-09-11_at_08.43.57(3).jpeg', 'SLIP_GAJI_AGUSTUS.jpeg', 'KTP_ISTRI.jpeg', 'Kwitansi_dan_Invoice_PJ_An_Bagus_Rachmat_Adanto.pdf', 'Form_Memo_Penyimpangan_PJ_an_Bagus_Rachmat_Adanto_1.pdf', NULL, '2019-09-21 04:03:49', '2019-09-23 11:00:03', 3, 5, 163, 133),
(29, 'SITI ROHMAH', 'Eksternal', 'LITA WEDDING & CATERING', '', 10000000, '', 'data_lita_wo,_naikin_paket1.pdf', 'Form_Checklist_Partnership5.pdf', 'FORM_KERJASAMA5.pdf', 'DATA_KONSUMEN27.pdf', 'form_verifikasi_new.pdf', 'PAKET.pdf', 'KTP_OWNER.jpg', 'KK_OWNER1.jpg', NULL, NULL, '2019-09-23 06:08:05', '2019-09-24 02:08:58', 1, 40, 58, 138),
(30, 'ARI LESMANA', 'Eksternal', 'CV AWI ASI', '', 39600000, 'RENOVASI TOKO BENGKEL AZZAHRA MOTOR, dengan status konsumen sudah menjalankan usaha dari tahun 2005', 'FORMULIR_PENGAJUAN1.pdf', 'DATA_KONSUMEN_(2).pdf', 'DATA_PELENGKAP_PENYEDIA_JASA_KONTRAKTOR1.pdf', 'PIC_dengan_rumah_konsumen.jpg', 'tampak_depan_usaha_konsumen.jpeg', 'DATA_PENYEDIA_JASA_LENGKAP.pdf', 'RAB_Detail_Penyedia_Jasa.pdf', 'mutasi_rekening_konsumen.jpeg', 'NPWP_PENYEDIA_JASA_(1).jpg', 'PIC_dengan_Penyedia_Jasa2.jpeg', '2019-10-03 02:46:42', '2019-10-07 10:01:47', 3, 29, 100, 192),
(31, 'SUBANDRI', 'Eksternal', 'CV AWI ASI', '', 39921000, 'Penambahan untuk renovasi 2 toko didepan rumah konsumen', 'PIC_dengan_rumah_konsumen1.jpg', 'FORMULIR_PENGAJUAN_KONSUMEN.pdf', 'DATA_PENYEDIA_JASA_LENGKAP1.pdf', 'PIC_dengan_Penyedia_Jasa3.jpeg', 'NPWP_PENYEDIA_JASA_(1)1.jpg', 'DATA_KONSUMEN32.pdf', 'IMG_20190923_115522.jpg', 'rab_kons_1-digabungkan.pdf', NULL, NULL, '2019-10-07 10:32:35', '2019-10-09 01:53:38', 3, 29, 100, 217),
(32, 'EVI DELIANA HZ', 'Eksternal', 'RUMAH INTERIOR/ FISKA AULITA SARI', 'Badan Usaha', 20000000, '', 'Dok_baru_2019-10-09_10.00.11.pdf', 'RAB18.pdf', 'PDF_KONSUMEN.pdf', 'PDF_PIHAK_KETIGA.pdf', 'BFI_evi.pdf', 'BFI_evi1.pdf', 'pihak_jasa_21.pdf', NULL, NULL, NULL, '2019-10-09 03:50:28', '2019-10-09 03:50:28', 3, 31, 96, 225),
(33, 'MEGA ROS SIMANJUNTAK', 'Eksternal', 'JAYA INTERIOR', 'Perorangan', 4000000, '', 'form_pengajuan6.pdf', 'pemohon_pdf2.pdf', 'pihak_jasa_pdf2.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-12 02:11:54', '2019-10-12 02:11:54', 1, 31, 96, 254),
(34, 'LILIS', 'Eksternal', 'AL BERKAH', 'Perorangan', 5200000, 'JASA AQIKAH', 'Form_Lilis.pdf', 'Data_Konsumen1.pdf', 'INVOICE_LILIS.jpeg', 'DATA_ALBERKAH.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-14 02:21:39', '2019-10-14 02:21:39', 1, 3, 35, 259),
(35, 'SUYADI', 'Eksternal', 'CHANAZ CATERING', '', 25000000, '', 'DATA_PIHAK_KE_32.pdf', 'FORM_CEKLIST1.pdf', 'form_PKS1.pdf', 'FORM_VERIFIKASI14.pdf', 'PAKET1.jpg', 'RK_HAMNAH1.pdf', 'DATA_KONSUMEN34.pdf', 'KK17.jpg', NULL, NULL, '2019-10-14 02:51:45', '2019-10-15 03:04:17', 3, 40, 58, 260),
(36, 'Wiwik Primasari', 'Eksternal', 'CV karya cipta mandiri', '', 40000000, '', 'data_konsumen9.pdf', 'DATA_PIHAK_35.pdf', 'BANGUNAN4.pdf', 'RAB20.pdf', 'mutasi_iwan.pdf', 'verifikasi_sari.pdf', NULL, NULL, NULL, NULL, '2019-10-15 02:36:50', '2019-10-15 04:31:14', 3, 18, 99, 266),
(37, 'Siti Rohmah', 'Eksternal', 'Lita Wedding', 'Perorangan', 35000000, 'Paket Aqiqah 300 Orang', 'Brosur_Lita_Wedding.pdf', 'Data_Lita_Wedding.pdf', 'Data_Siti_Rohmah.pdf', 'Data_Siti_Rohmah1.pdf', 'Rek_Mutasi_Tabungan_Lita_Wedding.pdf', 'Lokasi_Usaha_Lita_Wedding.pdf', NULL, NULL, NULL, NULL, '2019-10-16 03:55:55', '2019-10-16 03:55:55', 1, 15, 44, 281),
(38, 'RINA NURCAHYANTI', 'Eksternal', 'CATERING CONDONG ROSO', '', 15000000, 'CATERING TASYAKURAN KHITAN ACHMAD FITRAH P', 'data_konsumen10.pdf', 'PIHAK_3_DATA.pdf', 'verifikasi_revisi_PL.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-16 06:35:57', '2019-10-16 09:26:13', 3, 18, 99, 284),
(39, 'HENDRA GUNAWAN', 'Eksternal', 'RSIA YASMIN', 'Badan Usaha', 18833672, 'Pengajuan untuk biaya persalinan istri konsumen secara caesar dengan usia kandungan memasuki 9 bulan', 'invoice_rsia_yasmin.pdf', 'BNI_SYARIAH.docx', 'data_konsumen11.pdf', 'formulir_pengajuan.pdf', 'PIC_dengan_rumah_konsumen2.jpg', NULL, NULL, NULL, NULL, NULL, '2019-10-17 02:58:53', '2019-10-17 02:58:53', 3, 29, 100, 294),
(40, 'HERIYANTO', 'Eksternal', 'RAZEMA', '', 15000000, 'DATA LAIN AKAN DISIMPAN FTP', 'FORM_PERMOHONAN_PEMBIAYAAN3.pdf', 'SLIP_GAJI.pdf', 'UNDANGAN1.pdf', 'DAFTAR_MENU_(NEW).pdf', 'FORM_PENYEDIA_JASA.pdf', 'ktp_pemohon.jfif', 'ktp_istri_e_KTP.jpg', 'KTP_razema_pihak_ke_3.jfif', 'cover_buku_tab.jfif', NULL, '2019-10-19 02:55:44', '2019-10-21 04:45:07', 3, 32, 151, 318),
(41, 'Urip Waltiyah', 'Eksternal', 'Jhony Us', '', 14400000, 'Pengajuan konsumen untuk upah tukang perorangan', 'formulir_pengajuan1.pdf', 'data_konsumen12.pdf', 'data_penyedia_jasa7.pdf', 'pic_dengan_penyedia_jasa_(2).jpg', 'dapur_yang_ingin_direnovasi.jpg', 'pic_dengan_usaha_konsumen1.jpg', 'tampak_depan_rumah_yang_direnovasi.jpg', 'rumah_tukang.jpeg', 'rab_dari_penyedia_jasa.jpeg', 'nota_jual_beli_rumah.jpeg', '2019-10-22 09:03:57', '2019-10-23 10:26:15', 1, 29, 100, 333),
(42, 'Meindra Dwi Ananto', 'Eksternal', 'PT. Berkah Catering Nusantara', '', 12000000, 'Total pembiayaan yang diajukan Rp.12.000.000', 'PicsArt_10-31-10.19.06.jpg', 'PicsArt_10-31-10.23.01.jpg', 'PicsArt_10-31-10.34.18.jpg', 'Dok_baru_2019-10-31_09.24.01_7.jpg', 'PicsArt_10-23-09.30.062.jpg', 'PicsArt_10-24-09.20.221.jpg', 'IMG_20191023_0945292.jpg', 'IMG20191023151550.jpg', 'IMG20191023152545.jpg', 'IMG-20191031-WA0035.jpg', '2019-10-31 03:56:03', '2019-10-31 09:03:42', 0, 13, 127, 93),
(43, 'Regina oktaviandi', 'Eksternal', 'Hairina', 'Perorangan', 40000000, 'Pengajuan pembiayaan jasa catering a.n regina oktaviandi', 'form_partnership,_penawaran_harga,_dan_foto.pdf', 'data_penyedia_jasa_cinta_catering.pdf', 'bukti_penghasilan_pasangan.pdf', 'data_regina,_bukti_penghasilan,bkr.pdf', 'form_permohonan,_verfikasi,_anggaran_biaya_regina.pdf', NULL, NULL, NULL, NULL, NULL, '2019-11-04 03:23:49', '2019-11-04 03:23:49', 0, 16, 176, 401),
(44, 'Regina oktaviandi', 'Eksternal', 'Hairina', 'Perorangan', 40000000, 'Pengajuan pembiayaan jasa catering a.n regina oktaviandi', 'form_partnership,_penawaran_harga,_dan_foto1.pdf', 'data_penyedia_jasa_cinta_catering1.pdf', 'bukti_penghasilan_pasangan1.pdf', 'data_regina,_bukti_penghasilan,bkr1.pdf', 'form_permohonan,_verfikasi,_anggaran_biaya_regina1.pdf', NULL, NULL, NULL, NULL, NULL, '2019-11-04 03:24:21', '2019-11-04 03:24:21', 0, 16, 176, 402),
(45, 'Dina Karina', 'Eksternal', 'Andrianto', '', 15000000, 'Jasa pembuatan sumur bor', 'Doc_Nov_12_2019.pdf', 'ktpkk_peny_jasa.pdf', 'bukti_penghasilan_konsumen_2.pdf', 'jpg2pdf.pdf', 'cms_penyedia_jasa.jpg', 'BKR_KONSUMEN.pdf', 'IMG-20191113-WA0010.jpg', 'IMG-20191101-WA0010.jpg', 'IMG-20191101-WA0011.jpg', 'IMG-20191101-WA0022.jpg', '2019-11-06 02:48:12', '2019-11-20 09:47:42', 0, 21, 197, 417),
(46, 'Heru Priyantono', 'Eksternal', 'Annisa Aqiqah', 'Perorangan', 25000000, '', 'Nota_Pesanan_Heru.pdf', 'KTP7.pdf', 'KK8.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-08 08:13:08', '2019-11-08 08:13:08', 0, 1, 192, 441),
(47, 'Heru Priyantono', 'Eksternal', 'Annisa', 'Perorangan', 25000000, '', 'Form_Pemohon.pdf', 'Form_Penawaran.pdf', 'Form_Verifikasi_Cabang.pdf', 'KTP8.pdf', 'KK9.pdf', 'Slip_Gaji.pdf', NULL, NULL, NULL, NULL, '2019-11-11 00:32:48', '2019-11-11 00:32:48', 0, 1, 192, 444),
(48, 'Firdaus amri', 'Eksternal', 'Tukang.com', 'Badan Usaha', 9800000, 'Bor jet pump memakai jasa dari tukang.com. RAB terlampir', '20191111_163503.jpg', '20191111_163336.jpg', '20191111_163256.jpg', '20191111_162050.jpg', 'RAB_FIRDAUS_AMRI.pdf', NULL, NULL, NULL, NULL, NULL, '2019-11-11 12:18:40', '2019-11-11 12:18:40', 0, 42, 52, 449),
(49, 'Firdaus', 'Eksternal', 'Tukang.com', '', 9800000, 'Pasang jetpump menggunakan jasa dari tukang.com\r\nDengan RAB twrlampir', 'RAB_FIRDAUS_AMRI1.pdf', '20191111_1635031.jpg', '20191111_163323.jpg', '20191111_163256(0).jpg', 'Screenshot_20191112-110036_Samsung_Internet.jpg', 'IMG-20191112-WA0000.jpg', '20191111_1620501.jpg', '20191111_162031.jpg', '20191111_162022.jpg', 'form_pengajuan(1).pdf', '2019-11-12 04:07:48', '2019-11-12 09:32:30', 0, 42, 52, 449),
(50, 'SUPRIYADI', 'Eksternal', 'BENGKEL HAJI NIAM', 'Perorangan', 35000000, 'REPARASI TRUCK ', 'DATA_KONSUMEN40.pdf', 'DATA_PIHAK_37.pdf', 'TRUK.pdf', 'RAB_new.pdf', 'verifikasi_supri.pdf', NULL, NULL, NULL, NULL, NULL, '2019-11-12 04:28:52', '2019-11-12 04:28:52', 0, 18, 99, 453),
(51, 'ANDIRA ADETIA', 'Eksternal', 'RAZEMA', 'Perorangan', 34000000, 'DATA YANG LAIN MASUK DI FTP', 'KTP_ANDIRA_ADETIA.pdf', 'KTP_ISTRI.pdf', 'KARTU_KELUARGA,_KTP,_NPWP.pdf', 'pbb_rumah.pdf', 'kartu_keluarga_razema.pdf', 'cover_buku_tab1.jfif', 'KTP_razema_pihak_ke_31.jfif', 'undangan_baru.pdf', 'FORM_PERMOHONAN_PEMBIAYAAN4.pdf', 'FORM_CHECKLIST_PARTNERSHIP.pdf', '2019-11-13 10:34:18', '2019-11-13 10:34:18', 0, 32, 151, 318),
(52, 'Afandi Widodo', 'Internal', 'Yayasan Nurul Hayat', 'Badan Usaha', 3045000, 'Pengajuan My Hajat untuk Aqiqoh anak pemohon, acara dilakukan tanggal 21 November 2019', 'form_afandi_widodo.pdf', 'no_rekening_nurul_hayat.jpeg', 'invoice1.jpeg', 'REKENING_LISTRIK.jpeg', 'NPWP4.jpeg', 'KTP_PASANGAN1.jpeg', 'KTP8.jpeg', 'KK6.jpeg', NULL, NULL, '2019-11-15 08:31:43', '2019-11-15 08:31:43', 0, 41, 120, 484),
(53, 'Suriyah', 'Eksternal', 'CV Mercu Wahana', '', 13850100, '', 'Suriyah_Pemohon.pdf', 'Suriyah_RAB.pdf', 'Suriyah_Verifikasi_Revisi.pdf', 'RAB_Suriyah.pdf', 'KTP9.jpeg', 'KK7.jpeg', 'Invoice_1.jpeg', 'SIUP1.pdf', NULL, NULL, '2019-11-20 06:35:33', '2019-11-20 07:16:56', 0, 1, 192, 503),
(54, 'HERI IRAWAN', 'Eksternal', 'RUMAH CANTIK/ FISKA AULITA SARI', '', 20000000, '', 'PDF_KONS.pdf', 'PDF_KAPASITAS.pdf', 'PDF_CMS_DITEMPAT_USAHA.pdf', 'PDF_PIHAK_KETIGA1.pdf', 'pihak_jasa_22.pdf', 'Dok_baru_2019-11-25_14.46.511.pdf', NULL, NULL, NULL, NULL, '2019-11-22 03:24:04', '2019-11-26 02:55:15', 0, 31, 96, 515),
(55, 'HERI IRAWAN', 'Eksternal', 'RUMAH CANTIK/ FISKA AULITA SARI', '', 20107500, '', 'pdf_form_pengajuan.pdf', 'PDF_KONS1.pdf', 'PDF_KAPASITAS1.pdf', 'PDF_CMS_DITEMPAT_USAHA1.pdf', 'PDF_PIHAK_KETIGA2.pdf', 'pihak_jasa_23.pdf', 'Dok_baru_2019-11-25_14.46.51.pdf', NULL, NULL, NULL, '2019-11-25 03:03:33', '2019-11-26 02:39:33', 0, 31, 96, 523),
(56, 'EPENDI', 'Eksternal', 'AL BERKAH', 'Perorangan', 5200000, 'PENGAJUAN AQIQAH', 'DATA_ALBERKAH1.pdf', 'Data_efendi.pdf', 'ependi_aqiqah.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-26 05:13:03', '2019-11-26 05:13:03', 0, 3, 35, 259),
(57, 'Julianah', 'Eksternal', 'Indah ', 'Perorangan', 30000000, '', 'permohonan_julianah.zip', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-03 07:13:09', '2019-12-03 07:13:09', 0, 14, 183, 557),
(58, 'WILDAYANI', 'Eksternal', 'HESTY', 'Perorangan', 25000000, 'DAT ALAIN AKAN DISIMPAN DI FTP', 'kk_pihak_ke_3.pdf', 'FORM_CHEKLIST_PENGAJUAN_FPP.pdf', 'slip_gaji_suami.pdf', 'Dok_baru_2019-11-28_12.17.18_(1).pdf', 'FORM_PERJANJIAN_PENGADAAN_JASA1.pdf', 'SERTIFIKAT_RUMAH.pdf', 'UNDANGAN3.pdf', 'DAFTAR_MENU_MAKANAN.pdf', 'SLIP_GAJI_WILDAYANI.pdf', 'KTP_SUAMI_ISTERI,_KARTU_KELUARGA.pdf', '2019-12-10 08:48:31', '2019-12-10 08:48:31', 0, 32, 151, 589),
(59, 'Julianah', 'Eksternal', 'Indah Dekorasi', 'Perorangan', 10000000, 'Nama anak yang di aqiqah : Yuri Phasa Ananda', 'pengajuan_julianah.zip', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-12 07:30:19', '2019-12-12 07:30:19', 0, 14, 183, 601),
(60, 'HAMDAN RASMI', 'Eksternal', 'SUPRAPTO', '', 38000000, 'RAB TERBARU DAN KEKURANGAN FORM FORM CHEKLIS', 'pdf_form.pdf', 'pdf_konsumen4.pdf', 'pdf_peranjian_jasa.pdf', 'pdf_pihak_jasa3.pdf', 'pdf_survey.pdf', 'RAB_terbARU.pdf', 'FORMC_CHEKLIS.pdf', NULL, NULL, NULL, '2019-12-24 07:05:42', '2019-12-26 04:56:38', 0, 31, 96, 657),
(61, 'Ferdian Wahyu Purnama', 'Eksternal', 'Puspita Salon', '', 32500000, 'Pemohon mengajukan pembiayaan untuk acara khitanan anak pertamanya dengan menggunakan WO Puspita Salon dengan jumlah biaya Rp. 32.500.000. Acara akan dilaksanakan pada tanggal 26 Januari 2020.', 'Ferdian_DK.pdf', 'Ferdian_Penyedia_Jasa.pdf', 'Form_Checklist_Ferdian.pdf', 'FPP_Ferdian(1).pdf', 'Form_Survei_Ferdian.pdf', 'Invoice_Ferdian.pdf', 'Foto_Survey_Rumah_Ferdian.pdf', NULL, NULL, NULL, '2019-12-31 03:36:07', '2020-01-03 01:54:31', 0, 5, 160, 676),
(62, 'IKHDA MAULIDIYAH RAKHMAH', 'Eksternal', 'BUBIN CATERING', 'Badan Usaha', 40000000, 'Pembiayaan My Hajat Jasa Catering untuk acara tanggal 01 Februari 2020 ', 'FPP.jpg', 'Form_Verivikasi_(1).jpg', 'Form_Verivikasi_2.jpg', 'Form_verivikasi_(3).jpg', 'Form_Verifikasi_(4).jpg', 'Fom_Verifikasi_(5).jpg', 'Fom_Verifikasi_(6).jpg', 'Form_partnership_myhajat.jpg', 'KK,KTP,_BKR,_SLIP_GAJI_KONSUMEN.pdf', 'DATA_BUBIN_CATERING.pdf', '2020-01-10 03:50:29', '2020-01-10 03:50:29', 0, 13, 134, 705),
(63, 'ROSIRIYANI', 'Eksternal', 'SLAMET RAHMANTO', '', 5250000, 'BKR ATAS NAMA MENANTU TERLAMPIR KTP DAN KK MENANTU', 'DATA_KONSUMEN_ROSIRIYANI.pdf', 'DATA_TUKANG1.pdf', 'FORM_FORM.pdf', 'PBB_KONSUMEN1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-11 05:07:39', '2020-02-12 02:16:05', 0, 38, 36, 831),
(64, 'FARIED BUDIMAN', 'Eksternal', 'DAPUR UMMY CATERING', '', 15000000, 'KATEGORI MY HAJAT UNTUK  JASA CATERING', 'DATA_PEMOHON_NEW.pdf', 'NOTA_penjualan_kantin_pemohon_NEW.pdf', 'NOTA_penjualan_toko_online_pemohon_NEW.pdf', 'Dapur_Ummy_Catering.pdf', 'RAB16.jpeg', 'Form_Survey_FPP_checklist_NEW.pdf', 'RAB_Dapur_Ummi.pdf', NULL, NULL, NULL, '2020-02-12 07:17:09', '2020-02-12 09:00:12', 0, 3, 226, 841),
(65, 'FRENGKI', 'Eksternal', 'SUSAN KONTINUS ', '', 14944000, 'Pemohon atas nama frengki mengajukan pembiayaan my hajat untuk pembuatan barak/kost dengan nilai pengajuan jasa tukang sebesar 14.944,000', 'DATA_KONSUMEN56.pdf', 'BKR4.pdf', 'BUKTI_KAPASITAS.pdf', 'DATA_PENYEDIA_JASA19.pdf', 'FPP_DAN_FORM_SURVEI_FRENGKY.pdf', 'BAGIAN_YG_AKAN_DIRENOVASI.pdf', 'BKR_LOKASI_YG_DI_RENOVASI.pdf', NULL, NULL, NULL, '2020-02-12 08:35:43', '2020-02-17 06:12:37', 0, 29, 222, 843),
(66, 'MULYANTI', 'Eksternal', 'LUNAS CATERING', '', 15000000, '', 'FORM_CHEKLIS.pdf', 'form_ppengajuan.pdf', 'fpp_dan_form_survey.pdf', 'mou_kerja_sama.pdf', 'pdf_kons_dan_cms.pdf', 'pdf_konsumen7.pdf', 'pdf_pihak_jasa6.pdf', 'PENAWARAN.pdf', 'RAB35.pdf', 'KTP_CALON_PENGANTIN.jpg', '2020-02-17 05:59:24', '2020-02-17 08:23:15', 0, 31, 96, 862),
(67, 'WILSON RIO BAOEN', 'Eksternal', 'PONDOK DUYUNG', '', 20000000, 'Acara Khitanan Untuk Tanggal 24 Maret 2020', 'FORM_CEKLIST_RIO.pdf', 'FPP_RIO.pdf', 'VERIFIKASI_Survei_rio.pdf', 'anggaran_rio.pdf', 'INPUT_RIO.odt', 'INPUT_PENYEDIA_JASA.odt', 'FOTO_USAHA_2.jpeg', 'FOTO_USAHA_3.jpeg', 'FOTO_USAHA.jpeg', NULL, '2020-02-27 02:35:36', '2020-02-27 08:31:02', 0, 33, 111, 935),
(68, 'Mochamad Qoyum', 'Internal', 'Een Suhendi', 'Perorangan', 19180000, '', 'DATA_QOYUM.pdf', 'FORM_CEKLIS_DAN_FPP_QOYUM.pdf', 'FORM_VERIFIKASI_DAN_SURVEI_QOYUM.pdf', 'DATA_PENYEDIA_JASA20.pdf', 'INVOICE_QOYUM.jpeg', NULL, NULL, NULL, NULL, NULL, '2020-02-28 03:47:50', '2020-02-28 03:47:50', 0, 7, 60, 947),
(69, 'ANDRI YAHRINI', 'Eksternal', 'bengkel las lian jaya', '', 40000000, '', 'ceklis(1).pdf', 'form_survey(1).pdf', 'fpp(1).pdf', 'data_peny_jasa.pdf', 'data_konsumen53.pdf', 'rektab.pdf', 'rektab_desember1.pdf', 'rektab_januari(1)1.pdf', 'lokasi_pagar(1)1.pdf', 'RAB_dan_Email.jpg', '2020-03-06 02:18:04', '2020-03-07 01:13:34', 0, 18, 225, 988),
(70, 'asmad', 'Eksternal', 'sutono', '', 17000000, 'pembiayaan untuk ongkos tukang selama 20 hari Rp 17.000.000 \r\ndata yang dilampirkan fpp, form checklist, form survey cabang, form perjanjian penyedia jasa, form verifikasi penyedia jasa, form rab, foto pic bfi dengan penyedia jasa dan konsumen.\r\ndata konsumen terkait ktp suami istri, kk, rincian penghasilan, rekening listrik, akta jual beli rumah, foto usaha, foto rumah yg mau dibangun.\r\ndata ph3 terkait ktp, kk, cover tabungan.', 'data_konsumen56.pdf', 'data_penyedia_jasa15.pdf', 'SEMUA_FORM_KONSUMEN.pdf', 'ANALISA_PENGHASILAN_ASMAD.pdf', 'ktp_konsumen5.jpg', 'ktp_penyedia_jasa1.jpg', 'form_RAB.pdf', NULL, NULL, NULL, '2020-03-24 04:08:05', '2020-03-24 10:48:15', 0, 27, 73, 1182),
(71, 'RAKHMAT NIRWANSYAH', 'Eksternal', 'AGUS TEKNIK', '', 5000000, 'FILE YANG LAIN ADA DI FTP', 'Form_Verifikasi_Dan_Survey_2.pdf', 'FPP_2.pdf', 'Lembar_Ceklis_2.pdf', 'KK_KONS.jpg', 'KTP_KONS.jpg', 'KTP_PASANGAN_KONS.jpg', 'INVOICE_RESMI.jpg', 'REKENING_LISTRIK_KONS1.jpg', 'SLIP_GAJI_KONS.jpg', 'PIC_BFI_DI_TEMPAT_PENYEDIA_BARANG.jpg', '2020-03-24 08:07:16', '2020-03-24 09:42:21', 0, 8, 229, 1188);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_my_hajat_lainnya`
--
ALTER TABLE `tb_my_hajat_lainnya`
  ADD PRIMARY KEY (`id_myhajat_lainnya`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_my_hajat_lainnya`
--
ALTER TABLE `tb_my_hajat_lainnya`
  MODIFY `id_myhajat_lainnya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
