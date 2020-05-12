-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2020 at 01:06 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sw`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(6) UNSIGNED NOT NULL,
  `company_name` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `curl` varchar(50) DEFAULT NULL,
  `phoneNumber` varchar(30) DEFAULT NULL,
  `cAddress` varchar(30) NOT NULL,
  `cType` enum('shipping','trading') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `email`, `curl`, `phoneNumber`, `cAddress`, `cType`) VALUES
(1, 'Elhamd', 'elhamd@gmail.com', 'www.elhamdTrading.com', '01776767844445', 'Cairo', 'trading'),
(2, 'Abu-Auf', 'abuauf@hotmail.com', 'www.abuauf.com', '0873863462750', 'Giza', 'shipping'),
(3, 'CRM', 'crm@hotmail.com', 'www.crm.com', '0117676787890', 'Obour', 'trading');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(24) NOT NULL,
  `Last_Name` varchar(24) NOT NULL,
  `email` varchar(32) NOT NULL,
  `address` varchar(24) NOT NULL,
  `Dep` varchar(30) NOT NULL,
  `mobile` varchar(24) NOT NULL,
  `DOB` date NOT NULL,
  `degree` varchar(24) NOT NULL,
  `emp_date` date NOT NULL,
  `salary` int(11) NOT NULL,
  `comp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `First_Name`, `Last_Name`, `email`, `address`, `Dep`, `mobile`, `DOB`, `degree`, `emp_date`, `salary`, `comp_id`) VALUES
(1, 'omar', 'Ahmed', 'amrahmed12@yahoo.com', 'cairo', 'Management', '01012345643', '2017-11-08', 'csc', '2020-03-02', 60000, 2),
(2, 'Khaled', 'Ali', 'KhaledAli19@yahoo.com', 'Madina nasr', 'Accounting', '01012398760', '2020-01-05', 'Bussiness', '2020-03-11', 6000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `name` varchar(24) NOT NULL,
  `description` text NOT NULL,
  `pic` varchar(24) NOT NULL,
  `origin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `name`, `description`, `pic`, `origin`) VALUES
(1, 'peanut', 'fosdo2', '', 123),
(2, 'pepper', 'Black pepper', '', 123),
(3, 'sodany', 'mo2armeshat', '', 22),
(4, 'salt', 'mineral', '', 45);

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `ID` int(11) NOT NULL,
  `productname` varchar(32) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`ID`, `productname`, `product_id`, `quantity`) VALUES
(1, 'salt', 4, 5),
(2, 'sodany', 3, 7),
(3, 'pepper', 2, 16),
(4, 'peanut', 1, 16);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(11) NOT NULL,
  `emp_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `username`, `password`, `type`, `emp_ID`) VALUES
(2, 'admingamed', '$2y$10$Tz3320XG.dZmKlaFhdNcae3qPvA63UtA0FnKuXN6taoH8TG87eMBS', 1, 2),
(126, 'omar', '$2y$10$Tz3320XG.dZmKlaFhdNcae3qPvA63UtA0FnKuXN6taoH8TG87eMBS', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `emp_ID` (`emp_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `storage`
--
ALTER TABLE `storage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `storage`
--
ALTER TABLE `storage`
  ADD CONSTRAINT `storage_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`emp_ID`) REFERENCES `employee` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
