-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2023 at 06:12 PM
-- Server version: 5.7.41-0ubuntu0.18.04.1
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mckodevc_demo_jeen`
--

-- --------------------------------------------------------

--
-- Table structure for table `addition_about_section2`
--

CREATE TABLE `addition_about_section2` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(500) DEFAULT NULL,
  `input_text` varchar(500) DEFAULT NULL,
  `icon_icon` varchar(500) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addition_about_section2`
--

INSERT INTO `addition_about_section2` (`id`, `input_title`, `input_text`, `icon_icon`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(2, 'High Quality Service', 'We are a team of professional hackers from all over the world', 'far fa-life-ring', 'hhhjhjjhhj', 'show', '2023-02-25', '01:41:13'),
(4, 'Secure Encryption  ', 'We make use of the most effective digital encryption algorithms to ensure that your data is safe from hackers and bots at all times.', 'fa fa-lock', 'hhhjhjjhhj', 'show', '2023-02-25', '01:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `addition_about_section4`
--

CREATE TABLE `addition_about_section4` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(500) DEFAULT NULL,
  `input_number` varchar(5) NOT NULL,
  `input_class` varchar(50) NOT NULL,
  `icon_icon` varchar(500) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addition_about_section4`
--

INSERT INTO `addition_about_section4` (`id`, `input_title`, `input_number`, `input_class`, `icon_icon`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(4, 'Happy Clients', '2563', 'count-text plus', 'flaticon-target', 'fjjjgjg', 'show', '2023-02-25', '03:27:13'),
(5, 'Average Rating', '88.7', 'count-text percent', 'flaticon-target-audience', 'fjjjgjg', 'show', '2023-02-25', '03:27:13'),
(6, 'Years in Buisness', '11', 'count-text plus', 'flaticon-customer-experience', 'fjjjgjg', 'show', '2023-02-25', '03:27:13'),
(7, 'Refund Policy', '100', 'count-text percent', 'flaticon-medal', 'fjjjgjgjj', 'show', '2023-02-25', '03:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `addition_about_section5`
--

CREATE TABLE `addition_about_section5` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(500) DEFAULT NULL,
  `input_facebook_link` varchar(200) DEFAULT NULL,
  `input_twitter_link` varchar(100) DEFAULT NULL,
  `input_instagram_link` varchar(100) NOT NULL,
  `input_linkedin_link` varchar(100) NOT NULL,
  `input_text` varchar(500) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addition_about_section5`
--

INSERT INTO `addition_about_section5` (`id`, `input_title`, `input_facebook_link`, `input_twitter_link`, `input_instagram_link`, `input_linkedin_link`, `input_text`, `image`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(2, 'Amosu Whenayon', 'www.whenayon.fb', 'twitterwhenayon.jf', 'hdhdhdhdhd', 'hdjdhdhjdjd', 'UX/UI Designer', '../assets/images/team/member1.jpg', 'hhhjhjjhhj', 'show', '2023-02-25', '01:41:13'),
(4, 'Codar Jay', 'www.codarjay.fb', 'codarjay.twitter', 'codarjay.instagram', 'codarjay.linkedin', 'Backend Developer', '../assets/images/team/member2.jpg', 'hhhjhjjhhjd', 'show', '2023-02-25', '01:41:13'),
(5, 'Saka Yusuf', 'www.codarjay.fb', 'codarjay.twitter', 'codarjay.instagram', 'codarjay.linkedin', 'Pos Business', '../assets/images/team/member3.jpg', 'hhhjhjjhhjdb', 'show', '2023-02-25', '01:41:13'),
(6, 'Optimuz Prime', 'www.codarjay.fb', 'codarjay.twitter', 'codarjay.instagram', 'codarjay.linkedin', 'Social Media Content', '../assets/images/team/member4.jpg', 'hhhjhjjhhjdbh', 'show', '2023-02-25', '01:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `addition_about_section6`
--

CREATE TABLE `addition_about_section6` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(400) DEFAULT NULL,
  `input_subtitle` varchar(400) DEFAULT NULL,
  `image_1` varchar(500) DEFAULT NULL,
  `input_text` varchar(500) DEFAULT NULL,
  `icon_icon` varchar(50) NOT NULL,
  `li_listing_1` varchar(100) DEFAULT NULL,
  `li_listing_2` varchar(100) DEFAULT NULL,
  `li_listing_3` varchar(100) DEFAULT NULL,
  `hash` char(225) NOT NULL,
  `visibility` varchar(5) DEFAULT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addition_about_section6`
--

INSERT INTO `addition_about_section6` (`id`, `input_title`, `input_subtitle`, `image_1`, `input_text`, `icon_icon`, `li_listing_1`, `li_listing_2`, `li_listing_3`, `hash`, `visibility`, `date_created`, `time_created`) VALUES
(1, 'UX/UI Jay', 'An impactful Application Needs an innovative and interactive.', '../assets/images/about/why-choose1.jpg', 'Our experts help to create the right website for across all major platforms and devices. Taking into consideration your user behavior volu promotey the optimal experience we design responsive performance', 'flaticon-creativity', 'Comprehensive UI/UX Assessment ing', 'Deep Contextual Research and 360° Planning', 'Wireframing & Prototyping', 'fhhfhsdhs', 'show', '2023-02-27', '12:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `addition_about_section8`
--

CREATE TABLE `addition_about_section8` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_link_direction` varchar(500) DEFAULT NULL,
  `image_1` varchar(225) NOT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addition_about_section8`
--

INSERT INTO `addition_about_section8` (`id`, `input_link_direction`, `image_1`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(7, 'contact.php', '../assets/images/partners/partner1.png', 'jnskdndn8fnf9fb ', 'show', '2023-02-28', '09:37:17');

-- --------------------------------------------------------

--
-- Table structure for table `addition_home_section1`
--

CREATE TABLE `addition_home_section1` (
  `id` int(10) UNSIGNED NOT NULL,
  `fade_in` varchar(500) DEFAULT NULL,
  `input_text` varchar(500) DEFAULT NULL,
  `input_link_text` varchar(500) DEFAULT NULL,
  `icon_icon` varchar(500) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addition_home_section1`
--

INSERT INTO `addition_home_section1` (`id`, `fade_in`, `input_text`, `input_link_text`, `icon_icon`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(2, 'feature-item wow fadeInUp delay-0-2s', 'Credit Repair', 'info', 'flaticon-consulting', 'hhhjhjjhhj', 'show', '2023-02-25', '01:41:13'),
(5, 'feature-item wow fadeInDown delay-0-2s', 'Grade Hack', 'info', 'fa fa-graduation-cap', 'hhhjhjjhhj', 'show', '2023-03-11', '04:50:13'),
(6, 'feature-item wow fadeInUp delay-0-2s', 'Bitcoin Private key', 'info', 'fab fa-bitcoin', 'hhhjhjjhhj4d', 'show', '2023-03-11', '05:06:13'),
(7, 'feature-item wow fadeInDown delay-0-2s', 'debts Clearance', 'info', 'flaticon-ui', 'hhhjhjf5', 'show', '2023-03-11', '05:06:13'),
(8, 'feature-item wow fadeInUp delay-0-2s', 'social media Hack', 'info', 'fab fa-instagram', 'hhhjhjf53', 'show', '2023-03-11', '05:06:13'),
(9, 'feature-item wow fadeInDown delay-0-2s', 'Track/spyware', 'info', 'fa fa-location', 'hhhjhjf53e', 'show', '2023-03-11', '05:06:13');

-- --------------------------------------------------------

--
-- Table structure for table `addition_home_section3`
--

CREATE TABLE `addition_home_section3` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(500) DEFAULT NULL,
  `input_subtitle` varchar(100) NOT NULL,
  `fade_in` varchar(100) NOT NULL,
  `input_number` varchar(5) NOT NULL,
  `input_class` varchar(50) NOT NULL,
  `icon_icon` varchar(500) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addition_home_section3`
--

INSERT INTO `addition_home_section3` (`id`, `input_title`, `input_subtitle`, `fade_in`, `input_number`, `input_class`, `icon_icon`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(4, 'Fuck This Code!!!!', 'Am fucking it!!!', 'counter-item-two counter-text-wrap wow fadeInUp delay-0-3s', '35', 'count-text plus', 'flaticon-target', 'fjjjgjg', 'show', '2023-02-25', '03:27:13'),
(8, 'Hey Bitch This is Not', 'Hello World', 'counter-item-two counter-text-wrap wow fadeInUp delay-0-3s', '693', 'count-text plus', 'flaticon-target', 'fjjjgjg', 'show', '2023-02-25', '03:27:13'),
(9, 'Its A Fucking BUG', 'Programmed By CODARJAY', 'counter-item-two counter-text-wrap wow fadeInUp delay-0-3s', '98', 'count-text percent', 'flaticon-target', 'fjjjgjg', 'show', '2023-02-25', '03:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `addition_projects_section2`
--

CREATE TABLE `addition_projects_section2` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_link_text` varchar(100) DEFAULT NULL,
  `input_link_direction` varchar(500) DEFAULT NULL,
  `image_1` varchar(100) NOT NULL,
  `fade-in` varchar(100) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addition_projects_section2`
--

INSERT INTO `addition_projects_section2` (`id`, `input_link_text`, `input_link_direction`, `image_1`, `fade-in`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(1, 'Passive Income', 'http://192.168.33.11/explore', 'assets/images/projects/project-middle2.jpg', 'project-grid-item wow fadeInUp delay-0-4s', 'asdflkjhk6ky', 'show', '2023-02-23', '12:04:13'),
(2, 'Bitcoin Mining', 'http://192.168.33.11/explore', 'assets/images/projects/project-middle4.jpg', 'project-grid-item wow fadeInUp delay-0-4s', 'asdflkjhk6ky', 'show', '2023-02-23', '12:04:13'),
(3, 'Social Media Recovery', 'http://192.168.33.11/explore', 'assets/images/projects/socialmedia3.jpg', 'project-grid-item wow fadeInUp delay-0-4s', 'asdflkjhk6ky6', 'show', '2023-02-23', '12:04:13'),
(4, 'Phone Spying', 'http://192.168.33.11/explore', 'assets/images/projects/spying2.jpeg', 'project-grid-item wow fadeInUp delay-0-4s', 'asdflkjhk6ky6ht8', 'show', '2023-02-23', '12:04:13'),
(5, 'Track Phone location', 'http://192.168.33.11/explore', 'assets/images/projects/phonespy1.jpg', 'project-grid-item wow fadeInUp delay-0-2s', 'asdflkjhk6ky6ht887h', 'show', '2023-02-23', '12:04:13'),
(6, 'Fix Bad Credit', 'http://192.168.33.11/explore', 'assets/images/projects/credit-score1.jpg', 'project-grid-item wow fadeInUp delay-0-4s', 'asdflkjhk6kyn', 'show', '2023-02-23', '12:04:13'),
(7, 'Mutual Funds', 'http://192.168.33.11/explore', 'assets/images/projects/mutual-funds1.webp', 'project-grid-item wow fadeInUp delay-0-4s', 'asdflkjhk6kyn4r', 'show', '2023-02-23', '12:04:13'),
(8, 'Estate Investment', 'http://192.168.33.11/explore', 'assets/images/projects/real.jpg', 'project-grid-item wow fadeInUp delay-0-4s', 'asdflkjhk6kyn4r3', 'show', '2023-02-23', '12:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `addition_services_section2`
--

CREATE TABLE `addition_services_section2` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(500) DEFAULT NULL,
  `input_subtitle` varchar(500) DEFAULT NULL,
  `icon_icon` varchar(500) DEFAULT NULL,
  `fade_in` varchar(100) NOT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addition_services_section2`
--

INSERT INTO `addition_services_section2` (`id`, `input_title`, `input_subtitle`, `icon_icon`, `fade_in`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(2, 'Secure', 'Your information is 100% safe', 'flaticon-trust', 'feature-item style-two mt-25 wow fadeInUp delay-0-3s', 'hhhjhjjhhj', 'show', '2023-02-25', '01:41:13'),
(5, 'Transparent', 'No gimmicks.    No Fine Prints.', 'flaticon-social-media', 'feature-item style-two mt-25 wow fadeInUp delay-0-3s', 'hhhjhjjhhj7', 'show', '2023-02-25', '01:41:13'),
(6, 'Reliable', 'We Always Deliver', 'flaticon-technical-support', 'feature-item style-two mt-25 wow fadeInUp delay-0-6s', 'hhhjhjjhhj7h', 'show', '2023-02-25', '01:41:13'),
(7, 'Effective', 'Quality Results Everytime', 'flaticon-brainstorming', 'feature-item style-two mt-25 wow fadeInUp delay-0-6s', 'hhhjhjjhhj7h5v', 'show', '2023-02-25', '01:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `panel_home_section4`
--

CREATE TABLE `panel_home_section4` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(500) DEFAULT NULL,
  `input_subtitle` varchar(100) NOT NULL,
  `fade_in` varchar(100) NOT NULL,
  `input_number` varchar(5) NOT NULL,
  `image_1` varchar(100) NOT NULL,
  `icon_icon` varchar(500) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_home_section4`
--

INSERT INTO `panel_home_section4` (`id`, `input_title`, `input_subtitle`, `fade_in`, `input_number`, `image_1`, `icon_icon`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(4, 'Fuck This Code!!!!', 'Am fucking it!!!', 'counter-item-two counter-text-wrap wow fadeInUp delay-0-3s', '35', 'count-text plus', 'flaticon-target', 'fjjjgjg', 'show', '2023-02-25', '03:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `panel_home_servicearea`
--

CREATE TABLE `panel_home_servicearea` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_1` varchar(100) NOT NULL,
  `input_title` varchar(100) DEFAULT NULL,
  `li_listing_1` varchar(100) DEFAULT NULL,
  `li_listing_2` varchar(100) NOT NULL,
  `li_listing_3` varchar(20) NOT NULL,
  `li_listing_4` varchar(20) NOT NULL,
  `li_listing_5` varchar(20) NOT NULL,
  `class` varchar(100) NOT NULL,
  `fade-in` varchar(100) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_home_servicearea`
--

INSERT INTO `panel_home_servicearea` (`id`, `image_1`, `input_title`, `li_listing_1`, `li_listing_2`, `li_listing_3`, `li_listing_4`, `li_listing_5`, `class`, `fade-in`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(1, 'assets/images/services/service1.png', 'Social Networks', 'Snapchat', 'Whatsapp', 'Instagram', 'Facebook', 'Twitter', 'col-xl-3 col-lg-4 col-md-6', 'service-item-two wow fadeInUp delay-0-2s', 'asdflkjh', 'show', '2023-02-23', '12:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `panel_patners`
--

CREATE TABLE `panel_patners` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_1` varchar(225) NOT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_patners`
--

INSERT INTO `panel_patners` (`id`, `image_1`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(7, '../assets/images/partners/coinbase.png', 'jnskdndn8fnf9fb ', 'show', '2023-02-28', '09:37:17'),
(8, '../assets/images/partners/binance1.png', 'jnskdndn8fnf9fb ', 'show', '2023-02-28', '09:37:17'),
(9, '../assets/images/partners/btc2.png', 'jnskdndn8fnf9fb ', 'show', '2023-03-09', '05:51:17'),
(10, '../assets/images/partners/ethereum.png', 'jnskdndn8fnf9fb ', 'show', '2023-03-09', '05:51:17'),
(11, '../assets/images/partners/ripple1.png', 'jnskdndn8fnf9fb ', 'show', '2023-03-09', '06:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `panel_projects`
--

CREATE TABLE `panel_projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_link_text` varchar(100) DEFAULT NULL,
  `input_link_direction` varchar(500) DEFAULT NULL,
  `image_1` varchar(100) NOT NULL,
  `fade-in` varchar(100) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_projects`
--

INSERT INTO `panel_projects` (`id`, `input_link_text`, `input_link_direction`, `image_1`, `fade-in`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(1, 'Credit Repair', 'http://192.168.33.11/explore', '../assets/images/projects/credit.png', 'project-grid-item wow fadeInUp delay-0-2s', 'asdflkjh', 'show', '2023-02-23', '12:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `panel_projects2`
--

CREATE TABLE `panel_projects2` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_link_text` varchar(100) DEFAULT NULL,
  `input_link_direction` varchar(500) DEFAULT NULL,
  `image_1` varchar(100) NOT NULL,
  `fade-in` varchar(100) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_projects2`
--

INSERT INTO `panel_projects2` (`id`, `input_link_text`, `input_link_direction`, `image_1`, `fade-in`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(1, 'Bitcoin Mining', 'http://192.168.33.11/explore', '../assets/images/projects/bitcoin.jpg', 'project-grid-item wow fadeInUp delay-0-4s', 'asdflkjhk6ky', 'show', '2023-02-23', '12:04:13'),
(2, 'Social Media recovery', 'http://192.168.33.11/explore', '../assets/images/projects/socialmedia2.jpg', 'project-grid-item wow fadeInUp delay-0-6s', 'asdflkjhk6kynbd87e7', 'show', '2023-02-23', '12:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `panel_services`
--

CREATE TABLE `panel_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_link_direction` varchar(100) DEFAULT NULL,
  `input_title` varchar(100) DEFAULT NULL,
  `input_text` varchar(500) DEFAULT NULL,
  `image_1` varchar(300) NOT NULL,
  `input_link_text` varchar(300) NOT NULL,
  `icon_icon` varchar(500) DEFAULT NULL,
  `input_number` varchar(300) NOT NULL,
  `fade_in` varchar(200) NOT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_services`
--

INSERT INTO `panel_services` (`id`, `input_link_direction`, `input_title`, `input_text`, `image_1`, `input_link_text`, `icon_icon`, `input_number`, `fade_in`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(2, 'info', 'Credit Repair', 'Delete all negative items on your credit report', '../assets/images/projects/credit-repair.png', 'Start Now', 'fa fa-credit-card', '01', 'service-item-three wow fadeInUp delay-0-2s', 'hhhjhjjhhj', 'show', '2023-02-25', '01:41:13'),
(7, '/', 'Debts Clearance', 'Clear all your debt and live a free life', '../assets/images/services/debt.jpg', 'Start Now', 'flaticon-layers', '02', 'service-item-three wow fadeInUp delay-0-3s', 'hhhjhjjhhjb', 'show', '2023-02-25', '01:41:13'),
(8, 'info', 'Bitcoin Private Key', 'A secret number that allows bitcoins to be spent', '../assets/images/projects/bitcoin-p.jpg', 'Start Now', 'fab fa-bitcoin', '03', 'service-item-three wow fadeInUp delay-0-5s', 'hhhjhjjhhjb4', 'show', '2023-02-25', '01:41:13'),
(9, '/', 'Mutual Funds', 'Invest in Safe reliable assets', '../assets/images/services/mutual.png', 'Read More ', 'fa fa-money-bill', '04', 'service-item-three wow fadeInUp delay-0-6s', 'hhhjhjjhhjb4', 'show', '2023-02-25', '01:41:13'),
(10, '/', 'Passive Income', 'Make Money While You sleep', '../assets/images/services/passive.jpeg', 'Start Now', 'fa fa-cheese-swiss', '05', 'service-item-three wow fadeInUp delay-0-8s', 'hhhjhjjhhjb4', 'show', '2023-02-25', '01:41:13'),
(11, '/', 'Social Media Hacks', 'Hack and recover your accounts ', '../assets/images/projects/socialmedia2.jpg', 'Read More ', 'fa fa-globe', '06', 'service-item-three wow fadeInUp delay-0-8s', 'hhhjhjjhhjb42dde', 'show', '2023-02-25', '01:41:13'),
(12, '/', 'Estate Investment', 'Invest in Stable Real Estate', '../assets/images/projects/real-estate.jpg', 'Start Now', 'fa fa-house', '06', 'service-item-three wow fadeInUp delay-0-9s', 'hhhjhjjhhjb42dde', 'show', '2023-02-25', '01:41:13'),
(13, '/', 'Stock Investment', 'Buy and hold the best Companies', '../assets/images/projects/stocks-bonds.jpg', 'Start Now', 'fab fa-stack-exchange', '06', 'service-item-three wow fadeInUp delay-0-9s', 'hhhjhjjhhjb42dde', 'show', '2023-02-25', '01:41:13'),
(14, '/', 'Grade Hack', 'hack grades at your university / high school servers', '../assets/images/services/Grade1.png', 'Start Now', 'flaticon-coding-1', '06', 'service-item-three wow fadeInUp delay-0-8s', 'hhhjhjjhhjb42dde', 'show', '2023-02-25', '01:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `panel_skills`
--

CREATE TABLE `panel_skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_link_direction` varchar(100) DEFAULT NULL,
  `input_title` varchar(100) DEFAULT NULL,
  `input_text` varchar(500) DEFAULT NULL,
  `icon_icon` varchar(500) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_skills`
--

INSERT INTO `panel_skills` (`id`, `input_link_direction`, `input_title`, `input_text`, `icon_icon`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(2, 'info', 'Technical Support', 'We offer round the clock technical support. Our hackers are always available to help you keep things running smoothly.', 'far fa-microchip', 'hhhjhjjhhj', 'show', '2023-02-25', '01:41:13'),
(4, 'info', 'Precision', 'We make use of the most effective digital encryption algorithms to ensure that your data is safe from hackers and bots at all times.', 'fa fa-tire-flat', 'hhhjhjjhhj', 'show', '2023-02-25', '01:41:13'),
(6, 'info', 'Superior Processing', 'Our powerful workstations provide enough processing power  to break through the most resilient encryption.', 'flaticon-customer-experience', 'hhhjhjjhhj', 'show', '2023-02-25', '01:41:13'),
(7, 'info', 'Secure Encryption', 'Our hackers are skilled and very experienced with all sorts of hacks and our highly efficient technology guarantees full effectiveness.', 'fa fa-lock', 'hhhjhjjhhj', 'show', '2023-02-25', '01:41:13'),
(8, 'info', 'Privacy', 'Your personal information is always safe with us. Under no circumstances will any information be leaked to a third party', 'fa fa-spider', 'hhhjhjjhhj', 'show', '2023-02-25', '12:32:13'),
(9, 'info', 'Pliability', 'Knowledge base provides tons of resources to stay abreast of the latest security trends, ensuring successful results no matter the difficulty.', 'far fa-infinity', 'hhhjhjjhhj', 'show', '2023-02-25', '12:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `panel_team`
--

CREATE TABLE `panel_team` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(50) DEFAULT NULL,
  `input_subtitle` varchar(50) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_team`
--

INSERT INTO `panel_team` (`id`, `input_title`, `input_subtitle`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(2, 'About us', 'Who We Are', 'hfhfjdjhd', 'show', '2023-02-25', '04:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `panel_testimonial`
--

CREATE TABLE `panel_testimonial` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(50) DEFAULT NULL,
  `input_text` varchar(300) DEFAULT NULL,
  `input_text2` varchar(400) NOT NULL,
  `image_1` varchar(400) NOT NULL,
  `icon_icon` varchar(200) NOT NULL,
  `input_subtitle` varchar(50) DEFAULT NULL,
  `input_ratting_icon` varchar(30) NOT NULL,
  `input_ratting_icon2` varchar(30) NOT NULL,
  `input_ratting_icon3` varchar(30) NOT NULL,
  `input_ratting_icon4` varchar(30) NOT NULL,
  `input_ratting_icon5` varchar(30) NOT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_testimonial`
--

INSERT INTO `panel_testimonial` (`id`, `input_title`, `input_text`, `input_text2`, `image_1`, `icon_icon`, `input_subtitle`, `input_ratting_icon`, `input_ratting_icon2`, `input_ratting_icon3`, `input_ratting_icon4`, `input_ratting_icon5`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(2, 'Chris Glasgow      \nMiami, FL - USA', 'Hello, I want to thank you for creating a great platform and the excellent and quick support that you have provided since I reached out.\n\n', 'Astrocybernet', '../assets/images/testimonials/miami.jpg', 'flaticon-quotation', '', 'fas fa-star', 'fas fa-star', 'fas fa-star', 'fas fa-star', 'fas fa-star-half-alt', 'hfhfjdjhdcv', 'show', '2023-02-28', '08:31:11'),
(6, 'Morris Craig Texas,IR    USA', 'My life Changed on better finally after i hired Astrocybernet to help me get rid of my debts loan and increased my credit score .It was making me so depressive with dark thoughts in my head all the time.i saw their reviews and am glad for the results', 'Astrocybernet', '../assets/images/testimonials/texas-transformed.jpeg', 'flaticon-quotation', '', 'fas fa-star', 'fas fa-star', 'fas fa-star', 'fas fa-star', 'fas fa-star-half-alt', 'hfhfjdjhdcv', 'show', '2023-02-28', '08:31:11'),
(7, 'Dane mitchell Quebeck,  Canada', 'I had issues with my house due to some personal reasons with my daughter but astrocybernet has changed my story with my investment i got refered by a credit bereau friend i have a good score and i just bought a house of my own.\n', 'Astrocybernet', '../assets/images/testimonials/quebec.jpg', 'flaticon-quotation', '', 'fas fa-star', 'fas fa-star', 'fas fa-star', 'fas fa-star', 'fas fa-star-half', 'hfhfjdjhdcv', 'show', '2023-02-28', '08:31:11'),
(8, 'Christiana Noel Atlanta, USA', 'I was having a low credit score and couldn\'t apply for anything due to my negatives i saw recommendations on Astrocybernet was skeptical at first but thank God i pulled through my score has been upgraded.', 'Astrocybernet', '../assets/images/testimonials/atlanta.jpg', 'flaticon-quotation', '', 'fas fa-star', 'fas fa-star', 'fas fa-star', 'fas fa-star', 'fas fa-star', 'hfhfjdjhdcv', 'show', '2023-02-28', '08:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `settings_about_section1`
--

CREATE TABLE `settings_about_section1` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(500) DEFAULT NULL,
  `input_subtitle` varchar(500) DEFAULT NULL,
  `input_link_text` varchar(100) DEFAULT NULL,
  `image_1` varchar(500) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_about_section1`
--

INSERT INTO `settings_about_section1` (`id`, `input_title`, `input_subtitle`, `input_link_text`, `image_1`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(1, 'About us', 'about us', 'Home', '../assets/images/about/astro.jpg', 'asdflkjh', 'show', '2023-02-23', '12:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `settings_about_section2`
--

CREATE TABLE `settings_about_section2` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(500) DEFAULT NULL,
  `input_subtitle` varchar(500) DEFAULT NULL,
  `input_short_description` varchar(100) DEFAULT NULL,
  `image_2` varchar(500) DEFAULT NULL,
  `image_1` varchar(500) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_about_section2`
--

INSERT INTO `settings_about_section2` (`id`, `input_title`, `input_subtitle`, `input_short_description`, `image_2`, `image_1`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(2, 'Astrocybernet Hacks', 'About  Us', 'The New way to Advance', '../assets/images/logos/logo2.jpg', '../assets/images/logos/logo1.jpg', 'hhhjhjjhhj', 'show', '2023-02-25', '01:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `settings_about_section3`
--

CREATE TABLE `settings_about_section3` (
  `id` int(10) UNSIGNED NOT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_about_section3`
--

INSERT INTO `settings_about_section3` (`id`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(1, 'asdflkjhk', 'show', '2023-02-23', '12:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `settings_about_section4`
--

CREATE TABLE `settings_about_section4` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(500) DEFAULT NULL,
  `input_text` varchar(200) DEFAULT NULL,
  `input_link_text` varchar(100) DEFAULT NULL,
  `input_link_direction` varchar(100) NOT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_about_section4`
--

INSERT INTO `settings_about_section4` (`id`, `input_title`, `input_text`, `input_link_text`, `input_link_direction`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(1, 'About Us', 'AstrocybernetHack', 'Reach us', '192.168.33.11/about', 'asdflkjhffd', 'show', '2023-02-23', '12:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `settings_about_section5`
--

CREATE TABLE `settings_about_section5` (
  `id` int(10) UNSIGNED NOT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_about_section5`
--

INSERT INTO `settings_about_section5` (`id`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(1, 'asdflkjhk', 'show', '2023-02-23', '12:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `settings_about_section6`
--

CREATE TABLE `settings_about_section6` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(50) DEFAULT NULL,
  `input_subtitle` varchar(100) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_about_section6`
--

INSERT INTO `settings_about_section6` (`id`, `input_title`, `input_subtitle`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(2, 'Why Choose Us Codarjay', 'Top-Notch Software Development and Digital Transformation', 'hfhfjdjhd', 'show', '2023-02-25', '04:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `settings_about_section7`
--

CREATE TABLE `settings_about_section7` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(50) DEFAULT NULL,
  `input_subtitle` varchar(100) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_about_section7`
--

INSERT INTO `settings_about_section7` (`id`, `input_title`, `input_subtitle`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(2, 'Clients Feedback', 'What Our Clients says About us', 'hfhfjdjhdng6', 'show', '2023-02-25', '04:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `settings_blog_section1`
--

CREATE TABLE `settings_blog_section1` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(500) DEFAULT NULL,
  `input_subtitle` varchar(500) DEFAULT NULL,
  `input_link_text` varchar(100) DEFAULT NULL,
  `image_1` varchar(500) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_blog_section1`
--

INSERT INTO `settings_blog_section1` (`id`, `input_title`, `input_subtitle`, `input_link_text`, `image_1`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(1, 'Jay Blog', 'Blog', 'Home', 'https://assets.hongkiat.com/uploads/100-absolutely-beautiful-nature-wallpapers-for-your-desktop/blue-sea-sunset.jpg', 'asdflkjh', 'show', '2023-02-23', '12:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `settings_contact_section1`
--

CREATE TABLE `settings_contact_section1` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(500) DEFAULT NULL,
  `input_subtitle` varchar(500) DEFAULT NULL,
  `input_link_text` varchar(100) DEFAULT NULL,
  `image_1` varchar(500) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_contact_section1`
--

INSERT INTO `settings_contact_section1` (`id`, `input_title`, `input_subtitle`, `input_link_text`, `image_1`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(1, 'Contact us', 'Contact', 'Home', '../assets/images/about/astro.jpg', 'asdflkjh', 'show', '2023-02-23', '12:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `settings_faqs_section1`
--

CREATE TABLE `settings_faqs_section1` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(500) DEFAULT NULL,
  `input_subtitle` varchar(500) DEFAULT NULL,
  `input_link_text` varchar(100) DEFAULT NULL,
  `image_1` varchar(500) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_faqs_section1`
--

INSERT INTO `settings_faqs_section1` (`id`, `input_title`, `input_subtitle`, `input_link_text`, `image_1`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(1, 'FaQs', 'Our FaQs', 'Home', '../assets/images/about/astro.jpg', 'asdflkjh', 'show', '2023-02-23', '12:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `settings_home_section1`
--

CREATE TABLE `settings_home_section1` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_subtitle` varchar(300) DEFAULT NULL,
  `input_title` varchar(50) DEFAULT NULL,
  `input_link_direction` varchar(500) DEFAULT NULL,
  `image_1` varchar(100) DEFAULT NULL,
  `input_link_text` varchar(300) DEFAULT NULL,
  `textcolor_title` varchar(100) DEFAULT NULL,
  `textcolor_subtitle` varchar(100) DEFAULT NULL,
  `textcolor_text` varchar(100) DEFAULT NULL,
  `icon_icon` varchar(100) DEFAULT NULL,
  `hash_id` varchar(225) NOT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_home_section1`
--

INSERT INTO `settings_home_section1` (`id`, `input_subtitle`, `input_title`, `input_link_direction`, `image_1`, `input_link_text`, `textcolor_title`, `textcolor_subtitle`, `textcolor_text`, `icon_icon`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(2, 'AstrocybernetHacks', 'Innovation Digital IT Solutions', 'main', 'assets/images/about/about.png', 'Get Started', '0', '0', '', NULL, '656t7yew676w6798283tfweuyiuqwhgghh', 'show', '2022-06-01', '04:07:08');

-- --------------------------------------------------------

--
-- Table structure for table `settings_home_section3`
--

CREATE TABLE `settings_home_section3` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_subtitle` varchar(50) DEFAULT NULL,
  `input_title` varchar(500) DEFAULT NULL,
  `textcolor_title` varchar(100) DEFAULT NULL,
  `textcolor_subtitle` varchar(100) DEFAULT NULL,
  `textcolor_text` varchar(100) DEFAULT NULL,
  `icon_icon` varchar(100) DEFAULT NULL,
  `hash_id` varchar(225) NOT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_home_section3`
--

INSERT INTO `settings_home_section3` (`id`, `input_subtitle`, `input_title`, `textcolor_title`, `textcolor_subtitle`, `textcolor_text`, `icon_icon`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(2, 'Global Outreach', 'Over 10,456 customers in 36 countries use Astrocybernet Hack', '0', '0', '', NULL, '656t7yew676w6798283tfweuyiuqwhgghh', 'show', '2022-06-01', '04:07:08');

-- --------------------------------------------------------

--
-- Table structure for table `settings_home_servicearea`
--

CREATE TABLE `settings_home_servicearea` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(500) DEFAULT NULL,
  `fade_in` varchar(100) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_home_servicearea`
--

INSERT INTO `settings_home_servicearea` (`id`, `input_title`, `fade_in`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(1, 'We Think Outside the Box', 'section-title text-center mb-55 wow fadeInUp delay-0-2s', 'asdflkjh', 'show', '2023-02-23', '12:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `settings_pricing_section1`
--

CREATE TABLE `settings_pricing_section1` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(500) DEFAULT NULL,
  `input_subtitle` varchar(500) DEFAULT NULL,
  `input_link_text` varchar(100) DEFAULT NULL,
  `image_1` varchar(500) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_pricing_section1`
--

INSERT INTO `settings_pricing_section1` (`id`, `input_title`, `input_subtitle`, `input_link_text`, `image_1`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(1, 'Jay Pricing', 'Our Pricing', 'Home', 'https://assets.hongkiat.com/uploads/100-absolutely-beautiful-nature-wallpapers-for-your-desktop/blue-sea-sunset.jpg', 'asdflkjh', 'show', '2023-02-23', '12:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `settings_project_section1`
--

CREATE TABLE `settings_project_section1` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(500) DEFAULT NULL,
  `input_subtitle` varchar(500) DEFAULT NULL,
  `input_link_text` varchar(100) DEFAULT NULL,
  `image_1` varchar(500) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_project_section1`
--

INSERT INTO `settings_project_section1` (`id`, `input_title`, `input_subtitle`, `input_link_text`, `image_1`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(1, 'Our Portfolio', 'Portfolio', 'Home', '../assets/images/about/astro.jpg', 'asdflkjh', 'show', '2023-02-23', '12:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `settings_project_section2`
--

CREATE TABLE `settings_project_section2` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(500) DEFAULT NULL,
  `input_subtitle` varchar(500) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_project_section2`
--

INSERT INTO `settings_project_section2` (`id`, `input_title`, `input_subtitle`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(1, 'Our Portfolio', 'Our services are 100% guaranteed, carried out with utmost discretion and lethal accuracy. With us, you can be sure of getting effective results on time, hassle free.', 'asdflkjh', 'show', '2023-02-23', '12:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `settings_services_section1`
--

CREATE TABLE `settings_services_section1` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(500) DEFAULT NULL,
  `input_subtitle` varchar(500) DEFAULT NULL,
  `input_link_text` varchar(100) DEFAULT NULL,
  `image_1` varchar(700) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_services_section1`
--

INSERT INTO `settings_services_section1` (`id`, `input_title`, `input_subtitle`, `input_link_text`, `image_1`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(1, 'Our Services', 'Our Services', 'Home', '../assets/images/about/astro.jpg', 'asdflkjh', 'show', '2023-02-23', '12:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `settings_services_section2`
--

CREATE TABLE `settings_services_section2` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(500) DEFAULT NULL,
  `input_subtitle` varchar(500) DEFAULT NULL,
  `input_text` varchar(400) DEFAULT NULL,
  `li_listing_1` varchar(100) NOT NULL,
  `li_listing_2` varchar(100) NOT NULL,
  `li_listing_3` varchar(100) NOT NULL,
  `input_link_text` varchar(500) DEFAULT NULL,
  `fade_in` varchar(100) NOT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_services_section2`
--

INSERT INTO `settings_services_section2` (`id`, `input_title`, `input_subtitle`, `input_text`, `li_listing_1`, `li_listing_2`, `li_listing_3`, `input_link_text`, `fade_in`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(1, 'Our Services ', 'You are Guaranteed Advanced Hacking Services', 'Astrocybernethacks With an experience of more than 12years in the dark web, our reputation and testimonies speak for us. We have a large team of hackers dedicated into providing full phone monitoring to our clients', '24/7 Online Support. Hacker for Hire 24/7.', 'We offer Genuine dark-web professional services', 'Wide Range Of Hack Services Available.', 'Contact Us', 'services-content-three mb-30 rmb-65 wow fadeInUp delay-0-3s', 'asdflkjh', 'show', '2023-02-23', '12:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `settings_services_section3`
--

CREATE TABLE `settings_services_section3` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(50) DEFAULT NULL,
  `input_subtitle` varchar(50) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_services_section3`
--

INSERT INTO `settings_services_section3` (`id`, `input_title`, `input_subtitle`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(2, 'Astrocybernet', 'Our Services', 'hfhfjdjhd', 'show', '2023-02-25', '04:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `settings_services_section4`
--

CREATE TABLE `settings_services_section4` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(50) DEFAULT NULL,
  `input_subtitle` varchar(50) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_services_section4`
--

INSERT INTO `settings_services_section4` (`id`, `input_title`, `input_subtitle`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(2, 'What we Provides', 'Digital Core Services Cdj', 'hfhfjdjhd', 'show', '2023-02-25', '04:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `settings_team_section1`
--

CREATE TABLE `settings_team_section1` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(500) DEFAULT NULL,
  `input_subtitle` varchar(500) DEFAULT NULL,
  `input_link_text` varchar(100) DEFAULT NULL,
  `image_1` varchar(500) DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_team_section1`
--

INSERT INTO `settings_team_section1` (`id`, `input_title`, `input_subtitle`, `input_link_text`, `image_1`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(1, 'Jay Amazing Team', 'about us', 'Home', 'https://assets.hongkiat.com/uploads/100-absolutely-beautiful-nature-wallpapers-for-your-desktop/blue-sea-sunset.jpg', 'asdflkjh', 'show', '2023-02-23', '12:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `settings_website_info`
--

CREATE TABLE `settings_website_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `hash_id` varchar(225) NOT NULL,
  `input_name` varchar(225) NOT NULL,
  `input_email` varchar(100) NOT NULL,
  `input_phone_number` char(50) NOT NULL,
  `input_address` varchar(225) NOT NULL,
  `input_facebook` varchar(225) NOT NULL,
  `input_instagram` varchar(225) NOT NULL,
  `input_twitter` varchar(225) NOT NULL,
  `image_1` varchar(225) NOT NULL,
  `text_description` text NOT NULL,
  `input_day(open_closed)` varchar(30) DEFAULT NULL,
  `input_time(open_closed)` varchar(30) DEFAULT NULL,
  `input_country` varchar(225) DEFAULT NULL,
  `input_seo_keywords` text,
  `visibility` varchar(20) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL,
  `input_email_smtp_port` varchar(225) DEFAULT NULL,
  `input_email_password` varchar(225) DEFAULT NULL,
  `input_email_smtp_host` varchar(225) DEFAULT NULL,
  `input_email_smtp_secure_type` varchar(225) DEFAULT NULL,
  `input_email_from` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_website_info`
--

INSERT INTO `settings_website_info` (`id`, `hash_id`, `input_name`, `input_email`, `input_phone_number`, `input_address`, `input_facebook`, `input_instagram`, `input_twitter`, `image_1`, `text_description`, `input_day(open_closed)`, `input_time(open_closed)`, `input_country`, `input_seo_keywords`, `visibility`, `date_created`, `time_created`, `input_email_smtp_port`, `input_email_password`, `input_email_smtp_host`, `input_email_smtp_secure_type`, `input_email_from`) VALUES
(1, '345yjhgfse3456yhbgvfc', 'Astrocybernet', 'sakayusuf8@gmail.com', '+19069849264', 'city, state, country', 'http://facebook.com', 'http://instagram.com', 'http://twitter.com', 'https://upload.wikimedia.org/wikipedia/en/thumb/0/09/Astro_TV_logo.svg/1200px-Astro_TV_logo.svg.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', 'Monday-Friday', '8AM-9PM', 'Nigeria', NULL, 'show', '2021-06-20', '11:33:49', '465', 'ihcatedpepktyrdd', 'smtp.gmail.com', 'ssl', 'sakayusuf8@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addition_about_section2`
--
ALTER TABLE `addition_about_section2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addition_about_section4`
--
ALTER TABLE `addition_about_section4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addition_about_section5`
--
ALTER TABLE `addition_about_section5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addition_about_section6`
--
ALTER TABLE `addition_about_section6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addition_about_section8`
--
ALTER TABLE `addition_about_section8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addition_home_section1`
--
ALTER TABLE `addition_home_section1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addition_home_section3`
--
ALTER TABLE `addition_home_section3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addition_projects_section2`
--
ALTER TABLE `addition_projects_section2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addition_services_section2`
--
ALTER TABLE `addition_services_section2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_home_section4`
--
ALTER TABLE `panel_home_section4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_home_servicearea`
--
ALTER TABLE `panel_home_servicearea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_patners`
--
ALTER TABLE `panel_patners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_projects`
--
ALTER TABLE `panel_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_projects2`
--
ALTER TABLE `panel_projects2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_services`
--
ALTER TABLE `panel_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_skills`
--
ALTER TABLE `panel_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_team`
--
ALTER TABLE `panel_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_testimonial`
--
ALTER TABLE `panel_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_about_section1`
--
ALTER TABLE `settings_about_section1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_about_section2`
--
ALTER TABLE `settings_about_section2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_about_section3`
--
ALTER TABLE `settings_about_section3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_about_section4`
--
ALTER TABLE `settings_about_section4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_about_section5`
--
ALTER TABLE `settings_about_section5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_about_section6`
--
ALTER TABLE `settings_about_section6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_about_section7`
--
ALTER TABLE `settings_about_section7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_blog_section1`
--
ALTER TABLE `settings_blog_section1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_contact_section1`
--
ALTER TABLE `settings_contact_section1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_faqs_section1`
--
ALTER TABLE `settings_faqs_section1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_home_section1`
--
ALTER TABLE `settings_home_section1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_home_section3`
--
ALTER TABLE `settings_home_section3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_home_servicearea`
--
ALTER TABLE `settings_home_servicearea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_pricing_section1`
--
ALTER TABLE `settings_pricing_section1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_project_section1`
--
ALTER TABLE `settings_project_section1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_project_section2`
--
ALTER TABLE `settings_project_section2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_services_section1`
--
ALTER TABLE `settings_services_section1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_services_section2`
--
ALTER TABLE `settings_services_section2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_services_section3`
--
ALTER TABLE `settings_services_section3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_services_section4`
--
ALTER TABLE `settings_services_section4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_team_section1`
--
ALTER TABLE `settings_team_section1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_website_info`
--
ALTER TABLE `settings_website_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addition_about_section2`
--
ALTER TABLE `addition_about_section2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `addition_about_section4`
--
ALTER TABLE `addition_about_section4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `addition_about_section5`
--
ALTER TABLE `addition_about_section5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `addition_about_section6`
--
ALTER TABLE `addition_about_section6`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `addition_about_section8`
--
ALTER TABLE `addition_about_section8`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `addition_home_section1`
--
ALTER TABLE `addition_home_section1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `addition_home_section3`
--
ALTER TABLE `addition_home_section3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `addition_projects_section2`
--
ALTER TABLE `addition_projects_section2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `addition_services_section2`
--
ALTER TABLE `addition_services_section2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `panel_home_section4`
--
ALTER TABLE `panel_home_section4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `panel_home_servicearea`
--
ALTER TABLE `panel_home_servicearea`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `panel_patners`
--
ALTER TABLE `panel_patners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `panel_projects`
--
ALTER TABLE `panel_projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `panel_projects2`
--
ALTER TABLE `panel_projects2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `panel_services`
--
ALTER TABLE `panel_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `panel_skills`
--
ALTER TABLE `panel_skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `panel_team`
--
ALTER TABLE `panel_team`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `panel_testimonial`
--
ALTER TABLE `panel_testimonial`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `settings_about_section1`
--
ALTER TABLE `settings_about_section1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings_about_section2`
--
ALTER TABLE `settings_about_section2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `settings_about_section3`
--
ALTER TABLE `settings_about_section3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings_about_section4`
--
ALTER TABLE `settings_about_section4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings_about_section5`
--
ALTER TABLE `settings_about_section5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings_about_section6`
--
ALTER TABLE `settings_about_section6`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `settings_about_section7`
--
ALTER TABLE `settings_about_section7`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `settings_blog_section1`
--
ALTER TABLE `settings_blog_section1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings_contact_section1`
--
ALTER TABLE `settings_contact_section1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings_faqs_section1`
--
ALTER TABLE `settings_faqs_section1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings_home_section1`
--
ALTER TABLE `settings_home_section1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `settings_home_section3`
--
ALTER TABLE `settings_home_section3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `settings_home_servicearea`
--
ALTER TABLE `settings_home_servicearea`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings_pricing_section1`
--
ALTER TABLE `settings_pricing_section1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings_project_section1`
--
ALTER TABLE `settings_project_section1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings_project_section2`
--
ALTER TABLE `settings_project_section2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings_services_section1`
--
ALTER TABLE `settings_services_section1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings_services_section2`
--
ALTER TABLE `settings_services_section2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings_services_section3`
--
ALTER TABLE `settings_services_section3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `settings_services_section4`
--
ALTER TABLE `settings_services_section4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `settings_team_section1`
--
ALTER TABLE `settings_team_section1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings_website_info`
--
ALTER TABLE `settings_website_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
