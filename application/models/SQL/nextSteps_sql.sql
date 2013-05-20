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
-- Table structure for table `nextSteps`
--

CREATE TABLE IF NOT EXISTS `nextSteps` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `ContactId` int(10) NOT NULL,
  `CampaignId` int(10) NOT NULL,
  `StepNumber` int(10) NOT NULL,
  `TaskDue` int(15) NOT NULL,
  `CompletedYN` int(1) NOT NULL DEFAULT '0',
  `dID` int(10) NOT NULL,
  `ActiveRecordYN` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=416 ;