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
    <br>
    <h3 class="text-center text-success">{{ Session::get('message')  }}</h3>
    <br>
    <div class="container" style="margin-left: 15%;">

        <div class="row">

            <div class="col-md-4 col-md-offset-1">
             {{ Form::open([ 'method' => 'POST', 'route' => 'franchisee-workSave' ]) }}

            <div class="form-group">
                <label  class="l1">Record No.</label>
                <input type="text" name="record" class="form-control"  placeholder="Enter Record no." >
                <input type="hidden" value="{{ Session::get('franchiseeName') }}" name="user_name" class="form-control">

            </div>
            <div class="form-group">
                <label  class="l1">Policy No.</label>
                <input type="text" name="policy" class="form-control"  placeholder="Enter Policy no." >
            </div>
                <div class="form-group">
                    <label for="email" class="l1">First Name:</label>
                    <input type="text" name="f_name" class="form-control"  placeholder="Enter First Name" >
                </div>
                <div class="form-group">
                    <label for="email" class="l1">City:</label>
                    <input type="text" name="city" class="form-control"  placeholder="Enter City" >
                </div>
                <div class="form-group">
                    <label for="email" class="l1">Phone:</label>
                    <input type="text" name="phone" class="form-control"  placeholder="Enter Phone no." >
                </div>
                <div class="form-group">
                    <label for="email" class="l1">Generel Practitioner(gp) Code:</label>
                    <input type="text" name="gp" class="form-control"  placeholder="Enter Generel Practitioner(gp) Code" >
                </div>
                <div class="form-group">
                    <label for="email" class="l1">Paid Amount:</label>
                    <input type="text" name="paid_amount" class="form-control"  placeholder="Enter paid amount" >
                </div>



            </div>



            <div class="col-md-4">

                <div class="form-group">
                    <label for="email" class="l1">Policy Date:</label>

                    <div class="form-control">
                        Day :

                        <select class="control-group" name='date' id='date'>
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
                        <select name='month' id='month'>
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


                        <select name='year' id='year'>

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

                    </div>







                </div>
                <div class="form-group">
                    <label for="pwd" class="l1">Medical Card No:</label>
                    <input type="text" name="medical" class="form-control"  placeholder="Enter Medical Card No" >
                </div>
                <div class="form-group">
                    <label for="email" class="l1">Last Name:</label>
                    <input type="text" name="l_name" class="form-control"  placeholder="Enter Last Name" >
                </div>
                <div class="form-group">
                    <label for="email" class="l1">State:</label>
                    <input type="text" name="state" class="form-control"  placeholder="Enter State" >
                </div>
                <div class="form-group">
                    <label for="email" class="l1">Martial Status:</label>
                    <div>
                        <select class="form-control" name="marit">

                        <option value='Married'>Married</option>
                        <option value='Unmarried'>Unmarried</option>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="l1">Hospital/Claim Days:</label>
                    <input type="text" name="claims" class="form-control"  placeholder="Enter Hospital/Claim Days" >
                </div>
                <div class="form-group">
                    <label class="l1" for="email">Net Amount:</label>
                    <input type="text" name="n_amount" class="form-control"  placeholder="Enter Net Amount" >
                </div>


            </div>


    </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        {{ Form::close() }}

        <a href="{{ route('franchisee-work') }}">
            <button class="btn btn-secondary">Clear</button>
        </a>




    </div>
@endsection