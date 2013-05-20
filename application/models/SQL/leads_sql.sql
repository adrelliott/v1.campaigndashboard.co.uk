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
-- Table structure for table `leads`
--

CREATE TABLE IF NOT EXISTS `leads` (
  `Id` int(30) NOT NULL AUTO_INCREMENT,
  `LeadTitle` varchar(500) NOT NULL,
  `LeadType` varchar(100) NOT NULL,
  `ContactId` int(30) NOT NULL,
  `AffiliateId` int(30) NOT NULL,
  `UserId` int(30) NOT NULL,
  `StageId` int(30) NOT NULL,
  `StatusId` int(30) NOT NULL,
  `ActiveYN` int(1) NOT NULL DEFAULT '1',
  `Leadsource` varchar(500) NOT NULL,
  `Objection` varchar(1000) NOT NULL,
  `ProjectedRevenueLow` int(30) NOT NULL,
  `ProjectedRevenueHigh` int(30) NOT NULL,
  `OpportunityNotes` text NOT NULL,
  `DateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `LastUpdated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `LastUpdatedBy` int(30) NOT NULL,
  `CreatedBy` int(30) NOT NULL,
  `EstimatedCloseDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `NextActionDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `NextActionNotes` text NOT NULL,
  `ProductId` int(10) NOT NULL,
  `TotalPriceA` varchar(10) NOT NULL,
  `TotalPriceB` int(10) NOT NULL,
  `TotalPriceC` int(10) NOT NULL,
  `dID` int(10) NOT NULL,
  `ActiveRecordYN` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=535 ;