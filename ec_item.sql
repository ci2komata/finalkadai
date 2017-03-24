-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: 2017 年 3 月 15 日 15:44
-- サーバのバージョン： 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecsample1`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `ec_item`
--

CREATE TABLE `ec_item` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `ec_item`
--

INSERT INTO `ec_item` (`id`, `name`, `price`, `status`, `stock`, `create_date`, `update_date`) VALUES
(3, 'ハンドクリーム', 1000, 1, 10, '2017-03-13 00:00:00', '2017-03-13 00:00:00'),
(4, 'ハンドクリーム2', 1500, 1, 10, '2017-03-13 00:00:00', '2017-03-13 00:00:00'),
(5, 'ハンドクリーム3', 2000, 1, 10, '2017-03-13 00:00:00', '2017-03-13 00:00:00'),
(6, 'ボディクリーム', 1000, 1, 10, '2017-03-13 00:00:00', '2017-03-13 00:00:00'),
(7, 'ボディクリーム2', 1500, 1, 10, '2017-03-13 00:00:00', '2017-03-13 00:00:00'),
(8, 'ボディクリーム3', 2000, 1, 10, '2017-03-13 00:00:00', '2017-03-13 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ec_item`
--
ALTER TABLE `ec_item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ec_item`
--
ALTER TABLE `ec_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
