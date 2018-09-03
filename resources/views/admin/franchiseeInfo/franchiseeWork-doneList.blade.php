@extends('admin.franchiseeInfo.franchisee-info')
@section('title')
    User Information
@endsection

@section('content')

<div class="container col-md-12">
        <table class="table table-hover table-primary">

            <tbody>
            <tr>

                <th scope="col">record :</th>
                <th scope="col">{{ Session::get('franchiseeName') }}</th>

            </tr>
            <tr>

                <td>policy  :</td>
                <td>{{ Session::get('franchiseefirstName') }} {{ Session::get('franchiseeLastName') }}</td>

            </tr>
            <tr>


                <td>f_name  : </td>
                <td>{{ Session::get('franchiseeFatherName') }}</td>
            </tr>

            <tr>


                <td>Date of Birth  : </td>
                <td>{{ Session::get('franchiseeBdate') }}-{{ Session::get('franchiseeBmonth') }}-{{ Session::get('franchiseeByear') }}</td>
            </tr>
            <tr>


                <td>Sex :</td>
                <td>{{ Session::get('franchiseesex') }}</td>
            </tr>
            <tr>


                <td>Address :</td>
                <td>{{ Session::get('franchiseeAddress') }}</td>
            </tr>

            <tr>


                <td>Phone Number : </td>
                <td>{{ Session::get('franchiseePhone') }}</td>
            </tr>

            <tr>


                <td>NID Number  :</td>
                <td>{{ Session::get('franchiseeNid') }}</td>
            </tr>

            <tr>


                <td>SIS ID  : </td>
                <td>{{ Session::get('franchiseesisid') }}</td>
            </tr>


            <tr>


                <td>Slot Number  :</td>
                <td>{{ Session::get('franchiseeslot') }}</td>
            </tr>


            <tr>


                <td>Payment  :</td>
                <td>{{ Session::get('franchiseepayment') }}</td>
            </tr>


            <tr>


                <td>Payment  :</td>
                <td>{{ Session::get('franchiseepayment') }}</td>
            </tr>


            <tr>


                <td>Renew :</td>
                <td>{{ Session::get('franchiseerenew') }}</td>
            </tr>







            </tbody>
        </table>

    </div>



@endsection