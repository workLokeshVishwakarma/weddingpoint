-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 04:56 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding_point`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `footer_sec`
--

CREATE TABLE `footer_sec` (
  `id` int(255) NOT NULL,
  `copyright` varchar(255) NOT NULL,
  `madeby` varchar(255) NOT NULL,
  `redirect_link_footer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_sec`
--

INSERT INTO `footer_sec` (`id`, `copyright`, `madeby`, `redirect_link_footer`) VALUES
(1, 'LexusCreations', 'LokeshVishwakarma', 'https://github.com/lexuscreations');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_sec`
--

CREATE TABLE `gallery_sec` (
  `id` int(11) NOT NULL,
  `card_title` varchar(255) NOT NULL,
  `card_des` varchar(255) NOT NULL,
  `card_img` varchar(255) NOT NULL,
  `redirect_link` varchar(255) NOT NULL,
  `card_last_update` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_sec`
--

INSERT INTO `gallery_sec` (`id`, `card_title`, `card_des`, `card_img`, `redirect_link`, `card_last_update`) VALUES
(1, 'Rohan + Simran', 'Lorem Ipsum is simply dummy text of the printing and typesettingtype specimen book.', 'cardCouple1.jpg', '#', '11:08 09-07-2021'),
(2, 'Sandeep + Kajol', 'Lorem Ipsum is simply dummy text of the printing and typesettingtype specimen book.', 'cardCouple2.jpg', '#', '11:08 09-07-2021'),
(3, 'Karan + Ambika', 'Lorem Ipsum is simply dummy text of the printing and typesettingtype specimen book.', 'cardCouple3.jpg', '#', '11:08 09-07-2021'),
(4, 'Sudeep + Priyanka', 'Lorem Ipsum is simply dummy text of the printing and typesettingtype specimen book.', 'cardCouple4.jpg', '#', '11:08 09-07-2021');

-- --------------------------------------------------------

--
-- Table structure for table `hero_sec`
--

CREATE TABLE `hero_sec` (
  `id` int(255) NOT NULL,
  `hero_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hero_sec`
--

INSERT INTO `hero_sec` (`id`, `hero_img`) VALUES
(1, 'https://images.unsplash.com/photo-1513279922550-250c2129b13a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80');

-- --------------------------------------------------------

--
-- Table structure for table `meta_data`
--

CREATE TABLE `meta_data` (
  `id` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `revised` varchar(255) NOT NULL,
  `copyright` varchar(255) NOT NULL,
  `title_common` varchar(255) NOT NULL,
  `logo_small_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meta_data`
--

INSERT INTO `meta_data` (`id`, `description`, `keywords`, `author`, `revised`, `copyright`, `title_common`, `logo_small_name`) VALUES
(1, 'description goes hear', 'keywords goes hear', 'LexusCreations', ' 05:53 09-07-2021', 'wedding_point.com 2021', 'weddingPoint', 'WP');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `mother_tongue` varchar(255) NOT NULL,
  `profile_img` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `last_update_profile` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `uplodedBy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `gender`, `age`, `religion`, `mother_tongue`, `profile_img`, `education`, `last_update_profile`, `uplodedBy`) VALUES
(33, 'lokesh vishwakarma', 'men', '23', 'hindu', 'hindi', '1625982253-1625844456-cardCouple4.jpg', '', '2021-07-11 11:14:13', ''),
(34, 'sakshi vishwakarma', 'women', '22', 'hindu', 'marathi', '1625982273-cardCouple1.jpg', '', '2021-07-11 11:14:33', ''),
(35, 'vishesh vishwakrma', 'men', '18', 'hindu', 'hindi', '1625982292-cardCouple2.jpg', '', '2021-07-11 11:14:52', ''),
(36, 'divesh vishwakarma', 'men', '28', 'hindu', 'hindi', '1625982535-cardCouple3.jpg', '', '2021-07-11 11:18:55', ''),
(37, 'rahul vishwakarma', 'men', '25', 'hindu', 'hindi', '1626001394-loginBg.png', '9th fail', '2021-07-11 16:33:14', ''),
(38, 'some new name', 'women', '22', 'hindu', 'gujarati', '1626024693-security-icon.png', 'mba', '2021-07-11 23:01:33', 'vishesh'),
(39, 'shibbu', 'men', '23', 'hindu', 'hindi', '1626024908-avtar.png', '8th fail', '2021-07-11 23:05:08', 'vishesh'),
(40, 'lokesh vishwakarma', 'women', '23', 'hindu', 'hindi', '1626024940-loginBg.png', 'bca', '2021-07-11 23:05:40', 'vishesh');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'lokesh', '321'),
(2, 'vishesh', '123'),
(3, 'rahul', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_sec`
--
ALTER TABLE `footer_sec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_sec`
--
ALTER TABLE `gallery_sec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_sec`
--
ALTER TABLE `hero_sec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_data`
--
ALTER TABLE `meta_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_sec`
--
ALTER TABLE `footer_sec`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery_sec`
--
ALTER TABLE `gallery_sec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hero_sec`
--
ALTER TABLE `hero_sec`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meta_data`
--
ALTER TABLE `meta_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
