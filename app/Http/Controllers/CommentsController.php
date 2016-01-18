<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CreateCommentRequest;
use Carbon\Carbon;
use Request;

class CommentsController extends Controller
{
    public function show($post_id)
    {
        $comments = Comment::all()->where('post_id', $post_id);

        return view('comments.show', compact('comments'));
    }

    public function store(CreateCommentRequest $request)
    {

        $request['user_id'] = '1';
        $request['published_at'] = Carbon::now();

        Comment::create($request->all());

        return redirect ('posts/'.$request['post_id']);
    }
}
