-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2017 at 09:05 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ace`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `admin_pass`) VALUES
('ace', 'ace'),
('jay', 'jay');

-- --------------------------------------------------------

--
-- Table structure for table `criminal_info`
--

CREATE TABLE `criminal_info` (
  `UID` int(255) NOT NULL,
  `crime` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `criminal_info`
--

INSERT INTO `criminal_info` (`UID`, `crime`, `date`, `place`) VALUES
(31001, 'None', '-', '--'),
(31002, 'none', '-', '-'),
(31003, 'burglary', '16/04/2016', 'mumbai'),
(31005, 'conspiracy', '16/04/2015', 'japan'),
(31006, 'forgery', '12/05/2014', 'pune'),
(31007, 'none', '-', '-'),
(31008, 'none', '-', '-'),
(31009, 'none', '-', '-'),
(31010, 'rape', '18/04/2015', 'delhi'),
(31011, 'none', '--', '--'),
(31012, 'kidnap', '11/09/2015', 'shimla'),
(31013, 'none', '-', '-'),
(31014, 'robbery', '12/03/2016', 'pune'),
(31015, 'none', '-', '-'),
(31016, 'forgery', '12/02/2014', 'mumbai'),
(31017, 'torture', '12/01/2014', 'mumbai'),
(31018, 'kidnap', '7/10/2015', 'delhi'),
(31019, 'burglary', '9/11/2016', 'pune'),
(31020, 'none', '-', '-'),
(31021, 'robbery', '12/12/2016', 'pune'),
(31022, 'none', '-', '-'),
(31023, 'none', '-', '-'),
(31024, 'none', '-', '-'),
(31025, 'murder', '12/05/2016', 'himalaya'),
(31026, 'rape', '12/04/2014', 'tripura'),
(31027, 'none', '-', '-'),
(31028, 'kidnap', '12/06/2014', 'pimpri'),
(31029, 'robbery', '12/07/2014', 'mumbai'),
(31030, 'torture', '12/04/2016', 'pune'),
(31031, 'forgery', '12/09/2014', 'delhi'),
(31032, 'none', '-', '-'),
(31033, 'conspiracy', '12/11/2016', 'bangalore'),
(31034, 'none', '-', '-'),
(31035, 'burglary', '10/12/2014', 'orissa'),
(31036, 'torture', '21/03/2016', 'Mumbai'),
(31037, 'robbery', '21/12/2016', 'pune'),
(31038, 'none', '-', '-'),
(31039, 'kidnap', '12/05/2015', 'delhi'),
(31040, 'None', '--', '-'),
(31041, 'murder', '12/04/2015', 'pune'),
(31042, 'burglary', '12/04/2015', 'mumbai'),
(31043, 'none', '-', '-'),
(31044, 'robbery', '12/04/2015', 'pune'),
(31045, 'none', '-', '-'),
(31046, 'none', '-', '-'),
(31047, 'rape', '12/04/2015', 'thane'),
(31048, 'none', '-', '-'),
(31049, 'robbery', '12/04/2015', 'thane'),
(31050, 'none', '-', '-'),
(31051, 'murder', '21/04/2015', 'thane'),
(31052, 'none', '-', '-'),
(31053, 'conspiracy', '12/04/2015', 'pune'),
(31054, 'robbery', '12/04/2015', 'pune'),
(31055, 'none', '-', '-'),
(31056, 'none', '-', '-'),
(31057, 'torture', '17/08/2015', 'akola'),
(31058, 'rape', '05/08/2016', 'kothrud'),
(31059, 'conspiracy', '12/04/2015', 'pune'),
(31060, 'conspiracy', '12/04/2015', 'pune'),
(31061, 'None', '-', '-'),
(31067, 'murder', '12/04/14', 'pune'),
(31068, 'Murder', '13/06/15', 'Pune'),
(31069, 'conspiracy', '18/08/16', 'mumbai'),
(31070, 'rape', '04/13/34', 'dhule'),
(31071, 'Murder', '01/04/1999', 'Pune'),
(31072, 'rape', '05/01/2016', 'Pune'),
(31073, 'Murder', '03/03/2105', 'Pune'),
(31074, 'dtdrgydg', '03/03/2105', 'gdg');

-- --------------------------------------------------------

--
-- Table structure for table `family_info`
--

CREATE TABLE `family_info` (
  `UID` int(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `siblings` varchar(255) NOT NULL,
  `wife` varchar(255) NOT NULL,
  `child1` varchar(255) NOT NULL,
  `child2` varchar(255) NOT NULL,
  `child3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_info`
--

INSERT INTO `family_info` (`UID`, `mother`, `father`, `siblings`, `wife`, `child1`, `child2`, `child3`) VALUES
(31040, 'leena', 'vijay', '2', '--', '--', '--', '--'),
(31067, 'deepika', 'ashok', '3', 'abhidyna', 'tejas', 'nikhil', ''),
(31068, 'Sarla', 'Rohidas', '2', '-', '-', '-', '-'),
(31069, 'padma', 'ravi', '1', 'Deepika', 'Abhidnya', '-', '-'),
(31070, 'mokshada', 'rajendra', '3', 'monalisa', 'kiran', 'neha', '-'),
(31071, 'siManan', 'omkar', '2', '-', '-', '-', '-'),
(31072, 'smita', 'ajay', '3', 'dimpal', 'Jayesh', '-', '-'),
(31073, 'jaya', 'Payaa', '2', '-', '-', '-', '-'),
(31074, 'gahgf', 'xwsfgiod', '1', '-', '-', 'ws', '-');

-- --------------------------------------------------------

--
-- Table structure for table `financial_info`
--

CREATE TABLE `financial_info` (
  `UID` int(255) NOT NULL,
  `earning_method` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `acc_no` varchar(255) NOT NULL,
  `bank_balance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financial_info`
--

INSERT INTO `financial_info` (`UID`, `earning_method`, `bank_name`, `acc_no`, `bank_balance`) VALUES
(31001, 'private_job', 'sbi', '2001', '120000'),
(31002, 'private_job', 'hdfc', '2002', '80000'),
(31003, 'govt_job', 'icici', '2003', '140000'),
(31004, 'private_job', 'sbi', '2004', '70000'),
(31005, 'private_job', 'boi', '2005', '200000'),
(31006, 'govt_job', 'sbi', '2006', '80000'),
(31007, 'govt_job', 'hdfc', '2007', '50000'),
(31008, 'pension', 'boi', '2008', '80000'),
(31009, 'govt_job', 'hdfc', '2009', '60,000'),
(31010, 'private_job', 'sbi', '2010', '120000'),
(31011, 'govt_job', 'icici', '2011', '300000'),
(31012, 'none', 'boi', '2012', '10000'),
(31013, 'private_job', 'sbi', '2013', '150000'),
(31014, 'govt_job', 'hdfc', '2014', '50000'),
(31015, 'pension', 'icici', '2015', '90000'),
(31016, 'govt_job', 'sbi', '2016', '90000'),
(31017, 'private_job', 'sbi', '2017', '60000'),
(31018, 'none', 'boi', '2018', '80000'),
(31019, 'private_job', 'boi', '2019', '10000'),
(31020, 'govt_job', 'hdfc', '2020', '190000'),
(31021, 'private_job', 'sbi', '2021', '290000'),
(31022, 'govt_job', 'hdfc', '2022', '19000'),
(31023, 'private_job', 'icici', '2023', '19000'),
(31024, 'pension', 'boi', '2024', '20000'),
(31025, 'none', 'sbi', '2025', '50000'),
(31026, 'pension', 'hdfc', '2026', '65000'),
(31027, 'private_job', 'icici', '2027', '70000'),
(31028, 'govt_job', 'boi', '2028', '75000'),
(31029, 'private_job', 'sbi', '2029', '190000'),
(31030, 'govt_job', 'hdfc', '2030', '0'),
(31031, 'none', 'icici', '2031', '100000'),
(31032, 'govt_job', 'boi', '2032', '120000'),
(31033, 'pension', 'sbi', '2033', '12000'),
(31034, 'govt_job', 'icici', '2034', '55000'),
(31035, 'private_job', 'boi', '2035', '155000'),
(31036, 'private_job', 'sbi', '2036', '50000'),
(31037, 'govt_job', 'hdfc', '2037', '255000'),
(31038, 'private_job', 'icici', '2038', '98766'),
(31039, 'none', 'boi', '2039', '5597'),
(31040, 'Student', 'BOM', '1234', '1677981'),
(31041, 'private_job', 'sbi', '2041', '187798'),
(31042, 'govt_job', 'hdfc', '2042', '979789'),
(31043, 'private_job', 'icici', '2043', '75767'),
(31044, 'pension', 'boi', '2044', '09899'),
(31045, 'none', 'sbi', '2045', '124664'),
(31046, 'pension', 'hdfc', '2046', '90997'),
(31047, 'private_job', 'icici', '2047', '098080'),
(31048, 'govt_job', 'boi', '2048', '313232'),
(31049, 'none', 'sbi', '2049', '6546565'),
(31050, 'govt_job', 'hdfc', '2050', '12192'),
(31051, 'private_job', 'icici', '2051', '12657767'),
(31052, 'govt_job', 'boi', '2052', '120000'),
(31053, 'pension', 'sbi', '2053', '52019'),
(31054, 'govt_job', 'icici', '2054', '11000'),
(31055, 'private_job', 'boi', '2055', '655899'),
(31056, 'private_job', 'sbi', '2056', '98858'),
(31057, 'govt_job', 'hdfc', '2057', '1287668'),
(31058, 'private_job', 'icici', '2058', '10000'),
(31059, 'none', 'boi', '2059', '54000'),
(31060, 'none', 'sbi', '2060', '150000'),
(31061, 'Service', 'SBI', '2061', '501237'),
(31067, 'Student', 'icici', '3467', '423537'),
(31068, 'Business', 'icici', '5367', '231772'),
(31069, 'Teacher', 'boi', '8624', '183298'),
(31070, 'FBI agent', 'icici', '2574', '87400'),
(31071, 'Bank', 'icici', '1683', '240000'),
(31072, 'Student', 'BOM', '3857', '50000'),
(31073, 'Student', 'icici', '3468', '98000'),
(31074, 'tracher', 'rgdr', '543657', '456778');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `UID` int(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`UID`, `path`) VALUES
(31001, '31001'),
(31002, '31002'),
(31003, '31003'),
(31004, '31004'),
(31005, '31005'),
(31006, '31006'),
(31007, '31007'),
(31008, '31008'),
(31009, '31009'),
(31010, '31010'),
(31011, '31011'),
(31012, '31012'),
(31013, '31013'),
(31014, '31014'),
(31015, '31015'),
(31016, '31016'),
(31017, '31017'),
(31018, '31018'),
(31019, '31019'),
(31020, '31020'),
(31021, '31021'),
(31022, '31022'),
(31023, '31023'),
(31024, '31024'),
(31025, '31025'),
(31026, '31026'),
(31027, '31027'),
(31028, '31028'),
(31029, '31029'),
(31030, '31030'),
(31031, '31031'),
(31032, '31032'),
(31033, '31033'),
(31034, '31034'),
(31035, '31035'),
(31036, '31036'),
(31037, '31037'),
(31038, '31038'),
(31039, '31039'),
(31040, '31040'),
(31041, '31041'),
(31042, '31042'),
(31043, '31043'),
(31044, '31044'),
(31045, '31045'),
(31046, '31046'),
(31047, '31047'),
(31048, '31048'),
(31049, '31049'),
(31050, '31050'),
(31051, '31051'),
(31052, '31052'),
(31053, '31053'),
(31054, '31054'),
(31055, '31055'),
(31056, '31056'),
(31057, '31057'),
(31058, '31058'),
(31059, '31059'),
(31060, '31060'),
(31067, '31067');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `user_id`, `password`) VALUES
(1, 31011, 'shreyas'),
(2, 31040, 'ankur'),
(3, 31040, 'ankur'),
(4, 31040, 'ankur'),
(5, 31040, 'ankur'),
(6, 31011, 'shreyas'),
(7, 31040, 'ankur'),
(8, 31011, 'shreyas'),
(9, 31040, 'ankur'),
(10, 31040, 'ankur'),
(11, 31040, 'ankur'),
(12, 31011, 'shreyas'),
(13, 31011, 'shreyas'),
(14, 31001, 'rutuja'),
(15, 31001, 'rutuja'),
(16, 31001, 'rutuja'),
(17, 31011, 'shreyas'),
(18, 31003, 'ishwari'),
(19, 31001, 'rutuja'),
(20, 31040, 'ankur'),
(21, 31040, 'ankur'),
(22, 31040, 'ankur'),
(23, 31040, 'ankur'),
(24, 31040, 'ankur'),
(25, 31040, 'ankur'),
(26, 31040, 'ace'),
(27, 31040, 'ace'),
(28, 31036, 'jaydeep'),
(29, 31040, 'ACE'),
(30, 31073, 'akansha');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `UID` int(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`UID`, `email_id`, `password`) VALUES
(31001, 'rutujabardapurkar07@gmail.com', 'rutuja'),
(31002, 'prabatwaljb@gmail.com', 'pranav'),
(31003, 'ishwarimbhade@gmail.com', 'ishwari'),
(31004, 'psbhagurkar96@gmail.com', 'prachi'),
(31005, 'bodkeshalaka@gmail.com', 'shalaka'),
(31006, 'butalamitali@gmail.com', 'mitali'),
(31007, 'omkar2chougale@gmail.com', 'omkar'),
(31008, 'damasevikram@gmail.com', 'vikram'),
(31009, 'deshpandeshubham97@gmail.com', 'shubh;am'),
(31010, 'desaiaditya9665@gmail.com', 'aditya'),
(31011, 'deshmukh.shreyas049@gmail.com', 'shreyas'),
(31012, 'sushant.dekh@gmail.com', 'sushant'),
(31013, 'asmitadhiwar22@gmail.com', 'asmita'),
(31014, 'sherugokhale@gmail.com', 'sharwari'),
(31015, 'dhegde50@gmail.com', 'damodar'),
(31016, 'adil7896@gmail.com', 'adil'),
(31017, 'dhairya191096@gmail.com', 'dhairyasheel'),
(31018, 'jadhav.rohit@gmail.com', 'rohit'),
(31019, 'ajethale@gmail.com', 'archana'),
(31020, 'nikjos987@gmail.com', 'nikhil'),
(31021, 'adiboy96@gmail.com', 'aditya'),
(31022, 'kalelkarsaurabh@gmail.com', 'saurabh'),
(31023, 'kambleshubham99@gmail.com', 'shubham'),
(31024, 'akash.kamerkar@gmail.com', 'akash'),
(31025, 'abhishek251096@gmail.com', 'abhishek'),
(31026, 'ruchikelkar@gmail.com', 'rucha'),
(31027, 'vkodgire@gmail.com', 'vishwanath'),
(31028, 'abhinav181096@gmail.com', 'abhinav'),
(31029, 'swatimaurya704@gmail.com', 'swati'),
(31030, 'atharva291196@gmail.com', 'atharva'),
(31031, 'nalawaderohan94@gmail.com', 'rohan'),
(31032, 'aksnil312@gmail.com', 'akshay'),
(31033, 'mayurnewase111@gmail.com', 'mayur'),
(31034, 'vijupardeshi951@gmail.com', 'vijay'),
(31035, 'hrishipate1996@gmail.com', 'hrishi'),
(31036, 'patiljaydeep131@gmail.com', 'jaydeep'),
(31037, 'rutusatkar96@gmail.com', 'rutuja'),
(31038, 'atharvashastri439@gmail.com', 'atharva'),
(31039, 'asmita.waingankar@gmail.com', 'asmita'),
(31040, 'chankur26@gmail.com', 'ace'),
(31041, 'ghugepradip@gmail.com', 'pradip'),
(31042, 'mayurjain708@gmail.com', 'mayur'),
(31043, 'mauryamanish430@gmail.com', 'manish'),
(31044, 'vishneve15@gmail.com', 'vishesh'),
(31045, 'himanshunirmal99@gmail.com', 'himanshu'),
(31046, 'sayalitalkute75@gmail.com', 'sayali'),
(31047, 'poojajamdade04@gmail.com', 'pooja'),
(31048, 'kkaustubhkhot@gmail.com', 'kaustubh'),
(31049, 'kuluchseema878@gmail.com', 'seema'),
(31050, 'snehalrasal222@gmail.com', 'snehal'),
(31051, 'vshetiya21@gmail.com', 'vaibhavi'),
(31052, 'omkarlachke@gmail.com', 'omkar'),
(31053, 'tarawkar86@gmail.com', 'tanvi'),
(31054, 'aajabajpeyi@gmail.com', 'anaja'),
(31055, 'nikhilbhole5627@gmail.com', 'nikhil'),
(31056, 'kccchinmays@gmail.com', 'chinmay'),
(31057, 'choudhari.roshan@gmail.com', 'roshan'),
(31058, 'aniruddhadorle@gmail.com', 'aniruddha'),
(31059, 'gavhanegaurav@gmail.com', 'gaurav'),
(31060, 'shubh.malu3217@gmail.com', 'shubham'),
(31061, 'saurabhdeshmukh1992@gmail.com', 'saurabh'),
(31067, 'aditya@gmail.com', 'aditya'),
(31068, 'nikhil@gmail.com', 'nikhil'),
(31069, 'tejas@gmail.com', 'tejas'),
(31070, 'chaitanya@gmail.com', 'chaitanya'),
(31071, 'omkar@gmail.com', 'omkar'),
(31072, 'rohini@gmail.com', 'rohini'),
(31073, 'akansha@gmail.com', 'akansha'),
(31074, 'bhjbjh@gmail.com', 'smita');

-- --------------------------------------------------------

--
-- Table structure for table `medical_info`
--

CREATE TABLE `medical_info` (
  `UID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Blood_grp` varchar(255) NOT NULL,
  `Height` varchar(255) NOT NULL,
  `Weight` varchar(255) NOT NULL,
  `Diseases` varchar(255) NOT NULL,
  `Medical_insurance_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_info`
--

INSERT INTO `medical_info` (`UID`, `Name`, `Blood_grp`, `Height`, `Weight`, `Diseases`, `Medical_insurance_no`) VALUES
(31001, 'RUTUJA BARDAPURKAR', 'B+', '5.10', '65', 'None', 'IS89'),
(31002, 'PRANAV BATWAL', 'A+', '5.7', '70', 'BP', 'G100'),
(31003, 'ISHWARI BHADE', 'AB+', '5.4', '40', 'None', 'FE00'),
(31004, 'PRACHI BHAGURKAR', 'O+', '5.6', '68', 'None', 'G10H'),
(31005, 'SHALAKA BODKE', 'B+', '5.6', '46', 'None', 'A100'),
(31006, 'MITALI BUTALA', 'O-', '5.3', '40', 'None', 'J111'),
(31007, 'OMKAR CHOUGALE', 'A+', '5.7', '70', 'DIABETES', 'U254'),
(31008, 'VIKRAM DAMASE', 'AB+', '5.6', '75', 'ASTHMA', 'GD54'),
(31009, 'SHUBHAM DESHPANDE', 'O+', '5.5', '65', 'None', 'None'),
(31010, 'ADITYA DESAI', 'B+', '5.2', '65', 'None', 'HY10'),
(31011, 'SHREYAS DESHMUKH', 'AB+', '5.10', '60', 'None', 'NH10'),
(31012, 'SUSHANT DESHMUKH', 'O+', '5.7', '62', 'None', 'None'),
(31013, 'ASMITA DHIWAR', 'B+', '5.5', '65', 'BP', 'C200'),
(31014, 'SHARVARI GOKHALE', 'A+', '5.6', '73', 'BP', 'RT21'),
(31015, 'DAMODAR HEGDE', 'B+', '6.0', '70', 'None', 'R606'),
(31016, 'ADIL HUSSAIN', 'AB-', '5.7', '71', 'None', 'AH25'),
(31017, 'DHAIRYASHEEL JADHAV', 'B-', '5.5', '69', 'SLEEP DISK', 'V031'),
(31018, 'ROHIT JADHAV', 'A-', '5.10', '60', 'None', 'None'),
(31019, 'ARCHANA JETHALE', 'B-', '5.3', '40', 'ASTHMA', 'G166'),
(31020, 'NIKHIL JOSHI', 'O+', '5.9', '65', 'None', 'Y187'),
(31021, 'ADITYA JOSHI', 'O-', '5.2', '70', 'HEART PROBLEM', 'L105'),
(31022, 'SAURABH KALELKAR', 'B+', '5.6', '60', 'None', 'U555'),
(31023, 'SHUBHAM KAMBLE', 'A-', '5.5', '66', 'None', 'X242'),
(31024, 'AKASH KAMERKAR', 'B+', '5.7', '68', 'THYROID', 'Q404'),
(31025, 'ABHISHEK KAPOOR', 'A+', '6.1', '75', 'None', 'V140'),
(31026, 'RUCHA KELKAR', 'O+', '5.9', '68', 'None', 'None'),
(31027, 'VISHWANATH KODGIRE', 'AB+', '5.8', '62', 'None', 'Z458'),
(31028, 'ABHINAV KUMAR', 'O-', '5.7', '68', 'DIABETES', 'F785'),
(31029, 'SWATI MAURYA', 'A-', '5.5', '67', 'None', 'D857'),
(31030, 'ATHARVA NAIK', 'B-', '5.8', '70', 'BP', 'LK69'),
(31031, 'ROHAN NALAWADE', 'O+', '5.6', '65', 'DIABETES', 'Z580'),
(31032, 'AKSHAY NEEL', 'AB-', '5.7', '70', 'None', 'GF98'),
(31033, 'MAYUR NEWASE', 'B+', '5.6', '68', 'None', 'J578'),
(31034, 'VIJAY PARDESHI', 'A+', '5.11', '72', 'None', 'VG78'),
(31035, 'HRISHIKESH PATE', 'B-', '5.7', '78', 'THYROID', 'E561'),
(31036, 'JAYDEEP PATIL', 'AB+', '5.6', '70', 'BP', 'X999'),
(31037, 'RUTUJA SATKAR', 'A+', '5.5', '65', 'None', 'A654'),
(31038, 'ATHARVA SHASTRI', 'O+', '5.3', '65', 'SLEEP DISK', 'F854'),
(31039, 'ASMITA WAINGANKAR', 'B+', '5.7', '62', 'ASTHMA', 'IH98'),
(31040, 'Ankur Chaudhari', 'AB+', '5-9', '58', 'Migraine', '1234'),
(31041, 'PRADIP GHUGE', 'B+', '5.5', '70', 'ARTHRITIS', 'L687'),
(31042, 'MAYUR JAIN', 'AB+', '5.6', '69', 'BP', 'W897'),
(31043, 'MANISH MAURYA', 'O+', '5.6', '70', 'ARTHRITIS', 'KI87'),
(31044, 'VISHESH NEVE', 'B-', '5.4', '68', 'ASTHMA', 'WE27'),
(31045, 'HIMANSHU NIRMAL', 'O-', '5.6', '72', 'HEART PROBLEM', 'FU11'),
(31046, 'SAYALI TALKUTE', 'AB+', '5.5', '65', 'None', 'SW45'),
(31047, 'POOJA JAMDADE', 'A-', '5.7', '60', 'ARTHRITIS', 'J574'),
(31048, 'KAUSTUBH KHOT', 'B-', '5.7', '70', 'THYROID', 'Q527'),
(31049, 'SEEMA KULUCH', 'AB+', '5.5', '50', 'None', 'DE44'),
(31050, 'SNEHAL RASAL', 'AB-', '5.4', '53', 'THYROID', 'G119'),
(31051, 'VAIBHAVI SHETIYA', 'O+', '5.5', '60', 'None', 'E98D'),
(31052, 'OMKAR LACHKE', 'AB+', '56', '68', 'BP', 'None'),
(31053, 'TANVI ARAWKAR', 'A-', '5.5', '57', 'None', 'YT87'),
(31054, 'ANAJA BAJPEYI', 'B+', '5.6', '59', 'None', 'T978'),
(31055, 'NIKHIL BHOLE', 'A+', '5.6', '68', 'HEART PROBLEM', 'E578'),
(31056, 'CHINMAY CHAVAN', 'B-', '5.6', '66', 'None', 'N897'),
(31057, 'ROSHAN CHOUDHARI', 'O+', '5.5', '65', 'ASTHMA', 'NH21'),
(31058, 'ANIRUDDHA DORLE', 'A+', '5.6', '60', 'SLEEP DISK', 'I899'),
(31059, 'GAURAV GAVHANE', 'O+', '5.7', '58', 'BP', 'E789'),
(31060, 'SHUBHAM MALU', 'A-', '5.6', '59', 'SLEEP DISK', 'WW55'),
(31061, 'Saurabh Deshmukh', 'AB+', '6.00', '78', 'None', 'MI88sdf'),
(31067, 'Aditya Borse', 'A+', '5-7', '64', 'BP', '2345'),
(31068, 'Nikhil Bhamare', 'A+', '5\'7', '72', 'None', '23t1'),
(31069, 'Tejas Patil', 'O-', '5\'5', '62', 'BP', '32fi'),
(31070, 'Chaitanya Shinde', 'AB+', '5-3', '47', 'asthama', 'd53s'),
(31071, 'Omkar Sathey', 'A+', '5-7', '75', 'BP', '3462'),
(31072, 'Rohini Shende', 'AB+', '5-7', '64', 'None', '3574'),
(31073, 'akansha', 'A+', '5-7', '55', 'BP', '3456'),
(31074, 'smita', 'A+', '5-9', '45', 'fgfjg', '212');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `UID` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phn_no` bigint(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `lic_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`UID`, `name`, `email_id`, `password`, `phn_no`, `age`, `gender`, `nationality`, `marital_status`, `lic_no`) VALUES
(31001, 'RUTUJA BARDAPURKAR', 'rutujabardapurkar07@gmail.com', '', 8793089180, '23', 'F', 'NRI', 'M', '5678'),
(31002, 'PRANAV BATWAL', 'prabatwaljb@gmail.com', '', 9028607145, '30', 'M', 'NRI', 'M', '1234'),
(31003, 'ISHWARI BHADE', 'ishwarimbhade@gmail.com', '', 8805464686, '26', 'F', 'NRI', 'M', '1525'),
(31004, 'PRACHI BHAGURKAR', 'psbhagurkar96@gmail.com', '', 7028258313, '28', 'F', 'NRI', 'M', '1888'),
(31005, 'SHALAKA BODKE', 'bodkeshalaka@gmail.com', '', 8888155123, '22', 'F', 'NRI', 'M', '1905'),
(31006, 'MITALI BUTALA', 'butalamitali@gmail.com', '', 9595304433, '24', 'F', 'NRI', 'M', '1285'),
(31007, 'OMKAR	CHOUGALE', 'omkar2chougale@gmail.com', '', 9766995602, '28', 'M', 'NRI', 'M', '1795'),
(31008, 'VIKRAM DAMASE', 'damasevikram@gmail.com', '', 9527915668, '30', 'M', 'NRI', 'M', '1444'),
(31009, 'SHUBHAM DESHPANDE', 'deshpandeshubham97@gmail.com', '', 9552927184, '30', 'M', 'NRI', 'M', '1323'),
(31010, 'ADITYA DESAI', 'desaiaditya9665@gmail.com', '', 966585608, '30', 'M', 'NRI', 'M', '1585'),
(31011, 'SHREYAS DESHMUKH', 'deshmukh.shreyas049@gmail.com', '', 7744006413, '19', 'M', 'NRI', 'M', '1425'),
(31012, 'SUSHANT DESHMUKH', 'sushant.dekh@gmail.com', '', 8956463976, '30', 'M', 'NRI', 'M', '1985'),
(31013, 'ASMITA DHIWAR', 'asmitadhiwar22@gmail.com', '', 9604571410, '26', 'F', 'NRI', 'M', '1747'),
(31014, 'SHARVARI GOKHALE', 'sherugokhale@gmail.com', '', 7588751347, '25', 'F', 'NRI', 'M', '1045'),
(31015, 'DAMODAR HEGDE', 'dhegde50@gmail.com', '', 9028069547, '30', 'M', 'NRI', 'M', '1333'),
(31016, 'ADIL HUSSAIN', 'adil7896@gmail.com', '', 7030530207, '30', 'M', 'NRI', 'M', '1401'),
(31017, 'DHAIRYASHEEL	JADHAV', 'dhairya191096@gmail.com', '', 9158089244, '30', 'M', 'NRI', 'M', '1969'),
(31018, 'ROHIT	JADHAV', 'jadhav.rohit@gmail.com', '', 7798627735, '30', 'M', 'NRI', 'M', '1363'),
(31019, 'ARCHANA JETHALE', 'ajethale@gmail.com', '', 9422631009, '25', 'F', 'NRI', 'M', '1852'),
(31020, 'NIKHIL JOSHI', 'nikjos987@gmail.com', '', 8796009553, '30', 'M', 'NRI', 'M', '1369'),
(31021, 'ADITYA JOSHI', 'adiboy96@gmail.com', '', 8149243963, '20', 'M', 'Indian', 'U', '1021'),
(31022, 'SAURABH\r\nKALELKAR', 'kalelkarsaurabh@gmail.com', '', 8149163533, '25', 'M', 'Indian', 'U', '1022'),
(31023, 'SHUBHAM KAMBLE', 'kambleshubham99@gmail.com', '', 9921698519, '24', 'M', 'Indian', 'U', '1023'),
(31024, 'AKASH KAMERKAR', 'akash.kamerkar@gmail.com', '', 9370463174, '30', 'M', 'Indian', 'M', '1024'),
(31025, 'ABHISHEK KAPOOR', 'abhishek251096@gmail.com', '', 7030400069, '32', 'M', 'Indian', 'U', '1025'),
(31026, 'RUCHA KELKAR', 'ruchikelkar@gmail.com', '', 8805443080, '20', 'F', 'Indian', 'U', '1026'),
(31027, 'VISHWANATH KODGIRE', 'vkodgire@gmail.com', '', 7276810534, '40', 'M', 'NRI', 'U', '1027'),
(31028, 'ABHINAV KUMAR', 'abhinav181096@gmail.com', '', 9139526046, '37', 'M', 'NRI', 'M', '1028'),
(31029, 'SWATI MAURYA', 'swatimaurya704@gmail.com', '', 9823397725, '22', 'F', 'Indian', 'U', '1029'),
(31030, 'ATHARVA NAIK', 'atharva291196@gmail.com', '', 8237371940, '30', 'M', 'Indian', 'M', '1030'),
(31031, 'ROHAN NALAWADE', 'nalawaderohan94@gmail.com', '', 9405745945, '32', 'M', 'NRI', 'U', '1031'),
(31032, 'AKSHAY NEEL', 'aksnil312@gmail.com', '', 8793590236, '29', 'M', 'Indian', 'U', '1032'),
(31033, 'MAYUR NEWASE', 'mayurnewase111@gmail.com', '', 9423514849, '36', 'M', 'Indian', 'M', '1033'),
(31034, 'VIJAY PARDESHI', 'vijupardeshi951@gmail.com', '', 9404040904, '32', 'M', 'NRI', 'M', '1034'),
(31035, 'HRISHIKESH PATE', 'hrishipate1996@gmail.com', '', 8421948086, '37', 'M', 'Indian', 'U', '1035'),
(31036, 'JAYDEEP PATIL', 'patiljaydeep131@gmail.com', '', 9403848605, '45', 'M', 'Indian', 'M', '1036'),
(31037, 'RUTUJA SATKAR', 'rutusatkar96@gmail.com', '', 8605567881, '28', 'F', 'Indian', 'M', '1037'),
(31038, 'ATHARVA SHASTRI', 'atharvashastri439@gmail.com', '', 9767010485, '29', 'M', 'Indian', 'M', '1038'),
(31039, 'ASMITA WAINGANKAR', 'asmita.waingankar@gmail.com', '', 9503330946, '20', 'F', 'Indian', 'U', '1039'),
(31040, 'Ankur Chaudhari', 'chankur26@gmail.com', '', 8149594929, '19', 'M', 'India', 'U', '1234'),
(31041, 'PRADIP GHUGE', 'ghugepradip@gmail.com', '', 8796511266, '26', 'M', 'Indian', 'M', '1041'),
(31042, 'MAYUR JAIN', 'mayurjain708@gmail.com', '', 7276159145, '42', 'M', 'Indian', 'U', '1042'),
(31043, 'MANISH MAURYA', 'mauryamanish430@gmail.com', '', 7507750682, '34', 'M', 'Indian', 'M', '1043'),
(31044, 'VISHESH NEVE', 'vishneve15@gmail.com', '', 7709539466, '30', 'M', 'Indian', 'U', '1044'),
(31045, 'HIMANSHU NIRMAL', 'himanshunirmal99@gmail.com', '', 8482828477, '32', 'M', 'Indian', 'U', '1045'),
(31046, 'SAYALI TALKUTE', 'sayalitalkute75@gmail.com', '', 7721086269, '20', 'F', 'Indian', 'U', '1046'),
(31047, 'POOJA JAMDADE', 'poojajamdade04@gmail.com', '', 8408052979, '40', 'F', 'Indian', 'U', '1047'),
(31048, 'KAUSTUBH KHOT', 'kkaustubhkhot@gmail.com', '', 8793164869, '37', 'M', 'NRI', 'M', '1048'),
(31049, 'SEEMA KULUCH', 'kuluchseema878@gmail.com', '', 9503583084, '22', 'F', 'Indian', 'U', '1049'),
(31050, 'SNEHAL RASAL', 'snehalrasal222@gmail.com', '', 8796125969, '30', 'F', 'Indian', 'M', '1050'),
(31051, 'VAIBHAVI SHETIYA', 'vshetiya21@gmail.com', '', 8087937207, '40', 'F', 'NRI', 'M', '1051'),
(31052, 'OMKAR LACHKE', 'omkarlachke@gmail.com', '', 8087579305, '29', 'M', 'Indian', 'U', '1052'),
(31053, 'TANVI ARAWKAR', 'tarawkar86@gmail.com', '', 9673279135, '36', 'F', 'Indian', 'M', '1053'),
(31054, 'ANAJA BAJPEYI', 'aajabajpeyi@gmail.com', '', 9373051096, '38', 'F', 'NRI', 'M', '1054'),
(31055, 'NIKHIL BHOLE', 'nikhilbhole5627@gmail.com', '', 7387234433, '37', 'M', 'Indian', 'U', '1055'),
(31056, 'CHINMAY CHAVAN', 'kccchinmays@gmail.com', '', 8605635959, '21', 'M', 'Indian', 'M', '1056'),
(31057, 'ROSHAN CHOUDHARI', 'choudhari.roshan@gmail.com', '', 7276611424, '28', 'M', 'Indian', 'M', '1057'),
(31058, 'ANIRUDDHA DORLE', 'aniruddhadorle@gmail.com', '', 7350002074, '29', 'M', 'Indian', 'M', '1058'),
(31059, 'GAURAV GAVHANE', 'gavhanegaurav@gmail.com', '', 9096900996, '27', 'M', 'Indian', 'U', '1059'),
(31060, 'NEETHU NATH', 'neethu1027@gmail.com', '', 7507910778, '20', 'F', 'Indian', 'U', '1060'),
(31061, 'Saurabh Deshmukh', 'saurabhdeshmukh1992@gmail.com', 'saurabh', 8087425510, '22', 'M', 'Indian', 'U', 'LC46G'),
(31067, 'Aditya Borse', 'aditya@gmail.com', '', 9421531211, '20', 'M', 'Indian', 'U', '8756'),
(31068, 'Nikhil Bhamare', 'nikhil@gmail.com', 'nikhil', 8964738643, '26', 'M', 'Inaian', 'U', '2375'),
(31069, 'Tejas Patil', 'tejasa@gmail.com', 'tejas', 8149693926, '32', 'M', 'NRI', 'M', '6452'),
(31070, 'Chaitanya Shinde', 'chaitanya@gmail.com', '', 9527458124, '28', 'M', 'Indian', 'M', '3621'),
(31071, 'Omkar Sathey', 'omkar@gmail.com', '', 8775357532, '74', 'M', 'NRI', 'U', '6536'),
(31072, 'Rohini Shende', 'rohini@gmail.com', 'rohini', 9732475124, '24', 'F', 'Indian', 'U', '3865'),
(31073, 'akansha', 'akansha@gmail.com', '', 9362846274, '43', 'F', 'NRI', 'U', '54342'),
(31074, 'smita', 'bhjbjh@gmail.com', '', 785555555, '30', 'f', 'i', 'm', 'bkj');

-- --------------------------------------------------------

--
-- Table structure for table `social_info`
--

CREATE TABLE `social_info` (
  `UID` int(255) NOT NULL,
  `social1` varchar(255) NOT NULL,
  `social2` varchar(255) NOT NULL,
  `social3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_info`
--

INSERT INTO `social_info` (`UID`, `social1`, `social2`, `social3`) VALUES
(31001, 'NGO', 'NSS', '-'),
(31002, 'blood donation', 'NSS', '-'),
(31003, 'donation', 'NSS', '-'),
(31004, 'blood donation', 'NGO', '-'),
(31005, 'NGO', 'NSS', '-'),
(31006, 'blood donation', 'NGO', '-'),
(31007, 'NGO', 'donation', '-'),
(31008, 'donation', 'NGO', '-'),
(31009, 'NGO', 'donation', '-'),
(31010, 'NGO', 'blood donation', '-'),
(31011, 'blood donation', 'NSS', '-'),
(31012, 'NGO', 'donation', '-'),
(31013, 'NGO', 'NSS', '-'),
(31014, 'NSS', 'donation', '-'),
(31015, 'donation', 'NSS', '-'),
(31016, 'NGO', 'donation', '-'),
(31017, 'NGO', 'donation', '-'),
(31018, 'donation', 'NGO', '-'),
(31019, 'blood donation', 'NGO', '-'),
(31020, 'NGO', 'NSS', '-'),
(31021, 'blood donation', 'NGO', '-'),
(31022, 'donation', 'NSS', '-'),
(31023, 'NGO', 'NSS', '-'),
(31024, 'blood donation', 'NGO', '-'),
(31025, 'blood donation', 'NGO', '-'),
(31026, 'NGO', 'NSS', '-'),
(31027, 'blood donation', 'NGO', '-'),
(31028, 'NGO', 'donation', '-'),
(31029, 'blood donation', 'NGO', '-'),
(31030, 'blood donation', 'NSS', '-'),
(31031, 'NGO', 'blood donation', '-'),
(31032, 'NGO', 'donation', '-'),
(31033, 'donation', 'NGO', '-'),
(31034, 'NGO', 'donation', '-'),
(31035, 'blood donation', 'NGO', '-'),
(31036, 'NGO', 'NSS', '-'),
(31037, 'NGO', 'blood donation', '-'),
(31039, 'NGO', 'donation', '-'),
(31040, 'blood donation', 'NSS', 'NGO'),
(31041, 'NGO', 'blood donation', '-'),
(31042, 'NGO', 'donation', '-'),
(31043, 'blood donation', 'NGO', '-'),
(31044, 'NGO', 'donation', '-'),
(31045, 'donation', 'NSS', '-'),
(31046, 'NSS', 'donation', '-'),
(31047, 'NGO', 'NSS', '-'),
(31048, 'NGO', 'donation', '-'),
(31049, 'blood donation', 'NSS', '-'),
(31050, 'NGO', 'blood donation', '-'),
(31051, 'NGO', 'donation', '-'),
(31052, 'donation', 'NGO', '-'),
(31053, 'NGO', 'donation', '-'),
(31054, 'blood donation', 'NGO', '-'),
(31055, 'NGO', 'donation', '-'),
(31056, 'donation', 'NSS', '-'),
(31057, 'NSS', 'donation', '-'),
(31058, 'NGO', 'NSS', '-'),
(31059, 'NGO', 'donation', '-'),
(31060, 'NGO', 'blood donation', '-'),
(31061, 'NGO', 'donation', '-'),
(31067, 'blood donation', 'NSS', '-'),
(31068, 'NGO', 'NSS', '-'),
(31069, 'Blood Donation', 'NSS', ''),
(31070, 'blood donation', 'NGO', '-'),
(31071, 'NGO', 'NSS', '-'),
(31072, 'NGO', 'NSS', ''),
(31073, 'NGO', 'NSS', '-'),
(31074, 'nss', '', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `criminal_info`
--
ALTER TABLE `criminal_info`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `family_info`
--
ALTER TABLE `family_info`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `financial_info`
--
ALTER TABLE `financial_info`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `medical_info`
--
ALTER TABLE `medical_info`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `social_info`
--
ALTER TABLE `social_info`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `criminal_info`
--
ALTER TABLE `criminal_info`
  MODIFY `UID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31075;
--
-- AUTO_INCREMENT for table `family_info`
--
ALTER TABLE `family_info`
  MODIFY `UID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31075;
--
-- AUTO_INCREMENT for table `financial_info`
--
ALTER TABLE `financial_info`
  MODIFY `UID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31075;
--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `UID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31068;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `UID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31075;
--
-- AUTO_INCREMENT for table `medical_info`
--
ALTER TABLE `medical_info`
  MODIFY `UID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31075;
--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `UID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31075;
--
-- AUTO_INCREMENT for table `social_info`
--
ALTER TABLE `social_info`
  MODIFY `UID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31075;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
