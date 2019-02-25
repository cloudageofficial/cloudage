-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2019 at 01:53 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloudage`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(20) NOT NULL,
  `login_id` int(30) NOT NULL,
  `question` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructions` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `que_input` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `que_output` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `login_id`, `question`, `instructions`, `que_input`, `que_output`) VALUES
(1, 0, 'Arithmetic operators are used to perform arithmetic operations between two operand', 'It includes +(addition), - (subtraction), *(multiplication), /(divide), %(reminder), //(floor divisi', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_img` varchar(50) NOT NULL,
  `course_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_id`, `first_name`, `last_name`, `user_type`, `email`, `password`, `user_img`, `course_id`) VALUES
(3, 'varsha', 'varsha', 'user', 'ashwinikale@live.in', 'b2145aac704ce76dbe1ac7adac535b23', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_desc` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_pdf` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_video` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_price` int(20) NOT NULL,
  `product_img` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_text_pdf` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_desc`, `product_pdf`, `product_video`, `product_qty`, `product_price`, `product_img`, `product_text_pdf`) VALUES
(1, 'Big Data on Hadoop', 'Hadoop is an ecosystem of open source components that fundamentally changes the way enterprises store, process, and analyze data. Unlike traditional systems, Hadoop enables multiple types of analytic workloads to run on the same data', 'assets/pdf/CloudAge.pdf', 'assets/media/LandingVideo.mp4', 1, 1000, 'assets/img/video.jpg', 'assets/pdf/CloudAge.pdf'),
(2, 'Data Centers on Cloud', '<ul style=\"color: #757575;\"><li>Infrastructure as a Service [IaaS] </li><li><p>Platform as a Service [Paas]</li><li>Software as a Service [Saas]</li> </ul>A cloud service is any service made available to users on demand</p>', 'assets/pdf/CloudAge.pdf', 'assets/media/LandingVideo.mp4', 1, 1000, 'assets/img/video.jpg', 'assets/pdf/CloudAge.pdf'),
(3, 'Machine Learning on Cloud', 'Machine learning (ML) and artificial intelligence (AI) can be challenging to figure out a practical and reasonable approach to using these capabilities, emerging technologies, disruptive economics', 'assets/pdf/CloudAge.pdf', 'assets/media/LandingVideo.mp4', 1, 1000, 'assets/img/video.jpg', 'assets/pdf/CloudAge.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `visitor-form-details`
--

CREATE TABLE `visitor-form-details` (
  `VI-id` int(10) NOT NULL,
  `VI-cat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VI-cat-opt` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VI-cat-opt-level1` int(11) NOT NULL,
  `VI-cat-opt-level2` int(11) NOT NULL,
  `VI-cat-opt-agree` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor-form-details`
--
ALTER TABLE `visitor-form-details`
  ADD PRIMARY KEY (`VI-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visitor-form-details`
--
ALTER TABLE `visitor-form-details`
  MODIFY `VI-id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
