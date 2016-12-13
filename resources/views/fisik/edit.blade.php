@extends('layouts.register')

@section('form')
    @include('fisik._form', ['method' => 'PUT', 'url' => '/fisik'])
@endsection
