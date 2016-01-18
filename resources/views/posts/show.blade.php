@extends('app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <hr>
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
            <!-- Add Comment Form Create -->
            {!! Form::open(array('url' => 'posts/')) !!}

            <!-- Text Form Input -->
            <div class="form-group">
                {!! Form::label('text', 'Text:') !!}
                {!! Form::text('text',null, ['class' => 'form-control']) !!}
            </div>

            <!-- Add Comment Form Input -->
            <div class="form-group">
                {!! Form::submit('Add Comment', ['class' => 'btn btn-primary form control']) !!}
            </div>

            {!! Form::close() !!}
        @else
            <hr>
            <!-- Add Comment Form Create -->
            {!! Form::open(array('url' => 'posts/')) !!}

                    <!-- Text Form Input -->
            <div class="form-group">
                {!! Form::label('text', 'Text:') !!}
                {!! Form::text('text',null, ['class' => 'form-control']) !!}
            </div>

            <!-- Add Comment Form Input -->
            <div class="form-group">
                {!! Form::submit('Add Comment', ['class' => 'btn btn-primary form control']) !!}
            </div>

            {!! Form::close() !!}
        @endif
    </div>

@stop