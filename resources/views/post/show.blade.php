@extends('layouts.post')

@section('title', $post->title)
@section('image', 'http://www.jodohsyari.com/'.$post->img)
@section('imageSquare', 'http://www.jodohsyari.com/'.$post->img)
@section('description', str_limit(strip_tags($post->content), 250))

@section('post-content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h3>{{ $post->title }}</h3>
        {{ $post->created_at->diffForHumans() }} /
        <a href="/post/?kategori={{ $post->kategori }}">{{ $post->kategori }}</a> /
        {{ $post->view }} views
    </div>
    <div class="panel-body">

        @if ($post->video_url)
            <iframe width="100%" height="300" src="https://www.youtube.com/embed/{{ $post->video_url }}" frameborder="0" allowfullscreen></iframe>
        @elseif ($post->img)
            <img src="{{ $post->img }}" alt="{{ $post->title }}" class="img-responsive" />
        @endif

        <br>

        {!! $post->content !!}

    </div>
    <div class="panel-footer">

        @include('layouts._share')

        <div class="pull-right">
            {{ $post->created_at->diffForHumans() }} /
            <a href="/post/?kategori={{ $post->kategori }}">{{ $post->kategori }}</a> /
            {{ $post->view }} views
        </div>

        <div class="clearfix">

        </div>
    </div>
</div>

@if ($terkait->count())
<div class="panel panel-default">
    <div class="panel-heading">
        ARTIKEL & VIDEO TERKAIT
    </div>
    <div class="panel-body">
        @each('post._list', $terkait, 'p')
    </div>
</div>
@endif

@endsection
