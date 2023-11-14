<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="/admin/home" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="/admin/home" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>

        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            
            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"></i> <span>CHỨC NĂNG</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#quanLyToChuc" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="quanLyToChuc">
                        <i class="las la-sitemap"></i> <span>Quản lý khởi tạo</span>
                    </a>
                    <div class="collapse menu-dropdown" id="quanLyToChuc">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/admin/apartment/list" class="nav-link">Phòng</a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/typeapartment/list" class="nav-link">Loại phòng</a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/utilities/list" class="nav-link">Tiện ích</a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/unit/list" class="nav-link">Đơn vị</a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/service/list" class="nav-link">Dịch vụ</a>
                            </li>
                            <li class="nav-item">
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#quanLyNhanSu" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="quanLyToChuc">
                        <i class=" las la-address-book"></i> <span>Quản lý nhân sự</span>
                    </a>
                    <div class="collapse menu-dropdown" id="quanLyNhanSu">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/admin/profile/list" class="nav-link">Nhân viên</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#quanLyKhachHang" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="quanLyToChuc">
                        <i class="las la-address-card"></i> <span>Quản lý khách hàng</span>
                    </a>
                    <div class="collapse menu-dropdown" id="quanLyKhachHang">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/admin/customer/list" class="nav-link">Khách hàng</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-title"><i class="ri-more-fill"></i> <span>LỊCH SỬ</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#quanLyNhapLieu" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="quanLyNhapLieu">
                        <i class="las la-history"></i> <span>Lịch sử nhập liệu</span>
                    </a>
                    <div class="collapse menu-dropdown" id="quanLyNhapLieu">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Khách hàng</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Hợp đồng</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
