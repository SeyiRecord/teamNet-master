<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orgprofile;
use Auth;

class OrgprofileController extends Controller
{
    /**
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
    public function create()
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
        $orgProfile->orgName = Auth::org()->orgName ;
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
        return view('orgprofiles/editorgprofile');
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
        orgProfile::find($id)->delete();
        return redirect('orgprofiles');
    }
}
