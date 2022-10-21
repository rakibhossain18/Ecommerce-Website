-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2022 at 05:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(200) NOT NULL,
  `product_id` int(200) NOT NULL,
  `price` int(200) NOT NULL,
  `quantity` int(200) NOT NULL,
  `total` int(200) NOT NULL,
  `user_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `price`, `quantity`, `total`, `user_id`) VALUES
(54, 53, 350, 3, 1050, 28),
(55, 62, 1200, 4, 4800, 28),
(56, 49, 450, 4, 1800, 28),
(58, 52, 300, 3, 900, 25);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `ID` int(200) NOT NULL,
  `Catagory` varchar(200) NOT NULL,
  `Model_No` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ordered_products`
--

CREATE TABLE `ordered_products` (
  `id` int(200) NOT NULL,
  `quantity` int(200) NOT NULL,
  `product_id` int(200) NOT NULL,
  `user_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_price` int(200) NOT NULL,
  `status` int(200) NOT NULL,
  `memo_number` int(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `products` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_name`, `user_id`, `total_price`, `status`, `memo_number`, `address`, `mobile`, `products`) VALUES
(1, 'Rakib Hossain', 25, 9100, 0, 0, 'Nobodoy housing, Mohammadpur, Dhaka', '01934011003', ''),
(9, 'Tahzib', 28, 5900, 0, 0, ' Dhaka', '01934011445', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(200) NOT NULL,
  `Product_Name` varchar(222) NOT NULL,
  `Model_No` varchar(200) NOT NULL,
  `Product_Price` int(200) NOT NULL,
  `Category` varchar(200) NOT NULL,
  `Supplier` varchar(200) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Documentation` varchar(255) NOT NULL,
  `Prodict_Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Product_Name`, `Model_No`, `Product_Price`, `Category`, `Supplier`, `Description`, `Documentation`, `Prodict_Image`) VALUES
(44, 'DC Power Supply.  5V, 6A, SMPS', 'Elec-001', 600, 'Robotics', 'Bangladesh', '', '', 'DC-Power-Supply-5V-6A-SMPS.jpg'),
(47, ' Arduino Leonardo (China)', 'Aduino-003', 500, 'Arduino', 'China', '', '', 'Arduino-Leonardo-(China).jpg'),
(48, ' Arduino Leonardo with Headers (Original) R', 'Aduino-004', 510, 'Arduino', 'Bangladesh', '', '', 'Arduino-Leonardo-with-Headers-(Original)_R.jpg'),
(49, ' Arduino Mega Price in BD', 'Aduino-004', 450, 'Arduino', 'Bangladesh', '', '', 'Arduino-Mega-Price-in-BD.jpg'),
(51, ' Arduino Pro Mini ', 'Aduino-006', 300, 'Arduino', 'Bangladesh', '', '', 'Arduino-Pro-Mini-328---3.3V-8MHz.jpg'),
(52, ' Arduino Nano Price in BD with cable', 'Aduino-007', 300, 'Arduino', 'Bangladesh', '', '', 'Arduino-Nano-Price-in-BD-with-cable.jpg'),
(53, ' Arduino Pro Mini ATMEGA-328P, 5V, 16MHz (China)', 'Aduino-009', 350, 'Arduino', 'China', '', '', 'ArduinoProMiniATMEGA328P5V16MHz(China).jpg'),
(55, ' Complete Robot Chassis Hawk01-Black', 'Robo-001', 1300, 'Robotics', 'Bangladesh', '', '', 'Complete-Robot-Chassis-Hawk01-Black.jpg'),
(56, ' Complete Robot Chassis Hawk01-Blue', 'Robo-002', 1000, 'Robotics', 'Bangladesh', '', '', 'Complete-Robot-Chassis-Hawk01-Blue.jpg'),
(57, ' Complete Robot Chassis Hawk01-Red', 'Robo-003', 1000, 'Robotics', 'Bangladesh', '', '', 'Complete-Robot-Chassis-Hawk01-Red.jpg'),
(58, ' Complete Robot Chassis Hawk01-Yellow', 'Robo-004', 1000, 'Robotics', 'Bangladesh', '', '', 'Complete-Robot-Chassis-Hawk01-Yellow.jpg'),
(59, ' Complete Robot Chassis Racing Car', 'Robo-005', 900, 'Robotics', 'Bangladesh', '', '', 'Complete-Robot-Chassis-Racing-Car.jpg'),
(60, ' Complete Robot Chassis Tee01-Red', 'Robo-006', 1100, 'Robotics', 'Bangladesh', '', '', 'Complete-Robot-Chassis-Tee01-Red.jpg'),
(61, ' Complete Robot Chassis Tee-01', 'Robo-007', 1200, 'Robotics', 'Bangladesh', '', '', 'CompleteRobotChassisTee01Red2.jpg'),
(62, ' Complete Robot Chassis Tee01-Yellow', 'Robo-009', 1200, 'Robotics', 'Bangladesh', '', '', 'Complete-Robot-Chassis-Tee01-Yellow.jpg'),
(63, ' Complete TSB. 5-inch Robot Chassis-Blue', 'Robo-008', 1100, 'Robotics', 'USA', '', '', 'Complete-TSB-5-inch-Robot-Chassis-Blue.jpg'),
(64, ' Obstacle Tracking Robot Kit', 'Robo-010', 1000, 'Robotics', 'Bangladesh', '', '', 'ObstacleTrackingRobotKit2.jpg'),
(65, ' Raspberry Pi Model A+', 'Res-001', 4000, 'Raspberry-Pi', 'USA', '', '', 'RaspberryPi1ModelA+_1.jpg'),
(66, ' Raspberry Pi-3 Model A ', 'Res-002', 1000, 'Raspberry-Pi', 'USA', '', '', 'Raspberry-Pi-3-Model-A+---Retired.jpg'),
(67, ' Raspberry Pi4 Aluminum Case with Fan', 'Res-003', 200, 'Raspberry-Pi', 'USA', '', '', 'RaspberryPi4AluminumCasewithFan_1.jpg'),
(68, ' Raspberry Pi4 Model-B4 GB', 'Res-004', 4000, 'Raspberry-Pi', 'USA', '', '', 'RaspberryPi4ModelB4GB.jpg'),
(69, ' Raspberry Pi 4', 'Res-005', 2000, 'Raspberry-Pi', 'Bangladesh', '', '', 'Raspberry-Pi-4-Price-in-BD_1.jpg'),
(70, ' Raspberry Pi 4 RAM', 'Res-006', 2000, 'Raspberry-Pi', 'Bangladesh', '', '', 'Raspberry-Pi-4-Price-in-BD-RAM.jpg'),
(71, ' Raspberry Pi Accessories Pack', 'Res-008', 3000, 'Raspberry-Pi', 'USA', '', '', 'Raspberry-Pi-Accessories-Pack-B-2.jpg'),
(72, ' Raspberry Pi Camera V2', 'Res-009', 1000, 'Raspberry-Pi', 'USA', '', '', 'Raspberry-Pi-Camera-V2_1.jpg'),
(73, ' Soldering Iron-30 watt-12v 3s XT60 Plug', 'Tool-001', 200, 'Tools', 'Bangladesh', '', '', 'Soldering-Iron-30watt-12v-3s-XT60-Plug.jpg'),
(74, ' Soldering Iron Stand', 'Tool-002', 50, 'Tools', 'Bangladesh', '', '', 'Soldering-Iron-Stand.jpg'),
(75, ' Soldering Kit', 'Tool-003', 1000, 'Tools', 'Bangladesh', '', '', 'Soldering-Kit-001.jpg'),
(76, ' Solder Sucker (366-D)', 'Tool-004', 200, 'Tools', 'Bangladesh', '', '', 'Solder-Sucker-(366-D)_2.jpg'),
(77, ' Solder Lead (Mini)', 'Tool-005', 30, 'Tools', 'Bangladesh', '', '', 'Solder-Lead-Mini.jpg'),
(78, ' Soldering Kit', 'Tool-006', 1200, 'Tools', 'Bangladesh', '', '', 'SolderingKit2.jpg'),
(79, ' Wheel Hexa Connector 4mm', 'Tool-007', 50, 'Tools', 'Bangladesh', '', '', 'WheelHexaConnector4mm.jpg'),
(80, ' Wire Cutter 5inch (Plato)', 'Tool-008', 100, 'Tools', 'Bangladesh', '', '', 'WireCutter5inch(Plato).jpg'),
(81, ' Tube for DC 12V Submersible Pump (1ft)', 'Tool-009', 40, 'Tools', 'Bangladesh', '', '', 'Tube-for-DC-12V-Submersible-Pump-(1ft).jpg'),
(82, ' Wire Cutter with Stripper', 'Tool-010', 200, 'Robotics', 'Bangladesh', '', '', 'Wire-Cutter-with-Stripper.jpg'),
(83, ' Breadboard Jumper Wire Pack (65Pcs)', 'Starter-001', 1000, 'Starter', 'Bangladesh', '', '', 'BreadboardJumperWirePack(65Pcs)1.jpg'),
(84, ' Breadboard Giant (China)', 'Starter-001', 200, 'Robotics', 'Bangladesh', '', '', 'Breadboard-Giant(China).jpg'),
(85, ' Breadboard', 'Starter-003', 100, 'Starter', 'Bangladesh', '', '', 'BreadboardClear(400Point).jpg'),
(86, ' Beginner Kit for Arduino (Best-Starter-Kit)', 'Starter-004', 1200, 'Starter', 'Bangladesh', '', '', 'Beginner-Kit-for-Arduino-(Best-Starter-Kit).jpg'),
(87, ' Battery 9V', 'Starter-005', 20, 'Starter', 'Bangladesh', '', '', 'Battery-9V-1.jpg'),
(89, ' basickit', 'Starter-007', 400, 'Starter', 'Bangladesh', '', '', 'basickit4.jpg'),
(90, ' basickit', 'Starter-008', 500, 'Starter', 'Bangladesh', '', '', 'basickit1.jpg'),
(91, ' basickit', 'Starter-009', 500, 'Starter', 'Bangladesh', '', '', 'basickit6.jpg'),
(92, ' Basic Robot Chassis Tee', 'Starter-010', 1000, 'Starter', 'Bangladesh', '', '', 'Robot-Chassis-Tee01-Yellow.jpg'),
(93, ' Wireless Programming, Communication Shield', 'WIreless-001', 1000, 'Wireless', 'USA', '', '', 'Wireless-Programming-_-Communication-Shield.jpg'),
(94, ' RF-433 MHz 4 Channel Wireless Relay Module-1', 'WIreless-002', 500, 'Wireless', 'USA', '', '', 'RF-433MHz-4-Channel-Wireless-Relay-Module-1-(1).jpg'),
(95, ' Wireless Programming, Communication Shield-Green', 'WIreless-003', 1000, 'Wireless', 'USA', '', '', 'Wireless-Programming-_-Communication-Shield---Green.jpg'),
(96, ' RFID Starter Kit', 'WIreless-004', 500, 'Wireless', 'USA', '', '', 'RFID-Starter-Kit.jpg'),
(97, ' 1956 - 4 Button RF Remote (315-MHz)', 'WIreless-005', 500, 'Wireless', 'USA', '', '', '1956-4-Button-RF-Remote-(315-MHz)-2.jpg'),
(98, ' RFID Tag 1356 Mhz', 'WIreless-006', 100, 'Wireless', 'USA', '', '', 'RFID-Tag-1356Mhz1.jpg'),
(99, ' RF Wireless Encoder Decoder Module 433 MHz-Retired', 'WIreless-007', 500, 'Wireless', 'USA', '', '', 'RFWirelessEncoderDecoderModule433MHz-Retired3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `recovary_otp`
--

CREATE TABLE `recovary_otp` (
  `id` int(200) NOT NULL,
  `otp` int(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recovary_otp`
--

INSERT INTO `recovary_otp` (`id`, `otp`, `phone`, `create_at`) VALUES
(24, 213727, '01934011003', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `submit_otp`
--

CREATE TABLE `submit_otp` (
  `id` int(200) NOT NULL,
  `otp` int(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submit_otp`
--

INSERT INTO `submit_otp` (`id`, `otp`, `phone`, `create_at`) VALUES
(41, 0, '01934011003', '0000-00-00 00:00:00'),
(42, 0, '01934011003', '0000-00-00 00:00:00'),
(43, 0, '01934011004', '0000-00-00 00:00:00'),
(44, 0, '01934011004', '0000-00-00 00:00:00'),
(45, 0, '01934011225', '0000-00-00 00:00:00'),
(46, 0, '01934011052', '0000-00-00 00:00:00'),
(47, 0, '01934011332', '0000-00-00 00:00:00'),
(48, 0, '01934011001', '0000-00-00 00:00:00'),
(49, 0, '01934011001', '0000-00-00 00:00:00'),
(50, 0, '01934011001', '0000-00-00 00:00:00'),
(51, 0, '01934011334', '0000-00-00 00:00:00'),
(52, 0, '01934011001', '0000-00-00 00:00:00'),
(53, 0, '01934011001', '0000-00-00 00:00:00'),
(54, 0, '01934011001', '0000-00-00 00:00:00'),
(55, 0, '01934011001', '0000-00-00 00:00:00'),
(56, 0, '01934011009', '0000-00-00 00:00:00'),
(57, 0, '01934011003222', '0000-00-00 00:00:00'),
(58, 0, '01934011011', '0000-00-00 00:00:00'),
(59, 0, '01934011022', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Phone` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `User_Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Name`, `Phone`, `Email`, `Password`, `User_Address`) VALUES
(25, 'Rakib Hasan', '01934011004', 'u1808039@student.cuet.ac.bd', '$2y$10$OzbRbc37Fw9UAjrAVppLOOxnYUZxDaWxM3j8QQaTSwCmufSlGCyqS', ''),
(28, 'Tahzib Tazwar', '01934011332', 'u1808052@student.cuet.ac.bd', '$2y$10$0rIqHucLehvIrRqbvR/mGOGCRNFRA38jhOe2CZriWO0rmJ7DgBgE.', '');

-- --------------------------------------------------------

--
-- Table structure for table `wish`
--

CREATE TABLE `wish` (
  `id` int(200) NOT NULL,
  `product_id` int(200) NOT NULL,
  `user_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wish`
--

INSERT INTO `wish` (`id`, `product_id`, `user_id`) VALUES
(100, 63, 25),
(103, 52, 25),
(104, 53, 25),
(105, 82, 25),
(106, 64, 25),
(107, 47, 25),
(108, 98, 25),
(109, 68, 25),
(110, 84, 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ordered_products`
--
ALTER TABLE `ordered_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `recovary_otp`
--
ALTER TABLE `recovary_otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit_otp`
--
ALTER TABLE `submit_otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wish`
--
ALTER TABLE `wish`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ordered_products`
--
ALTER TABLE `ordered_products`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `recovary_otp`
--
ALTER TABLE `recovary_otp`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `submit_otp`
--
ALTER TABLE `submit_otp`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `wish`
--
ALTER TABLE `wish`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
