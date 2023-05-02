-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 02:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trainng_laravel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `contact`, `message`, `created_at`, `updated_at`) VALUES
(1, 'raj2', 'raj22@gmail.com', '222222', 'test mesage22', NULL, '2023-04-12 04:57:53'),
(6, 'rahul', 'rahul@gmail.com', '7878787878', 'this is test msg', NULL, NULL),
(7, 'ram', 'ram@gmail.com', '7878787878', 'this is test msg', NULL, NULL),
(8, 'syam', 'shyam@gmail.com', '7878787878', 'this is test msg', NULL, NULL),
(9, 'mohan', 'mohan@gmail.com', '7878787878', 'this is test msg', NULL, NULL),
(10, 'radhe', 'radhe@gmail.com', '7878787878', 'this is test msg', NULL, NULL),
(11, 'sameer', 'sameer@gmail.com', '7878787878', 'this is test msg', NULL, NULL),
(12, 'raj2', 'raj2@gmail.com', '7878787878', 'this is test msg', NULL, NULL),
(13, 'anikesh', 'anikesh@gmail.com', '7878787878', 'this is test msg', NULL, NULL),
(14, 'prashant', 'prashant@gmail.com', '7878787878', 'this is test msg', NULL, NULL),
(15, 'ram', 'ram@gmail.com', '7878787878', 'this is test msg', NULL, NULL),
(16, 'syam', 'shyam@gmail.com', '7878787878', 'this is test msg', NULL, NULL),
(17, 'mohan', 'mohan@gmail.com', '7878787878', 'this is test msg', NULL, NULL),
(18, 'radhe', 'radhe@gmail.com', '7878787878', 'this is test msg', NULL, NULL),
(19, 'sameer', 'sameer@gmail.com', '7878787878', 'this is test msg', NULL, NULL),
(20, 'raj2', 'raj2@gmail.com', '7878787878', 'this is test msg', NULL, NULL),
(21, 'anikesh', 'anikesh@gmail.com', '7878787878', 'this is test msg', NULL, NULL),
(22, 'prashant', 'prashant@gmail.com', '7878787878', 'this is test msg', NULL, NULL),
(23, 'raj', 'raj@gmail.com', '89898989', '8989898', '2023-04-15 06:54:56', NULL),
(24, 'raj2', 'raj2@gmail.com', '87878', '78787', '2023-04-15 06:56:19', NULL),
(25, 'anikesh', 'anikesh@gmail.com', '7886868', '6886868', '2023-04-15 06:58:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enquries`
--

CREATE TABLE `enquries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 2),
(6, '2023_04_17_095440_enquiries', 2),
(7, '2023_04_17_100349_alter_enquiries_add_status', 3);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('tanu@gmail.com', '$2y$10$Lc8syoBXrJCqngo07RaYIennx./AzN/Xdz.J4W9eUzVHrx5QpEUT6', '2023-04-13 05:14:28');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(1) NOT NULL DEFAULT 1 COMMENT '1= user, 2 = admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contact`, `image`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(15, 'Admin admin', '89898989', NULL, 'admin@gmail.com', '2023-04-17 04:50:22', '$2y$10$4X0w6s6S0j6MUqo3hdeIVOG0d501epkCvDQd.09I29/z59mOqHJ4O', 'gPg3qEFdFt', 2, '2023-04-17 04:50:22', '2023-04-17 04:50:22'),
(16, 'Gay Konopelski V', NULL, NULL, 'wisoky.arturo@example.com', '2023-04-17 04:51:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HbjvFzZ7bJ', 1, '2023-04-17 04:51:11', '2023-04-17 04:51:11'),
(17, 'Dr. Orrin Quitzon II', NULL, NULL, 'fgusikowski@example.com', '2023-04-17 04:51:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tO9ms0KNhb', 1, '2023-04-17 04:51:11', '2023-04-17 04:51:11'),
(18, 'Prof. Sylvan Towne', NULL, NULL, 'jklocko@example.org', '2023-04-17 04:51:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Z08hOPDFMq', 1, '2023-04-17 04:51:11', '2023-04-17 04:51:11'),
(19, 'Kiarra West', NULL, NULL, 'qlittel@example.net', '2023-04-17 04:51:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XCjDpifv0s', 1, '2023-04-17 04:51:11', '2023-04-17 04:51:11'),
(20, 'Fritz Balistreri', NULL, NULL, 'zella.mcclure@example.com', '2023-04-17 04:51:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LW1hgdsX0m', 1, '2023-04-17 04:51:11', '2023-04-17 04:51:11'),
(21, 'Dr. Barney Hegmann I', NULL, NULL, 'maria.stanton@example.org', '2023-04-17 04:51:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fB692XHPo6', 1, '2023-04-17 04:51:11', '2023-04-17 04:51:11'),
(22, 'Avery Toy', NULL, NULL, 'clement35@example.com', '2023-04-17 04:51:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'v9heXdZRaM', 1, '2023-04-17 04:51:11', '2023-04-17 04:51:11'),
(23, 'Dr. Haylie Schuster I', NULL, NULL, 'yasmin.lesch@example.org', '2023-04-17 04:51:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gdl944HilX', 1, '2023-04-17 04:51:11', '2023-04-17 04:51:11'),
(24, 'Mrs. Herminia Goldner IV', NULL, NULL, 'reynolds.natalia@example.net', '2023-04-17 04:51:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'En0WBSVsVg', 1, '2023-04-17 04:51:11', '2023-04-17 04:51:11'),
(25, 'Dr. Tyler Collier V', NULL, NULL, 'mikel96@example.net', '2023-04-17 04:51:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Ltx4fXrcOU', 1, '2023-04-17 04:51:11', '2023-04-17 04:51:11'),
(26, 'ram', '80800', NULL, 'ram@gmgail.cm', NULL, '$2y$10$4X0w6s6S0j6MUqo3hdeIVOG0d501epkCvDQd.09I29/z59mOqHJ4O', NULL, 1, NULL, NULL),
(27, 'ram', '898989', NULL, 'ram234@gmgail.cm', NULL, '$2y$10$EJDAKF0gNvjRytjvLGy8heHWf0flrlArUTPjIKUfw8T.WzbY.luxC', NULL, 1, '2023-04-21 05:11:54', '2023-04-21 05:11:54'),
(28, 'ram', '78787878', NULL, 'ram2222@gmgail.cm', NULL, '$2y$10$njBQQm193yzT/en/CslJUeWn752bwgUqU.uSoeFFbjDeqEIqibRC6', NULL, 1, NULL, NULL),
(29, 'ram45', '989898989', NULL, 'ram45@gmail.com', NULL, '$2y$10$18m3ugIXSuYl0Ep8ZctufOLnh3rAa8P3Ak8NxT3qs4.5Jf38yWo1e', NULL, 1, NULL, NULL),
(30, 'mhan', '89898989', 'Kedarnath Ek Dham Cosmic.pdf.pdf', 'mhan44@gmail.com', NULL, '$2y$10$YxN.LCgy4Pi2FmZXMAF1C.ZTRniQ7z3XY97Vuu3tGYryDmBsBcQK6', NULL, 1, NULL, NULL),
(31, 'raja ram', '909090', '1682318957.pdf', 'rajaram99@ggg.ccc', NULL, '$2y$10$uCm62CvjcxGXthZjy/iHaeALfUsoy.yqo/e1Q8BcnVZ9OGV0blIIK', NULL, 1, NULL, NULL),
(32, 'ram1', '78787878', NULL, 'ram2@gmail.com', NULL, '', NULL, 1, NULL, NULL),
(33, 'ramsyam', '78787878', NULL, 'ramshyam2@gmail.com', NULL, '', NULL, 1, NULL, NULL),
(34, 'ramsyam', '78787878', NULL, 'ramshyam222@gmail.com', NULL, '$2y$10$y26Q9Uo28/G/9hl/noFm8uc75mynRJEXY8neXEaGNuAdsKp/TF5l2', NULL, 1, NULL, NULL),
(36, 'ramsyam', '78787878', '1682404050.docx', 'popopop@gmail.com', NULL, '$2y$10$OqZE.9cIxLZ1agQzLov5r.czgK5u0v9z6SCpD1RtO9W3.RWBij1P.', NULL, 1, NULL, NULL),
(37, 'ramsyam', NULL, '1682404729.docx', 'iii@gmail.com', NULL, '$2y$10$ZRaTITiTSYnY53nfFhalM..Zk5NudnPVbLZjijr7tz9MGaFQ1/H7e', NULL, 1, NULL, NULL),
(38, 'ramsyam', '78787878', '1682404812.docx', 'iiij@gmail.com', NULL, '$2y$10$SOtmdfPA/GOUzY8pZom6X.Kojd6mpne..hhOzXSYtcftUq0IfaHbG', NULL, 1, NULL, NULL),
(39, 'ram', '78787878', '1682489113.docx', 'ramsyam', NULL, '$2y$10$szC.ZKPcGlOWMw51V7sL3OhHnHoHnlSOjSiqEPyknZ8CB7OIfloXq', NULL, 1, NULL, NULL),
(41, 'ram', '78787878', '1682489811.jpeg', 'ramsyam@gmail.com', NULL, '$2y$10$cZagwQ03KG30mbIszyqxX.YOUosjsjzFx0yvPFh8j6diXTNC8pdb.', NULL, 1, NULL, NULL),
(42, 'ram', '90909090', '', 'ram@gg.ccc', NULL, '$2y$10$4HdEuKtYdvyQCScjZPH5l.ds2tkulN4cB2MAko.dpM1MpxLNqr.l.', NULL, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquries`
--
ALTER TABLE `enquries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `enquries`
--
ALTER TABLE `enquries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
