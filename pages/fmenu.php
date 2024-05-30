<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="./lib/images/vnpt.png" style="max-width:50px;max-height:50px" alt="User Image">
        <div>
            <p class="app-sidebar__user-name" style="font-weight:bold"><?php echo $_SESSION["tennv"]; ?></p>
            <p class="app-sidebar__user-designation"><i><?php echo $_SESSION["tendonvi"]; ?></i></p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item" href="go?page=_main&subP=controlboard"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a>
        </li>
        <li>
            <a class="app-menu__item" href="go?page=_main&subP=infouser"><i class="app-menu__icon fa fa-leaf"></i><span class="app-menu__label">Thông tin nhân viên</span></a>
        </li>
        <li>
            <a class="app-menu__item" href="go?page=_main&subP=infosearch"><i class="app-menu__icon fa fa-leaf"></i><span class="app-menu__label">Tra cứu</span></a>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="javascript:void(0);" data-toggle="treeview">
                <i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Thống kê - Báo cáo</span><i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="go?page=_main&subP=land"><i class="icon fa fa-angle-right "></i> Báo cáo 1</a></li>
                <li><a class="treeview-item" href="go?page=_main&subP=land"><i class="icon fa fa-angle-right "></i> Báo cáo 2</a></li>
                <li><a class="treeview-item" href="go?page=_main&subP=land"><i class="icon fa fa-angle-right "></i> Báo cáo 3</a></li>
                <li><a class="treeview-item" href="go?page=_main&subP=land"><i class="icon fa fa-angle-right "></i> Báo cáo 4</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="javascript:void(0);" data-toggle="treeview">
                <i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Danh mục</span><i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="go?page=_main&subP=listuser"><i class="icon fa fa-angle-right "></i> DM - Nhân Viên</a></li>
                <li><a class="treeview-item" href="go?page=_main&subP=listdepart"><i class="icon fa fa-angle-right "></i> DM - Phòng ban</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="javascript:void(0);" data-toggle="treeview">
                <i class="app-menu__icon fa fa-cogs"></i><span class="app-menu__label">Hệ thống</span><i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="go?page=_main&subP=managecompany"><i class="icon fa fa-angle-right "></i> Quản lý đơn vị</a></li>
                <li><a class="treeview-item" href="go?page=_main&subP=managenofi"><i class="icon fa fa-angle-right "></i> Quản lý thông báo</a></li>
            </ul>
        </li>
    </ul>
</aside>
<script type="text/javascript">
    $(function(){
        const url = window.location.search;
        var path_url = url.split("=");
        var urlRegExp = new RegExp(path_url[2].replace(/\/$/,''));
        // console.log(urlRegExp);
        $('.app-menu li a').each(function(){
            // console.log(this.href);
            if(urlRegExp.test(this.href)){
                $(this).addClass('active');
            }
        });
        // $('.treeview-item').click(function() {
        //     var ulClass = $(this).closest('.treeview').prev('li').find('ul').attr('class');
        //     console.log(ulClass);
        // });
        // $('.app-menu li ul li a').each(function(){
        //     console.log(this.href);
            
        //     if(urlRegExp.test(this.href)){
        //         $(this).closest('.treeview').prev('li.treeview').addClass('is-expanded');
                
        //     }
        // });
        // $('.treeview-item').click(function() {
        //     $(this).closest('.treeview').toggleClass('is-expanded');
        // });
        // $('.app-menu li ul li a').each(function(){
        //     console.log(this.href);
        //     if(urlRegExp.test(this.href)){
        //         $(this).addClass('active');
        //     }
        // });
    });
</script>