<?php

namespace App\Http\Controllers;

use App\Userprofile;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UserprofileController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // Should be visible only to admin users
        $userProfiles = UserProfile::all();
        return view('userprofiles.index',compact('userProfiles'));
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
        $users = User::all(); // For testing connections in showuser
        $userprofile = Userprofile::find($id);
        return view('userprofiles.showuser', compact('userprofile'));
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
        //
        $userprofile = Userprofile::find($id);
        return view('userprofiles.edituserprofile', compact('userprofile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
            $this->updateRecord($id);
            return redirect()->route('home')->with('message', 'Profile Saved Successfully');
    }

    public function updateRecord($id)
    {
        $userProfile = Userprofile::find($id);
        \DB::table('userprofiles')->where('id', $userProfile->id)->update([
            'fName' => $userProfile->fName,
            'lName' => $userProfile->lName,
            'profileSummary' => $userProfile->profileSummary,
            'city' => $userProfile->city,
            'state' => $userProfile->state,
            'country' => $userProfile->country,
            'profileImg' => $userProfile->profileImg,
            ]);
        $userProfile->update(\Request::all());
        return redirect('home');
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
        userProfile::find($id)->delete();
        return redirect('userprofiles');
    }
}
