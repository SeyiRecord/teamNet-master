<?php

namespace App\Http\Controllers;
use App\Userprofile;
use Auth;
use Illuminate\Support\Facades\DB;

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
        $user = Auth::user()->userName;
        $id = DB::table('userprofiles')->where('userName', '=', $user)->value('id');
        $userProfile = userprofile::find(1);
        return view('home', compact('id'));
    }
}
