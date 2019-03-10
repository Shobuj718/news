-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2019 at 05:54 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_category_id` int(10) UNSIGNED DEFAULT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `slug`, `parent_category_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'National', 'national', NULL, 1, '2019-03-07 11:20:36', '2019-03-07 11:20:36', NULL),
(2, 'Football', 'football', NULL, 1, '2019-03-07 11:21:00', '2019-03-07 11:21:00', NULL),
(3, 'Cricket', 'cricket', NULL, 1, '2019-03-07 11:21:07', '2019-03-07 11:21:07', NULL),
(4, 'Technology', 'technology', NULL, 1, '2019-03-07 11:21:24', '2019-03-07 11:21:24', NULL),
(5, 'Fashons', 'fashon', NULL, 1, '2019-03-07 11:21:30', '2019-03-10 04:05:11', NULL),
(6, 'International', 'international', NULL, 1, '2019-03-07 11:21:37', '2019-03-07 11:21:37', NULL),
(7, 'History', 'history', NULL, 1, '2019-03-07 11:21:43', '2019-03-10 04:01:18', NULL),
(8, 'Other', 'other', NULL, 1, '2019-03-07 11:22:07', '2019-03-07 11:22:07', NULL),
(9, 'Math', 'math', NULL, 0, '2019-03-07 11:38:59', '2019-03-10 03:58:58', NULL),
(10, 'home', 'home', 1, 1, '2019-03-07 11:46:10', '2019-03-07 11:46:10', NULL),
(11, 'Barcelona', 'barcelona', 2, 1, '2019-03-07 12:06:10', '2019-03-07 12:06:10', NULL),
(12, 'Bogura', 'bogura', 7, 1, '2019-03-07 12:06:27', '2019-03-07 12:06:27', NULL),
(13, 'Mancester City', 'mancester-city', 2, 1, '2019-03-07 12:12:52', '2019-03-07 12:12:52', NULL),
(14, 'Bangladesh Cricket', 'bangladesh-cricket', 3, 1, '2019-03-09 06:40:59', '2019-03-09 06:40:59', NULL),
(15, 'Real Madrid', 'real-madrid', 2, 0, '2019-03-09 06:41:20', '2019-03-09 13:02:30', NULL),
(16, 'PSG', 'psg', 2, 1, '2019-03-09 06:41:37', '2019-03-09 06:41:37', NULL),
(17, 'Chelsi', 'chelsi', 2, 0, '2019-03-09 07:07:29', '2019-03-09 13:02:02', NULL),
(18, 'Physics', 'physics', NULL, 1, '2019-03-09 07:29:03', '2019-03-10 03:58:32', NULL),
(19, 'Mobile', 'mobile', 4, 1, '2019-03-09 12:26:31', '2019-03-09 12:26:31', NULL),
(20, 'Telivision', 'telivision', 4, 0, '2019-03-09 12:26:43', '2019-03-09 12:26:43', NULL),
(21, 'কৃষি', 'agriculture', NULL, 1, '2019-03-09 12:57:15', '2019-03-10 04:47:59', NULL),
(22, 'ইরি', 'irri', 21, 1, '2019-03-10 03:55:34', '2019-03-10 04:48:40', NULL),
(23, 'ত্রিকোণমিতি', '', 9, 1, '2019-03-10 04:00:15', '2019-03-10 04:00:15', NULL),
(24, 'Dhaka', 'dhaka', 7, 1, '2019-03-10 04:00:55', '2019-03-10 04:00:55', NULL),
(27, 'Jatiyo', 'jatiyo', 1, 1, '2019-03-10 04:19:55', '2019-03-10 04:19:55', NULL),
(32, 'জাতীয়', 'জাতীয়', NULL, 1, '2019-03-10 04:39:56', '2019-03-10 04:39:56', NULL),
(33, 'মাঠে ময়দানে', 'মাঠে-ময়দানে', NULL, 1, '2019-03-10 04:40:54', '2019-03-10 04:40:54', NULL),
(34, 'fason', 'fason', 5, 1, '2019-03-10 04:53:11', '2019-03-10 04:53:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2019_03_06_120454_create_roles_table', 1),
(6, '2019_03_06_120460_create_users_table', 1),
(7, '2019_03_06_120461_create_password_resets_table', 1),
(8, '2019_03_07_153643_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `permission`, `created_at`, `updated_at`) VALUES
(1, 'Root User', 'root', NULL, NULL),
(2, 'Admin', 'admin', NULL, NULL),
(3, 'Editor', 'editor', NULL, NULL),
(4, 'Modifier', 'modifier', NULL, NULL),
(5, 'Author', 'euthor', NULL, NULL),
(6, 'User', 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `mobile`, `address`, `email_verified_at`, `password`, `photo`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ehsan News', 1, 'shobuj@gmail.com', '01926287401', NULL, '2019-03-07 11:19:57', '$2y$10$ijquW4PVLoNrvDqbW4y6/OaukYee5flURPFMJb7zfjDfWKxEtDgoe', 'http://localhost/news/public/BackEnd/img/ehsan_soft_logo.PNG', 1, 'hqZZyNYxZD39LIbBAZHob7bifmHJXsIpeLK8LFFJuT4uwduRd70E9FBBQTwp', '2019-03-07 11:19:57', '2019-03-07 11:19:57', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_name_unique` (`category_name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
