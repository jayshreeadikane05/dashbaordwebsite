-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2024 at 10:00 AM
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
-- Database: `vgnmedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `first_name`, `last_name`, `email`, `mobile_no`, `password`, `role`, `status`, `created_at`, `updated_at`) VALUES
(4, 'jayshree', 'adikane', 'jayshree.adikane@vereigenmedia.in', '8956325689', '$2y$10$Eaiog.tB3YLC89N2Ydx2auaJO2k7vnycEiCE8vaFBElL8heRaM7Wy', 'admin', 'active', '2024-10-18 06:38:15', '2024-10-24 10:48:04');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subheading` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `blogimage` varchar(255) DEFAULT NULL,
  `categories` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`categories`)),
  `tag` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`tag`)),
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `keywords` varchar(500) DEFAULT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `slug`, `name`, `subheading`, `description`, `blogimage`, `categories`, `tag`, `meta_title`, `meta_description`, `keywords`, `author_id`, `created_at`, `updated_at`, `status`) VALUES
(55, 'why-personalizing-digital-interactions-matters-jdgfhgjf', 'Why Personalizing Digital Interactions Matters?', NULL, '<p>dsfdg</p>', 'images/1730370385.webp', '\"[\\\"46\\\"]\"', '\"[\\\"31\\\"]\"', 'test', 'gdf gdfgfd', 'fdgfd gdfg', 4, '2024-10-31 04:56:25', '2024-10-31 06:39:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(32, 'netstestcategories', 1, '2024-10-29 09:14:26', '2024-10-29 09:14:26'),
(33, 'fsfgf', 1, '2024-10-29 09:18:48', '2024-10-29 09:18:48'),
(35, 'gdgf', 1, '2024-10-29 09:20:37', '2024-10-29 09:20:37'),
(36, 'fdfgf', 1, '2024-10-29 09:21:25', '2024-10-29 09:21:25'),
(37, 'hjkhjk', 1, '2024-10-29 09:22:00', '2024-10-29 09:22:00'),
(38, 'fdfdgf', 1, '2024-10-29 09:38:13', '2024-10-29 09:38:13'),
(39, 'tytuytuy', 1, '2024-10-29 09:41:41', '2024-10-29 09:41:41'),
(40, 'fsdffgnew', 1, '2024-10-29 09:42:52', '2024-10-29 09:42:52'),
(41, 'ffd', 1, '2024-10-29 09:46:23', '2024-10-29 09:46:23'),
(43, 'fsfdgfd', 1, '2024-10-30 03:55:15', '2024-10-30 03:55:15'),
(46, 'newcat', 1, '2024-10-30 09:20:50', '2024-10-30 09:20:50');

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
-- Table structure for table `form_entries`
--

CREATE TABLE `form_entries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `hereabout` varchar(255) NOT NULL,
  `ip_address` varchar(250) DEFAULT NULL,
  `browser` varchar(250) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_entries`
--

INSERT INTO `form_entries` (`id`, `name`, `email`, `phone`, `hereabout`, `ip_address`, `browser`, `message`, `created_at`, `updated_at`) VALUES
(15, 'jayshree', 'admin@mail.com', '9890712685', 'Facebook', '122.185.210.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'dffg', '2024-10-29 06:51:56', '2024-10-29 06:51:56'),
(16, 'jayshree', 'admin@mail.com', '9890712685', 'Facebook', '122.185.210.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'dffg', '2024-10-29 06:51:56', '2024-10-29 06:51:56'),
(17, 'jayshree', 'admin@mail.com', '9890712685', 'Facebook', '122.185.210.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'dffg', '2024-10-29 06:51:56', '2024-10-29 06:51:56'),
(18, 'jayshree', 'admin@mail.com', '9890712685', 'Facebook', '122.185.210.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'dffg', '2024-10-29 06:51:56', '2024-10-29 06:51:56'),
(19, 'jayshree', 'admin@mail.com', '9890712685', 'Facebook', '122.185.210.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'dffg', '2024-10-29 06:51:56', '2024-10-29 06:51:56'),
(20, 'jayshree', 'admin@mail.com', '9890712685', 'Facebook', '122.185.210.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'dffg', '2024-10-29 06:51:56', '2024-10-29 06:51:56'),
(21, 'jayshree', 'admin@mail.com', '9890712685', 'Facebook', '122.185.210.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'dffg', '2024-10-29 06:51:56', '2024-10-29 06:51:56'),
(22, 'jayshree', 'admin@mail.com', '9890712685', 'Facebook', '122.185.210.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'dffg', '2024-10-29 06:51:56', '2024-10-29 06:51:56'),
(23, 'jayshree', 'admin@mail.com', '9890712685', 'Facebook', '122.185.210.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'dffg', '2024-10-29 06:51:56', '2024-10-29 06:51:56'),
(24, 'jayshree', 'admin@mail.com', '9890712685', 'Facebook', '122.185.210.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'dffg', '2024-10-29 06:51:56', '2024-10-29 06:51:56'),
(25, 'jayshree', 'admin@mail.com', '9890712685', 'Facebook', '122.185.210.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'dffg', '2024-10-29 06:51:56', '2024-10-29 06:51:56'),
(26, 'jayshree', 'admin@mail.com', '9890712685', 'Facebook', '122.185.210.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'dffg', '2024-09-18 06:51:56', '2024-09-17 06:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `getintouch`
--

CREATE TABLE `getintouch` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `services` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `google_analytics_settings`
--

CREATE TABLE `google_analytics_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `measurement_id` varchar(255) NOT NULL,
  `api_key` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `google_analytics_settings`
--

INSERT INTO `google_analytics_settings` (`id`, `measurement_id`, `api_key`, `created_at`, `updated_at`) VALUES
(1, 'G-T4BVRP3CQMgfgdf', 'https://analytics.google.com/', '2024-10-28 02:48:16', '2024-10-28 02:48:28');

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
(8, '2024_08_01_143815_add_is_admin_to_users_table', 4),
(67, '2014_10_12_000000_create_users_table', 5),
(68, '2014_10_12_100000_create_password_reset_tokens_table', 5),
(69, '2019_08_19_000000_create_failed_jobs_table', 5),
(70, '2019_12_14_000001_create_personal_access_tokens_table', 5),
(71, '2024_07_12_105350_create_form_entries_table', 5),
(72, '2024_07_12_140111_create_getintouch_table', 5),
(73, '2024_07_18_153307_create_subscriptions_table', 5),
(74, '2024_08_01_151533_create_admins_table', 5),
(75, '2024_08_07_150539_create_blogs_table', 5),
(76, '2024_08_09_092025_create_categories_table', 5),
(77, '2024_10_16_074553_create_tags_table', 5),
(78, '2024_10_17_144728_create_videos_table', 6),
(79, '2024_10_18_095850_create_admin_users_table', 7),
(80, '2024_10_18_100123_create_admin_users_table', 8),
(81, '2024_10_18_120415_add_role_to_admins_table', 9),
(82, '2024_10_18_142514_create_vgnpages_table', 10),
(83, '2024_10_25_081439_create_website_settings_table', 11),
(84, '2024_10_25_100952_create_sitemapsettings_table', 12),
(85, '2024_10_25_124242_add_status_to_blogs_table', 13),
(86, '2024_10_28_080443_create_google_analytics_settings_table', 14),
(88, '2024_10_29_161123_create_social_integration', 15),
(89, '2014_10_12_100000_create_password_resets_table', 16);

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
-- Table structure for table `sitemapsettings`
--

CREATE TABLE `sitemapsettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sitemaps` varchar(255) NOT NULL,
  `includeimages` varchar(150) DEFAULT NULL,
  `linkspersitemap` int(11) NOT NULL,
  `posttype` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`posttype`)),
  `publictaxonomies` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sitemapsettings`
--

INSERT INTO `sitemapsettings` (`id`, `sitemaps`, `includeimages`, `linkspersitemap`, `posttype`, `publictaxonomies`, `created_at`, `updated_at`) VALUES
(1, 'yes', 'yes', 100, '[\"post\",\"pages\"]', 'categories', '2024-10-25 06:08:28', '2024-10-25 10:52:31');

-- --------------------------------------------------------

--
-- Table structure for table `social_integration`
--

CREATE TABLE `social_integration` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebookapiid` varchar(255) DEFAULT NULL,
  `facebookapikey` varchar(255) DEFAULT NULL,
  `linkedinapiid` varchar(255) DEFAULT NULL,
  `linkedinapikey` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_integration`
--

INSERT INTO `social_integration` (`id`, `facebookapiid`, `facebookapikey`, `linkedinapiid`, `linkedinapikey`, `created_at`, `updated_at`) VALUES
(1, 'fdgfd', 'gdfgdf', 'gdfgfd', 'gdfgfdg', '2024-10-30 02:19:13', '2024-10-30 02:20:55');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'jayshreeadikane@gmail.com', '2024-10-22 13:28:36', '2024-10-22 13:28:45'),
(2, 'asad@gmail.com', '2024-10-22 13:28:52', '2024-10-22 13:28:58'),
(7, 'asa12d@gmail.com', '2024-10-22 13:28:52', '2024-10-22 13:28:58'),
(8, 'asa1221d@gmail.com', '2024-10-22 13:28:52', '2024-10-22 13:28:58'),
(9, 'jayshreeadikane212@gmail.com', '2024-10-22 13:28:36', '2024-10-22 13:28:45'),
(10, 'jayshreeadikane21@gmail.com', '2024-10-22 13:28:36', '2024-10-22 13:28:45'),
(11, 'jayshreeadikane2122@gmail.com', '2024-10-22 13:28:36', '2024-10-22 13:28:45'),
(12, 'asa1221d21@gmail.com', '2024-10-22 13:28:52', '2024-10-22 13:28:58'),
(13, 'asa122221d21@gmail.com', '2024-10-22 13:28:52', '2024-10-22 13:28:58'),
(14, 'asa122221d211@gmail.com', '2024-10-22 13:28:52', '2024-10-22 13:28:58'),
(15, 'as22a122221d211@gmail.com', '2024-10-22 13:28:52', '2024-10-22 13:28:58'),
(16, 'as212a122221d211@gmail.com', '2024-10-22 13:28:52', '2024-10-22 13:28:58'),
(17, 'as212a122221d2111@gmail.com', '2024-10-22 13:28:52', '2024-10-22 13:28:58');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(19, 'jayshree', 0, '2024-10-29 09:26:44', '2024-10-29 09:26:58'),
(20, 'fdsfs', 1, '2024-10-29 09:29:14', '2024-10-29 09:29:14'),
(21, 'fsfsd', 1, '2024-10-29 09:29:42', '2024-10-29 09:29:42'),
(30, 'fdsfsdfd', 1, '2024-10-30 08:30:03', '2024-10-30 08:30:03'),
(31, 'uytuty', 1, '2024-10-30 08:30:07', '2024-10-30 08:30:07');

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

-- --------------------------------------------------------

--
-- Table structure for table `vgnpages`
--

CREATE TABLE `vgnpages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pagename` varchar(255) NOT NULL,
  `pageurl` varchar(255) NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vgnpages`
--

INSERT INTO `vgnpages` (`id`, `pagename`, `pageurl`, `author_id`, `created_at`, `updated_at`, `status`, `meta_title`, `meta_description`, `meta_keywords`) VALUES
(35, 'Home', 'http://localhost:9000', 4, '2024-10-21 07:43:21', '2024-10-22 08:01:37', 1, 'VGEN MEDIA|Top Marketing & Advertising Agency In UAE', 'Transform your digital presence with VGEN MEDIA\'s all-in-one Digital Marketing Suite, Advertising Operations, Visual Content and Enhanced Marketing solutions!', 'Top Marketing & Advertising Agency In UAE'),
(36, 'About Us', 'https://www.vgenmedia.com/about-us', 4, '2024-10-21 07:43:34', '2024-10-21 06:13:05', 1, 'VGEN MEDIA|Top Marketing & Advertising Agency In UAE', 'Transform your digital presence with VGEN MEDIA\'s all-in-one Digital Marketing Suite, Advertising Operations, Visual Content and Enhanced Marketing solutions!', 'Top Marketing & Advertising Agency In UAE'),
(37, 'Contact Us', 'https://vgenmedia.com/contact', 4, '2024-10-21 07:43:49', '2024-10-21 06:26:37', 1, 'VGEN MEDIA|Top Marketing & Advertising Agency In UAE', 'Transform your digital presence with VGEN MEDIA\'s all-in-one Digital Marketing Suite, Advertising Operations, Visual Content and Enhanced Marketing solutions!', 'Top Marketing & Advertising Agency In UAE'),
(38, 'Services', 'https://vgenmedia.com/services', 4, '2024-10-21 07:43:56', '2024-10-21 06:45:51', 1, 'VGEN MEDIA|Top Marketing & Advertising Agency In UAE', 'Transform your digital presence with VGEN MEDIA\'s all-in-one Digital Marketing Suite, Advertising Operations, Visual Content and Enhanced Marketing solutions!', 'Top Marketing & Advertising Agency In UAE'),
(39, 'Digital Marketing', 'https://vgenmedia.com/services/digital-marketing', 4, '2024-10-21 07:44:03', '2024-10-28 02:16:40', 1, 'VGEN MEDIA|Top Marketing & Advertising Agency In UAE', 'Transform your digital presence with VGEN MEDIA\'s all-in-one Digital Marketing Suite, Advertising Operations, Visual Content and Enhanced Marketing solutions!', 'Top Marketing & Advertising Agency In UAE'),
(40, 'Advertising Operation', 'https://vgenmedia.com/services/advertising-operation', 4, '2024-10-21 07:44:11', '2024-10-21 06:44:40', 1, 'VGEN MEDIA|Top Marketing & Advertising Agency In UAE', 'Transform your digital presence with VGEN MEDIA\'s all-in-one Digital Marketing Suite, Advertising Operations, Visual Content and Enhanced Marketing solutions!', 'Top Marketing & Advertising Agency In UAE'),
(41, 'Visual Content', 'https://vgenmedia.com/services/visual-content', 4, '2024-10-21 07:44:19', '2024-10-21 06:45:25', 1, 'VGEN MEDIA|Top Marketing & Advertising Agency In UAE', 'Transform your digital presence with VGEN MEDIA\'s all-in-one Digital Marketing Suite, Advertising Operations, Visual Content and Enhanced Marketing solutions!', 'Top Marketing & Advertising Agency In UAE'),
(42, 'Enhanced Marketing', 'https://vgenmedia.com/services/enhanced-marketing', 4, '2024-10-21 07:44:28', '2024-10-30 09:22:31', 1, 'VGEN MEDIA|Top Marketing & Advertising Agency In UAE dgfdg', 'Transform your digital presence with VGEN MEDIA\'s all-in-one Digital Marketing Suite, Advertising Operations, Visual Content and Enhanced Marketing solutions! gdfgd', 'Top Marketing & Advertising Agency In UAE'),
(43, 'Subscription', 'https://vgenmedia.com/subscription', 4, '2024-10-21 07:44:36', '2024-10-21 06:46:00', 1, 'VGEN MEDIA|Top Marketing & Advertising Agency In UAE', 'Transform your digital presence with VGEN MEDIA\'s all-in-one Digital Marketing Suite, Advertising Operations, Visual Content and Enhanced Marketing solutions!', 'Top Marketing & Advertising Agency In UAE'),
(44, 'Privacy', 'https://vgenmedia.com/privacy', 4, '2024-10-21 07:44:43', '2024-10-21 06:45:16', 1, 'VGEN MEDIA|Top Marketing & Advertising Agency In UAE', 'Transform your digital presence with VGEN MEDIA\'s all-in-one Digital Marketing Suite, Advertising Operations, Visual Content and Enhanced Marketing solutions!', 'Top Marketing & Advertising Agency In UAE'),
(45, 'Cookiesssss', 'https://vgenmedia.com/cookies', 4, '2024-10-21 07:44:50', '2024-10-30 04:18:14', 1, 'VGEN MEDIA|Top Marketing & Advertising Agency In UAE', 'Transform your digital presence with VGEN MEDIA\'s all-in-one Digital Marketing Suite, Advertising Operations, Visual Content and Enhanced Marketing solutions!', 'Top Marketing & Advertising Agency In UAE'),
(46, 'Blogs', 'https://vgenmedia.com/blogs', 4, '2024-10-21 07:44:50', '2024-10-21 06:45:05', 1, 'VGEN MEDIA|Top Marketing & Advertising Agency In UAE', 'Transform your digital presence with VGEN MEDIA\'s all-in-one Digital Marketing Suite, Advertising Operations, Visual Content and Enhanced Marketing solutions!', 'Top Marketing & Advertising Agency In UAE'),
(47, 'Video', 'https://vgenmedia.com/our-video', 4, '2024-10-21 07:44:50', '2024-10-21 06:45:05', 1, 'VGEN MEDIA|Top Marketing & Advertising Agency In UAE', 'Transform your digital presence with VGEN MEDIA\'s all-in-one Digital Marketing Suite, Advertising Operations, Visual Content and Enhanced Marketing solutions!', 'Top Marketing & Advertising Agency In UAE');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `video` varchar(255) NOT NULL,
  `categories` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`categories`)),
  `tag` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`tag`)),
  `meta_title` varchar(250) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `keywords` varchar(250) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `slug`, `name`, `description`, `video`, `categories`, `tag`, `meta_title`, `meta_description`, `keywords`, `status`, `created_at`, `updated_at`, `author_id`) VALUES
(30, 'dfdf-fgdfgd-gdfgdf-gdfgf-yyyyyy', 'dfdf fgdfgd gdfgdf gdfgf', '<p>dsfdsf</p>', 'videos/1730376482.mp4', '\"[\\\"46\\\"]\"', '\"[\\\"31\\\"]\"', 'sdfds', 'dsfs sdfd', 'dsfd', 1, '2024-10-31 06:38:02', '2024-10-31 06:53:55', 4);

-- --------------------------------------------------------

--
-- Table structure for table `website_settings`
--

CREATE TABLE `website_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sitetitle` varchar(255) DEFAULT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `siteaddress` text DEFAULT NULL,
  `siteicon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_settings`
--

INSERT INTO `website_settings` (`id`, `sitetitle`, `tagline`, `siteaddress`, `siteicon`, `created_at`, `updated_at`) VALUES
(1, 'VGEN MEDIA|Top Marketing & Advertising Agency In UAE', 'VGEN MEDIA|Top Marketing & Advertising Agency In UAE', 'https://vgenmedia.com/', 'assets/logos/1730100898.webp', '2024-10-25 03:02:55', '2024-10-28 02:53:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_email_unique` (`email`),
  ADD UNIQUE KEY `admin_users_mobile_no_unique` (`mobile_no`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`),
  ADD UNIQUE KEY `mobile_no_2` (`mobile_no`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_author_id_foreign` (`author_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `form_entries`
--
ALTER TABLE `form_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `getintouch`
--
ALTER TABLE `getintouch`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `getintouch_email_unique` (`email`);

--
-- Indexes for table `google_analytics_settings`
--
ALTER TABLE `google_analytics_settings`
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
-- Indexes for table `sitemapsettings`
--
ALTER TABLE `sitemapsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_integration`
--
ALTER TABLE `social_integration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscriptions_email_unique` (`email`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vgnpages`
--
ALTER TABLE `vgnpages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vgnpages_pageurl_unique` (`pageurl`),
  ADD KEY `vgnpages_author_id_foreign` (`author_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_author_id_foreign` (`author_id`);

--
-- Indexes for table `website_settings`
--
ALTER TABLE `website_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_entries`
--
ALTER TABLE `form_entries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `getintouch`
--
ALTER TABLE `getintouch`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `google_analytics_settings`
--
ALTER TABLE `google_analytics_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sitemapsettings`
--
ALTER TABLE `sitemapsettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_integration`
--
ALTER TABLE `social_integration`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vgnpages`
--
ALTER TABLE `vgnpages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `website_settings`
--
ALTER TABLE `website_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `admin_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vgnpages`
--
ALTER TABLE `vgnpages`
  ADD CONSTRAINT `vgnpages_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `admin_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `admin_users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
