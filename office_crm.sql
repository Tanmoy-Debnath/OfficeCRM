-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2018 at 07:36 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `office_crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `franchisees`
--

CREATE TABLE `franchisees` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bkash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dbbl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sis_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_slot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_renew` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `franchisees`
--

INSERT INTO `franchisees` (`id`, `title`, `f_name`, `l_name`, `father_name`, `sex`, `date`, `month`, `year`, `address`, `phone_number`, `bkash`, `dbbl`, `nid`, `sis_id`, `no_slot`, `no_payment`, `no_renew`, `user_name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Mr.', 'Soyad', 'Khan', 'rahman Mia', 'Male', '7', '6', '1985', 'Mirpur', '01685726839', '01685726839', '01685726839', '01685726839', '12345', '3', '3', '3', 'Soyad7', '$2y$10$Plhh3oLXJrl2YgJQb2UGs.bsOA3nQXYWcCp/WOYMpWWD6W.vNoXsK', '2018-09-02 00:55:26', '2018-09-02 02:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `franchisee_logins`
--

CREATE TABLE `franchisee_logins` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gueests`
--

CREATE TABLE `gueests` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gueests`
--

INSERT INTO `gueests` (`id`, `user_name`, `email_address`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 'Jamir uddin', 'rahima@gmail.com', 'Jolil', '2018-09-01 04:58:37', '2018-09-01 04:58:37'),
(2, 'Jahid1', 'tanmoy.bubt@gmail.com', '0187452358', '2018-09-01 05:00:55', '2018-09-01 05:00:55'),
(3, 'Fahima2', 'rahman@gmail.com', '0187452358', '2018-09-01 05:06:12', '2018-09-01 05:06:12'),
(4, 'Jamia', 'mahmudl@gmail.com', '01685726839', '2018-09-01 05:07:31', '2018-09-01 05:07:31'),
(5, 'Mujahid15', 'rahman@gmail.com', '0187452358', '2018-09-01 05:13:36', '2018-09-01 05:13:36'),
(6, 'Arpana', 'tanu@gmail.com', '01825777120', '2018-09-01 05:15:11', '2018-09-01 05:15:11'),
(7, 'Tanmoy Debnath Pappu', 'rahman@gmail.com', '0187452358', '2018-09-01 05:30:09', '2018-09-01 05:30:09'),
(8, 'Rahman Mia', 'imran.cse24@gmail.com', '01685726839', '2018-09-01 23:16:58', '2018-09-01 23:16:58'),
(9, 'Soyad', 'tanmoy.bubt@gmail.com', '01685726839', '2018-09-02 01:59:24', '2018-09-02 01:59:24'),
(10, 'Soyad7', 'imran.cse24@gmail.com', '123456', '2018-09-03 10:26:35', '2018-09-03 10:26:35');

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
(105, '2014_10_12_000000_create_users_table', 1),
(106, '2014_10_12_100000_create_password_resets_table', 1),
(107, '2018_08_11_091208_create_stuffs_table', 1),
(108, '2018_08_12_083634_create_franchisees_table', 1),
(109, '2018_08_13_085242_create_slots_table', 1),
(110, '2018_08_13_095149_create_gueests_table', 1),
(111, '2018_08_18_095541_create_franchisee_logins_table', 1),
(112, '2018_08_19_103643_create_orders_table', 1),
(113, '2018_08_29_070424_create_works_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guest_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_due` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reffered` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` int(10) UNSIGNED NOT NULL,
  `slot_file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stuffs`
--

CREATE TABLE `stuffs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stuffs`
--

INSERT INTO `stuffs` (`id`, `user_name`, `password`, `email_address`, `phone_number`, `type`, `created_at`, `updated_at`) VALUES
(2, 'sumi1', '123456', 'sumi@gmail.com', '01685726839', 'receptionist', '2018-09-03 10:11:22', '2018-09-03 10:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tanmoy Debnath', 'tanmoy.bubt@gmail.com', '$2y$10$Mscm1GHyva7zcO9rN.DG9.Wgc6H8ybr54dv2vi1mnNrvTAiBgu8sy', 'VBsq44lwCGM87mJ3Cfz39ngl8MHDXGUiwfSloQoYFrIHJ0CtYp8meyKKuP1x', '2018-09-01 04:09:00', '2018-09-01 04:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `record` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `policy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `claims` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `franchisees`
--
ALTER TABLE `franchisees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `franchisee_logins`
--
ALTER TABLE `franchisee_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gueests`
--
ALTER TABLE `gueests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stuffs`
--
ALTER TABLE `stuffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `franchisees`
--
ALTER TABLE `franchisees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `franchisee_logins`
--
ALTER TABLE `franchisee_logins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gueests`
--
ALTER TABLE `gueests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stuffs`
--
ALTER TABLE `stuffs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
