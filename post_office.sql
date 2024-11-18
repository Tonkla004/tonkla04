-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2024 at 04:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `post_office`
--

-- --------------------------------------------------------

--
-- Table structure for table `aviation`
--

CREATE TABLE `aviation` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `name_l` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `name_2` varchar(255) NOT NULL,
  `name_l2` varchar(255) NOT NULL,
  `phone2` varchar(200) NOT NULL,
  `province` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `sub_district` varchar(255) NOT NULL,
  `house_number` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `address_details` varchar(255) NOT NULL,
  `date2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `aviation`
--

INSERT INTO `aviation` (`id`, `name`, `name_l`, `phone`, `message`, `date`, `name_2`, `name_l2`, `phone2`, `province`, `district`, `sub_district`, `house_number`, `zip_code`, `address_details`, `date2`) VALUES
(1, 'นาย ทนงทวย', 'คงควรคอย', '047-667-9145', 'yoooo', '2024-11-18', 'นาง สมศรี', 'หมีสว่าง', '078-456-3698', 'ขอนแก่น', 'อำเภอเมืองราชบุรี', 'ดอนคลัง', '789', '70130', 'ไม่มีอะ555', '2024-11-28'),
(2, 'นาย บังไข่', 'คงควรคอย', '047-667-9145', 'yooooyy', '2024-11-18', 'นาง สมศักริ์', 'ละวางงงงงงงงง', '078-456-1478', 'บุรีรัมย์', 'อำเภอวัดเพลง', 'ดอนไผ่', '789', '70130', 'ไม่มีอะ55500000', '2024-11-30'),
(3, 'นาย สมชาย', 'พิฆาตรศัตรู', '047-667-9145', 'rtx4090', '2024-11-18', 'นาง สมมาตร', 'อะไรวะ', '014-569-9874', 'ยโสธร', 'อำเภอเมืองราชบุรี', 'ศรีสุราษฎร์', '123', '70130', 'ไม่มีอะ555', '2024-11-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aviation`
--
ALTER TABLE `aviation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aviation`
--
ALTER TABLE `aviation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
