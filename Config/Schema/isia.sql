-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2016 at 10:46 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `llegate`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `service_id` int(10) NOT NULL,
  `schedule` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `lat` varchar(255) NOT NULL,
  `long` varchar(255) NOT NULL,
  `photo_1` varchar(255) NOT NULL,
  `photo_2` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client_destination`
--

CREATE TABLE IF NOT EXISTS `client_destination` (
`id` int(10) NOT NULL,
  `client_id` int(10) NOT NULL,
  `destination_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client_terminal`
--

CREATE TABLE IF NOT EXISTS `client_terminal` (
`id` int(10) NOT NULL,
  `client_id` int(10) NOT NULL,
  `terminal_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`id` int(10) NOT NULL,
  `comment` text NOT NULL,
  `destination_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `security` int(5) NOT NULL,
  `environment` int(5) NOT NULL,
  `budget` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE IF NOT EXISTS `destinations` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `long` varchar(255) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `ranking` int(5) NOT NULL,
  `security` int(5) NOT NULL,
  `environment` int(5) NOT NULL,
  `budget` int(5) NOT NULL,
  `affluence` int(3) NOT NULL,
  `category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `destination_terminal`
--

CREATE TABLE IF NOT EXISTS `destination_terminal` (
`id` int(10) NOT NULL,
  `destination_id` int(10) NOT NULL,
  `terminal_id` int(10) NOT NULL,
  `price` float NOT NULL,
  `schedule` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foruma`
--

CREATE TABLE IF NOT EXISTS `foruma` (
`id` int(10) NOT NULL,
  `answer` text NOT NULL,
  `user_id` int(10) NOT NULL,
  `forumq_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forumq`
--

CREATE TABLE IF NOT EXISTS `forumq` (
`id` int(10) NOT NULL,
  `question` text NOT NULL,
  `destination_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `destination_id` int(10) NOT NULL,
  `description` text NOT NULL,
  `start_trip` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL,
  `date_trip` varchar(255) NOT NULL,
  `limit_person` int(10) NOT NULL,
  `joined` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE IF NOT EXISTS `points` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `long` varchar(255) NOT NULL,
  `destination_id` int(10) NOT NULL,
  `price` float NOT NULL,
  `schedule` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE IF NOT EXISTS `promotions` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `client_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `terminals`
--

CREATE TABLE IF NOT EXISTS `terminals` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `long` varchar(255) NOT NULL,
  `schedule` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `ranking` int(5) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `interest_1` int(5) NOT NULL,
  `interest_2` int(5) NOT NULL,
  `interest_3` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_destination`
--
ALTER TABLE `client_destination`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_terminal`
--
ALTER TABLE `client_terminal`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination_terminal`
--
ALTER TABLE `destination_terminal`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foruma`
--
ALTER TABLE `foruma`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forumq`
--
ALTER TABLE `forumq`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terminals`
--
ALTER TABLE `terminals`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `client_destination`
--
ALTER TABLE `client_destination`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `client_terminal`
--
ALTER TABLE `client_terminal`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `destination_terminal`
--
ALTER TABLE `destination_terminal`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `foruma`
--
ALTER TABLE `foruma`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forumq`
--
ALTER TABLE `forumq`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `terminals`
--
ALTER TABLE `terminals`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
