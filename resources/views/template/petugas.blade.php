
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') PeMas | Pengaduan Masyarakat</title> 

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/dist/assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('style/dist/assets/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('style/dist/assets/vendors/simple-datatables/style.css') }}">

    <link rel="stylesheet" href="{{ asset('style/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('style/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/dist/assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('style/dist/assets/images/favicon.svg') }}" type="image/x-icon">
</head>

<body>
<div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="/dashboard"><img src="{{ asset('style/dist/assets/images/logo/logo-pemas.png') }}" alt="Logo" srcset="" id="logo">
                            <style type="text/css">#logo{width:200px; height:70px;}</style></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        
                    <li class="sidebar-item ">
                            <a href="#" class='sidebar-link'>
                            <i class="bi bi-file-person-fill"></i>
                                <span>Profil</span>
                            </a>
                        </li>

                        <li class="sidebar-item ">
                            <a href="/petugas" class='sidebar-link'>
                                <i class="bi bi-house-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                                <span>Masyarakat</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="/petugas/daftarmasyarakat">Daftar Masyarakat</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                            <a href="/logout" class='sidebar-link'>
                                <!-- <i class="bi bi-grid-1x2-fill"></i> -->
                                <button class="btn btn-primary">Log Out</button>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            @yield('content')


            <!-- <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div>
                </div>
            </footer> -->
        </div>
    </div>

    <script src="{{ asset('style/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('style/dist/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('style/dist/assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('style/dist/assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('style/dist/assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="{{ asset('style/dist/assets/js/main.js') }}"></script>

    
</body>

</html>