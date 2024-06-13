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
  `CREATE_TIME` datetime DEFAULT NULL,
  `TRANG_THAI` int(2) DEFAULT '1',
  PRIMARY KEY (`ID_FILE`),
  KEY `ID_CC` (`ID_CC`),
  KEY `MA_DON_VI` (`MA_DON_VI`),
  KEY `MA_NHAN_VIEN` (`MA_NHAN_VIEN`),
  CONSTRAINT `vbcc_file_ibfk_2` FOREIGN KEY (`MA_DON_VI`) REFERENCES `dm_donvi` (`ID`),
  CONSTRAINT `vbcc_file_ibfk_3` FOREIGN KEY (`MA_NHAN_VIEN`) REFERENCES `dm_nhanvien` (`MA_NHAN_VIEN`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `vbcc_file` */

insert  into `vbcc_file`(`ID_FILE`,`ID_CC`,`MA_DON_VI`,`MA_NHAN_VIEN`,`TEN_FILE_GOC`,`TEN_HIEN_THI`,`DUONG_DAN`,`CREATE_TIME`,`TRANG_THAI`) values 
(1,NULL,1,1,'rp_phieuphauthuat_thuthuat_new_1718243493.rtf','','uploads/rp_phieuphauthuat_thuthuat_new_1718243493.rtf',NULL,1),
(2,NULL,1,1,'xnt_cld_khochung_1718188384.pdf','','uploads/xnt_cld_khochung_1718188384.pdf','2024-06-13 17:45:32',1),
(3,NULL,1,1,'rp_phieuphauthuat_thuthuat_94003_NEW_1718243598.rtf','','uploads/rp_phieuphauthuat_thuthuat_94003_NEW_1718243598.rtf','2024-06-13 17:55:40',1),
(4,NULL,1,1,'TKDLXMLGUILOI_94002_133626628344767404.xlsx','','uploads/TKDLXMLGUILOI_94002_133626628344767404.xlsx','2024-06-13 17:56:01',1),
(5,NULL,1,1,'File_1718270846024_khongmahoa.xml','','uploads/File_1718270846024_khongmahoa.xml','2024-06-13 17:56:33',1);

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
  `TIME_CREATE` datetime DEFAULT NULL,
  `TIME_UPDATE` datetime DEFAULT NULL,
  `GHI_CHU` varchar(250) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `TRANG_THAI` int(2) DEFAULT '1',
  PRIMARY KEY (`ID_CC`),
  KEY `MA_DON_VI` (`MA_DON_VI`),
  KEY `MA_NHAN_VIEN` (`MA_NHAN_VIEN`),
  CONSTRAINT `vbcc_thongtin_chitiet_ibfk_1` FOREIGN KEY (`MA_DON_VI`) REFERENCES `dm_donvi` (`ID`),
  CONSTRAINT `vbcc_thongtin_chitiet_ibfk_2` FOREIGN KEY (`MA_NHAN_VIEN`) REFERENCES `dm_nhanvien` (`MA_NHAN_VIEN`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

/*Data for the table `vbcc_thongtin_chitiet` */

insert  into `vbcc_thongtin_chitiet`(`ID_CC`,`MA_DON_VI`,`MA_NHAN_VIEN`,`TU_NGAY`,`DEN_NGAY`,`NGAY_CAP`,`CHUNG_CHI_CHUNG_NHAN`,`NGAY_HET_HAN`,`LOAI_VBCC`,`MUC_VBCC`,`CO_SO_DAO_TAO`,`DIA_DIEM_DAO_TAO`,`DIEM`,`TIME_CREATE`,`TIME_UPDATE`,`GHI_CHU`,`TRANG_THAI`) values 
(1,1,1,'2024-06-04','2024-06-04','2024-06-04','VĂN BẰNG 1','2024-06-04',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1),
(2,1,1,'2024-06-07','2024-06-07','2024-06-07','','2024-06-07','','','','','','2024-06-07 17:59:58',NULL,'',1),
(3,1,1,'0000-00-00','0000-00-00','0000-00-00','','0000-00-00','','','','','','2024-06-13 17:06:21',NULL,'',1),
(4,1,1,'0000-00-00','0000-00-00','0000-00-00','','0000-00-00','','','','','','2024-06-13 17:09:46',NULL,'',1),
(5,1,1,'0000-00-00','0000-00-00','0000-00-00','','0000-00-00','','','','','','2024-06-13 17:17:49',NULL,'',1),
(6,1,1,'0000-00-00','0000-00-00','0000-00-00','','0000-00-00','','','','','','2024-06-13 17:20:10',NULL,'',1),
(7,1,1,'0000-00-00','0000-00-00','0000-00-00','','0000-00-00','','','','','','2024-06-13 17:20:56',NULL,'',1);

/* Procedure structure for procedure `p_get_list_vbcc` */

/*!50003 DROP PROCEDURE IF EXISTS  `p_get_list_vbcc` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `p_get_list_vbcc`(
	p_madonvi VARCHAR(250),
	p_manhanvien VARCHAR(250)
)
BEGIN
	select ID_CC, MA_DON_VI, MA_NHAN_VIEN, DATE_FORMAT(TU_NGAY,'%d/%m/%Y') as TU_NGAY, DATE_FORMAT(DEN_NGAY,'%d/%m/%Y') as DEN_NGAY, DATE_FORMAT(NGAY_CAP,'%d/%m/%Y') as NGAY_CAP, CHUNG_CHI_CHUNG_NHAN as TEN_CHUNGCHI_CHUNGNHAN, DATE_FORMAT(NGAY_HET_HAN,'%d/%m/%Y') AS NGAY_HET_HAN
	from vbcc_thongtin_chitiet ct
	where MA_DON_VI  = p_madonvi and MA_NHAN_VIEN = p_manhanvien;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `p_load_file_uploaded` */

/*!50003 DROP PROCEDURE IF EXISTS  `p_load_file_uploaded` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `p_load_file_uploaded`(
	p_idvbc VARCHAR(250),
	p_madonvi VARCHAR(100),
	p_manhanvien VARCHAR(250)
)
BEGIN
	if p_idvbc = '' then
		select * from vbcc_file where MA_DON_VI = p_madonvi and MA_NHAN_VIEN = p_manhanvien and ifnull(ID_CC,'') = '';
	else
		SELECT * FROM vbcc_file WHERE MA_DON_VI = p_madonvi AND MA_NHAN_VIEN = p_manhanvien AND ID_CC = p_idvbc;
	end if;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `p_load_thongtin_nhanvien` */

/*!50003 DROP PROCEDURE IF EXISTS  `p_load_thongtin_nhanvien` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `p_load_thongtin_nhanvien`(
	p_madonvi varchar(250),
	p_manhanvien VARCHAR(250)
)
BEGIN
	select nv.ADMIN, nv.AVATAR, nv.DAN_TOC, nv.DIA_CHI, nv.GHI_CHU, nv.GIOI_TINH, nv.MA_DON_VI, nv.MA_NHAN_VIEN, nv.MA_PHONG_BAN, date_format(nv.NGAY_SINH,'%d/%m/%Y') as NGAY_SINH, nv.SO_CCCD, nv.SO_DIEN_THOAI, nv.TEN_NHAN_VIEN, 
		nv.TRANGTHAI, nv.TUOI, pb.TEN_PHONG_BAN, dv.TENDONVI as TEN_DON_VI
	from dm_nhanvien nv left join dm_phongban pb on nv.ma_phong_ban = pb.ma_phong_ban AND pb.ma_don_vi = nv.ma_don_vi, 
		dm_donvi dv
	where nv.ma_don_vi = p_madonvi and nv.ma_nhan_vien = p_manhanvien and nv.ma_don_vi = dv.ID;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `p_luu_thongtin_file_kemtheo` */

/*!50003 DROP PROCEDURE IF EXISTS  `p_luu_thongtin_file_kemtheo` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `p_luu_thongtin_file_kemtheo`(
	p_madonvi VARCHAR(100),
	p_namefile VARCHAR(250),
	p_manhanvien VARCHAR(250)
)
BEGIN
	DECLARE v_result VARCHAR(50);
	
	insert into vbcc_file(MA_DON_VI, MA_NHAN_VIEN, TEN_FILE_GOC, TEN_HIEN_THI, DUONG_DAN, CREATE_TIME)
	values(p_madonvi, p_manhanvien, p_namefile, '', concat('uploads/',p_namefile), CURRENT_TIMESTAMP());
	
	SELECT ROW_COUNT() INTO v_result;
	
	SELECT v_result AS ketqua;
	
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

/* Procedure structure for procedure `p_luu_thongtin_vbcc` */

/*!50003 DROP PROCEDURE IF EXISTS  `p_luu_thongtin_vbcc` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `p_luu_thongtin_vbcc`(
	p_idct varchar(100),
	p_madonvi varchar(100),
	p_tungay VARCHAR(250),
	p_denngay varchar(250),
	p_cosodaotao VARCHAR(250),
	p_vanbangcc varchar(250),
	p_diadiem VARCHAR(250),
	p_loaichungchi varchar(250),
	p_diem VARCHAR(250),
	p_ngaycapchungchi varchar(250),
	p_mucchungchi VARCHAR(250),
	p_ngayhethan varchar(250),
	p_ghichu VARCHAR(250),
	p_filedinhkem varchar(250),
	p_manhanvien VARCHAR(100)
)
BEGIN
	declare v_check_id_ct varchar(50);
	Declare v_result varchar(50);
	DECLARE v_id_max VARCHAR(50);
	
	select count(*) into v_check_id_ct from vbcc_thongtin_chitiet where ID_CC = p_idct and MA_DON_VI = p_madonvi and MA_NHAN_VIEN = p_manhanvien;
	
	if v_check_id_ct > 0 then	
		update vbcc_thongtin_chitiet
		set  	TU_NGAY = p_tungay,
			DEN_NGAY = p_denngay,
			NGAY_CAP = p_ngaycapchungchi,
			CHUNG_CHI_CHUNG_NHAN = p_vanbangcc,
			NGAY_HET_HAN = p_ngayhethan,
			LOAI_VBCC = p_loaichungchi,
			MUC_VBCC = p_mucchungchi,
			CO_SO_DAO_TAO = p_cosodaotao,
			DIA_DIEM_DAO_TAO = p_diadiem,
			DIEM = p_diem,
			GHI_CHU = p_ghichu
		WHERE ID_CC = p_idct AND MA_DON_VI = p_madonvi AND MA_NHAN_VIEN = p_manhanvien;
		
		SELECT ROW_COUNT() INTO v_result;
	else
		insert into vbcc_thongtin_chitiet(MA_DON_VI, MA_NHAN_VIEN, TU_NGAY, DEN_NGAY, NGAY_CAP, CHUNG_CHI_CHUNG_NHAN, NGAY_HET_HAN, LOAI_VBCC, MUC_VBCC, CO_SO_DAO_TAO, DIA_DIEM_DAO_TAO, DIEM, TIME_CREATE, GHI_CHU)
		values(p_madonvi, p_manhanvien, p_tungay, p_denngay, p_ngaycapchungchi, p_vanbangcc, p_ngayhethan, p_loaichungchi, p_mucchungchi, p_cosodaotao, p_diadiem, p_diem, CURRENT_TIMESTAMP(), p_ghichu);
		
		SELECT ROW_COUNT() INTO v_result;
	end if;
	
	if v_result > 0 then
		select max(ID_CC) into v_id_max from vbcc_thongtin_chitiet;
	else
		set v_id_max = 0;
	end if;
	
	SELECT v_id_max AS ketqua;
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
