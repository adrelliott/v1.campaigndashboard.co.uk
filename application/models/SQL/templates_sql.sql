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
-- Table structure for table `templates`
--

CREATE TABLE IF NOT EXISTS `templates` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `ActionType` varchar(10) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Content` varchar(10000) NOT NULL,
  `ContentPlaintext` varchar(10000) NOT NULL,
  `ActiveYN` int(11) NOT NULL DEFAULT '1',
  `FromEmail` varchar(100) NOT NULL,
  `FromName` varchar(100) NOT NULL,
  `Subject` varchar(500) NOT NULL,
  `TemplateName` varchar(100) NOT NULL DEFAULT 'css_only_standard',
  `dID` int(10) NOT NULL,
  `ActiveRecordYN` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;
