<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentRequest;
use Carbon\Carbon;
use Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function show($post_id)
    {
        $comments = Comment::all()->where('post_id', $post_id);

        return view('comments.show', compact('comments'));
    }

    public function store(CommentRequest $request)
    {

        $request['published_at'] = Carbon::now();
        $comment = new Comment($request->all());
        Auth::user()->comments()->save($comment);

        return redirect ('posts/'.$request['post_id']);
    }
}
