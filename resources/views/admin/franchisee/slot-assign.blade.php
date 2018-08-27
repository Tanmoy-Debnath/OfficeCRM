
@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <h1 class="page-title">Assign Slot Table</h1>
        <div class="card">
            <div class="card-body">
                <h2 class="text-center text-success" id="msg">{{ Session::get('message')  }}</h2>
                <div class="row">
                    <div class="col-12">
                        <table id="order-listing" class="table table-striped" style="width:100%; text-align: center;">
                            <thead>
                            <tr>
                                <th>ID. No.</th>
                                <th>File Name</th>
                                <th>Date & Time</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>

                                <tr>

                                    <th></th>
                                    <th></th>
                                    <th></th>


                                    <td>
                                        <a href="">
                                            <button  class="btn btn-outline-danger">Delete</button>

                                        </a>

                                    </td>


                                </tr>








                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>































































    <script src="{{ asset('/') }}admin/external/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('/') }}admin/external/node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{ asset('/') }}admin/external/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}admin/external/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('/') }}admin/external/node_modules/datatables.net/js/jquery.dataTables.js"></script>
    <script src="{{ asset('/') }}admin/external/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('/') }}admin/external/js/off-canvas.js"></script>
    <script src="{{ asset('/') }}admin/external/js/hoverable-collapse.js"></script>
    <script src="{{ asset('/') }}admin/external/js/misc.js"></script>
    <script src="{{ asset('/') }}admin/external/js/settings.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('/') }}admin/external/js/data-table.js"></script>
@endsection



