<?php

namespace App\Http\Controllers;

use App\Gueest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function GuestForm(){
        return view('admin.guest.guest-form');
    }

    public function GuestSave(Request $request){
            $guest = new Gueest();
        $guest->user_name = $request->user_name;
        $guest->email_address = $request->email_address;
        $guest->phone_number = $request->phone_number;
        $guest->save();

        return redirect('guest/form')->with('message','Guest Addes Sucessfully');
    }
    public function GuestManage(){
           $guests = Gueest::all();
        return view('admin.guest.manage-guest',[
            'guests' => $guests
        ]);
    }
    public function GuestEdit($id){
        $guest = Gueest::find($id);
        return view('admin.guest.edit-guest',[
            'guest' => $guest
        ]);
    }
    public function updateGuestinfo(Request $request) {
        $guest = Gueest::find($request->guest_id);

        $guest->user_name = $request->user_name;
        $guest->email_address = $request->email_address;
        $guest->phone_number = $request->phone_number;
        $guest->save();

        return redirect('guest/manage')->with('message', 'Guest Info Updated Succesfully');

    }
     public function deleteGuestinfo($id){
         $guest = Gueest::find($id);
         $guest->delete();

         return redirect('guest/manage')->with('message', 'Guest Info deleted Succesfully');
     }

}
