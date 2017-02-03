@extends('template.template')

@section('header-pagina')
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url({{ asset('/images/home-bg.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>{{ $tituloHome }}</h1>
                        <hr class="small">
                        <span class="subheading">{{ $subTitulo }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                @foreach($arrPost as $post)
                    <div class="post-preview">
                        <a href="#">
                            <h2 class="post-title">
                                {{ $post['titulo'] }}
                            </h2>
                            <h3 class="post-subtitle">
                                {{ $post['descricao'] }}
                            </h3>
                        </a>
                        <p class="post-meta">Posted by <a href="#">{{ $post['autor'] }}</a> on {{ $post['mes'] }} {{ $post['dia'] }}, {{ $post['ano'] }}</p>
                    </div>
                @endforeach
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection