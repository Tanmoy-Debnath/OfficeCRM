<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stuff;

class StuffController extends Controller
{
    public function stuffForm() {
        return view('admin.stuff.stuff-form');
    }

    public function stuffAdd(Request $request) {

        $stuff = new Stuff();

        $stuff->user_name = $request->user_name;
        $stuff->password = bcrypt($request->password);
        $stuff->email_address = $request->email_address;
        $stuff->phone_number = $request->phone_number;
        $stuff->type = $request->type;
        $stuff->save();




        return redirect('stuff/Stuff-form')->with('message', 'Stuff Info Save Successfully');;
    }

    public function ManageStuff(){
        $stuffs = Stuff::all();
        return view('admin.stuff.manage-stuff',[
            'stuffs' =>$stuffs
        ]);
    }

    public function editStuffinfo($id) {
        $stuff = Stuff::find($id);
        return view('admin.stuff.edit-stuff', ['stuff'=>$stuff]);
    }

    public function updateStuffinfo(Request $request) {
        $stuff = Stuff::find($request->stuff_id);

        $stuff->user_name = $request->user_name;
        $stuff->password = $request->password;
        $stuff->email_address = $request->email_address;
        $stuff->phone_number = $request->phone_number;
        $stuff->type   = $request->type;
        $stuff->save();

        return redirect('stuff/Stuff-manage')->with('message', 'Stuff Info Updated Succesfully');

    }

    public function deleteStuffinfo($id) {
        $stuff = Stuff::find($id);
        $stuff->delete();

        return redirect('stuff/Stuff-manage')->with('message', 'Stuff Info deleted Succesfully');
}

}
