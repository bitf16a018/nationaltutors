-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2019 at 07:21 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `national_tutors`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'a@a.a', '!1Aaasdf');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `name`) VALUES
(1, 'Model Town'),
(2, 'Johar Town'),
(3, 'Bahria Town'),
(4, 'Gajju Ki Maata'),
(5, 'Shah Pur Kanjriyaan'),
(95, 'Shahdara'),
(96, 'Jain Mandir');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`) VALUES
(1, 'Class V'),
(2, 'Class VI'),
(3, 'Class VII'),
(4, 'Class VIII'),
(5, 'Class IX'),
(6, 'Class X');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`) VALUES
(1, 'Physics'),
(2, 'Chemistry'),
(3, 'Biology'),
(4, 'Computer Science'),
(5, 'Psychology');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `cnic` char(13) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `cnic_pic_path_1` varchar(255) NOT NULL,
  `cnic_pic_path_2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` char(14) NOT NULL,
  `alt_phone` char(14) NOT NULL,
  `mailing_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_pic_path` varchar(255) NOT NULL,
  `teaching_experience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `name`, `email`, `fname`, `cnic`, `gender`, `cnic_pic_path_1`, `cnic_pic_path_2`, `city`, `phone`, `alt_phone`, `mailing_address`, `permanent_address`, `password`, `profile_pic_path`, `teaching_experience`) VALUES
(1, 'Arslan Ahmad', 'de.arslanahmad@gmail.com', 'Abbu g', '1234567891230', 1, '155577314911824688495cbb36ddc6e70.jpg', '1555773149339387015cbb36ddca16f.jpg', 'Farooqa(ok, that\'s not a city)', '123254657898', '123254657898', 'bhs shsb bfs gsdbvdsa jfsbzd jsfd.s kj bfhdsfds js', 'xchb ssd,hvbs ufsdbds sdbsd usdjz nsghsdkg nsufds g', '!1Aaasdf', '15556409774151926305cb932916a740.jpg', '1 (no experience)'),
(2, 'Arslan Ahmad', 'de.arslanahmad@gmail.comyt', 'Abbu g', '1234567891230', 1, '', '', 'Farooqa(ok, that\'s not a city)', '123254657898', '123254657898', 'bdfg sifsybg ifgsui bifgsbgf sursdgh urbgrs', 'zd khbdbsk usdkjbvsrb isdbgu rshggrs hgd r', '!1Aaasdf', '15556436403732666175cb93cf8e81e8.jpg', '1 (no experience)');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_documents`
--

CREATE TABLE `tutor_documents` (
  `id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `document_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutor_preffered_areas`
--

CREATE TABLE `tutor_preffered_areas` (
  `id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor_preffered_areas`
--

INSERT INTO `tutor_preffered_areas` (`id`, `area_id`, `tutor_id`) VALUES
(1, 3, 1),
(2, 95, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tutor_preffered_classes`
--

CREATE TABLE `tutor_preffered_classes` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor_preffered_classes`
--

INSERT INTO `tutor_preffered_classes` (`id`, `class_id`, `tutor_id`) VALUES
(1, 2, 1),
(2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tutor_preffered_subjects`
--

CREATE TABLE `tutor_preffered_subjects` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor_preffered_subjects`
--

INSERT INTO `tutor_preffered_subjects` (`id`, `subject_id`, `tutor_id`) VALUES
(1, 2, 1),
(2, 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_documents`
--
ALTER TABLE `tutor_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_preffered_areas`
--
ALTER TABLE `tutor_preffered_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_preffered_classes`
--
ALTER TABLE `tutor_preffered_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_preffered_subjects`
--
ALTER TABLE `tutor_preffered_subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tutor_documents`
--
ALTER TABLE `tutor_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tutor_preffered_areas`
--
ALTER TABLE `tutor_preffered_areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tutor_preffered_classes`
--
ALTER TABLE `tutor_preffered_classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tutor_preffered_subjects`
--
ALTER TABLE `tutor_preffered_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
