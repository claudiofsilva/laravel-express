@extends('teste.template')

@section('title')
    Olá teste titulo
@endsection

@section('content')
    @foreach($posts as $post)
        <h1> {{ $post->title }} <i>{{ $post->created_at }}</i></h1>
        <p>{{ $post->content }}</p>
    @endforeach
@endsection
