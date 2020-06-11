-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 02:11 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

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
-- Table structure for table `bankacc`
--

CREATE TABLE `bankacc` (
  `acc_id` int(8) NOT NULL,
  `bank_name` varchar(30) NOT NULL,
  `bank_branch` varchar(30) NOT NULL,
  `benef_name` varchar(30) NOT NULL,
  `acc_no` varchar(30) NOT NULL,
  `swift_code` varchar(30) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bankacc`
--

INSERT INTO `bankacc` (`acc_id`, `bank_name`, `bank_branch`, `benef_name`, `acc_no`, `swift_code`, `fax`, `address`, `phone_no`) VALUES
(1, 'CIB', 'Cai', 'Khaled Hamdy', '38736289749', '3435', '2125551234.', 'Cairo', '012781387');

-- --------------------------------------------------------

--
-- Table structure for table `commission`
--

CREATE TABLE `commission` (
  `contract_no` varchar(20) NOT NULL,
  `discharge_port` varchar(30) NOT NULL,
  `landing_port` varchar(30) NOT NULL,
  `intermediary_acc` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `commodity`
--

CREATE TABLE `commodity` (
  `comm_id` int(11) NOT NULL,
  `contract_no` varchar(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` float NOT NULL,
  `unit_price` float NOT NULL,
  `total_price` float NOT NULL,
  `package_weight` float NOT NULL,
  `package_type` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `contract_no` varchar(20) NOT NULL,
  `contract_date` date NOT NULL,
  `seller_id` int(6) UNSIGNED NOT NULL,
  `buyer_id` int(6) UNSIGNED NOT NULL,
  `status` varchar(15) NOT NULL,
  `bankAcc_id` int(11) NOT NULL,
  `total_quantity` float NOT NULL,
  `shipment_date` date NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`contract_no`, `contract_date`, `seller_id`, `buyer_id`, `status`, `bankAcc_id`, `total_quantity`, `shipment_date`, `type`) VALUES
('2209', '2020-06-02', 1, 2, 'Active', 1, 300, '2020-06-17', 'Import'),
('3500A', '2020-05-01', 5, 1, 'Ended', 1, 500, '2020-05-16', 'Export'),
('C302', '2020-06-03', 2, 5, 'Active', 1, 350.7, '2020-06-24', 'Commission');

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
  `comp_id` int(11) NOT NULL,
  `national_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `First_Name`, `Last_Name`, `email`, `address`, `Dep`, `mobile`, `DOB`, `degree`, `emp_date`, `salary`, `comp_id`, `national_id`) VALUES
(126, 'Omar', 'Attia', 'omar.attia98@gmail.com', 'Tagamoa Khames', 'Management', '01024564788', '1998-11-15', 'Thanwya', '2019-02-02', 8000, 11835, ''),
(130, 'Mostafa', 'Ashraf', 'sasa@gmail.com', 'Madinat Nasr', 'Marketing', '01023456788', '2000-02-02', 'Thanwya', '2000-02-02', 6000, 11930, '12345'),
(131, 'Aya', 'Fathhy', 'omar.attia98@gmail.com', 'Masr Gdeida', 'Accounting', '01022223344', '2010-11-11', 'thanwya', '2018-11-11', 3000, 11836, '');

-- --------------------------------------------------------

--
-- Table structure for table `import`
--

CREATE TABLE `import` (
  `contract_no` varchar(20) NOT NULL,
  `origin` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_no` int(11) NOT NULL,
  `invoice_date` date NOT NULL,
  `contract_no` varchar(20) NOT NULL,
  `final_cost` float NOT NULL,
  `payment_terms` text NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_no`, `invoice_date`, `contract_no`, `final_cost`, `payment_terms`, `remarks`) VALUES
(112, '2020-06-09', '2209', 90000, 'None', 'None');

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
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `shipment_id` int(11) NOT NULL,
  `contract_no` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  `Booking_id` int(11) NOT NULL,
  `arrival_date` date NOT NULL,
  `invoice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shlinebooking`
--

CREATE TABLE `shlinebooking` (
  `shipping_id` int(11) NOT NULL,
  `shippingLine_id` int(6) UNSIGNED NOT NULL,
  `shipping_date` date NOT NULL,
  `landing_port` varchar(30) NOT NULL,
  `discharge_port` varchar(30) NOT NULL,
  `container_no` varchar(11) NOT NULL,
  `ship_name` varchar(30) NOT NULL,
  `trip_no` varchar(11) NOT NULL,
  `billOf_landing` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(130, 'Mostafa', '$2y$10$q0VJQSN1zLaFSvOdzyqA5eMS.DNk1Kk4G/QNjWdSxbPL.TmynBP8a', 0, 130);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bankacc`
--
ALTER TABLE `bankacc`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `commission`
--
ALTER TABLE `commission`
  ADD PRIMARY KEY (`contract_no`),
  ADD KEY `intermediary_acc` (`intermediary_acc`);

--
-- Indexes for table `commodity`
--
ALTER TABLE `commodity`
  ADD PRIMARY KEY (`comm_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `contract_no` (`contract_no`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`contract_no`),
  ADD KEY `seller_id` (`seller_id`),
  ADD KEY `buyer_id` (`buyer_id`),
  ADD KEY `bankAcc_id` (`bankAcc_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `import`
--
ALTER TABLE `import`
  ADD PRIMARY KEY (`contract_no`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_no`),
  ADD KEY `contract_no` (`contract_no`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`shipment_id`),
  ADD KEY `invoice_id` (`invoice`),
  ADD KEY `contract_no` (`contract_no`),
  ADD KEY `shipment_ibfk_4` (`Booking_id`);

--
-- Indexes for table `shlinebooking`
--
ALTER TABLE `shlinebooking`
  ADD PRIMARY KEY (`shipping_id`),
  ADD KEY `shippingLine` (`shippingLine_id`);

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
-- AUTO_INCREMENT for table `bankacc`
--
ALTER TABLE `bankacc`
  MODIFY `acc_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `commodity`
--
ALTER TABLE `commodity`
  MODIFY `comm_id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `shlinebooking`
--
ALTER TABLE `shlinebooking`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `storage`
--
ALTER TABLE `storage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commission`
--
ALTER TABLE `commission`
  ADD CONSTRAINT `commission_ibfk_1` FOREIGN KEY (`intermediary_acc`) REFERENCES `bankacc` (`acc_id`),
  ADD CONSTRAINT `commission_ibfk_2` FOREIGN KEY (`contract_no`) REFERENCES `contract` (`contract_no`);

--
-- Constraints for table `commodity`
--
ALTER TABLE `commodity`
  ADD CONSTRAINT `commodity_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`ID`),
  ADD CONSTRAINT `commodity_ibfk_2` FOREIGN KEY (`contract_no`) REFERENCES `contract` (`contract_no`);

--
-- Constraints for table `contract`
--
ALTER TABLE `contract`
  ADD CONSTRAINT `contract_ibfk_1` FOREIGN KEY (`seller_id`) REFERENCES `company` (`company_id`),
  ADD CONSTRAINT `contract_ibfk_2` FOREIGN KEY (`buyer_id`) REFERENCES `company` (`company_id`),
  ADD CONSTRAINT `contract_ibfk_3` FOREIGN KEY (`bankAcc_id`) REFERENCES `bankacc` (`acc_id`);

--
-- Constraints for table `import`
--
ALTER TABLE `import`
  ADD CONSTRAINT `import_ibfk_1` FOREIGN KEY (`contract_no`) REFERENCES `contract` (`contract_no`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`contract_no`) REFERENCES `contract` (`contract_no`);

--
-- Constraints for table `shipment`
--
ALTER TABLE `shipment`
  ADD CONSTRAINT `shipment_ibfk_1` FOREIGN KEY (`invoice`) REFERENCES `invoice` (`invoice_no`),
  ADD CONSTRAINT `shipment_ibfk_2` FOREIGN KEY (`contract_no`) REFERENCES `contract` (`contract_no`),
  ADD CONSTRAINT `shipment_ibfk_3` FOREIGN KEY (`invoice`) REFERENCES `invoice` (`invoice_no`),
  ADD CONSTRAINT `shipment_ibfk_4` FOREIGN KEY (`Booking_id`) REFERENCES `shlinebooking` (`shipping_id`);

--
-- Constraints for table `shlinebooking`
--
ALTER TABLE `shlinebooking`
  ADD CONSTRAINT `shlinebooking_ibfk_1` FOREIGN KEY (`shippingLine_id`) REFERENCES `company` (`company_id`);

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
