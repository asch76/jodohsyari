@extends('layouts.register')

@section('form')
    @include('biodata._form', ['method' => 'POST', 'url' => '/biodata'])
@endsection
