-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2026 at 03:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_document_request`
--

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `document_ID` int(11) NOT NULL,
  `document_type` varchar(100) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`document_ID`, `document_type`, `price`) VALUES
(1, 'Barangay Clearance', 0),
(2, 'Certificate of Indigency', 0),
(3, 'Certificate of Residency', 0),
(4, 'Certificate of Relationship', 0),
(5, 'Birth Registration', 0);

-- --------------------------------------------------------

--
-- Table structure for table `document_request`
--

CREATE TABLE `document_request` (
  `request_ID` int(11) NOT NULL,
  `resident_ID` int(11) NOT NULL,
  `document_ID` int(11) NOT NULL,
  `contact` int(15) NOT NULL,
  `document_purpose` text NOT NULL,
  `date` date NOT NULL,
  `status` enum('Pending','Processing','Ready','Released','Canceled') NOT NULL DEFAULT 'Pending',
  `date_released` int(11) NOT NULL,
  `age` int(50) NOT NULL,
  `length_stay_years` int(11) NOT NULL,
  `length_stay_months` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `document_request`
--

INSERT INTO `document_request` (`request_ID`, `resident_ID`, `document_ID`, `contact`, `document_purpose`, `date`, `status`, `date_released`, `age`, `length_stay_years`, `length_stay_months`, `quantity`) VALUES
(1, 101, 1, 0, 'Job application\r\n', '2026-02-26', 'Pending', 0, 0, 0, 0, 0),
(2, 102, 2, 0, 'Scholarship application\r\n', '2026-02-27', 'Pending', 0, 0, 0, 0, 0),
(3, 103, 3, 0, 'Business transaction\r\n', '2026-02-28', 'Pending', 0, 0, 0, 0, 0),
(4, 104, 4, 0, 'Visa application\r\n', '2026-02-28', 'Pending', 0, 0, 0, 0, 0),
(5, 105, 5, 0, 'Passport application', '2026-03-01', 'Pending', 0, 0, 0, 0, 0),
(6, 106, 1, 0, 'Business permit', '2026-03-01', 'Pending', 0, 0, 0, 0, 0),
(7, 107, 1, 0, 'Opening bank account', '2026-03-01', 'Pending', 0, 0, 0, 0, 0),
(8, 108, 2, 0, 'For medical assistance', '2026-03-01', 'Pending', 0, 0, 0, 0, 0),
(9, 109, 5, 0, 'School enrollment of child', '2026-03-02', 'Pending', 0, 0, 0, 0, 0),
(10, 110, 3, 0, 'Bank loan', '2026-03-02', 'Pending', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `resident_information`
--

CREATE TABLE `resident_information` (
  `resident_ID` int(15) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `middle_initial` varchar(20) NOT NULL,
  `sex` char(1) NOT NULL,
  `birthdate` date NOT NULL,
  `birthplace` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `resident_information`
--

INSERT INTO `resident_information` (`resident_ID`, `first_name`, `last_name`, `middle_initial`, `sex`, `birthdate`, `birthplace`) VALUES
(101, 'Juan', 'Cruz', 'D', 'M', '2002-05-14', ''),
(102, 'Maria', 'Reyes', 'S', 'F', '1995-11-23', ''),
(103, 'Jose', 'Garcia', 'M', 'M', '1988-02-10', ''),
(104, 'Ana', 'Mendoza', 'L', 'F', '1999-07-08', ''),
(105, 'Mark', 'Villanueva', 'T', 'M', '1994-09-19', ''),
(106, 'Sofia', 'Hernandez', 'R', 'F', '2001-03-27', ''),
(107, 'Carlos', 'Lopez', 'E', 'M', '1992-07-15', ''),
(108, 'Elena', 'Martinez', 'A', 'F', '1998-12-08', ''),
(109, 'Diego', 'Rodriguez', 'P', 'M', '1996-06-22', ''),
(110, 'Isabella', 'Sanchez', 'C', 'F', '2000-09-11', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`document_ID`),
  ADD KEY `document_ID` (`document_ID`);

--
-- Indexes for table `document_request`
--
ALTER TABLE `document_request`
  ADD PRIMARY KEY (`request_ID`),
  ADD KEY `resident_ID` (`resident_ID`,`document_ID`),
  ADD KEY `document_ID` (`document_ID`);

--
-- Indexes for table `resident_information`
--
ALTER TABLE `resident_information`
  ADD PRIMARY KEY (`resident_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `document_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `document_request`
--
ALTER TABLE `document_request`
  MODIFY `request_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `resident_information`
--
ALTER TABLE `resident_information`
  MODIFY `resident_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `document_request`
--
ALTER TABLE `document_request`
  ADD CONSTRAINT `document_request_ibfk_1` FOREIGN KEY (`resident_ID`) REFERENCES `resident_information` (`resident_ID`),
  ADD CONSTRAINT `document_request_ibfk_2` FOREIGN KEY (`document_ID`) REFERENCES `documents` (`document_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
