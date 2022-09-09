-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 09:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbdms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '5c428d8875d2948607f3e3fe134d71b4', '2017-06-18 12:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `tblblooddonars`
--

CREATE TABLE `tblblooddonars` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `MobileNumber` char(11) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `BloodGroup` varchar(20) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL,
  `approve` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblblooddonars`
--

INSERT INTO `tblblooddonars` (`id`, `FullName`, `MobileNumber`, `EmailId`, `Gender`, `Age`, `BloodGroup`, `Address`, `Message`, `PostingDate`, `status`, `approve`) VALUES
(4, 'fdsfsgg', '35345435345', '', 'Female', 26, 'AB-', NULL, ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '2017-07-01 07:21:42', 1, 0),
(5, 'Nitesh Kumart', '8569855244', 'niiii@test.com', 'Male', 32, 'A-', 'Test Demo', 'Test demo Test demoTest demoTest demoTest demoTest demoTest demoTest demoTest demoTest demoTest demoTest demoTest demo', '2017-07-01 09:00:18', 1, 0),
(74, 'Aman Sharma', '9369438757', 'aman703jk@gmail.com', 'Male', 22, 'A+', 'Sumer Sagar Road, Dharamshala Bazar, Jatepur South, Gorakhpur', 'great', '2022-09-09 17:14:13', 1, 0),
(75, 'Aman Sharma', '9369438757', 'aman703jk@gmail.com', 'Male', 22, 'A+', 'Sumer Sagar Road, Dharamshala Bazar, Jatepur South, Gorakhpur', 'great', '2022-09-09 17:14:23', 1, 0),
(76, 'Aman Sharma', '9369438757', 'aman703jk@gmail.com', 'Male', 22, 'AB-', 'Sumer Sagar Road, Dharamshala Bazar, Jatepur South, Gorakhpur', ' dsadas', '2022-09-09 17:18:03', 1, 0),
(77, 'Aman Sharma', '9369438757', 'aman703jk@gmail.com', 'Male', 22, 'A+', 'Sumer Sagar Road, Dharamshala Bazar, Jatepur South, Gorakhpur', ' sadn,sa', '2022-09-09 17:32:31', 1, 0),
(78, 'Aman Sharma', '9369438757', 'aman703jk@gmail.com', 'Male', 22, 'A-', 'Sumer Sagar Road, Dharamshala Bazar, Jatepur South, Gorakhpur', ' asd', '2022-09-09 17:48:27', 1, 0),
(79, 'Aman Sharma', '9369438757', 'aman703jk@gmail.com', 'Male', 22, 'AB+', 'Sumer Sagar Road, Dharamshala Bazar, Jatepur South, Gorakhpur', ' asd', '2022-09-09 17:49:36', 1, 0),
(80, 'Aman Sharma', '9369438757', 'aman703jk@gmail.com', 'Male', 22, 'A+', 'Sumer Sagar Road, Dharamshala Bazar, Jatepur South, Gorakhpur', ' sad', '2022-09-09 17:50:29', 1, 0),
(81, 'Aman Sharma', '9369438757', 'aman703jk@gmail.com', 'Male', 22, 'A+', 'Sumer Sagar Road, Dharamshala Bazar, Jatepur South, Gorakhpur', ' sad', '2022-09-09 18:39:50', 1, 0),
(82, 'Aman Sharma', '9369438757', 'aman703jk@gmail.com', 'Male', 22, 'A+', 'Sumer Sagar Road, Dharamshala Bazar, Jatepur South, Gorakhpur', ' sad', '2022-09-09 18:41:01', 1, 0),
(83, 'Aman Sharma', '9369438757', 'aman703jk@gmail.com', 'Male', 22, 'AB-', 'Sumer Sagar Road, Dharamshala Bazar, Jatepur South, Gorakhpur', ' sd', '2022-09-09 18:43:45', 1, 0),
(84, 'Aman Sharma', '9369438757', 'aman703jk@gmail.com', 'Male', 22, 'AB-', 'Sumer Sagar Road, Dharamshala Bazar, Jatepur South, Gorakhpur', ' sd', '2022-09-09 18:44:00', 1, 0),
(85, 'Aman Sharma', '9369438757', 'aman703jk@gmail.com', 'Male', 22, 'AB-', 'Sumer Sagar Road, Dharamshala Bazar, Jatepur South, Gorakhpur', ' sd', '2022-09-09 18:44:04', 1, 0),
(86, 'Aman Sharma', '9369438757', 'aman703jk@gmail.com', 'Male', 22, 'O-', 'Sumer Sagar Road, Dharamshala Bazar, Jatepur South, Gorakhpur', ' das', '2022-09-09 18:46:54', 1, 0),
(87, 'Aman Sharma', '9369438757', 'aman703jk@gmail.com', 'Male', 50, 'A+', 'Sumer Sagar Road, Dharamshala Bazar, Jatepur South, Gorakhpur', ' asdasd', '2022-09-09 18:53:17', 1, 0),
(88, 'Aman asdSharma', '9369438757', 'aman703jk@gmail.com', 'Male', 22, 'AB-', 'Sumer Sagar Road, Dharamshala Bazar, Jatepur South, Gorakhpur', ' sad', '2022-09-09 19:01:32', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblbloodgroup`
--

CREATE TABLE `tblbloodgroup` (
  `id` int(11) NOT NULL,
  `BloodGroup` varchar(20) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbloodgroup`
--

INSERT INTO `tblbloodgroup` (`id`, `BloodGroup`, `PostingDate`) VALUES
(1, 'A-', '2017-06-30 20:33:50'),
(2, 'AB-', '2017-06-30 20:34:00'),
(3, 'O-', '2017-06-30 20:34:05'),
(4, 'A-', '2017-06-30 20:34:10'),
(5, 'A+', '2017-06-30 20:34:13'),
(6, 'AB+', '2017-06-30 20:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `tblbloodreq`
--

CREATE TABLE `tblbloodreq` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `MobileNumber` char(11) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `BloodGroup` varchar(20) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbloodreq`
--

INSERT INTO `tblbloodreq` (`id`, `FullName`, `MobileNumber`, `EmailId`, `BloodGroup`, `PostingDate`, `status`) VALUES
(1, 'Aman Sharma', '9369438757', 'aman703jk@gmail.com', 'AB-', '2022-06-11 07:24:19', 0),
(2, 'Aman Sharma', '9369438757', 'aman703jk@gmail.com', 'AB-', '2022-06-11 07:24:53', 0),
(3, 'Aman Sharmaghj', '9369438757', 'aman703jk@gmail.com', 'A-', '2022-06-11 07:38:45', 0),
(4, 'Aman Sharma', '9369438757', 'aman703jk@gmail.com', 'A-', '2022-06-11 07:48:45', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusinfo`
--

CREATE TABLE `tblcontactusinfo` (
  `id` int(11) NOT NULL,
  `Address` tinytext DEFAULT NULL,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusinfo`
--

INSERT INTO `tblcontactusinfo` (`id`, `Address`, `EmailId`, `ContactNo`) VALUES
(1, 'Test Demo test demo																									', 'test@test.com', '8585233222');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

CREATE TABLE `tblcontactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(1, 'Anuj Kumar', 'webhostingamigo@gmail.com', '2147483647', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2017-06-18 10:03:07', 1),
(2, 'caasda', 'webhostingamigo@gmail.com', '42342342', 'drftghjk', '2017-06-30 21:17:09', NULL),
(3, 'caasda', 'webhostingamigo@gmail.com', '42342342', 'drftghjk', '2017-06-30 21:21:30', NULL),
(4, 'te', 'sdfsdf@gmail.com', '75787875545', 'sfsdf sdg hs h sh', '2017-07-01 07:19:36', NULL),
(5, 'Aman Sharma', 'aman703jk@gmail.com', '9369438757', 'This text is for texting purpose', '2022-05-17 21:44:19', NULL),
(6, 'Aman Sharma', 'aman703jk@gmail.com', '9369438757', 'This text is for texting purpose', '2022-05-17 21:47:25', NULL),
(7, 'Aman Sharma', 'aman703jk@gmail.com', '9369438757', 'as', '2022-09-08 20:47:10', NULL),
(8, 'Aman Sharma', 'aman703jk@gmail.com', '9369438757', 'as', '2022-09-08 20:50:45', NULL),
(9, 'asd Sharma', 'aman703jk@gmail.com', '9369438757', 'sad', '2022-09-08 20:51:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `type`, `detail`) VALUES
(2, 'Why Become Donor', 'donor', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>'),
(3, 'About Us ', 'aboutus', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblblooddonars`
--
ALTER TABLE `tblblooddonars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbloodgroup`
--
ALTER TABLE `tblbloodgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbloodreq`
--
ALTER TABLE `tblbloodreq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblblooddonars`
--
ALTER TABLE `tblblooddonars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `tblbloodgroup`
--
ALTER TABLE `tblbloodgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblbloodreq`
--
ALTER TABLE `tblbloodreq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
