-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 23, 2021 at 12:29 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shereali.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Admin', '01961363543', 'sohidulislam@gmail.com', NULL, '$2y$10$2nF3DT09Tl1O/JpiqJCWjO9WgyrxsgJSLoE4RI4PjbojDdpEHKswa', NULL, NULL, '2021-05-23 01:57:19');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_logo`, `created_at`, `updated_at`) VALUES
(4, 'Bata', 'public/media/brand/080121_10_18_57.png', NULL, NULL),
(5, 'Apex', 'public/media/brand/080121_10_06_59.jpg', NULL, NULL),
(7, 'ebay', 'public/media/brand/080121_11_02_01.png', NULL, NULL),
(8, 'Apple', 'public/media/brand/220121_06_34_23.png', NULL, NULL),
(9, 'Oppo', 'public/media/brand/230121_12_59_10.jpg', NULL, NULL),
(10, 'TOYOTA', 'public/media/brand/230521_08_47_06.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Man', NULL, NULL),
(2, 'Women', NULL, NULL),
(3, 'Child', '2019-12-07 05:56:45', '2019-12-07 05:56:45'),
(5, 'Old man', '2021-01-05 06:29:43', '2021-01-05 06:29:43'),
(6, 'Electronics Devices', '2021-01-22 00:22:24', '2021-01-22 00:22:24'),
(7, 'Automotive & Motorbike', '2021-05-23 02:01:54', '2021-05-23 02:01:54');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
CREATE TABLE IF NOT EXISTS `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `coupon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon`, `discount`, `created_at`, `updated_at`) VALUES
(3, 'abc', '20', NULL, NULL),
(4, 'bbc', '15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_05_052517_create_admins_table', 1),
(5, '2019_11_19_141032_create_categories_table', 2),
(6, '2019_11_19_141122_create_subcategories_table', 2),
(7, '2019_11_19_141246_create_brands_table', 2),
(8, '2020_07_09_070310_create_coupons_table--create-coupons', 3),
(9, '2020_12_30_061729_create-coupons_table', 4),
(10, '2020_12_31_060110_subscribers', 5),
(11, '2021_01_01_043624_create_newslaters_table', 6),
(12, '2021_01_01_113157_create_products_table', 7),
(13, '2021_02_14_052408_create_wishlists', 8),
(14, '2021_02_28_070950_create_settings_table', 9),
(15, '2016_06_01_000001_create_oauth_auth_codes_table', 10),
(16, '2016_06_01_000002_create_oauth_access_tokens_table', 10),
(17, '2016_06_01_000003_create_oauth_refresh_tokens_table', 10),
(18, '2016_06_01_000004_create_oauth_clients_table', 10),
(19, '2016_06_01_000005_create_oauth_personal_access_clients_table', 10),
(20, '2021_03_13_073002_create_order_table', 11),
(21, '2021_03_13_073017_create_order_details_table', 11),
(22, '2021_03_13_073032_create_shipping_details_table', 11),
(23, '2021_03_21_123347_create_subscriber_table', 12),
(24, '2021_03_21_125244_create_seosetting_table', 13),
(25, '2021_03_23_115704_create_seo_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `newslaters`
--

DROP TABLE IF EXISTS `newslaters`;
CREATE TABLE IF NOT EXISTS `newslaters` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newslaters`
--

INSERT INTO `newslaters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'nurulpro24@gmail.com', '2020-12-01 00:31:49', NULL),
(2, 'webdoctor24bd@gmail.com', '2021-01-01 05:32:38', NULL),
(3, 'shohidulislam@gmail.com', '2021-01-01 05:33:43', NULL),
(4, 'shohidulislam154@gmail.com', '2021-01-01 05:57:35', NULL),
(5, 'nurulpro24444@gmail.com', '2021-01-01 06:00:45', NULL),
(6, 'nurulpro245444@gmail.com', '2021-01-01 06:13:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', '700euKcEbGBHgRICNCGRS2Leov5X3fL1aZpo3ewO', NULL, 'http://localhost', 1, 0, 0, '2021-03-06 00:53:35', '2021-03-06 00:53:35'),
(2, NULL, 'Laravel Password Grant Client', 'GYTqBggDnmG3nt5362gNXwZnyha2YioIoL44SS29', 'users', 'http://localhost', 0, 1, 0, '2021-03-06 00:53:35', '2021-03-06 00:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-03-06 00:53:35', '2021-03-06 00:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paying_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blnc_transection` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_order_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `payment_id`, `paying_amount`, `payment_type`, `blnc_transection`, `stripe_order_id`, `subtotal`, `shipping`, `vat`, `total`, `status`, `status_code`, `month`, `date`, `year`, `created_at`, `updated_at`) VALUES
(10, '12', 'card_1IVygoBZdkLUA1X2jItloeKT', '11007', 'stripe', 'txn_1IVygpBZdkLUA1X2tyFano2X', '6051f8fa303c3', '11000.00', '7', '1', '11007', '0', '5421584', 'March', '17-03-21', '2021', NULL, NULL),
(11, '12', 'card_1IWf3mBZdkLUA1X2KVLmj4Dg', '50007', 'stripe', 'txn_1IWf3oBZdkLUA1X2b0Vko0GY', '605475332dc46', '50000.00', '7', '1', '50007', '3', '6548452', 'March', '19-03-21', '2021', '2021-03-19 09:56:04', '2021-03-19 09:56:04');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `singleprice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalprice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `product_id`, `order_id`, `product_name`, `color`, `size`, `quantity`, `singleprice`, `totalprice`, `created_at`, `updated_at`) VALUES
(5, '15', '11', 'iPhone 8', '', '', '1', '50000', '50000', '2021-03-19 09:56:04', '2021-03-19 09:56:04'),
(4, '20', '10', 'iPhone 7', 'red', 'weight 250grm', '1', '11000', '11000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_details` text COLLATE utf8mb4_unicode_ci,
  `product_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_slider` int(11) DEFAULT NULL,
  `hot_deal` int(11) DEFAULT NULL,
  `best_rated` int(11) DEFAULT NULL,
  `mid_slider` int(11) DEFAULT NULL,
  `hot_new` int(11) DEFAULT NULL,
  `trend` int(11) DEFAULT NULL,
  `buyone_getone` int(11) DEFAULT NULL,
  `image_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_name`, `product_code`, `product_quantity`, `product_details`, `product_color`, `product_size`, `selling_price`, `discount_price`, `video_link`, `main_slider`, `hot_deal`, `best_rated`, `mid_slider`, `hot_new`, `trend`, `buyone_getone`, `image_one`, `image_two`, `image_three`, `status`, `created_at`, `updated_at`) VALUES
(15, 6, 19, 4, 'iPhone 8', 'iPhone 7548', '10', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 'black', '|', '50000', NULL, 'https://www.youtube.com/watch?v=X4UegAYT4sI', 1, 1, 1, 1, 1, 1, 1, 'public/media/product/1691013919704937.png', 'public/media/product/1691013919900609.jpg', 'public/media/product/1691013919998785.jpg', '1', '2021-02-07 05:42:24', '2021-02-07 05:42:24'),
(16, 5, 14, 4, 'Retro', 'w-1545499', '200', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 'black', '250grm', '500', '400', 'https://www.youtube.com/watch?v=X4UegAYT4sI', 1, 1, NULL, 1, NULL, 1, 1, 'public/media/product/1691014703360151.jpg', 'public/media/product/1691014703617926.png', 'public/media/product/1691014703709111.png', '1', '2021-02-07 05:54:51', '2021-02-07 05:54:51'),
(17, 6, 19, 8, 'iPhone 7', 'iPhone 7549', '50', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 'black, Green', '300grm', '11000', '10000', 'https://www.facebook.com/', 1, 1, 1, NULL, 1, 1, NULL, 'public/media/product/1691017102845770.png', 'public/media/product/1691017103129729.jpg', 'public/media/product/1691017103559039.jpg', '1', '2021-02-07 06:33:00', '2021-02-07 06:33:00'),
(18, 6, 19, 4, 'iPhone 8', 'iPhone 7548', '10', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 'red', '280grm', '50000', NULL, 'https://www.youtube.com/watch?v=X4UegAYT4sI', 1, 1, 1, 1, 1, 1, 1, 'public/media/product/1691013919704937.png', 'public/media/product/1691013919900609.jpg', 'public/media/product/1691013919998785.jpg', '1', '2021-02-07 05:42:24', '2021-02-07 05:42:24'),
(19, 5, 14, 4, 'Retro', 'w-1545465', '200', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 'black', '350 grm', '500', '400', 'https://www.youtube.com/watch?v=X4UegAYT4sI', 1, 1, NULL, 1, NULL, 1, 1, 'public/media/product/1691014703360151.jpg', 'public/media/product/1691014703617926.png', 'public/media/product/1691014703709111.png', '1', '2021-02-07 05:54:51', '2021-02-07 05:54:51'),
(20, 6, 19, 8, 'iPhone 7', 'iPhone 7549', '50', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 'green', '189grm', '11000', NULL, 'https://www.facebook.com/', 1, 1, 1, NULL, 1, 1, NULL, 'public/media/product/1691017102845770.png', 'public/media/product/1691017103129729.jpg', 'public/media/product/1691017103559039.jpg', '1', '2021-02-07 06:33:00', '2021-02-07 06:33:00'),
(21, 7, 20, 10, 'Toyota', '25415632', '20', 'Maruti, Toyota, M&M remain bullish on long-term growth of used car business', 'BLACK', 'NULL', '105000', NULL, 'https://www.business-standard.com/article/companies/maruti-toyota-m-m-remain-bullish-on-long-term-growth-of-used-car-business-121052300166_1.html', 1, 1, 1, 1, 1, 1, 1, 'public/media/product/1700535944716998.jpg', 'public/media/product/1700535945287945.jpg', 'public/media/product/1700535945498986.jpg', '1', '2021-05-23 08:10:55', '2021-05-23 08:10:55');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

DROP TABLE IF EXISTS `seo`;
CREATE TABLE IF NOT EXISTS `seo` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `google_analytics` text COLLATE utf8mb4_unicode_ci,
  `bing_analytics` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `meta_title`, `meta_author`, `meta_tag`, `meta_description`, `google_analytics`, `bing_analytics`, `created_at`, `updated_at`) VALUES
(1, 'nurul islam', 'bata', 'bata', 'bata shoe', '546545601265', '322556478784', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `vat`, `shipping_charge`, `shopname`, `email`, `phone`, `address`, `logo`, `created_at`, `updated_at`) VALUES
(1, '3', '7', 'evally', 'evally@gmail.com', '01821554477', '384/7/1 rampura', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_details`
--

DROP TABLE IF EXISTS `shipping_details`;
CREATE TABLE IF NOT EXISTS `shipping_details` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_details`
--

INSERT INTO `shipping_details` (`id`, `order_id`, `ship_name`, `ship_phone`, `ship_email`, `ship_address`, `ship_city`, `created_at`, `updated_at`) VALUES
(5, '11', 'Nurul Islam', '01821554477', 'nurulpro24@gmail.com', '387/7/9, East Rampura', 'Dhaka', NULL, NULL),
(4, '10', 'Nurul Islam', '01821554477', 'nurulpro24@gmail.com', '387/7/9, East Rampura', 'Dhaka', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

DROP TABLE IF EXISTS `subcategories`;
CREATE TABLE IF NOT EXISTS `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_name`, `created_at`, `updated_at`) VALUES
(11, 1, 'Shirt', NULL, NULL),
(12, 2, 'Shirt', NULL, NULL),
(13, 1, 'shoe', NULL, NULL),
(14, 5, 'Dyper', NULL, NULL),
(15, 3, 'Dyper', NULL, NULL),
(16, 2, 'shoe', NULL, NULL),
(17, 3, 'shoe', NULL, NULL),
(18, 5, 'shoe', NULL, NULL),
(19, 6, 'Mobile', NULL, NULL),
(20, 7, 'Car', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `provider`, `provider_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sohidul Islam', NULL, 'sohidulislam@gmail.com', NULL, NULL, NULL, '$2y$10$AXmPJQ.tg/8z5VJr6Z9Ar.XJzte2Ytw058vRAes3CxI7CXwAr/CT6', NULL, '2019-10-04 23:27:57', '2019-10-04 23:27:57'),
(7, 'Nurul pro24', NULL, 'nurulpro24@gmail.com', 'google', '107374752424381241673', NULL, NULL, NULL, '2021-02-21 05:04:27', '2021-02-21 05:04:27'),
(11, 'Nurul Islam', NULL, 'nurulislamni24ni@gmail.com', 'google', '106406860429678290672', NULL, '$2y$10$tsuF25NIOzc0q7KArlEkhewIPXRT25wvUC.DC3XDlua0FuLOvp3zW', NULL, '2021-02-22 02:38:37', '2021-02-22 02:38:37'),
(12, 'Nurul Islam', '01821554477', 'webdoctor24bd@gmail.com', NULL, NULL, NULL, '$2y$10$tsuF25NIOzc0q7KArlEkhewIPXRT25wvUC.DC3XDlua0FuLOvp3zW', NULL, '2021-02-24 00:33:40', '2021-02-24 00:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

DROP TABLE IF EXISTS `wishlists`;
CREATE TABLE IF NOT EXISTS `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 6, 17, NULL, NULL),
(5, 6, 20, NULL, NULL),
(6, 6, 18, NULL, NULL),
(7, 11, 20, NULL, NULL),
(8, 11, 18, NULL, NULL),
(9, 12, 20, NULL, NULL),
(10, 12, 18, NULL, NULL),
(11, 12, 15, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
