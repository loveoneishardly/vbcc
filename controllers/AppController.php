<?php
    include_once('./config/db.php');

    class AppController {

        public function FGetThongTinNhanVien($madonvi, $manhanvien){
            $pdo = ConnectDb::getInstance()->getConnection();
            $stmt = $pdo->prepare("call p_load_thongtin_nhanvien(:madonvi,:manhanvien);");
            $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
            $stmt -> bindParam(':manhanvien', $manhanvien, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>