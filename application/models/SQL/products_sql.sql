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
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `Id` int(30) NOT NULL AUTO_INCREMENT,
  `ProductName` text NOT NULL,
  `ProductPrice` varchar(15) NOT NULL,
  `ProductType` varchar(100) NOT NULL,
  `Sku` varchar(100) NOT NULL,
  `ShortDescription` text NOT NULL,
  `LongDescription` text NOT NULL,
  `Taxable` int(30) NOT NULL,
  `CountryTaxable` int(30) NOT NULL,
  `StateTaxable` int(30) NOT NULL,
  `CityTaxable` int(30) NOT NULL,
  `Weight` int(30) NOT NULL,
  `IsPackage` int(30) NOT NULL,
  `NeedsDigitalDelivery` int(30) NOT NULL,
  `HideInStore` int(30) NOT NULL,
  `Status` int(30) NOT NULL,
  `HTMLDescription` text NOT NULL,
  `TopHTML` text NOT NULL,
  `BottomHTML` text NOT NULL,
  `ShippingTime` varchar(500) NOT NULL,
  `LargeImage` blob NOT NULL,
  `InventoryNotifiee` varchar(500) NOT NULL,
  `Shippable` int(30) NOT NULL,
  `dID` int(10) NOT NULL,
  `ActiveRecordYN` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=391 ;
