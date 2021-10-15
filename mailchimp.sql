-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2021 at 09:08 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mailchimp`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_list`
--

CREATE TABLE `contact_list` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `pin_code` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `export_email` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_list`
--

INSERT INTO `contact_list` (`id`, `email`, `first_name`, `last_name`, `phone_number`, `pin_code`, `address`, `export_email`, `status`, `created_at`, `updated_at`) VALUES
(45, 'admin@gmail.com', 'hussain', 'mohammad ali', '46464', '74600', 'ezzi bagh north nazimabad karachi', 1, 1, '2021-10-14', '2021-10-14'),
(46, 'admin@gmail.com', 'hussain', 'mohammad ali', '46464', '74600', 'ezzi bagh north nazimabad karachi', 1, 1, '2021-10-14', '2021-10-14'),
(47, 'admin33@gmail.com', 'hussain', 'mohammad ali', '46464', '74600', 'ezzi bagh north nazimabad karachi', 1, 1, '2021-10-14', '2021-10-14'),
(48, 'admin@gmail.com', 'zaids', 'tamriz', '03330246433', '74600', 'ezzi bagh north nazimabad karachi', 1, 1, '2021-10-14', '2021-10-14'),
(49, 'admin334@gmail.com', 'hussain', 'mohammad ali', '46464', '74600', 'ezzi bagh north nazimabad karachi', 1, 1, '2021-10-14', '2021-10-14'),
(50, 'areebvohra@gmail.com', 'areeb', 'checking', 'asddasd', '74600', 'ezzi bagh north nazimabad karachi', 1, 1, '2021-10-14', '2021-10-14'),
(51, 'baseer@gmail.com', 'zaids', 'mohammad ali', '46464', '74600', 'ezzi bagh north nazimabad karachi', 1, 1, '2021-10-14', '2021-10-14'),
(52, 'kumarsingh@gmail.com', 'hussain', 'mohammad ali', '46464', '74600', 'ezzi bagh north nazimabad karachi', 1, 1, '2021-10-14', '2021-10-14'),
(53, 'kumarsingh123@gmail.com', 'hussain', 'mohammad ali', '46464', '74600', 'ezzi bagh north nazimabad karachi', 1, 1, '2021-10-14', '2021-10-14'),
(54, 'kumarsingh123345@gmail.com', 'hussain', 'mohammad ali', '46464', '74600', 'ezzi bagh north nazimabad karachi', 0, 0, '2021-10-14', '2021-10-14'),
(55, 'kashi@gmail.com', 'kashi', 'ali', '03330246433', '4646', '64646464', 0, 1, '2021-10-15', '2021-10-15'),
(56, 'admin@gmail.com', 'hussain', 'checking', '03330246433', '74600', 'ezzi bagh north nazimabad karachi', 0, 1, '2021-10-15', '2021-10-15'),
(57, 'abusalah1234@innovative-net.com', 'zaids', 'checking', '46464', '74600', 'ezzi bagh north nazimabad karachi', 0, 1, '2021-10-15', '2021-10-15'),
(58, 'admin@gmail.com', 'hussain', 'ali', '46464', '74600', 'ezzi bagh north nazimabad karachi', 0, 1, '2021-10-15', '2021-10-15'),
(59, 'admin@gmail.com', 'hussain', 'tamriz', '03330246433', '74600', 'ezzi bagh north nazimabad karachi', 0, 1, '2021-10-15', '2021-10-15'),
(60, 'admin999@gmail.com', 'hussain', 'tamriz', '03330246433', '74600', 'ezzi bagh north nazimabad karachi', 0, 1, '2021-10-15', '2021-10-15'),
(61, 'khadaradar@gmail.com', 'kharadar', 'tset', '46464', '74600', 'ezzi bagh north nazimabad karachi', 0, 1, '2021-10-15', '2021-10-15'),
(62, 'yousufshah@gmail.com', 'yousuf', 'shah', '03330246433', '74600', 'ezzi bagh north nazimabad karachi', 0, 1, '2021-10-15', '2021-10-15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_10_14_122046_create_jobs_table', 2),
(4, '2021_10_14_122111_create_failed_jobs_table', 2);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$lv6Yl2zMOfFlNmzCIbi3B.9g/pklbad0nb1SXBeAWuDdLVIMLzJe6', NULL, NULL, NULL),
(2, 'mani', 'mani@gmai.com', NULL, '$2y$10$BVwXPYTlfNzA7Z2c1/wzQ.wtLrE24RB.BqtokPtyGdKsxed62z5OC', NULL, '2021-10-15 02:26:50', '2021-10-15 02:26:50'),
(3, 'mani', 'mani44@gmai.com', NULL, '$2y$10$o/Hp2s1/.vynyXd1VKFF9OXMv1zRgON4xqei0d9SbVhhlB/ExDMmu', NULL, '2021-10-15 02:27:26', '2021-10-15 02:27:26'),
(4, 'mani', 'mani444@gmai.com', NULL, '$2y$10$CidE7AkEsvv/jK8J3jeLK.OOjUA9mQnxPVNPjPy5nSTrfGpQHAz4u', NULL, '2021-10-15 02:29:11', '2021-10-15 02:29:11'),
(5, 'mansoor doctor', 'mansoo88rsajad@ymail.com', NULL, '$2y$10$gAz3p6VA0DXr6OZNBZNKrezt72T0BExAXB5aJ/zkBITt1qajIkaDi', NULL, '2021-10-15 02:35:33', '2021-10-15 02:35:33'),
(6, 'mansoor doctor', 'mansoo8800rsajad@ymail.com', NULL, '$2y$10$OgtiNSwTrpY7.6LJEf5IMOL2gV/u5VPpUCHNPs9csX2YwmChTRF/2', NULL, '2021-10-15 02:36:53', '2021-10-15 02:36:53'),
(7, 'admin', 'admin12@gmail.com', NULL, '$2y$10$LP6j6UozSNlkSbPKz1XQNuq8ACqPNbDZrETEVC6VvTuM.QM/4JgqG', NULL, '2021-10-15 02:48:21', '2021-10-15 02:48:21'),
(8, 'jami', 'jami@gmail.com', NULL, '$2y$10$Gge9Kobs6wWxGsc8l0a3Te7soXiOkOhTfS0Lnj5Zx8GmxsaOkda0G', NULL, '2021-10-15 03:38:12', '2021-10-15 03:38:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_list`
--
ALTER TABLE `contact_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_list`
--
ALTER TABLE `contact_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=515;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
