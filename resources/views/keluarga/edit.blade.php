@extends('layouts.register')

@section('form')
    @include('keluarga._form', ['method' => 'PUT', 'url' => '/keluarga'])
@endsection
