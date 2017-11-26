<?php

namespace App\Http\Controllers;

use App\Comment;
use Auth;
use App\User;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;

class CommentsController extends Controller
{
    /**
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $post_id)
    {
        //
        $this->validate($request, array(
            'body' => 'required|max:255',
        ));
        $post = Post::find($post_id);
        $comment = new Comment();
        $comment->user = Auth::user()->userName;
        $comment->body = $request['body'];
        $comment->approved = true;
        $comment->post()->associate($post);
        $comment->save();
        return redirect()->route('posts.show', ['post' => $post])->with('message', 'Comment Saved Successfully');
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
        $comment = Comment::find($id);
        if ((Auth::user()->userType == "Admin") || $comment->user == Auth::user()->userName){
            return view('comments.edit')->withComment($comment);
        }
        else {
            return view('errors.access')->with('message', 'Comment owner restricts access');
        }
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
        $comment = Comment::find($id);
        $this->validate($request, array( 'body' => 'required|max:255', ));
        $comment->body = $request['body'];
        $comment->save();
        return redirect()->route('posts.show',$comment->post->id)->with('message', 'Comment Saved Successfully');
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
        $comment = Comment::find($id);
        $post_id = $comment->post->id;
        $comment->delete();
        return redirect()->route('posts.show',$post_id)->with('message', 'Comment deleted');
    }
    public function delete($id)
    {
        //
        $comment = Comment::find($id);
        return view('comments.delete')->withComment($comment)->with('message', 'Comment deleted');
    }
}
