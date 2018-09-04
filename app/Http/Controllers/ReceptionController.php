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

        if( $staffasf = Stuff::where('user_name', $request->user_name)->first()){


            if( $staffasf = Stuff::where('password', $request->password)->first()){
                Session::put('receptionistId',$staffasf->id);
                Session::put('receptionistName',$staffasf->user_name);
                Session::put('staffType',$staffasf->type);

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
