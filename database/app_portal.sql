-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 03:07 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lga` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identification_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identification_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nysc_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nysc_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tertiary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tertiary_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_ssce` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_nysc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_degree` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `position`, `phone`, `contact`, `state`, `lga`, `identification_type`, `identification_number`, `profile_picture`, `nysc_year`, `nysc_number`, `secondary`, `secondary_year`, `tertiary`, `tertiary_year`, `upload_ssce`, `upload_nysc`, `upload_degree`, `created_at`, `updated_at`) VALUES
(1, 1, 'Full Stack Developer', '08135540700', 'Km 5 Otukop road welfare quarters, makurdi', 'Benue', 'Katsina-ala', 'International Passport', '222244653', 'uploads/profiles/1561133090IMG_20181028_101030_9.jpg', '2019-03-14', 'A006785439', 'College of Education, Demonstration Secondary School, K/als', '2010-07-16', 'Federal Univeristy of Agriculture Makurdi', '2017-03-22', NULL, NULL, NULL, '2019-06-21 15:58:09', '2019-06-26 00:55:00'),
(2, 3, 'Technical Officer', '08034444511', 'Opposite government day secondary school k/ala', 'Benue', 'Ushongo', 'National id-card', '46476989556', 'uploads/profiles/1561108403IMG_20180911_144559_0.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-21 08:12:03', '2019-06-21 08:13:23'),
(6, 4, 'Full Stack Developer', '+234', 'k/ala', 'Benue', 'Katsina-ala', 'Drivers License', '222244653', 'uploads/profiles/1561513877banner06.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-26 00:50:00', '2019-06-26 00:51:17');

-- --------------------------------------------------------

--
-- Table structure for table `lgas`
--

CREATE TABLE `lgas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lgas`
--

INSERT INTO `lgas` (`id`, `state_id`, `name`, `created_at`, `updated_at`) VALUES
(0, 6, 'Vandeikya', NULL, NULL),
(1, 6, 'Katsina-ala', NULL, NULL),
(2, 6, 'Gboko', NULL, NULL),
(3, 6, 'Otukpo', NULL, NULL),
(4, 6, 'Ushongo', NULL, NULL),
(5, 6, 'Makurdi', NULL, NULL),
(7, 6, 'Logo', NULL, NULL);

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
(42, '2019_06_17_015814_create_states_table', 2),
(43, '2019_06_17_020157_create_lgas_table', 3),
(48, '2019_06_17_021625_create_users_locales_table', 4),
(65, '2014_10_12_000000_create_users_table', 5),
(66, '2014_10_12_100000_create_password_resets_table', 5),
(67, '2019_06_17_020212_create_applications_table', 5),
(68, '2019_06_17_021241_create_lgas_table', 5),
(69, '2019_06_17_021559_create_user_locals_table', 5),
(70, '2019_06_17_023453_create_positions_table', 5),
(71, '2019_06_17_023639_create_states_table', 5);

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
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Full Stack Developer', NULL, NULL),
(2, 'Sales Manager', NULL, NULL),
(3, 'Database Administrator', NULL, NULL),
(4, 'Receptionist', NULL, NULL),
(5, 'Driver', NULL, NULL),
(6, 'Technical Officer', NULL, NULL),
(7, 'Driver', '2019-06-21 15:50:10', '2019-06-21 15:50:10'),
(8, 'Customer care', '2019-06-21 15:50:10', '2019-06-21 15:50:10'),
(9, 'Store Keeper', '2019-06-21 15:50:10', '2019-06-21 15:50:10'),
(10, 'Sales Manager', '2019-06-21 15:50:10', '2019-06-21 15:50:10');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Abia', NULL, NULL),
(2, 'Adamawa', NULL, NULL),
(3, 'Akwa ibo', NULL, NULL),
(4, 'Anambra', NULL, NULL),
(5, 'Bauchi', NULL, NULL),
(6, 'Benue', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ayange Felix ', 'ayangefelix8@gmail.com', NULL, '$2y$10$t9jCiq2VHjX6izY1PKrMTex76Pu4BLXbIWrRMUDQ3lR0KyqLQEA0K', NULL, '2019-06-21 15:50:10', '2019-06-21 15:50:10'),
(3, 'Atekombo fater', 'logicfatee360@gmail.com', NULL, '$2y$10$Ha.Jz49vMWIbNuY2qTG.2OiXxRsf8H.d7EjkeqbP1tK2Gdq7qL65u', NULL, '2019-06-21 08:11:19', '2019-06-21 08:11:19'),
(4, 'Wombo paul', 'paulw@gmail.com', NULL, '$2y$10$zaGviFyw4q0gW6UpwVDXROrAJMCS0PjvSytFjwu/UHxObbNEwOMC.', NULL, '2019-06-26 01:03:32', '2019-06-26 01:03:32');

-- --------------------------------------------------------

--
-- Table structure for table `user_locals`
--

CREATE TABLE `user_locals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL,
  `lga_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lgas`
--
ALTER TABLE `lgas`
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
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_locals`
--
ALTER TABLE `user_locals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lgas`
--
ALTER TABLE `lgas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_locals`
--
ALTER TABLE `user_locals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
