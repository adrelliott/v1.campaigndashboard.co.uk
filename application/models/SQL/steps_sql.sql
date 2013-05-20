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
-- Table structure for table `steps`
--

CREATE TABLE IF NOT EXISTS `steps` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CampaignId` int(11) NOT NULL,
  `StepName` varchar(500) NOT NULL,
  `ActionType` varchar(100) NOT NULL,
  `TemplateId` int(11) NOT NULL DEFAULT '0',
  `TagId` int(5) NOT NULL DEFAULT '0',
  `StepNo` int(11) NOT NULL,
  `Delay` int(11) NOT NULL,
  `dID` int(10) NOT NULL,
  `ActiveRecordYN` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;