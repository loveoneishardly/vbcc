/*
SQLyog Community
MySQL - 10.1.37-MariaDB : Database - vbcc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`vbcc` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `vbcc`;

/*Table structure for table `dm_donvi` */

DROP TABLE IF EXISTS `dm_donvi`;

CREATE TABLE `dm_donvi` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TENDONVI` varbinary(250) DEFAULT NULL,
  `DIACHI` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SODIENTHOAI` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EMAIL` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GHICHU` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TRANGTHAI` int(11) DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `dm_donvi` */

insert  into `dm_donvi`(`ID`,`TENDONVI`,`DIACHI`,`SODIENTHOAI`,`EMAIL`,`GHICHU`,`TRANGTHAI`) values 
(1,'VNPT',NULL,NULL,NULL,NULL,1);

/*Table structure for table `dm_nhanvien` */

DROP TABLE IF EXISTS `dm_nhanvien`;

CREATE TABLE `dm_nhanvien` (
  `MA_NHAN_VIEN` int(11) NOT NULL AUTO_INCREMENT,
  `MA_DON_VI` int(11) DEFAULT NULL,
  `MA_PHONG_BAN` int(11) DEFAULT NULL,
  `TEN_NHAN_VIEN` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DAN_TOC` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'lấy theo danh mục dân tộc',
  `NGAY_SINH` date DEFAULT NULL,
  `TUOI` int(11) DEFAULT NULL,
  `GIOI_TINH` int(2) DEFAULT NULL,
  `SO_CCCD` int(11) DEFAULT NULL,
  `DIA_CHI` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SO_DIEN_THOAI` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1: có, 0: không',
  `TAI_KHOAN` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PASSWORD` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AVATAR` longblob,
  `GHI_CHU` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ADMIN` int(2) DEFAULT '0',
  `MENU` longtext COLLATE utf8mb4_unicode_ci,
  `TIME_CREATE` datetime DEFAULT NULL,
  `TIME_LOCK` datetime DEFAULT NULL,
  `TRANGTHAI` int(11) DEFAULT '1',
  PRIMARY KEY (`MA_NHAN_VIEN`,`TAI_KHOAN`),
  KEY `MA_DON_VI` (`MA_DON_VI`),
  KEY `MA_PHONG_BAN` (`MA_PHONG_BAN`),
  CONSTRAINT `dm_nhanvien_ibfk_1` FOREIGN KEY (`MA_DON_VI`) REFERENCES `dm_donvi` (`ID`),
  CONSTRAINT `dm_nhanvien_ibfk_2` FOREIGN KEY (`MA_PHONG_BAN`) REFERENCES `dm_phongban` (`MA_PHONG_BAN`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `dm_nhanvien` */

insert  into `dm_nhanvien`(`MA_NHAN_VIEN`,`MA_DON_VI`,`MA_PHONG_BAN`,`TEN_NHAN_VIEN`,`DAN_TOC`,`NGAY_SINH`,`TUOI`,`GIOI_TINH`,`SO_CCCD`,`DIA_CHI`,`SO_DIEN_THOAI`,`TAI_KHOAN`,`PASSWORD`,`AVATAR`,`GHI_CHU`,`ADMIN`,`MENU`,`TIME_CREATE`,`TIME_LOCK`,`TRANGTHAI`) values 
(1,1,1,'Admin','1','2024-02-22',45,1,2147483647,'thành phố Sóc Trăng, tỉnh Sóc Trăng','1','admin','85d617c7e82c1ec51ee00bec5dca17e4',NULL,'',9,NULL,'2024-02-23 14:50:52',NULL,1);

/*Table structure for table `dm_phongban` */

DROP TABLE IF EXISTS `dm_phongban`;

CREATE TABLE `dm_phongban` (
  `MA_PHONG_BAN` int(11) NOT NULL AUTO_INCREMENT,
  `MA_DON_VI` int(11) DEFAULT NULL,
  `TEN_PHONG_BAN` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CAP_PHONG_BAN` int(10) DEFAULT NULL,
  `PHONG_BAN_CHA` int(11) DEFAULT NULL,
  `GHI_CHU` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TRANG_THAI` int(2) DEFAULT '1',
  PRIMARY KEY (`MA_PHONG_BAN`),
  KEY `MA_DON_VI` (`MA_DON_VI`),
  CONSTRAINT `dm_phongban_ibfk_1` FOREIGN KEY (`MA_DON_VI`) REFERENCES `dm_donvi` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `dm_phongban` */

insert  into `dm_phongban`(`MA_PHONG_BAN`,`MA_DON_VI`,`TEN_PHONG_BAN`,`CAP_PHONG_BAN`,`PHONG_BAN_CHA`,`GHI_CHU`,`TRANG_THAI`) values 
(1,1,'ADMIN',1,NULL,NULL,1);

/*Table structure for table `vbcc_file` */

DROP TABLE IF EXISTS `vbcc_file`;

CREATE TABLE `vbcc_file` (
  `ID_FILE` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CC` int(11) DEFAULT NULL,
  `MA_DON_VI` int(11) DEFAULT NULL,
  `MA_NHAN_VIEN` int(11) DEFAULT NULL,
  `TEN_FILE_GOC` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TEN_HIEN_THI` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DUONG_DAN` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CREATE` datetime DEFAULT NULL,
  `TRANG_THAI` int(2) DEFAULT '1',
  PRIMARY KEY (`ID_FILE`),
  KEY `ID_CC` (`ID_CC`),
  KEY `MA_DON_VI` (`MA_DON_VI`),
  KEY `MA_NHAN_VIEN` (`MA_NHAN_VIEN`),
  CONSTRAINT `vbcc_file_ibfk_1` FOREIGN KEY (`ID_CC`) REFERENCES `vbcc_thongtin_chitiet` (`ID_CC`),
  CONSTRAINT `vbcc_file_ibfk_2` FOREIGN KEY (`MA_DON_VI`) REFERENCES `dm_donvi` (`ID`),
  CONSTRAINT `vbcc_file_ibfk_3` FOREIGN KEY (`MA_NHAN_VIEN`) REFERENCES `dm_nhanvien` (`MA_NHAN_VIEN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `vbcc_file` */

/*Table structure for table `vbcc_thongtin_chitiet` */

DROP TABLE IF EXISTS `vbcc_thongtin_chitiet`;

CREATE TABLE `vbcc_thongtin_chitiet` (
  `ID_CC` int(11) NOT NULL AUTO_INCREMENT,
  `MA_DON_VI` int(11) DEFAULT NULL,
  `MA_NHAN_VIEN` int(11) DEFAULT NULL,
  `TU_NGAY` date DEFAULT NULL,
  `DEN_NGAY` date DEFAULT NULL,
  `NGAY_CAP` date DEFAULT NULL,
  `CHUNG_CHI_CHUNG_NHAN` varchar(250) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `NGAY_HET_HAN` date DEFAULT NULL,
  `LOAI_VBCC` varchar(250) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `MUC_VBCC` varchar(250) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `CO_SO_DAO_TAO` varchar(250) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `DIA_DIEM_DAO_TAO` varchar(250) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `DIEM` varbinary(250) DEFAULT NULL,
  `CREATE` datetime DEFAULT NULL,
  `GHI_CHU` varchar(250) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `TRANG_THAI` int(2) DEFAULT '1',
  PRIMARY KEY (`ID_CC`),
  KEY `MA_DON_VI` (`MA_DON_VI`),
  KEY `MA_NHAN_VIEN` (`MA_NHAN_VIEN`),
  CONSTRAINT `vbcc_thongtin_chitiet_ibfk_1` FOREIGN KEY (`MA_DON_VI`) REFERENCES `dm_donvi` (`ID`),
  CONSTRAINT `vbcc_thongtin_chitiet_ibfk_2` FOREIGN KEY (`MA_NHAN_VIEN`) REFERENCES `dm_nhanvien` (`MA_NHAN_VIEN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

/*Data for the table `vbcc_thongtin_chitiet` */

/* Procedure structure for procedure `p_load_thongtin_nhanvien` */

/*!50003 DROP PROCEDURE IF EXISTS  `p_load_thongtin_nhanvien` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `p_load_thongtin_nhanvien`(
	p_madonvi varchar(250),
	p_manhanvien VARCHAR(250)
)
BEGIN
	select nv.ADMIN, nv.AVATAR, nv.DAN_TOC, nv.DIA_CHI, nv.GHI_CHU, nv.GIOI_TINH, nv.MA_DON_VI, nv.MA_NHAN_VIEN, nv.MA_PHONG_BAN, nv.NGAY_SINH, nv.SO_CCCD, nv.SO_DIEN_THOAI, nv.TEN_NHAN_VIEN, 
		nv.TRANGTHAI, nv.TUOI, pb.TEN_PHONG_BAN, dv.TENDONVI as TEN_DON_VI
	from dm_nhanvien nv left join dm_phongban pb on nv.ma_phong_ban = pb.ma_phong_ban AND pb.ma_don_vi = nv.ma_don_vi, 
		dm_donvi dv
	where nv.ma_don_vi = p_madonvi and nv.ma_nhan_vien = p_manhanvien and nv.ma_don_vi = dv.ID;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `p_dangnhap` */

/*!50003 DROP PROCEDURE IF EXISTS  `p_dangnhap` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `p_dangnhap`(p_taikhoan VARCHAR(1024), p_matkhau VARCHAR(2048))
BEGIN
	DECLARE v_kt INT(10) DEFAULT 0;
	
	SELECT COUNT(*) INTO v_kt FROM dm_nhanvien WHERE p_taikhoan = TAI_KHOAN AND p_matkhau = PASSWORD and TRANGTHAI = 1;
	
	IF v_kt = 0 THEN
		SELECT '-1' AS MA_NHAN_VIEN,'-1' AS MA_DON_VI, '-1' AS TEN_NHAN_VIEN,'-1' AS ADMIN,
		'-1' AS TRANGTHAI,'-1' AS SO_DIEN_THOAI, '-1' AS MENU, '' AS TUOI, '' AS DIA_CHI, '' AS GIOI_TINH, '' AS NGAY_SINH, '' AS SO_CCCD, '' AS TENDONVI, '' as AVATAR, 'Tài khoản không tồn tại' as TAI_KHOAN FROM DUAL;
	ELSE
		SELECT t.MA_NHAN_VIEN, t.MA_DON_VI, t.TEN_NHAN_VIEN, t.ADMIN, t.TRANGTHAI, t.SO_DIEN_THOAI, t.MENU, t.TUOI, t.DIA_CHI, t.GIOI_TINH, t.NGAY_SINH, t.SO_CCCD, dv.TENDONVI, t.AVATAR, t.TAI_KHOAN
		FROM dm_nhanvien t, dm_donvi dv
		WHERE p_taikhoan = t.TAI_KHOAN AND p_matkhau = t.PASSWORD AND t.MA_DON_VI = dv.ID and t.TRANGTHAI = 1;
	END IF;
END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;