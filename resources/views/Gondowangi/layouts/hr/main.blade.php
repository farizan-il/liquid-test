<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Dashboard &mdash; Gondowangi</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('template/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('template/modules/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/modules/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('template/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/components.css') }}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                            data-width="250">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        <div class="search-backdrop"></div>
                        <div class="search-result">
                            <div class="search-header">
                                Histories
                            </div>
                            <div class="search-item">
                                <a href="#">How to hack NASA using CSS</a>
                                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                            </div>
                            <div class="search-item">
                                <a href="#">Kodinger.com</a>
                                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                            </div>
                            <div class="search-item">
                                <a href="#">#Stisla</a>
                                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                            </div>
                            <div class="search-header">
                                Result
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <img class="mr-3 rounded" width="30"
                                        src="{{ asset('template/img/products/product-3-50.png') }}" alt="product">
                                    oPhone S9 Limited Edition
                                </a>
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <img class="mr-3 rounded" width="30"
                                        src="{{ asset('template/img/products/product-2-50.png') }}" alt="product">
                                    Drone X2 New Gen-7
                                </a>
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <img class="mr-3 rounded" width="30"
                                        src="{{ asset('template/img/products/product-1-50.png') }}" alt="product">
                                    Headphone Blitz
                                </a>
                            </div>
                            <div class="search-header">
                                Projects
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <div class="search-icon bg-danger text-white mr-3">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    Stisla Admin Template
                                </a>
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <div class="search-icon bg-primary text-white mr-3">
                                        <i class="fas fa-laptop"></i>
                                    </div>
                                    Create a new Homepage Design
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset('template/img/avatar/avatar-1.png') }}"
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">Gondowangi</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">GW</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                            <a class="nav-link" href="/dashboard">
                                <i class="fas fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
            
                        <li class="menu-header">Main Content</li>
                        <li class="{{ Request::is('manajemenModul') ? 'active' : '' }}">
                            <a class="nav-link" href="/manajemenModul">
                                <i class="fas fa-folder"></i>
                                <span>Manajemen Modul</span>
                            </a>
                        </li>
            
                        <li class="{{ Request::is('evaluasikaryawan') ? 'active' : '' }}">
                            <a class="nav-link" href="/evaluasikaryawan">
                                <i class="fas fa-chart-line"></i>
                                <span>Evaluasi Karyawan</span>
                            </a>
                        </li>
            
                        <li class="{{ Request::is('kelolaKaryawan') ? 'active' : '' }}">
                            <a class="nav-link" href="/kelolaKaryawan">
                                <i class="fas fa-users-cog"></i>
                                <span>Kelola Karyawan</span>
                            </a>
                        </li>
            
                        <li class="menu-header">Manage</li>
                        <li class="{{ Request::is('profile') ? 'active' : '' }}">
                            <a class="nav-link" href="/profile">
                                <i class="fas fa-user"></i>
                                <span>Profile</span>
                            </a>
                        </li>
            
                        <li class="{{ Request::is('logout') ? 'active' : '' }}">
                            <a class="nav-link" href="/logout">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </aside>
            </div>
            

            <!-- Main Content -->
            @yield('content')
            <!-- Akhir Main Content -->

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad
                        Nauval Azhar</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('template/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('template/modules/popper.js') }}"></script>
    <script src="{{ asset('template/modules/tooltip.js') }}"></script>
    <script src="{{ asset('template/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('template/modules/moment.min.js') }}"></script>
    <script src="{{ asset('template/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('template/modules/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('template/modules/chart.min.js') }}"></script>
    <script src="{{ asset('template/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('template/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('template/js/page/index.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('template/js/scripts.js') }}"></script>
    <script src="{{ asset('template/js/custom.js') }}"></script>
</body>

</html>
