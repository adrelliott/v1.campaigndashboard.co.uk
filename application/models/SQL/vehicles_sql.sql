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
-- Table structure for table `vehicles`
--

CREATE TABLE IF NOT EXISTS `vehicles` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `ContactId` int(10) NOT NULL,
  `Registration` varchar(15) NOT NULL,
  `Make` varchar(50) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `VehicleNotes` varchar(5000) NOT NULL,
  `MotExpiry` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ActiveYN` int(1) NOT NULL DEFAULT '1',
  `Service_expiry` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Date_of_healthcheck` int(20) NOT NULL DEFAULT '0',
  `Mileage` int(8) NOT NULL DEFAULT '0',
  `TyreOsf` int(5) NOT NULL DEFAULT '0',
  `TyreNsf` int(5) NOT NULL DEFAULT '0',
  `TyreOsr` int(5) NOT NULL DEFAULT '0',
  `TyreNsr` int(5) NOT NULL DEFAULT '0',
  `TyrePressureOsf` int(11) NOT NULL,
  `TyrePressureNsf` int(11) NOT NULL,
  `TyrePressureOsr` int(11) NOT NULL,
  `TyrePressureNsr` int(11) NOT NULL,
  `TyreNotes` varchar(500) NOT NULL,
  `CheckLights` varchar(100) NOT NULL,
  `CheckHornWipersWashers` varchar(100) NOT NULL,
  `CheckAircon` varchar(100) NOT NULL,
  `ElectricNotes` varchar(500) NOT NULL,
  `CheckBrakes` varchar(100) NOT NULL,
  `CheckClutch` varchar(100) NOT NULL,
  `CheckEngineNoise` varchar(100) NOT NULL,
  `CheckGlass` varchar(100) NOT NULL,
  `CheckSeatBelts` varchar(100) NOT NULL,
  `InternalNotes` varchar(500) NOT NULL,
  `CheckFluidLevels` varchar(100) NOT NULL,
  `CheckFluidLeaks` varchar(100) NOT NULL,
  `CheckBattery` varchar(100) NOT NULL,
  `CheckDriveBelts` varchar(100) NOT NULL,
  `BonnetNotes` varchar(500) NOT NULL,
  `CheckBrakeFluid` varchar(100) NOT NULL,
  `CheckMasterCylinder` varchar(100) NOT NULL,
  `CheckLinings` varchar(100) NOT NULL,
  `CheckDiscDrums` varchar(100) NOT NULL,
  `CheckHoses` varchar(100) NOT NULL,
  `BrakesNotes` varchar(500) NOT NULL,
  `CheckExhaust` varchar(100) NOT NULL,
  `CheckSteering` varchar(200) NOT NULL,
  `CheckDrive_shafts` varchar(200) NOT NULL,
  `CheckOil` varchar(200) NOT NULL,
  `UndersideNotes` varchar(500) NOT NULL,
  `dID` int(10) NOT NULL,
  `ActiveRecordYN` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1852 ;
