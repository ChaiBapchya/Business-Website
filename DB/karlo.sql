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
-- Table structure for table `karlo`
--

CREATE TABLE IF NOT EXISTS `karlo` (
  `name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(60000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karlo`
--

INSERT INTO `karlo` (`name`, `price`, `quantity`, `image`, `description`) VALUES
('Cysto-urethroscope-sheath', 89, 98, 'pictures/cysto-urethroscope-sheath.jpg', 'With our proficiency in manufacturing Cysto-Urethroscope-Sheath that is used in multiple surgical applications. It meets the well defined industry standards and is offered by us at competitive prices. Further, we provide our sheath at nominal prices and make sure that only quality assured product reaches at customer’s location.\r\nSpecification:\r\nCysto-urethroscope-sheath with obturator size 17 fr.\r\nCysto-urethroscope-sheath with obturator size 19 fr.\r\nCysto-urethroscope-sheath with obturator size 20 fr.\r\nCysto-urethroscope-sheath with obturator size 22 fr.\r\nCysto-urethroscope-sheath with obturator size 25 fr.'),
('Surgical Forceps', 66, 96, 'pictures/forceps.jpg', 'We are amongst the most prominent manufacturers of Flexible Forceps.<br> Available in variety of sizes and dimensions, these are well appreciated by our customers for their durable finish standards and high flexibility of material used.<br> Available at market leading prices, we offer our customers this product in bulk requirements. <br>\r\nThe quality of the product is simply remarkable.<br>There have been no complaints in the product so far. <br>The price of the product is justified by its quality.<br>\r\nThe SLS was established as an educational, nonprofit organization to help ensure the highest standards for the practice of laparoscopic, endoscopic and minimally invasive surgery. With a membership of more than 6,000 surgeons, the society serves surgeons from various specialties and other health professionals interested in advancing their expertise. <br>Each year, the organization recognizes the most innovative products of the 12 months that have multidisciplinary applications in minimally invasive surgery. \r\nTypes available with us are<br> \r\n:&#8226;Scissor<br>\r\n:&#8226;Biopsy<br>\r\n:&#8226;Alligator<br>'),
('Optical Forceps', 12, 98, 'pictures/Optical_forceps.jpg', 'The robust construction of these rigid forceps provides a number of advantages as compared with a conventional flexible miniature forceps. \r\nThe specially designed sharp cutting jaws are close to the telescope, therefore specimens can be taken under accurate visual control.\r\nThese forceps have also been found valuable for the removal of foreign bodies and pieces of tissue. \r\nSufficient irrigation is still provided when a forceps is introduced into the sheath.\r\n\r\n\r\nFeatures:\r\nHigh operational efficiency\r\nApplication specific design\r\nBetter durability\r\n.'),
('Urethral Sheath', 12, 100, 'pictures/cystoscope-sheath.jpg', 'Designed as per prevailing quality standards, we offer our customers Urethral Sheath for the continuous irrigation with standard obturator, 21 fr. \r\nFabricated making use of superior quality raw material, this is highly durable and reliable in its use for various surgical operations. \r\nPrecision engineered by our expert professionals, this is light in weight, hygienic and safe to be used. \r\nOffering the sheath at extremely cost effective prices makes our product highly demanded amongst our customer network. .'),
('Visual Obturators, Cystoscope Adaptor', 123, 99, 'pictures/cystosheaths.jpg', 'Catering to the assorted necessities of our patrons, we are immersed in presenting a world-class compilation of Visual Obturator. <br>Using optimal grade raw material and the contemporary techniques, this product is precisely made up by hard-working personnel as per the industry laid guidelines.<br> As well, the presented product is inspected on predefined limitations of quality so as to present only flaw-free range from our end.\r\nFeatures :<br>\r\n&#8226;Fine finish<br>\r\n&#8226;Durability<br>\r\n&#8226;Precise design<br>'),
('FLEX X2 URETHEROSCOPE', 1234, 100, 'pictures/scope.jpg', 'This Storz Flex-X2 Fiberscope Ureteroscope specifications include :\r\n\r\n<br>&#8226;Deflection UP and DOWN : 270°(Can Achieve an S Curve to perform the contour of the kidney) \r\n<br>&#8226;Tip Diameter : 2.2MM \r\n<br>&#8226;Working Shaft Diameter : 7.5FR \r\n<br>&#8226;Working Channel : 3.6FR \r\n<br>&#8226;Working Length : 67.5CM\r\n<br>&#8226;Condition: New'),
('MINI PERC ( Mini Nephroscope )', 12, 100, 'pictures/UMP-Ultra-Mini-PCNL-LUT.jpg', 'Mini Perc is basically 12fr PCNL which can be connected to 15fr or 18fr external operating sheath.\r\nVery handy instrument for the therapy of stones of the renal pelvis and staghorn calculi: Suitable for children and adults Minimal sheath size at highest stability Optimum handling Titanium and stainless steel construction for durability and low weight Automatic closure and sealing at the working channel '),
('PCNL ( Universal Nephroscope )', 123, 100, 'pictures/Nephro.jpg', 'PCNL Panaview operating telescope by marberger 25 degree with oval instrument channel for 4 mm auxiliary instruments, can also be used for irrigation or aspiration wl 195 mm. \r\n<br>\r\nIt comes in different size : \r\n1) 15Fr<br>\r\n2) 21Fr<br>\r\n3) 24Fr<br>\r\n4) 27Fr<br>'),
('mainbody', 0, 100, 'pictures/Storz_Logo_(long)_PMS_280.jpg', '<h1>An expert you can rely on</h1>\r\n<br>\r\nSince the beginnings in 1945, the KARL STORZ family company has grown into a global manufacturer and distributor of endoscopes, medical instruments, and devices. We are no giant on an international scale but a leader in the things that matter: creativity, flexibility, and expertise. The range of endoscopic instruments for human medicine, veterinary medicine, and industrial endoscopy now includes more than 15,000 products. The most recent KARL STORZ developments are in digital documentation systems and comprehensive operating room concepts. As a system supplier, the company combines its expertise in endoscopy with software solutions to achieve integration in the operating room and to support clinical process and resource management. Here are a few products we deal in');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
