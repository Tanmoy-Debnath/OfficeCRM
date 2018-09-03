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
        $staff = Stuff::where('user_name', $request->user_name)->first();






        if (password_verify($request->password,$staff->password)) {
            Session::put('guestId',$staff->id);
            Session::put('guestName',$staff->user_name);
            Session::put('guestType',$staff->type);





            return redirect('receptionist/home'

            );
        } else {
            return "Invalid password";
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
}
