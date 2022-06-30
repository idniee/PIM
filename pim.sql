-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 02, 2021 at 04:33 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pim`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_manager`
--

CREATE TABLE `employee_manager` (
  `emp_ID` varchar(10) NOT NULL,
  `emp_Email` varchar(30) NOT NULL,
  `emp_Gender` varchar(1) NOT NULL,
  `emp_DOB` date NOT NULL,
  `emp_StoreID` varchar(10) NOT NULL,
  `emp_Dept` varchar(30) NOT NULL,
  `emp_Add` varchar(60) NOT NULL,
  `emp_Pass` varchar(10) NOT NULL,
  `emp_fName` varchar(20) NOT NULL,
  `emp_lName` varchar(20) NOT NULL,
  `emp_Pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_manager`
--

INSERT INTO `employee_manager` (`emp_ID`, `emp_Email`, `emp_Gender`, `emp_DOB`, `emp_StoreID`, `emp_Dept`, `emp_Add`, `emp_Pass`, `emp_fName`, `emp_lName`, `emp_Pic`) VALUES
('MG001', 'syafeisaupi45@gmail.com', 'M', '1999-05-10', 'ST001', 'Manager', '3-19, MA-1, Kolej Tun Dr Ismail, UTM, 81312, Skudai, Johor', '1234', 'Syafei', 'Saupi', 'images/profile/pie.png'),
('MG002', 'mukhlis@gmail.com', 'M', '1999-08-01', 'ST003', 'Manager', '4-01, MA-1, Kolej Tun Dr Ismail, UTM, 81310, Skudai, Johor', '1234', 'Mukhlis', 'Azli', 'images/profile/mukhlis.png'),
('MG003', 'ijeni@gmail.com', 'M', '1999-09-07', 'ST005', 'Manager', '4-01, MA-1, Kolej Tun Dr Ismail, UTM, 81310, Skudai, Johor', '1234', 'Idzni', 'Rashid', 'images/profile/ijeni.png'),
('MG004', 'syuk@gmail.com', 'M', '1999-06-22', 'ST002', 'Manager', '1-01, MA-1, Kolej Tun Dr Ismail, UTM, 81310, Skudai, Johor', '1234', 'Syukri', 'Wagiman', 'images/profile/syuk.png'),
('MG000', 'admin@gmail.com', 'M', '1999-08-01', 'ST001', 'Administrator', '4-01, MA-1, Kolej Tun Dr Ismail, UTM, 81310, Skudai, Johor', '1234', 'Admin', 'PIM', 'images/profile/anonymous.png');

-- --------------------------------------------------------

--
-- Table structure for table `employee_staff`
--

CREATE TABLE `employee_staff` (
  `emp_ID` varchar(10) NOT NULL,
  `emp_Email` varchar(30) NOT NULL,
  `emp_Gender` varchar(1) NOT NULL,
  `emp_DOB` date NOT NULL,
  `emp_StoreID` varchar(10) NOT NULL,
  `emp_Dept` varchar(30) NOT NULL,
  `emp_Add` varchar(60) NOT NULL,
  `emp_Pass` varchar(10) NOT NULL,
  `emp_Pic` varchar(50) NOT NULL,
  `emp_fName` varchar(20) NOT NULL,
  `emp_lName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_staff`
--

INSERT INTO `employee_staff` (`emp_ID`, `emp_Email`, `emp_Gender`, `emp_DOB`, `emp_StoreID`, `emp_Dept`, `emp_Add`, `emp_Pass`, `emp_Pic`, `emp_fName`, `emp_lName`) VALUES
('STF01', 'mukhlis@gmail.com', 'M', '1999-09-07', 'ST001', 'Salesperson', '2-01, MA-1, Kolej Tun Dr Ismail, UTM, 81310, Skudai, Johor', '12345', 'images/profile/mukhlis.png', 'Muhklis', 'Azli'),
('STF02', 'ijeni@gmail.com', 'M', '1999-02-01', 'ST001', 'Cleaner', '4-01, MA-1, Kolej Tun Dr Ismail, UTM, 81310, Skudai, Johor', '12345', 'images/profile/ijeni.jpg', 'Idzni', 'Rashid'),
('STF03', 'syuk@gmail.com', 'M', '1999-08-01', 'ST001', 'Cashier', '1-01, MA-1, Kolej Tun Dr Ismail, UTM, 81310, Skudai, Johor', '12345', 'images/profile/syuk.png', 'Syukri', 'Wagiman');

-- --------------------------------------------------------

--
-- Table structure for table `frontsite`
--

CREATE TABLE `frontsite` (
  `sectionID` varchar(50) DEFAULT NULL,
  `detail1` varchar(100) DEFAULT NULL,
  `detail2` varchar(100) DEFAULT NULL,
  `detail3` varchar(500) DEFAULT NULL,
  `detail4` varchar(500) DEFAULT NULL,
  `detail5` varchar(500) DEFAULT NULL,
  `detail6` varchar(500) DEFAULT NULL,
  `detail7` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frontsite`
--

INSERT INTO `frontsite` (`sectionID`, `detail1`, `detail2`, `detail3`, `detail4`, `detail5`, `detail6`, `detail7`) VALUES
('sticker1', 'Trusted', 'Product', '100% DCA approval', 'All pharmaceutical products including health supplements and traditional preparations has been registered with the Drug Control Authority (DCA) of Malaysia', NULL, NULL, NULL),
('sticker2', 'Season', 'Sale!', 'get 50% off', 'Discount Code for every Monday and Friday by using the code AGONG in all under PIM stores', NULL, NULL, NULL),
('sticker3', 'SOP', 'during CONVID-19', 'All registered stores are Folk-Friendly You must follow the SOP and wear a MASK', '', NULL, NULL, NULL),
('test1', 'images/jeni.jpg', 'Daulat Sultan Melaka Daulat Sultan Melaka Daulat Sultan Melaka Daulat Sultan Melaka', 'Sultan Melaka', NULL, NULL, NULL, NULL),
('test2', 'images/jeni.jpg', 'Daulat Sultan Melaka Daulat Sultan Melaka Daulat Sultan Melaka Daulat Sultan Melaka ', 'Sultan Melaka', NULL, NULL, NULL, NULL),
('test3', 'images/jeni.jpg', 'Daulat Sultan Melaka Daulat Sultan Melaka Daulat Sultan Melaka Daulat Sultan Melaka ', 'Sultan Melaka', NULL, NULL, NULL, NULL),
('footerSticker1', '', '', '', NULL, NULL, NULL, NULL),
('footerSticker2', '', '', '', NULL, NULL, NULL, NULL),
('test4', 'images/jeni.jpg', 'Daulat Sultan Melaka Daulat Sultan Melaka Daulat Sultan Melaka Daulat Sultan Melaka ', 'Sultan Melaka', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_ID` varchar(10) NOT NULL,
  `prod_Brand` varchar(30) NOT NULL,
  `prod_Name` varchar(40) NOT NULL,
  `prod_Price` double NOT NULL,
  `prod_Desc` varchar(80) NOT NULL,
  `prod_Pic` varchar(50) NOT NULL,
  `prod_VisitCount` int(11) NOT NULL,
  `prod_DateAdded` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_ID`, `prod_Brand`, `prod_Name`, `prod_Price`, `prod_Desc`, `prod_Pic`, `prod_VisitCount`, `prod_DateAdded`) VALUES
('1234567880', 'SOLCO', 'Solco Bupropion HCl SR Tablets 100mg', 40, 'This medication is used to treat depression.', 'images/product/product_03.png', 3, '2021-01-12'),
('1234567881', 'GLADES', 'Glades Hydrocortisone-Iodoquinol 1-1% ', 19, 'This combination medication is used to treat a variety of skin conditions.', 'images/product/product_04.png', 2, '2021-01-12'),
('1234567882', 'PFIZER', 'Pfizer Methylprednisolone Tablets 8mg', 100, 'Methylprednisolone is used to treat conditions such as arthritis.', 'images/product/product_05.png', 7, '2021-01-04'),
('1234567883', 'DEXILANT', 'Dexilant Dr Capsules 30mg', 120, 'Dexilant is a proton pump inhibitor.', 'images/product/product_06.png', 2, '2021-01-01'),
('1234567884', 'SUN', 'Sun Ergocalciferol Capsules 1.25mg', 10, 'Ergocalciferol is vitamin D2', 'images/product/product_07.png', 0, '2021-01-20'),
('1234567885', '3S', '3S Methotrexate 50mg', 90, 'Methotrexate interferes with the growth of certain cells of the body', 'images/product/product_08.png', 0, '2021-01-18'),
('1234567886', 'MITS', 'Mits Cefdinir Capsules 300mg', 55, 'Omnicef (cefdinir) is in a group of drugs called cephalosporin antibiotics.', 'images/product/product_09.png', 0, '2021-01-27'),
('1234567887', 'AUSMED', 'Ausmed Olanzapine Tablets 5mg', 10, 'Olanzapine is used to treat psychotic conditions', 'images/product/product_10.png', 0, '2021-01-12'),
('1234567890', 'PANADOL', 'Panadol Actifast 20pcs Tablet', 8.9, 'Taken to quickly relief light pain.', 'images/product/panadol_actifast.png', 1, '2021-01-05'),
('1234567891', 'ANTABAX', 'Antabax Anti-Bacterial Shower Cream ', 9.9, 'Refreshing body wash', 'images/product/antabax.png', 0, '2021-01-26'),
('1234567892', 'COLGATE', 'Colgate Plax Ice Mouthwash', 7.9, 'Super cold refreshing mouthwash. Guaranteed 99% cleaner mouth.', 'images/product/colgatePlax.png', 0, '2021-01-29'),
('1234567893', 'HURIX', 'Hurix 600 Flu Cough Syrup', 13.5, 'Best to reduce sore throat and cough.', 'images/product/hurix.png', 0, '2021-01-30'),
('1234567894', 'PERSONNELLE', 'Ibuprofen 500pcs Tablet', 23.7, 'Anti-inflammatory drug used for treating pain, fever, and inflammation.', 'images/product/ibuprofen.png', 6, '2021-01-24'),
('1234567895', 'SCHOLL', 'Scholl Foot & Nail Cream', 23.4, 'Soften & Hydrates Dry Hard Skin', 'images/product/scholl.png', 9, '2021-01-09'),
('1234567896', 'APPETON', 'Appeton Vitamin C', 20.5, 'Chewable Vitamin C with Oragne Flavour', 'images/product/appeton.png', 1, '2021-01-06'),
('1234567897', 'ASCEND', 'Ascend Benzonatate 100mg Capsules', 67.9, 'This medication is used to treat coughs caused by the common cold.', 'images/product/product_02.png', 2, '2021-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_ID` varchar(15) NOT NULL,
  `store_ID` varchar(10) NOT NULL,
  `prod_ID` varchar(20) NOT NULL,
  `prod_Quan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_ID`, `store_ID`, `prod_ID`, `prod_Quan`) VALUES
('ST0011234567880', 'ST001', '1234567880', 10),
('ST0011234567890', 'ST001', '1234567890', 64),
('ST0011234567891', 'ST001', '1234567891', 49),
('ST0011234567892', 'ST001', '1234567892', 49),
('ST0011234567893', 'ST001', '1234567893', 50),
('ST0011234567894', 'ST001', '1234567894', 50),
('ST0011234567895', 'ST001', '1234567895', 50),
('ST0011234567896', 'ST001', '1234567896', 50);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `store_ID` varchar(10) NOT NULL,
  `store_Name` varchar(50) NOT NULL,
  `store_Location` varchar(100) NOT NULL,
  `store_State` varchar(30) NOT NULL,
  `store_Map` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_ID`, `store_Name`, `store_Location`, `store_State`, `store_Map`) VALUES
('ST001', 'Bukit Bintang PIM Pharmacy', '48, Bukit Bintang St, Bukit Bintang, 55100 Kuala Lumpur, Federal Territory of Kuala Lumpur', 'Selangor', 'https://goo.gl/maps/N6YJa3nQsnci3mvA8'),
('ST002', 'Skudai PIM Pharmacy', '81, Jalan Kebudayaan 16, Taman Universiti, 81300 Skudai, Johor', 'Johor', 'https://goo.gl/maps/LT3Fqq6VTB8yKFFS8'),
('ST003', 'Klang PIM Pharmacy', 'No, 12, Jalan Tiara 2, Bandar Baru Klang, 41150 Klang, Selangor', 'Selangor', 'https://goo.gl/maps/4jR4E6yN4MTxnNWt7'),
('ST004', 'Johor Bahru PIM Pharmacy', 'Lot G-001, KSL City Mall, 33, Jalan Seladang, Taman Abad, 80250 Johor Bahru, Johor', 'Johor', 'https://g.page/Alpro_KSLCityMall?share'),
('ST005', 'Melaka Raya PIM Pharmacy', '316 Ground Floor 1, No, Jalan Melaka Raya 1, Melaka Raya, 75000, Malacca', 'Melaka', 'https://g.page/Alpro-Melakaraya?share'),
('ST006', 'Straits PIM Pharmacy', 'S, No. 83-V & 83, Jalan Munshi Abdullah, 75100 Malacca', 'Melaka', 'https://goo.gl/maps/5CmTCzzBZTQKBxVS8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_staff`
--
ALTER TABLE `employee_staff`
  ADD PRIMARY KEY (`emp_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_ID`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_ID`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
