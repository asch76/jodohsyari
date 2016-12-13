@extends('layouts.backend')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        EDIT USER
    </div>
    <div class="panel-body">
        @include('user._form', ['url' => '/user/'.$user->id, 'method' => 'PUT'])
    </div>
</div>

@endsection
