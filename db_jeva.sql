-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 03:26 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jeva`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen_siswas`
--

CREATE TABLE `absen_siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `absen` int(11) NOT NULL DEFAULT 0,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absen_siswas`
--

INSERT INTO `absen_siswas` (`id`, `user_id`, `tanggal`, `kelas`, `absen`, `keterangan`, `created_at`, `updated_at`) VALUES
(6, 2, '2022-04-23', 'A', 1, 'Masuk', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `biodata_siswas`
--

CREATE TABLE `biodata_siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alat_transportasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_kps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_tinggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodata_siswas`
--

INSERT INTO `biodata_siswas` (`id`, `user_id`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nik`, `alamat`, `agama`, `kelas`, `alat_transportasi`, `no_hp`, `nis`, `nomor_kps`, `jenis_tinggal`, `tanggal_masuk`, `foto`, `created_at`, `updated_at`) VALUES
(7, 2, 'Malang', '1998-09-20', 'LAKI-LAKI', '34231342312442', 'Pasuruan', 'ISLAM', 'A', 'Mobil', '08523232', '112423123', '423134231321', 'Rumah', '2022-04-21', '21042022105623imgtambahmembertab.png', NULL, NULL),
(8, 3, 'Pasuruan', '1997-10-21', 'PEREMPUAN', '7689087', 'Pasuruan', 'ISLAM', 'B', 'Mobil', '2831092', '849302', '9382012', 'Rumah', '2022-04-23', '23042022093515btnmakanantab.png', NULL, NULL);

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
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama`, `foto`, `created_at`, `updated_at`) VALUES
(2, 'Keranjang', '24042022060829btnmata.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gurus`
--

CREATE TABLE `gurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lembaga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_kerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulan_kerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_lembaga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_rumah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gurus`
--

INSERT INTO `gurus` (`id`, `nama_guru`, `nama_lembaga`, `tempat_lahir`, `tanggal_lahir`, `nik`, `tmt`, `tahun_kerja`, `bulan_kerja`, `status_guru`, `alamat_lembaga`, `alamat_rumah`, `pendidikan_guru`, `foto`, `created_at`, `updated_at`) VALUES
(14, 'Dewi fatimatuzzahro', 'Paud ', 'Malang', '2000-06-20', '0192102', '90', '09', '09', '09', '09', '09', '09', '22042022161309btnmata.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kegiatans`
--

CREATE TABLE `jadwal_kegiatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jadwal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_kegiatans`
--

INSERT INTO `jadwal_kegiatans` (`id`, `jadwal`, `kegiatan`, `created_at`, `updated_at`) VALUES
(2, 'Minggu', 'Dolen', NULL, NULL),
(5, 'Senin', 'Mlaku mlaku', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_luar_pauds`
--

CREATE TABLE `kegiatan_luar_pauds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cerita_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan_luar_pauds`
--

INSERT INTO `kegiatan_luar_pauds` (`id`, `nama_kegiatan`, `cerita_kegiatan`, `foto_kegiatan`, `created_at`, `updated_at`) VALUES
(1, 'Program Yess ok', 'Petani milenial', 'foto-kegiatan-luar-paud/kHmFWpv80b6vQDJwC8dVOwhjnKWx3i87PgC4s1af.png', '2022-04-13 01:14:20', '2022-04-13 01:48:11'),
(3, 'Bela diri', 'bela diri bersama master ALFAN', '23042022152659imgproduktab.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `keuangan_siswas`
--

CREATE TABLE `keuangan_siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `biodata_siswa_id` bigint(20) UNSIGNED NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keuangan_siswas`
--

INSERT INTO `keuangan_siswas` (`id`, `biodata_siswa_id`, `kelas`, `periode`, `jenis_surat`, `biaya`, `status`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 7, 'A', '2022', 'SPP', '50000', 'Lunas', '2022-04-23', NULL, NULL),
(3, 8, 'A', '2022', 'SPP', '45000', 'LUNAS', '2022-04-30', NULL, NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_08_081904_create_jadwal_kegiatans_table', 1),
(6, '2022_04_09_091506_create_biodata_siswas_table', 1),
(7, '2022_04_11_082031_create_absen_siswas_table', 2),
(9, '2022_04_13_073027_create_kegiatan_luar_pauds_table', 4),
(10, '2022_04_13_090013_create_gurus_table', 5),
(11, '2022_04_14_090625_create_visi_misis_table', 6),
(12, '2022_04_12_112154_create_nilais_table', 7),
(14, '2022_04_14_094324_create_keuangan_siswas_table', 8),
(15, '2022_04_24_034334_create_fasilitas_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `nilais`
--

CREATE TABLE `nilais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `biodata_siswa_id` bigint(20) UNSIGNED NOT NULL,
  `bermain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ikrar_bersama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senam_irama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bernyanyi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berdoa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pijakan_sebelum_bermain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pijakan_setelah_bermain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilais`
--

INSERT INTO `nilais` (`id`, `biodata_siswa_id`, `bermain`, `ikrar_bersama`, `senam_irama`, `bernyanyi`, `berdoa`, `pijakan_sebelum_bermain`, `pijakan_setelah_bermain`, `tanggal`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 7, 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Sempurna', '2022-04-23', 'Bagus', '2022-04-22 16:53:09', '2022-04-22 16:53:09'),
(4, 8, 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', '2022-04-23', 'Oke lah terbaik', NULL, NULL);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `password`, `role`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '', '$2y$10$8J9DAcaKOvhMjz/Do0Umd.5leNLneSBWSJU5uOJjBNsQZbnm2c5aO', 0, NULL, NULL, '2022-04-10 00:47:13', '2022-04-10 00:47:13'),
(2, 'alfan', 'Mukhammad Alfan', 'alfan123', 1, NULL, NULL, '2022-04-10 00:50:01', '2022-04-11 00:30:36'),
(3, 'dinda', 'Dinda Ayu Pratiw', '$2y$10$YYHELQ217PBnwNDL7cPjleIxytFS5Xs6BHQaMcv7Uedx8GG.oeIBO', 1, NULL, NULL, '2022-04-12 00:39:41', '2022-04-12 00:39:41'),
(4, 'jeva', '', 'jeva123', 0, NULL, NULL, NULL, NULL),
(5, 'livi', 'Olivia ', 'livi123', 1, NULL, NULL, NULL, NULL),
(7, 'feni', '', 'feni123', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visi_misis`
--

CREATE TABLE `visi_misis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visi_misis`
--

INSERT INTO `visi_misis` (`id`, `misi`, `visi`, `created_at`, `updated_at`) VALUES
(3, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis exercitationem, iste earum repellendus voluptatum molestiae tenetur harum quasi. Quo officia consequuntur dignissimos, deleniti nemo animi neque rerum adipisci assumenda hic.', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis exercitationem, iste earum repellendus voluptatum molestiae tenetur harum quasi. Quo officia consequuntur dignissimos, deleniti nemo animi neque rerum adipisci assumenda hic.', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen_siswas`
--
ALTER TABLE `absen_siswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absen_siswas_user_id_foreign` (`user_id`);

--
-- Indexes for table `biodata_siswas`
--
ALTER TABLE `biodata_siswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_siswas_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_kegiatans`
--
ALTER TABLE `jadwal_kegiatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan_luar_pauds`
--
ALTER TABLE `kegiatan_luar_pauds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keuangan_siswas`
--
ALTER TABLE `keuangan_siswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keuangan_siswas_biodata_siswa_id_foreign` (`biodata_siswa_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilais_biodata_siswa_id_foreign` (`biodata_siswa_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `visi_misis`
--
ALTER TABLE `visi_misis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen_siswas`
--
ALTER TABLE `absen_siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `biodata_siswas`
--
ALTER TABLE `biodata_siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jadwal_kegiatans`
--
ALTER TABLE `jadwal_kegiatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kegiatan_luar_pauds`
--
ALTER TABLE `kegiatan_luar_pauds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `keuangan_siswas`
--
ALTER TABLE `keuangan_siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `nilais`
--
ALTER TABLE `nilais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `visi_misis`
--
ALTER TABLE `visi_misis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen_siswas`
--
ALTER TABLE `absen_siswas`
  ADD CONSTRAINT `absen_siswas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `biodata_siswas`
--
ALTER TABLE `biodata_siswas`
  ADD CONSTRAINT `biodata_siswas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `keuangan_siswas`
--
ALTER TABLE `keuangan_siswas`
  ADD CONSTRAINT `keuangan_siswas_biodata_siswa_id_foreign` FOREIGN KEY (`biodata_siswa_id`) REFERENCES `biodata_siswas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilais`
--
ALTER TABLE `nilais`
  ADD CONSTRAINT `nilais_biodata_siswa_id_foreign` FOREIGN KEY (`biodata_siswa_id`) REFERENCES `biodata_siswas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;