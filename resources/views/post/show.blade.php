@extends('layouts.app')

@section('title', $post->title)
@section('image', 'http://www.jodohsyari.com/'.$post->img)
@section('imageSquare', 'http://www.jodohsyari.com/'.$post->img)
@section('description', str_limit(strip_tags($post->content), 250))

@section('content')

<div class="row">
    <div class="col-md-4">
        @include('post._sidebar')
    </div>
    <div class="col-md-8 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>{{ $post->title }}</h3>
                {{ $post->updated_at->diffForHumans() }} /
                <a href="/post/?kategori={{ $post->kategori }}">{{ $post->kategori }}</a> /
                {{ $post->view }} views
            </div>
            <div class="panel-body">

                @if ($post->video_url)
                    <iframe width="50%" height="300" src="https://www.youtube.com/embed/{{ $post->video_url }}" frameborder="0" allowfullscreen style="margin-left:25%;"></iframe>
                @elseif ($post->img && file_exists($post->img))
                    <img src="/{{ $post->img }}" alt="{{ $post->title }}" class="img-responsive" style="max-height:300px;margin-left:25%;" />
                @endif

                <br>

                {!! $post->content !!}

            </div>
            <div class="panel-footer">

                @include('layouts._share')

                <div class="pull-right">
                    {{ $post->updated_at->diffForHumans() }} /
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
                <div class="row">
                    @each('post._list', $terkait, 'p')
                </div>
            </div>
        </div>
        @endif
    </div>
</div>

@endsection
