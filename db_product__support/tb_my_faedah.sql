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
-- Struktur dari tabel `tb_my_faedah`
--

CREATE TABLE `tb_my_faedah` (
  `id_myfaedah` int(11) NOT NULL,
  `nama_konsumen` varchar(255) NOT NULL DEFAULT '',
  `jenis_konsumen` varchar(255) NOT NULL DEFAULT '',
  `nama_vendor` varchar(255) NOT NULL DEFAULT '',
  `jenis_vendor` varchar(255) NOT NULL DEFAULT '',
  `lama_usaha` varchar(255) NOT NULL DEFAULT '',
  `nama_barang` varchar(255) NOT NULL DEFAULT '',
  `kondisi_barang` varchar(255) NOT NULL DEFAULT '',
  `jumlah_barang` int(11) NOT NULL DEFAULT 0,
  `merek_barang` varchar(255) NOT NULL DEFAULT '',
  `warna_barang` varchar(255) NOT NULL DEFAULT '',
  `tahun` varchar(255) NOT NULL DEFAULT '',
  `harga_barang` bigint(20) NOT NULL DEFAULT 0,
  `tujuan_pembelian` varchar(255) DEFAULT 'NULL',
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
-- Dumping data untuk tabel `tb_my_faedah`
--

INSERT INTO `tb_my_faedah` (`id_myfaedah`, `nama_konsumen`, `jenis_konsumen`, `nama_vendor`, `jenis_vendor`, `lama_usaha`, `nama_barang`, `kondisi_barang`, `jumlah_barang`, `merek_barang`, `warna_barang`, `tahun`, `harga_barang`, `tujuan_pembelian`, `informasi_tambahan`, `upload_file1`, `upload_file2`, `upload_file3`, `upload_file4`, `upload_file5`, `upload_file6`, `upload_file7`, `upload_file8`, `upload_file9`, `upload_file10`, `date_created`, `date_modified`, `id_approval`, `id_cabang`, `id_user`) VALUES
(28, 'BAMBANG SUTADI', 'Eksternal', 'CV KANGEN KINGDOM INDONESIA', 'Badan Usaha', '1 TAHUN', 'MESIN AIR MINERAL KANGEN WATER', 'Baru', 1, 'LEVELUK JR II', 'PUTIH', '2019', 27050000, 'Produktif', '', 'KTP_PEMOHON.jpg', 'KTP_ISTRI.jpg', 'KK_PEMOHON.jpg', 'BKR_PBB.jpg', 'BUKTI_PENGHASILAN.jpg', 'PEMBUKUAN_BAMBANG.xlsx', 'FORM_PENGAJUAN.pdf', 'Form_Verifikasi.pdf', 'Berkas_Penyedia_Jasa.pdf', NULL, '2019-08-19 11:18:32', '2019-08-20 10:36:22', 3, 37, 74),
(29, 'Neni Yusnia', 'Eksternal', 'Raja Sepeda', 'Perorangan', '6 Tahun ', 'SEPEDA', 'Baru', 1, 'XTRADA 5.0 NEW DAN THRILL RAVAGE 5.0', 'BIRU HITAM', '2019', 11755000, 'Konsumtif', 'New Debitur di BFI Syariah dengan pembiayaan My Faedah (Sepeda) dengan tipe  XTRADA 5.0 NEW dan THRILL RAVAGE 5.0 2019', 'neni_sepeda_form.pdf', 'ktp_neni.jpeg', 'kk_neni.jpeg', 'bkr_neni.jpeg', 'sku_neni.jpeg', 'ktp_pasangan_nico.jpeg', 'kk_nico.jpeg', 'WhatsApp_Image_2019-08-09_at_12.24.42.jpeg', 'WhatsApp_Image_2019-08-09_at_12.24.421.jpeg', 'usha_neni_1.jpeg', '2019-08-19 23:52:43', '2019-08-20 02:57:54', 3, 24, 70),
(30, 'Boby Akbar', 'Internal', 'Sugianto', 'Perorangan', '19 Tahun', 'Barang bangunan', 'Baru', 55, 'Barang bangunan', '-', '2019', 30086500, 'Konsumtif', 'Pengajuan pembiayaan my faedah pembelian barang bangunan a.n boby akbar ', 'formulir_pengajuan_pembiayaan_syariah_boby_akbar_baru.pdf', 'bkr_boby_akbar.pdf', 'data_penyedia_jasa_toko_bangunan_dan_nota_barang.pdf', 'formulir_partnership_my_faedah_toko_hero_jaya.pdf', 'foto_toko_dan_foto_barang.pdf', 'form_pengajuan_my_faedah_bobi_akbar.pdf', 'data_bobi_akbar.pdf', NULL, NULL, NULL, '2019-08-20 02:57:06', '2019-08-20 09:14:41', 3, 16, 31),
(31, 'Boby Akbar', 'Internal', 'Sugianto', 'Perorangan', '19 Tahun', 'Barang bangunan', 'Baru', 55, 'Barang bangunan', '-', '2019', 30086500, 'Konsumtif', 'Pengajuan pembiayaan my faedah pembelian barang bangunan a.n boby akbar ', 'formulir_pengajuan_pembiayaan_syariah_boby_akbar_baru1.pdf', 'bkr_boby_akbar1.pdf', 'data_penyedia_jasa_toko_bangunan_dan_nota_barang1.pdf', 'formulir_partnership_my_faedah_toko_hero_jaya1.pdf', 'foto_toko_dan_foto_barang1.pdf', 'form_pengajuan_my_faedah_bobi_akbar1.pdf', 'data_bobi_akbar1.pdf', NULL, NULL, NULL, '2019-08-20 02:57:15', '2019-08-20 08:00:00', 1, 16, 31),
(32, 'Emy Susanti', 'Eksternal', 'Sugianto', 'Perorangan', '19 Tahun', 'Barang Bangunan', 'Baru', 19, 'Barang bangunan', '-', '2019', 13066000, 'Konsumtif', 'Pengajuan my faedah pembelian barang bangunan a.n emy susanti', 'form_pengajuan_my_faedah_emy_susanti.pdf', 'data_penyedia_jasa_toko_bangunan.pdf', 'data_emy_susanti.pdf', 'formulir_partnership_my_faedah_toko_hero_jaya2.pdf', 'foto_toko_dan_foto_barang2.pdf', 'nota_barang_yang_akan_di_beli.pdf', 'Memo_emy_susanti1.pdf', NULL, NULL, NULL, '2019-08-20 03:04:04', '2019-08-20 09:13:51', 3, 16, 31),
(33, 'Emy Susanti', 'Eksternal', 'Sugianto', 'Perorangan', '19 Tahun', 'Barang Bangunan', 'Baru', 19, 'Barang bangunan', '-', '2019', 13066000, 'Konsumtif', 'Pengajuan my faedah pembelian barang bangunan a.n emy susanti', 'form_pengajuan_my_faedah_emy_susanti1.pdf', 'data_penyedia_jasa_toko_bangunan1.pdf', 'data_emy_susanti1.pdf', 'formulir_partnership_my_faedah_toko_hero_jaya3.pdf', 'foto_toko_dan_foto_barang3.pdf', 'nota_barang_yang_akan_di_beli1.pdf', 'Memo_emy_susanti.pdf', NULL, NULL, NULL, '2019-08-20 03:04:15', '2019-08-20 08:03:11', 1, 16, 31),
(34, 'RM GIAN PRATAMA PUTRA', 'Eksternal', 'RATU IRAMA ELECTRONIK', 'Perorangan', '40 TAHUN', 'KIPAS BLOWER', 'Baru', 6, 'SEKAI', 'HITAM', '2019', 21600000, 'Produktif', '', 'foto_rumah_rm_gian.pdf', 'Form_Pengajuan_Permohonan1.pdf', 'DATA_RATU_IRAMA1.pdf', 'DATA_GIAN.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-20 03:19:23', '2019-08-20 10:36:11', 3, 16, 31),
(35, 'Neni Yusnia ', 'Eksternal', 'Raja Sepeda', 'Perorangan', '6 Tahun', 'Sepeda ', 'Baru', 2, 'Polygon Xtrada 5.0 M 27.5 Dan Thrill Ravage 5.0 M 27.5 ', 'Biru Hitam', '2019', 11755000, 'Konsumtif', 'New Debitur di BFI Syariah dengan pembiayaan My Faedah Sepeda Polygon Xtrada 5.0 m 27.5\" dan Thrill Ravage 5.0 M 27.5\" dengan total harga 11755000', 'kk_neni1.jpeg', 'ktp_neni1.jpeg', 'bkr_neni1.jpeg', 'ktp_pasangan.jpeg', 'usha_neni_11.jpeg', 'ktp_pasangan_nico1.jpeg', 'kk_nico1.jpeg', 'sku_neni1.jpeg', 'sku_neni2.jpeg', 'WhatsApp_Image_2019-08-09_at_12.24.422.jpeg', '2019-08-21 00:28:24', '2019-08-21 01:45:40', 3, 24, 70),
(36, 'SUPARNA', 'Eksternal', 'CV KANGEN KINGDOM INDONESIA', 'Badan Usaha', '1 TAHUN', 'MESIN AIR MINERAL LEVELUK JR II', 'Baru', 1, 'LEVELUK JR II', 'PUTIH', '2019', 27050000, 'Produktif', 'DENGAN PENYEDIA BARANG YANG SAMA ', 'KTP_PEMOHON1.jpg', 'KTP_ISTRI1.jpg', 'KK_PEMOHON1.jpg', 'BKR_PBB1.jpg', 'BKR_REK_LISTRIK.jpg', 'BUKTI_PENGHASILAN1.jpg', 'BUKTI_PENGHASILAN2.jpg', 'DOKUMEN_PENYEDIA_JASA_27.pdf', 'Akta_Pendirian.pdf', 'FORM_PENGAJUAN2.pdf', '2019-08-21 03:46:56', '2019-08-22 03:16:53', 3, 37, 74),
(37, 'Muh Ahsan Zamzami ', 'Eksternal', 'Raja Sepeda', 'Perorangan', '6 Tahun', 'Sepeda', 'Baru', 1, 'Xtrada 6.0', 'Hitam ', '2019', 6700000, 'Konsumtif', 'New Debitur di BFI Syariah dengan pembiayaan produk My Faedah Sepeda dengan tipe Xtrasa 6.0 dengan harga 6700000', 'WhatsApp_Image_2019-08-09_at_12.24.423.jpeg', 'ktp_pasangan_nico2.jpeg', 'kk_nico2.jpeg', 'WhatsApp_Image_2019-08-21_at_14.31.38.jpeg', 'WhatsApp_Image_2019-08-21_at_14.31.38_(1).jpeg', 'WhatsApp_Image_2019-08-21_at_14.33.07.jpeg', 'WhatsApp_Image_2019-08-21_at_14.33.06.jpeg', 'WhatsApp_Image_2019-08-21_at_14.31.37.jpeg', 'form_Ahsan_Sepeda.pdf', NULL, '2019-08-21 07:48:18', '2019-08-22 08:13:37', 3, 24, 70),
(38, 'ENCEP DEDI S', 'Eksternal', 'CV KANGEN KINGDOM INDONESIA', 'Badan Usaha', '1 TAHUN', 'MESIN AIR MINERAL', 'Baru', 1, 'LEVELUK JR II', 'PUTIH', '2019', 27050000, 'Produktif', 'DENGAN PENYEDIA JASA YANG SAMA DAN SUDAH BEKERJA SAMA', 'KTP_PEMOHON2.jpg', 'KTP_ISTRI2.jpg', 'KK_PEMOHON2.jpg', 'BUKTI_PENGHASILAN_1.jpg', 'BUKTI_PENGHASILAN_2.jpg', 'BKR.pdf', 'DOKUMEN_PENYEDIA_JASA_271.pdf', 'Akta_Pendirian1.pdf', 'FORM_PENGAJUAN1.pdf', NULL, '2019-08-21 10:15:06', '2019-08-22 04:50:33', 3, 37, 74),
(40, 'DESI ARISANDI', 'Eksternal', 'CV QUAZONE WATERINDO', 'Badan Usaha', '9 TAHUN', '1 PAKET MESIN DEPOT AIR MINUM', 'Baru', 4, 'ANOTEC', 'VARIASI', '2019', 35000000, 'Produktif', 'PENGAJUAN UNTUK PEMBELIAN 1 SET MESIN DEPOT AIR', 'PEMOHON.pdf', 'PIHAK_JASA.pdf', 'FORM.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-21 12:03:46', '2019-08-22 09:24:23', 3, 31, 95),
(41, 'SUMARDI SEGA', 'Eksternal', 'VITA KARYA FURNITURE INTERIOR', 'Perorangan', '6 THN', 'BARANG MODAL GEROBAK', 'Baru', 4, 'TANPA MERK DAN TYPE', 'SILVER', '2019', 20000000, 'Produktif', 'HARGA PER UNT 5 JUTA\r\nPENGAJUAN 4 GEROBAK = RP. 20.000.000', 'DATA_KONS.pdf', 'FORM_SUMARDI_SEGA.pdf', 'DATA_PHK_3.pdf', 'foto_gerobak.jpeg', 'foto_gerobak2.jpeg', 'foto_gerobak3.jpeg', 'RK1.jpeg', 'RK2.jpeg', 'Re_NST_Pembelian_material_ke_Penyedia_Jasa.eml', NULL, '2019-08-22 03:58:53', '2019-08-22 04:10:36', 1, 3, 35),
(42, 'EKA SRI WARTINA', 'Eksternal', 'MEKAR JAYA ELEKTRONIK', 'Badan Usaha', '25 THN', 'Televisi 50 Inch POLYTRON LED', 'Baru', 1, '50 Inch POLYTRON LED', 'HITAM', '2019', 5150000, 'Konsumtif', '', 'Data_kons_Eka_Sri_wartina.pdf', 'RK_eka.pdf', 'INVOICE_TV.jpeg', 'BARANG_TV.jpeg', 'LEGALITAS_MEKAR_JAYA_ELEKTRONIK.pdf', 'BRI_Internet_Banking_Juni_2019.pdf', 'BRI_Internet_Banking_Juli_2019.pdf', 'BRI_Internet_Banking_Agustus_2019.pdf', 'PIC_+_OWNER.jpeg', 'Form_Eka_Sri_W.pdf', '2019-08-22 04:07:21', '2019-08-22 08:12:04', 3, 3, 35),
(43, 'INDRA RAYA NITA', 'Eksternal', 'CHIP PROFESSIONAL KOMPUTER', 'Perorangan', '6THN', 'LAPTOP ASUS TIPE X441UB', 'Baru', 1, 'ASUS TIPE X441UB', 'MERAH', '2019', 6750000, 'Konsumtif', '-', 'Dok_baru_2019-08-22_15.39.35.pdf', 'Dok_baru_2019-08-22_16.00.26.pdf', 'FORM1.pdf', 'KK.pdf', 'REK.LISTRIK.pdf', 'BUKTI_PENGHASILAN_1.pdf', 'KK_DAN_KTP.pdf', 'TDP.pdf', 'SIUP.pdf', 'FOTO_CMS,_PIHAK_KETIGA_DAN_KANTOR,_DAN_PENAWARAN_HARGA.pdf', '2019-08-22 07:04:22', '2019-08-22 09:51:52', 3, 31, 96),
(44, 'RIZAL', 'Internal', 'MEKAR JAYA ELEKTRONIK', 'Badan Usaha', '25 THN', 'SPEAKER AKTIF', 'Baru', 2, 'POLYTRON', 'COKLAT', '2019', 3400000, 'Konsumtif', 'Rp. 1.700.000 / Unit\r\nPengajuan 2 unit = Rp. 3.400.000\r\n', 'F_419_Rizal.pdf', 'FORM_RIZAL.pdf', 'KK.jpeg', 'KTP_PEMOHON.jpeg', 'KTP_PASANGAN.jpeg', 'LEGALITAS_MEKAR_JAYA_ELEKTRONIK1.pdf', 'FOTO_USAHA_MEKAR_JAYA.pdf', 'BRI_Internet_Banking_Juni_20191.pdf', 'BRI_Internet_Banking_Juli_20191.pdf', 'Re_Penyimpangan_jenis_barang_yang_di_biayai_Myfaedah_-_Comloan.eml', '2019-08-23 01:17:19', '2019-08-23 06:39:18', 3, 3, 35),
(45, 'Lalu Ismail', 'Eksternal', 'Raja Sepeda', 'Perorangan', '6 Tahun', 'Sepeda', 'Baru', 1, 'Thriil 27.5\" Ravage 5.0 ', 'Hitam ', '2019', 6000000, 'Konsumtif', 'New debitur di BFI Syariah dengan pembiayaan produk My Faedah Sepeda Thrill 27.5\" Ravege 5.0 dengan harga 6.000.000', 'form_L_ismail.pdf', 'kk_pemohon.jpeg', 'ktp_pasangan1.jpeg', 'ktp_pemohon.jpeg', 'SKU_Isteri.jpeg', 'slip_gaji_pemohon.jpeg', 'ktp_pasangan_nico3.jpeg', 'kk_nico3.jpeg', 'WhatsApp_Image_2019-08-09_at_12.24.424.jpeg', NULL, '2019-08-23 07:27:20', '2019-08-23 07:49:11', 3, 24, 70),
(46, 'ESTHER NANCY TOTIAN', 'Eksternal', 'CV KANGEN KINGDOM INDONESIA', 'Badan Usaha', '1 TAHUN', 'MESIN AIR MINERAL KANGEN WATER', 'Baru', 1, 'LEVELUK JR II', 'PUTIH', '2019', 27050000, 'Produktif', 'DENGAN PENYEDIA JASA YANG SAMA DAN SUDAH BEKERJA SAMA', 'KTP_PEMOHON3.jpg', 'KK_PEMOHON3.jpg', 'BKR_PBB_PEMOHON.jpg', 'BUKTI_PENGHASILAN.pdf', 'DOKUMEN_PENYEDIA_JASA_272.pdf', 'AKTA_PENDIRIAN_KANGEN_KINGDON_INDONESIA.pdf', 'FORM_PENGAJUAN3.pdf', NULL, NULL, NULL, '2019-08-26 02:51:47', '2019-08-26 04:09:24', 3, 37, 74),
(47, 'KARIMI', 'Eksternal', 'TOKO ZIDANE', 'Perorangan', '+/-9THN', 'KERAMIK, SEMEN, PASIR DLL', 'Baru', 22, 'MULTI ITEM', 'MULTI ITEM', '0', 13886000, 'Konsumtif', '', 'DATA_KONSUMEN.pdf', 'DATA_PENYEDIA_BARANG.pdf', 'FOTO_BARANG.pdf', 'form_pengajuan_dan_verifikasi.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-26 09:54:41', '2019-08-27 04:01:00', 3, 28, 108),
(48, 'nono sunoto', 'Eksternal', 'iing solihin', 'Perorangan', '14th', 'pagar,plafond,tiang torn', 'Baru', 3, 'besi holo', 'hitam', '2013', 10350000, 'Konsumtif', 'barang tsb belum di kerjakan, akan di kerjakan apabila sudah ada keputusan dari bfi, data ada di ftp cirebon syariah', 'ktp_suami_istri.jpeg', 'Dok_baru_2019-08-27_08.15.25(1).pdf', 'foto_suami_istri.jpeg', 'rumah_konsumen.jpeg', 'bukti_penghasilan_istri.jpeg', 'penghasilan_suami.jpeg', 'WhatsApp_Image_2019-08-26_at_10.32.09(1).jpeg', 'WhatsApp_Image_2019-08-26_at_10.32.10(1).jpeg', 'pic_dengan_penyedia_jasa.jpeg', 'ktp_tukang_.jpeg', '2019-08-27 01:54:24', '2019-08-27 03:04:34', 3, 10, 113),
(49, 'David Kurnia Wawoh', 'Eksternal', 'Bengkel Las Karya Indah ', 'Perorangan', '10 tahun ', 'Besi, reng, baut, atap spandek ', 'Baru', 6, 'Taso', 'hitam ', '2019', 5997800, 'Konsumtif', '', 'ktp_kk_kons_david.pdf', 'AAJB_Kons_DAVID.pdf', 'rek_kons_david.pdf', 'foto_david.pdf', 'my_faedah_kons_david.pdf', 'Bengkel_Las_Karya_Indah.pdf', NULL, NULL, NULL, NULL, '2019-08-27 02:35:48', '2019-08-27 03:26:02', 3, 29, 101),
(50, 'hedie wahyudie', 'Eksternal', 'febriaji', 'Badan Usaha', '9th', 'bahan material bangunan', 'Baru', 11, 'hebel,besi,semen,pasir', 'a', '2019', 41275000, 'Produktif', 'bahan bangunan tsb akan di gunakan untuk pembuatan showroom mobil, yang sebelumnya mobil ia letakan di pinggir jalan,sebagian data ada di ftp cirebon syariah', 'hedot.PDF', 'WhatsApp_Image_2019-08-27_at_11.36.10.jpeg', 'WhatsApp_Image_2019-08-27_at_11.36.07.jpeg', 'WhatsApp_Image_2019-08-27_at_11.36.06.jpeg', 'WhatsApp_Image_2019-08-27_at_11.36.101.jpeg', 'WhatsApp_Image_2019-08-27_at_12.56.34.jpeg', 'WhatsApp_Image_2019-08-27_at_12.56.35(1).jpeg', 'WhatsApp_Image_2019-08-27_at_12.56.35.jpeg', 'WhatsApp_Image_2019-08-27_at_12.56.37(1).jpeg', 'WhatsApp_Image_2019-08-27_at_12.56.31.jpeg', '2019-08-27 06:18:27', '2019-08-27 07:05:52', 3, 10, 113),
(51, 'husnul khotimah', 'Eksternal', 'yuli yanti', 'Perorangan', '15', 'bahan material', 'Baru', 9, 'a', 'a', '2019', 22621000, 'Konsumtif', 'barang tsb akan di gunakan untuk renovasi rumahnya,dan data sebagian ada di ftp cirebon syariah', 'Dok_baru_2019-08-29_09.47.19.pdf', 'WhatsApp_Image_2019-08-29_at_08.44.41.jpeg', 'kwitansi.pdf', 'WhatsApp_Image_2019-08-29_at_08.44.44.jpeg', 'WhatsApp_Image_2019-08-29_at_08.45.39(1).jpeg', 'WhatsApp_Image_2019-08-29_at_08.47.35.jpeg', 'WhatsApp_Image_2019-08-29_at_08.45.39.jpeg', 'WhatsApp_Image_2019-08-29_at_08.44.15.jpeg', 'WhatsApp_Image_2019-08-29_at_08.44.16.jpeg', 'WhatsApp_Image_2019-08-29_at_08.44.40.jpeg', '2019-08-29 02:57:28', '2019-08-29 03:56:23', 3, 10, 113),
(52, 'didi achmadi', 'Eksternal', 'dudi nursyalam', 'Perorangan', '15 tahun', 'besi,semen,cat', 'Baru', 123, 'bahan bangunan', 'a', '2019', 36379000, 'Produktif', 'untuk pembelian barang', 'gff.txt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-29 10:27:34', '2019-08-30 01:59:12', 1, 10, 114),
(53, 'didi achmadi', 'Eksternal', 'dudi nursyalam', 'Perorangan', '15 tahun', 'bahan material bangunan', 'Baru', 23, 'a', 'a', '123', 36378999, 'Konsumtif', 'untuk pembelian bahan bangunan dan data yg kurang ada di ftp', '20190830(1).pdf', 'kk_pemohon.jpg', 'ktp_pemohon_(2).jpg', 'slip_gaji.jpg', 'ktp_penyedia_barang.jpg', 'kk_penyedia_barang.jpg', 'pic_penyedia_barang.jpg', 'foto_toko.jpg', 'lokasi_yg_di_bangun_(1).jpg', 'ktp_istri_2.jpg', '2019-08-30 10:17:02', '2019-08-31 03:44:05', 3, 10, 114);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_my_faedah`
--
ALTER TABLE `tb_my_faedah`
  ADD PRIMARY KEY (`id_myfaedah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_my_faedah`
--
ALTER TABLE `tb_my_faedah`
  MODIFY `id_myfaedah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
