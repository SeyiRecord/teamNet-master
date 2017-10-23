<?php

namespace App\Http\Controllers;

use App\Research;
use Auth;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ResearchController extends Controller
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
        $researches = Research::all();
        return view('researches.index', compact('researches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $users = Auth::user()->userName; 
        return view('researches.createresearch');
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
        $research=Research::find($id);
        return view('researches.editresearch', compact('research'));
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
        if (Input::get('store')) {
            $this->updateRecord($request, $id);
            return redirect()->route('researches.index')->with('message', 'Form Submitted Successfully');
        }
    }

    public function updateRecord(Request $request, $id)
    {

        $research = Research::find($id);
        \DB::table('researches')->where('id', $research->id)->update([
            'topic' => $research->topic,
            'summary' => $research->summary,
            'startDate' => $research->startDate,
            'endDate' => $research->endDate,
            'organization' => $research->organization,
            'location' => $research->location,
            'city' => $research->city,
            'state' => $research->state,
            'country' => $research->country,
            'zipCode' => $research->zipCode,
            ]);
        $research->update($request->all());
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
