-- MySQL dump 10.13  Distrib 5.1.72, for Win64 (unknown)
--
-- Host: localhost    Database: megacastings
-- ------------------------------------------------------
-- Server version	5.1.72-community

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `castingoffer`
--

DROP TABLE IF EXISTS `castingoffer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `castingoffer` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `Reference` varchar(25) NOT NULL,
  `BroadcastStartingDate` datetime NOT NULL,
  `ContractStartingDate` datetime NOT NULL,
  `BroadcastingTime` varchar(25) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `PostNumber` int(11) NOT NULL,
  `PostDescription` text NOT NULL,
  `ProfileDescription` text NOT NULL,
  `Client_id` int(11) NOT NULL,
  `Profession_id` int(11) DEFAULT NULL,
  `ProfessionField_id` int(11) DEFAULT NULL,
  `ContractType_id` int(11) NOT NULL,
  `Collaborator_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Reference` (`Reference`),
  KEY `Client_id` (`Client_id`),
  KEY `Profession_id` (`Profession_id`),
  KEY `ProfessionField_id` (`ProfessionField_id`),
  KEY `ContractType_id` (`ContractType_id`),
  KEY `Collaborator_id` (`Collaborator_id`),
  KEY `IxCastingOfferClient` (`Client_id`),
  KEY `IxCastingOfferProfession` (`Profession_id`),
  KEY `IxCastingOfferProfessionField` (`ProfessionField_id`),
  KEY `IxCastingOfferContractType` (`ContractType_id`),
  CONSTRAINT `FK539956BC20D7A3E2` FOREIGN KEY (`ContractType_id`) REFERENCES `contracttype` (`Id`),
  CONSTRAINT `FK539956BC2C93C83` FOREIGN KEY (`Collaborator_id`) REFERENCES `collaborator` (`Id`),
  CONSTRAINT `FK539956BC387DF55E` FOREIGN KEY (`ProfessionField_id`) REFERENCES `professionfield` (`Id`),
  CONSTRAINT `FK539956BCB6F9D3A2` FOREIGN KEY (`Client_id`) REFERENCES `client` (`Id`),
  CONSTRAINT `FK539956BCE196760F` FOREIGN KEY (`Profession_id`) REFERENCES `profession` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `castingoffer`
--

LOCK TABLES `castingoffer` WRITE;
/*!40000 ALTER TABLE `castingoffer` DISABLE KEYS */;
INSERT INTO `castingoffer` VALUES (1,'Test','04.04.16-1','2016-04-04 17:17:51','2016-05-04 17:17:51','2 ans','Laval',1,'qsdfghj','azerty',1,2,NULL,3,NULL);
/*!40000 ALTER TABLE `castingoffer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(75) NOT NULL,
  `PhoneNumber` varchar(25) DEFAULT NULL,
  `Address` varchar(75) NOT NULL,
  `City` varchar(75) NOT NULL,
  `ZipCode` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES (1,'Loison Corp','022','17 chemin','Laval','85201'),(2,'Loison Merlin','0243','17 chemin','Saint ouen','85200');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `collaborator`
--

DROP TABLE IF EXISTS `collaborator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `collaborator` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Login` varchar(20) NOT NULL,
  `Password` varchar(64) DEFAULT NULL,
  `Name` varchar(50) NOT NULL,
  `PhoneNumber` varchar(25) DEFAULT NULL,
  `Address` varchar(75) NOT NULL,
  `City` varchar(50) NOT NULL,
  `ZipCode` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `collaborator`
--

LOCK TABLES `collaborator` WRITE;
/*!40000 ALTER TABLE `collaborator` DISABLE KEYS */;
INSERT INTO `collaborator` VALUES (1,'Yi74',NULL,'Yi','02','15 rue','lavalé','74520');
/*!40000 ALTER TABLE `collaborator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contracttype`
--

DROP TABLE IF EXISTS `contracttype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contracttype` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ConType` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `ConType` (`ConType`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contracttype`
--

LOCK TABLES `contracttype` WRITE;
/*!40000 ALTER TABLE `contracttype` DISABLE KEYS */;
INSERT INTO `contracttype` VALUES (4,'Cachet d\'intermitent'),(2,'CDD'),(1,'CDI'),(3,'CTT');
/*!40000 ALTER TABLE `contracttype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profession`
--

DROP TABLE IF EXISTS `profession`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profession` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `ProfessionField_id` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Name` (`Name`),
  KEY `ProfessionField_id` (`ProfessionField_id`),
  KEY `IxProfessionProfessionField` (`ProfessionField_id`),
  CONSTRAINT `FK51820FBA387DF55E` FOREIGN KEY (`ProfessionField_id`) REFERENCES `professionfield` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profession`
--

LOCK TABLES `profession` WRITE;
/*!40000 ALTER TABLE `profession` DISABLE KEYS */;
INSERT INTO `profession` VALUES (1,'Danseur Soliste',1),(2,'Reporter',2);
/*!40000 ALTER TABLE `profession` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professionfield`
--

DROP TABLE IF EXISTS `professionfield`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `professionfield` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Title` (`Title`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professionfield`
--

LOCK TABLES `professionfield` WRITE;
/*!40000 ALTER TABLE `professionfield` DISABLE KEYS */;
INSERT INTO `professionfield` VALUES (2,'Danse'),(1,'Photographie');
/*!40000 ALTER TABLE `professionfield` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `representative`
--

DROP TABLE IF EXISTS `representative`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `representative` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `Client_id` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `FirstName` (`FirstName`,`LastName`,`PhoneNumber`),
  KEY `Client_id` (`Client_id`),
  KEY `IxRepresentativeClient` (`Client_id`),
  CONSTRAINT `FK427DAFAAB6F9D3A2` FOREIGN KEY (`Client_id`) REFERENCES `client` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `representative`
--

LOCK TABLES `representative` WRITE;
/*!40000 ALTER TABLE `representative` DISABLE KEYS */;
INSERT INTO `representative` VALUES (1,'Pierre','Crosse','0205',1);
/*!40000 ALTER TABLE `representative` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-13  9:36:36
