-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 07:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dermanifest`
--
CREATE DATABASE IF NOT EXISTS `dermanifest` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dermanifest`;

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `activity` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `idUser`, `activity`, `description`, `createdAt`) VALUES
(1, 4, 'landing', 'user masuk ke halaman landing', '2020-12-24 14:45:47'),
(2, 4, 'melihat produk', 'user melihat list produk untuk dibeli', '2020-12-24 14:45:53'),
(3, 4, 'melihat detail', 'user melihat detail produk untuk dibeli', '2020-12-24 14:49:29'),
(4, 4, 'compare', 'user membandingkan produk', '2020-12-24 14:50:36'),
(5, 4, 'care guide', 'user masuk ke halaman care guide', '2020-12-24 14:50:50'),
(6, 4, 'cart', 'user masuk ke halaman cart', '2020-12-24 14:51:03'),
(7, 4, 'care guide', 'user masuk ke halaman care guide', '2020-12-24 14:51:15'),
(8, 4, 'onboarding', 'user masuk ke halaman onboarding', '2020-12-24 14:51:18'),
(9, 4, 'result', 'user masuk mengecek hasil onboarding', '2020-12-24 14:51:34'),
(10, 4, 'landing', 'user masuk ke halaman landing', '2020-12-24 14:51:41'),
(11, 4, 'logout', 'user log out dari akun dermanifest', '2020-12-24 14:51:44');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `nama`, `email`, `password`) VALUES
(1, 'admin', 'Team H ILKOM 19 UNJ', 'teamhilkom19unj@gmail.com', '$2y$10$cI.J8m93M7DPckNg8lIM6.Scl.v0t45c0PH1DYK4saDyCAA64h52u');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `konten` text NOT NULL,
  `banner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `nama`, `konten`, `banner`) VALUES
(13, '6 Produk Hydrating Toner Lokal untuk Kulit Lembap Maksimal. Kering atau Berminyak Bisa Jajal', '<p><i>Gambar: hydrating toner lokal | credit: Instagram @aubree.skin via https://www.instagram.com</i></p>\r\n<button onclick=\"window.location.href=\'https://www.hipwee.com/tips/hydrating-toner/\';\" class=\"selengkapnya\">Selengkapnya</button>', '6_Produk_Hydrating_Toner_Lokal_untuk_Kulit_Lembap.jpg'),
(14, '6 Skincare Korea yang Fokus Membasmi Komedo dan Jerawat. Bonusnya, Kulit Jadi Cerah!', '<p><i>Gambar: Korean beauty via http://asia.be.com</i></p>\r\n<button onclick=\"window.location.href=\'https://www.hipwee.com/style/skincare-korea-khusus-acne-prone-skin/\';\" class=\"selengkapnya\">Selengkapnya</button>', '6_Skincare_Korea_yang_Fokus_Membasmi_Komedo_dan_Je.jpg'),
(15, '7 Racikan Masker Tomat untuk Beragam Masalah Kulit. Bikin Cerah Wajah Hingga Kecilkan Pori', '<p><i>Gambar: DIY masker tomat | credit: Kazmulka via https://id.depositphotos.com</i></p>\r\n<button onclick=\"window.location.href=\'https://www.hipwee.com/tips/masker-tomat/\';\" class=\"selengkapnya\">Selengkapnya</button>', '7_Racikan_Masker_Tomat_untuk_Beragam_Masalah_Kulit.jpg'),
(16, 'Menghindari Kulit Kering dan Kusam? Yuk Intip Caranya', '<p><i>Gambar: kulit kering via http://www.mediajabar.com</i></p>\r\n<button onclick=\"window.location.href=\'https://www.hipwee.com/list/menghindari-kulit-kering-dan-kusam-yuk-intip-caranya/\';\" class=\"selengkapnya\">Selengkapnya</button>', 'Menghindari_Kulit_Kering_dan_Kusam_Yuk_Intip_Cara.jpg'),
(17, '7 Cara Simpel Cegah Kerutan di Wajah. Nggak Lagi Dibilang Muka Tua Padahal Usia Masih 20-an', '<p><i>Gambar: cegah kerutan via https://globalnews.ca</i></p>\r\n<button onclick=\"window.location.href=\'https://www.hipwee.com/tips/mencegah-kerutan-di-wajah/\';\" class=\"selengkapnya\">Selengkapnya</button>', 'cara_biar_ga_kerutan.jpg'),
(18, 'Cara Menghilangkan Komedo yang Membandel di Hidung Hingga Pipi, Baik yang Hitam Maupun Putih', '<p><i>Gambar: menghilangkan komedo via https://www.alodokter.com</i></p>\r\n<button onclick=\"window.location.href=\'https://www.hipwee.com/tips/cara-menghilangkan-komedo/\';\" class=\"selengkapnya\">Selengkapnya</button>', 'Cara_Menghilangkan_Komedo_yang_Membandel_di_Hidung.png'),
(19, 'Cara Mengecilkan Pori Pori Wajah yang Hasilnya Nyaris Instan. Mulus Berseri dalam Sebulan', '<p><i>Gambar: cara mengecilkan pori-pori wajah via https://parenting.firstcry.com</i></p>\r\n<button onclick=\"window.location.href=\'https://www.hipwee.com/tips/cara-mengecilkan-pori-pori/\';\" class=\"selengkapnya\">Selengkapnya</button>', 'Cara_Mengecilkan_Pori_Pori_Wajah_yang_Hasilnya_Nya.jpg'),
(20, 'Perjuangan Panjang Menemukan Skincare untuk Kulit Sensitif dan Berjerawat', '<p><i>Gambar: Freepik via https://www.freepik.com</i></p>\r\n<button onclick=\"window.location.href=\'https://www.hipwee.com/narasi/skincare-untuk-kulit-sensitif/\';\" class=\"selengkapnya\">Selengkapnya</button>', 'Perjuangan_Panjang_Menemukan_Skincare_untuk_Kulit.jpg'),
(21, 'Do’s and Don’ts Merawat Kulit Berminyak. Jangan Malas Kalau Nggak Pengen Terlihat Mengilap', '<p><i>Gambar: do\'s and don\'t kulit berminyak | Photo by Breakingpic via https://www.pexels.com</i></p>\r\n<button onclick=\"window.location.href=\'https://www.hipwee.com/tips/dos-and-dont-kulit-berminyak/\';\" class=\"selengkapnya\">Selengkapnya</button>', 'Dos_dont_berminyak.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artikel_jenis`
--

CREATE TABLE `artikel_jenis` (
  `idArtikel` int(11) NOT NULL,
  `idJenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artikel_jenis`
--

INSERT INTO `artikel_jenis` (`idArtikel`, `idJenis`) VALUES
(13, 2),
(13, 4),
(14, 2),
(14, 3),
(14, 5),
(15, 2),
(15, 3),
(15, 5),
(16, 1),
(16, 4),
(17, 1),
(17, 2),
(17, 3),
(17, 4),
(17, 5),
(18, 1),
(18, 2),
(18, 3),
(18, 4),
(18, 5),
(19, 1),
(19, 2),
(19, 3),
(19, 4),
(19, 5),
(20, 5),
(21, 2),
(21, 3),
(21, 5);

-- --------------------------------------------------------

--
-- Table structure for table `artikel_kondisi`
--

CREATE TABLE `artikel_kondisi` (
  `idArtikel` int(11) NOT NULL,
  `idKondisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artikel_kondisi`
--

INSERT INTO `artikel_kondisi` (`idArtikel`, `idKondisi`) VALUES
(13, 4),
(13, 6),
(13, 7),
(13, 8),
(13, 11),
(14, 4),
(14, 6),
(14, 7),
(14, 8),
(14, 11),
(15, 4),
(15, 6),
(15, 7),
(15, 8),
(15, 11),
(16, 8),
(17, 3),
(17, 5),
(17, 6),
(18, 7),
(18, 11),
(19, 4),
(19, 7),
(19, 11),
(20, 4),
(20, 7),
(20, 8),
(20, 11),
(21, 4),
(21, 6),
(21, 7),
(21, 8),
(21, 11);

-- --------------------------------------------------------

--
-- Table structure for table `artikel_warna`
--

CREATE TABLE `artikel_warna` (
  `idArtikel` int(11) NOT NULL,
  `idWarna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artikel_warna`
--

INSERT INTO `artikel_warna` (`idArtikel`, `idWarna`) VALUES
(13, 1),
(13, 2),
(13, 3),
(13, 4),
(14, 1),
(14, 2),
(14, 3),
(14, 4),
(15, 1),
(15, 2),
(15, 3),
(15, 4),
(16, 1),
(16, 2),
(16, 3),
(16, 4),
(17, 1),
(17, 2),
(17, 3),
(17, 4),
(18, 1),
(18, 2),
(18, 3),
(18, 4),
(19, 1),
(19, 2),
(19, 3),
(19, 4),
(20, 1),
(20, 2),
(20, 3),
(20, 4),
(21, 1),
(21, 2),
(21, 3),
(21, 4);

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` varchar(25) NOT NULL,
  `nama_prod` varchar(60) NOT NULL,
  `paraben` tinyint(1) NOT NULL,
  `alcohol` tinyint(1) NOT NULL,
  `fungal` tinyint(1) NOT NULL,
  `silicone` tinyint(1) NOT NULL,
  `sulfate` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `nama_prod`, `paraben`, `alcohol`, `fungal`, `silicone`, `sulfate`) VALUES
('prod_0egY5e2xMl3QnA', 'COSRX - AHA/BHA Clarifying Treatment Toner', 1, 1, 1, 1, 1),
('prod_7ZAMo1nLM5NJ4x', 'BENTON - Aloe BHA Skin Toner', 1, 1, 1, 1, 1),
('prod_8XO3wpJnx5YAzQ', 'THE ORDINARY  - Niacinamide 10% + Zinc 1%', 1, 1, 1, 1, 1),
('prod_bWZ3l8yYDwkpEQ', 'SOMETHINC - Niacinamide + Moisture Beet Serum', 1, 1, 0, 1, 1),
('prod_Op1YoV9rQwXLv9', 'THE ORDINARY - AHA 30% + BHA 2% Peeling Solution', 1, 1, 1, 1, 1),
('prod_ypbroEAkWo8n4e', 'SOMETHINC - AHA BHA PHA Peeling Solution', 1, 1, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kulit`
--

CREATE TABLE `jenis_kulit` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_kulit`
--

INSERT INTO `jenis_kulit` (`id`, `name`, `deskripsi`, `img`) VALUES
(1, 'Kulit Normal', 'Kulit cenderung sehat dan kenyal<br>Pori-pori terlihat normal', 'Normal.png'),
(2, 'Kulit Berminyak', 'Cenderung memiliki komedo<br>Terlihat mengkilap dan berminyak                                 <br>Memiliki pori-pori besar', 'Oily.png'),
(3, 'Kulit Kombinasi', 'Berminyak di area T-Zone<br>Normal atau kering di sebagian daerah', 'Combination.png'),
(4, 'Kulit Kering', 'Mudah bersisik<br>Cenderung memiliki garis halus', 'Dry.png'),
(5, 'Kulit Sensitif', 'Mudah kemerahan<br>Reaktif saat mencoba produk baru', 'Sensitive.png');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_kulit`
--

CREATE TABLE `kondisi_kulit` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kondisi_kulit`
--

INSERT INTO `kondisi_kulit` (`id`, `name`, `img`) VALUES
(1, 'Cellullite', '1.png'),
(2, 'Stretch Mark', '2.png'),
(3, 'Skin Tightening', '3.png'),
(4, 'Jerawat', '4.png'),
(5, 'Aging', '5.png'),
(6, 'Flek', '6.png'),
(7, 'Pori Besar', '7.png'),
(8, 'Kulit Kusam', '8.png'),
(9, 'Kantung Mata', '9.png'),
(10, 'Dark Circle', '10.png'),
(11, 'Komedo', '11.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `alamat` text DEFAULT NULL,
  `nomorTelepon` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `email`, `password`, `alamat`, `nomorTelepon`) VALUES
(1, 'qwerty', 'Farhan Abdurrahman Musa', 'famusa98@gmail.com', '$2y$10$cI.J8m93M7DPckNg8lIM6.Scl.v0t45c0PH1DYK4saDyCAA64h52u', NULL, NULL),
(3, 'kasipertanian', 'Indonesia - Inggris', 'famusa98@gmail.coms', '$2y$10$XX2vp9nN/WDBNVDAlSQIi.MLRtjGU.3yWUeaAMRWKS.2.k/GKERbG', NULL, NULL),
(4, 'anin_test', 'anindyooo', 'anin_test@gmail.com', '$2y$10$fC/55mCCh2AJZzHuXA/VNO2rA53i4h0UEielguQ3jzXUw38L89AP2', NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_artikel`
-- (See below for the actual view)
--
CREATE TABLE `v_artikel` (
`id` int(11)
,`nama` varchar(100)
,`konten` text
,`banner` text
,`idWarna` int(11)
,`namaWarna` varchar(30)
,`idJenis` int(11)
,`namaJenis` varchar(30)
,`idKondisi` mediumtext
,`namaKondisi` mediumtext
);

-- --------------------------------------------------------

--
-- Table structure for table `warna_kulit`
--

CREATE TABLE `warna_kulit` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `warna_kulit`
--

INSERT INTO `warna_kulit` (`id`, `name`, `img`) VALUES
(1, 'Kulit Putih', 'putih.png'),
(2, 'Kulit Kuning Langsat', 'kuning-langsat 1.png'),
(3, 'Kulit Sawo Matang', 'sawo-matang 1.png'),
(4, 'Kulit Gelap', 'Oval.png');

-- --------------------------------------------------------

--
-- Structure for view `v_artikel`
--
DROP TABLE IF EXISTS `v_artikel`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_artikel`  AS  select `a`.`id` AS `id`,`a`.`nama` AS `nama`,`a`.`konten` AS `konten`,`a`.`banner` AS `banner`,`w`.`idWarna` AS `idWarna`,`wk`.`name` AS `namaWarna`,`j`.`idJenis` AS `idJenis`,`jk`.`name` AS `namaJenis`,group_concat(`k`.`idKondisi` order by `k`.`idKondisi` ASC separator ';;') AS `idKondisi`,group_concat(`kk`.`name` order by `k`.`idKondisi` ASC separator ';;') AS `namaKondisi` from ((((((`artikel` `a` join `artikel_warna` `w` on(`a`.`id` = `w`.`idArtikel`)) join `warna_kulit` `wk` on(`w`.`idWarna` = `wk`.`id`)) join `artikel_kondisi` `k` on(`a`.`id` = `k`.`idArtikel`)) join `kondisi_kulit` `kk` on(`k`.`idKondisi` = `kk`.`id`)) join `artikel_jenis` `j` on(`a`.`id` = `j`.`idArtikel`)) join `jenis_kulit` `jk` on(`j`.`idJenis` = `jk`.`id`)) group by `a`.`id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_log_ibfk_1` (`idUser`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel_jenis`
--
ALTER TABLE `artikel_jenis`
  ADD PRIMARY KEY (`idArtikel`,`idJenis`),
  ADD KEY `idJenis` (`idJenis`);

--
-- Indexes for table `artikel_kondisi`
--
ALTER TABLE `artikel_kondisi`
  ADD PRIMARY KEY (`idArtikel`,`idKondisi`),
  ADD KEY `idKondisi` (`idKondisi`);

--
-- Indexes for table `artikel_warna`
--
ALTER TABLE `artikel_warna`
  ADD PRIMARY KEY (`idArtikel`,`idWarna`),
  ADD KEY `idWarna` (`idWarna`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_kulit`
--
ALTER TABLE `jenis_kulit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `kondisi_kulit`
--
ALTER TABLE `kondisi_kulit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `warna_kulit`
--
ALTER TABLE `warna_kulit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `jenis_kulit`
--
ALTER TABLE `jenis_kulit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kondisi_kulit`
--
ALTER TABLE `kondisi_kulit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `warna_kulit`
--
ALTER TABLE `warna_kulit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD CONSTRAINT `activity_log_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `artikel_jenis`
--
ALTER TABLE `artikel_jenis`
  ADD CONSTRAINT `artikel_jenis_ibfk_1` FOREIGN KEY (`idArtikel`) REFERENCES `artikel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `artikel_jenis_ibfk_2` FOREIGN KEY (`idJenis`) REFERENCES `jenis_kulit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `artikel_kondisi`
--
ALTER TABLE `artikel_kondisi`
  ADD CONSTRAINT `artikel_kondisi_ibfk_1` FOREIGN KEY (`idArtikel`) REFERENCES `artikel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `artikel_kondisi_ibfk_2` FOREIGN KEY (`idKondisi`) REFERENCES `kondisi_kulit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `artikel_warna`
--
ALTER TABLE `artikel_warna`
  ADD CONSTRAINT `artikel_warna_ibfk_1` FOREIGN KEY (`idArtikel`) REFERENCES `artikel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `artikel_warna_ibfk_2` FOREIGN KEY (`idWarna`) REFERENCES `warna_kulit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
