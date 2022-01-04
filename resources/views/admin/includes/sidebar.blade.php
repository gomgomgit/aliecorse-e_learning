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
                <a class="nav-link text-dark active bg-gradient-info" href="./pages/dashboard.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">speed</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-bold">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{ url('/a') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-bold">My Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="./pages/billing.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">school</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-bold">Endrolled Courses</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="./pages/virtual-reality.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">bookmark</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-bold">Wishlist</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="./pages/rtl.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">star</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-bold">Reviews</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="./pages/notifications.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">quiz</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-bold">My Quis Attempts</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="./pages/profile.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">shopping_cart</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-bold">Purchase History</span>
                </a>
            </li>
            <li class="nav-item mt-2">
            <hr>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-8">Instructor</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="{{ url('admin/my-courses') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">rocket_launch</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-bold">My Courses</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="./pages/sign-up.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">monetization_on</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-bold">Earnings</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="./pages/sign-in.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">account_balance_wallet</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-bold">Withdrawal</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="./pages/sign-up.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">quiz</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-bold">Quiz Attempts</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="./pages/sign-in.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">question_answer</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-bold">Question & Answer</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="./pages/sign-up.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-bold">Assignments</span>
                </a>
            </li>
            <li class="nav-item mt-2">
            <hr>
            </li>
            <li class="nav-item">
            <a class="nav-link text-dark " href="./pages/sign-up.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">settings</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-bold">Settings</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="./pages/sign-up.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">logout</i>
                    </div>
                    <span class="nav-link-text ms-1 fw-bold">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>