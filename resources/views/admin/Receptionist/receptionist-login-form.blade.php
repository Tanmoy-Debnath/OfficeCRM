

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
    <link rel="stylesheet" href="{{ asset('/') }}admin/new/style.css">
    <script src="{{ asset('/') }}admin/new/jquery.js"></script>

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
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="auto-form-wrapper">
                        <h3 style="color: green; text-align: center;">{{ Session::get('message') }}</h3>
                   {{ Form::open([ 'route' => 'receptionist-logincheck', 'method' => 'POST']) }}
                        <div class="form-group">
                            <label style="color: grey;" class="label">Username</label>

                            <input type="text" name="user_name" class="form-control" placeholder="Username">


                        </div>

                        <div class="form-group">
                            <label class="label" style="color: grey;">Password</label>

                            <input type="password" name="password" class="form-control" placeholder="*********">


                        </div>
                        <div class="form-group">

                            <input type="submit" value="Login" name="btn" class="btn btn-primary submit-btn btn-block">



                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <div class="form-check form-check-flat mt-0">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" checked> Keep me signed in
                                </label>
                            </div>

                        </div>

               {{ Form::close() }}


                    </div>
                    <ul class="auth-footer">
                        <li>
                            <a href="#">Conditions</a>
                        </li>
                        <li>
                            <a href="#">Help</a>
                        </li>
                        <li>
                            <a href="#">Terms</a>
                        </li>
                    </ul>
                    <p class="footer-text text-center">copyright © 2018 Bootstrapdash. All rights reserved.</p>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

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