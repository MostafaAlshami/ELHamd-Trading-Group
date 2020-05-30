-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 07:51 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sw2`
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
  `cType` enum('trading','shipping') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `email`, `curl`, `phoneNumber`, `cAddress`, `cType`) VALUES
(1, 'Elhamd', 'elhamd@gmail.com', 'www.elhamdTrading.com', '017767678445', 'Obour', 'shipping'),
(2, 'Abu-Auf', 'abuauf@hotmail.com', 'www.abuauf.com', '08738634627', 'Giza', 'shipping'),
(3, 'CRM', 'crm@hotmail.com', 'www.crm.com', '01176767878', 'Cairo', 'shipping'),
(4, 'CRM', 'crm@gmail.vom', 'www.crm.com', '01776767845', 'golf city', 'trading'),
(5, 'Beansco', 'beansco@gmail.com', 'www.beansc.com', '01776767845', 'golf city', 'trading');

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
(126, 'Omar', 'Attia', 'omar.attia98@gmail.com', 'Tagamoa Khames', 'Management', '01024564788', '1998-11-15', 'Thanwya', '2019-02-02', 8000, 11835),
(130, 'Mostafa', 'Ashraf', 'sasa@gmail.com', 'Madinat Nasr', 'Marketing', '01023456788', '2000-02-02', 'Thanwya', '2000-02-02', 6000, 11930),
(131, 'Aya', 'Fathhy', 'omar.attia98@gmail.com', 'Masr Gdeida', 'Accounting', '01022223344', '2010-11-11', 'thanwya', '2018-11-11', 3000, 11836);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `name` varchar(24) NOT NULL,
  `description` text NOT NULL,
  `pic` text NOT NULL,
  `origin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `name`, `description`, `pic`, `origin`) VALUES
(20, 'Hazelnuts', 'bondo2', 'https://image.shutterstock.com/image-vector/vector-realistic-illustration-hazelnut-peeled-260nw-1167149488.jpg', 'India'),
(30, 'Cashew', 'cajew', 'https://image.shutterstock.com/image-photo/roasted-cashew-nuts-green-leaves-260nw-1239793840.jpg', 'Sudan'),
(40, 'Potato', 'btates', 'https://i0.wp.com/post.healthline.com/wp-content/uploads/2020/02/raw-potatoes-potato-1296x728-header.jpg?w=1155&h=1528', 'Egypt'),
(45, 'Peanuts', 'fosdo2', 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/peanuts-royalty-free-image-616003590-1532549624.jpg', 'Russia');

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `ID` int(11) NOT NULL,
  `productname` varchar(32) NOT NULL,
  `product_id` int(11) NOT NULL,
  `currentq` int(11) NOT NULL,
  `date` date NOT NULL,
  `inq` int(11) NOT NULL,
  `outq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`ID`, `productname`, `product_id`, `currentq`, `date`, `inq`, `outq`) VALUES
(1, 'Peanuts', 45, 200, '2020-05-05', 300, 400),
(2, 'Hazelnuts', 20, 400, '2020-05-05', 100, 10),
(3, 'Cashew', 30, 1000, '2020-05-05', 800, 50),
(4, 'Potato', 40, 50, '2020-05-05', 0, 450);

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
(126, 'omar', '$2y$10$Tz3320XG.dZmKlaFhdNcae3qPvA63UtA0FnKuXN6taoH8TG87eMBS', 0, 126),
(130, 'Mostafa', '$2y$10$Tz3320XG.dZmKlaFhdNcae3qPvA63UtA0FnKuXN6taoH8TG87eMBS', 0, 130),
(131, 'Aya', '$2y$10$Tz3320XG.dZmKlaFhdNcae3qPvA63UtA0FnKuXN6taoH8TG87eMBS', 0, 131);

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
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `product_id` (`product_id`),
  ADD UNIQUE KEY `productname` (`productname`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `emp_id_fk` (`emp_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `storage`
--
ALTER TABLE `storage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `storage`
--
ALTER TABLE `storage`
  ADD CONSTRAINT `product_id_fk` FOREIGN KEY (`product_id`) REFERENCES `product` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `product_name_fk` FOREIGN KEY (`productname`) REFERENCES `product` (`name`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `emp_id_fk` FOREIGN KEY (`emp_ID`) REFERENCES `employee` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
