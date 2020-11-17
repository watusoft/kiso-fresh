-- phpMyAdmin SQL Dump
-- version 2.9.1.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Nov 08, 2020 at 08:43 AM
-- Server version: 5.0.27
-- PHP Version: 5.2.0
-- 
-- Database: `kiso`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `cart`
-- 

CREATE TABLE `cart` (
  `idno` int(11) NOT NULL auto_increment,
  `items` mediumtext collate latin1_general_ci NOT NULL,
  `customerid` mediumtext collate latin1_general_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY  (`idno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `cart`
-- 

INSERT INTO `cart` VALUES (1, 'TOMATOES_2_3500_TANGERINES_10_3500_SWEET PEPPER_135_3500', '1', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `customer`
-- 

CREATE TABLE `customer` (
  `idno` int(11) NOT NULL auto_increment,
  `name` varchar(128) collate latin1_general_ci NOT NULL,
  `tel` varchar(32) collate latin1_general_ci NOT NULL,
  `devaddr` varchar(128) collate latin1_general_ci NOT NULL,
  `mail` varchar(128) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`idno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `customer`
-- 

INSERT INTO `customer` VALUES (1, 'kaganda jude mark', '0778972176', 'kireka', 'kaganda@jude.com');

-- --------------------------------------------------------

-- 
-- Table structure for table `login`
-- 

CREATE TABLE `login` (
  `idno` int(11) NOT NULL auto_increment,
  `usn` varchar(128) collate latin1_general_ci NOT NULL,
  `pswd` varchar(128) collate latin1_general_ci NOT NULL,
  `skey` varchar(128) collate latin1_general_ci NOT NULL,
  `exid` mediumtext collate latin1_general_ci NOT NULL,
  `tou` int(11) NOT NULL,
  PRIMARY KEY  (`idno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `login`
-- 

INSERT INTO `login` VALUES (1, 'customer', 'customer', 'customer', '1', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `orders`
-- 

CREATE TABLE `orders` (
  `idno` int(11) NOT NULL auto_increment,
  `cartid` mediumtext collate latin1_general_ci NOT NULL,
  `status` int(11) NOT NULL,
  `amount` varchar(254) collate latin1_general_ci NOT NULL,
  `dest` varchar(128) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`idno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `orders`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `payments`
-- 

CREATE TABLE `payments` (
  `idno` int(11) NOT NULL auto_increment,
  `orderid` mediumtext collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`idno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `payments`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `staff`
-- 

CREATE TABLE `staff` (
  `idno` int(11) NOT NULL auto_increment,
  `name` varchar(128) collate latin1_general_ci NOT NULL,
  `nin` varchar(32) collate latin1_general_ci NOT NULL,
  `contact` varchar(128) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`idno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `staff`
-- 

