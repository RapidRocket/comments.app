<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CreatePostRequest;
use App\Post;
use Carbon\Carbon;
use Request;

use App\Http\Requests;

class PostsController extends Controller
{
    public function index(){

        $posts= Post::latest('published_at')->get();

        return view('posts.index', compact('posts'));
    }

    public function show($id){

        $post = Post::findorFail($id);
        $comments = Comment::all()->where('post_id', $id);

        return view('posts.show', compact('post','comments'));
    }

    public function create(){

        return view('posts.create');
    }

    public function store(CreatePostRequest $request){

        /*$form_data = Request::all();
        $form_data['user_id'] = '1';
        $form_data['excerts'] = $form_data['body'];
        $form_data['published_at'] = Carbon::now();*/
        $request['user_id'] = '1';
        $request['excerts'] = $request['body'];
        $request['published_at'] = Carbon::now();
        Post::create($request->all());

        return redirect('posts');
    }


}
