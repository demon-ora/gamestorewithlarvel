-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2022 at 11:04 AM
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
-- Database: `project`
--

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
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `type` enum('action','arcade','adventure','puzzel','sport') COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `title`, `categories`, `type`, `image`, `url`, `des`, `created_at`, `updated_at`) VALUES
(7, 'flappybird', '0', 'arcade', 'Adobeindesign.PNG', 'url/UyA5IkqLV8CExoodrfLmnUVvfPOAy9eKEDg7Q2nA.zip', 'wtf', '2022-09-11 03:19:10', '2022-09-11 07:26:43'),
(8, 'chess', '0', 'arcade', 'o.jpeg', 'url/B4v0kWRsBRwxb9uaIgpwolTkKbjGjIVa6tAC5vB7.zip', 'this game requires brain to play', '2022-09-11 03:37:11', '2022-09-11 07:28:41'),
(9, 'okkk', '0', 'arcade', '275721350_1116607302246671_5720743222902796233_n.jpg', 'url/CBKq1fCMpDcjMHtXgEUiYARJENdXd2rcxiaiuwk0.jpg', 'kakak', '2022-09-11 03:38:53', '2022-09-11 03:38:53'),
(10, 'bbb', '0', 'arcade', '298058297_1191081088343008_2264444232524019503_n.jpg', 'url/YZ3TLSCGylJtntu03cAkzf8xRhGhYq2puwkKujva.jpg', 'bbbb', '2022-09-11 03:48:53', '2022-09-11 03:48:53'),
(11, 'pubg', '1', 'adventure', 'unnamed.jpg', 'url/7Xow1xZ0mbnSZmDSOTztTdCarKakvo9NCIk038LL.jpg', 'this game is awsome do play it', '2022-09-11 06:24:48', '2022-09-11 06:24:48'),
(12, 'shadowfight', '1', 'action', 'noragami.jpg', 'url/B0rmhk1gEjjKFJUqFj5558cbH2oqoVKBufLEXSmH.pdf', 'fighting game', '2022-09-11 06:28:06', '2022-09-11 06:28:06'),
(13, 'free fire', '1', 'puzzel', 'yukiko.PNG', 'url/KV6NoBa6IgbSK4NNg4GjA3g3pQkM0jL74Q5yDIM5.zip', 'testing lorenekelkajjflajlk lkajak ljalk', '2022-09-11 06:45:11', '2022-09-11 06:45:11'),
(14, 'dota', '1', 'arcade', 'o.jpeg', 'o.jpeg', 'this is testing', '2022-09-13 00:32:20', '2022-09-13 00:32:20');

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_09_11_062941_create_game_table', 2);

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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(7, 'hello', 'hello@gmail.com', '$2y$10$DIqo8G1Uuw6AlFOWw3jUJeL3tylr7My1NY8v1nQoDvMBMWCWjR/TG', '2022-09-08 09:19:47', '2022-09-08 09:19:47'),
(9, 'test', 'test@gmail.com', '$2y$10$7M72r8B00ai9SD/JLrLHUupVrh7AQTVEwbycB0CERdk1gYW4Qpl2C', '2022-09-08 23:40:30', '2022-09-08 23:40:30'),
(14, 'why', 'why1@gmail.com', '$2y$10$hHPeQYcYK20lGXvDcybtWuFtNi0RMUpDEaqisPyiCn9JxPysw9GoK', '2022-09-08 23:47:24', '2022-09-10 06:51:54'),
(15, 'bbbb', 'bbbb@gmail.com', '$2y$10$6I6zSyZ5NlkzCfIjeUdsa..j1pjoa04mKhCOyQCpYwZG6BwGzAQnW', '2022-09-09 00:02:55', '2022-09-09 00:02:55'),
(17, 'not', 'not@gmail.com', '$2y$10$YFAdEi/nlvxPoUO0Tv.Pze8NZu0qc9sBrlUSbAHbCIHRGrVM2hn2a', '2022-09-09 00:10:20', '2022-09-09 00:10:20'),
(18, 'on', 'on@ggg.com', '$2y$10$D.SJbWh5OFQw.gu.XJmnBeyC0pEIFmVeADA9FaypiEahD2S8sWkDi', '2022-09-09 00:12:25', '2022-09-09 00:12:25'),
(20, 'on1', 'on1@ggg.com', '$2y$10$sLrMpXfrMdgssHwj7LOLSOGcCXZ5npmupPqh5.Yt38YPtBNe6Drau', '2022-09-09 00:13:44', '2022-09-09 00:13:44'),
(21, 'fire', 'fire@gmail.com', '$2y$10$3ZJH4VfIazac3TgmCvL2lOg/3Q80A7TAluuwNXFVtp8HgBJbLuuuW', '2022-09-13 23:18:19', '2022-09-13 23:18:19'),
(23, 'fire1', 'fire1@gmail.com', '$2y$10$o.xkrsud5S48rbCtd.VFIudtT1bX1eUDXyEt.54iGJpkF9foEsNnG', '2022-09-17 23:29:35', '2022-09-17 23:29:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `game_title_unique` (`title`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
