<aside class="sidenav navbar-vertical navbar-expand-xs fixed-start h-screen border-end border-2" id="sidenav-main" style="margin-top: 130px">
    {{-- <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="/template/assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-dark">Material Dashboard 2</span>
    </a>
    </div> --}}
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-dark {{ (request()->is('admin')) ? 'active bg-gradient-info' : '' }}" href="{{ route('dashboard') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10 text-primary">speed</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-normal">Beranda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ (request()->is('admin/profile*')) ? 'active bg-gradient-info' : '' }}" href="{{ url('/admin/profile') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10 text-primary">person</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-normal">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="./pages/billing.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10 text-primary">school</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-normal">Kursus Saya</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ (request()->is('admin/purchase-history*')) ? 'active bg-gradient-info' : '' }}" href="{{ url('admin/purchase-history') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10 text-primary">shopping_cart</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-normal">Riwayat Pembelian</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="./pages/rtl.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10 text-primary">article</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-normal">Sertifikat Saya</span>
                </a>
            </li>
            <li class="nav-item mt-2">
            <hr>
            </li>
            {{-- <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-8">Instructor</h6>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link text-dark " href="./pages/notifications.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10 text-primary">speed</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-normal">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark  {{ (request()->is('admin/course*')) ? 'active bg-gradient-info' : '' }}" href="{{ url('admin/courses') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10 text-primary">school</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-normal">Kursus</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10 text-primary">meeting_room</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-normal">Webinar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark  {{ (request()->is('admin/articles*')) ? 'active bg-gradient-info' : '' }}" href="{{ url("admin/articles") }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">article</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-bold">Artikel</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark  {{ (request()->is('admin/categories*')) ? 'active bg-gradient-info' : '' }}" href="{{ url("admin/categories") }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10 text-primary">category</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-normal">Kategori</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark  {{ (request()->is('admin/category-articles*')) ? 'active bg-gradient-info' : '' }}" href="{{ url("admin/category-articles") }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">pages</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-bold">Kategori Artikel</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ (request()->is('admin/reviews*')) ? 'active bg-gradient-info' : '' }}" href="{{ url('admin/reviews') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10 text-primary">reviews</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-normal">Ulasan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ (request()->is('admin/purchases*')) ? 'active bg-gradient-info' : '' }}" href="{{ url('admin/purchases') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10 text-primary">shop</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-normal">Pembelian</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ (request()->is('admin/questions*')) ? 'active bg-gradient-info' : '' }}" href="{{ url('admin/questions') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10 text-primary">question_answer</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-normal">Pertanyaan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ (request()->is('admin/sertificates*')) ? 'active bg-gradient-info' : '' }}" href="{{ url('admin/sertificates') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10 text-primary">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-normal">Sertifikat</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ (request()->is('admin/reports*')) ? 'active bg-gradient-info' : '' }}" href="{{ url('admin/reports') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10 text-primary">report</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-normal">Laporan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ (request()->is('admin/students*')) ? 'active bg-gradient-info' : '' }}" href="{{ url('admin/students') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10 text-primary">person</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-normal">Siswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ (request()->is('admin/instructors*')) ? 'active bg-gradient-info' : '' }}" href="{{ url('admin/instructors') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10 text-primary">cast_for_education</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-normal">Instruktur</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ (request()->is('admin/intructores*')) ? 'active bg-gradient-info' : '' }}" href="{{ url('admin/admins') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10 text-primary">admin_panel_settings</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-normal">Admin</span>
                </a>
            </li>
            <li class="nav-item mt-2">
            <hr>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="./pages/sign-up.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10 text-primary">settings</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-normal">Pengaturan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="./pages/sign-up.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10 text-primary">person</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-normal">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="./pages/sign-up.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10 text-primary">logout</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-normal">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>