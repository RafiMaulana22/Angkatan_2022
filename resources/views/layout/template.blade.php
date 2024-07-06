<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/remixicon.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/sidebar-menu.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/simplebar.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/apexcharts.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/prism.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/rangeslider.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/sweetalert.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/quill.snow.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/style.css">
    <link rel="icon" type="image/png" href="{{ asset('') }}assets/images/favicon.png">
    <title>Farol - {{ $title }}</title>
</head>

<body>
    {{-- Loading --}}
    <div class="preloader" id="preloader">
        <div class="preloader">
            <div class="waviy position-relative">
                <span class="d-inline-block">F</span>
                <span class="d-inline-block">A</span>
                <span class="d-inline-block">R</span>
                <span class="d-inline-block">O</span>
                <span class="d-inline-block">L</span>
            </div>
        </div>
    </div>
    {{-- End Loading --}}
    {{-- Sidebar --}}
    <div class="sidebar-area" id="sidebar-area">
        <div class="logo position-relative">
            <a href="index.html" class="d-block text-decoration-none">
                <img src="{{ asset('') }}assets/images/logo-icon.png" alt="logo-icon">
                <span class="logo-text fw-bold text-dark">Farol</span>
            </a>
            <button
                class="sidebar-burger-menu bg-transparent p-0 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y"
                id="sidebar-burger-menu">
                <i data-feather="x"></i>
            </button>
        </div>
        <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
            <ul class="menu-inner">
                <li class="menu-item open">
                    <a href="javascript:void(0);" class="menu-link">
                        <i data-feather="home" class="menu-icon tf-icons"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="menu-title small text-uppercase">
                    <span class="menu-title-text">Manajemen Konten</span>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="file-text" class="menu-icon tf-icons"></i>
                        <span class="title">Berita</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="/berita" class="menu-link">
                                List Berita
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/kategori_berita" class="menu-link">
                                Kategori
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="calendar" class="menu-icon tf-icons"></i>
                        <span class="title">Acara</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="inbox.html" class="menu-link">
                                List Acara
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="read-email.html" class="menu-link">
                                Kategori
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="image" class="menu-icon tf-icons"></i>
                        <span class="title">Galeri</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="invoice-list.html" class="menu-link">
                                List Foto
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="invoice-details.html" class="menu-link">
                                Album Galeri
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title small text-uppercase">
                    <span class="menu-title-text">Manajemen Pengguna</span>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link active">
                        <i data-feather="users" class="menu-icon tf-icons"></i>
                        <span class="title">Pengguna</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link active">
                        <i data-feather="home" class="menu-icon tf-icons"></i>
                        <span class="title">Kelas</span>
                    </a>
                </li>
                <li class="menu-title small text-uppercase">
                    <span class="menu-title-text">Struktur Organisasi</span>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="briefcase" class="menu-icon tf-icons"></i>
                        <span class="title">Organisasi</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="alerts.html" class="menu-link">
                                Jabatan
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="avatar.html" class="menu-link">
                                Departemen
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="users" class="menu-icon tf-icons"></i>
                        <span class="title">Anggota</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="animation.html" class="menu-link">
                                Jabatan
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="clip-board.html" class="menu-link">
                                Departemen
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title small text-uppercase">
                    <span class="menu-title-text">Diskusi & Forum</span>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="copy" class="menu-icon tf-icons"></i>
                        <span class="title">Diskusi</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="alerts.html" class="menu-link">
                                List Diskusi
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="avatar.html" class="menu-link">
                                Kategori
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title small text-uppercase">
                    <span class="menu-title-text">Pesan</span>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link active">
                        <i data-feather="inbox" class="menu-icon tf-icons"></i>
                        <span class="title">Kotak Masuk</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link active">
                        <i data-feather="settings" class="menu-icon tf-icons"></i>
                        <span class="title">Pengaturan Pesan</span>
                    </a>
                </li>
                <li class="menu-title small text-uppercase">
                    <span class="menu-title-text">Alumni</span>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link active">
                        <i data-feather="user-check" class="menu-icon tf-icons"></i>
                        <span class="title">List Alumni</span>
                    </a>
                </li>
                <li class="menu-title small text-uppercase">
                    <span class="menu-title-text">Pengaturan</span>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link active">
                        <i data-feather="settings" class="menu-icon tf-icons"></i>
                        <span class="title">Umum</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link active">
                        <i data-feather="user" class="menu-icon tf-icons"></i>
                        <span class="title">Akun</span>
                    </a>
                </li>
            </ul>
        </aside>
        <div class="bg-white z-1 admin">
            <div class="d-flex align-items-center admin-info border-top">
                <div class="flex-shrink-0">
                    <a href="profile.html" class="d-block">
                        <img src="{{ asset('') }}assets/images/admin.jpg" class="rounded-circle wh-54"
                            alt="admin">
                    </a>
                </div>
                <div class="flex-grow-1 ms-3 info">
                    <a href="profile.html" class="d-block name">{{ Auth::user()->username }}</a>
                    <a href="/logout">Log Out</a>
                </div>
            </div>
        </div>
    </div>
    {{-- End Sidebar --}}
    <div class="container-fluid">
        <div class="main-content d-flex flex-column">
            {{-- Navbar --}}
            <header class="header-area bg-white mb-4 rounded-bottom-10" id="header-area">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="left-header-content">
                            <ul
                                class="d-flex align-items-center ps-0 mb-0 list-unstyled justify-content-center justify-content-sm-start">
                                <li>
                                    <button class="header-burger-menu bg-transparent p-0 border-0"
                                        id="header-burger-menu">
                                        <i data-feather="menu"></i>
                                    </button>
                                </li>
                                <li>
                                    <form class="src-form position-relative">
                                        <input type="text" class="form-control" placeholder="Search here..">
                                        <button type="submit"
                                            class="src-btn position-absolute top-50 end-0 translate-middle-y bg-transparent p-0 border-0">
                                            <i data-feather="search"></i>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-md-8">
                        <div class="right-header-content mt-2 mt-sm-0">
                            <ul
                                class="d-flex align-items-center justify-content-center justify-content-sm-end ps-0 mb-0 list-unstyled">
                                <li class="header-right-item">
                                    <div class="dropdown notifications language">
                                        <button class="btn btn-secondary border-0 p-0 position-relative"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="{{ asset('') }}assets/images/united-states.jpg"
                                                class="rounded-circle wh-22" alt="united-states">
                                        </button>
                                        <div class="dropdown-menu dropdown-lg p-0 border-0 p-4">
                                            <div class="notification-menu">
                                                <a href="notification.html" class="dropdown-item p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('') }}assets/images/united-states.jpg"
                                                                class="wh-22 rounded-circle" alt="united-states">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h4>English</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="notification-menu">
                                                <a href="notification.html" class="dropdown-item p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('') }}assets/images/spain.png"
                                                                class="wh-22 rounded-circle" alt="spain">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h4>Spain</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="notification-menu mb-0">
                                                <a href="notification.html" class="dropdown-item p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('') }}assets/images/germany.png"
                                                                class="wh-22 rounded-circle" alt="germany">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h4>Germany</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header-right-item">
                                    <div class="dropdown notifications email">
                                        <button class="btn btn-secondary border-0 p-0 position-relative"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="mail"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-lg p-0 border-0 p-4">
                                            <h5
                                                class="m-0 p-0 fw-bold d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
                                                <span>Email </span>
                                                <button class="p-0 m-0 bg-transparent border-0">Clear All</button>
                                            </h5>
                                            <div class="notification-menu">
                                                <a href="notification.html" class="dropdown-item p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('') }}assets/images/pdf.svg"
                                                                alt="pdf">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h4>Help/Support Desk</h4>
                                                            <span>11:47 PM Wednesday</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="notification-menu">
                                                <a href="notification.html" class="dropdown-item p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('') }}assets/images/notifications-1.jpg"
                                                                alt="notifications">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h4>Create a new project for client</h4>
                                                            <span>April, 18</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="notification-menu mb-0">
                                                <a href="notification.html" class="dropdown-item p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('') }}assets/images/notifications-2.jpg"
                                                                alt="notifications">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h4>Project Management</h4>
                                                            <span>April, 19</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <a href="notification.html"
                                                class="dropdown-item text-center text-primary d-block view-all pt-3 pb-0 fw-semibold">
                                                View All
                                                <i data-feather="chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="header-right-item">
                                    <div class="dropdown notifications noti">
                                        <button class="btn btn-secondary border-0 p-0 position-relative badge"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="bell"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-lg p-0 border-0 p-4">
                                            <h5
                                                class="m-0 p-0 fw-bold d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
                                                <span>Notifications </span>
                                                <button class="p-0 m-0 bg-transparent border-0">Clear All</button>
                                            </h5>
                                            <div class="notification-menu">
                                                <a href="notification.html" class="dropdown-item p-0">
                                                    <h4>8 Invoices have been paid</h4>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('') }}assets/images/pdf.svg"
                                                                alt="pdf">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <p>Invoices have been paid to the company.</p>
                                                        </div>
                                                    </div>
                                                    <span>11:47 PM Wednesday</span>
                                                </a>
                                            </div>
                                            <div class="notification-menu mb-0">
                                                <a href="notification.html" class="dropdown-item p-0">
                                                    <h4>Create a new project for client</h4>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('') }}assets/images/notifications-1.jpg"
                                                                alt="notifications">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <p>Allow users to like products in your WooCommerce</p>
                                                        </div>
                                                    </div>
                                                    <span>April, 18</span>
                                                </a>
                                            </div>
                                            <a href="notification.html"
                                                class="dropdown-item text-center text-primary d-block view-all pt-3 pb-0 fw-semibold">
                                                View All
                                                <i data-feather="chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="header-right-item d-none d-md-block">
                                    <div class="today-date">
                                        <span id="digitalDate"></span>
                                        <i data-feather="calendar"></i>
                                    </div>
                                </li>
                                <li class="header-right-item">
                                    <div class="dropdown admin-profile">
                                        <div class="d-xxl-flex align-items-center bg-transparent border-0 text-start p-0 cursor"
                                            data-bs-toggle="dropdown">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-circle wh-54"
                                                    src="{{ asset('') }}assets/images/admin.jpg" alt="admin">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-none d-xxl-block">
                                                        <span class="degeneration">Admin</span>
                                                        <div class="d-flex align-content-center">
                                                            <h3>{{ Auth::user()->username }}</h3>
                                                            <div class="down">
                                                                <i data-feather="chevron-down"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="dropdown-menu border-0 bg-white w-100 admin-link">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center text-body"
                                                    href="profile.html">
                                                    <i data-feather="user"></i>
                                                    <span class="ms-2">Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center text-body"
                                                    href="account.html">
                                                    <i data-feather="settings"></i>
                                                    <span class="ms-2">Setting</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center text-body"
                                                    href="/logout">
                                                    <i data-feather="log-out"></i>
                                                    <span class="ms-2">Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            {{-- End Navbar --}}
            {{-- Content --}}
            @yield('content')
            {{-- End Content --}}
            <div class="flex-grow-1"></div>
            {{-- Footer --}}
            <footer class="footer-area bg-white text-center rounded-top-10">
                <p class="fs-14">© <span class="text-primary">Farol</span> is Proudly Owned by <a
                        href="https://hibootstrap.com/" target="_blank"
                        class="text-decoration-none">HiBootstrap</a></p>
            </footer>
            {{-- End Footer --}}
        </div>
    </div>
    <button class="btn btn-danger theme-settings-btn p-0 position-fixed z-2 text-center"
        style="bottom: 30px; right: 30px; width: 40px; height: 40px;" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
        <i data-feather="settings" class="wh-20 text-white position-relative" style="top: -1px; outline: none;"
            data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Click On Theme Settings"></i>
    </button>
    <div class="offcanvas offcanvas-end bg-white" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1"
        id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel"
        style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        <div class="offcanvas-header bg-body-bg py-3 px-4 mb-4">
            <h5 class="offcanvas-title fs-18" id="offcanvasScrollingLabel">Theme Settings</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-4">
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">RTL / LTR</h4>
            <div class="settings-btn rtl-btn">
                <label id="switch" class="switch">
                    <input type="checkbox" onchange="toggleTheme()" id="slider">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Light / Dark</h4>
            <button class="switch-toggle settings-btn dark-btn" id="switch-toggle">
                Click To <span class="dark">Dark</span> <span class="light">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Sidebar Light / Dark</h4>
            <button class="sidebar-light-dark settings-btn sidebar-dark-btn" id="sidebar-light-dark">
                Click To <span class="dark1">Dark</span> <span class="light1">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Header Light / Dark</h4>
            <button class="header-light-dark settings-btn header-dark-btn" id="header-light-dark">
                Click To <span class="dark2">Dark</span> <span class="light2">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Footer Light / Dark</h4>
            <button class="footer-light-dark settings-btn footer-dark-btn" id="footer-light-dark">
                Click To <span class="dark3">Dark</span> <span class="light3">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Card Style Radius / Square</h4>
            <button class="card-radius-square settings-btn card-style-btn" id="card-radius-square">
                Click To <span class="square">Square</span> <span class="radius">Radius</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Card Style BG White / Gray</h4>
            <button class="card-bg settings-btn card-bg-style-btn" id="card-bg">
                Click To <span class="white">White</span> <span class="gray">Gray</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Container Style Fluid / Boxed</h4>
            <button class="boxed-style settings-btn fluid-boxed-btn" id="boxed-style">
                Click To <span class="fluid">Fluid</span> <span class="boxed">Boxed</span>
            </button>
        </div>
    </div>
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('') }}assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/js/sidebar-menu.js"></script>
    <script src="{{ asset('') }}assets/js/dragdrop.js"></script>
    <script src="{{ asset('') }}assets/js/rangeslider.min.js"></script>
    <script src="{{ asset('') }}assets/js/sweetalert.js"></script>
    <script src="{{ asset('') }}assets/js/quill.min.js"></script>
    <script src="{{ asset('') }}assets/js/data-table.js"></script>
    <script src="{{ asset('') }}assets/js/prism.js"></script>
    <script src="{{ asset('') }}assets/js/clipboard.min.js"></script>
    <script src="{{ asset('') }}assets/js/feather.min.js"></script>
    <script src="{{ asset('') }}assets/js/simplebar.min.js"></script>
    <script src="{{ asset('') }}assets/js/apexcharts.min.js"></script>
    <script src="{{ asset('') }}assets/js/amcharts.js"></script>
    <script src="{{ asset('') }}assets/js/custom/ecommerce-chart.js"></script>
    <script src="{{ asset('') }}assets/js/custom/custom.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/farol/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2024 04:19:15 GMT -->

</html>
