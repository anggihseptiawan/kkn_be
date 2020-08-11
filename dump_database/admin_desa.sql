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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table admin_desa.admin: ~1 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id_admin`, `name`, `email`, `image`, `password`, `is_active`, `created_at`) VALUES
	(3, 'Admin', 'admin@gmail.com', 'default.jpg', '$2y$10$umxUroKR2lDI11kiKFZz9uzr5PtQ4rS.tvxvSn1qtRSb4J9cY44HW', 1, '0000-00-00'),
	(4, 'Dodi mulyono', 'dodi@gmail.com', 'default.jpg', '$2y$10$zb.tnYvCzaSFmXLQ8PybWezbyfrp/VlzeTxVSELsz.952WMiu17TK', 1, '0000-00-00');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table admin_desa.layanan
CREATE TABLE IF NOT EXISTS `layanan` (
  `layanan_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`layanan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table admin_desa.layanan: ~7 rows (approximately)
/*!40000 ALTER TABLE `layanan` DISABLE KEYS */;
INSERT INTO `layanan` (`layanan_id`, `nama`) VALUES
	(1, 'Surat-Keterangan-Usaha'),
	(2, 'Surat-Keterangan-Pindah'),
	(3, 'Surat-Keterangan-Domisili'),
	(4, 'Surat-Keterangan-Tidak-Mampu'),
	(5, 'Surat-Keterangan-Kematian'),
	(6, 'Surat-Keterangan-Kartu-Keluarga'),
	(7, 'Surat-Keterangan-Ahli-Waris');
/*!40000 ALTER TABLE `layanan` ENABLE KEYS */;

-- Dumping structure for table admin_desa.mekanisme
CREATE TABLE IF NOT EXISTS `mekanisme` (
  `mekanisme_id` int(11) NOT NULL AUTO_INCREMENT,
  `layanan_id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`mekanisme_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table admin_desa.mekanisme: ~0 rows (approximately)
/*!40000 ALTER TABLE `mekanisme` DISABLE KEYS */;
INSERT INTO `mekanisme` (`mekanisme_id`, `layanan_id`, `deskripsi`) VALUES
	(1, 1, '<p>Mekanisme pengajuan surat keterangan usaha adalah sebagai berikut :</p><ol><li>Pemohon mengumpulkan berkas</li><li>Melengkapi data</li></ol>'),
	(2, 4, '<p>Mekanisme pembuatan surat keterangan tidak mampu&nbsp;</p><ol><li>Bismillah</li><li>Berdoa</li><li>Berusaha</li></ol>'),
	(3, 3, '<p>Mekanisme pembuatan surat keterangan domisili</p><ol><li>Bismillah</li><li>Berdoa&nbsp;</li><li>Lengkapi berkas</li></ol>');
/*!40000 ALTER TABLE `mekanisme` ENABLE KEYS */;

-- Dumping structure for table admin_desa.panduan
CREATE TABLE IF NOT EXISTS `panduan` (
  `panduan_id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(250) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `path` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`panduan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table admin_desa.panduan: ~0 rows (approximately)
/*!40000 ALTER TABLE `panduan` DISABLE KEYS */;
/*!40000 ALTER TABLE `panduan` ENABLE KEYS */;

-- Dumping structure for table admin_desa.persyaratan
CREATE TABLE IF NOT EXISTS `persyaratan` (
  `persyaratan_id` int(11) NOT NULL AUTO_INCREMENT,
  `layanan_id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`persyaratan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table admin_desa.persyaratan: ~7 rows (approximately)
/*!40000 ALTER TABLE `persyaratan` DISABLE KEYS */;
INSERT INTO `persyaratan` (`persyaratan_id`, `layanan_id`, `deskripsi`) VALUES
	(1, 1, '<p>Persyaratan pengajuan surat keterangan domisili adalah :</p><ol><li>Melampirkan KTP</li><li>Melampirkan surat pengantar dari RT/RW</li><li>csmcskmcks</li><li>msdkmskdm</li></ol>'),
	(2, 2, '<p>Persyaratan :</p><ol><li>Melampirkan surat permohonan</li><li>Melampirkan slip gaji</li></ol>'),
	(3, 6, '<p>Persyaratan pembuatan kartu keluarga</p><ol><li>Niat</li><li>Bismillah</li></ol>'),
	(4, 7, '<p>Masukkan Persyaratan</p><ol><li>Test</li><li>Test lagi</li><li>Nama ahli waris</li></ol>'),
	(5, 3, '<p>Persayaratan mengajukan surat domisili</p><ol><li>Melampirkan surat permohonan sesuai pedoman</li><li>Melampirkan KTP</li><li>Melampirkan Surat Pengantar RT/RW</li></ol>'),
	(7, 4, '<p>Persyaratan surat keterangan tidak mampu</p><ol><li>Melampirkan nganu</li><li>Melampirkan itu</li></ol>'),
	(8, 5, '<p>Masukkan Persyaratan sebagai kewajiban</p>');
/*!40000 ALTER TABLE `persyaratan` ENABLE KEYS */;

-- Dumping structure for table admin_desa.surat
CREATE TABLE IF NOT EXISTS `surat` (
  `surat_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `path` varchar(255) NOT NULL,
  `path_admin` varchar(255) DEFAULT NULL,
  `feedback` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`surat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table admin_desa.surat: ~3 rows (approximately)
/*!40000 ALTER TABLE `surat` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table admin_desa.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`user_id`, `email`, `password`, `username`, `nohp`, `nik`, `nama_lengkap`, `gender`, `tmp_lahir`, `tgl_lahir`, `alamat`) VALUES
	(1, 'admin@gmail.com', '$2y$10$YgKRrY8k5/SUzNryQvIcZOWbseqnWAXZf3zsb1EG8rWhfTnKtp2GC', 'admin', '927937242918', '1234567891234567', 'Anggih Septiawan', 'laki-laki', 'Tegal', '2020-07-25', 'test'),
	(2, 'aldo@gmail.com', '$2y$10$IXTJoYJGu/sdkIqObABN2Oc84QpGpoJjv4.6G277wOhwt8EuEz.oa', 'aldo', '0939483984', '123456724567', 'Aldo Lesmana', 'laki-laki', 'Tegal', '1997-06-05', 'Jl. Kebayoran lama'),
	(3, 'anggih@gmail.com', '$2y$10$HRiHM8vl6YyCACz5JAFfk.v3j5T7jd5FCHLaxbrhPL5f52B8jQujO', 'Anggih', '02382837827', '1234567891234567', 'Anggih Septiawan', 'laki-laki', 'Tegal', '1995-09-02', 'Tangerang');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
