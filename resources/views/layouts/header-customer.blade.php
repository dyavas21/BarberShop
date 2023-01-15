<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>{{ $title }}</title>
        <link rel="stylesheet" href="assets/css/style.css" />
        <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap"
        rel="stylesheet"
      />
        <link href="/assets/css/admin-styles.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="assets\img\favicon.png">
        <script data-search-pseudo-elements="" defer="" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="nav-fixed">
        <nav class="topnav navbar navbar-expand shadow navbar-dark bg-dark" id="sidenavAccordion">
            <a class="navbar-brand" href="/customer">Customer</a>
            <button class="btn btn-icon btn-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i data-feather="menu"></i></button>
            <ul class="navbar-nav align-items-center ml-auto">
                <li class="nav-item dropdown no-caret mr-2 dropdown-user">
                    @if (is_null($dataCustomerDesc))
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"></a>
                    @else
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="{{ asset('photo/'.$dataCustomerDesc->photo ) }}"></a>
                    @endif
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                        <h6 class="dropdown-header d-flex align-items-center">
                            @if (is_null($dataCustomerDesc))
                            <img class="dropdown-user-img" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                            @else
                            <img class="dropdown-user-img" src="{{ asset('photo/'.$dataCustomerDesc->photo ) }}">                        
                            @endif
                            <div class="dropdown-user-details">
                                <div class="dropdown-user-details-name">{{ ucfirst($dataUser->fname ) }} {{ ucfirst($dataUser->lname) }}</div>
                                <div class="dropdown-user-details-email">{{ $dataUser->email }}</div>
                            </div>
                        </h6>
                        <div class="dropdown-divider"></div>
                        {{-- <a class="dropdown-item" href="/barber-profile">
                            <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                            Account
                        </a> --}}
                        <a class="dropdown-item" href="/logout">
                            <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sidenav shadow-right sidenav-dark bg-dark">
                    <div class="sidenav-menu">
                        <div class="nav accordion" id="accordionSidenav">
                            @if (is_null($dataCustomerDesc))
                            <a class="nav-link" href="/customer">Dashboard</a>
                            <a class="nav-link" href="/customer-profile-inti">Lengkapi Profile Inti</a>
                        @else 
                            <a class="nav-link" href="/">Home</a>
                            <a class="nav-link" href="/customer">Dashboard</a> 
                            <a class="nav-link" href="/customer-profile-inti-view">View & Edit Profile</a>  
                            <a class="nav-link" href="/customer-product">Product Dibeli</a>  
                        @endif                  
                        </div>
                    </div>
                    <div class="sidenav-footer">
                        <div class="sidenav-footer-content">
                            <div class="sidenav-footer-subtitle">Logged in as:</div>
                            <div class="sidenav-footer-title">{{ ucfirst($dataUser->fname ) }} {{ ucfirst($dataUser->lname) }}</div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">

                @yield('content')

                <footer class="footer mt-auto footer-light">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 small">Copyright &#xA9; DBarbershop 2022</div>
                            <div class="col-md-6 text-md-right small">
                                <a href="#!">Privacy Policy</a>
                                &#xB7;
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/chart-area-demo.js"></script>
        <script src="assets/js/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/datatables-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/date-range-picker-demo.js"></script>
        <script src="assets/js/sb-customizer.js"></script>
        <sb-customizer project="sb-admin-pro"></sb-customizer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        @if(Session::has('success'))
        <script>
             toastr.success("{{ Session::get('success') }}")
        </script>
        @endif
    </body>
</html>
