-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 16, 2021 at 08:33 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plb`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `date`, `desc`, `author`, `image`, `created_at`, `updated_at`, `type`) VALUES
(1, 'Penempatan Kerja', '2021-07-22', '<p><strong>Jakarta</strong>&nbsp;-&nbsp;</p><p>Bareskrim Polri menahan&nbsp;<a href=\"https://www.detik.com/tag/dr-lois\">dr Lois&nbsp;</a>yang tersandung kasus dugaan&nbsp;<a href=\"https://www.detik.com/tag/dr-lois\">hoax&nbsp;</a>tentang&nbsp;<a href=\"https://www.detik.com/tag/covid_19\">COVID-19</a>. dr Lois dipindahkan dari Polda Metro Jaya ke Bareskrim malam ini.</p><p>&quot;Laporan Dirtipidsiber (Brigjen Slamet Uliandi) dilakukan penahanan oleh penyidik,&quot; ujar Kabareskrim Polri Komjen Agus Andrianto saat dimintai konfirmasi detikcom, Senin (12/7/2021).</p>', 'LP3I', '1626102661.jpg', '2021-07-12 08:11:01', '2021-07-12 08:11:01', 'Event'),
(2, 'Pendaftaran Mahasiswa Baru', '2021-07-12', '<p><strong>Jakarta</strong>&nbsp;-&nbsp;</p><p>Bareskrim Polri menahan&nbsp;<a href=\"https://www.detik.com/tag/dr-lois\">dr Lois&nbsp;</a>yang tersandung kasus dugaan&nbsp;<a href=\"https://www.detik.com/tag/dr-lois\">hoax&nbsp;</a>tentang&nbsp;<a href=\"https://www.detik.com/tag/covid_19\">COVID-19</a>. dr Lois dipindahkan dari Polda Metro Jaya ke Bareskrim malam ini.</p><p>&quot;Laporan Dirtipidsiber (Brigjen Slamet Uliandi) dilakukan penahanan oleh penyidik,&quot; ujar Kabareskrim Polri Komjen Agus Andrianto saat dimintai konfirmasi detikcom, Senin (12/7/2021).</p>', 'LP3I', '1626102680.jpg', '2021-07-12 08:11:20', '2021-07-15 23:23:12', 'Event');

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE `campus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `campus_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `call_centre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `embedded_map` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`id`, `campus_name`, `call_centre`, `whatsapp`, `email`, `created_at`, `updated_at`, `desc`, `image`, `embedded_map`) VALUES
(1, 'Kampus Bandung', '231231412', '23141231', 'it1@plb.ac.id', '2021-07-08 07:56:24', '2021-07-15 23:24:39', '<p><strong>Jenjang Pendidikan</strong></p><p>Kampus ini adalah Politeknik LP3I. Apa itu Politeknik LP3I?</p><p>Politeknik LP3I adalah tempat kuliah vokasi dengan ilmu terapan. Disini, jenjang pendidikan yang kamu terima adalah D3 dan akan ditempuh selama 3 tahun. Setiap lulusan dari Politeknik LP3I akan dibekali dengan skill terapan yang spesifik dan lulusannya akan mendapatkan ijazah D3.</p><p><strong>Program Studi</strong></p><ul><li><a href=\"https://www.lp3i.ac.id/program-studi/anak-business/administrasi-bisnis/\">Administrasi Bisnis</a></li><li><a href=\"https://www.lp3i.ac.id/program-studi/anak-finance/komputerisasi-akuntansi/\">Akuntansi Keuangan</a></li><li><a href=\"https://www.lp3i.ac.id/lokasi/poltek-lp3i-bandung/#\">Akuntansi Perpajakan</a></li><li><a href=\"https://www.lp3i.ac.id/program-studi/anak-technology/informatic-computer/\">Informatika Komputer</a></li><li><a href=\"https://www.lp3i.ac.id/lokasi/poltek-lp3i-bandung/#\">Multimedia Design</a></li><li><a href=\"https://www.lp3i.ac.id/program-studi/anak-marketing/public-relation/\">Hubungan Masyarakat</a></li></ul>', '1625756184.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.948416451181!2d107.63178251477271!3d-6.896773495016528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7baae62541f%3A0x81891c4091b650bb!2sJl.%20Pahlawan%20No.59%2C%20Sukaluyu%2C%20Kec.%20Cibeunying%20Kaler%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040123!5e0!3m2!1sid!2sid!4v1625756173254!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `created_at`, `updated_at`, `name`) VALUES
(12, '1625736492.jpg', '2021-07-08 02:28:12', '2021-07-08 02:28:12', 'Pendaftaran PLB'),
(13, '1625736709.jpg', '2021-07-08 02:31:49', '2021-07-08 02:31:49', 'Gratis');

-- --------------------------------------------------------

--
-- Table structure for table `ipaddress`
--

CREATE TABLE `ipaddress` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` double NOT NULL,
  `lon` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_02_04_125119_article', 1),
(6, '2021_02_04_125202_blog', 1),
(7, '2021_02_04_125254_campus', 1),
(8, '2021_02_04_125322_course', 1),
(9, '2021_02_04_125350_review', 1),
(10, '2021_02_04_131750_add_desc_campus', 1),
(11, '2021_02_08_163310_image_column', 1),
(12, '2021_02_10_095858_drop_column_idcampus', 1),
(13, '2021_02_10_100405_add_image_courses', 1),
(14, '2021_02_12_093850_added_articles_column', 1),
(15, '2021_02_21_150650_dropcolumncourses', 1),
(16, '2021_02_21_150836_addcoursesbooleancampus', 1),
(17, '2021_02_23_102149_add_details_articles', 1),
(18, '2021_03_02_195130_add_user_role', 1),
(19, '2021_03_08_143629_added_embedded_map_campus', 1),
(20, '2021_03_08_145645_change_embedded_map_column', 1),
(21, '2021_03_09_092726_create_visitor_table', 1),
(22, '2021_04_02_065720_ipgeolocation', 1),
(23, '2021_04_16_140317_slider', 1),
(24, '2021_05_02_141133_drop_columns_article', 1),
(25, '2021_05_02_143929_remove_another_information', 1),
(26, '2021_05_02_145154_drop_table_blog', 1),
(27, '2021_05_02_145954_add_column_slider', 1),
(28, '2021_05_02_154106_added_name_slider', 1),
(29, '2021_05_04_142448_create_partner_table', 1),
(30, '2021_05_04_151428_change_desc_column', 1),
(31, '2021_05_15_071011_create_ukm_table', 1),
(32, '2021_05_15_071048_create_prodi_table', 1),
(33, '2021_05_16_093044_drop_foreign_prodi', 1),
(34, '2021_05_16_130156_create_article_types', 1),
(35, '2021_05_30_171041_create_struktur_organisasi', 1),
(36, '2021_06_11_084244_add_akreditasi_prodi', 1),
(37, '2021_07_03_163417_gallery', 2),
(38, '2021_07_04_083739_update_prodi_table', 3),
(39, '2021_07_08_091841_added_name_gallery', 4),
(40, '2021_07_08_142702_add_testimonial_prodi', 5),
(42, '2021_07_08_144419_remove_column_prodi_campus', 6),
(43, '2021_07_09_064104_add_potensi_karir_column', 7);

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `akreditasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `potensi_karir` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `image`, `name`, `created_at`, `updated_at`, `akreditasi`, `desc`, `certificate`, `potensi_karir`) VALUES
(5, '1625246351.png', 'Administrasi Bisnis', '2021-07-02 10:19:11', '2021-07-09 00:22:36', 'A', '<p>Program Studi</p><p><strong><a href=\"https://www.lp3i.ac.id/program-studi/anak-business/administrasi-bisnis/\">Administrasi Bisnis</a></strong><br />Dalam program studi ini, Kamu akan mempelajari segala sesuatu terkait kegiatan operasional bisnis dan perusahaan. Kamu juga akan mempelajari bagaimana mengelola administrasi bisnis pada perdagangan, baik domestik maupun internasional. Administrasi Bisnis pastinya juga mempelajari segala hal krusial kantor, seperti penyusunan arus kas dan laporan keuangan.</p><p>Tidak hanya itu, kamu akan mempelajari etika yang baik di lingkungan perusahaan dan bagaimana berkomunikasi secara efektif menggunakan bahasa inggris</p><p><strong><a href=\"https://www.lp3i.ac.id/program-studi/anak-business/manajemen-perkantoran/\">Manajemen Perkantoran</a></strong><br />Kamu akan mempelajari bagaimana mengelola aktivitas ketatausahaan secara menyeluruh dari suatu kantor untuk mencapai tujuan dengan efektifitas dan efisiensi yang tinggi. Kemudian kemampuanmu dalam menjalankan sistem akan di asah dengan baik, kamu juga akan mengelola administrasi dan membuat program manajemen perusahaan, memahami konsep dasar sistem dan pelaporan perpajakan, serta mampu memperbarui wawasan agar tidak tertinggal dengan hal yang sedang trendi.</p><p><strong><a href=\"https://www.lp3i.ac.id/program-studi/anak-business/manajemen-perhotelan/\">Manajemen Perhotelan</a></strong><br />Peserta didik akan mendapatkan skill dalam mengelola industri perhotelan dalam hal memberi pelayanan kepada konsumen baik dari aspek tata graha maupun penyajian makanan. Kemudian memahami konsep dalam membuat acara dengan berbagai skala serta mampu menggunakan bahasa inggris dengan baik dan benar untuk berkomunikasi secara lisan maupun tulisan.</p><p><strong><a href=\"https://www.lp3i.ac.id/program-studi/anak-business/sekretaris/\">Sekretaris</a></strong><br />Dalam program studi ini, Kamu akan mempelajari bagaimana cara menjadi tenaga ahli yang kompeten dalam menulis, membaca dan berkomunikasi dengan beragam bahasa serta mampu untuk mengadministrasikan secara komputerisasi baik dalam pekerjaan kantor ataupun keuangan.</p>', 'cer-1625409076.jpg', '<p><a href=\"https://www.lp3i.ac.id/program-studi/anak-business/administrasi-business/\">Administrasi Bisnis</a><br />Ini peluang karir untuk kamu!<br />Tenaga administrasi ekspor dan impor, administrasi keuangan, administrasi perpajakan, penyelia pemasaran dan penjualan dan sebagai wirausaha</p><p><a href=\"https://www.lp3i.ac.id/program-studi/anak-business/administrasi-business-internasional/\">Administrasi Bisnis Internasional</a><br />Ini peluang karir untuk kamu!<br />Tenaga ahli ekspor dan impor, penyelia pemasaran dan penjualan dan sebagai wirausaha</p><p><a href=\"https://www.lp3i.ac.id/program-studi/anak-business/manajemen-logistik/\">Manajemen Logistik</a><br />Ini peluang karir untuk kamu!<br />Penyelia impor dan ekspor, administrasi pembelian, supply chain supervisor dan sebagai wirausaha</p><p><a href=\"https://www.lp3i.ac.id/program-studi/anak-business/manajemen-perkantoran/\">Manajemen Perkantoran</a><br />Ini peluang karir untuk kamu!<br />Tenaga administrasi HRD, administrasi urusan umum, administrasi perkantoran, administrasi keuangan dan perpajakan dan sebagai wirausaha</p><p><a href=\"https://www.lp3i.ac.id/program-studi/anak-business/manajemen-perhotelan/\">Manajemen Perhotelan</a><br />Ini peluang karir untuk kamu!<br />Tenaga untuk front office, relasi tamu, housekeeping dan restoran dan sebagai wirausaha</p><p><a href=\"https://www.lp3i.ac.id/program-studi/anak-business/sekretaris/\">Sekretaris</a><br />Ini peluang karir untuk kamu!<br />Tenaga administrasi kesekretariatan, asisten pribadi, administrator berbasis ICT, customer service, sekretaris junior, protokoler dan wirausaha</p>'),
(6, '1625246375.png', 'MI', '2021-07-02 10:19:35', '2021-07-04 02:03:03', 'A', '<p>Merupakan program studi yang sangat cocok bagi kamu yang ingin menjadi seorang programmer ataupun pengembang aplikasi</p>', 'cer-1625389346.jpg', ''),
(7, '1625246388.png', 'Akuntansi', '2021-07-02 10:19:48', '2021-07-02 10:19:48', 'B', '', '', ''),
(8, '1625246434.png', 'Hubungan Masyarakat', '2021-07-02 10:20:07', '2021-07-02 10:20:34', 'C', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prodi_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `title`, `name`, `desc`, `image`, `position`, `created_at`, `updated_at`, `prodi_id`) VALUES
(2, 'LP#I Merubah Hidup Saya', 'Rayhan Rahmat Aziz Gamawanto', 'Pokok E Joget', '1625755334.jpg', 'Mobile Developer', '2021-07-08 07:42:14', '2021-07-08 08:05:59', 5),
(3, 'LP#I Merubah Hidup Saya 2', 'Ai tiya', 'Pokok e jogetttttttttt', '1625925128.jpg', 'Mobile Developer', '2021-07-10 06:52:08', '2021-07-10 06:52:08', 5);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hasLink` tinyint(1) NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `filename`, `created_at`, `updated_at`, `hasLink`, `link`, `name`) VALUES
(11, '1625237228.jpg', '2021-07-02 07:47:08', '2021-07-02 07:47:08', 0, 'no link', 'Bagus'),
(13, '1625492483.png', '2021-07-05 06:41:23', '2021-07-05 06:41:23', 0, 'no link', 'bandung');

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ukm`
--

CREATE TABLE `ukm` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ukm`
--

INSERT INTO `ukm` (`id`, `image`, `name`, `desc`, `created_at`, `updated_at`) VALUES
(1, '1626416739.png', 'ICON', '<p>Merupakan UKM yang berfokus di bidang IT</p>', '2021-07-15 23:25:39', '2021-07-15 23:25:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `adress`, `profile_pic`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Admin', 'Politeknik LP3I Bandung', 'jl. Pahlawan No 59, Bandung, Jawa Barat', NULL, 'it1@plb.ac.id', '2021-06-23 10:10:44', '$2y$10$7jcVWq0nnkiwPcQRvTk5c.PnFLpRZz8GWbSmcKMZ9Qcs7VH0275GS', NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `created_at`, `updated_at`) VALUES
(1, '2021-07-01 18:02:41', '2021-07-01 18:02:41'),
(2, '2021-07-01 18:11:53', '2021-07-01 18:11:53'),
(3, '2021-07-01 18:12:41', '2021-07-01 18:12:41'),
(4, '2021-07-01 21:56:35', '2021-07-01 21:56:35'),
(5, '2021-07-01 22:01:53', '2021-07-01 22:01:53'),
(6, '2021-07-01 22:15:32', '2021-07-01 22:15:32'),
(7, '2021-07-01 22:22:59', '2021-07-01 22:22:59'),
(8, '2021-07-01 22:23:01', '2021-07-01 22:23:01'),
(9, '2021-07-01 22:23:18', '2021-07-01 22:23:18'),
(10, '2021-07-01 22:25:11', '2021-07-01 22:25:11'),
(11, '2021-07-01 22:25:41', '2021-07-01 22:25:41'),
(12, '2021-07-01 22:26:34', '2021-07-01 22:26:34'),
(13, '2021-07-01 22:27:21', '2021-07-01 22:27:21'),
(14, '2021-07-01 22:27:29', '2021-07-01 22:27:29'),
(15, '2021-07-01 22:28:05', '2021-07-01 22:28:05'),
(16, '2021-07-01 22:28:48', '2021-07-01 22:28:48'),
(17, '2021-07-01 22:29:36', '2021-07-01 22:29:36'),
(18, '2021-07-01 22:33:02', '2021-07-01 22:33:02'),
(19, '2021-07-01 22:33:16', '2021-07-01 22:33:16'),
(20, '2021-07-01 22:33:47', '2021-07-01 22:33:47'),
(21, '2021-07-01 22:33:52', '2021-07-01 22:33:52'),
(22, '2021-07-01 22:34:12', '2021-07-01 22:34:12'),
(23, '2021-07-01 22:34:42', '2021-07-01 22:34:42'),
(24, '2021-07-01 22:35:48', '2021-07-01 22:35:48'),
(25, '2021-07-01 22:36:09', '2021-07-01 22:36:09'),
(26, '2021-07-01 22:36:13', '2021-07-01 22:36:13'),
(27, '2021-07-01 22:36:26', '2021-07-01 22:36:26'),
(28, '2021-07-01 22:38:12', '2021-07-01 22:38:12'),
(29, '2021-07-01 22:38:41', '2021-07-01 22:38:41'),
(30, '2021-07-01 22:39:05', '2021-07-01 22:39:05'),
(31, '2021-07-01 22:39:22', '2021-07-01 22:39:22'),
(32, '2021-07-01 22:40:19', '2021-07-01 22:40:19'),
(33, '2021-07-01 22:43:29', '2021-07-01 22:43:29'),
(34, '2021-07-01 23:10:49', '2021-07-01 23:10:49'),
(35, '2021-07-01 23:12:23', '2021-07-01 23:12:23'),
(36, '2021-07-01 23:12:42', '2021-07-01 23:12:42'),
(37, '2021-07-01 23:13:02', '2021-07-01 23:13:02'),
(38, '2021-07-01 23:13:33', '2021-07-01 23:13:33'),
(39, '2021-07-01 23:14:00', '2021-07-01 23:14:00'),
(40, '2021-07-01 23:14:29', '2021-07-01 23:14:29'),
(41, '2021-07-01 23:15:07', '2021-07-01 23:15:07'),
(42, '2021-07-01 23:15:12', '2021-07-01 23:15:12'),
(43, '2021-07-01 23:16:02', '2021-07-01 23:16:02'),
(44, '2021-07-01 23:26:59', '2021-07-01 23:26:59'),
(45, '2021-07-01 23:27:37', '2021-07-01 23:27:37'),
(46, '2021-07-01 23:27:42', '2021-07-01 23:27:42'),
(47, '2021-07-01 23:28:35', '2021-07-01 23:28:35'),
(48, '2021-07-01 23:28:58', '2021-07-01 23:28:58'),
(49, '2021-07-01 23:29:04', '2021-07-01 23:29:04'),
(50, '2021-07-01 23:29:29', '2021-07-01 23:29:29'),
(51, '2021-07-01 23:29:45', '2021-07-01 23:29:45'),
(52, '2021-07-01 23:30:06', '2021-07-01 23:30:06'),
(53, '2021-07-01 23:31:19', '2021-07-01 23:31:19'),
(54, '2021-07-01 23:31:31', '2021-07-01 23:31:31'),
(55, '2021-07-01 23:32:01', '2021-07-01 23:32:01'),
(56, '2021-07-01 23:32:04', '2021-07-01 23:32:04'),
(57, '2021-07-02 07:10:47', '2021-07-02 07:10:47'),
(58, '2021-07-02 07:16:33', '2021-07-02 07:16:33'),
(59, '2021-07-02 07:19:12', '2021-07-02 07:19:12'),
(60, '2021-07-02 07:20:25', '2021-07-02 07:20:25'),
(61, '2021-07-02 07:22:35', '2021-07-02 07:22:35'),
(62, '2021-07-02 07:22:57', '2021-07-02 07:22:57'),
(63, '2021-07-02 07:23:54', '2021-07-02 07:23:54'),
(64, '2021-07-02 07:24:21', '2021-07-02 07:24:21'),
(65, '2021-07-02 07:24:42', '2021-07-02 07:24:42'),
(66, '2021-07-02 07:25:17', '2021-07-02 07:25:17'),
(67, '2021-07-02 07:25:19', '2021-07-02 07:25:19'),
(68, '2021-07-02 07:25:28', '2021-07-02 07:25:28'),
(69, '2021-07-02 07:29:42', '2021-07-02 07:29:42'),
(70, '2021-07-02 07:30:12', '2021-07-02 07:30:12'),
(71, '2021-07-02 07:30:39', '2021-07-02 07:30:39'),
(72, '2021-07-02 07:30:58', '2021-07-02 07:30:58'),
(73, '2021-07-02 07:31:10', '2021-07-02 07:31:10'),
(74, '2021-07-02 07:32:03', '2021-07-02 07:32:03'),
(75, '2021-07-02 07:32:27', '2021-07-02 07:32:27'),
(76, '2021-07-02 07:34:26', '2021-07-02 07:34:26'),
(77, '2021-07-02 07:47:17', '2021-07-02 07:47:17'),
(78, '2021-07-02 07:52:30', '2021-07-02 07:52:30'),
(79, '2021-07-02 08:21:01', '2021-07-02 08:21:01'),
(80, '2021-07-02 09:55:41', '2021-07-02 09:55:41'),
(81, '2021-07-02 09:56:05', '2021-07-02 09:56:05'),
(82, '2021-07-02 09:56:48', '2021-07-02 09:56:48'),
(83, '2021-07-02 10:11:41', '2021-07-02 10:11:41'),
(84, '2021-07-02 10:12:02', '2021-07-02 10:12:02'),
(85, '2021-07-02 10:14:12', '2021-07-02 10:14:12'),
(86, '2021-07-02 10:20:12', '2021-07-02 10:20:12'),
(87, '2021-07-02 10:20:41', '2021-07-02 10:20:41'),
(88, '2021-07-02 10:22:06', '2021-07-02 10:22:06'),
(89, '2021-07-02 10:22:23', '2021-07-02 10:22:23'),
(90, '2021-07-02 10:22:37', '2021-07-02 10:22:37'),
(91, '2021-07-02 10:24:47', '2021-07-02 10:24:47'),
(92, '2021-07-02 10:24:50', '2021-07-02 10:24:50'),
(93, '2021-07-02 10:25:20', '2021-07-02 10:25:20'),
(94, '2021-07-02 10:25:52', '2021-07-02 10:25:52'),
(95, '2021-07-02 10:25:56', '2021-07-02 10:25:56'),
(96, '2021-07-02 10:26:47', '2021-07-02 10:26:47'),
(97, '2021-07-02 10:27:17', '2021-07-02 10:27:17'),
(98, '2021-07-02 10:27:26', '2021-07-02 10:27:26'),
(99, '2021-07-02 10:28:12', '2021-07-02 10:28:12'),
(100, '2021-07-02 10:28:42', '2021-07-02 10:28:42'),
(101, '2021-07-02 10:28:44', '2021-07-02 10:28:44'),
(102, '2021-07-02 10:28:52', '2021-07-02 10:28:52'),
(103, '2021-07-02 10:28:56', '2021-07-02 10:28:56'),
(104, '2021-07-02 10:29:04', '2021-07-02 10:29:04'),
(105, '2021-07-02 10:29:06', '2021-07-02 10:29:06'),
(106, '2021-07-02 10:30:42', '2021-07-02 10:30:42'),
(107, '2021-07-02 10:34:26', '2021-07-02 10:34:26'),
(108, '2021-07-02 10:35:04', '2021-07-02 10:35:04'),
(109, '2021-07-02 10:35:28', '2021-07-02 10:35:28'),
(110, '2021-07-02 10:35:30', '2021-07-02 10:35:30'),
(111, '2021-07-02 10:35:33', '2021-07-02 10:35:33'),
(112, '2021-07-02 10:36:49', '2021-07-02 10:36:49'),
(113, '2021-07-02 10:37:10', '2021-07-02 10:37:10'),
(114, '2021-07-02 10:37:33', '2021-07-02 10:37:33'),
(115, '2021-07-02 10:38:21', '2021-07-02 10:38:21'),
(116, '2021-07-02 10:38:44', '2021-07-02 10:38:44'),
(117, '2021-07-02 10:38:56', '2021-07-02 10:38:56'),
(118, '2021-07-02 10:39:08', '2021-07-02 10:39:08'),
(119, '2021-07-02 10:40:29', '2021-07-02 10:40:29'),
(120, '2021-07-02 10:41:02', '2021-07-02 10:41:02'),
(121, '2021-07-02 10:45:43', '2021-07-02 10:45:43'),
(122, '2021-07-02 10:59:18', '2021-07-02 10:59:18'),
(123, '2021-07-02 20:26:01', '2021-07-02 20:26:01'),
(124, '2021-07-02 22:06:34', '2021-07-02 22:06:34'),
(125, '2021-07-02 22:20:35', '2021-07-02 22:20:35'),
(126, '2021-07-03 21:32:09', '2021-07-03 21:32:09'),
(127, '2021-07-04 01:10:26', '2021-07-04 01:10:26'),
(128, '2021-07-04 01:13:00', '2021-07-04 01:13:00'),
(129, '2021-07-04 01:16:26', '2021-07-04 01:16:26'),
(130, '2021-07-04 01:24:30', '2021-07-04 01:24:30'),
(131, '2021-07-04 01:25:29', '2021-07-04 01:25:29'),
(132, '2021-07-04 01:36:47', '2021-07-04 01:36:47'),
(133, '2021-07-04 07:10:45', '2021-07-04 07:10:45'),
(134, '2021-07-04 07:18:57', '2021-07-04 07:18:57'),
(135, '2021-07-04 07:19:19', '2021-07-04 07:19:19'),
(136, '2021-07-04 07:22:10', '2021-07-04 07:22:10'),
(137, '2021-07-04 07:33:58', '2021-07-04 07:33:58'),
(138, '2021-07-04 07:34:13', '2021-07-04 07:34:13'),
(139, '2021-07-04 07:34:22', '2021-07-04 07:34:22'),
(140, '2021-07-04 07:44:36', '2021-07-04 07:44:36'),
(141, '2021-07-04 07:45:41', '2021-07-04 07:45:41'),
(142, '2021-07-04 07:45:52', '2021-07-04 07:45:52'),
(143, '2021-07-04 07:49:34', '2021-07-04 07:49:34'),
(144, '2021-07-04 08:07:11', '2021-07-04 08:07:11'),
(145, '2021-07-04 08:07:29', '2021-07-04 08:07:29'),
(146, '2021-07-04 08:12:02', '2021-07-04 08:12:02'),
(147, '2021-07-04 08:12:21', '2021-07-04 08:12:21'),
(148, '2021-07-05 06:39:39', '2021-07-05 06:39:39'),
(149, '2021-07-05 06:41:27', '2021-07-05 06:41:27'),
(150, '2021-07-05 06:43:38', '2021-07-05 06:43:38'),
(151, '2021-07-05 06:43:51', '2021-07-05 06:43:51'),
(152, '2021-07-05 06:45:45', '2021-07-05 06:45:45'),
(153, '2021-07-05 07:33:17', '2021-07-05 07:33:17'),
(154, '2021-07-05 07:35:28', '2021-07-05 07:35:28'),
(155, '2021-07-05 07:35:34', '2021-07-05 07:35:34'),
(156, '2021-07-05 07:35:36', '2021-07-05 07:35:36'),
(157, '2021-07-05 07:35:39', '2021-07-05 07:35:39'),
(158, '2021-07-05 07:44:54', '2021-07-05 07:44:54'),
(159, '2021-07-05 07:45:00', '2021-07-05 07:45:00'),
(160, '2021-07-05 07:45:01', '2021-07-05 07:45:01'),
(161, '2021-07-05 07:45:05', '2021-07-05 07:45:05'),
(162, '2021-07-05 07:47:29', '2021-07-05 07:47:29'),
(163, '2021-07-05 07:47:36', '2021-07-05 07:47:36'),
(164, '2021-07-05 07:48:16', '2021-07-05 07:48:16'),
(165, '2021-07-05 07:48:23', '2021-07-05 07:48:23'),
(166, '2021-07-05 07:48:24', '2021-07-05 07:48:24'),
(167, '2021-07-05 07:48:27', '2021-07-05 07:48:27'),
(168, '2021-07-05 07:54:23', '2021-07-05 07:54:23'),
(169, '2021-07-05 07:54:45', '2021-07-05 07:54:45'),
(170, '2021-07-05 07:54:52', '2021-07-05 07:54:52'),
(171, '2021-07-05 07:54:53', '2021-07-05 07:54:53'),
(172, '2021-07-05 07:54:56', '2021-07-05 07:54:56'),
(173, '2021-07-05 07:55:21', '2021-07-05 07:55:21'),
(174, '2021-07-05 07:55:27', '2021-07-05 07:55:27'),
(175, '2021-07-05 07:55:28', '2021-07-05 07:55:28'),
(176, '2021-07-05 07:55:32', '2021-07-05 07:55:32'),
(177, '2021-07-05 08:00:13', '2021-07-05 08:00:13'),
(178, '2021-07-05 08:01:02', '2021-07-05 08:01:02'),
(179, '2021-07-05 08:01:10', '2021-07-05 08:01:10'),
(180, '2021-07-05 08:01:18', '2021-07-05 08:01:18'),
(181, '2021-07-05 08:01:19', '2021-07-05 08:01:19'),
(182, '2021-07-05 08:01:22', '2021-07-05 08:01:22'),
(183, '2021-07-05 08:02:48', '2021-07-05 08:02:48'),
(184, '2021-07-05 08:03:32', '2021-07-05 08:03:32'),
(185, '2021-07-05 08:03:37', '2021-07-05 08:03:37'),
(186, '2021-07-05 08:03:44', '2021-07-05 08:03:44'),
(187, '2021-07-05 08:03:45', '2021-07-05 08:03:45'),
(188, '2021-07-05 08:03:49', '2021-07-05 08:03:49'),
(189, '2021-07-05 08:05:16', '2021-07-05 08:05:16'),
(190, '2021-07-05 08:08:28', '2021-07-05 08:08:28'),
(191, '2021-07-06 01:59:08', '2021-07-06 01:59:08'),
(192, '2021-07-06 02:01:52', '2021-07-06 02:01:52'),
(193, '2021-07-06 02:01:57', '2021-07-06 02:01:57'),
(194, '2021-07-06 02:02:49', '2021-07-06 02:02:49'),
(195, '2021-07-06 02:19:01', '2021-07-06 02:19:01'),
(196, '2021-07-06 07:12:13', '2021-07-06 07:12:13'),
(197, '2021-07-06 07:17:15', '2021-07-06 07:17:15'),
(198, '2021-07-06 07:27:23', '2021-07-06 07:27:23'),
(199, '2021-07-06 07:27:48', '2021-07-06 07:27:48'),
(200, '2021-07-06 07:27:56', '2021-07-06 07:27:56'),
(201, '2021-07-06 07:28:35', '2021-07-06 07:28:35'),
(202, '2021-07-06 07:31:21', '2021-07-06 07:31:21'),
(203, '2021-07-06 07:31:31', '2021-07-06 07:31:31'),
(204, '2021-07-06 07:32:14', '2021-07-06 07:32:14'),
(205, '2021-07-06 07:33:04', '2021-07-06 07:33:04'),
(206, '2021-07-06 07:35:27', '2021-07-06 07:35:27'),
(207, '2021-07-06 07:35:35', '2021-07-06 07:35:35'),
(208, '2021-07-06 07:36:31', '2021-07-06 07:36:31'),
(209, '2021-07-06 07:36:36', '2021-07-06 07:36:36'),
(210, '2021-07-06 07:38:39', '2021-07-06 07:38:39'),
(211, '2021-07-06 07:38:44', '2021-07-06 07:38:44'),
(212, '2021-07-06 07:40:03', '2021-07-06 07:40:03'),
(213, '2021-07-06 07:43:23', '2021-07-06 07:43:23'),
(214, '2021-07-06 07:43:49', '2021-07-06 07:43:49'),
(215, '2021-07-06 07:43:58', '2021-07-06 07:43:58'),
(216, '2021-07-06 07:44:04', '2021-07-06 07:44:04'),
(217, '2021-07-06 07:44:27', '2021-07-06 07:44:27'),
(218, '2021-07-06 07:44:39', '2021-07-06 07:44:39'),
(219, '2021-07-06 07:45:00', '2021-07-06 07:45:00'),
(220, '2021-07-06 07:45:06', '2021-07-06 07:45:06'),
(221, '2021-07-06 07:45:28', '2021-07-06 07:45:28'),
(222, '2021-07-06 07:46:17', '2021-07-06 07:46:17'),
(223, '2021-07-07 00:51:27', '2021-07-07 00:51:27'),
(224, '2021-07-07 01:45:10', '2021-07-07 01:45:10'),
(225, '2021-07-08 02:11:07', '2021-07-08 02:11:07'),
(226, '2021-07-08 02:17:58', '2021-07-08 02:17:58'),
(227, '2021-07-08 02:18:06', '2021-07-08 02:18:06'),
(228, '2021-07-08 02:33:27', '2021-07-08 02:33:27'),
(229, '2021-07-08 02:49:03', '2021-07-08 02:49:03'),
(230, '2021-07-08 05:03:49', '2021-07-08 05:03:49'),
(231, '2021-07-08 05:06:41', '2021-07-08 05:06:41'),
(232, '2021-07-08 07:23:52', '2021-07-08 07:23:52'),
(233, '2021-07-08 07:29:49', '2021-07-08 07:29:49'),
(234, '2021-07-08 07:31:07', '2021-07-08 07:31:07'),
(235, '2021-07-08 07:31:33', '2021-07-08 07:31:33'),
(236, '2021-07-08 07:31:49', '2021-07-08 07:31:49'),
(237, '2021-07-08 07:31:53', '2021-07-08 07:31:53'),
(238, '2021-07-08 07:32:07', '2021-07-08 07:32:07'),
(239, '2021-07-08 07:32:24', '2021-07-08 07:32:24'),
(240, '2021-07-08 07:32:29', '2021-07-08 07:32:29'),
(241, '2021-07-08 07:32:46', '2021-07-08 07:32:46'),
(242, '2021-07-08 07:34:26', '2021-07-08 07:34:26'),
(243, '2021-07-08 07:34:35', '2021-07-08 07:34:35'),
(244, '2021-07-08 07:35:10', '2021-07-08 07:35:10'),
(245, '2021-07-08 07:35:25', '2021-07-08 07:35:25'),
(246, '2021-07-08 07:37:27', '2021-07-08 07:37:27'),
(247, '2021-07-08 07:37:44', '2021-07-08 07:37:44'),
(248, '2021-07-08 07:38:31', '2021-07-08 07:38:31'),
(249, '2021-07-08 07:56:41', '2021-07-08 07:56:41'),
(250, '2021-07-08 08:04:01', '2021-07-08 08:04:01'),
(251, '2021-07-08 08:04:05', '2021-07-08 08:04:05'),
(252, '2021-07-08 08:04:11', '2021-07-08 08:04:11'),
(253, '2021-07-08 23:16:45', '2021-07-08 23:16:45'),
(254, '2021-07-08 23:21:16', '2021-07-08 23:21:16'),
(255, '2021-07-08 23:29:22', '2021-07-08 23:29:22'),
(256, '2021-07-08 23:34:02', '2021-07-08 23:34:02'),
(257, '2021-07-09 06:17:52', '2021-07-09 06:17:52'),
(258, '2021-07-09 06:29:48', '2021-07-09 06:29:48'),
(259, '2021-07-10 06:40:42', '2021-07-10 06:40:42'),
(260, '2021-07-11 05:22:53', '2021-07-11 05:22:53'),
(261, '2021-07-11 05:32:26', '2021-07-11 05:32:26'),
(262, '2021-07-11 09:05:55', '2021-07-11 09:05:55'),
(263, '2021-07-12 08:05:53', '2021-07-12 08:05:53'),
(264, '2021-07-12 08:11:30', '2021-07-12 08:11:30'),
(265, '2021-07-12 08:12:45', '2021-07-12 08:12:45'),
(266, '2021-07-12 08:30:09', '2021-07-12 08:30:09'),
(267, '2021-07-12 08:30:33', '2021-07-12 08:30:33'),
(268, '2021-07-12 09:37:41', '2021-07-12 09:37:41'),
(269, '2021-07-13 03:10:40', '2021-07-13 03:10:40'),
(270, '2021-07-13 03:15:54', '2021-07-13 03:15:54'),
(271, '2021-07-13 03:23:58', '2021-07-13 03:23:58'),
(272, '2021-07-13 03:26:21', '2021-07-13 03:26:21'),
(273, '2021-07-13 03:27:49', '2021-07-13 03:27:49'),
(274, '2021-07-13 03:28:02', '2021-07-13 03:28:02'),
(275, '2021-07-13 03:31:06', '2021-07-13 03:31:06'),
(276, '2021-07-14 01:32:47', '2021-07-14 01:32:47'),
(277, '2021-07-15 23:21:11', '2021-07-15 23:21:11'),
(278, '2021-07-15 23:25:54', '2021-07-15 23:25:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipaddress`
--
ALTER TABLE `ipaddress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_prodi_id_foreign` (`prodi_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ukm`
--
ALTER TABLE `ukm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `campus`
--
ALTER TABLE `campus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ipaddress`
--
ALTER TABLE `ipaddress`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ukm`
--
ALTER TABLE `ukm`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
