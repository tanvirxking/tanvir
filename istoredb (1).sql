-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 20, 2024 at 05:06 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `istoredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_28_221804_create_products_table', 1),
(6, '2024_04_19_091934_create_products_table', 2),
(7, '2024_05_17_175341_create_orders_table', 3),
(8, '2024_05_17_175441_create_order_details_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(7, 'MD Sahoss Khan', 'sahosskhan@gmail.com', '01778030482', 'Mirpur, Kushtia', '2024-05-17 13:04:02', '2024-05-17 13:04:02'),
(8, 'MD. Noman Islam', 'noman@gmail.com', '01700568450', 'Boro Bazar, Kushtia, Bangladesh', '2024-06-08 21:35:47', '2024-06-08 21:35:47'),
(11, 'MD Sahoss Khan', 'sahosskhan359@gmail.com', '01778030482', '20/1 Lawrence lane, Thanapara', '2024-06-08 22:03:32', '2024-06-08 22:03:32'),
(12, 'Shishir Khan', 'shishir4128@gmail.com', '01887818689', '20/1 Lawrence lane, Thanapara', '2024-06-08 22:04:50', '2024-06-08 22:04:50'),
(13, 'MD Sahoss Khan', 'sahosskhan359@gmail.com', '01778030482', '20/1 Lawrence lane, Thanapara', '2024-06-09 01:14:59', '2024-06-09 01:14:59'),
(14, 'MD Sahoss Khan', 'sahosskhan359@gmail.com', '01778030482', 'Dhaka', '2024-06-09 22:39:30', '2024-06-09 22:39:30'),
(15, 'MD Imran Hossen', 'trximran@gmail.com', '01405239208', 'Satkhira, Khulna, Bangladesh', '2024-08-29 13:29:09', '2024-08-29 13:29:09'),
(16, 'Upoma', 'mmm@gjsahfjs.com', '01778030482', '20/1 Lawrence lane, Thanapara', '2024-08-29 13:43:47', '2024-08-29 13:43:47');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `name`, `qty`, `price`, `total`, `created_at`, `updated_at`) VALUES
(10, 6, 10, 'Halal Islamic Attar', 1, 299.00, 299.00, '2024-05-17 13:02:36', '2024-05-17 13:02:36'),
(11, 7, 7, 'Stylish Man Punjabi', 1, 100.00, 100.00, '2024-05-17 13:04:02', '2024-05-17 13:04:02'),
(12, 7, 10, 'Halal Islamic Attar', 1, 299.00, 299.00, '2024-05-17 13:04:02', '2024-05-17 13:04:02'),
(13, 7, 14, 'Halal Arab Dates', 1, 699.00, 699.00, '2024-05-17 13:04:02', '2024-05-17 13:04:02'),
(14, 8, 10, 'Halal Islamic Attar', 1, 299.00, 299.00, '2024-06-08 21:35:47', '2024-06-08 21:35:47'),
(15, 8, 14, 'Halal Arab Dates', 1, 699.00, 699.00, '2024-06-08 21:35:47', '2024-06-08 21:35:47'),
(16, 11, 15, 'hunny nutes', 1, 1250.00, 1250.00, '2024-06-08 22:03:32', '2024-06-08 22:03:32'),
(17, 13, 7, 'Stylish Man Punjabi', 1, 100.00, 100.00, '2024-06-09 01:14:59', '2024-06-09 01:14:59'),
(18, 14, 7, 'Stylish Man Punjabi', 1, 100.00, 100.00, '2024-06-09 22:39:30', '2024-06-09 22:39:30'),
(19, 15, 8, 'Nice Cotten T-Shirt', 1, 399.00, 399.00, '2024-08-29 13:29:09', '2024-08-29 13:29:09'),
(20, 15, 14, 'Halal Arab Dates', 1, 533.00, 533.00, '2024-08-29 13:29:09', '2024-08-29 13:29:09'),
(21, 16, 11, 'Pure Cotten Kufi', 1, 215.00, 215.00, '2024-08-29 13:43:47', '2024-08-29 13:43:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `productname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `productdescription` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `productcatagory` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `productprice` float NOT NULL,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `productname`, `productdescription`, `productcatagory`, `productprice`, `photo`) VALUES
(7, '2024-05-11 19:58:33', '2024-05-11 19:58:47', 'Stylish Man Punjabi', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Punjabi', 100, '1715479113.jpg'),
(8, '2024-05-11 20:00:54', '2024-05-11 20:00:54', 'Nice Cotten T-Shirt', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'T-Shirt', 399, '1715479254.jpg'),
(9, '2024-05-11 20:01:29', '2024-05-11 20:01:29', 'Saudia Arab Jainamaz', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Jainamaz', 199, '1715479289.jpg'),
(10, '2024-05-11 20:01:52', '2024-05-11 20:01:52', 'Halal Islamic Attar', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Attar', 299, '1715479312.jpg'),
(11, '2024-05-11 20:03:13', '2024-05-11 20:03:13', 'Pure Cotten Kufi', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Kufi', 215, '1715479393.jpg'),
(12, '2024-05-11 20:04:17', '2024-05-11 20:04:17', 'Tasbih Tul Arab', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Tasbih', 267, '1715479457.jpg'),
(13, '2024-05-11 20:05:19', '2024-05-11 20:05:19', 'Al Hadis Books', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Books', 499, '1715479519.jpg'),
(14, '2024-05-11 20:05:55', '2024-08-07 14:53:46', 'Halal Arab Dates', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Punjabi', 533, '1715479555.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MD Sahoss Khan', 'sahoss@gmail.com', NULL, '$2y$12$H0WB8lGRlbJrhcYPbByJpuXAduhdbAFNNOkF8tGQ3OoHH3ejv413y', 'vKQvNdjVk1N5gOjNAS2TT4qJMxDx5YBAR8g0T2tkdjhZM8UTU00HQGkvZYDv', '2024-04-18 03:49:19', '2024-05-11 18:42:02'),
(2, 'ISAdmin', 'admin@gmail.com', NULL, '$2y$12$UjcyB3QQPP4L.1I6DJW/7OLKXzV49U92N6zI2aZYoXmNcd81OVD52', NULL, '2024-05-11 18:44:31', '2024-05-11 18:44:31'),
(3, 'KPI User', 'user@gmail.com', NULL, '$2y$12$3wWIRa3gBKHjBaElJ68saONy0YAnapbkMhX4w2Naq.LYDozXTR12W', NULL, '2024-05-11 19:50:19', '2024-05-11 19:50:19'),
(4, 'mahidul', 'abcd123@gmail.com', NULL, '$2y$12$LGOjsFjRnpNwxp5VLhacLus762nxRe1Bp2IcRhhLyjWiTRtZCH/fa', NULL, '2024-10-14 00:48:55', '2024-10-14 00:48:55');

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
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
