<!DOCTYPE html>
<html>
  <head>
    <title>Home Manage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./lib/images/vnpt_icon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./lib/css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./lib/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="./lib/js/scripts/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="./lib/js/scripts/demos.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxdata.js"></script> 
    <script type="text/javascript" src="./lib/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxradiobutton.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxgrid.edit.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxgrid.selection.js"></script> 
    <script type="text/javascript" src="./lib/jqwidgets/jqxgrid.grouping.js"></script> 
    <script type="text/javascript" src="./lib/jqwidgets/jqxgrid.columnsresize.js"></script> 
    <script type="text/javascript" src="./lib/jqwidgets/jqxgrid.filter.js"></script> 
    <script type="text/javascript" src="./lib/jqwidgets/jqxdatetimeinput.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxtabs.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxcombobox.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxcalendar.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/globalization/globalize.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/globalization/globalize.culture.vi-VN.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/globalization/globalize.culture.fr-FR.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxgrid.sort.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxgrid.aggregates.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxwindow.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxloader.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxfileupload.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxnotification.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxgrid.pager.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxnumberinput.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxinput.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxtooltip.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxpanel.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxtree.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxexpander.js"></script>
    <script type="text/javascript" src="./lib/jqwidgets/jqxsplitter.js"></script>
    <script type="text/javascript" src="./lib/js/cute-alert.js"></script>
    <link href="./lib/css/style_cute.css" rel="stylesheet">
    <script type="text/javascript" src="./lib/js/jBox.js"></script>
    <script type="text/javascript" src="./lib/js/warning.js?v=5"></script>
    <link rel="stylesheet" type="text/css" href="./lib/css/jBox.css">
    <script src="./lib/js/lib.js"></script>
    <style type="text/css">
      .jqx-rc-all > .jqx-fill-state-normal {
        width: 130px !important;
      }
      .dropdown-menu.dropdown-menu-right {
        width: 180px !important;
      }
      input[type="checkbox"]:disabled {
        background-color: blue !important;
      }
      .input-new {
        width: 40%;
        border-bottom-style: dotted;
        outline: 0;
        border-width: 0 0 1px;
        border-color: black;
        color: blue;
      }
    </style>
  </head>
  <body class="app sidebar-mini rtl">
    <?php include_once('fheader.php'); ?>
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include_once('fmenu.php'); ?>
    <main class="app-content">
    <?php
      $p = $_GET['page'];
      $s = '';
      if (isset($_GET['subP'])) {
        $s = $_GET['subP'];
        if ($s == 'controlboard') {
          $s = 'dashboard';
        } else if ($s == 'infouser') {
          $s = 'thongtinnhanvien';
        } else if ($s == 'typetree') {
          $s = 'grasstype';
        } else if ($s == 'infofarm') {
          $s = 'detailfarm';
        } else if ($s == 'kythuatcanhtac') {
          $s = 'canhtac';
        } else if ($s == 'phanbon') {
          $s = 'phanbon';
        } else if ($s == 'thuocbvtv') {
          $s = 'thuocbvtv';
        } else if ($s == 'chamsoccay') {
          $s = 'chamsoccay';
        } else if ($s == 'xulyrahoa') {
          $s = 'xulyrahoa';
        }
      } else {
        $s = '';
      }
      if ($s) {
        $page = "pages/".$s.".php";
        if (file_exists($page)) {
          include($page);
        } else {
          include("pages/ferror.php");
        }
      }
    ?>
    </main>
    <script src="./lib/js/popper.min.js"></script>
    <script src="./lib/js/bootstrap.min.js"></script>
    <script src="./lib/js/plugins/bootstrap-datepicker.min.js"></script>
    <script src="./lib/js/plugins/locales/bootstrap-datepicker.VI.js" charset="UTF-8"></script>
    <script src="./lib/js/main.js"></script>
    <script type="text/javascript">

    </script>
  </body>
</html>