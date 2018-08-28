<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Franchisee;
use App\FranchiseeLogin;
use App\Slot;
use Session;


class FranchiseeController extends Controller
{
    public function FranchiseeForm() {
        return view('admin.franchisee.franchisee-form');
    }
public function franchiseeAdd(Request $request) {

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
    $franchisee->save();

    $franchiseeId = $franchisee->id;
    Session::put('franchiseeId',$franchiseeId);




    return redirect('stuff/franchisee-loginInfo');

}
public function franchiseeAddLogininfo(){
    $franchiseeId = Franchisee::find(Session::get('franchiseeId'));
    return view('admin.franchisee.franchisee-login',[
        'franchiseeId' => $franchiseeId
    ]);
}

public function franchiseeloginInfoadd(Request $request){

        $franchisee = new FranchiseeLogin();
    $franchisee->user_name = $request->user_name;
    $franchisee->password = bcrypt($request->password);
    $franchisee->save();









    return redirect('stuff/franchisee-loginInfo')->with('message','Login info save Successfully');
}


    public function FranchiseeLoginManage() {
        $franchisees = FranchiseeLogin::all();
        return view ('admin.franchiseeInfo.franchisee-infoManage',[
            'franchisees' => $franchisees
        ]);
    }



    public function FranchiseeLoginEdit($id) {
        $franchisee = FranchiseeLogin::find($id);
        return view ('admin.franchiseeInfo.franchisee-infoEdit',[
            'franchisee' => $franchisee
        ]);
    }


    public function updateFranchiseeLogininfo(Request $request){
        $franchisee = FranchiseeLogin::find($request->franchisee_id);

        $franchisee->user_name = $request->user_name;
        $franchisee->password = bcrypt($request->password);
        $franchisee->save();


        return redirect('franchisee/LoginManage')->with('message','Franchisee Login info Updated Succesfully');

    }

    public function FranchiseeLoginDelete($id) {
        $franchisee = FranchiseeLogin::find($id);
        $franchisee->delete();


        return redirect('franchisee/LoginManage')->with('message','Franchisee Login info Deleted Succesfully');
    }












/*
    public function FranchiseeLoginform(){
        return view('admin.franchisee.franchiseeOwn-login');
    }
*/

    public function franchiseeLogInAdd(Request $request){

        $franchisee = FranchiseeLogin::where('user_name', $request->user_name)->first();





        if (password_verify($request->password,$franchisee->password)) {
            Session::put('franchiseeId',$franchisee->id);
            Session::put('franchiseeName',$franchisee->user_name);



            return redirect('franchisee/info');
        } else {
            return redirect('/')->with('message','Password Not Matched');
        }


    }

    public function FranchiseeOwnLoginInfo(){
        return view('admin.franchiseeInfo.franchisee-info');
    }

    public function franchiseeLogout() {

        Session::forget('franchiseeId');
        Session::forget('password');


             return redirect('/');
    }





    public function FranchiseeUserDetailInfo(){
        return view('admin.franchiseeInfo.franchisee-profile');
    }



























public function ManageFranchisee() {
    $franchisees = Franchisee::all();
    return view('admin.franchisee.manage-franchisee',[
        'franchisees' => $franchisees
    ]);
}
public function editFranchiseeinfo($id){
    $franchisee = Franchisee::find($id);
    return view('admin.franchisee.edit-franchisee',[
        'franchisee'=>$franchisee
    ]);
}
    public function updateFranchiseeinfo(Request $request) {
        $franchisee = Franchisee::find($request->franchisee_id);

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
        $franchisee->save();

        return redirect('stuff/franchisee-manage')->with('message', 'Franchisee Info Updated Succesfully');

    }
    public function deleteFranchiseeinfo($id) {
        $franchisee = Franchisee::find($id);
        $franchisee->delete();

        return redirect('stuff/franchisee-manage')->with('message', 'Franchisee Info deleted Succesfully');
    }
    public function SlotView(){
        return view('admin.franchisee.slot-view');
    }




   public function SlotSave(Request $request){

       $this->validate($request, [
           'slot_file' => 'required|unique:slots',


       ]);





        $slot =    new Slot();
       $slotFile = $request->file('slot_file');
       $slotName = $slotFile->getClientOriginalName();
       $directory = 'slot_file/';
       $slotUrl = $directory.$slotName;
       $slotFile->move($directory,$slotName);

       $slot->slot_file = $slotUrl;
       $slot->save();

       return redirect('franchisee/slot')->with('message','Slot Save Successfully');



   }

   public function SlotManage() {
       $slots = Slot::all();
        return view('admin.franchisee.slot-manage',[
            'slots' => $slots
        ]);
   }

   public function deleteSlotinfo($id){
       $slot = Slot::find($id);

       $slot->delete();

       return redirect('franchisee/slot/manage')->with('message', 'Slot File deleted Succesfully');
   }

   public function AssignSlot(){
        return view('admin.franchisee.slot-assign');
   }




}
