-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2023 at 11:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grs`
--

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE `project_images` (
  `id_pi` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_project` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_images`
--

INSERT INTO `project_images` (`id_pi`, `image`, `id_project`) VALUES
(1, 'RS EMC Sentul_DSC0002-HDR.jpg', 17),
(2, 'RS EMC Sentul_DSC0118.jpg', 17),
(3, 'RS EMC Sentul_DSC0441-HDR.jpg', 17),
(4, 'RS EMC Sentul_DSC0255-HDR.jpg', 17),
(5, 'RS EMC Sentul_DSC0150.jpg', 17),
(6, 'BEC_DSC0086-HDR.jpg', 19),
(7, 'BEC_DSC0550.jpg', 19),
(8, 'BEC_DSC0613.jpg', 19),
(9, 'BEC_DSC0768.jpg', 19),
(10, 'RS Kariadi Pav Garuda2_DSC0074.jpg', 21),
(11, 'RS Kariadi Pav Garuda2_DSC0076-Pano.jpg', 21),
(12, 'RS Kariadi Pav Garuda2_DSC0446.jpg', 21),
(13, 'RS Kariadi Pav Garuda2_DSC0165.jpg', 21),
(14, 'RS Kariadi Pav Garuda2_DSC0107.jpg', 21),
(15, 'RS Mardi Rahayu Kudus_DSC0169.jpg', 23),
(16, 'RS Mardi Rahayu Kudus_DSC0231.jpg', 23),
(17, 'RS Mardi Rahayu Kudus_DSC0608.jpg', 23),
(18, 'RS Mardi Rahayu Kudus_DSC0741a.jpg', 23),
(19, 'RS Mardi Rahayu Kudus_DSC0767.jpg', 23),
(20, 'RS Palang Biru Gombong_0003-HDR-2.jpg', 20),
(21, 'RS Palang Biru Gombong_DSC0136-HDR.jpg', 20),
(22, 'RS Palang Biru Gombong_DSC0159-HDR.jpg', 20),
(23, 'RS Palang Biru Gombong_DSC0193.jpg', 20),
(24, 'RS Palang Biru Gombong_DSC0214.jpg', 20),
(25, 'RS_Bethesda1_DSC0370.jpg', 18),
(26, 'RS_Bethesda1_DSC0439.jpg', 18),
(27, 'RS_Bethesda1_DSC0496.jpg', 18),
(28, 'RS_Bethesda2_DSC0613.jpg', 18),
(29, 'RS_Bethesda2_DSC0655.jpg', 18),
(30, 'RSI_Klaten_DJI_0182.jpg', 22),
(31, 'RSI_Klaten_DJI_0187a.jpg', 22),
(32, 'RSI_Klaten_DSC0120.jpg', 22),
(33, 'RSI_Klaten_DSC0243.jpg', 22),
(34, 'RSI_Klaten_DSC0286-HDR.jpg', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id_pi`),
  ADD KEY `project_image_ibfk_1` (`id_project`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id_pi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project_images`
--
ALTER TABLE `project_images`
  ADD CONSTRAINT `project_images_ibfk_1` FOREIGN KEY (`id_project`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
