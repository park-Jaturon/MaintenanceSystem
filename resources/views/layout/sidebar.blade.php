<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">เมนู</div>
                <a class="nav-link" href="{{ url('/admin/dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-bars-staggered"></i></div>
                    ดูรายการเเจ้งซ่อม
                </a>
                <a class="nav-link" href="{{ url('/admin/repair') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-bullhorn"></i></div>
                    แจ้งซ่อม
                </a>
                <a class="nav-link" href="{{ url('/employee') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-wrench"></i></div>
                    จัดการข้อมูลช่าง
                </a>
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fa fa-user"></i></div>
                    จัดการข้อมูลพนักงาน
                </a>
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fa fa-calendar-check"></i></div>
                    จัดการข้อมูลสถานะ
                </a>
                {{--  <div class="sb-sidenav-menu-heading">จัดการ เเจ้งซ่อม</div>
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fas fa-bullhorn"></i></div>
                    แจ้งซ่อม
                </a>
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fas fa-bars-staggered"></i></div>
                    รายการเเจ้งซ่อม
                </a>
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    สถิติเเละรายงานการซ่อม
                </a>
                <div class="sb-sidenav-menu-heading">จัดการ ผู้ใช้งาน</div>
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="far fa-address-card"></i></div>
                    เจ้าหน้าที่ให้บริการ
                </a>
                <div class="sb-sidenav-menu-heading">จัดการ QR code</div>
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-qrcode"></i></div>
                    จัดการ QR Code
                </a>  --}}
            </div>
        </div>
        {{--  <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>  --}}
    </nav>
</div>