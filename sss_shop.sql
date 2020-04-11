-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 11, 2020 at 05:42 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(1, 'Pranav', 'pranav@pranav.com', '1234567890', 'test ', 123123, '2020-04-02 10:22:57', '0000-00-00 00:00:00', 0),
(5, 'Pranav', 'a@a.com', '9967087127', 'asddasdasd ', 111111, '2020-04-02 11:58:56', '0000-00-00 00:00:00', 0),
(6, 'Pranav', 'a@a.com', '8898181910', 'asddasdasd ', 123456, '2020-04-02 16:13:52', '0000-00-00 00:00:00', 0);

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
(1, 'Dairy', 'Milk items', '2020-04-02 09:33:31', '0000-00-00 00:00:00', 0),
(2, 'Food', 'Packaged food items', '2020-04-02 09:33:57', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sss_orders`
--

CREATE TABLE `sss_orders` (
  `id` int(11) NOT NULL,
  `buyer_id` int(10) NOT NULL,
  `total_items` int(10) NOT NULL,
  `total_price` int(10) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NULL DEFAULT NULL,
  `status` int(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sss_orders`
--

INSERT INTO `sss_orders` (`id`, `buyer_id`, `total_items`, `total_price`, `create_date`, `update_date`, `status`) VALUES
(1, 1, 3, 251, '2020-04-11 15:25:45', NULL, 1),
(2, 1, 3, 502, '2020-04-11 15:40:09', NULL, 1);

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
(1, 2, 1, 1, 1, 8.96, '0.96', NULL, 1, 0, NULL),
(2, 2, 1, 2, 1, 45.15, '2.15', NULL, 1, 0, NULL),
(3, 2, 1, 3, 2, 448, '48', NULL, 1, 0, NULL);

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
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `image_url` text NOT NULL,
  `total_quantity` int(10) NOT NULL,
  `rem_quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `mrp` int(10) NOT NULL,
  `tax` varchar(10) NOT NULL,
  `pieces` int(10) NOT NULL DEFAULT 1,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_delete` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sss_products`
--

INSERT INTO `sss_products` (`id`, `seller_id`, `category_id`, `name`, `description`, `image_url`, `total_quantity`, `rem_quantity`, `price`, `mrp`, `tax`, `pieces`, `create_date`, `update_date`, `is_delete`) VALUES
(1, 1, 2, 'Parle G', 'Big Packet', 'http://localhost:8080/ss-shop/assets/theme/images/buy.svg', 200, 200, 8, 10, '2', 1, '2020-04-11 06:42:55', '0000-00-00 00:00:00', 0),
(2, 1, 1, 'Amul Milk', 'Amul 1 ltr. pasteurized milk', 'http://localhost:8080/ss-shop/uploads/dairy9.svg', 50, 50, 43, 50, '1', 1, '2020-04-11 07:32:37', '0000-00-00 00:00:00', 0),
(3, 1, 2, 'Gits Gulab Jamun', 'Gits ready made 200mg pack', 'http://localhost:8080/ss-shop/uploads/market1.svg', 123, 123, 200, 250, '2', 1, '2020-04-11 07:34:58', '0000-00-00 00:00:00', 0);

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
(1, '', 'Balaji Stores', '2577829bdc99ffdf80e1085b4b35ad68a86d81f170c30c9889778f8144cc5d9d9b0705e4dcea5837248b889104ba9b02955c597688d961c60f8dc0294331dadaBy7M7R7C9LrBo08sU+9GNPoh0HWN0K3FZ6QKROiHKGM=', '', '1111111111', '', 123456, '2020-04-02 09:28:59', '0000-00-00 00:00:00', 0),
(2, '', 'Pratik Stores', 'cb1c520e31585fc991f8b949e7688de310f9106356758d5752b21d3143610c26d760439ab05baf2ccf388502c89249fd337df66795539da8b8b77d6f6b6c6b6f03d/ZX1eSY0Qyu9cCrSeAOk4oJBkSJnOY81Cj9wvruY=', '', '1234567890', '', 123123, '2020-04-02 09:30:44', '0000-00-00 00:00:00', 0),
(3, '', 'Pranav Stores', 'e1f3a324e0e669f7f212809a32dad17042cd7f8a076099e84dfab5da61ec5953433fa1864425f1deb8f5e20aa248a18545d90381648360230ff71851491d2b6fe0p1E4D8t7Y6sgK8Wfp70aCELQ7/Jdo4iNO/9CzBGUs=', '', '8898181910', '', 400012, '2020-04-03 07:48:28', '0000-00-00 00:00:00', 0);

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
-- Indexes for table `sss_tax`
--
ALTER TABLE `sss_tax`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sss_buyer`
--
ALTER TABLE `sss_buyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sss_cart`
--
ALTER TABLE `sss_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sss_category`
--
ALTER TABLE `sss_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sss_orders`
--
ALTER TABLE `sss_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sss_order_items`
--
ALTER TABLE `sss_order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sss_order_status`
--
ALTER TABLE `sss_order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sss_products`
--
ALTER TABLE `sss_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sss_seller`
--
ALTER TABLE `sss_seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sss_tax`
--
ALTER TABLE `sss_tax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
