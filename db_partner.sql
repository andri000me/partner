# Host: localhost  (Version 5.5.5-10.4.6-MariaDB)
# Date: 2020-01-30 14:35:29
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "agents"
#

CREATE TABLE `agents` (
  `id_agent` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT 'NULL' COMMENT 'Laki-Laki / Perempuan',
  `telepon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tanggal_lahir` varchar(255) DEFAULT 'NULL',
  `no_ktp` varchar(255) DEFAULT 'NULL',
  `no_npwp` varchar(255) DEFAULT 'NULL',
  `pekerjaan` varchar(255) DEFAULT NULL,
  `jenis_pekerjaan` varchar(255) DEFAULT NULL,
  `jenis_agent` varchar(255) DEFAULT NULL,
  `status_kepemilikan_rumah` varchar(255) DEFAULT 'NULL' COMMENT 'Status kepemilikan rumah: Milik Sendiri / Kontrak / Sewa / Keluarga',
  `income` bigint(20) DEFAULT 0 COMMENT 'Income saat ini',
  `punya_pinjaman` enum('Ya','Tidak') DEFAULT NULL,
  `afiliasi_travel` varchar(255) DEFAULT 'NULL' COMMENT 'Apakah afiliasi dengan travel / agent lainya?',
  `agent_konvensional` enum('Ya','Tidak') DEFAULT NULL COMMENT 'Apakah Agent BFI Konvensional? Ya / Tidak',
  `hubungan_karyawan_bfi` enum('Ada','Tidak Ada') DEFAULT NULL COMMENT 'Hubungan Dengan Kar. BFI?',
  `konsumen_bfi` enum('Pernah','Tidak Pernah') DEFAULT NULL COMMENT 'Pernah Menjadi Konsumen BFI ? Pernah / Tidak Pernah',
  `rekening_bank` varchar(255) DEFAULT 'NULL',
  `nama_bank` varchar(255) DEFAULT NULL,
  `cabang_bank` varchar(255) DEFAULT NULL,
  `atas_nama` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) NOT NULL COMMENT 'Form Upload File',
  `npwp` varchar(255) NOT NULL COMMENT 'Form Upload File',
  `buku_tabungan` varchar(255) NOT NULL COMMENT 'Form Upload File',
  `foto_selfie` varchar(255) NOT NULL COMMENT 'Form Upload File',
  `form_f100` varchar(255) DEFAULT NULL COMMENT 'Lampiran Form F100',
  `status` enum('draft','lengkap') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` int(3) NOT NULL,
  `id_branch` int(3) NOT NULL,
  PRIMARY KEY (`id_agent`),
  UNIQUE KEY `rekening_bank` (`rekening_bank`),
  UNIQUE KEY `ktp` (`no_ktp`),
  UNIQUE KEY `npwp` (`no_npwp`),
  KEY `id_user` (`id_user`),
  KEY `id_branch` (`id_branch`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1 COMMENT='Tabel Agent';

#
# Data for table "agents"
#

INSERT INTO `agents` VALUES (32,'Muhammad rashford','NULL','083488923487384','rashford@gmail.com','2020-01-11','2346238746238746','123498743982394','Swasta','main bole','Syariah Ambassador','Milik Sendiri',700000000,'Tidak','Tidak','Tidak','Ada','Tidak Pernah','3407234832748923','mandiri','Tangerang','Muhammad Rashford','MySafar.png','8_Agustus.png','MyIhram.png','22_Agustus_a.png','7_September_Cover.png','lengkap','2020-01-17 10:14:32','2020-01-17 10:14:32',164,7),(33,'asdas','NULL',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','',NULL,'draft','2020-01-17 13:55:36','2020-01-17 13:55:36',164,7);

#
# Structure for table "approval_bonuses"
#

CREATE TABLE `approval_bonuses` (
  `id_approval_bonus` int(11) NOT NULL AUTO_INCREMENT,
  `leads_id` varchar(16) NOT NULL DEFAULT '',
  `requester` int(11) DEFAULT NULL COMMENT 'foreign key table user',
  `cabang` int(11) DEFAULT NULL COMMENT 'foreign key table branches',
  `nama_konsumen` varchar(255) DEFAULT NULL,
  `tanggal_dibuat` datetime DEFAULT NULL,
  `produk` varchar(255) DEFAULT NULL,
  `sumber_lead` varchar(255) DEFAULT NULL,
  `nama_pemberi_lead` varchar(255) DEFAULT NULL,
  `nomor_kontrak` varchar(10) DEFAULT NULL,
  `nomor_rekening` varchar(255) DEFAULT NULL,
  `atas_nama` varchar(255) DEFAULT NULL,
  `nama_bank` varchar(255) DEFAULT NULL,
  `npwp` varchar(255) DEFAULT NULL,
  `upload_file` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_branch` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_approval_bonus`),
  UNIQUE KEY `leads_id` (`leads_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "approval_bonuses"
#

INSERT INTO `approval_bonuses` VALUES (4,'202001SLOS19920',164,7,'Romli Saputra','2020-01-16 15:12:02','My Talim','Walk In',NULL,'0000000000','0000000000000000','Romli','BCA','000000000000000',NULL,'2020-01-29 09:44:31','2020-01-29 10:47:31',164,7),(5,'202001SLOS19921',11,7,'Eko Supriatman','2020-01-16 15:03:45','My CarS','RO',NULL,'8923498247','9071409127410491','Romli Saputra','BRI','129381729387129',NULL,'2020-01-29 11:40:57','2020-01-29 11:40:57',164,7);

#
# Structure for table "branches"
#

CREATE TABLE `branches` (
  `id_branch` int(3) NOT NULL AUTO_INCREMENT,
  `nama_cabang` varchar(40) DEFAULT NULL,
  `has_superior` enum('0','1','2') DEFAULT '0' COMMENT '0 = tidak punya head & manager, 1 = punya head & tidak punya manager, 2  = punya head & manager',
  PRIMARY KEY (`id_branch`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC COMMENT='Tabel Cabang';

#
# Data for table "branches"
#

INSERT INTO `branches` VALUES (1,'Balikpapan Syariah','2'),(2,'Bandung Syariah','2'),(3,'Banjarmasin Syariah','1'),(4,'Batam Syariah','1'),(5,'Bekasi Syariah','2'),(6,'Bogor Syariah','1'),(7,'BSD Syariah','2'),(8,'BukitTinggi Syariah','1'),(9,'Cawang Syariah','1'),(10,'Cirebon Syariah','1'),(11,'Depok Syariah','1'),(12,'Gorontalo Syariah','1'),(13,'Gresik Syariah','1'),(14,'Jakarta Selatan Syariah','1'),(15,'Jakarta Utara Syariah','1'),(16,'Jambi Syariah','1'),(17,'Karawang Syariah','0'),(18,'Kediri Syariah','1'),(19,'Kendari Syariah','1'),(20,'Kudus Syariah','1'),(21,'Lampung Syariah','1'),(22,'Makassar Syariah','0'),(23,'Malang Syariah','1'),(24,'Mataram Syariah','1'),(25,'Medan Syariah','1'),(26,'Meruya Syariah','2'),(27,'Mojokerto Syariah','1'),(28,'Padang Syariah','1'),(29,'Palangkaraya Syariah','1'),(30,'Palembang Syariah','0'),(31,'Pekanbaru Syariah','0'),(32,'Pontianak Syariah','1'),(33,'Purwokerto Syariah','1'),(34,'Samarinda Syariah','1'),(35,'Semarang Syariah','1'),(36,'Sidoarjo Syariah','1'),(37,'Solo Syariah','1'),(38,'Sorong Syariah','1'),(39,'Sukabumi Syariah','2'),(40,'Sunter Syariah','0'),(41,'Surabaya Syariah','0'),(42,'Tangerang Syariah','0'),(43,'Tasikmalaya Syariah','1'),(44,'Ternate Syariah','1'),(45,'Yogyakarta Syariah','1'),(46,'Head Office','0');

#
# Structure for table "leads_activities"
#

CREATE TABLE `leads_activities` (
  `id_lead_activity` int(11) NOT NULL AUTO_INCREMENT,
  `activity` text NOT NULL,
  `date_activity` datetime NOT NULL,
  `id_leads` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_lead_activity`)
) ENGINE=InnoDB AUTO_INCREMENT=182 DEFAULT CHARSET=latin1 COMMENT='Tabel Leads Activities';

#
# Data for table "leads_activities"
#

INSERT INTO `leads_activities` VALUES (172,'Data leads telah dibuat','2020-01-16 15:03:45',61,11),(173,'Data leads telah dibuat','2020-01-16 15:12:02',62,11),(174,'Perubahan pada data leads','2020-01-17 14:39:43',61,164),(175,'Perubahan pada data leads','2020-01-21 13:24:01',62,157),(176,'Perubahan pada data leads','2020-01-21 13:25:19',61,157),(177,'Perubahan pada data leads','2020-01-21 13:28:21',61,164),(178,'Perubahan pada data leads','2020-01-21 13:38:29',61,164),(179,'Perubahan pada data leads','2020-01-21 13:39:30',61,157),(180,'Data leads telah dibuat','2020-01-28 09:56:48',63,11),(181,'Data leads telah dibuat','2020-01-29 11:00:37',64,164);

#
# Structure for table "leads_assignments"
#

CREATE TABLE `leads_assignments` (
  `id_leads_assignment` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `produk` varchar(255) DEFAULT NULL,
  `detail_produk` varchar(255) DEFAULT NULL,
  `nilai_pembiayaan` bigint(20) DEFAULT NULL,
  `assign_to` int(11) DEFAULT NULL COMMENT 'Foreign key id_branch',
  `status` varchar(255) DEFAULT NULL COMMENT 'Tidak Tertarik, Masih pikir-pikir, prospect/pengajuan, tidak valid, tidak memenuhi klasifikasi',
  `catatan` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_user` varchar(255) DEFAULT NULL COMMENT 'mecatat id_user yang menginput data',
  `id_branch` int(11) DEFAULT NULL COMMENT 'Foreign Key id branch',
  PRIMARY KEY (`id_leads_assignment`),
  UNIQUE KEY `telepon` (`telepon`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "leads_assignments"
#

INSERT INTO `leads_assignments` VALUES (1,'Ibrahim','08780997580521','Tangerang','My Faedah','Berfaedah',125000000000,2,'Tidak Valid','Bismillah',NULL,'2020-01-15 16:34:14','1',1),(2,'Jack Grealish','089828302802','Jakarta Utara','My Talim','Pendidikan',12,2,'Masih Pikir-pikir','','2020-01-14 13:14:48','2020-01-15 16:34:02','1',15),(3,'Ardy Supriatman','089827812775','Tangerang','My CarS','Mobil Ki',6000000,7,'Prospect / Pengajuan','ssa','2020-01-21 10:14:24','2020-01-28 16:02:06','1',2),(5,'Deshinta Putri','086770030949','Tangerang','My Faedah','Beli Laptop',25000000,2,'Tidak Valid','','2020-01-21 10:34:35','2020-01-28 11:18:58','1',42);

#
# Structure for table "modules"
#

CREATE TABLE `modules` (
  `branch_active` int(1) NOT NULL DEFAULT 0,
  `user_active` int(1) DEFAULT 0,
  `leads_active` int(1) DEFAULT 0,
  `kerjasama_active` int(1) DEFAULT 0,
  `assignment_active` int(1) DEFAULT 0,
  `nst_active` int(1) DEFAULT 0,
  `transfer_active` int(1) DEFAULT 0,
  `product_active` int(1) DEFAULT 0,
  `approval_bonus_active` int(1) DEFAULT 0,
  `id_user` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

#
# Data for table "modules"
#

INSERT INTO `modules` VALUES (0,0,0,0,0,0,0,0,0,124),(0,0,0,0,0,0,0,0,0,174),(0,0,0,0,0,0,0,0,0,192),(0,0,0,0,0,0,0,0,0,154),(0,0,0,0,0,0,0,0,0,155),(0,0,0,0,0,0,0,0,0,156),(0,0,0,0,0,0,0,0,0,157),(0,0,0,0,0,0,0,0,0,159),(0,0,0,0,0,0,0,0,0,220),(0,0,0,0,0,0,0,0,0,30),(0,0,0,0,0,0,0,0,0,35),(0,0,0,0,0,0,0,0,0,186),(0,0,0,0,0,0,0,0,0,118),(0,0,0,0,0,0,0,0,0,131),(0,0,0,0,0,0,0,0,0,153),(0,0,0,0,0,0,0,0,0,123),(0,0,0,0,0,0,0,0,0,158),(0,0,0,0,0,0,0,0,0,160),(0,0,0,0,0,0,0,0,0,163),(0,0,0,0,0,0,0,0,0,173),(0,0,0,0,0,0,0,0,0,188),(0,0,0,0,0,0,0,0,0,209),(0,0,0,0,0,0,0,0,0,50),(0,0,0,0,0,0,0,0,0,53),(0,0,0,0,0,0,0,0,0,64),(0,0,0,0,0,0,0,0,0,26),(0,0,0,0,0,0,0,0,0,32),(0,0,0,0,0,0,0,0,0,60),(0,0,0,0,0,0,0,0,0,61),(0,0,0,0,0,0,0,0,0,62),(0,0,0,0,0,0,0,0,0,164),(0,0,0,0,0,0,0,0,0,185),(0,0,0,0,0,0,0,0,0,227),(0,0,0,0,0,0,0,0,0,231),(0,0,0,0,0,0,0,0,0,107),(0,0,0,0,0,0,0,0,0,169),(0,0,0,0,0,0,0,0,0,170),(0,0,0,0,0,0,0,0,0,41),(0,0,0,0,0,0,0,0,0,54),(0,0,0,0,0,0,0,0,0,55),(0,0,0,0,0,0,0,0,0,113),(0,0,0,0,0,0,0,0,0,114),(0,0,0,0,0,0,0,0,0,152),(0,0,0,0,0,0,0,0,0,179),(0,0,0,0,0,0,0,0,0,200),(0,0,0,0,0,0,0,0,0,47),(0,0,0,0,0,0,0,0,0,48),(0,0,0,0,0,0,0,0,0,65),(0,0,0,0,0,0,0,0,0,199),(0,0,0,0,0,0,0,0,0,219),(0,0,0,0,0,0,0,0,0,86),(0,0,0,0,0,0,0,0,0,88),(0,0,0,0,0,0,0,0,0,162),(0,0,0,0,0,0,0,0,0,202),(0,0,0,0,0,0,0,0,0,119),(0,0,0,0,0,0,0,0,0,127),(0,0,0,0,0,0,0,0,0,134),(0,0,0,0,0,0,0,0,0,79),(0,0,0,0,0,0,0,0,0,80),(0,0,0,0,0,0,0,0,0,183),(0,0,0,0,0,0,0,0,0,44),(0,0,0,0,0,0,0,0,0,45),(0,0,0,0,0,0,0,0,0,191),(0,0,0,0,0,0,0,0,0,31),(0,0,0,0,0,0,0,0,0,176),(0,0,0,0,0,0,0,0,0,177),(0,0,0,0,0,0,0,0,0,178),(0,0,0,0,0,0,0,0,0,59),(0,0,0,0,0,0,0,0,0,121),(0,0,0,0,0,0,0,0,0,125),(0,0,0,0,0,0,0,0,0,126),(0,0,0,0,0,0,0,0,0,147),(0,0,0,0,0,0,0,0,0,203),(0,0,0,0,0,0,0,0,0,204),(0,0,0,0,0,0,0,0,0,92),(0,0,0,0,0,0,0,0,0,99),(0,0,0,0,0,0,0,0,0,103),(0,0,0,0,0,0,0,0,0,116),(0,0,0,0,0,0,0,0,0,212),(0,0,0,0,0,0,0,0,0,66),(0,0,0,0,0,0,0,0,0,67),(0,0,0,0,0,0,0,0,0,180),(0,0,0,0,0,0,0,0,0,196),(0,0,0,0,0,0,0,0,0,197),(0,0,0,0,0,0,0,0,0,128),(0,0,0,0,0,0,0,0,0,145),(0,0,0,0,0,0,0,0,0,165),(0,0,0,0,0,0,0,0,0,167),(0,0,0,0,0,0,0,0,0,201),(0,0,0,0,0,0,0,0,0,230),(0,0,0,0,0,0,0,0,0,132),(0,0,0,0,0,0,0,0,0,146),(0,0,0,0,0,0,0,0,0,150),(0,0,0,0,0,0,0,0,0,70),(0,0,0,0,0,0,0,0,0,75),(0,0,0,0,0,0,0,0,0,182),(0,0,0,0,0,0,0,0,0,140),(0,0,0,0,0,0,0,0,0,141),(0,0,0,0,0,0,0,0,0,142),(0,0,0,0,0,0,0,0,0,143),(0,0,0,0,0,0,0,0,0,189),(0,0,0,0,0,0,0,0,0,211),(0,0,0,0,0,0,0,0,0,40),(0,0,0,0,0,0,0,0,0,42),(0,0,0,0,0,0,0,0,0,63),(0,0,0,0,0,0,0,0,0,161),(0,0,0,0,0,0,0,0,0,194),(0,0,0,0,0,0,0,0,0,71),(0,0,0,0,0,0,0,0,0,72),(0,0,0,0,0,0,0,0,0,73),(0,0,0,0,0,0,0,0,0,108),(0,0,0,0,0,0,0,0,0,148),(0,0,0,0,0,0,0,0,0,149),(0,0,0,0,0,0,0,0,0,187),(0,0,0,0,0,0,0,0,0,83),(0,0,0,0,0,0,0,0,0,100),(0,0,0,0,0,0,0,0,0,101),(0,0,0,0,0,0,0,0,0,208),(0,0,0,0,0,0,0,0,0,122),(0,0,0,0,0,0,0,0,0,135),(0,0,0,0,0,0,0,0,0,136),(0,0,0,0,0,0,0,0,0,137),(0,0,0,0,0,0,0,0,0,144),(0,0,0,0,0,0,0,0,0,38),(0,0,0,0,0,0,0,0,0,95),(0,0,0,0,0,0,0,0,0,96),(0,0,0,0,0,0,0,0,0,97),(0,0,0,0,0,0,0,0,0,98),(0,0,0,0,0,0,0,0,0,117),(0,0,0,0,0,0,0,0,0,133),(0,0,0,0,0,0,0,0,0,151),(0,0,0,0,0,0,0,0,0,195),(0,0,0,0,0,0,0,0,0,109),(0,0,0,0,0,0,0,0,0,110),(0,0,0,0,0,0,0,0,0,111),(0,0,0,0,0,0,0,0,0,198),(0,0,0,0,0,0,0,0,0,89),(0,0,0,0,0,0,0,0,0,90),(0,0,0,0,0,0,0,0,0,112),(0,0,0,0,0,0,0,0,0,115),(0,0,0,0,0,0,0,0,0,84),(0,0,0,0,0,0,0,0,0,85),(0,0,0,0,0,0,0,0,0,210),(0,0,0,0,0,0,0,0,0,74),(0,0,0,0,0,0,0,0,0,76),(0,0,0,0,0,0,0,0,0,77),(0,0,0,0,0,0,0,0,0,29),(0,0,0,0,0,0,0,0,0,34),(0,0,0,0,0,0,0,0,0,36),(0,0,0,0,0,0,0,0,0,37),(0,0,0,0,0,0,0,0,0,193),(0,0,0,0,0,0,0,0,0,104),(0,0,0,0,0,0,0,0,0,105),(0,0,0,0,0,0,0,0,0,106),(0,0,0,0,0,0,0,0,0,171),(0,0,0,0,0,0,0,0,0,46),(0,0,0,0,0,0,0,0,0,58),(0,0,0,0,0,0,0,0,0,82),(0,0,0,0,0,0,0,0,0,190),(0,0,0,0,0,0,0,0,0,207),(0,0,0,0,0,0,0,0,0,120),(0,0,0,0,0,0,0,0,0,129),(0,0,0,0,0,0,0,0,0,130),(0,0,0,0,0,0,0,0,0,138),(0,0,0,0,0,0,0,0,0,139),(0,0,0,0,0,0,0,0,0,49),(0,0,0,0,0,0,0,0,0,51),(0,0,0,0,0,0,0,0,0,52),(0,0,0,0,0,0,0,0,0,56),(0,0,0,0,0,0,0,0,0,232),(0,0,0,0,0,0,0,0,0,68),(0,0,0,0,0,0,0,0,0,78),(0,0,0,0,0,0,0,0,0,102),(0,0,0,0,0,0,0,0,0,33),(0,0,0,0,0,0,0,0,0,205),(0,0,0,0,0,0,0,0,0,206),(0,0,0,0,0,0,0,0,0,28),(0,0,0,0,0,0,0,0,0,91),(0,0,0,0,0,0,0,0,0,93),(0,0,0,0,0,0,0,0,0,94),(1,1,0,0,0,0,1,0,0,1),(0,0,0,0,0,0,0,0,0,2),(0,0,0,0,0,0,0,0,0,11),(0,0,0,0,0,0,0,0,0,16),(1,1,1,0,1,1,1,1,1,17),(0,0,0,0,0,0,0,0,0,23),(0,0,0,0,0,0,0,0,0,168),(0,0,0,0,0,0,0,0,0,172),(0,0,0,0,0,0,0,0,0,181),(0,0,0,0,0,0,0,0,0,184),(1,0,0,0,0,0,1,1,0,240),(1,1,1,1,1,1,1,1,0,241),(1,1,1,1,1,1,1,1,1,242);

#
# Structure for table "partners"
#

CREATE TABLE `partners` (
  `id_partner` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pemilik` varchar(255) DEFAULT 'NULL',
  `kelurahan` varchar(255) DEFAULT 'NULL',
  `kecamatan` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(255) DEFAULT NULL,
  `hobi` varchar(255) DEFAULT NULL,
  `geotagging` text DEFAULT NULL,
  `jumlah_karyawan` int(11) DEFAULT NULL,
  `tahun_berdiri` varchar(255) DEFAULT NULL,
  `barang_jual` varchar(255) DEFAULT NULL,
  `sosial_media` varchar(255) DEFAULT NULL,
  `status_tempat_usaha` varchar(255) DEFAULT NULL COMMENT 'Milik Sendiri / Milik Keluarga / Sewa',
  `jenis_pembayaran` varchar(255) DEFAULT NULL COMMENT 'Tunai / Kredit Konvensional / Kredit Syariah',
  `omset` varchar(255) DEFAULT NULL,
  `jumlah_cabang` int(11) DEFAULT NULL,
  `pernah_promosi` varchar(255) DEFAULT NULL COMMENT 'Perna melakukan promosi? Pernah / Tidak Pernah',
  `punya_pinjaman` varchar(255) DEFAULT NULL COMMENT 'Ya / Tidak',
  `on_going_project` varchar(255) DEFAULT NULL COMMENT 'Ada / Tidak Ada',
  `punya_jumlah_plafond` varchar(255) DEFAULT NULL COMMENT 'Ya / Tidak',
  `punya_giro_cek` varchar(255) DEFAULT NULL,
  `keterangan_tambahan` text DEFAULT NULL,
  `rekening_bank` varchar(255) DEFAULT NULL,
  `cabang_bank` varchar(255) DEFAULT NULL,
  `nama_bank` varchar(255) DEFAULT NULL,
  `atas_nama` varchar(255) DEFAULT NULL,
  `akhir_izin` varchar(6) DEFAULT NULL COMMENT 'Muncul Kalau Kategori Produk My Ihram & My Safar',
  `ktp` varchar(255) DEFAULT NULL COMMENT 'Form Upload File',
  `npwp` varchar(255) DEFAULT NULL COMMENT 'Form Upload File',
  `buku_tabungan_perusahaan` varchar(255) DEFAULT NULL COMMENT 'Form Upload File',
  `siup` varchar(255) DEFAULT NULL COMMENT 'Form Upload File',
  `logo_perusahaan` varchar(255) DEFAULT NULL COMMENT 'Form Upload File',
  `foto_usaha` varchar(255) DEFAULT NULL COMMENT 'Form Upload File',
  `status` enum('draft','lengkap') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_mapping` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_partner`),
  UNIQUE KEY `rekening_bank` (`rekening_bank`),
  KEY `id_mapping` (`id_mapping`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1 COMMENT='Tabel Partner';

#
# Data for table "partners"
#

INSERT INTO `partners` VALUES (61,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'draft','2020-01-16 14:53:49','2020-01-16 14:53:49',37),(62,'Tamy Abraham','serengseng','serengseng','DKI Jakarta','14560','maen bole',NULL,200,'2009','baleho','@tamuabraham','Milik Sendiri','Tunai','300000000',3,'Tidak','Tidak','Ada','Tidak','Ya','asik mantep','5540229384772636','jakarta barat','mandiri','Tamy Abraham',NULL,'7_September_1.png','7_September_4.png','7_September_2.png','7_September_5.png','7_September_3.png','7_September_Cover.png','lengkap','2020-01-17 10:05:50','2020-01-17 10:05:50',38),(63,'asdsa','asdsa','asdsa','sadsa','213213','asdsa',NULL,12,'2132','asdsa','sadsa','Milik Sendiri','Tunai','12321321',2,'Ya','Tidak','Ada','Tidak','Tidak','asdasdsa','21321321','sadsa','asdsa','asdsa','3123','7_September_11.png','7_September_41.png','7_September_21.png','7_September_51.png','7_September_31.png','7_September_Cover1.png','lengkap','2020-01-27 11:46:47','2020-01-27 11:46:47',39),(64,'Ibrahim Ahmad','Pagesangan','Pagesangan','Nusa Tenggara Barat','123456','Voli',NULL,90,'1978','Alat Sport','bfi.co.id','Milik Sendiri','Tunai','9800000',12,'Ya','Ya','Ada','Ya','Ya',NULL,'0468038482881233','Cabang Lippo','Bank Mandi Sendiri','Ibrahim Ahmad',NULL,'7_September_12.png','7_September_42.png','7_September_22.png','7_September_52.png','7_September_32.png','7_September_53.png','lengkap','2020-01-28 09:52:33','2020-01-28 09:52:33',40);

#
# Structure for table "maintain_partners"
#

CREATE TABLE `maintain_partners` (
  `id_maintain` int(11) NOT NULL AUTO_INCREMENT,
  `date_maintain` datetime DEFAULT NULL,
  `photo_activity` varchar(255) DEFAULT NULL,
  `jenis_kegiatan` varchar(255) DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_partner` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_maintain`),
  KEY `id_partner` (`id_partner`),
  CONSTRAINT `maintain_partners_ibfk_1` FOREIGN KEY (`id_partner`) REFERENCES `partners` (`id_partner`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 COMMENT='Tabel Partner Maintain';

#
# Data for table "maintain_partners"
#


#
# Structure for table "users"
#

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL DEFAULT '',
  `nik` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `telepon` varchar(16) DEFAULT NULL,
  `password` varchar(40) NOT NULL DEFAULT '',
  `level` int(2) NOT NULL DEFAULT 0 COMMENT '1 = CMS, 2 = Head, 3 = Manager, 4 = Admin HO, 5 = Admin Tele',
  `jabatan` varchar(255) DEFAULT NULL,
  `is_active` int(2) NOT NULL DEFAULT 0,
  `id_branch` int(3) NOT NULL DEFAULT 0,
  `tanggal_daftar` timestamp NULL DEFAULT current_timestamp(),
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `nik` (`nik`),
  KEY `id_branch` (`id_branch`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_branch`) REFERENCES `branches` (`id_branch`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=242 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC COMMENT='Tabel User';

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'Sunia Berlianti','200001','admin1@admin.com',NULL,'b32c3ea483b375b79e01ffc404316070',4,'Administrator',1,46,'2019-08-16 16:36:16','bfi_syariah.jpg'),(2,'Gede Laroiba','079551','admin2@admin.com',NULL,'c84258e9c39059a89ab77d846ddab909',5,'Admin Tele',1,46,'2019-08-16 16:36:16',''),(11,'Okky Aditya','072104','okky.aditya@bfi.co.id',NULL,'b32c3ea483b375b79e01ffc404316070',1,'CMS',1,7,'2019-08-16 16:36:16',NULL),(16,'Maulana Arief Kuncoro','078600','maulana.kuncoro@bfi.co.id',NULL,'aff4b352312d5569903d88e0e68d3fbb',4,'Administrator',1,46,'2019-08-16 16:36:16',''),(17,'Administrator BFI Syariah','000000','administrator@bfisyariah.id',NULL,'0baea2f0ae20150db78f58cddac442a9',4,'Administrator',1,46,'2019-08-16 16:36:16','7_September_3.png'),(23,'Ardy','079473','ardy.ardy@bfi.co.id',NULL,'b32c3ea483b375b79e01ffc404316070',4,'Administrator',1,46,'2019-08-16 16:36:16',NULL),(26,'Ibrahim Ahmad Jabar Khaidiru Sobari','000005','ibrahim.ahmadd98@gmail.com',NULL,'b32c3ea483b375b79e01ffc404316070',2,'Sharia Head',1,7,'2019-08-16 16:36:16','7_September_Cover3.png'),(28,'reky sutedja','007559','reky.sutedja@bfi.co.id',NULL,'1e83aa6cec826c41eed0c3eb286191ca',1,'CMS',1,45,'2019-08-16 16:36:16',NULL),(29,'Iva Ariani','005138','ivaariani@gmail.com',NULL,'a9ebff29925ed4db9fa260ce6d6627f8',2,'Sharia Head',1,38,'2019-08-16 16:36:16',NULL),(30,'FAISAL','004196','faisalmahatama@gmail.com',NULL,'e78d7dc7320e76eff092280cfc73578e',2,'Sharia Head',1,3,'2019-08-16 16:36:16',NULL),(31,'E.M.Ikhsanudin','079442','ikhsanemcy@gmail.com',NULL,'17516ddbe5c4957cb2c6efaf4bdc63af',2,'Sharia Head',1,16,'2019-08-16 16:36:16',NULL),(32,'Fatrinanda lamusu','017862','nandalamusu@gmail.com',NULL,'adb4bb84c63583d3b842413d7014d1cd',2,'Sharia Head',1,44,'2019-08-16 16:36:16',NULL),(33,'Ilham Hamiru','082012','ilhamiru50@gmail.com',NULL,'fa7db5bf23ca854c7fec7f15f42924a8',1,'CMS',1,44,'2019-08-16 16:36:16',NULL),(34,'Muhammad faizal','901712','Muhammadfaizal04111993@gmail.com',NULL,'60bf01e2a129456570d4009b5dc89a94',1,'CMS',1,38,'2019-08-16 16:36:16',NULL),(35,'SABILAL MUHTADIN','014555','sabilalmuhtadin1980@gmail.com',NULL,'e78d7dc7320e76eff092280cfc73578e',1,'CMS',1,3,'2019-08-16 16:36:16',NULL),(36,'Ardianto S','081906','ardiadrian696@gmail.com',NULL,'2b64dfc8d42293c14a14cf0a3f6bf17c',1,'CMS',1,38,'2019-08-16 16:36:16',NULL),(37,'Muhammad faizal','9017012','Muhammadpaisal19404111993@gmail.com',NULL,'60bf01e2a129456570d4009b5dc89a94',1,'CMS',1,38,'2019-08-16 16:36:16',NULL),(38,'Janu Setiawan','015501','janu.setiawan@bfi.co.id',NULL,'42b0dc0ae5333d6de8867073537be38d',3,'Sharia Manager',1,31,'2019-08-16 16:36:16',NULL),(40,'Umi Sultra','072632','umisultra@gmail.com',NULL,'57ef86f9f28375de3d24c0393945c9c0',2,'Sharia Head',1,26,'2019-08-16 16:36:16',NULL),(41,'Agung Budi Cahyono','024157','agung.cahyono@bfi.co.id',NULL,'041e1a6a28ab4012af6876a51dca317d',2,'Sharia Head',1,9,'2019-08-16 16:36:16',NULL),(42,'Mimi Aslamiyah','005074','mimi.aslamiyah@bfi.co.id',NULL,'3be79637cae82734dc58df61146385bf',3,'Sharia Manager',1,26,'2019-08-16 16:36:16',NULL),(44,'Diansah','9015342','Diansah1105@gmail.com',NULL,'c4c79a151c98cf21eefd19d4209f5ff2',1,'CMS',1,15,'2019-08-16 16:36:16',NULL),(45,'Eko yuli suprianto','9016923','suprianto.jktg2708@gmail.com',NULL,'2f6b2d1d0642a6cf40e9c245ded02507',1,'CMS',0,15,'2019-08-16 16:36:16',NULL),(46,'Sutriyandi','011349','sutriyandi@bfi.co.id',NULL,'2b44a3ce987f90804f680ef0319891c6',3,'Sharia Manager',1,40,'2019-08-16 16:36:16',NULL),(47,'AYU KEMALA SARI','9016709','ayu92kemala@gmail.com',NULL,'d190075af52f6d43177918dff07a3d46',1,'CMS',1,11,'2019-08-16 16:36:16',NULL),(48,'HERFIANA','067337','herfiana.jauharah@gmail.com',NULL,'42dd950dcb324b1b1c5232440bec2639',2,'Sharia Head',1,11,'2019-08-16 16:36:16',NULL),(49,'JAJANG JAMALUDIN','012993','jajang.jamaludin@bfi.co.id',NULL,'f1c083e61b32d3a9be76bc21266b0648',3,'Sharia Manager',1,42,'2019-08-16 16:36:16',NULL),(50,'Arif Fadilah','078343','arifelfadillah@gmail.com',NULL,'408d5367952163926c9c91a5bd4d7b99',2,'Sharia Head',1,6,'2019-08-16 16:36:16',NULL),(51,'Nurfadli','081743','Nurfadlif03@gmail.com',NULL,'f1c083e61b32d3a9be76bc21266b0648',1,'CMS',1,42,'2019-08-16 16:36:16',NULL),(52,'Budi Iswanto','9016990','budii150594@gmail.com',NULL,'e03be53d39d9a7de4f1272bb5f185191',1,'CMS',1,42,'2019-08-16 16:36:16',NULL),(53,'M Aditya Darmawan','9015113','aditd5150@gmail.com',NULL,'408d5367952163926c9c91a5bd4d7b99',1,'CMS',1,6,'2019-08-16 16:38:14',NULL),(54,'Ali Takim Siregar','9017208','alitaqims03@gmail.com',NULL,'fd339bd7a36a4b1264c2a661aaf229cd',1,'CMS',1,9,'2019-08-16 17:22:33',NULL),(55,'Agung Sukma Pratama','9017203','agungpratama4509@gmail.com',NULL,'095f27b77a0e5b122e3a4b3464d6516c',1,'CMS',1,9,'2019-08-16 17:43:16',NULL),(56,'Dede rizky wahyudi','9016875','dederizkywahyudi4@gmail.com',NULL,'82cf235e87c9ae6c6c54859de8f2765b',1,'CMS',1,42,'2019-08-18 14:50:06',NULL),(58,'Aprila sukoco','080981','radenmasaprilasukoco@gmail.com',NULL,'33d29aaba3f43cba910fb2d32d63ee9e',1,'CMS',1,40,'2019-08-19 08:43:33',NULL),(59,'DONY PRIADHI','075573','donybfisyariah@gmail.com',NULL,'ef8e4c3fbf2d454babfdf7927957b2cf',1,'CMS',1,17,'2019-08-19 10:52:11',NULL),(60,'Misbach Ahmad Bachruddin','081872','misbachbach@gmail.com',NULL,'74e44a50816171ef94cdd0b6172f5779',1,'CMS',1,7,'2019-08-19 11:29:10',NULL),(61,'Muhamad Yaman Huri','081954','elhurimuhamadyaman@gmail.com',NULL,'399351b8c12b6317572d283414949801',1,'CMS',1,7,'2019-08-19 11:30:06',NULL),(62,'Rizki Imanullah','079816','rizki.imanullah@gmail.com',NULL,'367a2236f626fbd45add6bf26ea685cd',2,'Sharia Head',1,7,'2019-08-19 11:31:04',NULL),(63,'Akmal dhiya ulhaq','9015712','akmaldhiyaulhaq7@gmail.com',NULL,'c5caf74edf9bc0e39adc6a0b461dd13f',1,'CMS',1,26,'2019-08-19 12:00:56',NULL),(64,'Daman Huri','9015120','damanhuri1678@gmail.com',NULL,'408d5367952163926c9c91a5bd4d7b99',1,'CMS',1,6,'2019-08-19 12:08:54',NULL),(65,'Fadhil Alwan Dharma Adji','9016391','Fadhilalwan28@gmail.com',NULL,'a243acb51619490ec691df8db66133ec',1,'CMS',1,11,'2019-08-19 14:21:40',NULL),(66,'Yudhi Ari Setyawan','006945','kemplanx@gmail.com',NULL,'825960e7bb896c694502b591b67718d5',2,'Sharia Head',1,20,'2019-08-19 17:14:53','WhatsApp_Image_2019-08-12_at_10_16_41.jpeg'),(67,'Benny Himawan Elhamsyah','9016505','bennyhimawanelhamsyah@gmail.com',NULL,'6bd55c4a2a0f96bead825fcb034f1b04',1,'CMS',1,20,'2019-08-19 17:17:52',NULL),(68,'Rendy Soenarya','9015716','rendyizanami@gmail.com',NULL,'1f378326286adb866282546ca226a2a8',1,'CMS',1,43,'2019-08-19 17:27:42',NULL),(70,'DEWI AYU MUSTIKA','077238','dewi.mustika@bfi.co.id',NULL,'46af0592f9e3e535cef31e64163b4b3d',2,'Sharia Head',1,24,'2019-08-19 17:39:10',NULL),(71,'Mohamad Ali Fikri','9017325','mohamadalifikri651@gmail.com',NULL,'1bab567ee4df8c4c1f7475aa92f46eeb',1,'CMS',1,27,'2019-08-19 17:43:20',NULL),(72,'Haryo Seno','079777','haryo.seno@bfi.co.id',NULL,'e3a06b6ac599ae044b6faaaff14f63ca',2,'Sharia Head',1,27,'2019-08-19 17:43:29',NULL),(73,'Khusnul khotimah','9014955','khusnulkhotimahhhh0805@gmail.com',NULL,'fbcfcc212f767e5f22a0e50cc40379f3',1,'CMS',1,27,'2019-08-19 17:44:12',NULL),(74,'PANCA INDRYA MUKTI','082285','pancandrya5@gmail.com',NULL,'25d55ad283aa400af464c76d713c07ad',1,'CMS',1,37,'2019-08-19 17:55:26',NULL),(75,'Febriyan Sutrisno','081427','febriyansutrisno66@gmail.com',NULL,'74f8aa76a2a240ebd9c29979cc8fbf40',1,'CMS',1,24,'2019-08-19 17:56:50',NULL),(76,'CINCA NOUVALITA','081366','cincanouvalita@gmail.com',NULL,'b09d640ef3486164259ea3df846808ed',1,'CMS',1,37,'2019-08-19 17:57:04',NULL),(77,'CHABIBUL MIFTA','078288','chabibul.mifta@bfi.co.id',NULL,'25d55ad283aa400af464c76d713c07ad',2,'Sharia Head',1,37,'2019-08-19 17:58:12',NULL),(78,'tantan wijaya','008126','tantanwijaya012@gmail.com',NULL,'d9600f16d10d53eae48c45c8a7ba6c47',1,'CMS',1,43,'2019-08-19 18:20:05',NULL),(79,'robby saputra','009827','robby.saputra@bfi.co.id',NULL,'1495c294a03c64263841f89247c874ef',2,'Sharia Head',1,14,'2019-08-20 09:42:52',NULL),(80,'RENO AGUNG WIBOWO','9017457','vje6699@gmail.com',NULL,'eac4a7008a86309f3ad40c065f692b65',1,'CMS',1,14,'2019-08-20 10:09:25',NULL),(82,'Adi Nurohman','081291','adiiinurohman12@gmail.com',NULL,'b32c3ea483b375b79e01ffc404316070',1,'CMS',1,40,'2019-08-20 10:19:19',NULL),(83,'Dicky Kurniawan','074675','dicky.kurniawan@bfi.co.id',NULL,'becbea646fb394ca9fa18ca7cb2bb5b1',2,'Sharia Head',1,29,'2019-08-20 14:30:49',NULL),(84,'Dhany Prakarsa','018985','dhany.prakarsa@bfi.co.id',NULL,'89cb46fbfbcc01d0d7e45c2cade9042d',2,'Sharia Head',1,36,'2019-08-20 15:32:08',NULL),(85,'Asri puspitasari','9016131','dhany2912@gmail.com',NULL,'09e28702d0ce59d2d105c2df79d5a19e',1,'CMS',1,36,'2019-08-20 16:04:35',NULL),(86,'ARIYANTO LAPU','007748','ariyanto.lapu@bfi.co.id',NULL,'3e8034a85c7ef242f32e1fed09a927c4',2,'Sharia Head',1,12,'2019-08-20 16:05:44',NULL),(88,'agus supriyanto','082400','agussupriyanto012@gmail.com',NULL,'03bd2774aa324205c054700d91affb73',1,'CMS',1,12,'2019-08-20 16:09:07',NULL),(89,'Achmad Fauzi','9016727','oziebequiet@yahoo.co.id',NULL,'b32c3ea483b375b79e01ffc404316070',1,'CMS',1,34,'2019-08-20 16:21:49',NULL),(90,'DEDY IRMAWAN','018114','dedy.irmawan1988@gmail.com',NULL,'e9e01d0b69809c07b4fc19c50aeb49cc',2,'Sharia Head',1,34,'2019-08-20 16:27:12',NULL),(91,'Rakhmad Hidayat','018679','rakhmad.hidayat@bfi.co.id',NULL,'5f4dcc3b5aa765d61d8327deb882cf99',2,'Sharia Head',1,45,'2019-08-20 17:41:04',NULL),(92,'Armila Ernisa Zulfa','080229','zulfaernissa@gmail.com',NULL,'b6871e6a0bad9366942c192e95284bf2',1,'CMS',1,18,'2019-08-20 22:20:15',NULL),(93,'Vendra Irawan','9016188','vendrairhawan@ymail.com',NULL,'5f4dcc3b5aa765d61d8327deb882cf99',1,'CMS',1,45,'2019-08-21 08:31:28',NULL),(94,'DEVI APRIYANI','9016613','deviapriani.da81@gmail.com',NULL,'5f4dcc3b5aa765d61d8327deb882cf99',1,'CMS',1,45,'2019-08-21 08:36:06',NULL),(95,'Roni Yuliantino','9016864','roniyuliantino82@gmail.com',NULL,'0de549929a2a16cdcef697f8d76eb1c9',1,'CMS',1,31,'2019-08-21 09:56:35',NULL),(96,'UMAR SALEH DAULAY','008752','umarsaleh402@gmail.com',NULL,'da4fa6da7915c5b3755f3e3e15dc79f2',1,'CMS',1,31,'2019-08-21 10:00:53',NULL),(97,'RAHMAT RIO BAHARI','080917','rahmatrio981@yahoo.com',NULL,'97a8a4877ba4bf081b28c93f3fce5d1e',1,'CMS',1,31,'2019-08-21 10:03:39',NULL),(98,'ANDY PUTRA','080916','andyputra180@rocketmail.com',NULL,'8e9d6e62d25d26597e8514d0835132a4',1,'CMS',1,31,'2019-08-21 10:09:26',NULL),(99,'Faiz Amin Jaya','080569','faizaminjaya@gmail.com',NULL,'397137c5aa9d13aa76b715663e192420',1,'CMS',1,18,'2019-08-21 10:14:16',NULL),(100,'MEIDA RUSIANA TUNJANG','9016402','meidarusianatunjang@gmail.com',NULL,'57a23281db49393891174a9d5965772b',1,'CMS',1,29,'2019-08-21 10:48:06',NULL),(101,'YASINTA FITRIANI','9017403','sintafitrie@gmail.com',NULL,'cdd64ea2bfef5992900423a2e826889f',1,'CMS',1,29,'2019-08-21 11:26:49',NULL),(102,'Kemal Yusrin','020589','kemal.alturk@bfi.co.id',NULL,'e10adc3949ba59abbe56e057f20f883e',2,'Sharia Head',1,43,'2019-08-21 16:48:49',NULL),(103,'Fachreza Dhian Pratama','071887','syariah.kendari@gmail.com',NULL,'f75e07c890f858ad6439dd582cb3c477',2,'Sharia Head',1,19,'2019-08-22 16:54:23',NULL),(104,'Adi Renaldi','069606','adi.renaldi@bfi.co.id',NULL,'e03f78f289f987613b07f3cddb73f9a8',2,'Sharia Head',1,39,'2019-08-22 19:00:12',NULL),(105,'Isthafa Harits Utami','081939','isthafa.27@gmail.com',NULL,'6e777fe11a540268a6a39a42fc432767',1,'CMS',1,39,'2019-08-23 05:29:29',NULL),(106,'Moch. Qurthuby','9014890','moch.qurthuby07@gmail.com',NULL,'6e777fe11a540268a6a39a42fc432767',1,'CMS',1,39,'2019-08-23 08:43:19',NULL),(107,'Dingga Diramaesha','016721','dingga.diramaesha@bfi.co.id',NULL,'b895a9ddd8f6db70af8b5cc4cd759005',2,'Sharia Head',1,8,'2019-08-23 09:30:57',NULL),(108,'MONA AGISTA','004913','mona.agista@bfi.co.id',NULL,'2616c763893e5d2618389f8c98d8bf25',2,'Sharia Head',1,28,'2019-08-23 09:31:40',NULL),(109,'ARIS FAHRIANTO','079707','arisfahrianto@gmail.com',NULL,'b28b5879e1f417982b9ab6ecf9a33062',2,'Sharia Head',1,33,'2019-08-23 14:34:26',NULL),(110,'SITI BAROKAH','9015287','sitibarokah753@gmail.com',NULL,'4cd4d2e51b5ab80a3824af07d5039f1a',1,'CMS',1,33,'2019-08-23 14:36:26',NULL),(111,'EGI DELLIANA','9015270','egidelliana@gmail.com',NULL,'c521626b832787f57f9861c373350c3f',1,'CMS',1,33,'2019-08-23 14:37:54',NULL),(112,'Dwi Nurcahyanti','082007','dwinurcahyanti14@gmail.com',NULL,'259af61090c1feab3fd8988b8682f71c',1,'CMS',1,35,'2019-08-23 14:41:29',NULL),(113,'Afriyana nurman satria','020615','afriyana.satria@bfi.co.id',NULL,'39a21f3f58287334901197c82e6a8daa',2,'Sharia Head',1,10,'2019-08-23 15:39:43',NULL),(114,'Hesky hermoyo','081753','heskyh08@gmail.com',NULL,'ac115d8a7a34491903235368059510e5',1,'CMS',1,10,'2019-08-23 16:04:54',NULL),(115,'MONICA APRILIA PUTRI','072710','monica.putri@bfi.co.id',NULL,'f65d3d938f139227d9f22ad3d3a473df',2,'Sharia Head',1,35,'2019-08-24 08:21:43',NULL),(116,'PITA PURNAMASARI','9017505','pitapurnamasari1081@gmail.com',NULL,'cb6144769b46f65f76a2000420430645',1,'CMS',1,19,'2019-08-24 09:33:53','Picture_kendari.jpg'),(117,'Hermawan Dwi putra','015254','hermawan.putra@bfi.co.id',NULL,'3e1b7b7899f0317e89e0d902ba733465',2,'Sharia Head',1,32,'2019-08-24 10:55:44',NULL),(118,'Ari Iswanto','9015730','ariiswanto161@gmail.com',NULL,'3c3b752cad1aa2f3eb938e4f3e3fbc98',1,'CMS',1,4,'2019-08-26 10:17:05',NULL),(119,'Siti Nurwulan','041539','siti.nurwulan@bfi.co.id',NULL,'afc45f6eb147ac43c72a205391bb00d3',2,'Sharia Head',1,13,'2019-08-26 11:20:38',NULL),(120,'Lolita Media Sari','007426','lolitamediasari@gmail.com',NULL,'bc49a09bfc4eb7b214bf0b476aec4235',3,'Sharia Manager',1,41,'2019-08-26 11:22:09',NULL),(121,'Teddy Mathado','007884','teddy.mathado@bfi.co.id',NULL,'8bfe0f9a64f31db37688c32de4bdba35',3,'Sharia Manager',1,17,'2019-08-26 11:24:10',NULL),(122,'Muhammad Hilal','005622','muh.hilal@bfi.co.id',NULL,'34e71227de6b5784a3e7107ca96fa424',3,'Sharia Manager',1,30,'2019-08-26 11:27:02',NULL),(123,'Mira Anggraeni','006075','mira.anggraeni@bfi.co.id',NULL,'abd01045b9aa195f0810a48d4b6434da',3,'Sharia Manager',1,5,'2019-08-26 11:31:36',NULL),(124,'Dedy Armana Putra','077214','dedyarmanaputra@gmail.com',NULL,'acbeaaf2287f02b04840a55713bc9be4',2,'Sharia Head',1,1,'2019-08-26 11:31:50',NULL),(125,'Nisa Nurathiqoh','9015248','nisaqoh23@gmail.com',NULL,'efb82a23723d2945415cd8a49abab3b8',1,'CMS',1,17,'2019-08-26 11:37:03',NULL),(126,'Merryana Ayu Wardhany','080204','meryanaayu6@gmail.com',NULL,'b72915aab2c666c3817b6c9469360f0a',1,'CMS',1,17,'2019-08-26 11:38:34',NULL),(127,'Dewi Rahayu Puspitasari','081065','dhewierahayu@gmail.com',NULL,'ce91627f04446919fb6e5884bfd387fd',1,'CMS',1,13,'2019-08-26 11:50:08',NULL),(128,'Rahmat hidayat','9017146','rahmat.140688@gmail.com',NULL,'7ae2003df331ec233eeb71ee42e398d1',1,'CMS',1,22,'2019-08-26 11:57:20',NULL),(129,'Bagus Dwi Setyanto','9017492','bagusetyanto.bds@gmail.com',NULL,'40b4fa6704f1b03731a303a7e88aac4a',1,'CMS',1,41,'2019-08-26 11:57:48',NULL),(130,'Idfan Reyzal Hamalgani','9017490','idfanreyzal@yahoo.com',NULL,'9daef7a9db5fa571bc42574060529b27',1,'CMS',1,41,'2019-08-26 11:58:02',NULL),(131,'Dimas Haryan','9016971','dimasharyan1@gmail.com',NULL,'8e599e43902be772330af5512871638e',1,'CMS',1,4,'2019-08-26 12:05:30',NULL),(132,'M. WEIMPY FAHMI','015638','weimpyfahmi@gmail.com',NULL,'8b445acde7860c0b45f1524b61761e62',2,'Sharia Head',1,23,'2019-08-26 12:13:01','FB_IMG_15475664077267756.jpg'),(133,'Hasyirul umam','9017287','hasyirulumam0794@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e',1,'CMS',1,32,'2019-08-26 12:13:37',NULL),(134,'MOCH SALAFUDIN','081066','mohsalafudin92@gmail.com',NULL,'64accb9cfd06204ec636d63a11e0f64c',1,'CMS',1,13,'2019-08-26 12:16:18',NULL),(135,'M. Sahirsyah','081195','sahirsyahm@gmail.com',NULL,'34e71227de6b5784a3e7107ca96fa424',1,'CMS',1,30,'2019-08-26 13:03:41',NULL),(136,'Barli Adwensyah','076859','barliadwensyah@gmail.com',NULL,'34e71227de6b5784a3e7107ca96fa424',1,'CMS',1,30,'2019-08-26 13:05:07',NULL),(137,'Wijaya Lefi yandie','081199','wijaya.lefiyandie@yahoo.com',NULL,'34e71227de6b5784a3e7107ca96fa424',1,'CMS',1,30,'2019-08-26 13:07:04',NULL),(138,'Dina Cassa Maharani','081357','dinaamaharani@gmail.com',NULL,'840c9622dec86f7fd6361fab685b5ab7',1,'CMS',1,41,'2019-08-26 13:45:50',NULL),(139,'Ana Zuliatin Nadhiroh','081355','ananadhiroh23@gmail.com',NULL,'4a2e9fba599cfa1198f7e59362a2d8ca',1,'CMS',1,41,'2019-08-26 13:47:53',NULL),(140,'M Fathirul Abrar','011454','fathirul.abrar@gmail.com',NULL,'caa92674de6e72fa257e7959a62ebafc',2,'Sharia Head',1,25,'2019-08-26 13:52:09',NULL),(141,'Muhammad Irsal','079925','muhammadirsal16@gmail.com',NULL,'7a36a05edf7e3fe651a5807871528a0e',1,'CMS',1,25,'2019-08-26 13:57:14',NULL),(142,'Nurhasanah Ginting','9015107','nurhasanahginting11@gmail.com',NULL,'7a36a05edf7e3fe651a5807871528a0e',1,'CMS',1,25,'2019-08-26 13:58:21',NULL),(143,'Rahmat Irfan','9016432','rahmatirfan01@gmail.com',NULL,'7a36a05edf7e3fe651a5807871528a0e',1,'CMS',1,25,'2019-08-26 14:01:47',NULL),(144,'Mei Wulan Janati','9017217','meuwulanjanati768@gmail.com',NULL,'34e71227de6b5784a3e7107ca96fa424',1,'CMS',1,30,'2019-08-26 15:01:47',NULL),(145,'rio pramana','025396','rio.pramana@bfi.co.id',NULL,'6a82abe7a559e44d1997a7e8669d70a6',3,'Sharia Manager',1,22,'2019-08-26 15:20:49',NULL),(146,'RIYAN MARDIYANTO','9014985','riyanmardiyanto27@gmail.com',NULL,'f4dbca808e102c305cb92f192d16ef4d',1,'CMS',1,23,'2019-08-26 16:05:14',NULL),(147,'Fariz Pramana Yudha','080956','yudhapramanaziraf@gmail.com',NULL,'3f3230d2fdb3a77c02e9059c1e962d5b',1,'CMS',1,17,'2019-08-26 16:06:41',NULL),(148,'Syafrio Andestha','076072','andestha12@gmail.com',NULL,'c40c7acaf24539c1a2343e389b4f1145',1,'CMS',1,28,'2019-08-26 16:18:29',NULL),(149,'Bima Saputra','9015412','bimasaputra1993@gmail.com',NULL,'6891380675033019026c3fc4928caf1b',1,'CMS',1,28,'2019-08-26 16:20:41',NULL),(150,'Ayu riza santi','9015381','ayurizasanti6@gmail.com',NULL,'29d75126bd0bc9244edf6847a47dcb32',1,'CMS',1,23,'2019-08-26 16:29:51',NULL),(151,'Ratih Mutia','9014863','ratihmutia1989@gmail.com',NULL,'8a9d325a52baeef2199fe864ac5ee175',1,'CMS',1,32,'2019-08-26 16:52:06',NULL),(152,'Kiki fatmawati','9014512','Kikifatmawati419@gmail.com',NULL,'cda2c99fbf5e19f20d331299c15a4491',1,'CMS',1,10,'2019-08-27 08:30:00',NULL),(153,'franky santana','022127','franky.santana@bfi.co.id',NULL,'a065ac9b6970ef59a25dd7fe4c2a72f0',2,'Sharia Head',0,4,'2019-08-27 13:35:50',NULL),(154,'Tatang Sodar','002065','tatang.sodar@bfi.co.id',NULL,'26db626c551022460a0318405b25acfa',3,'Sharia Manager',1,2,'2019-08-27 17:35:40',NULL),(155,'Hari Mulyono','078960','harimuly1119@gmail.com',NULL,'f1c083e61b32d3a9be76bc21266b0648',1,'CMS',1,2,'2019-08-27 17:38:06',NULL),(156,'Dicky Mulia Derma Prawira','9016799','dickyxelica2@gmail.com',NULL,'a6235a5a749f6ac637c97ecc9da43d12',1,'CMS',1,2,'2019-08-27 17:39:54',NULL),(157,'Wawan Indriani','082045','Indrianaw2n@gmail.com',NULL,'f1c083e61b32d3a9be76bc21266b0648',2,'Sharia Head',1,2,'2019-08-28 09:23:18','windowslight.jpg'),(158,'Firhand Ti Zaid Alfi','080015','firhandtizaidalfi@gmail.com',NULL,'2942b56d633b75105dd6afb4a4a1e842',1,'CMS',1,5,'2019-08-28 10:52:30',NULL),(159,'Muhamad Reza','079566','muhamad1988reza@gmail.com',NULL,'ba00ec4cf7968be0414659e83aeb7b72',1,'CMS',1,2,'2019-08-28 11:35:48',NULL),(160,'Ervina Eka Febriamy','9015313','febriamyvienna@gmail.com',NULL,'e141a3dfd7d88104f9b36029adf67da8',2,'Sharia Head',1,5,'2019-08-28 16:07:57',NULL),(162,'YUSDIANTO ABDUL','9017523','yusdiianto@gmail.com',NULL,'2f971fee3eca06981e3048b14bed1153',1,'CMS',1,12,'2019-08-30 14:46:20',NULL),(163,'Mitha Andriani','9015777','mithaandriani09@gmail.com',NULL,'bd34a037294499e0b221ca2e233731a6',1,'CMS',1,5,'2019-08-30 17:00:36',NULL),(164,'Ibrahim Ahmad','200798','ibrahim.ahmad58@gmail.com',NULL,'b32c3ea483b375b79e01ffc404316070',2,'Sharia Head',1,7,'2019-08-30 21:54:55','7_September_2.png'),(165,'Asfar M Nur','079968','asfarmnur@gmail.com',NULL,'88e051fa4a54977f5c0314acd54f68f2',1,'CMS',1,22,'2019-09-02 10:13:58',NULL),(166,'Adhine Basilia','007105','adhine.basilia@bfi.co.id',NULL,'63861e93edc0fa85ae5629cb2d85b91f',4,'Administrator',1,46,'2019-09-02 16:22:27',NULL),(167,'Sartika Nur','9016567','sartikanur150696@gmail.com',NULL,'9bf89fcf8e9b04485447a07070c55bfd',1,'CMS',1,22,'2019-09-03 07:59:02',NULL),(168,'Azan Syahida','020251','azan.syahida@bfi.co.id',NULL,'1b4cbd2b7defad1cd60d5e544125f8b7',4,'Administrator',1,46,'2019-09-03 08:25:44',NULL),(169,'Oky Noviyaldi','073255','oky.di91@gmail.com',NULL,'b895a9ddd8f6db70af8b5cc4cd759005',1,'CMS',1,8,'2019-09-03 08:58:20',NULL),(170,'Yogie Saputra','9014943','sptrayogie15@gmail.com',NULL,'b895a9ddd8f6db70af8b5cc4cd759005',1,'CMS',1,8,'2019-09-03 08:59:18',NULL),(171,'Rama andika','005418','rama.andika@bfi.co.id',NULL,'ca9d3b236d051267fb2abf03814c311d',3,'Sharia Manager',1,39,'2019-09-03 10:37:14',NULL),(172,'Pevi Defitri','004299','pevi.defitri@bfi.co.id',NULL,'1256dfebb311c8efcb1cea8888edb228',4,'Administrator',1,46,'2019-09-03 14:38:32',NULL),(173,'Rini Nurhayati','006145','rini.nurhayati@bfi.co.id',NULL,'f9a0fd5e898d77e82360dcabff946604',3,'Sharia Manager',1,5,'2019-09-03 16:11:19',NULL),(174,'Nisa Maharani','9017834','nisamaharani0102@gmail.com',NULL,'d97a5461c2a9c54d5ae0ecc3a8dc83d1',1,'CMS',1,1,'2019-09-05 14:13:58',NULL),(175,'AMIN BUDIMAN','9017795','aminbudiman713@gmail.com',NULL,'dca6c88d3a72f0219265f746dc1dc698',1,'CMS',1,19,'2019-09-05 15:44:23','Picture_kendari1.jpg'),(176,'Rudy Prastiyo','081722','rudyprastiyo66@gmail.com',NULL,'bb02a63a9236fdc85898adf7e72642c7',1,'CMS',1,16,'2019-09-06 14:55:57',NULL),(177,'RD Kurniawan','9017236','kurniawanraden33@gmail.com',NULL,'58452144b4d2eeb31ab5db40d7f90575',1,'CMS',1,16,'2019-09-06 17:49:25',NULL),(178,'EVA MARIANA','004689','EVA.MARIANA@BFI.CO.ID',NULL,'b5f33e72b4ddda4f24e41a2c6208d792',1,'CMS',1,16,'2019-09-09 18:17:36',NULL),(179,'kiki fatmawati','081751','sarinahkiki@gmail.com',NULL,'fc97001351a5194d0d8f4707b5340c61',1,'CMS',1,10,'2019-09-10 08:12:28',NULL),(180,'Syaiin Erdiyanto','012973','syaiin.erdianto@bfi.co.id',NULL,'7eaea3c3e29af4cf6b8c571892df5501',2,'Sharia Head',1,21,'2019-09-10 08:35:15','rumah.jpg'),(181,'Teri Angraeni','073187','teri.angraeni@local.bfi.co.id',NULL,'e10adc3949ba59abbe56e057f20f883e',4,'Administrator',1,46,'2019-09-12 08:35:32','bfi_syariah_logo.jpg'),(182,'Fitria ningsih','008342','naylakanti14@gmail.com',NULL,'df73fe8a47f7100928e9e22cec9976a7',1,'CMS',1,24,'2019-09-18 10:18:21',NULL),(183,'azwida faqih','9017967','azwida.bfi@gmail.com',NULL,'89cb40dc754dd95ac1d66777c2e2867f',1,'CMS',1,14,'2019-09-25 09:39:06',NULL),(184,'Eko Supriatman','073106','eko.supriatman@bfi.co.id',NULL,'bb38bc4b2b35a5a194c29c805e56366c',5,'Administrator',1,46,'2019-09-25 14:03:40',NULL),(185,'Raraisa','073158','anggarams@ymail.com',NULL,'e10adc3949ba59abbe56e057f20f883e',3,'Sharia Manager',1,7,'2019-09-26 10:14:37',NULL),(186,'UPI','9016870','upi025yvl@gmail.com',NULL,'e78d7dc7320e76eff092280cfc73578e',1,'CMS',1,3,'2019-09-27 14:02:33',NULL),(187,'BIMA ANZALTA','9018205','bimaanzalta09@gmail.com',NULL,'943017475cd145b0de0a48ef678285e0',1,'CMS',1,28,'2019-10-01 14:04:11',NULL),(188,'Ahmad Baihaqi Albanna','9018213','ahmadbaihaqialbanna@gmail.com',NULL,'5b6fed7bc9a055a4539fcceb840a24b4',1,'CMS',1,5,'2019-10-01 15:57:18',NULL),(189,'panji darmawan manurung','9018052','darmawanpanji19@gmail.com',NULL,'b5be6eb356d22af981c5e0b390c4f045',1,'CMS',1,25,'2019-10-03 08:53:49',NULL),(190,'NURUL KHASANAH','9018336','nkhasanah039@gmail.com',NULL,'19a00936f1e2d7b608ac24a9ab4920f0',1,'CMS',1,40,'2019-10-03 09:08:30',NULL),(191,'Eko yuli suprianto','0016923','hs2801006@gmail.com',NULL,'d6c582cd4e8abde4f2a5c50f110d2603',1,'CMS',1,15,'2019-10-03 10:02:56',NULL),(192,'Ahmad Hanan Patra','9018365','hananpatra@gmail.com',NULL,'357815222d0ee40d3dffb2de577d545a',1,'CMS',1,1,'2019-10-04 09:08:01',NULL),(193,'zulkarnain malawat','9018539','zulalfatihdhafir@gmail.com',NULL,'364d6c964fdb55b5125faf136bd1e537',1,'CMS',1,38,'2019-10-11 07:25:10',NULL),(194,'FAISAL','9018517','faisalisal239511@gmail.com',NULL,'da5e3d27cc8b87d5c7b7c7fa454531ae',1,'CMS',1,26,'2019-10-11 08:13:18',NULL),(195,'MARYANI','9018405','yaniems23@yahoo.com',NULL,'8a9d325a52baeef2199fe864ac5ee175',1,'CMS',1,32,'2019-10-11 08:55:30',NULL),(196,'Muhammad Firdaus','9016123','11mfirdaus@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e',1,'CMS',1,21,'2019-10-12 09:21:43',NULL),(197,'Alan Adriansyah','9017238','alanadriansyah18@gmail.com',NULL,'d97a5461c2a9c54d5ae0ecc3a8dc83d1',1,'CMS',1,21,'2019-10-12 09:23:56',NULL),(198,'ELSA DWI JAYANTI PURWONO','9018590','elsadjp@gmail.com',NULL,'79c962df73d18fd2b5fa4b3840fd482a',1,'CMS',1,33,'2019-10-14 09:22:23',NULL),(199,'Dhea Alfrinda Putri','9018592','alfrindadhea@gmail.com',NULL,'7058f95214fefcbb80c6ccccbae58ac5',1,'CMS',1,11,'2019-10-18 16:15:52',NULL),(200,'muhammad andi falakhudin','9018742','andi.falak22@gmail.com',NULL,'ee31d1e8a4674f4fe0c738936ba1aa58',1,'CMS',1,10,'2019-10-28 08:41:43',NULL),(201,'Nurfadhillah','9018486','nurfadhihasrul@gmail.com',NULL,'ea5c0ab53cd7990415cbaa76b81788d3',1,'CMS',1,22,'2019-10-28 15:17:38',NULL),(202,'TRISDIYOWAN AHMAD','9018659','ahmadtrisdiyowan@gmail.com',NULL,'9728a4c86cfea37bba7085d655c2d4dc',1,'CMS',1,12,'2019-11-04 16:05:42',NULL),(203,'Moch. taufik aziz','9018557','taufikaziz77@gmail.com',NULL,'e47e7202db3f602c7872c5e83a8d21a0',1,'CMS',1,17,'2019-11-05 17:05:18',NULL),(204,'Rudiyono','9018958','rudiyobo1612@gmail.com',NULL,'285068b06b888af8653cd79e5d0e5c7b',1,'CMS',1,17,'2019-11-05 17:07:31',NULL),(205,'Jur Fikram Abbas','9018735','fikramabbas.abd.rahman@gmail.com',NULL,'36e3aead05dd4022de313648e732ab92',1,'CMS',1,44,'2019-11-07 08:52:41',NULL),(206,'Supardi Hi Ali','073871','supardihiali@gmail.com',NULL,'65e2db44597e536896f247ac810fe7e9',2,'Sharia Head',1,44,'2019-11-07 09:10:45','photo_2019-11-11_13-13-09.jpg'),(207,'DIANSAH','082376','Diansahsuntersyariah@gmail.com',NULL,'0beb4892395211e0429d73b034db620d',1,'CMS',1,40,'2019-11-11 08:46:28','20663612_1783115311716118_7695621949797878825_n.jpg'),(208,'AKHMAD JAKI','9018964','akhmadjaki@yahoo.com',NULL,'e10adc3949ba59abbe56e057f20f883e',1,'CMS',1,29,'2019-11-11 10:06:57',NULL),(209,'Luthfi Hafizh Farziansyah','9019081','luthfisyah04@gmail.com',NULL,'b8ec2448a374ff4f41b3b984f5869aee',1,'CMS',1,5,'2019-11-13 12:37:05',NULL),(210,'RAHARDIAN AULYA SETYAJI','9018764','rahardiansetyaji@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e',1,'CMS',1,36,'2019-11-13 13:32:38',NULL),(211,'PUTRI ADELINA','9019026','putriadelina1122@gmail.com',NULL,'7a36a05edf7e3fe651a5807871528a0e',1,'CMS',1,25,'2019-11-19 16:54:43',NULL),(212,'MUH NUR YAYAT PAGALA','9019270','nuryayatpagalas.ak@gmail.com',NULL,'e94f800db95ef27899748cbe0fe6c3ac',1,NULL,0,19,'2019-11-22 12:29:38',NULL),(219,'Ahmad Jabar','089618','ahmad.jabar@bfi.co.id',NULL,'c18058397a7484a80db5d7b80761eb73',1,'CMS',1,11,'2020-01-09 08:38:33',NULL),(220,'Ramdan Darmawan','161198','ramdan.darmawan16@gmail.com',NULL,'f968d52b8aeda99f07d95e5a192f42c7',1,'CMS',1,7,'2020-01-21 15:15:28',NULL),(222,'Rahmat Darmawan','1611999','rahmat.darmawan@gmail.com',NULL,'802660d7107ca723ba9350368b1436b5',1,'CMS',1,7,'2020-01-21 16:04:07',NULL),(224,'Ardy Supriatman','2307998','ardy@gmail.com',NULL,'89093e1fe88e4088f40dfde9f2d1ffb3',2,'Sharia Head',1,7,'2020-01-21 16:11:03',NULL),(225,'Achmad Zaky','199820','',NULL,'b32c3ea483b375b79e01ffc404316070',1,'CMS',1,2,'2020-01-22 16:43:00',NULL),(232,'Don Aria Sabda','1998919','',NULL,'b32c3ea483b375b79e01ffc404316070',3,'Sharia Manager',1,7,'2020-01-27 16:16:42',NULL),(240,'Jabari','9120938','',NULL,'b32c3ea483b375b79e01ffc404316070',1,'CMS',1,3,'2020-01-29 16:46:02',NULL),(241,'Ardi','9812739','',NULL,'b32c3ea483b375b79e01ffc404316070',1,'CMS',1,2,'2020-01-29 16:49:43',NULL),(242,'Kevin Mccalister','9019293','',NULL,'b32c3ea483b375b79e01ffc404316070',1,'CMS',1,7,'2020-01-30 13:29:24',NULL);

#
# Structure for table "partner_activities"
#

CREATE TABLE `partner_activities` (
  `id_partner_activity` int(11) NOT NULL AUTO_INCREMENT,
  `activity` text NOT NULL,
  `date_activity` datetime NOT NULL,
  `id_partner` int(11) NOT NULL,
  `id_user` int(3) NOT NULL,
  PRIMARY KEY (`id_partner_activity`),
  KEY `id_user` (`id_user`),
  KEY `id_partner` (`id_partner`),
  CONSTRAINT `partner_activities_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=latin1 COMMENT='Tabel Partner Activities';

#
# Data for table "partner_activities"
#

INSERT INTO `partner_activities` VALUES (105,'Data Partner telah dibuat','2020-01-16 14:53:49',61,11),(106,'Data Partner telah dibuat','2020-01-17 10:05:50',62,164),(107,'Data Partner telah dibuat','2020-01-27 11:46:47',63,26),(108,'Data Partner telah dibuat','2020-01-28 09:52:33',64,11);

#
# Structure for table "mapping_partners"
#

CREATE TABLE `mapping_partners` (
  `id_mapping` int(11) NOT NULL AUTO_INCREMENT,
  `nama_usaha` varchar(255) NOT NULL,
  `bidang_usaha` varchar(255) NOT NULL,
  `bentuk_usaha` varchar(255) DEFAULT NULL COMMENT 'Perorangan / PD / CV / PT',
  `alamat` text NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kategori_produk` varchar(255) NOT NULL,
  `catatan` text NOT NULL,
  `foto_usaha_mapping` varchar(255) DEFAULT NULL COMMENT 'Form Upload File',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_branch` int(3) DEFAULT NULL,
  `id_user` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_mapping`),
  UNIQUE KEY `telepon` (`telepon`),
  UNIQUE KEY `email` (`email`),
  KEY `id_branch` (`id_branch`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `mapping_partners_ibfk_1` FOREIGN KEY (`id_branch`) REFERENCES `branches` (`id_branch`),
  CONSTRAINT `mapping_partners_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1 COMMENT='Tabel Partner Mapping';

#
# Data for table "mapping_partners"
#

INSERT INTO `mapping_partners` VALUES (37,'PT KAPAS','Tekstil','PT','','089827812775','kapas@gmail.com','My Ihram','',NULL,'2020-01-16 14:53:49','2020-01-16 14:53:49',7,164),(38,'PT abraham','Percetakan','PT','jakarta','13432425433234','abraham@gmail.com','My CarS','asik','Cheria.jpg','2020-01-17 10:01:05','2020-01-17 10:01:05',7,164),(39,'don','Tekstil','Perorangan','asdsa','12321321321','donnindo@gmail.com','My Ihram','',NULL,'2020-01-27 11:46:47','2020-01-27 11:46:47',7,26),(40,'PT BFI Finance','Jasa Keuangan','PT','Manchester','089827812123','bfi@bfi.co.id','My Talim','',NULL,'2020-01-28 09:52:33','2020-01-28 09:52:33',7,11);

#
# Structure for table "mapping_leads"
#

CREATE TABLE `mapping_leads` (
  `id_mapping_leads` int(11) NOT NULL AUTO_INCREMENT,
  `nama_konsumen` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `soa` varchar(255) DEFAULT NULL,
  `produk` varchar(255) DEFAULT NULL,
  `detail_produk` text DEFAULT NULL,
  `nama_event` varchar(255) DEFAULT NULL COMMENT 'Nama Event wajib diisi jika SOA event dipilih',
  `nama_partner` varchar(255) DEFAULT NULL COMMENT 'Nama Partner',
  `nama_agent` varchar(255) DEFAULT NULL COMMENT 'Nama Agent',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_branch` int(3) DEFAULT NULL,
  `id_user` int(3) DEFAULT NULL,
  `id_mapping` int(11) DEFAULT NULL COMMENT 'ID Mapping Partner',
  `id_agent` int(11) DEFAULT NULL,
  `nik_egc` varchar(10) DEFAULT NULL COMMENT 'Khusus SOA EGC',
  `posisi_egc` varchar(255) DEFAULT NULL COMMENT 'Khusus SOA EGC',
  `cabang_egc` varchar(255) DEFAULT NULL COMMENT 'Khusus SOA EGC',
  `nomor_kontrak` varchar(255) DEFAULT NULL COMMENT 'Khusus SOA CGC & RO',
  `referral_konsumen` varchar(255) DEFAULT NULL COMMENT 'Nama Konsumen CGC & RO',
  `foto_usaha` varchar(255) DEFAULT NULL COMMENT 'Form Upload File',
  PRIMARY KEY (`id_mapping_leads`),
  KEY `id_branch` (`id_branch`),
  KEY `id_user` (`id_user`),
  KEY `id_partner` (`id_mapping`),
  KEY `id_agent` (`id_agent`),
  CONSTRAINT `mapping_leads_ibfk_1` FOREIGN KEY (`id_branch`) REFERENCES `branches` (`id_branch`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `mapping_leads_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `mapping_leads_ibfk_4` FOREIGN KEY (`id_agent`) REFERENCES `agents` (`id_agent`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1 COMMENT='Tabel Leads Database';

#
# Data for table "mapping_leads"
#

INSERT INTO `mapping_leads` VALUES (59,'Eko Supriatman','089827812775','RO','My CarS','Mobil ku',NULL,'PT abraham',NULL,'2020-01-16 14:54:20','2020-01-21 13:39:30',7,11,38,NULL,NULL,NULL,NULL,'3213213','ibera',NULL),(60,'Romli Saputra','0878099758052','Walk In','My Talim','Kursus Pendidikan Programming',NULL,'PT KAPAS',NULL,'2020-01-16 15:05:53','2020-01-21 13:24:00',7,164,37,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(61,'bambank','089828302803','Walk In','My Ihram','Mobil ku',NULL,'PT KAPAS',NULL,'2020-01-17 09:59:25','2020-01-29 11:00:36',7,61,37,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(62,'Letik La Roiba','0898234535777','Penyedia Jasa','My Safar','Ihram',NULL,'PT BFI Finance',NULL,'2020-01-28 09:56:47','2020-01-28 09:56:47',7,11,40,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

#
# Structure for table "leads_follow_up"
#

CREATE TABLE `leads_follow_up` (
  `id_leads_follow_up` int(11) NOT NULL AUTO_INCREMENT,
  `follow_up_by` varchar(255) DEFAULT NULL COMMENT 'Kunjungan, Whatsapp, Telepon dll',
  `date_follow_up` datetime DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `id_mapping_leads` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL COMMENT 'Mencatat Siapa yang follow up leads',
  PRIMARY KEY (`id_leads_follow_up`),
  KEY `id_mapping_leads` (`id_mapping_leads`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `leads_follow_up_ibfk_1` FOREIGN KEY (`id_mapping_leads`) REFERENCES `mapping_leads` (`id_mapping_leads`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `leads_follow_up_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1 COMMENT='Tabel Leads Follow Up';

#
# Data for table "leads_follow_up"
#

INSERT INTO `leads_follow_up` VALUES (102,'Kunjungan','2020-01-16 15:03:46',NULL,59,11),(103,'Visit Konsumen','2020-01-17 10:37:03','mantep',61,164),(104,'Kunjungan','2020-01-17 14:39:43',NULL,59,164),(105,'Telepon','2020-01-21 13:24:01',NULL,60,157),(106,'Kunjungan','2020-01-21 13:25:19',NULL,59,157),(107,'Kunjungan','2020-01-21 13:28:21',NULL,59,164),(108,'Kunjungan','2020-01-21 13:38:29',NULL,59,164),(109,'Kunjungan','2020-01-21 13:39:30',NULL,59,157),(110,'Kunjungan','2020-01-28 09:56:48',NULL,62,11),(111,'Kunjungan','2020-01-29 11:00:37',NULL,61,164);

#
# Structure for table "login_log"
#

CREATE TABLE `login_log` (
  `id_login_log` int(11) NOT NULL AUTO_INCREMENT,
  `login_date` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `keterangan` enum('login','expire') DEFAULT NULL COMMENT 'login = catatan login berhasil, expire = percobaan login user yg tdk aktif selama lebih dari 7 hari',
  PRIMARY KEY (`id_login_log`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `login_log_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=421 DEFAULT CHARSET=latin1 COMMENT='Table Catatan login User';

#
# Data for table "login_log"
#

INSERT INTO `login_log` VALUES (1,'0000-00-00 00:00:00',26,'login'),(2,'2019-11-20 02:49:49',26,'login'),(3,'2019-11-21 05:33:42',26,'login'),(4,'2019-11-21 08:35:13',26,'login'),(5,'2019-11-21 08:39:01',26,'login'),(6,'2019-11-22 08:53:40',26,'login'),(7,'2019-11-22 19:22:43',26,'login'),(8,'2019-11-22 22:04:45',26,'login'),(9,'2019-11-23 09:28:11',26,'login'),(10,'2019-11-23 10:06:55',17,'login'),(11,'2019-11-23 11:51:22',26,'login'),(12,'2019-11-23 14:52:05',26,'login'),(13,'2019-11-23 22:18:31',26,'login'),(14,'2019-11-24 13:38:30',26,'login'),(15,'2019-11-25 08:44:59',26,'login'),(16,'2019-11-25 19:16:47',26,'login'),(17,'2019-11-26 08:28:26',26,'login'),(18,'2019-11-26 13:20:53',17,'login'),(19,'2019-11-26 13:30:26',26,'login'),(20,'2019-11-26 13:31:03',26,'login'),(21,'2019-11-26 13:32:36',1,'login'),(22,'2019-11-26 14:14:02',26,'login'),(23,'2019-11-26 14:15:34',26,'login'),(24,'2019-11-26 14:27:15',11,'login'),(25,'2019-11-27 09:06:52',17,'login'),(26,'2019-11-27 09:08:36',26,'login'),(27,'2019-11-27 09:09:05',11,'login'),(28,'2019-11-27 13:20:25',26,'login'),(29,'2019-11-28 10:21:38',26,'login'),(30,'2019-11-28 15:55:51',26,'login'),(31,'2019-11-29 09:27:17',26,'login'),(32,'2019-11-29 13:40:46',26,'login'),(33,'2019-11-30 09:16:47',26,'login'),(34,'2019-12-02 08:45:54',26,'login'),(35,'2019-12-02 15:01:55',26,'login'),(36,'2019-12-02 15:15:04',11,'login'),(37,'2019-12-02 15:26:14',26,'login'),(38,'2019-12-02 15:46:18',1,'login'),(39,'2019-12-03 10:44:22',11,'login'),(40,'2019-12-03 10:57:48',1,'login'),(41,'2019-12-03 13:31:39',26,'login'),(42,'2019-12-03 13:32:06',1,'login'),(43,'2019-12-03 13:45:34',11,'login'),(44,'2019-12-03 13:58:57',26,'login'),(45,'2019-12-03 13:59:42',26,'login'),(46,'2019-12-03 14:00:13',17,'login'),(47,'2019-12-03 14:07:55',26,'login'),(48,'2019-12-03 14:21:15',17,'login'),(49,'2019-12-03 14:21:47',26,'login'),(50,'2019-12-03 14:22:38',26,'login'),(51,'2019-12-03 14:22:58',17,'login'),(52,'2019-12-03 15:56:28',26,'login'),(53,'2019-12-03 15:56:54',26,'login'),(54,'2019-12-03 15:57:25',17,'login'),(55,'2019-12-04 11:03:57',26,'login'),(56,'2019-12-04 11:17:04',26,'login'),(57,'2019-12-04 11:33:21',17,'login'),(58,'2019-12-04 13:38:59',26,'login'),(59,'2019-12-04 14:44:33',26,'login'),(60,'2019-12-04 14:44:45',17,'login'),(61,'2019-12-05 08:41:47',26,'login'),(62,'2019-12-05 09:41:55',17,'login'),(63,'2019-12-05 09:44:14',1,'login'),(64,'2019-12-05 10:21:14',26,'login'),(65,'2019-12-05 13:06:54',17,'login'),(66,'2019-12-05 13:07:10',1,'login'),(67,'2019-12-05 13:20:45',26,'login'),(68,'2019-12-05 13:55:38',1,'login'),(69,'2019-12-05 15:51:45',26,'login'),(70,'2019-12-05 15:55:24',26,'login'),(71,'2019-12-05 15:56:12',11,'login'),(72,'2019-12-05 16:01:02',26,'login'),(73,'2019-12-05 16:01:35',2,'login'),(74,'2019-12-05 16:05:44',11,'login'),(75,'2019-12-05 16:08:41',1,'login'),(76,'2019-12-05 16:10:01',26,'login'),(77,'2019-12-05 16:30:19',26,'login'),(78,'2019-12-05 16:30:25',1,'login'),(79,'2019-12-05 16:44:03',26,'login'),(80,'2019-12-06 08:14:56',26,'login'),(81,'2019-12-06 09:03:28',2,'login'),(82,'2019-12-06 09:06:03',26,'login'),(83,'2019-12-06 09:38:46',11,'login'),(84,'2019-12-06 09:39:03',26,'login'),(85,'2019-12-09 10:27:47',26,'login'),(86,'2019-12-09 14:19:27',26,'login'),(87,'2019-12-10 08:11:19',26,'login'),(88,'2019-12-11 08:25:07',26,'login'),(89,'2019-12-11 09:59:17',26,'login'),(90,'2019-12-11 13:52:16',1,'login'),(91,'2019-12-11 13:53:33',26,'login'),(92,'2019-12-11 15:55:37',11,'login'),(93,'2019-12-11 16:14:17',26,'login'),(94,'2019-12-11 16:14:45',164,'login'),(95,'2019-12-11 16:18:01',11,'login'),(96,'2019-12-11 16:53:07',26,'login'),(97,'2019-12-11 16:54:51',26,'login'),(98,'2019-12-12 08:40:09',26,'login'),(99,'2019-12-12 08:45:55',11,'login'),(100,'2019-12-12 08:59:52',1,'login'),(101,'2019-12-12 10:08:22',26,'login'),(102,'2019-12-12 13:05:49',11,'login'),(103,'2019-12-12 14:35:11',11,'login'),(104,'2019-12-12 14:38:16',26,'login'),(105,'2019-12-12 16:49:26',11,'login'),(106,'2019-12-12 16:50:01',26,'login'),(107,'2019-12-12 16:50:34',11,'login'),(108,'2019-12-12 16:54:30',164,'login'),(109,'2019-12-12 16:55:19',26,'login'),(110,'2019-12-12 16:56:12',26,'login'),(111,'2019-12-13 08:27:02',26,'login'),(112,'2019-12-13 08:53:03',26,'login'),(113,'2019-12-13 09:04:26',26,'login'),(114,'2019-12-13 09:39:24',11,'login'),(115,'2019-12-13 09:45:39',1,'login'),(116,'2019-12-13 09:46:38',11,'login'),(117,'2019-12-13 10:09:35',1,'login'),(118,'2019-12-13 10:15:22',11,'login'),(119,'2019-12-13 10:16:53',1,'login'),(120,'2019-12-13 10:17:57',11,'login'),(121,'2019-12-13 10:44:33',164,'login'),(122,'2019-12-13 10:45:29',11,'login'),(123,'2019-12-13 10:46:00',164,'login'),(124,'2019-12-13 11:09:36',26,'login'),(125,'2019-12-13 13:34:19',11,'login'),(126,'2019-12-13 13:42:55',164,'login'),(127,'2019-12-13 13:56:19',26,'login'),(128,'2019-12-13 13:57:44',26,'login'),(129,'2019-12-13 13:57:56',164,'login'),(130,'2019-12-13 14:00:31',26,'login'),(131,'2019-12-13 14:02:11',1,'login'),(132,'2019-12-13 14:17:48',26,'login'),(133,'2019-12-13 14:18:01',164,'login'),(134,'2019-12-13 14:18:17',26,'login'),(135,'2019-12-13 14:41:47',11,'login'),(136,'2019-12-13 15:07:25',164,'login'),(137,'2019-12-13 15:08:14',26,'login'),(138,'2019-12-13 15:08:37',1,'login'),(139,'2019-12-13 15:08:45',26,'login'),(140,'2019-12-13 15:10:11',26,'login'),(141,'2019-12-13 15:10:17',1,'login'),(142,'2019-12-13 15:11:47',11,'login'),(143,'2019-12-14 21:50:03',11,'login'),(144,'2019-12-14 23:32:22',157,'login'),(145,'2019-12-14 23:32:57',157,'login'),(146,'2019-12-14 23:34:28',26,'login'),(147,'2019-12-15 09:06:12',11,'login'),(148,'2019-12-15 17:16:13',17,'login'),(149,'2019-12-15 17:30:42',11,'login'),(150,'2019-12-15 23:11:25',157,'login'),(151,'2019-12-15 23:41:15',11,'login'),(152,'2019-12-16 08:50:25',17,'login'),(153,'2019-12-16 08:52:30',11,'login'),(154,'2019-12-16 09:23:40',164,'login'),(155,'2019-12-16 09:24:30',26,'login'),(156,'2019-12-16 09:31:46',17,'login'),(157,'2019-12-16 09:32:19',1,'login'),(158,'2019-12-16 09:35:18',11,'login'),(159,'2019-12-16 10:57:46',157,'login'),(160,'2019-12-16 12:34:30',11,'login'),(161,'2019-12-16 12:38:40',51,'login'),(162,'2019-12-16 12:39:33',49,'login'),(163,'2019-12-16 14:26:19',11,'login'),(164,'2019-12-16 16:32:02',26,'login'),(165,'2019-12-16 20:12:42',26,'login'),(166,'2019-12-17 11:06:17',11,'login'),(167,'2019-12-19 09:05:38',26,'login'),(168,'2019-12-19 13:02:31',11,'login'),(169,'2019-12-20 08:39:07',26,'login'),(170,'2019-12-20 08:50:34',26,'login'),(171,'2019-12-20 09:04:28',164,'login'),(172,'2019-12-20 09:04:52',26,'login'),(173,'2019-12-20 09:05:20',1,'login'),(174,'2019-12-20 09:10:54',11,'login'),(175,'2019-12-20 10:12:14',26,'login'),(176,'2019-12-20 10:12:32',164,'login'),(177,'2019-12-20 10:13:02',26,'login'),(178,'2019-12-20 10:13:34',1,'login'),(179,'2019-12-20 10:15:34',11,'login'),(180,'2019-12-20 14:55:30',1,'login'),(181,'2019-12-20 14:59:06',11,'login'),(182,'2019-12-21 10:00:09',11,'login'),(183,'2019-12-22 13:58:51',11,'login'),(184,'2019-12-22 16:55:23',26,'login'),(185,'2019-12-22 16:59:37',164,'login'),(186,'2019-12-22 17:32:41',1,'login'),(187,'2019-12-22 17:32:58',26,'login'),(188,'2019-12-22 17:34:08',1,'login'),(189,'2019-12-22 17:34:46',11,'login'),(190,'2019-12-22 17:37:48',26,'login'),(191,'2019-12-22 17:38:06',1,'login'),(192,'2019-12-22 17:38:49',11,'login'),(193,'2019-12-22 22:24:07',164,'login'),(194,'2019-12-22 22:24:32',26,'login'),(195,'2019-12-22 22:25:00',1,'login'),(196,'2019-12-22 22:25:29',26,'login'),(197,'2019-12-23 10:05:36',26,'login'),(198,'2019-12-23 10:09:44',164,'login'),(199,'2019-12-23 10:10:03',26,'login'),(200,'2019-12-23 10:10:24',1,'login'),(201,'2019-12-23 10:10:53',26,'login'),(202,'2019-12-23 10:13:48',11,'login'),(203,'2019-12-23 12:29:59',26,'login'),(204,'2019-12-24 08:36:45',11,'login'),(205,'2019-12-24 10:22:38',26,'login'),(206,'2019-12-24 14:12:14',17,'login'),(207,'2019-12-24 14:13:38',11,'login'),(208,'2019-12-26 08:35:48',26,'login'),(209,'2019-12-26 14:17:37',11,'login'),(210,'2019-12-26 14:20:13',26,'login'),(211,'2019-12-26 14:20:26',1,'login'),(212,'2019-12-26 14:22:36',17,'login'),(213,'2019-12-26 14:22:45',11,'login'),(214,'2019-12-26 14:32:21',157,'login'),(215,'2019-12-26 14:46:37',11,'login'),(216,'2019-12-26 14:47:11',164,'login'),(217,'2019-12-26 16:21:50',26,'login'),(218,'2019-12-26 16:22:04',157,'login'),(219,'2019-12-27 08:37:19',11,'login'),(220,'2019-12-27 08:49:41',157,'login'),(221,'2019-12-27 10:35:43',26,'login'),(222,'2019-12-27 11:10:45',26,'login'),(223,'2019-12-27 11:10:59',11,'login'),(224,'2019-12-27 13:33:48',11,'login'),(225,'2019-12-27 17:11:48',26,'login'),(226,'2019-12-28 10:39:04',11,'login'),(227,'2019-12-28 10:57:23',11,'login'),(228,'2019-12-28 12:09:34',157,'login'),(229,'2019-12-29 12:47:42',1,'login'),(230,'2019-12-29 13:42:14',11,'login'),(231,'2019-12-29 13:45:41',157,'login'),(232,'2019-12-29 17:00:43',157,'login'),(233,'2019-12-29 17:00:43',157,'login'),(234,'2019-12-29 17:02:14',164,'login'),(235,'2019-12-29 17:03:34',26,'login'),(236,'2019-12-29 17:04:00',1,'login'),(237,'2019-12-30 09:11:28',157,'login'),(238,'2019-12-30 09:12:46',164,'login'),(239,'2019-12-30 09:26:41',26,'login'),(240,'2020-01-02 09:13:35',157,'login'),(241,'2020-01-02 09:26:52',11,'login'),(242,'2020-01-02 10:52:04',157,'login'),(243,'2020-01-02 11:18:47',11,'login'),(244,'2020-01-02 13:07:40',26,'login'),(245,'2020-01-03 08:28:34',164,'login'),(246,'2020-01-03 08:29:17',11,'login'),(247,'2020-01-03 10:47:10',157,'login'),(248,'2020-01-03 11:01:09',164,'login'),(249,'2020-01-03 11:14:58',11,'login'),(250,'2020-01-03 11:15:12',157,'login'),(251,'2020-01-03 11:18:17',26,'login'),(252,'2020-01-03 13:24:36',157,'login'),(253,'2020-01-03 13:28:49',26,'login'),(254,'2020-01-03 13:35:16',157,'login'),(255,'2020-01-03 13:35:38',26,'login'),(256,'2020-01-03 13:36:19',157,'login'),(257,'2020-01-03 13:47:20',11,'login'),(258,'2020-01-03 14:16:54',1,'login'),(259,'2020-01-03 14:34:49',26,'login'),(260,'2020-01-03 14:35:06',26,'login'),(261,'2020-01-07 09:30:52',11,'login'),(262,'2020-01-07 10:35:26',157,'login'),(263,'2020-01-07 10:37:12',155,'login'),(264,'2020-01-07 10:41:16',157,'login'),(265,'2020-01-07 11:03:38',11,'login'),(266,'2020-01-07 16:16:35',11,'login'),(267,'2020-01-08 08:55:50',11,'login'),(268,'2020-01-08 09:13:30',11,'login'),(269,'2020-01-08 09:18:00',157,'login'),(270,'2020-01-08 10:04:37',26,'login'),(271,'2020-01-08 10:42:36',157,'login'),(272,'2020-01-08 10:57:23',26,'login'),(273,'2020-01-08 10:59:17',157,'login'),(274,'2020-01-08 13:15:24',26,'login'),(275,'2020-01-08 13:48:57',157,'login'),(276,'2020-01-08 14:06:44',11,'login'),(277,'2020-01-08 14:36:35',164,'login'),(278,'2020-01-08 14:37:58',26,'login'),(279,'2020-01-09 08:34:32',1,'login'),(280,'2020-01-09 08:39:15',219,'login'),(281,'2020-01-09 11:07:12',1,'login'),(282,'2020-01-09 14:09:04',164,'login'),(283,'2020-01-09 14:42:03',157,'login'),(284,'2020-01-09 16:22:32',164,'login'),(285,'2020-01-09 16:38:49',219,'login'),(286,'2020-01-10 11:05:23',11,'login'),(287,'2020-01-10 13:46:24',11,'login'),(288,'2020-01-10 14:49:14',26,'login'),(289,'2020-01-13 08:59:50',11,'login'),(290,'2020-01-13 15:00:17',1,'login'),(291,'2020-01-13 15:03:31',164,'login'),(292,'2020-01-14 08:54:27',11,'login'),(293,'2020-01-14 09:37:08',1,'login'),(294,'2020-01-14 09:38:16',1,'login'),(295,'2020-01-14 11:13:11',164,'login'),(296,'2020-01-14 11:23:45',1,'login'),(297,'2020-01-14 11:25:14',164,'login'),(298,'2020-01-14 11:38:31',1,'login'),(299,'2020-01-14 11:46:09',1,'login'),(300,'2020-01-14 11:48:14',164,'login'),(301,'2020-01-14 11:48:57',1,'login'),(302,'2020-01-14 11:49:20',164,'login'),(303,'2020-01-14 11:59:19',1,'login'),(304,'2020-01-14 13:26:51',164,'login'),(305,'2020-01-14 14:36:19',1,'login'),(306,'2020-01-14 15:01:01',164,'login'),(307,'2020-01-14 15:01:36',1,'login'),(308,'2020-01-14 16:52:30',11,'login'),(309,'2020-01-14 17:01:55',164,'login'),(310,'2020-01-15 08:17:33',11,'login'),(311,'2020-01-15 09:22:49',164,'login'),(312,'2020-01-15 14:50:53',164,'login'),(313,'2020-01-15 16:22:15',1,'login'),(314,'2020-01-15 16:32:05',1,'login'),(315,'2020-01-15 16:33:43',157,'login'),(316,'2020-01-16 08:36:57',164,'login'),(317,'2020-01-16 14:52:45',11,'login'),(318,'2020-01-16 16:27:54',11,'login'),(319,'2020-01-17 08:37:37',11,'login'),(320,'2020-01-17 08:38:02',1,'login'),(321,'2020-01-17 08:38:12',164,'login'),(322,'2020-01-17 08:38:33',26,'login'),(323,'2020-01-17 08:38:48',1,'login'),(324,'2020-01-17 09:23:27',11,'login'),(325,'2020-01-17 09:24:42',157,'login'),(326,'2020-01-17 09:40:43',164,'login'),(327,'2020-01-17 09:44:02',11,'login'),(328,'2020-01-21 09:31:00',11,'login'),(329,'2020-01-21 10:12:58',1,'login'),(330,'2020-01-21 10:14:39',164,'login'),(331,'2020-01-21 10:29:55',1,'login'),(332,'2020-01-21 10:34:52',157,'login'),(333,'2020-01-21 13:26:15',164,'login'),(334,'2020-01-21 16:11:34',224,'login'),(335,'2020-01-21 16:29:08',1,'login'),(336,'2020-01-22 08:14:44',26,'login'),(337,'2020-01-22 08:22:27',11,'login'),(338,'2020-01-22 10:49:05',1,'login'),(339,'2020-01-18 10:49:13',164,'login'),(340,'2020-01-22 10:49:20',1,'login'),(341,'2020-01-22 12:47:11',1,'login'),(342,'2020-01-22 14:12:11',1,'login'),(343,'2020-01-22 14:49:25',11,'login'),(344,'2020-01-22 14:49:47',1,'login'),(345,'2020-01-22 14:50:58',11,'login'),(346,'2020-01-22 14:51:19',1,'login'),(347,'2020-01-22 15:17:53',1,'login'),(348,'2020-01-22 16:39:27',1,'login'),(349,'2020-01-14 16:48:50',225,'login'),(350,'2020-01-22 17:06:03',1,'login'),(351,'2020-01-24 08:51:29',1,'login'),(352,'2020-01-24 09:34:30',2,'login'),(353,'2020-01-24 09:51:21',1,'login'),(354,'2020-01-24 10:11:09',17,'login'),(355,'2020-01-24 10:15:56',17,'login'),(356,'2020-01-24 14:10:30',1,'login'),(357,'2020-01-24 14:35:50',1,'login'),(367,'2020-01-24 15:30:46',1,'login'),(368,'2020-01-24 16:26:54',1,'login'),(369,'2020-01-27 11:03:54',26,'login'),(370,'2020-01-27 11:29:34',26,'login'),(371,'2020-01-27 11:42:13',1,'login'),(372,'2020-01-27 11:45:37',26,'login'),(373,'2020-01-27 11:48:04',1,'login'),(374,'2020-01-27 11:49:14',1,'login'),(375,'2020-01-27 11:50:07',26,'login'),(376,'2020-01-27 13:30:43',17,'login'),(377,'2020-01-27 13:59:52',1,'login'),(378,'2020-01-27 14:06:22',17,'login'),(379,'2020-01-27 14:35:35',1,'login'),(380,'2020-01-27 14:59:59',26,'login'),(381,'2020-01-27 15:10:00',1,'login'),(382,'2020-01-27 16:09:27',26,'login'),(383,'2020-01-27 16:11:59',26,'login'),(384,'2020-01-27 16:12:31',1,'login'),(385,'2020-01-27 16:21:57',1,'login'),(386,'2020-01-27 16:24:19',1,'login'),(387,'2020-01-27 16:30:04',26,'login'),(388,'2020-01-27 16:31:52',26,'login'),(389,'2020-01-27 16:34:09',1,'login'),(390,'2020-01-27 17:02:42',17,'login'),(391,'2020-01-27 17:04:00',17,'login'),(392,'2020-01-28 09:27:48',17,'login'),(393,'2020-01-28 09:28:33',11,'login'),(394,'2020-01-28 09:41:20',1,'login'),(395,'2020-01-28 09:49:54',11,'login'),(396,'2020-01-28 10:24:25',17,'login'),(397,'2020-01-28 10:36:27',11,'login'),(398,'2020-01-28 11:08:50',26,'login'),(399,'2020-01-28 11:09:11',1,'login'),(400,'2020-01-28 11:10:01',2,'login'),(401,'2020-01-28 11:16:01',157,'login'),(402,'2020-01-28 11:29:38',17,'login'),(403,'2020-01-28 11:32:31',17,'login'),(404,'2020-01-28 11:34:10',11,'login'),(405,'2020-01-28 11:35:09',1,'login'),(406,'2020-01-28 12:56:10',1,'login'),(407,'2020-01-28 14:02:38',11,'login'),(408,'2020-01-29 09:12:38',164,'login'),(409,'2020-01-29 13:32:56',26,'login'),(410,'2020-01-29 13:33:33',1,'login'),(411,'2020-01-29 13:55:14',11,'login'),(412,'2020-01-29 14:16:36',1,'login'),(413,'2020-01-30 11:10:52',1,'login'),(414,'2020-01-30 13:12:37',17,'login'),(415,'2020-01-30 13:13:58',1,'login'),(416,'2020-01-30 13:14:17',1,'login'),(417,'2020-01-30 13:14:53',17,'login'),(418,'2020-01-30 13:42:10',1,'login'),(419,'2020-01-30 13:48:56',17,'login'),(420,'2020-01-30 14:33:39',11,'login');

#
# Structure for table "leads"
#

CREATE TABLE `leads` (
  `id_leads` int(11) NOT NULL AUTO_INCREMENT,
  `leads_id` varchar(255) DEFAULT NULL,
  `no_ktp` varchar(255) DEFAULT NULL,
  `follow_up_by` varchar(255) DEFAULT NULL COMMENT 'Kunjungan / Telepon / Whatsapp / Email',
  `cross_branch` varchar(255) DEFAULT 'Yes / No',
  `cabang_cross` int(3) DEFAULT NULL COMMENT 'Foreign key cabang dari table branches',
  `surveyor` int(11) DEFAULT NULL COMMENT 'Foreign key id_user dari table users',
  `pic_ttd` int(11) DEFAULT NULL COMMENT 'Foreign key id_user dari table users',
  `appeal_nst` varchar(255) DEFAULT NULL COMMENT 'ya/tidak',
  `nilai_funding` bigint(20) DEFAULT NULL,
  `sudah_funding` enum('Belum','Sudah') DEFAULT 'Belum',
  `status` enum('draft','lengkap') DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL COMMENT 'Upload File',
  `selfie_foto` varchar(255) DEFAULT NULL COMMENT 'Upload File',
  `foto_penyedia_jasa` varchar(255) DEFAULT NULL COMMENT 'Upload File',
  `foto_usaha` varchar(255) DEFAULT NULL COMMENT 'Form Upload File',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_mapping_leads` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_leads`),
  UNIQUE KEY `leads_id` (`leads_id`),
  UNIQUE KEY `no_ktp` (`no_ktp`),
  KEY `cabang_cross` (`cabang_cross`),
  KEY `surveyor` (`surveyor`),
  KEY `pic_ttd` (`pic_ttd`),
  CONSTRAINT `leads_ibfk_1` FOREIGN KEY (`cabang_cross`) REFERENCES `branches` (`id_branch`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `leads_ibfk_2` FOREIGN KEY (`surveyor`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `leads_ibfk_3` FOREIGN KEY (`pic_ttd`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1 COMMENT='Tabel Leads Prospek';

#
# Data for table "leads"
#

INSERT INTO `leads` VALUES (61,'202001SLOS19921','2324234657572456','Kunjungan','Ya',2,155,154,NULL,9000000,'Sudah','lengkap',NULL,NULL,NULL,NULL,'2020-01-16 15:03:45','2020-01-21 13:39:30',59),(62,'202001SLOS19920','3603222007980001','Telepon','Ya',6,NULL,NULL,'Ya',9000000,'Belum','lengkap',NULL,NULL,NULL,NULL,'2020-01-16 15:12:02','2020-01-21 13:24:00',60),(63,'202001SLOS19323','9083880209334656','Kunjungan','Tidak',NULL,NULL,NULL,'Ya',80000000,'Belum','lengkap',NULL,NULL,NULL,NULL,'2020-01-28 09:56:48','2020-01-28 09:56:48',62),(64,'202001SLOS19919','1289379812701929','Kunjungan','Ya',2,NULL,NULL,'Tidak',50000000,'Belum','lengkap',NULL,NULL,NULL,NULL,'2020-01-29 11:00:37','2020-01-29 11:00:37',61);

#
# Structure for table "nst"
#

CREATE TABLE `nst` (
  `id_nst` int(11) NOT NULL AUTO_INCREMENT,
  `leads_id` varchar(255) DEFAULT NULL,
  `alasan_reject` varchar(255) DEFAULT NULL,
  `upload_file` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_branch` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_nst`),
  KEY `leads_id` (`leads_id`),
  KEY `id_user` (`id_user`),
  KEY `id_branch` (`id_branch`),
  CONSTRAINT `nst_ibfk_1` FOREIGN KEY (`leads_id`) REFERENCES `leads` (`leads_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `nst_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `nst_ibfk_3` FOREIGN KEY (`id_branch`) REFERENCES `branches` (`id_branch`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='Tabel NST';

#
# Data for table "nst"
#

INSERT INTO `nst` VALUES (5,'202001SLOS19921',NULL,NULL,'2020-01-17 10:27:17','2020-01-17 10:27:17',164,7),(6,'202001SLOS19323',NULL,NULL,'2020-01-28 10:02:08','2020-01-28 10:02:08',11,7);

#
# Structure for table "tickets"
#

CREATE TABLE `tickets` (
  `id_ticket` int(11) NOT NULL AUTO_INCREMENT,
  `ttd_pks` enum('Ya','Tidak','Belum') NOT NULL DEFAULT 'Belum',
  `date_pending` datetime DEFAULT NULL,
  `date_approved_by_head` datetime DEFAULT NULL,
  `date_approved_by_manager` datetime DEFAULT NULL,
  `date_inprogress` datetime DEFAULT NULL,
  `date_rejected` datetime DEFAULT NULL,
  `date_completed` datetime DEFAULT NULL,
  `date_verified_ttd` datetime DEFAULT NULL COMMENT 'tanggal record tanda tangan kerjasama',
  `status` int(2) DEFAULT 0 COMMENT '0 = belum direview oleh head, 1 = belum direview oleh manager, 2 = belum direview oleh HO, 3 = sedang diproses HO, 4 = Ditolak HO, 5 = Disetujui HO',
  `id_partner` int(11) DEFAULT NULL,
  `id_agent` int(11) DEFAULT NULL,
  `id_leads` int(11) DEFAULT NULL,
  `id_nst` int(11) DEFAULT NULL,
  `id_approval_bonus` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_branch` int(11) DEFAULT NULL,
  `completed_by` int(11) DEFAULT NULL COMMENT 'Ketika tiket sudah diapproved HO dan mencatat id_user yang approve',
  `verified_by` int(11) DEFAULT NULL COMMENT 'Mencatat id_user siapa yang verfifikasi ttd',
  `form_mou` varchar(255) DEFAULT NULL COMMENT 'Form Upload File MOU',
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id_ticket`),
  UNIQUE KEY `id_agent` (`id_agent`),
  UNIQUE KEY `id_leads` (`id_leads`),
  UNIQUE KEY `id_partner` (`id_partner`),
  UNIQUE KEY `id_nst` (`id_nst`),
  KEY `id_user` (`id_user`),
  KEY `id_branch` (`id_branch`),
  KEY `verified_by` (`verified_by`),
  CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`id_partner`) REFERENCES `partners` (`id_partner`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`id_agent`) REFERENCES `agents` (`id_agent`),
  CONSTRAINT `tickets_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tickets_ibfk_4` FOREIGN KEY (`id_branch`) REFERENCES `branches` (`id_branch`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tickets_ibfk_5` FOREIGN KEY (`id_leads`) REFERENCES `leads` (`id_leads`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tickets_ibfk_6` FOREIGN KEY (`verified_by`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tickets_ibfk_7` FOREIGN KEY (`id_nst`) REFERENCES `nst` (`id_nst`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=latin1 COMMENT='Tabel Tiket';

#
# Data for table "tickets"
#

INSERT INTO `tickets` VALUES (91,'Belum','2020-01-21 13:39:30','2020-01-17 08:38:18','2020-01-17 08:38:40',NULL,NULL,'2020-01-17 08:38:54',NULL,0,NULL,NULL,61,NULL,NULL,11,7,1,NULL,NULL,'2020-01-16 15:03:45','2020-01-21 13:39:30'),(92,'Belum','2020-01-17 10:05:50',NULL,NULL,NULL,NULL,NULL,NULL,0,62,NULL,NULL,NULL,NULL,164,7,NULL,NULL,NULL,'2020-01-17 10:05:50','2020-01-17 10:05:50'),(93,'Ya','2020-01-17 10:14:32',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,32,NULL,NULL,NULL,164,7,NULL,NULL,NULL,'2020-01-17 10:14:32','2020-01-17 10:14:32'),(94,'Belum','2020-01-17 10:27:17',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,5,NULL,164,7,NULL,NULL,NULL,NULL,NULL),(95,'Belum','2020-01-21 13:24:00',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,62,NULL,NULL,157,2,NULL,NULL,NULL,'2020-01-21 13:24:00','2020-01-21 13:24:00'),(96,'Belum','2020-01-27 11:46:47',NULL,NULL,NULL,NULL,NULL,NULL,0,63,NULL,NULL,NULL,NULL,26,7,NULL,NULL,NULL,'2020-01-27 11:46:47','2020-01-27 11:46:47'),(97,'Belum','2020-01-28 09:52:33',NULL,NULL,NULL,NULL,NULL,NULL,0,64,NULL,NULL,NULL,NULL,11,7,NULL,NULL,NULL,'2020-01-28 09:52:33','2020-01-28 09:52:33'),(98,'Belum','2020-01-28 09:56:48',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,63,NULL,NULL,11,7,NULL,NULL,NULL,'2020-01-28 09:56:48','2020-01-28 09:56:48'),(99,'Belum','2020-01-28 10:02:08',NULL,NULL,NULL,NULL,'2020-01-28 13:56:52',NULL,5,NULL,NULL,NULL,6,NULL,11,7,1,NULL,NULL,'2020-01-28 09:56:48','2020-01-28 09:56:48'),(100,'Belum','2020-01-29 09:44:31',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,4,164,7,NULL,NULL,NULL,'2020-01-29 09:44:31','2020-01-29 09:44:31'),(101,'Belum','2020-01-29 11:00:37',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,64,NULL,NULL,164,7,NULL,NULL,NULL,'2020-01-29 11:00:37','2020-01-29 11:00:37'),(102,'Belum','2020-01-29 11:40:57',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,5,164,7,NULL,NULL,NULL,'2020-01-29 11:40:57','2020-01-29 11:40:57');

#
# Structure for table "notifications"
#

CREATE TABLE `notifications` (
  `id_notification` int(11) NOT NULL AUTO_INCREMENT,
  `has_read` enum('0','1') DEFAULT '0',
  `type` enum('Disetujui oleh Head','Disetujui oleh Manager','Disetujui oleh Admin HO','Komentar oleh','Ditolak oleh','Ditanda tangan oleh','Cross Branch oleh','Tele Assignment oleh') DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `penerima` int(11) DEFAULT NULL COMMENT 'id_user penerima',
  `penerima_cabang` int(11) DEFAULT NULL COMMENT 'id_cabang penerima',
  `pengirim` int(11) DEFAULT NULL COMMENT 'id_user pengirim',
  `id_ticket` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_notification`),
  KEY `penerima` (`penerima`),
  KEY `pengirim` (`pengirim`),
  KEY `id_ticket` (`id_ticket`),
  CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`penerima`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`pengirim`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `notifications_ibfk_3` FOREIGN KEY (`id_ticket`) REFERENCES `tickets` (`id_ticket`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=271 DEFAULT CHARSET=latin1 COMMENT='Tabel Notifikasi';

#
# Data for table "notifications"
#

INSERT INTO `notifications` VALUES (257,'1','Cross Branch oleh','2020-01-16 15:03:46',NULL,2,11,91),(258,'1','Disetujui oleh Head','2020-01-17 08:38:18',11,7,164,91),(259,'1','Disetujui oleh Manager','2020-01-17 08:38:40',11,7,26,91),(260,'1','Disetujui oleh Admin HO','2020-01-17 08:38:54',11,7,1,91),(261,'0','','2020-01-17 10:27:17',NULL,NULL,164,94),(262,'1','Ditanda tangan oleh','2020-01-17 14:32:22',164,7,164,93),(263,'1','Ditanda tangan oleh','2020-01-17 14:32:26',164,7,164,93),(264,'1','Ditanda tangan oleh','2020-01-17 14:32:27',164,7,164,93),(265,'1','Tele Assignment oleh','2020-01-21 10:34:35',NULL,2,1,NULL),(266,'0','Cross Branch oleh','2020-01-21 13:24:01',NULL,6,157,95),(267,'0','Cross Branch oleh','2020-01-28 09:56:48',NULL,NULL,11,98),(268,'0','','2020-01-28 10:02:08',NULL,NULL,11,99),(269,'1','Disetujui oleh Admin HO','2020-01-28 13:56:52',11,7,1,99),(270,'0','Cross Branch oleh','2020-01-29 11:00:37',NULL,2,164,101);

#
# Structure for table "comments"
#

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `has_read` int(3) DEFAULT 0,
  `id_user` int(6) DEFAULT NULL,
  `id_agent` int(11) DEFAULT NULL,
  `id_partner` int(11) DEFAULT NULL,
  `id_leads` int(11) DEFAULT NULL,
  `id_ticket` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_comment`),
  KEY `id_user` (`id_user`),
  KEY `id_partner` (`id_agent`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=1718 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC COMMENT='Tabel Komentar';

#
# Data for table "comments"
#


#
# Structure for table "agent_activities"
#

CREATE TABLE `agent_activities` (
  `id_agent_activity` int(11) NOT NULL AUTO_INCREMENT,
  `activity` text NOT NULL,
  `date_activity` datetime NOT NULL,
  `id_agent` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_agent_activity`),
  KEY `id_agent` (`id_agent`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `agent_activities_ibfk_1` FOREIGN KEY (`id_agent`) REFERENCES `agents` (`id_agent`),
  CONSTRAINT `agent_activities_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1 COMMENT='Tabel Agent Activities';

#
# Data for table "agent_activities"
#

INSERT INTO `agent_activities` VALUES (68,'Data Agent telah dibuat','2020-01-17 10:14:32',32,164),(69,'Data Agent telah dibuat','2020-01-17 13:55:36',33,164);

#
# Structure for table "userss"
#

CREATE TABLE `userss` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL DEFAULT '',
  `nik` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(40) NOT NULL DEFAULT '',
  `level` int(2) NOT NULL DEFAULT 0 COMMENT '1 = cabang user, 2 = admin 1, 3 = admin 2, 4 = admin nst ijarah (arif), 5 = super user (atasan), 6 = cabang head/manager, 7= admin nst murabahah',
  `jabatan` varchar(255) DEFAULT NULL,
  `is_active` int(2) NOT NULL DEFAULT 0,
  `id_branch` int(3) NOT NULL DEFAULT 0,
  `tanggal_daftar` timestamp NULL DEFAULT current_timestamp(),
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `nik` (`nik`),
  KEY `id_branch` (`id_branch`)
) ENGINE=InnoDB AUTO_INCREMENT=188 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# Data for table "userss"
#

