-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220305.20ebad0ec5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 11, 2023 at 07:33 AM
-- Server version: 5.7.33
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `treeman`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `additional` text COLLATE utf8mb4_unicode_ci,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner_files`
--

CREATE TABLE `banner_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_id` bigint(20) UNSIGNED NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_additional` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner_translations`
--

CREATE TABLE `banner_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `locale_additional` text COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `directories`
--

CREATE TABLE `directories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `order_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `directory_translations`
--

CREATE TABLE `directory_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `directory_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `filemanager`
--

CREATE TABLE `filemanager` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ext` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` double(8,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `absolute_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_sections`
--

CREATE TABLE `menu_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `menu_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_sections`
--

INSERT INTO `menu_sections` (`id`, `section_id`, `menu_type_id`) VALUES
(84, 102, 0),
(85, 102, 1),
(91, 92, 0),
(92, 93, 0),
(94, 94, 0),
(95, 94, 1),
(96, 95, 0);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_02_100001_create_filemanager_table', 1),
(5, '2021_03_27_202314_create_user_logs_table', 1),
(6, '2021_03_27_220923_create_sections_table', 1),
(7, '2021_03_27_220924_create_section_translations_table', 1),
(8, '2021_03_27_220933_create_posts_table', 1),
(9, '2021_03_27_220934_create_post_translations_table', 1),
(10, '2021_03_27_220935_create_post_files_table', 1),
(11, '2021_03_27_220936_create_submissions_table', 1),
(12, '2021_04_01_123457_create_menu_sections_table', 1),
(13, '2021_04_06_081258_create_slugs_table', 1),
(14, '2021_04_21_125121_temp_files_table', 1),
(15, '2021_04_23_084234_create_banners_table', 1),
(16, '2021_04_23_084326_create_banner_translations_table', 1),
(17, '2021_04_23_084434_create_banner_files_table', 1),
(18, '2021_05_06_065739_create_submission_files_table', 1),
(19, '2021_06_13_163956_create_directories_table', 1),
(20, '2021_06_13_164338_create_directory_translations_table', 1),
(21, '2023_01_25_191556_add_component_to_sections_table', 2),
(23, '2023_01_25_191556_add_is_component_to_sections_table', 3),
(24, '2023_02_15_184625_add_slug_to_slug_table', 1),
(26, '2023_02_27_185416_create_subscribers_table', 4);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `additional` text COLLATE utf8mb4_unicode_ci,
  `active_on_home` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `section_id`, `additional`, `active_on_home`, `thumb`, `author_id`, `date`, `created_at`, `updated_at`) VALUES
(85, 93, '[]', NULL, '63fc96ad3acde.png', 1, NULL, '2023-02-15 14:33:11', '2023-03-21 11:57:19'),
(86, 94, '[]', NULL, '63ecf2dc8c1e6.png', 1, NULL, '2023-02-15 14:57:36', '2023-02-17 13:23:15'),
(87, 95, '{\"mobile\":\"+ 995 098 908 986\",\"email\":\"enterprisegeorgia@yahoo.com\",\"image\":\"63ecf316c89f4.png\"}', NULL, NULL, 1, NULL, '2023-02-15 14:58:30', '2023-02-15 14:58:30'),
(88, 96, '{\"target_blank\":\"1\"}', NULL, '63ef1e31c230e.png', 1, '2023/02/17', '2023-02-17 06:27:03', '2023-02-17 06:27:03'),
(89, 96, '{\"target_blank\":\"1\"}', NULL, '63ef1f066403f.jpg', 1, '2023/02/28', '2023-02-17 06:30:34', '2023-03-23 08:59:26'),
(90, 97, '{\"target_blank\":\"1\",\"image\":\"63ef2257ee8ad.png\"}', NULL, NULL, 1, '2023/02/17', '2023-02-17 06:44:39', '2023-02-17 06:44:39'),
(91, 97, '{\"target_blank\":\"0\",\"image\":\"63ef227772fd5.png\"}', NULL, NULL, 1, '2023/02/16', '2023-02-17 06:45:11', '2023-02-17 06:45:11'),
(92, 97, '{\"target_blank\":\"1\",\"image\":\"63ef228e98847.jpg\"}', NULL, NULL, 1, '2023/02/16', '2023-02-17 06:45:34', '2023-02-17 06:45:34'),
(93, 97, '{\"target_blank\":\"1\",\"image\":\"63ef22f3528e6.png\"}', NULL, NULL, 1, '2023/02/14', '2023-02-17 06:47:15', '2023-02-17 06:47:15'),
(95, 97, '{\"target_blank\":\"1\",\"image\":\"63ef2338eb4f8.png\"}', NULL, NULL, 1, '2023/02/07', '2023-02-17 06:48:24', '2023-02-17 06:48:24'),
(96, 97, '{\"target_blank\":\"1\",\"image\":\"63ef235ee4b82.png\"}', NULL, NULL, 1, '2023/02/22', '2023-02-17 06:49:02', '2023-02-17 06:49:02'),
(97, 98, '{\"target_blank\":\"1\",\"image\":\"63ef24d08da25.jpg\"}', NULL, NULL, 1, '2023/02/18', '2023-02-17 06:55:12', '2023-02-17 06:55:12'),
(98, 99, '{\"target_blank\":\"0\"}', NULL, '63ef8f13a513f.png', 1, '2023/02/17', '2023-02-17 09:10:33', '2023-03-01 11:56:33'),
(99, 100, '{\"target_blank\":\"1\",\"image\":\"63ef6ce5d1f65.png\"}', NULL, NULL, 1, '2023/02/17', '2023-02-17 12:02:45', '2023-02-17 12:02:45'),
(100, 101, '{\"target_blank\":\"1\"}', NULL, NULL, 1, '2023/02/17', '2023-02-17 12:48:36', '2023-02-17 14:49:06'),
(101, 101, '{\"target_blank\":\"0\"}', NULL, NULL, 1, '2023/02/28', '2023-02-17 12:49:09', '2023-02-17 14:52:54'),
(102, 102, '[]', NULL, NULL, 1, NULL, '2023-02-17 13:15:51', '2023-02-17 13:15:51'),
(103, 103, '{\"target_blank\":\"1\",\"image\":\"63ef7e9295521.png\"}', NULL, NULL, 1, '2023/02/18', '2023-02-17 13:18:10', '2023-02-17 13:18:10'),
(104, 104, '{\"target_blank\":\"1\",\"image\":\"63ef8168da160.png\"}', NULL, NULL, 1, '2023/02/18', '2023-02-17 13:30:16', '2023-02-17 13:30:16'),
(105, 105, '{\"target_blank\":\"1\",\"image\":\"63ef87b2186e4.png\"}', NULL, NULL, 1, '2023/02/17', '2023-02-17 13:57:06', '2023-02-17 13:57:06'),
(106, 105, '{\"target_blank\":\"1\",\"image\":\"63ef8b4d5a51a.jpg\"}', NULL, NULL, 1, '2023/02/17', '2023-02-17 14:12:29', '2023-02-17 14:12:29'),
(110, 108, '[]', NULL, NULL, 1, '2023/02/23', '2023-02-21 06:39:31', '2023-02-21 06:39:31'),
(111, 110, '{\"target_blank\":\"0\",\"image\":\"63f46d882c2e0.png\"}', NULL, NULL, 1, '2023/02/17', '2023-02-21 06:43:18', '2023-03-15 07:30:29'),
(112, 111, '[]', NULL, NULL, 1, NULL, '2023-02-21 08:01:47', '2023-02-21 08:01:47'),
(113, 102, '[]', NULL, NULL, 1, NULL, '2023-02-27 06:44:45', '2023-02-27 06:44:45'),
(120, 119, '{\"youtube\":null,\"target_blank\":\"1\",\"image\":\"63fcb285f1e79.jpg\"}', NULL, NULL, 1, '2023/02/15', '2023-02-27 13:39:18', '2023-02-27 13:39:18'),
(121, 120, '[]', NULL, NULL, 1, NULL, '2023-02-27 14:22:25', '2023-02-27 14:22:25'),
(122, 121, '{\"target_blank\":\"1\",\"image\":\"63fdefa6f3a46.jpg\"}', NULL, NULL, 1, '2023/02/28', '2023-02-28 12:12:23', '2023-02-28 12:31:20'),
(123, 122, '{\"target_blank\":\"1\"}', NULL, '63fdf85f6bee1.jpg', 1, '2023/02/28', '2023-02-28 12:49:42', '2023-03-01 07:03:33'),
(124, 123, '{\"target_blank\":\"1\",\"image\":\"63fe036793dfe.jpg\"}', NULL, NULL, 1, '2023/02/24', '2023-02-28 13:36:39', '2023-02-28 13:36:39'),
(125, 124, '{\"target_blank\":\"1\"}', NULL, NULL, 1, '2023/03/15', '2023-03-06 13:46:28', '2023-03-06 13:46:28'),
(126, 126, '{\"target_blank\":\"1\"}', NULL, NULL, 6, '2023/03/21', '2023-03-21 11:33:03', '2023-03-21 11:33:03'),
(127, 94, '[]', NULL, '6419aa2f3dd3c.jpg', 6, NULL, '2023-03-21 12:59:30', '2023-03-21 12:59:30'),
(128, 127, '{\"target_blank\":\"0\",\"image\":\"641ebd3d8c74c.jpg\"}', NULL, NULL, 1, '2023/03/25', '2023-03-25 09:22:05', '2023-03-25 09:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `post_files`
--

CREATE TABLE `post_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_additional` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_files`
--

INSERT INTO `post_files` (`id`, `post_id`, `type`, `title`, `file`, `file_additional`, `created_at`, `updated_at`) VALUES
(62, 86, 'images', NULL, '63ecf2dc8c1e6.png', NULL, '2023-02-15 14:57:36', '2023-02-15 14:57:36'),
(63, 88, 'images', NULL, '63ef1e3279d35.png', NULL, '2023-02-17 06:27:03', '2023-02-17 06:27:03'),
(64, 88, 'images', NULL, '63ef1e31c230e.png', NULL, '2023-02-17 06:27:03', '2023-02-17 06:27:03'),
(65, 89, 'images', NULL, '63ef1f061a523.jpg', NULL, '2023-02-17 06:30:34', '2023-02-17 06:30:34'),
(66, 89, 'images', NULL, '63ef1f066403f.jpg', NULL, '2023-02-17 06:30:34', '2023-02-17 06:30:34'),
(68, 85, 'images', NULL, '63ef437aa001c.png', NULL, '2023-02-17 09:06:03', '2023-02-17 09:06:03'),
(69, 86, 'images', 'https://www.youtube.com/watch?v=qMxgOI53t_s', '63ef7fb21226c.jpg', NULL, '2023-02-17 13:23:15', '2023-02-17 13:23:15'),
(70, 86, 'images', 'https://www.youtube.com/watch?v=qMxgOI53t_s', '63ef7fb284003.jpg', NULL, '2023-02-17 13:23:15', '2023-02-17 13:23:15'),
(71, 86, 'images', 'https://www.youtube.com/watch?v=qMxgOI53t_s', '63ef7fb2c18b9.jpg', NULL, '2023-02-17 13:23:15', '2023-02-17 13:23:15'),
(72, 86, 'images', NULL, '63ef7fb33f82e.jpg', NULL, '2023-02-17 13:23:15', '2023-02-17 13:23:15'),
(73, 98, 'images', NULL, '63ef8f154cbb3.png', NULL, '2023-02-17 14:28:44', '2023-02-17 14:28:44'),
(74, 98, 'images', NULL, '63ef8f13a513f.png', NULL, '2023-02-17 14:28:44', '2023-02-17 14:28:44'),
(75, 98, 'images', NULL, '63ef8f147fc71.png', NULL, '2023-02-17 14:28:44', '2023-02-17 14:28:44'),
(76, 98, 'images', NULL, '63ef8f15cba26.png', NULL, '2023-02-17 14:28:44', '2023-02-17 14:28:44'),
(77, 98, 'images', NULL, '63ef8f140ba00.jpg', NULL, '2023-02-17 14:28:44', '2023-02-17 14:28:44'),
(78, 85, 'images', NULL, '63fc96ac85cf1.png', NULL, '2023-02-27 11:40:31', '2023-02-27 11:40:31'),
(79, 85, 'images', NULL, '63fc96ad3acde.png', NULL, '2023-02-27 11:40:31', '2023-02-27 11:40:31'),
(80, 123, 'images', NULL, '63fdf85f6bee1.jpg', NULL, '2023-02-28 12:49:42', '2023-02-28 12:49:42'),
(81, 123, 'images', NULL, '63fdf860009aa.jpg', NULL, '2023-02-28 12:49:42', '2023-02-28 12:49:42'),
(82, 123, 'images', NULL, '63fdf860411e7.jpg', NULL, '2023-02-28 12:49:42', '2023-02-28 12:49:42'),
(83, 127, 'images', NULL, '6419aa2fc77b9.jpg', NULL, '2023-03-21 12:59:30', '2023-03-21 12:59:30'),
(84, 127, 'images', NULL, '6419aa302419b.jpg', NULL, '2023-03-21 12:59:30', '2023-03-21 12:59:30'),
(85, 127, 'images', NULL, '6419aa2f3dd3c.jpg', NULL, '2023-03-21 12:59:30', '2023-03-21 12:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `post_translations`
--

CREATE TABLE `post_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `text` text COLLATE utf8mb4_unicode_ci,
  `files` text COLLATE utf8mb4_unicode_ci,
  `locale_additional` text COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_translations`
--

INSERT INTO `post_translations` (`id`, `post_id`, `locale`, `title`, `slug`, `keywords`, `desc`, `text`, `files`, `locale_additional`, `active`, `created_at`, `updated_at`) VALUES
(251, 85, 'en', 'paulownia', 'paulownia', NULL, '<p>Paulownia is considered as one of the fastest growing and profitable plants in the world, which is widely cultivated in East Asia and central Europe, and is referred as &ldquo;Tree of the future&rdquo; .<br />\r\nThe point is that every detail of the tree can be used in a wide range of industries, from producing timber to producing honey, perfumery to medicine, biofuel extraction and so on.</p>', NULL, NULL, '[]', 1, '2023-02-15 14:33:11', '2023-02-17 09:05:46'),
(252, 85, 'ka', 'paulownia', 'paulownia', NULL, '<p>Paulownia is considered as one of the fastest growing and profitable plants in the world, which is widely cultivated in East Asia and central Europe, and is referred as &ldquo;Tree of the future&rdquo; .<br />\r\nThe point is that every detail of the tree can be used in a wide range of industries, from producing timber to producing honey, perfumery to medicine, biofuel extraction and so on.</p>', NULL, NULL, '[]', 1, '2023-02-15 14:33:11', '2023-02-15 14:33:11'),
(253, 85, 'tr', 'paulownia', 'paulownia', NULL, '<p>Paulownia is considered as one of the fastest growing and profitable plants in the world, which is widely cultivated in East Asia and central Europe, and is referred as &ldquo;Tree of the future&rdquo; .<br />\r\nThe point is that every detail of the tree can be used in a wide range of industries, from producing timber to producing honey, perfumery to medicine, biofuel extraction and so on.</p>', NULL, NULL, '[]', 1, '2023-02-15 14:33:11', '2023-02-17 08:52:57'),
(254, 86, 'en', 'Photo Video', 'photo-video', NULL, NULL, NULL, NULL, '[]', 1, '2023-02-15 14:57:36', '2023-02-15 14:57:36'),
(255, 86, 'ka', 'Photo Video', 'photo-video', NULL, NULL, NULL, NULL, '[]', 1, '2023-02-15 14:57:36', '2023-02-15 14:57:36'),
(256, 86, 'tr', 'Photo Video', 'photo-video', NULL, NULL, NULL, NULL, '[]', 1, '2023-02-15 14:57:36', '2023-02-15 14:57:36'),
(257, 87, 'en', 'Contact', 'contact-2', NULL, '<p>Contact</p>', NULL, NULL, '{\"address\":\"Contact\"}', 0, '2023-02-15 14:58:30', '2023-02-15 14:58:30'),
(258, 87, 'ka', 'Contact', 'contact-2', NULL, '<p>Contact</p>', NULL, NULL, '{\"address\":\"Contact\"}', 0, '2023-02-15 14:58:30', '2023-02-15 14:58:30'),
(259, 87, 'tr', 'Contact', 'contact-2', NULL, '<p>Contact</p>', NULL, NULL, '{\"address\":\"Contact\"}', 1, '2023-02-15 14:58:30', '2023-02-15 14:58:30'),
(260, 88, 'en', 'it’s not just the tree it’s an opportunity', 'it-s-not-just-the-tree-it-s-an-opportunity', NULL, '<p>Paulownia is a tree with deep roots and a well-developed root system. Upper roots are thin, sharp, branched into two and grow very dense. The intake / absorbing roots are approximately 1-5 mm thick and can extended to more than 60 cm</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/github.com\\/IdeaDes\\/TreeMan\"}', 1, '2023-02-17 06:27:03', '2023-02-17 06:27:03'),
(261, 88, 'ka', 'it’s not just the tree it’s an opportunity', 'it-s-not-just-the-tree-it-s-an-opportunity', NULL, '<p>Paulownia is a tree with deep roots and a well-developed root system. Upper roots are thin, sharp, branched into two and grow very dense. The intake / absorbing roots are approximately 1-5 mm thick and can extended to more than 60 cm</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/github.com\\/IdeaDes\\/TreeMan\"}', 1, '2023-02-17 06:27:03', '2023-02-17 06:27:03'),
(262, 88, 'tr', 'it’s not just the tree it’s an opportunity', 'it-s-not-just-the-tree-it-s-an-opportunity', NULL, '<p>Paulownia is a tree with deep roots and a well-developed root system. Upper roots are thin, sharp, branched into two and grow very dense. The intake / absorbing roots are approximately 1-5 mm thick and can extended to more than 60 cm</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/github.com\\/IdeaDes\\/TreeMan\"}', 1, '2023-02-17 06:27:03', '2023-02-17 06:27:03'),
(263, 89, 'en', 'What is Lorem Ipsum?', 'what-is-lorem-ipsum', NULL, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/www.lipsum.com\\/\"}', 1, '2023-02-17 06:30:34', '2023-02-17 12:46:40'),
(264, 89, 'ka', 'What is Lorem Ipsum?', 'what-is-lorem-ipsum', NULL, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/www.lipsum.com\\/\"}', 1, '2023-02-17 06:30:34', '2023-02-17 06:30:34'),
(265, 89, 'tr', 'What is Lorem Ipsum?', 'what-is-lorem-ipsum', NULL, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/www.lipsum.com\\/\"}', 1, '2023-02-17 06:30:34', '2023-02-17 06:30:34'),
(266, 90, 'en', 'SeedLngs', 'seedlngs', NULL, '<p>SeedLngs</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/www.lipsum.com\\/\"}', 1, '2023-02-17 06:44:40', '2023-02-17 06:44:40'),
(267, 90, 'ka', 'SeedLngs', 'seedlngs', NULL, '<p>SeedLngs</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/www.lipsum.com\\/\"}', 1, '2023-02-17 06:44:40', '2023-02-17 06:44:40'),
(268, 90, 'tr', 'SeedLngs', 'seedlngs', NULL, '<p>SeedLngs</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/www.lipsum.com\\/\"}', 1, '2023-02-17 06:44:40', '2023-02-17 06:44:40'),
(269, 91, 'en', 'wood', 'wood', NULL, '<p>wood</p>', NULL, NULL, '{\"redirect_link\":\"wood\"}', 1, '2023-02-17 06:45:11', '2023-02-17 06:45:11'),
(270, 91, 'ka', 'wood', 'wood', NULL, '<p>wood</p>', NULL, NULL, '{\"redirect_link\":\"wood\"}', 1, '2023-02-17 06:45:11', '2023-02-17 06:45:11'),
(271, 91, 'tr', 'wood', 'wood', NULL, '<p>wood</p>', NULL, NULL, '{\"redirect_link\":\"wood\"}', 1, '2023-02-17 06:45:11', '2023-02-17 06:45:11'),
(272, 92, 'en', 'seeds', 'seeds', NULL, '<p>seeds</p>', NULL, NULL, '{\"redirect_link\":\"seeds\"}', 1, '2023-02-17 06:45:34', '2023-02-17 06:45:34'),
(273, 92, 'ka', 'seeds', 'seeds', NULL, '<p>seeds</p>', NULL, NULL, '{\"redirect_link\":\"seeds\"}', 1, '2023-02-17 06:45:34', '2023-02-17 06:45:34'),
(274, 92, 'tr', 'seeds', 'seeds', NULL, '<p>seeds</p>', NULL, NULL, '{\"redirect_link\":\"seeds\"}', 1, '2023-02-17 06:45:34', '2023-02-17 06:45:34'),
(275, 93, 'en', 'flowers', 'flowers', NULL, '<p>flowers</p>', NULL, NULL, '{\"redirect_link\":\"flowers\"}', 1, '2023-02-17 06:47:15', '2023-02-17 06:47:15'),
(276, 93, 'ka', 'flowers', 'flowers', NULL, '<p>flowers</p>', NULL, NULL, '{\"redirect_link\":\"flowers\"}', 1, '2023-02-17 06:47:15', '2023-02-17 06:47:15'),
(277, 93, 'tr', 'flowers', 'flowers', NULL, '<p>flowers</p>', NULL, NULL, '{\"redirect_link\":\"flowers\"}', 1, '2023-02-17 06:47:15', '2023-02-17 06:47:15'),
(281, 95, 'en', 'Growth', 'growth', NULL, '<p>Growth</p>', NULL, NULL, '{\"redirect_link\":\"Growth\"}', 1, '2023-02-17 06:48:25', '2023-02-17 06:48:25'),
(282, 95, 'ka', 'Growth', 'growth', NULL, '<p>Growth</p>', NULL, NULL, '{\"redirect_link\":\"Growth\"}', 1, '2023-02-17 06:48:25', '2023-02-17 06:48:25'),
(283, 95, 'tr', 'Growth', 'growth', NULL, '<p>Growth</p>', NULL, NULL, '{\"redirect_link\":\"Growth\"}', 1, '2023-02-17 06:48:25', '2023-02-17 06:48:25'),
(284, 96, 'en', 'Growth 32', 'growth-32', NULL, '<p>Growth 32</p>', NULL, NULL, '{\"redirect_link\":\"Growth 32\"}', 1, '2023-02-17 06:49:02', '2023-02-17 06:49:02'),
(285, 96, 'ka', 'Growth 32', 'growth-32', NULL, '<p>Growth 32</p>', NULL, NULL, '{\"redirect_link\":\"Growth 32\"}', 1, '2023-02-17 06:49:02', '2023-02-17 06:49:02'),
(286, 96, 'tr', 'Growth 32', 'growth-32', NULL, '<p>Growth 32</p>', NULL, NULL, '{\"redirect_link\":\"Growth 32\"}', 1, '2023-02-17 06:49:02', '2023-02-17 06:49:02'),
(287, 97, 'en', 'Amazing Growth Speed', 'amazing-growth-speed', NULL, '<p>The growth of the crown is a function and continuation of the branches that grow each year. The top, as well the secondary and third pairs of buds can be damaged by frosting during the winter. In the spring the following fourth and fifth buds, which usually are not affected by the cold, develop new branches.<br />\r\nThen the second and third pairs of buds formed from the new branches fail again during the next winter and the fifth and sixth pairs of buds produce an outgrowth and form new branches in the spring. The growth of the crown follows this pattern year after year. The number of new branches formed and the morphology of the crown determine the age of the tree.</p>', NULL, NULL, '{\"redirect_link\":null}', 1, '2023-02-17 06:55:12', '2023-02-17 12:31:01'),
(288, 97, 'ka', 'Amazing Growth Speed', 'amazing-growth-speed', NULL, '<p>The growth of the crown is a function and continuation of the branches that grow each year. The top, as well the secondary and third pairs of buds can be damaged by frosting during the winter. In the spring the following fourth and fifth buds, which usually are not affected by the cold, develop new branches.<br />\r\nThen the second and third pairs of buds formed from the new branches fail again during the next winter and the fifth and sixth pairs of buds produce an outgrowth and form new branches in the spring. The growth of the crown follows this pattern year after year. The number of new branches formed and the morphology of the crown determine the age of the tree.</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/github.com\\/IdeaDes\\/TreeMan\"}', 1, '2023-02-17 06:55:12', '2023-02-17 06:55:12'),
(289, 97, 'tr', 'Amazing Growth Speed', 'amazing-growth-speed', NULL, '<p>The growth of the crown is a function and continuation of the branches that grow each year. The top, as well the secondary and third pairs of buds can be damaged by frosting during the winter. In the spring the following fourth and fifth buds, which usually are not affected by the cold, develop new branches.<br />\r\nThen the second and third pairs of buds formed from the new branches fail again during the next winter and the fifth and sixth pairs of buds produce an outgrowth and form new branches in the spring. The growth of the crown follows this pattern year after year. The number of new branches formed and the morphology of the crown determine the age of the tree.</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/github.com\\/IdeaDes\\/TreeMan\"}', 1, '2023-02-17 06:55:12', '2023-02-17 06:55:12'),
(290, 98, 'en', 'The look in reality', 'the-look-in-reality-2', NULL, '<p>The look in reality</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/www.lipsum.com\\/\"}', 1, '2023-02-17 09:10:33', '2023-02-17 09:10:33'),
(291, 98, 'ka', 'The look in reality', 'the-look-in-reality-2', NULL, '<p>The look in reality</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/www.lipsum.com\\/\"}', 0, '2023-02-17 09:10:33', '2023-02-17 09:10:33'),
(292, 98, 'tr', 'The look in reality', 'the-look-in-reality-2', NULL, '<p>The look in reality</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/www.lipsum.com\\/\"}', 1, '2023-02-17 09:10:33', '2023-02-17 09:10:33'),
(293, 99, 'en', 'Positive impact on environment', 'positive-impact-on-environment', NULL, '<p>We combine the ecological and economic benefits of the kiri tree with a sustainable business concept. Because it is not only the wood of the Kiri tree that is in high demand: its positive impact on the environment and climate also make the Kiri tree a sustainable plantation crop with a future. Kiri trees can grow up to 6 meters, depending on the cultivation conditions.</p>', NULL, NULL, '{\"redirect_link\":null}', 1, '2023-02-17 12:02:45', '2023-02-17 12:26:07'),
(294, 99, 'ka', 'Positive impact on environment', 'positive-impact-on-environment', NULL, '<p>We combine the ecological and economic benefits of the kiri tree with a sustainable business concept. Because it is not only the wood of the Kiri tree that is in high demand: its positive impact on the environment and climate also make the Kiri tree a sustainable plantation crop with a future. Kiri trees can grow up to 6 meters, depending on the cultivation conditions.</p>', NULL, NULL, '{\"redirect_link\":null}', 1, '2023-02-17 12:02:45', '2023-02-17 12:02:45'),
(295, 99, 'tr', 'Positive impact on environment', 'positive-impact-on-environment', NULL, '<p>We combine the ecological and economic benefits of the kiri tree with a sustainable business concept. Because it is not only the wood of the Kiri tree that is in high demand: its positive impact on the environment and climate also make the Kiri tree a sustainable plantation crop with a future. Kiri trees can grow up to 6 meters, depending on the cultivation conditions.</p>', NULL, NULL, '{\"redirect_link\":null}', 1, '2023-02-17 12:02:45', '2023-02-17 12:02:45'),
(296, 100, 'en', 'Amazing growth rate', 'amazing-growth-rate', NULL, NULL, NULL, NULL, '{\"redirect_link\":\"https:\\/\\/www.lipsum.com\\/\"}', 0, '2023-02-17 12:48:36', '2023-03-01 11:56:56'),
(297, 100, 'ka', 'Amazing growth rate', 'amazing-growth-rate', NULL, NULL, NULL, NULL, '{\"redirect_link\":null}', 1, '2023-02-17 12:48:36', '2023-02-17 12:48:36'),
(298, 100, 'tr', 'Amazing growth rate', 'amazing-growth-rate', NULL, NULL, NULL, NULL, '{\"redirect_link\":null}', 1, '2023-02-17 12:48:36', '2023-02-17 12:48:36'),
(299, 101, 'en', 'Source of quality wood', 'source-of-quality-wood', NULL, NULL, NULL, NULL, '{\"redirect_link\":null}', 0, '2023-02-17 12:49:09', '2023-03-01 11:56:52'),
(300, 101, 'ka', 'Source of quality wood', 'source-of-quality-wood', NULL, NULL, NULL, NULL, '{\"redirect_link\":\"https:\\/\\/stackoverflow.com\\/questions\\/44212318\\/laravel-blade-advantage-of-slot-component-vs-include\"}', 1, '2023-02-17 12:49:09', '2023-02-17 12:49:09'),
(301, 101, 'tr', 'Source of quality wood', 'source-of-quality-wood', NULL, NULL, NULL, NULL, '{\"redirect_link\":null}', 1, '2023-02-17 12:49:09', '2023-02-17 12:49:09'),
(302, 102, 'en', 'Our Products', 'contact-form-2', NULL, '<p>Treeman company produses the Paulownia tree seedlings. Paulownia is one of the most useful plants in the world. Every part of it is usable and in high demand. Poulownia gives high quality timber, which is used in various directions. Flowers give the Environmentally friendly and healthy honey. Paulownia leaves are good feed for animals and also produces the huge amount of oxygen.</p>', NULL, NULL, '[]', 1, '2023-02-17 13:15:51', '2023-02-27 06:41:11'),
(303, 102, 'ka', 'Our Products', 'contact-form-3', NULL, '<p>Treeman company produses the Paulownia tree seedlings. Paulownia is one of the most useful plants in the world. Every part of it is usable and in high demand. Poulownia gives high quality timber, which is used in various directions. Flowers give the Environmentally friendly and healthy honey. Paulownia leaves are good feed for animals and also produces the huge amount of oxygen.</p>', NULL, NULL, '[]', 1, '2023-02-17 13:15:51', '2023-02-27 06:41:11'),
(304, 102, 'tr', 'Our Products', 'contact-form-4', NULL, '<p>Treeman company produses the Paulownia tree seedlings. Paulownia is one of the most useful plants in the world. Every part of it is usable and in high demand. Poulownia gives high quality timber, which is used in various directions. Flowers give the Environmentally friendly and healthy honey. Paulownia leaves are good feed for animals and also produces the huge amount of oxygen.</p>', NULL, NULL, '[]', 0, '2023-02-17 13:15:51', '2023-02-27 06:41:11'),
(305, 103, 'en', 'Paulownia Seedlings', 'paulownia-seedlings', NULL, '<p>Paulownia seedlings are grown under laboratory conditions, so there is a better chance that the plant will thrive than if Paulownia seeds were planted directly in the soil. When the height of the seedling is 10-14 centimeters, it is ready to be transplanted. Since the plant has a very tender stem and leaves, it is better if it is acclimatized and strengthens before transplanting. Leave it for 3-5 days at a average temperature, protected from direct sunlight.<br />\r\nBefore transplanting a Paulownia seedling, the ground is cleared of stones and weeds, and it is better if soil is enriched with fertilizer. Paulownia seedlings need regular watering in the first years of life. It is also better if you protect it from strong winds.</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/stackoverflow.com\\/questions\\/44212318\\/laravel-blade-advantage-of-slot-component-vs-include\"}', 1, '2023-02-17 13:18:10', '2023-02-17 13:19:52'),
(306, 103, 'ka', 'Paulownia Seedlings', 'paulownia-seedlings', NULL, '<p>Paulownia seedlings are grown under laboratory conditions, so there is a better chance that the plant will thrive than if Paulownia seeds were planted directly in the soil. When the height of the seedling is 10-14 centimeters, it is ready to be transplanted. Since the plant has a very tender stem and leaves, it is better if it is acclimatized and strengthens before transplanting. Leave it for 3-5 days at a average temperature, protected from direct sunlight.<br />\r\nBefore transplanting a Paulownia seedling, the ground is cleared of stones and weeds, and it is better if soil is enriched with fertilizer. Paulownia seedlings need regular watering in the first years of life. It is also better if you protect it from strong winds.</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/stackoverflow.com\\/questions\\/44212318\\/laravel-blade-advantage-of-slot-component-vs-include\"}', 0, '2023-02-17 13:18:10', '2023-02-17 13:18:10'),
(307, 103, 'tr', 'Paulownia Seedlings', 'paulownia-seedlings', NULL, '<p>Paulownia seedlings are grown under laboratory conditions, so there is a better chance that the plant will thrive than if Paulownia seeds were planted directly in the soil. When the height of the seedling is 10-14 centimeters, it is ready to be transplanted. Since the plant has a very tender stem and leaves, it is better if it is acclimatized and strengthens before transplanting. Leave it for 3-5 days at a average temperature, protected from direct sunlight.<br />\r\nBefore transplanting a Paulownia seedling, the ground is cleared of stones and weeds, and it is better if soil is enriched with fertilizer. Paulownia seedlings need regular watering in the first years of life. It is also better if you protect it from strong winds.</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/stackoverflow.com\\/questions\\/44212318\\/laravel-blade-advantage-of-slot-component-vs-include\"}', 0, '2023-02-17 13:18:10', '2023-02-17 13:18:10'),
(308, 104, 'en', 'popularity Confirmed', 'popularity-confirmed', NULL, '<p>World interest over Paulownia in the 5 year period based on Google Trends data. Clearly visible that there exists continuous interest over it. See More</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/www.lipsum.com\\/\"}', 1, '2023-02-17 13:30:16', '2023-02-17 13:30:16'),
(309, 104, 'ka', 'popularity Confirmed', 'popularity-confirmed', NULL, '<p>World interest over Paulownia in the 5 year period based on Google Trends data. Clearly visible that there exists continuous interest over it. See More</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/www.lipsum.com\\/\"}', 1, '2023-02-17 13:30:16', '2023-02-17 13:30:16'),
(310, 104, 'tr', 'popularity Confirmed', 'popularity-confirmed', NULL, '<p>World interest over Paulownia in the 5 year period based on Google Trends data. Clearly visible that there exists continuous interest over it. See More</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/www.lipsum.com\\/\"}', 1, '2023-02-17 13:30:16', '2023-02-17 13:30:16'),
(311, 105, 'en', 'Paulownia is very adaptable and  extremely fast growing', 'paulownia-is-very-adaptable-and-extremely-fast-growing', NULL, NULL, NULL, NULL, '{\"redirect_link\":\"https:\\/\\/stackoverflow.com\\/questions\\/44212318\\/laravel-blade-advantage-of-slot-component-vs-include\"}', 1, '2023-02-17 13:57:06', '2023-02-17 14:16:55'),
(312, 105, 'ka', 'Paulownia is very adaptable and  extremely fast growing', 'paulownia-is-very-adaptable-and-extremely-fast-growing', NULL, NULL, NULL, NULL, '{\"redirect_link\":\"https:\\/\\/stackoverflow.com\\/questions\\/44212318\\/laravel-blade-advantage-of-slot-component-vs-include\"}', 0, '2023-02-17 13:57:06', '2023-02-17 13:57:06'),
(313, 105, 'tr', 'Paulownia is very adaptable and  extremely fast growing', 'paulownia-is-very-adaptable-and-extremely-fast-growing', NULL, NULL, NULL, NULL, '{\"redirect_link\":\"https:\\/\\/stackoverflow.com\\/questions\\/44212318\\/laravel-blade-advantage-of-slot-component-vs-include\"}', 0, '2023-02-17 13:57:06', '2023-02-17 13:57:06'),
(314, 106, 'en', 'The leaves and flowers of Paulownia are rich in nitrogen', 'the-leaves-and-flowers-of-paulownia-are-rich-in-nitrogen', NULL, NULL, NULL, NULL, '{\"redirect_link\":null}', 1, '2023-02-17 14:12:29', '2023-02-27 11:33:48'),
(315, 106, 'ka', 'The leaves and flowers of Paulownia are rich in nitrogen', 'the-leaves-and-flowers-of-paulownia-are-rich-in-nitrogen', NULL, NULL, NULL, NULL, '{\"redirect_link\":\"https:\\/\\/www.lipsum.com\\/\"}', 0, '2023-02-17 14:12:29', '2023-02-17 14:12:29'),
(316, 106, 'tr', 'The leaves and flowers of Paulownia are rich in nitrogen', 'the-leaves-and-flowers-of-paulownia-are-rich-in-nitrogen', NULL, NULL, NULL, NULL, '{\"redirect_link\":\"https:\\/\\/www.lipsum.com\\/\"}', 0, '2023-02-17 14:12:29', '2023-02-17 14:12:29'),
(326, 110, 'en', 'Home', 'home', NULL, NULL, NULL, NULL, '{\"value\":\"30000\"}', 1, '2023-02-21 06:39:31', '2023-02-24 12:15:40'),
(327, 110, 'ka', 'მთავარი', 'mtavari', NULL, NULL, NULL, NULL, '{\"value\":\"20000+\"}', 1, '2023-02-21 06:39:31', '2023-02-21 06:39:31'),
(328, 110, 'tr', 'component_post', 'component-post', NULL, NULL, NULL, NULL, '{\"value\":\"20000+\"}', 1, '2023-02-21 06:39:31', '2023-02-21 06:39:31'),
(329, 111, 'en', 'Banner Slider', 'banner-slider-2', NULL, '<p>Banner Slider</p>', NULL, NULL, '{\"redirect_link\":null}', 1, '2023-02-21 06:43:18', '2023-03-15 07:30:29'),
(330, 111, 'ka', 'Banner Slider', 'banner-slider-2', NULL, '<p>Banner Slider</p>', NULL, NULL, '{\"redirect_link\":\"Banner Slider\"}', 1, '2023-02-21 06:43:18', '2023-02-21 06:43:18'),
(331, 111, 'tr', 'Banner Slider', 'banner-slider-2', NULL, '<p>Banner Slider</p>', NULL, NULL, '{\"redirect_link\":\"Banner Slider\"}', 1, '2023-02-21 06:43:18', '2023-02-21 06:43:18'),
(332, 112, 'en', 'Contact Form', 'contact-form', NULL, '<p>Fill out the form to contact us</p>', NULL, NULL, '[]', 1, '2023-02-21 08:01:47', '2023-02-21 08:01:47'),
(333, 112, 'ka', 'Contact Form', 'contact-form', NULL, '<p>Fill out the form to contact us</p>', NULL, NULL, '[]', 1, '2023-02-21 08:01:47', '2023-02-21 08:01:47'),
(334, 112, 'tr', 'Contact Form', 'contact-form', NULL, '<p>Fill out the form to contact us</p>', NULL, NULL, '[]', 1, '2023-02-21 08:01:47', '2023-02-21 08:01:47'),
(335, 113, 'en', 'contact-form', 'contact-form-12', NULL, '<p>contact-form</p>', NULL, NULL, '[]', 1, '2023-02-27 06:44:45', '2023-02-27 06:48:24'),
(336, 113, 'ka', 'contact-form', 'contact-form-12', NULL, '<p>contact-form</p>', NULL, NULL, '[]', 0, '2023-02-27 06:44:45', '2023-02-27 06:48:24'),
(337, 113, 'tr', 'contact-form', 'contact-form-12', NULL, '<p>contact-form</p>', NULL, NULL, '[]', 0, '2023-02-27 06:44:45', '2023-02-27 06:48:24'),
(356, 120, 'en', 'text green', 'text-green-2', NULL, '<p>text green</p>', NULL, NULL, '{\"redirect_link\":null}', 1, '2023-02-27 13:39:18', '2023-02-27 13:39:18'),
(357, 120, 'ka', 'text green', 'text-green-2', NULL, '<p>text green</p>', NULL, NULL, '{\"redirect_link\":null}', 1, '2023-02-27 13:39:18', '2023-02-27 13:39:18'),
(358, 120, 'tr', 'text green', 'text-green-2', NULL, '<p>text green</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/www.lipsum.com\\/\"}', 1, '2023-02-27 13:39:18', '2023-02-27 13:39:18'),
(359, 121, 'en', 'subscribe', 'subscribe-2', NULL, '<p>subscribe</p>', NULL, NULL, '[]', 1, '2023-02-27 14:22:25', '2023-02-27 14:22:25'),
(360, 121, 'ka', 'subscribe', 'subscribe-2', NULL, '<p>subscribe</p>', NULL, NULL, '[]', 1, '2023-02-27 14:22:25', '2023-02-27 14:22:25'),
(361, 121, 'tr', 'subscribe', 'subscribe-2', NULL, '<p>subscribe</p>', NULL, NULL, '[]', 1, '2023-02-27 14:22:25', '2023-02-27 14:22:25'),
(362, 122, 'en', 'book banner', 'book-banner-2', NULL, '<p>book banner</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/ideadesigngroup.atlassian.net\\/jira\\/software\\/projects\\/IT\\/boards\\/1\\/backlog?assignee=557058%3A599a849e-e1f1-4da6-8272-b1f50e50a4f4\"}', 1, '2023-02-28 12:12:23', '2023-03-01 10:58:42'),
(363, 122, 'ka', 'book banner', 'book-banner-2', NULL, '<p>book banner</p>', NULL, NULL, '{\"redirect_link\":null}', 1, '2023-02-28 12:12:23', '2023-02-28 12:13:10'),
(364, 122, 'tr', 'book banner', 'book-banner-2', NULL, '<p>book banner</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/www.lipsum.com\\/\"}', 1, '2023-02-28 12:12:23', '2023-02-28 12:12:23'),
(365, 123, 'en', 'ტეხტ ცომპონენტ 1', 'tekht-tsomponent-1-2', NULL, '<p>ტეხტ ცომპონენტ 1</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/www.lipsum.com\\/\"}', 1, '2023-02-28 12:49:42', '2023-03-01 07:03:39'),
(366, 123, 'ka', 'ტეხტ ცომპონენტ 1', 'tekht-tsomponent-1-2', NULL, '<p>ტეხტ ცომპონენტ 1</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/www.lipsum.com\\/\"}', 1, '2023-02-28 12:49:42', '2023-02-28 12:49:42'),
(367, 123, 'tr', 'ტეხტ ცომპონენტ 1', 'tekht-tsomponent-1-2', NULL, '<p>ტეხტ ცომპონენტ 1</p>', NULL, NULL, '{\"redirect_link\":\"https:\\/\\/www.lipsum.com\\/\"}', 1, '2023-02-28 12:49:42', '2023-02-28 12:49:42'),
(368, 124, 'en', 'wegweg', 'wegweg', NULL, '<p>wegweg</p>', NULL, NULL, '{\"redirect_link\":\"wegweg\"}', 1, '2023-02-28 13:36:39', '2023-02-28 13:36:39'),
(369, 124, 'ka', 'weg', 'weg', NULL, '<p>wegweg</p>', NULL, NULL, '{\"redirect_link\":\"wegwe\"}', 1, '2023-02-28 13:36:39', '2023-02-28 13:36:39'),
(370, 124, 'tr', 'wegwe', 'wegwe-2', NULL, '<p>gwegweg</p>', NULL, NULL, '{\"redirect_link\":\"ewgweg\"}', 1, '2023-02-28 13:36:39', '2023-02-28 13:36:39'),
(371, 125, 'en', 'წეგ', 'tseg-2', NULL, NULL, NULL, NULL, '{\"redirect_link\":\"\\u10ec\\u10d4\\u10d2\\u10ec\\u10d4\\u10d2\"}', 1, '2023-03-06 13:46:28', '2023-03-06 13:46:28'),
(372, 125, 'ka', 'წეგ', 'tseg-2', NULL, NULL, NULL, NULL, '{\"redirect_link\":\"\\u10ec\\u10d4\\u10d2\"}', 1, '2023-03-06 13:46:28', '2023-03-06 13:46:28'),
(373, 125, 'tr', 'წეგეწგ', 'tsegetsg-2', NULL, NULL, NULL, NULL, '{\"redirect_link\":null}', 1, '2023-03-06 13:46:28', '2023-03-06 13:46:28'),
(374, 126, 'en', 'book bannera', 'book-bannera-2', NULL, '<p>book bannera</p>', NULL, NULL, '{\"redirect_link\":null}', 1, '2023-03-21 11:33:03', '2023-03-21 11:34:36'),
(375, 126, 'ka', 'book bannera', 'book-bannera-2', NULL, '<p>book bannera</p>', NULL, NULL, '{\"redirect_link\":null}', 1, '2023-03-21 11:33:03', '2023-03-21 11:34:36'),
(376, 126, 'tr', 'book bannera', 'book-bannera-2', NULL, '<p>book bannera</p>', NULL, NULL, '{\"redirect_link\":\"book bannera\"}', 1, '2023-03-21 11:33:03', '2023-03-21 11:33:03'),
(377, 127, 'en', 'wegweg', 'wegwegwegweg', NULL, NULL, NULL, NULL, '[]', 1, '2023-03-21 12:59:30', '2023-03-21 12:59:30'),
(378, 127, 'ka', 'wegweg', 'weg-2', NULL, NULL, NULL, NULL, '[]', 1, '2023-03-21 12:59:30', '2023-03-21 12:59:30'),
(379, 127, 'tr', 'wegwegwe', 'gweg', NULL, NULL, NULL, NULL, '[]', 1, '2023-03-21 12:59:30', '2023-03-21 12:59:30'),
(380, 128, 'en', 'wgewgwegwe wegw', 'wgewgwegwe-wegw', NULL, '<p>wegewg</p>', NULL, NULL, '{\"redirect_link\":null}', 1, '2023-03-25 09:22:05', '2023-03-25 09:22:05'),
(381, 128, 'ka', 'wegwg', 'wegwg', NULL, '<p>wegewg</p>', NULL, NULL, '{\"redirect_link\":null}', 1, '2023-03-25 09:22:05', '2023-03-25 09:22:05'),
(382, 128, 'tr', 'sdgggewge ewg', 'sdgggewge-ewg', NULL, '<p>wegwg</p>', NULL, NULL, '{\"redirect_link\":null}', 1, '2023-03-25 09:22:05', '2023-03-25 09:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` int(11) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `additional` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_component` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `type_id`, `parent_id`, `additional`, `order`, `cover`, `created_at`, `updated_at`, `is_component`) VALUES
(92, 1, NULL, '[]', 1, NULL, '2023-02-15 14:32:02', '2023-03-01 11:03:20', 0),
(93, 2, NULL, '[]', 2, NULL, '2023-02-15 14:32:21', '2023-03-01 11:03:20', 0),
(94, 3, NULL, '[]', 3, NULL, '2023-02-15 14:33:51', '2023-03-01 11:03:20', 0),
(95, 4, NULL, '[]', 5, NULL, '2023-02-15 14:58:06', '2023-03-01 11:03:20', 0),
(96, 20, 92, '[]', 1, NULL, '2023-02-17 06:26:13', '2023-03-23 07:15:45', 1),
(97, 21, 92, '[]', 3, NULL, '2023-02-17 06:43:59', '2023-03-23 07:15:45', 1),
(98, 22, 92, '[]', 4, NULL, '2023-02-17 06:54:16', '2023-03-23 07:15:45', 1),
(99, 31, 92, '[]', 8, NULL, '2023-02-17 09:10:07', '2023-03-23 07:15:45', 1),
(100, 23, 92, '[]', 5, NULL, '2023-02-17 12:02:00', '2023-03-23 07:15:45', 1),
(101, 27, 92, '[]', 7, NULL, '2023-02-17 12:47:49', '2023-03-23 07:15:45', 1),
(102, 5, NULL, '[]', 4, NULL, '2023-02-17 13:10:16', '2023-03-01 11:03:20', 0),
(103, 22, 102, '[]', 2, NULL, '2023-02-17 13:17:31', '2023-03-25 09:22:52', 1),
(104, 24, 92, '[]', 6, NULL, '2023-02-17 13:29:41', '2023-03-23 07:15:45', 1),
(105, 33, 92, '[]', 9, NULL, '2023-02-17 13:55:24', '2023-03-23 07:15:45', 1),
(108, 29, 92, '[]', 10, NULL, '2023-02-20 08:57:33', '2023-03-23 07:15:45', 1),
(110, 28, 92, '[]', 11, NULL, '2023-02-21 06:42:57', '2023-03-23 07:15:45', 1),
(111, 34, 92, '[]', 12, NULL, '2023-02-21 07:51:57', '2023-03-23 07:15:45', 1),
(119, 25, 92, '[]', 13, NULL, '2023-02-27 13:38:50', '2023-03-23 07:15:45', 1),
(120, 32, 92, '[]', 14, NULL, '2023-02-27 14:22:02', '2023-03-23 07:15:45', 1),
(121, 30, 92, '[]', 2, NULL, '2023-02-28 12:11:52', '2023-03-23 07:15:45', 1),
(122, 20, 93, '{\"scroll_content\":\"0\"}', 1, NULL, '2023-02-28 12:49:05', '2023-03-24 12:55:00', 1),
(123, 22, 93, '{\"scroll_content\":\"0\"}', 2, NULL, '2023-02-28 13:36:20', '2023-03-24 12:55:00', 1),
(124, 27, 92, '[]', 15, NULL, '2023-03-06 13:46:12', '2023-03-23 07:15:45', 1),
(125, 32, 92, '[]', 16, NULL, '2023-03-20 10:43:45', '2023-03-23 07:15:45', 1),
(126, 30, 92, '[]', 17, NULL, '2023-03-21 11:32:45', '2023-03-23 07:15:45', 1),
(127, 23, 102, '[]', 1, NULL, '2023-03-25 09:21:19', '2023-03-25 09:22:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_translations`
--

CREATE TABLE `section_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `icon` text COLLATE utf8mb4_unicode_ci,
  `locale_additional` text COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_translations`
--

INSERT INTO `section_translations` (`id`, `section_id`, `locale`, `title`, `keywords`, `slug`, `desc`, `icon`, `locale_additional`, `active`, `created_at`, `updated_at`) VALUES
(274, 92, 'en', 'home', NULL, 'home-2', '<p>home</p>', NULL, '[]', 1, '2023-02-15 14:32:02', '2023-02-27 09:29:34'),
(275, 92, 'ka', 'home', NULL, 'home-2', '<p>home</p>', NULL, '[]', 1, '2023-02-15 14:32:02', '2023-02-27 09:29:34'),
(276, 92, 'tr', 'home', NULL, 'home-2', '<p>home</p>', NULL, '[]', 1, '2023-02-15 14:32:02', '2023-02-27 09:26:55'),
(277, 93, 'en', 'Text Page', NULL, 'text-page', '<p>Text Page</p>', NULL, '[]', 1, '2023-02-15 14:32:21', '2023-02-17 08:04:16'),
(278, 93, 'ka', 'Text Page', NULL, 'text-page', '<p>Text Page</p>', NULL, '[]', 1, '2023-02-15 14:32:22', '2023-02-15 14:32:22'),
(279, 93, 'tr', 'Text Page', NULL, 'text-page', '<p>Text Page</p>', NULL, '[]', 1, '2023-02-15 14:32:22', '2023-02-15 14:32:22'),
(280, 94, 'en', 'Photo Video Gallery', NULL, 'photo-video-gallery', '<p>Photo Video Gallery</p>', NULL, '[]', 1, '2023-02-15 14:33:51', '2023-02-15 14:33:51'),
(281, 94, 'ka', 'Photo Video Gallery', NULL, 'photo-video-gallery', '<p>Photo Video Gallery</p>', NULL, '[]', 1, '2023-02-15 14:33:51', '2023-02-15 14:33:51'),
(282, 94, 'tr', 'Photo Video Gallery', NULL, 'photo-video-gallery', '<p>Photo Video Gallery</p>', NULL, '[]', 1, '2023-02-15 14:33:51', '2023-02-15 14:33:51'),
(283, 95, 'en', 'Contact', NULL, 'contact', '<p>Contact</p>', NULL, '[]', 1, '2023-02-15 14:58:06', '2023-02-15 14:58:06'),
(284, 95, 'ka', 'Contact', NULL, 'contact', '<p>Contact</p>', NULL, '[]', 1, '2023-02-15 14:58:06', '2023-02-15 14:58:06'),
(285, 95, 'tr', 'Contact', NULL, 'contact', '<p>Contact</p>', NULL, '[]', 1, '2023-02-15 14:58:06', '2023-02-15 14:58:06'),
(286, 96, 'en', 'Main slider', NULL, 'main-slider', '<p>Main slider</p>', NULL, '[]', 1, '2023-02-17 06:26:13', '2023-02-17 06:26:13'),
(287, 96, 'ka', 'Main slider', NULL, 'main-slider', '<p>Main slider</p>', NULL, '[]', 1, '2023-02-17 06:26:13', '2023-02-17 06:26:13'),
(288, 96, 'tr', 'Main slider', NULL, 'main-slider', '<p>Main slider</p>', NULL, '[]', 1, '2023-02-17 06:26:13', '2023-02-17 06:26:13'),
(289, 97, 'en', 'Post Slider', NULL, 'post-slider', '<p>Post Slider</p>', NULL, '[]', 1, '2023-02-17 06:43:59', '2023-02-17 06:43:59'),
(290, 97, 'ka', 'Post Slider', NULL, 'post-slider', '<p>Post Slider</p>', NULL, '[]', 1, '2023-02-17 06:43:59', '2023-02-17 06:43:59'),
(291, 97, 'tr', 'Post Slider', NULL, 'post-slider', '<p>Post Slider</p>', NULL, '[]', 1, '2023-02-17 06:43:59', '2023-02-17 06:43:59'),
(292, 98, 'en', 'Text left', NULL, 'text-left', '<p>Text left</p>', NULL, '[]', 1, '2023-02-17 06:54:16', '2023-02-17 06:54:16'),
(293, 98, 'ka', 'Text left', NULL, 'text-left', '<p>Text left</p>', NULL, '[]', 1, '2023-02-17 06:54:16', '2023-02-17 06:54:16'),
(294, 98, 'tr', 'Text left', NULL, 'text-left', '<p>Text left</p>', NULL, '[]', 1, '2023-02-17 06:54:16', '2023-02-17 06:54:16'),
(295, 99, 'en', 'The look in reality', NULL, 'the-look-in-reality', '<p>The look in reality</p>', NULL, '[]', 0, '2023-02-17 09:10:08', '2023-03-01 11:33:23'),
(296, 99, 'ka', 'The look in reality', NULL, 'the-look-in-reality', '<p>The look in reality</p>', NULL, '[]', 1, '2023-02-17 09:10:08', '2023-02-17 09:10:08'),
(297, 99, 'tr', 'The look in reality', NULL, 'the-look-in-reality', '<p>The look in reality</p>', NULL, '[]', 1, '2023-02-17 09:10:08', '2023-02-17 09:10:08'),
(298, 100, 'en', 'Text Right', NULL, 'text-right', '<p>Text Right</p>', NULL, '[]', 1, '2023-02-17 12:02:00', '2023-02-17 12:02:00'),
(299, 100, 'ka', 'Text Right', NULL, 'text-right', '<p>Text Right</p>', NULL, '[]', 1, '2023-02-17 12:02:00', '2023-02-17 12:02:00'),
(300, 100, 'tr', 'Text Right', NULL, 'text-right', '<p>Text Right</p>', NULL, '[]', 1, '2023-02-17 12:02:00', '2023-02-17 12:02:00'),
(301, 101, 'en', 'product benefits', NULL, 'product-benefits', '<p>product benefits</p>', NULL, '[]', 0, '2023-02-17 12:47:49', '2023-03-01 11:33:01'),
(302, 101, 'ka', 'product benefits', NULL, 'product-benefits', '<p>product benefits</p>', NULL, '[]', 1, '2023-02-17 12:47:49', '2023-02-17 12:47:49'),
(303, 101, 'tr', 'product benefits', NULL, 'product-benefits', NULL, NULL, '[]', 1, '2023-02-17 12:47:49', '2023-02-17 12:47:49'),
(304, 102, 'en', 'Offers', NULL, 'offers', '<p>Offers</p>', NULL, '[]', 1, '2023-02-17 13:10:16', '2023-02-17 13:10:16'),
(305, 102, 'ka', 'Offers', NULL, 'offers', '<p>Offers</p>', NULL, '[]', 1, '2023-02-17 13:10:16', '2023-02-17 13:10:16'),
(306, 102, 'tr', 'Offers', NULL, 'offers', '<p>Offers</p>', NULL, '[]', 1, '2023-02-17 13:10:16', '2023-02-17 13:10:16'),
(307, 103, 'en', 'oFFers text lefta', NULL, 'offers-text-lefta', '<p>oFFers text lefta</p>', NULL, '[]', 1, '2023-02-17 13:17:31', '2023-02-17 13:17:31'),
(308, 103, 'ka', 'oFFers text lefta', NULL, 'offers-text-lefta', '<p>oFFers text lefta</p>', NULL, '[]', 1, '2023-02-17 13:17:31', '2023-02-17 13:17:31'),
(309, 103, 'tr', 'oFFers text lefta', NULL, 'offers-text-lefta', '<p>oFFers text lefta</p>', NULL, '[]', 1, '2023-02-17 13:17:31', '2023-02-17 13:17:31'),
(310, 104, 'en', 'Text Top', NULL, 'text-top', '<p>Text Top</p>', NULL, '[]', 1, '2023-02-17 13:29:41', '2023-02-17 13:29:41'),
(311, 104, 'ka', 'Text Top', NULL, 'text-top', '<p>Text Top</p>', NULL, '[]', 1, '2023-02-17 13:29:41', '2023-02-17 13:29:41'),
(312, 104, 'tr', 'Text Top', NULL, 'text-top', '<p>Text Top</p>', NULL, '[]', 1, '2023-02-17 13:29:41', '2023-02-17 13:29:41'),
(313, 105, 'en', 'image banner', NULL, 'image-banner', '<p>image banner</p>', NULL, '[]', 0, '2023-02-17 13:55:24', '2023-03-01 11:34:08'),
(314, 105, 'ka', 'image banner', NULL, 'image-banner', '<p>image banner</p>', NULL, '[]', 1, '2023-02-17 13:55:24', '2023-02-17 13:55:24'),
(315, 105, 'tr', 'image banner', NULL, 'image-banner', '<p>image banner</p>', NULL, '[]', 1, '2023-02-17 13:55:24', '2023-02-17 13:55:24'),
(322, 108, 'en', 'ewg', NULL, 'ewg', '<p>weg</p>', NULL, '[]', 1, '2023-02-20 08:57:33', '2023-02-20 08:57:33'),
(323, 108, 'ka', 'test', NULL, 'test', '<p>git checkout -b IT-165-back-offer-ის-გვერდზე-ანუ-ლისტ-ფეიჯზე-5-პოსტის-შემდეგ-უნდა-გაჩნდეს-პაგინაცია</p>', NULL, '[]', 1, '2023-02-20 08:57:33', '2023-02-20 08:57:33'),
(324, 108, 'tr', 'git checkout -b IT-165-back-offer-ის-გვერდზე-ანუ-ლისტ-ფეიჯზე-5-პოსტის-შემდეგ-უნდა-გაჩნდეს-პაგინაცია', NULL, 'git-checkout-b-it-165-back-offer-is-gverdze-anu-list-feijze-5-postis-shemdeg-unda-gachndes-paginatsia', '<p>git checkout -b IT-165-back-offer-ის-გვერდზე-ანუ-ლისტ-ფეიჯზე-5-პოსტის-შემდეგ-უნდა-გაჩნდეს-პაგინაცია</p>', NULL, '[]', 1, '2023-02-20 08:57:33', '2023-02-20 08:57:33'),
(328, 110, 'en', 'Banner Slider', NULL, 'banner-slider', '<p>Banner Slider</p>', NULL, '[]', 1, '2023-02-21 06:42:57', '2023-02-21 06:42:57'),
(329, 110, 'ka', 'Banner Slider', NULL, 'banner-slider', '<p>Banner Slider</p>', NULL, '[]', 1, '2023-02-21 06:42:57', '2023-02-21 06:42:57'),
(330, 110, 'tr', 'Banner Slider', NULL, 'banner-slider', '<p>Banner Slider</p>', NULL, '[]', 1, '2023-02-21 06:42:57', '2023-02-21 06:42:57'),
(331, 111, 'en', 'form component', NULL, 'form-component', '<p>form component</p>', NULL, '[]', 1, '2023-02-21 07:51:57', '2023-02-21 07:51:57'),
(332, 111, 'ka', 'form component', NULL, 'form-component', '<p>form component</p>', NULL, '[]', 1, '2023-02-21 07:51:57', '2023-02-21 07:51:57'),
(333, 111, 'tr', 'form component', NULL, 'form-component', '<p>form component</p>', NULL, '[]', 1, '2023-02-21 07:51:57', '2023-02-21 07:51:57'),
(355, 119, 'en', 'text green', NULL, 'text-green', '<p>text green</p>', NULL, '[]', 1, '2023-02-27 13:38:50', '2023-02-27 13:38:50'),
(356, 119, 'ka', 'text green', NULL, 'text-green', '<p>text green</p>', NULL, '[]', 1, '2023-02-27 13:38:50', '2023-02-27 13:38:50'),
(357, 119, 'tr', 'text green', NULL, 'text-green', '<p>text green</p>', NULL, '[]', 1, '2023-02-27 13:38:50', '2023-02-27 13:38:50'),
(358, 120, 'en', 'subscribe', NULL, 'subscribe', '<p>subscribe</p>', NULL, '[]', 1, '2023-02-27 14:22:02', '2023-02-27 14:22:02'),
(359, 120, 'ka', 'subscribe', NULL, 'subscribe', '<p>subscribe</p>', NULL, '[]', 1, '2023-02-27 14:22:02', '2023-02-27 14:22:02'),
(360, 120, 'tr', 'subscribe', NULL, 'subscribe', '<p>subscribe</p>', NULL, '[]', 1, '2023-02-27 14:22:02', '2023-02-27 14:22:02'),
(361, 121, 'en', 'book banner', NULL, 'book-banner', '<p>book banner</p>', NULL, '[]', 0, '2023-02-28 12:11:52', '2023-03-01 11:28:44'),
(362, 121, 'ka', 'book banner', NULL, 'book-banner', '<p>book banner</p>', NULL, '[]', 1, '2023-02-28 12:11:52', '2023-02-28 12:11:52'),
(363, 121, 'tr', 'book banner', NULL, 'book-banner', '<p>book banner</p>', NULL, '[]', 1, '2023-02-28 12:11:52', '2023-02-28 12:11:52'),
(364, 122, 'en', 'ტეხტ ცომპონენტ 1', NULL, 'tekht-tsomponent-1', '<p>ასფწფ</p>', NULL, '[]', 1, '2023-02-28 12:49:05', '2023-02-28 12:49:05'),
(365, 122, 'ka', 'ტეხტ ცომპონენტ 1', NULL, 'tekht-tsomponent-1', '<p>ტეხტ ცომპონენტ 1</p>', NULL, '[]', 1, '2023-02-28 12:49:05', '2023-02-28 12:49:05'),
(366, 122, 'tr', 'ტეხტ ცომპონენტ 1', NULL, 'tekht-tsomponent-1', '<p>ტეხტ ცომპონენტ 1</p>', NULL, '[]', 1, '2023-02-28 12:49:05', '2023-02-28 12:49:05'),
(367, 123, 'en', 'weewg', NULL, 'weewg', '<p>wegweg</p>', NULL, '[]', 1, '2023-02-28 13:36:20', '2023-02-28 13:36:20'),
(368, 123, 'ka', 'wegwe', NULL, 'wegwe', '<p>gweg</p>', NULL, '[]', 1, '2023-02-28 13:36:20', '2023-02-28 13:36:20'),
(369, 123, 'tr', 'wegwe', NULL, 'wegwe', '<p>gweg</p>', NULL, '[]', 1, '2023-02-28 13:36:20', '2023-02-28 13:36:20'),
(370, 124, 'en', 'წეგეწგ', NULL, 'tsegetsg', '<p>წეგწეგ</p>', NULL, '[]', 1, '2023-03-06 13:46:12', '2023-03-06 13:46:12'),
(371, 124, 'ka', 'წეგ', NULL, 'tseg', '<p>ეწგ</p>', NULL, '[]', 1, '2023-03-06 13:46:12', '2023-03-06 13:46:12'),
(372, 124, 'tr', 'წეგ', NULL, 'tseg', '<p>წეგ</p>', NULL, '[]', 1, '2023-03-06 13:46:12', '2023-03-06 13:46:12'),
(373, 125, 'en', 'წქფქწ', NULL, 'tskfkts', '<p>ფქწფ</p>', NULL, '[]', 1, '2023-03-20 10:43:45', '2023-03-20 10:43:45'),
(374, 125, 'ka', 'ქწფქ', NULL, 'ktsfk', '<p>ფქწფ</p>', NULL, '[]', 1, '2023-03-20 10:43:45', '2023-03-20 10:43:45'),
(375, 125, 'tr', 'ქწფქწ', NULL, 'ktsfkts', '<p>ფქწფ</p>', NULL, '[]', 1, '2023-03-20 10:43:45', '2023-03-20 10:43:45'),
(376, 126, 'en', 'book bannera', NULL, 'book-bannera', '<p>book bannera</p>', NULL, '[]', 1, '2023-03-21 11:32:45', '2023-03-21 11:32:45'),
(377, 126, 'ka', 'book bannera', NULL, 'book-bannera', '<p>book bannera</p>', NULL, '[]', 1, '2023-03-21 11:32:45', '2023-03-21 11:32:45'),
(378, 126, 'tr', 'book bannera', NULL, 'book-bannera', '<p>book bannera</p>', NULL, '[]', 1, '2023-03-21 11:32:45', '2023-03-21 11:32:45'),
(379, 127, 'en', 'satest', NULL, 'satest', '<p>satest</p>', NULL, '[]', 1, '2023-03-25 09:21:19', '2023-03-25 09:21:19'),
(380, 127, 'ka', 'satest', NULL, 'satest', '<p>satest</p>', NULL, '[]', 1, '2023-03-25 09:21:19', '2023-03-25 09:21:19'),
(381, 127, 'tr', 'satest', NULL, 'satest', '<p>satest</p>', NULL, '[]', 1, '2023-03-25 09:21:19', '2023-03-25 09:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `slugs`
--

CREATE TABLE `slugs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullSlug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slugable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slugable_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slugs`
--

INSERT INTO `slugs` (`id`, `fullSlug`, `slugable_type`, `slugable_id`, `locale`, `slug`) VALUES
(838, 'en/main-slider', 'App\\Models\\Section', 96, 'en', 'main-slider'),
(839, 'ka/main-slider', 'App\\Models\\Section', 96, 'ka', 'main-slider'),
(840, 'tr/main-slider', 'App\\Models\\Section', 96, 'tr', 'main-slider'),
(841, 'en/it-s-not-just-the-tree-it-s-an-opportunity', 'App\\Models\\Post', 88, 'en', 'it-s-not-just-the-tree-it-s-an-opportunity'),
(842, 'ka/it-s-not-just-the-tree-it-s-an-opportunity', 'App\\Models\\Post', 88, 'ka', 'it-s-not-just-the-tree-it-s-an-opportunity'),
(843, 'tr/it-s-not-just-the-tree-it-s-an-opportunity', 'App\\Models\\Post', 88, 'tr', 'it-s-not-just-the-tree-it-s-an-opportunity'),
(847, 'en/post-slider', 'App\\Models\\Section', 97, 'en', 'post-slider'),
(848, 'ka/post-slider', 'App\\Models\\Section', 97, 'ka', 'post-slider'),
(849, 'tr/post-slider', 'App\\Models\\Section', 97, 'tr', 'post-slider'),
(850, 'en/seedlngs', 'App\\Models\\Post', 90, 'en', 'seedlngs'),
(851, 'ka/seedlngs', 'App\\Models\\Post', 90, 'ka', 'seedlngs'),
(852, 'tr/seedlngs', 'App\\Models\\Post', 90, 'tr', 'seedlngs'),
(853, 'en/wood', 'App\\Models\\Post', 91, 'en', 'wood'),
(854, 'ka/wood', 'App\\Models\\Post', 91, 'ka', 'wood'),
(855, 'tr/wood', 'App\\Models\\Post', 91, 'tr', 'wood'),
(868, 'en/growth-32', 'App\\Models\\Post', 96, 'en', 'growth-32'),
(869, 'ka/growth-32', 'App\\Models\\Post', 96, 'ka', 'growth-32'),
(870, 'tr/growth-32', 'App\\Models\\Post', 96, 'tr', 'growth-32'),
(871, 'en/text-left', 'App\\Models\\Section', 98, 'en', 'text-left'),
(872, 'ka/text-left', 'App\\Models\\Section', 98, 'ka', 'text-left'),
(873, 'tr/text-left', 'App\\Models\\Section', 98, 'tr', 'text-left'),
(874, 'en/amazing-growth-speed', 'App\\Models\\Post', 97, 'en', 'amazing-growth-speed'),
(875, 'ka/amazing-growth-speed', 'App\\Models\\Post', 97, 'ka', 'amazing-growth-speed'),
(876, 'tr/amazing-growth-speed', 'App\\Models\\Post', 97, 'tr', 'amazing-growth-speed'),
(883, 'en/text-right', 'App\\Models\\Section', 100, 'en', 'text-right'),
(884, 'ka/text-right', 'App\\Models\\Section', 100, 'ka', 'text-right'),
(885, 'tr/text-right', 'App\\Models\\Section', 100, 'tr', 'text-right'),
(886, 'en/positive-impact-on-environment', 'App\\Models\\Post', 99, 'en', 'positive-impact-on-environment'),
(887, 'ka/positive-impact-on-environment', 'App\\Models\\Post', 99, 'ka', 'positive-impact-on-environment'),
(888, 'tr/positive-impact-on-environment', 'App\\Models\\Post', 99, 'tr', 'positive-impact-on-environment'),
(904, 'en/offers-text-lefta', 'App\\Models\\Section', 103, 'en', 'offers-text-lefta'),
(905, 'ka/offers-text-lefta', 'App\\Models\\Section', 103, 'ka', 'offers-text-lefta'),
(906, 'tr/offers-text-lefta', 'App\\Models\\Section', 103, 'tr', 'offers-text-lefta'),
(907, 'en/paulownia-seedlings', 'App\\Models\\Post', 103, 'en', 'paulownia-seedlings'),
(908, 'ka/paulownia-seedlings', 'App\\Models\\Post', 103, 'ka', 'paulownia-seedlings'),
(909, 'tr/paulownia-seedlings', 'App\\Models\\Post', 103, 'tr', 'paulownia-seedlings'),
(910, 'en/text-top', 'App\\Models\\Section', 104, 'en', 'text-top'),
(911, 'ka/text-top', 'App\\Models\\Section', 104, 'ka', 'text-top'),
(912, 'tr/text-top', 'App\\Models\\Section', 104, 'tr', 'text-top'),
(913, 'en/popularity-confirmed', 'App\\Models\\Post', 104, 'en', 'popularity-confirmed'),
(914, 'ka/popularity-confirmed', 'App\\Models\\Post', 104, 'ka', 'popularity-confirmed'),
(915, 'tr/popularity-confirmed', 'App\\Models\\Post', 104, 'tr', 'popularity-confirmed'),
(919, 'en/paulownia-is-very-adaptable-and-extremely-fast-growing', 'App\\Models\\Post', 105, 'en', 'paulownia-is-very-adaptable-and-extremely-fast-growing'),
(920, 'ka/paulownia-is-very-adaptable-and-extremely-fast-growing', 'App\\Models\\Post', 105, 'ka', 'paulownia-is-very-adaptable-and-extremely-fast-growing'),
(921, 'tr/paulownia-is-very-adaptable-and-extremely-fast-growing', 'App\\Models\\Post', 105, 'tr', 'paulownia-is-very-adaptable-and-extremely-fast-growing'),
(937, 'en/ewg', 'App\\Models\\Section', 108, 'en', 'ewg'),
(938, 'ka/test', 'App\\Models\\Section', 108, 'ka', 'test'),
(939, 'tr/git-checkout-b-it-165-back-offer-is-gverdze-anu-list-feijze-5-postis-shemdeg-unda-gachndes-paginatsia', 'App\\Models\\Section', 108, 'tr', 'git-checkout-b-it-165-back-offer-is-gverdze-anu-list-feijze-5-postis-shemdeg-unda-gachndes-paginatsia'),
(943, 'en/post-slider-2', 'App\\Models\\Post', 109, 'en', 'post-slider-2'),
(944, 'ka/post-slider-2', 'App\\Models\\Post', 109, 'ka', 'post-slider-2'),
(945, 'tr/post-slider-2', 'App\\Models\\Post', 109, 'tr', 'post-slider-2'),
(946, 'en/home', 'App\\Models\\Post', 110, 'en', 'home'),
(947, 'ka/mtavari', 'App\\Models\\Post', 110, 'ka', 'mtavari'),
(948, 'tr/component-post', 'App\\Models\\Post', 110, 'tr', 'component-post'),
(949, 'en/banner-slider', 'App\\Models\\Section', 110, 'en', 'banner-slider'),
(950, 'ka/banner-slider', 'App\\Models\\Section', 110, 'ka', 'banner-slider'),
(951, 'tr/banner-slider', 'App\\Models\\Section', 110, 'tr', 'banner-slider'),
(955, 'en/form-component', 'App\\Models\\Section', 111, 'en', 'form-component'),
(956, 'ka/form-component', 'App\\Models\\Section', 111, 'ka', 'form-component'),
(957, 'tr/form-component', 'App\\Models\\Section', 111, 'tr', 'form-component'),
(980, 'en/contact-form-12', 'App\\Models\\Post', 113, 'en', 'contact-form-12'),
(981, 'ka/contact-form-12', 'App\\Models\\Post', 113, 'ka', 'contact-form-12'),
(982, 'tr/contact-form-12', 'App\\Models\\Post', 113, 'tr', 'contact-form-12'),
(998, 'en/offers', 'App\\Models\\Section', 102, 'en', 'offers'),
(999, 'ka/offers', 'App\\Models\\Section', 102, 'ka', 'offers'),
(1000, 'tr/offers', 'App\\Models\\Section', 102, 'tr', 'offers'),
(1016, 'en/home-2', 'App\\Models\\Section', 92, 'en', 'home-2'),
(1017, 'ka/home-2', 'App\\Models\\Section', 92, 'ka', 'home-2'),
(1018, 'tr/home-2', 'App\\Models\\Section', 92, 'tr', 'home-2'),
(1019, 'en/text-page', 'App\\Models\\Section', 93, 'en', 'text-page'),
(1020, 'ka/text-page', 'App\\Models\\Section', 93, 'ka', 'text-page'),
(1021, 'tr/text-page', 'App\\Models\\Section', 93, 'tr', 'text-page'),
(1043, 'en/photo-video-gallery', 'App\\Models\\Section', 94, 'en', 'photo-video-gallery'),
(1044, 'ka/photo-video-gallery', 'App\\Models\\Section', 94, 'ka', 'photo-video-gallery'),
(1045, 'tr/photo-video-gallery', 'App\\Models\\Section', 94, 'tr', 'photo-video-gallery'),
(1046, 'en/contact', 'App\\Models\\Section', 95, 'en', 'contact'),
(1047, 'ka/contact', 'App\\Models\\Section', 95, 'ka', 'contact'),
(1048, 'tr/contact', 'App\\Models\\Section', 95, 'tr', 'contact'),
(1049, 'en/photo-video', 'App\\Models\\Post', 86, 'en', 'photo-video'),
(1050, 'ka/photo-video', 'App\\Models\\Post', 86, 'ka', 'photo-video'),
(1051, 'tr/photo-video', 'App\\Models\\Post', 86, 'tr', 'photo-video'),
(1058, 'en/the-leaves-and-flowers-of-paulownia-are-rich-in-nitrogen', 'App\\Models\\Post', 106, 'en', 'the-leaves-and-flowers-of-paulownia-are-rich-in-nitrogen'),
(1059, 'ka/the-leaves-and-flowers-of-paulownia-are-rich-in-nitrogen', 'App\\Models\\Post', 106, 'ka', 'the-leaves-and-flowers-of-paulownia-are-rich-in-nitrogen'),
(1060, 'tr/the-leaves-and-flowers-of-paulownia-are-rich-in-nitrogen', 'App\\Models\\Post', 106, 'tr', 'the-leaves-and-flowers-of-paulownia-are-rich-in-nitrogen'),
(1109, 'en/contact-form-2', 'App\\Models\\Post', 102, 'en', 'contact-form-2'),
(1110, 'ka/contact-form-3', 'App\\Models\\Post', 102, 'ka', 'contact-form-3'),
(1111, 'tr/contact-form-4', 'App\\Models\\Post', 102, 'tr', 'contact-form-4'),
(1112, 'en/text-green', 'App\\Models\\Section', 119, 'en', 'text-green'),
(1113, 'ka/text-green', 'App\\Models\\Section', 119, 'ka', 'text-green'),
(1114, 'tr/text-green', 'App\\Models\\Section', 119, 'tr', 'text-green'),
(1115, 'en/text-green-2', 'App\\Models\\Post', 120, 'en', 'text-green-2'),
(1116, 'ka/text-green-2', 'App\\Models\\Post', 120, 'ka', 'text-green-2'),
(1117, 'tr/text-green-2', 'App\\Models\\Post', 120, 'tr', 'text-green-2'),
(1118, 'en/subscribe', 'App\\Models\\Section', 120, 'en', 'subscribe'),
(1119, 'ka/subscribe', 'App\\Models\\Section', 120, 'ka', 'subscribe'),
(1120, 'tr/subscribe', 'App\\Models\\Section', 120, 'tr', 'subscribe'),
(1121, 'en/subscribe-2', 'App\\Models\\Post', 121, 'en', 'subscribe-2'),
(1122, 'ka/subscribe-2', 'App\\Models\\Post', 121, 'ka', 'subscribe-2'),
(1123, 'tr/subscribe-2', 'App\\Models\\Post', 121, 'tr', 'subscribe-2'),
(1169, 'en/wegweg', 'App\\Models\\Post', 124, 'en', 'wegweg'),
(1170, 'ka/weg', 'App\\Models\\Post', 124, 'ka', 'weg'),
(1171, 'tr/wegwe-2', 'App\\Models\\Post', 124, 'tr', 'wegwe-2'),
(1178, 'en/tekht-tsomponent-1-2', 'App\\Models\\Post', 123, 'en', 'tekht-tsomponent-1-2'),
(1179, 'ka/tekht-tsomponent-1-2', 'App\\Models\\Post', 123, 'ka', 'tekht-tsomponent-1-2'),
(1180, 'tr/tekht-tsomponent-1-2', 'App\\Models\\Post', 123, 'tr', 'tekht-tsomponent-1-2'),
(1187, 'en/weewg', 'App\\Models\\Section', 123, 'en', 'weewg'),
(1188, 'ka/wegwe', 'App\\Models\\Section', 123, 'ka', 'wegwe'),
(1189, 'tr/wegwe', 'App\\Models\\Section', 123, 'tr', 'wegwe'),
(1199, 'en/book-banner-2', 'App\\Models\\Post', 122, 'en', 'book-banner-2'),
(1200, 'ka/book-banner-2', 'App\\Models\\Post', 122, 'ka', 'book-banner-2'),
(1201, 'tr/book-banner-2', 'App\\Models\\Post', 122, 'tr', 'book-banner-2'),
(1202, 'en/book-banner', 'App\\Models\\Section', 121, 'en', 'book-banner'),
(1203, 'ka/book-banner', 'App\\Models\\Section', 121, 'ka', 'book-banner'),
(1204, 'tr/book-banner', 'App\\Models\\Section', 121, 'tr', 'book-banner'),
(1205, 'en/product-benefits', 'App\\Models\\Section', 101, 'en', 'product-benefits'),
(1206, 'ka/product-benefits', 'App\\Models\\Section', 101, 'ka', 'product-benefits'),
(1207, 'tr/product-benefits', 'App\\Models\\Section', 101, 'tr', 'product-benefits'),
(1208, 'en/the-look-in-reality', 'App\\Models\\Section', 99, 'en', 'the-look-in-reality'),
(1209, 'ka/the-look-in-reality', 'App\\Models\\Section', 99, 'ka', 'the-look-in-reality'),
(1210, 'tr/the-look-in-reality', 'App\\Models\\Section', 99, 'tr', 'the-look-in-reality'),
(1211, 'en/image-banner', 'App\\Models\\Section', 105, 'en', 'image-banner'),
(1212, 'ka/image-banner', 'App\\Models\\Section', 105, 'ka', 'image-banner'),
(1213, 'tr/image-banner', 'App\\Models\\Section', 105, 'tr', 'image-banner'),
(1214, 'en/the-look-in-reality-2', 'App\\Models\\Post', 98, 'en', 'the-look-in-reality-2'),
(1215, 'ka/the-look-in-reality-2', 'App\\Models\\Post', 98, 'ka', 'the-look-in-reality-2'),
(1216, 'tr/the-look-in-reality-2', 'App\\Models\\Post', 98, 'tr', 'the-look-in-reality-2'),
(1217, 'en/source-of-quality-wood', 'App\\Models\\Post', 101, 'en', 'source-of-quality-wood'),
(1218, 'ka/source-of-quality-wood', 'App\\Models\\Post', 101, 'ka', 'source-of-quality-wood'),
(1219, 'tr/source-of-quality-wood', 'App\\Models\\Post', 101, 'tr', 'source-of-quality-wood'),
(1220, 'en/amazing-growth-rate', 'App\\Models\\Post', 100, 'en', 'amazing-growth-rate'),
(1221, 'ka/amazing-growth-rate', 'App\\Models\\Post', 100, 'ka', 'amazing-growth-rate'),
(1222, 'tr/amazing-growth-rate', 'App\\Models\\Post', 100, 'tr', 'amazing-growth-rate'),
(1223, 'en/tsegetsg', 'App\\Models\\Section', 124, 'en', 'tsegetsg'),
(1224, 'ka/tseg', 'App\\Models\\Section', 124, 'ka', 'tseg'),
(1225, 'tr/tseg', 'App\\Models\\Section', 124, 'tr', 'tseg'),
(1226, 'en/tseg-2', 'App\\Models\\Post', 125, 'en', 'tseg-2'),
(1227, 'ka/tseg-2', 'App\\Models\\Post', 125, 'ka', 'tseg-2'),
(1228, 'tr/tsegetsg-2', 'App\\Models\\Post', 125, 'tr', 'tsegetsg-2'),
(1229, 'en/contact-2', 'App\\Models\\Post', 87, 'en', 'contact-2'),
(1230, 'ka/contact-2', 'App\\Models\\Post', 87, 'ka', 'contact-2'),
(1231, 'tr/contact-2', 'App\\Models\\Post', 87, 'tr', 'contact-2'),
(1232, 'en/banner-slider-2', 'App\\Models\\Post', 111, 'en', 'banner-slider-2'),
(1233, 'ka/banner-slider-2', 'App\\Models\\Post', 111, 'ka', 'banner-slider-2'),
(1234, 'tr/banner-slider-2', 'App\\Models\\Post', 111, 'tr', 'banner-slider-2'),
(1235, 'en/tskfkts', 'App\\Models\\Section', 125, 'en', 'tskfkts'),
(1236, 'ka/ktsfk', 'App\\Models\\Section', 125, 'ka', 'ktsfk'),
(1237, 'tr/ktsfkts', 'App\\Models\\Section', 125, 'tr', 'ktsfkts'),
(1241, 'en/book-bannera', 'App\\Models\\Section', 126, 'en', 'book-bannera'),
(1242, 'ka/book-bannera', 'App\\Models\\Section', 126, 'ka', 'book-bannera'),
(1243, 'tr/book-bannera', 'App\\Models\\Section', 126, 'tr', 'book-bannera'),
(1247, 'en/book-bannera-2', 'App\\Models\\Post', 126, 'en', 'book-bannera-2'),
(1248, 'ka/book-bannera-2', 'App\\Models\\Post', 126, 'ka', 'book-bannera-2'),
(1249, 'tr/book-bannera-2', 'App\\Models\\Post', 126, 'tr', 'book-bannera-2'),
(1253, 'en/paulownia', 'App\\Models\\Post', 85, 'en', 'paulownia'),
(1254, 'ka/paulownia', 'App\\Models\\Post', 85, 'ka', 'paulownia'),
(1255, 'tr/paulownia', 'App\\Models\\Post', 85, 'tr', 'paulownia'),
(1256, 'en/wegwegwegweg', 'App\\Models\\Post', 127, 'en', 'wegwegwegweg'),
(1257, 'ka/weg-2', 'App\\Models\\Post', 127, 'ka', 'weg-2'),
(1258, 'tr/gweg', 'App\\Models\\Post', 127, 'tr', 'gweg'),
(1262, 'en/tekht-tsomponent-1', 'App\\Models\\Section', 122, 'en', 'tekht-tsomponent-1'),
(1263, 'ka/tekht-tsomponent-1', 'App\\Models\\Section', 122, 'ka', 'tekht-tsomponent-1'),
(1264, 'tr/tekht-tsomponent-1', 'App\\Models\\Section', 122, 'tr', 'tekht-tsomponent-1'),
(1268, 'en/what-is-lorem-ipsum', 'App\\Models\\Post', 89, 'en', 'what-is-lorem-ipsum'),
(1269, 'ka/what-is-lorem-ipsum', 'App\\Models\\Post', 89, 'ka', 'what-is-lorem-ipsum'),
(1270, 'tr/what-is-lorem-ipsum', 'App\\Models\\Post', 89, 'tr', 'what-is-lorem-ipsum'),
(1271, 'en/satest', 'App\\Models\\Section', 127, 'en', 'satest'),
(1272, 'ka/satest', 'App\\Models\\Section', 127, 'ka', 'satest'),
(1273, 'tr/satest', 'App\\Models\\Section', 127, 'tr', 'satest'),
(1274, 'en/wgewgwegwe-wegw', 'App\\Models\\Post', 128, 'en', 'wgewgwegwe-wegw'),
(1275, 'ka/wegwg', 'App\\Models\\Post', 128, 'ka', 'wegwg'),
(1276, 'tr/sdgggewge-ewg', 'App\\Models\\Post', 128, 'tr', 'sdgggewge-ewg');

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `additional` text COLLATE utf8mb4_unicode_ci,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`id`, `post_id`, `name`, `email`, `text`, `additional`, `seen`, `created_at`, `updated_at`) VALUES
(1, 87, 'wetwet', 'wetewt@gmail.com', '555555555532222222222222222', '{\"phone\":\"32532523\",\"subject\":\"5235235\",\"text\":\"555555555532222222222222222\"}', 1, '2023-02-17 13:26:49', '2023-02-17 13:26:59'),
(2, 111, 'irakli', 'admin@admin.com', 'wegweg', '{\"phone\":\"235235\",\"subject\":\"ewgewg\",\"text\":\"wegweg\"}', 1, '2023-02-21 07:54:53', '2023-02-21 07:55:24'),
(3, 112, 'ირაკლიwwewewwe', 'ირაკლიwwewewwe', 'ირაკლიwwewewwe', '{\"phone\":\"\\u10d8\\u10e0\\u10d0\\u10d9\\u10da\\u10d8wwewewwe\",\"subject\":\"\\u10d8\\u10e0\\u10d0\\u10d9\\u10da\\u10d8wwewewwe\",\"text\":\"\\u10d8\\u10e0\\u10d0\\u10d9\\u10da\\u10d8wwewewwe\"}', 1, '2023-02-21 08:03:35', '2023-02-21 08:03:45'),
(4, 112, 'irakli', NULL, NULL, '{\"phone\":null,\"subject\":null,\"text\":null}', 0, '2023-03-01 10:20:25', '2023-03-01 10:20:25'),
(5, 122, 'weg', 'wef@gmail.com', NULL, '{\"phone\":null,\"organization\":null,\"country\":null,\"quantity\":null,\"message\":\"weg\"}', 0, '2023-03-21 11:34:53', '2023-03-21 11:34:53'),
(6, 122, 'erh', 'erher@gmail.com', NULL, '{\"phone\":null,\"organization\":null,\"country\":null,\"quantity\":null,\"message\":\"235\"}', 0, '2023-03-21 12:37:31', '2023-03-21 12:37:31');

-- --------------------------------------------------------

--
-- Table structure for table `submission_files`
--

CREATE TABLE `submission_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `submission_id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extention` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `locale`, `email`, `created_at`, `updated_at`) VALUES
(1, 'en', 'iraklibandzeladze@gmail.com', '2023-02-27 15:08:23', '2023-02-27 15:08:23'),
(2, 'en', 'admewgwegin@admin.com', '2023-03-02 12:09:00', '2023-03-02 12:09:00'),
(3, 'en', 'awegwegwedmin@admin.com', '2023-03-02 12:09:46', '2023-03-02 12:09:46'),
(4, 'en', 'admin@admin.com', '2023-03-06 07:16:14', '2023-03-06 07:16:14');

-- --------------------------------------------------------

--
-- Table structure for table `temp_files_table`
--

CREATE TABLE `temp_files_table` (
  `file_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `additional_paths` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `temp_files_table`
--

INSERT INTO `temp_files_table` (`file_name`, `path`, `user_id`, `additional_paths`) VALUES
('63dba55d8b751.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63dba55e2f0dd.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63dba58996304.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63dba589e615f.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63dbb082b6c94.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63dbc8105d873.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63dbc810a4ab5.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63dbc810e2d1d.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e0fdd74d22e.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e0fdd792dd1.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e0fdd8afc8a.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e2054112709.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e205419b3cb.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e20541d8e13.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e607ac779c7.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e607d356d36.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e608916e70b.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e608edc80f4.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e608ee16a65.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e608ee55bad.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e608fa9d98d.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e608fae3179.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e8f772433d0.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e8f772d579d.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e8f7732258c.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e9156785985.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e9156803137.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e915684753e.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e93549ca195.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e935683e772.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e935688322e.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63e93568c8021.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ea21755ba88.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ea2345808be.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ea2362659df.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ea238e1959a.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ea23b532755.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ea31468427e.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ea31473b0d6.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ea4aa86fe79.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ea4ab6f2ed9.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ea4abd26076.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63eca4c171b2f.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63eca4c228e00.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63eca4c2e8595.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63eca52de2c4b.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63eca52e4e648.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ece5986ce1c.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ece5991124f.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ece599936d1.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ece607031d0.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ece6075ba7b.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ece607d2026.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ece6664166b.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ece666857a0.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ece666d2b6e.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ece7bc45e09.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ece7bc9db79.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ecebe815cd6.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ecebe86e2d8.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ecebe954740.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ecf2dc8c1e6.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ef1e31c230e.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ef1e3279d35.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ef1f061a523.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ef1f066403f.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ef437aa001c.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ef7fb21226c.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ef7fb284003.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ef7fb2c18b9.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ef7fb33f82e.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ef8f13a513f.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ef8f140ba00.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ef8f147fc71.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ef8f154cbb3.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63ef8f15cba26.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63f466f0c4d5c.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63f466f18c875.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63f466f266554.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63f466f31c363.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63fc96ac85cf1.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63fc96ad3acde.png', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63fdf85f6bee1.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63fdf860009aa.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('63fdf860411e7.jpg', 'uploads/img/', 1, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('6419aa2f3dd3c.jpg', 'uploads/img/', 6, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('6419aa2fc77b9.jpg', 'uploads/img/', 6, '{\"path\":\"uploads\\/img\\/thumb\\/\"}'),
('6419aa302419b.jpg', 'uploads/img/', 6, '{\"path\":\"uploads\\/img\\/thumb\\/\"}');

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
  `type_id` int(11) DEFAULT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type_id`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$lU/AdGadk4niqYbcGyjkBu4cnUE6shtM6nJivMflEfHRXKTHLe7XC', 1, NULL, NULL, '2023-01-25 15:07:23', '2023-01-25 15:07:23'),
(2, 'irakli', 'iraklibandzeladze@gmail.com', NULL, '$2y$10$4p9BdULEoF4b2wDlEc/LMOBqp9CfatEtVXtnSO0H9GXkQG0BvGp9S', 2, NULL, NULL, '2023-02-01 08:01:50', '2023-02-01 08:01:50'),
(3, 'irakli', 'enterprisegeorgia@yahoo.com', NULL, '$2y$10$iXJyhgJ8VgFcv6ez/J5LweyIVJtZ4tiAKcapop6EiNW.98b9L.Oue', NULL, NULL, NULL, '2023-02-01 08:44:24', '2023-02-01 08:44:35'),
(4, 'anatopuridze4@gmail.com', 'anatopuridze4@gmail.com', NULL, '$2y$10$5/Oj32E4p4RUYJ2.vg5tf.wBa4k5R7OPTyYcQxQCG8IytyX.P4HdK', 2, NULL, NULL, '2023-02-20 07:47:51', '2023-02-20 07:47:51'),
(5, 'irakli@admin.com', 'irakli@admin.com', NULL, '$2y$10$qUo5IF3lb0yYUjr2Vvb/rOusr/YQHiOqEdjC.d78Y/BlLZFzgC2pC', 2, NULL, NULL, '2023-03-17 09:58:42', '2023-03-17 09:58:42'),
(6, 'irakli', 'iraklibandzeladze1@gmail.com', NULL, '$2y$10$da2yV/YNUG3WJwxo9sreyuOQ/gD1WcRVLt6fUNs5nR6dYcuB1OrS6', 2, NULL, NULL, '2023-03-21 09:52:23', '2023-03-21 09:52:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE `user_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`id`, `user_id`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, 1, '127.0.0.1', '2023-02-16 06:26:11', '2023-02-16 06:26:11'),
(2, 1, '127.0.0.1', '2023-02-16 13:55:58', '2023-02-16 13:55:58'),
(3, 1, '127.0.0.1', '2023-02-17 06:18:13', '2023-02-17 06:18:13'),
(4, 1, '127.0.0.1', '2023-02-20 07:44:52', '2023-02-20 07:44:52'),
(5, 1, '127.0.0.1', '2023-02-20 07:45:26', '2023-02-20 07:45:26'),
(6, 1, '127.0.0.1', '2023-02-20 07:46:16', '2023-02-20 07:46:16'),
(7, 4, '127.0.0.1', '2023-02-20 07:51:22', '2023-02-20 07:51:22'),
(8, 1, '127.0.0.1', '2023-02-20 07:52:01', '2023-02-20 07:52:01'),
(9, 4, '127.0.0.1', '2023-02-20 07:52:23', '2023-02-20 07:52:23'),
(10, 1, '127.0.0.1', '2023-02-20 07:57:46', '2023-02-20 07:57:46'),
(11, 1, '127.0.0.1', '2023-02-20 12:48:03', '2023-02-20 12:48:03'),
(12, 1, '127.0.0.1', '2023-02-21 06:37:16', '2023-02-21 06:37:16'),
(13, 1, '127.0.0.1', '2023-02-21 11:00:15', '2023-02-21 11:00:15'),
(14, 1, '127.0.0.1', '2023-02-24 12:07:18', '2023-02-24 12:07:18'),
(15, 1, '127.0.0.1', '2023-02-27 06:32:19', '2023-02-27 06:32:19'),
(16, 1, '127.0.0.1', '2023-02-28 08:04:51', '2023-02-28 08:04:51'),
(17, 1, '127.0.0.1', '2023-03-01 07:03:03', '2023-03-01 07:03:03'),
(18, 1, '127.0.0.1', '2023-03-02 12:08:38', '2023-03-02 12:08:38'),
(19, 1, '127.0.0.1', '2023-03-06 07:59:36', '2023-03-06 07:59:36'),
(20, 1, '127.0.0.1', '2023-03-06 12:39:38', '2023-03-06 12:39:38'),
(21, 1, '127.0.0.1', '2023-03-13 14:27:18', '2023-03-13 14:27:18'),
(22, 1, '127.0.0.1', '2023-03-14 14:29:58', '2023-03-14 14:29:58'),
(23, 1, '127.0.0.1', '2023-03-15 07:30:07', '2023-03-15 07:30:07'),
(24, 1, '127.0.0.1', '2023-03-17 09:53:49', '2023-03-17 09:53:49'),
(25, 5, '127.0.0.1', '2023-03-17 09:59:06', '2023-03-17 09:59:06'),
(26, 1, '127.0.0.1', '2023-03-20 10:41:24', '2023-03-20 10:41:24'),
(27, 1, '127.0.0.1', '2023-03-20 13:26:51', '2023-03-20 13:26:51'),
(28, 1, '127.0.0.1', '2023-03-21 09:28:51', '2023-03-21 09:28:51'),
(29, 5, '127.0.0.1', '2023-03-21 09:39:55', '2023-03-21 09:39:55'),
(30, 1, '127.0.0.1', '2023-03-21 09:50:41', '2023-03-21 09:50:41'),
(31, 6, '127.0.0.1', '2023-03-21 09:52:35', '2023-03-21 09:52:35'),
(32, 1, '127.0.0.1', '2023-03-22 07:15:41', '2023-03-22 07:15:41'),
(33, 1, '127.0.0.1', '2023-03-23 06:45:05', '2023-03-23 06:45:05'),
(34, 1, '127.0.0.1', '2023-03-24 12:53:22', '2023-03-24 12:53:22'),
(35, 1, '127.0.0.1', '2023-03-25 09:20:36', '2023-03-25 09:20:36'),
(36, 1, '127.0.0.1', '2023-07-16 09:33:57', '2023-07-16 09:33:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banners_author_id_foreign` (`author_id`);

--
-- Indexes for table `banner_files`
--
ALTER TABLE `banner_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banner_files_banner_id_foreign` (`banner_id`);

--
-- Indexes for table `banner_translations`
--
ALTER TABLE `banner_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banner_translations_banner_id_foreign` (`banner_id`);

--
-- Indexes for table `directories`
--
ALTER TABLE `directories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directory_translations`
--
ALTER TABLE `directory_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `directory_translations_directory_id_foreign` (`directory_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `filemanager`
--
ALTER TABLE `filemanager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_sections`
--
ALTER TABLE `menu_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_sections_section_id_foreign` (`section_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_section_id_foreign` (`section_id`),
  ADD KEY `posts_author_id_foreign` (`author_id`);

--
-- Indexes for table `post_files`
--
ALTER TABLE `post_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_files_post_id_foreign` (`post_id`);

--
-- Indexes for table `post_translations`
--
ALTER TABLE `post_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_translations_post_id_foreign` (`post_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_parent_id_foreign` (`parent_id`),
  ADD KEY `sections_type_id_index` (`type_id`);

--
-- Indexes for table `section_translations`
--
ALTER TABLE `section_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_translations_section_id_foreign` (`section_id`);

--
-- Indexes for table `slugs`
--
ALTER TABLE `slugs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slugs_slugable_type_slugable_id_index` (`slugable_type`,`slugable_id`);

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submissions_post_id_foreign` (`post_id`);

--
-- Indexes for table `submission_files`
--
ALTER TABLE `submission_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submission_files_submission_id_foreign` (`submission_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banner_files`
--
ALTER TABLE `banner_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banner_translations`
--
ALTER TABLE `banner_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `directories`
--
ALTER TABLE `directories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `directory_translations`
--
ALTER TABLE `directory_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filemanager`
--
ALTER TABLE `filemanager`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_sections`
--
ALTER TABLE `menu_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `post_files`
--
ALTER TABLE `post_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `post_translations`
--
ALTER TABLE `post_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=383;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `section_translations`
--
ALTER TABLE `section_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=382;

--
-- AUTO_INCREMENT for table `slugs`
--
ALTER TABLE `slugs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1277;

--
-- AUTO_INCREMENT for table `submissions`
--
ALTER TABLE `submissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `submission_files`
--
ALTER TABLE `submission_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `banners_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `banner_files`
--
ALTER TABLE `banner_files`
  ADD CONSTRAINT `banner_files_banner_id_foreign` FOREIGN KEY (`banner_id`) REFERENCES `banners` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `banner_translations`
--
ALTER TABLE `banner_translations`
  ADD CONSTRAINT `banner_translations_banner_id_foreign` FOREIGN KEY (`banner_id`) REFERENCES `banners` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `directory_translations`
--
ALTER TABLE `directory_translations`
  ADD CONSTRAINT `directory_translations_directory_id_foreign` FOREIGN KEY (`directory_id`) REFERENCES `directories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menu_sections`
--
ALTER TABLE `menu_sections`
  ADD CONSTRAINT `menu_sections_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `posts_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_files`
--
ALTER TABLE `post_files`
  ADD CONSTRAINT `post_files_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_translations`
--
ALTER TABLE `post_translations`
  ADD CONSTRAINT `post_translations_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `section_translations`
--
ALTER TABLE `section_translations`
  ADD CONSTRAINT `section_translations_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `submissions`
--
ALTER TABLE `submissions`
  ADD CONSTRAINT `submissions_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `submission_files`
--
ALTER TABLE `submission_files`
  ADD CONSTRAINT `submission_files_submission_id_foreign` FOREIGN KEY (`submission_id`) REFERENCES `submissions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
