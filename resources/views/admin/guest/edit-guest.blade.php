@extends('admin.master')
@section('content')

    <div class="single-wl3">
        <div class="container">
            <div class="row">



                <div class="col-md-5 well">

                    <h3 style="font-family: 'Chonburi', cursive;">Update Guest Here!</h3>
                    <h3 class="text-center text-success">{{ Session::get('message')  }}</h3>
                    <br/>

                    {{ Form::open(['method'=>'POST','route'=>'update-guest']) }}
                    <div class="form-group">
                        <input type="text" name="user_name" value="{{$guest->user_name}}" class="form-control" placeholder="Name" >
                        <input type="hidden" name="guest_id" value="{{ $guest->id }}" class="form-control"/>
                        <span class="text-danger">{{ $errors->has('first_name') ? $errors->first('first_name') : ' ' }}</span>
                    </div>


                    <div class="form-group">
                        <input type="email" name="email_address" value="{{$guest->email_address}}" class="form-control" placeholder="something@gmail.com" >
                        <span class="text-danger">{{ $errors->has('email_address') ? $errors->first('email_address') : ' ' }}</span>
                    </div>



                    <div class="form-group">
                        <input type="text" name="phone_number" value="{{$guest->phone_number}}" class="form-control" placeholder="+880*********" >
                        <span class="text-danger">{{ $errors->has('phone_number') ? $errors->first('phone_number') : ' ' }}</span>
                    </div>




                    <div class="form-group">
                        <input type="submit" value="update" name="btn" class="form-control btn btn-success">
                    </div>


                   {{ Form::close() }}



                </div>







            </div>
        </div>



    </div>



@endsection