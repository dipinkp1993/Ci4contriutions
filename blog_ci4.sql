-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 01:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `post_created_at` datetime NOT NULL,
  `post_updated_at` datetime NOT NULL,
  `post_deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `content`, `post_created_at`, `post_updated_at`, `post_deleted_at`) VALUES
(1, 'COVID-19 cases rise to 802 in Uttarakhand state', 'he number of coronavirus cases in Uttarakhand rose to 802 on Sunday after 53 more people tested positive for the disease, officials said.\r\n\r\nDehradun district reported the maximum 25 cases followed by Haridwar (15), Pauri and Uttarkashi (6 each) and Rudraprayag (1), a state health department bulletin said.\r\n\r\nMost of the new patients have a travel history to Mumbai and Delhi.\r\n\r\nThe bulletin said 102 patients have recovered, five are dead and three have migrated out of the state and there are 692 active cases.>', '2020-05-31 06:10:46', '2020-05-31 06:41:33', '0000-00-00 00:00:00'),
(2, 'Nepal extends lockdown until June 15', 'The Nepal government has extended the nationwide lockdown until June 15 amid a surge in the number of COVID-19 cases and decided to deploy the Army in the worst-hit areas.\r\n\r\nThe country on Saturday registered its highest single-day surge in coronavirus cases with 189 new infections, taking the COVID-19 tally in the country to over 1,400.\r\n\r\nThe Cabinet meeting held on Saturday decided to extend the lockdown.\r\n\r\nMeanwhile, the government has also decided to suspend all domestic and international flights until June 30.\r\n\r\nThe prior-imposed nationwide lockdown, decreed to curtail the potential spread of COVID-19, was to end on June 2.>>', '2020-05-31 06:11:19', '2020-05-31 06:43:31', '0000-00-00 00:00:00'),
(3, 'Singapore gears up to exit circuit breaker from Monday, reports 518 new coronavirus cases', 'ingapore is gearing up to lift its circuit breaker measures imposed to curb the coronavirus pandemic after two months, even as the city-state reported 518 new COVID-19 cases on Sunday, taking the total number of infections to 34,884.\r\n\r\nSingapore’s circuit breaker period will end on Monday, with measures to be progressively lifted in three phase starting the next day.', '2020-05-31 06:12:26', '2020-05-31 06:12:26', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
