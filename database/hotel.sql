/*
SQLyog Ultimate v10.42 
MySQL - 5.5.32 : Database - hotel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hotel` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `hotel`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id_admin` varchar(5) NOT NULL,
  `id_jasa` varchar(5) DEFAULT NULL,
  `id_kamar` varchar(5) DEFAULT NULL,
  `id_tamu` varchar(5) DEFAULT NULL,
  `nama` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_admin`),
  KEY `id_jasa` (`id_jasa`),
  KEY `id_kamar` (`id_kamar`),
  KEY `id_tamu` (`id_tamu`),
  CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_jasa`) REFERENCES `jasa` (`id_jasa`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `admin_ibfk_3` FOREIGN KEY (`id_tamu`) REFERENCES `tamu` (`id_tamu`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id_admin`,`id_jasa`,`id_kamar`,`id_tamu`,`nama`) values ('a1','J1','K01','T1','santosa');

/*Table structure for table `jasa` */

DROP TABLE IF EXISTS `jasa`;

CREATE TABLE `jasa` (
  `id_jasa` varchar(5) NOT NULL,
  `id_tamu` varchar(5) DEFAULT NULL,
  `nama_jasa` varchar(10) DEFAULT NULL,
  `harga_jasa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jasa`),
  KEY `id_tamu` (`id_tamu`),
  CONSTRAINT `jasa_ibfk_1` FOREIGN KEY (`id_tamu`) REFERENCES `tamu` (`id_tamu`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jasa` */

insert  into `jasa`(`id_jasa`,`id_tamu`,`nama_jasa`,`harga_jasa`) values ('J1','T1','A				',10000);

/*Table structure for table `kamar` */

DROP TABLE IF EXISTS `kamar`;

CREATE TABLE `kamar` (
  `id_kamar` varchar(5) NOT NULL,
  `id_tamu` varchar(5) DEFAULT NULL,
  `tipe_kamar` varchar(2) DEFAULT NULL,
  `tgl_checkin` varchar(20) DEFAULT NULL,
  `tgl_checkout` varchar(20) DEFAULT NULL,
  `bayar` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kamar`),
  KEY `id_tamu` (`id_tamu`),
  CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`id_tamu`) REFERENCES `tamu` (`id_tamu`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kamar` */

insert  into `kamar`(`id_kamar`,`id_tamu`,`tipe_kamar`,`tgl_checkin`,`tgl_checkout`,`bayar`) values ('K01','T1','A	','2014-10-1','2014-10-2',1000000);

/*Table structure for table `tamu` */

DROP TABLE IF EXISTS `tamu`;

CREATE TABLE `tamu` (
  `id_tamu` varchar(5) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tlp` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_tamu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tamu` */

insert  into `tamu`(`id_tamu`,`nama`,`alamat`,`tlp`) values ('T1','daniel','medan				','085641526765');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
