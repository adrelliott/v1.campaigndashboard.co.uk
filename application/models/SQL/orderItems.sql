-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2013 at 02:02 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Table structure for table `orderItems`
--

CREATE TABLE IF NOT EXISTS `orderItems` (
  `Id` varchar(10) NOT NULL,
  `OrderId` varchar(10) NOT NULL,
  `ProductId` varchar(10) NOT NULL,
  `SubscriptionPlanId` varchar(10) NOT NULL,
  `ItemName` text NOT NULL,
  `Qty` varchar(10) NOT NULL,
  `CostPerItem` varchar(10) NOT NULL,
  `PricePerItem` varchar(10) NOT NULL,
  `ItemDescription` text NOT NULL,
  `ItemDescription2` text NOT NULL,
  `ItemDescription3` text NOT NULL,
  `ItemDescription4` text NOT NULL,
  `ItemType` varchar(100) NOT NULL,
  `Notes` text NOT NULL,
  `dID` int(10) NOT NULL,
  `ActiveRecordYN` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
