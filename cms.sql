-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2015 at 11:00 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bascket`
--

CREATE TABLE IF NOT EXISTS `bascket` (
  `buying_id` int(11) NOT NULL,
  `stuff_id` int(11) NOT NULL,
  `stuff_table` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `User_id` int(11) NOT NULL,
  `buying_state` enum('در سبد خرید','خریداری شده','ارسال شده','تحویل داده شده') COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `bascket`
--

INSERT INTO `bascket` (`buying_id`, `stuff_id`, `stuff_table`, `User_id`, `buying_state`) VALUES
(1, 1, 'laptop', 1, 'در سبد خرید'),
(2, 2, 'laptop', 1, 'در سبد خرید');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE IF NOT EXISTS `laptop` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `status` enum('موجود','ناموجود') COLLATE utf8_persian_ci NOT NULL,
  `Date_Added` date NOT NULL,
  `brand` enum('Lenovo','ASUS','HP') COLLATE utf8_persian_ci DEFAULT NULL,
  `OS` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `Proccessor` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `Ram` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `graphic` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `hard` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `cache` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `simcart` enum('Yes','No') COLLATE utf8_persian_ci NOT NULL,
  `backlight` enum('Yes','No') COLLATE utf8_persian_ci NOT NULL,
  `weight` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `lcd` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `picture` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `other_explain` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `name`, `price`, `status`, `Date_Added`, `brand`, `OS`, `Proccessor`, `Ram`, `graphic`, `hard`, `cache`, `simcart`, `backlight`, `weight`, `lcd`, `picture`, `other_explain`) VALUES
(1, 'Lenovo Z5110 IdeaPad SK152MN', '26700000', 'موجود', '2015-12-07', 'Lenovo', 'DOS', 'Intel Cori7', '8 GB', '2 GB Nvidia', '1 TB + 128GB SD', '8 MB', 'No', 'Yes', '2.3 Kg', '15.7 inch', 'assets/img/lenovo2.jpg', 'این لپتاپ دارای ظاهری زیبا و بدنه ای محکم است.'),
(2, 'Lenovo Z5130 IdeaPad 56SN94', '17500000', 'موجود', '2015-12-07', 'Lenovo', 'Windows 8.1', 'Intel Cori5', '4 GB', '1 GB AMD', '750 GB', '6 MB', 'No', 'No', '2.5 Kg', '14 inch', 'assets/img/lenovo1.jpg', 'این لپتاپ ظاهری محکم ندارد ولی بسیار زیبا و پر سرعت است. پردازنده این لپتاپ خاص است و دارای چندین لایه کمکی است!'),
(3, 'ASUS K45V HasanPad', '9500000', 'موجود', '2015-12-07', 'ASUS', 'Windows 7', 'doal core', '1 GB', '500 MB', '256 GB', '2 MB', 'No', 'No', '3 Kg', '14 inch', 'assets/img/lenovo3.jpg', 'این لپتاپ گرچه یک لپتاپ قدیمی است، ولی بدنه محکمی دارد. این لپتاپ بدلیل داشتن بدنه محکم معروف است و جزء سخت جان ترین لپتاپ های زمانه به شمار آمده است.'),
(4, 'HP privilage SMK51360ILA', '15000000', 'موجود', '2015-12-07', 'HP', 'DOS', 'Intel cori3', '4 GB', '2 GB AMD', '500 GB', '3 MB', 'Yes', 'Yes', 'laptop+adaptor: 2.9 Kg', '15.7 inch', 'assets/img/t3.jpg', 'توضیحات خاصی ندارد');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `access` enum('User','Admin') COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `username`, `password`, `access`) VALUES
(1, 'meysam', '123', 'Admin'),
(2, 'shirin', '123', 'Admin'),
(3, 'Ali', '123', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE IF NOT EXISTS `phone` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `status` enum('موجود','ناموجود') COLLATE utf8_persian_ci NOT NULL,
  `Date_added` date NOT NULL,
  `brand` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `OS` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `sim_cart` enum('1','2','3') COLLATE utf8_persian_ci NOT NULL,
  `weight` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `lcd` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `internal_ram` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `picture` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `other_explain` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`id`, `name`, `price`, `status`, `Date_added`, `brand`, `OS`, `sim_cart`, `weight`, `lcd`, `internal_ram`, `picture`, `other_explain`) VALUES
(1, 'Experia Z152 DLK52', '15000000', 'موجود', '2015-12-06', 'Experia', 'Android', '1', '129 gr', '5 inch', '2 GB', 'assets/img/sony_2.jpg', 'این گوشی خیلی محکم و خوب است. از مزایای مهم این گوشی این است که راحت از جیب بیرون می آید.'),
(2, 'Huawei G700', '8000000', 'ناموجود', '2015-12-16', 'Huawei', 'Android', '2', '400 gr', '5 inch', '8 GB', 'assets/img/sony_1.jpg', 'این گوشی بسیار مناسب برای سنین بین 17 تا 37 سل می باشد. زیرا در این سنین جوانان خیلی از گوشی استفاده می کنند و این گوشی پاسخگو خواهد بود.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bascket`
--
ALTER TABLE `bascket`
  ADD PRIMARY KEY (`buying_id`),
  ADD KEY `stuff_id` (`stuff_id`),
  ADD KEY `stuff_table` (`stuff_table`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bascket`
--
ALTER TABLE `bascket`
  MODIFY `buying_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
