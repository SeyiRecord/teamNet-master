<?php

namespace App\Http\Controllers;

use App\Research;
use Auth;
use App\User;


use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $researches = Research::all();
        return view('researches.index', compact('researches'));
        // return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        // $users = $request->session()->get('userName');
        $users = Auth::user()->userName; 
        return view('researches.createresearch');
    }
    /*
    public function save(Request $requestSave)
    {
        $this->store($requestSave);
        return redirect()->route('researches.index')->with('message', 'Research created Successfully');
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $research = new research();
        $research->ownerID = Auth::user()->userName;
        $research->topic= $request['topic'];
        $research->summary= $request['summary'];
        $research->startDate= $request['startDate'];
        $research->endDate= $request['endDate'];
        $research->organization= $request['organization'];
        $research->location= $request['location'];
        $research->city= $request['city'];
        $research->state= $request['state'];
        $research->country= $request['country'];
        $research->zipCode= $request['zipCode'];
        $research->save();
        
        return redirect('researches');
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
        $research = Research::find($id);
        return view('researches.showresearch', compact('research'));
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
        $research=Research::find($researchID);
        return view('researches.edit', compact('research'));
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
        $researchUpdate=Request::all();
        $research = Research::find($researchID);
        $research->update($researchUpdate);
        return redirect('researches');
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
        Research::find($id)->delete();
        return redirect('researches');
    }
}
