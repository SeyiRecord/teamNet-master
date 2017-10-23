<?php

namespace App\Http\Controllers;

use App\Participation;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ParticipationController extends Controller
{
    /**
<<<<<<< HEAD
=======
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
>>>>>>> d8d4e8ccf1ebff23f0eb22a06521d28ae42598ea
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = Auth::user()->userName;
        return view();
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

        $participation = new participation();
        $participation->researchID=$request['researchID'];
        $participation->userName=$request['userName'];
        $participation->status=$request['status'];

        $participation->save();
        return redirect('home');
    }

    public function save($id)
    {
        //
        $users = Auth::user()->userName;
        $status = 'pending';

        $participation = new participation();
        $participation->researchID=$id;
        $participation->userName=$users;
        $participation->status=$status;

        $participation->save();
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

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
<<<<<<< HEAD
=======
        $participation=Participation::find($id);
        return view('participation.edit', compact('participation'));
>>>>>>> d8d4e8ccf1ebff23f0eb22a06521d28ae42598ea
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
    }
<<<<<<< HEAD
=======
     public function updateRecord(Request $request, $id){
        $participation = Participation::find($id);
        \DB::table('participations')->where('id', $participation->id)->update([
            
            ]);
     }
>>>>>>> d8d4e8ccf1ebff23f0eb22a06521d28ae42598ea

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
