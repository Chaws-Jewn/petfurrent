-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 11:49 AM
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
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_image` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adopts`
--

INSERT INTO `adopts` (`id`, `user_id`, `dogs_id`, `first_name`, `last_name`, `phone_number`, `email_address`, `house_number`, `street`, `city`, `adopt_status`, `created_at`, `updated_at`, `deleted_at`, `user_image`) VALUES
(60, 55, 46, 'outdoor', 'Ubaldo', 9983666893, '202111199@gordoncollege.edu.ph', 'blk 21', 'santol street', 'olongapo', 'Pending', '2024-01-17 00:21:43', '2024-01-17 00:22:09', NULL, 0),
(61, 56, 46, 'Jay-vee', 'Ubaldo', 9983666893, 'jayveeubaldo110@gmail.com', 'blk312', 'santolst', 'olongapo', 'Processing', '2024-01-17 02:40:50', '2024-01-17 02:41:14', NULL, 0);

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
(41, 'Trevor', 1, 'Dog', 'Male', 'Trevor is a very energetic dog that love to play so much!', '1704985587.jpg', '2024-01-11 07:06:27', '2024-01-11 07:09:33', '2024-01-11 07:09:33'),
(42, 'Trevor', 1, 'Dog', 'Male', 'asdasdasd', '1704987771.gif', '2024-01-11 07:42:51', '2024-01-11 07:58:54', '2024-01-11 07:58:54'),
(43, 'pakoy', 2, 'Dog', 'Female', 'sdjfnjnasdmfk34nrj34 3 45 qert eqwter', '1705155069.gif', '2024-01-13 06:11:09', '2024-01-16 18:35:10', '2024-01-16 18:35:10'),
(44, 'bong', 1, 'Dog', 'Male', 'ivan the arf arf', '1705297022.jpg', '2024-01-14 21:37:02', '2024-01-16 18:35:23', '2024-01-16 18:35:23'),
(45, 'asdasd', 1, 'Dog', 'Male', 'asda asd as da da d', '1705456927.jpg', '2024-01-16 18:02:07', '2024-01-16 18:35:29', '2024-01-16 18:35:29'),
(46, 'pakoy', 2, 'Dog', 'Male', 'pakoy is a great great pet you can adopt', '1705479665.jpg', '2024-01-17 00:21:05', '2024-01-17 00:21:05', NULL);

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
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(24, '2023_12_13_124752_modify_phone_number_data_type_in_adopts_table', 8),
(28, '2023_12_16_230422_modify_phone_number_data_type_in_adopts_table', 9),
(33, '2024_01_04_081700_add_fname_to_users_table', 10),
(34, '2024_01_04_085147_add_phone_number_to_users_table', 11),
(36, '2024_01_06_025343_add_gender_to_users_table', 12),
(37, '2024_01_06_040051_add_birthdate_to_users_table', 13),
(38, '2024_01_07_142900_add_address_and_postal_to_user_table', 14),
(39, '2024_01_07_153039_create_pet_cares_table', 15),
(40, '2024_01_08_125438_add_columns_to_pet_cares_table', 16),
(41, '2024_01_10_123849_create_petcare_table', 17),
(42, '2024_01_17_021714_change_age_to_text_in_dogs_table', 18),
(43, '2024_01_17_095559_create_inquiry_table', 19);

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

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('Jayveetheuser@gmail.com', '$2y$12$3.hfRMasOuhUFhYi/7gCXeuZBc5C10050Za9OUqqBqAigkqGhMsQG', '2023-12-13 06:30:20'),
('Jayveeubaldo110@gmail.com', '$2y$12$Ims3FLwWBLoWA/aKJiNvLunqhKhIvHrk76Lv5T1IlyvTs6hmGvHnu', '2024-01-11 04:51:44');

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
-- Table structure for table `petcare`
--

CREATE TABLE `petcare` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pet_cares`
--

CREATE TABLE `pet_cares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pet_cares`
--

INSERT INTO `pet_cares` (`id`, `created_at`, `updated_at`, `title`, `description`, `image`) VALUES
(25, '2024-01-13 06:23:10', '2024-01-13 06:23:10', 'Tips and tricks', 'sadfhdvnasdgqwef wqef q f qw fdsf', '1705155790.jpg'),
(26, '2024-01-16 18:56:16', '2024-01-16 18:56:16', 'asdas', 'ddasdasd', '1705460176.jpg'),
(27, '2024-01-16 19:41:18', '2024-01-16 19:43:54', 'title', 'asdasdasdasd\r\n\r\nAlso, be sure to find out which food your dog was eating in the shelter or foster home so that you can provide the same in the beginning, again to ease the transition. After the dog has settled in, talk with your veterinarian about switching to the food of your choice.', '1705462878.png');

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
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `phone_number` varchar(255) DEFAULT NULL,
  `fname` varchar(255) NOT NULL DEFAULT '',
  `gender` enum('male','female','others') DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`, `phone_number`, `fname`, `gender`, `birthdate`, `address`, `postal_code`) VALUES
(48, 'Ubaldo', 'fudgebar6969@gmail.com', '2024-01-11 07:26:11', '$2y$12$VUxhwfMNHdWm2X0Q8QT6t.X7ZEQjK1KKk2IEpkpQkTmSz7rSkkSQq', NULL, '2024-01-11 07:24:43', '2024-01-11 07:26:11', 0, '09983666899', 'Jay-vee', 'male', '2003-08-05', 'Blk 21 santol Street G.H.O.C', '2200'),
(49, 'Admin', 'Jayveeubaldo110@gmail.com', '2024-01-11 07:28:51', '$2y$12$QH0oGM0gBXGNzRQ/ETRNeOEbeQzZHhV4PlVT5J3Oj0r1QihFT80kK', NULL, '2024-01-11 07:28:13', '2024-01-11 07:28:51', 1, '09983666899', 'Jayvee', 'male', '2024-01-10', 'Blk 21 santol Street G.H.O.C', '2200'),
(50, 'Jay-vee A. Ubaldo', 'Jayveeubaldo0805@gmail.com', '2024-01-13 06:34:24', '$2y$12$fwDevKdrHQ/EioW34xWgE.UKRmWIePwKWSSwkYjWSkDv57jnugCAG', NULL, '2024-01-13 06:33:11', '2024-01-13 06:34:24', 0, '09983666893', 'Jayvee', 'male', '2024-01-23', 'Blk 21 santol Street', '2200'),
(51, 'Ubaldo', 'Jayveeubaldo112@gmail.com', '2024-01-14 04:18:44', '$2y$12$bkajM6EivuHJRCMT03SOguDv4K1KbKjRydKivOEUu8n7C9lsDZrSK', NULL, '2024-01-14 04:17:05', '2024-01-14 04:18:44', 0, '09983666893', 'Jay-vee', 'male', '2024-01-24', 'Blk 21 santol st.', '2200'),
(52, 'Ubaldo', 'jeibiubaldo123@gmail.com', NULL, '$2y$12$mznRTu1OdTV0TD6j0zgIueGhaCD1TmL34waKruLdrRgd8Lp5rRRp2', NULL, '2024-01-14 06:55:31', '2024-01-14 06:55:31', 0, '09654622334', 'Jayvee', 'male', '2024-01-23', 'blk 21 santol street', '2200'),
(53, 'Pacis', 'patrickpacis123@gmail.com', '2024-01-14 07:15:06', '$2y$12$vsKeHF5iKENEOcVrSTFXROw11RqgI/dGPjFraxUBAmsjFNGCgdC3y', NULL, '2024-01-14 07:14:33', '2024-01-14 07:15:06', 0, '09983666899', 'Patrick', 'male', '2024-06-11', 'Blk 21 santol Street G.H.O.C', '2200'),
(54, 'Ubaldo', 'Jayvee@gmail.com', '2024-01-15 02:58:47', '$2y$12$L/0vtCXji7GBt6rCuL9gdepTA8uOLejp/Rj48vBfax4w1TtXa/ETW', NULL, '2024-01-15 02:56:41', '2024-01-15 02:58:47', 0, '09983666895', 'Jayvee', 'male', '2024-08-05', 'Blk 21 santol St. G.H.O.C', '2211'),
(55, 'Leguid', 'JLLLeguid@gmail.com', '2024-01-16 03:45:54', '$2y$12$47bYIS1Yzw4eDiuvOKjxgeCIEH.xXF5D6jqqdjGRWRsXxV.iC7ECm', NULL, '2024-01-16 03:45:12', '2024-01-16 03:45:54', 0, '09348288492', 'JL', 'male', '2024-02-07', 'Blk 21 santol Street G.H.O.C', '2200'),
(56, 'Domalanta', 'rjdomalanta123@gmail.com', '2024-01-17 01:24:28', '$2y$12$HfvYxQQ9nL5I9UVX24U5WuDPgoamOqmSR7TaxCYQnFBzGVlACmW1S', NULL, '2024-01-17 01:23:08', '2024-01-17 01:24:28', 0, '09983666893', 'Rj', 'male', '2020-08-20', 'blk21 santol Street', '2233');

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
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
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
-- Indexes for table `petcare`
--
ALTER TABLE `petcare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pet_cares`
--
ALTER TABLE `pet_cares`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petcare`
--
ALTER TABLE `petcare`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pet_cares`
--
ALTER TABLE `pet_cares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

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
