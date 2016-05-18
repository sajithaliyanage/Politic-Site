-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.17 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;



-- Dumping structure for table politic.login
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `passwrd` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table politic.login: ~0 rows (approximately)
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
REPLACE INTO `login` (`id`, `username`, `passwrd`) VALUES
	(1, 'admin', '123');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;


-- Dumping structure for table politic.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(50) NOT NULL DEFAULT '0',
  `date` varchar(255) NOT NULL DEFAULT '0',
  `small` varchar(255) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `headimage` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

-- Dumping data for table politic.news: ~0 rows (approximately)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;


-- Dumping structure for table politic.news_image
CREATE TABLE IF NOT EXISTS `news_image` (
  `news_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table politic.news_image: ~0 rows (approximately)
/*!40000 ALTER TABLE `news_image` DISABLE KEYS */;
/*!40000 ALTER TABLE `news_image` ENABLE KEYS */;


-- Dumping structure for table politic.private_image
CREATE TABLE IF NOT EXISTS `private_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table politic.private_image: ~0 rows (approximately)
/*!40000 ALTER TABLE `private_image` DISABLE KEYS */;
/*!40000 ALTER TABLE `private_image` ENABLE KEYS */;


-- Dumping structure for table politic.public_image
CREATE TABLE IF NOT EXISTS `public_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Dumping data for table politic.public_image: ~0 rows (approximately)
/*!40000 ALTER TABLE `public_image` DISABLE KEYS */;
/*!40000 ALTER TABLE `public_image` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
