-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 02, 2024 at 04:52 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luggage_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint UNSIGNED NOT NULL,
  `invoice` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `hub_id` bigint UNSIGNED NOT NULL,
  `booking_date` timestamp NOT NULL,
  `check_in_date` timestamp NOT NULL,
  `check_out_date` timestamp NOT NULL,
  `pick_up_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drop_off_location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small_bags` int NOT NULL,
  `medium_bags` int NOT NULL,
  `large_bags` int NOT NULL,
  `extra_large_bags` int NOT NULL,
  `driving_price` decimal(8,2) DEFAULT NULL,
  `luggage_photos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `premium_services` text COLLATE utf8mb4_unicode_ci,
  `total_cost` decimal(10,2) NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `invoice`, `user_id`, `hub_id`, `booking_date`, `check_in_date`, `check_out_date`, `pick_up_location`, `drop_off_location`, `small_bags`, `medium_bags`, `large_bags`, `extra_large_bags`, `driving_price`, `luggage_photos`, `premium_services`, `total_cost`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '#71401232', 3, 1, '2024-07-26 13:39:21', '2024-07-26 18:00:00', '2024-07-27 18:00:00', 'Rajbari, Bangladesh', NULL, 2, 2, 0, 0, 908.88, NULL, NULL, 73.50, 'Booked', NULL, '2024-07-26 13:39:21', '2024-07-26 13:39:21'),
(2, '#71401627', 3, 1, '2024-07-26 13:44:48', '2024-07-26 18:00:00', '2024-07-27 18:00:00', 'Rajbari, Bangladesh', NULL, 2, 1, 0, 0, 908.88, NULL, NULL, 47.25, 'Booked', NULL, '2024-07-26 13:44:48', '2024-07-26 13:44:48'),
(3, '#59035709', 3, 1, '2024-07-26 13:54:19', '2024-07-26 18:00:00', '2024-07-28 18:00:00', 'Rajbari, Bangladesh', 'Rajbari, Bangladesh', 2, 1, 0, 0, 908.88, NULL, NULL, 953.88, 'Booked', NULL, '2024-07-26 13:54:19', '2024-07-26 13:54:19'),
(4, '#82552786', 3, 1, '2024-08-02 10:16:42', '2024-08-02 16:10:00', '2024-08-04 16:10:00', 'Rajbari, Bangladesh', NULL, 2, 1, 0, 0, 885.99, NULL, NULL, 930.99, 'Booked', NULL, '2024-08-02 10:16:42', '2024-08-02 10:16:42'),
(5, '#25217441', 3, 1, '2024-08-02 10:36:52', '2024-08-02 16:35:00', '2024-08-03 16:35:00', 'Rajbari, Bangladesh', NULL, 4, 2, 0, 0, 885.99, NULL, NULL, 975.99, 'Booked', NULL, '2024-08-02 10:36:52', '2024-08-02 10:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('admin@gmail.com|::1', 'i:1;', 1722022048),
('admin@gmail.com|::1:timer', 'i:1722022048;', 1722022048);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hub_pricings`
--

CREATE TABLE `hub_pricings` (
  `id` bigint UNSIGNED NOT NULL,
  `hub_id` bigint UNSIGNED NOT NULL,
  `hourly_price_1` decimal(10,2) DEFAULT NULL,
  `daily_price_1` decimal(10,2) DEFAULT NULL,
  `hourly_price_2` decimal(10,2) DEFAULT NULL,
  `daily_price_2` decimal(10,2) DEFAULT NULL,
  `hourly_price_3` decimal(10,2) DEFAULT NULL,
  `daily_price_3` decimal(10,2) DEFAULT NULL,
  `hourly_price_4` decimal(10,2) DEFAULT NULL,
  `daily_price_4` decimal(10,2) DEFAULT NULL,
  `premium_service_1` decimal(10,2) DEFAULT NULL,
  `premium_service_2` decimal(10,2) DEFAULT NULL,
  `premium_service_3` decimal(10,2) DEFAULT NULL,
  `per_km_price` double(10,2) DEFAULT NULL,
  `created_by` bigint UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hub_pricings`
--

INSERT INTO `hub_pricings` (`id`, `hub_id`, `hourly_price_1`, `daily_price_1`, `hourly_price_2`, `daily_price_2`, `hourly_price_3`, `daily_price_3`, `hourly_price_4`, `daily_price_4`, `premium_service_1`, `premium_service_2`, `premium_service_3`, `per_km_price`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 20.00, 10.00, 30.00, 25.00, 50.00, 40.00, 100.00, 75.00, 150.00, 200.00, 300.00, 10.00, 1, NULL, '2024-06-05 14:56:06', NULL),
(2, 4, 20.00, 10.00, 30.00, 25.00, 50.00, 40.00, 100.00, 75.00, 150.00, 200.00, 350.00, 10.00, 4, NULL, '2024-06-05 14:57:24', NULL),
(3, 6, 20.00, 10.00, 30.00, 25.00, 50.00, 40.00, 100.00, 75.00, 150.00, 200.00, 350.00, 10.00, 4, NULL, '2024-06-05 14:57:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '0001_01_01_000000_create_users_table', 1),
(5, '0001_01_01_000001_create_cache_table', 1),
(6, '0001_01_01_000002_create_jobs_table', 1),
(7, '2024_07_13_070652_create_my_hubs_table', 2),
(8, '2024_07_13_071745_create_hub_pricings_table', 3),
(12, '2024_07_13_203122_create_options_table', 5),
(13, '2024_07_13_200934_create_bookings_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `my_hubs`
--

CREATE TABLE `my_hubs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hub_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat_value` decimal(10,8) NOT NULL,
  `lon_value` decimal(11,8) NOT NULL,
  `mobilenumber` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hub_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_bags_capacity` int NOT NULL DEFAULT '0',
  `medium_bags_capacity` int NOT NULL DEFAULT '0',
  `large_bags_capacity` int NOT NULL DEFAULT '0',
  `extra_large_bags_capacity` int NOT NULL DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `help_guide` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `hub_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `del_status` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `my_hubs`
--

INSERT INTO `my_hubs` (`id`, `user_id`, `hub_name`, `address`, `lat_value`, `lon_value`, `mobilenumber`, `hub_area`, `small_bags_capacity`, `medium_bags_capacity`, `large_bags_capacity`, `extra_large_bags_capacity`, `description`, `help_guide`, `hub_image`, `del_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', 'Bounce', 'Dhaka, Bangladesh', 22.51963840, 88.36562410, '9858745896', '2598', 10, 14, 10, 5, '<p>Bounce provides luggage storage through partnerships with local businesses, ensuring a safe and flexible service available in many cities globally.</p>\r\n', '<ul>\r\n	<li>Use the Bounce website or app to find a storage location.</li>\r\n	<li>Choose your city and browse available options.</li>\r\n	<li>Reserve your storage space online.</li>\r\n	<li>Drop off your luggage at the selected location.</li>\r\n	<li>Pick up your luggage at your convenience.</li>\r\n</ul>\r\n', 'c4853777894d00a01e7cba35dcec05b1.PNG', 0, NULL, '2024-07-13 21:55:40', NULL),
(2, '1', 'Truvalue Luggage Store', 'Dhaka, Bangladesh', 22.65646230, 88.44672447, '8758965874', '3500', 10, 14, 10, 5, '<p>Truvalue Luggage Store, now known as Radical Storage, offers luggage storage through a network of local businesses including cafes and shops in various cities worldwide.</p>\r\n', '<ul>\r\n	<li>Access Radical Storage via their website or app.</li>\r\n	<li>Select your city and find a nearby storage spot.</li>\r\n	<li>Book your storage online.</li>\r\n	<li>Drop off your luggage at the designated location.</li>\r\n	<li>Collect your luggage when you need it.</li>\r\n</ul>\r\n', '2d381c7dccf78e6794d10580d1183990.jpg', 0, NULL, '2024-07-13 21:55:09', NULL),
(3, '1', 'CityStasher', 'Dhaka, Bangladesh', 22.56329200, 88.35035660, '8563258965', '4800', 10, 14, 10, 5, '<p>CityStasher connects travelers with local shops and hotels offering secure luggage storage. They operate in several major cities.</p>\r\n', '<ul>\r\n	<li>Go to the CityStasher website or app.</li>\r\n	<li>Select your city and find a suitable storage location.</li>\r\n	<li>Book your storage slot online.</li>\r\n	<li>Drop off your luggage at the chosen site.</li>\r\n	<li>Retrieve your luggage at a convenient time.</li>\r\n</ul>\r\n', 'f6545665c9eca45a4c7b3204d54c3148.jpg', 0, NULL, '2024-07-13 21:55:14', NULL),
(4, '2', 'Luggage Hero', 'Dhaka, Bangladesh', 22.51977890, 88.36542970, '9898969695', '7800', 10, 14, 10, 5, '<p>LuggageHero offers convenient, safe, and insured luggage storage locations in major cities worldwide. Their storage sites include hotels, shops, and cafes.</p>\r\n', '<ul>\r\n	<li>Visit the LuggageHero website or app.</li>\r\n	<li>Choose your city and find a nearby storage location.</li>\r\n	<li>Book your storage online.</li>\r\n	<li>Drop off your luggage and receive a security seal.</li>\r\n	<li>Enjoy your day and pick up your luggage when you&#39;re ready.</li>\r\n</ul>\r\n', '66e6341fec7b8b4a45c8e1eb8fa1207e.jpg', 0, NULL, '2024-07-13 21:55:16', NULL),
(5, '2', 'Stasher', 'Dhaka, Bangladesh', 22.58808960, 88.38528340, '9985845789', '22987', 10, 14, 10, 5, '<p>Welcome to the Grotte du Moulin! This natural loft is recessed in a limestone mound and will surprise you with its transparency. It consists of a large kitchen open to the living room and a bedroom with bathroom separated by a sliding garage door. In the bedroom, you have a double bed (160 cm) and in the living room a single bed (90 cm) with a non convertible sofa that can be used as a small&nbsp;</p>\r\n', '<ul>\r\n	<li>We know that carrying your luggage can be a hassle. Let us take care of it for you. Guide for dropping off and picking up your luggage during your stay.</li>\r\n	<li>We will help you in unloading and tagging your bags, which will be delivered to your room or stored securely if your room isn&#39;t ready.</li>\r\n	<li>We will help you in coordinating pickup times to ensuring your belongings are securely handed back to you, we&#39;ve got you covered</li>\r\n</ul>\r\n', 'efd1bdee47bb7a5afd933b59933ad4ed.PNG', 0, NULL, NULL, NULL),
(6, '2', 'Vertoe', 'Dhaka, Bangladesh', 23.18246460, 90.93111710, '8574857485', '7845', 10, 14, 10, 5, '<p>Vertoe offers short-term luggage storage at convenient locations like retail stores, cafes, and more. They provide a secure and insured service.</p>\r\n', '<ol>\r\n	<li>Access Vertoe via their website or app.</li>\r\n	<li>Choose your city and find a storage location.</li>\r\n	<li>Book and pay for your storage online.</li>\r\n	<li>Drop off your luggage and receive a unique tamper-proof seal.</li>\r\n	<li>Pick up your luggage as per your schedule.</li>\r\n</ol>\r\n', '6dccb926c2b7061b7f0d7d786a65915a.png', 0, NULL, '2024-07-16 08:58:06', NULL),
(7, '2', 'Nannybag', 'Dhaka, Bangladesh', 22.56566280, 88.37239150, '23453243', '324423', 10, 14, 10, 5, '<p>Nannybag partners with hotels and local businesses to provide luggage storage solutions in numerous cities around the world.</p>\r\n', '<ul>\r\n	<li>Visit the Nannybag website or use their app.</li>\r\n	<li>Select your city and find a suitable storage spot.</li>\r\n	<li>Book your storage online.</li>\r\n	<li>Drop off your luggage at the chosen location.</li>\r\n	<li>Retrieve your luggage whenever you need.</li>\r\n</ul>\r\n', '9a20d3d97a9db9f1c9620f8c108662da.PNG', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint UNSIGNED NOT NULL,
  `option_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_identity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `option_name`, `option_identity`, `option_value`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Tax', 'Tax', '5', NULL, '2024-07-13 22:07:22', '2024-07-13 22:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6npE81ywVccY7dLrRbmhLP9wXmcWIup2CJ6x8h59', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTXRvZGhha0xtZVNMQU1PYWR4ZkZLV0xtSkxKc0lWWUNMT3dKZEpzVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3QvbHVnZ2FnZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722149191),
('FSyvsFDUPFHY1CK1ZpG09K6LqYpHjqU9VdoPVRpS', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYTNkb2FiVDgyRVBOUjBDT2FEYm0xYktOTHdiTXVNNVFvSHppTnFtSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3QvbHVnZ2FnZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MjgyOiJodHRwOi8vbG9jYWxob3N0L2x1Z2dhZ2UvZGV0YWlscy9kYXRhL2V5SndhV05yWDNWd1gyeHZZMkYwYVc5dVgyNWhiV1VpT2lKU1lXcGlZWEpwTENCQ1lXNW5iR0ZrWlhOb0lpd2laSEp2Y0Y5dlptWmZiRzlqWVhScGIyNWZibUZ0WlNJNklpSXNJbU5vWldOclNXNUVZWFJsSWpvaU1qQXlOQzB3TnkweU4xUXdNRG8xTVNJc0ltTm9aV05yVDNWMFJHRjBaU0k2SWpJd01qUXRNRGN0TWpoVU1EQTZOVEVpTENKaVlXZE9kVzFpWlhJaU9pSlRiV0ZzYkNBdElESXNJRTFsWkdsMWJTQXRJRElpZlElM0QlM0QiO319', 1722022599),
('iVridLloiyJy2IMjvZ6AA3iv8ejY1G7IaZMABVyC', 3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibVlCekM5WXpLV3RnYVRWeXFUcEtQa0JTNWg0MXpBa1dPVXNnR2w3NyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjgyOiJodHRwOi8vbG9jYWxob3N0L2x1Z2dhZ2UvZGV0YWlscy9kYXRhL2V5SndhV05yWDNWd1gyeHZZMkYwYVc5dVgyNWhiV1VpT2lKU1lXcGlZWEpwTENCQ1lXNW5iR0ZrWlhOb0lpd2laSEp2Y0Y5dlptWmZiRzlqWVhScGIyNWZibUZ0WlNJNklpSXNJbU5vWldOclNXNUVZWFJsSWpvaU1qQXlOQzB3T0Mwd01sUXlNam96TlNJc0ltTm9aV05yVDNWMFJHRjBaU0k2SWpJd01qUXRNRGd0TUROVU1qSTZNelVpTENKaVlXZE9kVzFpWlhJaU9pSlRiV0ZzYkNBdElERXNJRTFsWkdsMWJTQXRJREVpZlElM0QlM0QiO31zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzt9', 1722616760),
('YajceyswbjtJGMmE2rD7v1eccVWYkkxkCfxWPU3S', 3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYXNDbWJYSnhLQ21YVmkxZTZLMGVBU0VUM2J1cTk0cG45UFlJWENHWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly9sb2NhbGhvc3QvbHVnZ2FnZS9jdXN0b21lci1kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzt9', 1722023717);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `mobilenumber` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` int NOT NULL DEFAULT '1' COMMENT '1=Customer; 2=Hub manager; 3=Delivery Agent; 4=admin;',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `about`, `mobilenumber`, `identity`, `profile_pic`, `email`, `user_type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rahul Mitra', 'rahulm', 'Your Storage Expert', '45643535', 'springroll.PNG', 'face124.jpg', 'rahul@qwerty.com', 1, NULL, '$2y$12$xssTAbaerVnxSbIEVy8J0eX0C1cyM/Bb431FG6sGVeeHeXxzTORXS', NULL, '2024-05-29 14:05:32', '2024-07-15 00:03:47'),
(2, 'Mainak Bhattacharjee', 'mainak', 'In love with this beautiful region, dressed in green and inlaid with history, I wanted to show you a hidden traditional treasure, the cave habitat. What a reception to stay in the rock! Passionate about flea market, I appreciate staging the recovered souls who give the place a unique atmosphere. The pleasure of welcoming you. Sandrine.', '23454233345', 'booking-1-1@2x.png', 'ellipse-1194-11@2x.png', 'mb@qwerty.com', 1, NULL, '$2y$10$rapoLSz2N/qM9Y0ihMI75OkeG7.T1gjIy40h3rwrx3AtlXCrs0RS.', NULL, '2024-05-29 14:31:58', NULL),
(3, 'Ariful Sikder', 'ariful', NULL, NULL, NULL, NULL, 'ariful@gmail.com', 1, NULL, '$2y$12$9Fe6GPAWscgt2iHsPg6mL.Q5RWBMIKki1PTl/iVfZQRE.i9dMhy8W', NULL, '2024-07-15 00:20:18', '2024-07-15 00:20:18'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, 'hello@gmail.com', 1, NULL, '$2y$12$YYK/lrArd2.xgtDTJLaApOrw2n3hK.yab4nPRUlscDc.sGzG/tHgO', NULL, '2024-07-15 02:19:37', '2024-07-15 02:19:37'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, 'hello1@gmail.com', 1, NULL, '$2y$12$aqOO3z6x319hMrxeWfFCW.FFKtTd5gEPIFAQb6tU.xydltwAGS1IK', NULL, '2024-07-16 09:58:33', '2024-07-16 09:58:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hub_pricings`
--
ALTER TABLE `hub_pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_hubs`
--
ALTER TABLE `my_hubs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hub_pricings`
--
ALTER TABLE `hub_pricings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `my_hubs`
--
ALTER TABLE `my_hubs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
