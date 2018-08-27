@extends('admin.master')
@section('content')

    <div class="single-wl3">
        <div class="container">
            <div class="row">



                <div class="col-md-5 well">

                    <h3 style="font-family: 'Chonburi', cursive;">Edit Staff Here!</h3>
                    <h3 class="text-center text-success">{{ Session::get('message')  }}</h3>
                    <br/>
                    {{ Form::open(['route' => 'update-stuff', 'method'=>'POST']) }}


                    <div class="form-group">
                        <input type="text" value="{{ $stuff->user_name }}" name="user_name" class="form-control" placeholder="User Name" >
                        <input type="hidden" name="stuff_id" value="{{ $stuff->id }}" class="form-control"/>
                        <span class="text-danger">{{ $errors->has('first_name') ? $errors->first('first_name') : ' ' }}</span>
                    </div>

                    <div class="form-group">
                        <input type="password" value="{{ $stuff->password }}" name="password" class="form-control" placeholder="Enter password" >
                        <span class="text-danger">{{ $errors->has('first_name') ? $errors->first('first_name') : ' ' }}</span>
                    </div>


                    <div class="form-group">
                        <input type="email" value="{{ $stuff->email_address }}" name="email_address" class="form-control" placeholder="something@gmail.com" >
                        <span class="text-danger">{{ $errors->has('email_address') ? $errors->first('email_address') : ' ' }}</span>
                    </div>



                    <div class="form-group">
                        <input type="text" value="{{ $stuff->phone_number }}" name="phone_number" class="form-control" placeholder="+880*********" >
                        <span class="text-danger">{{ $errors->has('phone_number') ? $errors->first('phone_number') : ' ' }}</span>
                    </div>

                    <div class="form-group">
                        <input type="text" value="{{ $stuff->type }}" name="type" class="form-control" placeholder="Type" >
                        <span class="text-danger">{{ $errors->has('phone_number') ? $errors->first('phone_number') : ' ' }}</span>
                    </div>


                    <div class="form-group">
                        <input type="submit" value="Update" name="btn" class="form-control btn btn-success">
                    </div>
                    {{ Form::close() }}







                </div>







            </div>
        </div>



    </div>



@endsection