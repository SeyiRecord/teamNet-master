<?php

namespace App\Http\Controllers;

use App\Comment;
use Auth;
use App\User;
use App\Post;
use App\Research;
use App\Userprofile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;

class CommentsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postComment(Request $request, $post_id)
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
        if ($comment->post_id != null) {
            return redirect()->route('posts.show',$comment->post->id)->with('message', 'Comment Saved Successfully');
        }
        else if ($comment->research_id != null){
            return redirect()->route('researches.show',$comment->research->id)->with('message', 'Comment Saved Successfully');
        }
        else if ($comment->userprofile_id != null){
            return redirect()->route('userprofiles.show',$comment->userprofile->id)->with('message', 'Comment Saved Successfully');
        }
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
        if ($comment->post_id != null) {
            $post_id = $comment->post->id;
            $comment->delete();
            return redirect()->route('posts.show',$post_id)->with('message', 'Comment deleted');
        }
        else if ($comment->research_id != null){
            $research_id = $comment->research->id;
            $comment->delete();
            return redirect()->route('researches.show',$research_id)->with('message', 'Comment deleted');
        }
        else if ($comment->userprofile_id != null){
            $userprofile_id = $comment->userprofile->id;
            $comment->delete();
            return redirect()->route('userprofiles.show',$userprofile_id)->with('message', 'Comment deleted');
        }
    }
    public function delete($id) {
        //
        $comment = Comment::find($id);
        return view('comments.delete')->withComment($comment)->with('message', 'Comment deleted');
    }


    public function resComment(Request $request, $research_id) {
        //
        $this->validate($request, array(
            'body' => 'required|max:255',
        ));
        $research = Research::find($research_id);
        $comment = new Comment();
        $comment->user = Auth::user()->userName;
        $comment->body = $request['body'];
        $comment->approved = true;
        $comment->research()->associate($research);
        $comment->save();
        return redirect()->route('researches.show', ['research' => $research])->with('message', 'Comment Saved Successfully');
    }

        /*return view('researches.show', compact('research'))->with('message', 'Comment Saved Successfully');
    }*/

    public function userComment(Request $request, $user_id) {
        //
        $this->validate($request, array(
            'body' => 'required|max:255',
        ));
        $userprofile = Userprofile::find($user_id);
        $comment = new Comment();
        $comment->user = Auth::user()->userName;
        $comment->body = $request['body'];
        $comment->approved = true;
        $comment->userprofile()->associate($userprofile);
        $comment->save();
        return redirect()->route('userprofiles.show', ['userprofile' => $userprofile])->with('message', 'Comment Saved Successfully');
        // return view('userprofiles.show', compact('userprofile'))->with('message', 'Comment Saved Successfully');
    }


}
