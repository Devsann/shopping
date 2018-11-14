-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2018 at 03:41 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoping`
--

-- --------------------------------------------------------

--
-- Table structure for table `infoteches`
--

CREATE TABLE `infoteches` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgs` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infoteches`
--

INSERT INTO `infoteches` (`id`, `title`, `price`, `phone`, `about`, `imgs`, `created_at`, `updated_at`) VALUES
(1, 'MSI', 1100000, '09444498965', 'msi-gp63-leopard-8rd-gaming-6gb', '5b8cf11a75c8b_msi_a.png', '2018-09-03 02:00:18', '2018-09-03 02:00:18'),
(2, 'Dell use', 410000, '0976545654', 'dell-inspiron-3552-pen4um', '5b8fc17f5affa_dell_c.png', '2018-09-03 02:05:33', '2018-09-05 05:13:59'),
(3, 'Dell', 800000, '756554234', 'dell-inspiron-5459-i7', '5b8cf45a0b41b_dell_b.png', '2018-09-03 02:14:10', '2018-09-03 02:14:10'),
(4, 'Lenovo', 700000, '896765646', 'ideapad-110-i3', '5b8cf47502213_dell_c.png', '2018-09-03 02:14:37', '2018-09-03 02:14:37'),
(5, 'Lenovo', 800000, '87656554', 'ideapad-320-i57th', '5b8cf4a5948f6_len_a.png', '2018-09-03 02:15:25', '2018-09-03 02:15:25'),
(6, 'MAC', 900000, '5646587576', 'Mac Mini', '5b8cf5085bbff_access_a.png', '2018-09-03 02:17:04', '2018-09-03 02:17:04'),
(7, 'Keyboard new', 4000, '78656554', 'Keyboard with Promotion', '5b8fc1b53bd35_access_c.png', '2018-09-03 02:17:45', '2018-09-05 05:14:53'),
(8, 'USB', 4000, '78656545', 'USB Cable', '5b8cf55154ad6_access_d.png', '2018-09-03 02:18:17', '2018-09-03 02:18:17');

-- --------------------------------------------------------

--
-- Table structure for table `itbuylists`
--

CREATE TABLE `itbuylists` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dtail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `itbuylists`
--

INSERT INTO `itbuylists` (`id`, `name`, `mail`, `phone`, `pdname`, `dtail`, `created_at`, `updated_at`) VALUES
(1, 'MoMo', 'momo@gmail.com', '0976553657', 'MSI', 'msi-gp63-leopard-8rd-gaming-6gb', '2018-09-06 02:10:33', '2018-09-06 02:10:33'),
(2, 'ToeToe', 'toe@gmail.com', '0976544536', 'Dell use', 'dell-inspiron-3552-pen4um', '2018-09-06 02:13:22', '2018-09-06 02:13:22'),
(3, 'PoPo', 'popo@gmail.com', '54356785764', 'USB', 'USB Cable', '2018-09-06 02:18:20', '2018-09-06 02:18:20');

-- --------------------------------------------------------

--
-- Table structure for table `i_ts`
--

CREATE TABLE `i_ts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgs` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_27_063039_create_i_ts_table', 1),
(4, '2018_08_27_095422_create_infoteches_table', 1),
(5, '2018_09_02_071403_create_mobiles_table', 1),
(6, '2018_09_06_064301_create_itbuylists_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`id`, `brand`, `price`, `phone`, `about`, `img`, `created_at`, `updated_at`) VALUES
(1, 'i phone', '120000', '09254231516', 'i phone7 cover', '5b8cd522d70d5_mb_b.png', '2018-09-03 00:00:58', '2018-09-03 00:00:58'),
(2, 'i phone', '45000', '093242345', 'i phone covers', '5b8cd564229ee_mb_g.png', '2018-09-03 00:02:04', '2018-09-03 00:02:04'),
(3, 'Samsung', '450000', '9545424635', 'samsung J4 - gold', '5b8d14faab538_868_sm-j400f_001_front_gold.png', '2018-09-03 04:33:22', '2018-09-03 04:33:22'),
(4, 'Samsung', '550000', '765654345', 'samsung galaxy_s8_plus', '5b8d15911295b_galaxy_s8_plus_midnight_bla.png', '2018-09-03 04:35:53', '2018-09-03 04:35:53'),
(5, 'Samsung', '450000', '786566545', 'galaxy_s8_plus_orchid_gray', '5b8d15bf310cb_galaxy_s8_plus_orchid_gray.png', '2018-09-03 04:36:39', '2018-09-03 04:36:39'),
(6, 'Samsung', '550000', '435432534', 'galaxy_s9_lilac_purple', '5b8d15dd82ca4_galaxy_s9_lilac_purple.png', '2018-09-03 04:37:09', '2018-09-03 04:37:09'),
(7, 'Samsung', '500000', '7856546754', 'galaxy_s9plus_sunrise_gold', '5b8d15f9d5ef3_galaxy_s9plus_sunrise_gold.png', '2018-09-03 04:37:37', '2018-09-03 04:37:37'),
(8, 'Samsung', '400000', '53653747', 'samsung j7-- duo_gold', '5b8d162500552_j7duo_gold.png', '2018-09-03 04:38:21', '2018-09-03 04:38:21'),
(9, 'Accessory', '7000', '876576465', 'Universal-Car-Mount-Mobile-Phone', '5b8d220ca2acf_mb_a.png', '2018-09-03 05:29:08', '2018-09-03 05:29:08'),
(10, 'Accessory', '4500', '6327674622', 'Shinny-PU-Leather-Women-s-Mini', '5b8d223658f37_mb_j.png', '2018-09-03 05:29:50', '2018-09-03 05:29:50');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Thidar', 'thidar@gmail.com', '$2y$10$jmcMxPVlbitCrBNhEeJFG.gyIeneXJK96q.kkJLvDjdIkR3bcgaci', 'LQOI8AodVFmRSLPEKA3oUestwSN9hzD3wxE6jZ6OsSow1pqk0rWfN4CVu9Lk', '2018-09-02 23:56:26', '2018-09-02 23:56:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infoteches`
--
ALTER TABLE `infoteches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itbuylists`
--
ALTER TABLE `itbuylists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `i_ts`
--
ALTER TABLE `i_ts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `infoteches`
--
ALTER TABLE `infoteches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `itbuylists`
--
ALTER TABLE `itbuylists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `i_ts`
--
ALTER TABLE `i_ts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
