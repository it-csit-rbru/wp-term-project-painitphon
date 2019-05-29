-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2019 at 06:45 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project0`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `add_id` varchar(11) NOT NULL,
  `add_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`add_id`, `add_name`) VALUES
('1', 'painiti@gmail.com'),
('2', 'Oxxyman@hotmail.com'),
('3', 'amon_zaza@outmail.com'),
('4', 'AWT_tour@gmail.com'),
('5', '6014251833@gmail.com'),
('6', 'Top_asmr@hotmail.com'),
('7', 'uzar_o@outmail.com'),
('8', 'Love_love@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `mv_id` int(11) NOT NULL,
  `mv_name` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`mv_id`, `mv_name`) VALUES
(1, 'POKÉMON DETECTIVE PIKACHU'),
(2, 'JOHN WICK: CHAPTER 3 - PARABELLUM'),
(3, 'AVENGERS: ENDGAME'),
(4, 'BLACK PANTHER'),
(5, 'MISSION: IMPOSSIBLE - FALLOUT'),
(6, 'BLACKKKLANSMAN'),
(7, 'ROCKETMAN'),
(8, 'THE SUN IS ALSO A STAR');

-- --------------------------------------------------------

--
-- Stand-in structure for view `movie_time`
-- (See below for the actual view)
--
CREATE TABLE `movie_time` (
`mv_id` int(11)
,`mv_name` varchar(500)
,`tt_name` varchar(255)
,`tt_t` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `tt_id` varchar(11) NOT NULL,
  `tt_name` varchar(255) NOT NULL,
  `tt_t` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`tt_id`, `tt_name`, `tt_t`) VALUES
('1', 'Major Cineplex', '12:10 13:55 14:45 15:30'),
('2', 'Major Cineplex', '15:50 18:30 20:45'),
('3', 'Major Cineplex ', '21:40'),
('4', 'sf cinema', '18:45'),
('5', 'sf cinema', '14:55 16:30 17:55 19:55'),
('6', 'sf cinema', '11.10 13:50 14:59 15:45'),
('7', 'Major Cineplex', '12:10 13:50 14:45 15:52'),
('8', 'sf cinema', '12:10 13:55 14:45 15:30');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `ttl_id` int(11) NOT NULL,
  `ttl_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`ttl_id`, `ttl_name`) VALUES
(2, 'นาง'),
(1, 'นางสาว'),
(3, 'นาย'),
(4, 'ผู้ช่วยศาสตราจาร์ย'),
(5, 'รองศาสตราจารย์'),
(6, 'ศาสตราจารย์'),
(7, 'อาจารย์');

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_add`
-- (See below for the actual view)
--
CREATE TABLE `user_add` (
`us_id` int(11)
,`us_fname` varchar(45)
,`us_lname` varchar(45)
,`ttl_name` varchar(45)
,`add_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_detail`
-- (See below for the actual view)
--
CREATE TABLE `user_detail` (
`ttl_name` varchar(45)
,`us_id` int(11)
,`us_fname` varchar(45)
,`us_lname` varchar(45)
,`us_ttl` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_redetail`
-- (See below for the actual view)
--
CREATE TABLE `user_redetail` (
`us_id` int(11)
,`us_fname` varchar(45)
,`us_lname` varchar(45)
,`ttl_name` varchar(45)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `us_mv`
-- (See below for the actual view)
--
CREATE TABLE `us_mv` (
`us_id` int(11)
,`us_fname` varchar(45)
,`us_lname` varchar(45)
,`ttl_name` varchar(45)
,`add_name` varchar(255)
,`mv_name` varchar(500)
,`tt_name` varchar(255)
,`tt_t` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `ีuser`
--

CREATE TABLE `ีuser` (
  `us_id` int(11) NOT NULL,
  `us_fname` varchar(45) DEFAULT NULL,
  `us_lname` varchar(45) DEFAULT NULL,
  `us_ttl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ีuser`
--

INSERT INTO `ีuser` (`us_id`, `us_fname`, `us_lname`, `us_ttl`) VALUES
(1, 'นิติพล', 'บุญแก้ว', 3),
(2, 'อมรเทพ', 'สร้อยกลุน', 3),
(3, 'ขวัญปิยาพัช', 'ธนกุลจิรชัย', 7),
(4, 'วัตร์ธนา', 'รัตนทารส', 7),
(5, 'ธันย์ญ่า', 'นาคีวรจิราวงษ์', 2),
(6, 'พิมพ์ลดา', 'สุวรานันทลักษณ์', 2);

-- --------------------------------------------------------

--
-- Structure for view `movie_time`
--
DROP TABLE IF EXISTS `movie_time`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `movie_time`  AS  select `movie`.`mv_id` AS `mv_id`,`movie`.`mv_name` AS `mv_name`,`theater`.`tt_name` AS `tt_name`,`theater`.`tt_t` AS `tt_t` from (`movie` join `theater` on((`movie`.`mv_id` = `theater`.`tt_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `user_add`
--
DROP TABLE IF EXISTS `user_add`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_add`  AS  select `user_redetail`.`us_id` AS `us_id`,`user_redetail`.`us_fname` AS `us_fname`,`user_redetail`.`us_lname` AS `us_lname`,`user_redetail`.`ttl_name` AS `ttl_name`,`address`.`add_name` AS `add_name` from (`user_redetail` join `address` on((`user_redetail`.`us_id` = `address`.`add_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `user_detail`
--
DROP TABLE IF EXISTS `user_detail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_detail`  AS  select `title`.`ttl_name` AS `ttl_name`,`ีuser`.`us_id` AS `us_id`,`ีuser`.`us_fname` AS `us_fname`,`ีuser`.`us_lname` AS `us_lname`,`ีuser`.`us_ttl` AS `us_ttl` from (`ีuser` join `title` on((`ีuser`.`us_ttl` = `title`.`ttl_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `user_redetail`
--
DROP TABLE IF EXISTS `user_redetail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_redetail`  AS  select `ีuser`.`us_id` AS `us_id`,`ีuser`.`us_fname` AS `us_fname`,`ีuser`.`us_lname` AS `us_lname`,`title`.`ttl_name` AS `ttl_name` from (`ีuser` join `title` on((`ีuser`.`us_ttl` = `title`.`ttl_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `us_mv`
--
DROP TABLE IF EXISTS `us_mv`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `us_mv`  AS  select `user_add`.`us_id` AS `us_id`,`user_add`.`us_fname` AS `us_fname`,`user_add`.`us_lname` AS `us_lname`,`user_add`.`ttl_name` AS `ttl_name`,`user_add`.`add_name` AS `add_name`,`movie_time`.`mv_name` AS `mv_name`,`movie_time`.`tt_name` AS `tt_name`,`movie_time`.`tt_t` AS `tt_t` from (`user_add` join `movie_time` on((`user_add`.`us_id` = `movie_time`.`mv_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`add_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`mv_id`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`tt_id`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`ttl_id`),
  ADD KEY `ttl_name` (`ttl_name`);

--
-- Indexes for table `ีuser`
--
ALTER TABLE `ีuser`
  ADD PRIMARY KEY (`us_id`),
  ADD UNIQUE KEY `us_id` (`us_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `mv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `ttl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ีuser`
--
ALTER TABLE `ีuser`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
