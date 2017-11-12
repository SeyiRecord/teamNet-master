<?php

namespace App\Http\Controllers;

use App\Research;
use Auth;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    //
    public function user(){
	    $q = Input::get ( 'q' );
	    $user = User::where ( 'userName', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->get ();
	    if (count ( $user ) > 0)
	        return view ( 'searchresults' )->withDetails ( $user )->withQuery ( $q );
	    else
	        return view ( 'searchresults' )->withMessage ( 'No Details found. Try to search again !' );
    }

     public function research(){
	    $q = Input::get ( 'q' );
	    $research = Research::where ( 'ownerID', 'LIKE', '%' . $q . '%' )->orWhere ( 'topic', 'LIKE', '%' . $q . '%' )->orWhere ( 'summary', 'LIKE', '%' . $q . '%' )->get ();
	    if (count ( $research ) > 0)
	        return view ( 'researches/search' )->withDetails ( $research )->withQuery ( $q );
	    else
	        return view ( 'researches/search' )->withMessage ( 'No Details found. Try to search again !' );
    }
}
