/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.0.14-MariaDB-1~wheezy-log : Database - cakephp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cakephp` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `cakephp`;

/*Table structure for table `fb_users` */

DROP TABLE IF EXISTS `fb_users`;

CREATE TABLE `fb_users` (
  `id` bigint(20) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gender_id` tinyint(4) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `fb_users` */

/*Table structure for table `genders` */

DROP TABLE IF EXISTS `genders`;

CREATE TABLE `genders` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `genders` */

insert  into `genders`(`id`,`name`) values (1,'Male'),(2,'Female');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
