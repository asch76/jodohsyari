@extends('layouts.backend')

@section('content')

    <h3>EDIT USER</h3>
    <hr>

    @include('user._form', ['url' => '/user/'.$user->id, 'method' => 'PUT'])

@endsection
