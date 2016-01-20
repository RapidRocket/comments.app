@extends('layouts.app')

@section('content')

    <h1>Create New Post</h1>
    <hr>

    <!-- Posts Form Create -->
    {!! Form::open(['method' => 'POST', 'action' => ['CommentsController@store']]) !!}

    @include('comments.partials.form', ['submitButtonText' => 'Reply to a comment'])

    {!! Form::close() !!}

    @include('errors.list')


@stop