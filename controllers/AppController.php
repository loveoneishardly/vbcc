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

        public function FGetListVBCC($madonvi, $manhanvien){
            $pdo = ConnectDb::getInstance()->getConnection();
            $stmt = $pdo->prepare("call p_get_list_vbcc(:madonvi,:manhanvien);");
            $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
            $stmt -> bindParam(':manhanvien', $manhanvien, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function FLuuThongTinVanBangChungChi($idct, $madonvi, $tungay, $denngay, $cosodaotao, $vanbangcc, $diadiem, $loaichungchi, $diem, $ngaycapchungchi, $mucchungchi, $ngayhethan, $ghichu, $filedinhkem, $manhanvien){
            $pdo = ConnectDb::getInstance()->getConnection();
            $stmt = $pdo->prepare("call p_luu_thongtin_vbcc(:idct, :madonvi,:tungay,:denngay,:cosodaotao,:vanbangcc,:diadiem,:loaichungchi,:diem,:ngaycapchungchi,:mucchungchi,:ngayhethan,:ghichu,:filedinhkem,:manhanvien);");
            $stmt -> bindParam(':idct', $idct, PDO::PARAM_STR);
            $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
            $stmt -> bindParam(':tungay', $tungay, PDO::PARAM_STR);
            $stmt -> bindParam(':denngay', $denngay, PDO::PARAM_STR);
            $stmt -> bindParam(':cosodaotao', $cosodaotao, PDO::PARAM_STR);
            $stmt -> bindParam(':vanbangcc', $vanbangcc, PDO::PARAM_STR);
            $stmt -> bindParam(':diadiem', $diadiem, PDO::PARAM_STR);
            $stmt -> bindParam(':loaichungchi', $loaichungchi, PDO::PARAM_STR);
            $stmt -> bindParam(':diem', $diem, PDO::PARAM_STR);
            $stmt -> bindParam(':ngaycapchungchi', $ngaycapchungchi, PDO::PARAM_STR);
            $stmt -> bindParam(':mucchungchi', $mucchungchi, PDO::PARAM_STR);
            $stmt -> bindParam(':ngayhethan', $ngayhethan, PDO::PARAM_STR);
            $stmt -> bindParam(':ghichu', $ghichu, PDO::PARAM_STR);
            $stmt -> bindParam(':filedinhkem', $filedinhkem, PDO::PARAM_STR);
            $stmt -> bindParam(':manhanvien', $manhanvien, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function FLuuFileUpload($madonvi,$manhanvien){
            $destination_path = getcwd().DIRECTORY_SEPARATOR;
            $name_file = basename( $_FILES["fileupload"]["name"]);
            $target_path = $destination_path . 'uploads/'. $name_file;
            move_uploaded_file($_FILES['fileupload']['tmp_name'], $target_path);
            $pdo = ConnectDb::getInstance()->getConnection();
            $stmt = $pdo->prepare("call p_luu_thongtin_file_kemtheo(:madonvi,:namefile,:manhanvien);");
            $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
            $stmt -> bindParam(':namefile', $name_file, PDO::PARAM_STR);
            $stmt -> bindParam(':manhanvien', $manhanvien, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function FLoadFileUploaded($id_vbcc, $madonvi, $manhanvien){
            $pdo = ConnectDb::getInstance()->getConnection();
            $stmt = $pdo->prepare("call p_load_file_uploaded(:id_vbcc,:madonvi,:manhanvien);");
            $stmt -> bindParam(':id_vbcc', $id_vbcc, PDO::PARAM_STR);
            $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
            $stmt -> bindParam(':manhanvien', $manhanvien, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function FLoadThongTinVBCC($id_vbcc, $madonvi, $manhanvien){
            $pdo = ConnectDb::getInstance()->getConnection();
            $stmt = $pdo->prepare("call p_load_thongtin_vbcc(:id_vbcc,:madonvi,:manhanvien);");
            $stmt -> bindParam(':id_vbcc', $id_vbcc, PDO::PARAM_STR);
            $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
            $stmt -> bindParam(':manhanvien', $manhanvien, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }
?>