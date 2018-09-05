@extends('admin.franchiseeInfo.franchisee-info')
@section('title')
    User Information
@endsection

@section('content')


<div class="container col-md-12">
        <table class="table table-hover table-primary" id="order-listing" class="table table-striped">

            <thead>
	            <tr>
	                <th>Record No :</th>
	                <th>Policy Date:</th>
	                <th>Policy No. </th>
					<th>Medical Card No: </th>
					<th>First Name:</th>
					<th>Last Name:</th>
					<th>City: </th>
					<th>State:</th>
					<th>Phone: </th>
					<th>Martial Status:</th>
					<th>Generel Practitioner(gp) Code:</th>
					<th>Hospital/Claim Days:</th>
					<th>Paid Amount:</th>
					<th>Net Amount:</th>
	            </tr>
        	</thead>
            <tbody>
	            <tr>                
	                <td>{{ Session::get('franchiseeName') }}</td>
	                <td>{{ Session::get('franchiseefirstName') }} {{ Session::get('franchiseeLastName') }}</td>              
	                <td>{{ Session::get('franchiseeFatherName') }}</td>              
	                <td>{{ Session::get('franchiseeBdate') }}-{{ Session::get('franchiseeBmonth') }}-{{ Session::get('franchiseeByear') }}</td>
	                <td>{{ Session::get('franchiseesex') }}</td>
	                <td>{{ Session::get('franchiseeAddress') }}</td>
	                <td>{{ Session::get('franchiseePhone') }}</td>
	                <td>{{ Session::get('franchiseeNid') }}</td>
	                <td>{{ Session::get('franchiseesisid') }}</td>               
	                <td>{{ Session::get('franchiseeslot') }}</td>                
	                <td>{{ Session::get('franchiseepayment') }}</td>
	                <td>{{ Session::get('franchiseepayment') }}</td>
	                <td>{{ Session::get('franchiseerenew') }}</td>
	                <td>{{ Session::get('franchiseerenew') }}</td>
	            </tr>
            </tbody>
        </table>

    </div>




@endsection