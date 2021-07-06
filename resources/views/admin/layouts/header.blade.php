<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Lp3I berani punya skill" />
    <meta name="author" content="Politeknik LP3I Bandung" />
    <title>PLB - CMS</title>
    <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
</head>
<style>
    .side {
        background-image: url("{{ asset('assets/images/batikweb.png') }}");
        position: absolute;
        z-index: -1;
        height: 100%;
        opacity: .5;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

</style>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="/cms/en/profile">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form action="{{ route('logout') }}" id="logout-form" class="d-none" method="post">@csrf</form>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="{{ url('/cms/en/') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link" href="{{ url('/cms/en/testimonial') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Testimonial
                        </a>
                        <a class="nav-link" href="{{ url('/cms/en/slider') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                            Slider
                        </a>
                        <a class="nav-link" href="{{ url('/cms/en/campus') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Kampus
                        </a>
                        <a class="nav-link" href="{{ url('/cms/en/galleries') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-camera"></i></div>
                            Gallery
                        </a>
                        <a class="nav-link" href="{{ url('/cms/en/organization') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                            Struktur Organisasi
                        </a>
                        <a class="nav-link" href="{{ url('/cms/en/partner') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-office"></i></div>
                            Partner
                        </a>
                        <a class="nav-link" href="{{ url('/cms/en/ukm') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-office"></i></div>
                            UKM
                        </a>
                        <a class="nav-link" href="{{ url('/cms/en/prodi') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-office"></i></div>
                            Prodi
                        </a>
                        <div class="sb-sidenav-menu-heading">Contents</div>
                        <a class="nav-link" href="{{ url('/cms/en/articles') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                            News & Article
                        </a>
                    </div>
                </div>

                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
