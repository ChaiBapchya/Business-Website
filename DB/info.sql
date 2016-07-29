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
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `name` varchar(50) NOT NULL,
  `description` varchar(60000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`name`, `description`, `image`, `price`, `quantity`) VALUES
('Bi-polar Loop', 'The Bipolar Loop represents an entirely revolutionary treatment for BPH. Resection in saline (NaCl) is mainly used in urology for prostate and bladder resection as well as in gynecology for myoma and endometrium resection as an additional alternative to monopolar resection. The plasma effect of bipolar current allows better cut and coagulation of the tissue with reduced bleeding.- Bipolar In Saline (Plasma) .', 'pictures/bipolar-turp-loop-electrode-500x500.jpg', 100, 88),
('Plasma Button Electrode', 'Plasma Button Electrode is used for bipolar vaporization for treatment of benign prostate hyperplasia (BPH). Compatible with Olympus, Storz and Wolf resectoscopes. Key features Excellent Hemostasis Negligible Blood Loss Safe technique World Class Product ClassificationCompatible with: STORZ 1 Stem Instrument STORZ 2 Stem Instrument Olympus 1 Stem Instrument Wolf 1 Stem Instrument Available with / without cable', 'pictures/plasma-button-500x500.jpg', 100, 94),
('TURP Loop Electrode', 'Compatible with resectoscopes of karl storz, Richard Wolf, Olympus Available in single and double stem\r\nMonopolar', 'pictures/turp-loop-monopolar-500x500.jpg', 100, 100),
('Urethral Stent', 'With our sustained efforts and dedicated management, we have been able to manufacture, export and supply Urethral Stent (Hypospadia). Obtainable in assorted of specifications, these stents are commonly used in hospitals. These stents are manufactured using the finest grade material and present-day equipment in line with the worldwide ethics. We present these stents to our revered clients.  Key Features:\r\nSmooth surface being less traumatic\r\nSoft Polyurethane Material for patient comfort\r\nHighly radiopaque for better visualization\r\nTapered end - for easy insertion\r\nOpen End\r\nClose End\r\nSizes:\r\n6-16 Fr, L: 25 cm', 'pictures/urethral-stent-hyposphedia-stent-500x500.jpg', 200, 188),
('Ureteral Double J Stent', 'Backed by a sound domain understanding and vast industry awareness, we are providing our clients an outstanding array ofUreteral Double J Stent (Closed Distal Tip). These products are single use products and are meticulously inspected on a variety of quality elements. These products are made available in different sizes. Key Features: Highly radioisotope for better visualization\r\nTapered at both the ends - for easy insertion\r\nPigtail shape prevents stent migration\r\nThin wall design for maximum drainage\r\nSmooth surface for easy insertion\r\nAvailable as a set with Guide wire, Clamp and Suture\r\nAvailable in White & Blue colour\r\nSizes:\r\n3-8 Fr, L 6-32 cms', 'pictures/Ureteral-Indwelling-Double-J-Stent.jpg', 199, 298),
('Endopyelotomy Stent', 'Our competency lies in presenting our clients an exceptional quality range of Endopyelotomy Stent that is ideal for use only one time. Our professionals use quality accepted material that is sourced from faithful vendors. These stents are available in pigtail shape for better retention. We give surety our clients that these stents are quality tested on predefined quality parameters. \r\nKey Features:\r\nSegment with no sideports prevents post-op narrowing of the ureteral lumen\r\nPrevents growth of ureteral wall to the stent\r\nHighly radiopaque for better visualization\r\nLarge diameter at incised Utero Pelvic Junction provides optimal healing & drainage.\r\nPigtail shape for better retention\r\nSizes:\r\n4/8-7/16 Fr. L: 16- 28 cm', 'pictures/endopyelotomy-stent-500x500.jpg', 100, 98),
('Bladder Evacuator', 'Key Features<br>\r\n&#8226;	The catheter is back loaded on a two-part Trocar Needle and straightened and then introduced through a skin incision directly, using a Trocar Needle<br>\r\n&#8226;	Highly radiopaque for better visualization<br>\r\n&#8226;	Pigtail tip configuration aids in the retention of the distal tip in the renal pelvis <br>\r\n&#8226;	Looking type has more retention and can kept for a longer duration<br>\r\n&#8226;	Soft and flexible material for patient''s comfort Sizes: <br>\r\n&#8226;	PCN catheter with Needle: 6 - 18 Fr . L 22 - 40 cms<br>', 'pictures/bladder.jpg', 78, 89),
('PCN Catheter', 'Key Features:<br>\r\n&#8226;	Highly radiopaque for better visualization<br>\r\n&#8226;	Pigtail tip configuration for the retention of the distal tip in the renal pelvis<br>\r\n&#8226;Locking type has more retention and can be kept for a longer duration<br>\r\n&#8226;	Soft and flexible material for patients comfort<br>\r\n&#8226;	Available PCN catheter with Lock <br>', 'pictures/catheter.jpg', 90, 90),
('PCN Direct Puncture Set', 'Key Features<br>\r\n&#8226;	The catheter is back loaded on a two-part Trocar Needle and straightened and then introduced through a skin incision directly, using a Trocar Needle<br>\r\n&#8226;	Highly radiopaque for better visualization<br>\r\n&#8226;	Pigtail tip configuration aids in the retention of the distal tip in the renal pelvis <br>\r\n&#8226;	Looking type has more retention and can kept for a longer duration<br>\r\n&#8226;	Soft and flexible material for patient''s comfort Sizes: <br>\r\n&#8226;	PCN catheter with Needle: 6 - 18 Fr . L 22 - 40 cms<br>', 'pictures/directpuncture.jpg', 123, 234),
('Malecot Direct Puncture Set', 'Key Features: <br>\r\n&#8226;		Highly radiopaque for better visualization<br>\r\n&#8226;		The Malecot flower design enhanced drainage and promote catheter retention <br>\r\n&#8226;		Round tip malecot catheters reduces the trauma to the tissues Sizes: <br>\r\n&#8226;		8-20 Fr, L 20- 25 cm Suprapubic <br>\r\n&#8226;		8-20 Fr, L 20- 40 cm Malecot<br>', 'pictures/malecot.jpg', 78, 89),
('PCN Malecot Catheter', '\r\nKey Features:<br>\r\n&#8226;	Highly radiopaque for better visualization<br>\r\n&#8226;	The Malecot flower design enhanced drainage & promote catheter retention<br>\r\n&#8226;	Round tip malecot catheters reduces the trauma to the tissues.<br>\r\nSizes:<br>\r\n&#8226;	8-20 Fr. L 20- 25 cm Suprapubic<br>\r\n&#8226;	8-20 Fr. L 20- 40 cm Malecot\r\n<br>', 'pictures/malecotcatheter.jpg', 89, 78),
('PCN Malecot Set', 'The PCN Catheter set contains:<br>\r\n&#8226;	An initial puncture needle, made of stainless steel,<br>\r\n&#8226;	A PTFE coated guide wire made of stainless steel,<br>\n\n\r\n&#8226;	Fascial dilators, grey coloured PeBax &#174; ,<br>\r\n&#8226;	A pigtail catheter, blue polyurethane,<br>\r\n&#8226;	A Scalpel blade made of stainless steel,<br>\r\n&#8226;	A urine bag connector, made of PVC.\r\n<br>', 'pictures/malecotset.jpg', 678, 78),
('Ureteral Balloon Dilator', 'Key Features:<br>\r\n&#8226;	Balloon dilatation is a non surgical technique that expands the blocked urinary tract<br>\r\n&#8226;	Radiopaque markers are designed on the catheter to be seen under fluoroscopy<br>\r\n&#8226;	Tri fold balloon with low profile thus can be used for maximum no of procedures<br>\r\n&#8226;	Short tapered distal tip allows close approach to ureteral stone\r\n<br>\r\nSizes:<br>\r\n&#8226;	Balloon Width - 5-1omm<br>\r\n&#8226;	Balloon Length - 20, 40, 60 mm<br>\r\n&#8226;	Dilator Length - 75, 110 cms<br>\r\n&#8226;	Shaft Size: 4.8 Fr.\r\n', 'pictures/dilator.jpg', 678, 89),
('Amplatz Renal Dilator Set', 'Key Features:<br>\r\n&#8226;	Radiopaque dilators and sheaths<br>\r\n&#8226;	Short tapered tips<br>\r\n&#8226;	Smooth surface reduces patient''s trauma<br>\r\n&#8226;	Introducer Catheter acts as a guide for dilators 14F - 3oF<br>\r\n&#8226;	Introducer Catheter Sheath allows safety wire placement\r\n', 'pictures/amplatzrenaldilatorset.jpg', 789, 678),
('Fascial Dilator Set', 'Key Feature:<br>\r\n&#8226;	Smooth Surface For Ease Of Introduction<br>\r\n&#8226;	Uniform taper to reduce trauma\r\nSizes:<br>\r\n&#8226;	6-16 Fr, L 22 cm\r\n', 'pictures/urethraldilator.jpg', 123, 2345),
('Ureteral Dilator Set', 'Key Feature:<br>\r\n&#8226;	Smooth Surface For Ease Of Introduction<br>\r\n&#8226;	Uniform taper to reduce trauma\r\n<br>\r\nSizes:<br>\r\n&#8226;	6-16 Fr, L 70 cm\r\n', 'pictures/ureteraldilatorset.jpg', 123, 678),
('Urethral Dilator Set', 'Key Feature:<br>\r\n&#8226;	Smooth Surface For Ease of Introduction<br>\r\n&#8226;	Uniform taper to reduce trauma\r\n<br>\r\nSizes:<br>\r\n&#8226;	8-22 Fr, L 40 cm', 'pictures/urethraldilatorsets.jpg', 222, 12),
('Nottingham One Step Dilator', 'Key Feature:<br>\r\n&#8226;	Smooth Surface For Ease Of Introduction<br>\r\n&#8226;	Uniform taper to reduce trauma<br>\r\n&#8226;	Use with 0.038" guide wire\r\n<br>\r\nSizes:<br>\r\n&#8226;	8/4-16/8 Fr, L 70 cm\r\n', 'pictures/nottinghamonestepdilator.jpg', 1278, 89),
('Metal Dilator', 'Key Feature:<br>\r\n&#8226;	Smooth Surface For Ease Of Introduction<br>\r\n&#8226;	Special traumatic design\r\n<br>\r\nClassification:<br>\r\n&#8226;	Male<br>\r\n&#8226;	Female\r\n<br>\r\nSizes:<br>\r\n&#8226;	6-16 Fr, L 9 cm', 'pictures/metaldilatorset.jpg', 678, 566),
('Screw Dilator', 'Key Feature:<br>\r\n&#8226;	Smooth Surface For Ease Of Introduction<br>\r\n&#8226;	One step dilation Time Saving\r\n<br>\r\nSizes:<br>\r\n&#8226;	6-16 Fr, L 22 cm', 'pictures/screwdilator.jpg', 678, 89),
('Ureteral Catheter', 'Key Features:<br>\r\n&#8226;	Open end tip allows placement over a guidewire for negotiation of a looped or stenotic (tortuous) ureter<br>\r\n&#8226;	The tip configuration occludes orifice and stabilizes catheter by temporarily wedging in orifice\r\n<br>\r\n&#8226;	Angled tip allows the passage of the catheter past a ureteral stone in preparation for ESWL<br>\r\n&#8226;	Smooth surface for easy insertion\r\n<br>\r\nSizes:<br>\r\n&#8226;	3-1OFr, L7ocm\r\n', 'pictures/ureteralcatheter.jpg', 897, 678),
('Dual Lumen Catheter', 'Used to insert guide wire and inject contrast simultaneously. It is used for cystoscopy and urethral pressure profilometry. Dual lumen catheters allows ease of patient catheterization and simultaneous bladder filling and pressure measurement\r\n<br>\r\nKey Features:<br>\r\n&#8226;	Dual lumen provides an independent guide wire lumen and injection lumen<br>\r\n&#8226;	The tapered tip enables the dilation of ureter.<br>\r\n&#8226;	Smooth surfaces for ease of introduction\r\n<br>\r\nSizes: <br>\r\n&#8226;	10 and 12 Fr, L: 5ocm\r\n', 'pictures/duallumenhdcatheter.jpg', 1234, 456),
('Biopsy Gun', 'Key Features : <br>\r\n&#8226;	Disposable Semi automatic Biopsy needle<br>\r\n&#8226;	Light weight and compact: spring loaded biopsy needle easier to maneuver than reusable spring-loaded guns<br>\r\n&#8226;	One hand operation: easily operated with one hand<br>\r\n&#8226;	NO risk of losing specimen: once the cannula is fired the specimen is locked into the window of the stylet assuring an intact core sample for diagnosis.<br>\r\n&#8226;	Sharp beveled point allows quick easy penetration with less trauma to organs and surrounding tissues.\r\n<br>\r\nSizes:<br>\r\n&#8226;	18 G<br>\r\n&#8226;	L 9- 20 cm<br>\r\n&#8226;	Throw legnth: 10 mm, 20 mm\r\n', 'pictures/biopsygun.jpg', 1234, 567),
('Cysto Catheter', 'Set consists of: Foley Catheter, Plastic Trocar, Peel-away Sleeve, Scalpel.\r\nIntended Use: Used for percutaneous bladder drainage.<br>\r\n&#8226;	Suprapubic Drainage Set is ideal when drainage is required in emergency situation<br>\r\n&#8226;	Helpful for sexually active patients or when Urethral catheterisation is not an option', 'pictures/cystocatheter.jpg', 567, 678),
('Chiba Needle	', 'Key Features: <br>\r\n&#8226;	Enables soft penetration and avoids the risk of vessel laceration and reach deep points without any excessive deviation<br>\r\n&#8226;	The special echogenic tip increases the visibility under ultrasound guidance and guarantees the needles point localization\r\n<br>\r\nSizes:<br>\r\n&#8226;	22-23 G\r\n<br>\r\nLength : 15-22 cm.', 'pictures/chibaneedle.jpg', 1234, 46),
('Initial Puncture Needle', 'Key Features:Diamond & Bevel Tip<br>\r\nSizes:18 G, L 15 and 23 cm<br>\r\n&#8226;	Initial Puncture Needle 3 Part:', 'pictures/initialpunctureneedle.jpg', 567, 65),
('Filiform Urethral Dilator', 'Key Feature:<br>\r\n&#8226;	Smooth Surface For Ease Of Introduction<br>\r\n&#8226;	Uniform taper to reduce trauma\r\n<br>\r\nClassification:<br>\r\n&#8226;	With hole<br>\r\n&#8226;	Without Hole\r\n<br>\r\n&#8226;	Curved\r\n<br>\r\nSizes:\r\n<br>\r\n&#8226;		6/6-22/6 Fr, L 10-30 cm\r\n', 'pictures/filiformurethraldilator.jpg', 45, 67),
('PCN Drainage Set', 'PCN Set is a complete set for percutaneous placement of a Pigtail Drainage Catheter in the renal pelvis for Nephrostomy drainage.\r\n', 'pictures/drainageset.jpg', 89, 2),
('Ureteral Double J Stent Open Distal Tip', 'Aimed at prosper development in our domain, we are active in manufacturing, exporting and supplying an outstanding qualityUreteral Double J Stent (Open Distal Tip). Used in hospitals, these products are made available in blue and white colors. To guarantee their faultlessness, these products are well checked on an assortment of parameters of quality by our experts. Besides, clients can buy these high quality products from us within committed time frame.\r\n<br>\r\nKey Features:<br>\r\n&#8226;	Highly radiopaque for better visualization<br>\r\n&#8226;	Tapered at both the ends - for easy insertion<br>\r\n&#8226;	Pigtail shape prevents stent migration<br>\r\n&#8226;	Thin wall design for maximum drainage<br>\r\n&#8226;	Smooth surface for easy insertion<br>\r\n&#8226;	Available as a set with Guide wire, Clamp & Suture<br>\r\n&#8226;	Available in White & Blue colour\r\n<br>\r\nSizes:<br>\r\n&#8226;	3-8Fr, L:O8-32cms\r\n', 'pictures/ureteraldoublejstentopendistaltip.jpg', 34, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
