-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: CPSC471
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `DOCTORS`
--

DROP TABLE IF EXISTS `DOCTORS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DOCTORS` (
  `hpclearence` int(11) NOT NULL,
  `dname` varchar(45) NOT NULL,
  `dcredentials` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`dcredentials`,`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DOCTORS`
--

LOCK TABLES `DOCTORS` WRITE;
/*!40000 ALTER TABLE `DOCTORS` DISABLE KEYS */;
INSERT INTO `DOCTORS` VALUES (3,'david','david3','pass2'),(1,'jorge','jorge1','pass'),(2,'mike','mike2','pass1');
/*!40000 ALTER TABLE `DOCTORS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DOCTORS_HAVE`
--

DROP TABLE IF EXISTS `DOCTORS_HAVE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DOCTORS_HAVE` (
  `dcredentials` int(11) NOT NULL,
  `ucredentials` varchar(45) NOT NULL,
  `time` time DEFAULT NULL,
  `prescription` varchar(45) DEFAULT NULL,
  `diagnosis` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`dcredentials`,`ucredentials`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DOCTORS_HAVE`
--

LOCK TABLES `DOCTORS_HAVE` WRITE;
/*!40000 ALTER TABLE `DOCTORS_HAVE` DISABLE KEYS */;
INSERT INTO `DOCTORS_HAVE` VALUES (1,'21','11:30:00','Morphine/Cannabis','Npnemonia'),(2,'22','06:30:00','Anti-biotics',NULL);
/*!40000 ALTER TABLE `DOCTORS_HAVE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `EQUIPMENT`
--

DROP TABLE IF EXISTS `EQUIPMENT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EQUIPMENT` (
  `equip_type` int(11) NOT NULL,
  `ownedby` varchar(45) DEFAULT NULL,
  `equip_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`equip_type`),
  UNIQUE KEY `equip_type_UNIQUE` (`equip_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EQUIPMENT`
--

LOCK TABLES `EQUIPMENT` WRITE;
/*!40000 ALTER TABLE `EQUIPMENT` DISABLE KEYS */;
/*!40000 ALTER TABLE `EQUIPMENT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `HEALTHCARE_PRO`
--

DROP TABLE IF EXISTS `HEALTHCARE_PRO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HEALTHCARE_PRO` (
  `hpname` varchar(45) DEFAULT NULL,
  `hptime` varchar(45) DEFAULT NULL,
  `hpclearence` varchar(45) NOT NULL,
  `adminname` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`hpclearence`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `HEALTHCARE_PRO`
--

LOCK TABLES `HEALTHCARE_PRO` WRITE;
/*!40000 ALTER TABLE `HEALTHCARE_PRO` DISABLE KEYS */;
INSERT INTO `HEALTHCARE_PRO` VALUES ('mike','2:30','2','Chris');
/*!40000 ALTER TABLE `HEALTHCARE_PRO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `HEALTHCARE_SYSTEM_ADMIN`
--

DROP TABLE IF EXISTS `HEALTHCARE_SYSTEM_ADMIN`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HEALTHCARE_SYSTEM_ADMIN` (
  `saname` varchar(45) NOT NULL,
  `sadate` datetime DEFAULT NULL,
  `input_histoty` varchar(45) DEFAULT NULL,
  `apassword` varchar(45) NOT NULL,
  PRIMARY KEY (`saname`),
  UNIQUE KEY `saname_UNIQUE` (`saname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `HEALTHCARE_SYSTEM_ADMIN`
--

LOCK TABLES `HEALTHCARE_SYSTEM_ADMIN` WRITE;
/*!40000 ALTER TABLE `HEALTHCARE_SYSTEM_ADMIN` DISABLE KEYS */;
/*!40000 ALTER TABLE `HEALTHCARE_SYSTEM_ADMIN` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `HEALTHCARE_SYSTEM_USER`
--

DROP TABLE IF EXISTS `HEALTHCARE_SYSTEM_USER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HEALTHCARE_SYSTEM_USER` (
  `ucredentials` varchar(45) NOT NULL,
  `drug_record` varchar(45) NOT NULL,
  `diagrarecord` varchar(45) NOT NULL,
  `physio_cred` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `date` varchar(45) NOT NULL,
  `type` varchar(45) DEFAULT NULL,
  `equipment` varchar(45) DEFAULT NULL,
  `upassword` varchar(45) NOT NULL,
  PRIMARY KEY (`ucredentials`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `HEALTHCARE_SYSTEM_USER`
--

LOCK TABLES `HEALTHCARE_SYSTEM_USER` WRITE;
/*!40000 ALTER TABLE `HEALTHCARE_SYSTEM_USER` DISABLE KEYS */;
INSERT INTO `HEALTHCARE_SYSTEM_USER` VALUES ('user1','Morphine','Npnemonia','non','George','10/4','none','none','cheers'),('user2','Ani-biotics','infection','non','Greg','2/6','none','none','loop');
/*!40000 ALTER TABLE `HEALTHCARE_SYSTEM_USER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `NURSE`
--

DROP TABLE IF EXISTS `NURSE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `NURSE` (
  `hpclearance` varchar(45) NOT NULL,
  `nname` varchar(45) DEFAULT NULL,
  `nclredentials` varchar(45) DEFAULT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`hpclearance`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `NURSE`
--

LOCK TABLES `NURSE` WRITE;
/*!40000 ALTER TABLE `NURSE` DISABLE KEYS */;
/*!40000 ALTER TABLE `NURSE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `NURSE_TAKECARE`
--

DROP TABLE IF EXISTS `NURSE_TAKECARE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `NURSE_TAKECARE` (
  `ncredentials` int(11) NOT NULL,
  `ucredentials` varchar(45) NOT NULL,
  `time` time DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`ncredentials`,`ucredentials`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `NURSE_TAKECARE`
--

LOCK TABLES `NURSE_TAKECARE` WRITE;
/*!40000 ALTER TABLE `NURSE_TAKECARE` DISABLE KEYS */;
/*!40000 ALTER TABLE `NURSE_TAKECARE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PHARMACIST`
--

DROP TABLE IF EXISTS `PHARMACIST`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PHARMACIST` (
  `phname` int(11) DEFAULT NULL,
  `hpclerance` varchar(45) NOT NULL,
  `is _assistant` varchar(45) DEFAULT NULL,
  `phcredentials` varchar(45) DEFAULT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`hpclerance`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PHARMACIST`
--

LOCK TABLES `PHARMACIST` WRITE;
/*!40000 ALTER TABLE `PHARMACIST` DISABLE KEYS */;
/*!40000 ALTER TABLE `PHARMACIST` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PHYSIOTHERAPIST`
--

DROP TABLE IF EXISTS `PHYSIOTHERAPIST`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PHYSIOTHERAPIST` (
  `hpclerance` int(11) NOT NULL,
  `pyname` varchar(45) DEFAULT NULL,
  `pycredentials` varchar(45) DEFAULT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`hpclerance`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PHYSIOTHERAPIST`
--

LOCK TABLES `PHYSIOTHERAPIST` WRITE;
/*!40000 ALTER TABLE `PHYSIOTHERAPIST` DISABLE KEYS */;
/*!40000 ALTER TABLE `PHYSIOTHERAPIST` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SELL_MEDICINE`
--

DROP TABLE IF EXISTS `SELL_MEDICINE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SELL_MEDICINE` (
  `pharm_cred` int(11) NOT NULL,
  `user_cred` varchar(45) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`pharm_cred`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SELL_MEDICINE`
--

LOCK TABLES `SELL_MEDICINE` WRITE;
/*!40000 ALTER TABLE `SELL_MEDICINE` DISABLE KEYS */;
/*!40000 ALTER TABLE `SELL_MEDICINE` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-13 12:19:24
