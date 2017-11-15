<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Research;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

class AdminpanelsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->userType == "Admin"){
            return view('adminpanel.index');
        }
        else {
            return view('errors.access');
        }
    }

    public function search()
    {
        $researches = Research::all();
        $users = User::all();         
        if (Auth::user()->userType == "Admin") {
            return view('adminpanel.search', compact('researches', 'users'));
        }
        else {
            return view('errors.access');
        }
    }
}
