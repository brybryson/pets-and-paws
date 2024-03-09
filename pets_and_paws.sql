-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 07:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pets_and_paws`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_rescue`
--

CREATE TABLE `address_rescue` (
  `address_id` int(11) NOT NULL,
  `adopter_id` int(11) DEFAULT NULL,
  `HouseNoBlk` varchar(100) DEFAULT NULL,
  `Street` varchar(100) DEFAULT NULL,
  `Subdivision` varchar(50) DEFAULT NULL,
  `Barangay` varchar(20) DEFAULT NULL,
  `CityMunicipality` varchar(100) DEFAULT NULL,
  `Province` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `address_tbl`
--

CREATE TABLE `address_tbl` (
  `address_id` int(11) NOT NULL,
  `adopter_id` int(11) DEFAULT NULL,
  `HouseNoBlk` varchar(100) DEFAULT NULL,
  `Street` varchar(100) DEFAULT NULL,
  `Subdivision` varchar(50) DEFAULT NULL,
  `Barangay` varchar(20) DEFAULT NULL,
  `CityMunicipality` varchar(100) DEFAULT NULL,
  `Province` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address_tbl`
--

INSERT INTO `address_tbl` (`address_id`, `adopter_id`, `HouseNoBlk`, `Street`, `Subdivision`, `Barangay`, `CityMunicipality`, `Province`) VALUES
(40, NULL, '', '', '', '', '', NULL),
(41, NULL, 'New york', 'Baclaran', 'Subiay', 'Datu Puti', 'newyork cubao', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `adoption_information`
--

CREATE TABLE `adoption_information` (
  `adopter_id` int(11) NOT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `MiddleName` varchar(50) DEFAULT NULL,
  `SuffixName` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `Sex` varchar(50) DEFAULT NULL,
  `PhoneNumber` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adoption_information`
--

INSERT INTO `adoption_information` (`adopter_id`, `LastName`, `FirstName`, `MiddleName`, `SuffixName`, `email`, `DateOfBirth`, `Sex`, `PhoneNumber`) VALUES
(71, 'qwe', 'qwe', 'qwe', 'qweqwe', 'qwe', '2024-01-31', 'qwe', 2147483647),
(72, 'quintos', 'kyle', 'quintos', 'pogi', 'burat@gmail.com', '2024-02-13', 'no po', 123123123);

-- --------------------------------------------------------

--
-- Table structure for table `num4`
--

CREATE TABLE `num4` (
  `id` int(11) NOT NULL,
  `type_of_housing` enum('own housing','rent house','rent apartment') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `occupation`
--

CREATE TABLE `occupation` (
  `occupation_id` int(11) NOT NULL,
  `adopter_id` int(11) NOT NULL,
  `Company` varchar(100) DEFAULT NULL,
  `NatureOfWork` varchar(100) DEFAULT NULL,
  `MonthlySalary` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `occupation`
--

INSERT INTO `occupation` (`occupation_id`, `adopter_id`, `Company`, `NatureOfWork`, `MonthlySalary`) VALUES
(55, 71, '', '', NULL),
(56, 72, 'accc', 'qwe', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pet_information`
--

CREATE TABLE `pet_information` (
  `pet_info_id` int(11) NOT NULL,
  `pet_rescue_info_id` int(11) DEFAULT NULL,
  `Type_of_Pet` varchar(100) DEFAULT NULL,
  `Animal_Breed` varchar(100) DEFAULT NULL,
  `Color` varchar(50) DEFAULT NULL,
  `Sex` varchar(20) DEFAULT NULL,
  `Weight` int(11) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pet_information`
--

INSERT INTO `pet_information` (`pet_info_id`, `pet_rescue_info_id`, `Type_of_Pet`, `Animal_Breed`, `Color`, `Sex`, `Weight`, `Description`) VALUES
(1, NULL, '', '', '', '', 0, ''),
(2, NULL, 'Cerberus', 'Tagalog', 'white', 'haha', 123, 'POgi sya');

-- --------------------------------------------------------

--
-- Table structure for table `pet_rescue_information`
--

CREATE TABLE `pet_rescue_information` (
  `pet_rescue_info_id` int(11) NOT NULL,
  `PetType` varchar(100) DEFAULT NULL,
  `PetColor` varchar(100) DEFAULT NULL,
  `PetSex` varchar(50) DEFAULT NULL,
  `Location` varchar(100) DEFAULT NULL,
  `PetCondition` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rescue_form`
--

CREATE TABLE `rescue_form` (
  `rescue_id` int(11) NOT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `MiddleName` varchar(50) DEFAULT NULL,
  `SuffixName` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `PhoneNumber` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_rescue`
--
ALTER TABLE `address_rescue`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `adopter_id` (`adopter_id`);

--
-- Indexes for table `address_tbl`
--
ALTER TABLE `address_tbl`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `adopter_id` (`adopter_id`);

--
-- Indexes for table `adoption_information`
--
ALTER TABLE `adoption_information`
  ADD PRIMARY KEY (`adopter_id`);

--
-- Indexes for table `num4`
--
ALTER TABLE `num4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occupation`
--
ALTER TABLE `occupation`
  ADD PRIMARY KEY (`occupation_id`),
  ADD KEY `adopter_id` (`adopter_id`);

--
-- Indexes for table `pet_information`
--
ALTER TABLE `pet_information`
  ADD PRIMARY KEY (`pet_info_id`),
  ADD KEY `pet_rescue_info_id` (`pet_rescue_info_id`);

--
-- Indexes for table `pet_rescue_information`
--
ALTER TABLE `pet_rescue_information`
  ADD PRIMARY KEY (`pet_rescue_info_id`);

--
-- Indexes for table `rescue_form`
--
ALTER TABLE `rescue_form`
  ADD PRIMARY KEY (`rescue_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_rescue`
--
ALTER TABLE `address_rescue`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `address_tbl`
--
ALTER TABLE `address_tbl`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `adoption_information`
--
ALTER TABLE `adoption_information`
  MODIFY `adopter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `num4`
--
ALTER TABLE `num4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `occupation`
--
ALTER TABLE `occupation`
  MODIFY `occupation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `pet_information`
--
ALTER TABLE `pet_information`
  MODIFY `pet_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pet_rescue_information`
--
ALTER TABLE `pet_rescue_information`
  MODIFY `pet_rescue_info_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rescue_form`
--
ALTER TABLE `rescue_form`
  MODIFY `rescue_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address_rescue`
--
ALTER TABLE `address_rescue`
  ADD CONSTRAINT `address_rescue_ibfk_1` FOREIGN KEY (`adopter_id`) REFERENCES `adoption_information` (`adopter_id`);

--
-- Constraints for table `address_tbl`
--
ALTER TABLE `address_tbl`
  ADD CONSTRAINT `address_tbl_ibfk_1` FOREIGN KEY (`adopter_id`) REFERENCES `adoption_information` (`adopter_id`);

--
-- Constraints for table `occupation`
--
ALTER TABLE `occupation`
  ADD CONSTRAINT `occupation_ibfk_1` FOREIGN KEY (`adopter_id`) REFERENCES `adoption_information` (`adopter_id`);

--
-- Constraints for table `pet_information`
--
ALTER TABLE `pet_information`
  ADD CONSTRAINT `pet_information_ibfk_1` FOREIGN KEY (`pet_rescue_info_id`) REFERENCES `pet_rescue_information` (`pet_rescue_info_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

