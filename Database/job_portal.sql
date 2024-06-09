-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2024 at 06:45 AM
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
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('tequedlabs@gmail.com', '1234'),
('', ''),
('', ''),
('nehamule@gmail.com', '6789');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `tel` varchar(12) NOT NULL,
  `age` varchar(50) NOT NULL,
  `textbox` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `tel`, `age`, `textbox`) VALUES
('khushi', '234567898', '20', 'I need an update of my job application .'),
('khushi', '234567898', '20', 'I need an update of my job application .'),
('', '', '', ''),
('', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `number` varchar(15) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `age` varchar(10) NOT NULL,
  `tenth` varchar(10) NOT NULL,
  `twelth` varchar(10) NOT NULL,
  `College` varchar(30) NOT NULL,
  `Branch` varchar(30) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `Projects` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`fname`, `lname`, `email`, `number`, `Address`, `Gender`, `age`, `tenth`, `twelth`, `College`, `Branch`, `skills`, `Projects`, `city`, `state`, `zip`) VALUES
('Khushi', 'G', 'Khushi@gmail.com', '7865435645', 'XYZ road Banglore', 'female', '22', '87', '83', 'XYZ institute', 'CSE', 'java,python,HTML,css', 'age calculator ', 'banglore', 'karnataka', '54324'),
('khushi', 'G', 'Khushi@gmail.com', '987654', 'XYZ raod banglore', 'female', '22', '86', '83', 'XYZ Institute', 'CSE', 'java,python,html', 'age calculator', 'banglore', 'karnataka', '87655'),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Maharashtra', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Maharashtra', ''),
('neha', 'mule', '', '', '', '', '', '', '', '', '', '', '', '', 'Maharashtra', '');

-- --------------------------------------------------------

--
-- Table structure for table `post_job`
--

CREATE TABLE `post_job` (
  `name` varchar(1024) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `desci` varchar(1024) NOT NULL,
  `mode` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_job`
--

INSERT INTO `post_job` (`name`, `loc`, `desci`, `mode`) VALUES
('wipro', 'banglore', 'Client Acquisition Manager Responsibilities include getting our institution students placed in good companies', 'onsite'),
('', '', '', ''),
('TCS', 'Banglore', 'sde 1', 'Remote');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
