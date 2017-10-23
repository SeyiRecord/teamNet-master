<?php

namespace App\Http\Controllers;

use App\Orgprofile;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class OrgprofileController extends Controller
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
        $orgProfiles = OrgProfile::all();
        return view('orgprofiles.index', compact('orgprofiles'));
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
        return view('orgprofiles.createorgprofile');
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
        $orgProfile = new orgProfile();
        $orgProfile->userName = Auth::user()->userName ;
        $orgProfile->name= $request['name'];
        $orgProfile->motto= $request['motto'];
        $orgProfile->vision= $request['vision'];
        $orgProfile->details= $request['details'];
        $orgProfile->industry= $request['industry'];
        $orgProfile->location= $request['location'];
        $orgProfile->city= $request['city'];
        $orgProfile->state= $request['state'];
        $orgProfile->country= $request['country'];
        $orgProfile->zipCode= $request['zipCode'];
        $orgProfile->webAddress= $request['webAddress'];
        $orgProfile->logo= $request['logo'];

        $orgProfile->save();
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
        $orgprofile = Orgprofile::find($id);
        return view('orgprofiles.showorg', compact('orgprofile'));
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
        $orgprofile = Orgprofile::find($id);
        return view('orgprofiles/editorgprofile', compact('orgprofile'));
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
        //
            $this->updateRecord($id);
            return redirect()->route('orghome')->with('message', 'Profile Saved Successfully');
    }

    public function updateRecord($id)
    {
        $orgProfile = OrgProfile::find($id);
        \DB::table('orgprofiles')->where('id', $orgProfile->id)->update([
            'name' => $orgProfile->name,
            'motto' => $orgProfile->motto,
            'vision' => $orgProfile->vision,
            'details' => $orgProfile->details,
            'industry' => $orgProfile->industry,
            'location' => $orgProfile->location,
            'city' => $orgProfile->city,
            'state' => $orgProfile->state,
            'country' => $orgProfile->country,
            'zipCode' => $orgProfile->zipCode,
            'webAddress' => $orgProfile->webAddress,
            'logo' => $orgProfile->logo,
            ]);
        $orgProfile->update(\Request::all());
        return redirect('orghome');

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
        orgProfile::find($id)->delete();
        return redirect('orgprofiles');
    }
}
