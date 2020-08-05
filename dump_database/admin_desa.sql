-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table admin_desa.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `image` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(250) NOT NULL DEFAULT '',
  `is_active` int(11) NOT NULL DEFAULT '1',
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table admin_desa.admin: ~1 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id_admin`, `name`, `email`, `image`, `password`, `is_active`, `created_at`) VALUES
	(3, 'Admin', 'admin@gmail.com', 'default.jpg', '$2y$10$umxUroKR2lDI11kiKFZz9uzr5PtQ4rS.tvxvSn1qtRSb4J9cY44HW', 1, '0000-00-00');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table admin_desa.panduan
CREATE TABLE IF NOT EXISTS `panduan` (
  `panduan_id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(250) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `path` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`panduan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table admin_desa.panduan: ~4 rows (approximately)
/*!40000 ALTER TABLE `panduan` DISABLE KEYS */;
INSERT INTO `panduan` (`panduan_id`, `judul`, `jenis`, `path`, `created_at`) VALUES
	(4, 'Test upload file 2', '', './uploads/2020/07/9965-Cost.pdf', '2020-07-23 15:02:24'),
	(5, 'Test upload file 3', '', './uploads/2020/07//3205-', '2020-07-23 15:07:34'),
	(6, 'Test upload file 4', 'Surat-Keterangan-Domisili', './uploads/2020/08/9246-Presentasi_PP-1.docx', '2020-07-25 16:40:27'),
	(7, 'Panduan Domisili', 'Surat-Keterangan-Domisili', './uploads/2020/08/6741-Presentasi_PP-1.docx', '2020-08-05 21:42:41'),
	(8, 'Panduan Surat Usaha', 'Surat-Keterangan-Usaha', './uploads/2020/08/metodlit_170101002.doc', '2020-08-05 21:49:38');
/*!40000 ALTER TABLE `panduan` ENABLE KEYS */;

-- Dumping structure for table admin_desa.surat
CREATE TABLE IF NOT EXISTS `surat` (
  `surat_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`surat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Dumping data for table admin_desa.surat: ~2 rows (approximately)
/*!40000 ALTER TABLE `surat` DISABLE KEYS */;
INSERT INTO `surat` (`surat_id`, `user_id`, `jenis`, `keterangan`, `path`, `created_at`, `status`) VALUES
	(18, 1, 'ktp', 'Nyobain KTP cuyy', './uploads/perizinan/2020/08/4784-Quis pengantar sistem informasi.docx', '2020-08-04 21:37:45', 0),
	(19, 1, 'surat-pindah', 'Ngajuin surat pindah', './uploads/perizinan/2020/08/5444-Quis pengantar sistem informasi.docx', '2020-08-04 21:47:53', 0),
	(20, 1, 'Surat-Keterangan-Usaha', 'Mengajukan surat keterangan usaha', './uploads/perizinan/2020/08/5703-Presentasi PP-1.docx', '2020-08-05 21:59:23', 0);
/*!40000 ALTER TABLE `surat` ENABLE KEYS */;

-- Dumping structure for table admin_desa.user
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table admin_desa.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`user_id`, `email`, `password`, `username`, `nohp`, `nik`, `nama_lengkap`, `gender`, `tmp_lahir`, `tgl_lahir`, `alamat`) VALUES
	(1, 'admin@gmail.com', '$2y$10$YgKRrY8k5/SUzNryQvIcZOWbseqnWAXZf3zsb1EG8rWhfTnKtp2GC', 'admin', '927937242918', '1234567891234567', 'Anggih Septiawan', 'laki-laki', 'Tegal', '2020-07-25', 'test');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
