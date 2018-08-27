@extends('admin.master')
@section('content')

    <div class="single-wl3">
        <div class="container">
            <div class="row">



                <div class="col-md-5 well">

                    <h3 style="font-family: 'Chonburi', cursive;">Slot Area!</h3>
                    <h3 class="text-center text-success">{{ Session::get('message')  }}</h3>
                    <br/>
                    {{ Form::open(['route' => 'slot-save', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-3">Upload Slot :</label>
                        <div class="col-md-9">
                            <input type="file" name="slot_file" accept="slot/*"/>
                            <span class="text-danger">{{ $errors->has('slot_image') ? $errors->first('slot_image') : ' ' }}</span>

                        </div>
                    </div>

                    <br>     <br>

                    <div class="form-group">
                        <a href="">
                            <input type="submit" value="Add" name="btn" class="form-control btn btn-success">
                        </a>

                    </div>

                    {{ Form::close()}}



                </div>







            </div>
        </div>



    </div>



@endsection