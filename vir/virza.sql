-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2020 at 12:25 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virza`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` int(11) NOT NULL,
  `ANAME` varchar(150) NOT NULL,
  `APASS` varchar(150) NOT NULL,
  `IMG` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `ANAME`, `APASS`, `IMG`) VALUES
(1, 'admin', 'admin', 'staff/Admin.png'),
(5, 'afroza', 'afroza', ''),
(6, 'tanvir', 'tanvir', 'staff/boy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `CID` int(11) NOT NULL,
  `CNAME` varchar(150) NOT NULL,
  `CSEC` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`CID`, `CNAME`, `CSEC`) VALUES
(11, 'Play Group', 'Morning'),
(12, 'Nursery', 'Morning'),
(13, 'One', 'N/A'),
(14, 'Two', 'N/A'),
(15, 'Three', 'N/A'),
(16, 'Four', 'N/A'),
(17, 'Five', 'N/A'),
(18, 'Six', 'N/A'),
(19, 'Seven', 'N/A'),
(20, 'Eight', 'N/A'),
(23, 'Play Group', 'Morning'),
(24, 'Nine', 'Business Studies'),
(25, 'Ten', 'Business Studies'),
(26, 'SSC', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ECID` int(11) NOT NULL,
  `ETYPE` varchar(250) NOT NULL,
  `AA` varchar(300) NOT NULL,
  `A` varchar(300) NOT NULL,
  `AAA` varchar(300) NOT NULL,
  `B` varchar(300) NOT NULL,
  `C` varchar(300) NOT NULL,
  `D` varchar(300) NOT NULL,
  `F` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ECID`, `ETYPE`, `AA`, `A`, `AAA`, `B`, `C`, `D`, `F`) VALUES
(2, 'Year Final Examination', 'Carry on your progress', 'Carry on your progress', 'Try more and more', 'Try more and more', 'Slow and steady wins the race', 'Slow and steady wins the race', 'Failure is the pillar of success');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `tim` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `tim`, `name`, `email`, `subject`, `message`) VALUES
(17, '2019-08-13 19:15:00', 'Tanvzi', 'virza805@gmail.com', '01620532566', 'Test ');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `EID` int(11) NOT NULL,
  `ETYPE` varchar(150) NOT NULL,
  `EDATE` varchar(150) NOT NULL,
  `DAY` varchar(100) NOT NULL,
  `6th` varchar(150) NOT NULL,
  `7th` varchar(150) NOT NULL,
  `8th` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`EID`, `ETYPE`, `EDATE`, `DAY`, `6th`, `7th`, `8th`) VALUES
(1, 'Year Final Examination', '2019-12-04', 'Wednesday ', 'Bangla', 'Bangla', 'English'),
(2, 'Model Test 01', '2019-12-04', 'Sunday', 'Bangla', 'Mathematics', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `hclass`
--

CREATE TABLE `hclass` (
  `HID` int(11) NOT NULL,
  `TID` int(11) NOT NULL,
  `CLA` varchar(150) NOT NULL,
  `SEC` varchar(150) NOT NULL,
  `SUB` varchar(150) NOT NULL,
  `HCTIME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `ID` int(11) NOT NULL,
  `RNO` varchar(100) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `REL` varchar(150) NOT NULL,
  `FNAME` varchar(150) NOT NULL,
  `DOB` varchar(150) NOT NULL,
  `GEN` varchar(150) NOT NULL,
  `MAIL` varchar(150) NOT NULL,
  `ADDR` varchar(1000) NOT NULL,
  `SCLASS` varchar(150) NOT NULL,
  `SSEC` varchar(150) NOT NULL,
  `SIMG` varchar(150) NOT NULL,
  `MNAME` varchar(150) NOT NULL,
  `CRNO` varchar(150) NOT NULL,
  `YEAR` varchar(150) NOT NULL,
  `PASS` varchar(250) NOT NULL,
  `TID` int(11) NOT NULL,
  `SN` varchar(500) NOT NULL,
  `PHO` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`ID`, `RNO`, `NAME`, `REL`, `FNAME`, `DOB`, `GEN`, `MAIL`, `ADDR`, `SCLASS`, `SSEC`, `SIMG`, `MNAME`, `CRNO`, `YEAR`, `PASS`, `TID`, `SN`, `PHO`) VALUES
(2, 's303', 'Farzana Akter Mim', 'Islam', 'Liton Sorder', '2005-12-06', 'Female', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'SSC', 'N/A', 'student/a.jpg', 'Aklima Begum', '13', '2020', 's303', 5, '', '01716347508');

-- --------------------------------------------------------

--
-- Table structure for table `lexam`
--

CREATE TABLE `lexam` (
  `LEID` int(11) NOT NULL,
  `ENAME` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lexam`
--

INSERT INTO `lexam` (`LEID`, `ENAME`) VALUES
(2, 'Model Test 01'),
(3, 'Year Final Examination');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `MID` int(11) NOT NULL,
  `REGNO` varchar(150) NOT NULL,
  `SUB` varchar(150) NOT NULL,
  `MARK` varchar(150) NOT NULL,
  `S_MRK` varchar(150) NOT NULL,
  `T_MRK` varchar(150) NOT NULL,
  `GPA` varchar(150) NOT NULL,
  `TERM` varchar(150) NOT NULL,
  `CLASS` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `smark`
--

CREATE TABLE `smark` (
  `SMID` int(11) NOT NULL,
  `REGNO` varchar(100) NOT NULL,
  `CRNO` varchar(500) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `IMG` varchar(500) NOT NULL,
  `TERM` varchar(100) NOT NULL,
  `CLASS` varchar(100) NOT NULL,
  `SEC` varchar(99) NOT NULL,
  `BTU` varchar(100) NOT NULL,
  `BAN` varchar(100) NOT NULL,
  `ETU` varchar(100) NOT NULL,
  `ENG` varchar(100) NOT NULL,
  `MTU` varchar(100) NOT NULL,
  `MAT` varchar(100) NOT NULL,
  `STU` varchar(100) NOT NULL,
  `SCI` varchar(100) NOT NULL,
  `SOTU` varchar(100) NOT NULL,
  `SOC` varchar(100) NOT NULL,
  `RTU` varchar(100) NOT NULL,
  `REL` varchar(100) NOT NULL,
  `ATU` varchar(100) NOT NULL,
  `AOB` varchar(100) NOT NULL,
  `AGR` varchar(100) NOT NULL,
  `ICT` varchar(100) NOT NULL,
  `BOB` varchar(100) NOT NULL,
  `BDTU` varchar(100) NOT NULL,
  `BD` varchar(100) NOT NULL,
  `BDBO` varchar(100) NOT NULL,
  `EDTU` varchar(100) NOT NULL,
  `ED` varchar(100) NOT NULL,
  `MOB` varchar(100) NOT NULL,
  `ROB` varchar(100) NOT NULL,
  `GOB` varchar(100) NOT NULL,
  `SOB` varchar(100) NOT NULL,
  `ACTU` varchar(100) NOT NULL,
  `ACC` varchar(100) NOT NULL,
  `ACOB` varchar(100) NOT NULL,
  `FTU` varchar(100) NOT NULL,
  `FIN` varchar(100) NOT NULL,
  `FOB` varchar(100) NOT NULL,
  `BUTU` varchar(100) NOT NULL,
  `BUS` varchar(100) NOT NULL,
  `BUOB` varchar(100) NOT NULL,
  `IOB` varchar(100) NOT NULL,
  `ICK` varchar(100) NOT NULL,
  `PHK` varchar(100) NOT NULL,
  `CAK` varchar(100) NOT NULL,
  `AGK` varchar(100) NOT NULL,
  `FIK` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smark`
--

INSERT INTO `smark` (`SMID`, `REGNO`, `CRNO`, `NAME`, `IMG`, `TERM`, `CLASS`, `SEC`, `BTU`, `BAN`, `ETU`, `ENG`, `MTU`, `MAT`, `STU`, `SCI`, `SOTU`, `SOC`, `RTU`, `REL`, `ATU`, `AOB`, `AGR`, `ICT`, `BOB`, `BDTU`, `BD`, `BDBO`, `EDTU`, `ED`, `MOB`, `ROB`, `GOB`, `SOB`, `ACTU`, `ACC`, `ACOB`, `FTU`, `FIN`, `FOB`, `BUTU`, `BUS`, `BUOB`, `IOB`, `ICK`, `PHK`, `CAK`, `AGK`, `FIK`) VALUES
(1, 's261', '1', 'Moriom Akter', 'student/a.jpg', 'Year Final Examination', 'Nursery', 'N/A', '30', '70', '30', '70', '30', '70', '', '', '', '', '30', '70', '30', '', '70', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 's262', '2', 'Arif Hossain', 'student/a.jpg', 'Year Final Examination', 'Nursery', 'N/A', '00', '58', '29', '53', '00', '57', '', '', '', '', '00', '57', '00', '', '50', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 's263', '3', 'Alinur Hossain Raiyan', 'student/img20190312_21185770_0001.jpg', 'Year Final Examination', 'Nursery', 'N/A', '30', '70', '30', '70', '30', '70', '', '', '', '', '30', '70', '28', '', '70', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 's264', '4', 'Ms.Arifa Akter Rotna', 'student/b.jpg', 'Year Final Examination', 'Nursery', 'N/A', '30', '70', '30', '70', '30', '70', '', '', '', '', '29', '68', '29', '', '68', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 's265', '5', 'Samira Akter', 'student/b.jpg', 'Year Final Examination', 'Nursery', 'N/A', '30', '70', '30', '70', '29', '68', '', '', '', '', '30', '70', '27', '', '70', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 's266', '6', 'Robin Hossain', 'student/img20190312_21185770_0002.jpg', 'Year Final Examination', 'Nursery', 'N/A', '25', '70', '27', '67', '26', '61', '', '', '', '', '30', '70', '26', '', '66', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 's267', '7', 'Atika Akter Mim', 'student/img20190312_21185770_0003.jpg', 'Year Final Examination', 'Nursery', 'N/A', '24', '57', '25', '56', '25', '51', '', '', '', '', '27', '63', '25', '', '47', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 's268', '8', 'Biddut Hossain', 'student/b.jpg', 'Year Final Examination', 'Nursery', 'N/A', '30', '70', '30', '70', '30', '70', '', '', '', '', '29', '65', '29', '', '67', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 's269', '9', 'Hafsa Akter Monika', 'student/a.jpg', 'Year Final Examination', 'Nursery', 'N/A', '29', '67', '30', '64', '28', '65', '', '', '', '', '30', '66', '27', '', '69', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 's270', '10', 'Hasirun Hossain', 'student/b.jpg', 'Year Final Examination', 'Nursery', 'N/A', '30', '70', '30', '70', '30', '70', '', '', '', '', '30', '69', '30', '', '69', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 's271', '11', 'Miraj Hossain', 'student/a.jpg', 'Year Final Examination', 'Nursery', 'N/A', '30', '63', '29', '64', '29', '62', '', '', '', '', '28', '70', '22', '', '51', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 's272', '12', 'Borsha', 'student/b.jpg', 'Year Final Examination', 'Nursery', 'N/A', '25', '70', '30', '68', '27', '69', '', '', '', '', '29', '68', '29', '', '68', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 's274', '14', 'Muntahina Akter Toha', 'student/img20190312_21185770_0004.jpg', 'Year Final Examination', 'Nursery', 'N/A', '30', '70', '30', '70', '30', '70', '', '', '', '', '30', '70', '30', '', '68', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 'S101', '1', 'Mohammad Salman Farsi', 'student/a.jpg', 'Year Final Examination', 'Play Group', 'Morning', '29', '70', '30', '67', '30', '60', '', '', '', '', '30', '54', '23', '', '67', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 's103', '3', 'Nishat', 'student/b.jpg', 'Year Final Examination', 'Play Group', 'Morning', '30', '69', '27', '66', '25', '68', '', '', '', '', '28', '52', '26', '', '42', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 's105', '5', 'Marufa Akter', 'student/a.jpg', 'Year Final Examination', 'Play Group', 'Morning', '00', '00', '00', '66', '00', '68', '', '', '', '', '00', '00', '00', '', '21', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 's106', '6', 'Husna Akter', 'student/06.jpg', 'Year Final Examination', 'Play Group', 'Morning', '30', '70', '30', '68', '30', '70', '', '', '', '', '30', '68', '30', '', '64', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 's107', '7', 'Mohammad Ali', 'student/2019mp7.jpg', 'Year Final Examination', 'Play Group', 'Morning', '29', '69', '30', '60', '28', '69', '', '', '', '', '30', '54', '26', '', '61', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 's108', '8', 'Meherun Nesa Purnota', 'student/b.jpg', 'Year Final Examination', 'Play Group', 'Morning', '30', '70', '30', '68', '29', '70', '', '', '', '', '29', '70', '30', '', '68', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 's109', '9', 'Nahidul Islam Ahad', 'student/2019mp9.jpg', 'Year Final Examination', 'Play Group', 'Morning', '30', '69', '30', '68', '28', '70', '', '', '', '', '27', '60', '24', '', '62', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 's110', '10', 'Lamiya Akter', 'student/2019mp10.jpg', 'Year Final Examination', 'Play Group', 'Morning', '00', '46', '00', '63', '00', '55', '', '', '', '', '00', '12', '00', '', '00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 's111', '11', 'Yamin', 'student/11.jpg', 'Year Final Examination', 'Play Group', 'Morning', '30', '69', '29', '68', '30', '70', '', '', '', '', '27', '44', '26', '', '54', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 's112', '12', 'Hamim', 'student/a.jpg', 'Year Final Examination', 'Play Group', 'Morning', '26', '70', '30', '68', '29', '70', '', '', '', '', '28', '54', '25', '', '62', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 's113', '13', 'Hujaifa Islam', 'student/a.jpg', 'Year Final Examination', 'Play Group', 'Morning', '30', '00', '28', '00', '25', '00', '', '', '', '', '28', '00', '24', '', '00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, 's115', '15', 'Md. AL - AMIN', 'student/b.jpg', 'Year Final Examination', 'Play Group', 'Morning', '29', '68', '29', '63', '23', '63', '', '', '', '', '26', '46', '25', '', '47', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 's116', '16', 'Ajmira', 'student/a.jpg', 'Year Final Examination', 'Play Group', 'Morning', '00', '70', '00', '68', '00', '70', '', '', '', '', '00', '70', '00', '', '65', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 's117', '17', 'Sumiya Al Arshi', 'student/2019mp17.jpg', 'Year Final Examination', 'Play Group', 'Morning', '29', '69', '29', '63', '30', '70', '', '', '', '', '30', '54', '23', '', '61', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 's118', '18', 'Abdullah', 'student/b.jpg', 'Year Final Examination', 'Play Group', 'Morning', '30', '70', '30', '66', '30', '68', '', '', '', '', '28', '68', '25', '', '64', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(86, 's124', '1', 'Lamiya Akter Mitu', 'student/one1.jpg', 'Year Final Examination', 'One', 'N/A', '30', '70', '30', '70', '30', '70', '', '', '30', '70', '30', '70', '30', '', '69', '', '', '', '', '', '30', '70', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(87, 's125', '2', 'Roman Shikder', 'student/2019mone2.jpg', 'Year Final Examination', 'One', 'N/A', '30', '70', '30', '70', '30', '70', '', '', '30', '70', '25', '65', '29', '', '63', '', '', '', '', '', '30', '70', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(88, 's126', '3', 'Sadiya Akter Nizum', 'student/a.jpg', 'Year Final Examination', 'One', 'N/A', '30', '70', '30', '67', '25', '70', '', '', '30', '70', '17', '64', '23', '', '67', '', '', '', '', '', '24', '70', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(89, 's127', '4', 'Juimony', 'student/one4.jpg', 'Year Final Examination', 'One', 'N/A', '29', '50', '19', '50', '24', '70', '', '', '27', '70', '20', '50', '24', '', '58', '', '', '', '', '', '24', '55', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(90, 's128', '5', 'Sadiya Akter Ambiya', 'student/one5.jpg', 'Year Final Examination', 'One', 'N/A', '29', '50', '19', '55', '25', '70', '', '', '29', '70', '25', '67', '26', '', '64', '', '', '', '', '', '24', '68', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(91, 's129', '6', 'Fatema Akter', 'student/one6.jpg', 'Year Final Examination', 'One', 'N/A', '29', '00', '22', '60', '25', '70', '', '', '23', '35', '17', '52', '10', '', '0', '', '', '', '', '', '24', '64', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(92, 's130', '7', 'Shihab Hossain', 'student/7.jpg', 'Year Final Examination', 'One', 'N/A', '30', '50', '28', '49', '25', '69', '', '', '30', '70', '20', '50', '20', '', '52', '', '', '', '', '', '23', '68', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(93, 's131', '8', 'Jasmine Akter', 'student/2019mone8.jpg', 'Year Final Examination', 'One', 'N/A', '28', '50', '17', '52', '24', '69', '', '', '30', '68', '19', '61', '24', '', '64', '', '', '', '', '', '23', '64', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(94, 's132', '9', 'Alif', 'student/2019mone9.jpg', 'Year Final Examination', 'One', 'N/A', '30', '70', '29', '70', '30', '70', '', '', '30', '70', '30', '70', '29', '', '67', '', '', '', '', '', '30', '70', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(95, 's133', '10', 'Salman Afnan Abik', 'student/2019mone10.jpg', 'Year Final Examination', 'One', 'N/A', '27', '50', '22', '25', '23', '61', '', '', '29', '58', '17', '50', '24', '', '60', '', '', '', '', '', '20', '54', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(96, 's134', '11', 'Sabbir  Hossain', 'student/a.jpg', 'Year Final Examination', 'One', 'N/A', '30', '70', '30', '66', '28', '70', '', '', '30', '70', '26', '61', '25', '', '67', '', '', '', '', '', '23', '68', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(97, 's135', '12', 'Golam Rabbi', 'student/2019mone12.jpg', 'Year Final Examination', 'One', 'N/A', '29', '50', '24', '51', '25', '70', '', '', '29', '68', '17', '50', '18', '', '65', '', '', '', '', '', '24', '59', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(98, 's136', '13', 'Srity Akter', 'student/2019mone13.jpg', 'Year Final Examination', 'One', 'N/A', '27', '50', '20', '44', '00', '69', '', '', '28', '68', '17', '50', '26', '', '61', '', '', '', '', '', '23', '61', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(99, 's137', '14', 'Sumona Akter', 'student/b.jpg', 'Year Final Examination', 'One', 'N/A', '26', '50', '23', '61', '25', '69', '', '', '25', '70', '25', '50', '27', '', '68', '', '', '', '', '', '23', '65', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(142, 's157', '1', 'Fariha Rahman Pihu', 'student/two1.jpg', 'Year Final Examination', 'Two', 'Morning', '30', '70', '30', '70', '30', '70', '', '', '30', '70', '30', '70', '29', '', '70', '', '', '', '', '', '30', '70', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(143, 's158', '2', 'Nazmul Hossain', 'student/2019mtwo2.jpg', 'Year Final Examination', 'Two', 'Morning', '30', '70', '30', '70', '30', '70', '', '', '30', '70', '30', '70', '29', '', '68', '', '', '', '', '', '30', '70', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(144, 's159', '3', 'Khadija Akter', 'student/two3.jpg', 'Year Final Examination', 'Two', 'Morning', '29', '70', '29', '69', '29', '70', '', '', '27', '70', '28', '70', '29', '', '68', '', '', '', '', '', '30', '67', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(145, 's160', '4', 'Shorna Akter', 'student/4.jpg', 'Year Final Examination', 'Two', 'Morning', '29', '70', '30', '69', '29', '68', '', '', '30', '70', '24', '63', '28', '', '68', '', '', '', '', '', '30', '70', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(146, 's161', '5', 'Ebrahim Hossain Abir', 'student/05.jpg', 'Year Final Examination', 'Two', 'Morning', '29', '70', '30', '70', '30', '67', '', '', '30', '70', '24', '63', '26', '', '68', '', '', '', '', '', '29', '68', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(147, 's162', '6', 'Mohammad Salman', 'student/two6.jpg', 'Year Final Examination', 'Two', 'Morning', '29', '67', '22', '66', '29', '64', '', '', '29', '70', '29', '60', '12', '', '68', '', '', '', '', '', '22', '66', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(149, 's164', '8', 'Lota Mony', 'student/two8.jpg', 'Year Final Examination', 'Two', 'Morning', '25', '52', '13', '00', '22', '00', '', '', '25', '66', '22', '00', '20', '', '00', '', '', '', '', '', '25', '00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(150, 's165', '9', 'Sharmin Akter Bristy', 'student/two9.jpg', 'Year Final Examination', 'Two', 'Morning', '24', '52', '23', '68', '23', '60', '', '', '25', '68', '24', '60', '25', '', '64', '', '', '', '', '', '28', '61', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(151, 's166', '10', 'Moriom Akter Jhinuk', 'student/two10.jpg', 'Year Final Examination', 'Two', 'Morning', '27', '53', '22', '47', '21', '55', '', '', '21', '68', '25', '70', '20', '', '63', '', '', '', '', '', '23', '51', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(152, 's167', '11', 'Asmota Akter', 'student/two11.jpg', 'Year Final Examination', 'Two', 'Morning', '29', '52', '22', '68', '23', '65', '', '', '17', '66', '25', '60', '21', '', '61', '', '', '', '', '', '29', '57', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(153, 's168', '12', 'Nasima Akter', 'student/012.jpg', 'Year Final Examination', 'Two', 'Morning', '30', '70', '30', '70', '30', '69', '', '', '30', '70', '30', '70', '30', '', '70', '', '', '', '', '', '30', '70', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(155, 's170', '14', 'Robin', 'student/a.jpg', 'Year Final Examination', 'Two', 'Morning', '00', '69', '00', '70', '00', '69', '', '', '00', '68', '00', '70', '00', '', '63', '', '', '', '', '', '00', '67', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(156, 's171', '15', 'Apon Hossain', 'student/b.jpg', 'Year Final Examination', 'Two', 'Morning', '27', '46', '24', '68', '22', '58', '', '', '25', '68', '22', '51', '19', '', '55', '', '', '', '', '', '19', '49', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(157, 's172', '16', 'Sompod Boiragi', 'student/a.jpg', 'Year Final Examination', 'Two', 'Morning', '26', '52', '22', '00', '20', '49', '', '', '26', '68', '25', '65', '10', '', '34', '', '', '', '', '', '18', '55', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(158, 's237', '1', 'Tahera Tabassum Tony', 'student/0111.jpg', 'Year Final Examination', 'Three', 'Morning', '28', '62', '28', '70', '27', '68', '27', '70', '30', '69', '30', '70', '27', '', '66', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(159, 's238', '1', 'Seam Ahmed', 'student/111.jpg', 'Year Final Examination', 'Three', 'Morning', '30', '68', '27', '69', '28', '64', '25', '70', '30', '68', '30', '70', '27', '', '59', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(160, 's239', '2', 'Asha Akter', 'student/02.jpg', 'Year Final Examination', 'Three', 'Morning', '30', '70', '28', '68', '30', '70', '28', '70', '29', '68', '28', '70', '28', '', '70', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(161, 's240', '3', 'Mony Akter Mim', 'student/0333.jpg', 'Year Final Examination', 'Three', 'Morning', '30', '69', '29', '70', '30', '68', '28', '70', '29', '69', '30', '70', '29', '', '69', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(162, 's241', '4', 'Nusrat Jahan Nusiba', 'student/three4.jpg', 'Year Final Examination', 'Three', 'Morning', '30', '65', '26', '66', '26', '68', '27', '63', '28', '68', '30', '70', '29', '', '61', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(163, 's242', '5', 'MD.Fahim', 'student/three5.jpg', 'Year Final Examination', 'Three', 'Morning', '19', '41', '14', '54', '15', '32', '21', '65', '20', '57', '24', '58', '25', '', '50', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(164, 's243', '6', 'Suborna Akter Shumi', 'student/three6.jpg', 'Year Final Examination', 'Three', 'Morning', '21', '00', '15', '00', '12', '26', '18', '00', '19', '00', '29', '00', '24', '', '00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(165, 's244', '7', 'Jannatul', 'student/a.jpg', 'Year Final Examination', 'Three', 'Morning', '26', '40', '09', '31', '23', '42', '18', '40', '18', '37', '27', '58', '26', '', '60', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(166, 's245', '8', 'Afiya Akter Ayesha', 'student/three8.jpg', 'Year Final Examination', 'Three', 'Morning', '22', '41', '27', '60', '15', '39', '22', '44', '19', '45', '28', '62', '27', '', '64', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(167, 's246', '10', 'Khadija Akter', 'student/three10.jpg', 'Year Final Examination', 'Three', 'Morning', '20', '34', '19', '52', '18', '65', '22', '46', '24', '60', '29', '65', '21', '', '62', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(169, 's248', '12', 'Sujon Hossain', 'student/three12.jpg', 'Year Final Examination', 'Three', 'Morning', '12', '21', '10', '33', '12', '32', '17', '38', '13', '43', '06', '38', '21', '', '53', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(170, 's249', '13', 'Sujon Hossain', 'student/three13.jpg', 'Year Final Examination', 'Three', 'Morning', '14', '34', '21', '40', '27', '53', '17', '56', '15', '39', '24', '65', '20', '', '58', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(171, 's250', '14', 'Shohidul Hasan Emon', 'student/three14.jpg', 'Year Final Examination', 'Three', 'Morning', '15', '23', '08', '39', '04', '32', '18', '46', '10', '46', '16', '60', '22', '', '54', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(172, 's251', '15', 'Yasin Hossain Tanvir', 'student/three15.jpg', 'Year Final Examination', 'Three', 'Morning', '09', '37', '14', '46', '22', '47', '15', '54', '10', '44', '16', '65', '19', '', '53', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(173, 's252', '16', 'Ritu', 'student/three16.jpg', 'Year Final Examination', 'Three', 'Morning', '12', '29', '00', '54', '13', '36', '19', '52', '16', '66', '24', '57', '27', '', '66', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(174, 's253', '17', 'Adiba Rahman', 'student/three17.jpg', 'Year Final Examination', 'Three', 'Morning', '22', '29', '18', '59', '16', '34', '12', '36', '21', '00', '29', '53', '27', '', '00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(176, 's255', '19', 'Md. Rasel Sheikh', 'student/b.jpg', 'Year Final Examination', 'Three', 'Morning', '23', '34', '17', '41', '24', '67', '25', '57', '23', '59', '20', '65', '20', '', '53', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(178, 's257', '21', 'Refat', 'student/b.jpg', 'Year Final Examination', 'Three', 'Morning', '22', '45', '12', '53', '19', '44', '26', '68', '21', '47', '18', '55', '23', '', '49', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(179, 's258', '22', 'Mohot Mia', 'student/b.jpg', 'Year Final Examination', 'Three', 'Morning', '08', '25', '11', '34', '15', '38', '18', '42', '14', '37', '17', '53', '23', '', '51', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(182, 's173', '1', 'Meftahul Jannat', 'student/four1.jpg', 'Year Final Examination', 'Four', 'N/A', '29', '68', '28', '70', '29', '67', '29', '70', '29', '70', '30', '68', '28', '', '64', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(183, 's174', '2', 'Moriom Akter Shifa', 'student/b.jpg', 'Year Final Examination', 'Four', 'N/A', '28', '69', '26', '65', '26', '63', '28', '70', '29', '69', '30', '68', '29', '', '66', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(184, 's175', '3', 'Shakil', 'student/four3.jpg', 'Year Final Examination', 'Four', 'N/A', '23', '67', '17', '68', '24', '63', '17', '63', '23', '63', '26', '68', '24', '', '60', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(185, 's176', '4', 'Sakibul Hasan Rabbi', 'student/four4.jpg', 'Year Final Examination', 'Four', 'N/A', '18', '35', '17', '47', '17', '43', '17', '63', '14', '43', '22', '60', '15', '', '47', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(186, 's177', '5', 'Sobahan Mia', 'student/four5.jpg', 'Year Final Examination', 'Four', 'N/A', '17', '39', '13', '42', '18', '38', '15', '65', '15', '48', '24', '55', '19', '', '55', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(187, 's178', '6', 'Shakib Reja', 'student/b.jpg', 'Year Final Examination', 'Four', 'N/A', '04', '29', '03', '30', '07', '04', '03', '31', '12', '30', '15', '52', '18', '', '45', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(188, 's179', '7', 'Suborna Akter', 'student/07.jpg', 'Year Final Examination', 'Four', 'N/A', '22', '64', '23', '54', '26', '43', '20', '68', '18', '52', '25', '55', '21', '', '55', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(189, 's180', '8', 'Taznur Akter Bela', 'student/08.jpg', 'Year Final Examination', 'Four', 'N/A', '24', '64', '26', '70', '23', '61', '24', '67', '24', '64', '27', '60', '24', '', '57', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(190, 's181', '9', 'Shorob Ali', 'student/09.jpg', 'Year Final Examination', 'Four', 'N/A', '14', '20', '11', '35', '12', '25', '15', '51', '15', '36', '22', '55', '22', '', '56', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(192, 's183', '11', 'Shopon', 'student/b.jpg', 'Year Final Examination', 'Four', 'N/A', '07', '26', '07', '34', '10', '23', '13', '41', '08', '43', '17', '58', '16', '', '46', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(193, 's184', '1', 'Labiba', 'student/six1.jpg', 'Year Final Examination', 'Six', 'N/A', '26', '43', '24', '56', '22', '49', '23', '45', '23', '40', '29', '48', '', '', '', '24', '17', '', '', '', '', '', '13', '18', '13', '10', '', '', '', '', '', '', '', '', '', '15', '05', '50', '50', '50', '50'),
(194, 's185', '2', 'Rony Mia', 'student/2019nsix2.jpg', 'Year Final Examination', 'Six', 'N/A', '24', '34', '18', '52', '30', '49', '25', '46', '23', '40', '26', '46', '', '', '', '24', '07', '', '', '', '', '', '14', '18', '12', '11', '', '', '', '', '', '', '', '', '', '18', '05', '50', '50', '50', '50'),
(195, 's186', '3', 'Arman Hossain', 'student/six3.jpg', 'Year Final Examination', 'Six', 'N/A', '23', '35', '11', '34', '24', '49', '23', '41', '16', '34', '27', '49', '', '', '', '24', '09', '', '', '', '', '', '10', '14', '12', '10', '', '', '', '', '', '', '', '', '', '14', '05', '50', '50', '50', '50'),
(196, 's187', '4', 'Soniya Akter Priya', 'student/2019nsix4.jpg', 'Year Final Examination', 'Six', 'N/A', '24', '39', '18', '44', '30', '49', '25', '46', '24', '38', '26', '45', '', '', '', '24', '11', '', '', '', '', '', '11', '18', '13', '13', '', '', '', '', '', '', '', '', '', '16', '05', '50', '50', '50', '50'),
(198, 's189', '6', 'Tanjila Akter', 'student/066.jpg', 'Year Final Examination', 'Six', 'N/A', '25', '24', '15', '44', '12', '45', '19', '30', '18', '25', '22', '36', '', '', '', '22', '11', '', '', '', '', '', '10', '17', '08', '10', '', '', '', '', '', '', '', '', '', '14', '05', '50', '50', '50', '50'),
(199, 's190', '7', 'Riyad Shikder', 'student/six7.jpg', 'Year Final Examination', 'Six', 'N/A', '14', '21', '10', '30', '16', '44', '12', '29', '11', '26', '22', '33', '', '', '', '21', '08', '', '', '', '', '', '10', '12', '07', '12', '', '', '', '', '', '', '', '', '', '14', '05', '50', '50', '50', '50'),
(200, 's191', '8', 'Sarwar Hasan Akash', 'student/six8.jpg', 'Year Final Examination', 'Six', 'N/A', '19', '23', '10', '37', '26', '49', '24', '34', '20', '25', '27', '33', '', '', '', '24', '05', '', '', '', '', '', '11', '15', '11', '12', '', '', '', '', '', '', '', '', '', '15', '05', '50', '50', '50', '50'),
(201, 's192', '9', 'Shahidul Hossain', 'student/six9.jpg', 'Year Final Examination', 'Six', 'N/A', '20', '21', '10', '38', '20', '39', '21', '27', '14', '20', '23', '36', '', '', '', '15', '13', '', '', '', '', '', '13', '17', '14', '10', '', '', '', '', '', '', '', '', '', '16', '05', '50', '50', '50', '50'),
(202, 's193', '10', 'Mahim', 'student/six10.jpg', 'Year Final Examination', 'Six', 'N/A', '12', '22', '05', '31', '08', '28', '12', '31', '10', '25', '22', '37', '', '', '', '23', '07', '', '', '', '', '', '10', '13', '14', '07', '', '', '', '', '', '', '', '', '', '12', '05', '50', '50', '50', '50'),
(204, 's195', '12', 'Sojib Mia', 'student/six12.jpg', 'Year Final Examination', 'Six', 'N/A', '08', '18', '01', '32', '06', '33', '10', '23', '10', '21', '13', '33', '', '', '', '22', '13', '', '', '', '', '', '11', '15', '09', '10', '', '', '', '', '', '', '', '', '', '11', '05', '50', '50', '50', '50'),
(205, 's196', '13', 'Himel Antony Costy', 'student/0133.jpg', 'Year Final Examination', 'Six', 'N/A', '11', '18', '02', '31', '05', '23', '10', '31', '07', '21', '29', '47', '', '', '', '19', '04', '', '', '', '', '', '10', '10', '07', '05', '', '', '', '', '', '', '', '', '', '06', '05', '50', '50', '50', '50'),
(206, 's197', '14', 'Afroga Akter', 'student/0144.jpg', 'Year Final Examination', 'Six', 'N/A', '17', '26', '11', '26', '30', '47', '20', '24', '17', '11', '22', '23', '', '', '', '20', '06', '', '', '', '', '', '12', '14', '10', '12', '', '', '', '', '', '', '', '', '', '10', '05', '50', '50', '50', '50'),
(207, 's198', '15', 'Aysha Siddika', 'student/0155.jpg', 'Year Final Examination', 'Six', 'N/A', '27', '36', '24', '46', '28', '49', '26', '42', '24', '34', '30', '47', '', '', '', '24', '09', '', '', '', '', '', '13', '18', '18', '10', '', '', '', '', '', '', '', '', '', '14', '05', '50', '50', '50', '50'),
(208, 's199', '16', 'Jakaria', 'student/b.jpg', 'Year Final Examination', 'Six', 'N/A', '16', '13', '07', '26', '18', '40', '09', '29', '12', '15', '21', '26', '', '', '', '21', '08', '', '', '', '', '', '13', '15', '07', '11', '', '', '', '', '', '', '', '', '', '15', '05', '50', '50', '50', '50'),
(209, 's200', '17', 'Homayun Kabir', 'student/a.jpg', 'Year Final Examination', 'Six', 'N/A', '19', '19', '11', '28', '22', '48', '23', '28', '21', '18', '27', '43', '', '', '', '21', '08', '', '', '', '', '', '10', '18', '17', '11', '', '', '', '', '', '', '', '', '', '13', '05', '50', '50', '50', '50'),
(210, 's201', '1', 'Mim Akter', 'student/seven1.jpg', 'Year Final Examination', 'Seven', 'N/A', '25', '47', '23', '50', '25', '50', '22', '42', '23', '48', '23', '37', '', '', '', '21', '17', '', '', '', '', '', '11', '19', '14', '19', '', '', '', '', '', '', '', '', '', '15', '05', '50', '50', '50', '50'),
(211, 's202', '2', 'MD.Baizid Ali', 'student/seven2.jpg', 'Year Final Examination', 'Seven', 'N/A', '22', '41', '18', '42', '20', '49', '23', '37', '23', '46', '22', '35', '', '', '', '20', '13', '', '', '', '', '', '07', '19', '06', '13', '', '', '', '', '', '', '', '', '', '15', '05', '50', '50', '50', '50'),
(212, 's203', '3', 'Bappi', 'student/seven3.jpg', 'Year Final Examination', 'Seven', 'N/A', '19', '31', '10', '30', '10', '34', '11', '31', '23', '35', '17', '28', '', '', '', '20', '10', '', '', '', '', '', '06', '13', '06', '13', '', '', '', '', '', '', '', '', '', '14', '05', '50', '50', '50', '50'),
(214, 's205', '5', 'Sabina Khatun', 'student/seven5.jpg', 'Year Final Examination', 'Seven', 'N/A', '22', '37', '13', '43', '21', '44', '19', '30', '18', '41', '19', '27', '', '', '', '23', '10', '', '', '', '', '', '07', '16', '13', '14', '', '', '', '', '', '', '', '', '', '14', '05', '50', '50', '50', '50'),
(215, 's206', '6', 'Mymuna', 'student/seven7.jpg', 'Year Final Examination', 'Seven', 'N/A', '23', '32', '13', '34', '15', '40', '18', '36', '19', '29', '18', '28', '', '', '', '21', '11', '', '', '', '', '', '05', '18', '10', '12', '', '', '', '', '', '', '', '', '', '12', '05', '50', '50', '50', '50'),
(216, 's207', '7', 'Mahedi Hasan Siyam', 'student/seven8.jpg', 'Year Final Examination', 'Seven', 'N/A', '14', '23', '11', '29', '12', '26', '13', '27', '15', '39', '15', '27', '', '', '', '16', '11', '', '', '', '', '', '04', '16', '09', '11', '', '', '', '', '', '', '', '', '', '13', '05', '50', '50', '50', '50'),
(217, 's208', '9', 'Junaeed ', 'student/seven9.jpg', 'Year Final Examination', 'Seven', 'N/A', '15', '30', '11', '23', '04', '27', '14', '31', '16', '32', '16', '26', '', '', '', '20', '07', '', '', '', '', '', '05', '12', '07', '09', '', '', '', '', '', '', '', '', '', '16', '05', '50', '50', '50', '50'),
(218, 's209', '10', 'Rion Hasan', 'student/seven10.jpg', 'Year Final Examination', 'Seven', 'N/A', '17', '29', '12', '24', '04', '34', '15', '30', '13', '34', '11', '25', '', '', '', '20', '11', '', '', '', '', '', '07', '11', '07', '11', '', '', '', '', '', '', '', '', '', '15', '05', '50', '50', '50', '50'),
(219, 's210', '11', 'Sahajadi Akter', 'student/seven11.jpg', 'Year Final Examination', 'Seven', 'N/A', '22', '38', '15', '33', '09', '39', '16', '36', '21', '42', '18', '33', '', '', '', '20', '11', '', '', '', '', '', '06', '12', '08', '13', '', '', '', '', '', '', '', '', '', '13', '05', '50', '50', '50', '50'),
(220, 's211', '12', 'Younus Nobi', 'student/seven12.jpg', 'Year Final Examination', 'Seven', 'N/A', '13', '25', '09', '29', '01', '28', '08', '29', '16', '29', '12', '28', '', '', '', '19', '11', '', '', '', '', '', '05', '15', '07', '11', '', '', '', '', '', '', '', '', '', '12', '05', '50', '50', '50', '50'),
(221, 's212', '13', 'Eameen', 'student/seven13.jpg', 'Year Final Examination', 'Seven', 'N/A', '10', '19', '08', '25', '06', '20', '13', '28', '15', '29', '13', '24', '', '', '', '19', '09', '', '', '', '', '', '07', '12', '05', '11', '', '', '', '', '', '', '', '', '', '15', '05', '50', '50', '50', '50'),
(222, 's213', '14', 'Rakibul Islam Rakib', 'student/b.jpg', 'Year Final Examination', 'Seven', 'N/A', '08', '17', '10', '24', '05', '21', '11', '29', '12', '27', '10', '20', '', '', '', '19', '08', '', '', '', '', '', '07', '10', '10', '13', '', '', '', '', '', '', '', '', '', '14', '05', '50', '50', '50', '50'),
(224, 's215', '16', 'Jannatul Ferdous', 'student/a.jpg', 'Year Final Examination', 'Seven', 'N/A', '21', '32', '12', '27', '10', '32', '12', '29', '14', '32', '14', '26', '', '', '', '16', '13', '', '', '', '', '', '05', '15', '06', '12', '', '', '', '', '', '', '', '', '', '07', '05', '50', '50', '50', '50'),
(225, 's216', '17', 'Marjana', 'student/a.jpg', 'Year Final Examination', 'Seven', 'N/A', '24', '44', '18', '51', '23', '29', '24', '41', '20', '40', '23', '36', '', '', '', '23', '13', '', '', '', '', '', '09', '18', '16', '13', '', '', '', '', '', '', '', '', '', '14', '05', '50', '50', '50', '50'),
(227, 's277', '1', 'Abdul Kaium Maruf Hasan', 'student/2019nnine1.jpg', 'Year Final Examination', 'Nine', 'Business Studies', '19', '37', '16', '52', '25', '42', '23', '43', '', '', '20', '36', '', '15', '26', '', '15', '21', '35', '07', '20', '46', '12', '18', '15', '', '30', '37', '12', '23', '35', '15', '19', '33', '15', '13', '25', '50', '50', '25', ''),
(228, 's278', '2', 'Parvez Rahman Sifat', 'student/2019nnine2.jpg', 'Year Final Examination', 'Nine', 'Business Studies', '07', '23', '02', '16', '05', '19', '11', '24', '', '', '16', '29', '', '14', '26', '', '17', '10', '17', '07', '03', '21', '09', '17', '10', '', '18', '22', '10', '11', '25', '15', '11', '27', '13', '14', '25', '50', '50', '25', ''),
(229, 's279', '3', 'Papeea Akter Rima', 'student/2019nnine3.jpg', 'Year Final Examination', 'Nine', 'Business Studies', '21', '42', '13', '37', '16', '42', '16', '40', '', '', '21', '44', '', '11', '38', '', '11', '19', '36', '13', '10', '30', '10', '11', '12', '', '11', '29', '11', '18', '32', '12', '17', '33', '12', '09', '25', '50', '50', '25', ''),
(231, 's281', '5', 'Ismile Hossain', 'student/2019nnine5.jpg', 'Year Final Examination', 'Nine', 'Business Studies', '14', '19', '04', '24', '09', '00', '12', '23', '', '', '16', '20', '', '15', '22', '', '15', '12', '17', '07', '04', '20', '00', '15', '11', '', '16', '28', '13', '14', '19', '15', '11', '20', '13', '15', '25', '50', '50', '25', ''),
(232, 's282', '6', 'Easin Arafat', 'student/2019nnine6.jpg', 'Year Final Examination', 'Nine', 'Business Studies', '08', '00', '01', '14', '05', '04', '07', '20', '', '', '15', '22', '', '00', '00', '', '00', '05', '21', '07', '00', '02', '09', '17', '10', '', '10', '20', '11', '09', '19', '15', '10', '20', '13', '00', '18', '35', '35', '18', ''),
(233, 's283', '7', 'Easin Afsar', 'student/2019nnine7.jpg', 'Year Final Examination', 'Nine', 'Business Studies', '08', '20', '05', '15', '10', '12', '06', '16', '', '', '14', '18', '', '15', '20', '', '15', '17', '17', '07', '03', '16', '08', '16', '11', '', '10', '25', '13', '09', '24', '15', '05', '14', '15', '14', '25', '50', '50', '25', ''),
(234, 's284', '8', 'Md Ifrat', 'student/2019nnine8.jpg', 'Year Final Examination', 'Nine', 'Business Studies', '07', '32', '06', '22', '08', '18', '08', '28', '', '', '14', '26', '', '14', '21', '', '14', '14', '17', '07', '04', '20', '09', '14', '17', '', '14', '25', '10', '11', '19', '15', '07', '24', '13', '14', '25', '50', '50', '25', ''),
(235, 's285', '9', 'Jannaty ', 'student/2019nnine9.jpg', 'Year Final Examination', 'Nine', 'Business Studies', '17', '21', '04', '17', '09', '30', '16', '25', '', '', '15', '34', '', '11', '30', '', '14', '14', '39', '04', '09', '16', '09', '07', '10', '', '13', '30', '10', '20', '26', '13', '14', '30', '11', '04', '25', '50', '50', '25', ''),
(236, 's286', '10', 'Sabina Yasmeen Lily', 'student/2019nnine10.jpg', 'Year Final Examination', 'Nine', 'Business Studies', '12', '21', '08', '11', '05', '26', '14', '15', '', '', '10', '28', '', '09', '28', '', '18', '15', '18', '10', '00', '08', '08', '08', '13', '', '24', '33', '10', '14', '19', '09', '15', '26', '12', '09', '25', '50', '50', '25', ''),
(237, 's287', '11', 'Mst Kotha ', 'student/2019nnine11.jpg', 'Year Final Examination', 'Nine', 'Business Studies', '17', '00', '09', '00', '07', '00', '14', '00', '', '', '18', '00', '', '00', '00', '', '00', '19', '00', '00', '13', '00', '00', '00', '00', '', '24', '00', '00', '16', '00', '00', '17', '00', '00', '00', '00', '00', '00', '00', ''),
(238, 's288', '12', 'Somiya Akter Sumi', 'student/2019nnine12.jpg', 'Year Final Examination', 'Nine', 'Business Studies', '16', '23', '02', '09', '00', '25', '04', '19', '', '', '14', '33', '', '06', '23', '', '12', '09', '18', '07', '03', '08', '08', '04', '10', '', '10', '23', '11', '11', '20', '07', '12', '31', '13', '09', '25', '50', '50', '25', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `TID` int(11) NOT NULL,
  `TNAME` varchar(150) NOT NULL,
  `DGN` varchar(100) NOT NULL,
  `TPASS` varchar(150) NOT NULL,
  `QUAL` varchar(200) NOT NULL,
  `SAL` varchar(13) NOT NULL,
  `DATE` varchar(13) NOT NULL,
  `PNO` varchar(150) NOT NULL,
  `MAIL` varchar(150) NOT NULL,
  `PADDR` text NOT NULL,
  `IMG` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`TID`, `TNAME`, `DGN`, `TPASS`, `QUAL`, `SAL`, `DATE`, `PNO`, `MAIL`, `PADDR`, `IMG`) VALUES
(1, 'Tanzil', 'Teacher', '1234', 'B.B.A', '15000', '2019-08-15', '+8801636931775', 'mdtanzil55555@gmail.com', 'C/O KHALIL PATWARY PURBO RAJASION SAVAR, Dhaka', 'staff/tanzil.jpg'),
(2, 'Tanvir', 'Teacher', '1234', 'B.Sc.', '15000', '2019-02-08', '+8801618817778', 'virza805@gmail.com', 'C/O KHALIL PATWARY PURBO RAJASION SAVAR, Dhaka', 'staff/Tanvir Hasan.jpg'),
(3, 'Admin', 'Admin & Teacher', '1234', 'B.B.A', '20000', '2019-08-15', '+8801675554278', 'Admin@gmail.com', 'Savar,Dhaka, Bangladesh', 'staff/Admin.png'),
(4, 'Virza', 'Teacher', '1234', 'B.Sc.', '20000', '2019-11-30', '01795815660', 'virza805@gmail.com', 'Savar, Dhaka, Bangladesh', 'staff/LOVE.png'),
(5, 'Abdur', 'Teacher', '1234', 'B.B.A', '20000', '2015-12-06', '0165039672', 'g@gmail.com', 'Rajashon, Savar, Dhaka, Bangladesh', 'staff/5e081cca3743b.jpgStreamData 1.png'),
(6, 'Zavir', 'Teacher', '1234', 'B.Sc.', '20000', '2019-12-06', '01795815660', 'virza805@gmail.com', 'Savar, Dhaka', 'staff/5e081bb803b97.jpgStreamData 1.png');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `RNO` varchar(150) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `REL` varchar(100) NOT NULL,
  `FNAME` varchar(100) NOT NULL,
  `DOB` varchar(150) NOT NULL,
  `GEN` varchar(150) NOT NULL,
  `PHO` varchar(150) NOT NULL,
  `MAIL` varchar(150) NOT NULL,
  `ADDR` varchar(1000) NOT NULL,
  `SCLASS` varchar(150) NOT NULL,
  `SSEC` varchar(150) NOT NULL,
  `SIMG` varchar(150) NOT NULL,
  `MNAME` varchar(100) NOT NULL,
  `CRNO` varchar(100) NOT NULL,
  `YEAR` varchar(100) NOT NULL,
  `PASS` varchar(250) NOT NULL,
  `TID` int(11) NOT NULL,
  `SN` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `RNO`, `NAME`, `REL`, `FNAME`, `DOB`, `GEN`, `PHO`, `MAIL`, `ADDR`, `SCLASS`, `SSEC`, `SIMG`, `MNAME`, `CRNO`, `YEAR`, `PASS`, `TID`, `SN`) VALUES
(53, 'S101', 'Mohammad Salman Farsi', 'Islam', 'Shohidul Islam', '2014-08-07', 'Male', '01778280455', 'g@g.com', 'NA', 'Play Group', 'Morning', 'student/a.jpg', 'Asma Islam', '1', '2019', 'S101', 2, ''),
(54, 's102', 'Asmaul Husna Jui', 'Islam', 'Johurul Islam', '2014-08-07', 'Female', '01638856307', 'g@g.com', 'NA', 'Play Group', 'Morning', 'student/b.jpg', 'Mst.Anjuman Nahar', '2', '2019', 's102', 2, ''),
(55, 's103', 'Nishat', 'Islam', 'Belayet Hossain', '2014-08-07', 'Female', '01877412164', 'g@g.com', 'NA', 'Play Group', 'Morning', 'student/b.jpg', 'Pakhi Begum', '3', '2019', 's103', 2, ''),
(56, 's104', 'Faysal Ahmed Jibon', 'Islam', 'Johurul', '2013-03-13', 'Male', '01861849924', 'g@g.com', 'NA', 'Play Group', 'Morning', 'student/2019mp4.jpg', 'Fensi', '4', '2019', 's104', 2, ''),
(57, 's105', 'Marufa Akter', 'Islam', 'Faruk Ahmed', '2013-03-13', 'Female', '01714499480', 'g@g.com', 'Savar,Dhaka', 'Play Group', 'Morning', 'student/a.jpg', 'Nurunnahar Ahmed', '5', '2019', 's105', 2, ''),
(58, 's106', 'Husna Akter', 'Islam', 'Alamin', '2013-05-07', 'Female', '01682286500', 'g@g.com', 'NA', 'Play Group', 'Morning', 'student/06.jpg', 'Aklima Begum', '6', '2019', 's106', 2, ''),
(59, 's107', 'Mohammad Ali', 'Islam', 'Al Monsur', '2013-12-30', 'Male', '01682286500', 'g@g.com', 'NA', 'Play Group', 'Morning', 'student/2019mp7.jpg', 'Rotna Begum', '7', '2019', 's107', 2, ''),
(60, 's108', 'Meherun Nesa Purnota', 'Islam', 'Belayet Hossain', '2013-12-30', 'Male', '01644398626', 'g@g.com', 'NA', 'Play Group', 'Morning', 'student/b.jpg', 'Rojina Akter', '8', '2019', 's108', 2, ''),
(61, 's109', 'Nahidul Islam Ahad', 'Islam', 'Sujon Sikder', '2014-04-18', 'Male', '01995843791', 'g@g.com', 'NA', 'Play Group', 'Morning', 'student/2019mp9.jpg', 'Ruma Akter', '9', '2019', 's109', 2, ''),
(62, 's110', 'Lamiya Akter', 'Islam', 'Babu Hossain', '2015-03-16', 'Female', '01', 'g@g.com', 'NA', 'Play Group', 'Morning', 'student/2019mp10.jpg', 'Nargis Begum', '10', '2019', 's110', 2, ''),
(63, 's111', 'Yamin', 'Islam', 'Yousuf', '2014-01-31', 'Male', '01', 'g@g.com', 'NA', 'Play Group', 'Morning', 'student/11.jpg', 'Lamiya Begum', '11', '2019', 's111', 2, ''),
(64, 's112', 'Hamim', 'Islam', 'Shahabuddin', '2014-01-31', 'Male', '01680274120', 'g@g.com', 'NA', 'Play Group', 'Morning', 'student/a.jpg', 'Rabeya Begum', '12', '2019', 's112', 2, ''),
(65, 's113', 'Hujaifa Islam', 'Islam', 'Din Islam', '2014-03-02', 'Female', '01', 'g@g.com', 'NA', 'Play Group', 'Morning', 'student/a.jpg', 'Farhana Akter', '13', '2019', 's113', 2, ''),
(66, 's114', 'Abu Sayed Ali', 'Islam', 'MD Hojrot Ali', '2015-04-13', 'Male', '01794076368', 'g@g.com', 'NA', 'Play Group', 'Morning', 'student/14.jpg', 'Rafeja Begum', '14', '2019', 's114', 2, ''),
(67, 's115', 'MD. Al - Amin', 'Islam', 'Diamond', '2015-04-13', 'Male', '01700623891', 'virza805@gmail.com', 'Savar, Dhaka', 'Play Group', 'Morning', 'student/b.jpg', 'Hasna Banu', '15', '2019', 's115', 2, ''),
(68, 's116', 'Ajmira', 'Islam', 'Ansar', '2015-04-13', 'Female', '01701449432', 'g@g.com', 'NA', 'Play Group', 'Morning', 'student/a.jpg', 'Arifa', '16', '2019', 's116', 2, ''),
(69, 's117', 'Sumiya Al Arshi', 'Islam', 'Al Amin Hossain', '2015-04-13', 'Female', '01673359282', 'g@g.com', 'NA', 'Play Group', 'Morning', 'student/2019mp17.jpg', 'Shucita Akter  ', '17', '2019', 's117', 2, ''),
(70, 's118', 'Abdullah', 'Islam', 'NA', '2019-11-01', 'Male', '01', 'virza805@gmail.com', 'Savar, Dhaka', 'Play Group', 'Morning', 'student/b.jpg', 'NA', '18', '2019', 's118', 2, ''),
(71, 's119', 'Jannat', 'Islam', 'MD', '2019-11-01', 'Female', '01795815660', 'virza805@gmail.com', 'Savar', 'Play Group', 'Morning', 'student/a.jpg', 'AL', '19', '2019', 's119', 2, ''),
(72, 's120', 'Adiba', 'Islam', 'NA', '2019-11-01', 'Male', '01', 'g@g.com', 'NA', 'Play Group', 'Morning', 'student/a.jpg', 'NA', '20', '2019', 's120', 2, ''),
(74, 's121', 'Labonno', 'Islam', 'Samsul Hoque ', '2015-04-13', 'Female', '01', 'g@g.com', 'NA', 'Play Group', 'Morning', 'student/a.jpg', 'NA', '21', '2019', 's121', 2, ''),
(75, 's122', 'Roja', 'Islam', 'NA', '2019-11-01', 'Male', '01', 'g@g.com', 'NA', 'Play Group', 'Morning', 'student/b.jpg', 'NA', '22', '2019', 's122', 2, ''),
(76, 's123', 'Mujahed', 'Islam', 'Kobir Hossain', '2015-04-13', 'Male', '01927798124', 'g@g.com', 'NA', 'Play Group', 'Morning', 'student/a.jpg', 'Koli Begum', '23', '2019', 's123', 2, ''),
(78, 's124', 'Lamiya Akter Mitu', 'Islam', 'Mosharrof Hossain', '2019-11-01', 'Female', '01780099686', 'g@g.com', 'NA', 'One', 'N/A', 'student/one1.jpg', 'Kulsum Begum', '1', '2019', 's124', 2, ''),
(79, 's125', 'Roman Shikder', 'Islam', 'Mmun Shikder', '2011-01-03', 'Male', '01741745507', 'g@g.com', 'NA', 'One', 'N/A', 'student/2019mone2.jpg', 'Runu Begum', '2', '2019', 's125', 2, ''),
(80, 's126', 'Sadiya Akter Nizum', 'Islam', 'Masud Mia', '2012-11-08', 'Male', '01993276455', 'g@g.com', 'NA', 'One', 'N/A', 'student/a.jpg', 'Jesmina Masud', '3', '2019', 's126', 2, ''),
(81, 's127', 'Juimony', 'Islam', 'Jakir Mondol', '2013-01-21', 'Female', '01703458631', 'g@g.com', 'NA', 'One', 'N/A', 'student/one4.jpg', 'Sumi Begum', '4', '2019', 's127', 2, ''),
(82, 's128', 'Sadiya Akter Ambiya', 'Islam', 'Alomgir Hawlader', '2013-04-28', 'Female', '01839675340', 'g@g.com', 'NA', 'One', 'N/A', 'student/one5.jpg', 'Hasina Begum', '5', '2019', 's128', 2, ''),
(83, 's129', 'Fatema Akter', 'Islam', 'Mizanur Rahman Noyon', '2013-09-22', 'Female', '01635879260', 'g@g.com', 'NA', 'One', 'N/A', 'student/one6.jpg', 'Lily Begum', '6', '2019', 's129', 2, ''),
(84, 's130', 'Shihab Hossain', 'Islam', 'Alamin', '2011-09-18', 'Male', '01735913790', 'g@g.com', 'NA', 'One', 'N/A', 'student/7.jpg', 'Sahida Begum', '7', '2019', 's130', 2, ''),
(85, 's131', 'Jasmine Akter', 'Islam', 'Omor Faruk', '2012-01-07', 'Female', '01', 'g@g.com', 'NA', 'One', 'N/A', 'student/2019mone8.jpg', 'Aklima Akter', '8', '2019', 's131', 2, ''),
(86, 's132', 'Alif', 'Islam', 'Taher', '2010-01-13', 'Male', '01994685467', 'g@g.com', 'NA', 'One', 'N/A', 'student/2019mone9.jpg', 'Sabina', '9', '2019', 's132', 2, ''),
(87, 's133', 'Salman Afnan Abik', 'Islam', 'MD.Alomgir Chowdhury', '2010-01-13', 'Male', '01673359282', 'g@g.com', 'NA', 'One', 'N/A', 'student/2019mone10.jpg', 'Suchi Afrin', '10', '2019', 's133', 2, ''),
(88, 's134', 'Sabbir  Hossain', 'Islam', 'Yunus Patowari', '2013-11-10', 'Male', '01910647338', 'g@g.com', 'NA', 'One', 'N/A', 'student/2019mone11.jpg', 'Khadija Begum', '11', '2019', 's134', 2, ''),
(89, 's135', 'Golam Rabbi', 'Islam', 'Abu Taher', '2011-08-05', 'Male', '01994715580', 'g@g.com', 'NA', 'One', 'N/A', 'student/2019mone12.jpg', 'Shahanaj', '12', '2019', 's135', 2, ''),
(90, 's136', 'Srity Akter', 'Islam', 'Siddique', '2009-09-25', 'Female', '01775269586', 'g@g.com', 'NA', 'One', 'N/A', 'student/2019mone13.jpg', 'Khaleda', '13', '2019', 's136', 2, ''),
(91, 's137', 'Sumona Akter', 'Islam', 'Shujon Sheikh', '2011-03-10', 'Female', '01923295283', 'g@g.com', 'NA', 'One', 'N/A', 'student/b.jpg', 'Lipi Khatun', '14', '2019', 's137', 2, ''),
(92, 's138', ' Youns Khan Akash', 'Islam', 'MD.Saidur Islam', '2006-12-16', 'Male', '01788502504', 'g@g.com', 'NA', 'Five', 'N/A', 'student/five1.jpg', 'Sadiya Begum', '1', '2019', 's138', 2, ''),
(93, 's139', 'Abdulla Al Awoal', 'Islam', 'MD. Nobi Islam', '2008-05-04', 'Male', '01784839386', 'g@g.com', 'NA', 'Five', 'N/A', 'student/five2.jpg', 'Salma Begum', '2', '2019', 's139', 2, ''),
(94, 's140', 'MD. Mubin Islam', 'Islam', 'Rubel Islam', '2007-07-13', 'Male', '01725059667', 'g@g.com', 'NA', 'Five', 'N/A', 'student/five3.jpg', 'Shanu Begum', '3', '2019', 's140', 2, ''),
(95, 's141', 'Nurjahan Akter', 'Islam', 'MD.Nazrul Islam', '2007-07-13', 'Female', '01916502586', 'g@g.com', 'NA', 'Five', 'N/A', 'student/five4.jpg', 'Monira Begum', '4', '2019', 's141', 2, ''),
(96, 's142', 'Shopna Akter', 'Islam', 'Golap Mia', '2008-09-09', 'Female', '01929253946', 'g@g.com', 'NA', 'Five', 'N/A', 'student/five5.jpg', 'Rokeya Begum', '5', '2019', 's142', 2, ''),
(97, 's143', 'Sajjad Islam', 'Islam', 'Nur Hossain', '2008-03-27', 'Male', '01993029133', 'g@g.com', 'NA', 'Five', 'N/A', 'student/five6.jpg', 'Parvin Akter', '6', '2019', 's143', 2, ''),
(98, 's144', 'Sadia Afrin Shimu', 'Islam', 'Abdul Alim', '2007-12-12', 'Female', '01712708388', 'g@g.com', 'NA', 'Five', 'N/A', 'student/five7.jpg', 'Suraiya Begum', '7', '2019', 's144', 2, ''),
(99, 's145', 'Shifat Ahmed', 'Islam', 'Rofiqul Islam', '2007-08-17', 'Male', '01617105771', 'g@g.com', 'NA', 'Five', 'N/A', 'student/five8.jpg', 'Shirin Akter', '8', '2019', 's145', 2, ''),
(100, 's146', 'Mohima Akter Mim', 'Islam', 'Moslem Uddin', '2008-08-13', 'Female', '01703934980', 'g@g.com', 'NA', 'Five', 'N/A', 'student/five9.jpg', 'Forida Parvin', '9', '2019', 's146', 2, ''),
(101, 's147', 'Setu  Akter', 'Islam', 'MD.Hafizul Mia', '2009-02-02', 'Female', '01728733965', 'g@g.com', 'NA', 'Five', 'N/A', 'student/five10.jpg', 'Parvin Akter', '10', '2019', 's147', 2, ''),
(102, 's148', 'Khondoker Liam', 'Islam', 'Khondoker Siddique', '2009-09-28', 'Male', '01715042213', 'g@g.com', 'NA', 'Five', 'N/A', 'student/five11.jpg', 'Popy Begum', '11', '2019', 's148', 2, ''),
(103, 's149', 'Momotajs', 'Islam', 'Moktar Hossain', '2008-06-19', 'No_Select', '01788250313', 'g@g.com', 'NA', 'Five', 'N/A', 'student/a.jpg', 'Selina Begum', '12', '2019', 's149', 2, ''),
(104, 's150', 'Shanto', 'Islam', 'Yakub Ali Molla', '2005-08-23', 'Male', '01924090930', 'g@g.com', 'NA', 'Five', 'N/A', 'student/b.jpg', 'Shanta', '13', '2019', 's150', 2, ''),
(105, 's151', 'Nurjahan Akter ', 'Islam', 'Abdul Hamid Prodhan', '2008-02-17', 'Female', '01849180517', 'g@g.com', 'NA', 'Five', 'N/A', 'student/five14.jpg', 'Morsheda Begum', '14', '2019', 's151', 2, ''),
(106, 's152', 'Nurjahan', 'Islam', 'Faruk Ahmad', '2007-08-06', 'Female', '01714499480', 'g@g.com', 'NA', 'Five', 'N/A', 'student/five15.jpg', 'Nur Nahur', '15', '2019', 's152', 2, ''),
(107, 's153', 'Marjan Khan Sanha', 'Islam', 'Shibla Nomane Khan', '2008-05-14', 'Female', '01995843791', 'g@g.com', 'NA', 'Five', 'N/A', 'student/five16.jpg', 'Nasrin Akter', '16', '2019', 's153', 2, ''),
(108, 's154', 'Hasan Ali', 'Islam', 'MD.Daimul', '2007-03-10', 'Male', '01700623891', 'g@g.com', 'NA', 'Five', 'N/A', 'student/five17.jpg', 'Hasna Begum', '17', '2019', 's154', 2, ''),
(109, 's155', 'Abdur Rahman', 'Islam', 'Khaza Ahmad', '2007-03-30', 'Male', '01783516251', 'g@g.com', 'NA', 'Five', 'N/A', 'student/five18.jpg', 'Roma Akter', '18', '2019', 's155', 2, ''),
(110, 's156', 'Akash Ali', 'Islam', 'Sojan', '2007-12-09', 'Male', '01923295283', 'g@g.com', 'NA', 'Five', 'N/A', 'student/a.jpg', 'Lepe', '19', '2019', 's156', 2, ''),
(111, 's157', 'Fariha Rahman Pihu', 'Islam', 'MD.Masudur Rahman', '2011-02-28', 'Male', '01829246884', 'g@g.com', 'N/A', 'Two', 'Morning', 'student/two1.jpg', 'Bilkis Rahman', '1', '2019', 's157', 3, ''),
(112, 's158', 'Nazmul Hossain', 'Islam', 'Lokman Hossain', '2011-08-23', 'Male', '01794758322', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Two', 'Morning', 'student/2019mtwo2.jpg', 'Mises Begum', '2', '2019', 's158', 3, ''),
(113, 's159', 'Khadija Akter', 'Islam', 'Liton Islam', '2011-01-31', 'Female', '01739075880', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Two', 'Morning', 'student/two3.jpg', 'Jannat Begum', '3', '2019', 's159', 3, ''),
(114, 's160', 'Shorna Akter', 'Islam', 'Khokon Sheikh', '2011-03-06', 'Female', '01918996168', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Two', 'Morning', 'student/4.jpg', 'Bilkiss Akter', '4', '2019', 's160', 3, ''),
(115, 's161', 'Ebrahim Hossain Abir', 'Islam', 'Masud Rana', '2011-12-11', 'Male', '01714344992', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Two', 'Morning', 'student/05.jpg', 'Rezia Begum', '5', '2019', 's161', 3, ''),
(116, 's162', 'Mohammad Salman', 'Islam', 'Romjan Ali', '2011-12-11', 'Male', '01613948803', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Two', 'Morning', 'student/two6.jpg', 'Nazmun Nahar', '6', '2019', 's162', 3, ''),
(117, 's163', 'Mahabub Rahman', 'Islam', 'Monirul Islam', '2011-04-28', 'Male', '01679581706', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Two', 'Morning', 'student/two7.jpg', 'Mahmuda Akter', '7', '2019', 's163', 3, ''),
(118, 's164', 'Lota Mony', 'Islam', 'MD.Kobir ', '2011-09-15', 'Female', '01927798124', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Two', 'Morning', 'student/two8.jpg', 'Koly Begum', '8', '2019', 's164', 3, ''),
(119, 's165', 'Sharmin Akter Bristy', 'Islam', 'Lutfor Rahman', '2012-04-01', 'Female', '01929688512', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Two', 'Morning', 'student/two9.jpg', 'Forida Akter', '9', '2019', 's165', 3, ''),
(120, 's166', 'Moriom Akter Jhinuk', 'Islam', 'Mamun Hossain', '2011-11-25', 'Female', '01963588443', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Two', 'Morning', 'student/two10.jpg', 'Rashida Begum', '10', '2019', 's166', 3, ''),
(121, 's167', 'Asmota Akter', 'Islam', 'Muktar Hossain', '2011-11-25', 'Female', '01708189803', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Two', 'Morning', 'student/two11.jpg', 'Shirin', '11', '2019', 's167', 3, ''),
(122, 's168', 'Nasima Akter', 'Islam', 'Aminur Gaza', '2010-08-16', 'Female', '01855739560', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Two', 'Morning', 'student/012.jpg', 'Moyna Khatun', '12', '2019', 's168', 3, ''),
(123, 's169', 'Tamim', 'Islam', 'Nabir Hossain', '2012-10-03', 'Male', '01791922693', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Two', 'Morning', 'student/2019mtwo13.jpg', 'Selina Begum', '13', '2019', 's169', 3, ''),
(124, 's170', 'Robin', 'Islam', 'Shajahan Sorder', '2010-11-25', 'Male', '01782471998', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Two', 'Morning', 'student/a.jpg', 'Rohima', '14', '2019', 's170', 3, ''),
(125, 's171', 'Apon Hossain', 'Islam', 'Sajahan', '2010-11-25', 'Male', '01710848769', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Two', 'Morning', 'student/b.jpg', 'Seling Begum', '15', '2019', 's171', 3, ''),
(126, 's172', 'Nayem Shiekh', 'Islam', 'N/A', '2019-12-06', 'Male', '00000000', 'virza805@gmail.com', 'Savar,Dhaka', 'Two', 'Morning', 'student/a.jpg', 'N/A', '16', '2019', 's172', 3, ''),
(127, 's173', 'Meftahul Jannat', 'Islam', 'Mahabub Rahman', '2009-02-12', 'Female', '01744706037', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Four', 'N/A', 'student/four1.jpg', 'Mokseda Begum', '1', '2019', 's173', 4, ''),
(128, 's174', 'Moriom Akter Shifa', 'Islam', 'Rofiqul Islam', '2009-02-27', 'Female', '01617105771', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Four', 'N/A', 'student/b.jpg', 'Shirin', '2', '2019', 's174', 4, ''),
(129, 's175', 'Shakil', 'Islam', 'Samsul Hoque', '2009-03-20', 'Male', '01741135700', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Four', 'N/A', 'student/four3.jpg', 'Bilkis Begum', '3', '2019', 's175', 4, ''),
(130, 's176', 'Sakibul Hsan Rabbi', 'Islam', 'Bachhu Mia', '2009-07-08', 'Male', '01620819946', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Four', 'N/A', 'student/four4.jpg', 'Selina Begum', '4', '2019', 's176', 4, ''),
(131, 's177', 'Sobahan Mia', 'Islam', 'Nur Islam', '2008-12-14', 'Male', '01823115999', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Four', 'N/A', 'student/four5.jpg', 'Sujala Begum', '5', '2019', 's177', 4, ''),
(132, 's178', 'Shakib Reja', 'Islam', 'N/A', '2008-12-14', 'Male', '000', 'g@g.com', 'NA', 'Four', 'N/A', 'student/b.jpg', 'N/A', '6', '2019', 's178', 4, ''),
(133, 's179', 'Suborna Akter', 'Islam', 'Hanifa Islam', '2008-12-14', 'Female', '01823115999', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Four', 'N/A', 'student/07.jpg', 'Shirin Begum', '7', '2019', 's179', 4, ''),
(134, 's180', 'Taznur Akter Bela', 'Islam', 'Belayet Hossain', '2008-12-17', 'No_Select', '01877412164', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Four', 'N/A', 'student/08.jpg', 'Pakhi Begum', '8', '2019', 's180', 4, ''),
(135, 's181', 'Shorob Ali', 'Islam', 'Hozrot Ali', '2009-04-12', 'Male', '01770132190', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Four', 'N/A', 'student/09.jpg', 'Refeja Begum', '9', '2019', 's181', 4, ''),
(136, 's182', 'Shantona', 'Islam', 'Shohidul', '2009-03-10', 'Female', '01726977568', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Four', 'N/A', 'student/10.jpg', 'Fatama', '10', '2019', 's182', 4, ''),
(137, 's183', 'Shopon', 'Islam', 'Sajahan', '2009-03-10', 'No_Select', '01719342763', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Four', 'N/A', 'student/b.jpg', 'Selina', '11', '2019', 's183', 4, ''),
(138, 's184', 'Labiba', 'Islam', 'Shorif Uddin Chowdhury', '2006-01-02', 'Female', '01617760583', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Six', 'N/A', 'student/six1.jpg', 'Amena Akter', '1', '2019', 's184', 4, ''),
(139, 's185', 'Rony Mia', 'Islam', 'Golap Mia', '2005-03-03', 'Male', '01701786768', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Six', 'N/A', 'student/2019nsix2.jpg', 'Rokeya Begum', '2', '2019', 's185', 4, ''),
(140, 's186', 'Arman Hossain', 'Islam', 'Sobuj Mia', '2005-11-03', 'Male', '01969854499', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Six', 'N/A', 'student/six3.jpg', 'Monoara  Begum', '3', '2019', 's186', 4, ''),
(141, 's187', 'Soniya Akter Priya', 'Islam', 'Shabuddin', '2007-04-04', 'Female', '01798048237', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Six', 'N/A', 'student/2019nsix4.jpg', 'Fatema Begum', '4', '2019', 's187', 4, ''),
(142, 's188', 'Ferdous Hasan ', 'Islam', 'MD.Ayub Ali', '2007-08-21', 'Male', '01730239119', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Six', 'N/A', 'student/six5.jpg', 'Shahida Ali', '5', '2019', 's188', 4, ''),
(143, 's189', 'Tanjila Akter', 'Islam', 'Md.Manik', '2007-09-27', 'Female', '01956089334', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Six', 'N/A', 'student/066.jpg', 'Shahinur Akter', '6', '2019', 's189', 4, ''),
(144, 's190', 'Riyad Shikder', 'Islam', 'Mamun Shikder', '2006-12-08', 'Male', '01732389705', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Six', 'N/A', 'student/six7.jpg', 'Runu Akter', '7', '2019', 's190', 4, ''),
(145, 's191', 'Sarwar Hasan Akash', 'Islam', 'MD.Lutfor Rahman', '2007-09-27', 'Male', '01929688512', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Six', 'N/A', 'student/six8.jpg', 'Forida Akter', '8', '2019', 's191', 4, ''),
(146, 's192', 'Shahidul Hossain', 'Islam', 'MD.Ayub Ali', '2006-12-19', 'No_Select', '01730239119', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Six', 'N/A', 'student/six9.jpg', 'Shahida Ali', '9', '2019', 's192', 4, ''),
(147, 's193', 'Mahim', 'Islam', 'Mahabub Kamal', '2005-11-13', 'Male', '01724812755', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Six', 'N/A', 'student/six10.jpg', 'Rupa Begum', '10', '2019', 's193', 4, ''),
(148, 's194', 'Rasel Molla', 'Islam', 'MD.Madhu Molla', '2005-11-13', 'Male', '01736308868', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Six', 'N/A', 'student/six11.jpg', 'Ayesha Akter', '11', '2019', 's194', 4, ''),
(149, 's195', 'Sojib Mia', 'Islam', 'Khalek Mia', '2005-12-19', 'Male', '01709064483', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Six', 'N/A', 'student/six12.jpg', 'Nasima Akter', '12', '2019', 's195', 4, ''),
(150, 's196', 'Himel Antony Costy', 'Islam', 'Shipon Costa', '2007-11-02', 'Male', '01762648624', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Six', 'N/A', 'student/0133.jpg', 'Mukta Costa', '13', '2019', 's196', 4, ''),
(151, 's197', 'Afroga Akter', 'Islam', 'Hazrat Ali Chokider', '2006-01-02', 'No_Select', '01794076368', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Six', 'N/A', 'student/0144.jpg', 'Refeja Begum', '14', '2019', 's197', 4, ''),
(152, 's198', 'Aysha Siddika', 'Islam', 'Airsad Ali Pramaink', '2007-12-24', 'Female', '01703994457', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Six', 'N/A', 'student/0155.jpg', 'Monoara Bibi', '15', '2019', 's198', 4, ''),
(153, 's199', 'Jakaria', 'Islam', 'Lokman', '2005-12-19', 'Male', '01736903181', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Six', 'N/A', 'student/b.jpg', 'Shahida Begum', '16', '2019', 's199', 4, ''),
(154, 's200', 'Homayun Kabir', 'Islam', 'Milon Hossain ', '2005-12-19', 'Male', '01728656696', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Six', 'N/A', 'student/a.jpg', 'Nurjahan', '17', '2019', 's200', 4, ''),
(155, 's201', 'Mim Akter', 'Islam', 'Nobir Hossain', '2006-08-28', 'No_Select', '01791922690', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Seven', 'N/A', 'student/seven1.jpg', 'Selina Begum', '1', '2019', 's201', 4, ''),
(156, 's202', 'MD.Baizid Ali', 'Islam', 'Arshad Ali', '2005-11-11', 'Male', '01703994457', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Seven', 'N/A', 'student/seven2.jpg', 'Monowara Bibi', '2', '2019', 's202', 4, ''),
(157, 's203', 'Bappi', 'Islam', 'MD.Nur Islam', '2004-05-20', 'Male', '01767833821', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Seven', 'N/A', 'student/seven3.jpg', 'Safia Khatun', '3', '2019', 's203', 4, ''),
(158, 's204', 'Naimul Hoque Babu', 'Islam', 'MD.Mosharrof Hossain', '2005-01-15', 'Male', '01856082896', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Seven', 'N/A', 'student/04.jpg', 'Nazma Begum', '4', '2019', 's204', 4, ''),
(159, 's205', 'Sabina Khatun', 'Islam', 'Muslim Hossain', '2006-01-03', 'Female', '01745213753', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Seven', 'N/A', 'student/seven5.jpg', 'Selina Begum', '5', '2019', 's205', 4, ''),
(160, 's206', 'Mymuna', 'Islam', 'MD.Jolil Mia', '2008-03-15', 'Female', '01676025395', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Seven', 'N/A', 'student/seven7.jpg', 'Hena Begum', '6', '2019', 's206', 4, ''),
(161, 's207', 'Mahedi Hasan Siyam', 'Islam', 'Younus', '2008-08-15', 'Male', '01910647338', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Seven', 'N/A', 'student/seven8.jpg', 'Khadija', '7', '2019', 's207', 4, ''),
(162, 's208', 'Junaeed ', 'Islam', 'MD.Insan Mia', '2007-06-05', 'Male', '01316207621', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Seven', 'N/A', 'student/seven9.jpg', 'Anoara Begum', '9', '2019', 's208', 4, ''),
(163, 's209', 'Rion Hasan', 'Islam', 'MD.Anowar Hossain', '2006-02-02', 'Male', '01636931027', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Seven', 'N/A', 'student/seven10.jpg', 'Rina Begum', '10', '2019', 's209', 4, ''),
(164, 's210', 'Sahajadi Akter', 'islam', 'Saha Alom', '2007-01-01', 'Female', '01747049626', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Seven', 'N/A', 'student/seven11.jpg', 'Nurjahan', '11', '2019', 's210', 4, ''),
(165, 's211', 'Younus Nobi', 'Islam', 'Abdul Malek', '2008-08-23', 'Male', '01774243950', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Seven', 'N/A', 'student/seven12.jpg', 'Jesmin', '12', '2019', 's211', 4, ''),
(166, 's212', 'Eameen', 'Islam', 'Eman Ali', '2008-08-23', 'Male', '01683345156', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Seven', 'N/A', 'student/seven13.jpg', 'Rashida Begum', '13', '2019', 's212', 4, ''),
(167, 's213', 'Rakibul Islam Rakib', 'Islam', 'Jakir Hossain', '2008-08-23', 'Male', '01684604194', 'bh@gmail.com', 'Savar,Dhaka, Bangladesh', 'Seven', 'N/A', 'student/b.jpg', 'Rozina Akter', '14', '2019', 's213', 4, ''),
(168, 's214', 'Tania Akter', 'Islam', 'N/A', '2006-08-23', 'Female', '000', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Seven', 'N/A', 'student/b.jpg', 'N/A', '15', '2019', 's214', 4, ''),
(169, 's215', 'Jannatul Ferdous', 'Islam', 'Shamim Ahmed', '2006-06-06', 'Female', '01854317445', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Seven', 'N/A', 'student/a.jpg', 'Shirin Begum', '16', '2019', 's215', 4, ''),
(170, 's216', 'Tajnian', 'Islam', 'N/A', '2008-06-06', 'Female', '01643378087', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Seven', 'N/A', 'student/a.jpg', 'N/A', '17', '2019', 's216', 4, ''),
(171, 's217', 'Hridoy Gazi', 'Islam', 'Harun Gazi', '2006-01-05', 'Male', '000', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Seven', 'N/A', 'student/b.jpg', 'Shahida', '18', '2019', 's217', 4, ''),
(172, 's218', 'Moyna Akter', 'Islam', 'Mostofa Kamal', '2006-10-28', 'Female', '01812636767', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Eight', 'N/A', 'student/a.jpg', 'Johura Begum', '1', '2019', 's218', 0, ''),
(173, 's219', 'Moyna Akter', 'Islam', 'Mostofa Kamal', '2006-10-28', 'Female', '01812636767', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Eight', 'N/A', 'student/a.jpg', 'Johura Begum', '1', '2019', 's219', 1, ''),
(174, 's220', 'Tamjid Hossain', 'Islam', 'Jahidul Hasan', '2006-09-22', 'Male', '01720050142', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Eight', 'N/A', 'student/a.jpg', 'Rojina Akter Lota', '2', '2019', 's220', 1, 'jhfhjn ghfh'),
(175, 's221', 'Toufiq', 'Islam', 'Md Mostafizur Rahman', '2005-12-09', 'Male', '01989290243', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Eight', 'N/A', 'student/3.jpg', 'Mst Parvin', '3', '2019', 's221', 1, ''),
(176, 's222', 'Efty', 'Islam', 'Md Zillur Rahman', '2006-07-06', 'Male', '01615153520', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Eight', 'N/A', 'student/eight4.jpg', 'Ratri', '4', '2019', 's222', 1, ''),
(177, 's223', 'Mst Hasna Arobi', 'Islam', 'Md Hasan', '2004-04-28', 'Female', '01736224020', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Eight', 'N/A', 'student/eight5.jpg', 'Mst Sabana Chowdhury ', '5', '2019', 's223', 1, ''),
(178, 's224', 'Shakil', 'Islam', 'Md Nurujjaman', '2006-11-01', 'Male', '01848353744', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Eight', 'N/A', 'student/eight6.jpg', 'Kulsum Begum', '6', '2019', 's224', 1, ''),
(179, 's225', 'Habibur Rahman', 'Islam', 'Harunor Roshid', '2005-03-21', 'Male', '01670609916', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Eight', 'N/A', 'student/eight7.jpg', 'Maleka Begum', '7', '2019', 's225', 1, ''),
(180, 's226', 'Shawon Mollik', 'Hinduism', 'Krishno Mollik', '2005-10-06', 'Male', '01758033752', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Eight', 'N/A', 'student/eight8.jpg', 'Beauty', '8', '2019', 's226', 1, ''),
(181, 's227', 'Halima Akter Shamima', 'Islam', 'Harunor Roshid', '2004-08-24', 'Female', '01670609916', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Eight', 'N/A', 'student/eight9.jpg', 'Maleka Begum', '9', '2019', 's227', 1, ''),
(182, 's228', 'Robiul Islam Oli', 'Islam', 'Md Saidul ', '2005-08-26', 'Male', '01961839722', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Eight', 'N/A', 'student/eight10.jpg', 'Mst Jhorna Khatun', '10', '2019', 's228', 1, ''),
(183, 's229', 'Nirzora Mitilda Costa', 'Christianity', 'Gilbert Costa', '2006-06-23', 'Female', '01926832653', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Eight', 'N/A', 'student/eight11.jpg', 'Jacklin Gloria Costa', '11', '2019', 's229', 1, ''),
(184, 's230', 'Md Joy', 'Islam', 'Md Babul', '2005-08-06', 'Male', '01630371199', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Eight', 'N/A', 'student/eight12.jpg', 'Eanur', '12', '2019', 's230', 1, ''),
(185, 's231', 'Halima Akter', 'Islam', 'Ferdous Ali Mir', '2006-12-10', 'Female', '01', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Eight', 'N/A', 'student/13.jpg', 'Fulmoty Begum', '13', '2019', 's231', 1, ''),
(186, 's232', 'Md Riyad Hossain ', 'Islam', 'Md Rezaul Hossain', '2005-12-31', 'Male', '01639295374', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Eight', 'N/A', 'student/b.jpg', 'Mst Baly Khatun', '14', '2019', 's232', 1, ''),
(187, 's233', 'Mst Sharmin', 'Islam', 'Md Sajahan', '2006-01-01', 'Female', '01782471998', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Eight', 'N/A', 'student/15.jpg', 'Rohima', '15', '2019', 's233', 1, ''),
(188, 's234', 'Rohima Akter', 'Islam', 'Munsur Sarder', '2006-04-01', 'Female', '01782471998', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Eight', 'N/A', 'student/a.jpg', 'Forida Begum', '16', '2019', 's234', 1, ''),
(189, 's235', 'Amena Akter Ritu', 'Islam', 'Md Alam Mia', '2006-04-01', 'Female', '01635879282', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Eight', 'N/A', 'student/17.jpg', 'Hasina', '17', '2019', 's235', 1, ''),
(190, 's236', 'MD AL - AMIN', 'Islam', 'MD', '1991-06-06', 'Male', '01795815660', 'virza805@gmail.com', 'Savar City Center, B-37/1 Jaleshar Bazar Bus Stand, Savar, Dhaka', 'Eight', 'N/A', 'student/b.jpg', 'AL', '18', '2019', 's236', 1, ''),
(191, 's237', 'Tahera Tabassum Tony', 'Islam', 'Shakib Talukder', '2010-05-03', 'Female', '01734502695', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/0111.jpg', 'Bithi Talukder', '1', '2019', 's237', 1, ''),
(192, 's238', 'Seam Ahmed', 'Islam', 'MD.Hanif', '2009-11-06', 'Male', '01943828768', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/111.jpg', 'Ayesha', '1', '2019', 's238', 1, ''),
(193, 's239', 'Asha Akter', 'Islam', 'Ansar Ali', '2010-08-31', 'Female', '01701449432', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/02.jpg', 'Arifa', '2', '2019', 's239', 1, ''),
(194, 's240', 'Mony Akter Mim', 'Islam', 'Shakib Talukder', '2010-05-03', 'Female', '1734502695', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/0333.jpg', 'Bithi Talukder', '3', '2019', 's240', 1, ''),
(195, 's241', 'Nusrat Jahan Nusiba', 'Islam', 'Nur Hossain', '2010-01-09', 'Female', '01993029133', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/three4.jpg', 'Parvin Akter', '4', '2019', 's241', 1, ''),
(196, 's242', 'MD.Fahim', 'Islam', 'MD.Azizul Islam', '2010-01-09', 'Male', '01825963640', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/three5.jpg', 'Fahima', '5', '2019', 's242', 1, ''),
(197, 's243', 'Suborna Akter Shumi', 'Islam', 'Sumon Islam', '2011-03-14', 'Female', '01704773210', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/three6.jpg', 'Runu Begum', '6', '2019', 's243', 1, ''),
(198, 's244', 'Jannatul', 'Islam', 'Lotif Patoary', '2011-03-14', 'Female', '01735347577', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/a.jpg', 'Josna Begum', '7', '2019', 's244', 1, ''),
(199, 's245', 'Afiya Akter Ayesha', 'Islam', 'MD.Alomgir Hawlader', '2010-04-28', 'Female', '01839075340', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/three8.jpg', 'Mis Rehena Begum', '8', '2019', 's245', 1, ''),
(200, 's246', 'Khadija Akter', 'Islam', 'Babu Hossain', '2011-08-07', 'Female', '01670160194', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/three10.jpg', 'Nurgis Akter', '10', '2019', 's246', 1, ''),
(201, 's247', 'Shohan', 'Islam', 'Sikander', '2008-10-06', 'Male', '01705125270', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/b.jpg', 'Nazma', '11', '2019', 's247', 1, ''),
(202, 's248', 'Sujon Hossain', 'Islam', 'Mostofa Kamal', '2009-03-15', 'Male', '01812636767', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/three12.jpg', 'Johura Begum', '12', '2019', 's248', 1, ''),
(203, 's249', 'Sujon Hossain', 'Islam', 'MD.Amjad Hossain', '2008-03-10', 'Male', '01766658588', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/three13.jpg', 'Sufia', '13', '2019', 's249', 1, ''),
(204, 's250', 'Shohidul Hasan Emon', 'Islam', 'Hasib Molla', '2010-01-02', 'Male', '01883960571', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/three14.jpg', 'Eti Akter', '14', '2019', 's250', 1, ''),
(205, 's251', 'Yasin Hossain Tanvir', 'Islam', 'Manik Hossain', '2010-12-02', 'Male', '01912028204', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/three15.jpg', 'Sahana', '15', '2019', 's251', 1, ''),
(206, 's252', 'Ritu', 'Islam', 'Abdul Malek', '2008-06-20', 'Female', '01774243950', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/three16.jpg', 'Jesmin', '16', '2019', 's252', 1, ''),
(207, 's253', 'Adiba Rahman', 'Islam', 'Abdur Rahman Alomgir', '2008-06-20', 'Female', '01911105811', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/three17.jpg', 'Tahmina Haque Minu', '17', '2019', 's253', 1, ''),
(208, 's254', 'Lamiya Akter', 'Islam', 'Jakir', '2010-02-06', 'Female', '01629235259', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/b.jpg', 'Minara Begum', '18', '2019', 's254', 1, ''),
(209, 's255', 'Md. Rasel Sheikh', 'Islam', 'Bahar Uddin', '2007-01-22', 'Male', '01757497727', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/b.jpg', 'Nasima', '19', '2019', 's255', 1, ''),
(210, 's256', 'Shihab', 'Islam', 'Shohag Islam', '2010-09-05', 'Male', '01729172667', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/b.jpg', 'Arju Begum', '20', '2019', 's256', 1, ''),
(211, 's257', 'Refat', 'Islam', 'Shorif Islam', '2012-06-19', 'Male', '01633345768', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/b.jpg', 'Arju Begum', '21', '2019', 's257', 1, ''),
(212, 's258', 'Mohot Mia', 'Islam', 'Mahbub Alom', '2011-01-26', 'Male', '01750839737', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/b.jpg', 'Molli Begum', '22', '2019', 's258', 1, ''),
(213, 's259', 'Tanha', 'Islam', 'Bacchu Mia', '2009-07-06', 'Female', '01714355672', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/a.jpg', 'Jahanara', '23', '2019', 's259', 1, ''),
(214, 's260', 'Refat Sheak', 'Islam', 'Rejaul Karim', '2007-12-25', 'Male', '01633345768', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Three', 'Morning', 'student/24.jpg', 'Belly Khatun', '24', '2019', 's260', 1, ''),
(215, 's261', 'Moriom Akter', 'Islam', 'Romjan Poramanik', '2013-01-03', 'Female', '01316138224', 'g@g.com', 'N/A', 'Nursery', 'N/A', 'student/a.jpg', 'Jannatul Ferdousi', '1', '2019', 's261', 3, ''),
(216, 's262', 'Arif Hossain', 'Islam', 'Shumon Hossain', '2013-07-17', 'Male', '01861849924', 'g@g.com', 'N/A', 'Nursery', 'N/A', 'student/a.jpg', 'Runa Begum', '2', '2019', 's262', 3, ''),
(217, 's263', 'Alinur Hossain Raiyan', 'Islam', 'Mohsin Hossain', '2012-10-27', 'Male', '01949307631', 'g@g.com', 'N/A', 'Nursery', 'N/A', 'student/img20190312_21185770_0001.jpg', 'Ratna', '3', '2019', 's263', 3, ''),
(218, 's264', 'Ms.Arifa Akter Rotna', 'Islam', 'Abdul Rajjak', '2013-03-30', 'Female', '01917662189', 'g@g.com', 'N/A', 'Nursery', 'N/A', 'student/b.jpg', 'Sathi Begum', '4', '2019', 's264', 3, ''),
(219, 's265', 'Samira Akter', 'Islam', 'Shofiqul', '2013-03-30', 'Female', '01959609836', 'g@g.com', 'N/A', 'Nursery', 'N/A', 'student/b.jpg', 'Lipi', '5', '2019', 's265', 3, ''),
(220, 's266', 'Robin Hossain', 'Islam', 'Sujon Mia', '2013-03-03', 'Male', '01947184079', 'g@g.com', 'N/A', 'Nursery', 'N/A', 'student/img20190312_21185770_0002.jpg', 'Mrs.Rojina', '6', '2019', 's266', 3, ''),
(221, 's267', 'Atika Akter Mim', 'Islam', 'Shopon Mia', '2013-10-10', 'Female', '01620819946', 'g@g.com', 'N/A', 'Nursery', 'N/A', 'student/img20190312_21185770_0003.jpg', 'Asima Akter', '7', '2019', 's267', 3, ''),
(222, 's268', 'Biddut Hossain', 'Islam', 'Babu Mia', '2013-10-10', 'Male', '01795304910', 'g@g.com', 'N/A', 'Nursery', 'N/A', 'student/b.jpg', 'Mrs.Bithi', '8', '2019', 's268', 3, ''),
(223, 's269', 'Hafsa Akter Monika', 'Islam', 'Monir Hossain', '2014-06-28', 'Female', '01853962819', 'g@g.com', 'N/A', 'Nursery', 'N/A', 'student/a.jpg', 'Sharmin Akter', '9', '2019', 's269', 3, ''),
(224, 's270', 'Hasirun Hossain', 'Islam', 'Daimond Hossain', '2014-06-28', 'Female', '01700623891', 'g@g.com', 'N/A', 'Nursery', 'N/A', 'student/b.jpg', 'Hasna Banu ', '10', '2019', 's270', 3, ''),
(225, 's271', 'Miraj Hossain', 'Islam', 'Sunny', '2014-06-28', 'No_Select', '01687715300', 'g@g.com', 'N/A', 'Nursery', 'N/A', 'student/a.jpg', 'Tumpa', '11', '2019', 's271', 3, ''),
(226, 's272', 'Borsha', 'Islam', 'Md.Lutfar Rahman', '2013-03-26', 'Female', '01929688512', 'g@g.com', 'N/A', 'Nursery', 'N/A', 'student/b.jpg', 'Mrs.Forida', '12', '2019', 's272', 3, ''),
(227, 's273', 'Bithi Akter', 'Islam', 'Siddique', '2013-03-26', 'Female', '01775269586', 'g@g.com', 'N/A', 'Nursery', 'N/A', 'student/a.jpg', 'Khalida Begum', '13', '2019', 's273', 3, ''),
(228, 's274', 'Muntahina Akter Toha', 'Islam', 'Md.Shibli Noman', '2012-03-24', 'Female', '01995843791', 'g@g.com', 'N/A', 'Nursery', 'N/A', 'student/img20190312_21185770_0004.jpg', 'Nasrin', '14', '2019', 's274', 3, ''),
(229, 's275', 'Shikha Moni Sanjida', 'Islam', 'MD.Sanowar Hossain', '2011-09-26', 'Female', '01', 'g@g.com', 'N/A', 'Nursery', 'N/A', 'student/a.jpg', 'Rehana Khatun', '15', '2019', 's275', 3, ''),
(230, 's276', 'Fiha', 'Islam', 'NA', '2019-12-05', 'Female', '01', 'g@g.com', 'N/A', 'Nursery', 'N/A', 'student/b.jpg', 'NA', '16', '2019', 's276', 3, ''),
(231, 's277', 'Abdul Kaium Maruf Hasan', 'Islam', 'Md Masud Mia', '2006-05-16', 'Male', '01993276455', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Nine', 'Business Studies', 'student/2019nnine1.jpg', 'Jasmina Masud', '1', '2019', 's277', 5, ''),
(232, 's278', 'Parvez Rahman Sifat', 'Islam', 'Mustafizur Rahman', '2006-05-16', 'Male', '01989290243', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Nine', 'Business Studies', 'student/2019nnine2.jpg', 'Parvin Begum', '2', '2019', 's278', 5, ''),
(233, 's279', 'Papeea Akter Rima', 'Islam', 'Md Masud Rana', '2004-11-02', 'Female', '01714344992', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Nine', 'Business Studies', 'student/2019nnine3.jpg', 'Rezia Begum', '3', '2019', 's279', 5, ''),
(234, 's280', 'Moriom', 'Islam', 'Md Suruj Mia', '2005-09-01', 'Female', '01969514499', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Nine', 'Business Studies', 'student/2019nnine4.jpg', 'Mst Monoara Begum', '4', '2019', 's280', 5, ''),
(235, 's281', 'Ismile Hossain', 'Islam', 'MD. Eklas Mia', '2005-09-01', 'Male', '01683518039', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Nine', 'Business Studies', 'student/2019nnine5.jpg', 'Rowshon Ara Begum', '5', '2019', 's281', 5, ''),
(236, 's282', 'Easin Arafat', 'Islam', 'Abu Taher', '2005-09-01', 'Male', '01635507118', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Nine', 'Business Studies', 'student/2019nnine6.jpg', 'Monowara Begum', '6', '2019', 's282', 5, ''),
(237, 's283', 'Easin Afsar', 'Islam', 'Aminul Islam', '2005-09-01', 'Male', '01701449472', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Nine', 'Business Studies', 'student/2019nnine7.jpg', 'Nurgis Akter', '7', '2019', 's283', 5, ''),
(238, 's284', 'Md Ifrat', 'Islam', 'Md Ismile Hossain', '2006-03-22', 'Male', '01914858594', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Nine', 'Business Studies', 'student/2019nnine8.jpg', 'Sahana Begum', '8', '2019', 's284', 5, ''),
(239, 's285', 'Jannaty ', 'Islam', 'Md Rojjob Ali', '2004-01-29', 'Female', '01931549248', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Nine', 'Business Studies', 'student/2019nnine9.jpg', 'Mst Ruma Khatun', '9', '2019', 's285', 5, ''),
(240, 's286', 'Sabina Yasmeen Lily', 'Islam', 'Md Nurujjaman', '2005-11-01', 'Female', '01920228516', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Nine', 'Business Studies', 'student/2019nnine10.jpg', 'Kulsum Begum', '10', '2019', 's286', 5, ''),
(241, 's287', 'Mst Kotha ', 'Islam', 'Md Kabir', '2004-11-01', 'Female', '01927798124', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Nine', 'Business Studies', 'student/2019nnine11.jpg', 'Koly', '11', '2019', 's287', 5, ''),
(242, 's288', 'Somiya Akter Sumi', 'Islam', 'Saidul ', '2005-05-05', 'Female', '01961839722', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Nine', 'Business Studies', 'student/2019nnine12.jpg', 'Jharna', '12', '2019', 's288', 5, ''),
(243, 's289', 'Md.Fahad Khan', 'Islam', 'MD.Kamrul Hasan Khan', '2005-05-05', 'Male', '01997631579', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Nine', 'Business Studies', 'student/a.jpg', 'Momotaz Begum', '13', '2019', 's289', 5, ''),
(244, 's290', 'Nasir Hossain', 'Islam', 'MD.Abdur Rajjak', '2005-05-05', 'Male', '01997726170', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Nine', 'Business Studies', 'student/b.jpg', 'Nasrin Begum', '14', '2019', 's290', 5, ''),
(245, 's291', 'Jesmin Akter Sonia', 'Islam', 'Mojahar Ali', '2003-08-02', 'Female', '01782046558', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Ten', 'Business Studies', 'student/2019nten1.jpg', 'Anjura Begum', '1', '2019', 's291', 5, ''),
(246, 's292', 'Nupur Akter', 'Islam', 'Yousuf Ali', '2004-04-10', 'Female', '01735038300', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Ten', 'Business Studies', 'student/2019nten2.jpg', 'Nazma Akter', '2', '2019', 's292', 5, ''),
(247, 's293', 'Reshmi Akter Aka', 'Islam', 'MD.Mamun', '2003-11-01', 'Female', '01963588443', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Ten', 'Business Studies', 'student/2019nten3.jpg', 'RashedaBegum', '3', '2019', 's293', 5, ''),
(248, 's294', 'Tahamina Akter', 'Islam', 'MD.Monir Hossain', '2002-09-16', 'Female', '01912028204', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Ten', 'Business Studies', 'student/2019nten4.jpg', 'Fatema Begum', '4', '2019', 's294', 5, ''),
(249, 's295', 'Sumaiya Akter Mim', 'Islam', 'MD.Abdur Rajjak', '2005-01-16', 'Female', '01997726170', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Ten', 'Business Studies', 'student/2019nten5.jpg', 'Nasrin Begum', '5', '2019', 's295', 5, ''),
(250, 's296', 'MD.Rahad Khan', 'Islam', 'MD.Kamrul Hasan Khan', '2005-09-02', 'Male', '01997631579', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Ten', 'Business Studies', 'student/2019nten6.jpg', 'Momotaz Begum', '6', '2019', 's296', 5, ''),
(251, 's297', 'Farzana Akter jannat', 'Islam', 'Md.Masud Rana', '2002-01-18', 'Female', '01714344992', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Ten', 'Business Studies', 'student/2019nten7.jpg', 'Rezia Begum', '7', '2019', 's297', 5, ''),
(252, 's298', 'Limon Khan', 'Islam', 'MD.Dulal Khan', '2003-01-16', 'Male', '01759294825', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Ten', 'Business Studies', 'student/2019nten8.jpg', 'Runa Begum', '8', '2019', 's298', 5, ''),
(253, 's299', 'Omar Faruk', 'Islam', 'Sahab Uddin', '2004-05-10', 'Male', '01798048237', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Ten', 'Business Studies', 'student/2019nten9.jpg', 'Fatema Begum', '9', '2019', 's299', 5, ''),
(254, 's300', 'Obony Akter', 'Islam', 'MD.Eman Ali', '2004-10-06', 'Female', '01683345156', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Ten', 'Business Studies', 'student/2019nten10.jpg', 'Rashida Begum', '10', '2019', 's300', 5, ''),
(255, 's301', 'Turjoy', 'Hinduism', 'Sumon Sarker', '2003-03-03', 'Male', '01822689430', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Ten', 'Business Studies', 'student/2019nten11.jpg', 'Sabitry Sarker', '11', '2019', 's301', 5, ''),
(256, 's302', 'Toufiq Ahmed', 'Islam', 'Abdul Motin', '2004-11-11', 'Male', '01751203417', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Ten', 'Business Studies', 'student/2019nten12.jpg', 'Renu Khatun', '12', '2019', 's302', 5, ''),
(257, 's303', 'Farzana Akter Mim', 'Islam', 'Liton Sorder', '2005-12-06', 'Female', '01716347508', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Ten', 'Business Studies', 'student/a.jpg', 'Aklima Begum', '13', '2019', 's303', 5, ''),
(258, 's304', 'Nadia Sultana', 'Islam', 'Abul Kashem', '2003-08-26', 'Female', '01865025565', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Ten', 'Business Studies', 'student/2019nten14.jpg', 'Jebun Nessa', '14', '2019', 's304', 5, ''),
(259, 's305', 'Sabbir Ahmed Hridoy', 'Islam', 'Majed Mia', '2003-02-01', 'Male', '01903658296', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Ten', 'Business Studies', 'student/2019nten15.jpg', 'Anwara Begum', '15', '2019', 's305', 5, ''),
(260, 's306', 'Bishal', 'Islam', 'N/A', '2019-12-20', 'Male', '015', 'g5@gmail.com', 'Savar,Dhaka, Bangladesh', 'Ten', 'Business Studies', 'student/b.jpg', 'NA', '16', '2019', 's306', 5, 'He is a Good boy'),
(261, 's307', 'Bijoy', 'Islam', 'N/A', '2019-12-06', 'Male', '01', 'g@g.com', 'Savar,Dhaka, Bangladesh', 'Ten', 'Business Studies', 'student/b.jpg', 'NA', '17', '2019', 's307', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `SID` int(11) NOT NULL,
  `SNAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`SID`, `SNAME`) VALUES
(1, 'Bangla'),
(2, '-'),
(3, 'English'),
(4, 'Mathematics'),
(5, 'General Science'),
(6, 'BD & Glob. Studies'),
(7, 'Religion'),
(8, 'ICT'),
(9, 'Agriculture');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ECID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`EID`);

--
-- Indexes for table `hclass`
--
ALTER TABLE `hclass`
  ADD PRIMARY KEY (`HID`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lexam`
--
ALTER TABLE `lexam`
  ADD PRIMARY KEY (`LEID`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`MID`);

--
-- Indexes for table `smark`
--
ALTER TABLE `smark`
  ADD PRIMARY KEY (`SMID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`TID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ECID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `EID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hclass`
--
ALTER TABLE `hclass`
  MODIFY `HID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lexam`
--
ALTER TABLE `lexam`
  MODIFY `LEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mark`
--
ALTER TABLE `mark`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `smark`
--
ALTER TABLE `smark`
  MODIFY `SMID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `TID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;

--
-- AUTO_INCREMENT for table `sub`
--
ALTER TABLE `sub`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
