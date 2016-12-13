@extends('layouts.register')

@section('form')
    @include('keluarga._form', ['method' => 'POST', 'url' => '/keluarga'])
@endsection
