# ************************************************************
# Sequel Pro SQL dump
# Version 4499
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.42-log)
# Database: aeroeco
# Generation Time: 2015-11-16 17:38:02 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table conditions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `conditions`;

CREATE TABLE `conditions` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `conditions` WRITE;
/*!40000 ALTER TABLE `conditions` DISABLE KEYS */;

INSERT INTO `conditions` (`id`, `code`, `description`, `created_at`, `updated_at`)
VALUES
	(1,'AR','As Removed','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(2,'NE','New Equipment','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(3,'FN','Factory New','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(4,'NS','New Surplus','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(5,'SV','Servicable','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(6,'OH','Overhaul Condition','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(7,'OH CAP','Overhaul Capability','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(8,'RP','Repairable','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(9,'RP CAP','Repair Capability','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(10,'REQUEST','The Seller would like specific conditions quoted by Buyers','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(11,'Any Cond','Quote Any Condition','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(12,'US','Used Surplus','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `conditions` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
