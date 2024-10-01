-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2024 at 10:17 AM
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
-- Database: `gaiapark`
--

-- --------------------------------------------------------

--
-- Table structure for table `gaia_products`
--

CREATE TABLE `gaia_products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gaia_products`
--

INSERT INTO `gaia_products` (`id`, `name`, `description`, `price`, `type`) VALUES
(1, 'Women Beige Blue', 'A soft, comfortable t-shirt perfect for casual wear. The beige color combined with blue accents adds a subtle yet elegant touch.', 24.99, 'T-Shirt Women'),
(2, 'Women Beige Pink', 'Feminine and stylish, this beige and pink t-shirt is perfect for any occasion. The soft fabric ensures comfort all day long.', 24.99, 'T-Shirt Women'),
(3, 'Women Black Pink', 'This bold black t-shirt with pink accents is a statement piece, perfect for those who love to stand out in style.', 24.99, 'T-Shirt Women'),
(4, 'Women Black Bamboo', 'Eco-friendly black t-shirt made from bamboo fabric, offering softness, breathability, and sustainability.', 29.99, 'T-Shirt Women'),
(5, 'Women Black Flower', 'A stunning floral design on a black backdrop, this t-shirt is perfect for bringing a touch of nature into your wardrobe.', 27.99, 'T-Shirt Women'),
(6, 'Men Black Bamb', 'A classic black t-shirt made from bamboo, designed for both comfort and sustainability. Ideal for everyday wear.', 29.99, 'T-Shirt Men'),
(7, 'Men Black White', 'Sleek and minimalistic, this black and white t-shirt is versatile and pairs well with any outfit.', 24.99, 'T-Shirt Men'),
(8, 'Hoodie Black Purple Bamboo', 'A stylish black hoodie with purple bamboo accents, offering warmth and sustainability. Perfect for cool weather.', 39.99, 'Hoodie'),
(9, 'Hoodie Beige Light Purple Bamboo', 'Soft beige hoodie with light purple bamboo detailing. Comfortable and eco-friendly for a cozy look.', 39.99, 'Hoodie'),
(10, 'Women Green Flower', 'A chic green longsleeve featuring a beautiful floral design. Great for layering or wearing on its own.', 32.99, 'Longsleeve Women'),
(11, 'Women White Flower', 'White longsleeve with elegant floral patterns, offering both comfort and style for everyday wear.', 32.99, 'Longsleeve Women'),
(12, 'Men Black Purple Bamboo', 'A bamboo-based black longsleeve with purple detailing, blending eco-consciousness with modern style.', 34.99, 'Longsleeve Men'),
(13, 'Men White Bamboo', 'Clean and fresh white longsleeve made from bamboo fabric. Ideal for those who value sustainability.', 34.99, 'Longsleeve Men'),
(14, 'Men Beige Bamboo', 'Classic beige longsleeve with bamboo fibers for a soft, comfortable fit. Perfect for casual days.', 34.99, 'Longsleeve Men'),
(15, 'Onesie Black Mammoth', 'Adorable black onesie featuring a playful mammoth design. Made from soft cotton for your baby’s comfort.', 19.99, 'Baby Clothes'),
(16, 'Onesie Blue Mammoth', 'Cozy blue onesie with a cute mammoth print, perfect for your little explorer.', 19.99, 'Baby Clothes'),
(17, 'Onesie Pink Mammoth', 'Sweet pink onesie adorned with a fun mammoth design. Soft, comfortable, and stylish for any baby.', 19.99, 'Baby Clothes'),
(18, 'Onesie White Mammoth', 'Classic white onesie featuring an adorable mammoth. Ideal for everyday wear and special occasions.', 19.99, 'Baby Clothes'),
(19, 'Hat Beige Black', 'A stylish beige hat with black accents, offering sun protection and a cool look for any season.', 14.99, 'Hat'),
(20, 'Hat Black White', 'Simple and chic, this black hat with white detailing pairs well with any outfit.', 14.99, 'Hat'),
(21, 'Hat Grey White', 'A cool grey hat with white accents, perfect for a minimalist, everyday look.', 14.99, 'Hat'),
(22, 'Hat White Black', 'Sleek and modern, this white hat with black detailing adds the finishing touch to any casual outfit.', 14.99, 'Hat'),
(23, 'Bottle Green', 'Eco-friendly reusable bottle in a vibrant green color, perfect for staying hydrated on the go.', 12.99, 'Reusable'),
(24, 'Bottle Bamboo', 'Stylish and sustainable, this bamboo bottle helps reduce single-use plastics while keeping your drinks fresh.', 14.99, 'Reusable'),
(25, 'Bottle Mammoth', 'Fun and eco-conscious, this reusable bottle features a cool mammoth design. Ideal for kids and adults alike.', 14.99, 'Reusable'),
(26, 'Cup Green Bamboo', 'Sustainable green bamboo cup, perfect for your coffee or tea. Made to reduce waste while enjoying your drink.', 9.99, 'Reusable'),
(27, 'Cup Purple Bamboo', 'Reusable purple bamboo cup, eco-friendly and durable for everyday use.', 9.99, 'Reusable'),
(28, 'Totebag Black Blue', 'Versatile black totebag with blue accents. Made from sustainable materials for a stylish, eco-friendly lifestyle.', 15.99, 'Reusable'),
(29, 'Totebag Black White', 'A classic black tote with white accents, perfect for carrying your essentials while being environmentally conscious.', 15.99, 'Reusable'),
(30, 'Totebag Black Pink', 'Bold black totebag with pink accents, offering both style and sustainability.', 15.99, 'Reusable'),
(31, 'Totebag Black Bamboo', 'Eco-friendly black totebag made from bamboo fabric. Perfect for reducing your plastic footprint.', 17.99, 'Reusable'),
(32, 'Totebag Black Purple Bamboo', 'A standout black tote with purple bamboo detailing, combining fashion and eco-consciousness.', 17.99, 'Reusable'),
(33, 'Totebag Black Mammoth', 'Fun and functional, this black tote features a playful mammoth design.', 17.99, 'Reusable'),
(34, 'Totebag Beige Black', 'Elegant beige totebag with black accents, ideal for carrying your daily essentials in style.', 15.99, 'Reusable'),
(35, 'Totebag Beige Blue', 'A soft beige tote with blue accents, combining practicality and eco-friendliness.', 15.99, 'Reusable'),
(36, 'Totebag Beige Pink', 'Stylish beige tote with pink detailing, perfect for your eco-conscious adventures.', 15.99, 'Reusable'),
(37, 'Totebag Beige Bamboo', 'Natural beige totebag made from bamboo, offering both sustainability and style.', 17.99, 'Reusable'),
(38, 'Totebag Beige Mammoth', 'Cute and practical, this beige tote features a mammoth design. Great for everyday use.', 17.99, 'Reusable'),
(39, 'Phonecase Flower', 'A stylish phone case featuring floral designs, offering protection with a natural touch.', 12.99, 'Reusable'),
(40, 'Phonecase Green Bamboo', 'Eco-friendly green bamboo phone case, designed for durability and sustainability.', 14.99, 'Reusable'),
(41, 'Phonecase Purple Bamboo', 'Sleek and modern, this purple bamboo phone case is a perfect mix of style and sustainability.', 14.99, 'Reusable');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gaia_products`
--
ALTER TABLE `gaia_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gaia_products`
--
ALTER TABLE `gaia_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
