<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;

class PostController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        //fetch all posts data
        $posts = Post::orderBy('created','desc')->get();
        
        //pass posts data to view and load list view
        return view('posts.index', ['posts' => $posts]);
    }
    
    public function create(){
        //load form view
        $users = Auth::user()->userName;
        return view('posts.create');
    }
    
    public function store(Request $request){
        //validate post data
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
        //get post data
        $post = new Post();
        //store post data
        $post->ownerID = Auth::user()->userName;
        $post->title= $request['title'];
        $post->content= $request['content'];
        // Post::create($post);
        $post->save();
        //store status message
        Session::flash('success_msg', 'Post added successfully!');
        return redirect()->route('posts.index');
    }
    
    public function show($id){
        //fetch post data
        $post = Post::find($id);
        
        //pass posts data to view and load list view
        return view('posts.show', ['post' => $post]);
    }
    
    public function edit($id){
        //get post data by id
        $post = Post::find($id);
        
        //load form view
        if (Auth::user()->userName == $post->ownerID) {
            return view('posts.edit', ['post' => $post]);
        } else{
            return view('posts.show', ['post' => $post]);
        }
    }
    
    public function update($id, Request $request){
        //validate post data
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
        
        //get post data
        $post = $request->all();
        
        //update post data
        Post::find($id)->update($post);
        
        //store status message
        Session::flash('success_msg', 'Post updated successfully!');

        return redirect()->route('posts.index');
    }
    
    public function destroy($id){
        //update post data
        Post::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Post deleted successfully!');

        return redirect()->route('posts.index');
    }
}
