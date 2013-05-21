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
-- Table structure for table `contact_actions`
--

CREATE TABLE IF NOT EXISTS `contact_actions` (
  `Id` int(7) NOT NULL AUTO_INCREMENT,
  `ContactId` int(11) NOT NULL,
  `UserId` int(50) NOT NULL,
  `LeadId` int(10) NOT NULL,
  `ActionType` varchar(100) NOT NULL DEFAULT 'Task',
  `ActionSubtype` varchar(100) NOT NULL,
  `ActionDescription` text NOT NULL,
  `IsAppointment` int(10) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CreationNotes` text NOT NULL,
  `CreatedBy` int(50) NOT NULL,
  `Status` float NOT NULL DEFAULT '0',
  `CompletedYN` int(1) NOT NULL DEFAULT '0',
  `CompletionDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ActionDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `StartDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `EndDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ValidUntil` varchar(150) NOT NULL,
  `EstimatedDuration` int(10) NOT NULL,
  `PopupDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Accepted` int(50) NOT NULL,
  `LastUpdated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `LastUpdatedBy` int(10) NOT NULL,
  `Priority` int(10) NOT NULL,
  `VehicleId` int(5) NOT NULL,
  `NotificationDetails` varchar(150) NOT NULL,
  `dID` int(10) NOT NULL,
  `ActiveRecordYN` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;
