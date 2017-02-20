-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2010 at 08:13 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `accno` bigint(20) NOT NULL,
  `acctype` varchar(10) DEFAULT NULL,
  `bankname` varchar(15) NOT NULL,
  `branchid` varchar(10) DEFAULT NULL,
  `balance` int(11) NOT NULL,
  `custid` varchar(20) NOT NULL,
  PRIMARY KEY (`accno`,`custid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accno`, `acctype`, `bankname`, `branchid`, `balance`, `custid`) VALUES
(12312, 'Savings', 'HDC', '', 1111111, 'tezzz'),
(12121, 'Savings', 'HSBC', 'Pune', 9999, 'cdcd'),
(123445, 'Savings', 'ICICI', '', 98000, 'tezzz'),
(11221122, 'Savings', 'SBI', 'Kota', 300000, 'cdcd'),
(221111, 'Savings', 'HSBC', 'mumbai', 3293333, 'tezzz'),
(121212, 'Savings', 'qwwqwqw', 'qwqwqw', 85000, 'shree');

-- --------------------------------------------------------

--
-- Table structure for table `boughtshares`
--

CREATE TABLE IF NOT EXISTS `boughtshares` (
  `custid` varchar(20) NOT NULL,
  `compname` varchar(20) NOT NULL,
  `accno` int(20) NOT NULL,
  `buyprice` int(11) NOT NULL,
  `buydate` date NOT NULL,
  `quantity` int(10) NOT NULL,
  PRIMARY KEY (`custid`,`compname`,`accno`,`buyprice`,`buydate`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boughtshares`
--

INSERT INTO `boughtshares` (`custid`, `compname`, `accno`, `buyprice`, `buydate`, `quantity`) VALUES
('cdcd', 'Amdocs', 12121, 200, '2010-04-11', 40),
('cdcd', 'Amdocs', 11221122, 200, '2010-04-11', 1000),
('cdcd', 'reliance', 12121, 1000, '2010-04-11', 20),
('tezzz', 'Amdocs', 221111, 200, '2010-04-15', 200),
('tezzz', 'Amdocs', 123445, 200, '2010-04-15', 10),
('shree', 'Amdocs', 121212, 200, '2010-04-15', 100),
('shree', 'reliance', 121212, 1000, '2010-04-15', 10);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `compid` varchar(20) NOT NULL,
  `compname` varchar(15) NOT NULL,
  `compadd` varchar(30) DEFAULT NULL,
  `compcity` varchar(20) DEFAULT NULL,
  `compphone` bigint(15) DEFAULT NULL,
  `compemail` varchar(30) DEFAULT NULL,
  `chairman` varchar(15) DEFAULT NULL,
  `estbdate` date DEFAULT NULL,
  `ptprice` int(11) NOT NULL,
  PRIMARY KEY (`compid`),
  UNIQUE KEY `compnam` (`compname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`compid`, `compname`, `compadd`, `compcity`, `compphone`, `compemail`, `chairman`, `estbdate`, `ptprice`) VALUES
('1', 'reliance', NULL, NULL, NULL, NULL, 'akshay', '2010-03-17', 1000),
('2', 'Amdocs', 'hadapsar', 'pune', 121234, 'fdsfaa@gmail.com', 'tejas', '2000-04-13', 200);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `custid` varchar(20) NOT NULL,
  `custname` varchar(15) NOT NULL,
  `custadd` varchar(35) DEFAULT NULL,
  `custcity` varchar(20) DEFAULT NULL,
  `custmobile` bigint(20) DEFAULT NULL,
  `custemail` varchar(20) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `master` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`custid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custid`, `custname`, `custadd`, `custcity`, `custmobile`, `custemail`, `password`, `master`) VALUES
('100', 'tejas', 'sdf', 'asd', 13212354, 'fd', '123', 0),
('text9.value?q2=text7', '', NULL, NULL, NULL, NULL, '', 0),
('cdcd', 'cdcd', 'c', '', 0, '', 'temp', 0),
('qqqqq', 'qqqqq', 'qqqqqqqq', 'qqqqq', 123456789, 'asgf@das.com', 'qqqqq', 0),
('tezzz', 'Dharmesh', 'ashgads\r\nasd\r\nadsadssa', 'kota', 9214539767, 'dhare@yahoo.com', '12345', 0),
('shree', 'qwqwq', 'qwqwqw', 'qwqwqw', 1212121212, 'qwqw@qweqw.csdc', 'qwqwq', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hint`
--

CREATE TABLE IF NOT EXISTS `hint` (
  `srlno` int(11) NOT NULL,
  `hint` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hint`
--

INSERT INTO `hint` (`srlno`, `hint`) VALUES
(1, 'Save with a long term focus! The longer your time focus is, the less risk you''ll have of a short term recession in the market that results in an crucial impact of the value of your stock.'),
(2, ' Buy and sell on a regular basis! Do not invest a large sum of your savings at one time. You risk buying at a time where the stock are the most expensive. Instead, invest you money -e.g. once a quarter.'),
(3, 'Spread you investments.Do not just bet it all on 1 stock. Instead buy stock in 5-10 companies in different lines of business. Buy first and foremost in growing companies and less in cyclical companies or in companies with high direct dividends.'),
(4, 'Understand what you are buying! Gain knowledge of as many companies as possible, and only buy stock in companies, that you understand. The more you know about the company, the better the chance that you will pick the right place to invest your money.');

-- --------------------------------------------------------

--
-- Table structure for table `presentshares`
--

CREATE TABLE IF NOT EXISTS `presentshares` (
  `custid` varchar(20) NOT NULL,
  `accno` int(11) NOT NULL,
  `compname` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `ptprice` int(11) NOT NULL,
  PRIMARY KEY (`custid`,`compname`,`accno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presentshares`
--

INSERT INTO `presentshares` (`custid`, `accno`, `compname`, `quantity`, `ptprice`) VALUES
('cdcd', 12121, 'Amdocs', 40, 200),
('cdcd', 11221122, 'Amdocs', 1000, 200),
('cdcd', 12121, 'reliance', 20, 1000),
('tezzz', 221111, 'Amdocs', 200, 200),
('tezzz', 123445, 'Amdocs', 10, 200),
('shree', 121212, 'Amdocs', 50, 200),
('shree', 121212, 'reliance', 5, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `soldshares`
--

CREATE TABLE IF NOT EXISTS `soldshares` (
  `custid` varchar(20) NOT NULL,
  `compname` varchar(20) NOT NULL,
  `accno` int(11) NOT NULL,
  `sellprice` int(11) NOT NULL,
  `selldate` date NOT NULL,
  `quatity` int(11) NOT NULL,
  PRIMARY KEY (`custid`,`compname`,`accno`,`sellprice`,`selldate`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soldshares`
--

INSERT INTO `soldshares` (`custid`, `compname`, `accno`, `sellprice`, `selldate`, `quatity`) VALUES
('1', '1', 12, 0, '2010-03-23', 100),
('shree', 'Amdocs', 121212, 200, '2010-04-15', 50),
('shree', 'reliance', 121212, 1000, '2010-04-15', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
