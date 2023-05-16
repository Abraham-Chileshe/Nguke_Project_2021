-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2021 at 11:56 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17358591_abraham`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'NGUKETECHWORLD', 'Nguk3.p@loba');

-- --------------------------------------------------------

--
-- Table structure for table `graphics`
--

CREATE TABLE `graphics` (
  `ID` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graphics`
--

INSERT INTO `graphics` (`ID`, `img`) VALUES
(7, '8408084080IMG-20210731-WA0006.jpg'),
(5, '8656686566IMG-20210801-WA0016.jpg'),
(6, '126409126409IMG-20210801-WA0021.jpg'),
(8, '6378963789IMG-20210731-WA0003.jpg'),
(9, '8408484084IMG-20210801-WA0015.jpg'),
(10, '3325533255IMG-20210801-WA0020.jpg'),
(11, '7923279232IMG-20210801-WA0017.jpg'),
(12, '3336433364IMG-20210801-WA0014.jpg'),
(13, '51304FB_IMG_16280623952254575.jpg'),
(14, '75135FB_IMG_16280624028326588.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`ID`, `name`, `value`) VALUES
(1, 'Top left label', 'NGUKE TECHWORLD'),
(2, 'Description', 'Nguke Paloba offers a wide range of consulting services with necessary tools and expertise to help grow your business. We partner with our clients from start to finish focusing on their needs while producing new ideas, evolving effective strategies and designing high quality and scalable solutions.'),
(3, 'Welcome', 'WELCOME TO MR NGULUBE KANE'),
(4, 'Big Name', 'EMMANUEL TECHNOLOGY'),
(5, 'Who Im I', 'I Am Ngulube Kane Emmanuel (Nguke) Aged 22 I Grew up from Lundazi Richard Street Indians Compound Eastern Part Of Zambia. Currently pursuing a bachelor of information and communication technology with education at Chalimbana University.'),
(6, 'Phone', '0976976353'),
(7, 'Email', 'ngukepaloba@gmail.com'),
(8, 'Address', 'Richard Street Indians Compound Plot 151 Lundazi');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `new` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `name`, `address`, `phone`, `message`, `new`) VALUES
(6, 'HeziTech', 'info.hezitech@gmail.com', '+260972693891', 'Recommendable job there, need one like this', '0'),
(7, 'Pephias ', 'pephiasphiri@gmail.com', '0977189857', 'I want vpn and password ', '0'),
(8, 'HeziTech', 'info.hezitech@gmail.com', '+260972693891', 'CCTV INSTALLATION- How to', '0'),
(9, 'Fack You', 'fackyou@gmail.com', '99999998643', 'Fack you', '0'),
(10, 'Moses lungu', 'mlungu318@gmail.com', '0761664432', 'I want you to make a design for my music promos', '0'),
(11, 'CK', 'wilsonkombe22@gmail.com', '0972813607', 'Hey ', '0'),
(12, 'Alfred~', 'alfredngoma884@gmail.com', '0971490661', 'Participant', '0'),
(13, 'The One', 'theonegibs@gmail.com', '+260975414987', 'This is Amusing bro congratulations.. I would like your services', '0');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `ID` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`ID`, `title`, `description`, `img`) VALUES
(4, 'TECHNOLOGY CONSULTING', 'Turning a New Page', 'f656fb99b72847c7b66e01324d843074.webp'),
(2, 'SYSTEM IMPLEMENTATION', 'An innovative solution', 'Screenshot_4.jpg'),
(3, 'PRODUCT MANAGEMENT', 'A story of Success', 'Screenshot_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ID` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `amount` text NOT NULL,
  `img` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ID`, `title`, `description`, `amount`, `img`) VALUES
(1, 'Installation of Operating Systems', 'Latest versions of Windows OS and Linux OS.', 'K200', 'img_5b68e80f77e33.png'),
(2, 'Microsoft Office Package', 'Microsoft Word. Microsoft Excel. Microsoft Powerpoint. etc.', 'K250', 'office-header.jpg'),
(3, 'CCTV Installation', 'Analog and IP-based cameras (installation)', 'K800', 'river.jpg'),
(4, 'Phone System Flashing', 'Flash of Android and other Operating Systems (OS)', 'K150', 'universal-mobile-phone-flashing-software-free-download.png'),
(5, 'VPN settings and Passwords', 'Free VPN internet installations and computer passwords cracking', 'K150', 'binary_code_data_flowing_through_cracked_seal_of_vault_security_safe_by_phive2015_gettyimages-596384360_cso_2400x1600-100850060-large.jpg'),
(6, 'WIFI Installations (Drivers)', 'Wifi installations and other Device Drivers.', 'K250', 'wifi-generic-blue-newjpg_49130.jpg'),
(7, 'Games', 'Installation of the best Games on computers such as Call of Duty.', 'K50', 'MW3.jpg'),
(8, 'Graphic Designs', 'Designing the graphics for brand and/or Picture/Photo enhancement.', 'K100', 'WallpaperDog-571930 - Copy.jpg'),
(9, 'Logo Designs', 'Logos for Schools, Brands, Companies etc.', 'K50', 'IMG-20210801-WA0014.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service_tab`
--

CREATE TABLE `service_tab` (
  `ID` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_tab`
--

INSERT INTO `service_tab` (`ID`, `title`, `description`) VALUES
(1, 'REMOTE ACCESS', 'With years of experience, out staff has the capability and expertise to take your business to the next level. At Ngukepaloba, we combine our insights and skill to transform your company. We \'re proud to help share and improve how our clients structure and manage their business'),
(2, 'SERVER INSTALLATIONS', 'Looking to develop your business but not sure where to turn? Need help planning or executing your next project? Let us guide you. Any organization can move forward with small incremental changes, but building for the future in today\'s rapidly evolving environment means taking bold chances and making insightful decisions');

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `ID` int(11) NOT NULL,
  `Mode` text NOT NULL,
  `fg` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`ID`, `Mode`, `fg`) VALUES
(1, 'white', 'black');

-- --------------------------------------------------------

--
-- Table structure for table `tuitions`
--

CREATE TABLE `tuitions` (
  `ID` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `amount` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuitions`
--

INSERT INTO `tuitions` (`ID`, `title`, `description`, `amount`) VALUES
(1, 'Mathematics', 'I offer tuitions in Mathematics', 'K250 monthly'),
(2, 'Physics', 'I offer tuitions in Physics', 'K250 monthly'),
(3, 'Computer', 'I offer tuitions in Computer', 'K250 monthly');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `graphics`
--
ALTER TABLE `graphics`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `service_tab`
--
ALTER TABLE `service_tab`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tuitions`
--
ALTER TABLE `tuitions`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `graphics`
--
ALTER TABLE `graphics`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service_tab`
--
ALTER TABLE `service_tab`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tuitions`
--
ALTER TABLE `tuitions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
