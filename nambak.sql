-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 06:59 PM
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
-- Database: `nambak`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas`
--

CREATE TABLE `aktivitas` (
  `id` int(11) NOT NULL,
  `id_ikan` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `aktivitas_masuk` decimal(5,1) NOT NULL,
  `aktivitas_keluar` decimal(5,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aktivitas`
--

INSERT INTO `aktivitas` (`id`, `id_ikan`, `tanggal`, `aktivitas_masuk`, `aktivitas_keluar`) VALUES
(10, 1, '2021-07-05', '5.0', '6.0'),
(11, 2, '2021-07-05', '3.0', '4.0'),
(12, 3, '2021-07-05', '2.0', '4.0'),
(13, 4, '2021-07-05', '1.0', '3.0'),
(14, 1, '2021-07-08', '3.0', '3.0'),
(15, 2, '2021-07-08', '2.0', '1.0'),
(16, 3, '2021-07-08', '2.0', '3.0'),
(17, 4, '2021-07-08', '5.0', '3.0'),
(18, 1, '2021-07-16', '3.0', '6.0'),
(19, 2, '2021-07-16', '4.0', '7.0'),
(20, 3, '2021-07-16', '4.0', '7.0'),
(21, 4, '2021-07-16', '3.0', '5.0'),
(22, 1, '2021-07-19', '1.0', '4.0'),
(23, 2, '2021-07-19', '3.0', '6.0'),
(24, 3, '2021-07-19', '4.0', '6.0'),
(25, 4, '2021-07-19', '1.0', '4.0'),
(26, 1, '2021-07-22', '2.0', '4.0'),
(27, 2, '2021-07-22', '2.0', '4.0'),
(28, 3, '2021-07-22', '3.0', '6.5'),
(29, 4, '2021-07-22', '4.0', '2.3');

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
-- Table structure for table `ikan`
--

CREATE TABLE `ikan` (
  `id_ikan` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `jumlah_awal` decimal(5,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ikan`
--

INSERT INTO `ikan` (`id_ikan`, `jenis`, `jumlah_awal`) VALUES
(1, 'Ikan Emas', '30.0'),
(2, 'Ikan Nila', '25.0'),
(3, 'Ikan Lele', '25.0'),
(4, 'Ikan Mujair', '20.0');

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id_keuangan` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `uang_masuk` int(11) NOT NULL,
  `uang_keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id_keuangan`, `tanggal`, `uang_masuk`, `uang_keluar`) VALUES
(1, '2021-06-24', 400000, 250000),
(2, '2021-06-25', 500000, 240000),
(3, '2021-06-26', 700000, 150000),
(4, '2021-06-27', 500000, 170000),
(5, '2021-06-28', 550000, 250000),
(6, '2021-07-01', 650000, 240000);

-- --------------------------------------------------------

--
-- Table structure for table `kolam`
--

CREATE TABLE `kolam` (
  `id_kolam` int(11) NOT NULL,
  `id_ikan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kolam`
--

INSERT INTO `kolam` (`id_kolam`, `id_ikan`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('fahruazzuhd@gmail.com', '$2y$10$x7gYub3iOxMjMMUpRKPTFei2nRICUbEc4dOlr9fCypJop491Bbq9.', '2021-06-24 23:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `ph_models`
--

CREATE TABLE `ph_models` (
  `id_ph` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `ph` float NOT NULL,
  `id_kolam` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ph_models`
--

INSERT INTO `ph_models` (`id_ph`, `tanggal`, `ph`, `id_kolam`, `updated_at`, `created_at`) VALUES
(1, '2021-07-01', 7.6, 1, '2021-07-02 16:33:57', '2021-07-02 16:33:57'),
(2, '2021-07-01', 7, 2, '2021-07-02 15:41:36', '2021-07-02 15:41:36'),
(3, '2021-07-01', 8, 3, '2021-07-02 15:41:36', '2021-07-02 15:41:36'),
(4, '2021-07-01', 6.5, 4, '2021-07-02 15:41:36', '2021-07-02 15:41:36'),
(9, '2021-08-02', 6, 1, '2021-07-02 15:41:36', '2021-07-02 15:41:36'),
(10, '2021-08-02', 5.6, 2, '2021-07-02 15:41:36', '2021-07-02 15:41:36'),
(11, '2021-08-02', 5.9, 3, '2021-07-02 15:41:36', '2021-07-02 15:41:36'),
(12, '2021-08-02', 6, 4, '2021-07-02 15:41:36', '2021-07-02 15:41:36'),
(13, '2021-07-01', 7, 1, '2021-07-02 15:41:36', '2021-07-02 15:41:36'),
(14, '2021-07-01', 8, 2, '2021-07-02 15:41:36', '2021-07-02 15:41:36'),
(15, '2021-07-01', 7.6, 3, '2021-07-02 15:41:36', '2021-07-02 15:41:36'),
(16, '2021-07-01', 6.8, 4, '2021-07-02 15:41:36', '2021-07-02 15:41:36'),
(20, '2021-07-04', 6.7, 1, '2021-07-04 14:31:23', '2021-07-04 14:31:23'),
(21, '2021-07-04', 6, 2, '2021-07-04 14:35:52', '2021-07-04 14:35:52'),
(22, '2021-07-04', 7, 3, '2021-07-04 14:40:28', '2021-07-04 14:40:28'),
(23, '2021-07-04', 6.9, 4, '2021-07-04 14:42:08', '2021-07-04 14:42:08'),
(24, '2021-07-07', 7.6, 1, '2021-07-04 15:12:53', '2021-07-04 15:12:53'),
(25, '2021-07-07', 7.6, 3, '2021-07-04 15:17:20', '2021-07-04 15:17:20'),
(26, '2021-07-07', 7.6, 2, '2021-07-04 15:18:36', '2021-07-04 15:18:36'),
(27, '2021-07-10', 7.6, 2, '2021-07-04 15:20:03', '2021-07-04 15:20:03'),
(28, '2021-07-10', 6, 1, '2021-07-04 15:20:39', '2021-07-04 15:20:39'),
(29, '2021-07-24', 6.9, 2, '2021-07-04 15:21:22', '2021-07-04 15:21:22'),
(30, '2021-07-28', 7.6, 3, '2021-07-04 15:22:17', '2021-07-04 15:22:17'),
(31, '2021-07-31', 7.6, 3, '2021-07-04 17:21:23', '2021-07-04 17:21:23'),
(32, '2021-07-31', 6.7, 2, '2021-07-04 17:22:19', '2021-07-04 17:22:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontrak` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `nik`, `noHp`, `alamat`, `kontrak`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@gmail.com', '1952701010001', '082237266688', 'Jl. Pandanaran, Sardonoharjo', '4 Tahun', NULL, '$2y$10$kh/LKcNsmL9Rdryg6izc2.xxD0GKOSrvGyBKBkTz5ASYfMlzRTefW', 'Admin', NULL, '2021-06-24 19:51:36', '2021-06-24 19:51:36'),
(10, 'Fahruzi', 'nafachru@gmail.com', '9201052701010001', '082238248899', 'Jl. Pandanaran, sleman, Yogyakarta', '4 Tahun', NULL, '$2y$10$72mqoje4juTpgEtmH.fgbO1HxITc1WOXzKGpliwWV.Y0lk3t0VdwK', 'Admin', NULL, '2021-06-27 02:25:30', '2021-06-27 02:25:30'),
(11, 'Edi Prabowo', '1952300512@students.uii.ac.id', '9201052701010004', '082238248899', 'Jl. Pandanaran, sleman, Yogyakarta', '2 Tahun', NULL, '$2y$10$7Hwtfiaf8hH0RVzAklnAJeyH2D2Wg/G0F0VbUWS/zY1Y0SzVttUXi', 'User', NULL, '2021-06-30 20:10:48', '2021-06-30 20:10:48'),
(12, 'Haris Setyo', '19523167@students.uii.ac.id', '92010527010232', '085564745343', 'Jl. Kaliurang km 12.5', '3 Tahun', NULL, '$2y$10$FzWrjHqXRbufIyBJfHeoOuKBalVThttnicplGFFR.qA0XUQbz4bK6', 'User', NULL, '2021-06-30 20:14:25', '2021-06-30 20:14:25'),
(13, 'Ahmad Effendi', '19523012@students.uii.ac.id', '9201052701010024', '089544637890', 'Jl. Magelang', '1 Tahun', NULL, '$2y$10$ghkB3pkb7tXPVD2daVJP5u9Ztuwq.PbZXrG5XtkV9ex4vHSsYStBS', 'User', NULL, '2021-06-30 20:15:57', '2021-06-30 20:15:57'),
(14, 'Fdsf', '195230051222@students.uii.ac.id', '9201052701023121', '082238248899', 'Jl. Pandanaran, sleman, Yogyakarta', '1 Tahun', NULL, '$2y$10$n5Y4WnEblLQKu/AoqbjMI.3aEFpX/QqPSjZAZ.zJgd6R8n4qtA/c6', 'Admin', NULL, '2021-07-04 08:30:27', '2021-07-04 08:30:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ikan` (`id_ikan`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `ikan`
--
ALTER TABLE `ikan`
  ADD PRIMARY KEY (`id_ikan`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id_keuangan`);

--
-- Indexes for table `kolam`
--
ALTER TABLE `kolam`
  ADD PRIMARY KEY (`id_kolam`),
  ADD KEY `id_ikan` (`id_ikan`);

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
-- Indexes for table `ph_models`
--
ALTER TABLE `ph_models`
  ADD PRIMARY KEY (`id_ph`),
  ADD KEY `id_kolam` (`id_kolam`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktivitas`
--
ALTER TABLE `aktivitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ikan`
--
ALTER TABLE `ikan`
  MODIFY `id_ikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id_keuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kolam`
--
ALTER TABLE `kolam`
  MODIFY `id_kolam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ph_models`
--
ALTER TABLE `ph_models`
  MODIFY `id_ph` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD CONSTRAINT `aktivitas_ibfk_1` FOREIGN KEY (`id_ikan`) REFERENCES `ikan` (`id_ikan`);

--
-- Constraints for table `kolam`
--
ALTER TABLE `kolam`
  ADD CONSTRAINT `kolam_ibfk_1` FOREIGN KEY (`id_ikan`) REFERENCES `ikan` (`id_ikan`);

--
-- Constraints for table `ph_models`
--
ALTER TABLE `ph_models`
  ADD CONSTRAINT `ph_models_ibfk_1` FOREIGN KEY (`id_kolam`) REFERENCES `kolam` (`id_kolam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
