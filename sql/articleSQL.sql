/*
SQLyog Ultimate v8.32 
MySQL - 5.5.27 : Database - guhui
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`guhui` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `guhui`;

/*Table structure for table `article` */

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `title` char(100) NOT NULL COMMENT '标题',
  `author` char(50) NOT NULL COMMENT '作者',
  `description` varchar(255) NOT NULL COMMENT '简介',
  `content` text NOT NULL COMMENT '内容',
  `dateline` int(11) NOT NULL DEFAULT '0' COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `article` */

insert  into `article`(`id`,`title`,`author`,`description`,`content`,`dateline`) values (5,'123456','2','3','4',1440661350),(7,'我是一个人','帅气的古晖','哼','抱抱',1440661371);

/*Table structure for table `introduce` */

DROP TABLE IF EXISTS `introduce`;

CREATE TABLE `introduce` (
  `about` text NOT NULL COMMENT '关于我们',
  `contact` text NOT NULL COMMENT '联系我们'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `introduce` */

insert  into `introduce`(`about`,`contact`) values ('<h1>\r\n我是古文晖- -\r\n不要欺负我\r\n</h1>','<h1>call me:13533198091  2333333</h1>');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
