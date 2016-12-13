@extends('layouts.post')

@section('title', 'Post')

@section('post-content')

<div class="panel panel-default">
    <div class="panel-heading">
        ARTIKEL & VIDEO TENTANG PERNIKAHAN
    </div>
    <div class="panel-body">
        @each('post._list', $posts, 'p')
    </div>
    @if ($posts->total() > 10)
    <div class="panel-footer text-center">
        {!! $posts->links() !!}
    </div>
    @endif
</div>

@endsection
