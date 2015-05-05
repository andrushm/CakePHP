CREATE TABLE `cakephp`.`fb_users`( `id` BIGINT NOT NULL, `first_name` VARCHAR(50), `last_name` VARCHAR(50), `email` VARCHAR(50), `gender_id` TINYINT, `picture` VARCHAR(255), PRIMARY KEY (`id`) );

CREATE TABLE `genders` (
  `id` TINYINT(3) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `mk_genders` */

INSERT  INTO `genders`(`id`,`name`) VALUES (1,'Male'),(2,'Female');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
