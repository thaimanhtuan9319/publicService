CREATE DATABASE  IF NOT EXISTS `public_service` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `public_service`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: public_service
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `can_bo`
--

DROP TABLE IF EXISTS `can_bo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `can_bo` (
  `id_can_bo` int(11) NOT NULL AUTO_INCREMENT,
  `ten_can_bo` varchar(45) DEFAULT NULL,
  `dien_thoai` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `Id_don_vi_quan_ly` int(11) NOT NULL,
  PRIMARY KEY (`id_can_bo`,`Id_don_vi_quan_ly`),
  KEY `fk_can_bo_don_vi_quan_ly1_idx` (`Id_don_vi_quan_ly`),
  CONSTRAINT `fk_can_bo_don_vi_quan_ly1` FOREIGN KEY (`Id_don_vi_quan_ly`) REFERENCES `don_vi_quan_ly` (`Id_don_vi_quan_ly`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `dich_vu_cong`
--

DROP TABLE IF EXISTS `dich_vu_cong`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dich_vu_cong` (
  `Id_dich_vu` int(11) NOT NULL AUTO_INCREMENT,
  `ten_dich_vu` varchar(255) NOT NULL,
  `mo_ta` text NOT NULL,
  `muc_do_cung_cap` int(11) NOT NULL,
  `trang_thai_cong_bo` int(11) NOT NULL,
  `Id_don_vi_quan_ly` int(11) NOT NULL,
  PRIMARY KEY (`Id_dich_vu`),
  KEY `fk_id_don_vi_quan_ly_idx` (`Id_don_vi_quan_ly`),
  CONSTRAINT `fk_id_don_vi_quan_ly` FOREIGN KEY (`Id_don_vi_quan_ly`) REFERENCES `don_vi_quan_ly` (`Id_don_vi_quan_ly`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `don_vi_quan_ly`
--

DROP TABLE IF EXISTS `don_vi_quan_ly`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `don_vi_quan_ly` (
  `Id_don_vi_quan_ly` int(11) NOT NULL AUTO_INCREMENT,
  `ten_don_vi_quan_ly` varchar(255) NOT NULL,
  `diachi_don_vi_quan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id_don_vi_quan_ly`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq` (
  `Id_faq` int(11) NOT NULL AUTO_INCREMENT,
  `cau_hoi` text NOT NULL,
  `cau_tra_loi` text NOT NULL,
  `id_can_bo` int(11) NOT NULL,
  `Id_don_vi_quan_ly` int(11) NOT NULL,
  PRIMARY KEY (`Id_faq`,`id_can_bo`,`Id_don_vi_quan_ly`),
  KEY `fk_faq_can_bo1_idx` (`id_can_bo`,`Id_don_vi_quan_ly`),
  CONSTRAINT `fk_faq_can_bo1` FOREIGN KEY (`id_can_bo`, `Id_don_vi_quan_ly`) REFERENCES `can_bo` (`id_can_bo`, `Id_don_vi_quan_ly`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `hoi_dap`
--

DROP TABLE IF EXISTS `hoi_dap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hoi_dap` (
  `Id_hoi_dap` int(11) NOT NULL AUTO_INCREMENT,
  `tieu_de` text NOT NULL,
  `noi_dung` text NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `ngay_gui` datetime NOT NULL,
  `Id_don_vi_quan_ly` int(11) NOT NULL,
  `tra_loi` text,
  PRIMARY KEY (`Id_hoi_dap`),
  KEY `fk_hoi_dap_don_vi_quan_ly1_idx` (`Id_don_vi_quan_ly`),
  CONSTRAINT `fk_hoi_dap_don_vi_quan_ly1` FOREIGN KEY (`Id_don_vi_quan_ly`) REFERENCES `don_vi_quan_ly` (`Id_don_vi_quan_ly`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tai_lieu`
--

DROP TABLE IF EXISTS `tai_lieu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tai_lieu` (
  `Id_tai_lieu` int(11) NOT NULL AUTO_INCREMENT,
  `Id_dich_vu` int(11) NOT NULL,
  `ten_tai_lieu` varchar(255) NOT NULL,
  `kieu` varchar(45) NOT NULL,
  `kich_thuoc` int(11) NOT NULL,
  `data` mediumblob NOT NULL,
  PRIMARY KEY (`Id_tai_lieu`),
  KEY `fk_id_dich_vu_idx` (`Id_dich_vu`),
  CONSTRAINT `fk_id_dich_vu` FOREIGN KEY (`Id_dich_vu`) REFERENCES `dich_vu_cong` (`Id_dich_vu`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `Id_user` int(11) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `User_type` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `y_kien_phan_hoi`
--

DROP TABLE IF EXISTS `y_kien_phan_hoi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `y_kien_phan_hoi` (
  `Id_y_kien_phan_hoi` int(11) NOT NULL AUTO_INCREMENT,
  `tieu_de` text NOT NULL,
  `noi_dung` text NOT NULL,
  `Id_don_vi_quan_ly` int(11) NOT NULL,
  PRIMARY KEY (`Id_y_kien_phan_hoi`),
  KEY `fk_y_kien_phan_hoi_don_vi_quan_ly1_idx` (`Id_don_vi_quan_ly`),
  CONSTRAINT `fk_y_kien_phan_hoi_don_vi_quan_ly1` FOREIGN KEY (`Id_don_vi_quan_ly`) REFERENCES `don_vi_quan_ly` (`Id_don_vi_quan_ly`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-06-02 11:07:29
