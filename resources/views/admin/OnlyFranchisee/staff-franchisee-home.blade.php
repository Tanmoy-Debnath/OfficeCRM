@extends('admin.OnlyFranchisee.master')

@section('titleName')
    Staff Home

@endsection
@section('content')


    <div class="single-wl3">
        <div class="container">
            <div class="row">



                <div class="col-md-6 well">

                    <h3 style="font-family: 'Chonburi', cursive;">Add Franchisee Here!</h3>
                    <h3 class="text-center text-success">{{ Session::get('message')  }}</h3>
                    <br/>
                    {{ Form::open(['route' => 'add-franchiseeByStaff', 'method'=>'POST']) }}

                    <div class="form-group">
                        <fieldset id="group1">


                            <label class="control-label col-md-3">Title:</label>
                            <div class="col-md-9">
                                <label><input type="radio" name="title" value="Mr."/> Mr.</label>
                                <label><input type="radio" name="title" value="Mrs."/> Mrs.</label>
                            </div>
                        </fieldset>

                        <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>

                    </div>








                    <div class="form-group">
                        <label class="control-label col-md-3">First Name:</label>
                        <div class="col-md-9">
                            <input type="text" name="f_name" id="f_name" onkeyup="keyUp()" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                        </div>
                    </div>
                    <br>   <br>
                    <div class="form-group">
                        <label class="control-label col-md-3">Last Name:</label>
                        <div class="col-md-9">
                            <input type="text" name="l_name" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <label class="control-label col-md-3">Father/Guardian Name:</label>
                        <div class="col-md-9">
                            <input type="text" name="father_name" id="father_name" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <fieldset id="group1">


                            <label class="control-label col-md-3">Sex:</label>
                            <div class="col-md-9">
                                <label><input type="radio" name="sex" value="Male"/> Male</label>
                                <label><input type="radio" name="sex" value="Female"/> Female</label>
                            </div>
                        </fieldset>

                        <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>

                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">DOB:</label>
                        <div class="col-md-9">
                            Day :



                            <label class="control-label">
                                <select class="control-group" name='date' id='date' onchange="keyUp()">
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

                            </label>
                            Month :
                            <label class="control-label">
                                <select name='month' id='month' onchange="keyUp()">
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
                            </label>


                            Year :
                            <label class="control-label">
                                <select name='year' id='year' onchange="keyUp()">

                                    <option value='1980'>1980</option>
                                    <option value='1981'>1981</option>
                                    <option value='1982'>1982</option>
                                    <option value='1983'>1983</option>
                                    <option value='1984'>1984</option>
                                    <option value='1985'>1985</option>
                                    <option value='1986'>1986</option>
                                    <option value='1987'>1987</option>
                                    <option value='1988'>1988</option>
                                    <option value='1989'>1989</option>
                                    <option value='1990'>1990</option>
                                    <option value='1991'>1991</option>
                                    <option value='1992'>1992</option>
                                    <option value='1993'>1993</option>
                                    <option value='1947'>1994</option>
                                    <option value='1948'>1995</option>
                                    <option value='1949'>1996</option>
                                    <option value='1950'>1997</option>
                                    <option value='1951'>1998</option>
                                    <option value='1952'>1999</option>
                                    <option value='1953'>2000</option>
                                    <option value='1954'>2001</option>
                                    <option value='1955'>2002</option>
                                    <option value='1956'>2003</option>
                                    <option value='1957'>2004</option>
                                    <option value='1958'>2005</option>
                                    <option value='1959'>2006</option>
                                    <option value='1960'>2007</option>
                                    <option value='1961'>2008</option>
                                    <option value='1962'>2009</option>
                                    <option value='1963'>2010</option>
                                    <option value='1964'>2011</option>
                                    <option value='1965'>2012</option>
                                    <option value='1966'>2013</option>
                                    <option value='1967'>2014</option>
                                    <option value='1968'>2015</option>
                                    <option value='1969'>2016</option>
                                    <option value='1970'>2017</option>
                                    <option value='1971'>2018</option>
                                </select>
                            </label>

                        </div>

                    </div>
                    <br><br>

                    <div class="form-group">
                        <label class="control-label col-md-3">Address :</label>
                        <div class="col-md-9">
                            <textarea name="address" class="form-control"></textarea>
                            <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                        </div>
                    </div>
                    <br>   <br>

                    <div class="form-group">
                        <label class="control-label col-md-3">Phone Number :</label>
                        <div class="col-md-9">
                            <input type="text" name="phone_number" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <label class="control-label col-md-3">bKash Number :</label>
                        <div class="col-md-9">
                            <input type="text" name="bkash" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <label class="control-label col-md-3">DBBL Number :</label>
                        <div class="col-md-9">
                            <input type="text" name="dbbl" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <label class="control-label col-md-3">NID Number :</label>
                        <div class="col-md-9">
                            <input type="text" name="nid" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <label class="control-label col-md-3">SIS ID :</label>
                        <div class="col-md-9">
                            <input type="text" name="sis_id" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <label class="control-label col-md-3">No. of Slot :</label>
                        <div class="col-md-9">
                            <input type="text" name="no_slot" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <label class="control-label col-md-3">No. of Payment :</label>
                        <div class="col-md-9">
                            <input type="text" name="no_payment" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <label class="control-label col-md-3">No. of Renew :</label>
                        <div class="col-md-9">
                            <input type="text" name="no_renew" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label class="control-label col-md-3">User Name:</label>
                        <div class="col-md-9">
                            <input type="text" name="user_name" id="user_name" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <label class="control-label col-md-3">Password :</label>
                        <div class="col-md-9">
                            <input type="text" name="password" id="password" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                        </div>
                    </div>

                    <br>




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

<script type="text/javascript">

    /*  $( "#f_name" ).keyup(function() {
          alert("I am an alert box!");
          //createUserName();
      });*/

    function keyUp(){
        var myName=$("#f_name").val();
        var birthDate=$("#date").val();
        var birthMonth=$("#month").val();
        var birthyear=$("#year").val();

        if (myName==''){
            $("#user_name").val("");
        }
        else{
            $("#user_name").val(myName+birthDate);
            $("#password").val(myName+birthMonth+birthyear);


        }

    }





</script>