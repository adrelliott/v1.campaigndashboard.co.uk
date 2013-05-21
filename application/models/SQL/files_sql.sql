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
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `Id` int(30) NOT NULL AUTO_INCREMENT,
  `FileName` varchar(500) NOT NULL,
  `Extension` varchar(50) NOT NULL,
  `FileSize` text NOT NULL,
  `ContactId` int(30) NOT NULL,
  `LeadId` int(10) NOT NULL,
  `OrderId` int(10) NOT NULL,
  `PublicYN` int(30) NOT NULL DEFAULT '0',
  `dID` int(10) NOT NULL,
  `ActiveRecordYN` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
