-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2016 at 07:46 AM
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
-- Table structure for table `mindray`
--

CREATE TABLE IF NOT EXISTS `mindray` (
  `name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(60000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mindray`
--

INSERT INTO `mindray` (`name`, `price`, `quantity`, `image`, `description`) VALUES
('DC-8', 1000, 100, 'pictures/dc8.jpg', 'none'),
('DC-8 Exp', 1000, 100, 'pictures/dc8exp.jpg', 'none'),
('DC-70', 1000, 100, 'pictures/dc70.jpg', 'none'),
('DC-7', 1000, 100, 'pictures/dc7.jpg', 'none'),
('mindray', 1000, 100, 'pictures/mindraylogo.jpg', '<h2>About Mindray</h2>\r\n<br> Mindray is one of the leading global providers of medical devices and solutions. Firmly committed to our mission of sharing medical technologies with the world, we are dedicated to innovation in the fields of Patient Monitoring & Life Support, In-Vitro Diagnostics, and Medical Imaging.\r\n<br>\r\n\r\nHeadquartered in Shenzhen, China, and listed on the New York Stock Exchange, Mindray possesses a sound distribution and service network with subsidiaries in 31 countries in North and Latin America, Europe, Africa and Asia-Pacific. While improving the quality of care, we help reducing its cost, making it more accessible to a larger part of humanity.\r\n\r\nSince its foundation in 1991, Mindray''s development has been driven by innovation. Mindray has built up a global R&D network with research centers in Seattle, New Jersey, Miami, Stockholm, Shenzhen, Beijing, Nanjing, Chengdu, Xian and Shanghai.<br>\r\n\r\nToday, Mindrays products and services can be found in healthcare facilities in over 190 countries and regions. Inspired by the needs of our customers, we adopt advanced technologies and transform them into accessible innovation, bringing healthcare within reach. '),
('DC-8 Expm1', 1000, 98, 'pictures/m1main.jpg', '\r\n <h4>An expert you can rely on</h4>\r\n<br>Scanning for technically difficult patients (TDP) becomes even more challenging for physicians, while image quality is critical for confident diagnosis. DC-8 Exp brings together a new set of innovative solutions to enhance the experience of conducting ultrasound exams for patients across all ages and body types. Mindray''s proprietary probe technology and user-defined interface that would enable you to provide an expert diagnosis. \r\n<br>\r\n\r\n           Mindray''s DC-8 Exp, incorporating innovative technologies from advanced ultrasound systems, delivers optimal image quality and a wide range of application capabilities all at an affordable cost. In particular, its unique touch gesture feature is designed to help improve workflow and facilitates ease and confidence of use, enabling you to put patient care first. Automation tools including standardized exam protocols and a number of auto-measurement packages, would help you reduce scan time, and increase everyday efficiency. Mindray understands the reality of tight working spaces, so the DC-60 lightweight system has a small footprint for increased portability and maneuverability. In short, DC-60''s capabilities and efficiency make it a practical choice and a good investment for clinicians.\r\n<br>            \r\n\r\n'),
('m1overviewp1', 1000, 100, 'pictures/m1overview.jpg', '\r\n<h4>Overview</h4>\r\n<br>\r\n<h5>Performance mQuadro</h5><br>\r\nmQuadro, Mindray''s high end ultrasound architecture, empowers DC-8 Exp to offer fast and reliable diagnosis, making it an optimum choice during diagnosis of difficult patients. The name mQuadro signifies the combination of four innovative technica aspects, including high speed hardware module, advanced frontal transmission/reception, powerful parallel processing, and patent intelligent algorithms, which together raise the diagnostic capability into a new level.<br>\r\n\r\n<h5>Transducer technology</h5><br>\r\nNew single crystal technology combined with 3T technology for better penetration<br>\r\n\r\n'),
('m1overviewp2', 1000, 100, 'none', '<h5>iWorks</h5>\r\n<br>\r\nStandardize and simplify the workflow, let you be more focused on the patient and diagnosis<br>\r\n<h5>MedSight</h5>\r\n<br>\r\nInteractive App that could transfer clinical images/cines and reports from DC8 Exp to IOS smart devices via WiFi<br>\r\n<h5>Ergonomics</h5>\r\n<br>\r\n19 high resolution LCD Monitor<br>\r\n10.4 anti-glare touch panel<br>\r\nArticulating arm<br>\r\nConvinient cable hook<br>\r\nGel warmer<br> '),
('DC-8m2', 1000, 100, 'pictures/m2main.jpg', '\r\n <h4>From mind to heart</h4><br>\r\n Mindray''s top-of-the-range ultrasound system, DC-8 integrates the best of technology, quality and ergonomics, providing you with a unique scanning experience. Equipped with revolutionary cardiac technology, DC-8 is a result of some of the best minds at work, providing us with answers close to our hearts. With a crystal clear image quality, comprehensive analysis package and a highly user-friendly interface, the DC-8 is your standalone solution for all cardiac examinations.<br>\r\n<br>            \r\n\r\n'),
('m2overviewp1', 1000, 100, 'pictures/m2overviewp1.jpg', '\r\n<h4>Overview</h4><br>\r\n                       <strong> Performance</strong>\r\n<br>\r\n<strong>3T Transducer Technology</strong><p><br>\r\nMindray''s patent transducer technology to increase image bandwidth and transmission efficiency.<br>\r\n&#8226;  Triple-matching layer design for higher sensitivity, wider bandwidth, and improved S/N.<br>\r\n&#8226; Total-cut design for lower cross-talk noise, better directivity, and improved lateral resolution<br>\r\n&#8226;  Thermal-control design for better acoustic transmission<br></p>\r\n \r\n       <br>            \r\n <p><strong>iClear</strong>\r\n Gain improved image quality based on auto structure detection\r\n&#8226;  Sharper & Continuous Edges<br>\r\n&#8226;  Smooth Uniform Tissues<br>\r\n&#8226;  Cleaner ''no echo areas''<br></p>\r\n\r\n<br>\r\n <p><strong>Echo-enriched Beam Forming</strong><br>\r\nEcho-enriched beam former permits the use of traditionally neglected echo signals of adjacent beams to form one finer and stronger imaging beam, providing better ''out-of-focus'' image resolution and deeper image penetration.\r\n\r\n'),
('m2overviewp2', 1000, 100, 'pictures/m2overviewp2.jpg', '<p><strong>Multi-Beam Formation </strong><br>\r\n Maximum 12 times tasking for one transmitted beam, resulting in excellent time resolution and higher frame rate.</p>\r\n<br>\r\n<p><strong>Ergonomics </strong>\r\n&#8226;  19 inch high-resolution LCD monitor<br>\r\n&#8226;  Articulating arm<br>\r\n&#8226;  10.4 inch color touch screen<br>\r\n&#8226;  User- friendly control panel<br></p>'),
('clinicalimage', 1000, 100, 'pictures/m2clinicalimage.jpg', 'none'),
('P4-2E', 1000, 100, 'pictures/m2P4-2E.jpg', 'none'),
('P7-3E', 1000, 100, 'pictures/m2P7-3E.jpg', 'none'),
('P7-3TE', 1000, 100, 'pictures/m2P7-3TE.jpg', 'none'),
('P10-4E', 1000, 100, 'pictures/m2P10-4E.jpg', 'none'),
('CW2s', 1000, 100, 'pictures/m2CW2s.jpg', 'none'),
('DC-70m3', 1000, 100, 'pictures/m3main.jpg', ' <h4>Quality Exams at Your Fingertips</h4><br>\r\n             <p> Good image quality is prime for a promising ultrasound. DC-70 offers that and a lot more.<br> Its unique touch gestures let you do more than you ever imagined, providing you with extremely easy and fast exams, enabling you to put patient care first.<br> The clarity, as a result of high-end inherent technologies, would help you achieve heart exams with best in class image performance.<br> The quality exams and unprecedentedly optimized user experience have already built up DC-70 as the true workhorse to cope with various challenges of your cardiac practice.</p> '),
('m3overviewp1', 1000, 100, 'pictures/m3overview1.jpg', '   <h4>Overview</h4><br>\r\n                       <strong> Performance</strong><br>\r\n\r\n<strong>3T Transducer technology</strong><p><br>\r\nMindray’s patent transducer technology to increase image bandwidth and transmission efficiency.<br>\r\n&#8226;  Triple-matching layer design for higher sensitivity, wider bandwidth, and improved S/N.\r\n<br>&#8226;  Total-cut design for lower cross-talk noise, better directivity, and improved lateral resolution\r\n<br>&#8226;  Thermal-control design for better acoustic transmission\r\n</p>'),
('m3overviewp2', 1000, 100, 'pictures/m3overview2.jpg', ' <p><strong>iWorks</strong></p><br>\r\nStandardize and simplify the workflow, let you be more focused on the patient and diagnosis\r\n<br>\r\n <p><strong>MedSight</strong></p><br>\r\nInteractive App that could transfer clinical images/cines and reports from DC8 Exp to IOS smart devices via WiFi\r\n<br>\r\n <p><strong>Ergonomics </strong></p>\r\n<br>\r\n<p>19’ high resolution LCD Monitor<br>\r\n10.4’ anti-glare touch panel<br>\r\nArticulating arm<br>\r\nConvinient cable hook<br>\r\nGel warmer<br>\r\n   </p>'),
('m3clinicalimage', 1000, 100, 'pictures/m3clinicalimage.jpg', 'none'),
('m3P7-3E', 1000, 100, 'pictures/m3P7-3E.jpg', 'none'),
('m3P4-2E', 1000, 100, 'pictures/m3P4-2E.jpg', 'none'),
('DC-7m4', 1000, 100, 'pictures/m4main.jpg', ' <p> \r\n                Engineered to deliver value added performance, DC-7 is a high-end system equipped with proven capabilities. <br>With excellent image quality, rapid system response and advanced quantitative analysis, DC-7 can prove to be an excellent solution for varied requirements within the cardiac and vascular field of study.\r\n             </p><br>'),
('m4overviewp1', 1000, 100, 'pictures/m4overviewp1.jpg', '   <h4>Overview</h4>\r\n                       <strong><br> Performance</strong>\r\n<br>\r\n<strong>3T Transducer Technology</strong><p><br>\r\nMindray’s patent transducer technology to increase image bandwidth and transmission efficiency.<br>\r\n&#8226;  Triple-matching layer design for higher sensitivity, wider bandwidth, and improved S/N.<br>\r\n&#8226;  Total-cut design for lower cross-talk noise, better directivity, and improved lateral resolution<br>\r\n&#8226;  Thermal-control design for better acoustic transmission<br></p>'),
('m4overviewp2', 1000, 100, 'pictures/m4overviewp2.jpg', '<p><strong>iClear</strong><br>\r\n Gain improved image quality based on auto structure detection\r\n<br>&#8226;  Sharper & Continuous Edges<br>\r\n&#8226;  Smooth Uniform Tissues<br>\r\n&#8226;  Cleaner ‘no echo areas<br></p>\r\n\r\n\r\n <p><strong>Echo-enriched Beam Forming</strong><br>\r\nEcho-enriched beam former permits the use of traditionally neglected echo signals of adjacent beams to form one finer and stronger imaging beam, providing better ‘out-of-focus’ image resolution and deeper image penetration.\r\n </p><br>\r\n \r\n\r\n\r\n <p><strong>Multi-Beam Formation </strong>\r\n Maximum 12 times tasking for one transmitted beam, resulting in excellent time resolution and higher frame rate.</p>\r\n<br>\r\n<p><strong>Ergonomics </strong><br>\r\n&#8226;  19 inch high-resolution LCD monitor<br>\r\n&#8226;  Articulating arm<br>\r\n&#8226;  10.4 inch color touch screen<br>\r\n&#8226; User- friendly control panel<br></p>'),
('m4P4-2E', 1000, 100, 'pictures/m4P4-2E.jpg\r\n', 'none'),
('m4P7-3E', 1000, 100, 'pictures/m4P7-3E.jpg\r\n', 'none'),
('m4P7-3TE', 1000, 100, 'pictures/m4P7-3TE.jpg', 'none'),
('m4P10-4E', 1000, 100, 'pictures/m4P10-4E.jpg\r\n', 'none'),
('m4CW2s', 1000, 100, 'm4CW2s.jpg\r\n', 'none'),
('m4clinicalimage', 1000, 100, 'pictures/m4clinicalimage.jpg', 'none'),
('m1clinicalimage', 1000, 100, 'pictures/m1clinicalimage.jpg', 'none'),
('m1SP5-1E', 1000, 100, 'pictures/m1SP5-1E.jpg', 'none'),
('m1P7-3E', 1000, 100, 'pictures/m1P7-3E.jpg', 'none'),
('m1P10-4E', 1000, 100, 'pictures/m1P10-4E.jpg', 'none'),
('m1P7-3TE', 1000, 100, 'pictures/m1P7-3TE.jpg', 'none'),
('m1CW2s', 1000, 100, 'pictures/m1CW2s.jpg', 'none');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
