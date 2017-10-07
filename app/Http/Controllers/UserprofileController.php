<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userprofile;
use Auth;

class UserprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $userProfiles = UserProfile::all();
        return view('userprofiles.index',compact('userprofiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $users = $request->session()->get('userName');
        return view('userprofiles.createuserprofile');
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
        $userProfile = new userProfile();
        $userProfile->userName = Auth::user()->userName ;
        $userProfile->fName= $request['fName'];
        $userProfile->lName= $request['lName'];
        $userProfile->profileSummary= $request['profileSummary'];
        $userProfile->city= $request['city'];
        $userProfile->state= $request['state'];
        $userProfile->country= $request['country'];
        $userProfile->profileImg= $request['profileImg'];
        // add other fields
        $userProfile->save();
        return redirect('/');
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
        return view('userprofiles/edituserprofile');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Profile::find($id)->delete();
        return redirect('userprofiles');
    }
}
