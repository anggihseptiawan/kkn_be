-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Aug 14, 2020 at 11:00 AM
-- Server version: 5.7.28
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `emails` varchar(50) NOT NULL DEFAULT '',
  `image` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(250) NOT NULL DEFAULT '',
  `is_active` int(11) NOT NULL DEFAULT '1',
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `name`, `emails`, `image`, `password`, `is_active`, `created_at`) VALUES
(3, 'Admin', 'admin@gmail.com', 'default.jpg', '$2y$10$umxUroKR2lDI11kiKFZz9uzr5PtQ4rS.tvxvSn1qtRSb4J9cY44HW', 1, '0000-00-00'),
(4, 'Dodi mulyono', 'dodi@gmail.com', 'default.jpg', '$2y$10$zb.tnYvCzaSFmXLQ8PybWezbyfrp/VlzeTxVSELsz.952WMiu17TK', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

DROP TABLE IF EXISTS `jenis`;
CREATE TABLE IF NOT EXISTS `jenis` (
  `jenis_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`jenis_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`jenis_id`, `kategori`, `nama`) VALUES
(3, 'Surat-Keterangan', 'Surat Keterangan Domisili'),
(4, 'Surat-Keterangan', 'Surat Keterangan Ahli Waris'),
(9, 'Surat-Keterangan', 'Surat Keterangan Pindah'),
(10, 'Surat-Keterangan', 'Surat Keterangan Kematian');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori`) VALUES
(1, 'Surat-Pengantar'),
(2, 'Surat-Keterangan'),
(3, 'Surat-Rekomendasi');

-- --------------------------------------------------------

--
-- Table structure for table `panduan`
--

DROP TABLE IF EXISTS `panduan`;
CREATE TABLE IF NOT EXISTS `panduan` (
  `panduan_id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(250) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `persyaratan` text NOT NULL,
  `mekanisme` text NOT NULL,
  `path` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`panduan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panduan`
--

INSERT INTO `panduan` (`panduan_id`, `judul`, `jenis`, `persyaratan`, `mekanisme`, `path`, `created_at`) VALUES
(3, 'Surat Keterangan Domisili', 'Surat-Keterangan-Domisili', '<ol><li>Surat permohonan yang menunjukkan keabsahan dokumen dan data (ditandatangani di atas materai Rp6.000)</li><li>Surat pengantar dari Ketua RT dan RW yang disesuaikan dengan data pada KTP</li><li>Surat kuasa jika pengurusan Surat Domisili diwakilkan dengan materai Rp6.000</li><li>Scan Kartu Tanda Penduduk (KTP) asli</li><li>Scan Kartu Keluarga (KK) asli</li><li>Pasfoto berukuran 3x4</li><li>Scan Akta Kelahiran Asli</li></ol>', '<ol><li>Datang ke rumah Ketua RT setempat untuk mendapatkan surat pengantar. Lalu, bawa ke Ketua RW untuk ditandatangani.</li><li>Isilah formulir permohonan Surat Keterangan Domisili pada formulir yang telah didownload</li><li>Upload formulir yang sudah diisi dan dokumen pendukung satukan dalam file .zip</li><li>Pemohon menunggu pengajuan diterima</li><li>Setelah diterima Surat Keterangan Domisili akan diterbitkan dan dapat dicetak</li></ol>', './uploads/2020/08/7316-Form_usaha-.pdf', '2020-08-14 06:47:51'),
(4, 'Surat Keterangan Ahli Waris', 'Surat-Keterangan-Ahli-Waris', '<ol><li>Surat permohonan (7 rangkap)</li><li>Fotokopi KTP para pemohon (ahli waris) menggunakan kertas A4</li><li>Fotokopi kartu keluarga pewaris (almarhum) menggunakan kertas A4</li><li>Fotokopi buku nikah pewaris (almarhum) menggunakan kertas A4</li><li>Keterangan silsilah keluarga ahli waris dari kelurahan</li><li>Surat keterangan kematian dan penguburan</li><li>Catatan sipil kematian</li><li>Fotokopi akta lahir seluruh ahli waris</li><li>Surat pernyataan sebagai ahli waris</li></ol>', '<ol><li>Datang ke rumah Ketua RT setempat untuk mendapatkan surat pengantar. Lalu, bawa ke Ketua RW untuk ditandatangani.</li><li>Isilah formulir permohonan Surat Keterangan Domisili pada formulir yang telah didownload</li><li>Upload formulir yang sudah diisi dan dokumen pendukung satukan dalam file .zip</li><li>Pemohon menunggu pengajuan diterima</li><li>Setelah diterima Surat Keterangan Domisili akan diterbitkan dan dapat dicetak</li></ol>', './uploads/2020/08/4429-Form_AHLI_WARIS.pdf', '2020-08-14 08:20:35'),
(5, 'Surat Keterangan Kematian', 'Surat-Keterangan-Kematian', '<ol><li>Surat Pengantar RT</li><li>Bukti Kematian : Surat Kematian dari Rumah Sakit</li><li>Scan Kartu Keluarga Asli &nbsp;</li><li>Scan KTP Asli yang meninggal</li><li>Fotocopy KTP yang meninggal 2 lembar</li><li>Fotocopy KTP Pelapor 2 lembar</li><li>Fotocopy KTP 2 orang Saksi Kematian masing-masing 2 lembar</li><li>Fotocopy KARIP (PNS/Pensiunan) 2 lembar</li></ol>', '<ol><li>Datang ke rumah Ketua RT setempat untuk mendapatkan surat pengantar. Lalu, bawa ke Ketua RW untuk ditandatangani.</li><li>Isilah formulir permohonan Surat Keterangan Domisili pada formulir yang telah didownload</li><li>Upload formulir yang sudah diisi dan dokumen pendukung satukan dalam file .zip</li><li>Pemohon menunggu pengajuan diterima</li><li>Setelah diterima Surat Keterangan Domisili akan diterbitkan dan dapat dicetak</li></ol>', './uploads/2020/08/7037-Form_Kematian.pdf', '2020-08-14 08:23:25'),
(6, 'Surat Keterangan Pindah', 'Surat-Keterangan-Pindah', '<ol><li>Surat pengantar RT/RW di alamat baru &nbsp;</li><li>Surat keterangan pindah dari Disdukcapil dari alamat sebelumnya &nbsp;</li><li>Surat domisili beserta fotokopi KTP tetangga terdekat dengan rumah baru. Apabila pemohon menumpang di rumah orang atau saudara, maka harus menyertakan fotokopi KTP kepala rumah tangga pemilik rumah yang ditumpangi pemohon.</li></ol>', '<ol><li>Datang ke rumah Ketua RT setempat untuk mendapatkan surat pengantar. Lalu, bawa ke Ketua RW untuk ditandatangani.</li><li>Isilah formulir permohonan Surat Keterangan Domisili pada formulir yang telah didownload</li><li>Upload formulir yang sudah diisi dan dokumen pendukung satukan dalam file .zip</li><li>Pemohon menunggu pengajuan diterima</li><li>Setelah diterima Surat Keterangan Domisili akan diterbitkan dan dapat dicetak</li></ol>', './uploads/2020/08/7063-Form_Pindah.pdf', '2020-08-14 08:25:03');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

DROP TABLE IF EXISTS `pengajuan`;
CREATE TABLE IF NOT EXISTS `pengajuan` (
  `pengajuan_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `path` varchar(255) NOT NULL,
  `path_admin` varchar(255) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`pengajuan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`pengajuan_id`, `user_id`, `jenis`, `keterangan`, `path`, `path_admin`, `feedback`, `created_at`, `status`) VALUES
(1, 1, 'Surat-Keterangan-Usaha', 'Ajukan', './uploads/pengajuan/2020/08/5506-FORMULIR CICILAN.xlsx', '', '', '2020-08-13 16:35:16', 0),
(2, 1, 'Surat-Keterangan-Usaha', 'ss', './uploads/pengajuan/2020/08/4528-FORMULIR CICILAN.xlsx', '', 'd', '2020-08-13 16:37:11', 2),
(3, 1, 'Surat-Keterangan-Ahli-Waris', 'tes ahli warus', './uploads/pengajuan/2020/08/7116-Form AHLI WARIS.pdf', '', 'll                    ', '2020-08-14 09:26:23', 2);

-- --------------------------------------------------------

--
-- Table structure for table `profil_desa`
--

DROP TABLE IF EXISTS `profil_desa`;
CREATE TABLE IF NOT EXISTS `profil_desa` (
  `profil_desa_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `total_penduduk` int(9) NOT NULL,
  `total_pria` int(9) NOT NULL,
  `total_wanita` int(9) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `gmaps` varchar(500) NOT NULL,
  PRIMARY KEY (`profil_desa_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_desa`
--

INSERT INTO `profil_desa` (`profil_desa_id`, `nama`, `alamat`, `telp`, `email`, `total_penduduk`, `total_pria`, `total_wanita`, `deskripsi`, `gmaps`) VALUES
(1, 'Cikolelet', 'Jl. Silet Km 6 Kp. Cibunut Desa Cikolelet Kecamatan Cinangka, Cikolelet, Kec. Cinangka, Serang, Banten 42167', '021-333-000', 'info@cikolelet.desa.id', 5106, 2653, 2453, 'Cikolelet adalah sebuah desa di wilayah kecamatan Cinangka Kabupaten Serang, Banten, Indonesia.', 'https://maps.google.com/maps?q=Kantor%20desa%20cikolelet&t=&z=13&ie=UTF8&iwloc=&output=embed');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `username`, `nohp`, `nik`, `nama_lengkap`, `gender`, `tmp_lahir`, `tgl_lahir`, `alamat`) VALUES
(1, 'admins@gmail.com', '$2y$10$YgKRrY8k5/SUzNryQvIcZOWbseqnWAXZf3zsb1EG8rWhfTnKtp2GC', 'admin', '927937242918', '1234567891234567', 'Anggih Septiawan', 'laki-laki', 'Tegal', '2020-07-25', 'test'),
(2, 'aldo@gmail.com', '$2y$10$IXTJoYJGu/sdkIqObABN2Oc84QpGpoJjv4.6G277wOhwt8EuEz.oa', 'aldo', '0939483984', '123456724567', 'Aldo Lesmana', 'laki-laki', 'Tegal', '1997-06-05', 'Jl. Kebayoran lama'),
(3, 'anggih@gmail.com', '$2y$10$HRiHM8vl6YyCACz5JAFfk.v3j5T7jd5FCHLaxbrhPL5f52B8jQujO', 'Anggih', '02382837827', '1234567891234567', 'Anggih Septiawan', 'laki-laki', 'Tegal', '1995-09-02', 'Tangerang'),
(4, 'alrosyid@gmail.com', '$2y$10$VyyEXzfELQiS5zAKjRUXP.2QGtU96asdlobcdVM/9Ra8uVDlp404K', 'alrosyid07', '085779995638', '3216111220596002', 'harun al rosyid', 'laki-laki', 'Jakarta', '1988-11-11', 'jakarta');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
