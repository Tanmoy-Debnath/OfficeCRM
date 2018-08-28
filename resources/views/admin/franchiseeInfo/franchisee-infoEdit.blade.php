@extends('admin.master')
@section('titleName')



@endsection
@section('content')

    <div class="single-wl3">
        <div class="container">
            <div class="row">

                <div class="col-md-5 well ">
                    <h3 style="font-family: 'Chonburi', cursive;">Update Franchisee Login info!</h3>
                    <h3 class="text-center text-success">{{ Session::get('message')  }}</h3>
                    <br><br>

                    {{ Form::open([ 'route' => 'update-franchiseeLoginInfo', 'method' => 'POST' ]) }}

                    <div class="form-group">

                        <label class="control-label col-md-3">User name :</label>
                        <div class="col-md-9">
                            <input type="text" value="{{  $franchisee->user_name }}"  name="user_name" class="form-control"/>
                            <input type="hidden" name="franchisee_id" value="{{ $franchisee->id }}" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label class="control-label col-md-3">Password :</label>
                        <div class="col-md-9">
                            <input type="text" value="{{  $franchisee->password }}"   name="password" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                        </div>
                    </div>
                    <br><br>

                    <div class="form-group">
                        <input type="submit" value="Add" name="btn" class="form-control btn btn-success">
                    </div>

                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
@endsection