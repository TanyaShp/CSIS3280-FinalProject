-- Lab06 Solution
-- Tetiana Shpychka
-- 300296811

-- DROP the database if it exists
DROP DATABASE IF EXISTS CMS_Team7;

-- CREATE THE DATABASE
CREATE DATABASE CMS_Team7;
use CMS_Team7;
-- SHOW DATABASES;
-- SHOW DATABASES;

-- Create the Passenger Table
create table Student (
    username VARCHAR(250) PRIMARY KEY,
	studentid INT,	
	password VARCHAR(250),
	email VARCHAR(50),
	full_name VARCHAR(50),	
	major VARCHAR(50),
    photo VARCHAR(50)
) Engine=InnoDB;

-- -- Create the Cruise Table
-- CREATE TABLE Cruise_TSh96811 (
--     CruiseID INT AUTO_INCREMENT,
-- 	CruiseName TEXT NOT NULL,
-- 	CruiseDestination TEXT NOT NULL,
-- 	CruiseDepartureLocation TEXT,
--     CruiseRatings TEXT,
--     PRIMARY KEY(CruiseID)
-- ) ENGINE=InnoDB;
-- DESC Cruise_TSh96811;

-- -- Create the Booking Table with Foreign Key Constraints
-- CREATE TABLE Booking_TSh96811 (
--     BookingID INT PRIMARY KEY AUTO_INCREMENT,
-- 	PassengerID INT NULL,
--     CruiseID INT NULL,
-- 	BookingCost TEXT NOT NULL,
--     BookingClass TEXT NOT NULL,
--     FOREIGN KEY (CruiseID) REFERENCES  Cruise_TSh96811(CruiseID) ON DELETE CASCADE ON UPDATE CASCADE,
--     FOREIGN KEY (PassengerID) REFERENCES  Passenger_TSh96811(PassengerID) ON DELETE CASCADE ON UPDATE CASCADE
-- ) ENGINE=InnoDB;
-- DESC Booking_TSh96811;

-- -- Show Tables
-- SHOW TABLES;

-- -- INSERT Passenger Info
-- INSERT INTO Passenger_TSh96811(PassengerName, PassengerAge, PassengerAddress, PassengerPhone) VALUES('Daenerys Targaryen',33,'88 Dragon Avenue, ON','555-333-4444');
-- INSERT INTO Passenger_TSh96811(PassengerName, PassengerAge, PassengerAddress, PassengerPhone) VALUES('Jon Snow',33,'44 Snow Street, On','555-323-8787');
-- INSERT INTO Passenger_TSh96811(PassengerName, PassengerAge, PassengerAddress, PassengerPhone) VALUES('Arya Stark',22,'55 Murder Street, ON','565-231-6565');
-- INSERT INTO Passenger_TSh96811(PassengerName, PassengerAge, PassengerAddress, PassengerPhone) VALUES('Tyrion Lannister',51,'645 Wine Street, ON','233-455-3434');
-- INSERT INTO Passenger_TSh96811(PassengerName, PassengerAge, PassengerAddress, PassengerPhone) VALUES('Sansa Stark',46,'77 Queen Street, ON','666-666-6666'); 

-- -- SELECT (READ) Passenger Table
-- SELECT * FROM Passenger_TSh96811;

-- -- UPDATE (UPDATE) Passenger Table
-- UPDATE Passenger_TSh96811 SET PassengerName = 'Khal Drogo' WHERE PassengerID = 3;

-- -- DELETE (DELETE) Passenger Table
-- SELECT * FROM Passenger_TSh96811;

-- -- INSERT Cruise Info
-- INSERT INTO Cruise_TSh96811(CruiseName, CruiseDestination, CruiseDepartureLocation, CruiseRatings) VALUES('Carnival Cruise Line','New Orleans, Louisiana','Edinburgh, Scotland','3.13');
-- INSERT INTO Cruise_TSh96811(CruiseName, CruiseDestination, CruiseDepartureLocation, CruiseRatings) VALUES('Celebrity Cruises','Bangkok, Thailand','Venice, Italy','1.59');
-- INSERT INTO Cruise_TSh96811(CruiseName, CruiseDestination, CruiseDepartureLocation, CruiseRatings) VALUES('Holland America Line','Miami, Florida','Honolulu, Hawaii','4.70');
-- INSERT INTO Cruise_TSh96811(CruiseName, CruiseDestination, CruiseDepartureLocation, CruiseRatings) VALUES('MSC Cruises','Perth, Australia','Istanbul, Turkey','3.75');
-- INSERT INTO Cruise_TSh96811(CruiseName, CruiseDestination, CruiseDepartureLocation, CruiseRatings) VALUES('Norwegian Cruise Line','Oslo, Norway','Dubai, U.A.E.','2.14');

-- -- SELECT (READ) Cruise Table
-- SELECT * FROM Cruise_TSh96811;

-- -- UPDATE (UPDATE) Cruise Table
-- UPDATE Cruise_TSh96811 SET CruiseName = 'Azamara Club Cruises' WHERE CruiseID = 2;

-- -- DELETE (DELETE) from Cruise Table
-- DELETE FROM Cruise_TSh96811 WHERE CruiseName='MSC Cruises';

-- -- SELECT (READ) Cruise Table
-- SELECT * FROM Cruise_TSh96811;

-- -- INSERT Booking Table Info
-- INSERT INTO Booking_TSh96811(CruiseID, PassengerID, BookingCost, BookingClass) VALUES(1,1,'$906.99','Sovereign Class');
-- INSERT INTO Booking_TSh96811(CruiseID, PassengerID, BookingCost, BookingClass) VALUES(1,5,'$700.99','Vision Class');
-- INSERT INTO Booking_TSh96811(CruiseID, PassengerID, BookingCost, BookingClass) VALUES(3,3,'$670.99','Radiance Class');
-- INSERT INTO Booking_TSh96811(CruiseID, PassengerID, BookingCost, BookingClass) VALUES(2,5,'$700.99','Vision Class');
-- INSERT INTO Booking_TSh96811(CruiseID, PassengerID, BookingCost, BookingClass) VALUES(5,5,'$580.99','Radiance Class');

-- -- SELECT (READ) from Booking Table
-- SELECT * FROM Booking_TSh96811;

-- -- UPDATE (UPDATE) Booking Table
-- UPDATE Booking_TSh96811 SET BookingCost = "$720.99" WHERE BookingID = 2;

-- -- SELECT (READ) from Booking Table
-- SELECT * FROM Booking_TSh96811;


