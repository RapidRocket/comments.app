<?php

namespace App\Http\Controllers;

use App\User;
use App\Comment;
use App\Http\Requests\PostRequest;
use App\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Request;

use App\Http\Requests;

class PostsController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth', ['except' => 'index'] );
        
    }

    public function index(){

        $posts= Post::latest('published_at')->get();

        return view('posts.index', compact('posts'));
    }

    public function show($id){

        $post = Post::findorFail($id);

        $comments = Comment::where('post_id', '=', $id)->get();

        return view('posts.show', compact('post','comments'));
    }

    public function create(){

        return view('posts.create');
    }

    public function store(PostRequest $request){

        $request['excerts'] = $request['body'];
        $request['published_at'] = Carbon::now();
        Auth::user()->posts()->create($request->all());

        flash()->overlay('You have just created a post','Good Luck');

        return redirect('posts');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    public function update(PostRequest $request, $id)
    {

        $post = Post::findOrFail($id);

        $post->update($request->all());

        return redirect('posts');

    }

}
