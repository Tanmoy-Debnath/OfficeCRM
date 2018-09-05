


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('titleName')
    </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('/') }}admin/images/favicon.png" />





    <!-- External Section -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/external/node_modules/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/external/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/external/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css" />
    <!-- End plugin css for this page -->
<!-- inject:css

      <link rel="stylesheet" href="{{ asset('/') }}admin/external/css/style.css">

    -->

    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('/') }}admin/external/images/favicon.html" />












</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav  class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="" href="{{ route('home') }}">
                <img src="{{ asset('/') }}manual/img/southeastbd.png" height="63" width="255"/>
            </a>
            <a class="navbar-brand brand-logo-mini" href="{{ route('home') }}">
                <img src="{{ asset('/') }}manual/img/southeastbd.png"  height="63" width="255" />
            </a>
        </div>
        <div style="background-color: #B59558 !important;" class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="mdi mdi-bookmark-plus-outline"></i>SOUTHEAST INTEGRATED SOLUTION</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">


                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">

                        <div class="dropdown-divider"></div>

                        <div class="dropdown-divider"></div>

                        <div class="dropdown-divider"></div>

                    </div>
                </li>
                <li class="nav-item dropdown">

                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="mdi mdi-alert-circle-outline mx-0"></i>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                    <i class="mdi mdi-email-outline mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-medium text-dark">New user registration</h6>

                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-xl-inline-block">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <span class="profile-text">{{ Session::get('staffName') }}</span>
                        <img class="img-xs rounded-circle" src="{{ asset('/') }}admin/images/faces/face1.jpg" alt="Profile image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <a class="dropdown-item p-0">
                            <div class="d-flex border-bottom">
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                                </div>
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                                </div>
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                                </div>
                            </div>
                        </a>



                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="icon-menu"></span>
            </button>
        </div>
    </nav>











    <!-- End Header -->




    <!--Menu Bar-->





    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
    @include('admin.OnlyFranchisee.menu')

    <!-- partial -->





        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row purchace-popup">

                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <i class="mdi mdi-cube text-danger icon-lg"></i>
                                    </div>
                                    <div class="float-right">
                                        <p class="mb-0 text-right">SOUTHEAST</p>

                                        <div class="fluid-container">
                                            <h3 class="font-weight-medium text-right mb-0"></h3>
                                        </div>

                                    </div>
                                </div>

                                <p class="text-muted mt-3 mb-0">

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <i class="mdi mdi-receipt text-warning icon-lg"></i>
                                    </div>
                                    <div class="float-right">
                                        <p class="mb-0 text-right">INTEGRATED</p>
                                        <div class="fluid-container">
                                            <h3 class="font-weight-medium text-right mb-0"></h3>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted mt-3 mb-0">

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <i class="mdi mdi-poll-box text-success icon-lg"></i>
                                    </div>
                                    <div class="float-right">
                                        <p class="mb-0 text-right">SOLUTION</p>
                                        <div class="fluid-container">
                                            <h3 class="font-weight-medium text-right mb-0"></h3>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted mt-3 mb-0">

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <i class="mdi mdi-account-location text-info icon-lg"></i>
                                    </div>
                                    <div class="float-right">
                                        <p class="mb-0 text-right">LIMITED</p>
                                        <div class="fluid-container">
                                            <h3 class="font-weight-medium text-right mb-0"></h3>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted mt-3 mb-0">

                                </p>
                            </div>
                        </div>
                    </div>
                </div>






                @yield('content')




                <!--weather card-->

                <!--weather card ends-->






            </div>


            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="" target="_blank">Southeast Integrated Solutions Ltd.</a>. All rights reserved.Tanmoy</span>
                    <!--<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
            -->
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{ asset('/') }}admin/vendors/js/vendor.bundle.base.js"></script>
<script src="{{ asset('/') }}admin/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('/') }}admin/js/off-canvas.js"></script>
<script src="{{ asset('/') }}admin/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('/') }}admin/js/dashboard.js"></script>
<!-- End custom js for this page-->
</body>

</html>
