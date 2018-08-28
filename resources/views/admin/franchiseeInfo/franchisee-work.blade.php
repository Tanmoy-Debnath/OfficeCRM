@extends('admin.franchiseeInfo.franchisee-info')
@section('title')
    Work Information
@endsection

@section('content')

    <style>
        .l1{
            font-weight: bold;
        }

    </style>
    <h2 style="text-align: center">Fill the Form and Submit</h2>
    <br> <br>
    <div class="container" style="margin-left: 15%;">

        <div class="row">

            <div class="col-md-4 col-md-offset-1">


            <div class="form-group">
                <label for="email" class="l1">Record No.</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd" class="l1">Policy No.</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>
                <div class="form-group">
                    <label for="email" class="l1">First Name:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="email" class="l1">City:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="email" class="l1">Phone:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="email" class="l1">Generel Practitioner(gp) Code:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="email" class="l1">Paid Amount:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>



            </div>



            <div class="col-md-4">

                <div class="form-group">
                    <label for="email" class="l1">Policy Date:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="pwd" class="l1">Medical Card No:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
                <div class="form-group">
                    <label for="email" class="l1">Last Name:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="email" class="l1">State:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="email" class="l1">Martial Status:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="email" class="l1">Hospital/Claim Days:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label class="l1" for="email">Net Amount:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>


            </div>


    </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="submit" class="btn btn-secondary">Clear</button>



    </div>
@endsection