-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2013 at 04:36 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `local_master_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contacts` (
  `Address1Type` varchar(150) DEFAULT NULL,
  `Address1Street1` varchar(150) DEFAULT NULL,
  `Address1Street2` varchar(150) DEFAULT NULL,
  `Address1Street3` varchar(150) DEFAULT NULL,
  `Address1City` varchar(150) DEFAULT NULL,
  `Address1County` varchar(150) DEFAULT NULL,
  `Address1PostCode` varchar(150) DEFAULT NULL,
  `Address1Country` varchar(150) DEFAULT NULL,
  `Address2Type` varchar(150) DEFAULT NULL,
  `Address2Street1` varchar(150) DEFAULT NULL,
  `Address2Street2` varchar(150) DEFAULT NULL,
  `Address2Street3` varchar(150) DEFAULT NULL,
  `Address2City` varchar(150) DEFAULT NULL,
  `Address2County` varchar(150) DEFAULT NULL,
  `Address2PostCode` varchar(150) DEFAULT NULL,
  `Address2Country` varchar(150) DEFAULT NULL,
  `Address3Type` varchar(150) DEFAULT NULL,
  `Address3Street1` varchar(150) DEFAULT NULL,
  `Address3Street2` varchar(150) DEFAULT NULL,
  `Address3Street3` varchar(150) DEFAULT NULL,
  `Address3City` varchar(150) DEFAULT NULL,
  `Address3County` varchar(150) DEFAULT NULL,
  `Address3PostCode` varchar(150) DEFAULT NULL,
  `Address3Country` varchar(150) DEFAULT NULL,
  `DateOfBirth` varchar(50) DEFAULT NULL,
  `OrganisationName` varchar(500) DEFAULT NULL,
  `AccountId` int(30) DEFAULT NULL,
  `ContactNotes` text,
  `ContactType` varchar(100) DEFAULT NULL,
  `CreatedBy` int(50) DEFAULT NULL,
  `DateCreated` varchar(50) DEFAULT NULL,
  `EmailAddress1` varchar(150) DEFAULT NULL,
  `EmailAddress2` varchar(150) DEFAULT NULL,
  `EmailAddress3` varchar(150) DEFAULT NULL,
  `Fax1` varchar(50) DEFAULT NULL,
  `Fax1Type` varchar(50) DEFAULT NULL,
  `Fax2` varchar(50) DEFAULT NULL,
  `Fax2Type` varchar(50) DEFAULT NULL,
  `FirstName` varchar(150) DEFAULT NULL,
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `JobTitle` varchar(150) DEFAULT NULL,
  `LastName` varchar(150) DEFAULT NULL,
  `LastUpdated` varchar(50) DEFAULT NULL,
  `LastUpdatedBy` varchar(50) DEFAULT NULL,
  `Leadsource` varchar(150) DEFAULT NULL,
  `LeadSourceId` int(50) DEFAULT NULL,
  `MiddleName` varchar(150) DEFAULT NULL,
  `Nickname` varchar(150) DEFAULT NULL,
  `Password` varchar(150) DEFAULT NULL,
  `Phone1Mobile` varchar(50) DEFAULT NULL,
  `Phone2Home` varchar(50) DEFAULT NULL,
  `Phone3Work` varchar(50) DEFAULT NULL,
  `Phone3Ext` varchar(50) DEFAULT NULL,
  `Phone4Other` varchar(50) DEFAULT NULL,
  `Phone4Ext` varchar(50) DEFAULT NULL,
  `Phone4Type` varchar(50) DEFAULT NULL,
  `Phone5Other` varchar(50) DEFAULT NULL,
  `Phone5Ext` varchar(50) DEFAULT NULL,
  `Phone5Type` varchar(50) DEFAULT NULL,
  `Suffix` varchar(50) DEFAULT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `Username` varchar(150) DEFAULT NULL,
  `Website` varchar(100) DEFAULT NULL,
  `EmailSignature` text,
  `Gender` varchar(10) NOT NULL,
  `PreferredName` varchar(100) NOT NULL,
  `ClientSince` varchar(50) NOT NULL,
  `ReferredBy` varchar(150) NOT NULL,
  `OwnerId` varchar(150) NOT NULL,
  `IsOrganisationYN` int(1) DEFAULT '0',
  `FacebookUrl` varchar(150) DEFAULT NULL,
  `TwitterName` varchar(150) DEFAULT NULL,
  `LinkedInAddress` varchar(150) DEFAULT NULL,
  `LegacyMembershipNo` text NOT NULL,
  `SuspendedReason` varchar(128) NOT NULL,
  `OptinEmailYN` int(1) NOT NULL DEFAULT '1',
  `OptinSmsYN` int(1) NOT NULL DEFAULT '1',
  `OptinTwitterYN` int(11) NOT NULL DEFAULT '1',
  `OptinSurfaceMailYN` int(1) NOT NULL DEFAULT '1',
  `OptinNewsletterYN` int(1) NOT NULL DEFAULT '1',
  `OptinMerchandiseYN` int(1) NOT NULL DEFAULT '1',
  `OptinOtherYN` int(1) NOT NULL DEFAULT '1',
  `OptinPref` varchar(25) NOT NULL DEFAULT 'Email',
  `OptinClubEventsYN` int(1) NOT NULL DEFAULT '1',
  `OptinAwayMatchYN` int(1) NOT NULL DEFAULT '0',
  `ActiveContactYN` int(1) NOT NULL DEFAULT '1',
  `JobCategory` varchar(100) NOT NULL DEFAULT 'Workshop',
  `OrgStructure` varchar(100) NOT NULL,
  `NoStaff` int(5) NOT NULL,
  `InHouseHrYN` int(11) NOT NULL DEFAULT '0',
  `Sector` varchar(100) NOT NULL,
  `CrmUser_YN` int(1) NOT NULL DEFAULT '0',
  `CrmUser_AdminLevel` int(1) NOT NULL DEFAULT '3',
  `CrmUser_SuspendReason` varchar(500) DEFAULT NULL,
  `dID` int(8) NOT NULL,
  `ActiveRecordYN` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;