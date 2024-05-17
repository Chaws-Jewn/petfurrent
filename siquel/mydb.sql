-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 02:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adopts`
--

CREATE TABLE `adopts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `dogs_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_number` bigint(20) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `house_number` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `adopt_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adopts`
--

INSERT INTO `adopts` (`id`, `user_id`, `dogs_id`, `first_name`, `last_name`, `phone_number`, `email_address`, `house_number`, `street`, `city`, `adopt_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 1, 'Jayvee', 'Ubaldo', 99836668, '202111199@gordoncollege.edu.ph', 'blk21', 'Santol St.', 'Olongapo', 'Completed', '2023-12-13 04:44:37', '2023-12-13 04:45:46', NULL),
(2, 3, 2, 'Jayvee', 'Ubaldo', 9983666893, '202111199@gordoncollege.edu.ph', 'blk21', 'Santol St.', 'Olongapo', 'Completed', '2023-12-13 04:49:54', '2023-12-13 05:22:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `breed` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`id`, `name`, `age`, `breed`, `gender`, `description`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'lapulapu', 12, 'preedooo', 'female', 'asdasdasdasda', '1702471006.jpg', '2023-12-13 04:36:46', '2023-12-13 04:45:46', '2023-12-13 04:45:46'),
(2, 'puse', 32, 'lemm', 'male', 'adasdasd', '1702471071.jpg', '2023-12-13 04:37:51', '2023-12-13 05:22:36', '2023-12-13 05:22:36');

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
(12, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(13, '2014_10_12_100000_create_password_resets_table', 2),
(14, '2019_08_19_000000_create_failed_jobs_table', 2),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(16, '2023_12_13_033423_add_deleted_at_to_adopts_table', 2),
(17, '2023_12_13_043439_modify_phone_number_data_type_in_adopts_table', 2),
(18, '2023_12_13_115413_create_dogs_table', 2),
(19, '2023_12_13_120933_add_deleted_at_to_dogs_table', 3),
(20, '2023_12_13_121913_drop_adopts_table', 4),
(21, '2023_12_13_122211_create_adopts_table', 5),
(22, '2023_12_13_122333_add_deleted_at_to_adopts_table', 6),
(23, '2023_12_13_122812_add_is_admin_to_users_table', 7),
(24, '2023_12_13_124752_modify_phone_number_data_type_in_adopts_table', 8);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'jeibi123', 'jayveeubaldo85@gmail.com', NULL, '$2y$12$jcAT02F0jkh9PcIrxUWuAu4MrBG6yFX3nZKn5ucm9GzMpAW20HTc6', NULL, '2023-12-13 04:06:18', '2023-12-13 04:06:18', 0),
(2, 'admin-jayvee', 'Jayveeubaldoadmin@gmail.com', NULL, '$2y$12$sqcQAb/kyuXlZB1lTPFTNev5a6kFa.wtZPT9rDR4qaw4e4ArD1nza', NULL, '2023-12-13 04:26:12', '2023-12-13 04:26:12', 1),
(3, 'jeibeuser', 'Jayveetheuser@gmail.com', NULL, '$2y$12$wfXHrnSG7JnmNFY.ZZnz.ewf.BR7Uk.9D.dobd/iJKw7evTdRdtoe', NULL, '2023-12-13 04:36:04', '2023-12-13 04:36:04', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adopts`
--
ALTER TABLE `adopts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adopts_user_id_foreign` (`user_id`),
  ADD KEY `adopts_dogs_id_foreign` (`dogs_id`);

--
-- Indexes for table `dogs`
--
ALTER TABLE `dogs`
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
-- AUTO_INCREMENT for table `adopts`
--
ALTER TABLE `adopts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adopts`
--
ALTER TABLE `adopts`
  ADD CONSTRAINT `adopts_dogs_id_foreign` FOREIGN KEY (`dogs_id`) REFERENCES `dogs` (`id`),
  ADD CONSTRAINT `adopts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
