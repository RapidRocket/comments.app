<h1> Comments: </h1>
@if(count($comments))
    <hr>
{{ $count }}
    @foreach($comments as $comment)
        @if($comment->parent_id==null)
            <ul class="{{ $comment->id }}have_no_parents">
                @include('comments.partials.comment1')
            </ul>
        @else
            <ul class="have_parents">
                @include('comments.partials.comment1')
            </ul>
        @endif

    @endforeach
    {{--@include('comments.partials.comment1')--}}

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
