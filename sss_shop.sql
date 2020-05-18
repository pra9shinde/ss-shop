-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 02:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sss_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `sss_buyer`
--

CREATE TABLE `sss_buyer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `pin` int(10) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_delete` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sss_buyer`
--

INSERT INTO `sss_buyer` (`id`, `name`, `email`, `phone`, `address`, `pin`, `create_date`, `update_date`, `is_delete`) VALUES
(1, 'Pranav', 'pranavshnd006@gmail.com', '1234567890', 'test ', 123123, '2020-04-02 10:22:57', '0000-00-00 00:00:00', 0),
(5, 'Pranav', 'a@a.com', '9967087127', 'asddasdasd ', 111111, '2020-04-02 11:58:56', '0000-00-00 00:00:00', 0),
(6, 'Pranav', 'a@a.com', '8898181910', 'asddasdasd ', 123456, '2020-04-02 16:13:52', '0000-00-00 00:00:00', 0),
(7, 'Nitesh', 'nitesh1901@gmail.com', '9004077151', 'B1-2401, Romell Aether, Vishweshwar Road, Goregaon East', 400063, '2020-04-27 16:52:51', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sss_cart`
--

CREATE TABLE `sss_cart` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `item_id` varchar(20) NOT NULL,
  `item_quantity` varchar(30) NOT NULL,
  `delivery_charges` varchar(30) NOT NULL,
  `item_price` varchar(30) NOT NULL,
  `line_tax` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sss_category`
--

CREATE TABLE `sss_category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_delete` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sss_category`
--

INSERT INTO `sss_category` (`id`, `name`, `description`, `create_date`, `update_date`, `is_delete`) VALUES
(2, 'Grocery', 'Packaged/Retailer\'s grocery products', '2020-04-28 08:57:19', '0000-00-00 00:00:00', 0),
(3, 'Farsan', 'Packaged/Local Farsan Items', '2020-04-28 08:58:04', '0000-00-00 00:00:00', 0),
(4, 'Atta(Flour)', 'Packaged Atta(Flour)', '2020-04-28 08:58:40', '0000-00-00 00:00:00', 0),
(5, 'Masala', 'Packaged/Local Indian Spices and Masala', '2020-04-28 08:59:03', '0000-00-00 00:00:00', 0),
(6, 'Oil', 'Packaged/Local Oil', '2020-04-28 08:59:16', '0000-00-00 00:00:00', 0),
(7, 'Dairy', 'Packaged and Local Dairy Products', '2020-04-28 11:54:19', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sss_orders`
--

CREATE TABLE `sss_orders` (
  `id` int(11) NOT NULL,
  `buyer_id` int(10) NOT NULL,
  `total_items` int(10) NOT NULL,
  `total_price` varchar(10) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NULL DEFAULT NULL,
  `status` int(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sss_orders`
--

INSERT INTO `sss_orders` (`id`, `buyer_id`, `total_items`, `total_price`, `create_date`, `update_date`, `status`) VALUES
(1, 1, 2, '91', '2020-04-29 11:55:24', NULL, 1),
(2, 1, 2, '215.74', '2020-04-29 11:58:30', NULL, 1),
(3, 1, 1, '29.4', '2020-04-30 05:36:57', NULL, 1),
(4, 7, 6, '560.56', '2020-05-01 02:49:51', NULL, 1),
(5, 7, 3, '151.2', '2020-05-02 10:02:13', NULL, 1),
(6, 7, 0, '0', '2020-05-02 10:02:34', NULL, 1),
(7, 1, 1, '29.4', '2020-05-18 09:53:01', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sss_order_items`
--

CREATE TABLE `sss_order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(10) NOT NULL,
  `buyer_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `order_price` double NOT NULL,
  `line_tax` varchar(20) NOT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `status` int(4) NOT NULL DEFAULT 1,
  `status_change_count` int(4) NOT NULL DEFAULT 0,
  `cancel_reason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sss_order_items`
--

INSERT INTO `sss_order_items` (`id`, `order_id`, `buyer_id`, `product_id`, `quantity`, `order_price`, `line_tax`, `update_date`, `status`, `status_change_count`, `cancel_reason`) VALUES
(1, 1, 1, 1, 1, 29.4, '1.4', NULL, 1, 0, NULL),
(2, 1, 1, 3, 1, 61.6, '6.6', NULL, 1, 0, NULL),
(3, 2, 1, 4, 1, 58.24, '6.24', NULL, 1, 0, NULL),
(4, 2, 1, 2, 1, 157.5, '7.5', NULL, 1, 0, NULL),
(5, 3, 1, 1, 1, 29.4, '1.4', NULL, 1, 0, NULL),
(6, 4, 7, 4, 2, 116.48, '12.48', NULL, 1, 0, NULL),
(7, 4, 7, 5, 2, 85.12, '9.12', NULL, 1, 0, NULL),
(8, 4, 7, 7, 1, 50.4, '5.4', NULL, 1, 0, NULL),
(9, 4, 7, 8, 1, 42, '2', NULL, 1, 0, NULL),
(10, 4, 7, 9, 1, 224, '24', NULL, 1, 0, NULL),
(11, 4, 7, 10, 1, 42.56, '4.56', NULL, 1, 0, NULL),
(12, 5, 7, 4, 1, 58.24, '6.24', NULL, 1, 0, NULL),
(13, 5, 7, 5, 1, 42.56, '4.56', NULL, 1, 0, NULL),
(14, 5, 7, 7, 1, 50.4, '5.4', NULL, 1, 0, NULL),
(15, 7, 1, 1, 1, 29.4, '1.4', NULL, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sss_order_status`
--

CREATE TABLE `sss_order_status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sss_order_status`
--

INSERT INTO `sss_order_status` (`id`, `status_name`) VALUES
(1, 'placed'),
(2, 'confirmed'),
(3, 'cancelled'),
(4, 'partial'),
(5, 'on hold');

-- --------------------------------------------------------

--
-- Table structure for table `sss_products`
--

CREATE TABLE `sss_products` (
  `id` int(11) NOT NULL,
  `seller_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `sub_category_id` int(10) DEFAULT NULL,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `image_url` text NOT NULL,
  `total_quantity` int(10) NOT NULL,
  `rem_quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `uom` int(8) NOT NULL,
  `uom_unit` varchar(10) NOT NULL,
  `mrp` int(10) NOT NULL,
  `tax` varchar(10) NOT NULL,
  `pieces` int(10) NOT NULL DEFAULT 1,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NULL DEFAULT NULL,
  `is_delete` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sss_products`
--

INSERT INTO `sss_products` (`id`, `seller_id`, `category_id`, `sub_category_id`, `name`, `description`, `image_url`, `total_quantity`, `rem_quantity`, `price`, `uom`, `uom_unit`, `mrp`, `tax`, `pieces`, `create_date`, `update_date`, `is_delete`) VALUES
(1, 1, 1, 3, 'Wheat MP Sihore', 'High Quality Packaged Wheat ', 'http://smartsocietyservices.in/ss-shop/uploads/KWHEAT1kg020xx30619_1_B.jpg', 30, 30, 28, 2, '1', 32, '1', 1, '2020-04-28 11:23:35', NULL, 0),
(2, 1, 1, NULL, 'Wheat', 'Local Wheat ', 'http://smartsocietyservices.in/ss-shop/uploads/wheat.jpg', 30, 30, 150, 2, '5', 165, '1', 1, '2020-04-28 11:25:00', NULL, 0),
(3, 1, 1, NULL, 'Wada Kolam 1 No', 'Local Wada Kolam rice', 'http://smartsocietyservices.in/ss-shop/assets/theme/images/buy.svg', 30, 30, 55, 2, '1', 65, '2', 1, '2020-04-28 11:26:24', NULL, 0),
(4, 1, 1, NULL, 'Steam Heavy Wada Kolam', 'Steam Kolam Rice', 'http://smartsocietyservices.in/ss-shop/assets/theme/images/buy.svg', 50, 50, 52, 2, '1', 56, '2', 1, '2020-04-28 11:28:09', NULL, 0),
(5, 1, 1, NULL, 'Steam Kolam', 'Steam Kolam Rice', 'http://smartsocietyservices.in/ss-shop/assets/theme/images/buy.svg', 30, 30, 38, 2, '1', 44, '2', 1, '2020-04-28 11:28:56', NULL, 0),
(6, 1, 1, NULL, 'Kaccha Wada Kolam', 'Raw or Kaccha Wada Kolam Rice', 'http://smartsocietyservices.in/ss-shop/assets/theme/images/buy.svg', 30, 30, 45, 2, '1', 52, '2', 1, '2020-04-28 11:30:10', NULL, 0),
(7, 1, 1, NULL, 'Rice Regular', 'Normal Rice', 'http://smartsocietyservices.in/ss-shop/assets/theme/images/buy.svg', 30, 30, 45, 2, '5', 52, '2', 1, '2020-04-28 11:31:09', NULL, 0),
(8, 1, 1, NULL, 'Rice Basmati', 'Basmati Rice', 'http://smartsocietyservices.in/ss-shop/assets/theme/images/buy.svg', 30, 30, 40, 2, '1', 45, '1', 1, '2020-04-28 11:31:59', NULL, 0),
(9, 1, 1, NULL, 'Rice Basmati', '5kg Basmati Rice', 'http://smartsocietyservices.in/ss-shop/assets/theme/images/buy.svg', 30, 30, 200, 2, '5', 225, '2', 1, '2020-04-28 11:34:02', NULL, 0),
(10, 1, 1, NULL, 'Rice for Dhokla', 'Dhokla Rice', 'http://smartsocietyservices.in/ss-shop/assets/theme/images/buy.svg', 30, 30, 38, 5, '500', 44, '2', 1, '2020-04-28 11:34:58', NULL, 0),
(11, 1, 1, NULL, 'Sugar', 'Factory Processed Sugar', 'http://smartsocietyservices.in/ss-shop/assets/theme/images/buy.svg', 50, 50, 38, 2, '1', 42, '1', 1, '2020-04-28 11:36:30', NULL, 0),
(12, 1, 1, NULL, 'Sugar', 'Factory Processed Sugar', 'http://smartsocietyservices.in/ss-shop/assets/theme/images/buy.svg', 50, 50, 198, 2, '5', 210, '1', 1, '2020-04-28 11:37:59', NULL, 0),
(13, 1, 2, 3, 'Plain Farsan', 'Home made plain farsan', 'http://smartsocietyservices.in/ss-shop/assets/theme/images/buy.svg', 30000, 30000, 20, 5, '500', 25, '1', 1, '2020-04-28 11:40:21', NULL, 0),
(14, 1, 2, NULL, 'Masala Khakra', 'Home-made gujrati khakra', 'http://smartsocietyservices.in/ss-shop/assets/theme/images/buy.svg', 2000, 2000, 30, 5, '500', 35, '1', 1, '2020-04-28 11:42:16', NULL, 0),
(15, 1, 3, NULL, 'Wheat Atta', 'Packaged Wheat Atta', 'http://smartsocietyservices.in/ss-shop/assets/theme/images/buy.svg', 30, 30, 155, 2, '5', 170, '3', 1, '2020-04-28 11:44:40', NULL, 0),
(16, 1, 3, NULL, 'Channa Atta', 'Packaged Channa Atta', 'http://smartsocietyservices.in/ss-shop/assets/theme/images/buy.svg', 40, 40, 158, 2, '1', 170, '3', 1, '2020-04-28 11:45:38', NULL, 0),
(17, 1, 3, NULL, 'Basan Atta', 'Packaged Basan/Besan Atta', 'http://smartsocietyservices.in/ss-shop/assets/theme/images/buy.svg', 40, 40, 78, 2, '1', 84, '2', 1, '2020-04-28 11:46:40', NULL, 0),
(18, 1, 3, NULL, 'Maida', 'Packaged Maida Atta', 'http://smartsocietyservices.in/ss-shop/assets/theme/images/buy.svg', 45, 45, 28, 2, '1', 34, '2', 1, '2020-04-28 11:49:08', NULL, 0),
(19, 1, 4, NULL, 'Haldi', 'Packaged Haldi Packet', 'http://smartsocietyservices.in/ss-shop/assets/theme/images/buy.svg', 5, 5, 160, 5, '500', 170, '1', 1, '2020-04-28 11:50:29', NULL, 0),
(20, 1, 4, NULL, 'Mirchi', 'Packaged Turmeric Powder', 'http://smartsocietyservices.in/ss-shop/assets/theme/images/buy.svg', 5, 5, 196, 5, '500', 200, '1', 1, '2020-04-28 11:52:18', NULL, 0),
(21, 1, 4, NULL, 'Jeera Powder', 'Packaged Jeera Powder', 'http://smartsocietyservices.in/ss-shop/assets/theme/images/buy.svg', 50, 50, 155, 5, '500', 160, '1', 1, '2020-04-28 11:53:23', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sss_seller`
--

CREATE TABLE `sss_seller` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `shop_address` text NOT NULL,
  `pin` int(10) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_delete` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sss_seller`
--

INSERT INTO `sss_seller` (`id`, `name`, `shop_name`, `password`, `email`, `phone`, `shop_address`, `pin`, `created_on`, `updated_on`, `is_delete`) VALUES
(1, '', 'Balaji Stores', '2577829bdc99ffdf80e1085b4b35ad68a86d81f170c30c9889778f8144cc5d9d9b0705e4dcea5837248b889104ba9b02955c597688d961c60f8dc0294331dadaBy7M7R7C9LrBo08sU+9GNPoh0HWN0K3FZ6QKROiHKGM=', 'pranav@alacritylabs.com', '1111111111', '', 123456, '2020-04-02 09:28:59', '0000-00-00 00:00:00', 0),
(2, '', 'Pratik Stores', 'cb1c520e31585fc991f8b949e7688de310f9106356758d5752b21d3143610c26d760439ab05baf2ccf388502c89249fd337df66795539da8b8b77d6f6b6c6b6f03d/ZX1eSY0Qyu9cCrSeAOk4oJBkSJnOY81Cj9wvruY=', 'pranav@alacritylabs.com', '1234567890', '', 123123, '2020-04-02 09:30:44', '0000-00-00 00:00:00', 0),
(3, '', 'Pranav Stores', 'e1f3a324e0e669f7f212809a32dad17042cd7f8a076099e84dfab5da61ec5953433fa1864425f1deb8f5e20aa248a18545d90381648360230ff71851491d2b6fe0p1E4D8t7Y6sgK8Wfp70aCELQ7/Jdo4iNO/9CzBGUs=', 'pranav@alacritylabs.com', '8898181910', '', 400012, '2020-04-03 07:48:28', '0000-00-00 00:00:00', 0),
(15, '', 'Ram Stores', 'de091f9de81e29762a7a2fdc0d4d8b309ce53072f6cf31a4b109675201c6a620d60e6238cd4164a910293e2f05d8b71cd670e0652cc3ed51d25de422db0fa4dc620JcnmAwDDT7UzPoKmOSsXEyvbLRoCDL3f9hPD2G5k=', 'pranav@alacritylabs.com', '8888888888', '', 123123, '2020-04-15 11:28:30', '0000-00-00 00:00:00', 0),
(16, '', 'Test Store', '677be51124901da27309383ea51036b18dc8a70834b8d5129451aae76c62f3d118050b668c7b16c706a3f6e3d21e466bcd1ec12f7363726786b973657bb04d1cgeYrEaP0mYwAruCAcXTtLm1nGbLGmkr95Zyqo8/l978=', 'pranav@alacritylabs.com', '7777777777', '', 421222, '2020-04-15 11:33:47', '0000-00-00 00:00:00', 0),
(17, '', 'Swastik', '089be59bfb5adb8d397066503ed54cbfff022abae5d7beec013671a103c9aaaaa460aadcd51a26df8e4a20c9f55d64ed93fcaf7975c5b08243217d56212b36b8Xg1BubIV6CIn+xo8JcsH/njJtiKfmyTM9/afad++KL4=', 'rahul_ambegaokar@hotmail.com', '9867750035', '', 400063, '2020-04-27 19:07:55', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sss_sub_category`
--

CREATE TABLE `sss_sub_category` (
  `id` int(11) NOT NULL,
  `category_id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` varchar(60) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NULL DEFAULT NULL,
  `is_delete` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sss_sub_category`
--

INSERT INTO `sss_sub_category` (`id`, `category_id`, `name`, `description`, `create_date`, `update_date`, `is_delete`) VALUES
(3, 2, 'Dry', 'Dry Farsan', '2020-05-18 02:46:24', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sss_tax`
--

CREATE TABLE `sss_tax` (
  `id` int(11) NOT NULL,
  `percentage` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sss_tax`
--

INSERT INTO `sss_tax` (`id`, `percentage`) VALUES
(1, '5'),
(2, '12'),
(3, '18');

-- --------------------------------------------------------

--
-- Table structure for table `sss_uom`
--

CREATE TABLE `sss_uom` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `is_delete` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sss_uom`
--

INSERT INTO `sss_uom` (`id`, `name`, `is_delete`) VALUES
(1, 'pieces', 0),
(2, 'kgs', 0),
(3, 'ltrs', 0),
(4, 'ml', 0),
(5, 'gms', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sss_buyer`
--
ALTER TABLE `sss_buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sss_cart`
--
ALTER TABLE `sss_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sss_category`
--
ALTER TABLE `sss_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sss_orders`
--
ALTER TABLE `sss_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sss_order_items`
--
ALTER TABLE `sss_order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sss_order_status`
--
ALTER TABLE `sss_order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sss_products`
--
ALTER TABLE `sss_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sss_seller`
--
ALTER TABLE `sss_seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sss_sub_category`
--
ALTER TABLE `sss_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sss_tax`
--
ALTER TABLE `sss_tax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sss_uom`
--
ALTER TABLE `sss_uom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sss_buyer`
--
ALTER TABLE `sss_buyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sss_cart`
--
ALTER TABLE `sss_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sss_category`
--
ALTER TABLE `sss_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sss_orders`
--
ALTER TABLE `sss_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sss_order_items`
--
ALTER TABLE `sss_order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sss_order_status`
--
ALTER TABLE `sss_order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sss_products`
--
ALTER TABLE `sss_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sss_seller`
--
ALTER TABLE `sss_seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sss_sub_category`
--
ALTER TABLE `sss_sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sss_tax`
--
ALTER TABLE `sss_tax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sss_uom`
--
ALTER TABLE `sss_uom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
