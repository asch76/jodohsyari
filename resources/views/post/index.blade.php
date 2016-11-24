@extends('layouts.app')

@section('title', 'Post')

@section('content')

<div class="row">
    <div class="col-md-4">
        @include('post._sidebar')
    </div>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                ARTIKEL & VIDEO TENTANG PERNIKAHAN
            </div>
            <div class="panel-body">
                <div class="row">
                    @each('post._list', $posts, 'p')
                </div>
            </div>
            @if ($posts->total() > 10)
            <div class="panel-footer text-center">
                {!! $posts->links() !!}
            </div>
            @endif
        </div>
    </div>
</div>

@endsection
