# Host: localhost  (Version 5.5.5-10.4.6-MariaDB)
# Date: 2020-01-02 11:28:53
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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1 COMMENT='Tabel Agent';

#
# Data for table "agents"
#

INSERT INTO `agents` VALUES (27,'Ramdan Darmawan','NULL','08982781277121','admin@perpus.test','2019-12-25','3603222007923432','126387126818123','Wiraswasta','Freelancer','Syariah Ambassador','Kontrak',9000000000,'Ya','Ya','Ya','Ada','Pernah','8238743263324','Bank Rakyat Indonesia','BSD Tangerang','Ibrahim Ahmed','error_terminal.PNG','vs_code_error_seed2.PNG','windowslight1.jpg','WhatsApp_Image_2019-11-08_at_13.53.22.jpeg','clem-lonely.jpg','lengkap','2019-12-27 17:44:42','2019-12-27 17:44:42',26,7),(28,'Violet','NULL','0878099748123','don.sabda@gmail.com','2019-12-25','832948923743289',NULL,'Wiraswasta','ASN','Syariah Agent',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','',NULL,'draft','2019-12-29 13:43:15','2019-12-29 13:43:15',11,7);

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

INSERT INTO `branches` VALUES (1,'Balikpapan Syariah','1'),(2,'Bandung Syariah','2'),(3,'Banjarmasin Syariah','2'),(4,'Batam Syariah','1'),(5,'Bekasi Syariah','0'),(6,'Bogor Syariah','0'),(7,'BSD Syariah','2'),(8,'BukitTinggi Syariah','0'),(9,'Cawang Syariah','0'),(10,'Cirebon Syariah','0'),(11,'Depok Syariah','0'),(12,'Gorontalo Syariah','0'),(13,'Gresik Syariah','0'),(14,'Jakarta Selatan Syariah','0'),(15,'Jakarta Utara Syariah','0'),(16,'Jambi Syariah','0'),(17,'Karawang Syariah','0'),(18,'Kediri Syariah','0'),(19,'Kendari Syariah','0'),(20,'Kudus Syariah','0'),(21,'Lampung Syariah','0'),(22,'Makassar Syariah','0'),(23,'Malang Syariah','0'),(24,'Mataram Syariah','0'),(25,'Medan Syariah','0'),(26,'Meruya Syariah','0'),(27,'Mojokerto Syariah','0'),(28,'Padang Syariah','0'),(29,'Palangkaraya Syariah','0'),(30,'Palembang Syariah','0'),(31,'Pekanbaru Syariah','0'),(32,'Pontianak Syariah','0'),(33,'Purwokerto Syariah','0'),(34,'Samarinda Syariah','0'),(35,'Semarang Syariah','0'),(36,'Sidoarjo Syariah','0'),(37,'Solo Syariah','0'),(38,'Sorong Syariah','0'),(39,'Sukabumi Syariah','0'),(40,'Sunter Syariah','0'),(41,'Surabaya Syariah','0'),(42,'Tangerang Syariah','0'),(43,'Tasikmalaya Syariah','0'),(44,'Ternate Syariah','0'),(45,'Yogyakarta Syariah','0'),(46,'Head Office','0');

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
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1 COMMENT='Tabel Leads Activities';

#
# Data for table "leads_activities"
#

INSERT INTO `leads_activities` VALUES (80,'Data leads telah dibuat','2019-12-27 17:45:47',44,26),(81,'Perubahan pada data leads','2019-12-27 17:49:49',44,26),(83,'Data leads telah dibuat','2019-12-28 10:54:57',46,11),(84,'Data leads telah dibuat','2019-12-28 11:26:58',47,11),(85,'Perubahan pada data leads','2019-12-28 12:21:57',47,157),(86,'Perubahan pada data leads','2019-12-28 12:22:22',46,157),(87,'Perubahan pada data leads','2019-12-28 12:24:19',44,157),(88,'Data leads telah dibuat','2019-12-29 13:45:05',48,11),(89,'Perubahan pada data leads','2019-12-29 14:10:07',48,157),(90,'Perubahan pada data leads','2019-12-30 09:13:08',48,164),(91,'Perubahan pada data leads','2020-01-02 09:26:26',47,157),(92,'Perubahan pada data leads','2020-01-02 09:27:21',47,11),(93,'Data leads telah dibuat','2020-01-02 10:06:14',49,11),(94,'Perubahan pada data leads','2020-01-02 10:06:32',49,11),(95,'Perubahan pada data leads','2020-01-02 10:23:51',49,11),(96,'Perubahan pada data leads','2020-01-02 10:24:10',49,11),(97,'Perubahan pada data leads','2020-01-02 10:25:19',49,11),(98,'Perubahan pada data leads','2020-01-02 10:26:43',49,11),(99,'Perubahan pada data leads','2020-01-02 10:27:47',49,11),(100,'Perubahan pada data leads','2020-01-02 10:35:18',49,11),(101,'Data leads telah dibuat','2020-01-02 10:51:39',50,11),(102,'Perubahan pada data leads','2020-01-02 10:52:42',50,157),(103,'Perubahan pada data leads','2020-01-02 10:53:32',50,157);

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
  `status` enum('draft','lengkap') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_mapping` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_partner`),
  UNIQUE KEY `rekening_bank` (`rekening_bank`),
  KEY `id_mapping` (`id_mapping`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1 COMMENT='Tabel Partner';

#
# Data for table "partners"
#

INSERT INTO `partners` VALUES (48,'Ibrahim','Padalarang','Padalarang','Jawa Barat','123456','Futsal',NULL,50,'2016','Rokok','gudanggula.com','Milik Sendiri','Tunai','5000000',90,'Ya','Ya','Ada','Ya','Ya',NULL,'123600100476503','BSD Tangerang','Bank Rakyat Indonesia','Ibrahim Ahmed','2016','clem-lonely.jpg','tweet_budi_luhur3.PNG','vs_code_error_seed3.PNG','windowslight.jpg','WhatsApp_Image_2019-11-08_at_13.53.224.jpeg','lengkap','2019-12-27 14:17:43','2019-12-27 14:19:57',25),(49,NULL,'Legok','Legok','Banten','123456',NULL,NULL,90,'1998',NULL,NULL,'Milik Sendiri',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'draft','2019-12-27 16:38:03','2019-12-27 16:38:03',26),(50,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-12-27 17:16:58','2019-12-27 17:16:58',NULL),(51,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-12-27 17:17:13','2019-12-27 17:17:13',NULL),(52,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-12-27 17:17:25','2019-12-27 17:17:25',NULL),(53,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-12-27 17:24:14','2019-12-27 17:24:14',NULL),(54,'Ibrahim','Legok','Legok','Banten','123456','Sepak Bola',NULL,25,'2016','PS','instagram.com','Milik Sendiri','Tunai','5000000',90,'Ya','Ya','Ada','Ya','Ya',NULL,'999999999','BSD Tangerang','Bank Rakyat Indonesia','Ibrahim','2016','Rashford-Liverpool.jpg','clem-lonely1.jpg','windowslight1.jpg','error_terminal2.PNG','vs_code_error_seed23.PNG','lengkap','2019-12-27 17:28:12','2019-12-27 17:28:12',27);

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COMMENT='Tabel Partner Maintain';

#
# Data for table "maintain_partners"
#

INSERT INTO `maintain_partners` VALUES (15,'2019-12-27 14:21:41','tweet_budi_luhur.PNG','Lainnya','Siap mau kerjasama','2019-12-27 14:21:41','2019-12-27 14:21:41',48);

#
# Structure for table "users"
#

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL DEFAULT '',
  `nik` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(40) NOT NULL DEFAULT '',
  `level` int(2) NOT NULL DEFAULT 0 COMMENT '1 = CMS, 2 = Head, 3 = Manager, 4 = Admin HO, 5 = Superuser',
  `jabatan` varchar(255) DEFAULT NULL,
  `is_active` int(2) NOT NULL DEFAULT 0,
  `id_branch` int(3) NOT NULL DEFAULT 0,
  `tanggal_daftar` timestamp NULL DEFAULT current_timestamp(),
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `nik` (`nik`),
  KEY `id_branch` (`id_branch`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_branch`) REFERENCES `branches` (`id_branch`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=219 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC COMMENT='Tabel User';

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'Sunia Berlianti','200001','admin1@admin.com','e00cf25ad42683b3df678c61f42c6bda',4,'Administrator',1,46,'2019-08-16 16:36:16',''),(2,'Gede Laroiba','079551','admin2@admin.com','c84258e9c39059a89ab77d846ddab909',4,'Administrator',1,46,'2019-08-16 16:36:16',''),(11,'Okky Aditya','072104','okky.aditya@bfi.co.id','a611f0778ead16af247b74014a46a378',1,'CMS',1,7,'2019-08-16 16:36:16',NULL),(16,'Maulana Arief Kuncoro','078600','maulana.kuncoro@bfi.co.id','aff4b352312d5569903d88e0e68d3fbb',4,'Administrator',1,46,'2019-08-16 16:36:16',''),(17,'Administrator BFI Syariah','000000','administrator@bfisyariah.id','0baea2f0ae20150db78f58cddac442a9',5,'Administrator',1,46,'2019-08-16 16:36:16','7_September_3.png'),(23,'Ardy','079473','ardy.ardy@bfi.co.id','b32c3ea483b375b79e01ffc404316070',5,'Administrator',1,46,'2019-08-16 16:36:16',NULL),(26,'Ibrahim Ahmad Jabar Khaidiru Sobari','000005','ibrahim.ahmadd98@gmail.com','f1c083e61b32d3a9be76bc21266b0648',3,'Sharia Manager',1,7,'2019-08-16 16:36:16','7_September_Cover3.png'),(28,'reky sutedja','007559','reky.sutedja@bfi.co.id','1e83aa6cec826c41eed0c3eb286191ca',1,'CMS',1,45,'2019-08-16 16:36:16',NULL),(29,'Iva Ariani','005138','ivaariani@gmail.com','a9ebff29925ed4db9fa260ce6d6627f8',2,'Sharia Head',1,38,'2019-08-16 16:36:16',NULL),(30,'FAISAL','004196','faisalmahatama@gmail.com','e78d7dc7320e76eff092280cfc73578e',2,'Sharia Head',1,3,'2019-08-16 16:36:16',NULL),(31,'E.M.Ikhsanudin','079442','ikhsanemcy@gmail.com','17516ddbe5c4957cb2c6efaf4bdc63af',2,'Sharia Head',1,16,'2019-08-16 16:36:16',NULL),(32,'Fatrinanda lamusu','017862','nandalamusu@gmail.com','adb4bb84c63583d3b842413d7014d1cd',2,'Sharia Head',1,44,'2019-08-16 16:36:16',NULL),(33,'Ilham Hamiru','082012','ilhamiru50@gmail.com','fa7db5bf23ca854c7fec7f15f42924a8',1,'CMS',1,44,'2019-08-16 16:36:16',NULL),(34,'Muhammad faizal','901712','Muhammadfaizal04111993@gmail.com','60bf01e2a129456570d4009b5dc89a94',1,'CMS',1,38,'2019-08-16 16:36:16',NULL),(35,'SABILAL MUHTADIN','014555','sabilalmuhtadin1980@gmail.com','e78d7dc7320e76eff092280cfc73578e',1,'CMS',1,3,'2019-08-16 16:36:16',NULL),(36,'Ardianto S','081906','ardiadrian696@gmail.com','2b64dfc8d42293c14a14cf0a3f6bf17c',1,'CMS',1,38,'2019-08-16 16:36:16',NULL),(37,'Muhammad faizal','9017012','Muhammadpaisal19404111993@gmail.com','60bf01e2a129456570d4009b5dc89a94',1,'CMS',1,38,'2019-08-16 16:36:16',NULL),(38,'Janu Setiawan','015501','janu.setiawan@bfi.co.id','42b0dc0ae5333d6de8867073537be38d',3,'Sharia Manager',1,31,'2019-08-16 16:36:16',NULL),(39,'Abdul Gafur','009241','gofreinds41@gmail.com','0bee710122d521f74f48f7fdc33fed69',2,'Sharia Head',1,15,'2019-08-16 16:36:16',NULL),(40,'Umi Sultra','072632','umisultra@gmail.com','57ef86f9f28375de3d24c0393945c9c0',2,'Sharia Head',1,26,'2019-08-16 16:36:16',NULL),(41,'Agung Budi Cahyono','024157','agung.cahyono@bfi.co.id','041e1a6a28ab4012af6876a51dca317d',2,'Sharia Head',0,9,'2019-08-16 16:36:16',NULL),(42,'Mimi Aslamiyah','005074','mimi.aslamiyah@bfi.co.id','3be79637cae82734dc58df61146385bf',3,'Sharia Manager',1,26,'2019-08-16 16:36:16',NULL),(44,'Diansah','9015342','Diansah1105@gmail.com','c4c79a151c98cf21eefd19d4209f5ff2',1,'CMS',1,15,'2019-08-16 16:36:16',NULL),(45,'Eko yuli suprianto','9016923','suprianto.jktg2708@gmail.com','2f6b2d1d0642a6cf40e9c245ded02507',1,'CMS',0,15,'2019-08-16 16:36:16',NULL),(46,'Sutriyandi','011349','sutriyandi@bfi.co.id','2b44a3ce987f90804f680ef0319891c6',3,'Sharia Manager',1,40,'2019-08-16 16:36:16',NULL),(47,'AYU KEMALA SARI','9016709','ayu92kemala@gmail.com','d190075af52f6d43177918dff07a3d46',1,'CMS',1,11,'2019-08-16 16:36:16',NULL),(48,'HERFIANA','067337','herfiana.jauharah@gmail.com','42dd950dcb324b1b1c5232440bec2639',2,'Sharia Head',1,11,'2019-08-16 16:36:16',NULL),(49,'JAJANG JAMALUDIN','012993','jajang.jamaludin@bfi.co.id','f1c083e61b32d3a9be76bc21266b0648',3,'Sharia Manager',1,42,'2019-08-16 16:36:16',NULL),(50,'Arif Fadilah','078343','arifelfadillah@gmail.com','408d5367952163926c9c91a5bd4d7b99',2,'Sharia Head',1,6,'2019-08-16 16:36:16',NULL),(51,'Nurfadli','081743','Nurfadlif03@gmail.com','f1c083e61b32d3a9be76bc21266b0648',1,'CMS',1,42,'2019-08-16 16:36:16',NULL),(52,'Budi Iswanto','9016990','budii150594@gmail.com','e03be53d39d9a7de4f1272bb5f185191',1,'CMS',1,42,'2019-08-16 16:36:16',NULL),(53,'M Aditya Darmawan','9015113','aditd5150@gmail.com','408d5367952163926c9c91a5bd4d7b99',1,'CMS',1,6,'2019-08-16 16:38:14',NULL),(54,'Ali Takim Siregar','9017208','alitaqims03@gmail.com','fd339bd7a36a4b1264c2a661aaf229cd',1,'CMS',1,9,'2019-08-16 17:22:33',NULL),(55,'Agung Sukma Pratama','9017203','agungpratama4509@gmail.com','095f27b77a0e5b122e3a4b3464d6516c',1,'CMS',1,9,'2019-08-16 17:43:16',NULL),(56,'Dede rizky wahyudi','9016875','dederizkywahyudi4@gmail.com','82cf235e87c9ae6c6c54859de8f2765b',1,'CMS',1,42,'2019-08-18 14:50:06',NULL),(58,'Aprila sukoco','080981','radenmasaprilasukoco@gmail.com','33d29aaba3f43cba910fb2d32d63ee9e',1,'CMS',1,40,'2019-08-19 08:43:33',NULL),(59,'DONY PRIADHI','075573','donybfisyariah@gmail.com','ef8e4c3fbf2d454babfdf7927957b2cf',1,'CMS',1,17,'2019-08-19 10:52:11',NULL),(60,'Misbach Ahmad Bachruddin','081872','misbachbach@gmail.com','74e44a50816171ef94cdd0b6172f5779',1,'CMS',1,7,'2019-08-19 11:29:10',NULL),(61,'Muhamad Yaman Huri','081954','elhurimuhamadyaman@gmail.com','399351b8c12b6317572d283414949801',1,'CMS',1,7,'2019-08-19 11:30:06',NULL),(62,'Rizki Imanullah','079816','rizki.imanullah@gmail.com','367a2236f626fbd45add6bf26ea685cd',2,'Sharia Head',1,7,'2019-08-19 11:31:04',NULL),(63,'Akmal dhiya ulhaq','9015712','akmaldhiyaulhaq7@gmail.com','c5caf74edf9bc0e39adc6a0b461dd13f',1,'CMS',1,26,'2019-08-19 12:00:56',NULL),(64,'Daman Huri','9015120','damanhuri1678@gmail.com','408d5367952163926c9c91a5bd4d7b99',1,'CMS',1,6,'2019-08-19 12:08:54',NULL),(65,'Fadhil Alwan Dharma Adji','9016391','Fadhilalwan28@gmail.com','a243acb51619490ec691df8db66133ec',1,'CMS',1,11,'2019-08-19 14:21:40',NULL),(66,'Yudhi Ari Setyawan','006945','kemplanx@gmail.com','825960e7bb896c694502b591b67718d5',2,'Sharia Head',1,20,'2019-08-19 17:14:53','WhatsApp_Image_2019-08-12_at_10_16_41.jpeg'),(67,'Benny Himawan Elhamsyah','9016505','bennyhimawanelhamsyah@gmail.com','6bd55c4a2a0f96bead825fcb034f1b04',1,'CMS',1,20,'2019-08-19 17:17:52',NULL),(68,'Rendy Soenarya','9015716','rendyizanami@gmail.com','1f378326286adb866282546ca226a2a8',1,'CMS',1,43,'2019-08-19 17:27:42',NULL),(70,'DEWI AYU MUSTIKA','077238','dewi.mustika@bfi.co.id','46af0592f9e3e535cef31e64163b4b3d',2,'Sharia Head',1,24,'2019-08-19 17:39:10',NULL),(71,'Mohamad Ali Fikri','9017325','mohamadalifikri651@gmail.com','1bab567ee4df8c4c1f7475aa92f46eeb',1,'CMS',1,27,'2019-08-19 17:43:20',NULL),(72,'Haryo Seno','079777','haryo.seno@bfi.co.id','e3a06b6ac599ae044b6faaaff14f63ca',2,'Sharia Head',1,27,'2019-08-19 17:43:29',NULL),(73,'Khusnul khotimah','9014955','khusnulkhotimahhhh0805@gmail.com','fbcfcc212f767e5f22a0e50cc40379f3',1,'CMS',1,27,'2019-08-19 17:44:12',NULL),(74,'PANCA INDRYA MUKTI','082285','pancandrya5@gmail.com','25d55ad283aa400af464c76d713c07ad',1,'CMS',1,37,'2019-08-19 17:55:26',NULL),(75,'Febriyan Sutrisno','081427','febriyansutrisno66@gmail.com','74f8aa76a2a240ebd9c29979cc8fbf40',1,'CMS',1,24,'2019-08-19 17:56:50',NULL),(76,'CINCA NOUVALITA','081366','cincanouvalita@gmail.com','b09d640ef3486164259ea3df846808ed',1,'CMS',1,37,'2019-08-19 17:57:04',NULL),(77,'CHABIBUL MIFTA','078288','chabibul.mifta@bfi.co.id','25d55ad283aa400af464c76d713c07ad',2,'Sharia Head',1,37,'2019-08-19 17:58:12',NULL),(78,'tantan wijaya','008126','tantanwijaya012@gmail.com','d9600f16d10d53eae48c45c8a7ba6c47',1,'CMS',1,43,'2019-08-19 18:20:05',NULL),(79,'robby saputra','009827','robby.saputra@bfi.co.id','1495c294a03c64263841f89247c874ef',2,'Sharia Head',1,14,'2019-08-20 09:42:52',NULL),(80,'RENO AGUNG WIBOWO','9017457','vje6699@gmail.com','eac4a7008a86309f3ad40c065f692b65',1,'CMS',1,14,'2019-08-20 10:09:25',NULL),(82,'Adi Nurohman','081291','adiiinurohman12@gmail.com','60afc1cb53bab453b5e2397ef24c3f74',1,'CMS',1,40,'2019-08-20 10:19:19',NULL),(83,'Dicky Kurniawan','074675','dicky.kurniawan@bfi.co.id','becbea646fb394ca9fa18ca7cb2bb5b1',2,'Sharia Head',1,29,'2019-08-20 14:30:49',NULL),(84,'Dhany Prakarsa','018985','dhany.prakarsa@bfi.co.id','89cb46fbfbcc01d0d7e45c2cade9042d',2,'Sharia Head',1,36,'2019-08-20 15:32:08',NULL),(85,'Asri puspitasari','9016131','dhany2912@gmail.com','09e28702d0ce59d2d105c2df79d5a19e',1,'CMS',1,36,'2019-08-20 16:04:35',NULL),(86,'ARIYANTO LAPU','007748','ariyanto.lapu@bfi.co.id','3e8034a85c7ef242f32e1fed09a927c4',2,'Sharia Head',1,12,'2019-08-20 16:05:44',NULL),(87,'ABD MOKIT','051878','mokitabdul22@gmail.com','c76093e34fc206f9f526bbd8fdd69948',2,'Sharia Head',1,18,'2019-08-20 16:06:10',NULL),(88,'agus supriyanto','082400','agussupriyanto012@gmail.com','03bd2774aa324205c054700d91affb73',1,'CMS',1,12,'2019-08-20 16:09:07',NULL),(89,'Achmad Fauzi','9016727','oziebequiet@yahoo.co.id','4a7c0071fc9a2279d778b729fc5c77e1',1,'CMS',1,34,'2019-08-20 16:21:49',NULL),(90,'DEDY IRMAWAN','018114','dedy.irmawan1988@gmail.com','e9e01d0b69809c07b4fc19c50aeb49cc',2,'Sharia Head',1,34,'2019-08-20 16:27:12',NULL),(91,'Rakhmad Hidayat','018679','rakhmad.hidayat@bfi.co.id','5f4dcc3b5aa765d61d8327deb882cf99',2,'Sharia Head',1,45,'2019-08-20 17:41:04',NULL),(92,'Armila Ernisa Zulfa','080229','zulfaernissa@gmail.com','b6871e6a0bad9366942c192e95284bf2',1,'CMS',1,18,'2019-08-20 22:20:15',NULL),(93,'Vendra Irawan','9016188','vendrairhawan@ymail.com','5f4dcc3b5aa765d61d8327deb882cf99',1,'CMS',1,45,'2019-08-21 08:31:28',NULL),(94,'DEVI APRIYANI','9016613','deviapriani.da81@gmail.com','5f4dcc3b5aa765d61d8327deb882cf99',1,'CMS',1,45,'2019-08-21 08:36:06',NULL),(95,'Roni Yuliantino','9016864','roniyuliantino82@gmail.com','0de549929a2a16cdcef697f8d76eb1c9',1,'CMS',1,31,'2019-08-21 09:56:35',NULL),(96,'UMAR SALEH DAULAY','008752','umarsaleh402@gmail.com','da4fa6da7915c5b3755f3e3e15dc79f2',1,'CMS',1,31,'2019-08-21 10:00:53',NULL),(97,'RAHMAT RIO BAHARI','080917','rahmatrio981@yahoo.com','97a8a4877ba4bf081b28c93f3fce5d1e',1,'CMS',1,31,'2019-08-21 10:03:39',NULL),(98,'ANDY PUTRA','080916','andyputra180@rocketmail.com','8e9d6e62d25d26597e8514d0835132a4',1,'CMS',1,31,'2019-08-21 10:09:26',NULL),(99,'Faiz Amin Jaya','080569','faizaminjaya@gmail.com','397137c5aa9d13aa76b715663e192420',1,'CMS',1,18,'2019-08-21 10:14:16',NULL),(100,'MEIDA RUSIANA TUNJANG','9016402','meidarusianatunjang@gmail.com','57a23281db49393891174a9d5965772b',1,'CMS',1,29,'2019-08-21 10:48:06',NULL),(101,'YASINTA FITRIANI','9017403','sintafitrie@gmail.com','cdd64ea2bfef5992900423a2e826889f',1,'CMS',1,29,'2019-08-21 11:26:49',NULL),(102,'Kemal Yusrin','020589','kemal.alturk@bfi.co.id','e10adc3949ba59abbe56e057f20f883e',2,'Sharia Head',1,43,'2019-08-21 16:48:49',NULL),(103,'Fachreza Dhian Pratama','071887','syariah.kendari@gmail.com','f75e07c890f858ad6439dd582cb3c477',2,'Sharia Head',1,19,'2019-08-22 16:54:23',NULL),(104,'Adi Renaldi','069606','adi.renaldi@bfi.co.id','e03f78f289f987613b07f3cddb73f9a8',2,'Sharia Head',1,39,'2019-08-22 19:00:12',NULL),(105,'Isthafa Harits Utami','081939','isthafa.27@gmail.com','6e777fe11a540268a6a39a42fc432767',1,'CMS',1,39,'2019-08-23 05:29:29',NULL),(106,'Moch. Qurthuby','9014890','moch.qurthuby07@gmail.com','6e777fe11a540268a6a39a42fc432767',1,'CMS',1,39,'2019-08-23 08:43:19',NULL),(107,'Dingga Diramaesha','016721','dingga.diramaesha@bfi.co.id','b895a9ddd8f6db70af8b5cc4cd759005',2,'Sharia Head',1,8,'2019-08-23 09:30:57',NULL),(108,'MONA AGISTA','004913','mona.agista@bfi.co.id','2616c763893e5d2618389f8c98d8bf25',2,'Sharia Head',1,28,'2019-08-23 09:31:40',NULL),(109,'ARIS FAHRIANTO','079707','arisfahrianto@gmail.com','b28b5879e1f417982b9ab6ecf9a33062',2,'Sharia Head',1,33,'2019-08-23 14:34:26',NULL),(110,'SITI BAROKAH','9015287','sitibarokah753@gmail.com','4cd4d2e51b5ab80a3824af07d5039f1a',1,'CMS',1,33,'2019-08-23 14:36:26',NULL),(111,'EGI DELLIANA','9015270','egidelliana@gmail.com','c521626b832787f57f9861c373350c3f',1,'CMS',1,33,'2019-08-23 14:37:54',NULL),(112,'Dwi Nurcahyanti','082007','dwinurcahyanti14@gmail.com','259af61090c1feab3fd8988b8682f71c',1,'CMS',1,35,'2019-08-23 14:41:29',NULL),(113,'Afriyana nurman satria','020615','afriyana.satria@bfi.co.id','39a21f3f58287334901197c82e6a8daa',2,'Sharia Head',1,10,'2019-08-23 15:39:43',NULL),(114,'Hesky hermoyo','081753','heskyh08@gmail.com','ac115d8a7a34491903235368059510e5',1,'CMS',1,10,'2019-08-23 16:04:54',NULL),(115,'MONICA APRILIA PUTRI','072710','monica.putri@bfi.co.id','f65d3d938f139227d9f22ad3d3a473df',2,'Sharia Head',1,35,'2019-08-24 08:21:43',NULL),(116,'PITA PURNAMASARI','9017505','pitapurnamasari1081@gmail.com','cb6144769b46f65f76a2000420430645',1,'CMS',1,19,'2019-08-24 09:33:53','Picture_kendari.jpg'),(117,'Hermawan Dwi putra','015254','hermawan.putra@bfi.co.id','3e1b7b7899f0317e89e0d902ba733465',2,'Sharia Head',1,32,'2019-08-24 10:55:44',NULL),(118,'Ari Iswanto','9015730','ariiswanto161@gmail.com','3c3b752cad1aa2f3eb938e4f3e3fbc98',1,'CMS',1,4,'2019-08-26 10:17:05',NULL),(119,'Siti Nurwulan','041539','siti.nurwulan@bfi.co.id','afc45f6eb147ac43c72a205391bb00d3',2,'Sharia Head',1,13,'2019-08-26 11:20:38',NULL),(120,'Lolita Media Sari','007426','lolitamediasari@gmail.com','bc49a09bfc4eb7b214bf0b476aec4235',3,'Sharia Manager',1,41,'2019-08-26 11:22:09',NULL),(121,'Teddy Mathado','007884','teddy.mathado@bfi.co.id','8bfe0f9a64f31db37688c32de4bdba35',3,'Sharia Manager',1,17,'2019-08-26 11:24:10',NULL),(122,'Muhammad Hilal','005622','muh.hilal@bfi.co.id','34e71227de6b5784a3e7107ca96fa424',3,'Sharia Manager',1,30,'2019-08-26 11:27:02',NULL),(123,'Mira Anggraeni','006075','mira.anggraeni@bfi.co.id','abd01045b9aa195f0810a48d4b6434da',3,'Sharia Manager',1,5,'2019-08-26 11:31:36',NULL),(124,'Dedy Armana Putra','077214','dedyarmanaputra@gmail.com','acbeaaf2287f02b04840a55713bc9be4',2,'Sharia Head',1,1,'2019-08-26 11:31:50',NULL),(125,'Nisa Nurathiqoh','9015248','nisaqoh23@gmail.com','efb82a23723d2945415cd8a49abab3b8',1,'CMS',1,17,'2019-08-26 11:37:03',NULL),(126,'Merryana Ayu Wardhany','080204','meryanaayu6@gmail.com','b72915aab2c666c3817b6c9469360f0a',1,'CMS',1,17,'2019-08-26 11:38:34',NULL),(127,'Dewi Rahayu Puspitasari','081065','dhewierahayu@gmail.com','ce91627f04446919fb6e5884bfd387fd',1,'CMS',1,13,'2019-08-26 11:50:08',NULL),(128,'Rahmat hidayat','9017146','rahmat.140688@gmail.com','7ae2003df331ec233eeb71ee42e398d1',1,'CMS',1,22,'2019-08-26 11:57:20',NULL),(129,'Bagus Dwi Setyanto','9017492','bagusetyanto.bds@gmail.com','40b4fa6704f1b03731a303a7e88aac4a',1,'CMS',1,41,'2019-08-26 11:57:48',NULL),(130,'Idfan Reyzal Hamalgani','9017490','idfanreyzal@yahoo.com','9daef7a9db5fa571bc42574060529b27',1,'CMS',1,41,'2019-08-26 11:58:02',NULL),(131,'Dimas Haryan','9016971','dimasharyan1@gmail.com','8e599e43902be772330af5512871638e',1,'CMS',1,4,'2019-08-26 12:05:30',NULL),(132,'M. WEIMPY FAHMI','015638','weimpyfahmi@gmail.com','8b445acde7860c0b45f1524b61761e62',2,'Sharia Head',1,23,'2019-08-26 12:13:01','FB_IMG_15475664077267756.jpg'),(133,'Hasyirul umam','9017287','hasyirulumam0794@gmail.com','e10adc3949ba59abbe56e057f20f883e',1,'CMS',1,32,'2019-08-26 12:13:37',NULL),(134,'MOCH SALAFUDIN','081066','mohsalafudin92@gmail.com','64accb9cfd06204ec636d63a11e0f64c',1,'CMS',1,13,'2019-08-26 12:16:18',NULL),(135,'M. Sahirsyah','081195','sahirsyahm@gmail.com','34e71227de6b5784a3e7107ca96fa424',1,'CMS',1,30,'2019-08-26 13:03:41',NULL),(136,'Barli Adwensyah','076859','barliadwensyah@gmail.com','34e71227de6b5784a3e7107ca96fa424',1,'CMS',1,30,'2019-08-26 13:05:07',NULL),(137,'Wijaya Lefi yandie','081199','wijaya.lefiyandie@yahoo.com','34e71227de6b5784a3e7107ca96fa424',1,'CMS',1,30,'2019-08-26 13:07:04',NULL),(138,'Dina Cassa Maharani','081357','dinaamaharani@gmail.com','840c9622dec86f7fd6361fab685b5ab7',1,'CMS',1,41,'2019-08-26 13:45:50',NULL),(139,'Ana Zuliatin Nadhiroh','081355','ananadhiroh23@gmail.com','4a2e9fba599cfa1198f7e59362a2d8ca',1,'CMS',1,41,'2019-08-26 13:47:53',NULL),(140,'M Fathirul Abrar','011454','fathirul.abrar@gmail.com','caa92674de6e72fa257e7959a62ebafc',2,'Sharia Head',1,25,'2019-08-26 13:52:09',NULL),(141,'Muhammad Irsal','079925','muhammadirsal16@gmail.com','7a36a05edf7e3fe651a5807871528a0e',1,'CMS',1,25,'2019-08-26 13:57:14',NULL),(142,'Nurhasanah Ginting','9015107','nurhasanahginting11@gmail.com','7a36a05edf7e3fe651a5807871528a0e',1,'CMS',1,25,'2019-08-26 13:58:21',NULL),(143,'Rahmat Irfan','9016432','rahmatirfan01@gmail.com','7a36a05edf7e3fe651a5807871528a0e',1,'CMS',1,25,'2019-08-26 14:01:47',NULL),(144,'Mei Wulan Janati','9017217','meuwulanjanati768@gmail.com','34e71227de6b5784a3e7107ca96fa424',1,'CMS',1,30,'2019-08-26 15:01:47',NULL),(145,'rio pramana','025396','rio.pramana@bfi.co.id','6a82abe7a559e44d1997a7e8669d70a6',3,'Sharia Manager',1,22,'2019-08-26 15:20:49',NULL),(146,'RIYAN MARDIYANTO','9014985','riyanmardiyanto27@gmail.com','f4dbca808e102c305cb92f192d16ef4d',1,'CMS',1,23,'2019-08-26 16:05:14',NULL),(147,'Fariz Pramana Yudha','080956','yudhapramanaziraf@gmail.com','3f3230d2fdb3a77c02e9059c1e962d5b',1,'CMS',1,17,'2019-08-26 16:06:41',NULL),(148,'Syafrio Andestha','076072','andestha12@gmail.com','c40c7acaf24539c1a2343e389b4f1145',1,'CMS',1,28,'2019-08-26 16:18:29',NULL),(149,'Bima Saputra','9015412','bimasaputra1993@gmail.com','6891380675033019026c3fc4928caf1b',1,'CMS',1,28,'2019-08-26 16:20:41',NULL),(150,'Ayu riza santi','9015381','ayurizasanti6@gmail.com','29d75126bd0bc9244edf6847a47dcb32',1,'CMS',1,23,'2019-08-26 16:29:51',NULL),(151,'Ratih Mutia','9014863','ratihmutia1989@gmail.com','8a9d325a52baeef2199fe864ac5ee175',1,'CMS',1,32,'2019-08-26 16:52:06',NULL),(152,'Kiki fatmawati','9014512','Kikifatmawati419@gmail.com','cda2c99fbf5e19f20d331299c15a4491',1,'CMS',1,10,'2019-08-27 08:30:00',NULL),(153,'franky santana','022127','franky.santana@bfi.co.id','a065ac9b6970ef59a25dd7fe4c2a72f0',2,'Sharia Head',0,4,'2019-08-27 13:35:50',NULL),(154,'Tatang Sodar','002065','tatang.sodar@bfi.co.id','26db626c551022460a0318405b25acfa',3,'Sharia Manager',1,2,'2019-08-27 17:35:40',NULL),(155,'Hari Mulyono','078960','harimuly1119@gmail.com','fbaab00a1eab8b068610697b29543d4d',1,'CMS',1,2,'2019-08-27 17:38:06',NULL),(156,'Dicky Mulia Derma Prawira','9016799','dickyxelica2@gmail.com','a6235a5a749f6ac637c97ecc9da43d12',1,'CMS',1,2,'2019-08-27 17:39:54',NULL),(157,'Wawan Indriana','082045','Indrianaw2n@gmail.com','f1c083e61b32d3a9be76bc21266b0648',2,'Sharia Head',1,2,'2019-08-28 09:23:18','windowslight.jpg'),(158,'Firhand Ti Zaid Alfi','080015','firhandtizaidalfi@gmail.com','2942b56d633b75105dd6afb4a4a1e842',1,'CMS',1,5,'2019-08-28 10:52:30',NULL),(159,'Muhamad Reza','079566','muhamad1988reza@gmail.com','ba00ec4cf7968be0414659e83aeb7b72',1,'CMS',1,2,'2019-08-28 11:35:48',NULL),(160,'Ervina Eka Febriamy','9015313','febriamyvienna@gmail.com','e141a3dfd7d88104f9b36029adf67da8',2,'Sharia Head',1,5,'2019-08-28 16:07:57',NULL),(161,'ABDUL KAISY BIAD','9017494','kaisybiad29@gmail.com','e10adc3949ba59abbe56e057f20f883e',1,'CMS',1,26,'2019-08-30 09:05:02',NULL),(162,'YUSDIANTO ABDUL','9017523','yusdiianto@gmail.com','2f971fee3eca06981e3048b14bed1153',1,'CMS',1,12,'2019-08-30 14:46:20',NULL),(163,'Mitha Andriani','9015777','mithaandriani09@gmail.com','bd34a037294499e0b221ca2e233731a6',1,'CMS',1,5,'2019-08-30 17:00:36',NULL),(164,'Ibrahim Ahmad','200798','ibrahim.ahmad58@gmail.com','f1c083e61b32d3a9be76bc21266b0648',2,'Sharia Head',1,7,'2019-08-30 21:54:55','7_September_2.png'),(165,'Asfar M Nur','079968','asfarmnur@gmail.com','88e051fa4a54977f5c0314acd54f68f2',1,'CMS',1,22,'2019-09-02 10:13:58',NULL),(166,'Adhine Basilia','007105','adhine.basilia@bfi.co.id','63861e93edc0fa85ae5629cb2d85b91f',4,'Administrator',1,46,'2019-09-02 16:22:27',NULL),(167,'Sartika Nur','9016567','sartikanur150696@gmail.com','9bf89fcf8e9b04485447a07070c55bfd',1,'CMS',1,22,'2019-09-03 07:59:02',NULL),(168,'Azan Syahida','020251','azan.syahida@bfi.co.id','1b4cbd2b7defad1cd60d5e544125f8b7',5,'Administrator',1,46,'2019-09-03 08:25:44',NULL),(169,'Oky Noviyaldi','073255','oky.di91@gmail.com','b895a9ddd8f6db70af8b5cc4cd759005',1,'CMS',1,8,'2019-09-03 08:58:20',NULL),(170,'Yogie Saputra','9014943','sptrayogie15@gmail.com','b895a9ddd8f6db70af8b5cc4cd759005',1,'CMS',1,8,'2019-09-03 08:59:18',NULL),(171,'Rama andika','005418','rama.andika@bfi.co.id','ca9d3b236d051267fb2abf03814c311d',3,'Sharia Manager',1,39,'2019-09-03 10:37:14',NULL),(172,'Pevi Defitri','004299','pevi.defitri@bfi.co.id','1256dfebb311c8efcb1cea8888edb228',5,'Administrator',1,46,'2019-09-03 14:38:32',NULL),(173,'Rini Nurhayati','006145','rini.nurhayati@bfi.co.id','f9a0fd5e898d77e82360dcabff946604',3,'Sharia Manager',1,5,'2019-09-03 16:11:19',NULL),(174,'Nisa Maharani','9017834','nisamaharani0102@gmail.com','d97a5461c2a9c54d5ae0ecc3a8dc83d1',1,'CMS',1,1,'2019-09-05 14:13:58',NULL),(175,'AMIN BUDIMAN','9017795','aminbudiman713@gmail.com','dca6c88d3a72f0219265f746dc1dc698',1,'CMS',1,19,'2019-09-05 15:44:23','Picture_kendari1.jpg'),(176,'Rudy Prastiyo','081722','rudyprastiyo66@gmail.com','bb02a63a9236fdc85898adf7e72642c7',1,'CMS',1,16,'2019-09-06 14:55:57',NULL),(177,'RD Kurniawan','9017236','kurniawanraden33@gmail.com','58452144b4d2eeb31ab5db40d7f90575',1,'CMS',1,16,'2019-09-06 17:49:25',NULL),(178,'EVA MARIANA','004689','EVA.MARIANA@BFI.CO.ID','b5f33e72b4ddda4f24e41a2c6208d792',1,'CMS',1,16,'2019-09-09 18:17:36',NULL),(179,'kiki fatmawati','081751','sarinahkiki@gmail.com','fc97001351a5194d0d8f4707b5340c61',1,'CMS',1,10,'2019-09-10 08:12:28',NULL),(180,'Syaiin Erdiyanto','012973','syaiin.erdianto@bfi.co.id','7eaea3c3e29af4cf6b8c571892df5501',2,'Sharia Head',1,21,'2019-09-10 08:35:15','rumah.jpg'),(181,'Teri Angraeni','073187','teri.angraeni@local.bfi.co.id','e10adc3949ba59abbe56e057f20f883e',4,'Administrator',1,46,'2019-09-12 08:35:32','bfi_syariah_logo.jpg'),(182,'Fitria ningsih','008342','naylakanti14@gmail.com','df73fe8a47f7100928e9e22cec9976a7',1,'CMS',1,24,'2019-09-18 10:18:21',NULL),(183,'azwida faqih','9017967','azwida.bfi@gmail.com','89cb40dc754dd95ac1d66777c2e2867f',1,'CMS',1,14,'2019-09-25 09:39:06',NULL),(184,'Eko Supriatman','073106','eko.supriatman@bfi.co.id','bb38bc4b2b35a5a194c29c805e56366c',5,'Administrator',1,46,'2019-09-25 14:03:40',NULL),(185,'Raraisa','073158','anggarams@ymail.com','e10adc3949ba59abbe56e057f20f883e',3,'Sharia Manager',1,7,'2019-09-26 10:14:37',NULL),(186,'UPI','9016870','upi025yvl@gmail.com','e78d7dc7320e76eff092280cfc73578e',1,'CMS',1,3,'2019-09-27 14:02:33',NULL),(187,'BIMA ANZALTA','9018205','bimaanzalta09@gmail.com','943017475cd145b0de0a48ef678285e0',1,'CMS',1,28,'2019-10-01 14:04:11',NULL),(188,'Ahmad Baihaqi Albanna','9018213','ahmadbaihaqialbanna@gmail.com','5b6fed7bc9a055a4539fcceb840a24b4',1,'CMS',1,5,'2019-10-01 15:57:18',NULL),(189,'panji darmawan manurung','9018052','darmawanpanji19@gmail.com','b5be6eb356d22af981c5e0b390c4f045',1,'CMS',1,25,'2019-10-03 08:53:49',NULL),(190,'NURUL KHASANAH','9018336','nkhasanah039@gmail.com','19a00936f1e2d7b608ac24a9ab4920f0',1,'CMS',1,40,'2019-10-03 09:08:30',NULL),(191,'Eko yuli suprianto','0016923','hs2801006@gmail.com','d6c582cd4e8abde4f2a5c50f110d2603',1,'CMS',1,15,'2019-10-03 10:02:56',NULL),(192,'Ahmad Hanan Patra','9018365','hananpatra@gmail.com','357815222d0ee40d3dffb2de577d545a',1,'CMS',1,1,'2019-10-04 09:08:01',NULL),(193,'zulkarnain malawat','9018539','zulalfatihdhafir@gmail.com','364d6c964fdb55b5125faf136bd1e537',1,'CMS',1,38,'2019-10-11 07:25:10',NULL),(194,'FAISAL','9018517','faisalisal239511@gmail.com','da5e3d27cc8b87d5c7b7c7fa454531ae',1,'CMS',1,26,'2019-10-11 08:13:18',NULL),(195,'MARYANI','9018405','yaniems23@yahoo.com','8a9d325a52baeef2199fe864ac5ee175',1,'CMS',1,32,'2019-10-11 08:55:30',NULL),(196,'Muhammad Firdaus','9016123','11mfirdaus@gmail.com','e10adc3949ba59abbe56e057f20f883e',1,'CMS',1,21,'2019-10-12 09:21:43',NULL),(197,'Alan Adriansyah','9017238','alanadriansyah18@gmail.com','d97a5461c2a9c54d5ae0ecc3a8dc83d1',1,'CMS',1,21,'2019-10-12 09:23:56',NULL),(198,'ELSA DWI JAYANTI PURWONO','9018590','elsadjp@gmail.com','79c962df73d18fd2b5fa4b3840fd482a',1,'CMS',1,33,'2019-10-14 09:22:23',NULL),(199,'Dhea Alfrinda Putri','9018592','alfrindadhea@gmail.com','7058f95214fefcbb80c6ccccbae58ac5',1,'CMS',1,11,'2019-10-18 16:15:52',NULL),(200,'muhammad andi falakhudin','9018742','andi.falak22@gmail.com','ee31d1e8a4674f4fe0c738936ba1aa58',1,'CMS',1,10,'2019-10-28 08:41:43',NULL),(201,'Nurfadhillah','9018486','nurfadhihasrul@gmail.com','ea5c0ab53cd7990415cbaa76b81788d3',1,'CMS',1,22,'2019-10-28 15:17:38',NULL),(202,'TRISDIYOWAN AHMAD','9018659','ahmadtrisdiyowan@gmail.com','9728a4c86cfea37bba7085d655c2d4dc',1,'CMS',1,12,'2019-11-04 16:05:42',NULL),(203,'Moch. taufik aziz','9018557','taufikaziz77@gmail.com','e47e7202db3f602c7872c5e83a8d21a0',1,'CMS',1,17,'2019-11-05 17:05:18',NULL),(204,'Rudiyono','9018958','rudiyobo1612@gmail.com','285068b06b888af8653cd79e5d0e5c7b',1,'CMS',1,17,'2019-11-05 17:07:31',NULL),(205,'Jur Fikram Abbas','9018735','fikramabbas.abd.rahman@gmail.com','36e3aead05dd4022de313648e732ab92',1,'CMS',1,44,'2019-11-07 08:52:41',NULL),(206,'Supardi Hi Ali','073871','supardihiali@gmail.com','65e2db44597e536896f247ac810fe7e9',2,'Sharia Head',1,44,'2019-11-07 09:10:45','photo_2019-11-11_13-13-09.jpg'),(207,'DIANSAH','082376','Diansahsuntersyariah@gmail.com','0beb4892395211e0429d73b034db620d',1,'CMS',1,40,'2019-11-11 08:46:28','20663612_1783115311716118_7695621949797878825_n.jpg'),(208,'AKHMAD JAKI','9018964','akhmadjaki@yahoo.com','e10adc3949ba59abbe56e057f20f883e',1,'CMS',1,29,'2019-11-11 10:06:57',NULL),(209,'Luthfi Hafizh Farziansyah','9019081','luthfisyah04@gmail.com','b8ec2448a374ff4f41b3b984f5869aee',1,'CMS',1,5,'2019-11-13 12:37:05',NULL),(210,'RAHARDIAN AULYA SETYAJI','9018764','rahardiansetyaji@gmail.com','e10adc3949ba59abbe56e057f20f883e',1,'CMS',1,36,'2019-11-13 13:32:38',NULL),(211,'PUTRI ADELINA','9019026','putriadelina1122@gmail.com','7a36a05edf7e3fe651a5807871528a0e',1,'CMS',1,25,'2019-11-19 16:54:43',NULL),(212,'MUH NUR YAYAT PAGALA','9019270','nuryayatpagalas.ak@gmail.com','e94f800db95ef27899748cbe0fe6c3ac',1,NULL,0,19,'2019-11-22 12:29:38',NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1 COMMENT='Tabel Partner Activities';

#
# Data for table "partner_activities"
#

INSERT INTO `partner_activities` VALUES (74,'Data Partner telah dibuat','2019-12-27 14:17:43',48,11),(75,'Perubahan pada data Partner','2019-12-27 14:19:57',48,11),(76,'Partner telah dimaintain','2019-12-27 14:21:41',48,11),(77,'Data Partner telah dibuat','2019-12-27 16:38:03',49,11),(78,'Data Partner telah dibuat','2019-12-27 17:28:12',54,26);

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1 COMMENT='Tabel Partner Mapping';

#
# Data for table "mapping_partners"
#

INSERT INTO `mapping_partners` VALUES (25,'Gudang Gula','Rokok','Perorangan','Cipularang','087809974805','don.sabda@gmail.com','My Ihram','GUdang gula bukan gudang garam','vs_code_error_seed22.PNG','2019-12-27 14:16:19','2019-12-27 14:16:19',7,11),(26,'PT Maju Mundir','Garmen','Perorangan','Legok Indah','0896188199123','admin@perpus.test','My Ihram','admins','partner-detial1.PNG','2019-12-27 14:17:00','2019-12-27 14:17:00',7,11),(27,'ibrahim','makanan','PD','pagedangan','087883983642','ibrahim@perpus.test','My Ihram','asdsad',NULL,'2019-12-27 17:15:40','2019-12-27 17:15:40',7,26);

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
  `id_partner` int(11) DEFAULT NULL,
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
  KEY `id_partner` (`id_partner`),
  KEY `id_agent` (`id_agent`),
  CONSTRAINT `mapping_leads_ibfk_1` FOREIGN KEY (`id_branch`) REFERENCES `branches` (`id_branch`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `mapping_leads_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `mapping_leads_ibfk_3` FOREIGN KEY (`id_partner`) REFERENCES `partners` (`id_partner`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `mapping_leads_ibfk_4` FOREIGN KEY (`id_agent`) REFERENCES `agents` (`id_agent`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 COMMENT='Tabel Leads Database';

#
# Data for table "mapping_leads"
#

INSERT INTO `mapping_leads` VALUES (30,'Ariija Illona Rusydahu','089827812771212','Agent BA','My Safar','Pendidikan',NULL,NULL,NULL,'2019-12-27 17:45:15','2019-12-28 12:24:19',7,26,NULL,27,NULL,NULL,NULL,NULL,NULL,NULL),(31,'Maulana Arif Kuncoro','089618819904','EGC','My Faedah','Produk Detail',NULL,NULL,NULL,'2019-12-28 10:50:07','2019-12-28 12:22:22',7,11,NULL,NULL,'200798','CMS','Bandung Syariah',NULL,NULL,NULL),(32,'Ibrahim Ahmad Jabar','087809974805','CGC','My Ihram','Produk Detail',NULL,'PT Maju Mundir',NULL,'2019-12-28 11:07:23','2020-01-02 09:27:21',7,11,49,NULL,NULL,NULL,NULL,'91028309','Ibra Ahmad jabar',NULL),(33,'Adhine','089618819324','Agent BA','My Ihram','Pengembangan',NULL,'Violet',NULL,'2019-12-29 13:44:00','2019-12-30 09:13:08',7,11,NULL,28,NULL,NULL,NULL,NULL,NULL,NULL),(34,'Okky Aditya Wibowo','089827812775','Penyedia Jasa','My CarS','My Safar',NULL,'Gudang Gula','Violet','2020-01-02 09:42:56','2020-01-02 10:35:18',7,11,48,28,NULL,NULL,NULL,NULL,NULL,NULL),(35,'Eko Supriatman','08982781223','Walk In','My CarS','Mobil ku',NULL,'Gudang Gula',NULL,'2020-01-02 10:43:14','2020-01-02 10:53:32',7,11,48,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(36,'Ardi','089827812771210','EGC','My Hajat','Hajatan',NULL,'PT Maju Mundir',NULL,'2020-01-02 10:44:51','2020-01-02 10:46:31',7,11,49,NULL,'071204','CMS','Ardis',NULL,NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1 COMMENT='Tabel Leads Follow Up';

#
# Data for table "leads_follow_up"
#

INSERT INTO `leads_follow_up` VALUES (29,'Kunjungan','2020-01-02 09:26:26',NULL,32,157),(30,'Kunjungan','2020-01-02 09:27:21',NULL,32,11),(31,'Kunjungan','2020-01-02 10:11:56',NULL,34,11),(32,'Kunjungan','2020-01-02 10:17:03',NULL,34,11),(33,'Kunjungan','2020-01-02 10:23:51',NULL,34,11),(34,'Email','2020-01-02 10:27:46',NULL,34,11),(35,'Email','2020-01-02 10:35:18',NULL,34,11),(36,'Kunjungan','2020-01-02 10:45:11','Visiting',36,11),(37,'Kunjungan','2020-01-02 10:46:07','Visiting consumen',36,11),(38,'Visit Konsumen','2020-01-02 10:46:18','Visiting consumen',36,11),(39,'Kunjungan','2020-01-02 10:51:39',NULL,35,11),(40,'Kunjungan','2020-01-02 10:52:42',NULL,35,157),(41,'Kunjungan','2020-01-02 10:53:32',NULL,35,157);

#
# Structure for table "login_log"
#

CREATE TABLE `login_log` (
  `id_login_log` int(11) NOT NULL AUTO_INCREMENT,
  `login_date` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_login_log`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `login_log_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=244 DEFAULT CHARSET=latin1 COMMENT='Table Catatan login User';

#
# Data for table "login_log"
#

INSERT INTO `login_log` VALUES (1,'0000-00-00 00:00:00',26),(2,'2019-11-20 02:49:49',26),(3,'2019-11-21 05:33:42',26),(4,'2019-11-21 08:35:13',26),(5,'2019-11-21 08:39:01',26),(6,'2019-11-22 08:53:40',26),(7,'2019-11-22 19:22:43',26),(8,'2019-11-22 22:04:45',26),(9,'2019-11-23 09:28:11',26),(10,'2019-11-23 10:06:55',17),(11,'2019-11-23 11:51:22',26),(12,'2019-11-23 14:52:05',26),(13,'2019-11-23 22:18:31',26),(14,'2019-11-24 13:38:30',26),(15,'2019-11-25 08:44:59',26),(16,'2019-11-25 19:16:47',26),(17,'2019-11-26 08:28:26',26),(18,'2019-11-26 13:20:53',17),(19,'2019-11-26 13:30:26',26),(20,'2019-11-26 13:31:03',26),(21,'2019-11-26 13:32:36',1),(22,'2019-11-26 14:14:02',26),(23,'2019-11-26 14:15:34',26),(24,'2019-11-26 14:27:15',11),(25,'2019-11-27 09:06:52',17),(26,'2019-11-27 09:08:36',26),(27,'2019-11-27 09:09:05',11),(28,'2019-11-27 13:20:25',26),(29,'2019-11-28 10:21:38',26),(30,'2019-11-28 15:55:51',26),(31,'2019-11-29 09:27:17',26),(32,'2019-11-29 13:40:46',26),(33,'2019-11-30 09:16:47',26),(34,'2019-12-02 08:45:54',26),(35,'2019-12-02 15:01:55',26),(36,'2019-12-02 15:15:04',11),(37,'2019-12-02 15:26:14',26),(38,'2019-12-02 15:46:18',1),(39,'2019-12-03 10:44:22',11),(40,'2019-12-03 10:57:48',1),(41,'2019-12-03 13:31:39',26),(42,'2019-12-03 13:32:06',1),(43,'2019-12-03 13:45:34',11),(44,'2019-12-03 13:58:57',26),(45,'2019-12-03 13:59:42',26),(46,'2019-12-03 14:00:13',17),(47,'2019-12-03 14:07:55',26),(48,'2019-12-03 14:21:15',17),(49,'2019-12-03 14:21:47',26),(50,'2019-12-03 14:22:38',26),(51,'2019-12-03 14:22:58',17),(52,'2019-12-03 15:56:28',26),(53,'2019-12-03 15:56:54',26),(54,'2019-12-03 15:57:25',17),(55,'2019-12-04 11:03:57',26),(56,'2019-12-04 11:17:04',26),(57,'2019-12-04 11:33:21',17),(58,'2019-12-04 13:38:59',26),(59,'2019-12-04 14:44:33',26),(60,'2019-12-04 14:44:45',17),(61,'2019-12-05 08:41:47',26),(62,'2019-12-05 09:41:55',17),(63,'2019-12-05 09:44:14',1),(64,'2019-12-05 10:21:14',26),(65,'2019-12-05 13:06:54',17),(66,'2019-12-05 13:07:10',1),(67,'2019-12-05 13:20:45',26),(68,'2019-12-05 13:55:38',1),(69,'2019-12-05 15:51:45',26),(70,'2019-12-05 15:55:24',26),(71,'2019-12-05 15:56:12',11),(72,'2019-12-05 16:01:02',26),(73,'2019-12-05 16:01:35',2),(74,'2019-12-05 16:05:44',11),(75,'2019-12-05 16:08:41',1),(76,'2019-12-05 16:10:01',26),(77,'2019-12-05 16:30:19',26),(78,'2019-12-05 16:30:25',1),(79,'2019-12-05 16:44:03',26),(80,'2019-12-06 08:14:56',26),(81,'2019-12-06 09:03:28',2),(82,'2019-12-06 09:06:03',26),(83,'2019-12-06 09:38:46',11),(84,'2019-12-06 09:39:03',26),(85,'2019-12-09 10:27:47',26),(86,'2019-12-09 14:19:27',26),(87,'2019-12-10 08:11:19',26),(88,'2019-12-11 08:25:07',26),(89,'2019-12-11 09:59:17',26),(90,'2019-12-11 13:52:16',1),(91,'2019-12-11 13:53:33',26),(92,'2019-12-11 15:55:37',11),(93,'2019-12-11 16:14:17',26),(94,'2019-12-11 16:14:45',164),(95,'2019-12-11 16:18:01',11),(96,'2019-12-11 16:53:07',26),(97,'2019-12-11 16:54:51',26),(98,'2019-12-12 08:40:09',26),(99,'2019-12-12 08:45:55',11),(100,'2019-12-12 08:59:52',1),(101,'2019-12-12 10:08:22',26),(102,'2019-12-12 13:05:49',11),(103,'2019-12-12 14:35:11',11),(104,'2019-12-12 14:38:16',26),(105,'2019-12-12 16:49:26',11),(106,'2019-12-12 16:50:01',26),(107,'2019-12-12 16:50:34',11),(108,'2019-12-12 16:54:30',164),(109,'2019-12-12 16:55:19',26),(110,'2019-12-12 16:56:12',26),(111,'2019-12-13 08:27:02',26),(112,'2019-12-13 08:53:03',26),(113,'2019-12-13 09:04:26',26),(114,'2019-12-13 09:39:24',11),(115,'2019-12-13 09:45:39',1),(116,'2019-12-13 09:46:38',11),(117,'2019-12-13 10:09:35',1),(118,'2019-12-13 10:15:22',11),(119,'2019-12-13 10:16:53',1),(120,'2019-12-13 10:17:57',11),(121,'2019-12-13 10:44:33',164),(122,'2019-12-13 10:45:29',11),(123,'2019-12-13 10:46:00',164),(124,'2019-12-13 11:09:36',26),(125,'2019-12-13 13:34:19',11),(126,'2019-12-13 13:42:55',164),(127,'2019-12-13 13:56:19',26),(128,'2019-12-13 13:57:44',26),(129,'2019-12-13 13:57:56',164),(130,'2019-12-13 14:00:31',26),(131,'2019-12-13 14:02:11',1),(132,'2019-12-13 14:17:48',26),(133,'2019-12-13 14:18:01',164),(134,'2019-12-13 14:18:17',26),(135,'2019-12-13 14:41:47',11),(136,'2019-12-13 15:07:25',164),(137,'2019-12-13 15:08:14',26),(138,'2019-12-13 15:08:37',1),(139,'2019-12-13 15:08:45',26),(140,'2019-12-13 15:10:11',26),(141,'2019-12-13 15:10:17',1),(142,'2019-12-13 15:11:47',11),(143,'2019-12-14 21:50:03',11),(144,'2019-12-14 23:32:22',157),(145,'2019-12-14 23:32:57',157),(146,'2019-12-14 23:34:28',26),(147,'2019-12-15 09:06:12',11),(148,'2019-12-15 17:16:13',17),(149,'2019-12-15 17:30:42',11),(150,'2019-12-15 23:11:25',157),(151,'2019-12-15 23:41:15',11),(152,'2019-12-16 08:50:25',17),(153,'2019-12-16 08:52:30',11),(154,'2019-12-16 09:23:40',164),(155,'2019-12-16 09:24:30',26),(156,'2019-12-16 09:31:46',17),(157,'2019-12-16 09:32:19',1),(158,'2019-12-16 09:35:18',11),(159,'2019-12-16 10:57:46',157),(160,'2019-12-16 12:34:30',11),(161,'2019-12-16 12:38:40',51),(162,'2019-12-16 12:39:33',49),(163,'2019-12-16 14:26:19',11),(164,'2019-12-16 16:32:02',26),(165,'2019-12-16 20:12:42',26),(166,'2019-12-17 11:06:17',11),(167,'2019-12-19 09:05:38',26),(168,'2019-12-19 13:02:31',11),(169,'2019-12-20 08:39:07',26),(170,'2019-12-20 08:50:34',26),(171,'2019-12-20 09:04:28',164),(172,'2019-12-20 09:04:52',26),(173,'2019-12-20 09:05:20',1),(174,'2019-12-20 09:10:54',11),(175,'2019-12-20 10:12:14',26),(176,'2019-12-20 10:12:32',164),(177,'2019-12-20 10:13:02',26),(178,'2019-12-20 10:13:34',1),(179,'2019-12-20 10:15:34',11),(180,'2019-12-20 14:55:30',1),(181,'2019-12-20 14:59:06',11),(182,'2019-12-21 10:00:09',11),(183,'2019-12-22 13:58:51',11),(184,'2019-12-22 16:55:23',26),(185,'2019-12-22 16:59:37',164),(186,'2019-12-22 17:32:41',1),(187,'2019-12-22 17:32:58',26),(188,'2019-12-22 17:34:08',1),(189,'2019-12-22 17:34:46',11),(190,'2019-12-22 17:37:48',26),(191,'2019-12-22 17:38:06',1),(192,'2019-12-22 17:38:49',11),(193,'2019-12-22 22:24:07',164),(194,'2019-12-22 22:24:32',26),(195,'2019-12-22 22:25:00',1),(196,'2019-12-22 22:25:29',26),(197,'2019-12-23 10:05:36',26),(198,'2019-12-23 10:09:44',164),(199,'2019-12-23 10:10:03',26),(200,'2019-12-23 10:10:24',1),(201,'2019-12-23 10:10:53',26),(202,'2019-12-23 10:13:48',11),(203,'2019-12-23 12:29:59',26),(204,'2019-12-24 08:36:45',11),(205,'2019-12-24 10:22:38',26),(206,'2019-12-24 14:12:14',17),(207,'2019-12-24 14:13:38',11),(208,'2019-12-26 08:35:48',26),(209,'2019-12-26 14:17:37',11),(210,'2019-12-26 14:20:13',26),(211,'2019-12-26 14:20:26',1),(212,'2019-12-26 14:22:36',17),(213,'2019-12-26 14:22:45',11),(214,'2019-12-26 14:32:21',157),(215,'2019-12-26 14:46:37',11),(216,'2019-12-26 14:47:11',164),(217,'2019-12-26 16:21:50',26),(218,'2019-12-26 16:22:04',157),(219,'2019-12-27 08:37:19',11),(220,'2019-12-27 08:49:41',157),(221,'2019-12-27 10:35:43',26),(222,'2019-12-27 11:10:45',26),(223,'2019-12-27 11:10:59',11),(224,'2019-12-27 13:33:48',11),(225,'2019-12-27 17:11:48',26),(226,'2019-12-28 10:39:04',11),(227,'2019-12-28 10:57:23',11),(228,'2019-12-28 12:09:34',157),(229,'2019-12-29 12:47:42',1),(230,'2019-12-29 13:42:14',11),(231,'2019-12-29 13:45:41',157),(232,'2019-12-29 17:00:43',157),(233,'2019-12-29 17:00:43',157),(234,'2019-12-29 17:02:14',164),(235,'2019-12-29 17:03:34',26),(236,'2019-12-29 17:04:00',1),(237,'2019-12-30 09:11:28',157),(238,'2019-12-30 09:12:46',164),(239,'2019-12-30 09:26:41',26),(240,'2020-01-02 09:13:35',157),(241,'2020-01-02 09:26:52',11),(242,'2020-01-02 10:52:04',157),(243,'2020-01-02 11:18:47',11);

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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1 COMMENT='Tabel Leads Prospek';

#
# Data for table "leads"
#

INSERT INTO `leads` VALUES (44,'201912SLOS90012','3603222007980112','Kunjungan','Ya',2,159,159,'Ya',90000000,'Sudah','lengkap',NULL,NULL,NULL,NULL,'2019-12-27 17:45:47','2019-12-28 12:24:19',30),(46,'201912SLOS89127','832948923743289','Telepon','Ya',2,154,154,'Ya',90000000,'Sudah','lengkap',NULL,NULL,NULL,NULL,'2019-12-28 10:54:57','2019-12-28 12:22:22',31),(47,'201912SLOS90011','3603222007980111','Kunjungan','Ya',2,154,154,'Ya',90000000,'Sudah','lengkap',NULL,NULL,NULL,NULL,'2019-12-28 11:26:58','2020-01-02 09:27:21',32),(48,'201912SLOS43242','1231782691304981','Telepon','Ya',2,159,154,'Ya',35000000,'Sudah','lengkap',NULL,NULL,NULL,NULL,'2019-12-29 13:45:05','2019-12-30 09:13:08',33),(49,'201912SLOS98651','1987981274019824','Email','Tidak',NULL,26,11,'Tidak',5000000,'Belum','lengkap',NULL,NULL,NULL,NULL,'2020-01-02 10:06:14','2020-01-02 10:35:18',34),(50,'201912SLOS98621','2374982374982734','Kunjungan','Ya',2,NULL,NULL,'Ya',5000000,'Belum','lengkap',NULL,NULL,NULL,NULL,'2020-01-02 10:51:39','2020-01-02 10:53:32',35);

#
# Structure for table "nst"
#

CREATE TABLE `nst` (
  `id_nst` int(11) NOT NULL AUTO_INCREMENT,
  `leads_id` varchar(255) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='Tabel NST';

#
# Data for table "nst"
#


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
  `id_user` int(11) DEFAULT NULL,
  `id_branch` int(11) DEFAULT NULL,
  `completed_by` int(11) DEFAULT NULL COMMENT 'Ketika tiket sudah diapproved HO dan mencatat id_user yang approve',
  `verified_by` int(11) DEFAULT NULL COMMENT 'Mencatat id_user siapa yang verfifikasi ttd',
  `form_mou` varchar(255) DEFAULT NULL COMMENT 'Form Upload File MOU',
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id_ticket`),
  KEY `id_partner` (`id_partner`),
  KEY `id_agent` (`id_agent`),
  KEY `id_user` (`id_user`),
  KEY `id_branch` (`id_branch`),
  KEY `id_leads` (`id_leads`),
  KEY `verified_by` (`verified_by`),
  KEY `id_nst` (`id_nst`),
  CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`id_partner`) REFERENCES `partners` (`id_partner`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`id_agent`) REFERENCES `agents` (`id_agent`),
  CONSTRAINT `tickets_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tickets_ibfk_4` FOREIGN KEY (`id_branch`) REFERENCES `branches` (`id_branch`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tickets_ibfk_5` FOREIGN KEY (`id_leads`) REFERENCES `leads` (`id_leads`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tickets_ibfk_6` FOREIGN KEY (`verified_by`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tickets_ibfk_7` FOREIGN KEY (`id_nst`) REFERENCES `nst` (`id_nst`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1 COMMENT='Tabel Tiket';

#
# Data for table "tickets"
#

INSERT INTO `tickets` VALUES (59,'Belum','2019-12-27 14:19:57',NULL,NULL,NULL,NULL,NULL,NULL,0,48,NULL,NULL,NULL,11,7,NULL,NULL,NULL,NULL,'2019-12-27 14:19:57'),(60,'Belum','2019-12-27 17:28:12',NULL,NULL,NULL,NULL,NULL,NULL,0,54,NULL,NULL,NULL,26,7,NULL,NULL,NULL,'2019-12-27 17:28:12','2019-12-27 17:28:12'),(61,'Belum','2019-12-27 17:44:42',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,27,NULL,NULL,26,7,NULL,NULL,NULL,'2019-12-27 17:44:42','2019-12-27 17:44:42'),(62,'Belum','2019-12-27 17:45:47',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,44,NULL,26,7,NULL,NULL,NULL,NULL,NULL),(64,'Belum','2019-12-28 10:54:57',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,46,NULL,11,7,NULL,NULL,NULL,NULL,NULL),(65,'Belum','2020-01-02 09:27:21',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,47,NULL,11,7,NULL,NULL,NULL,NULL,'2020-01-02 09:27:21'),(66,'Belum','2019-12-29 13:43:15',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,28,NULL,NULL,11,7,NULL,NULL,NULL,'2019-12-29 13:43:15','2019-12-29 13:43:15'),(67,'Belum','2019-12-29 13:45:05','2019-12-29 17:02:50','2019-12-29 17:03:45',NULL,NULL,NULL,NULL,2,NULL,NULL,48,NULL,11,7,NULL,NULL,NULL,NULL,NULL),(68,'Belum','2020-01-02 10:35:18',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,49,NULL,11,7,NULL,NULL,NULL,'2020-01-02 10:11:56','2020-01-02 10:35:18'),(69,'Belum','2020-01-02 10:17:03',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,49,NULL,11,7,NULL,NULL,NULL,'2020-01-02 10:17:03','2020-01-02 10:17:03'),(70,'Belum','2020-01-02 10:23:51',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,49,NULL,11,7,NULL,NULL,NULL,'2020-01-02 10:23:51','2020-01-02 10:23:51'),(71,'Belum','2020-01-02 10:27:46',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,49,NULL,11,7,NULL,NULL,NULL,'2020-01-02 10:27:46','2020-01-02 10:27:46'),(72,'Belum','2020-01-02 10:53:32',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,50,NULL,11,7,NULL,NULL,NULL,'2020-01-02 10:51:39','2020-01-02 10:53:32');

#
# Structure for table "notifications"
#

CREATE TABLE `notifications` (
  `id_notification` int(11) NOT NULL AUTO_INCREMENT,
  `has_read` enum('0','1') DEFAULT '0',
  `type` enum('Disetujui oleh Head','Disetujui oleh Manager','Disetujui oleh Admin HO','Komentar oleh','Ditolak oleh','Ditanda tangan oleh','Cross Branch oleh') DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=191 DEFAULT CHARSET=latin1 COMMENT='Tabel Notifikasi';

#
# Data for table "notifications"
#

INSERT INTO `notifications` VALUES (176,'1','Cross Branch oleh','2019-12-27 17:45:47',NULL,2,26,62),(178,'1','Cross Branch oleh','2019-12-28 10:54:57',NULL,2,11,64),(179,'1','Cross Branch oleh','2019-12-28 11:26:58',NULL,2,11,65),(180,'1','Cross Branch oleh','2019-12-29 13:45:05',NULL,2,11,67),(181,'1','Komentar oleh','2019-12-29 17:01:47',11,7,157,67),(182,'1','Komentar oleh','2019-12-29 17:02:44',11,7,164,67),(183,'1','Disetujui oleh Head','2019-12-29 17:02:50',11,7,164,67),(184,'1','Disetujui oleh Manager','2019-12-29 17:03:45',11,7,26,67),(185,'0','Cross Branch oleh','2020-01-02 10:11:56',NULL,NULL,11,NULL),(186,'0','Cross Branch oleh','2020-01-02 10:17:03',NULL,NULL,11,69),(187,'0','Cross Branch oleh','2020-01-02 10:23:51',NULL,NULL,11,70),(188,'0','Cross Branch oleh','2020-01-02 10:27:46',NULL,NULL,11,71),(189,'1','Cross Branch oleh','2020-01-02 10:51:39',NULL,2,11,72),(190,'1','Komentar oleh','2020-01-02 10:53:49',11,7,157,72);

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
) ENGINE=InnoDB AUTO_INCREMENT=1716 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC COMMENT='Tabel Komentar';

#
# Data for table "comments"
#

INSERT INTO `comments` VALUES (1713,'mantep','2019-12-29 17:01:47',0,157,NULL,NULL,NULL,67),(1714,'sip','2019-12-29 17:02:44',0,164,NULL,NULL,NULL,67),(1715,'bismillah','2020-01-02 10:53:49',0,157,NULL,NULL,NULL,72);

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
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1 COMMENT='Tabel Agent Activities';

#
# Data for table "agent_activities"
#

INSERT INTO `agent_activities` VALUES (54,'Data Agent telah dibuat','2019-12-27 17:44:42',27,26),(55,'Data Agent telah dibuat','2019-12-29 13:43:15',28,11);

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

