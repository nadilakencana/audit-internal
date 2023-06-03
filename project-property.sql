-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 05:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-property`
--

-- --------------------------------------------------------

--
-- Table structure for table `bandungs`
--

CREATE TABLE `bandungs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(255) NOT NULL,
  `jenis_property` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `link_foto` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bandungs`
--

INSERT INTO `bandungs` (`id`, `ket`, `jenis_property`, `alamat`, `luas_tanah`, `luas_bangunan`, `sertifikat`, `harga`, `link_foto`, `link_maps`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 'aaa', 'xs', 'asfaf', 'fafa', 'fafs', 'vxz', 5000, 'dvvs', 'vdsvd', 'vdsvdsv', '2023-06-02 13:40:51', '2023-06-02 13:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `bekasis`
--

CREATE TABLE `bekasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(255) NOT NULL,
  `jenis_property` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `link_foto` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bekasis`
--

INSERT INTO `bekasis` (`id`, `ket`, `jenis_property`, `alamat`, `luas_tanah`, `luas_bangunan`, `sertifikat`, `harga`, `link_foto`, `link_maps`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 'fff', 'efse', 'asfaf', 'fafa', 'vxz', 'saff', 5000, 'dvvs', 'vdsvd', 'vdsvdsv', '2023-06-03 01:22:22', '2023-06-03 01:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `bogors`
--

CREATE TABLE `bogors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(255) NOT NULL,
  `jenis_property` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `link_foto` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bogors`
--

INSERT INTO `bogors` (`id`, `ket`, `jenis_property`, `alamat`, `luas_tanah`, `luas_bangunan`, `sertifikat`, `harga`, `link_foto`, `link_maps`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 'aaa', 'sac', 'asfaf', 'vxv', 'xcbb', 'vxz', 6000, 'dvvs', 'vdsvd', 'vdsvdsv', '2023-06-03 00:58:19', '2023-06-03 00:58:29'),
(2, 'rqwq', 'vdd', 'bfgb', 'fafa', 'fafs', 'vxz', 4000, 'dvvs', 'vdsvd', 'vdsvdsv', '2023-06-03 07:31:01', '2023-06-03 07:31:01');

-- --------------------------------------------------------

--
-- Table structure for table `cirebons`
--

CREATE TABLE `cirebons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(255) NOT NULL,
  `jenis_property` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `link_foto` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cirebons`
--

INSERT INTO `cirebons` (`id`, `ket`, `jenis_property`, `alamat`, `luas_tanah`, `luas_bangunan`, `sertifikat`, `harga`, `link_foto`, `link_maps`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 'aaa', 'sfs', 'asfaf', 'fafa', 'fafs', 'saff', 6000, 'dvvs', 'vdsvd', 'vdsvdsv', '2023-06-02 13:35:23', '2023-06-02 13:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `depoks`
--

CREATE TABLE `depoks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(255) NOT NULL,
  `jenis_property` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `link_foto` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jakpuses`
--

CREATE TABLE `jakpuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(255) NOT NULL,
  `jenis_property` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `link_foto` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jakpuses`
--

INSERT INTO `jakpuses` (`id`, `ket`, `jenis_property`, `alamat`, `luas_tanah`, `luas_bangunan`, `sertifikat`, `harga`, `link_foto`, `link_maps`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 'aaaa', 'gds', 'dsg', 'vxv', 'fafs', 'vxz', 4000, 'vx', 'vdsvd', 'vdsvdsv', '2023-06-03 00:56:55', '2023-06-03 00:57:07'),
(2, 'vvdv', 'sdcsdc', 'asfaf', 'fafa', 'vxz', 'vxz', 5000, 'dvvs', 'vdsvd', 'vdsvdsv', '2023-06-03 07:17:39', '2023-06-03 07:17:39');

-- --------------------------------------------------------

--
-- Table structure for table `jaksels`
--

CREATE TABLE `jaksels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(255) NOT NULL,
  `jenis_property` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `link_foto` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jaktims`
--

CREATE TABLE `jaktims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(255) NOT NULL,
  `jenis_property` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `link_foto` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jaktims`
--

INSERT INTO `jaktims` (`id`, `ket`, `jenis_property`, `alamat`, `luas_tanah`, `luas_bangunan`, `sertifikat`, `harga`, `link_foto`, `link_maps`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 'fdfdd', 'dsds', 'asfaf', 'vxv', 'vxz', 'vxz', 50000, 'dvvs', 'vdsvd', 'vdsvdsv', '2023-06-03 00:58:53', '2023-06-03 00:59:03');

-- --------------------------------------------------------

--
-- Table structure for table `jakuts`
--

CREATE TABLE `jakuts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(255) NOT NULL,
  `jenis_property` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `link_foto` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kabbekasis`
--

CREATE TABLE `kabbekasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(255) NOT NULL,
  `jenis_property` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `link_foto` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kabbekasis`
--

INSERT INTO `kabbekasis` (`id`, `ket`, `jenis_property`, `alamat`, `luas_tanah`, `luas_bangunan`, `sertifikat`, `harga`, `link_foto`, `link_maps`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 'vvdv', 'csdc', 'asfaf', 'vxv', 'fafs', 'saff', 4000, 'vx', 'vdsvd', 'vdsvdsv', '2023-06-03 01:25:25', '2023-06-03 01:25:25'),
(2, 'iiiii', 'fxb', 'bf', 'fafa', 'vxz', 'saff', 50000, 'dvvs', 'vdsvd', 'vdsvdsv', '2023-06-03 01:28:46', '2023-06-03 01:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `kabbogors`
--

CREATE TABLE `kabbogors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(255) NOT NULL,
  `jenis_property` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `link_foto` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kabbogors`
--

INSERT INTO `kabbogors` (`id`, `ket`, `jenis_property`, `alamat`, `luas_tanah`, `luas_bangunan`, `sertifikat`, `harga`, `link_foto`, `link_maps`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 'aaaaa', 'dsv', 'asfaf', 'fafa', 'fafs', 'saff', 50000, 'vx', 'vdsvd', 'vdsvdsv', '2023-06-03 01:03:03', '2023-06-03 01:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `karawangs`
--

CREATE TABLE `karawangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(255) NOT NULL,
  `jenis_property` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `link_foto` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karawangs`
--

INSERT INTO `karawangs` (`id`, `ket`, `jenis_property`, `alamat`, `luas_tanah`, `luas_bangunan`, `sertifikat`, `harga`, `link_foto`, `link_maps`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 'aaaaa', 'scaca', 'bfgb', 'fafa', 'fafs', 'saff', 50000, 'vx', 'vdsvd', 'vdsvdsv', '2023-06-02 13:40:04', '2023-06-02 13:40:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_06_02_064139_create_jakpuses_table', 1),
(5, '2023_06_02_080054_create_depoks_table', 1),
(6, '2023_06_02_080725_create_tangerangs_table', 1),
(7, '2023_06_02_083635_create_serangs_table', 1),
(8, '2023_06_02_092133_create_bogors_table', 1),
(9, '2023_06_02_100007_create_bekasis_table', 1),
(10, '2023_06_02_100515_create_ponorogos_table', 1),
(11, '2023_06_02_101112_create_sidoarjos_table', 1),
(12, '2023_06_02_104829_create_surabayas_table', 1),
(13, '2023_06_02_111417_create_pesawarans_table', 1),
(14, '2023_06_02_111732_create_cirebons_table', 1),
(15, '2023_06_02_112231_create_sukabumis_table', 1),
(16, '2023_06_02_113536_create_karawangs_table', 1),
(17, '2023_06_02_114155_create_bandungs_table', 1),
(18, '2023_06_02_172023_jaktims', 1),
(19, '2023_06_02_174516_create_jakuts_table', 1),
(20, '2023_06_02_180731_create_jaksels_table', 1),
(21, '2023_06_03_063754_create_tangkabs_table', 2),
(22, '2023_06_03_063936_create_tangsels_table', 2),
(23, '2023_06_03_064004_create_kabbogors_table', 2),
(24, '2023_06_03_080445_create_kabbekasis_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesawarans`
--

CREATE TABLE `pesawarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(255) NOT NULL,
  `jenis_property` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `link_foto` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesawarans`
--

INSERT INTO `pesawarans` (`id`, `ket`, `jenis_property`, `alamat`, `luas_tanah`, `luas_bangunan`, `sertifikat`, `harga`, `link_foto`, `link_maps`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 'aaa', 'dsa', 'bfgb', 'fafa', 'fafs', 'vxz', 50000, 'dvvs', 'vx', 'vdsvdsv', '2023-06-02 13:34:26', '2023-06-02 13:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `ponorogos`
--

CREATE TABLE `ponorogos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(255) NOT NULL,
  `jenis_property` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `link_foto` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ponorogos`
--

INSERT INTO `ponorogos` (`id`, `ket`, `jenis_property`, `alamat`, `luas_tanah`, `luas_bangunan`, `sertifikat`, `harga`, `link_foto`, `link_maps`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 'ssss', 'dvd', 'vdsd', 'fafa', 'fafs', 'saff', 4000, 'dvvs', 'vdsvd', 'vdsvdsv', '2023-06-02 13:31:05', '2023-06-02 13:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `serangs`
--

CREATE TABLE `serangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(255) NOT NULL,
  `jenis_property` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `link_foto` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `serangs`
--

INSERT INTO `serangs` (`id`, `ket`, `jenis_property`, `alamat`, `luas_tanah`, `luas_bangunan`, `sertifikat`, `harga`, `link_foto`, `link_maps`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 'aaaaa', 'dasd', 'bfgb', 'fafa', 'fafs', 'saff', 5000, 'dvvs', 'vdsvd', 'vdsvdsv', '2023-06-02 12:43:55', '2023-06-02 12:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `sidoarjos`
--

CREATE TABLE `sidoarjos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(255) NOT NULL,
  `jenis_property` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `link_foto` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sidoarjos`
--

INSERT INTO `sidoarjos` (`id`, `ket`, `jenis_property`, `alamat`, `luas_tanah`, `luas_bangunan`, `sertifikat`, `harga`, `link_foto`, `link_maps`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 'vvdv', 'aaa', 'bfgb', 'vxv', 'vxz', 'saff', 5000, 'dvvs', 'vdsvd', 'vdsvdsv', '2023-06-02 13:31:42', '2023-06-02 13:32:38');

-- --------------------------------------------------------

--
-- Table structure for table `sukabumis`
--

CREATE TABLE `sukabumis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(255) NOT NULL,
  `jenis_property` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `link_foto` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sukabumis`
--

INSERT INTO `sukabumis` (`id`, `ket`, `jenis_property`, `alamat`, `luas_tanah`, `luas_bangunan`, `sertifikat`, `harga`, `link_foto`, `link_maps`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 'aa', 'sdaa', 'bfgb', 'fafa', 'vxz', 'vxz', 50000, 'dvvs', 'vdsvd', 'vdsvdsv', '2023-06-02 13:38:49', '2023-06-02 13:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `surabayas`
--

CREATE TABLE `surabayas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(255) NOT NULL,
  `jenis_property` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `link_foto` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surabayas`
--

INSERT INTO `surabayas` (`id`, `ket`, `jenis_property`, `alamat`, `luas_tanah`, `luas_bangunan`, `sertifikat`, `harga`, `link_foto`, `link_maps`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 'aaaa', 'dsa', 'asfaf', 'fafa', 'fafs', 'vxz', 50000, 'dvvs', 'vdsvd', 'vdsvdsv', '2023-06-02 13:33:12', '2023-06-02 13:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `tangerangs`
--

CREATE TABLE `tangerangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(255) NOT NULL,
  `jenis_property` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `link_foto` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tangerangs`
--

INSERT INTO `tangerangs` (`id`, `ket`, `jenis_property`, `alamat`, `luas_tanah`, `luas_bangunan`, `sertifikat`, `harga`, `link_foto`, `link_maps`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 'jjjj', 'fsfs', 'bfgb', 'fafa', 'fafs', 'saff', 6000, 'dvvs', 'vdsvd', 'vdsvdsv', '2023-06-03 00:25:22', '2023-06-03 00:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `tangkabs`
--

CREATE TABLE `tangkabs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(255) NOT NULL,
  `jenis_property` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `link_foto` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tangkabs`
--

INSERT INTO `tangkabs` (`id`, `ket`, `jenis_property`, `alamat`, `luas_tanah`, `luas_bangunan`, `sertifikat`, `harga`, `link_foto`, `link_maps`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 'aaaa', 'efw', 'bfgb', 'fafa', 'fafs', 'saff', 4000, 'dvvs', 'vdsvd', 'vdsvdsv', '2023-06-03 00:26:00', '2023-06-03 00:26:10');

-- --------------------------------------------------------

--
-- Table structure for table `tangsels`
--

CREATE TABLE `tangsels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(255) NOT NULL,
  `jenis_property` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `link_foto` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tangsels`
--

INSERT INTO `tangsels` (`id`, `ket`, `jenis_property`, `alamat`, `luas_tanah`, `luas_bangunan`, `sertifikat`, `harga`, `link_foto`, `link_maps`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 'yyyyy', 'cxb', 'cxbx', 'bxcxc', 'xcbb', 'xbcx', 6000, 'dvvs', 'vdsvd', 'vdsvdsv', '2023-06-03 00:27:22', '2023-06-03 00:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `notel` bigint(20) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `notel`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmaill.com', 1312313, NULL, '$2y$10$/4O5Bb1BZoi91BDTIvZ0iOL1xIaeFg0LsYNe61j5byz3bkOvvUHs.', NULL, '2023-06-02 12:26:51', '2023-06-02 12:26:51'),
(3, 'admin', 'user111@gmaill.com', 8971413088, NULL, '$2y$10$MAD9zF/UDhMJUg9o/DQw.uP3rz.HPfz91O6zYGKkfXagFNPOLT6c2', NULL, '2023-06-03 08:02:28', '2023-06-03 08:02:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bandungs`
--
ALTER TABLE `bandungs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bekasis`
--
ALTER TABLE `bekasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bogors`
--
ALTER TABLE `bogors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cirebons`
--
ALTER TABLE `cirebons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `depoks`
--
ALTER TABLE `depoks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jakpuses`
--
ALTER TABLE `jakpuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jaksels`
--
ALTER TABLE `jaksels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jaktims`
--
ALTER TABLE `jaktims`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jakuts`
--
ALTER TABLE `jakuts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabbekasis`
--
ALTER TABLE `kabbekasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabbogors`
--
ALTER TABLE `kabbogors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karawangs`
--
ALTER TABLE `karawangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pesawarans`
--
ALTER TABLE `pesawarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ponorogos`
--
ALTER TABLE `ponorogos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serangs`
--
ALTER TABLE `serangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidoarjos`
--
ALTER TABLE `sidoarjos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sukabumis`
--
ALTER TABLE `sukabumis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surabayas`
--
ALTER TABLE `surabayas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tangerangs`
--
ALTER TABLE `tangerangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tangkabs`
--
ALTER TABLE `tangkabs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tangsels`
--
ALTER TABLE `tangsels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_notel_unique` (`notel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bandungs`
--
ALTER TABLE `bandungs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bekasis`
--
ALTER TABLE `bekasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bogors`
--
ALTER TABLE `bogors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cirebons`
--
ALTER TABLE `cirebons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `depoks`
--
ALTER TABLE `depoks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jakpuses`
--
ALTER TABLE `jakpuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jaksels`
--
ALTER TABLE `jaksels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jaktims`
--
ALTER TABLE `jaktims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jakuts`
--
ALTER TABLE `jakuts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kabbekasis`
--
ALTER TABLE `kabbekasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kabbogors`
--
ALTER TABLE `kabbogors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `karawangs`
--
ALTER TABLE `karawangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pesawarans`
--
ALTER TABLE `pesawarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ponorogos`
--
ALTER TABLE `ponorogos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `serangs`
--
ALTER TABLE `serangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sidoarjos`
--
ALTER TABLE `sidoarjos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sukabumis`
--
ALTER TABLE `sukabumis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `surabayas`
--
ALTER TABLE `surabayas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tangerangs`
--
ALTER TABLE `tangerangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tangkabs`
--
ALTER TABLE `tangkabs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tangsels`
--
ALTER TABLE `tangsels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
