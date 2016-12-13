@extends('layouts.backend')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-right">
                <a href="/post/create?type={{ $type }}"><i class="fa fa-plus"></i> New {{ ucfirst($type) }}</a>
            </div>
            EDIT {{ strtoupper($type) }}
        </div>
        <div class="panel-body">
            @include('post._form-'.$type, ['url' => '/post/'.$post->id, 'method' => 'PUT'])
        </div>
    </div>

@endsection
