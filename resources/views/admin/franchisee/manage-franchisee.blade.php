
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

                                <th>Full Name</th>
                                <th>User Name</th>
                                <th>Password</th>
                                <th>ID Creation date</th>
                                <th>Father Name</th>
                                <th>Sex</th>
                                <th>DOB</th>
                                <th>Adress</th>
                                <th>Phone no.</th>
                                <th>bKash no.</th>
                                <th>DBBL no.</th>
                                <th>NID no.</th>
                                <th>SIS ID</th>
                                <th>No. of Slot</th>
                                <th>No. of Payment</th>






                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i=1)
                            @foreach($franchisees as $franchisee)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $franchisee->title }} {{ $franchisee->f_name }} {{ $franchisee->l_name }}</td>
                                    <td>{{ $franchisee->user_name }}</td>
                                    <td>{{ $franchisee->password }}</td>
                                    <td>{{ $franchisee->datee }} - {{ $franchisee->monthh }} - {{ $franchisee->yearr }}</td>
                                    <td>{{ $franchisee->father_name }}</td>
                                    <td>{{ $franchisee->sex }}</td>
                                    <td>{{ $franchisee->date }} - {{ $franchisee->month }} - {{ $franchisee->year }}</td>
                                    <td>{{ $franchisee->address }}</td>
                                    <td>{{ $franchisee->phone_number }}</td>
                                    <td>{{ $franchisee->bkash }}</td>
                                    <td>{{ $franchisee->dbbl }}</td>
                                    <td>{{ $franchisee->nid }}</td>
                                    <td>{{ $franchisee->sis_id }}</td>
                                    <td>{{ $franchisee->no_slot }}</td>
                                    <td>{{ $franchisee->no_payment }}</td>





                                    <td>
                                        <a href="{{ route('edit-franchisee', ['id'=>$franchisee->id]) }}">
                                            <button  class="btn btn-outline-primary">Edit</button>

                                        </a>

                                    </td>

                                    <td>
                                        <a href="{{ route('delete-franchisee', ['id'=>$franchisee->id]) }}" >
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














