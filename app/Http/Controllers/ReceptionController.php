<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Guest;
=======
>>>>>>> c63c7488eede8acf55d972ef3444c8067fbc15d1
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
<<<<<<< HEAD
        $staff = Stuff::where('user_name', $request->user_name)->first();






        if (password_verify($request->password,$staff->password)) {
            Session::put('franchiseeId',$staff->id);
            Session::put('franchiseeName',$staff->user_name);
            Session::put('franchiseefirstName',$staff->type);





            return redirect('receptionist/home'

            );
        } else {
            return "Invalid password";
        }
=======

        if( $staff = Stuff::where('user_name', $request->user_name)->first()){

            //if (password_verify($request->password,$franchisee->password)) {
            if( $staff = Stuff::where('password', $request->password)->first()){
                Session::put('guestId',$staff->id);
                Session::put('guestName',$staff->user_name);
                Session::put('guestType',$staff->type);

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

>>>>>>> c63c7488eede8acf55d972ef3444c8067fbc15d1
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
<<<<<<< HEAD

public function RecptionistVisitorList() {
        $guests = Gueest::all();
        return view('admin.Receptionist.show-visitor',[
            'guests' => $guests
        ]);
}
=======
>>>>>>> c63c7488eede8acf55d972ef3444c8067fbc15d1
}
