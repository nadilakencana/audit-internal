-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 21 Okt 2023 pada 12.56
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_khaerul`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_penugasan`
--

CREATE TABLE `anggota_penugasan` (
  `id` int NOT NULL,
  `id_penugasan` int NOT NULL,
  `id_anggota_user` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `anggota_penugasan`
--

INSERT INTO `anggota_penugasan` (`id`, `id_penugasan`, `id_anggota_user`, `created_at`, `updated_at`) VALUES
(8, 10, 3, '2023-10-06 06:17:00', '2023-10-06 06:17:00'),
(9, 10, 6, '2023-10-06 06:17:00', '2023-10-06 06:17:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukti_temuan`
--

CREATE TABLE `bukti_temuan` (
  `id` int NOT NULL,
  `id_lhps` int NOT NULL,
  `bukti_temuan` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `bukti_temuan`
--

INSERT INTO `bukti_temuan` (`id`, `id_lhps`, `bukti_temuan`, `created_at`, `updated_at`) VALUES
(57, 40, 'th (5).jpeg', '2023-10-14 08:18:55', '2023-10-14 08:18:55'),
(58, 40, 'th.jpeg', '2023-10-14 08:18:55', '2023-10-14 08:18:55'),
(59, 40, 'http://localhost:8000/buktitemuan/40/th (1).jpeg', '2023-10-18 22:39:34', '2023-10-18 22:39:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_cabang`
--

CREATE TABLE `data_cabang` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `data_cabang`
--

INSERT INTO `data_cabang` (`id`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
(2, 'Banda Aceh', 'Aceh', '2023-09-12 05:34:27', '2023-10-06 05:59:22'),
(4, 'Palembang', 'Palembang', '2023-10-06 05:59:43', '2023-10-06 05:59:43'),
(5, 'Jakarta', 'Jakarta', '2023-10-06 06:00:15', '2023-10-06 06:00:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penugasan`
--

CREATE TABLE `data_penugasan` (
  `id` int NOT NULL,
  `id_user_ketua` int NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_divisi` int DEFAULT NULL,
  `id_cabang` int NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `data_penugasan`
--

INSERT INTO `data_penugasan` (`id`, `id_user_ketua`, `tanggal`, `deskripsi`, `id_divisi`, `id_cabang`, `status`, `created_at`, `updated_at`) VALUES
(10, 2, '2023-10-06', 'divisi IT', NULL, 4, 'Proses', '2023-10-06 06:17:00', '2023-10-06 06:17:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `id` int NOT NULL,
  `nama_divisi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_pemeriksaan`
--

CREATE TABLE `jenis_pemeriksaan` (
  `id` int NOT NULL,
  `nama_jenis` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `jenis_pemeriksaan`
--

INSERT INTO `jenis_pemeriksaan` (`id`, `nama_jenis`, `created_at`, `updated_at`) VALUES
(2, 'Divisi Aset', '2023-10-06 06:01:00', '2023-10-06 06:01:00'),
(3, 'Divisi HRD', '2023-10-06 06:01:16', '2023-10-06 06:01:16'),
(4, 'Divisi IT', '2023-10-06 06:01:24', '2023-10-06 06:01:24'),
(5, 'Project Covare', '2023-10-06 06:01:42', '2023-10-06 06:01:42'),
(6, 'Project Live Breed', '2023-10-06 06:01:48', '2023-10-06 06:01:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-09-19 13:01:00', '2023-09-19 13:01:00'),
(2, 'supervisor', '2023-09-19 13:01:00', '2023-09-19 13:01:00'),
(3, 'user', '2023-10-06 13:04:39', '2023-10-06 13:04:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `l_h_p_s`
--

CREATE TABLE `l_h_p_s` (
  `id` bigint NOT NULL,
  `id_penugasan` int NOT NULL,
  `tanggal` date NOT NULL,
  `id_cabang` int NOT NULL,
  `status_verifikasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Dalam Pemeriksaan',
  `status_perbaikan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan_perbaikan` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `tanggal_perbaikan` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `l_h_p_s`
--

INSERT INTO `l_h_p_s` (`id`, `id_penugasan`, `tanggal`, `id_cabang`, `status_verifikasi`, `status_perbaikan`, `keterangan_perbaikan`, `tanggal_perbaikan`, `created_at`, `updated_at`) VALUES
(40, 10, '2023-10-14', 4, 'Approved Supervisor', 'Telah di perbaiki', 'testst', '2023-10-21', '2023-10-14 08:18:55', '2023-10-20 18:21:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_08_17_082040_create_l_h_p_s_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `temuan_audit`
--

CREATE TABLE `temuan_audit` (
  `id` int NOT NULL,
  `id_lhps` int NOT NULL,
  `deskripsi_temuan` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `temuan_audit`
--

INSERT INTO `temuan_audit` (`id`, `id_lhps`, `deskripsi_temuan`, `created_at`, `updated_at`) VALUES
(43, 40, 'test', '2023-10-14 08:18:55', '2023-10-14 08:18:55'),
(44, 40, 'test1', '2023-10-14 08:18:55', '2023-10-18 22:39:04'),
(45, 40, 'tos', '2023-10-18 22:39:34', '2023-10-18 22:39:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notel` bigint NOT NULL,
  `id_cabang` int NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_level` int NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `notel`, `id_cabang`, `email_verified_at`, `password`, `id_level`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Jamilah', 'direc@gmail.com', 984948398, 5, NULL, '$2y$10$Vqb.OU0QjagTdW8Xf.5kVOK.qnCxCPuuWOStIK/QMUcvoQ/icsWz2', 2, NULL, '2023-08-17 05:56:15', '2023-10-19 06:01:16'),
(3, 'SPI', 'SPI@gmail.com', 809898798347589, 2, NULL, '$2y$10$XEU0ZIUA2L8I5wuJbDPP2O6o/0iIQg5YA/13JOy5gM7PYYLDKaopm', 1, NULL, '2023-08-17 06:35:34', '2023-08-17 06:39:01'),
(5, 'Admin', 'admin@gmail.com', 908978675645, 2, NULL, '$2y$10$Wb5sFrLJ/kcAvzEyqOBvC.eVN3A5WNG4BaZTVb7OnOAIiRggDsD9.', 1, NULL, '2023-08-24 06:25:11', '2023-08-24 06:25:11'),
(6, 'Bambang', 'bambang@gmail.com', 909090909, 2, NULL, '$2y$10$I6J7gOTofiLhoGdX0KGQi./6npNDv5dBRBRzMTM/H5D82LyBkXq92', 3, NULL, '2023-10-06 06:14:04', '2023-10-06 06:14:04'),
(7, 'Mansur', 'mansur@gmail.com', 8989776899, 4, NULL, '$2y$10$OeCeZd/nf1W3gx6Ok2PVa.jGjn4BZy/lW/ZZSaI1olrzeE4Afocjy', 3, NULL, '2023-10-06 06:15:20', '2023-10-06 06:15:20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota_penugasan`
--
ALTER TABLE `anggota_penugasan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penugasan` (`id_penugasan`);

--
-- Indeks untuk tabel `bukti_temuan`
--
ALTER TABLE `bukti_temuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_cabang`
--
ALTER TABLE `data_cabang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_penugasan`
--
ALTER TABLE `data_penugasan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jenis_pemeriksaan`
--
ALTER TABLE `jenis_pemeriksaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `l_h_p_s`
--
ALTER TABLE `l_h_p_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cabang` (`id_cabang`),
  ADD KEY `id_penugasan` (`id_penugasan`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `temuan_audit`
--
ALTER TABLE `temuan_audit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_notel_unique` (`notel`),
  ADD KEY `id_level` (`id_level`),
  ADD KEY `id_cabang` (`id_cabang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota_penugasan`
--
ALTER TABLE `anggota_penugasan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `bukti_temuan`
--
ALTER TABLE `bukti_temuan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT untuk tabel `data_cabang`
--
ALTER TABLE `data_cabang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_penugasan`
--
ALTER TABLE `data_penugasan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis_pemeriksaan`
--
ALTER TABLE `jenis_pemeriksaan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `l_h_p_s`
--
ALTER TABLE `l_h_p_s`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `temuan_audit`
--
ALTER TABLE `temuan_audit`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `anggota_penugasan`
--
ALTER TABLE `anggota_penugasan`
  ADD CONSTRAINT `anggota_penugasan_ibfk_1` FOREIGN KEY (`id_penugasan`) REFERENCES `data_penugasan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `l_h_p_s`
--
ALTER TABLE `l_h_p_s`
  ADD CONSTRAINT `l_h_p_s_ibfk_1` FOREIGN KEY (`id_cabang`) REFERENCES `data_cabang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `l_h_p_s_ibfk_2` FOREIGN KEY (`id_penugasan`) REFERENCES `data_penugasan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`id_cabang`) REFERENCES `data_cabang` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
