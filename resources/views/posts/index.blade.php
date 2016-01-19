@extends('layouts.app')

@section('content')
    <div class="posts">
        <h1>POSTS</h1>
        <hr>
        @foreach($posts as $post)

            <article>
                <a href="{{ action('PostsController@show',[$post->id]) }}">
                    <h1>{{ $post->title }}</h1>
                    <p>{{ $post->body }}</p>
                </a>
            </article>
            <hr>

        @endforeach
    </div>


@stop