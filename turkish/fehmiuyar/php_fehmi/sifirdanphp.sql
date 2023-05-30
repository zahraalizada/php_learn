-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 30, 2023 at 08:47 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sifirdanphp`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `InsertData`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertData` (IN `ad` VARCHAR(60), IN `yas` TINYINT(3))  INSERT INTO 
test (Name, Age)
VALUES(ad,yas)$$

DROP PROCEDURE IF EXISTS `MEMBERS`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `MEMBERS` ()  SELECT
*
FROM members
INNER JOIN cities
ON cities.CityID=members.MemberCity$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `CityID` tinyint NOT NULL AUTO_INCREMENT,
  `CityName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CityID`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`CityID`, `CityName`) VALUES
(1, 'ADANA'),
(2, 'ADIYAMAN'),
(3, 'AFYON'),
(4, 'AĞRI'),
(5, 'AMASYA'),
(6, 'ANKARA'),
(7, 'ANTALYA'),
(8, 'ARTVİN'),
(9, 'AYDIN'),
(10, 'BALIKESİR'),
(11, 'BİLECİK'),
(12, 'BİNGÖL'),
(13, 'BİTLİS'),
(14, 'BOLU'),
(15, 'BURDUR'),
(16, 'BURSA'),
(17, 'ÇANAKKALE'),
(18, 'ÇANKIRI'),
(19, 'ÇORUM'),
(20, 'DENİZLİ'),
(21, 'DİYARBAKIR'),
(22, 'EDİRNE'),
(23, 'ELAZIĞ'),
(24, 'ERZİNCAN'),
(25, 'ERZURUM'),
(26, 'ESKİŞEHİR'),
(27, 'GAZİANTEP'),
(28, 'GİRESUN'),
(29, 'GÜMÜŞHANE'),
(30, 'HAKKARİ'),
(31, 'HATAY'),
(32, 'ISPARTA'),
(33, 'İÇEL'),
(34, 'İSTANBUL'),
(35, 'İZMİR'),
(36, 'KARS'),
(37, 'KASTAMONU'),
(38, 'KAYSERİ'),
(39, 'KIRKLARELİ'),
(40, 'KIRŞEHİR'),
(41, 'KOCAELİ'),
(42, 'KONYA'),
(43, 'KÜTAHYA'),
(44, 'MALATYA'),
(45, 'MANİSA'),
(46, 'KAHRAMANMARAŞ'),
(47, 'MARDİN'),
(48, 'MUĞLA'),
(49, 'MUŞ'),
(50, 'NEVŞEHİR'),
(51, 'NİĞDE'),
(52, 'ORDU'),
(53, 'RİZE'),
(54, 'SAKARYA'),
(55, 'SAMSUN'),
(56, 'SİİRT'),
(57, 'SİNOP'),
(58, 'SİVAS'),
(59, 'TEKİRDAĞ'),
(60, 'TOKAT'),
(61, 'TRABZON'),
(62, 'TUNCELİ'),
(63, 'ŞANLIURFA'),
(64, 'UŞAK'),
(65, 'VAN'),
(66, 'YOZGAT'),
(67, 'ZONGULDAK'),
(68, 'AKSARAY'),
(69, 'BAYBURT'),
(70, 'KARAMAN'),
(71, 'KIRIKKALE'),
(72, 'BATMAN'),
(73, 'ŞIRNAK'),
(74, 'BARTIN'),
(75, 'ARDAHAN'),
(76, 'IĞDIR'),
(77, 'YALOVA'),
(78, 'KARABÜK'),
(79, 'KİLİS'),
(80, 'OSMANİYE'),
(81, 'DÜZCE');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `CommentID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `MemberID` int UNSIGNED NOT NULL,
  `ProductID` int UNSIGNED NOT NULL,
  `CommentMessage` varchar(255) NOT NULL,
  PRIMARY KEY (`CommentID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`CommentID`, `MemberID`, `ProductID`, `CommentMessage`) VALUES
(1, 1, 1, 'Güzel bir ürün beğendim'),
(2, 3, 2, 'Kargo hızlıydı teşekkürler'),
(3, 2, 3, 'Ürün hatalı geldi. Geri gönderdim'),
(4, 2, 4, 'İstediğim ürün dışında bir ürün gönderilmiş'),
(5, 8, 5, 'Kargo 2 günde elime ulaştı teşekkürler'),
(6, 11, 6, 'Ürün resimde gösterildiği gibi değil'),
(7, 11, 7, 'Ürün göründüğünden de güzel çok memnun kaldım'),
(8, 5, 8, 'Ürün beklediğim gibiydi teşekkürler'),
(9, 3, 9, 'Ürün fiyatına göre güzel'),
(10, 3, 10, 'Bu ürünü herkese tavsiye ederim'),
(11, 1, 1, 'Bu ürün harika');

-- --------------------------------------------------------

--
-- Table structure for table `il`
--

DROP TABLE IF EXISTS `il`;
CREATE TABLE IF NOT EXISTS `il` (
  `plaka_no` int NOT NULL,
  `il_adi` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `il`
--

INSERT INTO `il` (`plaka_no`, `il_adi`) VALUES
(26, 'Eskishehir'),
(34, 'Istanbul');

-- --------------------------------------------------------

--
-- Table structure for table `ilce`
--

DROP TABLE IF EXISTS `ilce`;
CREATE TABLE IF NOT EXISTS `ilce` (
  `ilce_adi` varchar(255) NOT NULL,
  `il_plaka` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `ilce`
--

INSERT INTO `ilce` (`ilce_adi`, `il_plaka`) VALUES
('Tepebasi', 26),
('Odunpazari', 26),
('Kumburgaz', 34),
('Kadikoy', 34);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `MemberID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `MemberUsername` varchar(50) NOT NULL,
  `MemberPassword` varchar(27) NOT NULL,
  `MemberEmail` varchar(90) NOT NULL,
  `MemberName` char(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MemberLastname` char(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MemberAge` int NOT NULL,
  `MemberCity` char(50) DEFAULT NULL,
  `MemberBirthday` varchar(15) NOT NULL,
  `MemberGender` char(1) DEFAULT NULL,
  `MemberConfirm` tinyint UNSIGNED NOT NULL DEFAULT '1',
  `MemberAddtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `MemberContract` tinyint UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`MemberID`),
  UNIQUE KEY `MemberUsername` (`MemberUsername`),
  UNIQUE KEY `MemberEmail` (`MemberEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`MemberID`, `MemberUsername`, `MemberPassword`, `MemberEmail`, `MemberName`, `MemberLastname`, `MemberAge`, `MemberCity`, `MemberBirthday`, `MemberGender`, `MemberConfirm`, `MemberAddtime`, `MemberContract`) VALUES
(1, 'kemalsunal', '123ks', 'kemalsunal@gmail.com', 'Kemal', 'Sunal', 45, '1', '1970-01-01', 'M', 1, '2023-03-02 05:53:15', 1),
(2, 'halitakcatepe', '123ha', 'halitakcatepe@gmail.com', 'Halit', 'Akcatepe', 43, '5', '1980-01-01', 'M', 1, '2023-03-02 05:55:42', 1),
(3, 'adilenasit', '123an', 'adilenasit@gmail.com', 'Adile', 'Nasit', 48, '7', '1973-01-01', 'F', 2, '2023-03-02 05:56:35', 1),
(4, 'munirozkul', '123mo', 'munirozkul@gmail.com', 'Munir', 'Ozkul', 53, '36', '1961-01-01', 'M', 1, '2023-03-02 05:57:43', 1),
(5, 'tarikakan', '123ta', 'tarikakan@gmail.com', 'Tarik', 'Akan', 48, '33', '1970-01-01', 'M', 2, '2023-03-02 05:59:28', 1),
(6, 'senersen', '123ss', 'senersen@gmail.com', 'Sener', 'Sen', 54, '56', '1974-01-01', 'M', 1, '2023-03-02 06:00:22', 1),
(7, 'sitkiakcatepe', '123sa', 'sitkiakcatepe@gmail.com', 'Sıtkı', 'Akçatepe', 67, '4', '1998-01-01', 'M', 1, '2023-03-02 06:01:40', 1),
(8, 'akiloztuna', '123ao', 'akiloztuna@gmail.com', 'Akil', 'Öztuna', 69, '9', '1935-01-01', 'M', 1, '2023-03-02 06:03:10', 1),
(9, 'semraozdamar', '123so', 'semraozdamar@gmail.com', 'Semra', 'Özdamar', 28, '12', '1990-01-01', 'F', 2, '2023-03-02 06:04:49', 1),
(10, 'mehmetalierbil', '123mae', 'mehmetalierbil@gmail.com', 'Mehmet Ali', 'Erbil', 42, '5', '1980-01-01', 'M', 2, '2023-03-02 06:06:03', 1),
(11, 'muratyildirim', '123my', 'muratyildirim@gmail.com', 'Murat', 'Yıldırım', 29, '78', '1989-01-01', 'M', 1, '2023-03-02 06:06:53', 1),
(12, 'aslienver', '123ae', 'aslienver@gmail.com', 'Aslı', 'Enver', 26, '80', '1992-01-01', 'F', 1, '2023-03-02 06:07:43', 1),
(13, 'sarpakkaya', '123sa', 'sarpakkaya@gmail.com', 'Sarp', 'Akkaya', 25, '35', '1993-01-01', 'M', 2, '2023-03-02 06:08:46', 1),
(14, 'guvenmuratakpinar', '123gma', 'guvenmuratakpinar@gmail.com', 'Güven Murat', 'Akpınar', 27, '55', '1990-01-01', 'M', 1, '2023-03-02 06:09:42', 1),
(15, 'berkhakman', '123bh', 'berkhakman@gmail.com', 'Berk', 'Hakman', 31, '42', '1985-01-01', 'M', 2, '2023-03-02 06:10:38', 1),
(16, 'mehmetozgur', '123mo', 'mehmetozgur@gmail.com', 'Mehmet', 'Özgür', 35, '3', '1983-01-01', 'M', 2, '2023-03-02 06:11:51', 1),
(17, 'rehaozcan', '123ro', 'rehaozcan@gmail.com', 'Reha', 'Özcan', 52, '18', '1961-01-01', 'M', 2, '2023-03-02 06:35:10', 1),
(18, 'zahralizada', 'b9996871d6c5413def720c50ca5', 'denme@gmail.com', 'Zahra', 'Alizada', 29, '3', '2022-06-13', 'F', 1, '2023-03-06 13:29:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `members_log`
--

DROP TABLE IF EXISTS `members_log`;
CREATE TABLE IF NOT EXISTS `members_log` (
  `MemberID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `MemberUsername` varchar(50) NOT NULL,
  `MemberEmail` varchar(90) NOT NULL,
  `MemberName` char(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MemberLastname` char(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MemberAge` int NOT NULL,
  `MemberCity` char(50) DEFAULT NULL,
  `MemberBirthday` varchar(15) NOT NULL,
  `MemberAddtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`MemberID`),
  UNIQUE KEY `MemberUsername` (`MemberUsername`),
  UNIQUE KEY `MemberEmail` (`MemberEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `members_log`
--

INSERT INTO `members_log` (`MemberID`, `MemberUsername`, `MemberEmail`, `MemberName`, `MemberLastname`, `MemberAge`, `MemberCity`, `MemberBirthday`, `MemberAddtime`) VALUES
(1, 'Shair', 'deneme1@gmail.com', 'Fehmi', 'Uyar', 31, 'Isparta', '01.01.1940', '2023-03-03 13:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `ProductID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `MemberID` int UNSIGNED NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductPrice` mediumint UNSIGNED NOT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `MemberID`, `ProductName`, `ProductPrice`) VALUES
(1, 1, 'Asus Bilgisayar Monitörü', 1750),
(2, 3, '16 Gb Ram', 420),
(3, 2, 'Bluetooth Kulaklık', 480),
(4, 2, 'Yaka Mikrofonu', 1380),
(5, 8, 'TV Ünitesi', 1234),
(6, 11, 'Çalışma Masası', 960),
(7, 11, 'MSI Masaüstü Bilgisayar', 16200),
(8, 5, 'MSI GEFORCE RTX 2080 Tl Ekran Kartı', 17000),
(9, 3, 'İntel i7 7. Nesil İşlemci', 5120),
(10, 3, 'MSI MPG X570 GAMİNG EDGE WIFI Amd x570 Soket', 1900);

-- --------------------------------------------------------

--
-- Table structure for table `uyeler`
--

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE IF NOT EXISTS `uyeler` (
  `MemberID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `MemberUsername` varchar(50) NOT NULL,
  `MemberPassword` varchar(27) NOT NULL,
  `MemberEmail` varchar(90) NOT NULL,
  `MemberName` char(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MemberLastname` char(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MemberAge` int NOT NULL,
  `MemberCity` char(50) DEFAULT NULL,
  `MemberBirthday` varchar(15) NOT NULL,
  `MemberConfirm` tinyint UNSIGNED NOT NULL DEFAULT '1',
  `MemberAddtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`MemberID`),
  UNIQUE KEY `MemberUsername` (`MemberUsername`),
  UNIQUE KEY `MemberEmail` (`MemberEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `uyeler`
--

INSERT INTO `uyeler` (`MemberID`, `MemberUsername`, `MemberPassword`, `MemberEmail`, `MemberName`, `MemberLastname`, `MemberAge`, `MemberCity`, `MemberBirthday`, `MemberConfirm`, `MemberAddtime`) VALUES
(4, 'munirozkul', '123mo', 'munirozkul@gmail.com', 'Munir', 'Ozkul', 53, 'Kahramanmaraş', '01.01.1961', 1, '2023-03-02 05:57:43'),
(6, 'senersen', '123ss', 'senersen@gmail.com', 'Sener', 'Sen', 54, 'Adana', '01.01.1964', 1, '2023-03-02 06:00:22'),
(7, 'sitkiakcatepe', '123sa', 'sitkiakcatepe@gmail.com', 'Sıtkı', 'Akçatepe', 67, NULL, '01.01.1948', 1, '2023-03-02 06:01:40'),
(9, 'semraozdamar', '123so', 'semraozdamar@gmail.com', 'Semra', 'Özdamar', 28, NULL, '01.01.1990', 2, '2023-03-02 06:04:49'),
(10, 'mehmetalierbil', '123mae', 'mehmetalierbil@gmail.com', 'Mehmet Ali', 'Erbil', 42, 'Antalya', '01.01.1980', 2, '2023-03-02 06:06:03'),
(12, 'aslienver', '123ae', 'aslienver@gmail.com', 'Aslı', 'Enver', 26, NULL, '01.01.1992', 1, '2023-03-02 06:07:43'),
(13, 'sarpakkaya', '123sa', 'sarpakkaya@gmail.com', 'Sarp', 'Akkaya', 25, NULL, '01.01.1993', 2, '2023-03-02 06:08:46'),
(14, 'guvenmuratakpinar', '123gma', 'guvenmuratakpinar@gmail.com', 'Güven Murat', 'Akpınar', 27, 'Gaziantep', '01.01.1990', 1, '2023-03-02 06:09:42'),
(15, 'berkhakman', '123bh', 'berkhakman@gmail.com', 'Berk', 'Hakman', 31, NULL, '01.01.1985', 2, '2023-03-02 06:10:38'),
(16, 'mehmetozgur', '123mo', 'mehmetozgur@gmail.com', 'Mehmet', 'Özgür', 35, NULL, '01.01.1983', 2, '2023-03-02 06:11:51'),
(17, 'rehaozcan', '123ro', 'rehaozcan@gmail.com', 'Reha', 'Özcan', 52, NULL, '', 2, '2023-03-02 06:35:10'),
(35, 'Shair', '123456', 'deneme1@gmail.com', 'Fehmi', 'Uyar', 31, 'Isparta', '01.01.1940', 1, '2023-03-03 13:11:48');

--
-- Triggers `uyeler`
--
DROP TRIGGER IF EXISTS `DeleteComment`;
DELIMITER $$
CREATE TRIGGER `DeleteComment` AFTER DELETE ON `uyeler` FOR EACH ROW DELETE FROM yorumlar
WHERE MemberID=OLD.MemberID
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `InsertMember`;
DELIMITER $$
CREATE TRIGGER `InsertMember` AFTER INSERT ON `uyeler` FOR EACH ROW INSERT INTO members_log(MemberUsername,MemberEmail,MemberName, MemberLastname,MemberAge,MemberCity,MemberBirthday)
VALUES(NEW.MemberUsername,NEW.MemberEmail,NEW.MemberName, NEW.MemberLastname,NEW.MemberAge,NEW.MemberCity,NEW.MemberBirthday)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `yorumlar`
--

DROP TABLE IF EXISTS `yorumlar`;
CREATE TABLE IF NOT EXISTS `yorumlar` (
  `CommentID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `MemberID` int UNSIGNED NOT NULL,
  `ProductID` int UNSIGNED NOT NULL,
  `CommentMessage` varchar(255) NOT NULL,
  PRIMARY KEY (`CommentID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
