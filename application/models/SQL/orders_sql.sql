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
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `OrderTitle` varchar(500) NOT NULL,
  `ContactId` int(10) NOT NULL,
  `LeadId` varchar(50) NOT NULL,
  `StartDate` varchar(100) NOT NULL,
  `EndDate` varchar(100) NOT NULL,
  `DueDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `OrderNotes` text NOT NULL,
  `ProductId` int(50) NOT NULL,
  `DateCreated` varchar(150) NOT NULL,
  `OrderRecurringId` int(10) NOT NULL,
  `OrderType` varchar(500) NOT NULL,
  `OrderStatus` int(10) NOT NULL,
  `ShipFirstName` varchar(500) NOT NULL,
  `ShipMiddleName` varchar(500) NOT NULL,
  `ShipLastName` varchar(500) NOT NULL,
  `ShipCompany` varchar(500) NOT NULL,
  `ShipPhone` varchar(50) NOT NULL,
  `ShipStreet1` varchar(500) NOT NULL,
  `ShipStreet2` varchar(500) NOT NULL,
  `ShipStreet3` varchar(500) NOT NULL,
  `ShipCity` varchar(500) NOT NULL,
  `ShipCounty` varchar(500) NOT NULL,
  `ShipPostalcode` varchar(50) NOT NULL,
  `ShipCountry` varchar(500) NOT NULL,
  `TotalPriceA` varchar(10) NOT NULL,
  `TotalPriceB` varchar(10) NOT NULL,
  `TotalPriceC` varchar(10) NOT NULL,
  `ItemBought` varchar(500) NOT NULL,
  `ValidUntil` varchar(100) NOT NULL,
  `Source` varchar(150) NOT NULL,
  `PaymentMethod` varchar(150) NOT NULL,
  `dID` int(10) NOT NULL,
  `ActiveRecordYN` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;