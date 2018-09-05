@extends('admin.franchiseeInfo.franchisee-info')
@section('title')
    User Information
@endsection

@section('content')
    <!--
    <p>User Name : {{ Session::get('franchiseeName') }}</p>
    <p>Full Name  : {{ Session::get('franchiseefirstName') }}  {{ Session::get('franchiseeLastName') }}</p>
    <p>Father Name  : {{ Session::get('franchiseeFatherName') }}</p>
    <p>Date of Birth  : {{ Session::get('franchiseeBdate') }}-{{ Session::get('franchiseeBmonth') }}-{{ Session::get('franchiseeByear') }}</p>
    <p>Sex : {{ Session::get('franchiseesex') }}</p>
    <p>Address : {{ Session::get('franchiseeAddress') }}</p>
    <p>Phone Number : {{ Session::get('franchiseePhone') }}</p>
    <p>Bkash Number  : {{ Session::get('franchiseebkash') }}</p>
    <p>DBBL Number  : {{ Session::get('franchiseedbbl') }}</p>
    <p>Phone Number  : {{ Session::get('franchiseefirstName') }}</p>
    <p>NID Number  : {{ Session::get('franchiseeNid') }}</p>
    <p>SIS ID  : {{ Session::get('franchiseesisid') }}</p>
    <p>Slot Number  : {{ Session::get('franchiseeslot') }}</p>
    <p>Payment  : {{ Session::get('franchiseepayment') }}</p>
    <p>Renew : {{ Session::get('franchiseerenew') }}</p>

-->
    <div class="container col-md-12">
        <table class="table table-hover table-primary">

            <tbody>

            <tr>

                <th scope="col">Franchisee Id :</th>
                <th scope="col">{{ Session::get('franchiseeId') }}</th>

            </tr>            
            <tr>

                <th scope="col">User Name :</th>
                <th scope="col">{{ Session::get('franchiseeName') }}</th>

            </tr>
            <tr>

                <td>Full Name  :</td>
                <td>{{ Session::get('franchiseefirstName') }} {{ Session::get('franchiseeLastName') }}</td>

            </tr>
            <tr>


                <td>Father Name  : </td>
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