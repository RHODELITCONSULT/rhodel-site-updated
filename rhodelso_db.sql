-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2024 at 01:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rhodelso_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `info_type` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) NOT NULL,
  `information` longtext DEFAULT NULL,
  `terms_and_conditions` longtext DEFAULT NULL,
  `privacy_policy` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'admin',
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `type`, `mobile`, `email`, `password`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', 'admin', '0244491803', 'admin@admin.com', '$2y$12$XMmLYA3Ak/1eJBfssNgVSOXiDMD19BJJq6QC82shJgl63Di8GCHfG', NULL, 1, '2024-11-25 15:04:49', '2024-11-26 06:52:37'),
(2, 'Subadmin', 'subadmin', '0206931921', 'subadmin@subadmin.com', '$2y$12$XFwPGv.vpG0qGx3SwLPrY.P.hIsb0VA8tzYrFmlzevkYFdZUP0qpC', '9374.jpg', 1, '2024-11-28 22:29:00', '2024-11-28 22:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `admins_roles`
--

CREATE TABLE `admins_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subadmin_id` bigint(20) UNSIGNED NOT NULL,
  `module` varchar(255) NOT NULL,
  `view_access` varchar(255) NOT NULL,
  `edit_access` varchar(255) NOT NULL,
  `full_access` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins_roles`
--

INSERT INTO `admins_roles` (`id`, `subadmin_id`, `module`, `view_access`, `edit_access`, `full_access`, `created_at`, `updated_at`) VALUES
(1, 2, '_token', '0', '0', '0', NULL, NULL),
(2, 2, 'subadmin_id', '0', '0', '0', NULL, NULL),
(3, 2, 'cms_pages', '1', '1', '1', NULL, NULL),
(4, 2, 'categories', '1', '1', '1', NULL, NULL),
(5, 2, 'products', '1', '1', '1', NULL, NULL),
(6, 2, 'brands', '1', '1', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `type`, `link`, `title`, `alt`, `sort`, `status`, `created_at`, `updated_at`) VALUES
(1, '40536.jpg', 'Slider', 'it-consultancy', 'IT Consultancy', 'it-consultancy', 1, 1, '2024-11-29 23:10:26', '2024-11-29 23:11:25'),
(2, '46434.jpg', 'Slider', 'cctv', 'Best CCTV', 'cctv', 2, 1, '2024-11-29 23:12:54', '2024-11-29 23:12:54');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_image` varchar(255) DEFAULT NULL,
  `brand_logo` varchar(255) DEFAULT NULL,
  `brand_discount` double DEFAULT NULL,
  `description` text DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_image`, `brand_logo`, `brand_discount`, `description`, `url`, `meta_title`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rhodel', '', '', NULL, NULL, 'rhodel', NULL, NULL, NULL, 1, '2024-11-25 18:29:22', '2024-11-26 09:35:11'),
(2, 'Hikvision', '', '', NULL, NULL, 'hikvision', NULL, NULL, NULL, 1, '2024-11-26 09:35:30', '2024-11-26 09:35:30'),
(3, 'RHODEL INVENTORY  & POS', '', '', NULL, 'RHODEL INVENTORY  & POS', 'rhodel-inventory-pos', NULL, NULL, NULL, 1, '2024-11-28 13:26:14', '2024-11-28 13:26:14'),
(4, 'RHODEL CRM', '', '', NULL, 'RHODEL CRM', 'rhodel-crm', NULL, NULL, NULL, 1, '2024-11-28 13:26:44', '2024-11-28 13:26:44'),
(5, 'RHODEL HR & PAYROLL', '', '', NULL, 'RHODEL HRMS', 'rhodel-hr-payroll', NULL, NULL, NULL, 1, '2024-11-28 13:27:33', '2024-11-29 01:35:31'),
(6, 'AC', '', '', NULL, 'AC', 'ac', NULL, NULL, NULL, 1, '2024-11-28 13:27:53', '2024-11-29 01:38:07'),
(7, 'CONSULTANCY', '', '', NULL, NULL, 'consultancy', NULL, NULL, NULL, 1, '2024-11-29 01:17:56', '2024-11-29 01:37:35'),
(8, 'SOLAR', '', '', NULL, NULL, 'solar', NULL, NULL, NULL, 1, '2024-11-29 01:32:40', '2024-11-29 01:32:40'),
(9, 'CCTV', '', '', NULL, NULL, 'cctv', NULL, NULL, NULL, 1, '2024-11-29 01:32:55', '2024-11-29 01:32:55'),
(10, 'ELECTRIC FENCE', '', '', NULL, NULL, 'electric-fence', NULL, NULL, NULL, 1, '2024-11-29 01:33:18', '2024-11-29 01:33:18'),
(11, 'COOLING AND HEATING', '', '', NULL, NULL, 'cooling-and-heating', NULL, NULL, NULL, 1, '2024-11-29 01:33:52', '2024-11-29 01:33:52'),
(12, 'RHODEL SCHOOL MANAGEMENT SOFTWARE', '', '', NULL, NULL, 'rhodel-school-management-software', NULL, NULL, NULL, 1, '2024-11-29 01:34:28', '2024-11-29 01:34:28'),
(13, 'RHODEL E-COMMERCE', '', '', NULL, NULL, 'rhodel-e-commerce', NULL, NULL, NULL, 1, '2024-11-29 01:39:36', '2024-11-29 01:39:36'),
(14, 'RHODEL HMS', '', '', NULL, NULL, 'rhodel-hms', NULL, NULL, NULL, 1, '2024-11-29 01:40:07', '2024-11-29 01:40:07'),
(15, 'RHODEL WAYBILL', '', '', NULL, NULL, 'rhodel-waybill', NULL, NULL, NULL, 1, '2024-11-29 01:41:08', '2024-11-29 10:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `category_discount` double DEFAULT NULL,
  `description` text DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `category_name`, `category_image`, `category_discount`, `description`, `url`, `meta_title`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Solar Energy', '', NULL, 'Solar Energy', 'solar-energy', NULL, NULL, NULL, 1, '2024-11-25 18:22:12', '2024-11-28 13:19:15'),
(2, 0, 'IT Consultancy', '', NULL, NULL, 'it-consultancy', NULL, NULL, NULL, 1, '2024-11-25 18:25:33', '2024-11-28 13:19:57'),
(3, 0, 'Electric Fence', '', NULL, 'Electric Fence', 'electric-fence', NULL, NULL, NULL, 1, '2024-11-28 13:22:00', '2024-11-28 13:22:00'),
(4, 0, 'CCTV System', '', NULL, 'CCTV System', 'cctv-system', NULL, NULL, NULL, 1, '2024-11-28 13:23:18', '2024-11-28 13:23:18'),
(5, 2, 'Software', '', NULL, 'Software', 'software', NULL, NULL, NULL, 1, '2024-11-28 13:24:05', '2024-11-28 13:24:05'),
(6, 0, 'Cooling & Heating', '89620.jpg', NULL, 'Cooling & Heating', 'cooling-heating', NULL, NULL, NULL, 1, '2024-11-28 13:25:04', '2024-11-28 21:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `cms_pages`
--

CREATE TABLE `cms_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_pages`
--

INSERT INTO `cms_pages` (`id`, `title`, `description`, `url`, `meta_title`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'Content is coming soon', 'about-us', 'About Us', 'About Us Content', 'about us, about', 1, NULL, '2024-11-26 09:41:45'),
(2, 'Terms & Conditions', 'Content is coming soon', 'terms-conditions', 'Terms & Conditions', 'Terms & Conditions Content', 'terms, terms conditions', 1, NULL, '2024-11-26 09:27:05'),
(3, 'Privacy Policy', 'Content is coming soon', 'privacy-policy', 'Privacy Policy', 'Privacy Policy Content', 'privacy policy', 1, NULL, '2024-11-26 09:27:07');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message_text` longtext NOT NULL,
  `reply_status` tinyint(1) NOT NULL DEFAULT 0,
  `replied_at` datetime DEFAULT NULL,
  `reply_text` longtext DEFAULT NULL,
  `read_at` datetime DEFAULT NULL,
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2023_12_06_083351_create_cms_pages_table', 1),
(5, '2023_12_12_110703_create_admins_roles_table', 1),
(6, '2024_01_03_192422_create_categories_table', 1),
(7, '2024_02_19_130339_create_brands_table', 1),
(8, '2024_02_21_095417_create_banners_table', 1),
(9, '2024_05_09_130623_create_newsletter_subscribers_table', 1),
(10, '2024_06_04_110052_create_abouts_table', 1),
(11, '2024_06_05_133539_addd_privacy_policy_column_to_abouts', 1),
(12, '2024_06_16_094722_create_messages_table', 1),
(13, '2024_08_14_133626_create_admins_table', 1),
(14, '2024_02_14_175845_create_products_images_table', 2),
(15, '2024_06_16_183638_create_products_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscribers`
--

CREATE TABLE `newsletter_subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_code` varchar(255) DEFAULT NULL,
  `product_video` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `is_featured` enum('No','Yes') DEFAULT NULL,
  `is_bestseller` enum('No','Yes') DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `product_name`, `product_code`, `product_video`, `description`, `meta_title`, `meta_description`, `meta_keywords`, `is_featured`, `is_bestseller`, `status`, `created_at`, `updated_at`) VALUES
(7, 5, 3, 'RHODEL INVENTORY & POS', 'INPOS1', NULL, 'Inventory and POS Software', NULL, NULL, NULL, 'Yes', 'Yes', 1, '2024-11-29 01:01:03', '2024-11-29 01:01:03'),
(8, 5, 4, 'RHODEL CRM', 'CRM', NULL, NULL, NULL, NULL, NULL, 'No', 'No', 1, '2024-11-29 01:02:53', '2024-11-29 01:02:53'),
(9, 5, 5, 'RHODEL HR & PAYROLL', 'HRMS', NULL, NULL, NULL, NULL, NULL, 'No', 'No', 1, '2024-11-29 01:06:53', '2024-11-29 01:43:21'),
(10, 5, 12, 'RHODEL SMS', 'RSMS', NULL, NULL, NULL, NULL, NULL, 'No', 'No', 1, '2024-11-29 01:42:12', '2024-11-29 01:42:12'),
(11, 5, 14, 'RHODEL HMS', 'RHMS', NULL, NULL, NULL, NULL, NULL, 'No', 'No', 1, '2024-11-29 01:42:51', '2024-11-29 01:42:51'),
(12, 1, 8, 'SOLAR', 'SOLAR', NULL, 'We Are pioneers of solar & renewable energy industry', NULL, NULL, NULL, 'Yes', 'Yes', 1, '2024-11-29 01:44:33', '2024-11-29 21:07:41'),
(13, 6, 11, 'Cooling & Heating', 'col1', NULL, 'We Are pioneers of cooling & heating systems', NULL, NULL, NULL, 'Yes', 'Yes', 1, '2024-11-29 21:10:09', '2024-11-29 21:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_sort` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `product_id`, `image`, `image_sort`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 'product-5770496.png', 1, 1, '2024-11-29 01:01:04', '2024-11-29 01:01:51'),
(2, 8, 'product-7220519.png', NULL, 1, '2024-11-29 01:02:53', '2024-11-29 01:02:53'),
(3, 9, 'product-9996691.png', NULL, 1, '2024-11-29 01:06:53', '2024-11-29 01:43:21'),
(4, 12, 'product-9010318.jpg', NULL, 1, '2024-11-29 01:44:33', '2024-11-29 21:07:41'),
(5, 13, 'product-6484257.jpg', NULL, 1, '2024-11-29 21:10:09', '2024-11-29 21:10:36');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('LvSSnFvV4XnGx7gbwXdDdiaQa8VWUO3NGl89ONHq', NULL, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiejFzZmNYM3I5WTdFdUxvc1lOcGNwd3NOazVaMVFDZ0VYMTd1UGhXUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732922239),
('PjjaEH0dmwL01Rr3vBmls4WAyGIohB34yULxWf0q', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.6 Safari/605.1.15', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoibldMYWdBMmp1NktJcWJkMmlaY3JLazdVY2NjVVFsRUo5TW1OWVA0ZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjE6e2k6MDtzOjU6ImVycm9yIjt9czozOiJuZXciO2E6MDp7fX1zOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJwYWdlIjtzOjk6ImRhc2hib2FyZCI7czo1OiJlcnJvciI7czozNzoiVmlldyBbRnJvbnRlbmQuUGFnZXMuaG9tZV0gbm90IGZvdW5kLiI7fQ==', 1732925224);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admins_roles`
--
ALTER TABLE `admins_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_pages`
--
ALTER TABLE `cms_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admins_roles`
--
ALTER TABLE `admins_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cms_pages`
--
ALTER TABLE `cms_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
