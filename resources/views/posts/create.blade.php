@extends('app')

@section('content')

        <h1>Creaete New Post</h1>
        <hr>

    {!! Form::open(array('url' => 'posts/')) !!}

   <!-- Title Form Input -->
   <div class="form-group">
           {!! Form::label('title', 'Title:') !!}
           {!! Form::text('title',null, ['class' => 'form-control']) !!}
   </div>

    <!-- Body Form Input -->
    <div class="form-group">
            {!! Form::label('body', 'Body:') !!}
            {!! Form::text('body',null, ['class' => 'form-control']) !!}
    </div>
    
    <!-- Add Post Form Input -->
    <div class="form-group">
            {!! Form::submit('Add Post', ['class' => 'btn btn-primary form control']) !!}
    </div>
    
    {!! Form::close() !!}

@stop