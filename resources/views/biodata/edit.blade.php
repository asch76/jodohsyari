@extends('layouts.register')

@section('form')
    @include('biodata._form', ['method' => 'PUT', 'url' => '/biodata'])
@endsection
