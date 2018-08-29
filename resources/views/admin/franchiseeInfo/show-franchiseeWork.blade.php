
@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <h1 class="page-title">Manage Franchisee Table</h1>
        <div class="card">
            <div class="card-body">
                <h2 class="text-center text-success" id="msg">{{ Session::get('message')  }}</h2>
                <div class="row">
                    <div class="col-12">
                        <table id="order-listing" class="table table-striped table-responsive tab-pane" style= "text-align: center;">
                            <thead>

                            <tr>
                                <th>ID. No.</th>

                                <th>User Name</th>
                                <th>Record No.</th>
                                <th>Policy No.</th>
                                <th>First Name:</th>
                                <th>Last Name:</th>
                                <th>City:</th>
                                <th>Phone:</th>
                                <th>Generel Practitioner(gp) Code:</th>
                                <th>Paid Amount:</th>
                                <th>Policy Date:</th>
                                <th>Medical Card No:</th>

                                <th>State:</th>
                                <th>Martial Status:</th>
                                <th>Hospital/Claim Days:</th>
                                <th>Net Amount:</th>



                                <th>Date & Time</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i=1)
                            @foreach($works as $work)

                                <tr>
                                    <th>{{ $i++ }}</th>
                                    <th>{{ $work->user_name }}</th>
                                    <th>{{ $work->record }}</th>
                                    <th>{{ $work->policy }}</th>

                                    <th>{{ $work->f_name }}</th>
                                    <th>{{ $work->l_name }}</th>
                                    <th>{{ $work->city }}</th>
                                    <th>{{ $work->phone }}</th>
                                    <th>{{ $work->gp }}</th>
                                    <th>{{ $work->paid_amount }}</th>
                                    <th>{{ $work->date }}-{{ $work->month }}-{{ $work->year }}</th>

                                    <th>{{ $work->medical }}</th>
                                    <th>{{ $work->state }}</th>
                                    <th>{{ $work->marit }}</th>

                                    <th>{{ $work->claims }}</th>
                                    <th>{{ $work->n_amount }}</th>
                                    <th>{{ $work->created_at }}</th>

                                    <td>
                                        <a href="">
                                            <button  class="btn btn-outline-primary">Edit</button>

                                        </a>

                                    </td>

                                    <td>
                                        <a href="" >
                                            <button class="btn btn-outline-danger">Delete</button>
                                        </a>

                                    </td>











                                </tr>
                            @endforeach








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














