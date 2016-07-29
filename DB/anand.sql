-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2016 at 07:45 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anand`
--

-- --------------------------------------------------------

--
-- Table structure for table `anand`
--

CREATE TABLE IF NOT EXISTS `anand` (
  `myname` varchar(32) DEFAULT NULL,
  `mypass` varchar(32) DEFAULT NULL,
  `emailid` varchar(30) NOT NULL DEFAULT '',
  `street` varchar(30) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anand`
--

INSERT INTO `anand` (`myname`, `mypass`, `emailid`, `street`, `city`, `state`, `country`, `pincode`) VALUES
('a', 'adfn', 'a@g.com', 'sa', 'Mumbai', 'Maharashtra', 'India', 12),
('ajay', 'desai', 'a@gm.com', 'hi', 'Mumbai', 'Maharashtra', 'India', 1),
('anandd', 'afjajd', 'a@gma.com', 'aef', 'refa', 'wg', 'wrg', 123),
('ganesh', 'baleri', 'aanand@gmail.com', 'asef', 'srga', 'wgsr', 'dgbnsrt', 31),
('Ganesh', 'baleri', 'abc@gmail.com', 'abc', 'Delhi', 'Rajasthan', 'India', 9000),
('abcd', 'abcd', 'abcd@gmail.com', 'abcd', 'Mumbai', 'Maharashtra', 'India', 1),
('ajay', 'desai', 'ajay@yahoo.com', 'here', 'Mumbai', 'Maharashtra', 'India', 2),
('anand', 'desa', 'anan@gma.com', 'a', 'Mumbai', 'Maharashtra', 'India', 1),
('bag', 'bag', 'bag@gmail.com', 'bag', 'Mumbai', 'Maharashtra', 'India', 12),
('anand', 'desai', 'baleri.ganesh@gmail.com', 'qwe', 'Kolkata', 'Rajasthan', 'India', 4),
('batli', 'batli', 'batli@gmail.com', 'batli', 'Mumbai', 'Maharashtra', 'India', 23),
('vai', 'vai', 'ca@yah.com', 'asdwe', 'Chennai', 'Kerala', 'India', 1234),
('cell', 'cell', 'cell@gmail.com', 'cell', 'Mumbai', 'Maharashtra', 'India', 8),
('an', 'po', 'chai.bap@gmail.com', 'port', 'Mumbai', 'Gujarat', 'India', 1),
('chaitanya', 'bapat', 'chai.bapat@gmail.com', 'hi', 'Mumbai', 'Maharashtra', 'India', 34),
('cord', 'cord', 'cord@gmail.com', 'cord', 'Mumbai', 'Maharashtra', 'India', 2),
('deepali', 'dvd', 'dvd@gmail.com', 'afsdf', 'Mumbai', 'Maharashtra', 'India', 3),
('ede', 'ede', 'ede@gmail.com', 'ede', 'Mumbai', 'Maharashtra', 'India', 1),
('fan', 'fan', 'fan@gmail.com', 'fan', 'Mumbai', 'Maharashtra', 'India', 1),
('hisup', 'hisup', 'hi@gmail.com', 'erw', 'Mumbai', 'Maharashtra', 'India', 23),
('anand', 'desai', 'hi@gmailc.co.in', 'agarwal', 'nagpur', 'bihar', 'bangistan', 400050),
('kill', 'kill', 'kill@gmail.com', 'kill', 'Mumbai', 'Maharashtra', 'India', 12),
('korta', 'korta', 'korta@gmail.com', 'korta', 'Mumbai', 'Maharashtra', 'India', 123),
('luka', 'luka', 'luka@gmail.com', 'po', 'Mumbai', 'Maharashtra', 'India', 1),
('maaa', 'maaa', 'madhuri.dhodi07@gmail.com', 'aa', 'Mumbai', 'Maharashtra', 'India', 23),
('prakash', 'bapat', 'prakash@gmail.com', 'shahj', 'Mumbai', 'Maharashtra', 'India', 400057),
('pratik', 'velhal', 'pratik@gmail.com', 'proo', 'Mumbai', 'Maharashtra', 'India', 34),
('rohit', 'naik', 'rohit.naik246@gmail.com', 'hi', 'Kolkata', 'Maharashtra', 'India', 34),
('siri', 'siri', 'siri@gmail.com', 'siri', 'Mumbai', 'Maharashtra', 'India', 12),
('sonali', 'sonali', 'sonali.856@gmail.com', 'desai', 'Mumbai', 'Maharashtra', 'India', 5),
('soni', 'soni', 'sonibhambar682013@gmail.com', 'soni', 'Mumbai', 'Maharashtra', 'India', 1234),
('tejal', '12345', 'tejal@gmail.com', 'hi', 'none', 'Maharashtra', 'India', 2),
('twinkle', 'rambhia', 'twinks@yahoo.com', 'asdf', 'Delhi', 'Kerala', 'India', 56),
('vaibhav', 'tendulkar', 'vaibhzzz@gmail.com', 'haf', 'Mumbai', 'Maharashtra', 'India', 3),
('varsha', 'shetty', 'varshashetty96@gmail.com', 'varsha', 'Mumbai', 'Maharashtra', 'India', 400054);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anand`
--
ALTER TABLE `anand`
  ADD PRIMARY KEY (`emailid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
