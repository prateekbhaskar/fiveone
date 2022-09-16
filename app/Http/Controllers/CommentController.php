<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function create()
    {
        return view('create',['title'=>'NEW Comment']);
    }

    public function store(Request $request)
    {
        $fields=$request->validate([
            'comment' => 'required',
            'post_id' =>'required|numeric'
        ]);
        Comment::create($fields);

        return redirect('/crud')->with('message','Comment added successfully.');
    }

    public function show(Comment $comment)
    {
        return view('show',compact('comment'));
    }

    public function edit(Comment $comment)
    {
        return view('edit',compact('comment'),['title'=>'Comment-Edit']);
    }

    public function update(Request $request, Comment $comment)
    {
        $fields=$request->validate([
            'comment' => 'required',
        ]);

        $comment->update($fields);

        return redirect('/crud')->with('message','Comment updated successfully');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect('/crud')->with('message','Comment deleted successfully');
    }
}
