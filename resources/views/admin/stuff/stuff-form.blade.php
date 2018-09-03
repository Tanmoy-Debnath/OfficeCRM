@extends('admin.master')
@section('content')

<div class="single-wl3">
    <div class="container">
        <div class="row">



            <div class="col-md-5 well">

                <h3 style="font-family: 'Chonburi', cursive;">Add Staff Here!</h3>
                <h3 class="text-center text-success">{{ Session::get('message')  }}</h3>
                <br/>
                {{ Form::open(['route' => 'add-stuff', 'method'=>'POST']) }}

                <div class="form-group">
                    <input type="text" name="user_name" class="form-control" placeholder="User Name" >
                    <span class="text-danger">{{ $errors->has('first_name') ? $errors->first('first_name') : ' ' }}</span>
                </div>

                <div class="form-group">
                    <input type="text" name="password" class="form-control" placeholder="Enter password" >
                    <span class="text-danger">{{ $errors->has('first_name') ? $errors->first('first_name') : ' ' }}</span>
                </div>


                <div class="form-group">
                    <input type="email" name="email_address" class="form-control" placeholder="something@gmail.com" >
                    <span class="text-danger">{{ $errors->has('email_address') ? $errors->first('email_address') : ' ' }}</span>
                </div>



                <div class="form-group">
                    <input type="text" name="phone_number" class="form-control" placeholder="+880*********" >
                    <span class="text-danger">{{ $errors->has('phone_number') ? $errors->first('phone_number') : ' ' }}</span>
                </div>

                <div class="form-group">
                    <div class="col-md-9">

                        <label><input type="radio" name="type" value="receptionist"/>Receptionist</label>
                        <label><input type="radio" name="type" value="order"/>Order</label>
                        <label><input type="radio" name="type" value="qc"/>QC</label>
                    </div>
                    <span class="text-danger">{{ $errors->has('phone_number') ? $errors->first('phone_number') : ' ' }}</span>
                </div>


                <div class="form-group">
                    <input type="submit" value="Add" name="btn" class="form-control btn btn-success">
                </div>


                 {{ Form::close() }}




            </div>







        </div>
    </div>



</div>



@endsection