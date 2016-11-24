@extends('layouts.backend')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-right">
                <a href="/post/create"><i class="fa fa-plus"></i> New Post</a>
            </div>
            EDIT POST
        </div>
        <div class="panel-body">
            @include('post._form', ['url' => '/post/'.$post->id, 'method' => 'PUT'])
        </div>
    </div>

@endsection
