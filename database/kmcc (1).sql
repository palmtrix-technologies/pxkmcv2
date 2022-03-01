-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 01, 2022 at 09:26 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kmcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

DROP TABLE IF EXISTS `area`;
CREATE TABLE IF NOT EXISTS `area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area_name` varchar(150) NOT NULL,
  `emirates_id` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `area_name`, `emirates_id`) VALUES
(1, 'Ajman', 1),
(2, 'Rawdha', 0),
(3, 'UAQ', 0),
(4, 'Dubai', 0),
(5, 'International city', 0),
(6, 'warqa ', 0),
(7, 'Ras al khor', 0),
(8, 'Ind.city', 0),
(9, 'Industrial city', 0),
(10, 'Satwa', 0),
(11, 'Jafiliya', 0),
(12, 'Jumeirah', 0),
(13, 'Karama', 0),
(14, 'Sharjah', 0),
(15, 'Sajja,Sharjah', 0),
(16, 'Ind.area 3', 0),
(17, ' sharjah', 0),
(18, 'Area 2 sharjah', 0),
(19, 'Emirates city', 0),
(20, 'Dubai land', 0),
(21, 'Al Vada', 0),
(22, 'Bur dubai', 0),
(23, 'Jumeirah 1', 0),
(24, 'Jumeirah-4', 0),
(25, 'Al quoz', 0),
(26, 'Al waha ,Al qouz', 0),
(27, 'Al quoz 2', 0),
(28, 'Al quoz 3', 0),
(29, 'Al Barsha', 0),
(30, 'Industrial Area 10', 0),
(31, 'Industrial Area 12', 0),
(32, 'Rolla', 0),
(33, 'Al nahda', 0),
(34, 'Al ghaib', 0),
(35, 'Deira', 0),
(36, 'RAK', 0),
(37, 'Butina,Sharjah', 0),
(38, 'Rolla,sharjah', 0),
(39, 'Khawaneej', 0),
(40, 'Al khail gate', 0),
(41, 'Al Barsha 2', 0),
(42, 'Al quoz 1', 0),
(43, 'Nabba', 0),
(44, 'Industrial Area', 0),
(45, 'Al Khan', 0),
(46, 'Ind.area 6', 0),
(47, 'Ind.area 10', 0),
(48, 'Al bu-daniq', 0),
(49, 'Al ghubaiba', 0),
(50, 'Al yarmook', 0),
(51, 'Butina', 0),
(52, 'Rashidiya', 0),
(53, 'Gulaya', 0),
(54, 'Nad al sheeha', 0),
(55, 'Mankhol', 0),
(56, 'Abu Shagara', 0),
(57, 'Hamriyah', 0),
(58, 'Mirdif', 0),
(59, 'Jabal ali', 0),
(60, 'Jumeira', 0),
(61, 'Al badaa', 0),
(62, 'Oud maitha', 0),
(63, 'Al qouz', 0),
(64, 'Al warson', 0),
(65, 'Halwan', 0),
(66, 'Sajja', 0),
(67, 'Qasimiya', 0),
(68, 'Sharqan', 0),
(69, 'Al majaz', 0),
(70, 'Al mansoura', 0),
(71, 'Majaz', 0),
(72, 'Al nadha,sharjah', 0),
(73, 'New sanaya,UAQ', 0),
(74, 'Umm al quwain', 0),
(75, 'Salma,UAQ', 0),
(76, 'Ramla,UAQ', 0),
(77, 'Dubai', 2),
(78, 'Ajman', 1),
(79, 'AAA', 10);

-- --------------------------------------------------------

--
-- Table structure for table `branch_committee_membership`
--

DROP TABLE IF EXISTS `branch_committee_membership`;
CREATE TABLE IF NOT EXISTS `branch_committee_membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `emirates` int(11) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `zone` int(11) DEFAULT NULL,
  `district` int(11) DEFAULT NULL,
  `mandalam` int(11) DEFAULT NULL,
  `corporation` int(11) DEFAULT NULL,
  `donation` varchar(55) DEFAULT NULL,
  `logged_person` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch_committee_membership`
--

INSERT INTO `branch_committee_membership` (`id`, `member_id`, `emirates`, `area`, `zone`, `district`, `mandalam`, `corporation`, `donation`, `logged_person`) VALUES
(1, 1, 2, 4, 0, 0, 0, 0, '8', 'Sheril Cherian Thomas Vazhackal'),
(2, 1, 2, 4, 1, 1, 1, 2, '10', 'Sheril'),
(3, 5, 3, 72, 0, 0, 0, 0, '10', 'Samad Abdulla'),
(4, 5, 0, 0, 0, 0, 0, 0, '', ''),
(5, 7, 3, 72, 2, 2, 3, 3, '5', 'Khalid Rashid');

-- --------------------------------------------------------

--
-- Table structure for table `c_campaign_master`
--

DROP TABLE IF EXISTS `c_campaign_master`;
CREATE TABLE IF NOT EXISTS `c_campaign_master` (
  `campaign_id` int(11) NOT NULL AUTO_INCREMENT,
  `campaign_code` text NOT NULL,
  `campaign_name` text NOT NULL,
  `Start_Date` datetime NOT NULL,
  `End_Date` datetime NOT NULL,
  `Campaign_description` text NOT NULL,
  `Registration_fee` float NOT NULL,
  `expected_members` int(11) NOT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL,
  PRIMARY KEY (`campaign_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `c_campaign_quota`
--

DROP TABLE IF EXISTS `c_campaign_quota`;
CREATE TABLE IF NOT EXISTS `c_campaign_quota` (
  `campaign_quota_id` int(11) NOT NULL AUTO_INCREMENT,
  `campaign_id` int(11) NOT NULL,
  `municipality_id` int(11) NOT NULL,
  `Quota` int(11) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`campaign_quota_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

DROP TABLE IF EXISTS `district`;
CREATE TABLE IF NOT EXISTS `district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_id` int(11) NOT NULL,
  `district_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `state_id`, `district_name`) VALUES
(1, 1, 'Trivandrum'),
(2, 1, 'Kollam'),
(3, 1, 'Pathanamthitta'),
(4, 1, 'Alappuzha'),
(5, 1, 'Kottayam'),
(6, 1, 'Idukki'),
(7, 1, 'Ernakulam'),
(8, 1, 'Thrissur'),
(9, 1, 'Palakkad'),
(10, 1, 'Malappuram'),
(11, 1, 'Kozhikode'),
(12, 1, 'Wayanad'),
(13, 1, 'Kannur'),
(14, 1, 'Kasargode'),
(15, 2, 'Ariyalur'),
(16, 2, 'Chengalpattu'),
(17, 2, 'Chennai'),
(18, 2, 'Coimbatore'),
(19, 2, 'Cuddalore'),
(20, 2, 'Dharmapuri'),
(21, 2, 'Dindigul'),
(22, 2, 'Erode'),
(23, 2, 'Kallakurichi'),
(24, 2, 'Kanchipuram'),
(25, 2, 'Kanyakumari'),
(26, 2, 'Karur'),
(27, 2, 'Krishnagiri'),
(28, 2, 'Madurai'),
(29, 2, 'Nagapattinam'),
(30, 2, 'Namakkal'),
(31, 2, 'Nilgiris'),
(32, 2, 'Perambalur'),
(33, 2, 'Pudukkottai'),
(34, 2, 'Ramanathapuram'),
(35, 2, 'Ranipet'),
(36, 2, 'Salem'),
(37, 2, 'Sivaganga'),
(38, 2, 'Tenkasi'),
(39, 2, 'Thanjavur'),
(40, 2, 'Theni'),
(41, 2, 'Thoothukudi (Tuticorin)'),
(42, 2, 'Tiruchirappalli'),
(43, 2, 'Tirunelveli'),
(44, 2, 'Tirupathur'),
(45, 2, 'Tiruppur'),
(46, 2, 'Tiruvallur'),
(47, 2, 'Tiruvannamalai'),
(48, 2, 'Tiruvarur'),
(49, 2, 'Vellore'),
(50, 2, 'Viluppuram'),
(51, 2, 'Virudhunagar'),
(57, 1, 'A'),
(58, 4, 'Kurichi'),
(59, 4, 'Kurichi'),
(60, 4, 'Kurichi'),
(61, 8, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `educational_qualification`
--

DROP TABLE IF EXISTS `educational_qualification`;
CREATE TABLE IF NOT EXISTS `educational_qualification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qualification_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educational_qualification`
--

INSERT INTO `educational_qualification` (`id`, `qualification_name`) VALUES
(1, 'ABCD'),
(2, 'MNO');

-- --------------------------------------------------------

--
-- Table structure for table `emirates`
--

DROP TABLE IF EXISTS `emirates`;
CREATE TABLE IF NOT EXISTS `emirates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emirates_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emirates`
--

INSERT INTO `emirates` (`id`, `emirates_name`) VALUES
(1, 'Abu Dhabi'),
(2, 'Dubai'),
(3, 'Sharjah'),
(4, 'Ajman'),
(5, 'Umm Al-Quwain'),
(6, 'Fujairah'),
(7, 'Ras Al Khaimah'),
(8, 'Oman'),
(9, 'Oman'),
(10, 'AA');

-- --------------------------------------------------------

--
-- Table structure for table `kmcc_users`
--

DROP TABLE IF EXISTS `kmcc_users`;
CREATE TABLE IF NOT EXISTS `kmcc_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `password_reset_code` varchar(255) NOT NULL,
  `last_ip` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kmcc_users`
--

INSERT INTO `kmcc_users` (`id`, `username`, `firstname`, `lastname`, `email`, `mobile_no`, `pass`, `password`, `address`, `is_active`, `password_reset_code`, `last_ip`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@admin.com', '0123456789', '123.', '$2y$10$qlAzDhBEqkKwP3OykqA7N.ZQk6T67fxD9RHfdv3zToxa9Mtwu9C/e', 'test address', 1, '', '', '2022-02-21 20:48:18', '2022-02-21 20:48:18');

-- --------------------------------------------------------

--
-- Table structure for table `malappuram_dist_data___list`
--

DROP TABLE IF EXISTS `malappuram_dist_data___list`;
CREATE TABLE IF NOT EXISTS `malappuram_dist_data___list` (
  `COL 1` varchar(3) DEFAULT NULL,
  `COL 2` varchar(18) DEFAULT NULL,
  `COL 3` varchar(15) DEFAULT NULL,
  `COL 4` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `malappuram_dist_data___list`
--

INSERT INTO `malappuram_dist_data___list` (`COL 1`, `COL 2`, `COL 3`, `COL 4`) VALUES
('1', 'Ponnani', 'Municipality', '48'),
('2', 'Marancheri', 'Grama Panchayat', '48'),
('3', 'Alamkode', 'Grama Panchayat', '48'),
('4', 'Nannamukku', 'Grama Panchayat', '48'),
('5', 'Perumbadappu', 'Grama Panchayat', '48'),
('6', 'Veliyankode', 'Grama Panchayat', '48'),
('7', 'Thavanur', 'Grama Panchayat', '47'),
('8', 'Kalady', 'Grama Panchayat', '47'),
('9', 'Vattamkulam', 'Grama Panchayat', '47'),
('10', 'Edappal', 'Grama Panchayat', '47'),
('11', 'Mangalam', 'Grama Panchayat', '47'),
('12', 'Triprangode', 'Grama Panchayat', '47'),
('13', 'Purathur', 'Grama Panchayat', '47'),
('14', 'Kottakkal', 'Municipality', '46'),
('15', 'Valanchery', 'Municipality', '46'),
('16', 'Ponmala', 'Grama Panchayat', '46'),
('17', 'Marakkara', 'Grama Panchayat', '46'),
('18', 'Edayur', 'Grama Panchayat', '46'),
('19', 'Irimbiliyam', 'Grama Panchayat', '46'),
('20', 'Kuttippuram', 'Grama Panchayat', '46'),
('21', 'Tirur', 'Municipality', '45'),
('22', 'Valavannur', 'Grama Panchayat', '45'),
('23', 'Kalpakanchery', 'Grama Panchayat', '45'),
('24', 'Vettom', 'Grama Panchayat', '45'),
('25', 'Thalakkad', 'Grama Panchayat', '45'),
('26', 'Thirunavaya', 'Grama Panchayat', '45'),
('27', 'Athavanad', 'Grama Panchayat', '45'),
('28', 'Tanur', 'Municipality', '44'),
('29', 'Ozhur', 'Grama Panchayat', '44'),
('30', 'Ponmundam', 'Grama Panchayat', '44'),
('31', 'Thanalur', 'Grama Panchayat', '44'),
('32', 'Niramaruthur', 'Grama Panchayat', '44'),
('33', 'Cheriyamundam', 'Grama Panchayat', '44'),
('34', 'Parappanangadi', 'Municipality', '43'),
('35', 'Tirurangadi', 'Municipality', '43'),
('36', 'Nannambra', 'Grama Panchayat', '43'),
('37', 'Thennala', 'Grama Panchayat', '43'),
('38', 'Edarikode', 'Grama Panchayat', '43'),
('39', 'Perumanna-Klari', 'Grama Panchayat', '43'),
('40', 'Vallikunnu', 'Grama Panchayat', '42'),
('41', 'Chelembra', 'Grama Panchayat', '42'),
('42', 'Pallikkal', 'Grama Panchayat', '42'),
('43', 'Peruvallur', 'Grama Panchayat', '42'),
('44', 'Tenhipalam', 'Grama Panchayat', '42'),
('45', 'Moonniyur', 'Grama Panchayat', '42'),
('46', 'Vengara', 'Grama Panchayat', '41'),
('47', 'Abdu Rahiman Nagar', 'Grama Panchayat', '41'),
('48', 'Kannamangalam', 'Grama Panchayat', '41'),
('49', 'Oorakam', 'Grama Panchayat', '41'),
('50', 'Parappur', 'Grama Panchayat', '41'),
('51', 'Othukkungal', 'Grama Panchayat', '41'),
('52', 'Malappuram', 'Municipality', '40'),
('53', 'Pulpatta', 'Grama Panchayat', '40'),
('54', 'Pookkottur', 'Grama Panchayat', '40'),
('55', 'Anakkayam', 'Grama Panchayat', '40'),
('56', 'Morayur', 'Grama Panchayat', '40'),
('57', 'Kodur', 'Grama Panchayat', '40'),
('58', 'Mankada', 'Grama Panchayat', '39'),
('59', 'Koottilangadi', 'Grama Panchayat', '39'),
('60', 'Makkaraparamba', 'Grama Panchayat', '39'),
('61', 'Kuruva', 'Grama Panchayat', '39'),
('62', 'Puzhakkattiri', 'Grama Panchayat', '39'),
('63', 'Angadippuram', 'Grama Panchayat', '39'),
('64', 'Moorkanad', 'Grama Panchayat', '39'),
('65', 'Perinthalmanna', 'Municipality', '38'),
('66', 'Melattur', 'Grama Panchayat', '38'),
('67', 'Vettathur', 'Grama Panchayat', '38'),
('68', 'Thazhekode', 'Grama Panchayat', '38'),
('69', 'Aliparamba', 'Grama Panchayat', '38'),
('70', 'Pulamanthole', 'Grama Panchayat', '38'),
('71', 'Elamkulam', 'Grama Panchayat', '38'),
('72', 'Manjeri', 'Municipality', '37'),
('73', 'Trikkalangode', 'Grama Panchayat', '37'),
('74', 'Pandikkad', 'Grama Panchayat', '37'),
('75', 'Keezhattur', 'Grama Panchayat', '37'),
('76', 'Edappatta', 'Grama Panchayat', '37'),
('77', 'Wandoor', 'Grama Panchayat', '36'),
('78', 'Mampad', 'Grama Panchayat', '36'),
('79', 'Thiruvali', 'Grama Panchayat', '36'),
('80', 'Chokkad', 'Grama Panchayat', '36'),
('81', 'Kalikavu', 'Grama Panchayat', '36'),
('82', 'Karuvarakundu', 'Grama Panchayat', '36'),
('83', 'Thuvvoor', 'Grama Panchayat', '36'),
('84', 'Porur', 'Grama Panchayat', '36'),
('85', 'Nilambur', 'Municipality', '35'),
('86', 'Vazhikadavu', 'Grama Panchayat', '35'),
('87', 'Moothedam', 'Grama Panchayat', '35'),
('88', 'Edakkara', 'Grama Panchayat', '35'),
('89', 'Pothukal', 'Grama Panchayat', '35'),
('90', 'Chungathara', 'Grama Panchayat', '35'),
('91', 'Karulayi', 'Grama Panchayat', '35'),
('92', 'Amarambalam', 'Grama Panchayat', '35'),
('93', 'Areekode', 'Grama Panchayat', '34'),
('94', 'Keezhuparamba', 'Grama Panchayat', '34'),
('95', 'Urangattiri', 'Grama Panchayat', '34'),
('96', 'Edavanna', 'Grama Panchayat', '34'),
('97', 'Kavanoor', 'Grama Panchayat', '34'),
('98', 'Kuzhimanna', 'Grama Panchayat', '34'),
('99', 'Chaliyar', 'Grama Panchayat', '34'),
('100', 'Kondotty', 'Municipality', '33'),
('101', 'Vazhayur', 'Grama Panchayat', '33'),
('102', 'Vazhakkad', 'Grama Panchayat', '33'),
('103', 'Pulikkal', 'Grama Panchayat', '33'),
('104', 'Cherukavu', 'Grama Panchayat', '33'),
('105', 'Cheekode', 'Grama Panchayat', '33'),
('106', 'Kondotty', 'Grama Panchayat', '33');

-- --------------------------------------------------------

--
-- Table structure for table `mandalam`
--

DROP TABLE IF EXISTS `mandalam`;
CREATE TABLE IF NOT EXISTS `mandalam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mandalam_name` varchar(255) NOT NULL,
  `district_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mandalam`
--

INSERT INTO `mandalam` (`id`, `mandalam_name`, `district_id`) VALUES
(1, 'Manjeshwaram', 14),
(2, 'Kasaragod', 14),
(3, 'Udma', 14),
(4, 'Kanhangad', 14),
(5, 'Thrikaripur', 14),
(6, 'Payyanur', 13),
(7, 'Kalliasseri', 13),
(8, 'Taliparamba', 13),
(9, 'Irikkur', 13),
(10, 'Azhikode', 13),
(11, 'Kannur', 13),
(12, 'Dharmadom', 13),
(13, 'Thalassery', 13),
(14, 'Kuthuparamba', 13),
(15, 'Mattanur', 13),
(16, 'Peravoor', 13),
(17, 'Mananthavady', 12),
(18, 'Sulthan Bathery', 12),
(19, 'Kalpetta', 12),
(20, 'Vatakara', 11),
(21, 'Kuttiady', 11),
(22, 'Nadapuram', 11),
(23, 'Koyilandy', 11),
(24, 'Perambra', 11),
(25, 'Balussery', 11),
(26, 'Elathur', 11),
(27, 'Kozhikode North', 11),
(28, 'Kozhikode South', 11),
(29, 'Beypore', 11),
(30, 'Kunnamangalam', 11),
(31, 'Koduvally', 11),
(32, 'Thiruvambady', 11),
(33, 'Kondotty', 10),
(34, 'Eranad', 10),
(35, 'Nilambur', 10),
(36, 'Wandoor', 10),
(37, 'Manjeri', 10),
(38, 'Perinthalmanna', 10),
(39, 'Mankada', 10),
(40, 'Malappuram', 10),
(41, 'Vengara', 10),
(42, 'Vallikkunnu', 10),
(43, 'Tirurangadi', 10),
(44, 'Tanur', 10),
(45, 'Tirur', 10),
(46, 'Kottakkal', 10),
(47, 'Thavanur', 10),
(48, 'Ponnani', 10),
(49, 'Thrithala', 9),
(50, 'Pattambi', 9),
(51, 'Shornur', 9),
(52, 'Ottapalam', 9),
(53, 'Kongad', 9),
(54, 'Mannarkkad', 9),
(55, 'Malampuzha', 9),
(56, 'Palakkad', 9),
(57, 'Tarur', 9),
(58, 'Chittur', 9),
(59, 'Nenmara', 9),
(60, 'Alathur', 9),
(61, 'Chelakkara', 8),
(62, 'Kunnamkulam', 8),
(63, 'Guruvayur', 8),
(64, 'Manalur', 8),
(65, 'Wadakkanchery', 8),
(66, 'Ollur', 8),
(67, 'Thrissur', 8),
(68, 'Nattika', 8),
(69, 'Kaipamangalam', 8),
(70, 'Irinjalakuda', 8),
(71, 'Puthukkad', 8),
(72, 'Chalakudy', 8),
(73, 'Kodungallur', 8),
(74, 'Perumbavoor', 7),
(75, 'Angamaly', 7),
(76, 'Aluva', 7),
(77, 'Kalamassery', 7),
(78, 'Paravur', 7),
(79, 'Vypin', 7),
(80, 'Kochi', 7),
(81, 'Thrippunithura', 7),
(82, 'Ernakulam', 7),
(83, 'Thrikkakara', 7),
(84, 'Kunnathunad', 7),
(85, 'Piravom', 7),
(86, 'Muvattupuzha', 7),
(87, 'Kothamangalam', 7),
(88, 'Devikulam', 6),
(89, 'Udumbanchola', 6),
(90, 'Thodupuzha', 6),
(91, 'Idukki', 6),
(92, 'Peerumade', 6),
(93, 'Pala', 5),
(94, 'Kaduthuruthy', 5),
(95, 'Vaikom', 5),
(96, 'Ettumanoor', 5),
(97, 'Kottayam', 5),
(98, 'Puthuppally', 5),
(99, 'Changanassery', 5),
(100, 'Kanjirappally', 5),
(101, 'Poonjar', 5),
(102, 'Aroor', 4),
(103, 'Cherthala', 4),
(104, 'Alappuzha', 4),
(105, 'Ambalappuzha', 4),
(106, 'Kuttanad', 4),
(107, 'Haripad', 4),
(108, 'Kayamkulam', 4),
(109, 'Mavelikara', 4),
(110, 'Chengannur', 4),
(111, 'Thiruvalla', 3),
(112, 'Ranni', 3),
(113, 'Aranmula', 3),
(114, 'Konni', 3),
(115, 'Adoor', 3),
(116, 'Karunagapally', 2),
(117, 'Chavara', 2),
(118, 'Kunnathur', 2),
(119, 'Kottarakkara', 2),
(120, 'Pathanapuram', 2),
(121, 'Punalur', 2),
(122, 'Chadayamangalam', 2),
(123, 'Kundara', 2),
(124, 'Kollam', 2),
(125, 'Eravipuram', 2),
(126, 'Chathannoor', 2),
(127, 'Varkala', 1),
(128, 'Attingal', 1),
(129, 'Chirayinkeezhu', 1),
(130, 'Nedumangad', 1),
(131, 'Vamanapuram', 1),
(132, 'Kazhakkoottam', 1),
(133, 'Vattiyoorkavu', 1),
(134, 'Thiruvananthapuram', 1),
(135, 'Nemom', 1),
(136, 'Aruvikkara', 1),
(137, 'Parassala', 1),
(138, 'Kattakkada', 1),
(139, 'Kovalam', 1),
(140, 'Neyyattinkara', 1),
(141, 'Udumbanchola', 6),
(142, 'Udumbanchola', 6),
(143, 'AA', 61);

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

DROP TABLE IF EXISTS `membership`;
CREATE TABLE IF NOT EXISTS `membership` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `emirates_id` varchar(255) NOT NULL,
  `date_of_expiry` date NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `picture` varchar(500) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`member_id`, `full_name`, `emirates_id`, `date_of_expiry`, `mobile_number`, `picture`, `created`, `modified`) VALUES
(1, 'Mohamed Fazil Edayadi', '738-1989-4843868-8', '2032-03-12', '971567323900', NULL, '2022-02-26 13:17:25', '2022-02-26 13:17:25'),
(5, 'Ahmed Mohamed Abdulla', '738-1968-6570305-0', '2022-03-12', '971567323927', NULL, '2022-02-26 19:35:16', '2022-02-26 19:35:16'),
(6, 'Linu Anna Joy', '738-1990-123456-0', '2022-03-12', '971567323919', NULL, '2022-02-27 21:21:49', '2022-02-27 21:21:49'),
(7, 'Linu Anna Joy', '738-1990-123456-0', '2022-03-12', '971567323919', NULL, '2022-02-27 21:23:08', '2022-02-27 21:23:08'),
(8, 'Mohamed Fazil Edayadi', '1234566', '0000-00-00', '9746669339', NULL, '2022-02-28 06:04:37', '2022-02-28 06:04:37');

-- --------------------------------------------------------

--
-- Table structure for table `member_basic_details`
--

DROP TABLE IF EXISTS `member_basic_details`;
CREATE TABLE IF NOT EXISTS `member_basic_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `passport_number` varchar(50) DEFAULT NULL,
  `passport_expiry_date` date DEFAULT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `qualification` varchar(200) DEFAULT NULL,
  `blood_group` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_basic_details`
--

INSERT INTO `member_basic_details` (`id`, `member_id`, `passport_number`, `passport_expiry_date`, `email_id`, `profession`, `qualification`, `blood_group`) VALUES
(1, 1, 'NMZ0340123', '2024-10-06', 'mohamedfazil@palmtrix.com', 'Engineer', 'btech', 'AB+'),
(2, 5, 'NMZ123456', '2030-10-01', 'ahamedmohamed@gmail.com', 'Director', 'btech', 'AB+'),
(3, 5, 'NMZ123456', '2030-10-01', 'ahamedmohamed@gmail.com', 'Director', 'btech', 'AB+'),
(4, 7, 'NMZ0423100', '2024-10-06', 'linuannajoy@gmail.com', 'Engineer', 'btech', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `member_indian_details`
--

DROP TABLE IF EXISTS `member_indian_details`;
CREATE TABLE IF NOT EXISTS `member_indian_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `mandalam_id` int(11) NOT NULL,
  `muncipality_id` int(11) NOT NULL,
  `indian_address` text NOT NULL,
  `emergency_contact` varchar(50) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_indian_details`
--

INSERT INTO `member_indian_details` (`id`, `member_id`, `state_id`, `district_id`, `mandalam_id`, `muncipality_id`, `indian_address`, `emergency_contact`, `contact_person`) VALUES
(1, 1, 1, 1, 140, 4, 'Sample address tested here. ', '9946452027', 'Linu'),
(5, 5, 1, 11, 10, 83, 'Testing purpose only', '9847648812', 'Ashraf Mohamed'),
(6, 7, 1, 13, 6, 78, 'Note your address here', '9995892490', 'Ashraf Usman');

-- --------------------------------------------------------

--
-- Table structure for table `member_other_details`
--

DROP TABLE IF EXISTS `member_other_details`;
CREATE TABLE IF NOT EXISTS `member_other_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `is_indian_registered_member` varchar(25) DEFAULT NULL,
  `registered_organization` varchar(55) DEFAULT NULL,
  `is_KMCC_welfare_scheme` varchar(55) DEFAULT NULL,
  `welfare_scheme_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_other_details`
--

INSERT INTO `member_other_details` (`id`, `member_id`, `is_indian_registered_member`, `registered_organization`, `is_KMCC_welfare_scheme`, `welfare_scheme_name`) VALUES
(1, 1, 'no', '1', 'no', '1'),
(2, 5, 'yes', '1', 'yes', '1'),
(3, 7, 'yes', '3', 'yes', '3');

-- --------------------------------------------------------

--
-- Table structure for table `muncipalities`
--

DROP TABLE IF EXISTS `muncipalities`;
CREATE TABLE IF NOT EXISTS `muncipalities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `district_id` int(11) NOT NULL,
  `types` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=219 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `muncipalities`
--

INSERT INTO `muncipalities` (`id`, `name`, `district_id`, `types`) VALUES
(88, 'Ponnani', 48, 'Municipality'),
(89, 'Marancheri', 48, 'Grama Panchayat'),
(90, 'Alamkode', 48, 'Grama Panchayat'),
(91, 'Nannamukku', 48, 'Grama Panchayat'),
(92, 'Perumbadappu', 48, 'Grama Panchayat'),
(93, 'Veliyankode', 48, 'Grama Panchayat'),
(94, 'Thavanur', 47, 'Grama Panchayat'),
(95, 'Kalady', 47, 'Grama Panchayat'),
(96, 'Vattamkulam', 47, 'Grama Panchayat'),
(97, 'Edappal', 47, 'Grama Panchayat'),
(98, 'Mangalam', 47, 'Grama Panchayat'),
(99, 'Triprangode', 47, 'Grama Panchayat'),
(100, 'Purathur', 47, 'Grama Panchayat'),
(101, 'Kottakkal', 46, 'Municipality'),
(102, 'Valanchery', 46, 'Municipality'),
(103, 'Ponmala', 46, 'Grama Panchayat'),
(104, 'Marakkara', 46, 'Grama Panchayat'),
(105, 'Edayur', 46, 'Grama Panchayat'),
(106, 'Irimbiliyam', 46, 'Grama Panchayat'),
(107, 'Kuttippuram', 46, 'Grama Panchayat'),
(108, 'Tirur', 45, 'Municipality'),
(109, 'Valavannur', 45, 'Grama Panchayat'),
(110, 'Kalpakanchery', 45, 'Grama Panchayat'),
(111, 'Vettom', 45, 'Grama Panchayat'),
(112, 'Thalakkad', 45, 'Grama Panchayat'),
(113, 'Thirunavaya', 45, 'Grama Panchayat'),
(114, 'Athavanad', 45, 'Grama Panchayat'),
(115, 'Tanur', 44, 'Municipality'),
(116, 'Ozhur', 44, 'Grama Panchayat'),
(117, 'Ponmundam', 44, 'Grama Panchayat'),
(118, 'Thanalur', 44, 'Grama Panchayat'),
(119, 'Niramaruthur', 44, 'Grama Panchayat'),
(120, 'Cheriyamundam', 44, 'Grama Panchayat'),
(121, 'Parappanangadi', 43, 'Municipality'),
(122, 'Tirurangadi', 43, 'Municipality'),
(123, 'Nannambra', 43, 'Grama Panchayat'),
(124, 'Thennala', 43, 'Grama Panchayat'),
(125, 'Edarikode', 43, 'Grama Panchayat'),
(126, 'Perumanna-Klari', 43, 'Grama Panchayat'),
(127, 'Vallikunnu', 42, 'Grama Panchayat'),
(128, 'Chelembra', 42, 'Grama Panchayat'),
(129, 'Pallikkal', 42, 'Grama Panchayat'),
(130, 'Peruvallur', 42, 'Grama Panchayat'),
(131, 'Tenhipalam', 42, 'Grama Panchayat'),
(132, 'Moonniyur', 42, 'Grama Panchayat'),
(133, 'Vengara', 41, 'Grama Panchayat'),
(134, 'Abdu Rahiman Nagar', 41, 'Grama Panchayat'),
(135, 'Kannamangalam', 41, 'Grama Panchayat'),
(136, 'Oorakam', 41, 'Grama Panchayat'),
(137, 'Parappur', 41, 'Grama Panchayat'),
(138, 'Othukkungal', 41, 'Grama Panchayat'),
(139, 'Malappuram', 40, 'Municipality'),
(140, 'Pulpatta', 40, 'Grama Panchayat'),
(141, 'Pookkottur', 40, 'Grama Panchayat'),
(142, 'Anakkayam', 40, 'Grama Panchayat'),
(143, 'Morayur', 40, 'Grama Panchayat'),
(144, 'Kodur', 40, 'Grama Panchayat'),
(145, 'Mankada', 39, 'Grama Panchayat'),
(146, 'Koottilangadi', 39, 'Grama Panchayat'),
(147, 'Makkaraparamba', 39, 'Grama Panchayat'),
(148, 'Kuruva', 39, 'Grama Panchayat'),
(149, 'Puzhakkattiri', 39, 'Grama Panchayat'),
(150, 'Angadippuram', 39, 'Grama Panchayat'),
(151, 'Moorkanad', 39, 'Grama Panchayat'),
(152, 'Perinthalmanna', 38, 'Municipality'),
(153, 'Melattur', 38, 'Grama Panchayat'),
(154, 'Vettathur', 38, 'Grama Panchayat'),
(155, 'Thazhekode', 38, 'Grama Panchayat'),
(156, 'Aliparamba', 38, 'Grama Panchayat'),
(157, 'Pulamanthole', 38, 'Grama Panchayat'),
(158, 'Elamkulam', 38, 'Grama Panchayat'),
(159, 'Manjeri', 37, 'Municipality'),
(160, 'Trikkalangode', 37, 'Grama Panchayat'),
(161, 'Pandikkad', 37, 'Grama Panchayat'),
(162, 'Keezhattur', 37, 'Grama Panchayat'),
(163, 'Edappatta', 37, 'Grama Panchayat'),
(164, 'Wandoor', 36, 'Grama Panchayat'),
(165, 'Mampad', 36, 'Grama Panchayat'),
(166, 'Thiruvali', 36, 'Grama Panchayat'),
(167, 'Chokkad', 36, 'Grama Panchayat'),
(168, 'Kalikavu', 36, 'Grama Panchayat'),
(169, 'Karuvarakundu', 36, 'Grama Panchayat'),
(170, 'Thuvvoor', 36, 'Grama Panchayat'),
(171, 'Porur', 36, 'Grama Panchayat'),
(172, 'Nilambur', 35, 'Municipality'),
(173, 'Vazhikadavu', 35, 'Grama Panchayat'),
(174, 'Moothedam', 35, 'Grama Panchayat'),
(175, 'Edakkara', 35, 'Grama Panchayat'),
(176, 'Pothukal', 35, 'Grama Panchayat'),
(177, 'Chungathara', 35, 'Grama Panchayat'),
(178, 'Karulayi', 35, 'Grama Panchayat'),
(179, 'Amarambalam', 35, 'Grama Panchayat'),
(180, 'Areekode', 34, 'Grama Panchayat'),
(181, 'Keezhuparamba', 34, 'Grama Panchayat'),
(182, 'Urangattiri', 34, 'Grama Panchayat'),
(183, 'Edavanna', 34, 'Grama Panchayat'),
(184, 'Kavanoor', 34, 'Grama Panchayat'),
(185, 'Kuzhimanna', 34, 'Grama Panchayat'),
(186, 'Chaliyar', 34, 'Grama Panchayat'),
(187, 'Kondotty', 33, 'Municipality'),
(188, 'Vazhayur', 33, 'Grama Panchayat'),
(189, 'Vazhakkad', 33, 'Grama Panchayat'),
(190, 'Pulikkal', 33, 'Grama Panchayat'),
(191, 'Cherukavu', 33, 'Grama Panchayat'),
(192, 'Cheekode', 33, 'Grama Panchayat'),
(193, 'Kondotty', 33, 'Grama Panchayat'),
(215, 'Abc', 1, 'Municipality'),
(216, 'Abc', 1, 'Municipality'),
(217, 'Abc', 1, 'Municipality'),
(218, 'AA', 143, 'Municipality');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

DROP TABLE IF EXISTS `pictures`;
CREATE TABLE IF NOT EXISTS `pictures` (
  `pic_id` int(11) NOT NULL AUTO_INCREMENT,
  `pic_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pic_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `pic_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profession`
--

DROP TABLE IF EXISTS `profession`;
CREATE TABLE IF NOT EXISTS `profession` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profession_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profession`
--

INSERT INTO `profession` (`id`, `profession_name`) VALUES
(1, 'AAA'),
(2, 'Abc'),
(3, 'ASDW'),
(4, 'ASDW');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state_name`) VALUES
(1, 'Kerala'),
(2, 'TamilNadu'),
(3, 'Karnataka'),
(4, 'Goa'),
(8, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_emirates`
--

DROP TABLE IF EXISTS `tb_emirates`;
CREATE TABLE IF NOT EXISTS `tb_emirates` (
  `name` varchar(50) NOT NULL,
  `uae_id` varchar(25) NOT NULL,
  `expiry_date` date NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `front` varchar(100) NOT NULL,
  `back` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emirates_id` varchar(30) NOT NULL,
  `name` varchar(25) NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=254 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `emirates_id`, `name`, `picture`, `created`, `modified`) VALUES
(124, '784', 'Ahmad Rashid Mohammed', 'emirates-id-1024x5765.gif', '2022-02-16 05:44:15', '2022-02-16 05:44:15'),
(125, '784', 'Ahmad Rashid Mohammed', 'emirates-id-1024x5766.gif', '2022-02-16 05:59:11', '2022-02-16 05:59:11'),
(126, '784-1979-1234567-1', 'Ahmad Rashid Mohammed', 'emirates-id-1024x5767.gif', '2022-02-16 06:48:28', '2022-02-16 06:48:29'),
(127, '784-1968-6570305', 'Ahmad Mohamed Abdulla', 'UAE-smart-identity-card.png', '2022-02-16 07:04:29', '2022-02-16 07:04:29'),
(128, '784-1968-6570305', 'Ahmad Mohamed Abdulla', 'UAE-smart-identity-card1.png', '2022-02-16 07:25:36', '2022-02-16 07:25:36'),
(129, '784-1968-6570305', 'Ahmad Mohamed Abdulla', 'UAE-smart-identity-card2.png', '2022-02-16 07:30:16', '2022-02-16 07:30:16'),
(130, '784-1979-1234567-1', 'Ahmad Rashid Mohammed', 'emirates-id-1024x5768.gif', '2022-02-16 09:34:37', '2022-02-16 09:34:37'),
(131, '784-1979-1234567-1', 'Ahmad Rashid Mohammed', 'emirates-id-1024x5769.gif', '2022-02-16 13:16:29', '2022-02-16 13:16:30'),
(132, '784197912345671', 'Ahmad Rashid Mohammed', 'emirates-id-1024x57610.gif', '2022-02-16 13:17:53', '2022-02-16 13:17:53'),
(133, '784-1979-1234567-1', 'Ahmad Rashid Mohammed', 'emirates-id-1024x57611.gif', '2022-02-16 13:30:39', '2022-02-16 13:30:39'),
(134, '784-1979-1234567-1', 'Ahmad Rashid Mohammed', 'emirates-id-1024x57612.gif', '2022-02-16 13:34:06', '2022-02-16 13:34:06'),
(135, '784-1968-6570305', 'Ahmad Mohamed Abdulla', 'UAE-smart-identity-card3.png', '2022-02-17 03:48:57', '2022-02-17 03:48:57'),
(136, '784-1968-6570305', 'Ahmad Moham', 'UAE-smart-identity-card4.png', '2022-02-17 03:49:34', '2022-02-17 03:49:34'),
(137, '784-1968-651234', 'Ahmad Moham', 'UAE-smart-identity-card5.png', '2022-02-17 03:49:50', '2022-02-17 03:49:50'),
(138, '784-1968-651234', 'Ahmad Moham', 'UAE-smart-identity-card6.png', '2022-02-17 03:50:50', '2022-02-17 03:50:50'),
(139, '123-1968-6570305', 'ben', 'emirates-id-1024x57613.gif', '2022-02-17 03:55:27', '2022-02-17 03:55:27'),
(140, '', '', 'emirates-id-1024x57614.gif', '2022-02-17 04:10:12', '2022-02-17 04:10:12'),
(141, '', '', 'emirates-id-1024x57615.gif', '2022-02-17 04:11:35', '2022-02-17 04:11:35'),
(142, '', '', 'UAE-smart-identity-card7.png', '2022-02-17 04:13:04', '2022-02-17 04:13:04'),
(143, '', '', 'emirates-id-1024x57616.gif', '2022-02-17 04:13:53', '2022-02-17 04:13:53'),
(144, '784-1968-6570305', 'Ahmad Mohamed Abdulla', 'UAE-smart-identity-card8.png', '2022-02-17 04:16:53', '2022-02-17 04:16:53'),
(145, '101', 'ben', 'UAE-smart-identity-card9.png', '2022-02-17 04:19:28', '2022-02-17 04:19:28'),
(146, '', '', 'UAE-smart-identity-card10.png', '2022-02-17 04:20:45', '2022-02-17 04:20:45'),
(147, '101', 'ben', 'emirates-id-1024x57617.gif', '2022-02-17 04:25:09', '2022-02-17 04:25:09'),
(148, '784-1968-6570305', 'Ahmad Mohamed Abdulla', 'UAE-smart-identity-card11.png', '2022-02-17 04:27:24', '2022-02-17 04:27:24'),
(149, '784-1968-6570305', 'Ahmad Mohamed Abdulla', 'UAE-smart-identity-card12.png', '2022-02-17 04:29:22', '2022-02-17 04:29:22'),
(150, '345-1968-6570305', 'thasni', 'UAE-smart-identity-card13.png', '2022-02-17 04:29:53', '2022-02-17 04:29:53'),
(151, '784-1968-6570305', 'Ahmad Mohamed Abdulla', 'UAE-smart-identity-card14.png', '2022-02-17 04:37:51', '2022-02-17 04:37:51'),
(152, '784-1979-1234567-1', 'Ahmad Rashid Mohammed', 'emirates-id-1024x57618.gif', '2022-02-17 04:40:17', '2022-02-17 04:40:17'),
(153, '784-1968-6570305', 'Ahmad Rashid Mohammed', 'emirates-id-1024x57619.gif', '2022-02-17 06:27:17', '2022-02-17 06:27:17'),
(154, '101', 'henry', 'emirates-id-1024x57620.gif', '2022-02-17 07:00:58', '2022-02-17 07:00:58'),
(155, '784-1968-6570305', 'Ahmad Mohamed Abdulla', 'UAE-smart-identity-card15.png', '2022-02-17 07:08:42', '2022-02-17 07:08:42'),
(156, '456', 'fgh', 'emirates-id-1024x57621.gif', '2022-02-17 07:17:08', '2022-02-17 07:17:08'),
(157, '784-1968-6570305', 'Ahmad Mohamed Abdulla', 'UAE-smart-identity-card16.png', '2022-02-17 07:18:04', '2022-02-17 07:18:04'),
(158, '784-1968-6570305', 'Ahmad Mohamed Abdulla', 'UAE-smart-identity-card17.png', '2022-02-17 08:44:28', '2022-02-17 08:44:28'),
(159, '784-1968-6570305-0', 'Ahmad Mohamed Abdulla', 'UAE-smart-identity-card18.png', '2022-02-17 08:44:57', '2022-02-17 08:44:57'),
(160, '784-1968-651234', 'ammu', 'aadhar3.jpg', '2022-02-17 09:51:58', '2022-02-17 09:51:58'),
(161, '784-1968-6570305', 'Ahmad Mohamed Abdulla', 'UAE-smart-identity-card19.png', '2022-02-17 10:13:00', '2022-02-17 10:13:00'),
(162, '784-1968-6570305', 'Ahmad Mohamed Abdulla', 'UAE-smart-identity-card20.png', '2022-02-17 10:27:50', '2022-02-17 10:27:50'),
(163, '784-1968-6570305-0', 'Ahmad Mohamed Abdulla', 'UAE-smart-identity-card21.png', '2022-02-17 11:30:48', '2022-02-17 11:30:49'),
(164, '123', 'Ahmad Mohamed Abdulla', 'UAE-smart-identity-card22.png', '2022-02-17 11:31:51', '2022-02-17 11:31:51'),
(165, '784-1968-6570305-0', 'Ahmad Mohamed Abdulla', 'UAE-smart-identity-card23.png', '2022-02-17 11:47:54', '2022-02-17 11:47:54'),
(166, '784-1968-6570305-0', 'Ahmad Mohamed Abdulla', 'UAE-smart-identity-card24.png', '2022-02-17 12:01:50', '2022-02-17 12:01:50'),
(167, '123', 'abu', 'UAE-smart-identity-card25.png', '2022-02-17 12:02:37', '2022-02-17 12:02:37'),
(168, '123', 'Abu', 'UAE-smart-identity-card26.png', '2022-02-17 12:03:51', '2022-02-17 12:03:51'),
(169, 'ABCD-02130-0000-0123', 'Linu Anna Joy', 'UAE-smart-identity-card71.png', '2022-02-18 09:58:10', '2022-02-18 09:58:10'),
(170, 'ABCD-02130-0000-0123', 'Linu Anna Joy', 'aadhar4.jpg', '2022-02-19 09:16:45', '2022-02-19 09:16:45'),
(171, 'ABCD-02130-0000-0123', 'Hanumana Ji', 'aadhar5.jpg', '2022-02-19 09:25:38', '2022-02-19 09:25:38'),
(172, 'ABCD-02130-0000-0123', 'Ahmad Rashid Mohammed', 'emirates-id-1024x57622.gif', '2022-02-19 09:33:31', '2022-02-19 09:33:31'),
(173, 'ABCD-02130-0000-0123', 'Ahmad Rashid', 'emirates-id-1024x57623.gif', '2022-02-19 09:43:27', '2022-02-19 09:43:27'),
(174, 'ABCD-02130-0000-0123', 'Linu Anna Joy', 'emirates-id-1024x57624.gif', '2022-02-19 09:44:20', '2022-02-19 09:44:20'),
(175, 'ABCD-02130-0000-0123', 'Sheril Cherian Thomas', 'emirates-id-1024x57625.gif', '2022-02-19 09:44:55', '2022-02-19 09:44:55'),
(176, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57626.gif', '2022-02-19 09:48:01', '2022-02-19 09:48:01'),
(177, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57627.gif', '2022-02-19 09:48:01', '2022-02-19 09:48:01'),
(178, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57628.gif', '2022-02-19 09:48:02', '2022-02-19 09:48:02'),
(179, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57629.gif', '2022-02-19 09:48:02', '2022-02-19 09:48:02'),
(180, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57630.gif', '2022-02-19 09:48:03', '2022-02-19 09:48:03'),
(181, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57631.gif', '2022-02-19 09:48:05', '2022-02-19 09:48:05'),
(182, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57632.gif', '2022-02-19 09:48:05', '2022-02-19 09:48:05'),
(183, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57633.gif', '2022-02-19 09:48:06', '2022-02-19 09:48:06'),
(184, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57634.gif', '2022-02-19 09:48:07', '2022-02-19 09:48:07'),
(185, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57635.gif', '2022-02-19 09:48:07', '2022-02-19 09:48:07'),
(186, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57636.gif', '2022-02-19 09:48:07', '2022-02-19 09:48:07'),
(187, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57637.gif', '2022-02-19 09:48:08', '2022-02-19 09:48:08'),
(188, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57638.gif', '2022-02-19 09:48:08', '2022-02-19 09:48:08'),
(189, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57639.gif', '2022-02-19 09:48:09', '2022-02-19 09:48:09'),
(190, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57640.gif', '2022-02-19 09:48:09', '2022-02-19 09:48:09'),
(191, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57641.gif', '2022-02-19 09:48:10', '2022-02-19 09:48:10'),
(192, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57642.gif', '2022-02-19 09:48:11', '2022-02-19 09:48:11'),
(193, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57643.gif', '2022-02-19 09:48:13', '2022-02-19 09:48:13'),
(194, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57644.gif', '2022-02-19 09:48:13', '2022-02-19 09:48:13'),
(195, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57645.gif', '2022-02-19 09:48:14', '2022-02-19 09:48:14'),
(196, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57646.gif', '2022-02-19 09:48:14', '2022-02-19 09:48:14'),
(197, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57647.gif', '2022-02-19 09:48:14', '2022-02-19 09:48:14'),
(198, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57648.gif', '2022-02-19 09:48:15', '2022-02-19 09:48:15'),
(199, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57649.gif', '2022-02-19 09:48:15', '2022-02-19 09:48:15'),
(200, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57650.gif', '2022-02-19 09:48:15', '2022-02-19 09:48:15'),
(201, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57651.gif', '2022-02-19 09:48:16', '2022-02-19 09:48:16'),
(202, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57652.gif', '2022-02-19 09:48:16', '2022-02-19 09:48:16'),
(203, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57653.gif', '2022-02-19 09:48:16', '2022-02-19 09:48:16'),
(204, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57654.gif', '2022-02-19 09:48:17', '2022-02-19 09:48:17'),
(205, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57655.gif', '2022-02-19 09:48:17', '2022-02-19 09:48:17'),
(206, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57656.gif', '2022-02-19 09:48:17', '2022-02-19 09:48:17'),
(207, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57657.gif', '2022-02-19 09:48:18', '2022-02-19 09:48:18'),
(208, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57658.gif', '2022-02-19 09:48:18', '2022-02-19 09:48:18'),
(209, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57659.gif', '2022-02-19 09:48:18', '2022-02-19 09:48:18'),
(210, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57660.gif', '2022-02-19 09:48:18', '2022-02-19 09:48:18'),
(211, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57661.gif', '2022-02-19 09:48:19', '2022-02-19 09:48:19'),
(212, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57662.gif', '2022-02-19 09:48:19', '2022-02-19 09:48:19'),
(213, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57663.gif', '2022-02-19 09:48:20', '2022-02-19 09:48:20'),
(214, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57664.gif', '2022-02-19 09:48:20', '2022-02-19 09:48:20'),
(215, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57665.gif', '2022-02-19 09:48:20', '2022-02-19 09:48:20'),
(216, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57666.gif', '2022-02-19 09:48:20', '2022-02-19 09:48:20'),
(217, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57667.gif', '2022-02-19 09:48:20', '2022-02-19 09:48:20'),
(218, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57668.gif', '2022-02-19 09:48:21', '2022-02-19 09:48:21'),
(219, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57669.gif', '2022-02-19 09:48:21', '2022-02-19 09:48:21'),
(220, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57670.gif', '2022-02-19 09:48:21', '2022-02-19 09:48:21'),
(221, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57671.gif', '2022-02-19 09:48:21', '2022-02-19 09:48:21'),
(222, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57672.gif', '2022-02-19 09:48:22', '2022-02-19 09:48:22'),
(223, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57673.gif', '2022-02-19 09:48:22', '2022-02-19 09:48:22'),
(224, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57674.gif', '2022-02-19 09:48:22', '2022-02-19 09:48:22'),
(225, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57675.gif', '2022-02-19 09:48:22', '2022-02-19 09:48:22'),
(226, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57676.gif', '2022-02-19 09:48:23', '2022-02-19 09:48:23'),
(227, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57677.gif', '2022-02-19 09:48:23', '2022-02-19 09:48:23'),
(228, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57678.gif', '2022-02-19 09:48:23', '2022-02-19 09:48:23'),
(229, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57679.gif', '2022-02-19 09:48:23', '2022-02-19 09:48:23'),
(230, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57680.gif', '2022-02-19 09:48:23', '2022-02-19 09:48:23'),
(231, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57681.gif', '2022-02-19 09:48:24', '2022-02-19 09:48:24'),
(232, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57682.gif', '2022-02-19 09:48:24', '2022-02-19 09:48:24'),
(233, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57683.gif', '2022-02-19 09:48:24', '2022-02-19 09:48:24'),
(234, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57684.gif', '2022-02-19 09:48:24', '2022-02-19 09:48:24'),
(235, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57685.gif', '2022-02-19 09:48:24', '2022-02-19 09:48:24'),
(236, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57686.gif', '2022-02-19 09:48:25', '2022-02-19 09:48:25'),
(237, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57687.gif', '2022-02-19 09:48:25', '2022-02-19 09:48:25'),
(238, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57688.gif', '2022-02-19 09:48:25', '2022-02-19 09:48:25'),
(239, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57689.gif', '2022-02-19 09:48:25', '2022-02-19 09:48:25'),
(240, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57690.gif', '2022-02-19 09:48:26', '2022-02-19 09:48:26'),
(241, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57691.gif', '2022-02-19 09:48:26', '2022-02-19 09:48:26'),
(242, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57692.gif', '2022-02-19 09:48:26', '2022-02-19 09:48:26'),
(243, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57693.gif', '2022-02-19 09:48:26', '2022-02-19 09:48:26'),
(244, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57694.gif', '2022-02-19 09:48:26', '2022-02-19 09:48:26'),
(245, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57695.gif', '2022-02-19 09:48:27', '2022-02-19 09:48:27'),
(246, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57696.gif', '2022-02-19 09:48:27', '2022-02-19 09:48:27'),
(247, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57697.gif', '2022-02-19 09:48:27', '2022-02-19 09:48:27'),
(248, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57698.gif', '2022-02-19 09:48:27', '2022-02-19 09:48:27'),
(249, 'ABCD-02130-0000-0123', '', 'emirates-id-1024x57699.gif', '2022-02-19 09:48:27', '2022-02-19 09:48:27'),
(250, 'ABCD-02130-0000-0123', 'Essa Mariam Sheril', 'UAE-smart-identity-card51.png', '2022-02-19 09:55:01', '2022-02-19 09:55:01'),
(251, 'ABCD-02130-0000-0123', 'Ahmed Mohamed Abdulla', 'UAE-smart-identity-card52.png', '2022-02-19 10:01:42', '2022-02-19 10:01:42'),
(252, 'ABCD-02130-0000-0123', 'emy susan sheril', 'UAE-smart-identity-card53.png', '2022-02-19 10:03:34', '2022-02-19 10:03:34'),
(253, 'ABCD-02130-0000-0123', 'Linu Anna Joy', 'emirates-id-1024x57620.gif', '2022-02-23 13:45:42', '2022-02-23 13:45:42');

-- --------------------------------------------------------

--
-- Table structure for table `welfare_schemes`
--

DROP TABLE IF EXISTS `welfare_schemes`;
CREATE TABLE IF NOT EXISTS `welfare_schemes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scheme_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `welfare_schemes`
--

INSERT INTO `welfare_schemes` (`id`, `scheme_name`) VALUES
(1, 'AB WEL'),
(2, 'WS');

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

DROP TABLE IF EXISTS `zone`;
CREATE TABLE IF NOT EXISTS `zone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zone_name` varchar(220) NOT NULL,
  `area_id` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`id`, `zone_name`, `area_id`) VALUES
(1, 'AB', 1),
(2, 'CD', 2),
(3, 'AAAA', 79),
(4, 'AAAA', 79),
(5, 'AAAA', 79);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
