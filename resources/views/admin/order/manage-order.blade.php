@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <h1 class="page-title">Manage Order Table</h1>
        <div class="card">
            <div class="card-body">
                <h2 class="text-center text-success" id="msg">{{ Session::get('message')  }}</h2>
                <div class="row">
                    <div class="col-12">
                        <table id="order-listing" class="table table-striped" style="width:100%; text-align: center;">
                            <thead>
                            <tr>
                                <th>ID. No.</th>
                                <th>
                                    Order Date:</th>
                                <th>
                                    Guest ID :</th>
                                <th>Order Number :</th>
                                <th>Order Amount :</th>
                                <th>Order Due :</th>
                                <th>Reffered By :</th>
                                <th>Date & Time</th>
                                <th>Edit</th>
                                <th>Delete</th>

                            </tr>
                            </thead>
                            <tbody>
                                  @php($i=1)
                                  @foreach($orders as $order)
                                <tr>

                                    <th>{{ $i++ }}</th>
                                    <th>{{ $order->date }}-{{ $order->month }}-{{ $order->year }}</th>
                                    <th>{{ $order->guest_id }}</th>
                                    <th>{{ $order->order_no }}</th>
                                    <th>{{ $order->order_amount }}</th>
                                    <th>{{ $order->order_due }}</th>
                                    <th>{{ $order->reffered }}</th>
                                    <th>{{ $order->created_at }}</th>



                                                   <td>
                                                       <a href="{{ route('edit-order', ['id'=>$order->id]) }}">
                                                           <button  class="btn btn-outline-primary">Edit</button>

                                                       </a>

                                                   </td>

                                                   <td>
                                                       <a href="{{ route('delete-order', ['id'=>$order->id]) }}">
                                                           <button  class="btn btn-outline-danger">Delete</button>

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



