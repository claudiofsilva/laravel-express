@extends('teste.template')

@section('title')
    Olá teste titulo
@endsection

@section('content')
    @foreach($posts as $post)
        <h1> {{ $post->title }} <i>{{ $post->created_at }}</i></h1>
        <p>{{ $post->content }}</p>

        <b>Tags:</b></br>
        <ul>
            @foreach($post->tags as $tag)
            <li>{{ $tag->name }}</li>
            @endforeach
        </ul>

        <h3>Comentários</h3>
        @foreach($post->comments as $comment)
            <b>Comentário: </b>{{ $comment->comment }}</br>
            <b>Nome: </b>{{ $comment->name }}</br>
            <b>email: </b>{{ $comment->email }}</br>
        @endforeach
    @endforeach
@endsection
