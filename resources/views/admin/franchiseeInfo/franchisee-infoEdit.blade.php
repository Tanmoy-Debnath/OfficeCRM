<!DOCTYPE HTML>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Franchisee Login</title>
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
<style>
    #login{
        margin-top: 25%;
        margin-left: 20%;
    }
</style>

<body>




<div class="single-wl3">
    <div class="container">
        <div class="row" id="login">

            <div class="col-md-7 well ">
                <h3 style="font-family: 'Chonburi', cursive; text-align: center;">Franchisee Login</h3>
                <h3 class="text-center text-success">{{ Session::get('message')  }}</h3>
                <br>

                <div class="form-group">
                    <label class="control-label col-md-3">User name :</label>
                    <div class="col-md-9">
                        <input type="text" value="{{ $frnachiseelogin->user_name }}" name="user_name" class="form-control"/>
                        <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label class="control-label col-md-3">Password :</label>
                    <div class="col-md-9">
                        <input type="text" name="password" value="{{ $frnachiseelogin->password }}" class="form-control"/>
                        <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                    </div>
                </div>
                <br><br>

                <div class="form-group">
                    <input type="submit" value="Login" name="btn" class="form-control btn btn-success">
                </div>



            </div>
        </div>
    </div>
</div>
</body>
</html>
