<?php

namespace App\Http\Controllers;
use App\Orgprofile;
use Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class OrghomeController extends Controller
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
        $id = DB::table('orgprofiles')->where('userName', '=', $user)->value('id');
        $orgProfile = orgprofile::find(1);
        return view('orghome', compact('id'));
    }
}
