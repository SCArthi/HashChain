-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 07:26 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hashchain`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Start_time` varchar(255) NOT NULL,
  `End_time` varchar(255) NOT NULL,
  `Presented` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `Name`, `Start_time`, `End_time`, `Presented`) VALUES
(2, 'user5', '03:03', '15:03', '11/04/2019'),
(3, 'test', '06:06', '21:09', '03/05/2019'),
(4, 'user1', '02:02', '13:01', '01/17/2019');

-- --------------------------------------------------------

--
-- Table structure for table `final_good`
--

CREATE TABLE `final_good` (
  `id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Barcode` varchar(255) NOT NULL,
  `Product_name` varchar(255) NOT NULL,
  `Section` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final_good`
--

INSERT INTO `final_good` (`id`, `Date`, `Barcode`, `Product_name`, `Section`, `Quantity`) VALUES
(1, '2019-01-31', 'Code 1', '1', 'Section 1', 5),
(2, '2019-04-01', 'Code 2', '2', 'Section 2', 50);

-- --------------------------------------------------------

--
-- Table structure for table `finished_goods`
--

CREATE TABLE `finished_goods` (
  `id` int(11) NOT NULL,
  `Stock_target` varchar(255) NOT NULL,
  `Barcode` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Unit_Price` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finished_goods`
--

INSERT INTO `finished_goods` (`id`, `Stock_target`, `Barcode`, `Quantity`, `Unit_Price`, `Total`, `Date`) VALUES
(1, 'Agent', 'code 1', 0, 0, 0, ''),
(2, 'Retailers', 'code 2', 5, 20, 100, ''),
(3, 'Cash', 'code 2', 30, 10, 300, '');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `permission` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Username`, `Password`) VALUES
(1, 'user1', 'user'),
(2, 'user2', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `main_stock_material`
--

CREATE TABLE `main_stock_material` (
  `id` int(11) NOT NULL,
  `Purchase_order_no` varchar(255) NOT NULL,
  `Barcode` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Unit Price` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_stock_material`
--

INSERT INTO `main_stock_material` (`id`, `Purchase_order_no`, `Barcode`, `Name`, `Type`, `Quantity`, `Unit Price`, `Total`) VALUES
(1, 'A1', 'Section 1', 'aa', 'Type 1', 5, 20, 100);

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id` int(255) NOT NULL,
  `Barcode` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Unit` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `monthlysalarycontrol`
--

CREATE TABLE `monthlysalarycontrol` (
  `Name` varchar(255) NOT NULL,
  `Basic Salary` int(11) NOT NULL,
  `Attendance Allowance` int(11) NOT NULL,
  `O/T` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registersalary`
--

CREATE TABLE `registersalary` (
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Section` varchar(255) NOT NULL,
  `Basic Salary` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Section` varchar(255) NOT NULL,
  `Salary` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `id` int(11) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Barcode` varchar(255) NOT NULL,
  `Unit_Cost` varchar(255) NOT NULL,
  `Transfer_to_section` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Cost` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`id`, `Date`, `Barcode`, `Unit_Cost`, `Transfer_to_section`, `Quantity`, `Cost`) VALUES
(2735, '', 'code 2', 'Item 1', 'Department 1', 5, 50),
(2739, '11/04/2019', 'code 1', 'Item 1', 'Department 1', 5, 0),
(2740, '', 'code 3', 'Item 3', 'Department 3', 0, 0),
(2741, '02/06/2019', 'Code 6', 'Item 1', 'Department 1', 0, 0),
(2742, '11/04/2019', 'code 1', 'Item 1', 'Department 1', 0, 0),
(2743, '11/04/2019', 'code 1', 'Item 1', 'Department 1', 0, 0),
(2744, '11/04/2019', 'code 22', 'Item 1', 'Department 1', 0, 0),
(2753, '11/04/2019', 'code 10', 'Item 1', 'Department 1', 0, 0),
(2746, '11/04/2019', 'code 5', 'Item 1', 'Department 1', 0, 0),
(2747, '11/04/2019', 'test', 'Item 1', 'Department 1', 0, 0),
(2755, '11/04/2019', 'code 2', 'Item 1', 'Department 1', 0, 0),
(2749, '11/04/2019', 'code 1', 'Item 1', 'Department 1', 0, 0),
(2750, '11/04/2019', 'code 2', 'Item 1', 'Department 1', 0, 0),
(2751, '11/04/2019', 'code 2', 'Item 1', 'Department 1', 0, 0),
(2752, '11/04/2019', 'code 3', 'Item 1', 'Department 1', 0, 0),
(2754, '11/04/2019', 'bbb', 'Item 1', 'Department 1', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `final_good`
--
ALTER TABLE `final_good`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finished_goods`
--
ALTER TABLE `finished_goods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_stock_material`
--
ALTER TABLE `main_stock_material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `final_good`
--
ALTER TABLE `final_good`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `finished_goods`
--
ALTER TABLE `finished_goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `main_stock_material`
--
ALTER TABLE `main_stock_material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2756;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
