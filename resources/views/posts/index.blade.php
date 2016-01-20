@extends('layouts.app')

@section('content')

    <h1>POSTS</h1>
    <hr>
    <div class="row">
        <div class="col-md-12">

            @foreach($posts as $post)
                <div class="col-md-4 col-sm-4">
                    <article class=" blog-teaser">
                        <header>
                            <img data-src="holder.js/100px180/?text=Image" alt="Image [100%x180]"
                                 src="data:image/svg+xml;charset=UTF-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22318%22%20height%3D%22180%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3C!--%0ASource%20URL%3A%20holder.js%2F100px180%2F%3Ftext%3DImage%0ACreated%20with%20Holder.js%202.8.2.%0ALearn%20more%20at%20http%3A%2F%2Fholderjs.com%0A(c)%202012-2015%20Ivan%20Malopinsky%20-%20http%3A%2F%2Fimsky.co%0A--%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%3C!%5BCDATA%5B%23holder_1525b573b46%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%5D%5D%3E%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1525b573b46%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%2F%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.2%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                 data-holder-rendered="true" style="height: 100%; width: 100%; display: block;">
                            <h3><a href="{{ action('PostsController@show',[$post->id]) }}">{{ $post->title }}</a></h3>
                            <span class="meta">{{ $post->created_at->diffForHumans() }}, by UserName</span>
                            <hr>
                        </header>
                        <div class="body">
                            {{ $post->body }}
                        </div>
                        <div class="clearfix">
                            <div class="btn-group btn-group-justified" role="group">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default">Delete</button>
                                </div>
                                <div class="btn-group" role="group">
                                    <a href="{{ action('PostsController@edit',[$post->id]) }}">
                                        <button type="button" class="btn btn-default">Edit</button>
                                    </a>
                                </div>
                                <div class="btn-group" role="group">
                                    <a href="{{ action('PostsController@show',[$post->id]) }}">
                                        <button type="button" class="btn btn-default">Read</button>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>


@stop