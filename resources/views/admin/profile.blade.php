@extends('admin.master')

@section('content')


    <div class="container col-md-12">
        <table class="table table-hover table-primary">

            <tbody>
            <tr>

                <th scope="col">ID :</th>
                <th scope="col">{{ Session::get('franchiseeName') }}</th>

            </tr>
            <tr>

                <td>Full Name</td>
                <td>{{ Session::get('franchiseefirstName') }} {{ Session::get('franchiseeLastName') }}</td>

            </tr>
            <tr>


                <td>Email Address: </td>
                <td>{{ Session::get('franchiseeFatherName') }}</td>
            </tr>

            <tr>


                <td>Created at </td>
                <td>{{ Session::get('franchiseeBdate') }}-{{ Session::get('franchiseeBmonth') }}-{{ Session::get('franchiseeByear') }}</td>
            </tr>
            <tr>


                <td>Updated at</td>
                <td>{{ Session::get('franchiseesex') }}</td>
            </tr>
            
            </tbody>
        </table>

    </div>


@endsection