-- Adminer 4.8.1 MySQL 5.5.5-10.11.3-MariaDB-1:10.11.3+maria~ubu2204 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `fullname` varchar(20) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `admin` (`fullname`, `id`) VALUES
('ram thapa',	23);

DROP TABLE IF EXISTS `auction`;
CREATE TABLE `auction` (
  `id` int(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `description` varchar(400) NOT NULL,
  `category` varchar(20) NOT NULL,
  `enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `auction` (`id`, `title`, `description`, `category`, `enddate`) VALUES
(12,	'pant',	'good quality',	'Fashion',	'2023-06-02'),
(12,	'Laptop',	'Lenovo V15 celeron Laptop 4GB,256GB SSD,15.6 inch Display.',	'Electronics',	'2023-05-23'),
(13,	'Juice blender',	'this is travel Portable Fresh Juice Blender Bottle For Milkshake Whole Fruit Juicer And Blender',	'Home & Garden',	'2023-05-10'),
(15,	'badmintion',	'Play Badminton With Bag And Free One Piece Cork Head .',	'Sport',	'2023-06-01'),
(16,	'car',	'with the best design and best price.',	'Motors',	'2023-05-22'),
(18,	'Medicine',	'will keep you healthy and free of any health issuse',	'Health',	'2023-06-06'),
(19,	'Barbie',	'with a long hair ',	'Toys',	'2023-05-24'),
(9,	'clock',	'wall hanging clock',	'Electronics',	'2023-05-22');

DROP TABLE IF EXISTS `bid`;
CREATE TABLE `bid` (
  `amountbid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `bid` (`amountbid`) VALUES
(20);

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `name` varchar(25) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `category` (`name`, `id`) VALUES
('furits',	15),
('furits',	15);

DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `email` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `register` (`email`, `username`, `password`) VALUES
('user1@gmail.com',	'user1',	'123456'),
('adminalisha1@gmail.com',	'admin',	'123456');

DROP TABLE IF EXISTS `review`;
CREATE TABLE `review` (
  `username` varchar(20) NOT NULL,
  `review` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `review` (`username`, `review`) VALUES
('ram',	'very good product'),
('ram',	'very good product'),
('ram',	'very good product');

-- 2023-05-14 18:00:48