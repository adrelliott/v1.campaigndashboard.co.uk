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
-- Table structure for table `config_datasets`
--

CREATE TABLE `config_datasets` (
  `Name` varchar(150) DEFAULT NULL,
  `Type` varchar(150) DEFAULT NULL,
  `Table` varchar(150) DEFAULT NULL,
  `Fields` varchar(2000) DEFAULT NULL,
  `Method` varchar(150) DEFAULT NULL,
  `Params` varchar(150) DEFAULT NULL,
  `Controller` varchar(150) DEFAULT NULL,
  `ControllerMethod` varchar(150) DEFAULT NULL,
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `dID` int(8) NOT NULL,
  `ActiveRecordYN` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
