@extends('layouts.backend')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        CREATE NEW POST
    </div>
    <div class="panel-body">
        @include('post._form', ['url' => '/post', 'method' => 'POST'])
    </div>
</div>

@endsection
