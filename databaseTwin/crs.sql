-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2017 at 08:17 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crs`
--

-- --------------------------------------------------------

--
-- Table structure for table `fir_details`
--

CREATE TABLE IF NOT EXISTS `fir_details` (
  `date` date NOT NULL,
  `time` time NOT NULL,
  `description` varchar(45) NOT NULL,
  `crime_id` int(10) NOT NULL,
  `id_proof` varchar(20) NOT NULL,
  `id_proof_no` int(20) NOT NULL,
  `crimephoto1` varbinary(500) NOT NULL,
  `crimephoto2` varbinary(500) NOT NULL,
  `reg_id` int(10) unsigned NOT NULL,
  `claim_id` int(10) unsigned NOT NULL,
  `victim_id` int(10) unsigned NOT NULL,
  `area_id` int(10) unsigned NOT NULL,
  `dt_time` varchar(10) NOT NULL,
  `status_id` int(5) NOT NULL,
  PRIMARY KEY (`reg_id`),
  UNIQUE KEY `area_id` (`area_id`),
  KEY `FK_fir_details_1` (`area_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fir_details`
--

INSERT INTO `fir_details` (`date`, `time`, `description`, `crime_id`, `id_proof`, `id_proof_no`, `crimephoto1`, `crimephoto2`, `reg_id`, `claim_id`, `victim_id`, `area_id`, `dt_time`, `status_id`) VALUES
('2016-10-07', '02:25:30', 'THEFT IN OUR HOUSE', 3, 'License Car', 2147483647, 'upload/images house1.jpg', 'upload/images house3.jpg', 1, 5, 5, 9, '2014-10-29', 1),
('2016-11-10', '01:44:00', 'kidnep', 1, 'Election Ca', 2147483647, 'upload/vlcsnap-2014-06-09-23h02m43s97.png', 'upload/vlcsnap-2014-06-09-23h05m54s218.png', 10, 12, 12, 3, '2014-11-10', 1),
('2017-04-03', '12:03:46', 'Kidnap In My Society', 4, 'Election Card', 741258, 'upload/crimesolutions_logo1.png', 'upload/header_box.jpg', 16, 18, 18, 18, '2015-10-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fir_forward`
--

CREATE TABLE IF NOT EXISTS `fir_forward` (
  `F_id` int(10) unsigned NOT NULL,
  `username` varchar(45) NOT NULL,
  `status` varchar(15) NOT NULL,
  `description` varchar(45) NOT NULL,
  `dt_time` datetime NOT NULL,
  `frmofficer` varchar(45) NOT NULL,
  PRIMARY KEY (`F_id`),
  KEY `FK_fir_forward_1` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fir_forward`
--

INSERT INTO `fir_forward` (`F_id`, `username`, `status`, `description`, `dt_time`, `frmofficer`) VALUES
(1, 'Gopal', 'Working', ' Complicated case                   ', '2016-10-29 20:29:50', 'Hiren'),
(10, 'Maulik', '', 'Need Help  ', '2016-10-05 21:11:33', 'Chirag');

-- --------------------------------------------------------

--
-- Table structure for table `missing_frwd`
--

CREATE TABLE IF NOT EXISTS `missing_frwd` (
  `m_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `dt_time` datetime NOT NULL,
  `frmofficer` varchar(45) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `missing_frwd`
--

INSERT INTO `missing_frwd` (`m_id`, `username`, `status`, `description`, `dt_time`, `frmofficer`) VALUES
(1, 'Gopal', 'Working', 'Person is missing from surat before 2 months', '2014-11-17 14:45:21', 'Hiren');

-- --------------------------------------------------------

--
-- Table structure for table `mstr_area`
--

CREATE TABLE IF NOT EXISTS `mstr_area` (
  `area_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `area_name` varchar(45) NOT NULL,
  `pincode` int(10) unsigned NOT NULL,
  `city_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`area_id`),
  KEY `FK_mstr_area_1` (`city_id`),
  KEY `area_id` (`area_id`),
  KEY `area_id_2` (`area_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `mstr_area`
--

INSERT INTO `mstr_area` (`area_id`, `area_name`, `pincode`, `city_id`) VALUES
(1, 'Ajwa Road', 390019, 1),
(2, 'Alkapuri', 390007, 1),
(3, 'Makarpura', 390014, 1),
(4, 'Sayajipura', 390019, 1),
(5, 'Fateganj ', 390002, 1),
(6, 'Karelibaug', 390018, 1),
(7, 'Manjalpur', 390011, 1),
(8, 'Begampura', 395003, 2),
(9, 'Katargam', 395004, 2),
(10, 'Athwalines', 395001, 2),
(11, 'Goddod', 395007, 2),
(12, 'Gopipura', 395001, 2),
(13, 'Ahmedabad Civil', 380003, 3),
(14, 'Anand Nagar', 380007, 3),
(15, 'Bapu Nagar', 380024, 3),
(16, 'Ghodasar', 380050, 3),
(17, 'Isanpur', 382443, 3),
(18, 'Naroda', 382325, 3),
(19, 'Adalaj', 382421, 4),
(20, 'Chand Kheda', 382424, 4),
(21, 'Industrial Estate', 382043, 4),
(22, 'Atkot', 360040, 5),
(23, 'Bhadla', 360080, 5),
(24, 'Dharoji', 360410, 5),
(25, 'Jetpur', 360370, 5),
(26, 'Adariyana', 382780, 6),
(27, 'Bhoika', 363426, 6),
(28, 'Dhrangadhra', 363310, 6),
(29, 'Chikhodra', 388320, 7),
(30, 'Anand', 388001, 7),
(31, 'Tarapur', 388180, 7),
(32, 'Vallabh Vidyanagar', 388120, 7);

-- --------------------------------------------------------

--
-- Table structure for table `mstr_city`
--

CREATE TABLE IF NOT EXISTS `mstr_city` (
  `city_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_name` varchar(45) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `mstr_city`
--

INSERT INTO `mstr_city` (`city_id`, `city_name`) VALUES
(1, 'Vadodra'),
(2, 'Surat'),
(3, 'Ahmedabad'),
(4, 'Gandhinagar'),
(5, 'Rajkot'),
(6, 'Surendranagar'),
(7, 'Anand'),
(9, 'Bhavnagar');

-- --------------------------------------------------------

--
-- Table structure for table `mstr_crimetype`
--

CREATE TABLE IF NOT EXISTS `mstr_crimetype` (
  `crime_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `crime_type` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  PRIMARY KEY (`crime_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `mstr_crimetype`
--

INSERT INTO `mstr_crimetype` (`crime_id`, `crime_type`, `description`) VALUES
(1, 'Rape', 'Unwanted Sex'),
(2, 'Murder', 'Very Danger'),
(3, 'Theft', 'You have to be Careful'),
(4, 'Kidnap', 'Be Careful'),
(5, 'Chain Snetching', 'Do not wear gold chain carelessly'),
(6, 'Pickpocketing', 'Be aware about pickpocketers');

-- --------------------------------------------------------

--
-- Table structure for table `mstr_designation`
--

CREATE TABLE IF NOT EXISTS `mstr_designation` (
  `desi_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `desi_name` varchar(45) NOT NULL,
  PRIMARY KEY (`desi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mstr_designation`
--

INSERT INTO `mstr_designation` (`desi_id`, `desi_name`) VALUES
(1, 'PSI'),
(2, 'Head Constable'),
(3, 'Constable'),
(4, 'PI');

-- --------------------------------------------------------

--
-- Table structure for table `mstr_login`
--

CREATE TABLE IF NOT EXISTS `mstr_login` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `type` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `last_logindatetime` datetime NOT NULL,
  `securityquestion` varchar(45) NOT NULL,
  `answer` varchar(45) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_login`
--

INSERT INTO `mstr_login` (`username`, `password`, `type`, `status`, `last_logindatetime`, `securityquestion`, `answer`) VALUES
('Ankita', '123', 'user', '', '2016-10-28 17:38:08', 'my nick name', 'anki'),
('Chirag', 'Chirag', 'Police Officer', '', '2017-04-04 14:52:08', '', ''),
('Gopal', 'Gabani', 'Police Officer', '', '2017-04-04 10:58:26', 'Your Nick Name', 'Gopu'),
('Hiren', 'Hiren', 'Police Officer', '', '2017-04-04 14:51:39', '', ''),
('Kaushik', 'Dhameliya', 'User', '', '2016-10-04 22:53:22', 'Name', 'KD'),
('Maulik', 'Kalathiya', 'Police Officer', '', '2017-04-03 02:14:56', '', ''),
('Mukesh', 'Mukesh', 'User', '', '2016-10-05 12:25:06', '', ''),
('Prince', 'Prince', 'Police Officer', '', '2017-04-04 14:50:25', '', ''),
('Vishal', 'Monpara', 'Admin', 'null', '2017-04-03 08:15:00', 'Your Nick Name', 'Vishu');

-- --------------------------------------------------------

--
-- Table structure for table `mstr_missingcitizens`
--

CREATE TABLE IF NOT EXISTS `mstr_missingcitizens` (
  `missing_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `upload_photo` varchar(45) DEFAULT NULL,
  `first_name` varchar(45) NOT NULL,
  `middle_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `gander` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `city_id` int(10) unsigned NOT NULL,
  `area_id` int(10) unsigned NOT NULL,
  `date_of_missing` date NOT NULL,
  `time_of_missing` time NOT NULL,
  `special_clue` varchar(45) DEFAULT NULL,
  `contactno` int(20) NOT NULL,
  `descript` varchar(60) NOT NULL,
  `status` varchar(80) NOT NULL,
  `username` varchar(45) NOT NULL,
  PRIMARY KEY (`missing_id`),
  KEY `FK_mstr_missingcitizens_1` (`city_id`),
  KEY `FK_mstr_missingcitizens_2` (`area_id`),
  KEY `FK_mstr_missingcitizens_3` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mstr_missingcitizens`
--

INSERT INTO `mstr_missingcitizens` (`missing_id`, `upload_photo`, `first_name`, `middle_name`, `last_name`, `gander`, `address`, `city_id`, `area_id`, `date_of_missing`, `time_of_missing`, `special_clue`, `contactno`, `descript`, `status`, `username`) VALUES
(1, 'upload/Picture 4246.jpg', 'Neha', 'N', 'Thakkar', '', 'A-25, Vipin Garden,\r\nUttam Nagar', 1, 6, '2016-11-04', '02:30:00', 'thin,oval face', 2147483647, 'Missing', '1', 'Gopal'),
(2, 'upload/Missing 8.jpg', 'Divya', 'M', 'Mahetra', 'Female', 'No. 845, Ekta Vihar, Near Hanuman Builders', 1, 3, '2016-11-02', '04:25:45', 'long hair', 2147483647, 'Missing', '0', 'Hiren'),
(3, 'upload/Missing 7.jpg', 'Damini', 'M', 'kutto', 'Female', 'WZ-119, Khyala Village, ', 2, 10, '2016-11-03', '08:12:00', 'Round face, Thin, Pale', 2147483647, 'Missing', '0', 'Chirag'),
(4, 'upload/vlcsnap-2014-06-09-23h05m54s218.png', 'kinjal', 'r', 'patel', 'Female', 'villege khilavad,\r\nta: una,\r\ndist: junagadh', 2, 9, '2014-11-25', '03:02:00', 'fdsklfjasdkf', 2233366, 'fjkjdfvnbxmcvnxcm,vn', '0', 'Gopal');

-- --------------------------------------------------------

--
-- Table structure for table `mstr_officer`
--

CREATE TABLE IF NOT EXISTS `mstr_officer` (
  `officer_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `Jdate` datetime NOT NULL,
  `Ldate` datetime NOT NULL,
  `desi_id` int(10) unsigned NOT NULL,
  `policestation_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`officer_id`),
  KEY `FK_mstr_officer_1` (`policestation_id`),
  KEY `FK_mstr_officer_2` (`desi_id`),
  KEY `FK_mstr_officer_3` (`policestation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mstr_officer`
--

INSERT INTO `mstr_officer` (`officer_id`, `username`, `Jdate`, `Ldate`, `desi_id`, `policestation_id`) VALUES
(1, 'Prince', '2016-10-06 11:25:36', '2017-02-16 02:53:15', 4, 1),
(2, 'Hiren', '2016-10-01 11:23:56', '2017-02-08 00:00:00', 4, 2),
(3, 'Chirag', '2016-10-09 10:56:32', '2017-02-20 09:28:12', 1, 3),
(4, 'Gopal', '2016-09-04 12:19:37', '2017-04-02 03:09:45', 4, 4),
(5, 'Maulik', '2016-10-11 11:11:25', '2017-02-05 09:58:32', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `mstr_policestation`
--

CREATE TABLE IF NOT EXISTS `mstr_policestation` (
  `policestation_id` int(10) NOT NULL AUTO_INCREMENT,
  `area_id` int(10) unsigned NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` int(10) unsigned NOT NULL,
  `Email_id` varchar(255) NOT NULL,
  `contact_person` varchar(45) NOT NULL,
  `starting_date` datetime NOT NULL,
  `policestation_name` varchar(45) NOT NULL,
  `city_id` int(10) unsigned NOT NULL,
  `desi_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`policestation_id`),
  KEY `FK_mstr_policestation_1` (`area_id`),
  KEY `FK_mstr_policestation_2` (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mstr_policestation`
--

INSERT INTO `mstr_policestation` (`policestation_id`, `area_id`, `address`, `contact_no`, `Email_id`, `contact_person`, `starting_date`, `policestation_name`, `city_id`, `desi_id`) VALUES
(1, 6, 'Karelibaug, Near Bhutadi Zapa, Near Raymond Showroom Main Road, Vadodara - 390018', 94283, 'karelibag_ps@yahoo.com', ' Kamlaben Naginbhai', '0000-00-00 00:00:00', 'Karelibag Police Station', 1, 0),
(2, 3, 'Shyamnagar Soc Opp Officer Mess Nr Makarpura Police Station ; Lalbag R Manjalpur ', 4294967295, 'polstn-makar-vad@gujarat.gov.in', 'Shri H. R.Baloch', '0000-00-00 00:00:00', 'Makarpura Police  Station ', 1, 4),
(3, 10, 'Jawaharlal Nehru Rd, Athwa Gate, Police Line, Udhna, Athwa, Surat, Gujarat 395001', 261, 'athwapolice@yahoo.co.in', 'Chandreshbhai', '0000-00-00 00:00:00', 'Athwaline Police Choki', 2, 0),
(4, 9, ' Katargam Main Rd, Opp. C- Complex, Near Ram Temple, Katargam, Surat, Gujarat 395004', 97260, 'katargam_ps@gamil.com', 'Rajeshbhai', '0000-00-00 00:00:00', 'Katargam Police Station', 2, 0),
(5, 18, 'Narodabaug ,near sardar park,naroda', 4294967295, 'naroda@yahoo.in', 'pravinbhai', '0000-00-00 00:00:00', 'Naroda police station', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `mstr_profile`
--

CREATE TABLE IF NOT EXISTS `mstr_profile` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` decimal(10,0) NOT NULL,
  `emailid` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `city_id` int(11) NOT NULL,
  `area_id` int(10) NOT NULL,
  `pincode` int(11) NOT NULL,
  `Dob` date NOT NULL,
  `profile_photo` varbinary(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_mstr_profile_1` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `mstr_profile`
--

INSERT INTO `mstr_profile` (`id`, `first_name`, `middle_name`, `last_name`, `gender`, `address`, `contact_no`, `emailid`, `username`, `city_id`, `area_id`, `pincode`, `Dob`, `profile_photo`) VALUES
(1, 'Vishal', 'Hiteshbhai', 'Monpara', 'Male', '11,Gopinath Row-House, Opp. Hari Om Mill, Ved Road, Surat', '9586826846', 'monpara.vishal1995@gmail.com', 'Vishal', 2, 9, 395004, '1995-10-13', ''),
(7, 'Hiren', 'Kalubhai', 'Gujarati', 'Male', 'b/34,harihar soc,makarpura', '8530954504', 'gujaratihiren148@gmail.com', 'Hiren', 1, 3, 390014, '1996-08-14', ''),
(9, 'Gopal', 'Hasmukhbhai', 'Gabani', 'Male', 'A/404 Silver Stone Hills, Near Dabholi Bridge, Siganpore Gam,Surat', '9824201397', 'gabanigopal2316.gg@gmail.com', 'Gopal', 2, 9, 395004, '1995-08-29', ''),
(10, 'Kaushik', 'K', 'Dhameliya', 'Male', '24-akshardeep soc ved road katargam ,surat', '9601573026', 'kd@gmail.com', 'Kaushik', 1, 3, 390014, '1995-10-08', ''),
(14, 'Maulik', 'Pravinbhai', 'Kalathiya', 'Male', '23-aksar soc , naroda', '9016233525', 'maulik@yahoo.in', 'Maulik', 3, 18, 382325, '1996-03-21', '');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `status_id` int(2) NOT NULL,
  `status_desc` varchar(25) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_desc`) VALUES
(0, 'Forward'),
(1, 'Working'),
(2, 'Complete'),
(3, 'Pending');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fir_forward`
--
ALTER TABLE `fir_forward`
  ADD CONSTRAINT `FK_fir_forward_1` FOREIGN KEY (`username`) REFERENCES `mstr_login` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mstr_area`
--
ALTER TABLE `mstr_area`
  ADD CONSTRAINT `FK_mstr_area_1` FOREIGN KEY (`city_id`) REFERENCES `mstr_city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mstr_missingcitizens`
--
ALTER TABLE `mstr_missingcitizens`
  ADD CONSTRAINT `FK_mstr_missingcitizens_1` FOREIGN KEY (`city_id`) REFERENCES `mstr_city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_mstr_missingcitizens_2` FOREIGN KEY (`area_id`) REFERENCES `mstr_area` (`area_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_mstr_missingcitizens_3` FOREIGN KEY (`username`) REFERENCES `mstr_login` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mstr_officer`
--
ALTER TABLE `mstr_officer`
  ADD CONSTRAINT `FK_mstr_officer_2` FOREIGN KEY (`desi_id`) REFERENCES `mstr_designation` (`desi_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mstr_policestation`
--
ALTER TABLE `mstr_policestation`
  ADD CONSTRAINT `FK_mstr_policestation_` FOREIGN KEY (`area_id`) REFERENCES `mstr_area` (`area_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_mstr_policestation_2` FOREIGN KEY (`city_id`) REFERENCES `mstr_city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mstr_profile`
--
ALTER TABLE `mstr_profile`
  ADD CONSTRAINT `FK_mstr_profile_1` FOREIGN KEY (`username`) REFERENCES `mstr_login` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
