<div class="comments">
    <h1> Comments: </h1>
    @if(count($comments))
        <hr>
        @foreach($comments as $comment)
            <div class="comment">
                <a href="#">{{ $comment->user_id }}</a>
                <a class="vote_up" href="#">Vote up</a>
                <a class="vote_dwn" href="#">Vote down</a>
                <span class="votes">{{ $comment->vote_up-$comment->vote_dwn }}</span>
                <span class="comment_text">{{ $comment->body }}</span>
                <span class="created_at">{{ $comment->created_at->diffForHumans() }}</span>
                <a href="#">Reply</a>
            </div>
        @endforeach
        <hr>
        <!-- Add Comment Form Create -->
        {!! Form::open(array('url' => 'comments/')) !!}

        @include('comments.partials.form', ['submitCommentText'=>'Add Comment'])

        {!! Form::close() !!}

        @include('errors.list')

    @else
        <hr>
        <!-- Add Comment Form Create -->
        {!! Form::open(array('url' => 'comments/')) !!}

        @include('comments.partials.form', ['submitCommentText'=>'Add Comment'])

        {!! Form::close() !!}

        @include('errors.list')

    @endif
</div>