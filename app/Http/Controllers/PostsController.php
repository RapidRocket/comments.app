<?php

namespace App\Http\Controllers;

use App\UserComments;
use App\UserPosts;
use Carbon\Carbon;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index(){

        $posts= UserPosts::all();

        return view('posts.index', compact('posts'));
    }

    public function show($id){
        $post = UserPosts::findorFail($id);
        $comments = UserComments::all()->where('post_id', $id);

        return view('posts.show', compact('post','comments'));

    }

    public function create(){
        return view('posts.create');
    }

    public function store(){

        $form_data = Request::all();
        $form_data['published_at'] = Carbon::now();

        return redirect('posts');
    }


}
