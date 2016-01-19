<h1> Comments: </h1>
@if(count($comments))
    <hr>

    @foreach($comments as $comment)

        @include('comments.partials.comment')

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
