<aside class="sidebar-wrapper ">
    <nav class="sidebar-nav">
        <ul class="metismenu" id="menu1">
            <li class="single-nav-wrapper">
                <a href="{{ route('user.dashboard') }}" class="menu-item">
                    <span class="left-icon"><i class="fas fa-home"></i></span>
                    <span class="menu-text">Home</span>
                </a>
            </li>
            <li class="single-nav-wrapper">
                <a class="has-arrow menu-item" href="#" aria-expanded="false">
                    <span class="left-icon"><i class="fas fa-stethoscope"></i></span>
                    <span class="menu-text">Quản lý thiết bị</span>
                </a>
                <ul class="dashboard-menu">
                    <li><a href="{{route('thietbi.danhsach')}}">Danh sách thiết bị</a></li>
                    <li><a href="{{route('thietbi.getthem')}}">Thêm mới thiết bị</a></li>
                    <li><a href="{{route('thietbi.suachua')}}">Sửa chữa thiết bị</a></li>
                </ul>
                
            </li>
            <li class="single-nav-wrapper">
                <a class="has-arrow menu-item" href="#" aria-expanded="false">
                    <span class="left-icon"><i class="	fa fa-medkit"></i></span>
                    <span class="menu-text">Quản lý vật tư</span>
                </a>
                <ul class="dashboard-menu">
                    <li><a href="/vattu/danhsach">Danh sách vật tư</a></li>
                </ul>
                <ul class="dashboard-menu">
                    <li><a href="/vattu/getthem">Thêm mới vật tư</a></li>
                </ul>
            </li>
            
            {{-- </li>
            <li class="single-nav-wrapper">
                <a class="has-arrow menu-item" href="#" aria-expanded="false">
                    <span class="left-icon"><i class="fas fa-table"></i></span>
                    <span class="menu-text">table</span>
                </a>
                <ul class="dashboard-menu">
                    <li><a href="basic_table.html">Basic table</a></li>
                    <li><a href="data_table.html">data table</a></li>
                </ul>
            </li>
            <li class="single-nav-wrapper">
                <a class="has-arrow menu-item" href="#" aria-expanded="false">
                    <span class="left-icon"><i class="fas fa-chart-line"></i></span>
                    <span class="menu-text">Charts</span>
                </a>
                <ul class="dashboard-menu">
                    <li><a href="chart-float.html">Float Chart</a></li>
                    <li><a href="chart-float.html">Float Chart</a></li>
                    <li><a href="chart-float.html">Float Chart</a></li>
                </ul>
            </li>
            <li class="single-nav-wrapper">
                <a class="has-arrow menu-item" href="#" aria-expanded="false">
                    <span class="left-icon"><i class="fas fa-sort-alpha-down-alt"></i></span>
                    <span class="menu-text">UI Elements</span>
                </a>
                <ul class="dashboard-menu">
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="button.html">Buttons</a></li>
                    <li><a href="notification.html">Notification</a></li>
                    <li><a href="panels.html">Panels</a></li>
                    <li><a href="tabs.html">Tab</a></li>
                    <li><a href="modals.html">Modals</a></li>
                    <li><a href="progressbars.html">Progressber</a></li>
                    <li><a href="list.html">List View</a></li>
                    <li><a href="icheck_toggle_pagination.html">iCheck, Toggle</a></li>
                    <li><a href="label-badge-alert.html">labels, Badges</a></li>
                    <li><a href="treeview.html">Tree View</a></li>
                </ul>
            </li>
            <li class="single-nav-wrapper">
                <a class="has-arrow menu-item" href="#" aria-expanded="false">
                    <span class="left-icon"><i class="fas fa-map-marker-alt"></i></span>
                    <span class="menu-text">Maps</span>
                </a>
                <ul class="dashboard-menu">
                    <li><a href="#">Amcharts Maps</a></li>
                    <li><a href="#">Data Maps</a></li>
                    <li><a href="#">Jvector Maps</a></li>
                    <li><a href="#">Google map</a></li>
                    <li><a href="#">Snazzy Map</a></li>
                </ul>
            </li>
            <li class="single-nav-wrapper">
                <a class="has-arrow menu-item" href="#" aria-expanded="false">
                    <span class="left-icon"><i class="far fa-envelope"></i></span>
                    <span class="menu-text">Mailbox</span>
                </a>
                <ul class="dashboard-menu">
                    <li><a href="#">Mailbox</a></li>
                    <li><a href="#">Mailbox Details</a></li>
                    <li><a href="#">Compose</a></li>
                </ul>
            </li>
            <li class="single-nav-wrapper">
                <a class="has-arrow menu-item" href="#" aria-expanded="false">
                    <span class="left-icon"><i class="fas fa-mobile-alt"></i></span>
                    <span class="menu-text">App View</span>
                </a>
                <ul class="dashboard-menu">
                    <li><a href="invoice.html">Invoice</a></li>
                    <li><a href="#">Vertical timeline</a></li>
                    <li><a href="#">Horizontal timeline</a></li>
                    <li><a href="#">Pricing Table</a></li>
                </ul>
            </li>
            <li class="single-nav-wrapper">
                <a class="has-arrow menu-item" href="#" aria-expanded="false">
                    <span class="left-icon"><i class="far fa-copy"></i></span>
                    <span class="menu-text">Other pages</span>
                </a>
                <ul class="dashboard-menu">
                    <li><a href="login.html">Login</a></li>
                    <li><a href="registration.html">Register</a></li>
                    <li><a href="screen_lock.html">screen lock</a></li>
                    <li><a href="forget.html">forget Password</a></li>
                </ul>
            </li>
            <li class="single-nav-wrapper">
                <a href="#" class="menu-item">
                    <span class="left-icon"><i class="fas fa-home"></i></span>
                    <span class="menu-text">Calender</span>
                </a>
            </li>
            <li class="single-nav-wrapper">
                <a href="blank_page.html" class="menu-item">
                    <span class="left-icon"><i class="fas fa-file"></i></span>
                    <span class="menu-text">Blank Page</span>
                </a>
            </li> --}}
        </ul>
    </nav>
</aside>
