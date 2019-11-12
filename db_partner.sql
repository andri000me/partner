# Host: localhost  (Version 5.5.5-10.4.6-MariaDB)
# Date: 2019-11-12 21:24:59
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "partner"
#

CREATE TABLE `partner` (
  `Id_partner` int(11) NOT NULL AUTO_INCREMENT,
  `nama_usaha` varchar(255) DEFAULT NULL,
  `bidang_usaha` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `bentuk_usaha` varchar(255) DEFAULT NULL,
  `jumlah_karyawan` int(11) DEFAULT NULL,
  `tahun_berdiri` varchar(255) DEFAULT NULL,
  `barang_jual` varchar(255) DEFAULT NULL,
  `sosial_media` varchar(255) DEFAULT NULL,
  `status_tempat_usaha` varchar(255) DEFAULT NULL,
  `jenis_pembayaran` varchar(255) DEFAULT NULL,
  `omset` varchar(255) DEFAULT NULL,
  `jumlah_cabang` int(11) DEFAULT NULL,
  `promosi` varchar(255) DEFAULT NULL,
  `hobi` varchar(255) DEFAULT NULL,
  `punya_pinjaman` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id_partner`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `telepon` (`telepon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "partner"
#

