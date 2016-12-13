@extends('layouts.backend')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        CREATE NEW {{ strtoupper($type) }}
    </div>
    <div class="panel-body">
        @include('post._form-'.$type, ['url' => '/post', 'method' => 'POST'])
    </div>
</div>

@endsection
