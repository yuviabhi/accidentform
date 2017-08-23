-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2016 at 10:17 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `accident_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accident_information`
--

CREATE TABLE IF NOT EXISTS `accident_information` (
  `Reference_Number` varchar(50) NOT NULL,
  `Police_Station` varchar(50) DEFAULT NULL,
  `Place` varchar(50) DEFAULT NULL,
  `Date_Time` varchar(50) DEFAULT NULL,
  `Day_of_Week` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accident_information`
--

INSERT INTO `accident_information` (`Reference_Number`, `Police_Station`, `Place`, `Date_Time`, `Day_of_Week`) VALUES
('AccRef001', ' Kharagpur', ' IIT', ' 28-6-2016 10:55', ' TUE'),
('AccRef2001', ' Kharagpur', ' Golbajar', ' 23-6-2016 16:0', ' THU'),
('accRef3001', ' Kharagpur', ' Inda', ' 20-6-2016 17:51', ' MON'),
('AccRef005', ' Kolkata', ' Kolkata', ' 2-7-2016 11:1', ' SAT');

-- --------------------------------------------------------

--
-- Table structure for table `accident_related_factors`
--

CREATE TABLE IF NOT EXISTS `accident_related_factors` (
  `Reference_Number` varchar(50) NOT NULL,
  `Weather_Condition` varchar(50) DEFAULT NULL,
  `Collision_Type` varchar(50) DEFAULT NULL,
  `Road_Type` varchar(50) DEFAULT NULL,
  `Accident_Severity` varchar(50) DEFAULT NULL,
  `Number_of_Vehicles_Involved` varchar(50) DEFAULT NULL,
  `Number_of_Person_Involved` varchar(50) DEFAULT NULL,
  `Area_Type` varchar(50) DEFAULT NULL,
  `Sub_Area_Type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accident_related_factors`
--

INSERT INTO `accident_related_factors` (`Reference_Number`, `Weather_Condition`, `Collision_Type`, `Road_Type`, `Accident_Severity`, `Number_of_Vehicles_Involved`, `Number_of_Person_Involved`, `Area_Type`, `Sub_Area_Type`) VALUES
('AccRef001', 'Sunny', ' Head On Collision', ' Expressway', ' Fatal', ' 1', ' 2', ' Urban', ' Residential Area'),
('AccRef2001', 'Sunny', ' Head On Collision', ' Expressway', ' Fatal', ' 1', ' 1', ' Rural', ' Others'),
('accRef3001', 'Dusty Storm', ' Head On Collision', ' NH', ' Minor', ' 1', ' 1', ' Urban', ' Residential Area'),
('AccRef005', 'Sunny', ' Head On Collision', ' Expressway', ' Fatal', ' 1', ' 1', ' Urban', ' Residential Area');

-- --------------------------------------------------------

--
-- Table structure for table `collision_information`
--

CREATE TABLE IF NOT EXISTS `collision_information` (
  `Reference_Number` varchar(50) NOT NULL,
  `Latitude` varchar(50) DEFAULT NULL,
  `Longitude` varchar(50) DEFAULT NULL,
  `Nearby_Landmarks` varchar(50) DEFAULT NULL,
  `Distance_from_Nearby_Landmark` varchar(50) DEFAULT NULL,
  `Remarks` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collision_information`
--

INSERT INTO `collision_information` (`Reference_Number`, `Latitude`, `Longitude`, `Nearby_Landmarks`, `Distance_from_Nearby_Landmark`, `Remarks`) VALUES
('AccRef001', '22.319675976670176', '87.30877708643675', 'IIT Main building', '200', 'No traffic police'),
('AccRef2001', '22.354432494388654', '87.26828511804342', 'Shiv Mandir', '500', 'Damaged road'),
('accRef3001', '22.262861337286125', '87.37437855452299', 'Water tank', '100', 'busy road'),
('AccRef005', '22.252861337286125', '87.37437855452299', 'Main Road', '1050', 'Road Repairing work going on');

-- --------------------------------------------------------

--
-- Table structure for table `official_details`
--

CREATE TABLE IF NOT EXISTS `official_details` (
  `Reference_Number` varchar(50) NOT NULL,
  `FIR_Number` varchar(50) DEFAULT NULL,
  `Date_of_Occurence` varchar(50) DEFAULT NULL,
  `Date_of_Information_Received` varchar(50) DEFAULT NULL,
  `Information_Details` varchar(50) DEFAULT NULL,
  `Officer_in_Charge` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `official_details`
--

INSERT INTO `official_details` (`Reference_Number`, `FIR_Number`, `Date_of_Occurence`, `Date_of_Information_Received`, `Information_Details`, `Officer_in_Charge`) VALUES
('AccRef001', 'FIR001', ' 28-6-2016 15:59', ' 29-6-2016 10:44', ' Bus Helper flew away', ' Mr A. Roy'),
('AccRef2001', 'fir2001', ' 23-6-2016 17:3', ' 24-6-2016 11:3', ' villagers gone crazy over driver', ' Mr. S. Das'),
('accRef3001', 'fir3001', ' 20-6-2016 19:7', ' 21-6-2016 10:7', ' Information details', ' Mr. D. Mukherjee'),
('AccRef005', 'fir222', ' 2-7-2016 11:5', ' 2-7-2016 11:5', ' no details', ' Mr. K. Show');

-- --------------------------------------------------------

--
-- Table structure for table `pedestrian`
--

CREATE TABLE IF NOT EXISTS `pedestrian` (
  `ID` varchar(50) NOT NULL,
  `Reference_Number` varchar(50) NOT NULL,
  `Pedestrian_Location` varchar(50) DEFAULT NULL,
  `Age` varchar(50) DEFAULT NULL,
  `Sex` varchar(50) DEFAULT NULL,
  `Accident_Severity` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pedestrian`
--

INSERT INTO `pedestrian` (`ID`, `Reference_Number`, `Pedestrian_Location`, `Age`, `Sex`, `Accident_Severity`) VALUES
('1', 'AccRef001', ' In Carriageway on Pedestrian Facility', ' 25', ' Male', ' Fatal'),
('1', 'AccRef2001', ' In Carriageway on Pedestrian Facility', ' 30', ' Male', ' Fatal'),
('1', 'accRef3001', ' In Carriageway on Pedestrian Facility', ' 25', ' Male', ' Fatal'),
('1', 'AccRef005', ' In Carriageway on Pedestrian Facility', ' 31', ' Male', ' Fatal');

-- --------------------------------------------------------

--
-- Table structure for table `person_related_factors`
--

CREATE TABLE IF NOT EXISTS `person_related_factors` (
  `ID` varchar(50) NOT NULL,
  `Reference_Number` varchar(50) NOT NULL,
  `Age` varchar(50) DEFAULT NULL,
  `Sex` varchar(50) DEFAULT NULL,
  `Accident_Severity` varchar(50) DEFAULT NULL,
  `Person_Class` varchar(50) DEFAULT NULL,
  `Seatbelt_Used` varchar(50) DEFAULT NULL,
  `Helmet_Used` varchar(50) DEFAULT NULL,
  `Alcohol_Test` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person_related_factors`
--

INSERT INTO `person_related_factors` (`ID`, `Reference_Number`, `Age`, `Sex`, `Accident_Severity`, `Person_Class`, `Seatbelt_Used`, `Helmet_Used`, `Alcohol_Test`) VALUES
('1', 'AccRef001', ' 25', ' Male', ' Fatal', ' Driver', ' Yes', ' Yes', ' Negative'),
('2', 'AccRef001', ' 27', ' Female', ' Fatal', ' Passenger', ' No', ' Yes', ' Unknown'),
('1', 'AccRef2001', ' 51', ' Male', ' Unknown', ' Driver', ' Yes', ' Yes', ' Positive'),
('1', 'accRef3001', ' 29', ' Male', ' Fatal', ' Driver', ' No', ' No', ' Unknown'),
('1', 'AccRef005', ' 34', ' Male', ' Yes', ' Driver', ' Yes', ' Yes', ' Positive');

-- --------------------------------------------------------

--
-- Table structure for table `road_related_factors`
--

CREATE TABLE IF NOT EXISTS `road_related_factors` (
  `Reference_Number` varchar(50) NOT NULL,
  `Carriageway_Type` varchar(50) DEFAULT NULL,
  `Junction_Type` varchar(50) DEFAULT NULL,
  `Light_Condition` varchar(50) DEFAULT NULL,
  `Junction_Control` varchar(50) DEFAULT NULL,
  `Number_of_Lanes_in_Each_Direction` varchar(50) DEFAULT NULL,
  `Pedestrian_Facilities` varchar(50) DEFAULT NULL,
  `Road_Surface_Condition` varchar(50) DEFAULT NULL,
  `Speed_Limit` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `road_related_factors`
--

INSERT INTO `road_related_factors` (`Reference_Number`, `Carriageway_Type`, `Junction_Type`, `Light_Condition`, `Junction_Control`, `Number_of_Lanes_in_Each_Direction`, `Pedestrian_Facilities`, `Road_Surface_Condition`, `Speed_Limit`) VALUES
('AccRef001', 'Devided Carriage Way', ' Roundabout', ' Day, Street Light Present', ' Authorized Person', ' 2', ' No Facilities', ' Dry', ' < 40'),
('AccRef2001', 'Devided Carriage Way', ' Roundabout', ' Day, No Street Light', ' Authorized Person', ' 2', ' No Facilities', ' Slippery', ' > 80'),
('accRef3001', 'Devided Carriage Way', ' Roundabout', ' Day, Street Light Present', ' Authorized Person', ' 1', ' No Facilities', ' Dry', ' 60 - 80'),
('AccRef005', 'Devided Carriage Way', ' Roundabout', ' Day, Street Light Present', ' Authorized Person', ' 1', ' No Facilities', ' Dry', ' < 40');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_related_factors`
--

CREATE TABLE IF NOT EXISTS `vehicle_related_factors` (
  `Reference_Number` varchar(50) NOT NULL,
  `Type_of_Vehicle` varchar(50) DEFAULT NULL,
  `Direction_of_Travel` varchar(50) DEFAULT NULL,
  `Vehicle_Manoeuvere` varchar(50) DEFAULT NULL,
  `Vehicle_Defects` varchar(50) DEFAULT NULL,
  `Registration_Number` varchar(50) DEFAULT NULL,
  `Age` varchar(50) DEFAULT NULL,
  `ID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_related_factors`
--

INSERT INTO `vehicle_related_factors` (`Reference_Number`, `Type_of_Vehicle`, `Direction_of_Travel`, `Vehicle_Manoeuvere`, `Vehicle_Defects`, `Registration_Number`, `Age`, `ID`) VALUES
('AccRef001', ' Car, SUV', ' North', ' Changing Lane', ' Defective Brakes', ' WB 1234', ' 10', '1'),
('AccRef2001', ' Bus', ' North', ' Overtaking in Right', ' Bald Tyres', ' wb 3456', ' 30', '1'),
('accRef3001', ' Motorcycle/Moped', ' North', ' Changing Lane', ' Defective Brakes', ' wb 9981', ' 26', '1'),
('AccRef005', ' Bicycle', ' North', ' Changing Lane', ' Defective Brakes', ' wb nnnn', ' 3', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
