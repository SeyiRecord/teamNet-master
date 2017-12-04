<?php

namespace App\Http\Controllers;

use Auth;
use App\Connection;
use App\Userprofile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ConnectionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function create(Request $request) {
        $users = Auth::user()->userName; 
        return view();
    }


    //
    public function showConnections() {
        $userName = Auth::user()->userName;
        $count = \DB::table('connections')->where('user','=', $userName)->orWhere('connection','=', $userName)->Where('accepted','=',true)->count();
        $userprofile = Userprofile::all();
        $connectionMe = \DB::table('connections')->select('receiver')->where('sender','=', $userName)->Where('accepted','=',true)->get();
        $myConnections = \DB::table('connections')->select('sender')->Where('receiver','=', $userName)->Where('accepted','=',true)->get();
        return view('connections.index', compact('count','userprofile', 'myConnections', 'connectionMe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $users = Auth::user()->userName;
        $connection = new connection();
        $connection->sender=$request['connectionMe'];
        $connection->receiver=$request['myConnections'];
        $connection->accepted=$request[false];

        $connection->save();
        return view('connections.index', compact('connection'));
    }

    public function save(Request $request, $userName)
    {
        // //
        // dd($userName);
        // $userprofile = Userprofile::find($id);
        $user = Auth::user()->userName;
        $accepted = false;
        $connection = new connection();
        
        $connection->sender=$user;
        $connection->receiver=$userName;
        $connection->accepted=$accepted;
        // $connection->save();
        $results = \DB::table('connections')->select('sender')->where('sender', '=', $user)->where('receiver', '=', $connection)->count();
        if ($results < 1) {
            $connection->save();
        }
        // return view('userprofiles.show', compact('connection','user'));
        return redirect()->route('home');
    }

}
