@extends('app')

@section('content')

    <h1>Create New Post</h1>
    <hr>

    <!-- Posts Form Create -->
    {!! Form::open(array('url' => 'posts/')) !!}

    @include('posts.partials.form', ['submitButtonText' => 'Add Post'])

    {!! Form::close() !!}

    @include('errors.list')



@stop