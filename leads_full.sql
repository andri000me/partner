-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_partner
CREATE DATABASE IF NOT EXISTS `db_partner` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_partner`;

-- Dumping structure for table db_partner.leads_full
CREATE TABLE IF NOT EXISTS `leads_full` (
  `id_leads` int(11) NOT NULL AUTO_INCREMENT,
  `nama_konsumen` varchar(255) DEFAULT NULL,
  `tanggal_lahir` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `nomor_wa` varchar(255) DEFAULT NULL,
  `soa` varchar(255) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `produk` varchar(255) DEFAULT NULL,
  `detail_produk` text DEFAULT NULL,
  `nama_event` varchar(255) DEFAULT NULL COMMENT 'Nama Event wajib diisi jika SOA event dipilih',
  `nama_partner` varchar(255) DEFAULT NULL COMMENT 'Nama Partner',
  `nama_agent` varchar(255) DEFAULT NULL COMMENT 'Nama Agent',
  `nik_egc` varchar(10) DEFAULT NULL COMMENT 'Khusus SOA EGC',
  `posisi_egc` varchar(255) DEFAULT NULL COMMENT 'Khusus SOA EGC',
  `cabang_egc` varchar(255) DEFAULT NULL COMMENT 'Khusus SOA EGC',
  `nomor_kontrak` varchar(255) DEFAULT NULL COMMENT 'Khusus SOA CGC & RO (Jika status konsumen RO Active)',
  `referral_konsumen` varchar(255) DEFAULT NULL COMMENT 'Nama Konsumen CGC & RO',
  `foto_usaha` varchar(255) DEFAULT NULL COMMENT 'Form Upload File',
  `leads_id` varchar(255) DEFAULT NULL,
  `no_ktp` varchar(255) DEFAULT NULL,
  `follow_up_by` varchar(255) DEFAULT NULL COMMENT 'Kunjungan / Telepon / Whatsapp / Email',
  `cross_branch` varchar(255) DEFAULT 'Yes / No',
  `cabang_cross` int(3) DEFAULT NULL COMMENT 'Foreign key cabang dari table branches',
  `surveyor` int(11) DEFAULT NULL COMMENT 'Foreign key id_user dari table users',
  `pekerjaan_konsumen` varchar(255) DEFAULT NULL COMMENT 'Karyawan/Wiraswasta',
  `email` varchar(255) DEFAULT NULL,
  `status_konsumen` varchar(255) DEFAULT NULL,
  `pic_ttd` int(11) DEFAULT NULL COMMENT 'Foreign key id_user dari table users',
  `status_pernikahan` varchar(255) DEFAULT NULL,
  `nama_pasangan` varchar(255) DEFAULT NULL COMMENT 'Jika status_pernikahan == sudah menikah',
  `appeal_nst` varchar(255) DEFAULT NULL COMMENT 'ya/tidak',
  `nilai_funding` bigint(20) DEFAULT NULL,
  `sudah_funding` enum('Belum','Sudah') DEFAULT 'Belum',
  `activity_marketing` varchar(255) DEFAULT NULL,
  `jenis_rumah` varchar(255) DEFAULT NULL,
  `luas_rumah` varchar(255) DEFAULT NULL,
  `lokasi_rumah` varchar(255) DEFAULT NULL,
  `status` enum('draft','lengkap','database') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_partner` int(11) DEFAULT NULL COMMENT 'ID Mapping Partner',
  `id_agent` int(11) DEFAULT NULL,
  `id_user` int(3) DEFAULT NULL,
  `id_branch` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_leads`),
  KEY `FK_leads_full_partners_full` (`id_partner`),
  KEY `FK_leads_full_agents` (`id_agent`),
  KEY `FK_leads_full_users` (`id_user`),
  KEY `FK_leads_full_branches` (`id_branch`),
  KEY `FK_leads_full_users_2` (`surveyor`),
  KEY `FK_leads_full_users_3` (`pic_ttd`),
  KEY `FK_leads_full_branches_2` (`cabang_cross`),
  CONSTRAINT `FK_leads_full_agents` FOREIGN KEY (`id_agent`) REFERENCES `agents` (`id_agent`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `FK_leads_full_branches` FOREIGN KEY (`id_branch`) REFERENCES `branches` (`id_branch`) ON UPDATE CASCADE,
  CONSTRAINT `FK_leads_full_branches_2` FOREIGN KEY (`cabang_cross`) REFERENCES `branches` (`id_branch`) ON UPDATE CASCADE,
  CONSTRAINT `FK_leads_full_partners_full` FOREIGN KEY (`id_partner`) REFERENCES `partners_full` (`id_partner`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `FK_leads_full_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE,
  CONSTRAINT `FK_leads_full_users_2` FOREIGN KEY (`surveyor`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE,
  CONSTRAINT `FK_leads_full_users_3` FOREIGN KEY (`pic_ttd`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=251 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
