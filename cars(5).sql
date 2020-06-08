-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 27, 2020 at 07:14 PM
-- Server version: 8.0.17
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aac`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `carid` int(255) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `model` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `variants` enum('Top','Mid','Base') COLLATE utf8mb4_general_ci NOT NULL,
  `mileage` float NOT NULL,
  `body_type` enum('Hactchback','Sedan','SUV','Van') COLLATE utf8mb4_general_ci NOT NULL,
  `power` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `boot_space` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `cc` int(50) NOT NULL,
  `fuel_type` enum('Petrol','Diesel') COLLATE utf8mb4_general_ci NOT NULL,
  `seating_capacity` int(50) NOT NULL,
  PRIMARY KEY (`carid`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carid`, `brand_name`, `model`, `variants`, `mileage`, `body_type`, `power`, `boot_space`, `price`, `cc`, `fuel_type`, `seating_capacity`) VALUES
(1, 'Maruti Suzuki', 'Alto', 'Top', 22, 'Hactchback', '47', 177, 394000, 790, 'Petrol', 5),
(2, 'Maruti Suzuki', 'Alto', 'Mid', 22, 'Hactchback', '47', 177, 352000, 796, 'Petrol', 5),
(3, 'Maruti Suzuki', 'Alto', 'Base', 22, 'Hactchback', '47', 177, 294000, 796, 'Petrol', 5),
(4, 'Maruti Suzuki', 'Wagon-R', 'Top', 20, 'Hactchback', '81', 341, 465000, 1197, 'Petrol', 5),
(5, 'Maruti Suzuki', 'Wagon-R', 'Mid', 20, 'Hactchback', '81', 341, 450000, 1197, 'Petrol', 5),
(6, 'Maruti Suzuki', 'Wagon-R', 'Base', 20, 'Hactchback', '81', 341, 425000, 1197, 'Petrol', 5),
(7, 'Maruti Suzuki', 'Swift', 'Top', 21, 'Hactchback', '81', 268, 850000, 1197, 'Petrol', 5),
(8, 'Maruti Suzuki', 'Swift', 'Mid', 21, 'Hactchback', '81', 268, 540000, 1197, 'Petrol', 5),
(9, 'Maruti Suzuki', 'Swift', 'Base', 21, 'Hactchback', '81', 268, 440000, 1197, 'Petrol', 5),
(10, 'Maruti Suzuki', 'Ciaz', 'Top', 20, 'Sedan', '103', 510, 1100000, 1462, 'Petrol', 5),
(11, 'Maruti Suzuki', 'Ciaz', 'Mid', 20, 'Sedan', '103', 510, 950000, 1462, 'Petrol', 5),
(12, 'Maruti Suzuki', 'Ciaz', 'Base', 20, 'Sedan', '103', 510, 850000, 1462, 'Petrol', 5),
(13, 'Honda', 'Amaze', 'Top', 24, 'Sedan', '78', 420, 875000, 1498, 'Petrol', 5),
(14, 'Honda', 'Amaze', 'Mid', 24, 'Sedan', '78', 420, 834000, 1498, 'Petrol', 5),
(15, 'Honda', 'Amaze', 'Base', 24, 'Sedan', '78', 420, 775000, 1498, 'Petrol', 5),
(16, 'Honda', 'City', 'Base', 17, 'Sedan', '117', 510, 991000, 1497, 'Petrol', 5),
(17, 'Honda', 'City', 'Mid', 17, 'Sedan', '117', 510, 1110000, 1497, 'Petrol', 5),
(18, 'Honda', 'City', 'Top', 17, 'Sedan', '117', 510, 1410000, 1497, 'Petrol', 5),
(19, 'Honda', 'BR-V', 'Top', 21, 'SUV', '98', 610, 1510000, 1498, 'Diesel', 5),
(20, 'Honda', 'BR-V', 'Mid', 21, 'SUV', '98', 610, 1410000, 1498, 'Diesel', 5),
(21, 'Honda', 'BR-V', 'Base', 21, 'SUV', '98', 610, 1382000, 1498, 'Diesel', 5),
(22, 'Honda', 'Accord', 'Top', 23, 'Sedan', '121', 580, 4334000, 1510, 'Petrol', 5),
(23, 'Honda', 'Accord', 'Mid', 23, 'Sedan', '121', 580, 4234000, 1510, 'Petrol', 5),
(24, 'Honda', 'Accord', 'Base', 23, 'Sedan', '121', 580, 4214000, 1510, 'Petrol', 5),
(25, 'Hyundai', 'Eon', 'Top', 21, 'Hactchback', '55', 350, 440000, 814, 'Petrol', 5),
(27, 'Hyundai', 'Eon', 'Base', 21, 'Hactchback', '55', 350, 350000, 814, 'Petrol', 5),
(28, 'Hyundai', 'Eon', 'Mid', 21, 'Hactchback', '55', 350, 410000, 814, 'Petrol', 5),
(29, 'Hyundai', 'i10', 'Top', 18, 'Hactchback', '81', 256, 599000, 1197, 'Petrol', 5),
(30, 'Hyundai', 'i10', 'Mid', 18, 'Hactchback', '81', 256, 555000, 1197, 'Petrol', 5),
(31, 'Hyundai', 'i10', 'Base', 18, 'Hactchback', '81', 256, 545000, 1197, 'Petrol', 5),
(32, 'Hyundai', 'Verna', 'Top', 21, 'Sedan', '113', 480, 1390000, 1493, 'Petrol', 5),
(33, 'Hyundai', 'Verna', 'Mid', 21, 'Sedan', '113', 480, 1195000, 1493, 'Petrol', 5),
(34, 'Hyundai', 'Verna', 'Base', 21, 'Sedan', '113', 480, 1065000, 1493, 'Petrol', 5),
(35, 'Hyundai', 'Creta', 'Top', 18, 'SUV', '113', 433, 1720000, 1493, 'Diesel', 5),
(36, 'Hyundai', 'Creta', 'Mid', 18, 'SUV', '113', 433, 1494000, 1493, 'Diesel', 5),
(37, 'Hyundai', 'Creta', 'Base', 18, 'SUV', '113', 433, 994000, 1493, 'Diesel', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
