<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class CommentsController extends Controller
{
    public function show($post_id)
    {
        $comments = UserComments::all()->where('post_id', $post_id);
        return $comments;
    }
}
