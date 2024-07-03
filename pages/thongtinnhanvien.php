<div class="app-title">
    <div>
        <h1><i class="fa fa-leaf"></i> Thông tin nhân viên</h1>
        <p>Thông tin nhân viên</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="go?page=_main&subP=controlboard" style="color:black !important"><i class="fa fa-home fa-lg"></i></a></li>
        <li class="breadcrumb-item"><a href="go?page=_main&subP=infouser">Thông tin nhân viên</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile mb-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h3 class="mb-3" id="navs">Thông tin chung</h3>
                            <input id="thongtin_idct_vbcc" hidden=true readonly=true>
                            <input id="idct_vbcc_luu_file" hidden=true readonly=true>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 2rem;">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Tên nhân viên</label>
                            <input id="thongtin_hoten" name="thongtin_hoten" class="form-control" type="text" placeholder="" readonly=true>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tuổi</label>
                            <input id="thongtin_tuoi" name="thongtin_tuoi" class="form-control" type="text" placeholder="" readonly=true>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Địa chỉ</label>
                            <input id="thongtin_diachi" name="thongtin_diachi" class="form-control" type="text" placeholder="" readonly=true>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Số điện thoại</label>
                            <input id="thongtin_sodienthoai" name="thongtin_sodienthoai" class="form-control" type="text" placeholder="" readonly=true>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Đơn vị</label>
                            <input id="thongtin_donvi" name="thongtin_donvi" class="form-control" type="text" placeholder="" readonly=true>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0">
                        <div class="form-group">
                            <label class="control-label">Giới tính</label>
                            <select class="form-control" id="thongtin_gioitinh" name="" disabled="true" readonly=true>
                                <option value="0">Nữ</option>
                                <option value="1">Nam</option>
                            </select >
                        </div>
                        <div class="form-group">
                            <label class="control-label">Ngày sinh</label>
                            <input id="thongtin_ngaysinh" name="" class="form-control" type="text" placeholder="" readonly=true>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Dân tộc</label>
                            <select class="form-control" id="thongtin_dantoc" name="" disabled="true" readonly=true>
                                <option value="1">Kinh</option>
                                <option value="2">Hoa</option>
                                <option value="3">Khơ-me</option>
                                <option value="5">Khác</option>
                            </select >
                        </div>
                        <div class="form-group">
                            <label class="control-label">Phòng ban</label>
                            <input id="thongtin_phongban" name="" class="form-control" type="text" placeholder="" readonly=true>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Ghi chú</label>
                            <input id="thongtin_ghichu" name="" class="form-control" type="text" placeholder="" readonly=true>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tile mb-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tile-title-w-btn">
                            <h3 class="title">Danh sách chứng chỉ, chứng nhận</h3>
                            <p>
                                <button id="vbcc_xemdanhsach" name="vbcc_xemdanhsach" class="btn btn-primary icon-btn" style="margin-bottom:2px !important"><i class="fa fa-fw fa-lg fa-play"></i>XEM DANH SÁCH</button>
                                <button id="vbcc_themmoi" name="vbcc_themmoi" class="btn btn-primary icon-btn" style="margin-bottom:2px !important"><i class="fa fa-fw fa-lg fa-plus-circle"></i>THÊM MỚI</button>
                            </p>
                        </div>
                        <div id="list_vanbang_chungchi"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="chitiet_vanbang_chungchi" style="display:none;">
    <div class="tile mb-4">
        <div class="row" style="margin-bottom: 2rem;">
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="control-label">Tên nhân viên</label>
                    <input id="chitiet_hoten" name="" class="form-control" type="text" placeholder="" readonly=true>
                </div>
                <div class="form-group">
                    <label class="control-label">Từ ngày</label>
                    <input id="chitiet_tungay" name="" class="form-control-new" type="text" placeholder="">
                </div>
                <div class="form-group">
                    <label class="control-label">Văn bằng chứng chỉ</label>
                    <input id="chitiet_vbcc" name="" class="form-control" type="text" placeholder="">
                </div>
                <div class="form-group">
                    <label class="control-label">Loại chứng chỉ</label>
                    <input id="chitiet_loaicc" name="" class="form-control" type="text" placeholder="">
                </div>
                <div class="form-group">
                    <label class="control-label">Ngày cấp chứng chỉ</label>
                    <input id="chitiet_ngaycap" name="" class="form-control" type="text" placeholder="">
                </div>
                <div class="form-group">
                    <label class="control-label">Ngày hết hạn</label>
                    <input id="chitiet_ngayhethan" name="" class="form-control" type="text" placeholder="">
                </div>
            </div>
            <div class="col-lg-6 offset-lg-0">
                <div class="form-group">
                    <label class="control-label">Cơ sở đào tạo</label>
                    <input id="chitiet_coso" name="" class="form-control" type="text" placeholder="">
                </div>
                <div class="form-group">
                    <label class="control-label">Đến ngày</label>
                    <input id="chitiet_denngay" name="" class="form-control" type="text" placeholder="">
                </div>
                <div class="form-group">
                    <label class="control-label">Địa điểm đào tạo</label>
                    <input id="chitiet_diadiem" name="" class="form-control" type="text" placeholder="">
                </div>
                <div class="form-group">
                    <label class="control-label">Điểm</label>
                    <input id="chitiet_diemthi" name="" class="form-control" type="text" placeholder="">
                </div>
                <div class="form-group">
                    <label class="control-label">Mức chứng chỉ</label>
                    <input id="chitiet_muccc" name="" class="form-control" type="text" placeholder="">
                </div>
                <div class="form-group">
                    <label class="control-label">Ghi chú</label>
                    <input id="chitiet_ghichu" name="" class="form-control" type="text" placeholder="">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="control-label">File đính kèm</label>
                    <div class="wrapper" id="filedinhkem_upload">
                        <form action="#">
                            <input class="file-input" type="file" name="fileupload" id="fileupload" hidden>
                            <i class="fas fa-cloud-upload-alt"></i>
                            <p>Chọn tệp đính kèm</p>
                        </form>
                        <section class="progress-area"></section>
                    </div>
                    <div class="wrapper" id="filedinhkem_uploaded">
                        <section class="uploaded-area"></section>
                    </div>
                </div>
            </div>
        </div>
        <div class="tile-footer">
            <div class="bs-component" style="margin-left:20px !important">
                <button id="chitiet_vbcc_luu" name="chitiet_vbcc_luu" class="btn btn-primary" type="button" style="margin-bottom:2px !important"><i class="fa fa-fw fa-lg fa-check-circle"></i>LƯU THÔNG TIN</button>
                <button id="chitiet_vbcc_dong" name="chitiet_vbcc_dong" class="btn btn-secondary" type="button" style="margin-bottom:2px !important"><i class="fa fa-fw fa-lg fa-times"></i>ĐÓNG</button>
            </div>
        </div>
    </div>
</div>
<style>
    
</style>
<script type="text/javascript">
    const form = document.querySelector("form"), fileInput = document.querySelector(".file-input"), progressArea = document.querySelector(".progress-area"), uploadedArea = document.querySelector(".uploaded-area");
    var wHeight = $(window).height();
    var wWidht = $(window).width();
    var w_gird = (wWidht/1.29)/5;
    var source_listvbcc;
    var admin = <?php echo $_SESSION["admin"]; ?>;
    var madonvi = <?php echo $_SESSION["madv"]; ?>;
    var manhanvien = <?php echo $_SESSION["manv"]; ?>;
    var tennhanvien = <?php echo "'".$_SESSION["tennv"]."'"; ?>;
    var id_vbcc_luu;
    $(document).ready(function () {
        get_thongtin_chung(madonvi, manhanvien);
        $("#chitiet_tungay").jqxDateTimeInput({ width: '100%', height: '38px', culture: 'vi-VN', template: "primary"});
        $("#chitiet_denngay").jqxDateTimeInput({ width: '100%', height: '38px', culture: 'vi-VN', template: "primary"});
        $("#chitiet_ngaycap").jqxDateTimeInput({ width: '100%', height: '38px', culture: 'vi-VN', template: "primary"});
        $("#chitiet_ngayhethan").jqxDateTimeInput({ width: '100%', height: '38px', culture: 'vi-VN', template: "primary"});
        source_listvbcc = {
            datatype: "json",
            datafields: [
                { name: 'ID_CC'},
                { name: 'MA_DON_VI'},
                { name: 'MA_NHAN_VIEN'},
                { name: 'TU_NGAY'},
                { name: 'DEN_NGAY'},
                { name: 'NGAY_CAP'},
                { name: 'TEN_CHUNGCHI_CHUNGNHAN'},
                { name: 'NGAY_HET_HAN'}
            ],
            url: 'go?for=load_list_vbcc&madonvi=' + madonvi + '&manhanvien=' + manhanvien,
            cache: false,
            pagesize: 50,
            pager: function (pagenum, pagesize, oldpagenum) {
            }
        };
        var dataAdapter = new $.jqx.dataAdapter(source_listvbcc);
        $("#list_vanbang_chungchi").jqxGrid({
            source: dataAdapter,
            width: '100%',
            height: '450',
            source: dataAdapter,
            columnsresize: false,
            // showfilterrow: true,
            filterable: true,
            editable: false,
            selectionmode: 'singlerow',
            showstatusbar: true,
            statusbarheight: 32,
            showaggregates: true,
            pageable: true,
            pagermode: 'simple',
            columns: [
                {
                    text: '#', datafield: '', align: 'center', cellsalign: 'center',
                    columntype: 'number', width: 50,
                    cellsrenderer: function (row, column, value) {
                        return "<div style='margin-top:8px;text-align: center;display: flex;justify-content: center;align-items: center;'>" + (value + 1) + "</div>";
                    }
                },
                { text: 'ID', datafield: 'ID_CC', width: w_gird, align: 'center', cellsalign: 'center', hidden: true},
                { text: 'Mã đơn vị', datafield: 'MA_DON_VI', width: w_gird, align: 'center', cellsalign: 'center', hidden: true},
                { text: 'Mã nhân viên', datafield: 'MA_NHAN_VIEN', width: w_gird, align: 'center', cellsalign: 'left', hidden: true},
                { text: 'Từ ngày', datafield: 'TU_NGAY', width: w_gird, align: 'center', cellsalign: 'center'},
                { text: 'Đến ngày', datafield: 'DEN_NGAY', width: w_gird, align: 'center', cellsalign: 'center'},
                { text: 'Ngày cấp', datafield: 'NGAY_CAP', width: w_gird, align: 'center', cellsalign: 'center'},
                { text: 'Chứng chỉ, chứng nhận', datafield: 'TEN_CHUNGCHI_CHUNGNHAN', width: w_gird, align: 'center', cellsalign: 'center'},
                { text: 'Ngày hết hạn', datafield: 'NGAY_HET_HAN', width: w_gird, align: 'center', cellsalign: 'center'}
            ]
        });
        $('#list_vanbang_chungchi').on('rowclick', function (event) {
            var args = event.args;
            var rowBoundIndex = args.rowindex;
            var selectedRowData_dsvbcc = $('#list_vanbang_chungchi').jqxGrid('getrowdata', rowBoundIndex);
            $("#thongtin_idct_vbcc").val(selectedRowData_dsvbcc.ID_CC);
        });
        $('#list_vanbang_chungchi').on('rowdoubleclick', function (event) {
            var args = event.args;
            var rowBoundIndex = args.rowindex;
            var selectedRowData_dsvbcc = $('#list_vanbang_chungchi').jqxGrid('getrowdata', rowBoundIndex);
            modal_themvbcc.open();
            load_thongtin_vbcc(selectedRowData_dsvbcc.ID_CC, madonvi, manhanvien);
            $("#chitiet_hoten").val(tennhanvien);
        });
        $("#vbcc_xemdanhsach").click(function(){
            load_ds_vbcc();
        });
        var modal_themvbcc = new jBox('Modal', {
            title: "VĂN BẰNG CHỨNG CHỈ",
            overlay: true,
            width: window.innerWidth/1.05,
            height: window.innerHeight/1.15  ,
            responsiveWidth: true,
            content: $('#chitiet_vanbang_chungchi'),
            animation: {
                open: 'move:right',
                close: 'slide:top'
            },
            position: {
                x: 'center'
            },
            draggable: 'title',
            closeButton: 'title',
            fixed: true,
            closeOnClick: false,
            zIndex: 2222
        });
        $("#vbcc_themmoi").click(function(){
            var status = action_input(false);
            if (status) {
                modal_themvbcc.open();
                action_reset();
            }
        });
        $("#chitiet_vbcc_luu").click(function(){
            luu_thongtin_vbcc("1");
        });
        $("#chitiet_vbcc_dong").click(function(){
            modal_themvbcc.close();
        });
        form.addEventListener("click", () =>{
            fileInput.click();
        });

        fileInput.onchange = ({target})=>{
            let file = target.files[0];
            if(file){
                let fileName = file.name;
                if(fileName.length >= 12){
                    let splitName = fileName.split('.');
                    fileName = splitName[0].substring(0, 13) + "... ." + splitName[1];
                }
                uploadFile(fileName);
            }
        };        
    });
    function load_ds_vbcc(){
        var url_dsvbcc = "go?for=load_list_vbcc&madonvi=" + madonvi + "&manhanvien=" + manhanvien;
        source_listvbcc.url = url_dsvbcc;
        $("#list_vanbang_chungchi").jqxGrid('updatebounddata');
    }
    function action_input(status){
        $(".form-group input").prop("disabled", status);
        $(".form-group select").prop("disabled", status);
        $("table input").prop("disabled", status);
        return true;
    }
    function action_reset(){
        $("#chitiet_hoten").val(tennhanvien);
        $("#chitiet_tungay").val("");
        $("#chitiet_denngay").val("");
        $("#chitiet_coso").val("");
        $("#chitiet_vbcc").val("");
        $("#chitiet_diadiem").val("");
        $("#chitiet_loaicc").val("");
        $("#chitiet_diemthi").val("");
        $("#chitiet_ngaycap").val("");
        $("#chitiet_muccc").val("");
        $("#chitiet_ngayhethan").val("");
        $("#chitiet_ghichu").val("");
        $("#chitiet_filekem").val("");
    }
    function get_info_farm(madonvi, id, manongho, manhanvien){
        $("#vungtrong_nongho").val(manongho);
        $.ajax({
            type: 'POST',
            url: 'go',
            data: {
                for: "get_thongtin_vungtrong_ct",
                madonvi: madonvi,
                idvungtrong: id,
                manongho: manongho,
                manhanvien: manhanvien
            }
        }).done(function(data){
            if (data.length > 0) {
                var value = JSON.parse(data);
                $("#vungtrong_hoten").val(value[0].TEN_NONG_HO);
                $("#vungtrong_tuoi").val(value[0].TUOI);
                var loaidat = (value[0].LOAI_DAT).split("^^");
                $("#vungtrong_loaidat_phusa").prop("checked", loaidat.includes("1"));
                $("#vungtrong_loaidat_man").prop("checked", loaidat.includes("2"));
            }
        });
    }
    function get_thongtin_chung(madonvi, manhanvien){
        $.ajax({
            type: 'POST',
            url: 'go',
            data: {
                for: "get_thongtin_nhanvien",
                madonvi: madonvi,
                manhanvien: manhanvien
            }
        }).done(function(data){
            var value = JSON.parse(data);
            if (value.length === 0) {
                $("#thongtin_hoten").val("");
                $("#thongtin_tuoi").val("");
                $("#thongtin_diachi").val("");
                $("#thongtin_sodienthoai").val("");
                $("#thongtin_donvi").val("");
                $("#thongtin_gioitinh").val("");
                $("#thongtin_ngaysinh").val("");
                $("#thongtin_dantoc").val("");
                $("#thongtin_phongban").val("");
                $("#thongtin_ghichu").val("");
            } else {
                $("#thongtin_hoten").val(value[0].TEN_NHAN_VIEN);
                $("#thongtin_tuoi").val(value[0].TUOI);
                $("#thongtin_diachi").val(value[0].DIA_CHI);
                $("#thongtin_sodienthoai").val(value[0].SO_DIEN_THOAI);
                $("#thongtin_donvi").val(value[0].TEN_DON_VI);
                $("#thongtin_gioitinh").val(value[0].GIOI_TINH);
                $("#thongtin_ngaysinh").val(value[0].NGAY_SINH);
                $("#thongtin_dantoc").val(value[0].DAN_TOC);
                $("#thongtin_phongban").val(value[0].TEN_PHONG_BAN);
                $("#thongtin_ghichu").val(value[0].GHI_CHU);
            }
        });
    }
    function uploadFile(name){
        let xhr = new XMLHttpRequest();
        xhr.open('POST', "go", true);
        xhr.upload.addEventListener("progress", ({loaded, total}) =>{
            let fileLoaded = Math.floor((loaded / total) * 100);
            let fileTotal = Math.floor(total / 1000);
            let fileSize;
            (fileTotal < 1024) ? fileSize = fileTotal + " KB" : fileSize = (loaded / (1024*1024)).toFixed(2) + " MB";
            let progressHTML = `<li class="row">
                                <i class="fas fa-file-alt"></i>
                                <div class="content">
                                    <div class="details">
                                    <span class="name">${name} • Uploading</span>
                                    <span class="percent">${fileLoaded}%</span>
                                    </div>
                                    <div class="progress-bar">
                                    <div class="progress" style="width: ${fileLoaded}%"></div>
                                    </div>
                                </div>
                                </li>`;
            uploadedArea.classList.add("onprogress");
            progressArea.innerHTML = progressHTML;
            if(loaded == total){
                show_file_uploaded('', madonvi, manhanvien);
                // progressArea.innerHTML = "";
                // let uploadedHTML = `<li class="row">
                //                         <div class="content upload">
                //                         <i class="fas fa-file-alt"></i>
                //                         <div class="details">
                //                             <span class="name">${name} • Uploaded</span>
                //                             <span class="size">${fileSize}</span>
                //                         </div>
                //                         </div>
                //                         <i class="fa fa-check"></i>
                //                     </li>`;
                // uploadedArea.classList.remove("onprogress");
                // uploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML);
            }
        });
        let data = new FormData(form);
        data.append('for', '_upload_file');
        xhr.send(data);
    }
    function luu_thongtin_vbcc(status_thongbao){
        var idct = $("#thongtin_idct_vbcc").val();
        var tungay = $("#chitiet_tungay").val();
        var denngay = $("#chitiet_denngay").val();
        var cosodaotao = $("#chitiet_coso").val();
        var vanbangcc = $("#chitiet_vbcc").val();
        var diadiem = $("#chitiet_diadiem").val();
        var loaichungchi = $("#chitiet_loaicc").val();
        var diem = $("#chitiet_diemthi").val();
        var ngaycapchungchi = $("#chitiet_ngaycap").val();
        var mucchungchi = $("#chitiet_muccc").val();
        var ngayhethan = $("#chitiet_ngayhethan").val();
        var ghichu = $("#chitiet_ghichu").val();
        var filedinhkem = "";
        $.ajax({
            type: 'POST',
            url: 'go',
            data: {
                for: "luu_thongtin_vanbang_chungchi",
                idct: idct,
                madonvi: madonvi,
                tungay: convertDate(tungay),
                denngay: convertDate(denngay),
                cosodaotao: cosodaotao,
                vanbangcc: vanbangcc,
                diadiem: diadiem,
                loaichungchi: loaichungchi,
                diem: diem,
                ngaycapchungchi: convertDate(ngaycapchungchi),
                mucchungchi: mucchungchi,
                ngayhethan: convertDate(ngayhethan),
                ghichu: ghichu,
                filedinhkem: filedinhkem,
                manhanvien: manhanvien
            }
        }).done(function(data){
            var value = JSON.parse(data);
            if(value[0].ketqua > 0) {
                id_vbcc_luu = value[0].ketqua;
                if (status_thongbao == "1") {
                   cute_alert_success("Lưu thông tin thành công!");
                }
                load_ds_vbcc();
            } else {
                if (status_thongbao == "1") {
                    cute_alert_error('Lưu thông tin thất bại!');
                }
            }
        });
    }
    function load_thongtin_vbcc(l_idvbcc,l_madonvi,l_manhanvien){
        $.ajax({
            type: 'POST',
            url: 'go',
            data: {
                for: "load_thongtin_vanbang_chungchi",
                idvbcc: l_idvbcc,
                madonvi: l_madonvi,
                manhanvien: l_manhanvien
            }
        }).done(function(data){
            var value = JSON.parse(data);
            if (Object.keys(value).length > 0) {
                $("#chitiet_tungay").val(value.TU_NGAY);
                $("#chitiet_denngay").val(value.DEN_NGAY);
                $("#chitiet_coso").val(value.CO_SO_DAO_TAO);
                $("#chitiet_vbcc").val(value.CHUNG_CHI_CHUNG_NHAN);
                $("#chitiet_diadiem").val(value.DIA_DIEM_DAO_TAO);
                $("#chitiet_loaicc").val(value.LOAI_VBCC);
                $("#chitiet_diemthi").val(value.DIEM);
                $("#chitiet_ngaycap").val(value.NGAY_CAP);
                $("#chitiet_muccc").val(value.MUC_VBCC);
                $("#chitiet_ngayhethan").val(value.NGAY_HET_HAN);
                $("#chitiet_ghichu").val(value.GHI_CHU);
            } else {
                cute_alert_warning("Không có thông tin! Vui lòng xem lại!");
            }
        });
    }
    function show_file_uploaded(s_idvbcc, s_madonvi, s_manhanvien){
        $.ajax({
            type: 'POST',
            url: 'go',
            data: {
                for: "load_file_uploaded",
                idvbcc: s_idvbcc,
                madonvi: s_madonvi,
                manhanvien: s_manhanvien
            }
        }).done(function(data){
            console.log("Đã show!");
        });
    }
</script>