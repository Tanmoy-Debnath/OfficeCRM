<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Stuff;
use Session;
use App\Gueest;

class ReceptionController extends Controller
{
    public function RecptionistLoginForm() {
        return view('admin.Receptionist.receptionist-login-form');
    }

    public function receptionistLogInAdd(Request $request) {

        if( $staff = Stuff::where('user_name', $request->user_name)->first()){


            if( $staff = Stuff::where('password', $request->password)->first()){
                Session::put('receptionistId',$staff->id);
                Session::put('receptionistName',$staff->user_name);
                Session::put('receptionistType',$staff->type);

                return redirect('receptionist/home'

                );
            }
            else{
                return redirect('receptionist/login-form')->with('message','password is invalid');
            }

        }

        else {
            return redirect('receptionist/login-form')->with('message','Username is invalid');

        }


    }

    public function RecptionistHomePage() {
        return view('admin.Receptionist.reception-home');
    }

    public function addguestReception(Request $request) {
        $guest = new Gueest();
        $guest->user_name = $request->user_name;
        $guest->email_address = $request->email_address;
        $guest->phone_number = $request->phone_number;
        $guest->save();

        return redirect('receptionist/home')->with('message','Guest Info add Successfully');
}


public function RecptionistVisitorList() {
        $guests = Gueest::all();
        return view('admin.Receptionist.show-visitor',[
            'guests' => $guests
        ]);
}


}
