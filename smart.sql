-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2012 at 10:56 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smart1`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodation`
--

CREATE TABLE IF NOT EXISTS `accomodation` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `pdesc` text NOT NULL,
  `price` varchar(30) NOT NULL,
  `pno` bigint(10) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `accomodation`
--

INSERT INTO `accomodation` (`id`, `username`, `type`, `pdesc`, `price`, `pno`, `date`) VALUES
(1, 'sonu', 'Villa', 'Villa Plot to sell. 50 cent place with garden', '1 lakh - 10 lakhs', 9645645019, '2012-03-29 07:57:53'),
(2, 'sonu', 'Two Wheelers', 'Pulsar Scooter to sell\r\n180cc. 20000kms run. 40 mileage', '80000', 9645645019, '2012-03-29 07:58:30'),
(3, 'melvin', 'I phone', 'I phone 4S. 64gb. available with headset and charger', '20000', 9645645019, '2012-03-29 07:59:31'),
(4, 'melvin', 'Furniture', '3 sofa set to sell . @ double seater.In Good condition', '6000', 9874569874, '2012-03-29 08:00:16'),
(5, 'riya', 'Mobile', 'Nokia 7610 to sell. with headset and charger..', '9000', 9874569874, '2012-03-29 08:01:12'),
(6, 'kukku', 'Flat', 'a two stored building with 3 bedrooms,attached bathrooms,kitchen, dining and aliving room. also car porch.. road side frontage view. near transport and railway stations.  ,,,,,,,,,,,,', '10 lakhs - 20 lakhs', 9847023562, '2012-03-29 09:09:21'),
(7, 'sonu', 'Villa', '8.5 Cents of land with 2100 sqft double storied new house for sale at Mannanthala, ', 'Less than 1 Lakh', 9876543245, '2012-04-05 10:33:31'),
(10, 'aamir', 'Home Appliances', 'Modular Kitchen in Trivandrum  ', '100000', 9496847372, '2012-04-05 10:45:56'),
(11, 'aamir', 'Laptop & Pc', 'Computer peripherals & accessories @ best price', '9000', 9495746372, '2012-04-05 10:47:12'),
(12, 'riya', 'I phone', 'Apple iphone 4g 32gb,BlackBerry Torch 9800,Nokia N8', '15000', 9496847436, '2012-04-05 10:49:20'),
(13, 'riya', 'Villa', '5.5 Cents of land with 3 years old 2400 sqft double stored house for sale at Koduganoor Jn, Vattiyoorkavu, Trivandrum. Features: 5 bedrooms with attached bathrooms Sitout Two kitchen Work area Balcony Car porch Distance: 100 mtrs from Main Road', 'Above 30 lakhs', 9495867636, '2012-04-05 10:50:56');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE IF NOT EXISTS `login_details` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `tou` int(3) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`username`, `password`, `tou`, `date`) VALUES
('aamir', '111111', 1, '2012-04-05 10:43:25'),
('admin', '123456', 0, '2012-03-17 00:00:00'),
('akanksha', '111111', 3, '2012-04-05 10:52:49'),
('elane', '111111', 2, '2012-03-29 10:34:55'),
('kukku', '123456', 2, '2012-03-29 08:58:51'),
('melvin', '123456', 1, '2012-03-28 17:06:12'),
('merrin', '123456', 3, '2012-03-29 07:52:59'),
('riya', '123456', 2, '2012-03-28 17:07:51'),
('sonu', '123456', 1, '2012-03-28 17:05:32'),
('thushar', '123456', 2, '2012-03-28 17:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `username` varchar(10) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `jobtitle` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tou` int(10) NOT NULL,
  `flag` int(3) NOT NULL,
  `pic` varchar(30) NOT NULL DEFAULT 'upload/default.jpg',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `firstname`, `lastname`, `gender`, `jobtitle`, `address`, `phoneno`, `email`, `tou`, `flag`, `pic`) VALUES
('aamir', 'aamir', 'jain', 'male', 'engineer', 'pb no:09', 9495685746, 'aamirjain@hotmail.com', 1, 3, 'upload/aamir.jpg'),
('admin', 'admin', 'admin', '', '', 'admin', 0, 'admin@smart.com', 0, 3, 'upload/admin.jpg'),
('akanksha', 'akanksha', 'jain', 'female', 'engineer', 'abudhabi', 9384747586, 'akankshajain@yahoo.com', 3, 3, 'upload/default.jpg'),
('elane', 'elane1', 'elza', 'female', 'engineer', 'kjgfdghjk', 9753944278, 'elaneela@gmail.com', 0, 0, 'upload/elane.jpg'),
('kukku', 'kukku', 'mathew', 'female', 'teacher', 'paikkadavu house\r\nkanjirappally po\r\nkottayam\r\n', 9744046402, 'kukku@gmail.com', 3, 3, 'upload/default.jpg'),
('melvin', 'Melvin', 'Varkey', 'male', 'Engineer', 'Edathua', 9744046403, 'melvinvarky@gmail.com', 1, 3, 'upload/default.jpg'),
('merrin', 'merrin', 'john', 'female', 'student', 'edathua', 9874562134, 'melvinvarky@gmail.com', 3, 3, 'upload/default.jpg'),
('riya', 'Riya', 'Lizbeth', 'female', 'Engineer', 'Koovapally', 9744046403, 'riyalizbeth@gmail.com', 3, 3, 'upload/riya.jpg'),
('sonu', 'Sonu', 'John', 'male', 'Engineer', 'Thrissur', 9645645019, 'icanigniteyou@gmail.com', 0, 0, 'upload/sonu.jpg'),
('thushar', 'Thushar', 'Jose', 'male', 'Engineer', 'Kottayam', 9946769419, 'tkj213@gmail.com', 3, 3, 'upload/default.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
