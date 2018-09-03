<?php

namespace App\Http\Controllers;

use App\Stuff;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.home',[

        ]);
    }
    /*
    public function profile()
    {
        $admininfo =DB::table('users')
                    ->get();
        $manage_users =view('admin.profile')
                    ->with('admin_info', $admininfo);
        return view('layout')
                    ->with('admin.profile', $manage_users);
    }
    */
}
