-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2024 at 04:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marki_apparel`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cart_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`cart_id`, `user_id`, `product_id`, `quantity`) VALUES
(10, 1, 1, 1),
(11, 1, 27, 1);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2024_08_14_182549_create_products_table', 1),
(4, '2024_08_20_054418_marki_apparel', 1),
(5, '2024_08_20_054556_marki_apparel', 1),
(6, '2024_09_23_104201_add_verification_code_to_users_table', 2),
(7, '2024_09_29_110308_create_carts_table', 3),
(8, '2024_09_29_122019_add_quantity_to_carts_table', 4);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `picture1` varchar(255) DEFAULT NULL,
  `picture2` varchar(255) DEFAULT NULL,
  `picture3` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category`, `color`, `size`, `price`, `quantity`, `picture1`, `picture2`, `picture3`, `description`, `status`, `date_created`) VALUES
(1, 'Casual Knitted', 'Polo Shirt', 'Beige', 'S', 209, 140, 'casualKnittedBeige3.jpg', 'casualKnittedBeige1.jpg', 'casualKnittedMain.jpg', 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 06:01:45'),
(2, 'Casual Knitted', 'Polo Shirt', 'Beige', 'M', 209, 200, 'casualKnittedBeige3.jpg', 'casualKnittedBeige1.jpg', 'casualKnittedMain.jpg', 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 06:04:49'),
(3, 'Casual Knitted', 'Polo Shirt', 'Beige', 'L', 209, 59, 'casualKnittedBeige3.jpg', 'casualKnittedBeige1.jpg', 'casualKnittedMain.jpg', 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 06:05:16'),
(4, 'Casual Knitted', 'Polo Shirt', 'Beige', 'XL', 209, 80, 'casualKnittedBeige3.jpg', 'casualKnittedBeige1.jpg', 'casualKnittedMain.jpg', 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 06:05:43'),
(5, 'Casual Knitted', 'Polo Shirt', 'Black', 'L', 209, 100, 'casualKnittedBlack.jpg', 'casualKnittedMain.jpg', NULL, 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 06:11:17'),
(6, 'Casual Knitted', 'Polo Shirt', 'Gray', 'S', 209, 50, 'casualKnittedGray.jpg', 'casualKnittedMain.jpg', NULL, 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 06:11:46'),
(7, 'Casual Knitted', 'Polo Shirt', 'Green', 'S', 209, 300, 'casualKnittedGreen.jpg', 'casualKnittedMain.jpg', NULL, 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 06:12:08'),
(8, 'Casual Knitted', 'Polo Shirt', 'Brown', 'S', 209, 78, 'casualKnittedBrown.jpg', 'casualKnittedMain.jpg', NULL, 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 06:12:34'),
(9, 'Casual Knitted', 'Polo Shirt', 'White', 'S', 209, 200, 'casualKnittedWhite.jpg', 'casualKnittedMain.jpg', NULL, 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 06:12:59'),
(10, 'Casual Knitted', 'Polo Shirt', 'Black', 'M', 209, 37, 'casualKnittedBlack.jpg', 'casualKnittedMain.jpg', NULL, 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 06:38:38'),
(11, 'Casual Knitted', 'Polo Shirt', 'Black', 'S', 209, 120, 'casualKnittedBlack.jpg', 'casualKnittedMain.jpg', NULL, 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 06:39:01'),
(12, 'Casual Knitted', 'Polo Shirt', 'Black', 'XL', 209, 87, 'casualKnittedBlack.jpg', 'casualKnittedMain.jpg', NULL, 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 06:40:10'),
(14, 'Casual Knitted', 'Polo Shirt', 'Gray', 'M', 209, 300, 'casualKnittedGray.jpg', 'casualKnittedMain.jpg', NULL, 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 06:42:43'),
(15, 'Casual Knitted', 'Polo Shirt', 'Gray', 'L', 209, 59, 'casualKnittedGray.jpg', 'casualKnittedMain.jpg', NULL, 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 06:43:02'),
(16, 'Casual Knitted', 'Polo Shirt', 'Gray', 'XL', 209, 70, 'casualKnittedGray.jpg', 'casualKnittedMain.jpg', NULL, 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 06:44:36'),
(17, 'Casual Knitted', 'Polo Shirt', 'Green', 'M', 209, 235, 'casualKnittedGreen.jpg', 'casualKnittedMain.jpg', NULL, 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 07:11:17'),
(18, 'Casual Knitted', 'Polo Shirt', 'Green', 'L', 209, 230, 'casualKnittedGreen.jpg', 'casualKnittedMain.jpg', NULL, 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 07:11:43'),
(19, 'Casual Knitted', 'Polo Shirt', 'Green', 'XL', 209, 200, 'casualKnittedGreen.jpg', 'casualKnittedMain.jpg', NULL, 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 07:12:11'),
(20, 'Casual Knitted', 'Polo Shirt', 'Brown', 'M', 209, 235, 'casualKnittedBrown.jpg', 'casualKnittedMain.jpg', NULL, 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 07:15:11'),
(21, 'Casual Knitted', 'Polo Shirt', 'Brown', 'L', 209, 2039, 'casualKnittedBrown.jpg', 'casualKnittedMain.jpg', NULL, 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 07:25:37'),
(22, 'Casual Knitted', 'Polo Shirt', 'Brown', 'XL', 209, 500, 'casualKnittedBrown.jpg', 'casualKnittedMain.jpg', NULL, 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 07:45:06'),
(23, 'Casual Knitted', 'Polo Shirt', 'White', 'M', 209, 400, 'casualKnittedWhite.jpg', 'casualKnittedMain.jpg', NULL, 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 07:45:50'),
(24, 'Casual Knitted', 'Polo Shirt', 'White', 'L', 209, 57, 'casualKnittedWhite.jpg', 'casualKnittedMain.jpg', NULL, 'Casual Knitted Polo Shirt Short-Sleeved Summer Trendy Lapel Men\'s Solid Color Simple All-Mat', 1, '2024-08-20 07:46:20'),
(26, 'Huilishi Box Shirt', 'Polo', 'White', 'S', 299, 100, 'HuilishiWhite.jpg', 'mainHuilishi.jpg', NULL, 'Huilishi Latest Trending Box Shirt for Men 5 Colors Short/Crop Version Short Sleeve Plain Thick Cotton Fabric Patch Pockes Korean Fashion', 1, '2024-08-20 12:37:17'),
(27, 'Waffle Shirt', 'T-Shirt', 'Beige', 'S', 299, 100, 'WaffleCurl.jpg', 'Waffle.jpg', 'mainWaffle.jpg', 'MPMG Buy 1 Get 4 Waffle Basic Unisex Shirt Oversized Tshirt clothes Menswear Round Neck', 1, '2024-09-10 13:25:42'),
(40, 'American-Style Long Sleeve', 'Long Sleeve', 'Gray', 'S', 344, 267, 'ps-gray2.jpg', 'ps-gray1.jpg', NULL, 'American-Style Casual round neck sweater 2023 fall/winter Hot-Selling printed men\'s warm and loose thickened coat fashion', 1, '2024-09-25 03:08:35'),
(41, 'American-Style Long Sleeve', 'Long Sleeve', 'Gray', 'M', 244, 345, 'ps-gray2.jpg', 'ps-gray1.jpg', NULL, 'American-Style Casual round neck sweater 2023 fall/winter Hot-Selling printed men\'s warm and loose thickened coat fashion', 1, '2024-09-25 03:09:23'),
(42, 'American-Style Long Sleeve', 'Long Sleeve', 'Gray', 'L', 344, 421, 'ps-gray2.jpg', 'ps-gray1.jpg', NULL, 'American-Style Casual round neck sweater 2023 fall/winter Hot-Selling printed men\'s warm and loose thickened coat fashion', 1, '2024-09-25 03:09:45'),
(43, 'American-Style Long Sleeve', 'Long Sleeve', 'Gray', 'XL', 344, 321, 'ps-gray2.jpg', 'ps-gray1.jpg', NULL, 'American-Style Casual round neck sweater 2023 fall/winter Hot-Selling printed men\'s warm and loose thickened coat fashion', 1, '2024-09-25 03:10:09'),
(44, 'American-Style Long Sleeve', 'Long Sleeve', 'Red', 'S', 344, 211, 'ps-red2.jpg', 'ps-red1.jpg', NULL, 'American-Style Casual round neck sweater 2023 fall/winter Hot-Selling printed men\'s warm and loose thickened coat fashion', 1, '2024-09-25 03:11:44'),
(47, 'American-Style Long Sleeve', 'Long Sleeve', 'Red', 'M', 344, 211, 'ps-red2.jpg', 'ps-red1.jpg', NULL, 'American-Style Casual round neck sweater 2023 fall/winter Hot-Selling printed men\'s warm and loose thickened coat fashion', 1, '2024-09-25 03:13:58'),
(48, 'American-Style Long Sleeve', 'Long Sleeve', 'Red', 'L', 344, 243, 'ps-red2.jpg', 'ps-red1.jpg', NULL, 'American-Style Casual round neck sweater 2023 fall/winter Hot-Selling printed men\'s warm and loose thickened coat fashion', 1, '2024-09-25 03:14:14'),
(49, 'American-Style Long Sleeve', 'Long Sleeve', 'Red', 'XL', 344, 333, 'ps-red2.jpg', 'ps-red1.jpg', NULL, 'American-Style Casual round neck sweater 2023 fall/winter Hot-Selling printed men\'s warm and loose thickened coat fashion', 1, '2024-09-25 03:15:07'),
(50, 'American-Style Long Sleeve', 'Long Sleeve', 'Red', 'XL', 344, 333, 'ps-red2.jpg', 'ps-red1.jpg', NULL, 'American-Style Casual round neck sweater 2023 fall/winter Hot-Selling printed men\'s warm and loose thickened coat fashion', 1, '2024-09-25 03:15:07'),
(51, 'American-Style Long Sleeve', 'Long Sleeve', 'White', 'S', 344, 211, 'ps-white2.jpg', 'ps-white1.jpg', NULL, 'American-Style Casual round neck sweater 2023 fall/winter Hot-Selling printed men\'s warm and loose thickened coat fashion', 1, '2024-09-25 03:17:41'),
(52, 'American-Style Long Sleeve', 'Long Sleeve', 'White', 'M', 344, 111, 'ps-white2.jpg', 'ps-white1.jpg', NULL, 'American-Style Casual round neck sweater 2023 fall/winter Hot-Selling printed men\'s warm and loose thickened coat fashion', 1, '2024-09-25 03:17:56'),
(53, 'American-Style Long Sleeve', 'Long Sleeve', 'White', 'L', 344, 222, 'ps-white2.jpg', 'ps-white1.jpg', NULL, 'American-Style Casual round neck sweater 2023 fall/winter Hot-Selling printed men\'s warm and loose thickened coat fashion', 1, '2024-09-25 03:18:19'),
(54, 'American-Style Long Sleeve', 'Long Sleeve', 'White', 'XL', 344, 213, 'ps-white2.jpg', 'ps-white1.jpg', NULL, 'American-Style Casual round neck sweater 2023 fall/winter Hot-Selling printed men\'s warm and loose thickened coat fashion', 1, '2024-09-25 03:18:41'),
(55, 'American-Style Long Sleeve', 'Long Sleeve', 'Brown', 'S', 344, 345, 'ps-brown2.jpg', 'ps-brown1.jpg', NULL, 'American-Style Casual round neck sweater 2023 fall/winter Hot-Selling printed men\'s warm and loose thickened coat fashion', 1, '2024-09-25 03:20:02'),
(56, 'American-Style Long Sleeve', 'Long Sleeve', 'Brown', 'M', 344, 321, 'ps-brown2.jpg', 'ps-brown1.jpg', NULL, 'American-Style Casual round neck sweater 2023 fall/winter Hot-Selling printed men\'s warm and loose thickened coat fashion', 1, '2024-09-25 03:20:18'),
(57, 'American-Style Long Sleeve', 'Long Sleeve', 'Brown', 'L', 344, 231, 'ps-brown2.jpg', 'ps-brown1.jpg', NULL, 'American-Style Casual round neck sweater 2023 fall/winter Hot-Selling printed men\'s warm and loose thickened coat fashion', 1, '2024-09-25 03:20:37'),
(58, 'American-Style Long Sleeve', 'Long Sleeve', 'Brown', 'XL', 344, 211, 'ps-brown2.jpg', 'ps-brown1.jpg', NULL, 'American-Style Casual round neck sweater 2023 fall/winter Hot-Selling printed men\'s warm and loose thickened coat fashion', 1, '2024-09-25 03:20:54'),
(59, 'SIMWOOD', 'Hoodie', 'Black', 'S', 240, 111, 'h-black2.jpg', 'h-black1.jpg', NULL, 'SIMWOOD Pullover Hoodie Jacker European and American simplelazy heavyy earth color sheatshirt oversize Unisex loose hooded jacket for men and women couples MENSWEAR Sweaters Lingerie Pullover Longsleeve Casual Tops', 1, '2024-09-25 03:26:44'),
(60, 'SIMWOOD', 'Hoodie', 'Black', 'M', 240, 212, 'h-black2.jpg', 'h-black1.jpg', NULL, 'SIMWOOD Pullover Hoodie Jacker European and American simplelazy heavyy earth color sheatshirt oversize Unisex loose hooded jacket for men and women couples MENSWEAR Sweaters Lingerie Pullover Longsleeve Casual Tops', 1, '2024-09-25 03:36:32'),
(61, 'SIMWOOD', 'Hoodie', 'Black', 'L', 240, 211, 'h-black2.jpg', 'h-black1.jpg', NULL, 'SIMWOOD Pullover Hoodie Jacker European and American simplelazy heavyy earth color sheatshirt oversize Unisex loose hooded jacket for men and women couples MENSWEAR Sweaters Lingerie Pullover Longsleeve Casual Tops', 1, '2024-09-25 03:36:53'),
(62, 'SIMWOOD', 'Hoodie', 'Black', 'XL', 240, 211, 'h-black2.jpg', 'h-black1.jpg', NULL, 'SIMWOOD Pullover Hoodie Jacker European and American simplelazy heavyy earth color sheatshirt oversize Unisex loose hooded jacket for men and women couples MENSWEAR Sweaters Lingerie Pullover Longsleeve Casual Tops', 1, '2024-09-25 03:37:24'),
(63, 'SIMWOOD', 'Hoodie', 'Dark Blue', 'S', 240, 211, 'h-darlb;ie.jpg', 'h-black1.jpg', NULL, 'SIMWOOD Pullover Hoodie Jacker European and American simplelazy heavyy earth color sheatshirt oversize Unisex loose hooded jacket for men and women couples MENSWEAR Sweaters Lingerie Pullover Longsleeve Casual Tops', 1, '2024-09-25 03:38:02'),
(64, 'SIMWOOD', 'Hoodie', 'Dark Blue', 'M', 240, 111, 'h-darlb;ie.jpg', 'h-black1.jpg', NULL, 'SIMWOOD Pullover Hoodie Jacker European and American simplelazy heavyy earth color sheatshirt oversize Unisex loose hooded jacket for men and women couples MENSWEAR Sweaters Lingerie Pullover Longsleeve Casual Tops', 1, '2024-09-25 03:38:22'),
(65, 'SIMWOOD', 'Hoodie', 'Dark Blue', 'L', 240, 111, 'h-darlb;ie.jpg', 'h-black1.jpg', NULL, 'SIMWOOD Pullover Hoodie Jacker European and American simplelazy heavyy earth color sheatshirt oversize Unisex loose hooded jacket for men and women couples MENSWEAR Sweaters Lingerie Pullover Longsleeve Casual Tops', 1, '2024-09-25 03:39:01'),
(66, 'SIMWOOD', 'Hoodie', 'Dark Blue', 'XL', 240, 21, 'h-darlb;ie.jpg', 'h-black1.jpg', NULL, 'SIMWOOD Pullover Hoodie Jacker European and American simplelazy heavyy earth color sheatshirt oversize Unisex loose hooded jacket for men and women couples MENSWEAR Sweaters Lingerie Pullover Longsleeve Casual Tops', 1, '2024-09-25 03:39:20'),
(67, 'SIMWOOD', 'Hoodie', 'White', 'S', 240, 121, 'h-white.jpg', 'h-black1.jpg', NULL, 'SIMWOOD Pullover Hoodie Jacker European and American simplelazy heavyy earth color sheatshirt oversize Unisex loose hooded jacket for men and women couples MENSWEAR Sweaters Lingerie Pullover Longsleeve Casual Tops', 1, '2024-09-25 03:40:17'),
(68, 'SIMWOOD', 'Hoodie', 'White', 'M', 240, 211, 'h-white.jpg', 'h-black1.jpg', NULL, 'SIMWOOD Pullover Hoodie Jacker European and American simplelazy heavyy earth color sheatshirt oversize Unisex loose hooded jacket for men and women couples MENSWEAR Sweaters Lingerie Pullover Longsleeve Casual Tops', 1, '2024-09-25 03:40:29'),
(69, 'SIMWOOD', 'Hoodie', 'White', 'L', 240, 433, 'h-white.jpg', 'h-black1.jpg', NULL, 'SIMWOOD Pullover Hoodie Jacker European and American simplelazy heavyy earth color sheatshirt oversize Unisex loose hooded jacket for men and women couples MENSWEAR Sweaters Lingerie Pullover Longsleeve Casual Tops', 1, '2024-09-25 03:42:05'),
(70, 'SIMWOOD', 'Hoodie', 'White', 'XL', 240, 222, 'h-white.jpg', 'h-black1.jpg', NULL, 'SIMWOOD Pullover Hoodie Jacker European and American simplelazy heavyy earth color sheatshirt oversize Unisex loose hooded jacket for men and women couples MENSWEAR Sweaters Lingerie Pullover Longsleeve Casual Tops', 1, '2024-09-25 03:42:24'),
(71, 'SIMWOOD', 'Hoodie', 'Dark Gray', 'S', 240, 122, 'h-dg.jpg', 'h-black1.jpg', NULL, 'SIMWOOD Pullover Hoodie Jacker European and American simplelazy heavyy earth color sheatshirt oversize Unisex loose hooded jacket for men and women couples MENSWEAR Sweaters Lingerie Pullover Longsleeve Casual Tops', 1, '2024-09-25 03:43:15'),
(72, 'SIMWOOD', 'Hoodie', 'Dark Gray', 'M', 240, 222, 'h-dg.jpg', 'h-black1.jpg', NULL, 'SIMWOOD Pullover Hoodie Jacker European and American simplelazy heavyy earth color sheatshirt oversize Unisex loose hooded jacket for men and women couples MENSWEAR Sweaters Lingerie Pullover Longsleeve Casual Tops', 1, '2024-09-25 03:43:32'),
(73, 'SIMWOOD', 'Hoodie', 'Dark Gray', 'L', 240, 21, 'h-dg.jpg', 'h-black1.jpg', NULL, 'SIMWOOD Pullover Hoodie Jacker European and American simplelazy heavyy earth color sheatshirt oversize Unisex loose hooded jacket for men and women couples MENSWEAR Sweaters Lingerie Pullover Longsleeve Casual Tops', 1, '2024-09-25 03:44:21'),
(74, 'SIMWOOD', 'Hoodie', 'Dark Gray', 'XL', 240, 212, 'h-dg.jpg', 'h-black1.jpg', NULL, 'SIMWOOD Pullover Hoodie Jacker European and American simplelazy heavyy earth color sheatshirt oversize Unisex loose hooded jacket for men and women couples MENSWEAR Sweaters Lingerie Pullover Longsleeve Casual Tops', 1, '2024-09-25 03:44:52'),
(75, 'SIMWOOD', 'Hoodie', 'Dark Gray', 'XL', 240, 212, 'h-dg.jpg', 'h-black1.jpg', NULL, 'SIMWOOD Pullover Hoodie Jacker European and American simplelazy heavyy earth color sheatshirt oversize Unisex loose hooded jacket for men and women couples MENSWEAR Sweaters Lingerie Pullover Longsleeve Casual Tops', 1, '2024-09-25 03:44:52'),
(76, 'SIMWOOD', 'Hoodie', 'Light Gray', 'S', 240, 222, 'h-lg.jpg', 'h-black1.jpg', NULL, 'SIMWOOD Pullover Hoodie Jacker European and American simplelazy heavyy earth color sheatshirt oversize Unisex loose hooded jacket for men and women couples MENSWEAR Sweaters Lingerie Pullover Longsleeve Casual Tops', 1, '2024-09-25 03:46:33'),
(77, 'SIMWOOD', 'Hoodie', 'Light Gray', 'L', 240, 111, 'h-lg.jpg', 'h-black1.jpg', NULL, 'SIMWOOD Pullover Hoodie Jacker European and American simplelazy heavyy earth color sheatshirt oversize Unisex loose hooded jacket for men and women couples MENSWEAR Sweaters Lingerie Pullover Longsleeve Casual Tops', 1, '2024-09-25 03:48:51'),
(78, 'SIMWOOD', 'Hoodie', 'Light Gray', 'XL', 240, 211, 'h-lg.jpg', 'h-black1.jpg', NULL, 'SIMWOOD Pullover Hoodie Jacker European and American simplelazy heavyy earth color sheatshirt oversize Unisex loose hooded jacket for men and women couples MENSWEAR Sweaters Lingerie Pullover Longsleeve Casual Tops', 1, '2024-09-25 03:49:07'),
(79, 'SIMWOOD', 'Hoodie', 'Gray', 'S', 240, 211, 'h-gray.jpg', 'h-black1.jpg', NULL, 'SIMWOOD Pullover Hoodie Jacker European and American simplelazy heavyy earth color sheatshirt oversize Unisex loose hooded jacket for men and women couples MENSWEAR Sweaters Lingerie Pullover Longsleeve Casual Tops', 1, '2024-09-25 03:52:31'),
(80, 'SIMWOOD', 'Hoodie', 'Gray', 'XL', 240, 231, 'h-gray.jpg', 'h-black1.jpg', NULL, 'SIMWOOD Pullover Hoodie Jacker European and American simplelazy heavyy earth color sheatshirt oversize Unisex loose hooded jacket for men and women couples MENSWEAR Sweaters Lingerie Pullover Longsleeve Casual Tops', 1, '2024-09-25 03:52:57'),
(81, 'Bomber Jacket', 'Jacket', 'Black', 'S', 439, 500, 'j-black.jpg', 'j1.jpg', NULL, 'Bomber Jacket Double pocket Round neck design Solid color design | Suitable for daily wear and special occasions Menswear | Unisex', 1, '2024-09-25 04:13:43'),
(82, 'Bomber Jacket', 'Jacket', 'Black', 'M', 439, 221, 'j-black.jpg', 'j1.jpg', NULL, 'Bomber Jacket Double pocket Round neck design Solid color design | Suitable for daily wear and special occasions Menswear | Unisex', 1, '2024-09-25 04:17:05'),
(83, 'Bomber Jacket', 'Jacket', 'Black', 'L', 439, 211, 'j-black.jpg', 'j1.jpg', NULL, 'Bomber Jacket Double pocket Round neck design Solid color design | Suitable for daily wear and special occasions Menswear | Unisex', 1, '2024-09-25 04:17:35'),
(84, 'Bomber Jacket', 'Jacket', 'Army Green', 'S', 439, 211, 'j-ag.jpg', 'j1.jpg', NULL, 'Bomber Jacket Double pocket Round neck design Solid color design | Suitable for daily wear and special occasions Menswear | Unisex', 1, '2024-09-25 04:20:21'),
(85, 'Bomber Jacket', 'Jacket', 'Army Green', 'S', 439, 211, 'j-ag.jpg', 'j1.jpg', NULL, 'Bomber Jacket Double pocket Round neck design Solid color design | Suitable for daily wear and special occasions Menswear | Unisex', 1, '2024-09-25 04:20:21'),
(86, 'Bomber Jacket', 'Jacket', 'Army Green', 'L', 439, 211, 'j-ag.jpg', 'j1.jpg', NULL, 'Bomber Jacket Double pocket Round neck design Solid color design | Suitable for daily wear and special occasions Menswear | Unisex', 1, '2024-09-25 04:20:55'),
(87, 'Bomber Jacket', 'Jacket', 'Army Green', 'L', 439, 211, 'j-ag.jpg', 'j1.jpg', NULL, 'Bomber Jacket Double pocket Round neck design Solid color design | Suitable for daily wear and special occasions Menswear | Unisex', 1, '2024-09-25 04:20:55'),
(88, 'Bomber Jacket', 'Jacket', 'Navy Blue', 'L', 439, 112, 'j-nv.jpg', 'j1.jpg', NULL, 'Bomber Jacket Double pocket Round neck design Solid color design | Suitable for daily wear and special occasions Menswear | Unisex', 1, '2024-09-25 04:23:57'),
(89, 'Bomber Jacket', 'Jacket', 'Navy Blue', 'L', 439, 112, 'j-nv.jpg', 'j1.jpg', NULL, 'Bomber Jacket Double pocket Round neck design Solid color design | Suitable for daily wear and special occasions Menswear | Unisex', 1, '2024-09-25 04:23:57'),
(90, 'Bomber Jacket', 'Jacket', 'Navy Blue', 'XL', 439, 331, 'j-nv.jpg', 'j1.jpg', NULL, 'Bomber Jacket Double pocket Round neck design Solid color design | Suitable for daily wear and special occasions Menswear | Unisex', 1, '2024-09-25 04:24:39'),
(91, 'Bomber Jacket', 'Jacket', 'Navy Blue', 'XL', 439, 331, 'j-nv.jpg', 'j1.jpg', NULL, 'Bomber Jacket Double pocket Round neck design Solid color design | Suitable for daily wear and special occasions Menswear | Unisex', 1, '2024-09-25 04:24:40'),
(92, 'Bomber Jacket', 'Jacket', 'Khaki', 'S', 439, 233, 'j-k.jpg', 'j1.jpg', NULL, 'Bomber Jacket Double pocket Round neck design Solid color design | Suitable for daily wear and special occasions Menswear | Unisex', 1, '2024-09-25 04:25:16'),
(93, 'Bomber Jacket', 'Jacket', 'Navy Blue', 'L', 439, 322, 'j-k.jpg', 'j1.jpg', NULL, 'Bomber Jacket Double pocket Round neck design Solid color design | Suitable for daily wear and special occasions Menswear | Unisex', 1, '2024-09-25 04:25:39'),
(94, 'Bomber Jacket', 'Jacket', 'Gray', 'S', 439, 93, 'j-gray.jpg', 'j1.jpg', NULL, 'Bomber Jacket Double pocket Round neck design Solid color design | Suitable for daily wear and special occasions Menswear | Unisex', 1, '2024-09-25 04:26:41'),
(95, 'Bomber Jacket', 'Jacket', 'Gray', 'L', 439, 48, 'j-gray.jpg', 'j1.jpg', NULL, 'Bomber Jacket Double pocket Round neck design Solid color design | Suitable for daily wear and special occasions Menswear | Unisex', 1, '2024-09-25 04:27:07'),
(96, 'Taslan Short', 'Shorts', 'Mint Green', 'S', 239, 211, 's-mg.jpg', 's1.jpg', NULL, 'Summer Men\'s Beach Swimming Quick Dry Taslan Board Shorts', 1, '2024-09-25 04:31:40'),
(97, 'Corduroy Pants', 'Pants', 'Khaki', 'S', 393, 211, 'p-k2.jpg', 'p-k1.jpg', 'p-k.jpg', 'Corduroy Pants for Men Korean Khaki Baggy Straight Cut Slacks Slocks Trouser Pants Man', 1, '2024-09-25 04:59:21'),
(98, 'Taslan Short', 'Shorts', 'Mint Green', 'M', 239, 211, 's-mg.jpg', 's1.jpg', NULL, 'Summer Men\'s Beach Swimming Quick Dry Taslan Board Shorts', 1, '2024-09-25 06:11:05'),
(99, 'Taslan Short', 'Shorts', 'Mint Green', 'L', 239, 36, 's-mg.jpg', 's1.jpg', NULL, 'Summer Men\'s Beach Swimming Quick Dry Taslan Board Shorts', 1, '2024-09-25 06:11:38'),
(100, 'Taslan Short', 'Shorts', 'Mint Green', 'XL', 239, 22, 's-mg.jpg', 's1.jpg', NULL, 'Summer Men\'s Beach Swimming Quick Dry Taslan Board Shorts', 1, '2024-09-25 06:12:38'),
(101, 'Taslan Short', 'Shorts', 'Navy Blue', 'S', 239, 211, 's-nb.jpg', 's1.jpg', NULL, 'Summer Men\'s Beach Swimming Quick Dry Taslan Board Shorts', 1, '2024-09-25 06:13:23'),
(102, 'Taslan Short', 'Shorts', 'Navy Blue', 'M', 239, 321, 's-nb.jpg', 's1.jpg', NULL, 'Summer Men\'s Beach Swimming Quick Dry Taslan Board Shorts', 1, '2024-09-25 06:13:54'),
(103, 'Taslan Short', 'Shorts', 'Pink', 'S', 239, 211, 's-p.jpg', 's1.jpg', NULL, 'Summer Men\'s Beach Swimming Quick Dry Taslan Board Shorts', 1, '2024-09-25 06:15:30'),
(104, 'Taslan Short', 'Shorts', 'Pink', 'M', 239, 2111, 's-p.jpg', 's1.jpg', NULL, 'Summer Men\'s Beach Swimming Quick Dry Taslan Board Shorts', 1, '2024-09-25 06:15:56'),
(105, 'Corduroy Pants', 'Pants', 'Gray', 'S', 393, 222, 'p-g3.jpg', 'p-g2.jpg', 'p-g1.jpg', 'Corduroy Pants for Men Korean Khaki Baggy Straight Cut Slacks Slocks Trouser Pants Man', 1, '2024-09-25 06:17:13'),
(106, 'Corduroy Pants', 'Pants', 'Gray', 'M', 393, 211, 'p-g3.jpg', 'p-g2.jpg', 'p-g1.jpg', 'Corduroy Pants for Men Korean Khaki Baggy Straight Cut Slacks Slocks Trouser Pants Man', 1, '2024-09-25 06:25:12'),
(107, 'Corduroy Pants', 'Pants', 'Gray', 'L', 393, 221, 'p-g3.jpg', 'p-g2.jpg', 'p-g1.jpg', 'Corduroy Pants for Men Korean Khaki Baggy Straight Cut Slacks Slocks Trouser Pants Man', 1, '2024-09-25 06:25:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT 0,
  `user_status` int(11) NOT NULL DEFAULT 1,
  `is_verified` int(11) NOT NULL DEFAULT 0,
  `profile_picture` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `verification_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email_address`, `contact_number`, `address`, `user_type`, `user_status`, `is_verified`, `profile_picture`, `password`, `gender`, `birthday`, `date_created`, `verification_code`) VALUES
(1, 'lance', 'pastor', 'pastorlancereyner@gmail.com', '09785367423', 'san vicente, tarlac city', 1, 1, 1, NULL, '$2y$10$2e6mV17HctfL9ASqxNabbeXSB7Rg27HBqpmspwheo7gTJFPTGsQI2', 'Male', '2002-02-10', '2024-08-29 04:36:13', 'N5DKE8'),
(2, 'ralph', 'quilling', 'ralphquilling@gmail.com', '0984294737', 'panti', 0, 1, 0, NULL, '$2y$10$x288/0bsnyY.3z6GrwjgzescyZsMXMbtLMsZa.uRu4tOetqbt4RlW', 'Other', '2000-02-10', '2024-08-29 05:02:04', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_address_unique` (`email_address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
