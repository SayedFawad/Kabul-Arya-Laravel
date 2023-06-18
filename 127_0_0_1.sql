-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2017 at 06:03 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraveldb`
--
CREATE DATABASE IF NOT EXISTS `laraveldb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `laraveldb`;

-- --------------------------------------------------------

--
-- Table structure for table `abouttbl`
--

CREATE TABLE `abouttbl` (
  `ID` int(11) NOT NULL,
  `Description` varchar(12500) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abouttbl`
--

INSERT INTO `abouttbl` (`ID`, `Description`) VALUES
(2, 'alsdj alksdj laksdj LAKSDJ LASKDJF ALKSDJFLKjf alksdjalskdjfaslkdjf alksdjffawsad fawad fawad ۱۱۱۱');

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Address` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `Name`, `Description`, `Address`, `Phone`) VALUES
(2, 'Khowaja Edris', 'نماینده هوتل پروان', 'سرکوتل کابل افغانستان', '0792323445'),
(3, 'Moh Esah', 'کارگر ومشتری شرکت کابل آریا', 'چهارقلعه چهاردهی', '07823423255'),
(4, 'Said Moh Shah', 'رییس فابریکه ادویه سازی کابل آریا', 'سرک شورا دارالمان کابل افغانستان', '078235683'),
(5, 'Nasir Ahmad', 'نماینده پوماد شرکت کابل آریا', 'aadfa', '0782342323'),
(6, 'Edayatullah', 'نماینده ولایت ننگرهار', 'ننگرهار وجلال آباد', '079453434');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `ID` int(11) NOT NULL,
  `AccountID` int(11) NOT NULL,
  `Bill_No` int(25) NOT NULL,
  `Date` varchar(25) NOT NULL,
  `Price` int(25) NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Finished` varchar(25) NOT NULL DEFAULT 'Not'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`ID`, `AccountID`, `Bill_No`, `Date`, `Price`, `Description`, `Finished`) VALUES
(1, 3, 301, '1396/5/4', 37500, 'قیمت مجموع بل نمبر ۳۰۱', 'Yes'),
(5, 2, 0, '0', 0, 'Null', 'Not'),
(6, 2, 502, '1396/5/13', 100000, 'قیمت بل نمبر۵۰۲ خواجه ادریس', 'Yes'),
(7, 2, 503, '1396/5/14', 50000, 'قیمت بل', 'Yes'),
(8, 3, 0, 'Null', 0, 'Null', 'Not'),
(9, 3, 45, '1396/5/13', 55000, 'قیمت بل محمدعیسی', 'Yes'),
(10, 5, 0, 'Null', 0, 'Null', 'Not'),
(11, 5, 900, '1396/5/15', 200000, 'قیمت مجموع بل نمبر ۹۰۰ نصیراحمد', 'Yes'),
(12, 6, 0, 'Null', 0, 'Null', 'Not'),
(13, 6, 566, '1396/5/15', 120000, 'قیمت مجموع بل', 'Not'),
(14, 2, 504, '1396/5/16', 45000, 'قیمت بل', 'Yes'),
(15, 2, 505, '1396/5/16', 300000, 'قیمت بل ۵۰۵', 'Yes'),
(16, 2, 506, '1396/5/16', 200000, 'قیمت', 'Yes'),
(17, 2, 507, '1396/5/16', 50000, 'قیمت', 'Yes'),
(18, 2, 508, '1396/5/16', 104000, 'قیمت بل ۵۰۸ ادریس', 'Yes'),
(19, 2, 509, '1396/5/16', 45500, 'قیمت بل', 'Yes'),
(20, 3, 601, '1396/5/17', 50000, 'قیمت بل', 'Yes'),
(22, 2, 510, '1396/5/17', 55000, '454wefew', 'Not');

-- --------------------------------------------------------

--
-- Table structure for table `bill_in`
--

CREATE TABLE `bill_in` (
  `ID` int(11) NOT NULL,
  `ComID` int(11) NOT NULL,
  `Bill_No` int(25) NOT NULL,
  `Date` varchar(25) NOT NULL,
  `Price` int(25) NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bill_syrup`
--

CREATE TABLE `bill_syrup` (
  `ID` int(11) NOT NULL,
  `AccountID` int(11) NOT NULL,
  `Bill_No` int(25) NOT NULL,
  `Date` varchar(25) NOT NULL,
  `Price` int(25) NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Finished` varchar(25) NOT NULL DEFAULT 'Not'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_syrup`
--

INSERT INTO `bill_syrup` (`ID`, `AccountID`, `Bill_No`, `Date`, `Price`, `Description`, `Finished`) VALUES
(1, 3, 500, '1396/3/3', 45000, 'قیمت بل نمبر۵۰۰ خواجه ادریس', 'Not'),
(2, 3, 501, '1396/3/4', 35000, 'قیمت بل نمبر۵۰۱ خواجه ادریس', 'Not');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Phone` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacttbl`
--

CREATE TABLE `contacttbl` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `message` varchar(2500) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacttbl`
--

INSERT INTO `contacttbl` (`ID`, `name`, `email`, `message`) VALUES
(1, 'fawad', 'favad.hakimi@gmail.com', 'asldkjfa skdjflaskdjf alksdjf alksdjf alskdjf aslkdjf kalsdjff klasdjf klasdjf klasdjf klasdf asd fasd  سیب شسیب شسنمیبت شسمنیتب شنمسیتب منشسیتب شمنسیتب نمشسیتب نمشستیب منشسیتبن مشسیتب شنسیب شسیب تشکر'),
(2, 'فواد', 'favad.hakimi@gmail.com', 'تشکرازشما'),
(3, 'fawad', 'favad.hakimi@gmail.com', 'asdf asdf asdf asdfsdf'),
(4, 'info@kabularyapharma.com', 'favad.hakimi@gmail.com', 'qqerqwerqwe');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstname`, `lastname`, `sex`, `phone`) VALUES
(1, 'Sayed Fawad', 'Hakimi', '1', 785808195),
(24, 'Sayed Bashir', 'Noori', '1', 742342342),
(39, 'Sayed Ahmadi', 'Hakimi', '1', 788888889),
(40, 'Said Mohammad Shah', 'Nasiri', '1', 772324342);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `ID` int(11) NOT NULL,
  `AccountID` int(11) NOT NULL,
  `Amount` int(25) NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Date` varchar(25) NOT NULL,
  `Finished` varchar(25) NOT NULL DEFAULT 'Not'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`ID`, `AccountID`, `Amount`, `Description`, `Date`, `Finished`) VALUES
(4, 4, 3500, 'مصرف مختلف توسط آغاصاحب', '5/5/96', 'Yes'),
(6, 4, 4500, 'مصرف برای برق شرکت کابل آریا برج سرطان', '31/4/96', 'Yes'),
(7, 4, 2000, 'جهت ساختن لباس برای کارگران شرکت', '7/5/96', 'Yes'),
(8, 4, 5000, 'مصرف', '7/7/96', 'Yes'),
(9, 4, 0, 'Null', 'Null', 'Not'),
(10, 4, 110000, 'مصرف پوماد', '7/5/1396', 'Yes'),
(11, 4, 20000, 'hjghjgjh', '5/5/96', 'Yes'),
(12, 4, 30000, 'asdfasdf', '15/5/96', 'Not');

-- --------------------------------------------------------

--
-- Table structure for table `expenses_syrup`
--

CREATE TABLE `expenses_syrup` (
  `ID` int(11) NOT NULL,
  `AccountID` int(11) NOT NULL,
  `Amount` int(25) NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Date` varchar(25) NOT NULL,
  `Finished` varchar(25) NOT NULL DEFAULT 'Not'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses_syrup`
--

INSERT INTO `expenses_syrup` (`ID`, `AccountID`, `Amount`, `Description`, `Date`, `Finished`) VALUES
(1, 4, 2300, 'مصرف برای شربت توسط آغاصاحب', '25/3/96', 'Not'),
(3, 4, 155, 'خریدبورس برای اطاق شربت توسط آغاصاحب', '26/4/96', 'Not');

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `id` int(11) NOT NULL,
  `description` varchar(2500) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `news` varchar(2500) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `event1` varchar(2500) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `event2` varchar(2500) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `event3` varchar(2500) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`id`, `description`, `picture`, `news`, `event1`, `event2`, `event3`) VALUES
(3, 'شرکت کابل آریا یک شرکت ادویه سازی میباشد', 'images/logo.jpg', 'قابل توجه شرکت کابل آریا تولیدات خویش را افزایش داده', 'تولیدات سلوشن', 'تولیدات پوماد', 'تولیدات شربت');

-- --------------------------------------------------------

--
-- Table structure for table `money_paid`
--

CREATE TABLE `money_paid` (
  `ID` int(11) NOT NULL,
  `ComID` int(11) NOT NULL,
  `PaidBy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Amount` int(25) NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `money_received`
--

CREATE TABLE `money_received` (
  `ID` int(11) NOT NULL,
  `AccountID` int(11) NOT NULL,
  `ReceivedBy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Amount` int(20) NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Finished_Sayed_Moh_Shah` varchar(25) NOT NULL DEFAULT 'Not',
  `Finished_Customer` varchar(25) NOT NULL DEFAULT 'Not'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `money_received`
--

INSERT INTO `money_received` (`ID`, `AccountID`, `ReceivedBy`, `Amount`, `Description`, `Date`, `Finished_Sayed_Moh_Shah`, `Finished_Customer`) VALUES
(1, 2, 'Said Moh Shah', 20000, 'رسیدخواجه ادریس ازطریق عزیزی بانک', '23/4/96', 'Yes', 'Yes'),
(2, 3, 'Said Moh Shah', 10000, 'رسید معاش برج سرطان محمدعیسی به جمع آغاصاحب', '1/5/96', 'Yes', 'Yes'),
(6, 2, 'Said Moh Shah', 10000, 'رسیدخواجه ادریس برای آغاصاحب', '5/5/96', 'Yes', 'Yes'),
(7, 2, 'Khowaja Sabir', 5000, 'رسید توسط خواجه صابر', '5/5/1396', 'Yes', 'Yes'),
(9, 2, 'Said Moh Shah', 6000, 'رسیدنقد ازطریق عزیزی بانک خواجه مزمل', '5/5/96', 'Yes', 'Yes'),
(10, 3, 'Said Moh Shah', 8000, 'رسیدمحمدعیسی درک پوماد', '7/5/96', 'Yes', 'Yes'),
(11, 4, 'Said Moh Shah', 0, 'Null', 'Null', 'Not', 'Not'),
(12, 2, 'Said Moh Shah', 100000, 'رسید خواجه ادریس ازدرک عزیزی بانک', '7/5/96', 'Yes', 'Yes'),
(13, 2, 'Said Moh Shah', 100000, 'رسید ادریس', '7/5/96', 'Yes', 'Yes'),
(14, 3, 'Said Moh Shah', 20000, 'رسیدمحمدعیسی ازدرک پوماد', '7/5/96', 'Yes', 'Yes'),
(15, 2, 'Said Moh Shah', 10000, 'رسیدخواجه ادریس نقد برای آغاصاحب', '8/5/96', 'Yes', 'Yes'),
(16, 3, 'Said Moh Shah', 20000, 'رسیدنقد محمدعیسی', '8/5/96', 'Yes', 'Yes'),
(17, 2, 'Said Moh Shah', 5000, 'hjghjhj', '5/5/96', 'Yes', 'Yes'),
(18, 2, 'Said Moh Shah', 0, 'Null', '0', 'Not', 'Not'),
(19, 2, 'Said Moh Shah', 27000, 'رسید نقدخواجه ادریس برای آغاصاحب', '12/5/96', 'Not', 'Yes'),
(20, 3, 'Said Moh Shah', 0, 'Null', 'Null', 'Not', 'Not'),
(21, 3, 'Said Moh Shah', 50000, 'رسید نقدمحمدعیسی برای آغاصاحب', '13/5/96', 'Not', 'Yes'),
(22, 5, 'Said Moh Shah', 0, 'Null', 'Null', 'Not', 'Not'),
(23, 5, 'Said Moh Shah', 50000, 'رسیدنصیراحمدازدرک عزیزی بانک', '15/5/96', 'Not', 'Yes'),
(24, 6, 'Said Moh Shah', 0, 'Null', 'Null', 'Not', 'Not'),
(25, 2, 'Said Moh Shah', 150000, 'رسیدخواجه ادریس از درک عزیزی بانک', '16/5/96', 'Not', 'Yes'),
(26, 2, 'Said Moh Shah', 9000, 'رسید', '16/5/96', 'Not', 'Yes'),
(27, 2, 'Said Moh Shah', 500, 'رسیدبرای عیسی', '16/5/96', 'Not', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `money_received_syrup`
--

CREATE TABLE `money_received_syrup` (
  `ID` int(11) NOT NULL,
  `AccountID` int(11) NOT NULL,
  `ReceivedBy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Amount` int(25) NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Date` varchar(25) NOT NULL,
  `Finished_Sayed_Moh_Shah` varchar(25) NOT NULL DEFAULT 'Not',
  `Finished_Customer` varchar(25) NOT NULL DEFAULT 'Not'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `money_received_syrup`
--

INSERT INTO `money_received_syrup` (`ID`, `AccountID`, `ReceivedBy`, `Amount`, `Description`, `Date`, `Finished_Sayed_Moh_Shah`, `Finished_Customer`) VALUES
(1, 3, 'Said Moh Shah', 4500, 'رسید محمدعیسی ازدرک یک کارتن شربت', '4/5/96', 'Not', 'Not'),
(3, 2, 'Said Moh Shah', 6700, 'رسید خواجه ادریس ازدرک دو کارتن شربت', '29/4/96', 'Not', 'Not');

-- --------------------------------------------------------

--
-- Table structure for table `pomade_customer`
--

CREATE TABLE `pomade_customer` (
  `customer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Bill_No` int(25) NOT NULL,
  `Date_bill` varchar(25) NOT NULL,
  `Description_bill` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Price` int(25) NOT NULL,
  `ReceivedBy` varchar(255) NOT NULL,
  `Amount` int(25) NOT NULL,
  `Date_money` varchar(25) NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `save_date` varchar(25) NOT NULL,
  `balance` int(25) NOT NULL,
  `ID` int(11) NOT NULL,
  `AccountID` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pomade_customer`
--

INSERT INTO `pomade_customer` (`customer`, `Bill_No`, `Date_bill`, `Description_bill`, `Price`, `ReceivedBy`, `Amount`, `Date_money`, `Description`, `save_date`, `balance`, `ID`, `AccountID`) VALUES
('Khowaja Edris', 320, '1396/4/31', 'قیمت مجموع بل', 105000, 'Said Moh Shah', 5000, '5/5/96', 'hjghjhj', '12/8/96', -151000, 1, 2),
('Khowaja Edris', 0, '0', 'Null', 0, 'Null', 0, '0', 'Null', 'Null', 0, 2, 2),
('Khowaja Edris', 503, '1396/5/14', 'قیمت بل', 50000, 'Said Moh Shah', 0, '0', 'Null', '13/5/1396', -106000, 3, 2),
('Khowaja Edris', 503, '1396/5/14', 'قیمت بل', 50000, 'Said Moh Shah', 0, '0', 'Null', '13/5/1396', -212000, 4, 2),
('Khowaja Edris', 503, '1396/5/14', 'نماینده هوتل پروان', 50000, 'Said Moh Shah', 27000, '12/5/96', 'نماینده هوتل پروان', '13/5/1396', -345000, 5, 2),
('Moh Esah', 0, 'Null', 'کارگر ومشتری شرکت کابل آریا', 0, 'Said Moh Shah', 0, 'Null', 'کارگر ومشتری شرکت کابل آریا', '13/5/1396', -20500, 6, 3),
('Moh Esah', 45, '1396/5/13', 'کارگر ومشتری شرکت کابل آریا', 55000, 'Said Moh Shah', 50000, '13/5/96', 'کارگر ومشتری شرکت کابل آریا', '13/5/1396', -36000, 7, 3),
('Nasir Ahmad', 900, '1396/5/15', 'نماینده پوماد شرکت کابل آریا', 200000, 'Said Moh Shah', 50000, '15/5/96', 'نماینده پوماد شرکت کابل آریا', '15/5/96', 150000, 8, 5),
('Khowaja Edris', 507, '1396/5/16', 'نماینده هوتل پروان', 50000, 'Said Moh Shah', 9000, '16/5/96', 'نماینده هوتل پروان', '16/5/96', -104000, 10, 2),
('Khowaja Edris', 508, '1396/5/16', 'نماینده هوتل پروان', 104000, 'Said Moh Shah', 0, '0', 'نماینده هوتل پروان', '16/5/96', 0, 11, 2),
('Khowaja Edris', 509, '1396/5/16', 'نماینده هوتل پروان', 45500, 'Said Moh Shah', 500, '16/5/96', 'نماینده هوتل پروان', '16/5/96', 45000, 12, 2),
('Moh Esah', 601, '1396/5/17', 'کارگر ومشتری شرکت کابل آریا', 50000, 'Said Moh Shah', 0, 'Null', 'کارگر ومشتری شرکت کابل آریا', '17/5/96', 14000, 13, 3);

-- --------------------------------------------------------

--
-- Table structure for table `producttable`
--

CREATE TABLE `producttable` (
  `id` int(11) NOT NULL,
  `Item` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `Picture` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `pic1` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `Description` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `producttable`
--

INSERT INTO `producttable` (`id`, `Item`, `Picture`, `pic1`, `Description`) VALUES
(1, 'Syrup Multi Vitamin 200ml', 'images/product/multivitamin.jpg', 'images/product/multi1.jpg', 'syrup multi vitamin '),
(3, 'Ichtyol', 'images/product/ichtyol.jpg', 'images/product/ichtyol.jpg', 'alksdfj aslkdfj aslkdfj asd fasdf asdf asdf'),
(7, 'last Multi Vitamin', 'images/product/1497634458.17548e3468d7d8c5fcfaef61226698f9.jpg', 'images/product/1497634458.9da016673584956534fda6c94c3fdb09.jpg', 'Baleno Baleno description description');

-- --------------------------------------------------------

--
-- Table structure for table `said_moh_shah_pomade`
--

CREATE TABLE `said_moh_shah_pomade` (
  `date` varchar(25) NOT NULL,
  `paid_by` varchar(255) NOT NULL,
  `credit` int(25) NOT NULL,
  `cr_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `cr_date` varchar(25) NOT NULL,
  `debit` int(25) NOT NULL,
  `de_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `de_date` varchar(25) NOT NULL,
  `balance` int(25) NOT NULL,
  `ID` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `said_moh_shah_pomade`
--

INSERT INTO `said_moh_shah_pomade` (`date`, `paid_by`, `credit`, `cr_description`, `cr_date`, `debit`, `de_description`, `de_date`, `balance`, `ID`) VALUES
('7/5/1396', 'Khowaja Edris', 20000, '', '23/4/96', 8000, '', '', 20000, 1),
('7/5/1396', 'Khowaja Edris', 20000, '', '23/4/96', 13000, '', '', 15000, 2),
('8/10/1396', 'Khowaja Edris', 20000, 'رسیدخواجه ادریس ازطریق عزیزی بانک', '23/4/96', 3500, 'مصرف مختلف توسط آغاصاحب', '5/5/96', 15000, 3),
('8/8/1396', 'Moh Esah', 8000, 'رسیدمحمدعیسی درک پوماد', '7/5/96', 3500, 'مصرف مختلف توسط آغاصاحب', '5/5/96', 15000, 4),
('6/6/1396', 'Moh Esah', 8000, 'رسیدمحمدعیسی درک پوماد', '7/5/96', 5000, 'مصرف', '7/7/96', 15000, 5),
('7/5/1396', 'Khowaja Edris', 20000, 'رسیدخواجه ادریس ازطریق عزیزی بانک', '23/4/96', 5000, 'مصرف', '7/7/96', 7000, 6),
('7/5/1396', 'Khowaja Edris', 100000, 'رسید خواجه ادریس ازدرک عزیزی بانک', '7/5/96', 0, 'Null', 'Null', 100000, 7),
('7/5/1396', 'Khowaja Edris', 100000, 'رسید خواجه ادریس ازدرک عزیزی بانک', '7/5/96', 0, 'Null', 'Null', 100000, 8),
('7/5/1396', 'Khowaja Edris', 100000, 'رسید خواجه ادریس ازدرک عزیزی بانک', '7/5/96', 0, 'Null', 'Null', 100000, 9),
('8/5/1396', 'Said Moh Shah', 0, 'Null', 'Null', 0, 'Null', 'Null', 0, 10),
('6/5/1396', 'Moh Esah', 20000, 'رسیدمحمدعیسی ازدرک پوماد', '7/5/96', 110000, 'مصرف پوماد', '7/5/1396', 10000, 11),
('8/5/1396', 'Khowaja Edris', 10000, 'رسیدخواجه ادریس نقد برای آغاصاحب', '8/5/96', 0, 'Null', 'Null', 10000, 12),
('8/5/1396', 'Moh Esah', 20000, 'رسیدنقد محمدعیسی', '8/5/96', 0, 'Null', 'Null', 30000, 13),
('8/5/1396', 'Khowaja Edris', 5000, 'hjghjhj', '5/5/96', 20000, 'hjghjgjh', '5/5/96', 15000, 14);

-- --------------------------------------------------------

--
-- Table structure for table `stuff`
--

CREATE TABLE `stuff` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stuff`
--

INSERT INTO `stuff` (`ID`, `Name`) VALUES
(1, 'fawad'),
(1, 'fawad'),
(1, 'fawad'),
(1, 'fawad'),
(2, 'ahmad'),
(2, 'ahmad');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `date`) VALUES
(1, 'fawad', '123', '2017-04-01 18:34:48'),
(2, 'javid', '22', '2017-04-01 19:02:56'),
(3, 'ahmad', '444', '2017-04-02 21:58:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouttbl`
--
ALTER TABLE `abouttbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `AccountID` (`AccountID`);

--
-- Indexes for table `bill_in`
--
ALTER TABLE `bill_in`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ComID` (`ComID`);

--
-- Indexes for table `bill_syrup`
--
ALTER TABLE `bill_syrup`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `AccountID` (`AccountID`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contacttbl`
--
ALTER TABLE `contacttbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `AccountID` (`AccountID`);

--
-- Indexes for table `expenses_syrup`
--
ALTER TABLE `expenses_syrup`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `AccountID` (`AccountID`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `money_paid`
--
ALTER TABLE `money_paid`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ComID` (`ComID`);

--
-- Indexes for table `money_received`
--
ALTER TABLE `money_received`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `AccountID` (`AccountID`);

--
-- Indexes for table `money_received_syrup`
--
ALTER TABLE `money_received_syrup`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `AccountID` (`AccountID`);

--
-- Indexes for table `pomade_customer`
--
ALTER TABLE `pomade_customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `producttable`
--
ALTER TABLE `producttable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `said_moh_shah_pomade`
--
ALTER TABLE `said_moh_shah_pomade`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouttbl`
--
ALTER TABLE `abouttbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `bill_in`
--
ALTER TABLE `bill_in`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bill_syrup`
--
ALTER TABLE `bill_syrup`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contacttbl`
--
ALTER TABLE `contacttbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `expenses_syrup`
--
ALTER TABLE `expenses_syrup`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `money_paid`
--
ALTER TABLE `money_paid`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `money_received`
--
ALTER TABLE `money_received`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `money_received_syrup`
--
ALTER TABLE `money_received_syrup`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pomade_customer`
--
ALTER TABLE `pomade_customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `producttable`
--
ALTER TABLE `producttable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `said_moh_shah_pomade`
--
ALTER TABLE `said_moh_shah_pomade`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`AccountID`) REFERENCES `account` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bill_in`
--
ALTER TABLE `bill_in`
  ADD CONSTRAINT `bill_in_ibfk_1` FOREIGN KEY (`ComID`) REFERENCES `companies` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bill_syrup`
--
ALTER TABLE `bill_syrup`
  ADD CONSTRAINT `bill_syrup_ibfk_1` FOREIGN KEY (`AccountID`) REFERENCES `account` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_ibfk_1` FOREIGN KEY (`AccountID`) REFERENCES `account` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `expenses_syrup`
--
ALTER TABLE `expenses_syrup`
  ADD CONSTRAINT `expenses_syrup_ibfk_1` FOREIGN KEY (`AccountID`) REFERENCES `account` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `money_paid`
--
ALTER TABLE `money_paid`
  ADD CONSTRAINT `money_paid_ibfk_1` FOREIGN KEY (`ComID`) REFERENCES `companies` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `money_received`
--
ALTER TABLE `money_received`
  ADD CONSTRAINT `money_received_ibfk_1` FOREIGN KEY (`AccountID`) REFERENCES `account` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `money_received_syrup`
--
ALTER TABLE `money_received_syrup`
  ADD CONSTRAINT `money_received_syrup_ibfk_1` FOREIGN KEY (`AccountID`) REFERENCES `account` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
