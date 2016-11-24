@extends('layouts.backend')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            CREATE NEW USER
        </div>
        <div class="panel-body">
            @include('user._form', ['url' => '/user', 'method' => 'POST'])
        </div>
    </div>

@endsection
