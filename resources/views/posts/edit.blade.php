@extends('app')

@section('content')

    <h1>Edit Post</h1>
    <hr>

    <!-- Posts Form Update -->
    {!! Form::model($post, ['method' => 'PATCH', 'action' => ['PostsController@update', $post->id]]) !!}

    @include('posts.partials.form', ['submitButtonText' => 'Update Post'])

    {!! Form::close() !!}

    @include('errors.list')
    
@stop