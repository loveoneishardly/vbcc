<?php
    session_start();
    include_once('controllers/AppController.php');
    include_once('controllers/TaiKhoanController.php');
    include_once('controllers/DanhMucController.php');
    include_once('controllers/QrCode.php');

    if(isset($_GET['check'])) {
        $check_session = 0;
		if(!isset($_SESSION["sansang"])){
            $check_session = "";
        } else {
            if($_SESSION["sansang"] != "1"){
                $check_session = $_SESSION["sansang"];
            }
        }

        ob_start();

        switch ($_GET['check']) {
            case "_home":
                include("pages/index.php");
            break;
            case "_index":
                include("pages/login.php");
            break;
            default:
                include("pages/ferror.php");
            break;
        }
        echo ob_get_clean();
    }

    if(isset($_POST['for'])) {
        switch ($_POST['for']) {
            case "login":
                $md5pass = md5($_POST['matkhau']);
                $trangthai = (new TaiKhoanController())->FLogin($_POST['taikhoan'], $md5pass);
                echo json_encode($trangthai);
            break;
            case "get_thongtin_nhanvien":
                if(isset($_SESSION["madv"])){
                    $madonvi = $_POST['madonvi'];
                    $manhanvien = $_POST['manhanvien'];
                    $res = (new AppController())->FGetThongTinNhanVien($madonvi, $manhanvien);
                    echo json_encode($res);
                }
            break;
            case "luu_thongtin_vanbang_chungchi":
                if(isset($_SESSION["madv"])){
                    $idct = $_POST['idct'];
                    $madonvi = $_POST['madonvi'];
                    $tungay = $_POST['tungay'];
                    $denngay = $_POST['denngay'];
                    $cosodaotao = $_POST['cosodaotao'];
                    $vanbangcc = $_POST['vanbangcc'];
                    $diadiem = $_POST['diadiem'];
                    $loaichungchi = $_POST['loaichungchi'];
                    $diem = $_POST['diem'];
                    $ngaycapchungchi = $_POST['ngaycapchungchi'];
                    $mucchungchi = $_POST['mucchungchi'];
                    $ngayhethan = $_POST['ngayhethan'];
                    $ghichu = $_POST['ghichu'];
                    $filedinhkem = $_POST['filedinhkem'];
                    $manhanvien = $_POST['manhanvien'];
                    $res = (new AppController())->FLuuThongTinVanBangChungChi($idct, $madonvi, $tungay, $denngay, $cosodaotao, $vanbangcc, $diadiem, $loaichungchi, $diem, $ngaycapchungchi, $mucchungchi, $ngayhethan, $ghichu, $filedinhkem, $manhanvien);
                    echo json_encode($res);
                }
            break;
            case "_upload_file":
                if(isset($_SESSION["madv"])){
                    $madonvi = $_SESSION["madv"];
                    $manhanvien = $_SESSION["manv"];
                    $res = (new AppController())->FLuuFileUpload($madonvi,$manhanvien);
                    echo json_encode($res);
                }
            break;
            case "load_file_uploaded":
                if(isset($_SESSION["madv"])){
                    $id_vbcc = $_POST['idvbcc'];
                    $madonvi = $_POST['madonvi'];
                    $manhanvien = $_POST['manhanvien'];
                    $res = (new AppController())->FLoadFileUploaded($id_vbcc, $madonvi, $manhanvien);
                    echo json_encode($res);
                }
            break;
            case "load_thongtin_vanbang_chungchi":
                if(isset($_SESSION["madv"])){
                    $id_vbcc = $_POST['idvbcc'];
                    $madonvi = $_POST['madonvi'];
                    $manhanvien = $_POST['manhanvien'];
                    $res = (new AppController())->FLoadThongTinVBCC($id_vbcc, $madonvi, $manhanvien);
                    echo json_encode($res);
                }
            break;
            case "get_thongtin_canhtac":
                if(isset($_SESSION["madv"])){
                    echo json_encode($res);
                }
            break;
            case "logout":
                echo (new TaikhoanController())->FLogout_web();
            break;
            case "check_captcha":
                if (isset($_POST['captcha'])){
                    if (strtolower($_SESSION['captcha']) != strtolower(trim($_POST['captcha']))){
                        echo json_encode(array("trangthai" => 'false', "cap" => $_SESSION['captcha']));
                    } else {
                        echo json_encode(array("trangthai" => 'true', "cap" => $_SESSION['captcha']));
                    }
                }
            break;
            case "_taomaqrcode":
                $ID = $_POST['mavungtrong'];
                $res = (new CreateQRCode())->CreateQRcodeVungTrong($ID);
                echo $res;
            break;
            default:
                echo "Chức năng không tồn tại";
            break;
        }
    }

    if(isset($_GET['for'])) {
        switch ($_GET['for']) {
            case "load_list_vbcc":
                if(isset($_SESSION["madv"])){
                    $madonvi = $_GET['madonvi'];
                    $manhanvien = $_GET['manhanvien'];
                    $res = (new AppController())->FGetListVBCC($madonvi, $manhanvien);
                    echo json_encode($res);
                }
            break;
            case "load_list_loaisp":
                $madonvi = $_GET['madonvi'];
                $res = (new DanhMucController())->FDanhSachLoaiSanPham($madonvi);
                echo json_encode($res);
            break;
            case "load_list_vungtrong":
                $madonvi = $_GET['madonvi'];
                $manhanvien = $_GET['manhanvien'];
                $res = (new AppController())->FDanhSachVungTrong($madonvi, $manhanvien);
                echo json_encode($res);
            break;
            case "load_list_kythuatbonphan":
                if(isset($_SESSION["madv"])){
                    $madonvi = $_GET['madonvi'];
                    $idvungtrong = $_GET['idvungtrong'];
                    $manongho = $_GET['manongho'];
                    $res = (new AppController())->FGetListThongTinPhanBon($madonvi, $idvungtrong, $manongho);
                    echo json_encode($res);
                }
            break;
            case "check_captcha":
                if (isset($_POST['captcha'])){
                    if (strtolower($_SESSION['captcha']) != strtolower(trim($_POST['captcha']))){
                        echo json_encode(array("trangthai" => 'false', "cap" => $_SESSION['captcha']));
                    } else {
                        echo json_encode(array("trangthai" => 'true', "cap" => $_SESSION['captcha']));
                    }
                }
            break;
            case "loadlistvungtrong":
                $iddonvi = $_GET['iddonvi'];
                $res = (new AppController())->LoadListVungTrong($iddonvi);
                echo json_encode($res);
            break;
            default:
                echo "Chức năng không tồn tại";
            break;
        }
    }

    if(isset($_GET['page'])) {
        
        if(!isset($_SESSION["sansang"])){
                header("Location: go?check=_home");
        } else {
            if($_SESSION["sansang"] != "1"){
                header("Location: go?check=_home");
            }
        }
        
        ob_start();

        switch ($_GET['page']) {
            case "_home":
                include("pages/index.php");
            break;
            case "_main":
                include("pages/manage.php");
            break;
            case "_upload_file":
                include("pages/upload.php");
            break;
            default:
                include("pages/ferror.php");
            break;
        }
        echo ob_get_clean();
    }
?>