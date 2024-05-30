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
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 2rem;">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Tên nhân viên</label>
                            <input id="vungtrong_hoten" name="" class="form-control" type="text" placeholder="" readonly=true>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tuổi</label>
                            <input id="vungtrong_tuoi" name="" class="form-control" type="text" placeholder="" readonly=true>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Địa chỉ</label>
                            <input id="vungtrong_diachi" name="" class="form-control" type="text" placeholder="" readonly=true>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Số điện thoại</label>
                            <input id="vungtrong_hocvan" name="" class="form-control" type="text" placeholder="" readonly=true>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Đơn vị</label>
                            <input id="vungtrong_sodienthoai" name="" class="form-control" type="text" placeholder="" readonly=true>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0">
                        <div class="form-group">
                            <label class="control-label">Giới tính</label>
                            <select class="form-control" id="vungtrong_gioitinh" name="" disabled="true" readonly=true>
                                <option value="0">Nữ</option>
                                <option value="1">Nam</option>
                            </select >
                        </div>
                        <div class="form-group">
                            <label class="control-label">Ngày sinh</label>
                            <input id="vungtrong_hoten" name="" class="form-control" type="text" placeholder="" readonly=true>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Dân tộc</label>
                            <select class="form-control" id="vungtrong_dantoc" name="" disabled="true" readonly=true>
                                <option value="1">Kinh</option>
                                <option value="2">Hoa</option>
                                <option value="3">Khơ-me</option>
                                <option value="5">Khác</option>
                            </select >
                        </div>
                        <div class="form-group">
                            <label class="control-label">Phòng ban</label>
                            <input id="vungtrong_dientichdat" name="" class="form-control" type="text" placeholder="" readonly=true>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Ghi chú</label>
                            <input id="vungtrong_dientichdat" name="" class="form-control" type="text" placeholder="" readonly=true>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tile mb-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tile-title-w-btn">
                            <h3 class="title">Danh sách chứng chỉ, chứng nhận</h3>
                            <input id="vungtrong_id" name="vungtrong_id" hidden="true" />
                            <input id="vungtrong_manongho" name="vungtrong_manongho" hidden="true"  />
                            <p>
                                <button id="vungtrong_xemdanhsach" name="vungtrong_xemdanhsach" class="btn btn-primary icon-btn" style="margin-bottom:2px !important"><i class="fa fa-fw fa-lg fa-play"></i>XEM DANH SÁCH</button>
                                <button id="vungtrong_them" name="vungtrong_them" class="btn btn-primary icon-btn" style="margin-bottom:2px !important"><i class="fa fa-fw fa-lg fa-plus-circle"></i>THÊM MỚI</button>
                            </p>
                        </div>
                        <div id="list_vungtrong"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="thongtinvungtrong" style="display:none;">
    <div class="tile mb-4">
        <div class="row" style="margin-bottom: 2rem;">
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="control-label">Tên nhân viên</label>
                    <input id="vungtrong_hoten" name="" class="form-control" type="text" placeholder="" readonly=true>
                </div>
                <div class="form-group">
                    <label class="control-label">Văn bằng chứng chỉ</label>
                    <input id="vungtrong_tuoi" name="" class="form-control" type="text" placeholder="" readonly=true>
                </div>
                <div class="form-group">
                    <label class="control-label">Loại chứng chỉ</label>
                    <input id="vungtrong_diachi" name="" class="form-control" type="text" placeholder="" readonly=true>
                </div>
                <div class="form-group">
                    <label class="control-label">Mức chứng chỉ</label>
                    <input id="vungtrong_hocvan" name="" class="form-control" type="text" placeholder="" readonly=true>
                </div>
                <div class="form-group">
                    <label class="control-label">File đính kèm</label>
                    <input id="vungtrong_dientichdat" name="" class="form-control" type="text" placeholder="">
                </div>
            </div>
            <div class="col-lg-6 offset-lg-0">
                <div class="form-group">
                    <label class="control-label">Cơ sở đào tạo</label>
                    <input id="vungtrong_thanhvien" name="" class="form-control" type="text" placeholder="" readonly=true>
                </div>
                <div class="form-group">
                    <label class="control-label">Địa điểm đào tạo</label>
                    <input id="vungtrong_thanhvien_laodong" name="" class="form-control" type="text" placeholder="" readonly=true>
                </div>
                <div class="form-group">
                    <label class="control-label">Điểm</label>
                    <input id="vungtrong_thanhvien_laodong" name="" class="form-control" type="text" placeholder="" readonly=true>
                </div>
                <div class="form-group">
                    <label class="control-label">Ngày cấp chứng chỉ</label>
                    <input id="vungtrong_thanhvien_laodong" name="" class="form-control" type="text" placeholder="" readonly=true>
                </div>
                <div class="form-group">
                    <label class="control-label">Thời hạn áp dụng</label>
                    <input id="vungtrong_thanhvien_laodong" name="" class="form-control" type="text" placeholder="" readonly=true>
                </div>
            </div>
        </div>
        <div class="tile-footer">
            <div class="bs-component" style="margin-left:20px !important">
                <button id="vungtrong_luuthongtin" name="vungtrong_luuthongtin" class="btn btn-primary" type="button" style="margin-bottom:2px !important"><i class="fa fa-fw fa-lg fa-check-circle"></i>LƯU THÔNG TIN</button>
                <button id="vungtrong_close" name="vungtrong_close" class="btn btn-secondary" type="button" style="margin-bottom:2px !important"><i class="fa fa-fw fa-lg fa-times"></i>ĐÓNG</button>
            </div>
        </div>
    </div>
</div>
<style>
    
</style>
<script type="text/javascript">
    var wHeight = $(window).height();
    var wWidht = $(window).width();
    var w_gird = (wWidht/1.29)/5;
    var source_listvungtrong;
    var admin = <?php echo $_SESSION["admin"]; ?>;
    var madonvi = <?php echo $_SESSION["madv"]; ?>;
    var manhanvien = <?php echo $_SESSION["manv"]; ?>;
    var tennhanvien = <?php echo "'".$_SESSION["tennv"]."'"; ?>;
    $(document).ready(function () {
        $('#vungtrong_thoigian_batdautrong').datepicker({
            format: "dd/mm/yyyy",
            // autoclose: true,
            todayHighlight: true,
            language: 'vi',
            todayBtn: 'linked',
            clearBtn: true
        });
        $('#vungtrong_thoigianbatdau').datepicker({
            format: "dd/mm/yyyy",
            // autoclose: true,
            todayHighlight: true,
            language: 'vi',
            todayBtn: 'linked',
            clearBtn: true
        });
        $('#vungtrong_thoigianketthuc').datepicker({
            format: "dd/mm/yyyy",
            // autoclose: true,
            todayHighlight: true,
            language: 'vi',
            todayBtn: 'linked',
            clearBtn: true
        });
        $('#vungtrong_ngaysanxuat').datepicker({
            format: "dd/mm/yyyy",
            // autoclose: true,
            todayHighlight: true,
            language: 'vi',
            todayBtn: 'linked',
            clearBtn: true
        });
        $('#vungtrong_ngaythuhoach').datepicker({
            format: "dd/mm/yyyy",
            // autoclose: true,
            todayHighlight: true,
            language: 'vi',
            todayBtn: 'linked',
            clearBtn: true
        });
        source_listvungtrong = {
            datatype: "json",
            datafields: [
                { name: 'ID_LIST'},
                { name: 'MA_DON_VI'},
                { name: 'MA_NHAN_VIEN'},
                { name: 'TU_NGAY'},
                { name: 'DEN_NGAY'},
                { name: 'NGAY_CAP'},
                { name: 'TEN_CHUNGCHI_CHUNGNHAN'},
                { name: 'NGAY_HET_HAN'}
            ],
            url: 'go?for=load_list_vungtrong&madonvi=' + madonvi + '&manhanvien=' + manhanvien,
            cache: false,
            pagesize: 50,
            pager: function (pagenum, pagesize, oldpagenum) {
            }
        };
        var dataAdapter = new $.jqx.dataAdapter(source_listvungtrong);
        $("#list_vungtrong").jqxGrid({
            source: dataAdapter,
            width: '100%',
            height: '450',
            source: dataAdapter,
            columnsresize: false,
            showfilterrow: true,
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
                { text: 'ID', datafield: 'ID_LIST', width: w_gird, align: 'center', cellsalign: 'center', hidden: true},
                { text: 'Mã đơn vị', datafield: 'MA_DON_VI', width: w_gird, align: 'center', cellsalign: 'center', hidden: true},
                { text: 'Mã nhân viên', datafield: 'MA_NHAN_VIEN', width: w_gird, align: 'center', cellsalign: 'left', hidden: true},
                { text: 'Từ ngày', datafield: 'TU_NGAY', width: w_gird, align: 'center', cellsalign: 'left'},
                { text: 'Đến ngày', datafield: 'DEN_NGAY', width: w_gird, align: 'center', cellsalign: 'left'},
                { text: 'Ngày cấp', datafield: 'NGAY_CAP', width: w_gird, align: 'center', cellsalign: 'center'},
                { text: 'Chứng chỉ, chứng nhận', datafield: 'TEN_CHUNGCHI_CHUNGNHAN', width: w_gird, align: 'center', cellsalign: 'center'},
                { text: 'Ngày hết hạn', datafield: 'NGAY_HET_HAN', width: w_gird, align: 'center', cellsalign: 'center'}
            ]
        });
        $('#list_vungtrong').on('rowclick', function (event) {
            var args = event.args;
            var rowBoundIndex = args.rowindex;
            var selectedRowData_dsvungtrong = $('#list_vungtrong').jqxGrid('getrowdata', rowBoundIndex);
            $("#vungtrong_id").val(selectedRowData_dsvungtrong.ID_VUNG_TRONG);
            $("#vungtrong_manongho").val(selectedRowData_dsvungtrong.MA_NONG_HO);
        });
        $("#vungtrong_xemdanhsach").click(function(){
            load_ds_vungtrong();
        });
        var modal_thongtinvungtrong = new jBox('Modal', {
            title: "VĂN BẰNG CHỨNG CHỈ",
            overlay: true,
            width: window.innerWidth/1.05,
            height: window.innerHeight/1.5,
            responsiveWidth: true,
            content: $('#thongtinvungtrong'),
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
            zIndex: 999999
        });
        $("#vungtrong_them").click(function(){
            var status = action_input(false);
            if (status) {
                modal_thongtinvungtrong.open();
                action_reset();
            }
        });
        $("#vungtrong_sua").click(function(){
            var idvungtrong = $("#vungtrong_id").val();
            var manongho = $("#vungtrong_manongho").val();
            if (idvungtrong){
                var status = action_input(false);
                if (status) {
                    modal_thongtinvungtrong.open();
                    get_info_farm(madonvi, idvungtrong, manongho, manhanvien);
                }
            } else {
                cute_alert_warning("Chưa chọn vùng trồng nào!");
            }
        });
        $("#vungtrong_chitiet").click(function(){
            var idvungtrong = $("#vungtrong_id").val();
            var manongho = $("#vungtrong_manongho").val();
            if (idvungtrong){
                var status = action_input(true);
                if (status) {
                    modal_thongtinvungtrong.open();
                    get_info_farm(madonvi, idvungtrong, manongho, manhanvien);
                }
            } else {
                cute_alert_warning("Chưa chọn vùng trồng nào!");
            }
        });
        $("#vungtrong_nongho").change(function (evt) {
            manongho = $("#vungtrong_nongho").val();
            $.ajax({
                type: 'POST',
                url: 'go',
                data: {
                    for: "get_thongtin_nongho",
                    madonvi: madonvi,
                    manongho: manongho
                }
            }).done(function(data){
                var value = JSON.parse(data);
                if (value.length === 0) {
                    $("#vungtrong_hoten").val("");
                    $("#vungtrong_tuoi").val("");
                    $("#vungtrong_diachi").val("");
                    $("#vungtrong_hocvan").val("");
                    $("#vungtrong_thanhvien").val("");
                    $("#vungtrong_thanhvien_laodong").val("");
                    $("#vungtrong_gioitinh").val("");
                    $("#vungtrong_dantoc").val("");
                    $("#vungtrong_sudung_dienthoai").val("");
                    $("#vungtrong_sodienthoai").val("");
                    $("#vungtrong_zalo").val("");
                } else {
                    $("#vungtrong_hoten").val(value[0].TEN_NONG_HO);
                    $("#vungtrong_tuoi").val(value[0].TUOI);
                    $("#vungtrong_diachi").val(value[0].DIA_CHI);
                    $("#vungtrong_hocvan").val(value[0].TRINH_DO);
                    $("#vungtrong_thanhvien").val(value[0].THANH_VIEN_GIA_DINH);
                    $("#vungtrong_thanhvien_laodong").val(value[0].TRONG_TUOI_LAO_DONG);
                    $("#vungtrong_gioitinh").val(value[0].GIOI_TINH);
                    $("#vungtrong_dantoc").val(value[0].DAN_TOC);
                    $("#vungtrong_sudung_dienthoai").val(value[0].SU_DUNG_DT);
                    $("#vungtrong_sodienthoai").val(value[0].SO_DIEN_THOAI);
                    $("#vungtrong_zalo").val(value[0].USE_ZALO);
                }
            });
        });
        $("#vungtrong_luuthongtin").click(function(){
            var mavungtrong_id = $("#vungtrong_id").val();
            var manongho = $("#vungtrong_nongho").val();
            var tennongho = $("#vungtrong_hoten").val();
            var tuoi = $("#vungtrong_tuoi").val();
            var diachi = $("#vungtrong_diachi").val();
            var hocvan = $("#vungtrong_hocvan").val();
            var dientichdat = $("#vungtrong_dientichdat").val();
            var thannvien = $("#vungtrong_thanhvien").val();
            var thannvienlaodong = $("#vungtrong_thanhvien_laodong").val();
            var gioitinh = $("#vungtrong_gioitinh").val();
            var dantoc = $("#vungtrong_dantoc").val();
            var sudungdt = $("#vungtrong_sudung_dienthoai").val();
            var sodienthoai = $("#vungtrong_sodienthoai").val();
            var usezalo = $("#vungtrong_zalo").val();
            var kinhnghiem = $("#vungtrong_kinhnghiem").val();
            var tuoicaytrong = $("#vungtrong_tuoicaytrong").val();
            var doituongtrong = $("#vungtrong_doituong").val();
            var loaidat = "^^";
            var d_phusa = $("#vungtrong_loaidat_phusa").prop("checked") == true ? "1" : "0";
            if (d_phusa == "1") {
                loaidat += d_phusa + "^^"
            }
            var d_man = $("#vungtrong_loaidat_man").prop("checked") == true ? "2" : "0";
            if (d_man == "2") {
                loaidat += d_man + "^^"
            }
            var d_phen = $("#vungtrong_loaidat_phen").prop("checked") == true ? "3" : "0";
            if (d_phen == "3") {
                loaidat += d_phen + "^^"
            }
            var sacaudat = "^^";
            var s_thit = $("#vungtrong_sacaudat_thit").prop("checked") == true ? "1" : "0";
            if (s_thit == "1") {
                sacaudat += s_thit + "^^"
            }
            var s_set = $("#vungtrong_sacaudat_set").prop("checked") == true ? "2" : "0";
            if (s_set == "2") {
                sacaudat += s_set + "^^"
            }
            var s_cat = $("#vungtrong_sacaudat_cat").prop("checked") == true ? "3" : "0";
            if (s_cat == "3") {
                sacaudat += s_cat + "^^"
            }
            var s_thitphacat = $("#vungtrong_sacaudat_thitphacat").prop("checked") == true ? "4" : "0";
            if (s_thitphacat == "4") {
                sacaudat += s_thitphacat + "^^"
            }
            var datkhac = $("#vungtrong_khac").val();
            var dodaytang = $("#vungtrong_doday_tang").val();
            var doph = $("#vungtrong_ph").val();
            var mucnuocngam = $("#vungtrong_mucnuocngam").val();
            var nuocngapt1=  $("#vungtrong_ngap_t1").val();
            var nuocngapt2 =  $("#vungtrong_ngap_t2").val();
            var nuocngapt3 =  $("#vungtrong_ngap_t3").val();
            var nuocngapt4 =  $("#vungtrong_ngap_t4").val();
            var nuocngapt5 =  $("#vungtrong_ngap_t5").val();
            var nuocngapt6 =  $("#vungtrong_ngap_t6").val();
            var nuocngapt7 =  $("#vungtrong_ngap_t7").val();
            var nuocngapt8 =  $("#vungtrong_ngap_t8").val();
            var nuocngapt9 =  $("#vungtrong_ngap_t9").val();
            var nuocngapt10 =  $("#vungtrong_ngap_t10").val();
            var nuocngapt11 =  $("#vungtrong_ngap_t11").val();
            var nuocngapt12 =  $("#vungtrong_ngap_t12").val();
            var nuocphent1 =  $("#vungtrong_phen_t1").val();
            var nuocphent2 =  $("#vungtrong_phen_t2").val();
            var nuocphent3 =  $("#vungtrong_phen_t2").val();
            var nuocphent4 =  $("#vungtrong_phen_t3").val();
            var nuocphent5 =  $("#vungtrong_phen_t4").val();
            var nuocphent6 =  $("#vungtrong_phen_t5").val();
            var nuocphent7 =  $("#vungtrong_phen_t6").val();
            var nuocphent8 =  $("#vungtrong_phen_t7").val();
            var nuocphent9 =  $("#vungtrong_phen_t8").val();
            var nuocphent10 =  $("#vungtrong_phen_t10").val();
            var nuocphent11 =  $("#vungtrong_phen_t11").val();
            var nuocphent12 =  $("#vungtrong_phen_t12").val();
            var nuocmant1 =  $("#vungtrong_man_t1").val();
            var nuocmant2 =  $("#vungtrong_man_t2").val();
            var nuocmant3 =  $("#vungtrong_man_t3").val();
            var nuocmant4 =  $("#vungtrong_man_t4").val();
            var nuocmant5 =  $("#vungtrong_man_t5").val();
            var nuocmant6 =  $("#vungtrong_man_t6").val();
            var nuocmant7 =  $("#vungtrong_man_t7").val();
            var nuocmant8 =  $("#vungtrong_man_t8").val();
            var nuocmant9 =  $("#vungtrong_man_t9").val();
            var nuocmant10 =  $("#vungtrong_man_t10").val();
            var nuocmant11 =  $("#vungtrong_man_t11").val();
            var nuocmant12 =  $("#vungtrong_man_t12").val();
            var thoigianbatdautrong = $("#vungtrong_thoigian_batdautrong").val();
            var gionggannhat = $("#vungtrong_gionggannhat").val();
            var xacnhangiong = $("#vungtrong_xacnhangiong").val();
            var chephamxuly = $("#vungtrong_chepham_xuly").val();
            var nguongocgiong = "^^";
            var giong_tusx = $("#vungtrong_nguocgoc_giong_tusx").prop("checked") == true ? "1" : "0";
            if (giong_tusx == "1") {
                nguongocgiong += giong_tusx + "^^"
            }
            var giong_trongtinh = $("#vungtrong_nguocgoc_giong_trongtinh").prop("checked") == true ? "2" : "0";
            if (giong_trongtinh == "2") {
                nguongocgiong += giong_trongtinh + "^^"
            }
            var giong_ngoaitinh = $("#vungtrong_nguocgoc_giong_ngoaitinh").prop("checked") == true ? "3" : "0";
            if (giong_ngoaitinh == "3") {
                nguongocgiong += giong_ngoaitinh + "^^"
            }
            var xulycaygiong = $("#vungtrong_xuly_caygiong").val();
            var mucdichxuly = $("#vungtrong_mucdich_xuly").val();
            var matdo = $("#vungtrong_matdo").val();
            var khoangcach = $("#vungtrong_khoangcach").val();
            var timedauthuhoach = $("#vungtrong_time_dau_thuhoach").val();
            var solanthuhoach = $("#vungtrong_solan_thuhoach").val();
            var trongluongtrai = $("#vungtrong_trongluongtrai").val();
            var cachxulythuhoach = $("#vungtrong_thuhoach_cachxuly").val();
            var nsmuathuan = $("#vungtrong_ns_muathuan").val();
            var slmuathuan = $("#vungtrong_sl_muathuan").val();
            var dacdiem = $("#vungtrong_thuhoach_dacdiem").val();
            var phanloaityle = $("#vungtrong_phanloai_tyle").val();
            var xulydongloat = $("#vungtrong_thuhoach_xulydongloat").val();
            var nsmuanghich = $("#vungtrong_ns_muanghich").val();
            var slmuanghich = $("#vungtrong_sl_muanghich").val();
            var giaban = $("#vungtrong_giaban").val();
            var sx_khuvuc = $("#vungtrong_khuvucsx").val();
            var sx_kehoach = $("#vungtrong_kehoachsx").val();
            var sx_thoigianbatdau = $("#vungtrong_thoigianbatdau").val();
            var sx_muavu = $("#vungtrong_muavu").val();
            var sx_tenvung = $("#vungtrong_tenvung").val();
            var sx_ngaysanxuat = $("#vungtrong_ngaysanxuat").val();
            var sx_thoigiankethuc = $("#vungtrong_thoigianketthuc").val();
            var sx_ghichu = $("#vungtrong_ghichu").val();
            var ngaythuhoach = $("#vungtrong_ngaythuhoach").val();
            var sanluongdukien = $("#vungtrong_sanluong_dukien").val();
            if (manongho == null || manongho == "---") {
                cute_alert_error("Chưa chọn nông hộ!");
            } else if (doituongtrong == null || doituongtrong == " ") {
                cute_alert_error("Chưa chọn loại cây trồng!");
            } else {
                $.ajax({
                    type: 'POST',
                    url: 'go',
                    data: {
                        for: "luu_thongtin_vungtrong",
                        mavungtrong_id: mavungtrong_id,
                        madonvi: madonvi,
                        manongho: manongho,
                        tennongho: tennongho,
                        tuoi: tuoi,
                        diachi: diachi,
                        hocvan: hocvan,
                        dientichdat: dientichdat,
                        thannvien: thannvien,
                        thannvienlaodong: thannvienlaodong,
                        gioitinh: gioitinh,
                        dantoc: dantoc,
                        sudungdt: sudungdt,
                        sodienthoai: sodienthoai,
                        usezalo: usezalo,
                        kinhnghiem: kinhnghiem,
                        tuoicaytrong: tuoicaytrong,
                        doituongtrong: doituongtrong,
                        loaidat: loaidat,
                        sacaudat: sacaudat,
                        datkhac: datkhac,
                        dodaytang: dodaytang,
                        doph: doph,
                        mucnuocngam: mucnuocngam,
                        nuocngapt1: nuocngapt1,
                        nuocngapt2: nuocngapt2,
                        nuocngapt3: nuocngapt3,
                        nuocngapt4: nuocngapt4,
                        nuocngapt5: nuocngapt5,
                        nuocngapt6: nuocngapt6,
                        nuocngapt7: nuocngapt7,
                        nuocngapt8: nuocngapt8,
                        nuocngapt9: nuocngapt9,
                        nuocngapt10: nuocngapt10,
                        nuocngapt11: nuocngapt11,
                        nuocngapt12: nuocngapt12,
                        nuocphent1: nuocphent1,
                        nuocphent2: nuocphent2,
                        nuocphent3: nuocphent3,
                        nuocphent4: nuocphent4,
                        nuocphent5: nuocphent5,
                        nuocphent6: nuocphent6,
                        nuocphent7: nuocphent7,
                        nuocphent8: nuocphent8,
                        nuocphent9: nuocphent9,
                        nuocphent10: nuocphent10,
                        nuocphent11: nuocphent11,
                        nuocphent12: nuocphent12,
                        nuocmant1: nuocmant1,
                        nuocmant2: nuocmant2,
                        nuocmant3: nuocmant3,
                        nuocmant4: nuocmant4,
                        nuocmant5: nuocmant5,
                        nuocmant6: nuocmant6,
                        nuocmant7: nuocmant7,
                        nuocmant8: nuocmant8,
                        nuocmant9: nuocmant9,
                        nuocmant10: nuocmant10,
                        nuocmant11: nuocmant11,
                        nuocmant12: nuocmant12,
                        thoigianbatdautrong: convertDate(thoigianbatdautrong),
                        gionggannhat: gionggannhat,
                        xacnhangiong: xacnhangiong,
                        chephamxuly: chephamxuly,
                        nguongocgiong: nguongocgiong,
                        xulycaygiong: xulycaygiong,
                        mucdichxuly: mucdichxuly,
                        matdo: matdo,
                        khoangcach: khoangcach,
                        timedauthuhoach: timedauthuhoach,
                        solanthuhoach: solanthuhoach,
                        trongluongtrai: trongluongtrai,
                        cachxulythuhoach: cachxulythuhoach,
                        nsmuathuan: nsmuathuan,
                        slmuathuan: slmuathuan,
                        dacdiem: dacdiem,
                        phanloaityle: phanloaityle,
                        xulydongloat: xulydongloat,
                        nsmuanghich: nsmuanghich,
                        slmuanghich: slmuanghich,
                        giaban: giaban,
                        sx_khuvuc: sx_khuvuc,
                        sx_kehoach: sx_kehoach,
                        sx_thoigianbatdau: convertDate(sx_thoigianbatdau),
                        sx_muavu: sx_muavu,
                        sx_tenvung: sx_tenvung,
                        sx_ngaysanxuat: convertDate(sx_ngaysanxuat),
                        sx_thoigiankethuc: convertDate(sx_thoigiankethuc),
                        sx_ghichu: sx_ghichu,
                        ngaythuhoach: convertDate(ngaythuhoach),
                        sanluongdukien: sanluongdukien,
                        manhanvien: manhanvien
                    }
                }).done(function(data){
                    var value = JSON.parse(data);
                    if(value[0].ketqua > 0) {
                        cute_alert_success("Lưu thông tin thành công!");
                        load_ds_vungtrong();
                    } else {
                        cute_alert_error('Lưu thông tin thất bại!');
                    }
                });   
            }
        });
        $("#vungtrong_close").click(function(){
            modal_thongtinvungtrong.close();
        });
    });
    function load_ds_vungtrong(){
        var url_dsnongho = "go?for=load_list_vungtrong&madonvi=" + madonvi + "&manhanvien=" + manhanvien;
        source_listvungtrong.url = url_dsnongho;
        $("#list_vungtrong").jqxGrid('updatebounddata');
    }
    function action_input(status){
        $(".form-group input").prop("disabled", status);
        $(".form-group select").prop("disabled", status);
        $("table input").prop("disabled", status);
        return true;
    }
    function action_reset(){
        $(".form-group input").val("");
        $(".form-group input").prop("checked", false);
        $(".form-group select").val("");
        $("table input").val("");
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
                $("#vungtrong_diachi").val(value[0].DIA_CHI);
                $("#vungtrong_hocvan").val(value[0].TRINH_DO);
                $("#vungtrong_dientichdat").val(value[0].DIEN_TICH_DAT);
                $("#vungtrong_thanhvien").val(value[0].THANH_VIEN_GIA_DINH);
                $("#vungtrong_thanhvien_laodong").val(value[0].TRONG_TUOI_LAO_DONG);
                $("#vungtrong_gioitinh").val(value[0].GIOI_TINH);
                $("#vungtrong_dantoc").val(value[0].DAN_TOC);
                $("#vungtrong_sudung_dienthoai").val(value[0].SU_DUNG_DT);
                $("#vungtrong_sodienthoai").val(value[0].SO_DIEN_THOAI);
                $("#vungtrong_zalo").val(value[0].USE_ZALO);
                $("#vungtrong_kinhnghiem").val(value[0].KINH_NGHIEM);
                $("#vungtrong_tuoicaytrong").val(value[0].TUOI_CAY_TRONG);
                $("#vungtrong_doituong").val(value[0].LOAI_SAN_PHAM);
                var loaidat = (value[0].LOAI_DAT).split("^^");
                $("#vungtrong_loaidat_phusa").prop("checked", loaidat.includes("1"));
                $("#vungtrong_loaidat_man").prop("checked", loaidat.includes("2"));
                $("#vungtrong_loaidat_phen").prop("checked", loaidat.includes("3"));
                $("#vungtrong_loaidat").val(value[0].LOAI_DAT);
                var sacaudat = (value[0].SA_CAU_DAT).split("^^");
                $("#vungtrong_sacaudat_thit").prop("checked", sacaudat.includes("1"));
                $("#vungtrong_sacaudat_set").prop("checked", sacaudat.includes("2"));
                $("#vungtrong_sacaudat_cat").prop("checked", sacaudat.includes("3"));
                $("#vungtrong_sacaudat_thitphacat").prop("checked", sacaudat.includes("4"));
                $("#vungtrong_khac").val(value[0].KHAC_DAT);
                $("#vungtrong_doday_tang").val(value[0].DO_DAY);
                $("#vungtrong_ph").val(value[0].DO_PH_DAT);
                $("#vungtrong_mucnuocngam").val(value[0].MUC_NUOC_NGAM);
                $("#vungtrong_ngap_t1").val(value[0].NUOC_NGAP_T1);
                $("#vungtrong_ngap_t2").val(value[0].NUOC_NGAP_T2);
                $("#vungtrong_ngap_t3").val(value[0].NUOC_NGAP_T3);
                $("#vungtrong_ngap_t4").val(value[0].NUOC_NGAP_T4);
                $("#vungtrong_ngap_t5").val(value[0].NUOC_NGAP_T5);
                $("#vungtrong_ngap_t6").val(value[0].NUOC_NGAP_T6);
                $("#vungtrong_ngap_t7").val(value[0].NUOC_NGAP_T7);
                $("#vungtrong_ngap_t8").val(value[0].NUOC_NGAP_T8);
                $("#vungtrong_ngap_t9").val(value[0].NUOC_NGAP_T9);
                $("#vungtrong_ngap_t10").val(value[0].NUOC_NGAP_T10);
                $("#vungtrong_ngap_t11").val(value[0].NUOC_NGAP_T11);
                $("#vungtrong_ngap_t12").val(value[0].NUOC_NGAP_T12);
                $("#vungtrong_phen_t1").val(value[0].NUOC_PHEN_T1);
                $("#vungtrong_phen_t2").val(value[0].NUOC_PHEN_T2);
                $("#vungtrong_phen_t3").val(value[0].NUOC_PHEN_T3);
                $("#vungtrong_phen_t4").val(value[0].NUOC_PHEN_T4);
                $("#vungtrong_phen_t5").val(value[0].NUOC_PHEN_T5);
                $("#vungtrong_phen_t6").val(value[0].NUOC_PHEN_T6);
                $("#vungtrong_phen_t7").val(value[0].NUOC_PHEN_T7);
                $("#vungtrong_phen_t8").val(value[0].NUOC_PHEN_T8);
                $("#vungtrong_phen_t9").val(value[0].NUOC_PHEN_T9);
                $("#vungtrong_phen_t10").val(value[0].NUOC_PHEN_T10);
                $("#vungtrong_phen_t11").val(value[0].NUOC_PHEN_T11);
                $("#vungtrong_phen_t12").val(value[0].NUOC_PHEN_T12);
                $("#vungtrong_man_t1").val(value[0].NUOC_MAN_T1);
                $("#vungtrong_man_t2").val(value[0].NUOC_MAN_T2);
                $("#vungtrong_man_t3").val(value[0].NUOC_MAN_T3);
                $("#vungtrong_man_t4").val(value[0].NUOC_MAN_T4);
                $("#vungtrong_man_t5").val(value[0].NUOC_MAN_T5);
                $("#vungtrong_man_t6").val(value[0].NUOC_MAN_T6);
                $("#vungtrong_man_t7").val(value[0].NUOC_MAN_T7);
                $("#vungtrong_man_t8").val(value[0].NUOC_MAN_T8);
                $("#vungtrong_man_t9").val(value[0].NUOC_MAN_T9);
                $("#vungtrong_man_t10").val(value[0].NUOC_MAN_T10);
                $("#vungtrong_man_t11").val(value[0].NUOC_MAN_T11);
                $("#vungtrong_man_t12").val(value[0].NUOC_MAN_T12);
                $("#vungtrong_thoigian_batdautrong").val(value[0].THOI_GIAN_BAT_DAU);
                $("#vungtrong_gionggannhat").val(value[0].GIONG_GAN_NHAT);
                $("#vungtrong_xacnhangiong").val(value[0].GIAY_XAC_NHAN);
                $("#vungtrong_chepham_xuly").val(value[0].CHE_PHAM_XU_LY);
                $("#vungtrong_nguocgoc_giong").val(value[0].NGUON_GOC);
                var nguongocgiong = (value[0].NGUON_GOC).split("^^");
                $("#vungtrong_nguocgoc_giong_tusx").prop("checked", nguongocgiong.includes("1"));
                $("#vungtrong_nguocgoc_giong_trongtinh").prop("checked", nguongocgiong.includes("2"));
                $("#vungtrong_nguocgoc_giong_ngoaitinh").prop("checked", nguongocgiong.includes("3"));
                $("#vungtrong_xuly_caygiong").val(value[0].XU_LY_GIONG);
                $("#vungtrong_mucdich_xuly").val(value[0].MUC_DICH);
                $("#vungtrong_matdo").val(value[0].MAT_DO_CAY_TRONG);
                $("#vungtrong_khoangcach").val(value[0].KHOANG_CACH_CAY_TRONG);
                $("#vungtrong_time_dau_thuhoach").val(value[0].TIME_DAU_TRAI_DEN_THU_HOACH);
                $("#vungtrong_solan_thuhoach").val(value[0].SO_LAN_THU_HOACH);
                $("#vungtrong_trongluongtrai").val(value[0].TRONG_LUONG);
                $("#vungtrong_thuhoach_cachxuly").val(value[0].CAH_XU_LY);
                $("#vungtrong_ns_muathuan").val(value[0].NS_MUA_THUAN);
                $("#vungtrong_sl_muathuan").val(value[0].SL_MUA_THUAN);
                $("#vungtrong_thuhoach_dacdiem").val(value[0].DAC_DIEM_TRAI);
                $("#vungtrong_phanloai_tyle").val(value[0].PHAN_LOAI_TY_LE);
                $("#vungtrong_thuhoach_xulydongloat").val(value[0].XU_LY_CHINH_DONG_LOAT);
                $("#vungtrong_ns_muanghich").val(value[0].NS_MUA_NGHICH);
                $("#vungtrong_sl_muanghich").val(value[0].SL_MUA_NGHICH);
                $("#vungtrong_giaban").val(value[0].GIA_BAN);
                $("#vungtrong_khuvucsx").val(value[0].TEN_KHU_VUC);
                $("#vungtrong_kehoachsx").val(value[0].TEN_KE_HOACH);
                $("#vungtrong_thoigianbatdau").val(value[0].THOI_GIAN_BAT_DAU);
                $("#vungtrong_muavu").val(value[0].MUA_VU);
                $("#vungtrong_tenvung").val(value[0].TEN_VUNG_TRONG);
                $("#vungtrong_ngaysanxuat").val(value[0].NGAY_SAN_XUAT);
                $("#vungtrong_thoigianketthuc").val(value[0].THOI_GIAN_KET_THUC);
                $("#vungtrong_ghichu").val(value[0].GHICHU);
                $("#vungtrong_ngaythuhoach").val(value[0].NGAY_THU_HOACH);
                $("#vungtrong_sanluong_dukien").val(value[0].SAN_LUONG);
            }
        });
    }
</script>