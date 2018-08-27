@extends('admin.master')
@section('content')

    <div class="single-wl3">
        <div class="container">
            <div class="row">



                <div class="col-md-8 well">

                    <h3 style="font-family: 'Chonburi', cursive;">Add Order Here!</h3>
                    <h3 class="text-center text-success">{{ Session::get('message')  }}</h3>
                    <br/>

                    {{ Form::open(['route'=>'save-order','method'=>'POST']) }}
                    <div class="form-group">
                        <label class="control-label col-md-3">Order Date:</label>
                        <div class="col-md-9">
                            Day :

                            <select class="control-group" name='date' id='dayddl'>
                                <option value='1'>1</option>
                                <option value='2'>2</option>
                                <option value='3'>3</option>
                                <option value='4'>4</option>
                                <option value='5'>5</option>
                                <option value='6'>6</option>
                                <option value='7'>7</option>
                                <option value='8'>8</option>
                                <option value='9'>9</option>
                                <option value='10'>10</option>
                                <option value='11'>11</option>
                                <option value='12'>12</option>
                                <option value='13'>13</option>
                                <option value='14'>14</option>
                                <option value='15'>15</option>
                                <option value='16'>16</option>
                                <option value='17'>17</option>
                                <option value='18'>18</option>
                                <option value='19'>19</option>
                                <option value='20'>20</option>
                                <option value='21'>21</option>
                                <option value='22'>22</option>
                                <option value='23'>23</option>
                                <option value='24'>24</option>
                                <option value='25'>25</option>
                                <option value='26'>26</option>
                                <option value='27'>27</option>
                                <option value='28'>28</option>
                                <option value='29'>29</option>
                                <option value='30'>30</option>
                                <option value='31'>31</option>
                            </select>


                            Month :
                            <select name='month' id='monthddl'>
                                <option value='1'>1</option>
                                <option value='2'>2</option>
                                <option value='3'>3</option>
                                <option value='4'>4</option>
                                <option value='5'>5</option>
                                <option value='6'>6</option>
                                <option value='7'>7</option>
                                <option value='8'>8</option>
                                <option value='9'>9</option>
                                <option value='10'>10</option>
                                <option value='11'>11</option>
                                <option value='12'>12</option>
                            </select>


                            Year :

                            <select name='year' id='blah'>


                                <option value='2018'>2018</option>
                                <option value='2019'>2019</option>
                            </select>
                        </div>
                        <br><br>

                            <div class="form-group">
                                <label class="control-label col-md-3">Guest ID :</label>
                                <div class="col-md-9">
                                    <input type="text" name="guest_id" class="form-control"/>
                                    <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                                </div>
                            </div>






                        <br>

                        <div class="form-group">
                            <label class="control-label col-md-3">Order Number :</label>
                            <div class="col-md-9">
                                <input type="text" name="order_no" class="form-control"/>
                                <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                            </div>
                        </div>

                        <br>

                        <div class="form-group">
                            <label class="control-label col-md-3">Order Amount :</label>
                            <div class="col-md-9">
                                <input type="text" name="order_amount" class="form-control"/>
                                <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                            </div>
                        </div>

                        <br>

                        <div class="form-group">
                            <label class="control-label col-md-3">Order Due :</label>
                            <div class="col-md-9">
                                <input type="text" name="order_due" class="form-control"/>
                                <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                            </div>
                        </div>

                        <br>

                        <div class="form-group">
                            <label class="control-label col-md-3">Reffered By :</label>
                            <div class="col-md-9">
                                <input type="text" name="reffered" class="form-control"/>
                                <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                            </div>
                        </div>

                        <br><br>

                    <div class="form-group col-md-offset-3">

                            <input type="submit" value="Save" name="btn" class="form-control btn btn-success">


                    </div>


                        {{ Form::close() }}







                </div>







            </div>
        </div>



    </div>
    </div>



@endsection