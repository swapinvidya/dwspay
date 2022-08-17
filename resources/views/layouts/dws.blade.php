<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <!--csrf-->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="robots" content="noindex,nofollow">
    <title>Material Pro Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- chartist CSS -->
    <link href="./dws/assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="./dws/assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="./dws/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="./dws/assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./dws/css/style.min.css?v=12" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <!-- Calender CSS-->
    <link rel="stylesheet" href="./dws/calander/css/style.css" />
    <link rel="stylesheet" href="./dws/calander/css/theme.css" />


   

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light bg-white shadow">
                <div class="navbar-header bg-white" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand ms-4" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                          
                            <!-- Dark Logo icon-->
                            <img src="./dws/assets/images/logo/logo_low_res.png" width="55px" alt="homepage" class="dark-logo" /> 

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <b class="logo-text">
                            <p style="color:#2492eb ; font-weight:normal; font-size:large;"> <span class = "" style="color:#145693 ; font-weight:bolder; font-size:x-large;">DWS</span>
                             PAY.com</p>
                        </b>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-lg-none d-md-block ">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white "
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <li class="nav-item search-box">
                            <a class="nav-link text-muted" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search" style="display: none;">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->

                        <!----Swapin Menu topbar-->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <a href="http://Google.com " class="nav-link" style="color:black !important;">Home</a>
                        </li>
                        <li class="nav-item" >
                            <a href="#" class="nav-link" style="color:black !important;">About Us</a>
                        </li>
                        <li class="nav-item" >
                            <a href="#" class="nav-link" style="color:black !important;">Services</a>
                        </li>
                        <li class="nav-item" >
                            <a href="#" class="nav-link" style="color:black !important;">Contact Us</a>
                        </li>
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" style="color:black !important;" aria-expanded="false">
                                Language
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="nav-item">
                                    <a href="#" class="nav-link" style="color:black !important;">
                                        <img src="https://img.icons8.com/color/48/000000/india.png" height="25"/>&nbsp;हिन्दी
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link "  style="color:black !important;">
                                        <img src="https://img.icons8.com/color/48/000000/great-britain.png" height="25"/>&nbsp;English
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" style="color:black !important;">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="color:black !important;">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black !important;" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar mt-2" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav mt-5">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link active"
                                href="/Admin" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span
                                    class="hide-menu">Home</span></a>
                        </li>

                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('r_essentail')}}" aria-expanded="false"><i class="mdi me-2 mdi-view-grid"></i><span
                                    class="hide-menu">Essential Services</span></a>
                        </li>

                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('r_services')}}" aria-expanded="false"><i class="mdi me-2 mdi-chart-scatterplot-hexbin"></i><span
                                    class="hide-menu">Services</span></a>
                        </li>

                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('r_payment')}}" aria-expanded="false"><i class="mdi me-2 mdi-credit-card"></i><span
                                    class="hide-menu">Payment</span></a>
                        </li>

                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('r_report')}}" aria-expanded="false"><i class="mdi me-2 mdi-blogger"></i><span
                                    class="hide-menu">New Report</span></a>
                        </li>

                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('r_notice')}}" aria-expanded="false"><i class="mdi me-2 mdi-clipboard"></i><span
                                    class="hide-menu">Notice board</span></a>
                        </li>

                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('r_loan')}}" aria-expanded="false"><i class="mdi me-2 mdi-bank"></i><span
                                    class="hide-menu">Loans</span></a>
                        </li>

                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('r_cdm')}}" aria-expanded="false"><i class="mdi me-2 mdi-cash-100"></i><span
                                    class="hide-menu">CDM</span></a>
                        </li>

                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('r_support')}}" aria-expanded="false"><i class="mdi me-2 mdi-phone"></i><span
                                    class="hide-menu">Support</span></a>
                        </li>
                        
                        <li class="text-center p-20 upgrade-btn">
                            <a href="#"
                                class="btn btn-warning text-white mt-4" target="_blank">Upgrade to
                                Pro</a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <div class="sidebar-footer">
                <div class="row">
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i
                                class="ti-settings"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                                class="mdi mdi-gmail"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                                class="mdi mdi-power"></i></a>
                    </div>
                </div>
            </div>
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!--<div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Dashboard</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                            <a href="https://www.wrappixel.com/templates/materialpro/"
                                class="btn btn-danger d-none d-md-inline-block text-white" target="_blank">Upgrade to
                                Pro</a>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
           
            @yield('content')
            <div class="col-lg-4">
                <div class="card w-100">
                    <div class="card-body text-center">
                        <div class="profile-pic mb-3 mt-3">
                            <img src="./dws/assets/images/users/2.jpg" width="100" class="rounded-circle" alt="user" />
                            <h4 class="mt-3 mb-0">{{Auth::user()->name}}</h4>
                            <strong>{{Auth::user()->roles->rolename}}</strong><br>
                            @if (Auth::user()->roles->rolename !== "Admin" )
                            <button  class="btn btn-primary btn-sm">Upgrade</button>
                            @endif
                            <input type="button" id="walbal" class="btn btn-danger btn-sm" value="Wallet Balance Rs {{Auth::user()->balance}}"/>
                        </div>
                        <!--calander-->
                        <div class="calendar-container"></div>
                        <!--Calander Ends-->
                        <!--Location-->
                        <div class="pt-3 pb-3">
                            <strong >Location</strong>
                        </div>
                        <div id="map"></div>
                        <!--Location Ends-->
                    </div>
                    <div class="p-4 border-top mt-3">
                        <div class="row text-center">
                            <div class="col-6 border-end">
                                <a href="#" class="link d-flex align-items-center justify-content-center font-weight-medium"><i class="mdi mdi-message fs-6 me-1"></i>Message</a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="link d-flex align-items-center justify-content-center font-weight-medium"><i class="mdi mdi-developer-board fs-6 me-1"></i>Portfolio</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2022 for DWS Pay  by <a href="#">SP MANAGERS </a><br>
                <small>Coded by Swapin Designed by priyanka kumari</small>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="./dws/assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="./dws/assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./dws/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="./dws/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="./dws/js/sidebarmenu.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="./dws/assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="./dws/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="./dws/assets/plugins/d3/d3.min.js"></script>
    <script src="./dws/assets/plugins/c3-master/c3.min.js"></script>
    <!--Custom JavaScript -->
    <script src="./dws/js/pages/dashboards/dashboard1.js"></script>
    <script src="./dws/js/custom.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>


    <script>
        $(document).ready(function(){
            $('.slider1').bxSlider({
                minSlides: 1,
                maxSlides: 6,
                mode: 'horizontal',
                adaptiveHeight: true,
                slideWidth: 150,
                moveSlides: 4,
                auto: true,
                autoControls: true
            });
        });
    </script>
    
    
    <script>
        function myMap() {
            if (navigator.geolocation) {
               navigator.geolocation.getCurrentPosition(function get(p){
                    console.log(p);
                    var lat = p.coords.latitude;
                    var long = p.coords.longitude;
                    var mapProp= {
                        center:new google.maps.LatLng(lat,long),
                        zoom:15,
                    };
                    var map = new google.maps.Map(document.getElementById("map"),mapProp);
               });
            }
            else{
                console.log("error");
            }
        }
        
    </script>

    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAq9w4nDvhz1HnIbTZEdjoUspOW6L7uLq4&callback=myMap">
    </script>
    
    <!--Calander-->
    <script src="./dws/calander/js/calendar.min.js"></script>
    <script>
        $(function(){
            $('.calendar-container').calendar({
                onClickDate: function (date) {
                    alert("You have clicked on"+date);
                }
            });
        });
    </script>
    <script>
        $('#walbal').click(function() { 

            uid = {{Auth::id()}};
            token = '{{ csrf_token() }}';

            swal({
                    title: 'Send Wallet Topup Request',
                    text: 'Add Topup Amount (In INR)',
                    content: "input",
                    button: {
                                text: "Send Request!",
                                closeModal: false,
                            },
                })
                    .then(name => {
                            if (!name) throw null;
                            return fetch(`/topupRequest?name=${name}&id=${uid}`,{
                                method: 'POST', // or 'PUT'
                                headers: {
                                    'Content-Type': 'application/json',
                                    "X-CSRF-Token": token,
                                    }
                            });
                        })
                    .then(results => {
                            //console.log(results);
                            return results.json();
                        })

                    .then(json => {
                        console.log(json);
                        const Amt = json.Amount;
                        const Success = json.success;
                    if (!Amt) {
                        return swal("Reload Not Successfull!");
                    }
                    swal({
                        title: "Top result:",
                        text: Amt,
                        icon: 'success',
                    });

                    document.getElementById("walbal").setAttribute('value','Wallet Balance Rs '+json.bal);
                })
                    .catch(err => {
                    if (err) {
                        swal("Oh noes!", "The request failed!", "error");
                    } else {
                        swal.stopLoading();
                        swal.close();
                    }
                });

            // $.ajax({
            //     url: 'controller/addBookmark',
            //     type: 'POST',
            //     data: {'submit':true}, // An object with the key 'submit' and value 'true;
            //     success: function (result) {
            //     alert("Your bookmark has been saved");
            //     }
            // });  
        });
    </script>

    @yield('script')
    
</body>

</html>