@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <hr>
    <p>{{ $post->body  }}</p>

@stop

@section('comments')
    @include('comments.show')
@stop