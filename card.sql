-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2021 at 11:53 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creditcard`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `#` int(11) NOT NULL,
  `ccnum` varchar(100) NOT NULL,
  `expdate` date NOT NULL,
  `seccode` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`#`, `ccnum`, `expdate`, `seccode`) VALUES
(1, 'a5sfethw6x98d6sk4jv0lms65h7cjshn', '2021-02-28', '389'),
(2, 'daa01c7eb73943096267ab6d301c7cf2', '2022-02-28', '543'),
(29, '76586465e7bff01279bcc26566e51a88', '2024-04-30', '257'),
(30, 'daa01c7eb73943096267ab6d301c7cf2', '2022-02-28', '222'),
(31, 'cfcbc2963a1100f414b56a74e8fd93a6', '2026-07-31', '657'),
(32, '0e7cce212867a06e097b009204beb367', '2027-11-30', '346'),
(33, '63c5320fe9c50f743591d3330a4dd8da', '2023-12-31', '932');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`#`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `#` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
