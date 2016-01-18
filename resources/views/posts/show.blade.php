@extends('app')

@section('content')
    <h1>{{ $post->name  }}</h1>
    <p>{{ $post->body  }}</p>

@stop
@section('comments')
    <div class="comments">
        @if(count($comments))
            <hr>
            @foreach($comments as $comment)
                <div class="comment">
                    <a href="#">{{ $comment->user_id }}</a>
                    <a class="vote_up" href="#">Vote up</a>
                    <a class="vote_dwn" href="#">Vote down</a>
                    <span class="votes">{{ $comment->vote_up-$comment->vote_dwn }}</span>
                    <span class="comment_text">{{ $comment->body }}</span>
                    <a href="#">Reply</a>
                </div>
            @endforeach
            <hr>
            <div class="new-comment">
                <form role="form">
                    <div class="form-group">
                        <label for="email">Type your text:</label>
                        <input type="text" class="form-control" id="comment">
                    </div>
                    <button type="submit" class="btn btn-default">Send Comment</button>
                </form>
            </div>
        @else
            <hr>
            <div class="new-comment">
                <form role="form">
                    <div class="form-group">
                        <label for="email">Type your text:</label>
                        <input type="text" class="form-control" id="comment">
                    </div>
                    <button type="submit" class="btn btn-default">Send Comment</button>
                </form>
            </div>
        @endif
    </div>

@stop