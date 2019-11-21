# Host: localhost  (Version 5.5.5-10.4.6-MariaDB)
# Date: 2019-11-21 20:06:45
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "branches"
#

CREATE TABLE `branches` (
  `id_branch` int(3) NOT NULL AUTO_INCREMENT,
  `nama_cabang` varchar(40) DEFAULT NULL,
  `has_head` enum('ya','tidak') DEFAULT NULL,
  `has_manager` enum('ya','tidak') DEFAULT NULL,
  PRIMARY KEY (`id_branch`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# Data for table "branches"
#

INSERT INTO `branches` VALUES (1,'Balikpapan Syariah',NULL,NULL),(2,'Bandung Syariah',NULL,NULL),(3,'Banjarmasin Syariah',NULL,NULL),(4,'Batam Syariah',NULL,NULL),(5,'Bekasi Syariah',NULL,NULL),(6,'Bogor Syariah',NULL,NULL),(7,'BSD Syariah',NULL,NULL),(8,'BukitTinggi Syariah',NULL,NULL),(9,'Cawang Syariah',NULL,NULL),(10,'Cirebon Syariah',NULL,NULL),(11,'Depok Syariah',NULL,NULL),(12,'Gorontalo Syariah',NULL,NULL),(13,'Gresik Syariah',NULL,NULL),(14,'Jakarta Selatan Syariah',NULL,NULL),(15,'Jakarta Utara Syariah',NULL,NULL),(16,'Jambi Syariah',NULL,NULL),(17,'Karawang Syariah',NULL,NULL),(18,'Kediri Syariah',NULL,NULL),(19,'Kendari Syariah',NULL,NULL),(20,'Kudus Syariah',NULL,NULL),(21,'Lampung Syariah',NULL,NULL),(22,'Makassar Syariah',NULL,NULL),(23,'Malang Syariah',NULL,NULL),(24,'Mataram Syariah',NULL,NULL),(25,'Medan Syariah',NULL,NULL),(26,'Meruya Syariah',NULL,NULL),(27,'Mojokerto Syariah',NULL,NULL),(28,'Padang Syariah',NULL,NULL),(29,'Palangkaraya Syariah',NULL,NULL),(30,'Palembang Syariah',NULL,NULL),(31,'Pekanbaru Syariah',NULL,NULL),(32,'Pontianak Syariah',NULL,NULL),(33,'Purwokerto Syariah',NULL,NULL),(34,'Samarinda Syariah',NULL,NULL),(35,'Semarang Syariah',NULL,NULL),(36,'Sidoarjo Syariah',NULL,NULL),(37,'Solo Syariah',NULL,NULL),(38,'Sorong Syariah',NULL,NULL),(39,'Sukabumi Syariah',NULL,NULL),(40,'Sunter Syariah',NULL,NULL),(41,'Surabaya Syariah',NULL,NULL),(42,'Tangerang Syariah',NULL,NULL),(43,'Tasikmalaya Syariah',NULL,NULL),(44,'Ternate Syariah',NULL,NULL),(45,'Yogyakarta Syariah',NULL,NULL),(46,'Head Office',NULL,NULL);

#
# Structure for table "leads"
#

CREATE TABLE `leads` (
  `id_leads` int(11) NOT NULL AUTO_INCREMENT,
  `nama_konsumen` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `soa` varchar(255) DEFAULT 'Asal Aplikasi',
  `alamat` varchar(255) DEFAULT NULL,
  `produk` varchar(255) DEFAULT NULL,
  `detail_produk` text DEFAULT NULL,
  `follow_up_by` varchar(255) DEFAULT NULL COMMENT 'Kunjungan / Telepon / Whatsapp / Email',
  `ktp` varchar(255) DEFAULT NULL COMMENT 'Upload File',
  `selfie_foto` varchar(255) DEFAULT NULL COMMENT 'Upload File',
  `foto_penyedia_jasa` varchar(255) DEFAULT '' COMMENT 'Upload File',
  `leads_id` varchar(255) DEFAULT NULL,
  `cross_branch` varchar(255) DEFAULT 'Yes / No',
  `cabang_cross` int(3) DEFAULT NULL COMMENT 'Foreign key cabang dari table branches',
  `surveyor` int(11) DEFAULT NULL,
  `pic_ttd` int(11) DEFAULT NULL,
  `appeal_nst` varchar(255) DEFAULT NULL COMMENT 'ya/tidak',
  PRIMARY KEY (`id_leads`),
  UNIQUE KEY `telepon` (`telepon`),
  UNIQUE KEY `leads_id` (`leads_id`),
  KEY `cabang_cross` (`cabang_cross`),
  KEY `surveyor` (`surveyor`),
  KEY `pic_ttd` (`pic_ttd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "leads"
#


#
# Structure for table "merchants"
#

CREATE TABLE `merchants` (
  `id_merchant` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_merchant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "merchants"
#


#
# Structure for table "users"
#

CREATE TABLE `users` (
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
  KEY `id_branch` (`id_branch`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_branch`) REFERENCES `branches` (`id_branch`)
) ENGINE=InnoDB AUTO_INCREMENT=188 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'Lia','200001','admin1@admin.com','e00cf25ad42683b3df678c61f42c6bda',2,'Administrator',1,46,'2019-08-16 16:36:16',NULL),(2,'Gede Laroibi','079551','admin2@admin.com','c84258e9c39059a89ab77d846ddab909',3,'Administrator',1,46,'2019-08-16 16:36:16','solusi.PNG'),(11,'Okky Aditya','072104','okky.aditya@bfi.co.id','c84258e9c39059a89ab77d846ddab909',1,'CMS',1,7,'2019-08-16 16:36:16',NULL),(16,'Maulana Arief Kuncoro','078600','maulana.kuncoro@bfi.co.id','aff4b352312d5569903d88e0e68d3fbb',4,'Administrator',1,46,'2019-08-16 16:36:16',NULL),(17,'Administrator BFI Syariah','000000','administrator@bfisyariah.id','0baea2f0ae20150db78f58cddac442a9',5,'Administrator',1,46,'2019-08-16 16:36:16',NULL),(23,'Ardy','079473','ardy.ardy@bfi.co.id','b32c3ea483b375b79e01ffc404316070',5,'Administrator',1,46,'2019-08-16 16:36:16',NULL),(26,'Ibrahim','000005','ibrahim.ahmadd98@gmail.com','f1c083e61b32d3a9be76bc21266b0648',6,'Sharia Head',1,8,'2019-08-16 16:36:16',NULL),(28,'reky sutedja','007559','reky.sutedja@bfi.co.id','1e83aa6cec826c41eed0c3eb286191ca',1,'CMS',1,45,'2019-08-16 16:36:16',NULL),(29,'Iva Ariani','005138','ivaariani@gmail.com','a9ebff29925ed4db9fa260ce6d6627f8',6,'Sharia Head',1,38,'2019-08-16 16:36:16',NULL),(30,'FAISAL','004196','faisalmahatama@gmail.com','e78d7dc7320e76eff092280cfc73578e',6,'Sharia Head',1,3,'2019-08-16 16:36:16',NULL),(31,'E.M.Ikhsanudin','079442','ikhsanemcy@gmail.com','17516ddbe5c4957cb2c6efaf4bdc63af',6,'Sharia Head',1,16,'2019-08-16 16:36:16',NULL),(32,'Fatrinanda lamusu','017862','nandalamusu@gmail.com','adb4bb84c63583d3b842413d7014d1cd',6,'Sharia Head',1,44,'2019-08-16 16:36:16',NULL),(33,'Ilham Hamiru','901461','ilhamiru50@gmail.com','fa7db5bf23ca854c7fec7f15f42924a8',1,'CMS',1,44,'2019-08-16 16:36:16',NULL),(34,'Muhammad faizal','901712','Muhammadfaizal04111993@gmail.com','60bf01e2a129456570d4009b5dc89a94',1,'CMS',1,38,'2019-08-16 16:36:16',NULL),(35,'SABILAL MUHTADIN','014555','sabilalmuhtadin1980@gmail.com','e78d7dc7320e76eff092280cfc73578e',1,'CMS',1,3,'2019-08-16 16:36:16',NULL),(36,'Ardianto S','9014668','ardiadrian696@gmail.com','59cbc46df3a1818443dfe3f5945a6004',1,'CMS',1,38,'2019-08-16 16:36:16',NULL),(37,'Muhammad faizal','9017012','Muhammadpaisal19404111993@gmail.com','60bf01e2a129456570d4009b5dc89a94',1,'CMS',1,38,'2019-08-16 16:36:16',NULL),(38,'Janu Setiawan','015501','janu.setiawan@bfi.co.id','42b0dc0ae5333d6de8867073537be38d',6,'Sharia Manager',1,31,'2019-08-16 16:36:16',NULL),(39,'Abdul Gafur','009241','gofreinds41@gmail.com','0bee710122d521f74f48f7fdc33fed69',6,'Sharia Head',1,15,'2019-08-16 16:36:16',NULL),(40,'Umi Sultra','072632','umisultra@gmail.com','57ef86f9f28375de3d24c0393945c9c0',6,'Sharia Head',1,26,'2019-08-16 16:36:16',NULL),(41,'Agung Budi Cahyono','024157','agung.cahyono@bfi.co.id','041e1a6a28ab4012af6876a51dca317d',6,'Sharia Head',1,9,'2019-08-16 16:36:16',NULL),(42,'Mimi Aslamiyah','005074','mimi.aslamiyah@bfi.co.id','3be79637cae82734dc58df61146385bf',6,'Sharia Manager',1,26,'2019-08-16 16:36:16',NULL),(44,'Diansah','9015342','Diansah1105@gmail.com','0beb4892395211e0429d73b034db620d',1,'CMS',1,15,'2019-08-16 16:36:16',NULL),(45,'Eko yuli suprianto','016923','suprianto.jktg2708@gmail.com','2f6b2d1d0642a6cf40e9c245ded02507',5,'Administrator',1,46,'2019-08-16 16:36:16',NULL),(46,'Sutriyandi','011349','sutriyandi@bfi.co.id','446947ce40e2bc3eece0c1161544bdd6',6,'Sharia Manager',1,40,'2019-08-16 16:36:16',NULL),(47,'AYU KEMALA SARI','9016709','ayu92kemala@gmail.com','d190075af52f6d43177918dff07a3d46',1,'CMS',1,11,'2019-08-16 16:36:16',NULL),(48,'HERFIANA','067337','herfiana.jauharah@gmail.com','42dd950dcb324b1b1c5232440bec2639',6,'Sharia Head',1,11,'2019-08-16 16:36:16',NULL),(49,'JAJANG JAMALUDIN','012993','jajang.jamaludin@bfi.co.id','550fd836a872e632a3847728e138606e',6,'Sharia Manager',1,42,'2019-08-16 16:36:16',NULL),(50,'Arif Fadilah','078343','arifelfadillah@gmail.com','408d5367952163926c9c91a5bd4d7b99',6,'Sharia Head',1,6,'2019-08-16 16:36:16',NULL),(51,'Nurfadli','9014498','Nurfadlif03@gmail.com','550fd836a872e632a3847728e138606e',1,'CMS',1,42,'2019-08-16 16:36:16',NULL),(52,'Budi Iswanto','9016990','budii150594@gmail.com','e03be53d39d9a7de4f1272bb5f185191',1,'CMS',1,42,'2019-08-16 16:36:16',NULL),(53,'M Aditya Darmawan','9015113','aditd5150@gmail.com','87b39e2c4f7e8c3056489034b074155a',1,'CMS',1,6,'2019-08-16 16:38:14',NULL),(54,'Ali Takim Siregar','9017208','alitaqims03@gmail.com','fd339bd7a36a4b1264c2a661aaf229cd',1,'CMS',1,9,'2019-08-16 17:22:33',NULL),(55,'Agung Sukma Pratama','9017203','agungpratama4509@gmail.com','095f27b77a0e5b122e3a4b3464d6516c',1,'CMS',1,9,'2019-08-16 17:43:16',NULL),(56,'Dede rizky wahyudi','9016785','dederizkywahyudi4@gmail.com','82cf235e87c9ae6c6c54859de8f2765b',1,'CMS',1,42,'2019-08-18 14:50:06',NULL),(58,'Aprila sukoco','080981','radenmasaprilasukoco@gmail.com','33d29aaba3f43cba910fb2d32d63ee9e',1,'CMS',1,40,'2019-08-19 08:43:33',NULL),(59,'DONY PRIADHI','075573','donybfisyariah@gmail.com','ef8e4c3fbf2d454babfdf7927957b2cf',1,'CMS',1,17,'2019-08-19 10:52:11',NULL),(60,'Misbach Ahmad Bachruddin','081872','misbachbach@gmail.com','74e44a50816171ef94cdd0b6172f5779',1,'CMS',1,7,'2019-08-19 11:29:10',NULL),(61,'Muhamad Yaman Huri','9014469','elhurimuhamadyaman@gmail.com','399351b8c12b6317572d283414949801',1,'CMS',1,7,'2019-08-19 11:30:06',NULL),(62,'Rizki Imanullah','079816','rizki.imanullah@gmail.com','367a2236f626fbd45add6bf26ea685cd',6,'Sharia Head',1,7,'2019-08-19 11:31:04',NULL),(63,'Akmal dhiya ulhaq','9015712','akmaldhiyaulhaq7@gmail.com','c5caf74edf9bc0e39adc6a0b461dd13f',1,'CMS',1,26,'2019-08-19 12:00:56',NULL),(64,'Daman Huri','9015120','damanhuri1678@gmail.com','408d5367952163926c9c91a5bd4d7b99',1,'CMS',1,6,'2019-08-19 12:08:54',NULL),(65,'Fadhil Alwan Dharma Adji','9016391','Fadhilalwan28@gmail.com','a243acb51619490ec691df8db66133ec',1,'CMS',1,11,'2019-08-19 14:21:40',NULL),(66,'Yudhi Ari Setyawan','006945','kemplanx@gmail.com','825960e7bb896c694502b591b67718d5',6,'Sharia Head',1,20,'2019-08-19 17:14:53',NULL),(67,'Benny Himawan Elhamsyah','9016505','bennyhimawanelhamsyah@gmail.com','6bd55c4a2a0f96bead825fcb034f1b04',1,'CMS',1,20,'2019-08-19 17:17:52',NULL),(68,'Rendy Soenarya','9015716','rendyizanami@gmail.com','1f378326286adb866282546ca226a2a8',1,'CMS',1,43,'2019-08-19 17:27:42',NULL),(70,'DEWI AYU MUSTIKA','077238','dewi.mustika@bfi.co.id','46af0592f9e3e535cef31e64163b4b3d',6,'Sharia Head',1,24,'2019-08-19 17:39:10',NULL),(71,'Mohamad Ali Fikri','9017325','mohamadalifikri651@gmail.com','1bab567ee4df8c4c1f7475aa92f46eeb',1,'CMS',1,27,'2019-08-19 17:43:20',NULL),(72,'Haryo Seno','079777','haryo.seno@bfi.co.id','e3a06b6ac599ae044b6faaaff14f63ca',6,'Sharia Head',1,27,'2019-08-19 17:43:29',NULL),(73,'Khusnul khotimah','9014955','khusnulkhotimahhhh0805@gmail.com','932da2b5525a5844636cb95b83996f71',1,'CMS',1,27,'2019-08-19 17:44:12',NULL),(74,'PANCA INDRYA MUKTI','9015180','pancandrya5@gmail.com','25d55ad283aa400af464c76d713c07ad',1,'CMS',1,37,'2019-08-19 17:55:26',NULL),(75,'Febriyan Sutrisno','9013898','febriyansutrisno66@gmail.com','74f8aa76a2a240ebd9c29979cc8fbf40',1,'CMS',1,24,'2019-08-19 17:56:50',NULL),(76,'CINCA NOUVALITA','081366','cincanouvalita@gmail.com','ff630002be791f32c4058851d640afc2',1,'CMS',1,37,'2019-08-19 17:57:04',NULL),(77,'CHABIBUL MIFTA','078288','chabibul.mifta@bfi.co.id','25d55ad283aa400af464c76d713c07ad',6,'Sharia Head',1,37,'2019-08-19 17:58:12',NULL),(78,'tantan wijaya','008126','tantanwijaya012@gmail.com','d9600f16d10d53eae48c45c8a7ba6c47',1,'CMS',1,43,'2019-08-19 18:20:05',NULL),(79,'robby saputra','009827','robby.saputra@bfi.co.id','1f843643601b2759f734edd8d607d808',6,'Sharia Head',1,14,'2019-08-20 09:42:52',NULL),(80,'RENO AGUNG WIBOWO','9017457','vje6699@gmail.com','00744b0b674238b41b1ada7ca6071d55',1,'CMS',1,14,'2019-08-20 10:09:25',NULL),(82,'Adi Nurohman','081291','adiiinurohman12@gmail.com','60afc1cb53bab453b5e2397ef24c3f74',1,'CMS',1,40,'2019-08-20 10:19:19',NULL),(83,'Dicky Kurniawan','074675','dicky.kurniawan@bfi.co.id','becbea646fb394ca9fa18ca7cb2bb5b1',6,'Sharia Head',1,29,'2019-08-20 14:30:49',NULL),(84,'Dhany Prakarsa','018985','dhany.prakarsa@bfi.co.id','89cb46fbfbcc01d0d7e45c2cade9042d',6,'Sharia Head',1,36,'2019-08-20 15:32:08',NULL),(85,'Asri puspitasari','9016131','dhany2912@gmail.com','09e28702d0ce59d2d105c2df79d5a19e',1,'CMS',1,36,'2019-08-20 16:04:35',NULL),(86,'ARIYANTO LAPU','007748','ariyanto.lapu@bfi.co.id','3e8034a85c7ef242f32e1fed09a927c4',6,'Sharia Head',1,12,'2019-08-20 16:05:44',NULL),(87,'ABD MOKIT','051878','mokitabdul22@gmail.com','c76093e34fc206f9f526bbd8fdd69948',6,'Sharia Head',1,18,'2019-08-20 16:06:10',NULL),(88,'agus supriyanto','9014907','agussupriyanto012@gmail.com','03bd2774aa324205c054700d91affb73',1,'CMS',1,12,'2019-08-20 16:09:07',NULL),(89,'Achmad Fauzi','9016727','oziebequiet@yahoo.co.id','4a7c0071fc9a2279d778b729fc5c77e1',1,'CMS',1,34,'2019-08-20 16:21:49',NULL),(90,'DEDY IRMAWAN','018114','dedy.irmawan1988@gmail.com','e9e01d0b69809c07b4fc19c50aeb49cc',6,'Sharia Head',1,34,'2019-08-20 16:27:12',NULL),(91,'Rakhmad Hidayat','018679','rakhmad.hidayat@bfi.co.id','5f4dcc3b5aa765d61d8327deb882cf99',6,'Sharia Head',1,45,'2019-08-20 17:41:04',NULL),(92,'Armila Ernisa Zulfa','080229','zulfaernissa@gmail.com','b6871e6a0bad9366942c192e95284bf2',1,'CMS',1,18,'2019-08-20 22:20:15',NULL),(93,'Vendra Irawan','9016188','vendrairhawan@ymail.com','5f4dcc3b5aa765d61d8327deb882cf99',1,'CMS',1,45,'2019-08-21 08:31:28',NULL),(94,'DEVI APRIYANI','9016613','deviapriani.da81@gmail.com','5f4dcc3b5aa765d61d8327deb882cf99',1,'CMS',1,45,'2019-08-21 08:36:06',NULL),(95,'Roni Yuliantino','9016864','roniyuliantino82@gmail.com','0de549929a2a16cdcef697f8d76eb1c9',1,'CMS',1,31,'2019-08-21 09:56:35',NULL),(96,'UMAR SALEH DAULAY','008752','umarsaleh402@gmail.com','da4fa6da7915c5b3755f3e3e15dc79f2',1,'CMS',1,31,'2019-08-21 10:00:53',NULL),(97,'RAHMAT RIO BAHARI','080917','rahmatrio981@yahoo.com','97a8a4877ba4bf081b28c93f3fce5d1e',1,'CMS',1,31,'2019-08-21 10:03:39',NULL),(98,'ANDY PUTRA','080916','andyputra180@rocketmail.com','8e9d6e62d25d26597e8514d0835132a4',1,'CMS',1,31,'2019-08-21 10:09:26',NULL),(99,'Faiz Amin Jaya','080569','faizaminjaya@gmail.com','397137c5aa9d13aa76b715663e192420',1,'CMS',1,18,'2019-08-21 10:14:16',NULL),(100,'MEIDA RUSIANA TUNJANG','9016402','meidarusianatunjang@gmail.com','57a23281db49393891174a9d5965772b',1,'CMS',1,29,'2019-08-21 10:48:06',NULL),(101,'YASINTA FITRIANI','9017403','sintafitrie@gmail.com','cdd64ea2bfef5992900423a2e826889f',1,'CMS',1,29,'2019-08-21 11:26:49',NULL),(102,'Kemal Yusrin','020589','kemal.alturk@bfi.co.id','e10adc3949ba59abbe56e057f20f883e',6,'Sharia Head',1,43,'2019-08-21 16:48:49',NULL),(103,'Fachreza Dhian Pratama','071887','syariah.kendari@gmail.com','6391a0ac58b2a75791384bc04f6b29d4',6,'Sharia Head',1,19,'2019-08-22 16:54:23',NULL),(104,'Adi Renaldi','069606','adi.renaldi@bfi.co.id','e03f78f289f987613b07f3cddb73f9a8',6,'Sharia Head',1,39,'2019-08-22 19:00:12',NULL),(105,'Isthafa Harits Utami','9014881','isthafa.27@gmail.com','6e777fe11a540268a6a39a42fc432767',1,'CMS',1,39,'2019-08-23 05:29:29',NULL),(106,'Moch Qurthuby','9014890','moch.qurthuby07@gmail.com','6e777fe11a540268a6a39a42fc432767',1,'CMS',1,39,'2019-08-23 08:43:19',NULL),(107,'Dingga Diramaesha','016721','dingga.diramaesha@bfi.co.id','b895a9ddd8f6db70af8b5cc4cd759005',6,'Sharia Head',1,8,'2019-08-23 09:30:57',NULL),(108,'MONA AGISTA','004913','mona.agista@bfi.co.id','2616c763893e5d2618389f8c98d8bf25',6,'Sharia Head',1,28,'2019-08-23 09:31:40',NULL),(109,'ARIS FAHRIANTO','079707','arisfahrianto@gmail.com','b28b5879e1f417982b9ab6ecf9a33062',6,'Sharia Head',1,33,'2019-08-23 14:34:26',NULL),(110,'SITI BAROKAH','9015287','sitibarokah753@gmail.com','4cd4d2e51b5ab80a3824af07d5039f1a',1,'CMS',1,33,'2019-08-23 14:36:26',NULL),(111,'EGI DELLIANA','9015270','egidelliana@gmail.com','c521626b832787f57f9861c373350c3f',1,'CMS',1,33,'2019-08-23 14:37:54',NULL),(112,'Dwi Nurcahyanti','9014691','dwinurcahyanti14@gmail.com','259af61090c1feab3fd8988b8682f71c',1,'CMS',1,35,'2019-08-23 14:41:29',NULL),(113,'Afriyana nurman satria','020615','afriyana.satria@bfi.co.id','39a21f3f58287334901197c82e6a8daa',6,'Sharia Head',1,10,'2019-08-23 15:39:43',NULL),(114,'Hesky hermoyo','9014457','heskyh08@gmail.com','ee31d1e8a4674f4fe0c738936ba1aa58',1,'CMS',1,10,'2019-08-23 16:04:54',NULL),(115,'MONICA APRILIA PUTRI','072710','monica.putri@bfi.co.id','f65d3d938f139227d9f22ad3d3a473df',6,'Sharia Head',1,35,'2019-08-24 08:21:43',NULL),(116,'PITA PURNAMASARI','9017505','pitapurnamasari1081@gmail.com','e34aed849c9f31940058d51aea015111',1,'CMS',1,19,'2019-08-24 09:33:53',NULL),(117,'Hermawan Dwi putra','015254','hermawan.putra@bfi.co.id','041607e6cf65a53347ffbea776f7eb7c',6,'Sharia Head',1,32,'2019-08-24 10:55:44',NULL),(118,'Ari Iswanto','9015730','ariiswanto161@gmail.com','3c3b752cad1aa2f3eb938e4f3e3fbc98',1,'CMS',1,4,'2019-08-26 10:17:05',NULL),(119,'Siti Nurwulan','041539','siti.nurwulan@bfi.co.id','afc45f6eb147ac43c72a205391bb00d3',6,'Sharia Head',1,13,'2019-08-26 11:20:38',NULL),(120,'Lolita Media Sari','007426','lolitamediasari@gmail.com','bc49a09bfc4eb7b214bf0b476aec4235',6,'Sharia Manager',1,41,'2019-08-26 11:22:09',NULL),(121,'Teddy Mathado','007884','teddy.mathado@bfi.co.id','8bfe0f9a64f31db37688c32de4bdba35',6,'Sharia Manager',1,17,'2019-08-26 11:24:10',NULL),(122,'Muhammad Hilal','005622','muh.hilal@bfi.co.id','1a1fe344c01528f5b71d2edc4b01aad3',6,'Sharia Manager',1,30,'2019-08-26 11:27:02',NULL),(123,'Mira Anggraeni','006075','mira.anggraeni@bfi.co.id','abd01045b9aa195f0810a48d4b6434da',6,'Sharia Manager',1,5,'2019-08-26 11:31:36',NULL),(124,'Dedy Armana Putra','077214','dedyarmanaputra@gmail.com','acbeaaf2287f02b04840a55713bc9be4',6,'Sharia Head',1,1,'2019-08-26 11:31:50',NULL),(125,'Nisa  Nurathiqoh','9015248','nisaqoh23@gmail.com','efb82a23723d2945415cd8a49abab3b8',1,'CMS',1,17,'2019-08-26 11:37:03',NULL),(126,'Meryana ayu wardhany','080204','meryanaayu6@gmail.com','b72915aab2c666c3817b6c9469360f0a',1,'CMS',1,17,'2019-08-26 11:38:34',NULL),(127,'Dewi Rahayu Puspitasari','081065','dhewierahayu@gmail.com','ce91627f04446919fb6e5884bfd387fd',1,'CMS',1,13,'2019-08-26 11:50:08',NULL),(128,'Rahmat hidayat','9017146','rahmat.140688@gmail.com','7ae2003df331ec233eeb71ee42e398d1',1,'CMS',1,22,'2019-08-26 11:57:20',NULL),(129,'Bagus Dwi Setyanto','9017492','bagusetyanto.bds@gmail.com','40b4fa6704f1b03731a303a7e88aac4a',1,'CMS',1,41,'2019-08-26 11:57:48',NULL),(130,'Idfan Reyzal Hamalgani','9017490','idfanreyzal@yahoo.com','9daef7a9db5fa571bc42574060529b27',1,'CMS',1,41,'2019-08-26 11:58:02',NULL),(131,'Dimas Haryan','9016971','dimasharyan1@gmail.com','8e599e43902be772330af5512871638e',1,'CMS',1,4,'2019-08-26 12:05:30',NULL),(132,'M. WEIMPY FAHMI','015638','weimpyfahmi@gmail.com','e788d432a6301c55f5ad4a6c8f53227e',6,'Sharia Head',1,23,'2019-08-26 12:13:01',NULL),(133,'Hasyirul umam','9071287','hasyirulumam0794@gmail.com','e10adc3949ba59abbe56e057f20f883e',1,'CMS',1,32,'2019-08-26 12:13:37',NULL),(134,'MOCH SALAFUDIN','081066','mohsalafudin92@gmail.com','64accb9cfd06204ec636d63a11e0f64c',1,'CMS',1,13,'2019-08-26 12:16:18',NULL),(135,'M Sahirsyah','081195','sahirsyahm@gmail.com','34e71227de6b5784a3e7107ca96fa424',1,'CMS',1,30,'2019-08-26 13:03:41',NULL),(136,'Barli Adwensyah','076859','barliadwensyah@gmail.com','34e71227de6b5784a3e7107ca96fa424',1,'CMS',1,30,'2019-08-26 13:05:07',NULL),(137,'Wijaya Lefi yandie','081199','wijaya.lefiyandie@yahoo.com','34e71227de6b5784a3e7107ca96fa424',1,'CMS',1,30,'2019-08-26 13:07:04',NULL),(138,'Dina Cassa Maharani','081357','dinaamaharani@gmail.com','840c9622dec86f7fd6361fab685b5ab7',1,'CMS',1,41,'2019-08-26 13:45:50',NULL),(139,'Ana Zuliatin Nadhiroh','081355','ananadhiroh23@gmail.com','4a2e9fba599cfa1198f7e59362a2d8ca',1,'CMS',1,41,'2019-08-26 13:47:53',NULL),(140,'M Fathirul Abrar','011454','fathirul.abrar@gmail.com','caa92674de6e72fa257e7959a62ebafc',6,'Sharia Head',1,25,'2019-08-26 13:52:09',NULL),(141,'Muhammad Irsal','079925','muhammadirsal16@gmail.com','7a36a05edf7e3fe651a5807871528a0e',1,'CMS',1,25,'2019-08-26 13:57:14',NULL),(142,'Nurhasanah Ginting','9015107','nurhasanahginting11@gmail.com','7a36a05edf7e3fe651a5807871528a0e',1,'CMS',1,25,'2019-08-26 13:58:21',NULL),(143,'Rahmat Irfan','9016432','rahmatirfan01@gmail.com','7a36a05edf7e3fe651a5807871528a0e',1,'CMS',1,25,'2019-08-26 14:01:47',NULL),(144,'Mei Wulan Janati','017217','meuwulanjanati768@gmail.com','34e71227de6b5784a3e7107ca96fa424',1,'CMS',1,30,'2019-08-26 15:01:47',NULL),(145,'rio pramana','025396','rio.pramana@bfi.co.id','6a82abe7a559e44d1997a7e8669d70a6',6,'Sharia Manager',1,22,'2019-08-26 15:20:49',NULL),(146,'RIYAN MARDIYANTO','9014985','riyanmardiyanto27@gmail.com','f4dbca808e102c305cb92f192d16ef4d',1,'CMS',1,23,'2019-08-26 16:05:14',NULL),(147,'Fariz Pramana Yudha','080956','yudhapramanaziraf@gmail.com','3f3230d2fdb3a77c02e9059c1e962d5b',1,'CMS',1,17,'2019-08-26 16:06:41',NULL),(148,'Syafrio Andestha','076072','andestha12@gmail.com','6891380675033019026c3fc4928caf1b',1,'CMS',1,28,'2019-08-26 16:18:29',NULL),(149,'Bima Saputra','9015412','bimasaputra1993@gmail.com','6891380675033019026c3fc4928caf1b',1,'CMS',1,28,'2019-08-26 16:20:41',NULL),(150,'Ayu riza santi','9015381','ayurizasanti6@gmail.com','29d75126bd0bc9244edf6847a47dcb32',1,'CMS',1,23,'2019-08-26 16:29:51',NULL),(151,'Ratih Mutia','9014863','ratihmutia1989@gmail.com','c96aae32cb9dff2718210afd2be53c70',1,'CMS',1,32,'2019-08-26 16:52:06',NULL),(152,'Kiki fatmawati','9014512','Kikifatmawati419@gmail.com','cda2c99fbf5e19f20d331299c15a4491',1,'CMS',1,10,'2019-08-27 08:30:00',NULL),(153,'franky santana','022127','franky.santana@bfi.co.id','a065ac9b6970ef59a25dd7fe4c2a72f0',6,'Sharia Head',1,4,'2019-08-27 13:35:50',NULL),(154,'Tatang Sodar','002065','tatang.sodar@bfi.co.id','26db626c551022460a0318405b25acfa',6,'Sharia Manager',1,2,'2019-08-27 17:35:40',NULL),(155,'Hari Mulyono','078960','harimuly1119@gmail.com','fbaab00a1eab8b068610697b29543d4d',1,'CMS',1,2,'2019-08-27 17:38:06',NULL),(156,'Dicky Mulia Derma Prawira','9016799','dickyxelica2@gmail.com','a6235a5a749f6ac637c97ecc9da43d12',1,'CMS',1,2,'2019-08-27 17:39:54',NULL),(157,'Wawan Indriana','9014532','Indrianaw2n@gmail.com','a49f50dc200f64744e6e95a172d6acb1',1,'CMS',1,2,'2019-08-28 09:23:18',NULL),(158,'Firhand Ti Zaid Alfi','080015','firhandtizaidalfi@gmail.com','2942b56d633b75105dd6afb4a4a1e842',1,'CMS',1,5,'2019-08-28 10:52:30',NULL),(159,'Muhamad Reza','079566','muhamad1988reza@gmail.com','ba00ec4cf7968be0414659e83aeb7b72',1,'CMS',1,2,'2019-08-28 11:35:48',NULL),(160,'Ervina Eka Febriamy','9015313','febriamyvienna@gmail.com','e141a3dfd7d88104f9b36029adf67da8',6,'Sharia Head',1,5,'2019-08-28 16:07:57',NULL),(161,'ABDUL KAISY BIAD','9017494','kaisybiad29@gmail.com','e10adc3949ba59abbe56e057f20f883e',1,'CMS',1,26,'2019-08-30 09:05:02',NULL),(162,'YUSDIANTO ABDUL','9017523','yusdiianto@gmail.com','2f971fee3eca06981e3048b14bed1153',1,'CMS',1,12,'2019-08-30 14:46:20',NULL),(163,'Mitha Andriani','9015777','mithaandriani09@gmail.com','bd34a037294499e0b221ca2e233731a6',1,'CMS',1,5,'2019-08-30 17:00:36',NULL),(164,'Ibrahim Ahmad','200798','ibrahim.ahmad58@gmail.com','e79f735263d8a0c12ae4dfad531cb13f',6,'Sharia Head',0,42,'2019-08-30 21:54:55',NULL),(165,'Asfar M Nur','079968','asfarmnur@gmail.com','88e051fa4a54977f5c0314acd54f68f2',1,'CMS',1,22,'2019-09-02 10:13:58',NULL),(166,'Adhine Basilia','007105','adhine.basilia@bfi.co.id','b828eaa29fb0476a5cf11473b40994c0',7,'Administrator',1,46,'2019-09-02 16:22:27',NULL),(167,'Sartika Nur','9016567','sartikanur150696@gmail.com','9bf89fcf8e9b04485447a07070c55bfd',1,'CMS',1,22,'2019-09-03 07:59:02',NULL),(168,'Azan Syahida','020251','azan.syahida@bfi.co.id','1b4cbd2b7defad1cd60d5e544125f8b7',5,'Administrator',1,46,'2019-09-03 08:25:44',NULL),(169,'Oky Noviyaldi','073255','oky.di91@gmail.com','b895a9ddd8f6db70af8b5cc4cd759005',1,'CMS',1,8,'2019-09-03 08:58:20',NULL),(170,'Yogie Saputra','9014943','sptrayogie15@gmail.com','b895a9ddd8f6db70af8b5cc4cd759005',1,'CMS',1,8,'2019-09-03 08:59:18',NULL),(171,'Rama andika','005418','rama.andika@bfi.co.id','ca9d3b236d051267fb2abf03814c311d',6,'Sharia Manager',1,39,'2019-09-03 10:37:14',NULL),(172,'Pevi Defitri','004299','pevi.defitri@bfi.co.id','1256dfebb311c8efcb1cea8888edb228',5,'Sharia Manager',1,46,'2019-09-03 14:38:32',NULL),(173,'Rini Nurhayati','006145','rini.nurhayati@bfi.co.id','f9a0fd5e898d77e82360dcabff946604',6,'Sharia Manager',1,5,'2019-09-03 16:11:19',NULL),(174,'Nisa Maharani','9017834','nisamaharani0102@gmail.com','d97a5461c2a9c54d5ae0ecc3a8dc83d1',1,'CMS',1,1,'2019-09-05 14:13:58',NULL),(175,'AMIN BUDIMAN','9017795','aminbudiman713@gmail.com','fd834fbb17e76d9dafd4e7bd3212215d',1,'CMS',1,19,'2019-09-05 15:44:23',NULL),(176,'Rudy Prastiyo','081722','rudyprastiyo66@gmail.com','bb02a63a9236fdc85898adf7e72642c7',1,'CMS',1,16,'2019-09-06 14:55:57',NULL),(177,'Raden Kurniawan','9017236','kurniawanraden33@gmail.com','58452144b4d2eeb31ab5db40d7f90575',1,'CMS',1,16,'2019-09-06 17:49:25',NULL),(178,'EVA MARIANA','004689','EVA.MARIANA@BFI.CO.ID','b5f33e72b4ddda4f24e41a2c6208d792',1,'CMS',1,16,'2019-09-09 18:17:36',NULL),(179,'kiki fatmawati','081751','sarinahkiki@gmail.com','fc97001351a5194d0d8f4707b5340c61',1,'CMS',1,10,'2019-09-10 08:12:28',NULL),(180,'Syaiin Erdiyanto','012973','syaiin.erdianto@bfi.co.id','db305d0ac9fab8cde84f9a24451d3b90',6,'Sharia Head',1,21,'2019-09-10 08:35:15',NULL),(181,'Teri Angraeni','073187','teri.angraeni@local.bfi.co.id','e10adc3949ba59abbe56e057f20f883e',2,'Administrator',1,46,'2019-09-12 08:35:32',NULL),(182,'Fitria ningsih','008342','naylakanti14@gmail.com','df73fe8a47f7100928e9e22cec9976a7',1,'CMS',1,24,'2019-09-18 10:18:21',NULL),(183,'azwida faqih','9017967','azwida.bfi@gmail.com','89cb40dc754dd95ac1d66777c2e2867f',1,'CMS',1,14,'2019-09-25 09:39:06',NULL),(184,'Eko Supriatman','073106','eko.supriatman@bfi.co.id','bb38bc4b2b35a5a194c29c805e56366c',5,'Administrator',1,46,'2019-09-25 14:03:40',NULL),(185,'Raraisa','073158','anggarams@ymail.com','e10adc3949ba59abbe56e057f20f883e',6,'Sharia Manager',1,7,'2019-09-26 10:14:37',NULL),(186,'UPI','9016870','upi025yvl@gmail.com','e78d7dc7320e76eff092280cfc73578e',1,'CMS',1,3,'2019-09-27 14:02:33',NULL),(187,'Admin BOM','000001','bom@admin.com','4ef63f3a32aba44229cfdb4efe66d6e8',8,'Administrator',1,7,'2019-11-07 08:54:46',NULL);

#
# Structure for table "mapping_partners"
#

CREATE TABLE `mapping_partners` (
  `id_mapping` int(11) NOT NULL AUTO_INCREMENT,
  `nama_usaha` varchar(255) NOT NULL,
  `bidang_usaha` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kategori_produk` varchar(255) NOT NULL,
  `catatan` text NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "mapping_partners"
#

INSERT INTO `mapping_partners` VALUES (1,'CV Aria Sabda','Garmen','Legok Indah','08982781277122','ibrahim.ahmad58@gmail.com','My Hajat','wafasd','2019-11-21 08:48:11','2019-11-21 08:48:11',8,26),(2,'PT DON','Narkotika','Legok Indah','08982781277121','don.sabda@gmail.com','My Talim','asdasd','2019-11-21 14:50:37','2019-11-21 14:50:37',8,26),(3,'asd','Narkotika','asd','089827812771212','ibrahim.ahmad528@gmail.com','My Talim','','2019-11-21 15:51:02','2019-11-21 15:51:02',8,26);

#
# Structure for table "partners"
#

CREATE TABLE `partners` (
  `id_partner` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pemilik` varchar(255) DEFAULT 'NULL',
  `kelurahan` varchar(255) DEFAULT 'NULL',
  `kecamatan` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(255) DEFAULT NULL,
  `hobi` varchar(255) DEFAULT NULL,
  `geotagging` text DEFAULT NULL,
  `bentuk_usaha` varchar(255) DEFAULT NULL COMMENT 'Perorangan / PD / CV / PT',
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
  `akhir_izin` date DEFAULT NULL COMMENT 'Muncul Kalau Kategori Produk My Ihram & My Safar',
  `status` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL COMMENT 'Form Upload File',
  `npwp` varchar(255) DEFAULT NULL COMMENT 'Form Upload File',
  `buku_tabungan_perusahaan` varchar(255) DEFAULT NULL COMMENT 'Form Upload File',
  `siup` varchar(255) DEFAULT NULL COMMENT 'Form Upload File',
  `logo_perusahaan` varchar(255) DEFAULT NULL COMMENT 'Form Upload File',
  `foto_usaha` varchar(255) DEFAULT NULL COMMENT 'Form Upload File',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_mapping` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_partner`),
  UNIQUE KEY `rekening_bank` (`rekening_bank`),
  KEY `id_mapping` (`id_mapping`),
  CONSTRAINT `partners_ibfk_1` FOREIGN KEY (`id_mapping`) REFERENCES `mapping_partners` (`id_mapping`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

#
# Data for table "partners"
#


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
  CONSTRAINT `partner_activities_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  CONSTRAINT `partner_activities_ibfk_2` FOREIGN KEY (`id_partner`) REFERENCES `partners` (`id_partner`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "partner_activities"
#


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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "maintain_partners"
#


#
# Structure for table "login_log"
#

CREATE TABLE `login_log` (
  `id_login_log` int(11) NOT NULL AUTO_INCREMENT,
  `login_date` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_login_log`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `login_log_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "login_log"
#

INSERT INTO `login_log` VALUES (1,'0000-00-00 00:00:00',26),(2,'2019-11-20 02:49:49',26),(3,'2019-11-21 05:33:42',26),(4,'2019-11-21 08:35:13',26),(5,'2019-11-21 08:39:01',26);

#
# Structure for table "comments"
#

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `parent_comment_id` int(11) NOT NULL DEFAULT 0,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `has_read` int(3) DEFAULT 0,
  `id_user` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_comment`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=1667 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# Data for table "comments"
#


#
# Structure for table "agents"
#

CREATE TABLE `agents` (
  `id_agent` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
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
  `punya_pinjaman` enum('Ya','Tidak') NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` int(3) NOT NULL,
  `id_branch` int(3) NOT NULL,
  PRIMARY KEY (`id_agent`),
  UNIQUE KEY `rekening_bank` (`rekening_bank`),
  UNIQUE KEY `ktp` (`no_ktp`),
  UNIQUE KEY `npwp` (`no_npwp`),
  KEY `id_user` (`id_user`),
  KEY `id_branch` (`id_branch`),
  CONSTRAINT `agents_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  CONSTRAINT `agents_ibfk_2` FOREIGN KEY (`id_branch`) REFERENCES `branches` (`id_branch`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "agents"
#


#
# Structure for table "tickets"
#

CREATE TABLE `tickets` (
  `id_ticket` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) NOT NULL,
  `ttd_pks` enum('Sudah','Belum') NOT NULL,
  `date_pending` datetime NOT NULL,
  `date_inprogress` datetime NOT NULL,
  `date_rejected` datetime NOT NULL,
  `date_completed` datetime NOT NULL,
  `id_partner` int(11) NOT NULL,
  `id_agent` int(11) NOT NULL,
  PRIMARY KEY (`id_ticket`),
  KEY `id_partner` (`id_partner`),
  KEY `id_agent` (`id_agent`),
  CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`id_partner`) REFERENCES `partners` (`id_partner`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`id_agent`) REFERENCES `agents` (`id_agent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tickets"
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "agent_activities"
#

