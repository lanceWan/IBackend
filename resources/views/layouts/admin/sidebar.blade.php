<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                <form class="sidebar-search  " action="#" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <a href="javascript:;" class="btn submit">
                                <i class="icon-magnifier"></i>
                            </a>
                        </span>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
       
            <li class="nav-item start open active">
                <a href="/admin/ajaxindex" class="nav-link">
                    <i class="fa fa-tachometer"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">Features</h3>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-diamond"></i>
                    <span class="title">UI Features</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{url('admin/user')}}" class="nav-link">
                            <i class="fa fa-crop"></i>
                            <span class="title">用户列表</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{url('admin/permission')}}" class="nav-link">
                            <span class="title">权限列表</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{url('admin/menu')}}" class="nav-link">
                            <span class="title">菜单列表</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="ui_confirmations.html" class="nav-link">
                            <span class="title">Popover Confirmations</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="ui_icons.html" class="nav-link">
                            <span class="title">Font Icons</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="ui_socicons.html" class="nav-link">
                            <span class="title">Social Icons</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="ui_typography.html" class="nav-link">
                            <span class="title">Typography</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="ui_tabs_accordions_navs.html" class="nav-link">
                            <span class="title">Tabs, Accordions & Navs</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="ui_timeline.html" class="nav-link">
                            <span class="title">Timeline</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="ui_tree.html" class="nav-link">
                            <span class="title">Tree View</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <span class="title">Page Progress Bar</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item ">
                                <a href="ui_page_progress_style_1.html" class="nav-link"> Flash </a>
                            </li>
                            <li class="nav-item ">
                                <a href="ui_page_progress_style_2.html" class="nav-link"> Big Counter </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->