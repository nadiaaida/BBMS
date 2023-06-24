-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Feb 17, 2023 at 09:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `adminName` varchar(250) DEFAULT NULL,
  `adminEmail` varchar(250) DEFAULT NULL,
  `adminPassword` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminName`, `adminEmail`, `adminPassword`) VALUES
(1, 'Aida Nadia', 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bloodstock`
--

CREATE TABLE `bloodstock` (
  `bloodID` int(10) NOT NULL,
  `bloodSeriesNo` varchar(250) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `amount` varchar(250) DEFAULT NULL,
  `dateExpire` int(15) DEFAULT NULL,
  `bloodType` varchar(20) DEFAULT NULL,
  `staffID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodstock`
--

INSERT INTO `bloodstock` (`bloodID`, `bloodSeriesNo`, `description`, `amount`, `dateExpire`, `bloodType`, `staffID`) VALUES
(1, 'A01', 'Needed', '150', 2025, 'A+', 0),
(4, 'A02', 'Needed', '150', 2025, 'A-', 0),
(5, 'A03', 'Needed', '150', 2025, 'B+', 0),
(2, 'AB01', 'Needed', '150', 2025, 'B-', 0),
(6, 'AB02', 'Needed', '150', 2025, 'AB+', 0),
(3, 'O01', 'Needed', '150', 2025, 'AB-', 0);

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `cmpID` int(11) NOT NULL,
  `cmpName` varchar(100) NOT NULL,
  `cmpDate` date NOT NULL,
  `cmpTime` time NOT NULL,
  `cmpLocation` varchar(100) NOT NULL,
  `cmpDesc` varchar(500) NOT NULL,
  `staffID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`cmpID`, `cmpName`, `cmpDate`, `cmpTime`, `cmpLocation`, `cmpDesc`, `staffID`) VALUES
(1, 'Blood Donation XX', '2023-01-12', '00:00:12', 'Johor', 'derma darah', 0);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donateID` int(11) NOT NULL,
  `donateDate` date DEFAULT NULL,
  `donateType` varchar(50) DEFAULT NULL,
  `lastDonateDate` date DEFAULT NULL,
  `donateQty` varchar(50) DEFAULT NULL,
  `eligibility` varchar(50) DEFAULT NULL,
  `bloodPressure` float DEFAULT NULL,
  `donorType` varchar(100) NOT NULL,
  `platelet` varchar(100) NOT NULL,
  `hemoglobin` varchar(100) NOT NULL,
  `donationType` varchar(100) NOT NULL,
  `reason` varchar(250) NOT NULL,
  `donorID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donateID`, `donateDate`, `donateType`, `lastDonateDate`, `donateQty`, `eligibility`, `bloodPressure`, `donorType`, `platelet`, `hemoglobin`, `donationType`, `reason`, `donorID`) VALUES
(1, '2022-11-10', 'Whole blood', '2022-08-02', '2 packs', '', 120, '', '', '', '', '', 1),
(2, '2022-11-13', 'Whole blood', '2022-06-21', '1 pack', '', 110, '', '', '', '', '', 2),
(3, '2022-11-26', 'Whole blood', '2022-03-01', '1 pack', '', 80, '', '', '', '', '', 0),
(4, '2022-12-14', 'Plasma', '2022-09-08', '1 pack', '', 125, '', '', '', '', '', 3),
(5, '2023-01-09', 'Whole Blood', '2022-06-23', '2 packs', '', 100, '', '', '', '', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donorID` int(11) NOT NULL,
  `donorName` varchar(250) DEFAULT NULL,
  `donorEmail` varchar(250) DEFAULT NULL,
  `donorPassword` varchar(250) DEFAULT NULL,
  `donorIC` varchar(12) DEFAULT NULL,
  `donorBirthDate` varchar(20) DEFAULT NULL,
  `donorAge` varchar(255) DEFAULT NULL,
  `donorRace` mediumtext DEFAULT NULL,
  `donorGender` varchar(255) DEFAULT NULL,
  `marriageStatus` varchar(255) DEFAULT NULL,
  `donorJob` varchar(250) DEFAULT NULL,
  `donorPhone` varchar(12) DEFAULT NULL,
  `donorAddress` varchar(250) DEFAULT NULL,
  `donorState` varchar(250) DEFAULT NULL,
  `donorPoscode` varchar(250) DEFAULT NULL,
  `staffID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donorID`, `donorName`, `donorEmail`, `donorPassword`, `donorIC`, `donorBirthDate`, `donorAge`, `donorRace`, `donorGender`, `marriageStatus`, `donorJob`, `donorPhone`, `donorAddress`, `donorState`, `donorPoscode`, `staffID`) VALUES
(1, 'Nadia', 'aidaferuz@gmail.com', '$2y$10$NrTpLdv9i4g.gzKDeshi6.DoD1iyI/dzCLX/P20JJz8', '123010808', '0000-00-00', '22', 'Malay', '', '', 'Student', '0', '', '', '0', 0),
(2, 'Siti', 'siti@gmail.com', '$2y$10$FVzng3aYNY6P5gct7q1nXu5dqPyPPR6sH7CX5oMT3ky', '2147483647', '0000-00-00', '0', '', '', '', '', '0', '', '', '0', 0),
(3, 'ahmad', 'ahmad@gmail.com', '$2y$10$Dqp8yJLCroDyKRFSXUkV0OFDzPeaQkYvv0S6by5TKPH', '2147483647', '0000-00-00', '0', '', '', '', '', '0', '', '', '0', 0),
(4, 'ayam', 'ayam@gmail.com', '123', '2147483647', '0000-00-00', '0', '', '', '', '', '0', '', '', '0', 0),
(5, 'Laila Mamat', 'laila@gmail.com', '123', '2147483647', '0000-00-00', '0', '', '', '', '', '192837465', '', '', '0', 0),
(6, 'Aqilah', 'aqilah@gmail.com', '123', '2147483647', '0000-00-00', '0', '', '', '', '', '1236284995', '', '', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `medicalrecord`
--

CREATE TABLE `medicalrecord` (
  `medicalID` int(11) NOT NULL,
  `donorWeight` int(50) NOT NULL,
  `bloodType` varchar(10) NOT NULL,
  `medicine` varchar(100) NOT NULL,
  `sexualActivities` varchar(100) NOT NULL,
  `medicalIllness` varchar(100) NOT NULL,
  `dental` varchar(100) NOT NULL,
  `surgery` varchar(100) NOT NULL,
  `bloodTransfusion` varchar(100) NOT NULL,
  `otherMedical` varchar(100) NOT NULL,
  `donorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffID` int(11) NOT NULL,
  `staffName` varchar(100) DEFAULT NULL,
  `staffEmail` varchar(100) DEFAULT NULL,
  `staffPassword` varchar(50) DEFAULT NULL,
  `staffPhone` varchar(15) DEFAULT NULL,
  `staffPosition` varchar(100) DEFAULT NULL,
  `staffDepartment` varchar(100) DEFAULT NULL,
  `adminID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffID`, `staffName`, `staffEmail`, `staffPassword`, `staffPhone`, `staffPosition`, `staffDepartment`, `adminID`) VALUES
(1, 'Syahiran', 'syah@gmail.com', '123', '123456789', 'Medical Assistant', 'Anaestesiology', 0),
(2, 'Azizan', 'azizan@gmail.com', '123', '198765432', 'Officer', 'Blood Unit', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `bloodstock`
--
ALTER TABLE `bloodstock`
  ADD PRIMARY KEY (`bloodSeriesNo`),
  ADD KEY `staffID` (`staffID`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`cmpID`),
  ADD KEY `staffID` (`staffID`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donateID`),
  ADD UNIQUE KEY `donorID` (`donorID`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donorID`),
  ADD KEY `staffID` (`staffID`);

--
-- Indexes for table `medicalrecord`
--
ALTER TABLE `medicalrecord`
  ADD PRIMARY KEY (`medicalID`),
  ADD KEY `donorID` (`donorID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffID`),
  ADD KEY `adminID` (`adminID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `cmpID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donateID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medicalrecord`
--
ALTER TABLE `medicalrecord`
  MODIFY `medicalID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
