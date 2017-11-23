<?php

namespace App\Http\Controllers;

use Auth;
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

        $connectionMe = \DB::table('connections')->select('connection')->where('user','=', $userName)->Where('accepted','=',true)->get();
        $myConnections = \DB::table('connections')->select('user')->Where('connection','=', $userName)->Where('accepted','=',true)->get();
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
        $connection->user=$request['connectionMe'];
        $connection->connection=$request['myConnections'];
        $connection->accepted=$request[false];

        $connection->save();
        return redirect('home');
    }

    public function save($id)
    {
        //
        $users = Auth::user()->userName;
        $accepted = false;
        $connection = new connection();

        $results = DB::table('connections')->where('user', '=', $connectionMe)->where('connection', '=', $myConnections)->where('accepted', '=', accepted)->count();
        $connection->user=$connectionMe;
        $connection->connection=$myConnections;
        $connection->accepted=$accepted;
        if ($results < 1) {
            $connection->save();
        }
        return redirect('home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        /*$participation=Participation::find($id);
        return view('participations.edit', compact('participation'));*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        /*Participation::find($id)->update($request->all());
        return redirect()->route('researches.index')->with('message', 'User added Successfully');*/
    }
     public function updateRecord(Request $request, $id){
        /*$participation = Participation::find($id);
        \DB::table('participations')->where('id', $participation->id)->update([
            'researchID' => $participation->researchID,
            'userName' => $participation->userName,
            'status' => $participation->status,
            ]);
        $participation->update($request->all());
        return redirect('home');*/
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

}
