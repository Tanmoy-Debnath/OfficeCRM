<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stuff;
use Session;
use App\Franchisee;

class OnlyFranchisee extends Controller
{
    public function OnlyFranchiseeadd() {
        return view('admin.OnlyFranchisee.staff-franchisee-home');
    }

    public function OnlyFranchiseeaddLogin() {
        return view('admin.OnlyFranchisee.OnlyFranchisee-loginPage');
    }

public function staffLogInAddcheck(Request $request) {

    if( $staff = Stuff::where('user_name', $request->user_name)->first()){


        if( $staff = Stuff::where('password', $request->password)->first()){
            Session::put('staffId',$staff->id);
            Session::put('staffName',$staff->user_name);
            Session::put('staffType',$staff->type);

            return redirect('staff/franchisee-HomePage'

            );
        }
        else{
            return redirect('staff/franchisee-LoginArea')->with('message','password is invalid');
        }

    }

    else {
        return redirect('staff/franchisee-LoginArea')->with('message','Username is invalid');

    }

}

public function staffOnlyFranchiseesdd(Request $request) {

    $franchisee = new Franchisee();

    $franchisee->title = $request->title;
    $franchisee->f_name = $request->f_name;
    $franchisee->l_name = $request->l_name;
    $franchisee->father_name = $request->father_name;
    $franchisee->sex = $request->sex;
    $franchisee->date = $request->date;
    $franchisee->month = $request->month;
    $franchisee->year = $request->year;
    $franchisee->address = $request->address;
    $franchisee->phone_number = $request->phone_number;
    $franchisee->bkash = $request->bkash;
    $franchisee->dbbl = $request->dbbl;
    $franchisee->nid = $request->nid;
    $franchisee->sis_id = $request->sis_id;
    $franchisee->no_slot = $request->no_slot;
    $franchisee->no_payment = $request->no_payment;
    $franchisee->no_renew = $request->no_renew;
    $franchisee->user_name = $request->user_name;
    //$franchisee->password = bcrypt($request->password);
    $franchisee->password = $request->password;
    $franchisee->save();

    $franchiseeId = $franchisee->id;
    Session::put('franchiseeId',$franchiseeId);




    return redirect('staff/franchisee-HomePage')->with('message','Franchisee Info Add Succesfully');
}
}
